<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return response()->json([
            "status" => true,
            "message" => "Successfully retrieved all data",
            "data" => $karyawan
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
    public function store(Request $request)
    {
        $karyawan = Karyawan::create($request->all());
        return response()->json([
            "status" => true,
            "message" => "Successfully created data",
            "data" => $karyawan
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($karyawan = Karyawan::find($id)) {
            return response()->json([
                "status" => true,
                "message" => "Success find data by id",
                "data" => $karyawan
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "message" => "ID NOT FOUND"
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if ($karyawan = Karyawan::find($id)) {
            $karyawan->update($request->all());
            return response()->json([
                "status" => true,
                "message" => "Update data successfully",
                "data" => $karyawan
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "message" => "ID NOT FOUND"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { {
            if ($karyawan = Karyawan::find($id)) {
                $karyawan->delete();
                return response()->json([
                    "status" => true,
                    "message" => "Success delete data"
                ]);
            } else {
                return response()->json([
                    "status" => "error",
                    "message" => "ID NOT FOUND"
                ]);
            }
        }
    }
}
