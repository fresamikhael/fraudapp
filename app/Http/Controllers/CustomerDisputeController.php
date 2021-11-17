<?php

namespace App\Http\Controllers;


use App\Http\Requests\CustomerDisputeRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerDisputeModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerDisputeController extends Controller
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
        $check_user = CustomerDisputeModel::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'CD' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'CD' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'CD' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'CD' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'CD' . date('dmy') . $item;
            }
        }

        return view('pages.user.litigation.customerDispute', [
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
    public function store(CustomerDisputeRequest $request)
    {


            $data = $request->all();
            $dokumen_surat = $request->file('dokumen_surat')->getClientOriginalName();
            $dokumen_form_klaim = $request->file('dokumen_form_klaim')->getClientOriginalName();
            $lain_lain = $request->file('lain_lain')->getClientOriginalName();
            $barang_bukti = $request->file('barang_bukti')->getClientOriginalName();
            $kelengkapan_dokumen = $request->file('kelengkapan_dokumen')->getClientOriginalName();
            $bukti_lainya= $request->file('bukti_lainya')->getClientOriginalName();


            $data['dokumen_surat'] = $request->file('dokumen_surat')->storeAs('customer_dispute/files/dokumen_surat',$dokumen_surat,'public');
            $data['dokumen_form_klaim'] = $request->file('dokumen_form_klaim')->storeAs('customer_dispute/files/dokumen_form_klaim',$dokumen_form_klaim,'public');
            $data['lain_lain'] = $request->file('lain_lain')->storeAs('customer_dispute/files/lain_lain',$lain_lain,'public');
            $data['barang_bukti'] = $request->file('barang_bukti')->storeAs('customer_dispute/files/dokumen_surat',$barang_bukti,'public');
            $data['kelengkapan_dokumen'] = $request->file('kelengkapan_dokumen')->storeAs('customer_dispute/files/kelengkapan_dokumen',$kelengkapan_dokumen,'public');
            $data['bukti_lainya'] = $request->file('bukti_lainya')->storeAs('customer_dispute/files/bukti_lainya',$bukti_lainya,'public');

            $data['user_id'] =   Auth::user()->id;

            CustomerDisputeModel::create($data);
            return view('pages.user.litigation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerDisputeModel  $customerDisputeModel
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerDisputeModel $customerDisputeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerDisputeModel  $customerDisputeModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerDisputeModel $customerDisputeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerDisputeModel  $customerDisputeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerDisputeModel $customerDisputeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerDisputeModel  $customerDisputeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerDisputeModel $customerDisputeModel)
    {
        //
    }
}
