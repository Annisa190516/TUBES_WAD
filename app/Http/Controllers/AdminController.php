<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
    	return view('auth.admin.dashboard');
    }

    public function guru(){
    	return view('auth.admin.guru');
    }

    public function siswa(){
    	return view('auth.admin.siswa');
    }

    public function kelas(){
    	return view('auth.admin.kelas');
    }

    public function kelas_materi(){
        return view('auth.admin.kelas-materi');
    }

    public function kelas_materi_komponen(){
        return view('auth.admin.kelas-materi-komponen');
    }

    public function kelas_tugas(){
        return view('auth.admin.kelas-tugas');
    }

    public function kelas_tugas_detail(){
        return view('auth.admin.kelas-tugas-detail');
    }

    public function kelas_siswa(){
        return view('auth.admin.kelas-siswa');
    }

    public function kelas_rekap(){
        return view('auth.admin.kelas-rekap');
    }

    public function setting(){
        return view('auth.admin.setting');
    }
}
