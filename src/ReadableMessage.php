<?php

namespace Puzzle\AMQP;

interface ReadableMessage extends MessageMetadata
{
    /**
     * @return mixed
     */
    public function getBodyInOriginalFormat();

    /**
     * @return string
     */
    public function getAppId();

    /**
     * @return array
     */
    public function getAttributes();
    
    /**
     * @return boolean
     */
    public function isLastRetry();
    
    /**
     *  @return string
     */
    public function getRoutingKeyFromHeader();

    /**
     * @return WritableMessage
     */
    public function cloneIntoWritableMessage(WritableMessage $writable, $copyRoutingKey = false);
}
