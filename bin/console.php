#!/usr/bin/env php
<?php
declare(strict_types=1);

use FD\Command\TestCommand;

require_once dirname(__DIR__) . '/vendor/autoload.php';

(new TestCommand())->run();
