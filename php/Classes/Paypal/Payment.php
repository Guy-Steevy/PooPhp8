<?php

namespace Classes\Paypal;

use Classes\Users\User;
use DateTime;

class Payment
{
    public function __construct()
    {
        echo '<pre>';
        var_dump(new User());
        var_dump(new DateTime);
        echo '<pre>';
    }
}