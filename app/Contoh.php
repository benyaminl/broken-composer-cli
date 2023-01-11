<?php 

namespace App;

use Composer\Console\Input\InputArgument;
use Composer\Console\Input\InputOption;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Contoh extends Command
{
    protected function configure(): void
    {
        $this->setDefinition([
            new InputOption('arbitrary-flag', null, InputOption::VALUE_NONE, 'Example flag'),
            new InputArgument('foo', InputArgument::OPTIONAL, 'Optional arg'),
        ]);
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        if ($input->getOption('arbitrary-flag')) {
            $output->writeln('The flag was used');
        }

        return 0;
    }
}