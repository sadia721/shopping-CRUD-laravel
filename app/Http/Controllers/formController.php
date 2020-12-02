<?php

namespace App\Http\Controllers;
use App\customer;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function index(){
        $records= customer::all();
        return view('index',compact('records'));
    }
    public function store(Request $request){
        $data = new customer();
        $data->name = $request->name;
        $data->size = $request->size;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->color = $request->color;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date('YmdHis') . '.' . $extension;
            $file->move('public/images', $filename);
            $data->image = $filename;

        }
        else{
            dd($request);
           // $data->image ='';
        }
        $data->save();
        $records= customer::all();
        return view('index',compact('records'));
    }
    Public function show(customer $customer){
        $records= $customer::paginate(5);
        return view('admin',compact('records'));
    }
    function edit($id){
        $r =  customer::findorFail($id);
        return view('edit', compact('r'));
     }
     function update($id){
        \request ()->validate(['name'=> 'required', 'size'=>'required','price'=>'required','quantity'=>'required']);
        $item =  customer::findorFail($id);
        $item->name = \request ('name');
        $item->size = \request ('size');
        $item->price = \request ('price');
        $item->quantity = \request ('quantity');
        $item->save();
       return redirect('/Admin');

    }
    public function destroy($id) {
        $product = customer::find($id);
        $product->delete();
        return redirect('/Admin');
     }
}
 