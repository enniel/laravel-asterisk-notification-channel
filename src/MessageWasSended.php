<?php

namespace NotificationChannels\Asterisk;

use Clue\React\Ami\Protocol\Response;

class MessageWasSended
{
    /**
     * @var \Clue\React\Ami\Protocol\Response
     */
    public $response;

    /**
     * @var object
     */
    public $notifiable;

    /**
     * @param  \Clue\React\Ami\Protocol\Response  $response
     * @return void
     */
    public function __construct(Response $response, $notifiable)
    {
        $this->response = $response;
        $this->notifiable = $notifiable;
    }
}
