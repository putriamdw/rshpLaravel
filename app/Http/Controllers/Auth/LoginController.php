<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginForm()
    {
        return view('auth.login');
    }

   public function login(Request $request)
   {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required|in:1,2,3,4',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = \App\Models\User::where('email', $request->email)->first();

        if (!$user) {
            $user = \App\Models\User::create([
                'nama' => explode('@', $request->email)[0],
                'email' => $request->email,
                'password' => \Hash::make($request->password),
             ]);
            // Hubungkan user dengan role yang dipilih
            \App\Models\RoleUser::create([
                'iduser' => $user->iduser,
                'idrole' => $request->role,
                'status' => 1,
            ]);
        }

        // Cek Password
        if (!\Hash::check($request->password, $user->password)) {
            return redirect()->back()
                ->withErrors(['passowrd' => 'Password salah.'])
                ->withInput();
        }

        // Ambil role user
        $roleUser = \App\Models\RoleUser::where('iduser', $user->iduser)->first();

        if (!$roleUser) {
            $roleUser = \App\Models\RoleUser::create([
                'iduser' => $user->iduser,
                'idrole' => $request->role,
                'status' => 1,
            ]);
}

        $role = \App\Models\Role::find($roleUser->idrole);

        // Login user ke session
        Auth::login($user);

        // Simpan session user
        $request->session()->put([
            'user_id' => $user->iduser,
            'user_name' => $user->nama,
            'user_email' => $user->email,
            'user_role' => $roleUser->idrole,
            'user_role_name' => $role->nama_role,
            'user_status' => $roleUser->status,

        ]);

        switch ($role->idrole) {
            case '1':
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil!');
            case '2':
            return redirect()->route('dokter.dashboard')->with('success', 'Login berhasil!');
            case '3':
            return redirect()->route('perawat.dashboard')->with('success', 'Login berhasil!');
            case '4':
            return redirect()->route('resepsionis.dashboard')->with('success', 'Login berhasil!');
            default:
            return redirect()->route('pemilik.dashboard')->with('success', 'Login berhasil!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil!');
    }
}
