<?php

declare(strict_types=1);

namespace Eher\GitPhp\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class GitInitCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('init')
            ->setDescription('Create an empty Git repository or reinitialize an existing one');
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        if (file_exists('.git')) {
            $this->reinitializeRepository();
            $output->writeln('Reinitialized existing Git repository in ' . realpath('.git'));
            return;
        }

        $this->initializeEmptyRepository();
        $output->writeln('Initialized empty Git repository in ' . realpath('.git'));
    }

    private function reinitializeRepository(): void
    {
        throw new \RuntimeException('Not implemented yet');
    }

    private function initializeEmptyRepository(): void
    {
        mkdir('.git');
        mkdir('.git/refs');
        mkdir('.git/refs/heads');
        mkdir('.git/objects');
        file_put_contents('.git/HEAD', 'ref: refs/heads/master');
    }
}
