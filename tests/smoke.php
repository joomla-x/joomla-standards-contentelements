#!/usr/bin/env php
<?php

namespace Joomla\Content;

require_once __DIR__.'/../vendor/autoload.php';

new Fixtures\ContentType();
new Fixtures\CompoundType();
new Fixtures\ContentTypeVisitor();
