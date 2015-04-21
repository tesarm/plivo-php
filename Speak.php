<?php
namespace plivo;


class Speak extends Element
{
    protected $nestables = array();
    protected $valid_attributes = array('voice', 'language', 'loop');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Error("No text set for " . $this->getName());
        }
    }
}