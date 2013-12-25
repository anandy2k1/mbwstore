<?php

$installer = $this;

$installer->startSetup();

$installer->run("

DROP TABLE IF EXISTS {$this->getTable('mlayer')};
CREATE TABLE {$this->getTable('mlayer')} (
  `mlayer_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `filename` varchar(255) NOT NULL default '',
  `content` text NULL,
  `status` smallint(6) NOT NULL default '0',
  `contentpos` smallint(6) NOT NULL default '0',
  `weblink` varchar(255) NULL,
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  `stores` text default '',
  `is_home` tinyint(1) NOT NULL default '0',
  `categories` text default '',
  PRIMARY KEY (`mlayer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `mlayer` (`mlayer_id`, `title`, `filename`, `content`, `status`, `contentpos`, `weblink`, `created_time`, `update_time`, `stores`, `is_home`, `categories`) VALUES
(1, 'Example headline', 'banner.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam neque est, gravida vel sagittis vel, accumsan eu nunc. Aliquam quis porttitor orci,.', 1, 2, 'google.com', '2013-09-20 10:27:07', '2013-09-20 10:27:07', '0', 0, NULL),
(2, 'Example headline2', 'img1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam neque est, gravida vel sagittis vel, accumsan eu nunc. Aliquam quis porttitor orci,.', 1, 1, 'google.com', '2013-09-23 14:27:02', '2013-09-23 14:27:02', '0', 0, NULL),
(3, 'Example headline3', 'img2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed velit blandit, accumsan magna sodales, euismod quam. Quisque purus purus, sollicitudin ', 1, 3, 'google.com', '2013-09-23 14:28:47', '2013-09-23 14:28:47', '0', 0, NULL);

    ");

$installer->endSetup();