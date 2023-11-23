<?php

namespace App\Http\Controllers;
use App\Models\Destinations;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function home(){
        return view("home");
    }

    public function destinations_data(){
        $destinations = Destinations::get();

        $data = ([
            "destinations" => $destinations
        ]);
        return view("destinations_data",$data);
    }

    public function destinations_delete($id){
        Destinations::where("id",$id)->delete();
        return redirect("destinations-data");
    }

    public function form_tambah(){
        return view("form_tambah");
    }

    public function proses_tambah(Request $request) {
        $name = $request->name;
        $location = $request->location;
        $details = $request->details;
        $day_open = $request->day_open;
        $time_open = $request->time_open;
        $price = $request->price;

        Destinations::create([
            "name" => $name,
            "location" => $location,
            "details" => $details,
            "day_open" => $day_open,
            "time_open" => $time_open,
            "price" => $price
        ]);

        session()->flash("pesan","Data added successfully");

        return redirect("destinations-data");
    }

    public function form_edit($id) {
        $destinations = Destinations::where("id", $id)->first();

        if(!$destinations){
            abort(404);
        }

        $data = ([
            "destinations" => $destinations
        ]);

        return view("form_edit",$data);
    }

    public function proses_edit(Request $request) {
        $id = $request->id;
        $name = $request->name;
        $location = $request->location;
        $details = $request->details;
        $day_open = $request->day_open;
        $time_open = $request->time_open;
        $price = $request->price;

        Destinations::where("id",$id)->update([
            "name" => $name,
            "location" => $location,
            "details" => $details,
            "day_open" => $day_open,
            "time_open" => $time_open,
            "price" => $price
        ]);

        session()->flash("pesan","Data saved successfully");

        return redirect("destinations-data/".$id."/edit");
    }
}
