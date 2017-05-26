<?php

class Conversation extends Model {

    /**
     * @var Message[] $messages
     */
    private $messages;

    /**
     * @return array
     */
    public function getMessages()
    {
        return $this->messages;
    }
}