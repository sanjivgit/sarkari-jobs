<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    private $_mUser;
    public function __construct()
    {
        $this->_mUser = new User();
    }


    /**
     * | User Login
     */    
    public function loginAuth(Request $req)
    {
        $validated = Validator::make(
            $req->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );
        if ($validated->fails())
            return validationError($validated);
        try {
            $user = $this->_mUser->getUserByEmail($req->email);

            if (!$user)
                throw new Exception("Oops! Given email does not exist");
            
            if (Hash::check($req->password, $user->password)) {

                $token = $user->createToken('my-app-token')->plainTextToken;
               

                $data['token'] = $token;
                $data['userDetails'] = $user;
                return responseMsgs(true, "You have Logged In Successfully", $data, 010101, "1.0", responseTime(), "POST", $req->deviceId);
            }

            throw new Exception("Password Not Matched");
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), "");
        }
    }

    /**
     * | logout
     */
    public function logout(Request $req)
    {
        try {
            $req->user()->currentAccessToken()->delete();                               // Delete the Current Accessable Token
            return responseMsgs(true, "You have Logged Out", [], "", "1.0", responseTime(), "POST", $req->deviceId);
        } catch (Exception $e) {
            return response()->json($e, 400);
        }
    }
}
