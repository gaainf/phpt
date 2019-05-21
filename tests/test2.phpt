--TEST--
Empty text
--FILE--
<?php

require 'validator.php';

$NAMES = [
    "is_mobile",
    "is_desktop",
    "click_url",
    "width",
    "height",
    "content_type"
];
print(validateCreativeVlaues("", $NAMES));
--EXPECTF--

