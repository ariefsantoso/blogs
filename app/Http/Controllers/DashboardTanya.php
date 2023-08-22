<?php

namespace App\Http\Controllers;

use App\Models\Tanya;
use Illuminate\Http\Request;

class DashboardTanya extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tanya.index', [
            'tanyas' => Tanya::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tanya  $tanya
     * @return \Illuminate\Http\Response
     */
    public function show(Tanya $tanya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tanya  $tanya
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanya $tanya)
    {
        return view('dashboard.tanya.edit', [
            'tanyas' => $tanya
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tanya  $tanya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tanya $tanya)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required'
        ];

        if ($request->slug != $tanya->slug) {
            $rules['slug'] = 'required|unique:tentangs';
        }

        $validateData = $request->validate($rules);

        Tanya::where('id', $tanya->id)->update($validateData);

        return redirect('/dashboard/tanya')->with('success', ' has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tanya  $tanya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tanya $tanya)
    {
        //
    }
}
