<?php
    namespace Gemini;

    use Symfony\Component\Console\Application as ConsoleApplication;

    class Application extends ConsoleApplication
    {
        public function __construct()
        {
            parent::__construct('Gemini', '0.1');
        }


        public function initCommands()
        {
            foreach (glob(__DIR__ . '/Command/*.php') as $commandFile) {
                $commandClass = '\Gemini\\Command\\' . basename($commandFile, '.php');

                $this->add(new $commandClass);
            }
        }
    }