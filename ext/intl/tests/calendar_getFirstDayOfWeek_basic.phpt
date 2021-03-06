--TEST--
IntlCalendar::getFirstDayOfWeek() basic test
--SKIPIF--
<?php
if (!extension_loaded('intl'))
    die('skip intl extension not enabled');
--FILE--
<?php
ini_set("intl.error_level", E_WARNING);
ini_set("intl.default_locale", "nl");

$intlcal = IntlCalendar::createInstance('UTC');
var_dump($intlcal->getFirstDayOfWeek());
var_dump(intlcal_get_first_day_of_week($intlcal));
?>
--EXPECT--
int(2)
int(2)