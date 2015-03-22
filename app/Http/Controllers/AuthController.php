<?php namespace Transorder\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\UrlGenerator;
use Kris\LaravelFormBuilder\FormBuilder;
use Transorder\Http\Requests;
use Transorder\Http\Requests\Auth\Register;
use Transorder\User;
use Transorder\UserDetail;

class AuthController extends Controller
{
    /**
     * @var Guard
     */
    private $guard;
    /**
     * @var View
     */
    private $view;
    /**
     * @var Redirector
     */
    private $redirect;
    /**
     * @var UrlGenerator
     */
    private $url;

    /**
     * @param Guard $guard
     */
    public function __construct(ViewFactory $view, Guard $guard, Redirector $redirect, UrlGenerator $url)
    {
        $this->guard = $guard;
        $this->view = $view;
        $this->redirect = $redirect;
        $this->url = $url;

        $this->middleware('guest');
    }

    public function loginForm(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('Transorder\Forms\Auth\LoginForm', [
            'method' => 'POST',
            'url'    => route('auth.login'),
        ]);

        return $this->view->make('auth.login', compact('form'));
    }

    public function login()
    {
        $this->guard->attempt(['username' => ''])
    }


    public function registerForm(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('Transorder\Forms\Auth\RegisterForm', [
            'method' => 'POST',
            'url'    => route('auth.register'),
        ]);

        return $this->view->make('auth.register', compact('form'));
    }

    public function register(Register $register, User $user)
    {
        $newUser = $user::newUser($register);

        $this->guard->login($newUser);

        return $this->redirect->intended($this->url->route('product.list'));
    }

}
