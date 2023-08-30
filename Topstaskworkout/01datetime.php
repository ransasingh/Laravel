<?php
date_default_timezone_set('Asia/Kolkata');

echo  date("d/m/Y");
echo  "<br>";
echo  date("d/m/y");
echo  "<br>";
echo  date("d/m/y D");
echo  "<br>";
echo  date("d/m/y D H:i:s A");
echo  "<br>";
echo mktime(23, 21, 50, 11, 25, 2017);
echo  "<br>";
echo "Time() : " . time();



echo "<br>";
$timestamp = time();
echo ($timestamp);
echo "<br>";
echo (date("F d, Y h:i:s A", $timestamp));
echo "<br>";
echo (date("M d, Y h:i:s A", $timestamp));

echo "<br>";

$dateTime = new DateTime('2008-09-22');
echo "new DateTime('2008-09-22'); &#36;dateTime->format('U'); <br>";
echo $dateTime->format('U');

// or 
echo "<br>";

$date = new DateTime('2008-09-22');
echo "new DateTime('2008-09-22'); &#36;date->getTimestamp(); <br>";
echo $date->getTimestamp();

echo "<br>";
$originalDate = "2010-03-21";
echo "<br>strtotime".strtotime($originalDate)."<br>";
$newDate = date("d-m-Y", strtotime($originalDate));
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p> In this article, we will see how to get the date & time using the date() & time() function in PHP, we will also see the various formatting options available with these functions & understand their implementation through the examples.</p>

    <p> Date and time are some of the most frequently used operations in PHP while executing SQL queries or designing a website etc. PHP serves us with predefined functions for these tasks. Some of the predefined functions in PHP for date and time are discussed below.</p>

    <p> PHP date() Function: The PHP date() function converts timestamp to a more readable date and time format.</p>



    <h2>timestamp</h2>
    <p>Returns the current time measured in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT). </p>

    <table class="ws-table-all notranslate">
        <tbody>
            <tr>
                <th style="width:20%">Parameter</th>
                <th style="width:80%">Description</th>
            </tr>
            <tr>
                <td><em>format</em></td>
                <td>Required. Specifies the format of the outputted date string. The following characters can be used:
                    <ul>
                        <li>d - The day of the month (from 01 to 31)</li>
                        <li>D - A textual representation of a day (three letters)</li>
                        <li>j - The day of the month without leading zeros (1 to 31)</li>
                        <li>l (lowercase 'L') - A full textual representation of a day</li>
                        <li>N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)</li>
                        <li>S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)</li>
                        <li>w - A numeric representation of the day (0 for Sunday, 6 for Saturday)</li>
                        <li>z - The day of the year (from 0 through 365)</li>
                        <li>W - The ISO-8601 week number of year (weeks starting on Monday)</li>
                        <li>F - A full textual representation of a month (January through December)</li>
                        <li>m - A numeric representation of a month (from 01 to 12)</li>
                        <li>M - A short textual representation of a month (three letters)</li>
                        <li>n - A numeric representation of a month, without leading zeros (1 to 12)</li>
                        <li>t - The number of days in the given month</li>
                        <li>L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)</li>
                        <li>o - The ISO-8601 year number</li>
                        <li>Y - A four digit representation of a year</li>
                        <li>y - A two digit representation of a year</li>
                        <li>a - Lowercase am or pm</li>
                        <li>A - Uppercase AM or PM</li>
                        <li>B - Swatch Internet time (000 to 999)</li>
                        <li>g - 12-hour format of an hour (1 to 12)</li>
                        <li>G - 24-hour format of an hour (0 to 23)</li>
                        <li>h - 12-hour format of an hour (01 to 12)</li>
                        <li>H - 24-hour format of an hour (00 to 23)</li>
                        <li>i - Minutes with leading zeros (00 to 59)</li>
                        <li>s - Seconds, with leading zeros (00 to 59)</li>
                        <li>u - Microseconds (added in PHP 5.2.2)</li>
                        <li>e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)</li>
                        <li>I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)</li>
                        <li>O - Difference to Greenwich time (GMT) in hours (Example: +0100)</li>
                        <li>P - Difference to Greenwich time (GMT) in hours:minutes (added in PHP 5.1.3)</li>
                        <li>T - Timezone abbreviations (Examples: EST, MDT)</li>
                        <li>Z - Timezone offset in seconds. The offset for timezones west of UTC is negative (-43200 to 50400)</li>
                        <li>c - The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)</li>
                        <li>r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)</li>
                        <li>U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)</li>
                    </ul>
                    <p>and the following predefined constants can also be used (available since PHP 5.1.0):</p>
                    <ul>
                        <li>DATE_ATOM - Atom (example: 2013-04-12T15:52:01+00:00)</li>
                        <li>DATE_COOKIE - HTTP Cookies (example: Friday, 12-Apr-13 15:52:01 UTC)</li>
                        <li>DATE_ISO8601 - ISO-8601 (example: 2013-04-12T15:52:01+0000)</li>
                        <li>DATE_RFC822 - RFC 822 (example: Fri, 12 Apr 13 15:52:01 +0000)</li>
                        <li>DATE_RFC850 - RFC 850 (example: Friday, 12-Apr-13 15:52:01 UTC)</li>
                        <li>DATE_RFC1036 - RFC 1036 (example: Fri, 12 Apr 13 15:52:01 +0000)</li>
                        <li>DATE_RFC1123 - RFC 1123 (example: Fri, 12 Apr 2013 15:52:01 +0000)</li>
                        <li>DATE_RFC2822 - RFC 2822 (Fri, 12 Apr 2013 15:52:01 +0000)</li>
                        <li>DATE_RFC3339 - Same as DATE_ATOM (since PHP 5.1.3)</li>
                        <li>DATE_RSS - RSS (Fri, 12 Aug 2013 15:52:01 +0000)</li>
                        <li>DATE_W3C - World Wide Web Consortium (example: 2013-04-12T15:52:01+00:00)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><em>timestamp</em></td>
                <td>Optional. Specifies an integer Unix timestamp. Default is the current local time (time())</td>
            </tr>
        </tbody>
    </table>

    <h3>Important</h3>
    <ul>
        <li style="text-align:justify">d: Represents day of the month; two digits with leading zeros (01 or 31).</li>
        <li style="text-align:justify">D: Represents day of the week in the text as an abbreviation (Mon to Sun).</li>
        <li style="text-align:justify">m: Represents month in numbers with leading zeros (01 or 12).</li>
        <li style="text-align:justify">M: Represents month in text, abbreviated (Jan to Dec).</li>
        <li style="text-align:justify">y: Represents year in two digits (08 or 14).</li>
        <li style="text-align:justify">Y: Represents year in four digits (2008 or 2014).</li>
    </ul>

    <ul>
        <li style="text-align:justify">h: Represents hour in 12-hour format with leading zeros (01 to 12).</li>
        <li style="text-align:justify">H: Represents hour in 24-hour format with leading zeros (00 to 23).</li>
        <li style="text-align:justify">i: Represents minutes with leading zeros (00 to 59).</li>
        <li style="text-align:justify">s: Represents seconds with leading zeros (00 to 59).</li>
        <li style="text-align:justify">a: Represents lowercase antemeridian and post meridian (am or pm).</li>
        <li style="text-align:justify">A: Represents uppercase antemeridian and post meridian (AM or PM).</li>
    </ul>


    <h4>Time function</h4>
    <ul>
        <li style="text-align:justify">h: Represents hour in 12-hour format with leading zeros (01 to 12).</li>
        <li style="text-align:justify">H: Represents hour in 24-hour format with leading zeros (00 to 23).</li>
        <li style="text-align:justify">i: Represents minutes with leading zeros (00 to 59).</li>
        <li style="text-align:justify">s: Represents seconds with leading zeros (00 to 59).</li>
        <li style="text-align:justify">a: Represents lowercase antemeridian and post meridian (am or pm).</li>
        <li style="text-align:justify">A: Represents uppercase antemeridian and post meridian (AM or PM).</li>
    </ul>
</body>

</html>