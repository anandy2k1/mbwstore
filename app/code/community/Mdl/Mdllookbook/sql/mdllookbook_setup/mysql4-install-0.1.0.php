<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('mdllookbook')};
CREATE TABLE {$this->getTable('mdllookbook')} (
  `mdllookbook_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `filename` varchar(255) NOT NULL default '',
  `url` varchar(255) NOT NULL default '',
  `content` text NULL,
  `status` smallint(6) NOT NULL default '0',
  PRIMARY KEY (`mdllookbook_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `mdllookbook` (`mdllookbook_id`, `title`, `filename`, `url`, `content`, `status`) VALUES
(12, 'lookbook1', '2.jpg', 'http://google.com/', 'This is sample look book image.....', 1),
(13, 'lookbook2', '3.jpg', 'http://google.com/', 'This is sample look book........ :)', 1),
(14, 'lookbook3', '4.jpg', 'http://google.com/', 'This is sample look book........ :)', 1),
(15, 'lookbook4', '6.jpg', 'http://google.com/', 'This is sample look book........ :)', 1),
(16, 'lookbook5', '9_1.jpg', 'http://google.com/', 'This is sample look book........ :)', 1),
(17, 'lookbook6', '10.jpg', 'http://google.com/', 'This is sample look book........ :)', 1);


");

$installer->endSetup(); 
