<?php
namespace App\Http\Controllers\Auth;
 
use App\User;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
 
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
 
class AuthController extends Controller {
 
   
    /**
     * the model instance
     * @var User
     */
    protected $user; 
    /**
     * The Guard implementation.
     *
     * @var Authenticator
     */
    protected $auth;
 
    /**
     * Create a new authentication controller instance.
     *
     * @param  Authenticator  $auth
     * @return void
     */
    public function __construct(Guard $auth, User $user)
    {
        $this->user = $user; 
        $this->auth = $auth;
 
        $this->middleware('guest', ['except' => ['getLogout']]); 
    }
 
    /**
     * Show the application registration form.
     *
     * @return Response
     */
    public function getRegister()
    {
        return view('auth.register');
    }
 
    /**
     * Handle a registration request for the application.
     *
     * @param  RegisterRequest  $request
     * @return Response
     */
    public function postRegister(RegisterRequest $request)
    {
        $this->user->username = $request->username;
        $this->user->email = $request->email;
        $this->user->password = bcrypt($request->password);
        $this->user->age=$request->age;
        $this->user->gender=$request->gender;
        $this->user->save();
        
        $this->user->profile()->save(new Profile);
        
        $this->auth->login($this->user); 
        return redirect('/dash-board'); 
    }
 
    /**
     * Show the application login form.
     *
     * @return Response
     */
    public function getLogin()
    {
        return view('auth.login');
    }
 
    /**
     * Handle a login request to the application.
     *
     * @param  LoginRequest  $request
     * @return Response
     */
    public function postLogin(LoginRequest $request)
    {
        if ($this->auth->attempt($request->only('email', 'password')))
        {
            return redirect('/dash-board');
        }
 
        return redirect('/')->withErrors([
            'email' => 'The credentials you entered did not match our records. Try again?',
        ]);
    }
 
    /**
     * Log the user out of the application.
     *
     * @return Response
     */
    public function getLogout()
    {
        $this->auth->logout();
 
        return redirect('/');
    }
 
}