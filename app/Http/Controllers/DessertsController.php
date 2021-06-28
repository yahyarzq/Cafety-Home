<?php

namespace App\Http\Controllers;

use App\Models\Desserts;
use Illuminate\Http\Request;

class DessertsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $desserts = Desserts::all();
        return view('desserts.index', compact('desserts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('desserts.create');
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
            'foto' => 'required',
            'foto.*' => 'mimes:jpg,jpeg,png|max:2000',
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',

        ]);
        if ($request->hasfile('foto')) {
            $filename = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('foto')->getClientOriginalName());
            $request->file('foto')->move(public_path('mainpage/img/gallery'), $filename);
            Desserts::create(
                [
                    'foto' => $filename,
                    'judul' =>  $request->judul,
                    'deskripsi' =>  $request->deskripsi,
                    'harga' =>  $request->harga
                ]
            );
            echo 'Success';
        } else {
            echo 'Gagal';
        }


        return redirect()->route('desserts.index');
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
        $desserts = Desserts::findOrFail($id);
        return view('desserts.edit', compact('desserts'));
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
            'foto.*' => 'mimes:jpg,jpeg,png|max:2000',
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',

        ]);
        if ($request->hasfile('foto')) {
            $filename = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('foto')->getClientOriginalName());
            $request->file('foto')->move(public_path('mainpage/img/gallery'), $filename);
            Desserts::findOrFail($id)->update([
                'foto' =>  $filename,
                'judul' =>  $request->judul,
                'deskripsi' =>  $request->deskripsi,
                'harga' =>  $request->harga
            ]);
            echo 'Success';
        } else {
            echo 'Gagal';
        }
        
        return redirect()->route('desserts.index');
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
        Desserts::findOrFail($id)->delete();
        return redirect()->back();
    }
}
