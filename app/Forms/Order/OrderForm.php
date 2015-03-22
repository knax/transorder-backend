<?php namespace Transorder\Forms\Order;

use Kris\LaravelFormBuilder\Form;

class OrderForm extends Form
{
    public function buildForm()
    {
        $this->add('color', 'select', ['choices' => $this->getData('colors_available')])
             ->add('amount', 'number')
             ->add('order', 'submit', [
                 'attr' => ['class' => 'btn btn-primary']
             ]);
    }
}