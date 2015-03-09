<?php namespace Transorder\Helpers;

class Money
{

    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function in($currency, $decimal = 2)
    {
        $config = \Config::get('money.' . $currency);
        return $config['prefix'] .
        number_format(
            $this->amount,
            $decimal,
            $config['decimal_point'],
            $config['thousand_separator']
        ) .
        $config['suffix'];
    }
}
