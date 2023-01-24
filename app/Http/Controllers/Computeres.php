<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class Computeres extends Controller
{

    private static function getData()
    {
        return [
             ['id' => 1, 'name' => 'dell'],
            ['id' => 2, 'name' => 'appil'],
            ['id' => 3, 'name' => 'asus'],
 
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        return view('computers.index',  [ 'computers' => Computer::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
    }

 
    
    public function store(Request $request)
    {

        //validation
        $request -> validate([
            'computer-name'=>'required',
            'computer-price'=>'required | integer'

        ]);
        $computer = new Computer();
        
        $computer->name = strip_tags($request->input('computer-name'));
        $computer->price = strip_tags($request->input('computer-price'));

        $computer->save();

        return redirect()->route('computers.index');

    }
    
    public function update(Request $request, $computer)
    {
        //validation
        $request -> validate([
            'computer-name'=>'required',
            'computer-price'=>'required | integer'

        ]);
        $toUpdate = Computer::findOrFail($computer);
        
         
        $toUpdate->name = strip_tags($request->input('computer-name'));
        $toUpdate->price = strip_tags($request->input('computer-price'));

        $toUpdate->save();
        return redirect()->route('computers.show',$toUpdate);
    }

    
    public function show($computer)
    {
        
        return view('computers.show',[ 'computer' => Computer::findOrFail($computer)
        ]);

    }

 
    
    public function edit($computer)
    {
        return view('computers.edit', ['computer' => Computer::findOrFail($computer)]);
        
    }

    
    
    public function destroy($computer)
    {
       $toDelete= Computer::findOrFail($computer);
        $toDelete -> delete();
        return redirect()->route('computers.index');
        
    }
}
