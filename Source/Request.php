<?php

namespace PhpRepos\ChuckNorris;

class Request
{
    public const BASE_URL = 'https://api.chucknorris.io/jokes/random';

    public function url(): string
    {
        return self::BASE_URL;
    }
}
