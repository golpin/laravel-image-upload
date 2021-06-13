<?php

namespace App\Http\Controllers;

use App\Models\image_upload;
use Illuminate\Http\Request;
use App\Http\Requests\imageRequest;

class imageUploadController extends Controller
{
    public function index()
    {
		$images = image_upload::all();
        return view('index',['images' => $images ]);
	}

	public function create()
    {
        return view('create_form');
        
    }

	public function store(imageRequest $request)
    {
        $newImage = new image_upload();
        $newImage->title =$request->input('title');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->storeAs('public/images',$filename); 
            $newImage->image = $filename;
        }
        $newImage->save();

        \Session::flash('err_msg','画像を登録しました');
        return redirect(route('index'));
    }

	public function delete($id)
    {
        $imageDelete = image_upload::find($id);
        $imageDelete -> delete();

        \Session::flash('err_msg', '画像を削除しました。');
        return redirect(route('index'));
    }
}
