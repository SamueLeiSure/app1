<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Novel;

class NovelController extends Controller
{
    public function index()
    {
    	return view('admin.novel.novel')->withNovels(Novel::all());
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
    	]);

    	$novel = new Novel;
    	$novel->title = $request->get('title');
    	$novel->auther = $request->get('auther');

    	if ($novel->save()) {
    		return redirect('/admin/novel');
    	} else {
    		return redirect()->back()->withInput()->withErrors('Failed!');
    	}
    }

    public function show($id)
    {
        return view('admin.novel.chapter')->withNovel(Novel::with('hasManyChapters')->find($id));
    }
}
