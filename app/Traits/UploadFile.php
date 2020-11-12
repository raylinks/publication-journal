<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait UploadFile
{
    public function upload(UploadedFile $file, $folder, $disk = null)
    {
        if (! $file instanceof  UploadedFile) {
            return false;
        }

        $fileNameWithExt = $file->getClientOriginalName();

        //get just the filename
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        $extension = $file->getClientOriginalExtension();

        $randomString = Str::random(6);

        $fileNameToStore = $fileName.'_'.$randomString.'_'.time().'.'.$extension;

        if (is_null($disk)) {
            $disk = config('patricia.disk_folder');
        }

        $file->storeAs($folder, $fileNameToStore, $disk);

        return $fileNameToStore;
    }
}
