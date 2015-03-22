<?php namespace Transorder\Forms\Auth;

use Kris\LaravelFormBuilder\Form;

class RegisterForm extends Form
{
    public function buildForm()
    {
        $this->add('username', 'text')
             ->add('password', 'password')
             ->add('password_confirmation', 'password')
             ->add('name', 'text')
             ->add('address', 'textarea')
             ->add('phone_number', 'text')
             ->add('email', 'text')
             ->add('photo', 'file')
             ->add('register', 'submit', [
                 'attr' => ['class' => 'btn btn-primary']
             ]);
    }
}