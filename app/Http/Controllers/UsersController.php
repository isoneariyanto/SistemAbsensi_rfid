<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users  =  User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert cara 1
        // $user = new PersonalUser;
        // $user->username = $request->username;
        // $user->pass = $request->pass;
        // $user->first_name = $request->first_name;
        // $user->last_name = $request->last_name;
        // $user->email = $request->email;
        // $user->placeofbirth = $request->placeofbirth;
        // $user->dateofbirth = $request->dateofbirth;
        // $user->address = $request->address;
        // $user->company = $request->company;
        // $user->job = $request->job;
        // $user->level = $request->level;
        // $user->save();


        //insert cara 3 setelah tambah fillable/guarded di model
        // User::create($request->all());
        
        //validasi
        $request->validate([
            'username' => 'required|min:6',
            'pass' => 'required|min:8',
            'first_name' => 'required|min:2',
            // 'last_name' => 'required',
            'email' => 'required',
            'placeofbirth' => 'required',
            'dateofbirth' => 'required',
            'address' => 'required',
            'company' => 'required',
            'job' => 'required',
            'level' => 'required'
        ]);

        //insert data cara 2, tambahkan juga fillable/guarded di modelnya
        User::create([
            'username' => $request->username,
            'pass' => Crypt::encryptString($request->pass),
            'first_name' => Str::ucfirst($request->first_name),
            'last_name' => Str::ucfirst($request->last_name),
            'email' => $request->email,
            'placeofbirth' => Str::ucfirst($request->placeofbirth),
            'dateofbirth' => $request->dateofbirth,
            'address' => Str::upper($request->address),
            'company' => Str::title($request->company),
            'job' => Str::ucfirst($request->job),
            'level' => Str::ucfirst($request->level)
        ]);

        return redirect('/users');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.detail', compact('user'));
        // return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function decryptpassword(User $user){
        User::where('id_staff', $user->id_staff)
                    ->update([ 'pass' => Crypt::decryptString($user->pass) ]);

        return redirect('users/'.$user->id_staff.'/edit');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|min:6',
            'pass' => 'required|min:8',
            'first_name' => 'required|min:2',
            // 'last_name' => 'required',
            'email' => 'required',
            'placeofbirth' => 'required',
            'dateofbirth' => 'required',
            'address' => 'required',
            'company' => 'required',
            'job' => 'required',
            'level' => 'required'
        ]);
        
        User::where('id_staff', $user->id_staff)
                    ->update([
                        'username' => $request->username,
                        'pass' => Crypt::encryptString($request->pass),
                        'first_name' => Str::ucfirst($request->first_name),
                        'last_name' => Str::ucfirst($request->last_name),
                        'email' => $request->email,
                        'placeofbirth' => Str::ucfirst($request->placeofbirth),
                        'dateofbirth' => $request->dateofbirth,
                        'address' => Str::upper($request->address),
                        'company' => Str::title($request->company),
                        'job' => Str::ucfirst($request->job),
                        'level' => Str::ucfirst($request->level)
                    ]);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id_staff);
        return redirect('/users');
    }
}
