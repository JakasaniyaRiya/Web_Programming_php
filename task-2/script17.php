<?php
        $year=2024;
        if(($year % 4 == 0 && $year % 100 != 0)||($year % 400 == 0))
        {
            echo "this year is leap year";
        }
        else
        {
            echo "this year is not leap year";
        }

?>