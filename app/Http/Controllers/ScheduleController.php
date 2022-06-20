<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Schedule;
use App\Models\Jnskonten;
use App\Models\Platform;
use App\Models\Hashtag;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtSchedule = Schedule::with('jns_konten','platform','hashtag')->get();
        return view('schedule.Data-schedule',compact('dtSchedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jnsk = Jnskonten::all();
        $plat = Platform::all();
        $hash = Hashtag::all();
        return view('schedule.Create-schedule', compact('jnsk','plat','hash'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Schedule::create([
            'jns_konten_id' => $request->jns_konten_id,
            'platform_id' => $request->platform_id,
            'hashtag_id' => $request->hashtag_id,
            'judul_konten' => $request->judul_konten,
            'caption' => $request->caption,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ]);
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect('data-schedule');
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
        $jnsk = Jnskonten::all();
        $plat = Platform::all();
        $hash = Hashtag::all();
        $editSchedule = Schedule::with('jns_konten','platform','hashtag')->findorfail($id);
        return view('schedule.Edit-schedule', compact('editSchedule','jnsk','plat','hash'));
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
        $jnsk = Jnskonten::all();
        $plat = Platform::all();
        $hash = Hashtag::all();
        $editSchedule = Schedule::with('jns_konten','platform','hashtag')->findorfail($id);
        $editSchedule->update($request->all());
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect('data-schedule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editSchedule = Schedule::findorfail($id);
        $editSchedule->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return back();
    }
}
