<?php

namespace Codeception\Module;

use Codeception\Module;

class KooToro extends Module
{

    public function greet($name)
    {
        $this->debug("Hello {$name}!");
    }

}