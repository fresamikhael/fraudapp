<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FraudModel;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


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
