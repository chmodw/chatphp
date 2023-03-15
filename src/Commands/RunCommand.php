<?php

namespace Chmodw\ChatPHP\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RunCommand extends  Command
{
    protected function configure()
    {
        $this
            ->setName('chat')
            ->setDescription('Start the CHATPHP CLI');
    }
    /**
     * @param  InputInterface  $input
     * @param  OutputInterface  $output
     * @return int
     */
    public function execute(InputInterface  $input, OutputInterface $output)
    {
        dd('test');
    }
}
