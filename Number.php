<?php

namespace plivo;

class Number extends Element
{
    protected $nestables = array();
    protected $valid_attributes = array('sendDigits', 'sendOnPreanswer', 'sendDigitsMode');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Error("No number set for " . $this->getName());
        }
    }
}