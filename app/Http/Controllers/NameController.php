<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class NameController extends Controller
{
    // public function form ($id = 0) {
    //     $data = [
    //         'id' => 0,
    //         'fname' => '',
    //         'mname' => '',
    //         'lname' => '',
    //     ];

    //     if ($id != 0) {
    //         $names = Name::find($id);
    //         $data ['id'] = $id;
    //         $data ['fname'] = $name->fname;
    //         $data ['mname'] = $name->mname;
    //         $data ['lname'] = $name->lname;
    //     }
    //     return view('name.form', compact('data'));
    // }

    public function formSubmit(Request $request) {
        // dd($request->all());
        //$request;
        if ($request->id != 0) {
            $new_name = Name::find($request->id);
        }
        else {
            $new_name = new Name;
        }
        $new_name->brand = $request->brand;
        $new_name->model = $request->model;
        $new_name->datePurchased = $request->datePurchased;
        $new_name->prevOwner = $request->prevOwner;
        $new_name->cpNum = $request->cpNum;
        $new_name->status = $request->status;
        $new_name->ownership = $request->ownership;
        $res = $new_name->save();
        $names = Name::all();
        return $res;
    }

    public function getNames(){
        $names = Name::all();
        return $names;
    }

    public function deleteName(Request $request) {
        return Name::where ('id', $request->id)->delete();
    }
}
