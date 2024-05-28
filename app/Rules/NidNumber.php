<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NidNumber implements Rule
{
    public function passes($attribute, $value)
    {
        $length = strlen($value);
        return in_array($length, [10, 13, 17]);
    }

    public function message()
    {
        return trans('validation.nid_number');
    }
}
