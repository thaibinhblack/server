<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 
use Validator;
class UserController extends Controller
{
    public $successStatus = 200;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('check'))
        {
            if($request->get('check') == 'username')
            {
                $user = UserModel::where('USERNAME',$request->get('value'))->first();
                if($user)
                {
                    return response()->json(true, 200);
                }
                else {
                    return response()->json(false, 200);
                }
            }
            else if($request->get('check') == 'email')
            {
                $user = UserModel::where('EMAIL',$request->get('value'))->first();
                if($user)
                {
                    return response()->json(true, 200);
                }
                else {
                    return response()->json(false, 200);
                }
            }
        }
        else if($request->has('code'))
        {
            if($request->get("code") == '29091996')
            {
                $users = UserModel::join('booking_rule','booking_user.UUID_RULE','booking_rule.UUID_RULE')->select('BOOKING_USER.*','BOOKING_RULE.NAME_RULE')->orderBy('CREATED_AT','DESC')->get();
                return response()->json($users, 200);
            }
        }
        else if($request->has('UUID_COUNTRY'))
        {
            $user = UserModel::where([
                ["UUID_COUNTRY",$request->get("UUID_COUNTRY")]
                ])->first();
            if($user)
            {
                return response()->json($user, 200);
            }
            else {
                return response()->json(false, 404);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->has('AVATAR'))
        {
            $file = $request->file('AVATAR');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/upload/avatar/', $file->getClientOriginalName());
            $path = 'upload/avatar/'.$name;
            $data["AVATAR"] = $path;
        }
        $data["PASSWORD"] = Hash::make($data["PASSWORD"]);
        $user = UserModel::create($data);
        return response()->json($user, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->has('code'))
        {
            if($request->get("code") == "29091996")
            {
                $user = UserModel::where("UUID_USER",$id)->first();
                if($user)
                {
                    return response()->json($user, 200);
                }
                else {
                    return response()->json(false, 404);
                }
            }
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $data = $request->all();
        if($request->has('PASSWORD'))
        {
            $data["PASSWORD"] = Hash::make($data["PASSWORD"]);
        }
        $user = UserModel::where("UUID_USER",$id)->update($data);
        return response()->json($request->all(), 200);
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
    public function login(Request $request)
    {
        $user = UserModel::where('EMAIL',$request->get("EMAIL"))->first();
        if(Hash::check($request->get("PASSWORD"), $user["PASSWORD"]))
        {
           
            // $auth = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $user = UserModel::where('EMAIL',$request->get("EMAIL"))->update([
                "USER_TOKEN" => $success['token']
            ]);
            
            return response()->json(['success' => $success['token']], $this->successStatus);
        }
        else {
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

}
