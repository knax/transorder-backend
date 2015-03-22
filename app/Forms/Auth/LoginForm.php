<?php namespace Transorder\Forms\Auth;

use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this->add('username', 'text')
            ->add('password', 'password')
            ->add('login', 'submit', [
                 'attr' => ['class' => 'btn btn-primary']
             ]);
    }
}