<?php

/**
 * Modified: 2020-05-24T22:08:35+00:00
 */
namespace Office365\Directory\Peoples;

use Office365\Runtime\ClientValue;
class Phone extends ClientValue
{
    /**
     * @var string
     */
    public $Number;
    /**
     * @var string
     */
    public $Region;
    /**
     * @var string
     */
    public $Language;
}