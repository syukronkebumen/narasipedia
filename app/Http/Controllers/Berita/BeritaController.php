<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $artikel = Artikel::leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.kategori_id')
                    ->select(
                        'kategori_artikel.nama as nama_kategori',
                        'artikel.judul',
                        'artikel.slug',
                        'artikel.deskripsi',
                        'artikel.gambar'
                    )
                    ->get();
        return view('berita.index', compact('artikel'));
    }

    public function show(Request $request, $slug)
    {
        $detail = Artikel::leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.kategori_id')
                    ->select(
                        'kategori_artikel.nama as nama_kategori',
                        'artikel.judul',
                        'artikel.slug',
                        'artikel.deskripsi',
                        'artikel.gambar'
                    )
                    ->where('slug', $slug)
                    ->first();

        return view('berita.detail', compact('detail'));
    }
}
