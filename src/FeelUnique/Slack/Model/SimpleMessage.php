<?php

namespace FeelUnique\Slack\Model;

/**
 * @link Official documentation at https://api.slack.com/types/channel
 */
class SimpleMessage extends AbstractModel
{
    /**
     * @var string
     */
    protected $ts;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var SimpleChannel
     */
    private $channel;

    /**
     * @var string
     */
    protected $user;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $text;

    /**
     * @return string|null The Slack timestamp on which the message was posted
     */
    public function getSlackTimestamp()
    {
        return $this->ts;
    }

    /**
     * @return string The type of message
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return SimpleChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @return string|null The ID of the user that posted the message,
     *                     can be null if the message was made by Slack itself.
     */
    public function getUserId()
    {
        return $this->user;
    }

    /**
     * @return string|null The username belonging to the user that posted the message,
     *                     can be null if the message was made by Slack itself.
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string The actual text of the message.
     */
    public function getText()
    {
        return $this->text;
    }
}
