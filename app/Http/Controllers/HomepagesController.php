<?php

namespace App\Http\Controllers;

use App\Models\Homepages;
use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $homepages = Homepages::all();

        return view('homepages.index', compact('homepages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('homepages.create');
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
            'foto1' => 'required',
            'foto2' => 'required',
            'title2' => 'required',
            'deskripsi2' => 'required',
            'fotter' => 'required'
        ]);
        Homepages::create($request->all());
        return redirect()->route('homepages.index');
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
        $homepages = Homepages::findOrFail($id);
        return view('homepages.edit', compact('homepages'));
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
            'foto1' => 'required',
            'foto2' => 'required',
            'title2' => 'required',
            'deskripsi2' => 'required',
            'fotter' => 'required'
        ]);
        Homepages::findOrFail($id)->update([
            'title1' => $request->title1,
            'deskripsi1' => $request->deskripsi1,
            'foto1' => $request->foto1,
            'foto2' => $request->foto2,
            'title2' => $request->title2,
            'deskripsi2' => $request->deskripsi2,
            'fotter' => $request->fotter
        ]);
        return redirect()->route('homepages.index');
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
        Homepages::findOrFail($id)->delete();
        return redirect()->back();
    }
}
