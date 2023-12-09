<?php

namespace ShipStream\Ups\Api\Model;

class TrackSubsServiceErrorResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var Response
     */
    protected $response;
    /**
     * List of tracking numbers associated with errors preventing subscription creation.
     *
     * @var string[]
     */
    protected $invalidTrackingNumbers;
    /**
     * 
     *
     * @return Response
     */
    public function getResponse() : Response
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param Response $response
     *
     * @return self
     */
    public function setResponse(Response $response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * List of tracking numbers associated with errors preventing subscription creation.
     *
     * @return string[]
     */
    public function getInvalidTrackingNumbers() : array
    {
        return $this->invalidTrackingNumbers;
    }
    /**
     * List of tracking numbers associated with errors preventing subscription creation.
     *
     * @param string[] $invalidTrackingNumbers
     *
     * @return self
     */
    public function setInvalidTrackingNumbers(array $invalidTrackingNumbers) : self
    {
        $this->initialized['invalidTrackingNumbers'] = true;
        $this->invalidTrackingNumbers = $invalidTrackingNumbers;
        return $this;
    }
}