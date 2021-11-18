<?php

namespace App\Http\Controllers;

use App\Http\Requests\FraudRequest;
use App\Models\FraudModel;
use App\Models\StatusFraudApprovalModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class FraudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datenow =
        date('d-M-Y',strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = FraudModel::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'FR' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'FR' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'FR' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'FR' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'FR' . date('dmy') . $item;
            }
        }

        return view('pages.user.litigation.fraud', [
            'no_kasus' => $no_kasus,
            'datenow'=>$datenow
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
    public function store(FraudRequest $request)
    {

        
    $data = $request->all();
    $status_data = $data['no_kasus'];
    $status_tanggal = $data['tanggal'];
    //  $data = $request->validate(['no_kasus'=>'required|string',]

    //  );
    $buktiDokumen = $request->file('bukti_dokumen_surat')->getClientOriginalName();
    $keteranganPelaku = $request->file('keterangan_pelaku')->getClientOriginalName();
    $keteranganSaksi = $request->file('keterangan_saksi')->getClientOriginalName();
    $lain_lain = $request->file('lain_lain')->getClientOriginalName();
    $dokumentasiBarangBukti = $request->file('dokumentasi_barang_bukti')->getClientOriginalName();
    $dokumetnasiInvestigasi = $request->file('dokumentasi_investigasi')->getClientOriginalName();
    $buktiLainya = $request->file('bukti_lainya')->getClientOriginalName();

    $data['bukti_dokumen_surat'] = $request->file('bukti_dokumen_surat')->storeAs('fraud/files/bukti_dokumen_surat',$buktiDokumen,'public');
    $data['keterangan_pelaku'] = $request->file('keterangan_pelaku')->storeAs('fraud/files/keterangan_pelaku',$keteranganPelaku,'public');
    $data['keterangan_saksi'] = $request->file('keterangan_saksi')->storeAs('fraud/files/keterangan_saksi',$keteranganSaksi,'public');
    $data['lain_lain'] = $request->file('lain_lain')->storeAs('fraud/files/lain_lain',$lain_lain,'public');
    $data['dokumentasi_barang_bukti'] = $request->file('dokumentasi_barang_bukti')->storeAs('fraud/files/dokumentasi_barang_bukti',$dokumentasiBarangBukti,'public');
    $data['dokumentasi_investigasi'] = $request->file('dokumentasi_investigasi')->storeAs('fraud/files/dokumentasi_investigasi',$dokumetnasiInvestigasi,'public');
    $data['bukti_lainya'] = $request->file('bukti_lainya')->storeAs('fraud/files/bukti_lainya',$buktiLainya,'public');

    $data['user_id'] = Auth::user()->id;


        FraudModel::create($data);
        StatusFraudApprovalModel::create(['no_kasus'=>$status_data,'tanggal'=>$status_tanggal]);
       return view('pages.user.litigation.index');

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fraud  $fraud
     * @return \Illuminate\Http\Response
     */
    public function show(FraudModel $fraud)
    {
       $datas = User::with(['fraud'])->get();



       return view('pages.user.litigation.tableCoba',["datas"=>$datas]);
    }

    public function getbyId($id){
        $data = FraudModel::with('user')->where('no_kasus',$id)->firstOrFail();

        return view('pages.user.litigation.tableDetailCoba',['fraud'=>$data]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fraud  $fraud
     * @return \Illuminate\Http\Response
     */
    public function edit(FraudModel $fraud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fraud  $fraud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FraudModel $fraud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fraud  $fraud
     * @return \Illuminate\Http\Response
     */
    public function destroy(FraudModel $fraud)
    {
        //
    }
}
