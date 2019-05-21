--TEST--
Positive: Absent linebreaker
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

$text = <<<TEXT
is_mobile=false
is_desktop=true
click_url=https://tnt-premier.ru/series/741624/?utm_source=lenta&utm_medium=&is_desktop=true
TEXT;
print(validateCreativeVlaues($text, $NAMES));
--EXPECTF--

