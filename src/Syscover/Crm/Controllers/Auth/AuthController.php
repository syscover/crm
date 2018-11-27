<?php namespace Syscover\Crm\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Route to get login form
     *
     * @var string
     */
    protected $loginPath;

    /**
     * Redirect route after logout
     *
     * @var string
     */
    protected $logoutPath;

    /**
     * Here you can customize your guard, this guar has to set in auth.php config
     *
     * @var string
     */
    protected $guard;


	/**
	 * Create a new authentication controller instance.
	 */
	public function __construct()
	{
        $this->redirectTo   = null;
        $this->loginPath    = null;
        $this->logoutPath   = null;
	}

    /**
     * Return view with login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('pulsar::auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'user_301' => 'required', 'password' => 'required',
        ]);

        $credentials = $request->only('user_301', 'password');

        if(auth()->guard('crm')->attempt($credentials, $request->has('remember')))
        {
            // check if customer is confirmed
            if (!auth()->guard('crm')->user()->confirmed_301)
            {
                auth()->guard('crm')->logout();

                return redirect($this->loginPath)
                    ->withInput($request->only('user_301', 'remember'))
                    ->withErrors([
                        'loginErrors' => 2
                    ]);
            }

            // check if customer is active
            if(!auth()->guard('crm')->user()->active_301)
            {
                auth()->guard('crm')->logout();

                return redirect($this->loginPath)
                    ->withInput($request->only('user_301', 'remember'))
                    ->withErrors([
                        'loginErrors' => 3
                    ]);
            }

            return redirect()->intended($this->redirectPath());
        }

        return redirect($this->loginPath)
            ->withInput($request->only('user_301', 'remember'))
            ->withErrors([
                'loginErrors' => 1
            ]);
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        auth()->guard('crm')->logout();
        session()->flush();

        return redirect($this->logoutPath);
    }
}