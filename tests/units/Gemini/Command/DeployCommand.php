<?php
    namespace tests\units\Gemini\Command;

    use atoum;
    use Gemini\Command\DeployCommand as TestedClass;
    use Symfony\Component\Console\Input\InputOption;

    class DeployCommand extends atoum
    {
        public function testConstruct()
        {
            $this
                ->if($command = new TestedClass)
                    ->string($command->getName())
                        ->isEqualTo('deploy')
                    ->string($command->getDescription())
                        ->isEqualTo('Deploy')
                    ->array($options = $command->getDefinition()->getOptions())
                        ->hasKey('destination')
                        ->hasSize(1)
                    ->string($options['destination']->getName())
                        ->isEqualTo('destination')
                    ->string($options['destination']->getShortcut())
                        ->isEqualTo('d')
                    ->boolean($options['destination']->isValueRequired())
                        ->isTrue()
                    ->string($options['destination']->getDefault())
                        ->isEqualTo('prod')
                    ->string($options['destination']->getDescription())
                        ->isEqualTo('Destination')
            ;
        }
    }