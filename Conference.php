<?php

namespace plivo;

class Conference extends Element
{
    protected $nestables = array();
    protected $valid_attributes = array('muted', 'beep', 'startConferenceOnEnter',
        'endConferenceOnExit', 'waitSound', 'enterSound', 'exitSound',
        'timeLimit', 'hangupOnStar', 'maxMembers',
        'record', 'recordFileFormat', 'recordWhenAlone', 'action', 'method', 'redirect',
        'digitsMatch', 'callbackUrl', 'callbackMethod',
        'stayAlone', 'floorEvent',
        'transcriptionType', 'transcriptionUrl',
        'transcriptionMethod', 'relayDTMF');

    function __construct($body, $attributes = array())
    {
        parent::__construct($body, $attributes);
        if (!$body) {
            throw new Error("No conference name set for " . $this->getName());
        }
    }
}
