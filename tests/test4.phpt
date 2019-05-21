--TEST--
Negative: Absent linebreaker
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

$text = <<<TEXT
is_mobile=falseis_desktop=true
click_url=https://tnt-premier.ru/series/741624/?utm_source=lenta&utm_medium=
TEXT;
print(validateCreativeVlaues($text, $NAMES));
--EXPECTF--
is_mobile=falseis_desktop=true
