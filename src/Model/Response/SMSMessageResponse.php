<?php

namespace Aymardkouakou\OrangeApiPhp\Model\Response;

use Aymardkouakou\OrangeApiPhp\Model\Data\OutboundSMSMessageRequest;

class SMSMessageResponse
{
    public ?OutboundSMSMessageRequest $outboundSMSMessageRequest;

    public function __construct(array $args = [])
    {
        if (array_key_exists('outboundSMSMessageRequest', $args)) {
            $this->outboundSMSMessageRequest = new OutboundSMSMessageRequest($args['outboundSMSMessageRequest']);
        }
    }

    public function toArray(): array
    {
        return json_decode(json_encode($this->outboundSMSMessageRequest), JSON_OBJECT_AS_ARRAY);
    }
}