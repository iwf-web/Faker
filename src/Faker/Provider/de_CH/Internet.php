<?php

namespace Faker\Provider\de_CH;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmx.ch', 'bluewin.ch', 'hotmail.com', 'sunrise.ch', 'hispeed.ch');
    protected static $tld = array('ch', 'com', 'net', 'org');
}
