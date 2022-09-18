<?php

namespace App\Http\Controllers;

use App\Models\Meeting\MEETF;
use App\Models\Meeting\MEETO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MeetingController extends Controller
{
    public static function routes(){
        Route::prefix('meeting')->group(function (){
            Route::get('/',[static::class,'index']);
            Route::get('create',[static::class,'offline']);
            Route::post('create',[static::class,'storeOffline']);
            Route::get('create/online',[static::class,'online']);
            Route::post('create/online',[static::class,'storeOnline']);
            Route::get('edit/{id}',[static::class,'edit']);
            Route::get('delete/{id}',[static::class,'delete']);
        });
    }

    public static function index()
    {
        return view('meeting.list',['meetings'=>MEETF::all()]);
    }
    public static function offline(){
        return view('meeting.create');
    }
    public static function online(){
        return view('meeting.createonline');
    }

    public static function storeOffline(Request $request){
        $data = $request->validate([
            'date'=>'required',
            'time'=>'required',
            'type'=>'required',
            'location'=>'required',
            'description'=>'required',
            'members'=>'required',
        ]);
        $meeting = new MEETF();
        $meeting->fill($data);
        $meeting->save();
        return redirect('meeting');
    }

    public static function storeOnline(Request $request){
        $data = $request->validate([
            'date'=>'required',
            'time'=>'required',
            'type'=>'required',
            'location'=>'required',
        ]);
        $meeting = new MEETO();
        $meeting->fill($data);
        $meeting->save();
        return redirect('meeting');
    }

    public static function edit($id)
    {
        $meeting = MEETF::find($id);
        print_r($meeting);
    }
    public static function delete($id)
    {
        $meeting = MEETF::find($id)->delete();
        return redirect()->back();
    }
}
