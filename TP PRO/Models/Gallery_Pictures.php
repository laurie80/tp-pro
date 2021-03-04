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
     * Méthode pour ajouter les informations d'une image en Base De Données
     */
    public function addPicture(string $pictureName, string $pictureDate, string $pictureTitle, int $id_extensions_files) {
        $query = "INSERT INTO `gallery_pictures` (`picture_name`, `picture_date`, `picture_title`, `id_extensions_files`) VALUES (:picture_name, :picture_date, :picture_title, :id_extensions_files);";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("picture_name", $pictureName, PDO::PARAM_STR);
        $buildQuery->bindValue("picture_date", $pictureDate, PDO::PARAM_STR);
        $buildQuery->bindValue("picture_title", $pictureTitle, PDO::PARAM_STR);
        $buildQuery->bindValue("id_extensions_files", $id_extensions_files, PDO::PARAM_INT);
        return $buildQuery->execute();
    }

    /**
     * Méthode pour supprimer une image 
     */

    /**
     * Méthode pour trier les images par date (de la plus récente à la plus vieille)
     */

      /**
     * Méthode pour sélectionner les images selon leur extension
     */
}