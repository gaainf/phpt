<?php

/**
 * The example of multiline text validation
 */

/**
 * Validate key=value pairs in multiline text
 * 
 * @param string $text  Input text
 * @param array  $names An array of reserved key names
 *
 * @return string Empty string if validation passed, invalid string otherwise
 */
function validateValues($text, $names)
{
    $out = "";
    $lines = explode("\n", $text);
    $regexnames = implode("|", $names);
    foreach ($lines as $line) {
        $result = preg_match('/(.+?)=(.+?)(?:\n|$)/', $line, $out);
        if ($out == array()) {
            return $line;
        }
        
        // dangerous, because excludes repetition of ke=value pairs in single string
        $result2 = preg_match("/(($regexnames)=.+?){2,}/", $line, $out2);
        if ($out2 != array()) {
            return $line;
        }
    }
    return "";
}
