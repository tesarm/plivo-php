<?php
namespace plivo;


class Response extends Element
{
    protected $nestables = array('Speak', 'Play', 'GetDigits', 'Record',
        'Dial', 'Redirect', 'Wait', 'Hangup',
        'PreAnswer', 'Conference', 'DTMF', 'Message');

    function __construct()
    {
        parent::__construct(NULL);
    }

    public function toXML()
    {
        $xml = parent::toXML($header = TRUE);
        return $xml;
    }
}