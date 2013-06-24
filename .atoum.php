<?php

/*
This file will automatically be included before EACH run.

Use it to configure atoum or anything that needs to be done before EACH run.

More information on documentation:
[en] http://docs.atoum.org/en/chapter3.html#Configuration-files
[fr] http://docs.atoum.org/fr/chapter3.html#Fichier-de-configuration
*/

use \mageekguy\atoum;

$report = $script->addDefaultReport();

$coverageField = new atoum\report\fields\runner\coverage\html(
    'Gemini',
    $coveragePath = __DIR__ . '/tests/.coverage'
);

$coverageField->setRootUrl('file://' . $coveragePath);

$report->addField($coverageField);