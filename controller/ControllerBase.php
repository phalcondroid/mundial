<?php

namespace Mundial\Controller;

class ControllerBase
{
    protected $spot;
    public function __construct($spot)
    {
        $this->spot = $spot;
    }
}
