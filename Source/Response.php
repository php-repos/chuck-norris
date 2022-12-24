<?php

namespace Saeghe\ChuckNorris;

class Response
{
    public function __construct(public array $data) {}

    public function joke(): string
    {
        return $this->data['value'];
    }
}
