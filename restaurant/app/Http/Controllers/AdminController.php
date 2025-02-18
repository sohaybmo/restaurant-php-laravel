<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;

class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view('admin.users',compact("data"));
    }

    public function deleteuser ($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function foodmenu(){
        
        $data = food::all();
        return view('admin.foodmenu',compact("data"));
    }

    public function deletefood($id){
        
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editfood($id){
        
        $data = food::find($id);
        return view('admin.editfood',compact("data"));
    }


    public function updatefood(Request $request, $id)
    {
        
        $data = food::find($id);
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->save();
        return redirect('/foodmenu');;
    }

    public function upload(Request $request){
        $data = new food;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->save();
        return redirect()->back();


        
    }
}
