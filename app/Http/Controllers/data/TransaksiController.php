<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Mahasiswa;
use App\Models\Peminjaman;
use Composer\DependencyResolver\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //get posts
        $posts = Peminjaman::orderBy('id','ASC')->paginate(5);

        //render view with posts
        return view('transaksi.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $buku = Book::all();
        $mahasiswa = Mahasiswa::all();
        return view('transaksi.create', compact('buku','mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $search = $request->kelas_id;

        // if($search == ''){
        //     $kelas = Book::select('name')->limit(5)->get();
        // } else{
        //     $kelas = Book::select('name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
        // }

        // $post = array();
        // $this->post = Book::where('id', $this->id_buku)->get();


        $request->validate([
            'id_buku' => 'required|max:255',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required'
        ]);
        $post = new Peminjaman;
        $post->id_buku = $request->id_buku;
        $post->tgl_pinjam = $request->tgl_pinjam;
        $post->tgl_kembali = $request->tgl_kembali;
        $post->save();

        return redirect()->route('transaksi.index')
                        ->with('success','Peminjaman buku sukses');


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
