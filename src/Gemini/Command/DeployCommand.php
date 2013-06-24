<?php
    namespace Gemini\Command;

    use Symfony\Component\Console\Command\Command;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Console\Output\OutputInterface;

    class DeployCommand extends Command
    {
        protected function configure()
        {
            $this
                ->setName('deploy')
                ->setDescription('Deploy')
                ->addOption(
                   'destination',
                   'd',
                   InputOption::VALUE_REQUIRED,
                   'Destination',
                   'prod'
                )
            ;
        }

    }