<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('magiclogo')};
CREATE TABLE {$this->getTable('magiclogo')} (
  `magiclogo_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `filename` varchar(255) NOT NULL default '',
  `url` varchar(255) NOT NULL default '',
  `status` smallint(6) NOT NULL default '0',
  PRIMARY KEY (`magiclogo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `magiclogo` (`magiclogo_id`, `title`, `filename`, `url`, `status`) VALUES
(1, 'caramel', '/c/a/caramel.png', 'http://google.com/', 1),
(2, 'jewely', '/j/e/jewely.gif', 'http://google.com/', 1),
(3, 'kitchen_store', '/k/i/kitchen_store.png', 'http://google.com/', 1),
(4, 'lingerie_store', '/l/i/lingerie_store.png', 'http://google.com/', 1),
(5, 'megashop', '/m/e/megashop.png', 'http://google.com/', 1),
(6, 'monchy', '/m/o/monchy.png', 'http://google.com/', 1),
(7, 'sanorita', '/s/a/sanorita.png', 'http://google.com/', 1),
(8, 'santana', '/s/a/santana.png', 'http://google.com/', 1),
(9, 'styler', '/s/t/styler.png', 'http://google.com/', 1);


 ");

$installer->endSetup(); 
