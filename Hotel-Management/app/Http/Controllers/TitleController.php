<?php

namespace App\Http\Controllers;

use App\Title;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Http\Requests\TableRequest;
use Input,File;
use DB;     
use Session;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = Title::select('id', 'label')->get()->toArray();
        return view('title/index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('title/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = new Title; // ten model
        $title->label = $request->label;
        $title->save();
        return redirect()->route('titles.index')->with('success','Add success!'); // Lay dia chi cua phan as ben route
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        return view('title/show',compact('title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        return view('title/edit',compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {
        $title->label = $request->label;
        $title->save();
        return redirect()->route('titles.index')->with('success','Edit success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title)
    {
        $title->delete();
        return back()->with('success','Delete success!');
    }
}