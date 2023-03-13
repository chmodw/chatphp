<?php

if (!function_exists('print_ln')) {
    /**
     * Print a single line to terminal
     *
     * @param $string
     * @return void
     */
    function print_ln($string) {
        echo $string . '\n';
    }
}
