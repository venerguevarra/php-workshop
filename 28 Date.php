<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
             /*
            Some characters that are commonly used for date and time:
            d - Represents the day of the month (01 to 31)
            m - Represents a month (01 to 12)
            Y - Represents a year (in four digits)
            l (lowercase 'L') - Represents the day of the week
            h - 12-hour format of an hour with leading zeros (01 to 12)
            i - Minutes with leading zeros (00 to 59)
            s - Seconds with leading zeros (00 to 59)
            a - Lowercase Ante meridiem and Post meridiem (am or pm)
             */

            // display the date in the format YYYY/MM/DD
            echo "Today is " . date("Y/m/d") . "<br>";
            // ‘l’ is used to display the day
            echo "Today is " . date("l"). "<br>";
            // display the time in the format HH:MM:SS
            echo "The time is " . date("h:i:sa");
        ?>
    </body>
</html>
