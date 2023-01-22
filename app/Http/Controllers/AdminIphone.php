<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AdminIphone extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Iphone',
            'iphone' => Iphone::get(),
            'content' => 'admin/iphone/index'
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
            'title' => 'Tambah Iphone',
            'content' => 'admin/iphone/add'
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

            $storage = 'uploads/iphone/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

                    Alert::success('sukses', 'data berhasil DITAMBAH');
                    Iphone::create ($data);
                    return redirect ('/admin/iphone');

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
            'title' => 'Edit Iphone',
            'iphone' => Iphone::find ($id),
            'content' => 'admin/iphone/add'
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
        $iphone = Iphone::find($id);
         $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',
            'harga' => 'required ',


        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            if($iphone->gambar  != null){
                unlink($iphone->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/iphone/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = $iphone ->gambar;
        }

                    Alert::success('sukses', 'data berhasil diupdate');
                    $iphone->update($data);
                    return redirect ('/admin/iphone');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iphone = Iphone::find ($id);

            if($iphone->gambar != null){
            unlink($iphone->gambar);
                }

        Alert::success('sukses', 'data berhasil dihapus');
        $iphone->delete();
        return redirect ('/admin/iphone');
        
    }
}
