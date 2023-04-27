<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use stdClass;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() //menampilkan halaman awal hrs di index
    {
        $siswa = Siswa::query(); // query supaya bisa di ubah di bawah-bawah

        $siswas = $siswa->paginate(10); // pagination dari query 

        return view('siswa.index')->with('siswas', $siswas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //form add new data
    {
        $datas = new Siswa;
        return view('siswa.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Siswa;
        $data->nama = $request->nama;
        $data->absen = $request->absen;
        $data->kelas = $request->kelas;
        $data->save();

        return Redirect()->route('siswas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) // berarti karena ini request
    {
        $siswa = Siswa::find($request);

        return view('siswas.index', compact('siswas')); // jadi disinyya siswasss pake s? ora hmm, salah plg ngko iku showmu yawes lanjutin dulu komenmu /\ 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa) //ini selalu cek dlu pake dd, apakah ada datanya $siswanya, kalo ada gas
    {
        return view('siswa.edit')->with('siswa', $siswa); //gas seperti ini, (siswas cuman tengeran buat dibladenya, kalo variable $siswa manggil parameter atas)
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->nama = $request->nama;
        $siswa->absen = $request->absen;
        $siswa->kelas = $request->kelas;
        $siswa->update();

        return redirect()->route('siswas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswas.index')->with('success', 'Berhasil Hapus');
    }
}
