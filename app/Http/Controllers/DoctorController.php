<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctorList = Doctor::all();
        return view('doctor', compact('doctorList'));
    }


    public function search(Request $req)
    {
        $doctorList = Doctor::where('name', 'LIKE', "%" . $req->search . "%")->get();
        return view('search-result-doctor', compact('doctorList'));
    }

    public function details($id)
    {
        $doctor = Doctor::find($id);
        return view('doctordetail', compact('doctor'));
    }


    public function addForm()
    {
        $NambahDokter = new Doctor;
        return view('TambahDokter', compact('NambahDokter'), ['title' => 'Penambahan Dokter!']);
    }

    public function editForm($id)
    {
        $findDoctor = Doctor::findOrFail($id);
        return view('UbahDokter', ['title' => 'Pengubahan Dokter!', 'doctor' => $findDoctor]);
    }

    public function insert(Request $req)
    {
        $data = Doctor::create($req->all());
        if ($req->hasFile('img')) {
            $rand = rand();
            $req->file('img')->move('img/', $rand . $req->file('img')->getClientOriginalName());
            $data->img = 'img/' . $rand . $req->file('img')->getClientOriginalName();
            $data->save();
        }
        if ($req->hasFile('schedule')) {
            $rand = rand();
            $req->file('schedule')->move('img/', $rand . $req->file('schedule')->getClientOriginalName());
            $data->schedule = 'img/' . $rand . $req->file('schedule')->getClientOriginalName();
            $data->save();
        }
        return redirect('doctor');
    }


    public function delete($id)
    {
        $data = Doctor::find($id);
        if (File::exists($data->image)) {
            File::delete($data->image);
        }

        if (File::exists($data->schedule)) {
            File::delete($data->schedule);
        }
        $data->delete();

        return redirect('doctor');
    }


    public function update(Request $req, $id)
    {
        $data = Doctor::find($id);
        if (File::exists($data->image)) {
            File::delete($data->image);
        }

        if (File::exists($data->schedule)) {
            File::delete($data->schedule);
        }

        if ($req->hasFile('img')) {
            $rand = rand();
            $req->file('img')->move('img/', $rand . $req->file('img')->getClientOriginalName());
            $data->img = 'img/' . $rand . $req->file('img')->getClientOriginalName();
            $data->update();
        }
        if ($req->hasFile('schedule')) {
            $rand = rand();
            $req->file('schedule')->move('img/', $rand . $req->file('schedule')->getClientOriginalName());
            $data->schedule = 'img/' . $rand . $req->file('schedule')->getClientOriginalName();
            $data->update();
        }

        $data->update([
            'name' => $req->name,
            'specialist' => $req->specialist,
            'location' => $req->location,
            'backgriybd' => $req->backgriybd,
        ]);

        return redirect('doctor');
    }
}
