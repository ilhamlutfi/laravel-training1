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

    public function edit($id)
    {
        $data = [
            'data_edit' => DB::table('edulevels')->where('id', $id)->first()
        ];

        return view('edulevel.edit', $data);
    }

    public function update(Request $request, $id)
    {
        DB::table('edulevels')->where('id', $id)
        ->update([
            'name' => $request->name,
            'desc' => $request->desc 
        ]);

        return redirect('edulevels')->with('status', 'Data has been updated..!');
    }
}
