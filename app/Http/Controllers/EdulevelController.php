<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // deklarasi use query builder

class EdulevelController extends Controller
{
    public function data()
    {
        $data = [
            'edulevels' => DB::table('edulevels')->get() // query builder select *
        ];

        return view('edulevel.data', $data);
    }

    public function add()
    {
        return view('edulevel.add');
    }

    public function save(Request $request)
    {
        DB::table('edulevels')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);

        return redirect('edulevels')->with('status', 'Data has been added..!');
    }
}
