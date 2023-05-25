<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('IsStillLoggedInMiddleware');
    }

    public function getProfile(Request $request)
    {

        $user_id = $request->route('id');

        $user = Session::get('user',[]);
        $author = Author::where('user_id','=',$user_id)->first();
        return view('user.profile',compact('user','author'));
    }

    public function getLoginForm()
    {
        $user = Session::get('user',[]);
        unset($user->loginToken);
        return view('user.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getrgisterForm()
    {
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $dbUser = new User();
        $path= $request->file('profilePic')->store('public/images/user');
        $filename = basename($path);

        $dbUser->fill($request->all());
        $dbUser->password = Hash::make($request->password);
        $dbUser->profilePic = $filename;

        $dbUser->save();

        if($request->role == 'author') {
            $author = new Author();
            $author->user_id = $dbUser->id;
            $author->save();
        }

        return redirect(route('user.login'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $DBuser = User::find($id);

        $DBuser->fill($request->all());

        $DBuser->update();

        if($DBuser->role == 'user') {
            $author = Author::where('user_id','=',$id);
            if($author) {
                $author->delete();
            }
        } else {
            $author = new Author();
            $author->user_id = $DBuser->id;
            $author->save();
        }

        $user = (object) $DBuser->toArray();
        $loginToken = Str::random(40);
        $user->loginToken = $loginToken;
        Session::put('user',$user);

        return redirect(route('user.profile',compact("id")));
//        return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect(route('user.login'));
    }

    public function editProfilePic(Request $request, string $id)
    {
        $DBuser = User::find($id);
//        return $user;

        $path= $request->file('profilePic')->store('public/images/user');
        $filename = basename($path);
        $DBuser->profilePic = $filename;
        $DBuser->update();

        $user = (object) $DBuser->toArray();
        $loginToken = Str::random(40);
        $user->loginToken = $loginToken;

        Session::put('user',$user);


        return redirect(route('user.profile',['id'=>$id]));



    }
}
