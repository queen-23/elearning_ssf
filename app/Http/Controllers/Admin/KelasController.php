<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = \App\Models\Kelas::all();
        return view('admin.kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutor = \App\Models\User::where('role', 'tutor')->get();

        return view('admin.kelas.create', compact('tutor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $enroll_key = Str::random(6);
            DB::beginTransaction();
            $kelas = new \App\Models\Kelas();
            $kelas->nama = $request->nama;
            $kelas->jenjang = $request->jenjang;
            $kelas->deskripsi = $request->deskripsi;
            $kelas->enroll_key = $enroll_key;
            $kelas->save();
            $kelas->tutor()->attach($request->tutor);
            DB::commit();
            return redirect('/admin/kelas')->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            throw $e;
            DB::rollback();
            return redirect()->back()->with('error', 'Data gagal disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas = \App\Models\Kelas::find($id);
        $kelas->enroll_key = Str::random(6);
        $kelas->save();
        return redirect('/admin/kelas')->with('success', 'Enroll key berhasil di reset');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = \App\Models\Kelas::find($id);
        $tutor = \App\Models\User::where('role', 'tutor')->get();
        return view('admin.kelas.edit', compact('kelas', 'tutor'));
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
        try {
            DB::beginTransaction();
            $kelas = \App\Models\Kelas::find($id);
            $kelas->nama = $request->nama;
            $kelas->jenjang = $request->jenjang;
            $kelas->deskripsi = $request->deskripsi;
            $kelas->save();
            $kelas->tutor()->sync($request->tutor);
            DB::commit();
            return redirect('/admin/kelas')->with('success', 'Data berhasil diubah');
        } catch (\Exception $e) {
            throw $e;
            DB::rollback();
            return redirect()->back()->with('error', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $kelas = \App\Models\Kelas::find($id);
            $kelas->tutor()->detach();
            $kelas->delete();
            DB::commit();
            return redirect('/admin/kelas')->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            throw $e;
            DB::rollback();
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }
}
