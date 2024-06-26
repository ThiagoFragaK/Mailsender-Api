<?php

namespace App\Helpers;

use Exception;
use Carbon\Carbon;

class DateTimeHelper
{
    public static function FormatDateTime($date, $format = "Y-m-d H:i:s")
    {
        return Carbon::parse($date)->format($format);
    }
}
