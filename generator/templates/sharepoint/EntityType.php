<?php

namespace Office365\SharePoint;
use Office365\Runtime\ClientObject;
use Office365\Runtime\Actions\DeleteEntityQuery;
use Office365\Runtime\ResourcePath;
use Office365\Runtime\Actions\UpdateEntityQuery;

class EntityType extends BaseEntity
{

    public function getObjectProperty()
    {
        if(!$this->isPropertyAvailable("{name}")){
            $this->setProperty("{name}", new ClientObject($this->getContext(),
                new ResourcePath("{name}",$this->getResourcePath())));
        }
        return $this->getProperty("{name}");
    }

    public function getValueProperty()
    {
        return $this->getProperty("{name}");
    }

    public function setValueProperty($value)
    {
        return $this->setProperty("{name}",$value,true);
    }


    public function updateOperation()
    {
        $qry = new UpdateEntityQuery($this);
        $this->getContext()->addQueryAndResultObject($qry,$this);
        return $this;
    }

    public function deleteOperation()
    {
        $qry = new DeleteEntityQuery($this);
        $this->getContext()->addQuery($qry);
        $this->removeFromParentCollection();
        return $this;
    }

}
