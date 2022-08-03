<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class FileController extends Controller
{
    public function index()
    {
        return view('index', [
            "videos" => Video::all()
        ]);
    }

    public function upload()
    {
        return view('upload');
    }

    public function uploadVideo(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $video = new Video;
        $video->name = $request->title;

        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('videos', ['disk' => 'public']);
            $video->link = $path;
        }

        $video->save();

        return redirect('/')->with("success", "Berhasil diupload");
    }

    public function video($id)
    {
        $video = Video::find($id);
        
        return view('detail', [
            "video" => $video
        ]);
    }
}
