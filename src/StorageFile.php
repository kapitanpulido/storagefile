<?php

namespace kapitanpulido\StorageFile;

use Illuminate\Http\File;
use Storage;

class StorageFile
{
    public static function generateUniqueFileName($folder, $filename = null)
    {
      if($filename){
        $path = storage_path('app/public/'. $folder .'/');
        $file_temp = explode('.', $filename);
        $i = 0;

        while(file_exists($path.$filename)){
          $i++;
          $myfile = $file_temp[0] .'_'. $i;
          $filename = $myfile .'.'. $file_temp[1];
        }
      }

      return $filename;
    }

    public static function deleteFile($folder, $filename)
    {
      Storage::delete('public\\' . $folder .'\\'. $filename);
    }

    public static function saveFile($file, $folder, $filename)
    {
      Storage::putFileAs('public\\' . $folder, new File($file), $filename);
    }
}
