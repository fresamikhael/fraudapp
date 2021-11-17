<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\OtherModel;
use Illuminate\Http\Request;
use App\Http\Requests\OtherRequest;
use Illuminate\Support\Facades\Auth;

class OtherController extends Controller
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
        $check_user = OtherModel::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'OTH' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'OTH' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'OTH' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'OTH' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'OTH' . date('dmy') . $item;
            }
        }

        return view('pages.user.litigation.otherInput', [
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
    public function store(OtherRequest $request)
    {
        $data = $request->all();

        $dokumen = $request->file('dokumen')->getClientOriginalName();
        $bukti1 = $request->file('bukti1')->getClientOriginalName();
        $bukti2 = $request->file('bukti2')->getClientOriginalName();
        $bukti3 = $request->file('bukti3')->getClientOriginalName();
        $disposisi = $request->file('disposisi')->getClientOriginalName();
        $dokumen_lainnya = $request->file('dokumen_lainnya')->getClientOriginalName();

        $data['dokumen'] = $request->file('dokumen')->storeAs('other/files/dokumen',$dokumen,'public');
        $data['bukti1'] = $request->file('bukti1')->storeAs('other/files/bukti1',$bukti1,'public');
        $data['bukti2'] = $request->file('bukti2')->storeAs('other/files/bukti2',$bukti2,'public');
        $data['bukti3'] = $request->file('bukti3')->storeAs('other/files/bukti3',$bukti3,'public');
        $data['disposisi'] = $request->file('disposisi')->storeAs('other/files/disposisi',$disposisi,'public');
        $data['dokumen_lainnya'] = $request->file('dokumen_lainnya')->storeAs('other/files/dokumen_lainnya',$dokumen_lainnya,'public');

        $data['user_id'] = Auth::user()->id;

        OtherModel::create($data);
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
