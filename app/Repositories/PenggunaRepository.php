<?php

namespace App\Repositories;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaRepository
{
    public function getAllPengguna(){
        $query = Pengguna::all();
        return $query;
    }

    public function viewPengguna($id){
        $query = Pengguna::where('id', $id)->firstOrFail();
        return $query;
    }
    
    public function storePengguna(Request $req){
        $query = Pengguna::create([
            'name' => $req->username
        ]);
        return $query;
    }

    public function updatePengguna($id){
        $query = Pengguna::where('id', $id)
        ->firstOrFail()
        ->update(request()->only(['name']));
        return $query;
    }

    public function deletePengguna($id){
        $query = Pengguna::find($id)->delete();
        return $query;
    }
}