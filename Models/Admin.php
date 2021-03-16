<?php

class Admin extends Database
{

    private $id;
    private $adminName;
    private $adminPassword;
    private $adminMail;

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
     * Get the value of adminName
     */
    public function getAdminName()
    {
        return $this->adminName;
    }

    /**
     * Set the value of adminName
     *
     * @return  self
     */
    public function setAdminName($adminName)
    {
        $this->adminName = $adminName;

        return $this;
    }

    /**
     * Get the value of adminPassword
     */
    public function getAdminPassword()
    {
        return $this->adminPassword;
    }

    /**
     * Set the value of adminPassword
     *
     * @return  self
     */
    public function setAdminPassword($adminPassword)
    {
        $this->adminPassword = $adminPassword;

        return $this;
    }

    /**
     * Get the value of adminMail
     */
    public function getAdminMail()
    {
        return $this->adminMail;
    }

    /**
     * Set the value of adminMail
     *
     * @return  self
     */
    public function setAdminMail($adminMail)
    {
        $this->adminMail = $adminMail;

        return $this;
    }


    /**
     * Méthode permettant de récupérer en BDD le nom et le mot de passe de l'Admin via son ID
     * pour pouvoir faire concorder le nom d'utilisateur et le mot de passe à celui envoyer dans le formulaire
     * 
     * @param string
     * @return boolean
     */

    public function getInformationsConnexionAdmin(string $admin_name)
    {
        $query = "SELECT `id`, `admin_name`, `admin_password`, `admin_mail`
                  FROM `admin_connexion`
                  WHERE `admin_name` = :admin_name;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("admin_name", $admin_name, PDO::PARAM_STR);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetch(PDO::FETCH_ASSOC);
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }
}
