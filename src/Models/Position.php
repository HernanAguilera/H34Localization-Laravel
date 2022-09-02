<?php

namespace H34\Localization\Models;

use H34\Core\Models\ModelContract;

class Position implements ModelContract
{
    private $latitude;
    private $longitude;

    /**
     * Get the value of latitude
     */ 
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set the value of latitude
     *
     * @return  self
     */ 
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get the value of longitude
     */ 
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set the value of longitude
     *
     * @return  self
     */ 
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    public static function getFields(): array {
        return [];
    }

    public static function getHiddenFields(): array
    {
        return [
            
        ];
    }
}
