DROP DATABASE blog;
CREATE DATABASE IF NOT EXISTS blog;
USE blog;

CREATE TABLE category (
			cat_id INT NOT NULL AUTO_INCREMENT ,
      cat_name VARCHAR(50) NOT NULL ,
      icon_markup VARCHAR(250) NOT NULL ,
			 CONSTRAINT cat_pk PRIMARY KEY (cat_id) ,
			 CONSTRAINT cat_uq UNIQUE(cat_name)
		  ) ENGINE = InnoDB;

CREATE TABLE article (
      cat_id INT NOT NULL ,
      article_id INT NOT NULL AUTO_INCREMENT ,
			title VARCHAR(255) NOT NULL ,
			sub_title VARCHAR(255) NOT NULL ,
			content TEXT NOT NULL ,
			banner VARCHAR(255) NOT NULL ,
      view INT DEFAULT 0,
      likes INT DEFAULT 0,
			 CONSTRAINT a_pk PRIMARY KEY (article_id) ,
       CONSTRAINT a_fk FOREIGN KEY(cat_id) REFERENCES category(cat_id) ,
			 CONSTRAINT a_uq UNIQUE(title)
 ) ENGINE = InnoDB;

CREATE TABLE assest_map (
 			assest_id INT NOT NULL AUTO_INCREMENT ,
      article_id INT NOT NULL ,
      path_url VARCHAR(25) NOT NULL ,
 			CONSTRAINT as_pk PRIMARY KEY (assest_id) ,
      CONSTRAINT as_fk FOREIGN KEY(article_id) REFERENCES article(article_id)
) ENGINE = InnoDB;

CREATE TABLE my_admin (
			adminID VARCHAR(10) NOT NULL,
			Fullname VARCHAR(50) NOT NULL,
			Email VARCHAR(40) NOT NULL UNIQUE,
			Pass VARCHAR(40) NOT NULL,
      Log_Attempt INT DEFAULT 0,
			Date_Of_Reg DATETIME NOT NULL,
			 CONSTRAINT ad_pk PRIMARY KEY(adminID)
) ENGINE = InnoDB;

INSERT INTO `category` (`cat_id`, `cat_name`, `icon_markup`) VALUES (NULL, 'Amazing Places', '<i class="fa fa-photo" aria-hidden="true"></i>');
INSERT INTO `category` (`cat_id`, `cat_name`, `icon_markup`) VALUES (NULL, 'Brilliant Products', '<i class="fa fa-product-hunt" aria-hidden="true"></i>');
INSERT INTO `category` (`cat_id`, `cat_name`, `icon_markup`) VALUES (NULL, 'Food & Culture', '<i class="fa fa-spoon" aria-hidden="true"></i>');
INSERT INTO `category` (`cat_id`, `cat_name`, `icon_markup`) VALUES (NULL, 'Mind & Body', '<i class="fa fa-child" aria-hidden="true"></i>');
INSERT INTO `category` (`cat_id`, `cat_name`, `icon_markup`) VALUES (NULL, 'Personal Growth', '<i class="fa fa-line-chart" aria-hidden="true"></i>');
INSERT INTO `category` (`cat_id`, `cat_name`, `icon_markup`) VALUES (NULL, 'Science & Technology', '<i class="fa fa-rocket" aria-hidden="true"></i>');
