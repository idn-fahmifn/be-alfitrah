<?php

namespace App\Http\Controllers;

use App\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acara = Acara::all();
        return view ('acara.index', compact('acara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('thumbnail'))
        {
            $destination_path = 'public/images/thumbnails';
            $image = $request->file('thumbnail');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('thumbnail')->storeAs($destination_path, $image_name);
            $input['thumbnail'] = $image_name;
        }
        $now = date('Y-m-d');
        $input['tanggal'] = $now;
        Acara::create($input);
        return redirect('/acara');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function show(Acara $acara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function edit(Acara $acara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acara $acara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acara $acara)
    {
        //
    }
}
