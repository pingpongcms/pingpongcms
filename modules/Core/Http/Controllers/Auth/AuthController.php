<?php namespace Cms\Core\Http\Controllers\Auth;

use Cms\Core\Commands\Auth\LoginCommand;
use Cms\Core\Commands\Auth\LogoutCommand;
use Cms\Core\Commands\Auth\RegisterCommand;
use Cms\Core\Contracts\Services\Cms;
use Cms\Core\Http\Requests\Auth\LoginRequest;
use Cms\Core\Http\Requests\Auth\RegisterRequest;
use Pingpong\Modules\Routing\Controller;

class AuthController extends Controller {
	
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

		if ( ! $login) {
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
		$user = $this->dispatch(new RegisterCommand($request));	

		auth()->login($user);

		return $this->cms->redirect('/');
	}

	public function getLogout()
	{
		$this->dispatch(new LogoutCommand);

		return redirect('auth/login');
	}
	
}