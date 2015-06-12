<?php namespace Pingpong\Cms\Core\Http\Controllers\Auth;

use Pingpong\Cms\Core\Commands\Auth\LoginCommand;
use Pingpong\Cms\Core\Commands\Auth\LogoutCommand;
use Pingpong\Cms\Core\Commands\Auth\RegisterCommand;
use Pingpong\Cms\Core\Commands\Auth\VerifyEmailAddress;
use Pingpong\Cms\Core\Contracts\Services\Cms;
use Pingpong\Cms\Core\Http\Requests\Auth\LoginRequest;
use Pingpong\Cms\Core\Http\Requests\Auth\RegisterRequest;
use Pingpong\Modules\Routing\Controller;

class AuthController extends Controller
{
    
    public function __construct(Cms $cms)
    {
        $this->middleware('cms.guest', ['except' => 'getLogout']);
        
        $this->cms = $cms;
    }

    public function getLogin()
    {
        return view('core::auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $login = $this->dispatch(new LoginCommand(
            $request->email,
            $request->password,
            $request->has('remember')
        ));

        if (! $login) {
            return redirect()->back()->withErrors([
                'email' => 'Invalid email or password.'
            ]);
        }

        return $this->cms->redirect('/');
    }

    public function getRegister()
    {
        return view('core::auth.register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $user = $this->dispatch(new RegisterCommand($request->all()));

        flash('Thanks for signing up! Please check your email.');

        return redirect('auth/login');
    }

    public function getLogout()
    {
        $this->dispatch(new LogoutCommand);

        flash('You have been logged out.');

        return redirect('auth/login');
    }

    public function getConfirmation($code)
    {
        $this->dispatch(new VerifyEmailAddress($code));

        flash('You have successfully verified your account.');

        return redirect('auth/login');
    }
}
