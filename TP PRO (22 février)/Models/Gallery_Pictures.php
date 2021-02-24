<?php

class GalleryPictures extends Database {

    private $id;
    private $pictureName;
    private $pictureDate;
    private $idExtensionsFiles;

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
     * Get the value of pictureName
     */ 
    public function getPictureName()
    {
        return $this->pictureName;
    }

    /**
     * Set the value of pictureName
     *
     * @return  self
     */ 
    public function setPictureName($pictureName)
    {
        $this->pictureName = $pictureName;

        return $this;
    }

    /**
     * Get the value of pictureDate
     */ 
    public function getPictureDate()
    {
        return $this->pictureDate;
    }

    /**
     * Set the value of pictureDate
     *
     * @return  self
     */ 
    public function setPictureDate($pictureDate)
    {
        $this->pictureDate = $pictureDate;

        return $this;
    }

    /**
     * Get the value of idExtensionsFiles
     */ 
    public function getIdExtensionsFiles()
    {
        return $this->idExtensionsFiles;
    }

    /**
     * Set the value of idExtensionsFiles
     *
     * @return  self
     */ 
    public function setIdExtensionsFiles($idExtensionsFiles)
    {
        $this->idExtensionsFiles = $idExtensionsFiles;

        return $this;
    }

    /**
     * Méthode pour ajouter une image en Base De Données
     * 
     * @param array
     * @return boolean
     */
    public function addPicture(array $arrayParameters) {
        $query = "INSERT INTO `gallery_pictures` (`picture_name`, `picture_date`) VALUES (:picture_name, :picture_date);";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("picture_name", $arrayParameters["picture_name"], PDO::PARAM_STR);
        $buildQuery->bindValue("picture_date", $arrayParameters["picture_date"], PDO::PARAM_STR);
        return $buildQuery->execute();
    }

    /**
     * Méthode pour sélectionner toutes les images en Base De Données
     * 
     * @return array|boolean
     */
    public function getAllPictures() {
        $query = "SELECT `id`, `picture_name`, `picture_date`, `id_extensions_files` FROM `gallery_pictures`;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }
     
    /**
     * Méthode pour supprimer une image 
     */


    /**
     * Méthode pour trier les images par date (de la plus récente à la plus vieille)
     */


     /**
     * Méthode pour trier les images par date (de la plus récente à la plus vieille)
     */

      /**
     * Méthode pour sélectionner les images selon un type extension
     */
}