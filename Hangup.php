<?php

namespace plivo;

class Hangup extends Element
{
    protected $nestables = array();
    protected $valid_attributes = array('schedule', 'reason');

    function __construct($attributes = array())
    {
        parent::__construct(NULL, $attributes);
    }
}