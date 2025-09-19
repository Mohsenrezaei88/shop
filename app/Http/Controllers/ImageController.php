<?php

namespace App\Http\Controllers;

use App\Models\Image;
use File;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function save(Request $request)
    {
        if ($request->hasFile('file')) {
            $files = $request->file('file');
            $uploadedFiles = [];
            $filename = session("files_id") . '_' . $files->getClientOriginalName();
            $path = "images/uploads/" . $filename;
            if (File::exists(public_path($path))) {
                return response()->json([
                    'status' => 'error',
                    "url" => $path,
                    'message' => 'فایل قبلا ارسال شده'
                ], 409);
            }
            $files->move(public_path('images/uploads'), $filename);
            $uploadedFiles[] = $path;
            Image::create([
                "url" => $path,
                "file_id" => session("files_id")
            ]);
            return response()->json([
                'status' => 'success',
                'files' => $uploadedFiles
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'هیچ فایلی ارسال نشده است.'
        ], 400);
    }
    public function delete(Request $request)
    {
        if ($request->new != 1) {
            $image = Image::where("url", $request->image);
            File::delete(public_path($image->first()->url));
            $image->delete();
            return response()->json([
                "status" => "success",
                "message" => "فایل حذف شد"
            ], 200);
        } else {
            $url = "images/uploads/" . session("files_id") . "_" . $request->image;
            $image = Image::where("url", $url);
            File::delete(public_path($image->first()->url));
            $image->delete();
            return response()->json([
                "status" => "success",
                "message" => "فایل حذف شد"
            ], 200);
        }
    }
}
