<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abouts = Abouts::all();
        return view('abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title1' => 'required',
            'deskripsi1' => 'required',
            'artikel1' => 'required',
            'artikel2' => 'required',
            'artikel3' => 'required',
            'title2' => 'required',
            'deskripsi2' => 'required',
        ]);
        Abouts::create($request->all());
        return redirect()->route('abouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $abouts = Abouts::findOrFail($id);
        return view('abouts.edit', compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title1' => 'required',
            'deskripsi1' => 'required',
            'artikel1' => 'required',
            'artikel2' => 'required',
            'artikel3' => 'required',
            'title2' => 'required',
            'deskripsi2' => 'required',
        ]);
        Abouts::findOrFail($id)->update([
            'title1' => $request->name,
            'title1' => $request->title1 ,
            'deskripsi1' => $request->deskripsi1,
            'artikel1' => $request->artikel1,
            'artikel2' => $request->artikel2,
            'artikel3' => $request->artikel3,
            'title2' => $request->title2,
            'deskripsi2' => $request->deskripsi2,

        ]);
        return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Abouts::findOrFail($id)->delete();
        return redirect()->back();
    }
}
