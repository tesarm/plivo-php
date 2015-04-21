<?php

namespace plivo;

class Dial extends Element
{
    protected $nestables = array('Number', 'User');
    protected $valid_attributes = array('action', 'method', 'timeout', 'hangupOnStar',
        'timeLimit', 'callerId', 'callerName', 'confirmSound',
        'dialMusic', 'confirmKey', 'redirect',
        'callbackUrl', 'callbackMethod', 'digitsMatch',
        'sipHeaders');

    function __construct($attributes = array())
    {
        parent::__construct(NULL, $attributes);
    }
}