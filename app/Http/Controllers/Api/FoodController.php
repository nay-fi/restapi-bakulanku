<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\FoodCollection;
use App\Http\Resources\FoodResource;
use App\Models\FoodModel;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //memanggil data menu menggunakan FoodModel
        $menu = FoodModel::latest('created_at')->get();

        return view('menu_display', [
            'status' => response()->json($menu, 200),
            'menu' => $menu
        ]);

        if ($menu->isEmpty()) {
            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Menu empty'
            ], Response::HTTP_NOT_FOUND);
        } else {
            return response()->json([
                'data' => $menu->map(function ($menu) {
                    return [
                        'id' => $menu->id,
                        'name' => $menu->name,
                        'harga' => $menu->harga,
                        'images' => $menu->images,
                    ];
                }),
                'message' => 'Daftar Menu',
                'status' => Response::HTTP_OK
            ], Response::HTTP_OK);
        }


    }
    public function indexadmin()
    {
        // cek validasi user
        $user = Auth::user();
        $menu = FoodModel::all();

        if (!$user) {
            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Menu empty'
            ], Response::HTTP_NOT_FOUND);
        }

        //memanggil data menu menggunakan FoodModel

        if ($menu->isEmpty()) {
            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Menu empty'
            ], Response::HTTP_NOT_FOUND);
        } else {
            return response()->view('orders', [
                'datas' => $menu,
                'message' => 'Daftar Menu',
                'status' => Response::HTTP_OK
            ], Response::HTTP_OK);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $menu = FoodModel::latest()->get();

        return view('dashboard_admin', [
            'status' => response()->json($menu, 200),
            'menu' => $menu
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //memasukkan data menu kedalam database
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'images' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        try {
            FoodModel::create([
                'name' => $request->name,
                'harga' => $request->harga,
                'kategori' => $request->kategori,
                'images' => $request->images,
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

        // if ($request->file('images')) {
        //     $image = $request->file('images');
        //     $imageData = file_get_contents($image->getRealPath());
        //     $validator['images'] = $imageData;
        // }

        // FoodModel::create($validator);
        // return redirect()->back()->with('success', 'Berhasil menambahkan menu')->json($validasi, 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // mengambil data sesuai request id

        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Menu empty'
            ], Response::HTTP_NOT_FOUND);
        }

        //memanggil data menu menggunakan FoodModel
        // $menu = FoodModel::all();
        $menu = FoodModel::latest()->where('id', $id)->first();

        return view('dashboard_admin', [
            'status' => response()->json($menu, 200),
            'menu' => $menu
        ]);

        //menampilkan data response sesuai id
        if ($menu) {
            return response()->json([
                'status' => Response::HTTP_OK,
                'data' => [
                    'name' => $menu->name,
                    'harga' => $menu->harga,
                    'images' => $menu->images,
                ]
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'menu tidak ditemukan'
            ], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $menu = FoodModel::latest()->get();

        return view('dashboard_admin', [
            'status' => response()->json($menu, 200),
            'menu' => $menu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // // cek validasi user
        // $user = Auth::user();

        // if (!$user) {
        //     return response()->json([
        //         'status' => Response::HTTP_NOT_FOUND,
        //         'message' => 'Menu empty'
        //     ], Response::HTTP_NOT_FOUND);
        // }

        // //memanggil data menu menggunakan FoodModel
        // $menu = FoodModel::find($id);

        // // return view('dashboard_admin', [
        // //     'status' => response()->json($menu, 200),
        // //     'menu' => $menu
        // // ]);

        // if (!$menu) {
        //     return response()->json([
        //         'status' => Response::HTTP_NOT_FOUND,
        //         'message' => 'Menu tidak ditemukan'
        //     ], Response::HTTP_NOT_FOUND);
        // }

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'harga' => 'required',
        //     'kategori' => 'required',
        //     'images' => 'required'
        // ]);

        // // jika data yang tidak valid
        // if ($validator->fails()) {
        //     return response()->json($validator->errors());
        // }

        // try {
        //     $menu->update([
        //         'name' => $request->name,
        //         'harga' => $request->harga,
        //         'kategori' => $request->kategori,
        //         'images' => $request->images,
        //     ]);

        //     return response()->json([
        //         'status' => Response::HTTP_OK,
        //         'message' => 'Data berhasil diubah database'
        //     ], Response::HTTP_OK);

        // } catch (Exception $e) {
        //     // memberikan reseponse apabila gagal menyimpan data
        //     Log::error('Error mengubah data :' . $e->getMessage());

        //     return response()->json([
        //         'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
        //         'message' => 'Gagal mengubah data ke database'
        //     ], Response::HTTP_INTERNAL_SERVER_ERROR);
        // }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menhapus data
        $menu = FoodModel::find($id);

        try {
            $menu->delete();
            return response()->json([
                'status' => Response::HTTP_OK,
                'message' => 'Menu telah dihapus'
            ], Response::HTTP_OK);
        } catch (Exception $e) {
            // memberikan reseponse apabila gagal menyimpan data
            Log::error('Error menghapus data :' . $e->getMessage());

            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => 'Gagal menghapus data ke database'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
