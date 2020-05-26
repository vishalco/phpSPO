<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class IosVppEBook extends ClientObject
{
    /**
     * @return string
     */
    public function getVppTokenId()
    {
        if (!$this->isPropertyAvailable("VppTokenId")) {
            return null;
        }
        return $this->getProperty("VppTokenId");
    }
    /**
     * @var string
     */
    public function setVppTokenId($value)
    {
        $this->setProperty("VppTokenId", $value, true);
    }
    /**
     * @return string
     */
    public function getAppleId()
    {
        if (!$this->isPropertyAvailable("AppleId")) {
            return null;
        }
        return $this->getProperty("AppleId");
    }
    /**
     * @var string
     */
    public function setAppleId($value)
    {
        $this->setProperty("AppleId", $value, true);
    }
    /**
     * @return string
     */
    public function getVppOrganizationName()
    {
        if (!$this->isPropertyAvailable("VppOrganizationName")) {
            return null;
        }
        return $this->getProperty("VppOrganizationName");
    }
    /**
     * @var string
     */
    public function setVppOrganizationName($value)
    {
        $this->setProperty("VppOrganizationName", $value, true);
    }
    /**
     * @return array
     */
    public function getGenres()
    {
        if (!$this->isPropertyAvailable("Genres")) {
            return null;
        }
        return $this->getProperty("Genres");
    }
    /**
     * @var array
     */
    public function setGenres($value)
    {
        $this->setProperty("Genres", $value, true);
    }
    /**
     * @return string
     */
    public function getLanguage()
    {
        if (!$this->isPropertyAvailable("Language")) {
            return null;
        }
        return $this->getProperty("Language");
    }
    /**
     * @var string
     */
    public function setLanguage($value)
    {
        $this->setProperty("Language", $value, true);
    }
    /**
     * @return string
     */
    public function getSeller()
    {
        if (!$this->isPropertyAvailable("Seller")) {
            return null;
        }
        return $this->getProperty("Seller");
    }
    /**
     * @var string
     */
    public function setSeller($value)
    {
        $this->setProperty("Seller", $value, true);
    }
    /**
     * @return integer
     */
    public function getTotalLicenseCount()
    {
        if (!$this->isPropertyAvailable("TotalLicenseCount")) {
            return null;
        }
        return $this->getProperty("TotalLicenseCount");
    }
    /**
     * @var integer
     */
    public function setTotalLicenseCount($value)
    {
        $this->setProperty("TotalLicenseCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getUsedLicenseCount()
    {
        if (!$this->isPropertyAvailable("UsedLicenseCount")) {
            return null;
        }
        return $this->getProperty("UsedLicenseCount");
    }
    /**
     * @var integer
     */
    public function setUsedLicenseCount($value)
    {
        $this->setProperty("UsedLicenseCount", $value, true);
    }
}