<?php
    namespace tests\units\Gemini;

    use atoum;
    use Gemini\Application as TestedClass;

    class Application extends atoum
    {
        public function testConstruct()
        {
            $this
                ->if($application = new TestedClass)
                    ->string($application->getName())
                        ->isEqualTo('Gemini')
                    ->string($application->getVersion())
                        ->isEqualTo('0.1')
            ;
        }
    }