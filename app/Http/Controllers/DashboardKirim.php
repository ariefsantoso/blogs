<?php

namespace App\Http\Controllers;

use App\Models\Kirim;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardKirim extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kirim.index', [
            'kirims' => Kirim::all()
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
     * @param  \App\Models\Kirim  $kirim
     * @return \Illuminate\Http\Response
     */
    public function show(Kirim $kirim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kirim  $kirim
     * @return \Illuminate\Http\Response
     */
    public function edit(Kirim $kirim)
    {
        // dd($kirim);
        return view('dashboard.kirim.edit', [
            'kirims' => $kirim
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kirim  $kirim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kirim $kirim)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required'
        ];

        if ($request->slug != $kirim->slug) {
            $rules['slug'] = 'required|unique:tentangs';
        }

        $validateData = $request->validate($rules);

        Kirim::where('id', $kirim->id)->update($validateData);

        return redirect('/dashboard/kirim')->with('success', ' has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kirim  $kirim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kirim $kirim)
    {
        //
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Kirim::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
