-- -----------------------------------------------------
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ec_pages_custom` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `language_code` VARCHAR(5) NOT NULL,
  `title` VARCHAR(45) NULL,
  `meta_description` VARCHAR(90) NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- -----------------------------------------------------
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ec_pages_section_custom` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `position` SMALLINT(5) NULL,
  `name` VARCHAR(45) NULL,
  `pages_custom_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  KEY (`pages_custom_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- -----------------------------------------------------
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ec_pages_component_custom` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `edit_view` VARCHAR(90) NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- -----------------------------------------------------
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ec_pages_content_custom` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `component_content` LONGTEXT NULL,
  `position` SMALLINT(50) NULL,
  `pages_section_custom_id` INT NOT NULL,
  `pages_component_custom_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  KEY (`pages_section_custom_id`),
  KEY (`pages_component_custom_id`)

  )ENGINE=MyISAM DEFAULT CHARSET=utf8 ;