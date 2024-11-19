<?php

namespace App\Services;

use Carbon\Carbon;

class DateHelper
{
    public static function numberToWord($number)
    {
        $words = [
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            5 => 'five',
            6 => 'six',
            7 => 'seven',
            8 => 'eight',
            9 => 'nine'
        ];

        return $number < 10 ? ($words[$number] ?? $number) : $number;
    }

    public static function dateToYears($fromDate, $toDate = null)
    {
        $start = Carbon::parse($fromDate)->startOfYear();
        $end = $toDate ? Carbon::parse($toDate)->startOfYear() : Carbon::now()->startOfYear();
        $years = $start->diffInYears($end);

        $yearsWord = "years";
        if ($years <= 1) {
            $yearsWord = "year";
        }

        $yearsValue = self::numberToWord($years);

        return "{$yearsValue} {$yearsWord}";
    }
}
