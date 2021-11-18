<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerDisputeModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
class CustomerDisputeController extends Controller
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

            $query = CustomerDisputeModel::with(['user']); //ini kalau terdapat relasi di database, namanya liat di modelnya pada saat buat relasi
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($customer_dispute){
                        return '
                            <div class ="btn-group">
                                <div class="dropdown">
                                   <a href = "'.route('customer-dispute-detail',$customer_dispute->no_kasus).'">
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

        return view('admin.customer_dispute.customer_dispute');
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
        $data = CustomerDisputeModel::with('user')->where('no_kasus',$id)->firstOrFail();

        return $data;
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
