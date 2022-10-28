<?php

namespace App\Http\Controllers\PegawaiController;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SimaduPegawai;
use App\Models\AdminModel\Merek;
use PhpOffice\PhpWord\TemplateProcessor;
use Str;
use DB;


class PegawaiMerekController extends Controller
{
    function index(){

        $data['list_merek'] = DB::table('merek')
        ->join('simadu__pegawai', 'merek.id_pegawai', '=', 'simadu__pegawai.id')
        ->get();

        return view('dosen.merek.index', $data);
    }
    function add(){

       $pegawai['list_pegawai'] = SimaduPegawai::all();
        return view('dosen.merek.add',  $pegawai);
    }

    function addAct(Request $request){

            $randomStr = Str::random(5);
            $randomStr1 = Str::random(6);
            $ds = public_path("app/merek");

            $merek = new Merek;
            $merek->id_pegawai = $request->id_pegawai;


            // HeandleFotoMerek
            $fotoMerek = $request->file('foto_merek');
            $fm = $randomStr.'.'.$fotoMerek->extension();
            $um = $fotoMerek->move($ds, $fm);

            $foto_ttd = $request->file('foto_ttd');
            $ft = $randomStr1.'.'.$foto_ttd->extension();
            $ut = $foto_ttd->move($ds, $ft);

            $merek->foto_merek = 'app/merek/'.$fm;
            $merek->foto_ttd = 'app/merek/'.$ft;

            $merek->save();

            return redirect('pegawai/merek')->with('success', 'Data berhasil disimpan.');


    }

    function show(Merek $merek){

        $data['list_merek'] = DB::table('merek')
        ->join('simadu__pegawai', 'merek.id_pegawai', '=', 'simadu__pegawai.id')
        ->get();
        return view('dosen.merek.show',  $data);

    }






}
