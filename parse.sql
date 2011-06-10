-- 
-- Database: `avenger`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tfrom`
-- 

CREATE TABLE `tfrom` (
  `id` int(11) NOT NULL auto_increment,
  `from_mail` text NOT NULL,
  `hits` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1575 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `trcpt`
-- 

CREATE TABLE `trcpt` (
  `id` int(11) NOT NULL auto_increment,
  `rcpt_mail` text NOT NULL,
  `hits` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=459 ;

