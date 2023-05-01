<?php

namespace App\Adapter;

class RequestAdapter extends Request
{
    public function __construct(private Consumer $consumer)
    {
    }

    public function handle():string
    {
        return strtoupper('[Adapter] ' . $this->consumer->handle());
    }

}