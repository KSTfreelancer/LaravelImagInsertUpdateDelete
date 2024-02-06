<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImagInsertUpdateDelete;

class ImagInsertUpdateDeleteController extends Controller
{
    public function index()  {
       return view('imagInsertUpdateDelete');
    }
    public function addProduct(request $request) {
// Validation
        $request->validate(
        [
            'title'=>'required',
            'description'=>'required|min:6|max:200',
            'img'=>'required|image|jpg,jpeg,png,svg|max:2048'
        ],
        // menual Alart
        [
            'title.required'=>'Please Enter a Title',
            'description.required'=>'Please Enter a Description',
            'description.min:6'=>'Please Enter a Description minimum length 6 digits',
            'description.max:200'=>'Please Enter a Description maximum length 200 digits',
            'img.required'=>'Please select a Image',
            'img.jpg,jpeg,png,svg'=>'Please Select a jpg,jpeg,png,svg image',
            'img.max:2048'=>'Please select a image maximum size 2048kb'
        ]
    );

        $data =new ImagInsertUpdateDelete;
        $data->title=$request->title;
        $data->description=$request->description;

        $imag=$request->img;
        $ImagName=time().'.'.$imag->getClientOriginalExtension();
        $request->img->move('UploadImage',$ImagName);

        $data->image=$ImagName;

        $data->Save();
        return redirect()->back();
    }
    public function ShowAllProduct()  {
        $AllData= ImagInsertUpdateDelete::all();
        
        return view('ShowAllProductPage',compact('AllData'));
    }
    public function itemDelete($id) {
        $FindData=ImagInsertUpdateDelete::find($id);
        $FindData->delete();
        return redirect()->back();
    }
    public function TargetUpdate($id)  {
        $FindData=ImagInsertUpdateDelete::find($id);
        return view('updatePage',compact('FindData'));
    }
    public function UpdateTbl(request $request,$id) {
        $FindData = ImagInsertUpdateDelete::find($id);
        $FindData->title=$request->title;
        $FindData->description=$request->description;
        $imagPath=$request->img;
        if($imagPath){
            // $imag=$request->img;
            $ImagName=time().'.'.$imagPath->getClientOriginalExtension();
            $request->img->move('UploadImage',$ImagName);
            $FindData->image=$ImagName;
        }
        $FindData->Save();
        return redirect()->back();
        // ShowAllProduct() ;
    }
}
