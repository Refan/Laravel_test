<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required',
            // 'g-recaptcha-response' => 'required',
        ]);

        if ($validator->fails())
        {
            var_dump($validator->errors());exit;
            return redirect()->back()->withErrors($validator->errors());
        }

        exit;

        if (!$this->recaptcha_chk($_POST['g-recaptcha-response'])){
            var_dump('error');
            exit;
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // 認證通過...
            return redirect()->intended('home');
            // var_dump('success');exit;
        }

        var_dump('error');
        exit;   
    }
    
    public function recaptcha_chk($recaptcha)      //檢查驗證碼
    {
        $url = "https://www.google.com/recaptcha/api/siteverify";
    	$post['secret'] = env('RECAPTCHA_SECRET');
    	$post['response'] = $recaptcha;
        $rs = file_get_contents($url.'?secret='.$post['secret'].'&response='.$post['response']);
        $rs = json_decode($rs,true);
        if ($rs['success']==true){
    		return true;
    	}else{
			return false;
    	}
    }

    //客製化認證後，轉向的 URI
    // protected $redirectPath = '/ui';
}
