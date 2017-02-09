<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Chapter;

class ChapterController extends Controller
{
    public function store(Request $request)
    {
    	if (Chapter::create($request->all()))
    	{
    		return redirect()->back();
    	} else {
    		return redirect()->back()->withInput()->withErrors('Failed!');
    	}
    }
}
