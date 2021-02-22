#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: admin_connexion
#------------------------------------------------------------

CREATE TABLE admin_connexion(
        id             Int  Auto_increment  NOT NULL ,
        admin_name     Varchar (50) NOT NULL ,
        admin_password Varchar (50) NOT NULL ,
        admin_mail     Varchar (100) NOT NULL
	,CONSTRAINT admin_connexion_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: extensions_files
#------------------------------------------------------------

CREATE TABLE extensions_files(
        id             Int  Auto_increment  NOT NULL ,
        type_extension Varchar (20) NOT NULL
	,CONSTRAINT extensions_files_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gallery_pictures
#------------------------------------------------------------

CREATE TABLE gallery_pictures(
        id                  Int  Auto_increment  NOT NULL ,
        picture_name        Varchar (100) NOT NULL ,
        picture_date        Date NOT NULL ,
        id_extensions_files Int NOT NULL
	,CONSTRAINT gallery_pictures_PK PRIMARY KEY (id)

	,CONSTRAINT gallery_pictures_extensions_files_FK FOREIGN KEY (id_extensions_files) REFERENCES extensions_files(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gallery_videos
#------------------------------------------------------------

CREATE TABLE gallery_videos(
        id                  Int  Auto_increment  NOT NULL ,
        video_name          Varchar (100) NOT NULL ,
        video_date          Date NOT NULL ,
        id_extensions_files Int NOT NULL
	,CONSTRAINT gallery_videos_PK PRIMARY KEY (id)

	,CONSTRAINT gallery_videos_extensions_files_FK FOREIGN KEY (id_extensions_files) REFERENCES extensions_files(id)
)ENGINE=InnoDB;

