<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Novel;

class NovelController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novels = Novel::where('title', '0')->get();
        return view('novel.novel', [
            'novels' => $novels,
        ]);
    }

    public function demo(Request $request)
    {
        $this->validate($request, [
            'search' => 'required',
        ]);

        $novels = Novel::where('title', $request->search)->get();
        return view('novel.novel', [
            'novels' => $novels,
        ]);
    }

    public function show($id)
    {
        return view('novel.index')->withNovel(Novel::with('hasManyChapters')->find($id));
    }
}
