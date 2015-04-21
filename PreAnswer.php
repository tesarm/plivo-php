<?php

namespace plivo;

class PreAnswer extends Element {
    protected $nestables = array('Play', 'Speak', 'GetDigits', 'Wait', 'Redirect', 'Message', 'DTMF');
    protected $valid_attributes = array();
    function __construct($attributes=array()) {
        parent::__construct(NULL, $attributes);
    }
}
