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


    public function getIdExtensions($extensions) {
        $query = "SELECT `id` FROM `extensions_files` WHERE `type_extension`= :extensions;";
        $buildquery=parent::getDb()->prepare($query);
        $buildquery->bindValue("extensions", $extensions, PDO::PARAM_STR);
        $buildquery->execute();
        $resultQuery=$buildquery->fetch(PDO::FETCH_ASSOC);
        if (!empty ($resultQuery)) {
            return $resultQuery;
        } else {
            return FALSE;
        }
    }
}