<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cerita;
use App\Providers\Paginator;

class CeritaController extends Controller
{
    public function index()
    {
        $ceritas = Cerita::Paginate(10);
        return view('welcome', compact('ceritas'));
    }

    public function create()
    {
        return view('buatcerita');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required', 'string'],
            'deskripsi' => ['required', 'string']
        ]);

        $cerita = Cerita::create([
            'judul' => $request['judul'],
            'deskripsi' => $request['deskripsi']
        ]);

        return redirect()->route('home');
    }
       
    public function show($id)
    {
        $ceritas = Cerita::where('id', $id)->first();
        return view('bacacerita', compact('ceritas'));
    }
}
