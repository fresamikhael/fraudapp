<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\FraudModel;
use Illuminate\Http\Request;
use App\Models\ReasonRejectModel;
use App\Http\Controllers\Controller;
use App\Models\StatusFraudApprovalModel;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StatusFraudApprovalRequest;


class FraudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


          if (request()->ajax())
        {

            $query = FraudModel::with(['user']); //ini kalau terdapat relasi di database, namanya liat di modelnya pada saat buat relasi
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($fraud){
                        return '
                            <div class ="btn-group">
                                <div class="dropdown">
                                   <a href = "'.route('fraud-detail',$fraud->no_kasus).'">
                                   <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                    Approval
                                    </button>
                                   </a>
                                </div>
                            </div>
                        ';
                })


                 ->rawColumns(['action'])
                ->make();

        }

        return view('admin.fraud.fraud_table');
        // return User::with('fraud')->get();

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = FraudModel::with('user')->where('no_kasus',$id)->firstOrFail();

        return view('admin.fraud.approval_fraud',['data'=>$data]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
            
    }

     public function return(Request $request,$no_kasus)
    {
        
       switch($request->input('action')){

        case 'return' : 
    $data = $request->all();
    $approval = $request->except(['_token','reason_keterangan_saksi','reason_bukti_dokumen_surat','reason_keterangan_pelaku',
    'reason_lain_lain','reason_barang_bukti','reason_kelengkapan_dokumen','reason_kronologis_lengkap','action']);
    $reason = [
    'no_kasus'=> $no_kasus,    
    'reason_keterangan_saksi'=>$data['reason_keterangan_saksi'],
    'reason_bukti_dokumen_surat'=>$data['reason_bukti_dokumen_surat'],
    'reason_keterangan_pelaku'=>$data['reason_keterangan_pelaku'],
    'reason_lain_lain'=>$data['reason_lain_lain'],
    'reason_barang_bukti'=>$data['reason_barang_bukti'],
    'reason_kelengkapan_dokumen'=>$data['reason_kelengkapan_dokumen'],
    'reason_kronologis_lengkap'=>$data['reason_kronologis_lengkap']];

   
    $status=  StatusFraudApprovalModel::where('no_kasus',$no_kasus);
    $status->update($approval);

         $check_user = ReasonRejectModel::select('*')
            ->whereDate('no_kasus', '>=', $no_kasus)
            ->count();

        if($check_user === 0){
   ReasonRejectModel::create(['no_kasus'=> $no_kasus,    
    'reason_keterangan_saksi'=>$data['reason_keterangan_saksi'],
    'reason_bukti_dokumen_surat'=>$data['reason_bukti_dokumen_surat'],
    'reason_keterangan_pelaku'=>$data['reason_keterangan_pelaku'],
    'reason_lain_lain'=>$data['reason_lain_lain'],
    'reason_barang_bukti'=>$data['reason_barang_bukti'],
    'reason_kelengkapan_dokumen'=>$data['reason_kelengkapan_dokumen'],
    'reason_kronologis_lengkap'=>$data['reason_kronologis_lengkap']]);
      FraudModel::with('status')->where('no_kasus',$no_kasus)->update(['status'=>'REVISI']);
    return('Update berhasil');
        }
        else{
             ReasonRejectModel::where('no_kasus',$no_kasus)->update(['no_kasus'=> $no_kasus,    
    'reason_keterangan_saksi'=>$data['reason_keterangan_saksi'],
    'reason_bukti_dokumen_surat'=>$data['reason_bukti_dokumen_surat'],
    'reason_keterangan_pelaku'=>$data['reason_keterangan_pelaku'],
    'reason_lain_lain'=>$data['reason_lain_lain'],
    'reason_barang_bukti'=>$data['reason_barang_bukti'],
    'reason_kelengkapan_dokumen'=>$data['reason_kelengkapan_dokumen'],
    'reason_kronologis_lengkap'=>$data['reason_kronologis_lengkap']]);
      FraudModel::with('status')->where('no_kasus',$no_kasus)->update(['status'=>'REVISI']);
    return('Update berhasil');
        }
        
            break;
        
        case 'approve' :
    $data= $request->except(['_token','reason_keterangan_saksi','reason_bukti_dokumen_surat','reason_keterangan_pelaku',
    'reason_lain_lain','reason_barang_bukti','reason_kelengkapan_dokumen','reason_kronologis_lengkap','action']);

    $validate = Validator::make($data,[
        'status_no_kasus'=>'in:APPROVE',
        'status_tanggal'=> 'in:APPROVE',
        'status_jenis_kasus'=> 'in:APPROVE',
        'status_faktor_penyebab'=> 'in:APPROVE',
        'status_pelaku'=> 'in:APPROVE',
        'status_departemen'=> 'in:APPROVE',
        'status_total_kerugian'=> 'in:APPROVE',
        'status_tanggal_kejadian'=> 'in:APPROVE',
        'status_tempat_Kejadian'=> 'in:APPROVE',
        'status_kronologis_lengkap'=> 'in:APPROVE',
      
        'status_bukti_dokumen_surat'=> 'in:APPROVE',
        'status_keterangan_pelaku'=> 'in:APPROVE',
        'status_keterangan_saksi'=> 'in:APPROVE',
        'status_lain_lain'=> 'in:APPROVE',
        'status_dokumentasi_barang_bukti'=> 'in:APPROVE',
        'status_dokumentasi_investigasi'=> 'in:APPROVE',
        'status_bukti_lainya'=> 'in:APPROVE',
    ]);

    if($validate->fails()){
        return view('home');
    }
    else{
$status=  StatusFraudApprovalModel::where('no_kasus',$no_kasus);
    $status->update($data);
            return ('Approval Berhasil');
            // return view('home');
            // break;
    }
    

       }

    
  
    
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

    public function approve(Request $requst){

    }
}
