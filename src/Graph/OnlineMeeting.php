<?php

/**
 * Generated by phpSPO model generator 2020-05-24T22:08:35+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 * Contains information about the meeting, including the URL used to join a meeting, the attendees list, and the description.
 */
class OnlineMeeting extends ClientObject
{
    /**
     * @return string
     */
    public function getJoinWebUrl()
    {
        if (!$this->isPropertyAvailable("JoinWebUrl")) {
            return null;
        }
        return $this->getProperty("JoinWebUrl");
    }
    /**
     * @var string
     */
    public function setJoinWebUrl($value)
    {
        $this->setProperty("JoinWebUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getSubject()
    {
        if (!$this->isPropertyAvailable("Subject")) {
            return null;
        }
        return $this->getProperty("Subject");
    }
    /**
     * @var string
     */
    public function setSubject($value)
    {
        $this->setProperty("Subject", $value, true);
    }
    /**
     * @return string
     */
    public function getVideoTeleconferenceId()
    {
        if (!$this->isPropertyAvailable("VideoTeleconferenceId")) {
            return null;
        }
        return $this->getProperty("VideoTeleconferenceId");
    }
    /**
     * @var string
     */
    public function setVideoTeleconferenceId($value)
    {
        $this->setProperty("VideoTeleconferenceId", $value, true);
    }
}