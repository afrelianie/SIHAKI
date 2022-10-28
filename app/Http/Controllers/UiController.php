<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pengelola;
use App\Models\CategoryModel;
use App\Models\SimaduPegawai;
use App\Models\AdminModel\Pengajuan;
use App\Models\AdminModel\Sertifikat;
use App\Models\HakCipta\HakCipta;
use App\Models\HakPaten\Kepemilikan;

use Illuminate\Http\Request;

class UiController extends Controller
{

    public function index()
    {
        $category = CategoryModel::all();
        $asu = Pengelola::all();
        return view('beranda', compact('asu', 'category'));
    }


    public function direktur()
    {
        $asu = Pengelola::all();
        return view('direktur', compact('asu'));

    }

    public function homedosen()
    {
        $tampil = Pengelola::all();
        return view('homedosen', compact('tampil'));
    }



    function beranda()
    {

        $pegawai['pegawai'] = SimaduPegawai::count();
        $pengajuan['pengajuan'] = Pengajuan::count();
        $pengelola['pengelola'] = Pengelola::count();
        $sertifikat['sertifikat'] = Sertifikat::count();
        $category['category'] = CategoryModel::count();
        $hakcipta['hakcipta'] = HakCipta::count();
        $paten['paten'] = Kepemilikan::count();


        // dd($datas['list']['TotalPegawai']);
        return view('beranda', $pegawai,$pengajuan,$pengelola,$sertifikat,$category,$hakcipta,$paten);
    }



    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
