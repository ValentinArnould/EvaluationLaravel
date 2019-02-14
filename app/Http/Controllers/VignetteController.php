<?php

namespace App\Http\Controllers;

use App\Vignette;
use Illuminate\Http\Request;

class VignetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vignettes = Vignette::all();
        return view('accueil',['vignettes'=>$vignettes]);
    }

    public function adminIndex() {
        return view('admin.admin');
    }

    public function adminVignettes() {
        $vignettes = Vignette::all();
        return view('admin.vignettes',['vignettes'=>$vignettes]);
    }

    public function read() {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
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
        $vignette = new Vignette;
        $vignette->legende = $request->legende;
        $vignette->description = $request->description;
        $vignette->url = $request->url;
        //$vignette->affichable = $request->affichable;
        $vignette->save();
        return redirect('/admin/vignettes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function show(Vignette $vignette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function edit(Vignette $vignette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vignette $vignette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vignette = Vignette::find($id);
        $vignette->delete();
        return redirect('/admin/vignettes');
    }
}
