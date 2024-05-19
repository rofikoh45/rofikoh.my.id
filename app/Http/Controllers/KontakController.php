<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'kontaks' => Kontak::all()
        );
        return view('book', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kontaks.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST')){
            $kontak = new Kontak();
            $kontak->nama = $request->nama;
            $kontak->email = $request->email;
            $kontak->pesan = $request->pesan;
            $kontak->save();
            return redirect('/')->with(['success' => 'your message has been sent']);
        }
        return view('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kontak  = Kontak::find($request->id);
        $data = array(
            'kontak' => $kontak
        );

        if($request->isMethod('post')){
            $kontak->nama = $request->nama;
            $kontak->email = $request->email;
            $kontak->pesan = $request->pesan;
            $kontak->save();
            return redirect('/book')->with(['success' => 'Update successful']);
        }
        return view('/update',$data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $kontak = Kontak::find($request->id);
        $kontak->delete();
        return redirect('/book')->with(['delete' => 'data has been successfully deleted']);
    }
}
