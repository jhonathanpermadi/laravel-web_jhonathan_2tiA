<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahMahasiswa = Mahasiswa::count();

        return view('admin.dashboard', compact('jumlahMahasiswa'));
    }
}
