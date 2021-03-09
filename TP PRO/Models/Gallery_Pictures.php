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
    public function deletePicture($nameImg){
        $query = "DELETE FROM `gallery_pictures` WHERE `picture_name` = :picture_name";
        $deletePicture = parent::getDb()->prepare($query);
        $deletePicture->bindValue("picture_name" , $nameImg , PDO::PARAM_STR); 
        return $deletePicture->execute();
    }

  /**
     * Méthode pour récupérer le nom, la date et l'extension d'une image depuis la BDD
     */
    public function getInformationsImage() {
        $query = "SELECT `gallery_pictures`.`id`,`picture_name`,`picture_title`, `picture_date`, `type_extension`
                  FROM `gallery_pictures`
                  INNER JOIN `extensions_files`
                  ON `extensions_files`.`id` = `gallery_pictures`.`id_extensions_files`;";
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
     * Méthode pour trier les images par date (de la plus récente à la plus vieille)
     */

      /**
     * Méthode pour sélectionner les images selon leur extension
     */
}