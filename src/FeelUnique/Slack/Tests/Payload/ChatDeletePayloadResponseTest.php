<?php

namespace FeelUnique\Slack\Tests\Payload;

use FeelUnique\Slack\Payload\ChatDeletePayloadResponse;
use FeelUnique\Slack\Payload\PayloadResponseInterface;


class ChatDeletePayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    public function createResponseData()
    {
        return [
            'channel' => 'C1234567',
            'ts'      => '12345678.12345678',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                     $responseData
     * @param ChatDeletePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['channel'], $payloadResponse->getChannelId());
        $this->assertEquals($responseData['ts'], $payloadResponse->getSlackTimestamp());
    }
}
