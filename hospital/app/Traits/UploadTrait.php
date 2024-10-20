<?php
namespace App\Traits;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadTrait {
    public function verifyAndStoreImage(Request $request , $inputname , $foldername, $disk , $imageable_id , $imageable_type){
        if ($request->hasFile($inputname)){

            //Check If The Image Is Valid
            if(!$request->file($inputname)->isValid()){
                flash('Invalid Image')->error()->important();
                return redirect()->back()->withInput()->withErrors(['image' => 'Invalid Image']);
            }
            
            $photo = $request->file($inputname);
            $name = Str::slug($request->input('name'));
            $date = date('Ymd_His'); // Get the current date and time
            $filename = $name . '_' . $date . '.' . $photo->getClientOriginalExtension();
            
            //Insert Image
            $image = new Image();
            $image->filename = $filename;
            $image->imageable_id = $imageable_id;
            $image->imageable_type = $imageable_type;
            $image->save();

            //Store the image file
            return $request->file($inputname)->storeAs($foldername, $filename, $disk);
            
            return null;
        }
    }

    public function verifyAndStoreImageForeach($photo, $foldername, $disk, $imageable_id, $imageable_type)
    {
        $name = Str::slug(request()->input('name'));  
        $date = date('Ymd_His');
        $uniqueId = uniqid(); 
        $filename = $name . '_' . $uniqueId . '_' . $date . '.' . $photo->getClientOriginalExtension();
    
        $Image = new Image();
        $Image->filename = $filename;
        $Image->imageable_id = $imageable_id;
        $Image->imageable_type = $imageable_type;
        $Image->save();
    
        return $photo->storeAs($foldername, $filename, $disk);
    }
    

    public function Delete_attachment($disk, $path, $id) {
       
        Storage::disk($disk)->delete($path);
        
        Image::where('imageable_id', $id)->delete();
    }
    
}

