<?php

namespace Chmodw\ChatPHP;

class Cli {

    private array $options = [
        'Chat',
        'View History',
        'Clear Database',
        'Migrate Database',
        'Exit'
    ];

    public function __construct()
    {
    }

    /**
     * Prints available options to the terminal
     *
     * @return void
     */
    public function printOptions(): void
    {
        foreach ($this->options as $key => $option) {
            $key = $key+1;
            print_ln("\e[93m{$key}. \e[39m{$option}");
        }

        print_ln("________________________________");
    }

    /**
     * Checks if a given option is in the options array
     *
     * @param  string  $option
     * @return bool
     */
    public function validateOption(string $option): bool
    {
        return in_array($option, $this->options);
    }
}
