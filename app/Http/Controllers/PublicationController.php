<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Support\Facades\Storage;
use App\Traits;
use App\Traits\ImageUpload;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class PublicationController extends Controller
{
    use ImageUpload;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $publications = Publication::all();
        

        return view('admin.publications.index', compact('publications'));
    }

    public function viewPublication()
    {
       if(request()->query('year')){
        $journal = Publication::where(['status' => 'active', 'year' =>  request()->query('year')])->get();

        return view('view-publication', compact('journal'));

       }else{
        $journal = Publication::all();

        return view('view-publication', compact('journal'));
       }  
    }

    public function search(Request $request){
        // check if ajax request is coming or not
        if($request->ajax()) {
            // select country name from database
            $data = Publication::where('title', 'LIKE', $request->publication.'%')
                ->get();
            // declare an empty array for output
            $output = '';
            // if searched countries count is larager than zero
            if (count($data)>0) {
                // concatenate output to the array
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                // loop through the result array
                foreach ($data as $row){
                    // concatenate output to the array
                    $output .= '<li class="list-group-item">'.$row->title.'</li>';
                }
                // end of output
                $output .= '</ul>';
            }
            else {
                // if there's no matching results according to the input
                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }
            // return output result array
            return $output;
        }
    }
    

    public function download($id)
    {    
        $publications = Publication::find($id);
       return Storage::disk('public')->download($publications->image);
    
    }

  
    public function show($id)
    {
        $publication = Publication::find($id);

        return view('admin.publications.show', compact('publication'));
    }

   
    public function store(Request $request)
    {
      //dd($request->hasFile('image'));
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:3|max:191',
            'image' => 'required|file|max:12048|mimes:jpeg,jpg,bmp,png,gif,svg,pdf',
            'picture' => 'required|file|max:12048|mimes:jpeg,jpg,bmp,png,gif,svg,pdf',
            'year' => 'nullable|string',
            'author' => 'required|string|min:6',
        ],[
            'image.required' => 'An image needs to be uploaded'
        ]);

       // $imageResponse = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
        $pictureResponse = cloudinary()->upload($request->file('picture')->getRealPath())->getSecurePath();


        if ($request->hasFile('image') ) {
            $file = $request->file('image');
         
                $fileNameToStore = $this->uploadImages($file);

                Publication::create([
                    'title' => $request->title,
                    'author' => $request->author,
                    'year' => $request->year,
                    'image' => $fileNameToStore,
                    'status' => "inactive",
                    "picture" => $pictureResponse
        
                ]);
        }


        return redirect(route('index'))->with([
            'type' => 'success',
            'message' => 'Publication saved successfully.',
        ]);
    }

    private function createUser(array $data): User
    {
        return Publication::create([
            'title' => $data['email'],
            'author' => now(),
            'year' => Hash::make($data['password']),
            'image' => $fileNameToStore,
        ]);
    }


    public function showCreate()
    {
        return view('admin.publications.create');
    }


    public function showUpdate(Business $business)
    {
        $countries = Country::all();

        return view('admin.business.update', compact('business', 'countries'));
    }


    public function update(Request $request,Publication $publication)
    {
       // dd($publication);
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:3|max:191',
            'author' => 'required|string|min:3|max:191',
            'year' =>'required|string|min:3|max:191',
            'image' => 'required|file|max:12048|mimes:jpeg,jpg,bmp,png,gif,svg,pdf',
        
        ]);

        $publication->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'image' => $request->image
        ]);
        return redirect(route('show', $publication->id))->with([
            'type' => 'success',
            'message' => 'Publication Updated successfully.',
        ]);
    }

    public function publicationCount(){

        $counts = Publication::whereIn('year', ['2018', '2019', '2020'])->get();

        $response = [
            "2018" => $counts->where('year', "2018")->count(),
            "2019" => $counts->where('year', "2019")->count(),
            "2020" => $counts->where('year', "2020")->count()
        ];

        return view('publications', compact('response'));
    }

    public function togglePublicationStatus(Publication $publication)
    {
    
        $publication->status = $publication->status === Publication::STATUSES['ACTIVE'] ? Publication::STATUSES['INACTIVE'] : Publication::STATUSES['ACTIVE'];
         $publication = $publication->save();

       
         return redirect()->back()->with([
            'type' => 'success',
            'message' => 'Business updated successfully.',
        ]);

       
    }

    public function article($id)
    {
        $publication = Publication::find($id);
       // dd($publication);
       //$aa = Storage::disk('public')->path($publication->picture);
      // return response()->file($pathToFile);
     
        return view('view-article', compact('publication'));
    }

    public function deletePublication($id)
    {
              $deletePub = Publication::find($id);
              $deletePub->delete();         

              return redirect()->back()->with('danger', 'Publication Deleted');
                      
    }

}
