<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Hashtag;

class HashtagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtHashtag = Hashtag::all();
        return view('hashtag.Data-hashtag', compact('dtHashtag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hashtag.Create-hashtag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hashtag::create([
            'kd_hashtag' => $request->kd_hashtag,
            'hashtag' => $request->hashtag,
        ]);
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect('data-hashtag');
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
        $editHashtag = Hashtag::findorfail($id);
        return view('hashtag.Edit-hashtag', compact('editHashtag'));
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
        $editHashtag = Hashtag::findorfail($id);
        $editHashtag->update($request->all());
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect('data-hashtag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editHashtag = Hashtag::findorfail($id);
        $editHashtag->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return back();
    }
}
