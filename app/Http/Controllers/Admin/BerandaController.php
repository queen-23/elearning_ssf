<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BerandaController extends Controller
{
    public function kontak()
    {
        $kontak = file_get_contents(base_path('public/data/kontak.json'));
        $kontak = json_decode($kontak, false);
        return view('admin.beranda.kontak', compact('kontak'));
    }
    public function updateKontak(Request $request)
    {
        $kontak = [
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'tentang' => $request->tentang,
        ];
        file_put_contents(base_path('public/data/kontak.json'), json_encode($kontak));
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
    public function gallery()
    {
        $gallery = file_get_contents(base_path('public/data/gallery.json'));
        $gallery = json_decode($gallery, false);
        $gallery = $gallery->data;
        // dd($gallery);
        return view('admin.beranda.gallery', compact('gallery'));
    }
    public function storeGallery(Request $request)
    {
        // dd($request->all());
        $gallery = file_get_contents(base_path('public/data/gallery.json'));
        $gallery = json_decode($gallery, false);
        $data = $gallery->data;
        $uuid = Str::uuid();
        if ($request->jenis == 'foto') {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(base_path('public/images'), $filename);
            $data[] = [
                'uuid' => $uuid,
                'jenis' => $request->jenis,
                'file' => $filename,
                'deskripsi' => $request->deskripsi,
                'judul' => $request->judul,
            ];
        } else {
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->link, $match);
            $youtube_id = $match[1];
            $link = 'https://www.youtube.com/embed/' . $youtube_id;
            $data[] = [
                'uuid' => $uuid,
                'jenis' => $request->jenis,
                'file' => $request->file,
                'deskripsi' => $request->deskripsi,
                'judul' => $request->judul,
                'link' => $link,
            ];
        }
        $gallery->data = $data;
        file_put_contents(base_path('public/data/gallery.json'), json_encode($gallery));
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
