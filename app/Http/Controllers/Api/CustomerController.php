<?php

namespace App\Http\Controllers\Api;

use App\Models\CustomerModel;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datas = CustomerModel::latest()->get();

        return view('dashboard_admin', [
            'status' => response()->json($datas, 200),
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $datas = CustomerModel::latest()->get();

        return view('dashboard_admin', [
            'status' => response()->json($datas, 200),
            'datas' => $datas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'table' => 'required',
            'total' => 'required',
            'id_order' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        try {
            CustomerModel::create([
                'name' => $request->name,
                'table' => $request->table,
                'total' => $request->total,
                'id_order' => $request->id_order,
            ]);
            return response()->json([
                'status' => Response::HTTP_OK,
                'message' => 'Data dikirim ke database'
            ], Response::HTTP_OK);

        } catch (Exception $e) {
            Log::error('Error mengirim data :' . $e->getMessage());

            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => 'Gagal mengirim data ke database'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
