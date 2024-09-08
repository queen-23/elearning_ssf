<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AkunController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.akun', compact('users'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'username' => 'required|unique:users',
                'password' => 'required',
                'role' => 'required',
            ]);
        } catch (\Exception $e) {
            // throw $e;
            return redirect()->back()->with('error', 'Data gagal disimpan');
        }
        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->role = $request->role;
            $user->save();
            DB::commit();
            // dd('berhasil');
            return redirect()->back()->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            // throw $e;
            dd('gagal');
            DB::rollback();
            return redirect()->back()->with('error', 'Data gagal disimpan');
        }
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $id,
            'role' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $user = User::find($id);
            $user->name = $request->name;
            $user->username = $request->username;
            $user->role = $request->role;
            if ($request->password) {
                $user->password = bcrypt($request->password);
            }
            $user->save();
            DB::commit();
            return redirect()->back()->with('success', 'Data berhasil diubah');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Data gagal diubah');
        }
    }
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $user = User::find($id);
            $user->delete();
            DB::commit();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }
}
