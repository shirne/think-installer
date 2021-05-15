<?php

namespace shirne\composer;

class Promise
{
    public function then($callable)
    {
        $callable();
    }
}
