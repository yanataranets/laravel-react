<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller {
    public function index() {
        return view('home');
    }
    public function upload(Request $request)
    {
        // загрузка файла
        if ($request->isMethod('post') && $request->file('file')) {

            $file = $request->file('file');
            $upload_folder = 'app/public';
            $filename = $file->getClientOriginalName(); // image.jpg

            Storage::putFileAs($upload_folder, $file, $filename);

        }
    }
}
