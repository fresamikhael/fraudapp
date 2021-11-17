<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\OutstandingModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\OutstandingRequest;

class OutstandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datenow = date('d-M-Y',strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = OutstandingModel::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'OTS' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'OTS' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'OTS' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'OTS' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'OTS' . date('dmy') . $item;
            }
        }

        return view('pages.user.litigation.outstandingInput', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow
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
    public function store(OutstandingRequest $request)
    {
        $data = $request->all();

        $rekap_data = $request->file('rekap_data')->getClientOriginalName();
        $bukti_dokumen = $request->file('bukti_dokumen')->getClientOriginalName();
        $perjanjian = $request->file('perjanjian')->getClientOriginalName();
        $bukti_penagihan = $request->file('bukti_penagihan')->getClientOriginalName();
        $disposisi = $request->file('disposisi')->getClientOriginalName();
        $dokumen_lainnya = $request->file('dokumen_lainnya')->getClientOriginalName();

        $data['rekap_data'] = $request->file('rekap_data')->storeAs('outstanding/files/rekap_data',$rekap_data,'public');
        $data['bukti_dokumen'] = $request->file('bukti_dokumen')->storeAs('outstanding/files/bukti_dokumen',$bukti_dokumen,'public');
        $data['perjanjian'] = $request->file('perjanjian')->storeAs('outstanding/files/perjanjian',$perjanjian,'public');
        $data['bukti_penagihan'] = $request->file('bukti_penagihan')->storeAs('outstanding/files/bukti_penagihan',$bukti_penagihan,'public');
        $data['disposisi'] = $request->file('disposisi')->storeAs('outstanding/files/disposisi',$disposisi,'public');
        $data['dokumen_lainnya'] = $request->file('dokumen_lainnya')->storeAs('outstanding/files/dokumen_lainnya',$dokumen_lainnya,'public');

        $data['user_id'] = Auth::user()->id;

        OutstandingModel::create($data);
        return view('pages.user.litigation.index');
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
