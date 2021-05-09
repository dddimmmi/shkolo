<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shkolo;
class ShkoloController extends Controller
{
    //
    public function shkolo(){
    	$shkolos = Shkolo::orderBy('id', 'DESC')->get();
    	return view('shkolo', compact('shkolos'));
    }

    public function shkolo_create(){

           
            return view("shkolo.shkolo-create");
       
    	
    }

    public function shkolo_store(Request $request){
         // dd($request);
          $shkolo = new Shkolo();
          $shkolo->title = $request->title;
          $shkolo->link = $request->link;
          $shkolo->color = $request->color;
          $shkolo->save();
           return redirect("shkolo");
    }

     public function shkolo_view($id)
    {
        //
           $shkolo = Shkolo::find($id);
        if($shkolo){
            
            return view('shkolo.shkolo-view', compact('shkolo'));
        }else{
            return back()->with('error', 'Color not found.');
        }
    }
    public function shkolo_edit($id){
      
       $shkolo = Shkolo::find($id);
       return view("shkolo.shkolo-edit", compact('shkolo'));
    }

    public function shkolo_update(Request $request){
         
          $shkolo = Shkolo::find($request->id);
         // dd($shkolo);
          $shkolo->title = $request->title;
          $shkolo->link = $request->link;
          $shkolo->color = $request->color;
          $shkolo->save();
           return redirect("shkolo");
    }
    public function shkolo_delete($id){

           $shkolo = Shkolo::find($id);
           $shkolo->delete();
           return redirect("shkolo");
    }
}
