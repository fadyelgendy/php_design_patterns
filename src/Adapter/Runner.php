<?php

namespace App\Adapter;

class Runner
{
    public function run()
    {
        $oldRequest = new Request();
        $this->handleRequest($oldRequest);

        $consumer = new Consumer();
        echo $consumer->handle() . "\n";

        $adapter = new RequestAdapter($consumer);
        $this->handleRequest($adapter);
    }

    protected function handleRequest(Request $request)
    {
        echo $request->handle() . "\n";
    }
}