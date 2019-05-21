--TEST--
Empty text
--FILE--
<?php

require 'src/validator.php';

$NAMES = [
    "is_mobile",
    "is_desktop",
    "click_url",
    "width",
    "height",
    "content_type"
];
print(validateValues("", $NAMES));
--EXPECTF--

