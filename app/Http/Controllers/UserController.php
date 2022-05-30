<?php

namespace App\Http\Controllers;

use App\Http\Resources\actionResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserResource::collection(User::all());
        return response()->json((($users)));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function register(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->realname = $request->realname;
        $user->phone_number = $request->phone_number;
        $user->gender = $request->gender;
        $user->birth = $request->birth;
        $user->save();
        return new UserResource($user);
    }
    
    public function uploadAvatar(Request $request, $id){
        $user = User::find($id);
        if(is_null($user)) {
            return response()->json(['message'=>'user not found'], 404);
        }
        if($request->hasFile('avatar'))
        {
            $destination_path ='images/avatars';
            $image = $request->file('avatar');
            $extension = $image->getClientOriginalExtension();
            $avatar_name = 'user_avatar_'.$user->id.".".$extension;
            $user->avatar = $request->file('avatar')->storeAs($destination_path, $avatar_name);
            $user->save();
            return new UserResource($user);
        }
        else
        {
            return response()->json(['message'=>'file not found'], 404);
        }
    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return ["error"=>"Email or password is not matched"];
        }
        return new UserResource($user);
    }

    public function grantPermission(Request $request, $id){
        $user = User::findOrFail($id);
        if(is_null($user)){
            return response()->json(['message'=>'user not found'], 404);
        }
        if(is_null($request->permission)){
            return response()->json(new UserResource($user));
        }
        $user->permission()->sync((array)$request->permission);
        return response()->json(new UserResource($user));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        if(is_null($user)) {
            return response()->json(['message'=>'user not found'], 404);
        }
        $user->update($request->all());

        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
