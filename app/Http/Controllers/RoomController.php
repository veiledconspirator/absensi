<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use stdClass;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() //menampilkan halaman awal hrs di index
    {
        $room = Room::query(); // query supaya bisa di ubah di bawah-bawah

        $rooms = $room->paginate(10); // pagination dari query 

        return view('room.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //form add new data
    {
        $datas = new Room;
        return view('room.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Room;
        $data->kelas = $request->kelas;
        $data->guru = $request->guru;
        $data->jumlah = $request->jumlah;
        
        $data->save();

        return Redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) // berarti karena ini request
    {
        $room = Room::find($request);

        return view('rooms.index', compact('rooms')); // jadi disinyya siswasss pake s? ora hmm, salah plg ngko iku showmu yawes lanjutin dulu komenmu /\ 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room) //ini selalu cek dlu pake dd, apakah ada datanya $siswanya, kalo ada gas
    {
        return view('room.edit')->with('room', $room); //gas seperti ini, (rooms cuman tengeran buat dibladenya, kalo variable $room manggil parameter atas)
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $room->kelas = $request->kelas;
        $room->guru = $request->guru;
        $room->jumlah = $request->jumlah;
        $room->update();

        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Berhasil Hapus');
    }
}
