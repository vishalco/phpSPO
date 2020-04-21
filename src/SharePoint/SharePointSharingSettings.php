<?php

/**
 * Updated By PHP Office365 Generator 2019-11-17T18:22:48+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint;

use Office365\PHP\Client\Runtime\ClientObject;
use Office365\PHP\Client\Runtime\ResourcePath;

/**
 * This class 
 * contains the SharePoint UI-specific sharing settings.
 */
class SharePointSharingSettings extends ClientObject
{
    /**
     * @return string
     */
    public function getAddToGroupModeName()
    {
        if (!$this->isPropertyAvailable("AddToGroupModeName")) {
            return null;
        }
        return $this->getProperty("AddToGroupModeName");
    }
    /**
     * @var string
     */
    public function setAddToGroupModeName($value)
    {
        $this->setProperty("AddToGroupModeName", $value, true);
    }
    /**
     * @return array
     */
    public function getGroupNameLines()
    {
        if (!$this->isPropertyAvailable("GroupNameLines")) {
            return null;
        }
        return $this->getProperty("GroupNameLines");
    }
    /**
     * @var array
     */
    public function setGroupNameLines($value)
    {
        $this->setProperty("GroupNameLines", $value, true);
    }
    /**
     * @return array
     */
    public function getGroupRoleDefinitionNamesLines()
    {
        if (!$this->isPropertyAvailable("GroupRoleDefinitionNamesLines")) {
            return null;
        }
        return $this->getProperty("GroupRoleDefinitionNamesLines");
    }
    /**
     * @var array
     */
    public function setGroupRoleDefinitionNamesLines($value)
    {
        $this->setProperty("GroupRoleDefinitionNamesLines", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsMobileView()
    {
        if (!$this->isPropertyAvailable("IsMobileView")) {
            return null;
        }
        return $this->getProperty("IsMobileView");
    }
    /**
     * @var bool
     */
    public function setIsMobileView($value)
    {
        $this->setProperty("IsMobileView", $value, true);
    }
    /**
     * @return bool
     */
    public function getPanelGivePermissionsVisible()
    {
        if (!$this->isPropertyAvailable("PanelGivePermissionsVisible")) {
            return null;
        }
        return $this->getProperty("PanelGivePermissionsVisible");
    }
    /**
     * @var bool
     */
    public function setPanelGivePermissionsVisible($value)
    {
        $this->setProperty("PanelGivePermissionsVisible", $value, true);
    }
    /**
     * @return bool
     */
    public function getPanelShowHideMoreOptionsVisible()
    {
        if (!$this->isPropertyAvailable("PanelShowHideMoreOptionsVisible")) {
            return null;
        }
        return $this->getProperty("PanelShowHideMoreOptionsVisible");
    }
    /**
     * @var bool
     */
    public function setPanelShowHideMoreOptionsVisible($value)
    {
        $this->setProperty("PanelShowHideMoreOptionsVisible", $value, true);
    }
    /**
     * @return bool
     */
    public function getPanelSimplifiedRoleSelectorVisible()
    {
        if (!$this->isPropertyAvailable("PanelSimplifiedRoleSelectorVisible")) {
            return null;
        }
        return $this->getProperty("PanelSimplifiedRoleSelectorVisible");
    }
    /**
     * @var bool
     */
    public function setPanelSimplifiedRoleSelectorVisible($value)
    {
        $this->setProperty("PanelSimplifiedRoleSelectorVisible", $value, true);
    }
    /**
     * @return array
     */
    public function getRequiredScriptFileLinks()
    {
        if (!$this->isPropertyAvailable("RequiredScriptFileLinks")) {
            return null;
        }
        return $this->getProperty("RequiredScriptFileLinks");
    }
    /**
     * @var array
     */
    public function setRequiredScriptFileLinks($value)
    {
        $this->setProperty("RequiredScriptFileLinks", $value, true);
    }
    /**
     * @return array
     */
    public function getRoleDefinitionNameLines()
    {
        if (!$this->isPropertyAvailable("RoleDefinitionNameLines")) {
            return null;
        }
        return $this->getProperty("RoleDefinitionNameLines");
    }
    /**
     * @var array
     */
    public function setRoleDefinitionNameLines($value)
    {
        $this->setProperty("RoleDefinitionNameLines", $value, true);
    }
    /**
     * @return string
     */
    public function getSelectedGroup()
    {
        if (!$this->isPropertyAvailable("SelectedGroup")) {
            return null;
        }
        return $this->getProperty("SelectedGroup");
    }
    /**
     * @var string
     */
    public function setSelectedGroup($value)
    {
        $this->setProperty("SelectedGroup", $value, true);
    }
    /**
     * @return bool
     */
    public function getSharedWithEnabled()
    {
        if (!$this->isPropertyAvailable("SharedWithEnabled")) {
            return null;
        }
        return $this->getProperty("SharedWithEnabled");
    }
    /**
     * @var bool
     */
    public function setSharedWithEnabled($value)
    {
        $this->setProperty("SharedWithEnabled", $value, true);
    }
    /**
     * @return string
     */
    public function getSharingCssLink()
    {
        if (!$this->isPropertyAvailable("SharingCssLink")) {
            return null;
        }
        return $this->getProperty("SharingCssLink");
    }
    /**
     * @var string
     */
    public function setSharingCssLink($value)
    {
        $this->setProperty("SharingCssLink", $value, true);
    }
    /**
     * @return bool
     */
    public function getTabbedDialogEnabled()
    {
        if (!$this->isPropertyAvailable("TabbedDialogEnabled")) {
            return null;
        }
        return $this->getProperty("TabbedDialogEnabled");
    }
    /**
     * @var bool
     */
    public function setTabbedDialogEnabled($value)
    {
        $this->setProperty("TabbedDialogEnabled", $value, true);
    }
    /**
     * @return integer
     */
    public function getTabToShow()
    {
        if (!$this->isPropertyAvailable("TabToShow")) {
            return null;
        }
        return $this->getProperty("TabToShow");
    }
    /**
     * @var integer
     */
    public function setTabToShow($value)
    {
        $this->setProperty("TabToShow", $value, true);
    }
    /**
     * @return string
     */
    public function gettxtEmailSubjectText()
    {
        if (!$this->isPropertyAvailable("txtEmailSubjectText")) {
            return null;
        }
        return $this->getProperty("txtEmailSubjectText");
    }
    /**
     * @var string
     */
    public function settxtEmailSubjectText($value)
    {
        $this->setProperty("txtEmailSubjectText", $value, true);
    }
    /**
     * @return string
     */
    public function getUserDisplayUrl()
    {
        if (!$this->isPropertyAvailable("UserDisplayUrl")) {
            return null;
        }
        return $this->getProperty("UserDisplayUrl");
    }
    /**
     * @var string
     */
    public function setUserDisplayUrl($value)
    {
        $this->setProperty("UserDisplayUrl", $value, true);
    }
    /**
     * @return PickerSettings
     */
    public function getPickerProperties()
    {
        if (!$this->isPropertyAvailable("PickerProperties")) {
            $this->setProperty("PickerProperties", new PickerSettings($this->getContext(),
                new ResourcePath("PickerProperties", $this->getResourcePath())));
        }
        return $this->getProperty("PickerProperties");
    }
}