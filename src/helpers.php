<?php

if (!function_exists('print_ln')) {
    /**
     * Print a single line to terminal
     *
     * @param  string  $string
     * @param  int  $leading_spaces
     * @return void
     */
    function print_ln($string = "", $leading_spaces = 0) {
        echo $string . "\n";

        for ($i = 0;$i<$leading_spaces; $i++) {
            echo "\n";
        }
    }
}
