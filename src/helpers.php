<?php

use Chmodw\ChatPHP\Exceptions\FileNotFound;

if (!function_exists('print_ln')) {
    /**
     * Print a single line to terminal
     *
     * @param  string  $string
     * @param  int  $leading_spaces
     * @return void
     */
    function print_ln(string $string = "", int $leading_spaces = 0): void
    {
        echo $string . PHP_EOL;

        for ($i = 0;$i<$leading_spaces; $i++) {
            echo PHP_EOL;
        }
    }
}

if (!function_exists('env')) {
    /**
     * Get values from environment variable file
     *
     * @param  string  $var_name
     * @param  null  $default
     * @return mixed
     */
    function env(string $var_name, $default = null): mixed
    {
        if (!file_exists('.env')) {
            return $default;
        }

        $env_content = file_get_contents('.env');

        $env = explode(PHP_EOL, $env_content);

        foreach ($env as $env_item) {
            $variable = explode('=', $env_item);
            if ($variable[0] == $var_name) {
                if (!empty($variable[1])) {
                    return $variable[1];
                }
            }
        }

        return $default;
    }
}
