<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Session;

class RestoController extends Controller
{
    //Home page controller
    function index(){
        return  view('home');
    }
    //List controller
    function list(){
        $data = Restaurant::all();
        return view('list',['data'=>$data]);
    }

    //Add controller function
    function add(Request $request){
        // return  $request->input();
        $resto = new Restaurant();
        $resto->name = $request->input('name');
        $resto->email = $request->input('email');
        $resto->address = $request->input('address');
        $resto->save();
        $request->session()->flash('success','Restaurant Successfully added');
        return redirect('list');
    }

    //Delete controller function
    function delete($id){
        Restaurant::find($id)->delete();
        Session::flash('success','Restaurant Successfully deleted');
        return redirect('list');
    }

    //Show data to Edit controller function
    function showedit($id){
        $data = Restaurant::find($id);
        return view('edit',['data'=>$data]);
        }
//Update food joint  controller function
    function edit(Request $request ){
        $data = Restaurant::find($request->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->save();
        return redirect('list');
    }
}
