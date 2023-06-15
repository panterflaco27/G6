<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Route::get('/', function () {
            return view('index');
        });
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function login(Request $request){
        $request->validate([
            'coelec' => 'required|email|regex:/^.+@.+\..+$/',
            'pass' => 'required|min:8',
        ]);
    
        $credentials = $request->only('coelec', 'pass');
    
        if (Auth::attempt($credentials)) {
            // Las credenciales son válidas y el usuario ha iniciado sesión exitosamente
            return view('principal');
        }
    
        return redirect()->back()->withErrors([
            'coelec' => 'Las credenciales no son válidas',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'appat' => 'required|min:3',
            'apmat',
            'coelec' => 'required|email|regex:/^.+@.+\..+$/',
            'pass' => 'required|min:8',
            'passval' => 'required|same:pass'
        ]);
        $Users = Users::create($request->only('nombre', 'appat', 'apmat', 'coelec', 'pass'));
        return view('principal');
    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users)
    {
        //
    }
}
