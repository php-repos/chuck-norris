<?php

use PhpRepos\ChuckNorris\Response;
use PhpRepos\ChuckNorris\Request;
use function PhpRepos\ChuckNorris\Api\get;
use function PhpRepos\Cli\IO\Write\line;

$request = new Request();
$response = new Response(get($request->url()));

line($response->joke());
