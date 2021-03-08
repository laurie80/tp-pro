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
     * Méthode pour modifier le nom de l'image
     */

    /**
     * Méthode pour trier les vidéos par date (de la plus récente à la plus vieille)
     */

    /**
     * Méthode pour sélectionner les vidéos selon un type extension
     */
}
