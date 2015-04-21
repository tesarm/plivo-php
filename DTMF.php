<?php

namespace plivo;


class DTMF extends Element
{
    protected $nestables = array();
    protected $valid_attributes = array('async');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Error("No digits set for " . $this->getName());
        }
    }
}