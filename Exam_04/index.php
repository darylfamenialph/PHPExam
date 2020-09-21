<?php


function DatesDifference($date1, $date2)
{
    $date_diff = date_diff($date1,$date2);
    $result = $date_diff->format("%a");
    if($result >= 365)
    {
        $years = $result/365;
        $months = (365*($years - floor($years)))/30;
        $days = 30*($months - floor($months));

        echo floor($years)." year(s), ".floor($months)." month(s), ".floor($days)." day(s)";
    }
    elseif($result < 365 && $result >= 30)
    {
        $months = $result/30;
        $days = 30*($months - floor($months));

        echo "0 year(s), ".floor($months)." month(s), ".floor($days)." day(s)";
    }else
    {
        echo "0 year(s), 0 month(s), ".$result." day(s)";
    }
}

DatesDifference(new DateTime("2020-08-10"), new DateTime("2018-04-05"));



?>