<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Repositories\PenggunaRepository;

class UserController extends Controller
{
    private $penggunaRepository;

    public function __construct(PenggunaRepository $penggunaRepository)
    {
        $this->penggunaRepository = $penggunaRepository;
    }

    public function index(){
        return $this->penggunaRepository->getAllPengguna();
    }

    public function view($id){
        return $this->penggunaRepository->viewPengguna($id);
    }

    public function create(){
        return view('useradd');
    }

    public function edit(){
        return view('useradd');
    }

    public function store(Request $req){
        $this->penggunaRepository->storePengguna($req);
        return redirect('/user');
    }

    public function update($id){
        $this->penggunaRepository->updatePengguna($id);
        return redirect('/user');
    }

    public function delete($id){
        $this->penggunaRepository->deletePengguna($id);
        return redirect('/user');
    }
}
