-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the Contao    *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_ext404_log`
-- 

CREATE TABLE `tl_ext404_log` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `page` varchar(255) NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table `tl_module`
--

CREATE TABLE `tl_module` (
  `ext404_email_from` varchar(255) NOT NULL default '',
  `ext404_email_to` varchar(255) NOT NULL default '',
  `ext404_ext` varchar(255) NOT NULL default '',
  `ext404_ext_handle` varchar(15) NOT NULL default '',
  `ext404_ie8_ext` varchar(255) NOT NULL default '',
  `ext404_ie8_ext_handle` varchar(15) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
