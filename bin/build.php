#!/usr/bin/env php
<?php
use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\Block\Element\FencedCode;

require_once __DIR__.'/../vendor/autoload.php';

$interfaces = [];
$filename = __DIR__.'/../vendor/joomla/joomla-standards/proposed/content-elements.md';
$walker = (new DocParser(Environment::createCommonMarkEnvironment()))
    ->parse(file_get_contents($filename))
    ->walker();

while ($event = $walker->next()) {
    if (!$event->isEntering()) {
        continue;
    }

    $node = $event->getNode();

    if (!$node instanceof FencedCode) {
        continue;
    }

    $code = trim($node->getStringContent())."\n";

    if (substr($code, 0, 5) !== '<?php') {
        $code = "<?php\n\n".$code;
    }

    if (preg_match('/^interface\s+(?<name>[^\s]+)/m', $code, $matches)) {
        $interfaces[$matches['name']] = $code;
    }
}

@mkdir(__DIR__.'/../src');

foreach ($interfaces as $name => $code) {
    file_put_contents(__DIR__.'/../src/'.$name.'.php', $code);
}
