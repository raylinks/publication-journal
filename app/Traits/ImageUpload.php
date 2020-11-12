<?php

namespace App\Traits;

trait ImageUpload
{

    public function uploadImages($query)
    {
        //get the filename with ext
        $fileNameWithExt = $query->getClientOriginalName();


        //get just the filename
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);


        //get just the ext
        $extension = $query->getClientOriginalExtension();


        // create filename to store
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;


        //upload image
        $query->storeAs('public/image', $fileNameToStore);

        return $fileNameToStore;
    }
}
