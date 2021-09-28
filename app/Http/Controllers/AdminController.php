<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cerita;
use App\Providers\Paginator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ceritas = Cerita::paginate(5);
        return view('admin.index', compact('ceritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $ceritas = Cerita::where('id', $id)->first();
        return view('admin.edit', compact('ceritas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $cerita = Cerita::where('id', $id)->update([
            'judul' => $request['judul'],
            'deskripsi' => $request['deskripsi'],
        ]);

        return redirect()->route('data-cerita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cerita::destroy($id);
        return redirect()->route('data-cerita');
    }

    public function status($id)
    {
        $ceritas = Cerita::where('id', $id)->first();
        $status = $ceritas->status;

        if($status == 1){
            Cerita::where('id', $id)->update([
                'status'=>0
            ]);
        }else{
            Cerita::where('id', $id)->update([
                'status'=>1
            ]);
        }
        
        return redirect()->route('data-cerita');
    }
}
