<?php

namespace FeelUnique\Slack\Payload;


class GroupsOpenPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var bool
     */
    private $noOp;

    /**
     * @var bool
     */
    private $alreadyOpen;

    /**
     * @return boolean
     */
    public function isAlreadyOpen()
    {
        return $this->alreadyOpen;
    }

    /**
     * @return boolean
     */
    public function isNoOp()
    {
        return $this->noOp;
    }
}
