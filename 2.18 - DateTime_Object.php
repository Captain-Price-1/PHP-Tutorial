<?php



$dateTime = new DateTime();

// we can pass something like this 
$dateTime = new DateTime('tomorrow');
// this way we will get the tomorrows date with the time of the midnight 
// because we haven't specified it yet.


$dateTime = new DateTime('tomorrow 3:43pm')

// we can do like yesterday noon as well 


// here is a shortlist of what we can supply to the datetime object

<?php

// Absolute Date and Time Strings
$dateTime1 = new DateTime('2024-05-29 15:43:00');
$dateTime2 = new DateTime('2024-05-29T15:43:00+00:00');
$dateTime3 = new DateTime('2024-05');
$dateTime4 = new DateTime('2024');

// Relative Date and Time Strings
$dateTime5 = new DateTime('tomorrow 3:43pm');
$dateTime6 = new DateTime('yesterday noon');
$dateTime7 = new DateTime('next Monday');
$dateTime8 = new DateTime('last Friday');
$dateTime9 = new DateTime('+2 hours');
$dateTime10 = new DateTime('-30 minutes');
$dateTime11 = new DateTime('+45 seconds');
$dateTime12 = new DateTime('+1 day');
$dateTime13 = new DateTime('-2 weeks');
$dateTime14 = new DateTime('+3 months');
$dateTime15 = new DateTime('-1 year');
$dateTime16 = new DateTime('next Monday +2 days 3:00pm');
$dateTime17 = new DateTime('third Wednesday of this month');
$dateTime18 = new DateTime('last day of this month');
$dateTime19 = new DateTime('last day of December 2024');

// Time Zones
$dateTime20 = new DateTime('2024-05-29 15:43:00', new DateTimeZone('America/New_York'));
$dateTime21 = new DateTime('2024-05-29 15:43:00');
$dateTime21->setTimezone(new DateTimeZone('America/New_York'));

// Creating DateTime from Timestamps
$timestamp = time();
$dateTime22 = (new DateTime())->setTimestamp($timestamp);

// Current Date and Time
$dateTime23 = new DateTime('now');

?>

// one thing to note here is that it will give out this time 15:43:00 in that new york time
// to convert the current our time / time which is supplied into that given timezone
// we can do something like this

$dateTime23->setTimezone(new DateTimeZone('America/New_York'));


<?php

$dateTime = new DateTime('2024-05-29 15:43:00', new DateTimeZone('America/New_York'));

// Format Methods

// ISO 8601 Date
$format1 = $dateTime->format('c');
// Output: 2024-05-29T15:43:00-04:00

// RFC 2822 Date
$format2 = $dateTime->format(DATE_RFC2822);
// Output: Wed, 29 May 2024 15:43:00 -0400

// Year-Month-Day Hour:Minute:Second
$format3 = $dateTime->format('Y-m-d H:i:s');
// Output: 2024-05-29 15:43:00

// Day/Month/Year
$format4 = $dateTime->format('d/m/Y');
// Output: 29/05/2024

// Month-Day-Year
$format5 = $dateTime->format('m-d-Y');
// Output: 05-29-2024

// Day of the week, Month Day, Year
$format6 = $dateTime->format('l, F j, Y');
// Output: Wednesday, May 29, 2024

// Short Day of the week, Short Month Day, Year
$format7 = $dateTime->format('D, M j, Y');
// Output: Wed, May 29, 2024

// Month Name, Day with leading zero, Year
$format8 = $dateTime->format('F d, Y');
// Output: May 29, 2024

// Hour:Minute AM/PM
$format9 = $dateTime->format('h:i A');
// Output: 03:43 PM

// 24-Hour:Minute
$format10 = $dateTime->format('H:i');
// Output: 15:43

// Day of Year
$format11 = $dateTime->format('z');
// Output: 149 (since May 29 is the 150th day of a non-leap year)

// Week of Year
$format12 = $dateTime->format('W');
// Output: 22 (22nd week of the year)

// Full Date/Time with Timezone
$format13 = $dateTime->format('Y-m-d H:i:s e');
// Output: 2024-05-29 15:43:00 America/New_York

// RFC 3339 Extended Format
$format14 = $dateTime->format(DATE_RFC3339_EXTENDED);
// Output: 2024-05-29T15:43:00.000-04:00

// Unix Timestamp
$format15 = $dateTime->format('U');
// Output: 1717006980

?>


// to get the name of the timezone we can do something like this

echo $dateTime->getTimezone()->getName(); // will print "America/New_York"