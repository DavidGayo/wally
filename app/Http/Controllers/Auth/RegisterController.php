<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;

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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'rol' =>['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol' => $data['rol'],
        ]);
    }

    public function index()
    {
        $usuarios = User::all();

        return view('auth.index',['usuarios' => $usuarios]);
    }

    public function show(User $user, $id)
    {
       $usuario = $user::find($id);

        return view('auth.show',['usuario' => $usuario]);
    }

    public function edit(User $user, $id)
    {
       $usuario = $user::find($id);

        return view('auth.edit',['usuario' => $usuario]);
    }

    public function update(Request $request, User $user, FlasherInterface $flasher, $id){

        $usuario = $user::find($id);
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        if($request->input('password')){
            $usuario->password = Hash::make($request->input('password'));
        }
        $usuario->rol = $request->input('rol');
        $usuario->update();

        $flasher->addInfo('El usuario a sido actualizado correctamente!!');

        return redirect()->route('usuario.index');
    }
}
