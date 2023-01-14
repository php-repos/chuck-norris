<?php

namespace Tests\ShowJokeInConsoleTest;

use function PhpRepos\FileManager\Resolver\root;
use function PhpRepos\TestRunner\Assertions\Boolean\assert_true;
use function PhpRepos\TestRunner\Runner\test;

test(
    title: 'it should show a joke in the console',
    case: function () {
        $output = shell_exec('php ' . root() . 'Console.php');

        assert_true(str_contains($output, 'Chuck Norris'));
    }
);
