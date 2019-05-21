--TEST--
Negative: Absent equals sign
--FILE--
<?php

require 'rc/alidator.php';

$NAMES = [
    "is_mobile",
    "is_desktop",
    "click_url",
    "width",
    "height",
    "content_type"
];

$text = <<<TEXT
is_mobilefalse
is_desktop=true
click_url=https://tnt-premier.ru/series/741624/?utm_source=lenta&utm_medium=
TEXT;
print(validateCreativeVlaues($text, $NAMES));
--EXPECTF--
is_mobilefalse
