<?php

class GalleryVideos extends Database
{

    private $id;
    private $videoName;
    private $videoDate;
    private $idExtensionsFiles;

    public function __construct()
    {
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
     * Méthode pour ajouter les informations d'une vidéo en Base De Données
     */
    public function addVideo(string $videoName, string $videoDate, string $videoTitle, int $id_extensions_files)
    {
        $query = "INSERT INTO `gallery_videos` (`video_name`, `video_date`, `video_title`, `id_extensions_files`) VALUES (:video_name, :video_date, :video_title, :id_extensions_files);";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("video_name", $videoName, PDO::PARAM_STR);
        $buildQuery->bindValue("video_date", $videoDate, PDO::PARAM_STR);
        $buildQuery->bindValue("video_title", $videoTitle, PDO::PARAM_STR);
        $buildQuery->bindValue("id_extensions_files", $id_extensions_files, PDO::PARAM_INT);
        return $buildQuery->execute();
    }

    /**
     * Méthode pour supprimer une vidéo 
     */
    public function deleteVideo($nameVideo)
    {
        $query = "DELETE FROM `gallery_videos` WHERE `video_name` = :video_name";
        $deleteVideo = parent::getDb()->prepare($query);
        $deleteVideo->bindValue("video_name", $nameVideo, PDO::PARAM_STR);
        return $deleteVideo->execute();
    }

 /**
     * Méthode pour récupérer toutes les informations d'une vidéo 
     */
    public function getInformationsVideo() {
        $query = "SELECT `gallery_videos`.`id`,`video_name`,`video_title`, `video_date`, `type_extension`
                  FROM `gallery_videos`
                  INNER JOIN `extensions_files`
                  ON `extensions_files`.`id` = `gallery_videos`.`id_extensions_files`;";
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
     * Méthode pour récupérer les informations d'une vidéo en particulier
     */
    public function getOneVideoInformations(int $id)
    {
        $query = "SELECT * FROM `gallery_videos` 
                  INNER JOIN `extensions_files`
                  ON `extensions_files`.`id` = `gallery_videos`.`id_extensions_files`
                  WHERE `gallery_videos`.`id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("id", $id, PDO::PARAM_INT);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetch(PDO::FETCH_ASSOC);
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

        /**
     * Méthode pour modifier le nom de la vidéo en BDD et donc de le modifier à l'affichage sur la galerie de "preview_galery"
     */
    public function modifyNameVideo($id, $videoTitle)
    {
        $query = "UPDATE `gallery_videos` SET `video_title` = :video_title WHERE `id` = :id";
        $updateVideo = parent::getDb()->prepare($query);
        $updateVideo->bindValue("id", $id, PDO::PARAM_INT);
        $updateVideo->bindValue("Video_title", $videoTitle, PDO::PARAM_STR);
        return $updateVideo->execute();
    }
}
  

