<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\JnsKonten;

class JnsKontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtJnsKonten = JnsKonten::all();
        return view('jnskonten.Data-jnskonten', compact('dtJnsKonten'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jnskonten.Create-jnskonten');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JnsKonten::create([
            'kd_jns_konten' => $request->kd_jns_konten,
            'jns_konten' => $request->jns_konten,
        ]);
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect('data-jenis-konten');
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
        $editJnsKonten = JnsKonten::findorfail($id);
        return view('jnskonten.Edit-jnskonten', compact('editJnsKonten'));
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
        $editJnsKonten = JnsKonten::findorfail($id);
        $editJnsKonten->update($request->all());
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect('data-jenis-konten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editJnsKonten = JnsKonten::findorfail($id);
        $editJnsKonten->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return back();
    }
}
