<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::get();
        return view('admin.event.index', [
            'event' => $event
        ]);
    }

    public function create()
    {
        return view('admin.event.form');
    }

    public function store(Request $request)
    {

        $foto_event = $request->file('foto_event');
        $nama_file = time() . "_" . $foto_event->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_event->move($tujuan, $nama_file);
        $event = Event::create([
            'foto_event' => $nama_file,
            'tgl_event' => $request->tgl_event,
            'nama' => $request->nama,
            'rinciankegiatan' => $request->rkegiatan
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $destroy = Event::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $event = Event::findOrFail($id);
            $awal = $event->foto_event;
            $tujuan = 'upload/';
            $dt = [

                'tgl_event' => $request['tgl_event'],
                'nama' => $request['nama'],
                'foto_event' => $awal,
                'rinciankegiatan' => $request['rinciankegiatan']
            ];

            $request->foto_event->move($tujuan, $awal);
            $event->update($dt);
            Alert::success('Sukses !', 'Data Berhasil Di Edit');
            return redirect()->route('event');
        }
    }
}
