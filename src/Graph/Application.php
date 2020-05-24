<?php

/**
 * Generated by phpSPO model generator 2020-05-24T22:10:26+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 *  "Represents an application."
 */
class Application extends ClientObject
{
    /**
     * @return string
     */
    public function getAppId()
    {
        if (!$this->isPropertyAvailable("AppId")) {
            return null;
        }
        return $this->getProperty("AppId");
    }
    /**
     * @var string
     */
    public function setAppId($value)
    {
        $this->setProperty("AppId", $value, true);
    }
    /**
     * @return string
     */
    public function getApplicationTemplateId()
    {
        if (!$this->isPropertyAvailable("ApplicationTemplateId")) {
            return null;
        }
        return $this->getProperty("ApplicationTemplateId");
    }
    /**
     * @var string
     */
    public function setApplicationTemplateId($value)
    {
        $this->setProperty("ApplicationTemplateId", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsFallbackPublicClient()
    {
        if (!$this->isPropertyAvailable("IsFallbackPublicClient")) {
            return null;
        }
        return $this->getProperty("IsFallbackPublicClient");
    }
    /**
     * @var bool
     */
    public function setIsFallbackPublicClient($value)
    {
        $this->setProperty("IsFallbackPublicClient", $value, true);
    }
    /**
     * @return array
     */
    public function getIdentifierUris()
    {
        if (!$this->isPropertyAvailable("IdentifierUris")) {
            return null;
        }
        return $this->getProperty("IdentifierUris");
    }
    /**
     * @var array
     */
    public function setIdentifierUris($value)
    {
        $this->setProperty("IdentifierUris", $value, true);
    }
    /**
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     * @return string
     */
    public function getGroupMembershipClaims()
    {
        if (!$this->isPropertyAvailable("GroupMembershipClaims")) {
            return null;
        }
        return $this->getProperty("GroupMembershipClaims");
    }
    /**
     * @var string
     */
    public function setGroupMembershipClaims($value)
    {
        $this->setProperty("GroupMembershipClaims", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsDeviceOnlyAuthSupported()
    {
        if (!$this->isPropertyAvailable("IsDeviceOnlyAuthSupported")) {
            return null;
        }
        return $this->getProperty("IsDeviceOnlyAuthSupported");
    }
    /**
     * @var bool
     */
    public function setIsDeviceOnlyAuthSupported($value)
    {
        $this->setProperty("IsDeviceOnlyAuthSupported", $value, true);
    }
    /**
     * @return bool
     */
    public function getOauth2RequirePostResponse()
    {
        if (!$this->isPropertyAvailable("Oauth2RequirePostResponse")) {
            return null;
        }
        return $this->getProperty("Oauth2RequirePostResponse");
    }
    /**
     * @var bool
     */
    public function setOauth2RequirePostResponse($value)
    {
        $this->setProperty("Oauth2RequirePostResponse", $value, true);
    }
    /**
     * @return string
     */
    public function getPublisherDomain()
    {
        if (!$this->isPropertyAvailable("PublisherDomain")) {
            return null;
        }
        return $this->getProperty("PublisherDomain");
    }
    /**
     * @var string
     */
    public function setPublisherDomain($value)
    {
        $this->setProperty("PublisherDomain", $value, true);
    }
    /**
     * @return string
     */
    public function getSignInAudience()
    {
        if (!$this->isPropertyAvailable("SignInAudience")) {
            return null;
        }
        return $this->getProperty("SignInAudience");
    }
    /**
     * @var string
     */
    public function setSignInAudience($value)
    {
        $this->setProperty("SignInAudience", $value, true);
    }
    /**
     * @return array
     */
    public function getTags()
    {
        if (!$this->isPropertyAvailable("Tags")) {
            return null;
        }
        return $this->getProperty("Tags");
    }
    /**
     * @var array
     */
    public function setTags($value)
    {
        $this->setProperty("Tags", $value, true);
    }
    /**
     * @return string
     */
    public function getTokenEncryptionKeyId()
    {
        if (!$this->isPropertyAvailable("TokenEncryptionKeyId")) {
            return null;
        }
        return $this->getProperty("TokenEncryptionKeyId");
    }
    /**
     * @var string
     */
    public function setTokenEncryptionKeyId($value)
    {
        $this->setProperty("TokenEncryptionKeyId", $value, true);
    }
    /**
     *  Read-only.
     * @return DirectoryObject
     */
    public function getCreatedOnBehalfOf()
    {
        if (!$this->isPropertyAvailable("CreatedOnBehalfOf")) {
            $this->setProperty("CreatedOnBehalfOf", new DirectoryObject($this->getContext(), new ResourcePath("CreatedOnBehalfOf", $this->getResourcePath())));
        }
        return $this->getProperty("CreatedOnBehalfOf");
    }
    /**
     * @return ApiApplication
     */
    public function getApi()
    {
        if (!$this->isPropertyAvailable("Api")) {
            return null;
        }
        return $this->getProperty("Api");
    }
    /**
     * @var ApiApplication
     */
    public function setApi($value)
    {
        $this->setProperty("Api", $value, true);
    }
    /**
     * @return PublicClientApplication
     */
    public function getPublicClient()
    {
        if (!$this->isPropertyAvailable("PublicClient")) {
            return null;
        }
        return $this->getProperty("PublicClient");
    }
    /**
     * @var PublicClientApplication
     */
    public function setPublicClient($value)
    {
        $this->setProperty("PublicClient", $value, true);
    }
    /**
     * @return InformationalUrl
     */
    public function getInfo()
    {
        if (!$this->isPropertyAvailable("Info")) {
            return null;
        }
        return $this->getProperty("Info");
    }
    /**
     * @var InformationalUrl
     */
    public function setInfo($value)
    {
        $this->setProperty("Info", $value, true);
    }
    /**
     * @return OptionalClaims
     */
    public function getOptionalClaims()
    {
        if (!$this->isPropertyAvailable("OptionalClaims")) {
            return null;
        }
        return $this->getProperty("OptionalClaims");
    }
    /**
     * @var OptionalClaims
     */
    public function setOptionalClaims($value)
    {
        $this->setProperty("OptionalClaims", $value, true);
    }
    /**
     * @return ParentalControlSettings
     */
    public function getParentalControlSettings()
    {
        if (!$this->isPropertyAvailable("ParentalControlSettings")) {
            return null;
        }
        return $this->getProperty("ParentalControlSettings");
    }
    /**
     * @var ParentalControlSettings
     */
    public function setParentalControlSettings($value)
    {
        $this->setProperty("ParentalControlSettings", $value, true);
    }
    /**
     * @return WebApplication
     */
    public function getWeb()
    {
        if (!$this->isPropertyAvailable("Web")) {
            return null;
        }
        return $this->getProperty("Web");
    }
    /**
     * @var WebApplication
     */
    public function setWeb($value)
    {
        $this->setProperty("Web", $value, true);
    }
}