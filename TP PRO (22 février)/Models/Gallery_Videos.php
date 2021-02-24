<?php

class GalleryVideos extends Database {

    private $id;
    private $videoName;
    private $videoDate;
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
     * Get the value of videoName
     */ 
    public function getVideoName()
    {
        return $this->videoName;
    }

    /**
     * Set the value of videoName
     *
     * @return  self
     */ 
    public function setVideoName($videoName)
    {
        $this->videoName = $videoName;

        return $this;
    }

    /**
     * Get the value of videoDate
     */ 
    public function getVideoDate()
    {
        return $this->videoDate;
    }

    /**
     * Set the value of videoDate
     *
     * @return  self
     */ 
    public function setVideoDate($videoDate)
    {
        $this->videoDate = $videoDate;

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
     * Méthode pour ajouter une vidéo en Base De Données
     * 
     * @param array
     * @return boolean
     */
    public function addVideo(array $arrayParameters) {
        $query = "INSERT INTO `gallery_videos` (`video_name`, `video_date`) VALUES (:video_name, :video_date);";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("video_name", $arrayParameters["video_name"], PDO::PARAM_STR);
        $buildQuery->bindValue("video_date", $arrayParameters["video_date"], PDO::PARAM_STR);
        return $buildQuery->execute();
    }

    /**
     * Méthode pour sélectionner toutes les vidéos en Base De Données
     * 
     *  @return array|boolean
     */
    public function getAllVideos() {
        $query = "SELECT `id`, `video_name`, `video_date`, `id_extensions_files` FROM `gallery_videos`;";
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
     * Méthode pour supprimer une vidéo 
     */


    /**
     * Méthode pour trier les vidéos par date (de la plus récente à la plus vieille)
     */

       /**
     * Méthode pour sélectionner les vidéos selon un type extension
     */
}