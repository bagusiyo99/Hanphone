<?php

namespace App\Http\Controllers;

use App\Models\Oppo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminOppo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Oppo',
            'oppo' => Oppo::get(),
            'content' => 'admin/oppo/index'
        ];
        return view ('admin.layouts.wrapper', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =[
            'title' => 'Tambah Oppo',
            'content' => 'admin/oppo/add'
        ];
        
        return view ('admin.layouts.wrapper', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',
            'gambar' => 'required',
            'harga' => 'required ',

        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/oppo/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

                    Alert::success('sukses', 'data berhasil DITAMBAH');
                    Oppo::create ($data);
                    return redirect ('/admin/oppo');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =[
            'title' => 'Edit Oppo',
            'oppo' => Oppo::find ($id),
            'content' => 'admin/oppo/add'
        ];
        return view ('admin.layouts.wrapper', $data ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $oppo = Oppo::find($id);
         $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',
            'harga' => 'required ',


        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            if($oppo->gambar  != null){
                unlink($oppo->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/oppo/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = $oppo ->gambar;
        }

                    Alert::success('sukses', 'data berhasil diupdate');
                    $oppo->update($data);
                    return redirect ('/admin/oppo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oppo = Oppo::find ($id);

            if($oppo->gambar != null){
            unlink($oppo->gambar);
                }

        Alert::success('sukses', 'data berhasil dihapus');
        $oppo->delete();
        return redirect ('/admin/oppo');
        
    }
}
