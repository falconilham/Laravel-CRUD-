<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class karyawan extends Controller
{
    //
    public function list_karyawan()
    {
	    $karyawan = [
			'ilham',
			'bayu',
			'bai',
			'test',
		];

		return view ('data.nama', [
			'data1' => $karyawan,
		]);
	}

	public function list_karyawan1()
    {
	    $karyawan = [
			'ilham1',
			'bayu1',
			'bai1',
			'test1',
		];

		return view ('data.nama', [
			'data1' => $karyawan,
		]);
	}
}
