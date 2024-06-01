<?php

if (!function_exists('englishToBanglaNumber')) {
    function englishToBanglaNumber($number) {
        $banglaNumbers = [
            '0' => '০',
            '1' => '১',
            '2' => '২',
            '3' => '৩',
            '4' => '৪',
            '5' => '৫',
            '6' => '৬',
            '7' => '৭',
            '8' => '৮',
            '9' => '৯',
        ];


        if (app()->getLocale() === 'bn'){
            return strtr((string)$number, $banglaNumbers);

        }   else{
            return $number ;
            
        }                              

       
    }
}
