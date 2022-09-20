<?php

namespace App\Http\Controllers;

use App\Models\Rdv;
use App\Models\Patient;
use Illuminate\Http\Request;

class RdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back-end.pages.rendez_vous.index ', [
            'patients' => Patient::latest()->get(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            return view('back-end.pages.rendez_vous.create');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rdv::create([
            'designation' => $request->designation,
            'date' => $request->date,

         ]);
        return redirect()->route('gestion_rendez_vous.index');
    }

/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    Public function show($id)
    {
        return view('back-end.pages.rendez_vous.show', [
            'finds' => Patient::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back-end.pages.rendez_vous.edit', [
            'finds' => Rdv::find($id),
        ]);
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
        $rdv = Rdv::find($id);
        $rdv->update($request->all());

        return redirect()->route('gestion_rendez_vous.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $rdv = Rdv::find($id);
        $rdv->delete();

        return redirect()->route('gestion_rendez_vous.index');
    }
}
