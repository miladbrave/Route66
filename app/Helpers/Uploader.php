<?php

namespace App\Helpers;



use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Uploader
{

    public static function upload($type, $file, $path, $thumbnail=[], $size=[], $aspectRatio=false, $optimize=100, $watermark=false)
    {
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        ini_set("post_max_size", '256MB');
        ini_set("upload_max_filesize", '256MB');
        ini_set("max_file_size", '256MB');
        ini_set("memory_limit", -1);
        $name = Str::slug(explode('.', $file->getClientOriginalName())[0]);
        $format = $file->getClientOriginalExtension();
        $filename = date('Ymd').time().$name.'.'.$format;
        if($type=='file'){
            $file = $file->move(public_path($path), $filename);
        }elseif($type=='storage'){
            $file = $file->move(storage_path($path), $filename);
        }elseif($type=='image'){
            $file = $file->move(public_path($path), $filename);
            $image = Image::make($file);
            $thumbnailImage = Image::make($file);
            if ($size!=[]) {
                if ($aspectRatio) {
                    $image->resize($size[0], $size[1], function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }else{
                    $image->resize($size[0], $size[1]);
                }
            }
            if($watermark){
                $image->insert(public_path($watermark), 'top-right', 10, 10);
            }
            $image->save(public_path($path).'/'.$filename, $optimize);
            if($thumbnail!=[]){
                if(!File::exists(public_path($path).'/thumbnails')) {
                    File::makeDirectory(public_path($path).'/thumbnails', $mode = 0755, true, true);
                }
                if ($aspectRatio) {
                    $thumbnailImage->resize($thumbnail[0], $thumbnail[1], function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    if($watermark){
                        $thumbnailImage->insert(public_path($watermark), 'top-right', 10, 10);
                    }
                    $thumbnailImage->save(public_path($path).'/'.'thumbnails/'.$filename);
                }else{
                    $thumbnailImage->resize($thumbnail[0], $thumbnail[1]);
                    if($watermark){
                        $thumbnailImage->insert(public_path($watermark), 'top-right', 10, 10);
                    }
                    $thumbnailImage->save(public_path($path).'/'.'thumbnails/'.$filename);
                }
            }
        }
        return $filename;
    }

    public static function delete($file, $path)
    {
        File::delete(public_path($path).'/'.$file);
        File::delete(public_path($path).'/'.'thumbnails/'.$file);
    }
}
