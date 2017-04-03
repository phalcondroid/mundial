<?php

namespace Mundial\Controller;

class ControllerBase
{
    protected $spot;
    protected $view = array();
    public function __construct($spot)
    {
        $this->spot = $spot;
    }

    public function setView($name, $value)
    {
        $this->view[$name] = $value;
    }

    public function getView()
    {
        return $this->view;
    }
}
