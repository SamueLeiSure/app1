<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Chapter;

class ChapterController extends Controller
{
    public function show($id)
    {
    	return view('novel.show')->withChapter(Chapter::find($id));
    }
}
