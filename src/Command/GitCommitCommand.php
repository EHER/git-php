<?php

declare(strict_types=1);

namespace Eher\GitPhp\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class GitCommitCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('commit')
            ->setDescription('Record changes to the repository');
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        throw new \RuntimeException('Not implemented yet');
    }
}
