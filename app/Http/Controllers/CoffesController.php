<?php

namespace App\Http\Controllers;

use App\Models\Coffes;
use Illuminate\Http\Request;

class CoffesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coffes = Coffes::all();
        return view('coffes.index', compact('coffes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('coffes.create');
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
            Coffes::create(
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


        return redirect()->route('coffes.index');
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
        $coffes = Coffes::findOrFail($id);
        return view('coffes.edit', compact('coffes'));
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
            'foto' => 'required',
            'foto.*' => 'mimes:jpg,jpeg,png|max:2000',
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',

        ]);
        if ($request->hasfile('foto')) {
            $filename = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('foto')->getClientOriginalName());
            $request->file('foto')->move(public_path('mainpage/img/gallery'), $filename);
            Coffes::findOrFail($id)->update([
                'foto' =>  $filename,
                'judul' =>  $request->judul,
                'deskripsi' =>  $request->deskripsi,
                'harga' =>  $request->harga
            ]);
            echo 'Success';
        } else {
            echo 'Gagal';
        }
        
        return redirect()->route('coffes.index');
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
        Coffes::findOrFail($id)->delete();
        return redirect()->back();
    }
}
