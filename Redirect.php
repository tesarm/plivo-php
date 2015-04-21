<?php

namespace plivo;

class Redirect extends Element
{
    protected $nestables = array();
    protected $valid_attributes = array('method');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Error("No url set for " . $this->getName());
        }
    }
}