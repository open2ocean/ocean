<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FileUploadController extends Controller
{
    //
    static public function upload(Request $request,$file,$targetpath,$customname,$allowableTypes,$sizeLimit=20480){
    	
        $filename = $file['name'];
        // Get the original filename
        $originalFilename = basename($filename);

    	$extension = strtolower(pathinfo($originalFilename, PATHINFO_EXTENSION)) ;

        $allowableTypes = ['png','jpg','jpeg','webp'];

        if(!in_array($extension, $allowableTypes)){

            return ['error'=>1,'msg'=>'Unsupported File Type'];
        }
        if($file['size'] > $sizeLimit){
            return ['error'=>1,'msg'=>'Too Large File'];       
        }
    	
        // Specify the target directory where you want to store the uploaded file
        $targetDirectory = $targetpath;


        

        // Define the custom name you want to use
        $customName = $customname.".".$extension;

        // Define the target path including the custom name
        $targetPath = $targetDirectory . $customName;

        // Move the uploaded file to the target directory with the custom name
        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            return ['error'=>0,'msg'=>'Uploaded Successfully',"filename"=>$customName];
        } else {
            return ['error'=>1,'msg'=>'Failed to upload file'];
        }

        
    }

    static public function getMasterProfilePic(Request $request){

        $master_id = $request->session()->get('master_user_id');
        $master = DB::table('master_users')
            ->where(["id"=>$master_id])
            ->get();

        if(count($master) == 0){
            return false;
        }    
        $master = $master[0];
        return $master->profile_pic;

    }
}
