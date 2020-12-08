USE myschema;

CREATE TABLE IF NOT EXISTS `fruit` (
  `fruit_id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `variety` varchar(50) NOT NULL,
  PRIMARY KEY  (`fruit_id`)
) ENGINE=InnoDB;
