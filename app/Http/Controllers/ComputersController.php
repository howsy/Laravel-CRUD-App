<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;


class ComputersController extends Controller
{

    private static function GetData(){
        return[
            ['id'=>1 , 'name'=>'MAC' , 'origon'=>'USA' ],
            ['id'=>2 , 'name'=>'Lenovo' , 'origon'=>'Freance' ],
            ['id'=>3 , 'name'=>'HP' , 'origon'=>'Japan' ],
            ['id'=>4 , 'name'=>'DELL' , 'origon'=>'USA' ],

        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computers.index', [
            'computers'=>Computer::all()
        ] );
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required' ,
                            'origin'=>'required',
                            'price'=>'required|integer' ]);

        $computer = new Computer();

        $computer->name = strip_tags( $request->input('name'));
        $computer->origin =strip_tags($request->input('origin')) ;
        $computer->price = strip_tags($request->input('price'));
        $computer->save();
        return redirect()->route('computers.index');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $computer)
    {
{
        return view('computers.show', ['computer'=>Computer::findOrFail($computer)] );

}
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $computer)
    {

        return view('computers.edit' , ['computer'=>Computer::findOrFail($computer)
    ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $computer)
    {
        $request->validate(['name'=>'required' ,
        'origin'=>'required',
        'price'=>'required|integer' ]);
        $toupdate = Computer::findOrFail($computer);
        $toupdate->name = strip_tags( $request->input('name'));
        $toupdate->origin =strip_tags($request->input('origin')) ;
        $toupdate->price = strip_tags($request->input('price'));
        $toupdate->save();
        return redirect()->route('computers.show' , $computer );


        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $computer)
    {
        $todelete = Computer::findOrFail($computer);
        $todelete->delete();
        return redirect()->route('computers.index');
        //
    }
}
