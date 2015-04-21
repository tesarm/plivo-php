<?php

namespace plivo;


class Message extends Element {
    protected $nestables = array();
    protected $valid_attributes = array('src', 'dst', 'type', 'callbackMethod', 'callbackUrl');
    function __construct($body, $attributes=array()) {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Error("No text set for ".$this->getName());
        }
    }
}
