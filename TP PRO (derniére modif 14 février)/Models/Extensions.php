<?php

class Extensions extends Database {

    private $id;
    private $typeExtension;

    public function __construct() {
        parent::__construct();
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of typeExtension
     */ 
    public function getTypeExtension()
    {
        return $this->typeExtension;
    }

    /**
     * Set the value of typeExtension
     *
     * @return  self
     */ 
    public function setTypeExtension($typeExtension)
    {
        $this->typeExtension = $typeExtension;

        return $this;
    }

}