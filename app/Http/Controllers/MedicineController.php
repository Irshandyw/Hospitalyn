<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;


class MedicineController extends Controller
{
    public function index()
    {
        $medicineList = Medicine::all();
        return view('medicine', compact('medicineList'));
    }
    public function details($id)
    {
        $medicine = Medicine::find($id);
        return view('medicinedetail', compact('medicine'));
    }

    public function search(Request $req)
    {
        $medicineList = Medicine::where('name', 'LIKE', "%" . $req->search . "%")->get();
        return view('search-result-medicine', compact('medicineList'));
    }
    // public function create(Request $request,$id)
    // {
    //     medicine::insert([
    //         'name'=>$request->name,
    //         'img'=>$request->img,
    //         'price'=>$request->price,
    //         'description'=>$request->description,

    // ]);
    // }
    // public function createview()
    // {
    //     return view('MedicineInsert');
    // }
}
