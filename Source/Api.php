<?php

namespace PhpRepos\ChuckNorris\Api;

function get(string $url): array
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);

    return json_decode($output, true);
}
