CREATE TABLE mrbs_league 

 (id INT NOT NULL AUTO_INCREMENT,

 nom varchar(50), 

 adresse_mail_asso varchar(75),

 id_responsable INT,

 PRIMARY KEY (id),

 FOREIGN KEY (id_responsable) REFERENCES mrbs_users(id)

 );
