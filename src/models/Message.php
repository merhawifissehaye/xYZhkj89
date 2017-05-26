<?php

class Message extends Model {
    /**
     * @var User $sender
     */
    private $sender;

    /**
     * @var User $receiver
     */
    private $receiver;

    private $subject;

    /**
     * @return User
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param User $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return User
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param User $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
}