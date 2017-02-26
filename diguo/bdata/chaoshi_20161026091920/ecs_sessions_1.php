<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('0001b35ae25ab1a1ed184b96c2085409','1477444577','0','0','121.42.0.73','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('73933bd4a916789a4096b739e468b125','1477444576','0','0','123.146.44.2','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;s:12:\"captcha_word\";s:16:\"Mzk2YTNlYzQxZA==\";}');");
E_D("replace into `ecs_sessions` values('88d55dbac18d25d326eca5e7f8e9eb20','1477444560','0','0','123.146.44.2','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('7bd220d2449d71d1a105f520bf398e16','1477444695','0','1','104.224.174.70','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";s:10:\"1477353162\";s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('5164a0d9c31edb8bcdd8949aa58bc914','1477444582','0','0','104.224.174.70','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:5;s:7:\"referer\";s:6:\"wap站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c2e2cdd0497588475918038c0373e947','1477444385','0','0','220.181.132.198','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"wap站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('1b00f190dc884276195548a285d9f19d','1477444381','0','0','220.181.132.198','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('af0ab08c295834bfe0091d4d3be02888','1477444350','0','0','106.120.161.68','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('08e49b4008717aa8fb63da0174949536','1477444172','0','0','101.199.112.54','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"wap站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('8fb0d8b9a67ddb1ef0134e78ca2b570e','1477444167','0','0','101.199.112.54','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('f026f6c45c901d804289345b97a18d14','1477444136','0','0','106.120.161.68','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('f4985c111dcce2cb016cf0ea90f38850','1477444416','0','0','104.224.174.70','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;}');");

require("../../inc/footer.php");
?>