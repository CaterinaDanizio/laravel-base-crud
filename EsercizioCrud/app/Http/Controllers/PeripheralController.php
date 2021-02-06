<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peripheral;

class PeripheralController extends Controller
{
    public function index() {

    $peripherals = Peripheral::all();

    return view('pages.peripheralIndex', compact('peripherals'));
    }

    public function show($id) {
    
    $periph = Peripheral::findOrFail($id);
    return view('pages.peripheralShow', compact('periph'));
   }

   public function create() {
      return view('pages.peripheralCreate');
   }

   public function store(Request $request) {
       Peripheral::create($request -> all());
       return redirect() -> route('peripheralIndex');
   }
}
