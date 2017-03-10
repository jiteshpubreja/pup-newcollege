<?php

namespace App\Http\Controllers\Auth;

use App\College;
use App\Http\Controllers\Controller;
use App\Notifications\ActivationMail as ActivationMailNotification;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use Notifiable;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'mobile' => 'required|max:10',
            'landline' => 'required|max:11',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
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
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'mobile' => $data['mobile'],
            'landline' => $data['landline'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }



    public function register(Request $request) {
      $input = $request->all();
      $validator = $this->validator($input);
      if ($validator->passes()){
        $user = $this->create($input)->toArray();
        $user['link'] = Str::random(60);

        DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);
        College::create(['id_user'=>$user['id'],]);

        // Mail::send('emails.activation', $user, function($message) use ($user){
        //   $message->to($user['email']);
        //   $message->subject(Lang::get('auth.activationsubject'));
        // });

        $this->email = $user['email'];
        $this->notify(new ActivationMailNotification($user['link']));

        return redirect()->to('login')->with('success',Lang::get('auth.codesent'));
      }

      return back()->with('errors',$validator->errors());
    }


    public function userActivation($token){

      $check = DB::table('user_activations')->where('token',$token)->first();
      if(!is_null($check)){
        $user = User::find($check->id_user);
        if ($user->is_activated ==1){
          return redirect()->to('login')->with('success',Lang::get('auth.preactivated'));
        }

        $user->update(['is_activated' => 1]);
        DB::table('user_activations')->where('token',$token)->delete();
        return redirect()->to('login')->with('success',Lang::get('auth.activated'));
      }
      return redirect()->to('login')->with('warning',Lang::get('auth.invalidtoken'));
    }
}
