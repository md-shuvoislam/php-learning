<?php

/**
 * The required format parameter of the date() function specifies how to format the date (or time).

Here are some characters that are commonly used for dates:

d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week
Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.
 */

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";

// PHP Tip - Automatic Copyright Year

// &copy; 2010-<?php echo date("Y");

echo "<br>";

/**
 Get a Time
Here are some characters that are commonly used for times:

H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)
The example below outputs the current time in the specified format: */

echo "The time is " . date("h:i:sa");

echo "<br>";

// get your time zone

date_default_timezone_set("Asia/Dhaka");
echo "The time is " . date("h:i:sa");


