<?php


use Carbon\Carbon;


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



function dateDifference($startDate, $endDate)
{
    try {
        $startDate = Carbon::createFromFormat('d/m/Y', $startDate)->startOfDay();
        if ($endDate === null || !Carbon::createFromFormat('d/m/Y', $endDate)) {
            $endDate = Carbon::now()->startOfDay();  
        } else {
            $endDate = Carbon::createFromFormat('d/m/Y', $endDate)->startOfDay();
        }
        $diff = $endDate->diff($startDate);

        if (app()->getLocale() === 'bn') {
            $formattedDiff = $diff->format('%y বছর, %m মাস, %d দিন');
            return englishToBanglaNumber($startDate->format('d/m/Y')) . ' থেকে ' . englishToBanglaNumber($endDate->format('d/m/Y')) . '; ' . englishToBanglaNumber($formattedDiff);
        } else {
            $formattedDiff = $diff->format('%y years, %m months, %d days');
            return $startDate->format('d/m/Y') . ' to ' . $endDate->format('d/m/Y') . '; ' . $formattedDiff;
        }
    } catch (\Exception $e) {
        // Handle the exception, log it, or return an error message
        return 'Error: ' . $e->getMessage();
    }
}
