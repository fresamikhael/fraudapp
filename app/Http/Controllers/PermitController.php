<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermitRequest;
use App\Models\PermitModel;
use Illuminate\Http\Request;

class PermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.permit.perizinanInput');
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
    public function store(PermitRequest $request)
    {
        $dateNow = date('Y-m-d') . ' 00:00:00';
            $check_user = PermitModel::select('*')
                ->whereDate('created_at', '>=', $dateNow)
                ->count();

            if ($check_user === 0) {
                $permit_id = 'PB' . date('dmy') . '0001';
            } else {
                $item = $check_user + 1;
                if ($item < 10) {
                    $permit_id = 'PB' . date('dmy') . '000' . $item;
                } elseif ($item >= 10 && $item <= 99) {
                    $permit_id = 'PB' . date('dmy') . '00' . $item;
                } elseif ($item >= 100 && $item <= 999) {
                    $permit_id = 'PB' . date('dmy') . '0' . $item;
                } elseif ($item >= 1000 && $item <= 9999) {
                    $permit_id = 'PB' . date('dmy') . $item;
                }
            }

        $dokumen1 = $request->file('dokumen1')->getClientOriginalName();
        $dokumen2 = $request->file('dokumen2')->getClientOriginalName();
        $dokumen3 = $request->file('dokumen3')->getClientOriginalName();
        $disposisi = $request->file('disposisi')->getClientOriginalName();

        $dokumen1 = $request->file('dokumen1')->storeAs('outstanding/files/dokumen1',$dokumen1,'public');
        $dokumen2 = $request->file('dokumen2')->storeAs('outstanding/files/dokumen2',$dokumen2,'public');
        $dokumen3 = $request->file('dokumen3')->storeAs('outstanding/files/dokumen3',$dokumen3,'public');
        $disposisi = $request->file('disposisi')->storeAs('outstanding/files/disposisi',$disposisi,'public');

        PermitModel::create([
            'id_permit' => $permit_id,
            'tipe_perizinan' => $request->tipe_perizinan,
            'lokasi' => $request->lokasi,
            'spesifikasi' => $request->spesifikasi,
            'alasan' => $request->alasan,
            'disposisi' => $disposisi,
            'dokumen1' => $dokumen1,
            'dokumen2' => $dokumen2,
            'dokumen3' => $dokumen3,
        ]);

        return view('litigation.litigationHome');
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
    }
}
