<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Auth;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo;
    public function redirectTo()
    {
        // var_dump(Auth::user()->role);die;
        switch(Auth::user()->role){
            case 'admin':
            $this->redirectTo = '/admin';
            return $this->redirectTo;
                break;
            case 'operator':
                $this->redirectTo = '/operator';
                return $this->redirectTo;
                break;
            case 'pengguna':
                $this->redirectTo = '/pengguna';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }

        // return $next($request);
    }

}
