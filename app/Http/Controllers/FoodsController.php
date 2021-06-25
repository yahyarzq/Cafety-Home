<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $foods = Foods::all();
        return view('foods.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('foods.create');
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
            Foods::create(
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


        return redirect()->route('foods.index');
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
        $foods = Foods::findOrFail($id);
        return view('foods.edit', compact('foods'));
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
            Foods::findOrFail($id)->update([
                'foto' =>  $filename,
                'judul' =>  $request->judul,
                'deskripsi' =>  $request->deskripsi,
                'harga' =>  $request->harga
            ]);
            echo 'Success';
        } else {
            echo 'Gagal';
        }
        
        return redirect()->route('foods.index');
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
        Foods::findOrFail($id)->delete();
        return redirect()->back();
    }
}
