<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function fileUpload(Request $request){
        if($request->isMethod('post')){
            $file = $request->file('file');
            $file->move(public_path() . '../../../uploads', 'newname');
        }
    }
}
