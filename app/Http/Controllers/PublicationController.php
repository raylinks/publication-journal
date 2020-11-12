<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Support\Facades\Storage;
use App\traits\ImageUpload;
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
        $journal = Publication::all();
        

        return view('view-publication', compact('journal'));
    }

    public function download($id)
    {
        
        $publications = Publication::find($id);
       // dd($publications->image);
       // return Storage::download($publications->path);
       /// return Storage::disk('public')->download($publications->path);
       return Storage::disk('public')->download($publications->image);
        //return Storage::download(storage_path('app/public/image/'.$publications->image), $publications->original_name);
        

       // return view('admin.publications.index', compact('publications'));
    }

    /**
     * retrieve a business.
     *
     * @param \App\Models\PatriciaBusiness\Business $business
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    // public function show(Business $business)
    // {
    //     $business = Business::with(['credentials', 'owner', 'services'])->find($business->id);
    //     $services = Service::all();

    //     return view('admin.business.show', compact('business', 'services'));
    // }

    /**
     * creates a business.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
      //dd($request->hasFile('image'));
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:3|max:191',
            'image' => 'required|file|max:12048|mimes:jpeg,jpg,bmp,png,gif,svg,pdf',
            'year' => 'nullable|string',
            'author' => 'required|string|min:6',
        ],[
            'image.required' => 'An image needs to be uploaded'
        ]);

        if ($request->hasFile('image') ) {
            $file = $request->file('image');
                $fileNameToStore = $this->uploadImages($file);

                Publication::create([
                    'title' => $request->title,
                    'author' => $request->author,
                    'year' => $request->year,
                    'image' => $fileNameToStore,
        
    
                ]);
        
        } else {
          dd('lov');
        }

      

        return redirect(route('index'))->with([
            'type' => 'success',
            'message' => 'Business saved successfully.',
        ]);
    }

    private function createUser(array $data): User
    {
        return Publication::create([
            'title' => $data['email'],
            'author' => now(),
            'year' => Hash::make($data['password']),
            'image' => $fileNameToStore,
            'subject' => $data['is_developer'],
        ]);
    }

    /**
     * returns page for creating businesses.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCreate()
    {
    
        return view('admin.publications.create');
    }

    /**
     * returns page for updating businesses.
     *
     * @param \App\Models\Business $business
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showUpdate(Business $business)
    {
        $countries = Country::all();

        return view('admin.business.update', compact('business', 'countries'));
    }

    /**
     * updates a business.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Business $business
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, Business $business)
    {
        $validator = Validator::make($request->all(), [
            'business_name' => 'required|string|min:3|max:191',
            'country' => 'nullable|integer|exists:patricia_business.countries,id',
            'is_developer' => 'nullable|boolean',
            'password' => 'required|string|min:6',
            'email' => 'required|email',
        ]);

        $business->update([
            'name' => ucfirst($request->business_name),
        ]);

        $business->owner()->update([
            'email' => $request->email,
            'password' => Hash::make($request->password) ?? $business->owner()->password,
            'country_id' => $request->country,
            'is_developer' => $request->input('is_developer', false),
        ]);

        return redirect(route('businesses.show', $business->id))->with([
            'type' => 'success',
            'message' => 'Business Updated successfully.',
        ]);
    }

    /**
     * toggles a business status.
     *
     * @param \App\Models\Business $business
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toggleBusinessStatus(Business $business)
    {
        $business->status = $business->status === Business::STATUSES['ACTIVE'] ? Business::STATUSES['INACTIVE'] : Business::STATUSES['ACTIVE'];
        $business->save();

        return redirect()->back()->with([
            'type' => 'success',
            'message' => 'Business updated successfully.',
        ]);
    }

    

    /**
     * creates a Business for user  .
     *
     * @param User $user
     * @param array $data
     *
     * @return App\Models\PatriciaBusiness\Business;
     */
    private function createBusinessForUser(User $user, array $data): Business
    {
        $businessData = [
            'name' => ucfirst($data['business_name']),
            'status' => Business::STATUSES['ACTIVE'],
            'code' => Business::generateBusinessCode(),
            'created_by' => $user->id,
        ];

        $adminRoleId = Role::where('name', 'admin')->value('id');
        $business = $user->memberBusinesses()->create($businessData, ['role_id' => $adminRoleId]);

        $business->load('teamMembers');

        return $business;
    }
}
