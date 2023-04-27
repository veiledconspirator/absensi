<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use Illuminate\Http\Request;
use stdClass;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() //menampilkan halaman awal hrs di index
    {
        $absence = Absence::query(); // query supaya bisa di ubah di bawah-bawah

        $absences = $absence->paginate(10); // pagination dari query 

        return view('absence.index')->with('absences', $absences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //form add new data
    {
        $datas = new Absence;
        return view('absence.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Absence;
        $data->nama = $request->nama;
        $data->absen = $request->absen;
        $data->kelas = $request->kelas;
        $data->save();

        return Redirect()->route('absences.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) // berarti karena ini request
    {
        $absence = Absence::find($request);

        return view('absences.index', compact('absences')); // jadi disinyya siswasss pake s? ora hmm, salah plg ngko iku showmu yawes lanjutin dulu komenmu /\ 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Absence $absence) //ini selalu cek dlu pake dd, apakah ada datanya $siswanya, kalo ada gas
    {
        return view('absence.edit')->with('absence', $absence); //gas seperti ini, (absences cuman tengeran buat dibladenya, kalo variable $absence manggil parameter atas)
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absence $absence)
    {
        $absence->nama = $request->nama;
        $absence->absen = $request->absen;
        $absence->kelas = $request->kelas;
        $absence->update();

        return redirect()->route('absences.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absence $absence)
    {
        $absence->delete();

        return redirect()->route('absences.index')->with('success', 'Berhasil Hapus');
    }
}
