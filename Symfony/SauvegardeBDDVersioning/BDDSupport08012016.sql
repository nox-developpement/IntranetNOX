-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: support
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `support`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `support` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `support`;

--
-- Table structure for table `ost__search`
--

DROP TABLE IF EXISTS `ost__search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost__search` (
  `object_type` varchar(8) NOT NULL,
  `object_id` int(11) unsigned NOT NULL,
  `title` text,
  `content` text,
  PRIMARY KEY (`object_type`,`object_id`),
  FULLTEXT KEY `search` (`title`,`content`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost__search`
--

LOCK TABLES `ost__search` WRITE;
/*!40000 ALTER TABLE `ost__search` DISABLE KEYS */;
INSERT INTO `ost__search` VALUES ('H',1,'osTicket a Ã©tÃ© installÃ©!','Merci d\'avoir choisi osTicket. Veuillez rejoidre les forums d\'osTicket et notre liste de diffusion afin de rester Ã  jour sur les derniÃ¨res nouvelles, les alertes de sÃ©curitÃ© et les mises Ã  jour. Les forums d\'osTicket sont Ã©galement un excellent endroit pour obtenir aide, conseils, astuces ou pour aider d\'autres utilisateurs d\'osTicket. Outre les forums, le wiki d\'osTicket fournit une collection utile du matÃ©riel pÃ©dagogique, documentation et notes de la communautÃ©. Nous accueillons vos contributions Ã  la communautÃ© d\'osTicket. Si vous Ãªtes Ã  la recherche d\'un meilleur niveau de support, nous fournissons des services professionnels et un support professionnel avec temps de rÃ©ponse garantis et l\'accÃ¨s Ã  l\'Ã©quipe de dÃ©veloppement de base. Nous pouvons Ã©galement vous aider Ã  personnaliser osTicket ou encore ajouter de nouvelles fonctionnalitÃ©s au systÃ¨me pour rÃ©pondre Ã  vos besoins uniques. Si l\'idÃ©e de la gestion et de la mise Ã  niveau de cette installation d\'osTicket est intimidante, vous pouvez essayer osTicket comme un service hÃ©bergÃ© Ã  http://www.supportsystem.com/ - aucune installation requise et nous pouvons importer vos donnÃ©es ! Avec l\'infrastructure clÃ© en main de SupportSystem, vous obtenez le meilleur d\'osTicket, vous laissant libre de vous concentrer sur vos clients sans la charge de veiller Ã  ce que l\'application soit stable, maintenue et sÃ»re. Cordialement, - L\'Ã©quipe osTicket http://osticket.com/ PS. Il ne faut pas juste faire des clients heureux, faites d\'heureux clients !'),('H',2,'','osTicket est un systÃ¨me de ticket de support largement utilisÃ© et open-source. C\'est une alternative intÃ©ressante aux systÃ¨mes de support plus coÃ»teux et complexes - ses qualitÃ©s : simple, lÃ©ger, fiable, open-source, basÃ© sur le web, facile Ã  installer et Ã  utiliser.'),('H',3,'Statut modifiÃ©','Statut modifiÃ© de Ouvert vers FermÃ© par Tristan Besson'),('H',4,'','Ceci est un test de ticketing'),('H',5,'','Bien recu ! Ceci est un test de ticketing'),('H',6,'Statut modifiÃ©','Statut modifiÃ© de Ouvert vers FermÃ© par Tristan Besson Ticket de test terminÃ©'),('H',7,'','Au secours SOS'),('H',8,'Il soÃ»le avec ses question','Il est un peu bÃªte'),('H',9,'','C\'est corrigÃ© !'),('H',10,'Statut modifiÃ©','Statut modifiÃ© de Ouvert vers FermÃ© par Tristan Besson'),('H',11,'','testt t'),('H',12,'','testt t'),('H',13,'Statut modifiÃ©','Statut modifiÃ© de Ouvert vers FermÃ© par Tristan Besson'),('H',14,'','bkalblablalbla'),('H',15,'','test2'),('H',16,'','Veuillez downgradÃ© votre version de windows !'),('K',1,'Test question','testestestest'),('O',1,'osTicket','420 Desoto Street\nAlexandria, LA 71301\n(318) 290-3674\nhttp://osticket.com\nNon seulement nous dÃ©veloppons le logiciel, nous l\'utilisons Ã©galement pour gÃ©rer le support d\'osTicket. Laissez nous vous aider Ã  rapidement mettre en place et tirer parti au maximum des fonctionnalitÃ©s d\'osTicket. Contactez nous pour un accompagnement professionnel ou visitez notre site web pour accÃ©der Ã  la documentation et Ã  l\'entraide communautaire.'),('T',1,'716347 osTicket a Ã©tÃ© installÃ©!',''),('T',2,'491384 Test ticketing','Test ticketing'),('T',3,'331975 CA MARCHE PAS !','CA MARCHE PAS !'),('T',4,'627426 Test','Test'),('T',5,'410067 J\'ai windows 10 T_T','J\'ai windows 10 T_T'),('T',6,'575215 hohÃ© test2','hohÃ© test2'),('U',1,'Support osTicket','support@osticket.com'),('U',2,'Tristan BESSON',''),('U',3,'Sylvain JUBEAU',''),('U',4,'Arnaud POUZOLS','');
/*!40000 ALTER TABLE `ost__search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_api_key`
--

DROP TABLE IF EXISTS `ost_api_key`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_api_key` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `ipaddr` varchar(64) NOT NULL,
  `apikey` varchar(255) NOT NULL,
  `can_create_tickets` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `can_exec_cron` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `notes` text,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `apikey` (`apikey`),
  KEY `ipaddr` (`ipaddr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_api_key`
--

LOCK TABLES `ost_api_key` WRITE;
/*!40000 ALTER TABLE `ost_api_key` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_api_key` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_attachment`
--

DROP TABLE IF EXISTS `ost_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_attachment` (
  `object_id` int(11) unsigned NOT NULL,
  `type` char(1) NOT NULL,
  `file_id` int(11) unsigned NOT NULL,
  `inline` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`file_id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_attachment`
--

LOCK TABLES `ost_attachment` WRITE;
/*!40000 ALTER TABLE `ost_attachment` DISABLE KEYS */;
INSERT INTO `ost_attachment` VALUES (1,'C',2,0),(8,'T',1,1),(9,'T',1,1),(10,'T',1,1),(11,'T',1,1),(12,'T',1,1),(13,'T',1,1);
/*!40000 ALTER TABLE `ost_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_canned_response`
--

DROP TABLE IF EXISTS `ost_canned_response`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_canned_response` (
  `canned_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `isenabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL DEFAULT '',
  `response` text NOT NULL,
  `lang` varchar(16) NOT NULL DEFAULT 'en_US',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`canned_id`),
  UNIQUE KEY `title` (`title`),
  KEY `dept_id` (`dept_id`),
  KEY `active` (`isenabled`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_canned_response`
--

LOCK TABLES `ost_canned_response` WRITE;
/*!40000 ALTER TABLE `ost_canned_response` DISABLE KEYS */;
INSERT INTO `ost_canned_response` VALUES (1,0,1,'Qu\'est-ce que osTicket (exemple) ?','osTicket est un systÃ¨me de ticket de support largement utilisÃ© et open-source. C\'est une alternative intÃ©ressante aux systÃ¨mes de support plus coÃ»teux et complexes - ses qualitÃ©s : simple, lÃ©ger, fiable, open-source, basÃ© sur le web, facile Ã  installer et Ã  utiliser.','en_US','','2015-12-01 09:25:04','2015-12-01 09:25:04'),(2,0,1,'Exemple (avec des variables)','Bonjour % {ticket.name.first}, <br /><br />Votre ticket #% {ticket.number} crÃ©Ã© le % {ticket.create_date} est dans le dÃ©partement nommÃ© \"% {ticket.dept.name}\".','en_US','','2015-12-01 09:25:04','2015-12-01 09:25:04');
/*!40000 ALTER TABLE `ost_canned_response` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_config`
--

DROP TABLE IF EXISTS `ost_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_config` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(64) NOT NULL,
  `key` varchar(64) NOT NULL,
  `value` text NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `namespace` (`namespace`,`key`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_config`
--

LOCK TABLES `ost_config` WRITE;
/*!40000 ALTER TABLE `ost_config` DISABLE KEYS */;
INSERT INTO `ost_config` VALUES (1,'core','admin_email','helpdesk@groupe-nox.com','2016-01-08 13:29:12'),(2,'core','helpdesk_url','http://localhost/Symfony/web/support/','2015-12-01 08:25:04'),(3,'core','helpdesk_title','Support Groupe Nox','2015-12-01 08:25:04'),(4,'core','schema_signature','b26f29a6bb5dbb3510b057632182d138','2015-12-01 08:25:04'),(5,'dept.1','assign_members_only','','2015-12-01 08:25:03'),(6,'dept.2','assign_members_only','','2015-12-01 08:25:03'),(7,'dept.3','assign_members_only','','2015-12-01 08:25:03'),(8,'sla.1','transient','0','2015-12-01 08:25:03'),(9,'list.1','configuration','{\"handler\":\"TicketStatusList\"}','2015-12-01 08:25:03'),(10,'core','time_format',' H:i','2015-12-01 08:25:03'),(11,'core','date_format','d/m/Y','2015-12-01 08:25:03'),(12,'core','datetime_format','d/m/Y G:i','2015-12-01 08:25:03'),(13,'core','daydatetime_format','D, M j Y G:i','2015-12-01 08:25:03'),(14,'core','default_timezone_id','15','2015-12-01 08:25:03'),(15,'core','default_priority_id','2','2015-12-01 08:25:03'),(16,'core','enable_daylight_saving','0','2015-12-01 08:25:03'),(17,'core','reply_separator','--RÃ©pondre au-dessus de cette ligne--','2015-12-01 08:25:03'),(18,'core','allowed_filetypes','.doc, .pdf, .jpg, .jpeg, .gif, .png, .xls, .docx, .xlsx, .txt','2015-12-01 08:25:03'),(19,'core','isonline','1','2015-12-01 08:25:03'),(20,'core','staff_ip_binding','0','2015-12-01 08:25:03'),(21,'core','staff_max_logins','10','2015-12-01 09:04:48'),(22,'core','staff_login_timeout','2','2015-12-01 08:25:03'),(23,'core','staff_session_timeout','30','2015-12-01 08:25:03'),(24,'core','passwd_reset_period','0','2015-12-01 08:25:03'),(25,'core','client_max_logins','10','2015-12-01 09:04:48'),(26,'core','client_login_timeout','2','2015-12-01 08:25:03'),(27,'core','client_session_timeout','30','2015-12-01 08:25:03'),(28,'core','max_page_size','25','2015-12-01 08:25:03'),(29,'core','max_open_tickets','0','2015-12-01 08:25:03'),(30,'core','max_file_size','67108864','2015-12-01 08:55:57'),(31,'core','max_user_file_uploads','1','2015-12-01 08:25:03'),(32,'core','max_staff_file_uploads','1','2015-12-01 08:25:03'),(33,'core','autolock_minutes','3','2015-12-01 08:25:03'),(34,'core','default_smtp_id','0','2015-12-01 08:25:03'),(35,'core','use_email_priority','0','2015-12-01 08:25:03'),(36,'core','enable_kb','1','2015-12-01 09:05:23'),(37,'core','enable_premade','1','2015-12-01 08:25:03'),(38,'core','enable_captcha','0','2015-12-01 08:25:03'),(39,'core','enable_auto_cron','0','2015-12-01 08:25:03'),(40,'core','enable_mail_polling','1','2016-01-04 15:06:16'),(41,'core','send_sys_errors','0','2015-12-01 09:06:21'),(42,'core','send_sql_errors','1','2015-12-01 08:25:03'),(43,'core','send_login_errors','1','2015-12-01 08:25:03'),(44,'core','save_email_headers','1','2015-12-01 08:25:03'),(45,'core','strip_quoted_reply','1','2015-12-01 08:25:03'),(46,'core','ticket_autoresponder','0','2015-12-01 08:25:03'),(47,'core','message_autoresponder','0','2015-12-01 08:25:03'),(48,'core','ticket_notice_active','1','2015-12-01 08:25:03'),(49,'core','ticket_alert_active','1','2015-12-01 08:25:03'),(50,'core','ticket_alert_admin','0','2015-12-01 09:06:21'),(51,'core','ticket_alert_dept_manager','1','2015-12-01 08:25:03'),(52,'core','ticket_alert_dept_members','1','2015-12-01 09:06:21'),(53,'core','message_alert_active','1','2015-12-01 08:25:03'),(54,'core','message_alert_laststaff','1','2015-12-01 08:25:03'),(55,'core','message_alert_assigned','1','2015-12-01 08:25:03'),(56,'core','message_alert_dept_manager','0','2015-12-01 08:25:03'),(57,'core','note_alert_active','0','2015-12-01 08:25:03'),(58,'core','note_alert_laststaff','1','2015-12-01 08:25:03'),(59,'core','note_alert_assigned','1','2015-12-01 08:25:03'),(60,'core','note_alert_dept_manager','0','2015-12-01 08:25:03'),(61,'core','transfer_alert_active','0','2015-12-01 08:25:03'),(62,'core','transfer_alert_assigned','0','2015-12-01 08:25:03'),(63,'core','transfer_alert_dept_manager','1','2015-12-01 08:25:03'),(64,'core','transfer_alert_dept_members','0','2015-12-01 08:25:03'),(65,'core','overdue_alert_active','1','2015-12-01 08:25:03'),(66,'core','overdue_alert_assigned','1','2015-12-01 08:25:03'),(67,'core','overdue_alert_dept_manager','1','2015-12-01 08:25:03'),(68,'core','overdue_alert_dept_members','0','2015-12-01 08:25:03'),(69,'core','assigned_alert_active','1','2015-12-01 08:25:03'),(70,'core','assigned_alert_staff','1','2015-12-01 08:25:03'),(71,'core','assigned_alert_team_lead','0','2015-12-01 08:25:03'),(72,'core','assigned_alert_team_members','0','2015-12-01 08:25:03'),(73,'core','auto_claim_tickets','1','2015-12-01 08:25:04'),(74,'core','show_related_tickets','0','2015-12-01 08:55:57'),(75,'core','show_assigned_tickets','1','2015-12-01 08:25:04'),(76,'core','show_answered_tickets','0','2015-12-01 08:25:04'),(77,'core','hide_staff_name','0','2015-12-01 08:25:04'),(78,'core','overlimit_notice_active','0','2015-12-01 08:25:04'),(79,'core','email_attachments','1','2015-12-01 08:25:04'),(80,'core','number_format','######','2015-12-01 08:25:04'),(81,'core','sequence_id','0','2015-12-01 08:25:04'),(82,'core','log_level','2','2015-12-01 08:25:04'),(83,'core','log_graceperiod','12','2015-12-01 08:25:04'),(84,'core','client_registration','public','2015-12-01 08:25:04'),(85,'core','landing_page_id','1','2015-12-01 08:25:04'),(86,'core','thank-you_page_id','2','2015-12-01 08:25:04'),(87,'core','offline_page_id','3','2015-12-01 08:25:04'),(88,'core','system_language','fr','2015-12-01 08:25:04'),(89,'mysqlsearch','reindex','0','2015-12-01 08:25:57'),(90,'core','default_email_id','3','2016-01-04 15:06:16'),(91,'core','alert_email_id','0','2016-01-08 13:29:12'),(92,'core','default_dept_id','1','2015-12-01 08:25:04'),(93,'core','default_sla_id','1','2015-12-01 08:25:04'),(94,'core','default_template_id','1','2015-12-01 08:25:04'),(95,'plugin.1','msad','','2015-12-01 08:33:58'),(96,'plugin.1','domain','nox.local','2015-12-01 08:33:58'),(97,'plugin.1','dns','192.168.35.10','2015-12-01 08:33:58'),(98,'plugin.1','ldap','','2015-12-01 08:33:58'),(99,'plugin.1','servers','SRV-NOX.nox.local','2015-12-01 08:33:58'),(100,'plugin.1','tls','0','2015-12-01 08:33:58'),(101,'plugin.1','conn_info','','2015-12-01 08:33:58'),(102,'plugin.1','bind_dn','DC=nox,DC=local','2015-12-01 08:33:58'),(103,'plugin.1','bind_pw','','2015-12-01 08:33:58'),(104,'plugin.1','search_base','DC=nox,DC=local','2015-12-01 08:33:58'),(105,'plugin.1','schema','{\"msad\":\"Microsoft\\u00ae Active Directory\"}','2015-12-01 08:33:58'),(106,'plugin.1','auth','','2015-12-01 08:33:58'),(107,'plugin.1','auth-staff','1','2015-12-01 08:33:58'),(108,'plugin.1','auth-client','1','2015-12-01 08:33:58'),(109,'core','client_logo_id','4','2015-12-01 09:25:06'),(110,'core','staff_logo_id','4','2015-12-01 09:25:06'),(111,'core','default_help_topic','0','2015-12-01 08:55:57'),(112,'core','default_ticket_status_id','1','2015-12-01 08:55:57'),(113,'core','enable_html_thread','1','2015-12-01 08:55:57'),(114,'core','allow_client_updates','0','2015-12-01 08:55:57'),(115,'core','allow_pw_reset','1','2015-12-01 09:04:48'),(116,'core','pw_reset_window','30','2015-12-01 09:04:48'),(117,'core','clients_only','1','2015-12-01 09:04:48'),(118,'core','client_verify_email','1','2015-12-01 09:04:48'),(119,'core','restrict_kb','0','2015-12-01 09:05:23'),(120,'core','ticket_alert_acct_manager','1','2015-12-01 09:06:21'),(121,'core','message_alert_acct_manager','0','2015-12-01 09:06:21'),(122,'pwreset','5T7F_YA5qcZ8L63l3KA5YnJNQLvevFXUN3TzIYCN=8PIoH0f','2','2016-01-04 12:50:24'),(123,'core','verify_email_addrs','1','2016-01-04 15:06:16'),(124,'core','accept_unregistered_email','1','2016-01-04 15:06:16'),(125,'core','add_email_collabs','1','2016-01-04 15:06:16');
/*!40000 ALTER TABLE `ost_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_content`
--

DROP TABLE IF EXISTS `ost_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content_id` int(10) unsigned NOT NULL DEFAULT '0',
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `type` varchar(32) NOT NULL DEFAULT 'other',
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `lang` varchar(16) NOT NULL DEFAULT 'en_US',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_content`
--

LOCK TABLES `ost_content` WRITE;
/*!40000 ALTER TABLE `ost_content` DISABLE KEYS */;
INSERT INTO `ost_content` VALUES (1,1,1,'landing','Page dâ€™accueil','<h1>Bienvenue au centre de Support</h1>\n<p>\nAfin de simplifier les demandes de support et de mieux vous servir, nous\nutilisons un systÃ¨me de gestion de ticket. A chaque demande de support\nest attribuÃ© un numÃ©ro de ticket unique vous permettant de suivre en\nligne sa progression et les rÃ©ponses apportÃ©es. Pour votre information,\nnous fournissons des archives et un historique complet de toutes vos\ndemandes de support. Une adresse e-mail valide est nÃ©cessaire pour\nsoumettre un ticket.\n</p>','fr','La page dâ€™accueil se rÃ©fÃ¨re au contenu de la vue initiale du Portail client. Le modÃ¨le modifie le contenu vu au dessus des deux liens <strong>Ouvrir un nouveau ticket</strong> et <strong> Verifier le status d\'un ticket</strong>.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(2,2,1,'thank-you','Merci','<div>%{ticket.name},\n<br>\n<br>\nMerci de nous avoir contactÃ©.\n<br>\n<br>\nUne demande de ticket de support a Ã©tÃ© crÃ©Ã©e. Un membre de l\'Ã©quipe support\nvous contactera sous peu si nÃ©cessaire.\n</p>\n<br><br>\nL\'Ã©quipe support </div>','fr','La page de remerciement est affichÃ©e sur le portail client quand un utilisateur crÃ©e un nouveau ticket via le portail client.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(3,3,1,'offline','Hors-ligne','<div><h1> <span style=\"font-size: medium\">  Support hors Ligne</span></h1> <p>Merci d\'utiliser notre outil de support.</p> <p>Notre helpdesk est actuellement hors ligne . Veuillez rÃ©essayer ultÃ©rieurement.</p> </div>','fr','La page hors connexion s\'affiche dans le portail client lorsque le support d\'assistance est hors connexion.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(4,4,1,'registration-staff','Bienvenue sur osTicket','<h3><strong>Bonjour %{recipient.name.first},</strong></h3> <div>Nous vous avons crÃ©Ã© un compte sur notre support d\'assistance & l\'adresse %{url}.<br/><br/> Veuillez suivre le lien ci-dessous pour confirmer votre compte et accÃ©dez Ã  vos billets. <br/><br/><a href=\"%{link}\">%{link}</a><br/><br/><em style=\"font-size: small\">Votre systÃ¨me d\'assistance<br/> %{company.name}</em></div>','fr','Ce modÃ¨le dÃ©finit le courriel initial (facultatif) transmis aux Agents lorsqu\'un compte est crÃ©Ã© en leur nom.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(5,5,1,'pwreset-staff','RÃ©initialisation du mot de passe pour le personnel d\'osTicket','<h3><strong>Bonjour %{staff.name.first},</strong></h3> <div>Une demande de rÃ©initialisation de mot de passe a Ã©tÃ© soumise Ã  votre place pour le service d\'assistance Ã  %{url}. <br /><br />Si vous pensez que cela a Ã©tÃ© fait par erreur, supprimez et ignorer ce mail. Votre compte est toujours sÃ©curisÃ© et personne n\'y a eu accÃ¨s. Il n\'est pas verrouillÃ© et votre mot de passe n\'a pas Ã©tÃ© rÃ©initialisÃ©. Quelqu\'un pourrait avoir par erreur entrÃ© votre courriel. <br /><br />Suivez le lien ci-dessous pour vous connecter au support d\'assistance et changer votre mot de passe. <br/><br/><a href=\"%{link}\">%{link}</a><br/><br/><em style=\"font-size: small\">amicalement, votre systÃ¨me de Support</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width: 126px\" /></div>','fr','Ce modÃ¨le dÃ©finit le courriel envoyÃ© aux employÃ©s qui choisissent le lien <strong>J\'ai oubliÃ© mon mot de passe</strong> sur la page de connexion du personnel.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(6,6,1,'banner-staff','Authentification requise','','fr','Ceci est la banniÃ¨re et le message initial montrÃ© sur la page de connexion de lâ€™Ã©quipe. Le premier champ entrÃ© fait rÃ©fÃ©rence au texte en rouge qui apparaÃ®t en haut. Le composant texte est pour crÃ©er le contenu de la banniÃ¨re qui servira d\'avertissement.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(7,7,1,'registration-client','Bienvenue sur %{company.name}','<h3><strong>Bonjour %{recipient.name.first},</strong></h3> <div>Nous vous avons crÃ©Ã© un compte sur notre support d\'assistance Ã  l\'adresse %{url}.<br/><br/>Veuillez suivre le lien ci-dessous pour confirmer votre compte et accÃ©der Ã  vos billets. <br/><br/><a href=\"%{link}\">%{link}</a><br/><br/><em style=\"font-size: small\">Cordialement <br />%{company.name}</em></div>','fr','Ce modÃ¨le dÃ©finit le courriel envoyÃ© aux clients lorsque leur compte a Ã©tÃ© crÃ©Ã© dans le portail client ou par un agent Ã  leur place. Ce courriel permet la vÃ©rification de cette adresse. Merci d\'utiliser %{link} quelque part dans le corps de ce modÃ¨le.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(8,8,1,'pwreset-client','%{company.name} AccÃ¨s au support d\'assistance','<h3><strong>Bonjour %{user.name.first},</strong></h3><div> Une demande de rÃ©initialisation de mot de passe a Ã©tÃ© faite Ã  votre place pour le service d\'assistance Ã  %{url}.<br/><br/>Si vous pensez que cela a Ã©tÃ© fait par erreur,  veuillez supprimer et ignorer ce message. Votre compte est toujours sÃ©curisÃ© et personne n\'y a eu accÃ¨s. Il n\'est pas verrouillÃ© et votre mot de passe n\'a pas Ã©tÃ© rÃ©initialisÃ©. Quelqu\'un pourrait avoir entrÃ© votre courriel par erreur. <br/><br/>Suivez le lien ci-dessous pour vous connecter au support d\'assistance et changer votre mot de passe. <br/><br/><a href=\"%{link}\">%{link}</a><br/><br/><em style=\"font-size: small\">Amicalement, votre systÃ¨me d\'assistance <br/>%{company.name}</em></div>','fr','Ce modÃ¨le dÃ©finit le courriel envoyÃ© aux Clients qui cliquent sur le lien <strong>J\'ai oubliÃ© mon mot de passe</strong> sur la page de connexion du Client.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(9,9,1,'banner-client','Connectez-vous Ã  %{company.name}','Afin de pouvoir mieux les servir, nous encourageons nos Clients Ã  ouvrir un compte.','fr','Ceci compose l\'en-tÃªte de la page de connexion du Client. Ceci peut Ãªtre utile pour informer vos clients sur vos politiques d\'enregistrement et de connexions.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(10,10,1,'registration-confirm','Enregistrement d\'un compte','<div><strong>Merci pour l\'ouverture d\'un compte.</strong><br/><br />Nous venons juste de vous envoyer un courriel Ã  l\'adresse que vous avez entrÃ©. Veuillez suivre ce lien pour confirmer votre compte et accÃ©dez Ã  vos billets.</div>','fr','Ces modÃ¨les dÃ©finissent la page prÃ©sentÃ©e aux Clients aprÃ¨s avoir terminÃ© le formulaire d\'inscription. Le modÃ¨le devrait mentionner que le systÃ¨me leur envoie un lien de confirmation par courriel et quelle est la prochaine Ã©tape dans le processus d\'inscription.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(11,11,1,'registration-thanks','Compte confirmÃ©!','<div><strong>Merci pour la crÃ©ation d\'un compte.</strong><br/><br/>Vous avez confirmÃ© votre courriel et activÃ© votre compte. Vous pouvez dÃ©sormais ouvrir un nouveau billet ou gÃ©rer les billets existants. <br/><br/><em>Votre centre d\'assistance</em><br/> %{company.name}</div>','fr','Ce modÃ¨le dÃ©finit le contenu affichÃ© quand des clients s\'inscrivent avec succÃ¨s en confirmant leur compte. Cette page doit informer l\'utilisateur que l\'inscription est terminÃ©e et que le client peut maintenant soumettre un ticket ou accÃ©der des tickets existants.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(12,12,1,'access-link','Lien d\'accÃ¨s billet [#%{ticket.number}]','<h3><strong>Bonjour %{recipient.name.first},</strong></h3> <div>Une demande de lien  pour le billet #%{ticket.number} a Ã©tÃ© faite Ã  votre place pour le service d\'assistance sur %{url}.<br/><br/> suivez le lien ci-dessous pour vÃ©rifier l\'Ã©tat du billet #%{ticket.number}.<br/><br/><a href=\"%{recipient.ticket_link}\">%{recipient.ticket_link}</a><br/><br/>si vous <strong>n\'avez pas</strong> fait la demande, veuillez supprimer et ignorer ce courriel. Votre compte est toujours sÃ©curisÃ© et personne n\'a eu accÃ¨s aux billets. Un tiers pourrait avoir entrÃ© par erreur votre courriel. <br/><br/>--<br/> %{company.name}</div>','fr','Ce modÃ¨le dÃ©finit la notification qui est envoyÃ©e aux clients les prÃ©venant qu\'un lien d\'accÃ¨s a Ã©tÃ© envoyÃ© Ã  leur courriel. Le numÃ©ro de ticket et le courriel crÃ©ent le lien d\'accÃ¨s.','2015-12-01 09:25:04','2015-12-01 09:25:04');
/*!40000 ALTER TABLE `ost_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_department`
--

DROP TABLE IF EXISTS `ost_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_department` (
  `dept_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tpl_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sla_id` int(10) unsigned NOT NULL DEFAULT '0',
  `email_id` int(10) unsigned NOT NULL DEFAULT '0',
  `autoresp_email_id` int(10) unsigned NOT NULL DEFAULT '0',
  `manager_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dept_name` varchar(128) NOT NULL DEFAULT '',
  `dept_signature` text NOT NULL,
  `ispublic` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `group_membership` tinyint(1) NOT NULL DEFAULT '0',
  `ticket_auto_response` tinyint(1) NOT NULL DEFAULT '1',
  `message_auto_response` tinyint(1) NOT NULL DEFAULT '0',
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`dept_id`),
  UNIQUE KEY `dept_name` (`dept_name`),
  KEY `manager_id` (`manager_id`),
  KEY `autoresp_email_id` (`autoresp_email_id`),
  KEY `tpl_id` (`tpl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_department`
--

LOCK TABLES `ost_department` WRITE;
/*!40000 ALTER TABLE `ost_department` DISABLE KEYS */;
INSERT INTO `ost_department` VALUES (1,0,0,0,0,0,'Support','Service support',1,1,1,1,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,0,1,0,0,0,'Ventes','Vente et fidÃ©lisation du client',1,1,1,1,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(3,0,0,0,0,0,'Maintenance','Service maintenance',0,0,1,1,'2015-12-01 09:25:03','2015-12-01 09:25:03');
/*!40000 ALTER TABLE `ost_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_draft`
--

DROP TABLE IF EXISTS `ost_draft`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_draft` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) unsigned NOT NULL,
  `namespace` varchar(32) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `extra` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_draft`
--

LOCK TABLES `ost_draft` WRITE;
/*!40000 ALTER TABLE `ost_draft` DISABLE KEYS */;
INSERT INTO `ost_draft` VALUES (2,1,'page.1',' <h1>Bienvenue au centre de Support</h1> Afin de simplifier les demandes de support et de mieux vous servir, nous utilisons un systÃ¨me de gestion de ticket. A chaque demande de support est attribuÃ© un numÃ©ro de ticket unique vous permettant de suivre en ligne sa progression et les rÃ©ponses apportÃ©es. Pour votre information, nous fournissons des archives et un historique complet de toutes vos demandes de support. Une adresse e-mail valide est nÃ©cessaire pour soumettre un ticket. <br /> ',NULL,'2015-12-01 09:06:38','2015-12-01 09:06:48'),(3,3,'ticket.client.ildfo7s86b92','',NULL,'2015-12-22 12:08:25',NULL),(4,3,'ticket.client.sb7a1ksrlgs0','',NULL,'2015-12-22 12:32:36',NULL),(5,2,'tpl.note.alert.1',' <h3><strong>Bonjour %{recipient.name},</strong></h3> Un agent Ã  postÃ© une note interne sur le ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{note.poster} </td> </tr> <tr> <td> <strong>Titre</strong>: </td> <td> %{note.title} </td> </tr> </tbody></table> <br /> %{note.message} <br /><br /><hr /> Pour voir/rÃ©pondre au ticket, merci de vous <a href=\"%%7Bticket.staff_link%7D\">connecter</a> au support <br /><br /><em>L\'Ã©quipe du support</em> <br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2015-12-22 12:53:06','2015-12-22 12:53:16'),(6,2,'tpl.message.alert.1',' <h3><strong>Bonjour %{recipient},</strong></h3> Nouveau message ajoutÃ© au ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{ticket.name} &lt;%{ticket.email}&gt; </td> </tr> <tr> <td> <strong>DÃ©partement</strong>: </td> <td> %{ticket.dept.name} </td> </tr> </tbody></table> <br /> %{message} <br /><br /><hr /> <div>Pour visualiser ou rÃ©pondre au ticket, merci de vous <a href=\"%%7Bticket.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">connecter</span></a> au systÃ¨me de support par ticket</div> <em style=\"color:rgb(127, 127, 127)\">Votre SystÃ¨me de Support Client dÃ©vouÃ©</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"23\" style=\"width:126px\" /> ',NULL,'2015-12-22 12:53:12','2015-12-22 12:53:22'),(7,2,'ticket.response.2','Bonjour % {ticket.name.first}, <br /><br />Votre ticket #% {ticket.number} crÃ©Ã© le % {ticket.create_date} est dans le dÃ©partement nommÃ© \"% {ticket.dept.name}\".',NULL,'2015-12-22 12:54:16','2015-12-22 12:54:26'),(8,2,'ticket.note.2','',NULL,'2015-12-22 12:54:16','2015-12-22 12:54:26'),(9,2,'ticket.client.ih8a0soa0sh3','',NULL,'2015-12-22 13:05:15',NULL),(10,3,'ticket.client.7rj92cnvt003','',NULL,'2015-12-22 13:07:05',NULL),(11,3,'ticket.client.1b09tu8ltgi4','',NULL,'2015-12-22 13:08:14','2015-12-22 13:08:24'),(12,1,'ticket.response.1','',NULL,'2016-01-04 12:48:48','2016-01-04 12:48:58'),(13,1,'ticket.note.1','',NULL,'2016-01-04 12:48:48','2016-01-04 12:48:58'),(19,1,'ticket.response.3','',NULL,'2016-01-04 15:04:48','2016-01-04 15:04:57'),(20,1,'ticket.note.3','',NULL,'2016-01-04 15:04:48','2016-01-04 15:04:58'),(27,4,'ticket.client.5','',NULL,'2016-01-07 13:53:29','2016-01-08 08:38:12'),(29,4,'ticket.client.6','',NULL,'2016-01-07 13:53:55',NULL),(31,3,'ticket.note.5','',NULL,'2016-01-07 13:56:32','2016-01-07 13:58:21'),(32,3,'ticket.response.5','',NULL,'2016-01-07 13:57:42','2016-01-07 13:58:21'),(33,1,'ticket.response.6','',NULL,'2016-01-08 13:15:29',NULL),(34,1,'ticket.note.6','',NULL,'2016-01-08 13:15:29',NULL);
/*!40000 ALTER TABLE `ost_draft` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_email`
--

DROP TABLE IF EXISTS `ost_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_email` (
  `email_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `noautoresp` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `priority_id` tinyint(3) unsigned NOT NULL DEFAULT '2',
  `dept_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(11) unsigned NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `userid` varchar(255) NOT NULL,
  `userpass` varchar(255) CHARACTER SET ascii NOT NULL,
  `mail_active` tinyint(1) NOT NULL DEFAULT '0',
  `mail_host` varchar(255) NOT NULL,
  `mail_protocol` enum('POP','IMAP') NOT NULL DEFAULT 'POP',
  `mail_encryption` enum('NONE','SSL') NOT NULL,
  `mail_port` int(6) DEFAULT NULL,
  `mail_fetchfreq` tinyint(3) NOT NULL DEFAULT '5',
  `mail_fetchmax` tinyint(4) NOT NULL DEFAULT '30',
  `mail_archivefolder` varchar(255) DEFAULT NULL,
  `mail_delete` tinyint(1) NOT NULL DEFAULT '0',
  `mail_errors` tinyint(3) NOT NULL DEFAULT '0',
  `mail_lasterror` datetime DEFAULT NULL,
  `mail_lastfetch` datetime DEFAULT NULL,
  `smtp_active` tinyint(1) DEFAULT '0',
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` int(6) DEFAULT NULL,
  `smtp_secure` tinyint(1) NOT NULL DEFAULT '1',
  `smtp_auth` tinyint(1) NOT NULL DEFAULT '1',
  `smtp_spoofing` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`email_id`),
  UNIQUE KEY `email` (`email`),
  KEY `priority_id` (`priority_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_email`
--

LOCK TABLES `ost_email` WRITE;
/*!40000 ALTER TABLE `ost_email` DISABLE KEYS */;
INSERT INTO `ost_email` VALUES (1,0,2,1,0,'support@groupe-nox.com','Support','','',0,'','POP','NONE',NULL,5,30,NULL,0,0,NULL,NULL,0,'',NULL,1,1,0,NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(2,0,2,1,0,'alerts@groupe-nox.com','osTicket Alerts','','',0,'','POP','NONE',NULL,5,30,NULL,0,0,NULL,NULL,0,'',NULL,1,1,0,NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(3,0,2,1,0,'noreply@groupe-nox.com','','','',0,'','POP','NONE',NULL,5,30,NULL,0,0,NULL,NULL,0,'',NULL,1,1,0,NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04');
/*!40000 ALTER TABLE `ost_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_email_account`
--

DROP TABLE IF EXISTS `ost_email_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_email_account` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `protocol` varchar(64) NOT NULL DEFAULT '',
  `host` varchar(128) NOT NULL DEFAULT '',
  `port` int(11) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `options` varchar(512) DEFAULT NULL,
  `errors` int(11) unsigned DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `lastconnect` timestamp NULL DEFAULT NULL,
  `lasterror` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_email_account`
--

LOCK TABLES `ost_email_account` WRITE;
/*!40000 ALTER TABLE `ost_email_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_email_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_email_template`
--

DROP TABLE IF EXISTS `ost_email_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_email_template` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tpl_id` int(11) unsigned NOT NULL,
  `code_name` varchar(32) NOT NULL,
  `subject` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `template_lookup` (`tpl_id`,`code_name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_email_template`
--

LOCK TABLES `ost_email_template` WRITE;
/*!40000 ALTER TABLE `ost_email_template` DISABLE KEYS */;
INSERT INTO `ost_email_template` VALUES (1,1,'ticket.autoresp','Billet ouvert [#%{ticket.number}]',' <h3><strong>Cher %{recipient.name.first},</strong></h3> <p>Une demande d\'assistance a Ã©tÃ© crÃ©Ã©e et affectÃ©e au billet #%{ticket.number}. Un membre de lâ€™Ã©quipe se rapproche de vous dÃ¨s que possible. Vous pouvez <a href=\"%%7Brecipient.ticket_link%7D\"> suivre la progression de ce billet en ligne</a>. </p> <br /><div style=\"color:rgb(127, 127, 127)\"> Lâ€™Ã©quipe de %{company.name} , <br />%{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small\"> <em>Si vous dÃ©sirez ajouter des commentaires ou des informations supplÃ©mentaires au sujet de ce billet, rÃ©pondez simplement Ã  ce courriel ou <a href=\"%%7Brecipient.ticket_link%7D\"> <span style=\"color:rgb(84, 141, 212)\"> connectez-vous Ã  votre compte</span></a> pour visualiser les archives de vos demandes de support.</em> </div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(2,1,'ticket.autoreply','Re: %{ticket.subject} [#%{ticket.number}]',' <h3><strong>Cher %{recipient.name.first}</strong></h3> Une demande de support a Ã©tÃ© crÃ©Ã© et un billet a Ã©tÃ© assignÃ© <a href=\"%%7Brecipient.ticket_link%7D\">%{ticket.number}\"&gt;</a> avec la rÃ©ponse automatique suivante <br /><br /> Rubrique: <strong>%{ticket.topic.name}</strong> <br /> Sujet: <strong>%{ticket.subject}</strong> <br /><br /> %{response} <br /><br /><div style=\"color:rgb(127, 127, 127)\"> Votre Ã©quipe %{company.name}<br /> %{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small\"><em>Nous espÃ©rons que cette rÃ©ponse a suffisamment rÃ©pondu Ã  votre question. Si vous dÃ©sirez rajouter des commentaires ou donner de plus amples informations, merci de rÃ©pondre Ã  ce courriel ou <a href=\"%%7Brecipient.ticket_link%7D\"><span style=\"color:rgb(84, 141, 212)\">connectez-vous Ã  votre compte</span></a> pour visualiser les archives de vos demandes.</em></div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(3,1,'message.autoresp','Confirmation de Message',' <h3><strong>Cher %{recipient.name.first},</strong></h3> Votre rÃ©ponse Ã  la demande de service d\'assistance <a href=\"%%7Brecipient.ticket_link%7D\">#%{ticket.number}</a> a Ã©tÃ© prise en compte.<br /><br /><div style=\"color:rgb(127, 127, 127)\"> Votre Ã©quipe %{company.name}, <br />%{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small;text-align:center\"> <em>Vous pouvez visualiser, en ligne, l\'avancement de votre demande en cliquant <a href=\"%%7Brecipient.ticket_link%7D\">ici</a></em> </div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(4,1,'ticket.notice','%{ticket.subject} [#%{ticket.number}]',' <h3><strong>Cher %{recipient.name.first},</strong></h3> Notre service client a crÃ©Ã© un billet, <a href=\"%%7Brecipient.ticket_link%7D\"> #%{ticket.number}</a> Ã  votre nom, avec les dÃ©tails suivants : <br /><br />rubrique: <strong>%{ticket.topic.name}</strong> <br />sujet: <strong>%{ticket.subject}</strong> <br /><br />%{message} <br /><br />Si nÃ©cessaire, un membre de notre Ã©quipe se rapproche de vous dÃ¨s que possible. Vous pouvez Ã©galement <a href=\"%%7Brecipient.ticket_link%7D\"> suivre l\'avancement de ce billet en ligne</a>. <br /><br /><div style=\"color:rgb(127, 127, 127)\"> L\'equipe de %{company.name} , <br />%{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small\"> <em>si vous souhaitez fournir des commentaires ou des informations supplÃ©mentaires au sujet de ce ticket, rÃ©pondez simplement Ã  cet email ou <a href=\"%%7Brecipient.ticket_link%7D\"> <span style=\"color:rgb(84, 141, 212)\"> connectez-vous Ã  votre compte</span></a> pour visualiser les archives complÃ¨tes de vos demandes de support.</em> </div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(5,1,'ticket.overlimit','Limite du nombre de Billets ouverts atteinte',' <h3><strong>Cher %{ticket.name.first},</strong></h3> Vous avez atteint le nombre maximal de billets ouverts autorisÃ©s. Pour Ãªtre en mesure d\'ouvrir un autre billet, l\'un de vos billets en attente doit Ãªtre fermÃ©. Pour mettre Ã  jour ou ajouter des commentaires Ã  un billets, <a href=\"%%7Burl%7D/tickets.php?e=%%7Bticket.email%7D\"> connectez vous simplement Ã  notre support</a>. <br /><br />Merci, <br /> l\'Ã©quipe support',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(6,1,'ticket.reply','Re: %{ticket.subject}',' <h3><strong>Cher %{recipient.name},</strong></h3> %{response} <br /><br /><div style=\"color:rgb(127, 127, 127)\"> Lâ€™Ã©quipe %{company.name}, <br />%{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small;text-align:center\"> <em>Nous espÃ©rons que cette rÃ©ponse a suffisamment rÃ©pondu Ã  votre question. Si ce n\'est pas le cas, veuillez ne pas envoyer un autre courriel. Au contraire, rÃ©pondez Ã  ce courriel ou <a href=\"%%7Brecipient.ticket_link%7D\" style=\"color:rgb(84, 141, 212)\"> Connectez-vous Ã  votre compte</a> pour visualiser les archives complÃ¨tes de toutes vos demandes de support et les rÃ©ponses associÃ©es.</em> </div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(7,1,'ticket.activity.notice','Re: %{ticket.subject} [#%{ticket.number}]',' <h3><strong>Cher %{recipient.name.first},</strong></h3> <div> <em>%{poster.name}</em>vient juste d\'ajouter un message Ã  un billet auquel vous participez.</div> <br />%{message} <br /><br /><hr /> <div style=\"color:rgb(127, 127, 127);font-size:small;text-align:center\"> <em>Vous recevez ce courriel parce que vous collaborez avec ce billet <a href=\"%%7Brecipient.ticket_link%7D\" style=\"color:rgb(84, 141, 212)\">#%{ticket.number}</a>. Pour participer, rÃ©pondez simplement Ã  ce courriel ou <a href=\"%%7Brecipient.ticket_link%7D\" style=\"color:rgb(84, 141, 212)\"> cliquez ici</a> pour voir l\'historique complet de ce billet.</em> </div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(8,1,'ticket.alert','Alerte : Nouveau ticket',' <h2>Bonjour %{recipient},</h2> Nouveau ticket #%{ticket.number} crÃ©Ã© <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{ticket.name} &lt;%{ticket.email}&gt; </td> </tr> <tr> <td> <strong>DÃ©partement</strong>: </td> <td> %{ticket.dept.name} </td> </tr> </tbody></table> <br /> %{message} <br /><br /><hr /> <div>Pour voir ou rÃ©pondre au ticket merci de vous <a href=\"%%7Bticket.staff_link%7D\">connecter</a>dans le support</div> <em style=\"font-size:small\">Amicalement le Support client</em> <br /><a href=\"http://osticket.com/\"><img width=\"126\" height=\"19\" style=\"width:126px\" alt=\"Powered By osTicket\" src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" /></a> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(9,1,'message.alert','Alerte de Nouveau Message',' <h3><strong>Bonjour %{recipient},</strong></h3> Nouveau message ajoutÃ© au ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{ticket.name} &lt;%{ticket.email}&gt; </td> </tr> <tr> <td> <strong>DÃ©partement</strong>: </td> <td> %{ticket.dept.name} </td> </tr> </tbody></table> <br /> %{message} <br /><br /><hr /> <div>Pour visualiser ou rÃ©pondre au ticket, merci de vous <a href=\"%%7Bticket.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">connecter</span></a> au systÃ¨me de support par ticket</div> <em style=\"color:rgb(127,127,127);font-size:small\">Votre SystÃ¨me de Support Client dÃ©vouÃ©</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(10,1,'note.alert','Alerte d\'une nouvelle activitÃ© interne',' <h3><strong>Bonjour %{recipient.name},</strong></h3> Un agent Ã  postÃ© une note interne sur le ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{note.poster} </td> </tr> <tr> <td> <strong>Titre</strong>: </td> <td> %{note.title} </td> </tr> </tbody></table> <br /> %{note.message} <br /><br /><hr /> Pour voir/rÃ©pondre au ticket, merci de vous <a href=\"%%7Bticket.staff_link%7D\">connecter</a> au support <br /><br /><em style=\"font-size:small\">L\'Ã©quipe du support</em> <br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(11,1,'assigned.alert','Un ticket vous a Ã©tÃ© assignÃ©',' <h3><strong>Bonjour %{assignee.name.first},</strong></h3> Le ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> vous a Ã©tÃ© assignÃ© par %{assigner.name.short} <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{ticket.name} &lt;%{ticket.email}&gt; </td> </tr> <tr> <td> <strong>Sujet</strong>: </td> <td> %{ticket.subject} </td> </tr> </tbody></table> <br /> %{comments} <br /><br /><hr /> <div>Pour voir/rÃ©pondre au ticket, merci de vous <a href=\"%%7Bticket.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">identifier </span></a> dans le systÃ¨me de support</div> <em style=\"font-size:small\">Votre systÃ¨me de support client</em> <br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(12,1,'transfer.alert','Transfert de ticket #% {ticket.number} - % {ticket.dept.name}',' <h3>Bonjour %{recipient.name},</h3> Le billet <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> a Ã©tÃ© transfÃ©rÃ© au service %{ticket.dept.name} par <strong>%{staff.name.short}</strong> <br /><br /><blockquote> %{comments} </blockquote> <hr /> <div>Pour voir ou rÃ©pondre au billet, merci de vous <a href=\"%%7Bticket.staff_link%7D\">connecter</a> au le support. </div> <em style=\"font-size:small\">Cordialement, le service d\'assistance</em> <br /><a href=\"http://osticket.com/\"><img width=\"126\" height=\"19\" alt=\"Powered By osTicket\" style=\"width:126px\" src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" /></a> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(13,1,'ticket.overdue','Alerte : Ticket obsolÃ¨tes',' <h3> <strong>Bonjour %{recipient.name}</strong>,</h3> Un billet, <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> est trÃ¨s en retard. <br /><br />Nous devrions tous travailler dur pour garantir que tous les billets soient traitÃ© dans les dÃ©lais. <br /><br />SignÃ©, <br />%{ticket.dept.manager.name} <hr /> <div>Pour visualiser ou rÃ©agir au billet, <a href=\"%%7Bticket.staff_link%7D\"> <span style=\"color:rgb(84, 141, 212)\"> Connectez-vous</span></a> au systÃ¨me de support. Vous recevez cet avis parce que le billet vous est personnellement affectÃ©, Ã  une Ã©quipe ou Ã  un service dont vous Ãªtes membre.</div> <em style=\"font-size:small\">Cordialement, <span style=\"font-size:smaller\">(mÃªme si notre patience a une limite)</span> le support client</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" height=\"19\" alt=\"Powered by osTicket\" width=\"126\" style=\"width:126px\" /> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04');
/*!40000 ALTER TABLE `ost_email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_email_template_group`
--

DROP TABLE IF EXISTS `ost_email_template_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_email_template_group` (
  `tpl_id` int(11) NOT NULL AUTO_INCREMENT,
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `lang` varchar(16) NOT NULL DEFAULT 'en_US',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL,
  PRIMARY KEY (`tpl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_email_template_group`
--

LOCK TABLES `ost_email_template_group` WRITE;
/*!40000 ALTER TABLE `ost_email_template_group` DISABLE KEYS */;
INSERT INTO `ost_email_template_group` VALUES (1,1,'ModÃ¨le osTicket par dÃ©faut (HTML','fr','ModÃ¨les osTicket par dÃ©faut','2015-12-01 09:25:04','2015-12-01 08:25:04');
/*!40000 ALTER TABLE `ost_email_template_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_faq`
--

DROP TABLE IF EXISTS `ost_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_faq` (
  `faq_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ispublished` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `keywords` tinytext,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`faq_id`),
  UNIQUE KEY `question` (`question`),
  KEY `category_id` (`category_id`),
  KEY `ispublished` (`ispublished`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_faq`
--

LOCK TABLES `ost_faq` WRITE;
/*!40000 ALTER TABLE `ost_faq` DISABLE KEYS */;
INSERT INTO `ost_faq` VALUES (1,1,1,'Test question','testestestest',NULL,'','2015-12-01 10:55:29','2015-12-01 10:55:37');
/*!40000 ALTER TABLE `ost_faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_faq_category`
--

DROP TABLE IF EXISTS `ost_faq_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_faq_category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ispublic` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name` varchar(125) DEFAULT NULL,
  `description` text NOT NULL,
  `notes` tinytext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `ispublic` (`ispublic`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_faq_category`
--

LOCK TABLES `ost_faq_category` WRITE;
/*!40000 ALTER TABLE `ost_faq_category` DISABLE KEYS */;
INSERT INTO `ost_faq_category` VALUES (1,1,'Aide','Divers informations pour vous aider.','','2015-12-01 10:54:05','2015-12-01 10:54:35');
/*!40000 ALTER TABLE `ost_faq_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_faq_topic`
--

DROP TABLE IF EXISTS `ost_faq_topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_faq_topic` (
  `faq_id` int(10) unsigned NOT NULL,
  `topic_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`faq_id`,`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_faq_topic`
--

LOCK TABLES `ost_faq_topic` WRITE;
/*!40000 ALTER TABLE `ost_faq_topic` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_faq_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_file`
--

DROP TABLE IF EXISTS `ost_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ft` char(1) NOT NULL DEFAULT 'T',
  `bk` char(1) NOT NULL DEFAULT 'D',
  `type` varchar(255) CHARACTER SET ascii NOT NULL DEFAULT '',
  `size` bigint(20) unsigned NOT NULL DEFAULT '0',
  `key` varchar(86) CHARACTER SET ascii NOT NULL,
  `signature` varchar(86) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `attrs` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ft` (`ft`),
  KEY `key` (`key`),
  KEY `signature` (`signature`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_file`
--

LOCK TABLES `ost_file` WRITE;
/*!40000 ALTER TABLE `ost_file` DISABLE KEYS */;
INSERT INTO `ost_file` VALUES (1,'T','D','image/png',9452,'b56944cb4722cc5cda9d1e23a3ea7fbc','gjMyblHhAxCQvzLfPBW3EjMUY1AmQQmz','powered-by-osticket.png',NULL,'2015-12-01 09:25:03'),(2,'T','D','text/plain',28,'1mnWLxDfuZKawQ-HpQAqHylS40pg4oRE','xDfuZKawQ-HpQAqHH8uLA0wpOKjVbhEN','osTicket.txt',NULL,'2015-12-01 09:25:04'),(4,'L','D','image/png',111115,'5QoMfQGdbiVvgB0qQ0jxJo_MKkAjqCbo','QGdbiVvgB0qQ0jxJ_A5gK1lyRJJP8tNh','bandeauTicket.png',NULL,'2015-12-01 10:24:57'),(5,'T','D','application/pdf',30638,'MuQ2sjURFoJSODbEcnH6uS87e6rDf00k','jURFoJSODbEcnH6uaxcSmQu7CuRYxD-U','Organigramme_NOX INGENIERIE ET ENERGIE_EST_150316.pdf',NULL,'2016-01-04 16:01:12');
/*!40000 ALTER TABLE `ost_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_file_chunk`
--

DROP TABLE IF EXISTS `ost_file_chunk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_file_chunk` (
  `file_id` int(11) NOT NULL,
  `chunk_id` int(11) NOT NULL,
  `filedata` longblob NOT NULL,
  PRIMARY KEY (`file_id`,`chunk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_file_chunk`
--

LOCK TABLES `ost_file_chunk` WRITE;
/*!40000 ALTER TABLE `ost_file_chunk` DISABLE KEYS */;
INSERT INTO `ost_file_chunk` VALUES (1,0,'‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0Ú\0\0\0(\0\0\0˜GäÉ\0\0\nCiCCPICC profile\0\0xÚSwX“÷>ß÷eVBØğ±—l\0\"#¬ÈY¢’\0a„@Å…ˆ\nVœHUÄ‚Õ\nHˆâ (¸gAŠˆZ‹U\\8îÜ§µ}zïííû×û¼çœçüÎyÏ€&‘æ¢j\09R…<:ØOHÄÉ½€Hà æËÂgÅ\0\0ğyx~t°?ü¯o\0\0pÕ.$ÇáÿƒºP&W\0 ‘\0à\"çR\0È.TÈ\0È\0°S³d\n\0”\0\0ly|B\"\0ª\r\0ìôI>\0Ø©“Ü\0Ø¢©\0\0™(G$@»\0`UR,ÀÂ\0 ¬@\".À®€Y¶2G€½\0vX@`\0€™B,Ì\0 8\0CÍ L 0Ò¿à©_p…¸H\0ÀË•Í—KÒ3¸•Ğ\Zwòğàâ!âÂl±Ba)f	ä\"œ—›#HçLÎ\0\0\ZùÑÁş8?çæäáæfçlïôÅ¢şkğo\">!ñßş¼Œ\0NÏïÚ_ååÖpÇ°u¿k©[\0ÚV\0hßù]3Û	 Z\nĞzù‹y8ü@¡PÈ<\ní%b¡½0ã‹>ÿ3áoà‹~öü@şÛzğ\0qš@™­À£ƒıqanv®RçËB1n÷ç#şÇ…ı)Ñâ4±\\,ŠñX‰¸P\"MÇy¹R‘D!É•âé2ñ–ı	“w\r\0¬†OÀN¶µËlÀ~î‹XÒv\0@~ó-Œ\Z‘\0g42y÷\0\0“¿ù@+\0Í—¤ã\0\0¼è\\¨”LÆ\0\0D *°AÁ¬ÀœÁ¼ÀaD@$À<Bä€\n¡–ATÀ:Øµ°\Z šá´Á18\rçà\\ëp`Â¼†	AÈa!:ˆbØ\"Î™\"aH4’€¤ éˆQ\"ÅÈr¤©Bj‘]H#ò-r9\\@úÛÈ 2ŠüŠ¼G1”²QÔu@¹¨\ZŠÆ sÑt4]€–¢kÑ\Z´=€¶¢§ÑKèut\0}Šc€Ñ1fŒÙa\\Œ‡E`‰X\Z&ÇcåX5V5cX7vÀaï$‹€ì^„Âl‚GXLXC¨%ì#´ºW	ƒ„1Â\'\"“¨O´%zùÄxb:±XF¬&î!!%^\'_“H$É’äN\n!%2IIkHÛH-¤S¤>ÒiœL&ëmÉŞä²€¬ —‘·O’ûÉÃä·:ÅˆâL	¢$R¤”J5e?å¥Ÿ2B™ ªQÍ©Ôªˆ:ŸZIm vP/S‡©4uš%Í›CË¤-£ÕĞšigi÷h/étº	İƒE—Ğ—Òkèéçéƒôw\r†\rƒÇHb(k{§·/™L¦Ó—™ÈT0×2™g˜˜oUX*ö*|‘Ê•:•V•~•çªTUsU?ÕyªT«U«^V}¦FU³Pã©	Ô«Õ©U»©6®ÎRwRPÏQ_£¾_ı‚úc\r²†…F †H£Tc·Æ!Æ2eñXBÖrVë,k˜Mb[²ùìLvûv/{LSCsªf¬f‘fæqÍÆ±àğ9ÙœJÎ!Î\rÎ{--?-±Öj­f­~­7ÚzÚ¾ÚbírííëÚïup@,õ:m:÷u	º6ºQº…ºÛuÏê>Ócëyé	õÊõéİÑGõmô£õêïÖïÑ7046l18cğÌcèk˜i¸Ñğ„á¨Ëhº‘Äh£ÑI£\'¸&î‡gã5x>f¬ob¬4ŞeÜk<abi2Û¤Ä¤Åä¾)Í”kšfºÑ´ÓtÌÌÈ,Ü¬Ø¬Éì9Õœka¾Ù¼Ûü…¥EœÅJ‹6‹Ç–Ú–|Ë–M–÷¬˜V>VyVõV×¬IÖ\\ë,ëmÖWlPW››:›Ë¶¨­›­Äv›mßâ)Ò)õSnÚ1ìüì\nìšìí9öaö%ömöÏÌÖ;t;|rtuÌvlp¼ë¤á4Ã©Ä©ÃéWgg¡só5¦KË—v—Sm§Š§nŸzË•å\ZîºÒµÓõ£›»›Ü­ÙmÔİÌ=Å}«ûM.›É]Ã=ïAôğ÷XâqÌã§›§Âóç/^v^Y^û½O³œ&Ö0mÈÛÄ[à½Ë{`:>=eúÎé>Æ>ŸzŸ‡¾¦¾\"ß=¾#~Ö~™~üû;úËıø¿áyòñN`Áå½\Z³k™¥5»/>B	\rYr“oÀòùc3Üg,šÑÊZú0Ì&LÖ†Ïß~o¦ùLéÌ¶ˆàGlˆ¸i™ù})*2ª.êQ´Stqt÷,Ö¬äYûg½ñ©Œ¹;Ûj¶rvg¬jlRlcì›¸€¸ª¸x‡øEñ—t$	í‰äÄØÄ=‰ãsçlš3œäšT–tc®åÜ¢¹æéÎËw<Y5Y|8…˜—²?åƒ BP/Oå§nMò„›…OE¾¢¢Q±·¸J<’æV•ö8İ;}Cúh†OFuÆ3	OR+y‘’¹#óMVDÖŞ¬ÏÙqÙ-9”œ”œ£R\ri–´+×0·(·Of++“\räyæmÊ“‡Ê÷ä#ùsóÛl…LÑ£´R®PL/¨+x[[x¸H½HZÔ3ßfşêù#‚|½°P¸°³Ø¸xYñà\"¿E»#‹Sw.1]RºdxiğÒ}ËhË²–ıPâXRUòjyÜòRƒÒ¥¥C+‚W4•©”ÉËn®ôZ¹ca•dUïj—Õ[V*•_¬p¬¨®ø°F¸æâWN_Õ|õymÚÚŞJ·ÊíëHë¤ën¬÷Y¿¯J½jAÕĞ†ğ\r­ñå_mJŞt¡zjõÍ´ÍÊÍ5a5í[Ì¶¬Ûò¡6£öz]ËVı­«·¾Ù&ÚÖ¿İw{óƒ;Şï”ì¼µ+xWk½E}õnÒî‚İ\Zbº¿æ~İ¸GwOÅ{¥{öEïëjtolÜ¯¿¿²	mR6H:på›€oÚ›íšwµpZ*ÂAåÁ\'ß¦|{ãPè¡ÎÃÜÃÍß™·õëHy+Ò:¿u¬-£m =¡½ïèŒ£^G¾·ÿ~ï1ãcuÇ5W (=ñùä‚“ã§d§N?=Ô™Üy÷Lü™k]Q]½gCÏ?tîL·_÷ÉóŞç]ğ¼pô\"÷bÛ%·K­=®=G~pıáH¯[oëe÷ËíW<®tôMë;ÑïÓújÀÕs×ø×.]Ÿy½ïÆì·n&İ¸%ºõøvöíw\nîLÜ]zx¯ü¾Úıêúê´ş±eÀmàø`À`ÏÃYï	‡ş”ÿÓ‡áÒGÌGÕ#F#\r\Z½òdÎ“á§²§ÏÊ~Vÿyës«çßıâûKÏXüØğù‹Ï¿®y©órï«©¯:Ç#Ç¼Îy=ñ¦ü­ÎÛ}ï¸ïºßÇ½™(ü@şPóÑúcÇ§ĞO÷>ç|şü/÷„óû€9%\0\0\0tEXtSoftware\0Adobe ImageReadyqÉe<\0\0(iTXtXML:com.adobe.xmp\0\0\0\0\0<?xpacket begin=\"ï»¿\" id=\"W5M0MpCehiHzreSzNTczkc9d\"?> <x:xmpmeta xmlns:x=\"adobe:ns:meta/\" x:xmptk=\"Adobe XMP Core 5.6-c014 79.156797, 2014/08/20-09:53:02        \"> <rdf:RDF xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\"> <rdf:Description rdf:about=\"\" xmlns:xmp=\"http://ns.adobe.com/xap/1.0/\" xmlns:xmpMM=\"http://ns.adobe.com/xap/1.0/mm/\" xmlns:stRef=\"http://ns.adobe.com/xap/1.0/sType/ResourceRef#\" xmp:CreatorTool=\"Adobe Photoshop CC 2014 (Macintosh)\" xmpMM:InstanceID=\"xmp.iid:6E2C95DEA67311E4BDCDDF91FAF94DA5\" xmpMM:DocumentID=\"xmp.did:6E2C95DFA67311E4BDCDDF91FAF94DA5\"> <xmpMM:DerivedFrom stRef:instanceID=\"xmp.iid:CFA74E4FA67111E4BDCDDF91FAF94DA5\" stRef:documentID=\"xmp.did:CFA74E50A67111E4BDCDDF91FAF94DA5\"/> </rdf:Description> </rdf:RDF> </x:xmpmeta> <?xpacket end=\"r\"?>‹şöÊ\0\0IDATxÚì]	œSÕÕ?/{2Édf€aq]67ĞÏ­(*¨-\nöó³¶.õ+ÖÖ…º nµJÁ­öS‹R´Õ:VDT¤,eÑ2¨l‚ ¬‚ì‹3ÌÂL’—÷İ›üosæN’ÉPqÌùı$“—÷î»÷üÏùŸsï»1†NY96¤ÚtÒØîïS±/QÄı]k~K¡“…îz›Ğí>ƒ%4ß¤Ò5ºú­<²Ù,²ÍclmYóÎÊ’„\'ôÇB¯hô·£BóLZ¸ŞM?›¤°\0]s™GÖ>¾×âZ(4W¨]h\r\"Ò¾&F4™]ş¶?JKD$úF>Yd-}QŠZY eå»)­„*t€ĞÓ„¶êà$»‰\r	=(t•ĞéBg	=Á¹íø_‚´¢Ñ”Q\0mÆVí+³SvaŠD›WÇgöıB¯ú¿B»eøŞB¯ºLèH¡Ò›#tó»BÇ	ımFW’\0;tÈ _Ùì@–ÍÑš¿x„Ş.t!¿[Î!#à\\¡÷ã|ÉäWˆ’:÷Ø\rG³ I³·9é‰Ò*Ê6ËÈ­ùJk¡S…şAèqGÀN¼\09¤›EBïM¹~-4?í™Õ~ã I‹}Ô&·yåeYêØüå¡o\níu„Ï{.r»½Bk¸Öiv?Š—úLG·´Ñ”µjÈ-+ß‘Qæ•£\02%>ä|™Êï(^Í›’ß\nêXèÆr³æTÒÏRÇæ-’*öÿ–®-ãÑR¡Ë…V±¿ËBIË:GÊTÌ#şÉ5iş\ZE\"Fó”lD;æ\\_äp¾ısjÊdñ‘“õB\"t‡ĞB)ô2äwßÄïÏŠ»÷`”æ­ôĞ¤•^š¶ÑMnA!æ<¬YË>†¼¥’í§ö\n«ktõMæJw%ù»œ<.ÿİÂÃB¿U\\GñBI?ç¦“]\0ÌoÆĞôå^ıô¥ºeF&.÷‘×a‘Ça5ï±Íš÷±#Ò£o>¤=L^«Ñş]FÚßJ…N\0ƒG¹ùã…¾V‡\Zú¢!q#!Å–ÛéÀ6=Xê§9›\\T2Èï²¨{«™cÑæ³,Ğ)zak³l´ú@1õÏß{¡„^£ıMF”¡_bÕæ(7ı9¡£­‘+\'J«Ö{hñ—nê¡[\\ôhiµóGc41\'\'±Mëû1¶³Ï>;káÇL›¿ŒŞÜİ‹ú·Ø$Ü|Æ~ğ,Š—İ•”xß ¶lÚâ(4W.Ó\ZAjÕˆÂrâãsrÉWµÉMĞW”rİ\"zµh«>²í;™§Y”çªŠE,0ŞŒ\\¾\\1ïbïº¯å\"á\'„¾‘ÁxËüêuĞLYÌÈ£x9ß)´ù^[\0›PôXVç‚NXá¥Í»T(\"Y¶‰u‹ßWevŠİˆRUØC55AòØC™ĞGY6?‘½ÿ@è«Ú1k„VS|‚9ÈIîXÊè£Ä*rDÊ\"€öL¡ƒ„Î=*@4é«=NÊwZj‰9¾%pÉöÊ%aíñ~ĞyBe–•˜øíµ´¢¢\r•ììKÃ;HTëoè+ƒ)¾QÉ_Å¸t¡Ôë‰cIìUÈ±B\"”VÚªÈVg>LÊvW¦Sâ1›|òX»¶îpÑ°Éy´í Zx£rR­Å\'·# °)ıÅWšHª[ ÔöÊº±	İ(#ò=B2ŠûC¡Û²@ËJL,H$Ëİµ(ñŸN)2š©°\'¿›ä˜®\ZµÔ/*Ïğ\'rZŸKDÜûV((ßÕg	Œ²Å›{€ÆP“]aYÇ ¹jßŠ=B³\n\"4~n€VnwR÷¶‘XFñUÿrQsÎJdäÜ\Zz¾ô7\"ày¡7e©cVŠ¸ªéı½İèäàê%”BşT`Ë…SòOĞ;]NNy±XŞz7â¶s´Ñ}óôä‡~j/¨ß¬\rnª´·ÒFÃz×ĞÈ*ˆÄf–Û‰æ´Œ5)×ÜEè¡EK|ôÖj·4Èù4\rI.òÂ–”x¶ÍÛÄ.ŒjÀ6ˆ¨GJG_÷†Ó˜‘Zz1`NxãPŠã<8¦^şÈ$6“vÔhUYõ\nìG¶äójrŞ¬/^ïD¥‹¤aİSš£ÛšImÂ·Lœ•\Zû^ fZË†A36ºck å{,\Z9 RÜ±@WµQ% °Zädó·×ãWmö†o–\'rKŠÇJöŠöU0Ã7YŞ§D~&*¯ØòÑÿ•‡1~ÿé…&=PH:	ïÇeÖ°È~¹|Ôd4ÅŸ:æÒ‡âë\nÛã˜{ÔÅ£TÇ¹+h²,ó‹ˆÖ9wwªÍzäüX\0¯¿ıÒå-‡K€ÌN/RÛğÍÏÌÌ\rİ3-H…h+Ÿapymv+ÒÊgÉ§¥7·òE#ó¶:éê’*¹ò€ÛêZ;xù×ÎwÉ*‰¯Kq¨8WàQ€Ì€È¶<ğ{X&Ò£”xPTRÏ;PÄ‘ ü#œ—›š²%Â·\'íÈH/¼d–¢&Añy©ø?™• ²åLjÈ‡6á=\"²9¡t9\Z_¨»2I$Ûõ\0éKí,Ú-\"Ùh²ùg.İşv°°8ß¼Éa‹=¨Ù]MV*D-z²c0:òz7yßÉ£GÏ¯(/y=¿|Ò§^[¹Óº¶caäq>ÑºQj‹ĞÇ)¾bD—¯ÙkyƒŸJ@ãıÖc˜å¤K–·¡ £leh\rK„ÑÅ)¨ãAxnıvF8\r“J¶Bww*%Gl^Í–Ì‹*ùDûLVÜş†ª —)QÓxÀæ1×NTñ7oæÑ.ß|Îe§S¢Vì>^„ÑÈüèB/‘\ZÒ½ÇÍqSEŞöÅ>;-Şî41út¯ö¡¦iDÅç“8U”}\'Ñ\"ôOBÏz–#ñœÍÅŞw¢ø–v8;¹„ìIºF>È:Ô¹³ã°€âO4Dåå³r—‚ÖáŒÆSİmò.¦øF!%¦8äŠ›I¬‚y\"úº“†§‹á„eÛ*HàNEÃf£t5ÅçK#Á®L’›BâçÅEÁ3ãÙ6P• Ëı$ŠV72öã;ÜèP\"1úÃ“È¹ ùàòÄ¡Ú¹ƒÔ\\y¨Õ ä(ªrÿ\"ªW²>•ƒªİzúSñ}‹ê|?AŸÈ6N£øŠyÎ‹p9H«’\0¢­ŠÄ6Â1‹6Ê§PÔZ}iÍ\"§²R7Å%’ŞOŞèÄûíÑ‹kCU!j/@61à²z	Ê\'ó‰[„~¥åw×£ú7V\0q_®+ö}ê˜o^e4\"6¶‰½Â¨ôs„ş¶ô!Å×\\râÊkJN­Tò—$@“Q÷Nª¿®SÉù ¥éæÌ$yZ(_õ:ë{éÀäW,”¤\r·/ƒ¹u¹\ZsÖx†çÑ°qhèØæ‚ç«Ğ.ŸŞ}	Š‹ìg(¾b[\ZÖsğL7ãüRF¡ä+¯%¡(ÁßGÃ8\"ğ4¤rê)Ú5VÂ‚6IÙFõ\r:ï XR>9±ÚQ;G)Ú´ïï¦øÀ^–ÓLÈ°RÆ#‹ÌÓ.cà/Â õÀ5/dÔIzf9¹,ç›æ}Og+>{8¾²¾xqï*êîÀk¹‚^ßZ`5¢Êr¹uÀÜuúºÊ ¾è\"’IÍE[uT‹\\µ\nÑqŒÈßfåº-éÏµâÍº/I4%8´{0Æ7\"W+k «¼T…ŒGa_édC:¶ö¨2ÙÆá¸ßv\0İYìóµÈ-»£ß{À¶ú0ÇŸNì6VıñÂàû!1ıšyˆš\0@LF™yè@:ö:xæ:¬/+EŸÃ®u.^f=0	²WÈV\"b…¦KĞ5¬3G í„ht¸#À+Áõ>?÷àÇ½=‚ö˜0}0Ît É¼×´u\rşVˆ¶Ê9¬)ŒftÑ¼~;¼WŸ9XtÈtÆŠ#)\n6Exı9r¢óá8¸¼ë_K€Ì¥gè‘—æDûŠœì¬š¿+	È¸¼\nìáZ­ôşušï-@ßGğİLÊò©¢İM\ZÈÂ`Òñ^Nñ\r‚^F¥È«	ÇİÈŞÏ` #¸ÎbLåFDÚ~”xÖ@7Ÿ„Ó:ÉÛş!lò1Àl\Z—•\'ş9@p)‹báPbNæUP®óq¬â¬÷ñşt€è8’\"–\'ª\r\\&!Âª²·ã&OGG×‚bŞnf`]Ê0çèN=m?‘ÏkõÂëÛXïF$?µ±2übP\n±ÁØ•p¶0˜ë{õEAoh¿Œ|®êdùYë·E,ÇqjQe˜0×íT`ÒËK|4bf.äDÉf‹õ‡ŒÚo³èNÔDøÃªÒı=l,uÙ1¹\\£¤•vßU‹‹¼îP°šwÀB®G_û)1§\0»NŸo©°¡–¥CØçÄÆç&ÒûØç—Í<Pq~ÿ6ª®²cmZ˜Àæb>Æ	”\\£U†ñ£ÿ‚\' øyø>!Ü¶F¾äG´,ÍGä²ÊMOÉf ÊuQçìÀÕàınxª©ˆŠªHğrL<Ü4Š?f/å qR¦ƒêJÊ¿É¤%e\"£‰È2s!Ö§Œ!¨¯\'ó~Ëëp\r#Jeå¹+R=uËúm£^J¾‚U’|¨²ÊFïop“C¼öú(h_oI3™Ì]puB4û+®q.¢ÖC—¶I[ÙIM›gTm(‹üFò‡Fœg/\"êX–·®Aÿğ]™¯\03#°¨)IÎ5ã­rØ¬ÀcÓ¨}ÊªãGÚû…@©@Q¾|\0ºÂE(ˆN‘åw”ØÌ¥şuDÎK\0–şhÔ*äYªC¥.ƒ1ÛàUrX4<y¢ÅÌ;²Èù_B¿@‡D1p~mxŞVËŞ¯è»g´5Zeò+xĞãàH¶Ì\'ÃP\rDé¾¬Ÿë€lw­ŸúöPÍÌdùxì>]h÷ü­B‹°›ÕG¼¾ÔG¯­ğR·Âˆ|ÈÒ`ıœéQìêvğ¢ÛÓ ÀB¿†C,Eî¶ˆROøg*µ÷/6òû9 pª8!Ä­Œæì”¯ q\"BZ45xH2Å¢-G: ™I83%©¾Õ$ñ‚|™‹aYÛ\0<Ü´¤Z½ÈW³›Ø0ì&ªÑæÏaTnÍàU¹ØÃ¢ÓZtš¦epª\ZØÔi#E¿™ŒF¨6Îıé*Ûí\\çóo¾­&H\'	=Ğc6¹m\"Ä¶6¨WéÆÜJVQSq*ê²¨b§“¦,óQ› ©d¶±{Î4Òğ{r²±Êu!Æ²è×F¡n£¦-èµ’Ì–7a®íL­¸‘ƒê7i@ã{PLé–®%$Â(Ğô\'qû°c¶€Ãw`”`@ùˆ5	´eöÀ°Ôã\Z—²Èò9ÀfÕ£¡š—V%õ®¯¢“M(–Ã«úqÎağúês¾ß÷Q€è¨w^Ë“wÒ\nRZ0Ç²‹EÍOàtn`Å‡Åè—¸eY=Şm.ù÷’\'2_ªıCN`Æ®Š(!–kÇûMĞÄû4u›º%¼4)±H¦[øĞ/ª;õı}\\Œş8›*äXüŒÔ=Mwh\r\Zt\nÑ\\\'\"Ü\nÆ„ìZ~M3µ-9Ù8ÚR8‰¤g†_@uWNÀæ4º²ê“šÏ¹›5b5ËóT^RcSVh§bà>b\0#äØ5:¡,ûwÌcT§¨Pma×ù¢ú¼\'¦ şE	e0ÃXÔBI‹Fx\\y¾•ÀUìõ\"­8¡rãõ[ü„EŞr:!5ˆdIA–Çhí\'Z4Wt°¶¶¯gÎ4é†²övä<ÇQı]ˆ-ôÿ\\âØA(5`m,¯	çšŒÂ‰’V¨\ZúXd¯Ñ*¦çPbõ<¦B%+û#c.V* éíP”˜,VÕ™y(:Œ\0°F#\"|Fu7†™Áªl+\0(¿–´ïÅ€ôbóŸ²‚Ì`xÚ—PRı7Õ*)ù.^U(è\\ÎœŠ÷;†¶è„«PĞ™\0ƒy—\ZÀ™êÇñèü\0ˆjËì8™§ı\ZÇĞó“ŞİyÙd…Qæe©Ÿ®Zó	ÆEOÀ·ıÛhÂu)ˆĞĞîµ´h»3¶!›[SUÄ\'¨á_Œˆqü¢õÇ(.ı”RO¯BÑbòºW›Ñ¶hï¯Ô‹G\rÈN«ÖÀ)Îîé|V¦FühÿÁ&D]îôêE4 ky6hwâõ =ßàÄ?D©½\'›³¹•uüb-áTsû˜G•²”y­yˆ¬`8—¢ßÇ<…\na+VÂ\rh÷2	óxš«1×Ñ–MA¼y—)lŞk$¸ü³¬H‘Ãy™7üıt\r¢•jËHô/6-ÓJÀu&<}\"¢QÄ•n@{³jğK\Zµ.`-N±BÚ†éšÓ«hµM/^•‚\\ß€1vSÃ/GJP”!½6#¢½£9¶:Cbı±öğ€æDÄRİ_Ì9ø†C\r‹şSU]SE4;¼òĞBªo¯\"¢(ùø÷Px)\'ŒåÌµpÊ²Ô	ŞÓœ{ˆPï4	şå0,@:ÑL•\\jÕ_ğùgù08‚0îc‹\"!Üë,x77®ñ\Z\nğdû\"~hàƒç“çºùŞ~P•9I¸ı,FSçÔ;km@F2?\n%û5z|:ú¸5hĞDíÛCØtGÂTET“å}-şËqzç{\n¥ûiIî³Q¿3ş#æÌdtş-Æ!ÙDWDÒ#w#e&°š\ZñÀQNDûw•€İ”jíq²¢Ô{p¤£k›§£+Ü{gZÇ«rĞ¥l«Á\"ülm$lÛp$I?€1»`<ÉøË:$“êìBiæb–B“c]šÎİ€k8q°vC”d’W“èxUŞ\'¹y¿À¡¬ ğQ’é.ˆ=o…3µV…˜ %–ş|Fõ×=ŠVÊ+­$‹E\'^9Oõ7KíÏLõƒè½²Z…äÈ«³IÎ4xø‡a°ÏÂA•á>ÎÄgĞ·³³¾\0`_c:\ZÁ˜\rF´(Dä~@3Ñ·3)±¾S:¸ß _?ğµ€“\\¨M)è´î8Ö~x/ÆïÁÆF!ÕPnép/Ø½åØ%h[pİ‹Xes,Ú¾Ä‘¢\nieLÓ˜ÉD÷JKKrÖu”A˜)JÀw\"öd´±şò¥x^¶ÌâWÈû\npÓÉæ$¹Æ\0D÷(¢-‹]]¢Ó:†hk¹çi„üd3ş¿ªñ+ğî;ØßUnş4\nKÉ¶P(PÇhıë×\n;^»Æ²”,]|„X¾Ë«±Tw	VÆŞv\0¼uª¿à¾bS(ÁÕÙ–Z?=g`x’ÚÑ¡5ÀMY9\Z’ƒ\\Sl3¨e:Y	jæBn©v¡J5—sûzÒSĞÆ.\'ÔÒ%›jhÌœ€\0Z=_ğ\Z¢ó¥˜öh`oe[šâºË)ñ#ñ2§i°ìŸMÉ7×™bV÷õ«„N@tòSı_]ŠëıÿwfHuÍ™He¦ãmĞéÿÛHk ZµDÛ½øî\'(˜ƒŠ¹NT»ç|_;ç\"´ëVJLÉ”i¾ñòË/÷BhŒ ‘³¸8â\"©Æ/á!wÂûšìÀëÊF5åüvT!+QÁ­/A“FOÒ˜Òê4›CŸ\Zp0jC•\nJÌ\'6¸£Qš~Ô7vD3/ØB5¨ªÕ@ÛZ pÉãËş_€\0³à¯˜s]Jı\0\0\0\0IEND®B`‚'),(2,0,'exemple de piÃ¨ces jointes !'),(4,0,'‰PNG\r\n\Z\n\0\0\0\rIHDR\0\01\0\0\0ª\0\0\0ßÁ\0\0\0gAMA\0\0±üa\0\0\n0iCCPICC profile\0\0H‰–wTT×‡Ï½wz¡Í0)Cï½\r ½7©ÒDa˜`(34±!¢EDA‚\"Œ†\"±\"Š…€`Á  Ä`QQy3²Vtåå½——ßg}kŸ½÷=gï}Öº\0¼ı¹¼tX\n€4€âåJŒŠ¦cûğ\0Ì\0`²23B=Ã€H>nôL‘ø\"€7wÄ+\07¼ƒètğÿIš•ÁˆÒ‰Ø‚ÍÉd‰¸PÄ©Ù‚±}FÄÔø1Ã(1óE±¼˜Ùğ³Ï\";‹™Æc‹X|æv\Z[Ì=\"Şš%äˆñqQ—“-â[\"ÖL¦qEüV›Æaf€\"‰í+IÄ¦\"&ñÃBÜD¼\0)ñ+ÿŠœøRné¹|nb’€®ËÒ£›ÙÚ2èŞœìT@`Äd¥0ùlº[zZ“—Àâ?KF\\[º¨ÈÖf¶ÖÖFæÆf_ê¿nşM‰{»H¯‚?÷¢õ}±ı•_z=\0ŒYQmv|±Åï c3\0ò÷¿Ø4 )ê[ûÀW÷¡‰ç%I È°31ÉÎÎ6ærXÆâ‚ş¡ÿéğ7ôÕ÷ŒÅéş(İ“À¦\nèâº±ÒSÓ…|zf“Å¡ıyˆÿqà_ŸÃ0„“Àásx¢ˆpÑ”qy‰¢vóØ\\7GçòşSÿaØŸ´8×\"Q\Z>j¬1\Z ä×>€¢s@´ıÑ7|8¿¼Õ‰Å¹ÿ,èß³Âeâ%“›ø9Î-$ŒÎò³÷ÄÏ H*P\0*@è#`l€=pÀ‚0VHi€²A>ØŠ@	ØvƒjP\Z@h\'@8\r.€Ëà:¸nƒ`Œƒç`¼óa!2D UH2€Ì!äy@şPÅA‰BùĞ&¨*‡ª¡:¨	ú:]€®BƒĞ=hš‚~‡ŞÃL‚©°2¬\r›ÀØöƒÃà•p\"¼\ZÎƒáíp\\ƒÛáğuø6<?‡g€\Z¢†!Ä\r	D¢‘„¬CŠ‘J¤iAº^ä&2‚L#ïPEG¡ìQŞ¨å(j5jªU:‚jGõ n¢FQ3¨Oh2Z	m€¶Cû #Ñ‰èltºİˆnC_BßF£ß`0\ZFcƒñÆDa’1k0¥˜ı˜VÌyÌ f3‹Åb°Xl –‰`‹°{±Ç°ç°CØqì[§Š3Çyâ¢q<\\®ww7„›ÀÍã¥ğZx;| ÏÅ—áğ]øü8~ MĞ!8ÂÉ„„*Báá!á‘HT\'Úƒ‰\\âbñ8ñ\nq”ø$CÒ\'¹‘bHBÒvÒaÒyÒ=Ò+2™¬Mv&G“äíä&òEòcò[	Š„±„[b½DD»ÄÄI¼¤–¤‹ä*É<ÉJÉ“’’ÓRx)m)7)¦Ô:©\Z©SRÃR³Òi3é@é4éRé£ÒW¥\'e°2Ú22l™B™C2eÆ(EƒâFaQ6Q\Z(—(ãTU‡êCM¦–P¿£öSgded-eÃesdkdÏÈĞš6Í‡–J+£ İ¡½—S–s‘ãÈm“k‘’›“_\"ï,Ï‘/–o•¿-ÿ^®à¡¢°S¡Cá‘\"JQ_1X1[ñ€â%Åé%Ô%öKXKŠ—œXr_	VÒW\nQZ£tH©OiVYEÙK9Cy¯òEåišŠ³J²J…ÊY•)UŠª£*WµBõœê3º,İ…J¯¢÷ĞgÔ”Ô¼Õ„jujıjóê:êËÕÔ[Õi4\Z	\Z\Zİ\Z3šªššùšÍš÷µğZ­$­=Z½ZsÚ:ÚÚ[´;´\'uäu|tòtšuê’utWëÖëŞÒÃè1ôRôöëİĞ‡õ­ô“ôkô`k®Á~ƒAC´¡­!Ï°ŞpØˆdäb”eÔl4jL3ö7.0î0~a¢im²Ó¤×ä“©•iªiƒé33_³³.³ßÍõÍYæ5æ·,Èë-:-^Z\ZXr,XŞµ¢XXm±ê¶úhmcÍ·n±²Ñ´‰³Ùg3Ì 2‚¥Œ+¶h[WÛõ¶§mßÙYÛ	ìNØıfodŸbÔ~r©ÎRÎÒ†¥cêL‡:‡GºcœãAÇ\'5\'¦S½Óg\rg¶s£ó„‹K²Ë1—®¦®|×6×97;·µnçİw/÷b÷~åÕ=Õ==›=g¼¬¼Öx÷F{ûyïôöQöaù4ùÌøÚø®õíñ#ù…úUû=ñ×÷çûwÀ¾».ÓZÆ[Ö}w>\nÒ	Zôc0&8(¸&øiˆYH~Ho(%46ôhè›0×°²°Ëu——w‡K†Ç„7…ÏE¸G”GŒDšD®¼¥ÅêŒÆF‡G7FÏ®ğX±{ÅxŒULQÌ•:+sV^]¥¸*uÕ™XÉXfìÉ8t\\DÜÑ¸Ì@f=s6Ş\'~_üËµ‡õœíÌ®`Oq8åœ‰‡„ò„ÉD‡Ä]‰SINI•IÓ\\7n5÷e²wrmò\\J`Êá”…ÔˆÔÖ4\\Z\\Ú)/…×“®’“>˜aQ”1²ÚnõîÕ3|?~c&”¹2³S@ıLõ	u…›…£YY5Yo³Ã³OæHçğrúrõs·åNäyæ}»µ†µ¦;_-cşèZ—µuë uñëº×k¬/\\?¾ÁkÃ‘„)*0-(/x½)bSW¡rá†Â±Í^››‹$ŠøEÃ[ì·ÔnEmåníßf±mï¶OÅìâk%¦%•%JY¥×¾1û¦ê›…í	ÛûË¬ËìÀìàí¸³Óiç‘réò¼ò±]»Ú+èÅ¯wÇî¾ZiYY»‡°G¸g¤Ê¿ªs¯æŞ{?T\'Uß®q­iİ§´oÛ¾¹ıìıCœ´Ô*×–Ô¾?È=x·Î«®½^»¾òæPÖ¡§\rá\r½ß2¾mjTl,iüx˜wxäHÈ‘&›¦¦£JGËšáfaóÔ±˜c7¾sÿ®³Å¨¥®•ÖZrö}Ü÷wNøè>É8ÙòƒÖûÚ(mÅíP{nûLGRÇHgTçà)ßSİ]ö]m?\Zÿxø´Úéš3²gÊÎÎ]8—wnö|Æùé‰Æºc»\\Œ¼x«\'¸§ÿ’ß¥+—=/_ìué=wÅáÊé«vWO]c\\ë¸n}½½Ïª¯í\'«ŸÚú­ûÛl:oØŞè\Z\\:xvÈièÂM÷›—oùÜº~{ÙíÁ;ËïÜ¹Ë¾;y/õŞËûY÷çlxˆ~XüHêQåc¥Çõ?ëıÜ:b=rfÔ}´ïIè“c¬±ç¿dşòa¼ğ)ùiå„êDÓ¤ùäé)Ï©ÏV<ñ|~ºèWé_÷½Ğ}ñÃoÎ¿õÍDÎŒ¿ä¿\\ø½ô•Â«Ã¯-_wÏÍ>~“öf~®ø­ÂÛ#ïïzßG¼Ÿ˜Ïş€ıPõQïc×\'¿OÒş˜óü7E;\0\0\0 cHRM\0\0z&\0\0€„\0\0ú\0\0\0€è\0\0u0\0\0ê`\0\0:˜\0\0pœºQ<\0\0\0	pHYs\0\0Â\0\0ÂnĞu>\0\0\0tIMEß	-}mR\0\0 \0IDATxÚì½Ù–$É‘%vEUmñ%\"2³\n…µ¦ÑMö»Ï!ŸÉŸà?ğø|âÿğ/øÚ3‡gxÈ™>èQ\0ª\n¨ÌŒÅ[Tø`›ªšªšš»g¢º;\'áææjºÊ¹r…ş§ÿùç> Ê`Æ§{\r÷¦îgïwõ#XO™İÃyÑğ6‡¯åĞçÉş\\è^ì´±¾\"Ïó¹÷Kx.ßõÔ·-ùóÿ>‚Ñ×d¼¿Ğ&6Çª¿?¥´‡ããÊáütÀ¯şÿëÿö¿àÛöuÓâÿüOÿ¿ùæ8U\rîv;hf!°ßnqww‡2/@D8Õg|x|Äé|Æ®Ø`Sä h4M\rÉ\Z;%±•\n É3 /‘ç92©PÕ\rg¼œk\0I€ICá~·Å&ÏÁÏÎM!û²ÀÏŞì‘)‰Ã¹ÁóéŒ¯¿Üãïõó³7Dh´FÓvóÉ×ËÌ\"\Zº¸û‚ êº™ÈºÍ)Y[D@‡îg\"D€€ @ôßÕİŸş3Ã÷Å§_ÏÆšëµŸ$h4Ûã><‡À @w÷Ól¯M¾`Ÿr?3<MÒıÎÎ5Ckm?c¤İßÉØ+n°{svØ©³(ñsæû¬õ4ábí\0ëİîû»ºùÀFÿò¸Í\0ÜmÌû¸}=ô1Lã\\#ÁãÃ,ÖÍ\r¢Èú1Æ¾¿L09½ß÷!M×Œ}ÅcoØıİÏ{ßÙó(ŞşùAŞ÷Ü>½—4‰¦µÀ<¶”ˆÆëÆ÷‡ïrÈ;\03G;—ºñ%Ö]fóÃ3£Ø{-ÙçÏO°qôÜµ[d˜	ìµM˜yÜwÇk8ÒVò´œ»¹0Î!ëù»y7ÿ;GÖæÒfÌ#°3ffëÈy7mŸ^únßø±ñƒs,ŒgWLÚ~à®	ëÎ_ÆÎI9+__ég¶¹ŸØû şÓo¿ÃË/À&¿ÕyëŸzdí\"ğ2îx‘)L	†1/ÍpjÛìó\Zñ¥2€\0(ˆœ`¸è³&à€ã€‰ö³ià¥¿–ØØaœÏšï±±{ÀPïÏx:ñô|6w\03²L!Ë2«\Z‡ãMÓ@H°P5¤”ãWH! ¥@–)()Ğ¶´nñRUøp< ª+È¢@QÖ(òe‘£”_•j“£ÖÀK¼4\ZUÓ¢Õ\Z’€Öİ¦N\"Ab25ŒG×š¡[\r­yšŒEgÁÜ`º‡¡€1n–È¿ ;èìÛˆx,(êš%¨2ã54ªdŒˆl÷˜€6—×ã\0`c€­S‹¢Æ[êËÜa¶µfØŒûì& ~P¦[±gìøâÍÛgP.‘ş¿fo¥€«Í#wfó!ÀL©oÎ3õ¦Æ&¬ÒğÔlş¡_ä±{wsÉ%Ôu0u·3€:-ƒÖÚ×â\0ˆáGœ9ä¾ŞØOßkRÖÓìıanº‡{òŸ£Ä£Îßä”®bêGâĞé4y0ØZşÖìpì<»ßÄöBöøV#›!9_Äö!ÓÃø¾m4[×+À‚9og{%(Úzrïmš~–¤6Îí•ùâit>‰!\\é»××Õ¯Ô³]mßìñúD Æ9XØõ¹y¢\Zƒ‘G¡È\0\0ƒ{?ò¼úÜ0ñœëÙù|í÷íÂæwjÇ½¢ıïyïÕ¦ÑgÌîõÏ›€L³ı|–å[ä·TÙyßüØX“q÷}@¶×dh›&±}»GYä¨ˆÀR`¿İàn¿CÕ´8ŸO8W§q£©Ûy–#Ë2äYº®¡ÛÌ\ZBäYÎMÛâÜj<6G¼œÎØ0Ğ0á\\Õ8+¼+Şl$Şå5exÒyÃ8ÖÀ¹Ö`¤ Aè\r`³ÁĞZ£mmË]°KøWFÚfjnª]ÔfDeÜ;Éj9ƒ!†ëzĞ\"ÍH™˜)â“ºÙ93\Z3D],,âÁ1f°÷ïR×nŠluğÇƒÜ™ÕäØÌK®¹Ï³¡SÄÍ³tO¾Ğ{0!(gFcÜ®#sş®9g(ÓïELQ6FïŒˆ»¦İĞÌQ³ÊîoZX÷lÕ±qŠœuH_Ç«çA`„NKNrä}™f¦ïƒÈÙOØc†˜à“–ÖÙá\ZZš™ìßØb\0ÆÚˆ(!òŞƒ¯‹‚øœS3‡ÙWÍfÏg>MØ¿Û]y-ñŒ×\'#ÙOo¯‰5;ìëëS¾†R4¬jæO\nÀh«IO“‚]Š™¾YÿÒbÇ“oİO;ïE>7Pª\\ƒ_kÃlí(‚wW2#Îó€n=m\rmıf0ºáuøY½Ş\nôÏÃ6À”Õ˜ƒ?_4Ç¼ŞŠàèÈ‰ÂúOŒéñ1úûïÍ”„ïîïğ|n\0R8x„suFÓ¶x~~ ²L¡(JÔM=şyCJ	)	™ ìÊ²›üJb“PRâ\\·x9¡ÏğA£ÊòÍj»Ç/wçZà¥D‘ƒ”B«$\0Ö6úH3Ğj†fî!\rŒ\0“S÷Œ õ30X\'ÃAAFÔf8j„zz0ÖÿMYÀ(Õ~1½n<>ëdÜ³yÓüğå¹÷Ûş~òÒ·Ö[AÛ8pÍŸ˜ÃQÜMS–Çg\r8ªWn[}m½®à™÷ÔGC›xÑóbL#r±± ÃĞú‰‡¿“Ñt\"€í!ò¬×øµ+¤\\ó8Å<‰å}6(FN´t øŒÏKä¬¥8v=íD>\0í»O:	MíO¥¬_G–çŞ@\"`ì6†ŒK“B†>BÖG?@#Í\n\0Ãã”¬:ÏÎüÑv6X	\'Œ&{ë-ÖJO#£ĞûL‘uT-¯íaEdÑ]ƒ¬õí\"W6–}”ÔY‹‹íâù=»µdìKëäS™ÏÊ|Ê¤Œ•`dÁfÒR}İ¯>İ {\"\ZDk<\0†h!úâ0ûù¬\nÀÀX\0°¸á“ázËıíPÎ†÷Sm`\"Ï\ZãÆã|ŸÁï_u?Ó6ş%c³_¦ïbvÀÕÎÈ±EºcB\n‰2/p·ÊrA„Ãñ`(Z£®+œÎghİQ¹´Ö87(²e‘A9RÀò,Ã~»‰.\ZsxyÆï_ñÍSƒı–ğEMøj«ğEÎØ\n`Ÿ+T£–„ŠZÎÁLhÛvÚTyŠˆ´¬Ñh\rÍ\Z€ E·ú©\0a#|š¡ÔGi†¾$\"Hr£nÔeŠÊ(yÃ!rl<å¯Œ¿Ã<èí¿\rÔ³1rd.Iš­1\ZG|á!ãş‡å”ÃŸyšÿ®WWå¼aµ÷›i9ëÆ¾§×·:³©æt¸i¿L?š0;¯‘‚4]0Î#âôf„İèïÌ—Cc.µ§ÌÀˆ½}/Óšü4Cô ˆúàĞü¹Ò,5Ç!A4‚eæ93icÌ”€¿Ø?VQèDœMäŸØL£›Î…f[Í|˜5·\rœœ4ç‡Cğà\ZØ]Ëìw\0ÀÇ¦qÀ»1B!îÁŸáà 	”TVG;Œ½ÖÜè­İ€i©³6Á[û+\'Q+MÛqr.±Ù\"|’·Ï/Æ1dl°È¢@A¯šK»›hÁÀ;9ñ>ˆ¹ÀP\n}ñ<KŒ×@÷€‘x74¾=€IÉY™˜”¶èÅ¶,˜PRÀ¸T=Xì/oû RÕ´¨ê­ÖÈ²åfJJdY0£®+O\'h­QUªªÂçs…\"ËQT¦:àÑt‚R\näY†\\*è¶Å¡ªp¬ĞY¥!P¡=·ØH	Ó¹E£6he€  „D‘)”y†L)Tm÷,Ö¨[¶·î)ÑgJd[r2™@ê\r\'\ZÁÁŒö„´?îÇÈÉYµÀ‡Æ©¦Ù!GQÃ‹Fo=Vá‹´s}nüO^EÌcHèÎë6~ƒln·0ı$å¹Æ\'l/yw/2ríópF0Nu¦5´Z»†ÖF&h\Z¹\'Ù<Jyó‘¯h1(änÑó¹ÇH™ˆÓŒ/QÎha’±Idßœ½B°ƒ=D‰Í\ZìE\03‹²Ø¹tk)Ãäù‚k˜SD´È˜\0Ê¢†ÙÌb²@#\0%D—6£XC›8Æâ\0yzŸFó‚àfŞb¯‚‘ïöúúKFf¬(Mïb²úAŒ\'g\"À„Ş ğŞïZ\0Y3\0ãünª~Q 2^®0±¾™ŠD\0³*\Z4\0²\r€ñ;{×&Ñ]sn*|xüˆ÷O”y‰¦m@B¢(6Øm7¨ë\ZÛr‹<Ëğ|xÁ¹ª\00Ú¶Å™+œªHHÑ%äÏg¨ºÈ+…\"SxØí°-ZE¥uƒçƒštS¡Æ3(/‘[”y<S(s…<È”ÿIAĞ4-£mÍs‰ÀV~Óòä(d(j\r†¬ù\'aÆ}ÈHâÍ\r²U”,¯&õ°Ñ;Öÿ¢­|›)Ç†èÏp`éñ&d)j\r‰ªdÒ œ|Ó:ğ*;\rm¤¸w’ÙR\\.4œèŠ©ÇÂGÁ#ãº[ì«dGGÈç—J÷ò3ÏŸÙöğSô$Bäz.§ØÑ„aû)xĞûÇÓ~–	|ˆ¹§8”	n=®°ıÉ”øü;—{ºa0óÍ•¹Œ=p6nl\01søu[µ±Çê^Ìlö\0ÿ™À<Ïıq“õ]E2ÀøÄãô¹5±¡€gç‡[-CË~ĞFó578NØ 1HcÎQ’1ùÑ–‰Ø3\'.D^ç×\n CD£z¤\rÙC—d;z4šõ\"Üƒ}ë–“}ëü´ŒøM³êûÜ¼ø~‡‘Oe+71)\0F§Gh¢†ÔˆOÀD#+yÍôÒŠèËM¢3ø\0˜˜²ö>Æ…Ä©Ñ(¸Åû?}‹ÿ÷Ÿ~%3”eİ~û»7 ~À~·Ç¶ÜaS\0$ŒL\näE	¥203Nç3ªºFU×°©+<\nlŠûí\0º|\Z2%q·Û@ªªñø,ñá¨Q55äù„ò¬»’È3‰ç—ÚºÂİn¥2ÜoKÜoä¹‡\'<Á÷ˆ,#‹¨-D Ñƒ˜1Ú2©™t­ğ÷qğ°ağ,\npe>JNôeºÎ\nÀyŒ+×ËKÌ¼3”Ù¡l¤¼&Í}üh!Â,—y~x/gšQAN®@Ø5K”«@4·…×qĞ ôF^¿„oÏpŸ)@±¯82>®~	Æ¨íé°™ÅÕ[6OªË”/•F!ôËıÎ÷{ÓéAd‹ºXà\rgÚHå3ÈŞè­o¬É\0)¾qáÀZb\'ßn®ì·ĞÇ)éñÂ‰˜ÒÀ\nw,-ûpn©ÈÌ.…”L@Ì€Š7ÒFşØ{œ(©k¯ôPÌ°gÛˆçE†ÁÚHĞ<çÏı¸ \Zá£ëãŠö•1™U0Ò¬«×W\"±ßÓ#q”a¿]$&5sK\0c¹d—Ë?\'€1yŸ”ä^\nK\r¯0ÎrŠ½—”k„DÄÜæMí¼Ër\"übWàkUãÏ‡oñİÓd†»{<>|Ã—_áÍÃ[ìw{”y	fF–Ja×Gf4k”EsUáx:âãÓš†q&p®k°îö\"ÏP9Š<GeR!ÏKäEJ²L„@İj«\nïŸññù÷»-öÛ2•a_H@·–÷ äe_öÃÛöÕX/¦?¨…‘ë\"LÀÒÿîs,Í©!<KHuÌTÂŒ²˜Q—î‡‘>ÆTƒ9×ÃJı2\"ŠD©œc‡]Pã;\'9|t»5z|Ë„È=èxµ!±È„7·vÛjA”PfíÙÏywsgŸ°bì¶k¹zÄ	ëlŸs@!:^ä:Ùì›œğÓ|†([Ô˜§ˆƒƒç5v€†‹Ğæ~¿4áÈÀ¹¿İÃdï)äö%aIHcq†ht!Å:šF2?EênRòäDØ\0wñÅÇıÄ\'SL$N¾Ê(\\Ê]›ÉºG÷\\oiß\nÕ«±8Oå\0ŒíÒºM}˜ ÉP\nÈÎsÚR}}EÖy×øäüäQÉVwZ«D·\01¼`4;Æªp¤\0˜`Âºß÷{s`\0L(gÆÊM•dÆœB–Ò7Á}Öïï´TäÓQ!ó¿×x9[ï·\0„øÉ~‹¿{·Eû ñ=ñ‡ãu…¶ÕhA8œÏØl¶Ø•;\0JeB¡È\06eºiğü,q:¡T¢,»\"™çÎç\n¬M›uQ™ºEY(³ÄŒ2SPÈ3…\"ÏA œë\ZUÓâùXáùpÂÇ—3öÛ3¶EBjß”ĞZÉóäqşú<ŒvÄÅV¶¤±NÍD=Ml(7%î/åÑbV­€±÷m¥níşîÜVÊlS,Œ#,OìõãZ2Q…+ÿÛÌ±#ˆ®:¦|ã|™ÌhîÎ\"ZQ±€á±ØàÚ¶‘Ex’³˜ÕŞ±8õ+ğQuƒ<ywÑ™¸£gµø‚§A‘\0¢Åyi¤ `Q¤­~£\0Ğ¦«f\\ÈÌGm Ú‘Eœ¬ui÷\r:i¶Çxƒmìçæ›Er]ñõ1Ç#`ë:Ù`0³98ÁÇ?ßÚ8êY+Œ°(¯Í®|6§íä’¯Öô÷i¿×dÏî[@¢u{ş+h¹–ñÓ‡Í€èëŞ]‰¹eÿ	ü—\0˜¨\nÙ’¸^ÇŒtÿ=½²¤¨\"º+£9Ñ¶ø%A…Ïe‡ÑòİQwù.BâşÍ;üúë¿B[<`ÿRáƒ–h³T”8×\ZÏ§\'|/!tEŒMQ\0?ù9„øÛİŠº\"˜MYb·İa¿Ûc¿Û‚\0<=¿àépÀñtÄé|ÆñtÆÇ§l7l7Ah›BŠ\\¡È”TÈ2ÕIK¶iÁ\0UÃ¹Æ¶øğ²GÕ4`t5f¤}hcÿ,Õ(1½bÌsQ´–7ËÊ‰bsUØWÁÆ˜À?Ê™ºù0–bûœêED+›*3y«šhj@”®vÂ¾Ã*ìO³Èõ¹.1#dş>#0~y]‚¼Œ\Z„Úf×L‚UÆl?™­„xôÌq°sBßÍ€\\Êä£@X)Ôyæ&İj%°ÿ¼¥Ñ!bl«Vä…ìÜ²ÖRœ¾Á‹À‹b—0RmœVå¿ „e\\5*òDôyÉÇnÊ/ëÀ÷{ê)ñ2ì`ËÌ1Ü0lG¬•ˆÑÊn±ÿ¸³~¾Ö8\nRkÀ„s¬œÈzº¾vØëëG^Â\'`*jİ»àkédÿ\0!L[«B6k{ÀèeÔî>Ã,Â³ÀèÛ\0oßÆ\'EFY§˜	ÀİëÜ´\0Ï\r~sdüSUâ¥ü2ŞÊYQâ~³Á6#@×x:Wøîã¾ÿˆ÷ß½àıûğğö¼}óîö[ì¶;I›-Š¢À¦(‘e\neQ`»İàñù	ŸĞ´\ZB\nhnñôòŒ¶íhaeY@\n\"\\))úš3ê^0 S\nš•ĞL¨ÛNî¹€ºö<Vµg§œYzøCDE˜\0FØ e¸ÎTKğ£v9,Ú­ïÂ³C|Ø›Ú¬õ¤DÆ|	\'8´…±\'‰×öà>M	t^AŞy¶(¿†ırUó£bª²ày÷æ*Ğ¼ÃÌX+³¹%NBÑ˜àºO\0äÔ‘˜:î‘áÖôòÕÃI\0t©5¦$Éî¾Û»Of>\09Ô¯¨QG¶ÜŸ©&ÈÿşÈ¬¡±6Ï”ÁÎÕ<›C¡¢q\nÍ¢kÚi™;‡¢òã2e±÷Ø¨lÌ;N2ñÈ…O„¬ıÄë8ã¼‹FxSò×ÖˆŒÒC]»)ÀÂ°r~Üû.€©Ôh]«+–GäÔÙ¼\"ÊòúúqGa|ûÒä¥1hæ—ÑÉ<†æÌ\0€µ901\0³˜À¿À$äÀÄ\0Ã\n²´èp…l\r8ó˜”ç¹T…,À\0@Ó´ĞÌx©[üö¹Æÿı±tOéR\n\nwŠğõ^á!WxnJü®Pø-\Z|W?âtú3ß?£ùø=Ş%öûlvwĞB@¢»ReQBJÙyô{:”‚€ã©ÂIk´Zã\\u”³SU#W\n›¢€”ºŸ\'™’Ø%HE‰V£/†)Æ|«›‡¸Ï›HS€L\0#x±ÕÆlÏ,-**Ùù-l$Ù[‰ûÎ91·¡,æ²·8ä\0À’”oZÀíŸ¹Ìg¤ˆc„„Šë-8Ş“7ãed\Z‘Ê¬T>ÿ%µ;E<Ÿk<kq\0êrHcì{âÁ`Ò“ »ï¯”`–îik°Ù}p!©1m)!°hRDóÓW×€?ö‡Yl/>§÷^0Çzœ;9Ôw‘:+×R9M‘ƒx¬à†2ÀWRPgóÑÌ’ĞÜ¿(\Zäo×¬6(<Ú¯¯Õ@Æë|ç†f‚à‹Ay@]¡¹Ê@GØ;D†‘EêR\03€7ã9®0ÊGûgí½°Li« Øí\0Ì6­îi\Z„¦©ñøüŒS]C)%rbğó›ó»·;ì7wø›/Şâg»§·‡şüô‚ï>|o¿}ÆŸ´€(ï°}ó%¾ø	N§/p¾Àn³…”RlË\r¤R(òJªºÁátÆËñˆ§—^GNgy†s]C)	 SÈTÕ÷ƒæn\ZiîÊLê\nb30bV8ÆDbˆÈĞH#²j£uÜœâ“Óïv®™•ób%ßÒú7b#fõnö†nBm£Y2³[‘İ©°nÎYêÓKˆyÔÁM¡á„:9—z•|I\"?+$<×ÛpÄO9Öb™$®º•©Pæã­Ïï™\'Ÿï\r17átŸóİ\0±”2F3´3yölµ%?eÏ›3 .’ó#µÈqR›×e:áLú•éààş/„Y-O,Íÿ¥h1ÉPäÅK_rOO8‘™°6Šç1	aM×ác%‰gıá®óôêõËíçĞ&Å”<ém¨bé@†bò\\1È©Éî·K(n–„½A%íÎ\Z²|—6y}ıëxÍ÷$‡şİ.Ì)ù+AÌ\Z\0cùWE`\0Œr÷\0ËELNâø€1s\nôüÙÖ\0x¢CWZî»”LˆÆ\0ÍÇ5,£¼ÀŒ]=Dtè\ZÜ6ĞºE¥[ê3N/şø±Ä›o·Ønñf›ã§[¯ß>àoùKpSãOşÿå·¿ÃüİwøÍ÷¿Çñş‡ïñçıûİ÷o¿Àşş\ròr‹¦eY†L”ww¸Û+Ü×5><=¢m4­B–eJ¢i[Ngh­!{µ²ªiç9ÊœĞ´z”ú¤Y´ƒGúÇ`äˆ&ÚÉü}?ğBñmİ6P§èË0½™ÉR³J[ôÓà©ìÌš<‚7Ğ t*¬\"—lgèÛFÇ0ğåvL˜Ÿ“*¨kÍH\ZBÔxÙâSõsqsÂlÃğ=KÒ²ö%Ô˜•ÚƒrÙ{úÀã¥Ièz_­£˜ÁúNòyc}Œ¡Àıå6»ˆİú|Ù!î\\¿ÁÍF=‚5†¦bŠ2uŸ4\rv©(ºä¼€MJ™\r’×ŒurÑÙàÑÍV²üìnr†÷¢¾ŸáñzA¸Cç[hG“ X\\ü»¹4œØOäİR•Æb}ì{2IÌ…½HåÇK÷\n?{m.óEMş/^âÏnÔ+Ğºaÿ%µ‘¿¦“#1Î.âÍG1Qö\ZWe+bŒÏ\"0€¿NJâö«µ3İ:0>ÉgÄ#0äT	 ÁóúDnE!ğÑgchF`œ¹‘,£l˜¨›¾K„C‚Ğ\Z\\ÑNĞ™	ÍŒ£P¨N-Ş7\'d/-¶ğíNáé‹{ü»,ÃÛ=ö_åø•ÜàOÙ¾ı€ªi‘±?ÀïñáÃ{”w(÷ù»İ•n¡ÜïwPR`S–Øn6 Ê¢€T²8ŸQU5š¶£›5m‹¬i°+ÎU¶u\"z4ylÙ#iF^FU³!a_„©:¡µë&ÜuMÌS.ÙüÌPëE›^:\"Ä0Ù¥Gº`x×<¥“bŞÕ›n‚îaîWºåñòøÚŞ¥´ïqioœPR:-±–’Ÿ# ¥ŒåUEø0/¸ÚûLğä\'Ü¶êw\Z˜åĞ ™AÄ«D\\öÖ÷Ë	êkz…#ë\'d”\'zìYi~$Û×¸\\{\\`B†ª©Îì¾|³uván¿>$Íjk±·äÁç²V£¾\0ÓÒøŒô+ˆø‘ §\05¥æÄD(K¡ÄqmÌF\n¹Rô¼e‚SÈÜ…·6â‘¢Bæ5Ò‘ölÁ|Ÿ„ÏÏ\0Åûî\"\0ãÏKûÁj.‡¥deØÂ\ZëL\nhÖÈ•‚h[4§¥d^ /\nÈ¼\0H¢eÆŸOgüépÄÿ÷Üà—Ç¿x÷€/¶ÔÃ¯p§~‚_¿;@Ÿ‘Ÿq~yÂwOøx:àp>£x~ÆöşĞ5Ú¦ÂóÇ÷¸Ûï°ÛíeˆŠ,ÃnS¢ÈrìË§ªÂñtÆÓá€ºmA ´-ã\\58Ÿ;PÓu»\0‘îAíôøcÂ¾`& ÓÉ&3\0…\n·dĞ¼†¿3O«zÇ²sÈ;òÉ–¤2Ï’úm|İÑ[È”9Å][Ã\n–†\nNRâáSír\"_N‚èöD…åú0.İ&]2Ë¯¶`pB4Â°µ5SrÑV›:IÑ¨‡ßÛìæÈx¤q×gß‰%h\'YÓk0>¯¶#%˜¸XH\n!Ç°ç¸•Hä[gïâÁa1lùlÉ¾‡m|š;6S½Út3û²>Š¦–x$\0\0 \0IDATíy’ÑAûnC”ÀÌabâ™ßnºhN#¯ÕÍ=Š“ö\nŸàGÌQW;t‹§Nm²÷‚>2í8«}\'é´²(!§“=×²º~—Cr	¯Y.ñëë“…İ_1ä·Ì\nA\"ÍH_R![#¡Lt`ğ®8Ÿ\n™K!‹?Û¬ÌZÕ0/(¸¡\nYŠœ³`hVû²€±òs&#\\H²ÈQnwÈ6;Ğé\0¡[u²Çms†Ê»š/YV ®Î¨NÔç\nxÿïÏ\r²¼@YäÈ„D.sÜ=¼Ã»â\'\0ŞÏøşÃG4Oï±©x›µ`>áÃã	ß|ø€\Z\ZÛıoŞ|	••¸¿»CeØ–l7%6›E~„RÌ%%ª†‘gæRÆÜø“¿KĞ@Ãšrb,2#ïE@–f¾(1ÚñrOOaØ5]Æ6$ŸuŸèÏœntŒÑL`f(4æ¥m×šI]¶ƒÁeÅFş’ç›œ%¡Ÿõç\\“;³lhÌÛ£â„ù6şDş”¨€k.Pÿ?&xGåk}}ÅaIÙÈ2ÆÉ´W-ÿÉpÿÄq™öM7]ôÚv¦b%•q È^CÓl§0’µ¼µƒLIr“ŠiFÈ“êl“\ríãn^[†„ë=ÅÎKÜ?eş±3ÁÉuÒ%Œé˜·ïÂS³©¯ìˆ¥tàfãÁ<Îü*‰ë÷ÿ5ëjÂLRÏ¶î““É+ö¸¤ïgÓ\0å‘&Ÿ‹ÍıÇ¶9>\'Fˆäxæú+†¹`qlDb Qè–\rj‰Z0+\0W¥L_`UÈ<\0&˜¯³àºÓRÀ^\0³2‰mÒ½/‚ÄäÈJ\0Ó¿§]Î“ö\0˜Hß¤äÀr«˜Ä!ò¢@±İ£<Ÿ!û¯«ª3ÚºA}:Bì¾¢Ï¦¯O8Ÿğ‘$„Ê±óÛíe–ã¬$˜6Øl6P÷;¼ÍwÈö[¼©ğÓ\\\"Ë7x_3Jnñûğòñ#NÇ\nTîğÃá€ç3¾ª*|qw‡MAI…m/¿œ)…ºaH”Ì<ÊÕäÔz™raˆ¦H†™€>4ØscRã	¤°¡J#QŸÑ*FnŒYëÅNPúƒtŒ4ñ™Q—;3ôAO(·K81˜#’¼Aƒ•£2Åîgmƒà‚èŠKß6íûï¨Ùn¢Ğá¹\\ŸÃÎ%‚Ç«º\\øn1\'…0«Õ±†úbõ{Ìé•d]æDuŒ£v@r$Š¼\r°dƒ#Å«ÕìR€btÎÂ®W2{öY!ÁLËá pä‰gêUv•g{MÔ¡‡¹Ğ…yeô|9tÎºçyâ¾TÎªÒ“#Í>CºÏOJÆ.óÎŸÖæŠ|£àZÉğ´dhª¢ûW†Të.LV‹ÂŠcIúgÄ¡®ıì/ïš¡Øè¿¾.Û\'ê·Ás•¹\r˜•\0&\Z¡	ljÁÂ‰\0Æ¢]aèÛª`\"úÚœ­ıIüWI(“Ñ7‘¾K0‘¤{kâ`wkQ&Ç`¼ô³%\0cï&!APJ\"Ï3dy	!ÀÁ]7Ğm‹¦:w‘’ĞºnN¨G4uÕE>ê4ûò\r	||*±ßßa»Û#Ï2äÛ=Pä€öå{•¡¸À?âÃó3U…c«q|ú€÷‡gœ?~ÄãÃÜï÷]Œ lŠ9òLB	B–©¾èÜd´Š>¯E\n\Zø‡ü—¡`#<ê®©Á<¯åjª™y®Ö5#¸á)çÅ¨\râ“fMÍY™yÁ\ZĞ£çØVc)JŒ Mn­Q­“°âYØ‹/\nÊ/İ®Íå0ŸK!¥uin×`4¯5drŒe&Û~™º‰Sêz¢0œgâ°ùºƒ:İ{ÍAc/(şuÎŠFZÈc.%e]2\0ÉkÔZ\"\"nš­SLw‰v\Z_£oGô*rÏ§Ú€wÄ.Z—®gd:Ñg—	xkµ\\=}ÆsŸVNS¾é4ş¤\0æõuëNziœ¹ƒ­\"Lc\ZÄ)\0&ôş‚a¼dDßÀ¤è.€a„»5pÌÓâ/`p½¢Ù*úY€ÑÚS˜QÄÌ?ù¢3iíÑÌ`ŒFÛThšIF%¤Ê ¤ì\rİD2©TWĞõ	Ï¾‡:¡²Æ“TøPl±İßc»¿ƒÌ\n!ñOBà`üìÍï¾Â×•aÏ\r²Ã#¿ûÿôûßã¿şéüş‡?ã›ïwø¦Bûİoïöxsw‡2/ Š¬·{•!‚¤É³(F*F™b¢„\rÓ&l²ïxw\0Ñ‹úE=mÌ¨Ã¼0Œø¸ñ°@Ò°Q	a\"˜I€y	úòåz8iÊH©FØxà³“ƒçÊ”®´48V—kyĞ,ª³LL3 LÚâHµ2Ë ½?³´æãX˜µßz\rÇ†­Ön¨Í¥‚­¨C\"•F³× ZK=kf«úŠ N÷w•Ù–ŒjoÌ¼#wÈ9S‘©ˆg+a¹}¨Xo™—†ú(Ï¯àôĞEĞØ7îÖ÷ë/µNI˜R`ãbÇ‰fçÃÆk4ùğ!GLJÛ‡¹š+Kû\n»9N~ÅşÌ<É+±ÏFÒ%Aû£w¡ü\"ãÍçÕU–5RñË+Ì¹¶§Íc„G§ÉXÒ›ú<½şœQó)w\0ƒ€ßŸ)pEÀÏÕ†Ğ÷ècVásgó\\£hëŸ+Œ?Ü‡t\0“R_ÈhWİ¶ ¶í’¸dív•}Äéx\0·M·Mgˆ2H¥eT–¡mhÈ¶-šóõñºi@MİúdtBu|Áéå#Ï÷(v÷ù\0Ş¿¼à·ÏÏøòÍ[ü»7øÛ»\r¾Şïñ?ˆ\nÿcŞàw\nÿåãşñ\\á÷õ|x©pj*ü©iqn»Í»\rŞí´º%úÈÌ‚•¦VEİÛl‚6•ªìú/.à§±s°\r´3v\rÉdï_ØãhÒ(Ø™Z³eˆ‰‘Bg®!WÍ+\\Ì2vÈOËœ=‰ş¦!ÏkhGì”±K¢«ySâ4ípæYß¥•Ğò:Š-Nù—²Ñÿšh’ê†_u¤	:œw¶(±°©j†ëØv©ÍËÓ/{D×Ul\rÊ™y&¸]Eög<âÆ>ƒô\"iÈ\ZÒEf/\nCP°œÏç&®Û@n\Zà5QC;?¥«Äl‚\ZCÆe4éÜ1!|.\'%\rH<a‘áHX¤ú2a‰ğ%J­)Zâ7wæëš;úésw\n¡QHÊQ@ãß?¿\\Øk\0æ/õbx¹\0$F;U\'ÇBÂE„¢	®T‡ŸŒØÄªcEİ%Ú``Üûé+(_>zõ|+%™½\ng	\0\0³¤h¶\ZÀÄÀ­¨Ú.õ¶,7xûæOg<?=¢:¾ ©+H){å/)%¤T\0¨‹¬¨®43D¿¥jİ¢Õºûÿ¦ÁéåMÓ@\'0	¼¨OÕÏUçã	OÏ<nş–*ü|»ÅÏ³wû\'üõñß×-¾9¾%ÂS®Q‹ŒÖ\0µFÑJîúN…XÚàe2\"LmK&™İøç \"^·ÛÈ~rtÉ?hêóŒÄ³Î-(`kÛ¸ê²Û¶ZÆÖÅ\Z´`¬„¾ÏªmÊ~Ö/•¹‰‚t®1ÜoŞÒÓÆ¡`¥­†£P\"Õ….#Ë]»ÉºVqL¶r¡Æj-Ôç…\rPÎ-æ™Xgqæ!¼ôäîKÁÓ2\"¼ Ù¶‚¿U»„éÊÕ3¤˜@†Í …¾‹/Ÿ‘çEWï\r\r“ˆ‘š{ÏAî²ı7²o¤ø÷úúW[&à˜Q†\"œòzÁ—òÖsuy)d:|À¬V!K-b‰ÀóÁQXK ä47\00Ş¾‹\0Ÿ €t,\0Z`p!€	y`¦}¹ËñT3ªFãn·Á—_|M\nÏ÷Ox~úˆ§§İÄ$:u°¶©Ñ¶m_SC7\r lw¼Ø@\n	n4mƒ¦©¡ë3ÚæÔıÓ\rTV PuuÂ7ï|óğ¥ÀW9á¿yØã¿½ÛàW~q¿Ç¿\Z,%~€ÀE?ª\r¾S;Ğf‡‡İe® 5_Œ–ó7Ìî³Ç&Es¶6\0\'?Æ’\'´Ç@ŒŠe!MîE<VªÖ°ãm±Õ\\ĞÀ¤è°#R”òm+s•Õ§ÒÏÜKŒgæ\"]/¨¬ÌçÊ3ÁÑœî¢áü±ÜVVİ­5UÎ]¦=ş˜A±Ñœ´lÑ!COå&‡{=Ä^¯¹ã±g·ª†+†0Î+¸\0‹F\nÍÔÚ¦êlÕL³ç“OV:¶~B	ŞÁÚ\'Á5›VÈ¥l²QCd}±e›ƒí	(2{¶ƒ¡Ût¼öÌ:o:M{\'[\r;3œü4œS® AX&|¾_ú#)mh\rz…Nœ©9E«ÉÂd^‚ûsc–æÛ¼„ %°¿n\0L__?J B+¯\ræ9\ZöõG‡î×ƒJ—í½À$QÒ°œ$¨]`|90é\0„’\0Õ\r\0Ìê{á/`¬Ü\",\0˜e@¶/T.pj4î7%v;´¬°İlQ%”’#€ÑÔu…¶mÑêBŠ®u G·5ÚFŠ@B€  D*7 İ ­ÏhÛJeÈT©$¤Èd×¾ªÕøÍ‘ğM{Â?¼h|©€¿Ùæøïö\nÿa#ñó­Ä¯î÷ø°‹?¨;U‰MYâí¾D®dŸÄ?)0‘G‰Ç=Š,å.ÓVâ.:¥GO²ãÉ@¯HÆ.•b ¡h+‡È)v	»†Œ¯¡«(LÉ»Ï¾w8	0¶âà›\'\0û¸ûõšŠ_K\nH©1Š“>>¼»\r»’JOQâYì3¥»KÜö<¥\r3ÍÔôÛïeÇyŠáï‹¬ÍbO¥±YúäĞÀ˜0)3º0Óì{væ»ÑN{Í„Àƒ9wtùi]˜Qö®‹„ï¡5B¢yşÏ’±NF1]³K“ê×\0ZœfÑ¨_dÁ26ò’½úé’H\'Kp/EáÂJŠ+Å<†ù½\"ßî2!·è(9`~¹Œöëë_6h¡?§ÄGw$¦=G,İÍmeÁñO\n`R%™=Ÿ½•\n™%‘ìÚÔ\\!³è§•“sÃ$şKŒ)H°(	c@šY2€±õˆŸ*\rÈî¸É”Ä&Ï°É5$1ZÒÈ³R)´šñr<áTU8 0\ZÑ@\n…,k»b‘BXµA„Y)Kïúü!%„R‚ {¬-Ñy\0´[F#Z*ÑªÚ²Àù>Ç—oïß?à§ùPÈ”Äİ&C®h\rŞ¹e2»h)¦b3Ï†ÅiÆøóZø˜şE\Zéí.…‹Fß4€ÇÊ!„ORašœh’ëI×lÒÍf:FÑ5jnŠ8À%Ô…6c¢Á’\"J¶Hs€C<N|´`óîÆf‘D7´¹gÅ˜àMl5“úËÎ-±æ\rù\r\0ğñ‚\Zìs?óº9¥Ñ\Z\"êFô|ê]¡À#_2‡\r\0ÃU1*hÑÊ5²fº†¯Na_ƒ+B©ŠGy|ûß¬ı±¹2/äI‹‘•ä{-ö=¿ˆûàSn”¯¯İ‹V\\Ç™I¦}p(Ë\0ÿ*d‹:–ÌU)ÀÌê×ÄÈ(\rÀÌŒô„Ãg0H Ã%˜à¼H0©òÛ<§_üéP#“-2) uæÜÖP¤±Í3ĞîeY ÌsHA8+œªO‡ü 	çºîr_zÃ¾ËiÑ¶Mwp\n)$”RP*ƒ\n`=\ZG¢çî”¸S\nE#/\n¨¢Àînæşßİí!v%›\r¾,6Øå\n	dJ È¦Â•>s‚Ù	°TÃ°2z4iô”»‰ş\Z“©çd$³Æ„ùá^-àP˜ È”^×d¸ÉÆDäPNxgßB_sI-°r˜éü‰-ßğ›±$_Go8``pÇØZ(Â˜\nQe¯…ëäÒ$¹ï82Œs&ëGÿRÈŒñ\n„;Übœse«Á91Ë±d×yù£4Ó`¹}à§ªŞ¹²ÚÖúK”¼\r©ã±9îà9õõ*î%hİšW}!âÈš\\*Bé«ËóƒÖF`bßÌ	Nõ‰ûyÇvİ+^Üÿ^_ÿ–@Ëšû¹ù”v­¥i?R–Eò/\nÀ¬Q^0Şâœ¶HÙº%€Y!P°TÔ?«>ÎŒ7Ò–ÏãÔã©Î\r\Z)Ğ(Ã©Æóñˆ§Ã3ÊLA’@&%€\"¼ÛØŞå$ñá°Ã?JàCU£&‰ºnĞÔ5ÚºBUQÕuWWF©Q®U·MgĞ©2d}4F@&Ê¼À¶,q·Ûàí~‹Ÿ¼ÙãíıûMm™cWfP™„”€”]-r¥Œ\\İ~+7D×fî‹•èf€Ãh0UZG‡¼°F_3Ğ\ZRÏÔÂ0ãœFPkƒÄs#æ’Ã7l$Ä®uig&\r#¶ÍšÑ¤e{\ZİgDØ„äá±F5BT¢€÷w¤Ç˜¹,<7œÇç¢xt%ÕÈIû(R0·\rØ9/!phæ^Ø‘2@‚Á“ÃZšLtkÄ´Íã\'çldâ\"!o½”@?Fjš˜4J\n€E¦páĞ˜2ULaÊgä[Ñ¤à¶­aÎd¿!í¹•¹Ñ•÷E\Z”™ƒär ™ğp:-Ü|¾µ“”÷ƒé&ìÑ—åÚ\\²wÏòšş˜ÛI/\\v–ù¯Ww	,¢‘2ëªâA]Öa¿\\Pöø\njÀŒ\'½`ˆÀpš;Oëà¦ëF`®ÍYxoé^³±Z’,4\0Œğ°kY‡r`b˜0Æò¼%¼¦¶4Ì ¶³Æ¹®p8ğÃÇG\0Jt^ú¬ÈAÜ`\'4Şåo7ŞîrĞÛ782@J¤ÂSİàñ\\ãñtÆátÀñx„Ö\ZJI€m£Ñ4-\Zİv-åÌymYb¿Ùà®—N~³ßàí¾Ëw¹ßæØ–9ÊL¡Ì\n% „)©j)L–qáFIæØÑ˜¾_4¾z÷¦æõ‰õ3Z˜Ù(g£Bû8œBôT3+7›Âºáú&)%ÓšB3GK‡TŠØBøuA+·jö‹¥qÜrÌa§|FË\rëpÇ_Úµv1D»X+y\rÚ(¬·bCãÆ–\"Ş¤^Ú·0ÉA%JÁ.Qú(‹€-5­˜™mF_ÖÉ}PòDô¼5*ÙRšó®C8NWéŸlƒ›89X¢SÅ€Œ\r-•1£¯Æõã§=fKÒÔH³M.px# V}/CvÛcŠ,õá¥‹8€2Ìú4 åÓÜÉ³Ô“Œï×ĞÓµQ\"t´­\'IyĞ\\¨†ªÃ Á¢AèËÑÅ$õ‹€Ù­“øCï­0z]İ/È¸QŠì±»M\0C\0Kâ˜äˆüÑ57‘ŒFëñN§ºÆét´†\0Cå9NÇ#N‡Õ&ÃùnƒBåØH…ŸŞmìŠ-ãÛs‹?+üpØàÃóêV#Ë20kTuÓ¹Â¹ªº\"$6E»İw{¼»ßáÍn‹·û\rŞlÜm2ìJ…m¡°É%\n%‘IÙ¸l\r¿Šµ‘9aËg0PØì‹G¬ÿ›æ”£¼˜vm#8Êæ™oô[Ñ¯e™¥4[—Çri»øúMÚícCÍÊWPr©5tM°U)ßGî-¼¶ëº,=Æy6§w­57ÒÌ•©ª9y+“ÒMÅ”æªsFqa¹FIÂL‹ÅÃæ¯ìG\nú®ØqÒ¥(¤]Z1ãYõ§Ü·KòÑ¼\0Lo#ì*ñ-­_k>ğ\"	·²R?×vñ‰ï›¾ÔéÃÜbÚk\0“cÆò¬5ÔœFÔÜ+CœJº\0À¹ö<•²O`.í›PÒÿ\'0Ş¹\r€á\nç#)Ih{ã9ËrlË\rò\"Çñ\\¡jÎĞu\r:ñô|Àw¾)¼»ÛâÍf‹;•ãA0~.$¾.\Z¡ğ}©ğ»Bá¥Äs…ç–Ayp®O§.¦m¡„À~Sâíıoïwxw·ÅÃ¶ÄÃ6Çİ&Ç6W(3\\	HAM\nˆÁ¶ÑxahMĞ`hÍ^=t¶şK£a:Ù¼SNŠæ0MlQîôã`6-Æ(#olñvWÖz¾w<\ZâŞÇ,j9¯î)+Eğo\r‹4Ş;TÏ$©¿	ünjı	GÍ‹ı¢äf¢»)±@q*X(Ru±w—ô,¥\Z#šiÙ¦¿iªq<QÇØQ<®CÑ,yF‹Jÿ¾¤â±Äö@û»± ]¿©†TZÆ“›c6˜éàÅVŒ³%Óçà]@?‰>ø\" !•¾iİspo!¢ cP<ÍºT‰>yšél‚<AÄ#3Óà;QVJ0©”Ù8X´¾¦’ßº¨Fšës\0w½\rRëL3y¯A˜›ÎbdyPMºÜènRŞCä/	`¢’Å	\0fx®0ZÛœhKálàğ\0†Å¾K0©}=ö³UÇÓ7–;âJ\0ãU,s\0Œa¨(AB¡È3y]±îÎyÓáMÛ€„€R\n5€og|¬Qğx(ğñ¼ÃûjŸ”öY¿Ïş*ËğçøĞ2RáÈGfœõç¶È”ÂÃnƒ‡»\rî7]¾Ë¶È°+$ÊL\"Wü²’ö-¹PFÛj´}7(Áš;¹@ˆX=Å¦ìô/uõy/‚&%2{ç™\'6õàJ+¾fLÔ£ZÙpˆ{l«À»ÌÇË˜G—=5lh¶Ù¼uJ:ç‚\0¾$ó™y‡Y=wLfêÁ±\rjÍÎ8G\\±òx°ÉM¨î¾ç.¾Äeßıó-Ø5¸ÙP¾s0OÉó1$>ÇÌĞLd›O®\0Å—BÒÛéŞG[YÁ‹ımÁöW¡_2Jgy¦¦iğ^¶€\0;‹ŒGœ>§m…¼õKôÂ5”TsNÇ\rSî%ïİıü%{ßš$ÚC´\n\\Båvb\nú~|k3VÏæòÈ=\'…)Á~s\"¨LQ+ªÍ<–I0Íf^_7í÷ñL˜viêª†ËÆŠ½	€IHâO•P¶*Ş­TérÛã•X¾À,$İ€*\0îfO`â\nd-ºPgµ\nÙ\Z\00AXP‚ A)æ¬[dZ#Ë3”y	\rF­USã¹ªğİâ±Õøİ¹Á/¶~µ-ñ³²À.SøJ_„6#œIà($Bâ‰\Z’È²÷›ûMm!Q(\\Iäªk‡”äøòºçÓÜ)„U\r£n5¤ HÑE•DŸK¢jÔ“$òÄËbâYÃLZ#7Ô±íøRà‹ø#r³İ¾]Ú8ˆlàÒNøsmƒ³ÕÒgˆH~O!Ï€/8séÎ©O&¿ÌO™R@/½`bÌŒá 4‰;£è‡D7ÿi¢Ü‘›#9Û[ã=lÿ ¶1D^ÜˆÀ½á´\rª\rpâ‡2íN¿ÏŠ&{ÕÃüKfÿÏ³î±+•†\'-ß†~uğFOh…Gİ=ç(q,¯0î)iÖ\rbÄ£…·ö˜[”O¶×ºEÿ¼hŞß6\ns;è¼xômïÿo;\nÃl8ºÌıˆ¦ıx¢“i}nÌ½€IŠ0 ¨l}&\0ë›ñëÚ2~?n\0`æìN^Š.­V!K~ğõe ÚØ˜¢ZVƒê|BU5Ğ¬!”DF¶›-¶ÛíH¡¨ë\nÏÏ/8jß[ü±=á5~ºiğËm_nr|½‘øùVáËL /%êLâY•x¯JT2‡’\nÛ\\b“™€’J0@˜˜ä›\'šWÓ/ç§º…„L\0…DÓõÆn©Á¡™Á¼×ÏoŒéî2\r/÷¦™^×^ÜÙô<y¤JÍÒ‰óš8ddW#÷×ÔG{Èk¸†\rv¯xüÅ/m¾À¸ÂŞMö4ÂÈ­ğyğØµ}ã0¡Üï÷G\ZÎg®¡J1rØäH›ó=Ö/ië)­ù=d<Îf3bGslH ó¬²úäŠ  Pñå\Z,%’/Y]³h™¹á¹5UÆö²\r¤@tĞéV\"»æNÈ\\@û®B¢İşX˜õ¬nWGe•ñÚıÌ@‚]òÕ<(bp‡ú=Å8K0sÊ¬M!s#¼„NÕ’=(µ€å59o³\"¨3‡ÍŠú<2ü™¬ÿµ@ÃsM¥Qëúüõ•îS%Ë6âN”É/±DÕ­~t\0a\03®¢÷»À°/ùÓiËL\0	Ñœ[vŒON0l)†-¬0³ÌÄî_Ûj	Ñ=]ñøñ=NuÓ£”šM¦Àº@ç(‹¬™PØÖZ0H(h¾«	^4ş¹nğåIã×-áosàW;…í¦D^lğ Jh™AJ\\…È”„”¢çä› £û¡m»¨K÷Q5\Z/Uƒ\\	”aSH¨>È®- â—LÖuk2æÄ¨…ÜG©ŒèCÑL“ík¼È•<WšË¶qÎIGyÁÅr5v¿ç.$}ê‹8øjÅø¶+­yÕ.»X˜Î ±¥\'ô3¢&Ÿgÿöİ/D[CºÜÈ± ìïÄ\\´‘\rFq\'=MıB!ídCeÊ¤¨ŞJ\Zş=o9w\0®÷¤Œ5A«÷¬µÂCŞÏÀ%D9\\YÜùºëv8ò¦¾Â›lœmNÑöÅ`‹»¯¬U¼fşÚ…/	WãÌöïqÄ˜û\'Ñscï¹óˆc±ã8çLDàaiÏä„¹cRX]‹s2½ÈrÚØ…píÈ!±Ç+wñ{CPäJÁƒyöetÁñú\nãP›Î83´ÖĞ¬Ñ¶]¹5ËPœÆ1\0ã­AIæ•\0ÆÛ`0¯±½?‹ì\0\0 \0IDATwá´Šù:\033ÒSŒx ªhæ˜¤ş	QÈ¦İq\r€ñZ©‘;OÛ\0¦‹rt)â’-3ê¦Áóá/§3”Êº\"—RA\n‰,ëô¥B Ìs(%‘åy_ V>ä%ş˜m!³²²»>Ë©.ê¢äDa¥ñÓšÑê¸œª‡ªÁáÜâ‡çç\Z›Bâ~£ğ°ÍŒÚ²H™@’ÊÜK(ÓÌ³¥Moş Ì\0	Ó»Ü\Zk`ÊÔÎÊíH¢!CÂç©ä$ë(í½Üoæ?éÌïµE&z%$Çºy%A#ñÃ‘¶™8î­\\–ì\rš5UÀ/Sêuäîû=ôd×#!ÄëqØÛ$9Æ£1–´\0¨M%>>àÇÎZL:™Ù^ph±\'Ê\'ğàSQ\"çÑ‰œëˆœ|òøá(BÑ^¯4¶”Èî{ÿò=b6$AªÍÉYÁq¹&ê’òğŞÇXGŸÚ¸trÌx.½a´ì‚ò˜æ‚LL(X·ı_²—™¶•ã¤¦WşØ§˜h¶oH¶ê¶A[U}$Æºø*Ğ`ë°Ks\r€¹´Ğ£™À?ÎXy¿¹\n™ïY—Úãë›Ke‡qAÿÄÌ*²¹k$”eŒÕoö+ë\n®ôy%$ZP‰i[032©!¤‚P\nMÛvÊbR¢mZH)©w›E–#—¹\"äy†</°İ–Èö%ª²@•çÈ3¥rIPCÒ¾ ß:‚f Ñ@ÓuTÆ±jğtªñt¬;SÕØ7\n‡‡M«aÖuÑ<ErÌú*ìpŠ}r &Õd$ÃS¶Ï#°Š+ÒĞfr\"&>·•¯úxÜÀ³©a!£ÜV[/ûie÷T]s0%G)B9‹q{IòÂ\r)¯ eæ29|’KÇhÙ³oÏk1Æ$İÔ@¦e\0“âöM\n°+¼¶?9<}b§ÜEÑLš—=}Ç¼E‰À”K¤’Cc|XÂEKq½„=Ö88>Í:Ko×5{Çx¼µª2\'ÎñO^¡eô\0ğâ–şúºaŸ÷õb˜õiÛMSêd®÷;E\n×C!ûœ\0FkO‹Isâu\0ä\Z²YTb‰^—\ZÑ1urOâšNi‹õ\'ıé\0ÌÌmèF\0»{½Ùd1IÔu»íwwoğÒ0š¶FİÏ+¥5Îuƒ¶í\nV*¥ºè	Käº…„ı¦ÀÃ®ÄÃ¦ÀÃ®À¾ÈQæ\nE!°ÉÊL È$„$„³¡ë`hîd’Û–;£;*YÕ0ÎÆ¹jqª›î_Õ@	 ntŸ×CĞ˜ògl:’=ô\"Å4á‰†2Üz ØÂDõl¨µÁ†\\pÈ€Y’9/{N°Î9j¥/ö²ãÙ´´½ÈlyÌÌ\"}áÈCúŸjœc±W,Ğ”r¶Ÿ•\0Œ+;ëëÇ5²©1ºI²b †QAÉd(¡¶‚w.ğ$Oç0ÕÌÄˆâ}rÙ)Nêó†wã²Tëİğg\rWRh=‘a¢¸\\²Ao¡HŸ1Íç,	u\n€@8ñîÉæúŞÿ¼k@khı¹›EJß,Ó|6“ëj>2ÍiEˆG‘×äB¬ÙK¬scZe–¡Í‰}JtÔT)|v7hFº›-{æ°5}bëŒŒ>0¾ì& ƒŒ¹‘í}}\ZdŞ1W4´nÑ6ÍøO%åŠ,ÕòĞ·ˆÀ¬¬0Ã{+\"ä|kŒ·LHByÁ¸s­Ø `XŸ³`RÈ¬öèğ3-/…l^ıúİ¶@!\0)$v`ïvøë»;ÈºÅc]£! “şÊ!;]ñ>yS\n	)Š<Çİvƒ¯îwx{·Áı6Çı&Ã¶P(3…<ë\"/]´‡f®o­»Ã»Õ@«5š†Ñ´\Zµf4mÿs«QÕ-Îu\'8PàMF(µ@&¢Ú´šÇä·¶Â²2QìwÓ€ªX³•\'l–îu@Éï½¶¤p9Õët}ÄO[ZlÁ\0·OìBu.İ-Í»¸ö™‚Æ€oÅyr4{&³åõQ7©ıRÃ*™ïoıÂŸî”ƒY÷§Bú8BF„š½Õ7f¹\"¦ä§ÙäSîcÃÁcø±oíÑr[ ıY5ZÿÔÈ_µªÃ8}˜Ğİv¦ÌÁe†{Lş;eİ.‡)çˆG¡Ñ&b‡Ôª2º–\0Ø\"ˆö\ZØd-± 2`\0œ\\µe{Ü9ĞZ^µ¢í?ÄˆÉ8)iíNO–br~Ö(á¿IÓÙKƒãxˆÂÔuƒsUêÄ¸€!9Âà3¨1YOƒÁ¸<‰ß0	e¯8AbËµ€*–çq)=n1:…a\0fM¿_wI!—„2“Pe†f[ Úøå)ÃğQH<ĞHRªS+S9Ê<ÇnS`Sdx{·ÃÏŞîñÕÃovE_ïE¢Ìr%)Ñ×za\'÷cÄ¤å°TM‹SÕâ\\·piuÓ¢i4ª¦E£[h­QpE\Z;	h\"Èşí\0`°À¬7NÍˆqHæÒˆLb=99.Ÿæµ¼ñ›`öÚšëŒ›çËÿ}}EÆÖ\0î–é“Œş5	ı¦š\\Ğ\0Kõ¼¯[3!ğ’ú]Ÿ|Ú§¥Á­Š8¤\0™K×:!<–Ô\\¼ØâÖdZ¿?hÇŸÑ[_O®Ã³ëÎr7\\\r`|óÉ©k¯/;ú6*’qG%«kÔumÖ‰Áí\0Œkğ®TÙºÀèEÀ`ÑÇ.0t{\0ƒ•\0A\0cx¹£êmPº‘oú\0¦ÿî§\Zm& AÈø*(àT´x\Zï•Â7PøAd8©u‘Cì¶[¼»ßáaWâí¾ûw¿É±+T^2\\u²É‚L[÷õ-wQ“¶íN­UÛå¼N5çUjªºEU787\Z­n!¡qYUC´dnué)2Š	|ÓCÇTİq|¼•Ê³?S@÷şÖÇaH¢xn¨Lí¹”Ş`z¶‰ÒÔwü—II\' _–ï¬Wgùc*dğ.EŠb÷Š)š]#ÏzÕüæ¹ÓŠzîúèAŸÑ6yf–¤$a›Ei‡ócôÆš×™²i^Å l%’ÖX¨Z{LÜ\\P³áô®^¿Q‚B<iëš9r™ü/å¿i¤×:êŠV©˜4“5´G¥FF/Æ>ºÎ¼ …‹Å:âë{!Oˆ–#=i¹dßØ¼/ù#e!ÂK!Ì`L“ïæ¯¯›Ô!·×œZ·hÛ¦Ë}—Âº€AÀ¸F®WOe	À\0Ş\"–©\0	J³ÇR{ôP%â†³$SÚÊŸÿãÀx\0€x=›Kä·İ\nŒ+\0Œñß?ñ”IlkÑ6hE…·ù	¿Î5²M÷ªÄûbƒE‰Š§rµÙãÍ~ƒ‡m»2Ã¶Ì°Ée\\zµ1)D—w2pãûèó”çÒ6º0C¦ÁË©Á¡jP·\ZM«Qõ¹/Ï§\Z/§3ªêÕÔ@UC0a¿ß\"¿/ñe³õ4.…Çlj ÇÜ©¸K•dC²’½ S!\Zá|Šv|ñ¶äã¾ÇÖş’¢™ßğ¿•néÀfN¹~É§g\ZÚÓïf½ K\r’šMœø~¿Ôó¢.İÓkàDRğl9eX®á>Zë¤öLõDæßç8ör^tÒ¿®­)fW†OËñKµsÛ–ñÙ˜ÏMeãgG.q]	]Êï2#\ZZëÀú³BÂæŞÂVî…k¤ÉO\rĞ†f›‹AZ-4°(˜ä@À5rÓ)ß¥y8ß>GÆv\nµáĞUûâëka|È¦˜s/ÅÏ¬ÑÚ‰ıÃÚg„\'E`h93\Z¹	Ù&ääÀXO\00& ²Úœ@]Y”\n^Aóo‘L„\rı`ÍG…ÌR¦E§=kÿ\\‰Š-ğì­ªÑh5Ğp\rbÆñÜà-ñ 7ø:şêa‡/÷{|¹»Ãq»ÇŸŠ-ù(Jl‹Û\\¢Ì$ŠLNjcN±HÆDÓ-ĞhªÕ¨¦Ñ87\ZUÛ¢j5ÎµÆáTãT7hû\"œM¥9œ+¼zÁ‡§gœ«\nÕ¹‚\0ğîtÆİ»~vºk	Ñ›ıûõBì\nLû¹|i%èÄ\ZÅÚğ~·1—¸1]™ë7|×¨å×Ì¿·Ï\Zit)ŞÌÛH»FĞ\0“âÅLy–A˜çÜĞ»:cÎSXÚÅPÙ,\Z¹Ğ^£²_ˆ$›ô¯º—í´¯Ï½°Î“¯~3¢Şó\0¶*`¨àáÌÈõ²¤ÉxfÀj¿XF“Õæ–eÀ×F:ÌµgJG„Î‘N¼lo¾t˜×œè@ºEß/¿fõ OÈ \0™CQ˜›äö\'Ì7ß7.»ò^_Ë}ÙÇMI@Ğt8© !ê3¢“l\0C!Ãxe¥ú €¡4\0ã­ƒô<š¨Ä4li¨K$”­•·À?ÖÀYÈ	ÑãV^Ù7€!ÑZnÌÌòĞ½†{ëïRt‡b«»œ“ïjÆÿ£7ø¦T8Üíğ×o·x{‡Íî_;<¨¤”$dR “ÔÕq¼6C³[îê¼4Fİ0NM‹ó@ës]ª¦1UÃ8õ F÷¹-M«q<×8œÎx>ññåˆ—ªÆ±ª@`Ôüùù/§3šVC\niê™yËpÇXW¯2X1v½ïš>:CaƒÏ\0dbÂ‡>Ï¬Y•;uƒ$#¹Û²>¾Œ¹\"4Áq–Üæ\0OAïî\rU•ÖÔ¤YbvB¶¹Ód’¢êI¢™¬³Wlg{éT±,\ZrM€„çP7(y–rJßÛ )˜Jí¼w=…lmÎÏRQ×è3z‹‚Ûä2¹À¬2ìQé2Jp.šÍKÖëi¡N	Ñ+DDæ#Á£(‡yı„\0&´^ü»‹y¥Oå²û·…aˆ$ÄğO\nH)\r3Uà»<Æ4R\03´fEfI…Ì÷^à^´˜ÿ‚DĞ,«¥\nP@ı\r—˜8»€Yx£ıÄŒ²Ìp·-Q[|x|”Œ<›‘×#ìwrÕüB ¹”ÙGÚàû²Ä?oöhËo‹\rvY‰B(2…Br) % H8›èÄo{ÚXÓê¾X¥ÆáÜà¥jp\Z’÷›uÓâÜhÔM‹ã©ÂñTáÜ4hÚî½ªjp¬jÎg0k”’ Š¢{© [FÕv‰ÿËN,@w5·uô2S^ZMõ¸{ÏƒÖ0Šó¥…°—é@ä÷qÅÔ—.õœS¤„ÆùÈXÔÄWnšÖæõÂcÔ…ğ]ôœK¨k¾Z@²Ï­œk(c1 ’š_t‰yéõËŞØ93 š{±2\'c\0¾:R„…—œcT…”§HnHî=5«™É“†<7î½À-¨e;.Ì]È”È6-±B•·[>§F°ÍH¢^ş›g²klu÷3ˆ¯^œ®.aÍ$áÔ„$‰üØ~p‹|· /ƒ“î±°Ìq2›şrB-æM%Ú[×Îù7…aúZ}Ä$BH(•!Ër¨8é\0S KJR}ß§0}F9ÔN¹\ZÀ$$ğƒ{7-\0Œç~·0ÖØ\Z\0L3øpÂßıû¯ñøtÀo¾û3 D\Z€!ÿNEdBBåïî¶øõOß¢ÑÀİ¦Äo÷Øìä›y¡º¼)It¹/d?â`œ·è©`­îò_šÄÔ-Ï5O5UÓÉ\'7\rÎuƒÓ¹ÁátÆÓáˆçÃ‡ÓUU¡išNşŒºmÑ¶\ZJ)äY•e(òBÉNñLó˜3ÏƒôàĞµUÒÀ<ïêõMİ>úØcÀ˜s{Éïã¯Š4úVÒ6Öä!ï§O9V×%TÌ®³˜.óà/{Wuk=éÀÓq:d!‡ã\ZIå5ôªĞç(\r}^nL‘[Ö`İ;Êƒl¹\"¨·®»œ¢²®“´œ‰î6¯ø=äÈEid˜\ZËw²aÇ+Ì××ı1òéì\'’x¥Ñ|‰Ì¹o>Çj$Í›>òm–ü`\nï‰¡iMD«Úø‰œÔv„ÂÚ.ÜÃÏÀ±KÁV48?v6¯šaŠp \'(L/»¡U½z¿{¾\\d„è\"0R)ˆLõ‰ı|¥\nÙ-È–>sS\0“@g³„\nôºP˜¥g[•ÿ¡osO“L,’t	€1Û¢¢iñwÿáßáéPá~B\rxıİ¨’c¸1 B WJÊ\\¢P’Û\"ÃİnƒmÑ%í—™@¡º¨ ‚è+2Sßd# Cô¥iõø{Õt9/UÓB75DSC4\Zºê¢/ï_Nøáéïñ|xÁé\\£©+hİ‚Rt\\fyŞµ_ZMhÚÖ`\rá¹4öM`†<›\'õŞÄ‰Bã\Z)+„3Ÿ\nº¿~ÛÚ•ÇÃšj—qÕÓh\"6íâÖÿ5Öu^ò²İå@0„,ª–T(qÌûáj×iªzŞÀùïâ0ÓE&¦UysëŠ-å.qÿÜæšÛ/ÓjoÊÆg0‡/7¢ÙZ4—Ô·Ò“\"c]òşûl\"‰í¥3ÇŒi‡ĞeÄÈDÌ¯èåF=JÔEaDbT–CÙ¤½k)dK\0qøoîå(V·½k#0³K|Fÿ\nE³køÙ—À£ÆA$Úe%SpäY.0Ü;	›²ÀO~öÿğŸÿ/OG Pé\0†goJ\"SSr¾Àı&‡’›\\bÛƒ\Z%	BtueL‰Ş.iŸ¡Ğm‹†ç†qª\ZTMW¤²íÿÕšQi†n[ì¸Æ\Zf¼o5«\ZÏ/G|ÿá#~øø‡ãÁj3q\'\Z¡ÛºmĞÔªº‚:eØäïsœNg´=Øì+–\rf&è¶ãòâ1­§èÙT·£‰—?LôB_f¦/„Kr°¾v¤â¾=…y½×7.\r\ZŠä¸IÊvQÌ(pS9ÌÊöÆù7;˜g_ûrfÎ‘~_#MÆz»%€aË™D†¸C+±:å²„$j÷3ÄiÇá&­s€ÎCA|Çc’].ÌÜ}9kĞßG*É;ö®\\¬ƒ‡æûÙ`‘œ¸ÛQ^ØÈ>Jˆ“|&©Q%Ÿ¨À| í¼\'šM¤D­UK\\·Îö#ƒËé>”õX³6CûĞœ;ÙåV\05#2®\0Í4~dºO‰fÊ’rô^ÊW¥²›ô7\rÑ•AeÔTÎ›çR*×`Ù N0¦lñ\nIfšµ\'±Œå\Z\'/h˜œDE³XáÛPKÌä?\0­0	ÏCÌ j ¤Àÿ÷…?~÷‡SÈÔ¼h\ZÀzWd(r‰2S£Â@’õy/ÊLÚ·nÇhu—÷ÒhFÓ\'çë/ÇÇªÁ¹nÑ´]îK­»ˆÖ5Ş4\'”uƒsC8µ6BâM–ƒ6l%á¬§|(ÂTW\0÷Q—út„~~ÂG]ã«­Àó×_¢mµÍ_80Fï\Z¹ÁÔK¢§ô1ÛTJ0¬SAÄ’ñ‹:]–ğËYzÒîc¯\ròxgıßÃ—i²óaæË…lwÔbDe©B\0(FÓYR¸7„+“„B9Ì˜o{øØ°¾Wçú,È‡sÂ¼šîme\"0üîµ\0bv@“_\0‘™ò¸ÏÀû2±=A~ø:‹*Ãœa\n’æÖúšœ®h4”ÜùÌ8Şrt/`Bã³47c÷ùch˜C&¼aŠ¯]¤R]S¤˜¤ËU…eçÿErM¼ıÌå{}İªÏ»ü\\	\"ÙåÆÌŒÖY“\0ƒyŒå*H ¹y†‘>O¨G:€™ETê¶Ì(b¡÷×\n¬P…ŠX\ZŒ¥|£«\0ÅŸÅÛ–!\0üôÍı‹/ñüÃ?¢Ö-ûê©\\Ìqºßf(r…\\u5^2I}¢~Oÿ‡ü’®²kWë¥i\'ªØÿÏŞ{GYvİu¾Ÿ}ÒM•«º«:«[­VN–dÙ²,cccpæa–Éy†Ço`fŞz<æx¬Yó€Ç<`HƒÁÆÆÆØÂ6X¶lË²¬Ğ\n–:¨ƒ:wWu¥NÜûıqn8ù[]M0ºki©«êŞs÷Ùgïßş}áûu½\0Ûè¸>km—V—eÌóeH«ìø¾‡éµY²[X‡‡IG«b£3¡ëLNŒãÕ*´<—UÏÇ|!ğ¤Äq=š­-MC	…”ßğl‡v»íØ]Š‰/câT,J©P²ÇÒ”0¦\"+§ bNÊf\njæE7£4AlBOE™÷å;e[•xÿˆ¥‘ö5ğSoÉ²jÄgTäĞ‘ó£ÚmË™Jp‹\"‡nÃ Ñ|Áœªë$É<¦RW±ÜFñsV*ÿ,+&[Öı+ºÅÉt¼ú\n(„¯ì™–/¡…¿¹ú®ò•lô\0Lj¤±´îhöc#gA±µØäùÊò#_~}İ˜fW¯PE)–E6È0\0£6Ö“ù]’â†ù!¯hL÷çÒ=0¹€‰!ãÙH	Ù°ùÀäåïÀ(…°]vï˜ãî;÷ó©‡Ÿ¦#ĞõŒG&Cb‚d†>“Q-|MÖ-Ìn¹˜©kèİ~—ş²L—ì\Z|)%~\nT:^€ãI/Àö$¶çÓ¶]ÖÚkm‡¶‚‰ÄñÚííÕEÜÕ¤ë!¬:fmŒ±Z™ŠÅ|ÅÂ0uÚ¾Åjàãé:R7´—EËbÉ4ğ»ûÃ6+´Í0ûãC1BÊ;GPN%2.±^šˆ¢q„ˆ¶W:¢(WòK:Ã›	(ş>\0Ëp@–u«‡4øˆşsˆªaËøÓjóô\\5¢Øèp 3ÀˆÄ¿U, “^¢e²eµ´#?p¼…ˆÚÂÑÖ‹\ZÂ,V|%÷Q‘;,D\'8¤P™UqQ0Ğ£¡ÏŸÛ2=jˆŠäceW1ŠõŒ-Ò *UÈ$æ%	âó”ì7’¡İ+ù¾ÀU\0\\£˜¢@D/{%3é±Ç2_JlÚ}¤ŸmºÜ@‡g·TI0úòëëæ¥B±b¨Àï6ö1z¦ˆ…,\'ú”yM‘Ó|¬òê¯Rÿ\'}CÙ¥h™\\jn‡Ğ(_)€éaAQ¶¦`<ÃÊñEm¼ÆäÜ$¶/YºpÆjéµÇ@–Ù«4xUML]‹ô»Ä—HˆÎ²«%(…ï)\\?Àö:n€ív30^€íø´l‡Õv‡åõëmÇó@ÏXk¶¸xñËK—p]—j­A½1ÎxµÊ¤¡sÎ4¨h:º®S©Vo0Qµ¨U«ØAÀ¤iĞ0Ü @j\Zvcœõz‰©q¬J=,=ëdEû‡õ‘¨ä!Á@<æ_¥g\"€Ê8ø£8 \nÅyZ€2ìzYl8£ZØèsˆGÂ3€O‘ãéU%ıX_FL\0>û~4‘.ø15	T\"Ã7èß‰§fâ™ÑÒë)£)yˆ€Ká\\EIÏRö½À‰î‚ËX)‹Aà$µ»ÈŒåõ€E,~­²r2i`7§Å}0±¨}Ä˜Æµw\" <ro½ÌoŸˆè|ª\rd-buhÅéÏâò½ÑíQtkŠ¶Òï‘)ŠöŞ\\eu¯<û8\n9…\Z¸q\"ÒÍ-Yñ‚¹°t±8+=*£]ìşEN´F$&?ÔEYs‰°d‹K¾h¾®ò1áó•’ÀI•Œ«˜Ì>ì’ı*›ÅBcKôA¤úMŠˆÈÕÀdÔ~\ZUĞT*ƒ#sz`\"ÎN€é¿=ÜÈt¤¤€)ÒœY^ç×ŞÆ\r×íàÏ?ö¨WF0™ã¼±fêèzüx•jP6Ö«Bzc/P¸İÌKÇóiÙm7èVvfÇa¥ÙáÒê\Z—W×i·í.}±¢ã8,¯®²º¾ï{ø¤®ã>«JqAhèB`ê:õJ…YÛf«ë13Ö@h\Z5»ªuL]Ó ø\\ªZLŒU0t“@T\n¡D7!ª\"¾æ°hbŠUh\ZsÕ×w¸R°1*EïU1c#h¥dœ¢Cº,êQäwRJô»%ìnŠéU•g•¦FûEœÇJtZ\"¶&é÷Z‰äXÅ@ ´¿>ûDYÔßªğ¹ô@wö>ˆdb¢š$%Ş<çRÅæJ•8B£Ó(†ê`æ;cQ)]®Q”P \\ïYî#™YA6Ûœˆí¦ÜQAn¥ ¯Z‘nêW*îXoâÅ‘/kßŠìlš~&¿w˜-\Z…|`S˜Áb®Æ`o\'³™£Ú×²‘IlO´èƒÇh{Xq–)òŒU–è­øGÅsM_U›Ä”R\"¥$²[N–ÕŸå®°D*ÀÈ´“-F¨§Ìÿ0\0&}ºüã0™5£óS$šÙ•Ë1Ún»c?[·NqğğK4Wš0=”.`baãØ0z¬cIÅzÙ/ı¾—°÷Åó:ÄîR%·\\Ÿãã\n?ğ±=Ÿ–ã²ŞqXm¶Y^[c}½Ùø¸Nd€†B(øxBà(hªAY–Ñé°ây¬:SÍ¦¦Q×M¦Ì\nÕ\nÕZ…Jb˜:šR•Ê”s¥ŠÁ¼ªRê\r0ÿ¬ãB¥ûiòu-HjşlÈ§‰EØÙ“ìR\"!@#Ì|\n!úúG*—aG@R÷DlĞ!qvA©ró›°Un¸„mßÀÁ[öDÁ3,ë,×²çsÊÅpˆ;Ú—o¤gcC%Päõy«mok˜¿ÒR8İë	:cA´V¥‚WÃ.&ûéÒu:Š˜XÏæC‘¾f¿Üß·£ÛËèesæ…T²b”T=ŠåŒS·ÀÄB½W\n`òşVâÉ+çO†¿çL\0Üò\0L…ræ)7$“2óñˆ\ZJbX&·ŞyWxâ±C0ÑÀ”c›ë³ìt›@‚‡mZR\0\0 \0IDAT\'»\Z/ÄõU÷g…ï‡½-nWt2¨¥Ìõ:OÇõğ}%¤ü ‹î=¤Ğ!CC\Z.º®c™šĞ2$\0ğ¤Çšëâµ4.ul’ºa2Ûh°MÌi k:B†ë[É /h§‰¼MªA,<8+ÒZšelHCÿ¨l_Ã#oQÎ’¢jeXr®¶ƒS”5È÷È\"t¢QØ¨¹-!íw2¨o“#I:gZæ÷ôº¥Ò”³ğjÔ\n­ø~„HÆÏK7ûgıH‰’2´NªGâ¡Å8\n=kæû…Hô¨\\§(Zzûyˆ£­2ú+†õH‰Œv&¡¬ŠÛîhVZ‘kBà*ïKøI0,ºgBÊíQ1+²xúá•X]×`Ë°]éz‘R¤,:zÑğŒVÒ—!º‚@Ñ(\"”ıµ˜Q\Zšî·cOT”/\\döT~U	4kú]}@Šúi±1¥gKªÜğerEA§>l¿\nGõ(–)vÀ³JÈúQz…ö8—•+ÀPx-!DN	™*`(0\\A	ê¶$* §&	`(0	-‹üş!§oL\'‘¦íÎ¿á8¼òşÛ±—c\'Î£¤CQFi\03ü0P(G%a)–ç+lOâø>~àø’@†ó‰ô,¥0µĞ[GÑôÚ¤åú´}	˜V…Z­\n_z^¨#ãë@×äm£‰îûhºAà{Í0A«!L‹ ğX\r\\Zë«ÇV? ^©â:\r¡c{>2ÙÉ„Ö›kZ¤–=ZŞ¯²”‚ZJuµü+1êÃÆcO*Ğ;ÙlÇaØø³Ï³sÃƒøiÇ¡Ğ¹–ke=	â{¿³SsßÎB k‚Š!xøé£|ğóS±Şzï<pÛ\rØ®—yCJ$•«i2ì9¬µÚ?{ƒ/¾ÄÅÕuöláU7^ËüÌ¦aÄ¨‚óÖQ™o‘û¼E¤,*Ñï“á„Å-ê@›)FÚ«Fßo?Y¤Õ¼Á:ŠÁ¥R¥fyA<¡\"ò‡$˜Aè Š‹ê/îHA\ZÍ¹rE³œşÈ\n)ÆD\ZâÌ§£dÊTùõYÂ¦ÇYæòç<n3‡S-jßËÙä„}L´Çô~§Ë¬£`fØŞéÓ­GŸgŒ³\"\"\08J¼.ş©\0˜äšÓtÃ0¢ìd*ßS*ÃP`T€‘Ã30y€DŒÀ\Z–RFmâ/İT\0`\n\0ÏH˜d‡íPË‚²¬lVô»‚€‰F•·>p;ûø—8öü	˜šØt\0FfCƒ‚ğ¥ÄqZíx~€ãø2|JRQ’ºTQh¾ò_Ò’Šª¦1nš˜Õ°²7š  [oé8¶ÓÁ±;¸v§{`h(ÙÕq|§ƒ@á[Uc†®:N@Ó¶éx¶”Ô+5)™U:/eJ(1šeQ‰–£^”-Ó!ü‡,ñWv ~‰¬áf‚—”¡\'°`cnÀèÀ¢‘’Sì{WenK¡Ğ„@àº÷ÄüÕ—òÅg_Ä4\rnÛ·S×±ñŠ‚¼ñõ:€Ñº‘ÿõv›NåÄ¹‹(Ğ¨V˜hÔ¨YÍv“zµFÅªl.ˆUÙj ©{Si6ë€7í—ÛYemÙV:©|~µ·wyÛR†/O$ÆNê‰dßÛf—±f^/— jŒ#àtƒtÅ›}/%!IĞWlz9YV“—ƒÀxTÕ•c{ë²Lèv£Õ^ê*>£—_EûHCÓtt3\nbi|hÿ(€!çıEà¦ÀwºËŒ\'¦ &®2€67ª gD\0#òØİŠ\0\0&#›%#«í2]1ø‘ïÿ>ñğS<}ô4~ÅŠ¯—+0*FßêÉ0ËâK…”aßKÛñXïxtœP¼Òñ|l¿[ƒbB“\"@nË\'pÁT‚qM£b™Ì\Z:mËdÙ2C±LMC	Ğ4-¤E¶šíÍV“Ué³Rây.Òwñ…À÷<»ƒc·©XÓÀ:®TxN›ßgİ´@Ó±ŒIlÏ3ER¡z½1½‘oZÔ£BäFŞŠœâ²¬^y°>¨Š>ÁHí|”\"xÓÈaBŒF×Ê™2e:©û|WÙy,¯\r’Šùg™QV´¢ÈmÔ$G›ôEôD³+%OY¥Bª¼ãpäôŞÿ9µ¸Ì]×íay½ƒ¡ëÅ—Qq\'¶Àä±)%Y]_çÄùKxâ[^u;[¦g™¨Uñ=—¯:Êäø;¶Ì¨`Ãâ©™ó«‚»½,DµôÑâ³\"&@™ïc_w1ŠæœıœrËbâòi¥Ÿ5ã9êŞ*ÎvE#ê\"3ŒZ‘	`FaÅÚ0½²RÙ[5ÒÌ£úÍ?¢ocß£t½rÊù2ŸOÚ†\"Û˜ıûï¡®p•qó³¬¥á>Ï¯Ş^$Qˆ-£ÑÒüøğ¢ìzbä;Ë¶we—_~\r™_•¶)BhhB ë\ZJ±Ë,\nå$sNï=¡º`şCŠ8ËX”+4ÀÙÄZ¢ßĞKJKoøAÂ`%b]%t³\0Àˆaš6\"3jÕo¬í¿%.ğ©Tœi¢_›0‰Tm*Ó”oAdÑ‹‰b« Àªì¾fS³<ø\"Í¦\rµğy–0Ãz‹÷äú2­ì‚×—´]Ÿ¦ãÓq<_Ò²Ú®ë‡ÍøË‡æº¶‹ïXšÎX¥‚aZLWM,K§©	¦,‹-•*«õ:>\n_€#ÍG¥RA7L4ÃÂĞuLÃ@à¸v§M«¹Fk}%íVT*•°¯Æ÷pì6v4Ëªã×»`L„ı9ª7e¡Phÿ@ÒD,¢®èi$ªQ9Qn¥ìS%k!u¨©]ÖÓ‰µ”§ö>Ìx‰¬÷Ç¥ıïht¦ÃÊñ6«/h¸ÏÔë›1’—èMÈû|mt¼\n…¦‡å“O}‰_şÓ³´Şâ÷İÁ;^}ğéG¶°\0¢©!ß-UJ¾€l›áÍ÷L ”`¼^A)í¬·]:v†»»Âlë{+å˜]£òÑ(qt\röz%âT€ıù*ÒRRs•\\óy9ì9fvUA~ Íœ•U\"YÖß*\Z½9ˆE×#´ÖÑó9–Uìw‰ò®«ÒŸpD*Ğ1(GŠêşôG&´í’Í±EŸ/SZ—E,ÑU+qÈ‡Û¿Ñú‘è;§únrô±TÆ\Z-”ÿÈ\\‰`Y¤|Q b®×F³0bÈ~N¾S¤\r÷ò‹h€HÄ}\ZM×1LMˆÅ21ç=ÓAï½.®Àz«B´¸UÍ¢Ö‚ Ô™l@Õë‚Ji¦t_-ua¹û¹(À*‘	\n˜ŸFL4ú6¨l\'[àû¨ÕÔ,ÌF\r?yj–0\"sÕ+¥ÀvQÕ\n¢fAà\'\0ÌÀà\r”¯`iÖZam•Ö\rËe\0˜n~ÿgÙ¡Ûfãu”ç“3$ÍZ“í{·ñãßûÍüöï~œ¦íBÕ¿c3\0Lÿ½ƒ…éx²[*6ÈÄx^H£ìúaL³ã³ÒjÓr\\„RHßÃw=\\×Ã÷tPEQµªL×«ŒU-MC7LªºÎx­Šfh¸BĞ”ŠVU2]«°V­°R­†s¦ë€íº8µ\Z•JÓ°ğ<¡iãàû®cã{JI4] Dhø{Z6aãì`\rJ¥2nğ£®–Èğ•†y1ÚæaM¡7êÅaD‘+3Ô±ºõ¤#‘¸x®#Ğw*ƒÔB¥¢=åéCó\ZÀãÏ_ãñGQşøLEûJEíËÄS<~è8~ø1xáïxàŞpÇ4ª»·Î0ÕË!‹›Bª2 UÓb®RDHØ¡BÍ\'Ç÷9ræ\"ÓãèšÈ-7ÊZ¥½5Ä	N=*×ÿÉÑ™¶–\n#ÔC„6£s—~ŸŠíæ¬£<OçéĞ¨‘÷HÌáÍ‘MÙ’ß¤®2«Sa#ùS·9)I`&j22æ\"ÿÊd•¯TürX &‹ÉkX@¢([\\$ügz;u%î\\ùw*{\ZªàşF³Ä/¿şŞ²0™k1¬–Ñu%ÃŒ‘ï¡P^oóæ×İÊ»·`z—.6ü:M×h¶šÍ6®ô7¾’ŠÉF•§O^àÙ—.Òv¼	ÁĞr´@‚”ìŞµ…w¼çê–ı÷‡˜#`qy‰‰µŠîÒ„ ^µøèÃOsğØ9°„N\\X«—]’µÚ† àîW\\‡¯Ïö\ZÖ5m ]*“ñ`<Ÿ±šÅî=;¾äÄáÓ´.µ[§À—	\0Ó@9.c–Å]ÜÁíû¶Ó¨˜8n€Ğ4üÀgmµE§c#å@´TR¢jBcj²ÁÄD=¤£S`:®/ùøÃOqøøÙM,ÇÄw¶BkvØ½co|ííœ8·È“O…‰:˜F˜V`\0LŠ[Iáx’@†:0\nº:0]½ÛÇõËÍ6‹«ë4m»Ë¦ğƒnÿŠïã´[¸6Õj•‰j•zÅDh:uËd¦b1_­0^«¢›&Â07ªbâÖ*´ê5:JÑ”’UßÇ4-*¦…©‡5A i!ƒ’mÛ( ë\Z˜fHÃl˜X–Ù}¯Ä÷d¢\'&­öÈˆ,,ÒŒ]6£‘u°e‘ZGK“Fa·-ÕÊó¦†{±à#0²öÀW6\ZZŞù(dFÿÎQ›~óş®k\ZRIÎ/-ó‰/?Égxñ‰1¾õÕw°g~\'çÀÎyvÎMáÁÔ†i¯ˆ¾©¤[Mº&JrâÂ\"ûw. ëÙ«LˆTçûÚK%ÇŸùHEúØÃ?êb)ê¾‰öm‰2zÓC±ŸÚĞzM\nqf*9u?¯Œ	¬ûb²´.Û²©<F‡İtr…*†—™eíï|úö| X6¥a«¨rR§§ô>.S>œ\\I™[%1_	M\'1ÒóÍß‹¢Ì¡v¸¸\n×şz.™Ù­ÄDö€Œ¦k€Ş¥XîK¹Êlšå¨ãa»Üp`;¯å\rÔª¾ô¿Üw}fç&˜›À2Ø&®W,:rŠ_ùÿ>Áç>ó$Áôxˆ@Ôp2¤bffŒ¸•©FÇõú‘H?¨X×îİÆù³K¬¬µ†Ö/ÄÑ„Æôä>ÍÁC§Ào<vº†r=hu˜opÏİ×óêÛ÷ñ…Çá»>tË-6^B¦ú÷\"|ÉÎ¹)^qË>NìçÁÏ|••¥µ0K=‡ÿ$M°ÿN^÷º;˜«Ó¶_Ò¨Zì¿n\'º¦ãùAüğÇvyéÔ–.¯255N %ÕŠEÇvùÊ³/rø¹N˜S‰LVé~ ÷Şs#·ŞºÿøKfÖ-}:¥œÆ!q”\\¢…ğgÇºY˜Ğá	|IËö¸¸¼ÆÒZÇX\\Ye­İÁ\r$ÕJC×»lK\ZRÓÂJ !X•ŠåVÛ±‘¾G]×˜oÔÙ29ÉDcŒ±jIËbÊ2k`Œ5XöÎØ6Z»CÅ´u\røt,!*T+U*V%Ô¡q:vHxH¥PšïûtÇs‘İìXRc8‹}©\'@˜l¤”%®T@\0°‘šßQ>7ô}9l\\y;(Éí:§*;(âˆ0Û+(w+vd6tŠLYç+éØ”\"åi%©ƒU“µV‹|ş1>ùå§ñ\\w¾ö.nÛ·›³‹Ë<sü?ôÖûÙ=¿µŸîÓ;“è$Ñ‘ğ’EÎ˜có-l‘*dñó¥âø…Ë\\^o£¡¥øRUNsş•°ù¥-kAïÙ<‘ÑLM9F=1|!Ä³…	Æ>\nz[âë%+#£2²32FP^SEîo°¶’Îw{XühÈ,„KPR,İôbb¢ı•[–µ¯y /¢Ë¥A¬GP%ú¢†9ûeö÷( <}‰îÕ¤_ £ör­¾9È\0ı’gQğ¼rìz2è—u6$ëÖDÆ-oRjïåìÎA_Œ/£\'x\ZûåàjB„ÒŠn9Y¿Û®¨I½{‚MÖùØƒóÅÏ>©·Bà.^æÍßş~äûßÌŞm3©Á~ÓÖ)Î/®ñÌ³\'¸´Ü„F¥Ûç‘³¤†Ççı¿ü!ºQìPIØou˜Ø9Çı¿?ÃG>ôy>ówOP™htïA\"\0S×9²ÚB4¬0ã%1ĞDXRµŞfËÔï|û}¼ïİ¯ãC|ˆG;º:‹J\0¼r\Z0Â4i5;zæ8wİt\rÿêGßÁ¾=üòoı%AÛFT+¡pˆŠèÆT,Ö}É§>õO}ş ¦\n<úv‡Û\'ù±ı=¼õM÷fÎßz³Í‡>òÿı÷>ÊÂt‰…FXºôâÊ:ÌN\rØÄ’\Z0Ñ[‘FÇá–;®c÷Şm<ùô1VÏ/Á¶™„¶\r£|&Jd²À\nTW¥tMàKÉJ³Éá“§8òÒÚ­&®ë t“j}Œñ‰I*V]×û¬Kº&PZÏÙÕÑ=øR²ê¸4;—¹ØvhÔÖhT*LU+lm4Xk0W©(…¡$uÓ V1˜¨ZŒ™\ZU¼@‚f &–ªP±*Ô«U\\§ƒ.Â¬ í…”àçc»>Rª)}G\rs´7E•4œeQK Ğ´\0¡Útíu Käİ_ÔA(:X]¨\\/ÈFÉzìtjÓ)‚òÇhh\Z‹kM9v’‡Ÿ;ÂÉó—¸fû<o{õ+Ø1;ÁÓ/àøù%ªVz¥ÊºíÆ\"Ì½Èm¸ıã6KˆŒ¦×+EÉ*º–ÖUP#x\"B…+Z2W†®RŠÈ\"ÛÖ+•\rM6ú|ºñL“ÊÈÒˆ¬ìM”pCd;rùû2	œ7^ş$Ù±~¥A,n¥âÛ¦—!Hª²G8§U™>Ú‚¬Ë°ßçgÓJ\"v3Y¶IåÄSÊ»Ç¬Ş³ƒ#ˆ<ã¤¾L¶Åpğ_¤–¤íŞ@Õ\'(Qñ} 6KõŸmJŠØI¨Êˆşs=IöE•Eêb­ˆ0Óï‰¡Mpw–Mƒã‹kwı¸–ˆÎ-rİ¹Ë¬5;¹ùİo¼‹Õå5şİ/ülS‡ª•m#MÿB)Ö:/®zbúz‹IÏc­móÂéE>r\Z&Ç\"\Z	]i÷ñ\Z¢[j\'1pi…İ»¶ğS?úŞô†Wğ—û8øôWé8b¼–àn\0À„ÔW «&\'/\\æ£|ˆWß¶Ÿ_ú…ïÃ7t~å·ÿÕ¶»À.2cšÀ\r§.­pÊuÃlY =yâ­Î±enš{î<\nRT+Ü;_øü<ø×Ÿ‚-»èwÅ×%ƒ\0Óı… P¼÷­÷a¿õ_ş\'l™êöËl€É,9ŒGª›®Ëä<)±]—¥•UN=Ãå¥‹xÔêcLNÏHI¥RÅ4t=,å’ÒïŠMJt!Ğ\r]]§%ëë6êĞ$UÏgÉ¶¹Ô±¹Øl1_­ 4#4:ºeAE×¨5êL[Ï§ãKÕmÚ×u] „Äõ°Fhz¨B¾‘PJp‚$å~©BÕİS=†-ÒƒÔcK’R…Á‚ŞwhÛ6^P1Í~¦k³_£2ÇŠ,³¤C“Šà,üã~\ro~5t—.,òĞS/ğÜÑSŒÕk¼ê¦k¹mß.,¯pqe…ùé	4ÍMn,jšÓ3•\0Òe…óMÚ¶Ã¥åUj¦IÕ2G¦_-MÑÆ€è\0®{ñ™Ä:Í*ŸT9@F(•¢¢Ş	ıV‘»¾6c_ÄÆ/†EºãäŠQÊ§J2$n²¥Êì}\\1µñ¨å^1v×œ>*Ùç›â¬nèBá8!rŸj%ú\'¯V	Ù&İÙ?¿ìËo‘L¦\r\r%T—L˜Dg·TĞ¨ÂXd¥÷ŞßqY˜ŸæØÉó(Ïá›ö¥Æ4Ş¨ò7¿’‡¿ôûìÓaïŒ¥Çïª\'dqŒ…iÀÌx<º`ŒO£k\Zµ‰\ZÌNÀd¡Å‘jÀÕ»WM N]àæwóo~âİ¼ó[ïãØÉ|ô/>ÇÒ¹EÄÜT‚Â™˜^4ĞĞQõ*_;³È/şö_2½m–ÿü³ßƒn™üÚoıîj¦Ç—º×«‚¨F¨Í6_zö¿ö{ãçÿÕ·sëİ±˜¦Ák^u?ø#ïæ¹Ó—8ua¦Æû\rş™\0&YÎæ4Ú?öï¡í|ä¯¿HÓóÃ>™‘™J˜’ôÔY\0¦;C@ ¾Rø2lò7u‰Z•‰Zu]ÇvÚ86-³‰T\Z†i¢ë\Z–iQ­Vñ}Ç¶ÑuÃ0B^,Ã$°*x–ƒiZÔ«õğıÏRÇa¹Ùæ\nÓĞĞ-£RÅ°,¦«U¶T«l­7ğeÀšç³ê´üPxSÛqñ•À0*Ô¬*ÕJÓÔûÂ\\¢`K-…Q\n¥Dª¼!“Ş1z˜ª@ñ/–±ˆF{F_JÅºcsúâ%\\Ïg÷Â<cµZHK}J‘$KNÎŠ%\"w)0T$®—Ó>DËˆÙ\rX{¢&&?ú]Ü£Tö)÷içrøô9¾ğÌaÏ/ñM÷İÎ;ï¿“Šeò‘/~Åµ&oõÔ«®¤&KÆæ™­•ıŒ(çÔÖih/\r]çÔ…Ë|åĞ	*–ÉX­Ò§91YÍÑE!úÙ‡ß$›.U.T\Z„(\n’#gôŠÀLZğŒušv/¯ìë†°JÅËßòwfY±ÆBaÊHO`´/šÅK²öËK†bÅ…¢œÀnë–HŠsÆĞ–*e¸Rœe\"^Ş—ÊZ\0Ê”§%³j‘\\Lÿ7YZÙW\n^¢òÃÇEB’CÛq‘³NbßŞ—ˆ¸b³,U^ˆ5èÿà˜êÀ¨„H0d´e«Øsî»îÚÀ57RìªkX/BÛï¡ )Óã5>ÅÃ¢Z¯q`ÏB7Ò;xÍoæ§ü|öÉ£,­vÀÔû—Ø÷\'„ÒãQ²{8)T »¼µ=³\rMƒ @-®³wßv~òGŞÎû¾í¸xyßøƒyöøyhÔ²³/¥œôK	TP{ìy>ôáÏqÿ+nà?üÄ·Ñ¨šüÚ¯ÿË—s(/ˆ—úEÃTÊƒŠ‰H>óà£ÜzínØ¿SÓãÑLMãşûnã{¾ë-üÒÏÿ6Ô*aKV	™H˜\\	B*öìßÁ=wİÀ>òÏ~ùYØ¶å*˜´á’ ÿïÈPŒrªŞ`ß¶¨@cËô—V–PRR³ª˜f•¶ïÑtlÖÛ+È…ï»(ßcÒ±ñ\\‡jµ†®ë!Ë…’X•\n–UÅ²*X–…¡L|ßÄuVÒóĞ]Ó\r¨˜.ãbÛ«†‰¥	„.°4ÍĞhè¦¡û+ÂT˜ñĞÂ{\rubdnßF)Cİúª\\æ šæ÷Ÿ3‹—ù‹‡¿ÊáSğ¥dnrŒ™±;ç¦¸nÇVnÜ³-“œ_nò‡Ÿşº¦sÇş=ŒUk˜ºŞ\'\' r£iC\Z6£~E6¹Aø£Ô\'b=îğhhR#KäD³“ÿÎîJk{$Ç¢å¸Máu\r]Ç$Oy‰‡Ÿ9Âá³1&êÜrİ^î¸v/UËâ³Ob²QãÇßq=¦®§˜É²\n®DW[ªßß T!XÉuê#ß`è\Z§Wxäk/R¯XL4ª¡£™Ÿ¾Ö\r‰H\0$VO­’mÖqG<Ê†—PıÌdºñ»Wê&ÄèŒReœÑLÊæÈ˜£×ÑN_ôŞ¢lZrUÆÖı`ªáJ†ª2šG)‘È\'¥ZófÎ®LÍ[	g<.8œŒÈÂ•‘bYÜñ*üÒsà,çÛ½_Ò#8íg\"{ì§›ŸÊgrÌÀ2d¢5‡JÄC\"Â·ı›H0^M€YòY2\róÏ\r¸ˆˆİÊÿG\"#@!â1„°\'&\n‹F¥=Î(93\r\rOşòÈµ¿ú¿/šiÄ>fè\Z¯ºc?ÿé§ŞÃxÿŸ±¶Ö†ñZ¢çD& sÑxTñ´%4p””à¸ÔÇ*|ßw¿‰w½ı~*–É3ÏŸä‘‡ŸÆnÙˆ™ñÁgF0ä\0˜~ShH	/=qˆO|şIŞúÀüèw¾g½ÅïüÎÇ¸pn	fBzèä}÷œ\nMƒŠÉòz›üÕ¸íÀnŞöÖ×¤|ãùÙI¾óİ¯çÉgğ‰¦\'u¨\\\0#„†jw˜Ğ?û3ßÅ—¾xG}êµhè!Ã…L0À„?´]‰¯THT§º€ªi05Ş`çÖy&ÌNÏ =A —Úm| <\\ÇAy2ğ±íÉ­Ùj¢iÓ0Ğ5\r…†ô<„*ÀèöÔ–‰ë‡Ù\n¥hšB£í8^›Å ÀŠªe2VoPµ,ªzÈz¦×ªTt¦à²,¹~¨etÙâÊÔ—µ‰)vœÃ°j™œY\\âS_}†?üUNœ¹j*µ*s“cìš›fß¶9fÆ\Z,·:|æÉçyÕM×òê›¯£^µÂh~ô;5z¡Ïæ¥gşI¤ñÅf$×c×‹6[«Tóc6PÉJ³Å/¾ÄS‡OĞ^osß¸ë†½X†ÁÁ£ÇÑ„bÛìSc\rlÇB¯œç»‰\r­ˆ¨_×¨¬·[9s›÷,079²0ffBÔ =:]\rŒLÖäaaæì€p7³e¢¦„èÙĞxöb3³–=ÁY‘åÜŠdò×eA…‰ğbèCú9Qús£|GÛ»)å¤—Blxç_9¾9Ow¸Ñ•™ò}Go©Aö2«y¶¦·£Hòj™÷êïş™×“åqÇ‹Óo¶^G×Ë¬Œ`bB•’¨ Ï4 F\0\0 \0IDATÏôxæz‡?ù‹‡yÍkoå=o¾\'•À¿|ßyìÑçùğ§§ÕqÃşÑËğ”0*DC-Ø6¸ïú¶×ñïx-[¦\'8ua‰¿{ô9–V›a©T²|l\0#¶uA&™ŸÕu¨Wxì¹c|òSòÖîdvzœïıoâì©Küş>ƒ´°Œ¤T{|Ó˜:²jòÔ3Çøı?ı4·İy€=Û¶¤Fvã¾üÜ}Ï}õN.®¢\rŒnI˜HÏê8Ôƒ·½å^æ¦Çùôß=ÎùS[gB!ÎL`Ç˜\0“ññuÇ\'@!Ğ04† @âÊ\0%`¼Z£jêhA€$m?@Y&šeà×«(ÛÁulÚ‹MÈvæv™ÉaÓ¿®éèšFµR¥Ö§Şh`Z•î¸L]£R±¨WkhºF %Ç¡İiãº.UËbiÂ„ª\0K×«˜ k¬{A(Æéyx¾O #‰Â†?ét%Ë¨(\02É—eè\\X^å‹Ïår³Cc¬Îx­Úÿ®s—×xñì\"~ù 8^xÁZ•;ç¹xù2‡OŸc²Q§V±¨˜F?b¢å–¡ä¬…².¾Øø¡ÙÏ`”<?ÊŠnÌa+*G\ZÎN”¤\"q†ªÄ\Z‰_OÓ­Í‰sxêÈqN»ÄtÕâ›ï¾…Û¯İÍ¥Õu>òğW¸mßvî½ñ\0¶ëegÛJú¸ıæÿ$éş\n|V›M.7[ìß¾•…©ÉˆQG_å,g!Îˆ¥\"‘]Õ\'\"è•¼uFW7T±ò¡8Q\0“$ÆËÎ¶‰\rSy‰Æ–¥jî=&©âå¢Éò´ìK©Rû,Ó>%Ø£Òlr¢‰—õ¡†d¥»ÏZUt›¤|¦ oïçŞG¦{’açT\\ì³L9pìsï0»ŸéLFµÇMïY’oW##“=f‘j¾äfÂ_«DÄ^%ÎAí_uÜ ’ä#\0™QÏ—ŠY˜¬µZêE6àé•äéÆÇ\0˜AøK)…¦	ª\n‹ëşİÿıçØ·ÛìJ]F‚ŸúáoåÔ¹Ë|ş+‡¦ĞµDqœ*ÎÀ(W”ùã*.6%@Ùø7Ş´‡ïzÏë8°w;\0Ÿ;Áß~î KõJœ\0 óäÎé!ÀD6i_T“îy©Å‰C/qqq™­sÓ\\³{oï7òµãgyä‘g`a.EsLƒÀ\nøÔ#Ïğ«¿ıaşëú!4-Íúvû-ûù¡|¿úëÆêZf&óÜ«@‚ëqÇ­ûùá|;ÿşıÀá3—`¼\Z\\9b\nÀˆÄºIll¡ˆ>Ôµ\ZhhXFX.·Şñ8¿ºÎÙ¥\Z\r]GvBçªSÌÏÎP&<é¸\\´m­¯±ØéĞét°ÛMZ¶í I‰òt¡aXºabj:¦iR©×©Obè:RJ4ÃÄ´,4Í@u…+%à)hûn ‘ãtğWJ\\ÙeXªh„]GH:ËCH³|;8ÏE‚kfÙ2=Î5ós\\¿sé±\ZBÀòz‹Ã§/ò7?Ç×N¥İ¶1-‹O}ùi¾ğø×Ø¾c7¾âF^{ËìÚNÍ2©U,]\'dÜIÚäô(´Ï*Ç±ô$ËÚ¢¥1£FîGæù>Ÿ	ÊéÈØ\rMĞ²;¼ğÒê:¶ÍíwŞÄ{÷°0=Í#çğñ¯<Ãÿõïäµ·ì§íJ\n5D~Ÿºi­Ë@ùä‹§xêèi\\ÏgÿÎy¶NDûøòI¥\nœ®D¼¯_93\07Úà»×‘#òÔ¹³Vf²•>ËÑ-W~¶YNî²–¢”ËV½hYÓ•/ŞwøU¢Ô²×\r5Øº*æy\'·Ø`/GËËj1’QÈİéBE†-\ncYi›‘CIŸ´k%lWş=(¢•\\j¶*UªY’P!ÛÆ\r\0÷\0ÈD\"1Ş”;–ÊĞ¨Øº¾ÒìB¹<Yô¬‰¬U!¾n4bÄßš3b¥=ê\n\0LÂY7*&zÕäøs\'ùÍ?ş4?ÿcog÷¶¹Ôå^qË>Şö–{8zv‘Óç—Ã\rM+éC.I[VÔ_Xm±ka†ûßÂëï½¹ÿöÅó—9ôLÈÄ5¦3•³±&şÄûU’ 7öZ•#gùÔŸæ=oy5µŠÅ«î¾‘·¼åU<òôp»Â ½{\"ehĞÔ*´ÖZ|òğW÷ßÎÛ¾ñ•) 3>Vã]o{-Ÿ}äşösOAÛšÕ}îƒŞ!a»ìØ¹•×ã]œ=»È>ˆ2ŒP&‰ĞÓF\0ŒŠ˜#Z\"c{a=¿&¤	@ËñX]_çÂÒ\"¶ãqEÍ0°ªUŒZÙ‰qÆ-ÅL­p|Öhx>Ê²Pã´›u–ÖVYo·|é\Z€\"Ğ¾ëÒn® İ6ºU¡1=Ocr†F}Œz½N}lÃª THB¡ë:š¦¡4\r_)lĞt\\‚À$¡á×¥í¸xêi\ZRæ‹—–ÑRu¥\n ~âz/ÙµuwİB¦ÇÌ7¨Z&B€ëùì™ßÊ£‡NP©X,ÌNqç¾]œ8{‰Nã…SçX[^å+ÏaÏÎnÜ½›ölcïÂ&\r&êa¿‘õ%ê¼Q\'h˜G/r.\"‡F¯–Y$)<Ÿ)}jÈ3È6à\r;=@Ó²;y–O~õ9N/­°më,÷Ü¸ıÛ8~ş\"ÏŸ<Í»·±}v–ŠiÑvílÛZæøémm¡J×£ôÆ¬k\Z\ZŠ\'âÙãg0t[·096Ö%ñ]Fu«R½-*ÍŒ¬2|Ë\"AËâZş­Ûh‘C­›5‚hSıàßÙ)ê‘©x£åÑ…ûGÈŒ—ñmV”>;ÛÒÍ‰ÁÏ\"IÅ¬Bk&âÁ‹\r‚“\rÉh•Kİ5«d>H“·Œ\nj“z]$8†Ê¡zdû!.ÄP\r®²Y¤,LZ#\náD#Àq: 4L³¾yë5ÏÔ©ò’Ñ/3—Œ´ÌF\0½‘Aô\nC‡ÉüûÃ›î9ÀÂ[îÅ2ÍÔe¿ëİ¯åø™E~ë¿‚À4mx(OeˆàDšH8Í”ã!jî|Åu¼îŞ›¨v{u–×š:vÛ@×r20\"I^«^åĞ¹%>ù¹§ø¦ûï V±˜hÔxï;^Ë¡Nğ?ÿäÓ07Ù%?ÙÏªg$5NºÈïıæ‡xí]7033•š¶{·óo~ì=,_\\æ‰/<\rûw€Ù:Dù¯yÕ-¼û›ïãÛß÷`šP±\n20Cú¦2ç2«aKeæ‚@¢”\"=>ëù8Ãúú\n‹Ë+Ø­&†a0>>ÁØÄ4»E³^£bLMÍa*‚×C×Ë¢11Åd­NÇ¶YëtXïtğº‘ŞÀ±iÛMìu¿¹Š(Úk¦‰% 6V§:6‰0« éÔju¤W\'è2Ÿ)Š@…ä\n†a\"• Pàx¾ú‡Fx6§3e€ÌF«@Â–©I¶ÏÍ\"Rt3E\ZË°˜ë°Şl£+Åm{wò¿¼î.®¬ó•CÇyöøi8Ã©3yäù¹n×·íÛÉ-{wr`×vöï˜gËä¦a`\Z:J‰â¾Š–Ú sÑÿl¤lB%Ø›Ê@£0q@ÛÈ•R\\\\^ãà‘—xôÙ#`\\¿ww^»›¹Éúüc<sü%ŞyßÌNNĞrü˜S T‰£6!$:Œu/W…ëy>u‹«ël™\Zg¼ŞÀ4ÏO§C2\0L9ßr£\\çCƒƒ	MµÁÏç¯ú®Ÿh³¿Ê™,!Fs¯²î7–!ÊgdLJbxÿêÊöÓFÃ†}¯B”Ìˆ¸xJdß\n‡Ûµ‰é>“QË#EêùE?·£¼L]Ã÷=.®\\&|êÕ:–ÕØ¼JÒPän“—Ìè/#”0‰FsM¤z! jÒ^mñ‹¿şææ¦yı«oN]zëô?şodåÂ\nş¡ÏãÎŒ!’½ ©Ã2G\r¾ßh Åc]‡ËÜyÇ~¾ï;¾‘ÛY¡ÇŸ;Á£/œ¤­i}úá´ğâˆ,d…\0&r-Ó€óK,¾x\Z¨L¯¿f;o}ÃİüéGFÁ SLƒ@×øÌWçÿøòÿú;˜\Z?p]ç\r÷İÆ}×›ù•—9~úÒ@´Òó±VÖxÛ·ŞÏ·~Ó½üş‡şãGNÁ®…ÜõÆW–,…J2¢ÅÎÆ¬ë…oªš®/ñƒ\0Ùel“İzèÀui./á9šnà¹ëÍgÏkT*¶MM3)u¡s~õ2ËÍ’Ô«³1nİJMÓ8»²Â±Õ–]…›À¬Ö0ªc´–/¢›$Šv»Åâ¥SƒY£6³@c|Š‰Éiğ}\ZãSX«ë ÉPŒI3°¬\nºaR­Ô0¤û©ˆ0*7R•6öİ*á’ıŠq #	\\7mD5µV‹çOæôéóBpİîØ¿—ùéq^wû\r|îà!}á(æøÙK=~–#G^âSSã¼âÆ}Ü}ı^^qİnÜ½ƒù™©°Oå;®½qõP‘ğÿTB©•ÍÜ5ŒB5óÀTåtA’åS*Rç³\".¤\"TR•~¸34,ËSŠÂ3¡ğîÇ/\\âÈ‰Ót–VÙ±w;·¸†}Ûæé8>Î©‹—ùßŞûV¦Æ&ğ¥Š0e;,ÉqªÄœÆv}Iv2MÓp=s—–8³t™šepóí $çÅˆ•cÙ˜ˆĞ¤CøaU$>-çP}¥¤˜SØ¿\Z>çÑtšá++X¨\0™AãrH\\ RQíììH¼Le=\"½1‰¹êS~÷÷ˆ0küúiB‰A©YqÖ±LÏI,0Ù/WO…söD„µ.ëy\'æM”À–y–åÈ]ˆ‘’÷~@«xgy%CÀË°µBÜFªGi~³ìİƒã¢ûø	~$uE ‹L\nìğ»räaúë¤ni,Û6O~‘­Ósì^ß<ğ˜‘}\Z9¸ğòk£ ¦D+3ù[^}roõl›åéÇ_ä×ÿèÓÔÆjÜ}ó^t-ş7^»ƒxßxæàQ>»„2ô|~ùL!NÒ%dŠeå…@ë†ëwqïmû©ZƒŒĞóGÏğµ#§q¥\né‡…dö%#“ RcÍ¸^äÇÎJ“‹‹+,léÿù¦›÷òæo¼›Oö	§K| \n¢ JA½J»Ùáÿäo¸å†=|ÇÛ_ÇX­{k¥bñ-o}\rÏ:Éoş·„º3®Ç5»çyçÛî§ªküæısØ9ßvr4\0“b ‹l×¡\0&~]]Sï–léZ×9TÔªu\ZãSŒÏ¸ø®Cà{ÈnI¤® t–;6_<y’ÀuhµÛTÇ&hLNR¯×ĞÑ‘«ëÔ|ÉµH&§§8bÑèxmÓDSÓBšRXõ:ÚÖ $Â0ÑÌ\n­õÖ—¹pö%êãS4ÆÆC\ngÃ¤R­£i:2P2‘ôğ¥\nûGºY&Uâ€Ì,÷èÂCè†ËDP…T,“ó§×ø›Ç¥­×mßÊ¾msİR3-S“|Ã7qË¾¼ğÒ9¾òü1=É3‡N°~ö_ñŸ¾À£‡óÊë÷rÃîmÜ¹ÿ\Zöo_Àö|¤”™ßÛ?ğ#¨ÊsDw˜ÓpÅŒCİ&Ä”µéõgZ	\'Leü>U®TªµoÔ’µ¤³¨º‚¦J\\ßå¡§^à³ÏªÅ®ù9î¾n»¶Lò‡Ÿù2ğyİm×3QCÓ4ü@ÎG’D w¼ıR”rÇ´¡k,¯9<~ä%9zŠ‰z•×ß~€±z)Ny²\"ª·3jdUånšb­“¤ §\"#›e*‹^S‘\'\ZÙû\\´ßFJ•RB/ã¤ª\Zæv©=’õ½Ùë¹œƒ_>C#r³\Z±à‚ˆE>F²£\0•²½C³:I\\ÜÓ0Qƒú-•L3ô(Cc°Œ.Ü<úÿˆ¯Ó§)g@µíŸ	°Š%Ôˆ™±Q2g}&²‘Ç x{né2g.G×uæ¦¦˜\Z™jÅËâë S€GKÈd£šÊOÂ–IşúÓ_eÏÂ4×îŞÊÜäXê­wİ~-ßó/¾™ÿøş1-Çûc”*`ú?fDı…€õ6óûwpÛ]×S­Çú¥—Y9wt­K,P¦L*šŒ{å¥L¯ì­b°ØvxîÈiöïÛI½jpË=¼ëM¯ä³Ÿú\n/ºó1Ø	 b²²ÚäÿäAnØ³Àı¯º-õ‘íós¼ç]oàà¡—øâƒ_†…9\ZË·}÷7£:¿û?ş:7¦f`”\rÀe_[\ZÍõ­û\04º†& ëZÿ°°LÓ´°ªµ0ã´ñœï@Óó¹¼¾†m·ÁwÙ^©2®i 4;6Ç.-±Ôî0U­ f&©WkÌ™&fµ†]«±¨kh‡íÚ¦…Õh\0:BÓPJâ:6ëË±ím»C³¹†©iX†Uk„}43Ô\ZãÍ¤j@Ûqp=Ÿ@ª\\™—b!¹¬|Ly‡­è½\ZŠ³‹—yèéÃ(MãÀíÜ¸+Ôzê¸ ˜ŸdÛÌ$;ffØµe–ı;Ø»u†ƒ‡OrüÂçNœåÜ¥e.,®ğìñÓœ¼°Äı7àÖ½;±L/C³M19Én0‹áJËr¥ÄĞ<má5Kv”mè`ïÍ¯¦it—#§ÏóäÇX»´ÌÌö-Ü¶o7»¶Ì°Újó¹ƒÏsÃÎî»ù\0BÓcP©kç87›õÒ„`½İá™ã§9»´Ê¹inÚ½ƒšU	µŠ%›#uÎˆ¬à9ª\r_P•\\9QmQê›‡\Zïo”=´ù&/p—üõ•w\\Ò¦Âª+¬hm¼ªÔş‹•Æt†²…wã™ó¨åÎÎ\Z]U*ş´şÓçÙã\'9uá÷Üx€…™iLÓÄ÷ı—³ _? &\'C\0#s£è ˆzïüe>ù™\'¹û–kxïÛïÇ4ô˜á›«ó¾·¿†/>ú<ıô¶‹¨šq¦±Âzëå÷µXYçU¯»o¼ï¦Æ±OymåzP¯FÂkE˜èµ¢OÍ™Sî–0\0¦ÁrÇáğ‰³¬®·ú Æ4t®İ»‰Ù	.]^dCrAC÷ß–Nàé<ùåçøğÇæºı»˜Ÿ›g7t×Ü}#?ùoç™Çcmm™{¸‡Wßs3÷à—yğã‡¢–ÌÈ˜0$C6€ÉlàWió–øŠŠi U(x)´°ßD×5ŠÀwqí6~x.¾kã;J4İ@Ó\r„n ¼P+Æî´i·Ú¤ÓZgåÒ)‚Õ¦t‹±µY¦gæØ:=Ãîé~½Æ„®£)¶çè\ZX\ZJ‚ÀC4×ñ¥D3«vg}{u‰µNÌ\nµÉÆf¶269‹Qi ‹€µõ1:‚M d’â´\\ÙEÙ¨¢Êñ0â\raÅz»ÅKç/ròôy¶ÌÍpí¶-Ø9z?\nëz>B&Ç\ZÜ}`{¶ğÊë÷ğÕÃÇùÀCqìøYšë-?Í‰K<{â,Ï?ÍO¿çMìÛ¾\rİ0B‡thÙ\\¤¡[–˜<`ó2”¸ç\rGh#‰²à§(«‘—uÊ‹ğæ7k¬†®±Újñ·O~Óg/¢™ûwÌsßÍ×¡	GŸ?†íøìÜ2Ë5ó[Â^Æa#Ï(ÁÛœ’Œ°fqucç. \ZsÓ“L¡kúÀÔEe²o¥32±(ry§/\Z7J¾»,ÖËÄòŞ¼’´ü&ëLAÌ”\Zzoí©Ì¦§>%2éR³aÁ•Ğïpçş½ŸÍJØBgJO¯J)DIò	QĞ¨®F$%ÉZEÙ‘Lğ’3)6¼\"á¥©\"’ÑŠÁåB µ…*B•=6ˆĞ¦ºÁe1b\0¯ÀÅ®Ö]7†¦#eÀ…ÅK¼pò4¶pÓ5× ´m/Õ¯óòëë	Ä¤@J€)Ø,ı¼¿€ÙI=ËoÿŞƒ¼òë8°o{*P´0;Éûî;9yø;‹24„¦e8ÇQŸZ\r9tØvÏsİîù®rzøjÛ6ËëmT¯F\rÑ€I|Tâ-YeW‘¹‹˜î…5ÇåÄ™K4[6Dd^¶l™â»®ç³Äw\\¨Vâ‚y`©Z¡å|ğ#Ÿcëö-üìO|{ê*–É¿á.~ò_¾‹?ûÃóïæ}|åéc|à_„Š…0u””c!+Í0Éşîïz‘Öˆ[³ŒX/„¯@ÊL*‰ç:x¾GàÚv·¹Ú×€A×š–™é:;Åz§IÛµ±×—¹¼|‘õË9-%Sö*×j‚éú8k­>\nÌÖê†ÁŠİf}u/º%Ú\nÏ¶‘aV°¬\Zfµ†ÕÇï´2@3×e}m¥µ1EÀÊ\\Û±‘ÊGˆJİÅNÂğr…TyÒINPpFË	^8u¯<\nêU‹±FZµFÇõS‡t¯¦~j¬ÁD£ÆüÌ»·ná³O~‡ÀÓ4Î-­òÙƒ‡Xnµù_ßı&Ş|÷­\\n:…%ñFĞHD\Z‘ë–x›A“œµÊ:Î¹NÒ¹)Sª•tc^S\\ZYáÏ?÷8ç–×Ÿš`azŠWŞp\rÏ¿t–ù ÷\\¿‡[÷î¤^­¤²0±¹KZ`«è;‘\"Ù•\"İ/“•hœ¾t™\'¾Ä±óKìŞ:Ãu;ç1\rkPÖ—ĞÈ‰—ô§÷G!øËà†Jª»zS2®\'ÊfQUé•QƒH\\»×ƒ%†ÚdL&³³ˆ(¢/{,“ÓP*kË6ÿæ°¦mP2qöFßRÎšÛ,z]!J÷|eJŠÒK*ZVVH,c·Tn¿Tû&\"ç…Ê6SıÌ‹HìétÜ2j¼ø>6Ò|/%ìšCS.ÿùâÚ…ŞóÀİØ$bs¹ÀbÖ¤ ,#÷‘¯ú:1RFÃ#\0˜Ää÷ıP‚)–ªš<úÜI~î¿|ßùÅÁìTº¬ìº=üğ÷ïÿoåø…eÔX­»°%ÙB–F\0P^\0s“L-Ì„MÕ‘×É³—9¿ÒD\"Òc)²Œ\"zSoIŠa\0¦Ÿ¡íxœ<»D³íÄ.»°uš×Üu¿ú/¯A­\Z×°ÉĞ4T£ÆéËüéGâö[öñÍ¯¿;5×3“ãüÈ÷¿“=Ûf™™ç“õÎ9;¶d\0˜Q(”Ë\0˜ŒW*Ò¤¨è\ZR€Ş		Ód¬Qcb¬A½^£Õ‚\0©Aà8m”ï¢d(“‰aaM>¾ï!‰kÛ¸v§³†ô=4Cçâú•Ö,—…ê²$¹ø~@ËuXw:´í6k#4®hBC\ZJè]ÇÔÇ1*uä¸Gà»TMƒz­N¥Z§ézX–…”\n©‚®ÖA”÷ş\nš#4Á?­~OAÌÙÔÂƒê©c§yòØiôŠÅÎ-3ÌLŒ!»M“½õ-cÓ4\rK7˜Ÿ¢~C•­SìŞ2Íƒ“c<qì,N»Ãªïó…ƒ‡¹y×[§\'Ø3¿Ğ×ÉŒª‰¬h¶\Z	.{ÈŒâ0©\0E™ƒYH¦†8ME»©ë={‘‡Ÿ>ÄÙK iìÛ1Ï=×_ÃZÛáĞé,¯·¸ñŞÛÙ>7Ò}«¥¼Jâ\"úû¾¿5ğ$£A¡H7äg<M\\X^áğ‰3\\8s7ßw·îİöcp¬Çêü3€L¤:{1lJpv °‘\\Çi‡6ı¸“ıÑ FÙ,OÈé»R1–T•ŠõÙ©4±jûâN~byAÕÖªàqö\Zş¹{|£½h£DâbÜ‰lb$›U¼˜E)û$\n½)‘HŞ¥«\'R}J*\nszY²^_›(|DŞ\\Qñd(ó¡ëœ]\\æÄ¹Sœ¾¸Äû÷°k~å–Ÿ¶lp(¢äE»ñòk4Ó[A1\0“ál0I¿4’ÖU\n‚\01QÇovøğÇ¾Ä¯¼ï{×LÕRÿî÷¾‡;ÄéO>†çù¡r}Lõ^Q‹%vl:.ó×,°ua6–…X^m²Şê„[haÔÃóÃ2ŸnŒ’ªËí+@dàş^×41ÙÍ0h„,n1-Çî	ïy¬.¯a\'£f§Æ¹íÀ.Æ-“‹®?$#âÙ)]ƒñ\Z/|í8¿û»ãµ÷ŞÂX­ššë;xã[^ÏOüüÿÃcÀx=¹-¯.€‰Dr³Ä.•T¡ƒ¤‰ş×™ºÎD£ÁüÜ,Çcm½Åêê2k(éáëÓ!°Û¨ LëFÙ¢š\"ğ}>º” <‡U»uê†JâuZØë«x®K %Š‚Ú4\r,Ó¢^o „†ãy8®‡¦ëèf%2*`fbŒ…Ù¦\'&¹¸ºï{è¦I’äşJÍV–±/àÃIGúè\Z<ò_{é<ÕZ…ëvÎ³ujÏX¦ÆÜ=¼=?d®¯×xåõûØ>3A­Zá|ó!ŸvC&¹f›G;ÊŞóìŞº€¦k1F¾¬è|T«yçuXD~ r¥”È£Ğ³Šôä„ÃÇd\Z\Z_=t‚ùiŠúXwoãÕ7]Ë“G_âè™‹ìÚ:ÃŞmóLÔë}RF¥ÒæÌc6ª<.¢•HYJB¿\"/ø-•Âu^º°È‰³ğ:×.laß¶­X†N`¦\Z^óØ¦TÎ8zÔÛ\"[Î*7Š³ƒeesÈİùÙB‘±{Ñâ^7^¾Äp§(’UIÅÑU4væ¨VCĞRœJzsœ¯Rë»¨U¤0ŠI£™LAæƒN8Ô€¨W8Ï§)¯5’Œ!#(ŠŒo¾ˆ=¥rU%{ME)›“¥÷Érò€V±›Ñ^5KçKÏà>Æ»Ø³°€í\0\0 \0IDATk3—Ià?ÀÙ¬²Ú—_£‚˜L6©ŒŒG^v&ù•Šë¸D¹ê1€)~í×?Ì½7]Ã«îº>cZüÛ\'ç—Öøìß>šGFh¥ÔæsÖƒãqí¶YvÍOcèqJËõf›¶í 4:j­‰53Û¶Q¾Ûı\0zlf«”©‡6ttË$X^uTdşÛÀóÃÿL#¼ç–v—eÌ4\",›\Zxj­‰ïz±ñéšÆÂÜ45Ó\0ß\'¿ßF$[×º›:®ãñùGå7~ë/ø¹ŸşÎTğ`j¼Î\rûvğ°vËAL£¤Ïè,d\00)†7b fÅ¶³L|T¸Ah+†ÁÂÌãõI:Ë™ç9u¦FËÅ÷<×Áí´ğ]\'<®L‹À—8vC×ñİJI4]Âg*T€<ğCà#=Ns×í Vm£öÿ³÷æq’œåç÷3ªÊº«»ªú¾»ÕênİBèB€‘À`n{0›Áã=fvÆŞ™İıØ‹Ç»øØÁç0×`s ¡³ÕjµZ}ÕGuİUYyÅùÎ‘™yTw‹µ×$ÔRWVdäïñüßóü~Y²Ùnzs9r=9,Ëb~~–r±€gK¤n¢™)U#•î¢¯wµÃC}ürÇ•¸Œ¶_]ËŞÕJ©«Ã­Rà0=73¿Dnİ\Z¶¬d¤·«AQ¬U¸âz–\0ÃH±iÍÛÇG˜ÏXZZ!([N•ml-$Úì°¾Úî¸ìnË~œ6æ‘«epV[Î!: [²:ÕA’¾ÃKg&xáÅ“MÓÛÓÅÆ‘A¶Œğğ¥X)ñê¶³id€ŒiT$c¥+h5R«¤ş„„q“I÷,E «ì:œ¿²ÀÁ“œ[dp|\r}ıız*8m$W5IJi‰şmÔ½šcKÑùÜkzÍFéˆZ™”ÍAuÛ¹ê!‹5P”r‰„g%d¥¢ı×æ¯\"DrOÛ>•\Záì~¸´L6”A\n\ZÈjÁH§ı>áûn\n|D÷ÕÈ—©\nkÈğ®KËúw^ÆQ 	È\\ïÚòyË&›÷\nâl,UmRÆºšûĞ›—ÏŸã‰—Nó™ßú\0ãkÆX,9m¸­øšWÖ\\åÜúÉ«=Ä#Ú›‰ìL3ö%tJ„ÊÉˆH§úME\"¸pö\nü±¯ó¡¡^6¯i¸ÔM;7ğ«?÷\0‹—f8|ò2^.”¦±ŠÈÏ—àxõuÓ—Ë6¸Øç‹%ÛÃ/”îã;wct§I!xæÅÓ›ÖâI‰çy(–ÃáãìáÀ[ŠÀY(ğÄ³Ç0r²ÙÇÏ^!×Ÿc¨¿‹ÑşnT]£ìº˜Oe¹Â’ïÓÕ“&cè¸Çäì\':Š,”ğÓQÕĞÑDæ¸	€	ËdÓÌä‹|ôÇwíãŞÛn¡PœÔÛ“å_ÿÊ[¹xâ_şÚãØÅ2¤uğ¯R…lÕ\0&ôK2*©éIåğeõ9€ã{¸¾DÓ4rY¾,MĞ¥*,•m*¾ã¹8vÛ¶©”Ë‹¬Ò2®UÆW5<ßG¨&Š‘FÚÕ>×Ás|ÏCëÚ8V§RD5ÒhF\Z$¸®Ër¡ˆeÛx®K¥RéãY<ÛÂq,4#E¥”¦\\.b;= 5`ı\ZÃ\';ß\'Û5ïw¨\'É¤jªJÉ²9uñÓ‹y@ «*ÛF‡íÏãÔfk¯õ+(B1\r–‹%f––¸4»ÀÒb\0`6oãí÷ŞÆnİ\0DÌxc³hğØh4l\rd›Q´Ó¦Ï!Ü”\Zb:iÂW„¨ïC+ıE>¾/£+©iõšªR¬TxäÙ#<wò|oÑ4nß¹‰-k‡xñìe.Ï.2Ò×Íö±µèš^gÚâ®İr¥F‚¨­JLT!ŒE„ådt	šêUªc¶¸¼Ä¹³(Î/ñª[÷²iíİi“,Z®.É}Õ £}€Ó9pMşlo.™8×CªVeA¢ŠÃ›¤äl~£Dtìˆ¦@¾“&zÙÄü7éÓeu~JB’¿+|Vè8’mì«)-ëTpc5mÃç·ïN0ù\n%ö[É™ËĞ¶±2çd\"¯t=oO†$É?÷İqøÌöoYO:“C¢¬7oòªÆå\'àåú<Ëfi(aÃãı/Í˜Eg+FÆß¿´UA÷ñ¹/<ÆîíëøàÏ¿5=\ruƒozíÍœ¿8Í…ÙŠ(ˆÕ¯Õâ«…Ëœ¤ièºŞğ¶²íP,V0S·Ü¼î?Àé‰i6siv‰TÊä½?s7§ÎO2³˜çÀÎ\r<wôvÅft —²ë1zãVÊ‹±ñ!$pîÌÆG¹ußî=°•RÅâÈÉKìİ6NW6ÍÁãÌÑ1xñøåçNP×•MÆÔ±\0˜ğ˜(<óù™şÿû¯øƒÿı—9pÃÔ èå½ïÿiN]šå¹¾\0×Ò(Üc`®	ÀĞ`+õÊÕ·z¾Äª‚»šj\"‚\ZzÏ÷±m—LÊ$›2êíÅHÙHMGQU\\Ï¥lÙäæXZTó6ECSU¡¢\Z&®UX4EÃulÛFçºu£;ßup+Eğ=<«LQ€ç:(TUGÕtÍÀsœJÏ®PIé”K9*•\n¶ãà¸>®&ğ|‰ß¢dçj2cW[Ğ¡ª\nËå\nß?|’©Å:†¦1˜ë¡+&_¶Wš¡Ã9È{¾OÅq™ZXä…Óçøûƒ/qnj3›fßæu<pÓ.Ş|×ÍìŞ0ÆR±<‡¶­è{dscÖÇjX­«8€:¥:^Ûf._Ä—’ŒiĞ“ÍT–|½VÙéøËĞòËWŸx—&®@&EWÚàU{¶2:ØËc‡O \nÁ–µÃ¬BŠ`%e†WUÑP¹#ë]Œ+?&(„ø¾Ïr©ÄÑ—879ìÛ<Æ†á~²)×—×ÿtì¬U`Õ,\\g©hVšÿ¬µPA¬\"W4ÇšéËÉ¦6Z2–¼<ş?(ƒ‘W±ŠÕ±y×#Ø¿æ€VˆæàKÊ•ş)8•×Æ¨Bàº.Ó‹‹|íÉ05É/¼î6$:EË½Šçpõb×å¹ÿäÕö¥ÑÌI¸Şÿ\"š€†6X¸>`Bº¦Ô5şü³2<ÒÇûßq)]\\&2yè›yòği¾ö·ObÛÂÔ’i×ğf[äµ€+^ëzË‹yöîŞÈİ›øú£Ïñì¡SÜ°g3.Ïqçş­XÇä|rÙb~±ÀîŞËcæãÿù‹`êìºùÆ‡Ù¹{#/<{Œr¡Œã¸ºFÊÔ™œ]äÌ¥†z0M]U±l—…Å<O>ş\"/¿”¢¡4md¨gÅ*LÄahø¶Í?x¿ÿŞslÛ<F®+Yhº¦ñê;näm?s\'O_$?Ÿ‡¾¨´sÜPôš\0LÂ÷ñC±úkãá)>MS0tSÕIi*ã09¿D:•F•ç\"…O_Æ¤·+‹/¡`9ä»ºÈuw3ÍàK‰ªj”ËJ¥\"•J×®`•–ñ}OJ,ÛBQ¤ÍÌ\n¾çâVJøV%ğ¡ñİ€¡Q5R]½dz‡Iugñ«¸Œc•ğ…ÀıÜõ<,Û¢\"lÏÅ«e·e(3-Z¯1ÑZÊ¨½3EB0¬)\nÅ²Å“ÇÎ0µ¸Œ0\rz2)„ªã£4:Í×6èêïû~à¦/–™ZÈóÄK\'øî¡—9tæYÓä\r7ïáí÷ÜÂ«nØAÚ4É—*m2‘aåWÙ\"G’ÌL­F¥Jt˜¾”´ğ‹¡E¯Q(=-«ûM¾XàÂô,ÏŸÀv<6ŒrëÎ­ôd3¨ŠÒ²œ©]Æ:ø<Ÿr¹Äá³)Ì-bôv3>ØÇ¶ñQTEãğésìaßæu÷õ¯Ø™bÒØÈh£®Œ5b„Ù?¬gÅ#Ú+Jä¿!°]‡‹3ó|çàË\\Ê—Ø82À–µÃötcè\Z®å\\}à—ÀÂ‰x\0Uß¾d½4)I²¸SwöÖYXe‚“•Ì’gg+vG†×eØLQ´8¥…•\"‰‹ı,%bĞÙ(iİ¨%Á¤µÙ.{ÔÃá\'ôŠX‚#ÊâÉX©cµkÖ\'Â˜´[sí‚ÓNJèZîI¢M¡mÏÄáhğ,…HR\0mŒÓÚŠ¡´)l&œQéõ¹´\"Ğ,_1\0Ä0*Wææyü…™_àµ7íä\r·îe¶ qªŠ¦-Y*‘d”zL-ØÒp¿ÑO^ç\Zd“ÃXk\0\0Œ[¼ü˜q¸$H4Iyù>b(Ç•yø+?dÿÎuÜzãVÔXßÊöÍcüêûŞÀÁC§9{y©+EmÂ“&ûÉÈ&•;Ág	Ò¦¦*LÍ.13»ˆ>7îZÏæ\rk8wi†³—fÙ¿c=Ï<wßuQ5ó§Iu¥X³´Lï@ª®¢JIFQPuàüå9ŸŸfêâ½)“;6pvâ\n/9Å¹“©8^kÿA‚\"Z€Izü2*)ÑËvªêXÑgÒ“Mó³o»Ÿ¹™yşğÿú¯ĞÓ1²Z}?«0\0Jµ±¿¦<\'¨–ß­çÌTÙ²Y.É\nXNà»âz.¹LšlÚ¤;mà£éÊĞãféÊ›X•®\'ÑM“®l7×‡ã8Ø‹üâ<–S©³¾/†Aº»Ç¬’ÉJ0oíR¯la)´TÕ0qì¾ï¢™)²ıƒHß#Ëa¤2dL“®”‹UÑ‚²³pŸIw‡ØK!ˆy/$ƒ‘«Oî­˜†úÒçå‰IÊ…\"ƒCıìİ4Nw:…¢LCG­ÖºGÉr(U,\n›B¥B¾PàÔåi^<{‘—Î]fa¹Hw:Å[îÜÏën¾İÆÌucê:^Õè2ù¾ÛIÈ¶.Éh¦JÕ ÒtAG[æ¦Yf¼ú3CSÀ¡Ó|ùÏñ§^¤”/ š:ûvnBÓ4nÙ±…¾î,¾ëE‚»v¥\'á÷šºÆ‰KÓüİ“É—Ê %½Ù?s×ÍT,‹gæÂì<o¿û6­¡b»‰>:²€2V\"\"ãJW2á\0Š=Q×uXX\\äøÑ3du=Û60Ü×BÁv¼ºœz³ ²9ófÕsA&q‘¼ŒŒ(z5Ì¾&âíAA­ÄJˆÕL­Î3º\",N bJ„õàJ&°šQ>\',»b¶Ù.VšÒ!«)Çjµ·ÅI}|bFÒR4&Ïd5.‰(øG²H¯l½¥—í“3ñà_Äÿ*³\rË!¿RŞ°íòÙ55B.s–¯g\']•Ì.Îóı±cİ0»7®gÙV;ƒkW|ÿ#b`®ÓüŠL£&~2&¡ÅÙ‘U)Õß_5!LœV>M»)k¯¾núÑ>ñÉGØ÷¡õ¤C\nZTÂ½·îâ·ÿ§wğ¿ş‡1[¨@O6.åCDé*r2	\\×ÁuÕMM£·¿›Ã‡OÓ—Ëòóo½›·¼ş6nÜ>ÎwŸ8ÂÂÒ2}İY&_>Oyf‘ıû6sğå	úºøĞ‡~\rEU1SßøÆSL˜*÷ß€;7R’’—Ï^b)_À[.röåsàyô¦Slİ³‰[önfİp/Ş=û9qî\n_ûÜ·‘ÒkáÑ„õhÅÀ„wÏEa÷Í;¹ıæ|ñë3Ğ×Ã»Şøê†	½yİ\ZŞ÷®×ñäS/ñÄÀPot\'\\€M\0É\0¦®”—œÜRâÉ@±Ìñ<,Û¦X2” ()Ië*®ë\"…‚™2‘ÊJH®i˜ŠRÏ[†Húº¡£(\n®ã`YË¢T\\ÆñVèh¡h\n™¦ƒªáº6åÂªPHuõ v÷!4)TÜê×4\rƒT*…\"]jHÙE4KÖÍm__GúZÀS(•˜š_‚^×£;“bıH?–csaz|±„ç{x¾OÙ²˜Í™œ[äüÔ—g±]›B¹B¡bãú>û·¬gß–õØºı[7Ğ“É`»^¸%çÇ;<\"Z÷´Ì’¶9š:9ğ;•r®õ—¨ªJÅv¸0=Ãğ,_ùáóL»Œ’IqãèFv­e §UQğû„:?>M]gbzo=û%Ë]ct —7Üz#Ïœ8Ã‘sÙ²v˜Í£#ôdƒçÒ^¥I -=Tbï1•fOLUÎMÍñøK\'™ÍfËØãÃèšÖ¤oŠöBâ=]W¤È—ÌÿæŒb’×ˆl0£ë§¹—MËdXÌ³¦ë]»ÇG;¶¹ÎšU=õ¢Ä±k\"Ò+ÃŒÆ5&1~Œc\r²ÈªIªhø‰ˆ	8€ªdØøşjŸEëığJğ«®©\\˜áéã§8qiš÷<p;;×S¶ık×1~¹\ZæÛñl­x‰ÄÄNˆ‰‘	Yöv&i3‘agV’\r)Û]Ã—ˆ\\–Âä,?ò›v­çxÿƒ¤ªj`µAÖT…¾ã>şá‹|öëOR¬X`¡Ï&¡Ø²úšÊÜâ2KËE|_&zºÓ&½=Y-xêù“\rõ’Í˜|ojG?ŒåxŒ÷qzâ\n‹GÏbdSLLÎğĞ]{ñÙÙ%^<v‰ÉYÊ½]fæ–xúĞ	.O\\¡´TÀ-–!cRÖ:‰½\\Ä04<Ï§°\\MEdÓ\ZZBàù~Ğ²\Z\0Î\0ÊŒõò?ÿæ»ùşSGøè_~‰[_µ×ß{½]™†ÏÜºm=¿ùëïä‰çí÷Õàs-\0Æo`BeŒõÖ,YÏ4×Uæk\n,¾Ä²l–Ke<ßC×U<«B¹TÂ0\n]Ã0°=Ÿ²m#„‚áºè¦‰ªªèŠ‚\"%n:ªªd³]˜f\nÏs)•Š,å—P„OÅª (ªN*•Å÷=\n–UÆ)8¸NàS£(*B1ºAYS)WÊT‰‚ªë(2óöcR$HT&ŒÅ•‰Zf.Ck:)PUU•Ë³³Ÿ¸ôd(jà\rëØ9{×ó¹²°D¡\\Æu]J‹©Åe.Ï-rifù|l&Ã¦µƒìÙ0Êã¼j÷V¶`êïS¨\01,ª±’–‰dFë½U´ÌZvT¦Ñ²L\"á~V‘a‹0jUæóÒÂßzæ0_üşAf/M‘\ZÈqû­¼ãŞ[¹wß.{º&±ÊÂ´;d’Ê…”*Ss=«lÑÛŸc÷†µæº9qaŠ|±Ì;ï½‘¾^Â)‰6yµ9’Ñ”‰…²ÀM™jÏÕŒl¼Ûq^8uo=wi\ZŒõ³n°‘Ş„Pq<¯}yÍJHq\0ö¬Íâ=I,h»ùÓ8/ÃÊ´`AÚˆIÂÍNÙ†ğ+T–œÌv†Úß«÷+bÉÌ¸ †\\Å8\\· ¾AÖ[4ú”ĞŞ2Él6\\¶ÖÎ\'ª“5ÚXz\'Ú~çÖ`u”IáW	)…°Ùlô:>ËFª¢¢ªj›ç?»ƒ¹\"åêŸmR.õ•‹Æéñì‰3üèèi4UeëØ(cƒıxÒo»×Ç4qşI\0™«ñ;û1x	‘¬¬¯q)e†ÎäªÎ¯[Ì~[öE$ø²1sÜVWp]ÄP/sKE~ïÏ¾ÂÎ-c¼ñ¾\rrÈ…ßüõ·òü©‹<wøhZ›LY•*6TÎ^™çÒÌ\"ç£k+¹§\'CÆÔQ{²LÊ|ìoÏ\r† 0B§ÏMBÚ„¾n¾ñ÷Ï€Ôu¿ôü‰j\Z@lš‹ù\"/Ÿ>_UÀ48{úrğş\0E×å©çñÔ‡WÆÏĞ Fôô &|§™ù%Ê®ªV-Û[€‘Šº³¼ÿç^O®\'Ë_|üo¹xì©lš‡?ÿmşù/½¥!¹˜M§¸÷®ıüú¯¾?ı£Ï@O¢+ô\\\"ìİu0SÆvı3,!ğ¥‚®¸¦éb\"ğ×.ã”KKMG(MÕI›qœ aßVUºÓ)r]4U¥bÙà{Tl×vĞ\rÍĞèêîA3RhºN¥\\Ô¥T)}<×Å¶m„ô‘©,jx)ºªŠïêh–UÆvll_¡R)#]›r¥‚ãxø5u¦êÿDË:økË€%]_U.Í.rtâ\nç¦0½˜çOáñOS±æ–‹Š%<ÛÅw=_ÒÛ×ÅÎ£Ü´e=ƒ½9¶°yÍ¹®l5!°\\we³LXÉD33ÇfAóñê¤n]\"«ó.\n’Î±ö\0Æ„êjŠ§.Oñ¥Ç±T,¦1ĞÛÃº—[vl¦;Êì:ÌŒ…Ç­ĞªŠ‚/áÉ—OrğäY\\Ï‡R…{îØÇköïàáÇæ™ãgØ¸f×ìßMÚ4ƒç]Íb6W¨—+ß+T_S¶\n‹—­œ,\"\"ó*„Rï7‘Ò¯?7Ïó™˜áÈ©s\\¾4Mn —íFY?<ˆçƒ¢4)½ÑÚú:!°ÊeE¼.Ì8öÎÖFÑ¹Ê ¡ùÚU:f;’Ã\rÿY5À­Y=‹_}‘`YDJÆš•tı<¢I‚E4ÚÍî?)ÓI©¬@„ÂØ¾ö8I¼¤Ø4ZŠÚñx_C&»Ó’`’Ê®KÓËğ3•õyKm?Ğ4R*JN\\¸‚ãºöæX¿fMKU±do8Ñ°¶’õª£şXEÁq]&fg9xâÅr…ìd¨·W*m‘\"“Æ”áÿoY˜pà%!›V—L¯&¾”ÕŠ•J’˜Är\0&Ì¾ÀŠ¢–H(ju\nÇ½NLüR‘üåãÆmclZ¿¦áW÷n_ÏŞûSÌ~äKœ?7µb”H2Ø²M‰óW¸29×P®Ñ—ë\nš˜}	¦\n©LLÊZ•©›ZªaDÏ\"M€%ÒyW3é”¡&m^1µ÷x‡îŞ,¦6˜_*ğÒ©‹t=¤¯ĞÀÔ‰ë¡ú>¯»{?|ÿ›øõó®Ì,ÂP?ÇÏ\\âSó·ß½Ÿ½Û64Ì£5C}üë_y;O=~ˆç_8…\'€ŒYUR»Î\0†ğ˜ÇmQ/h‘<é#½\0‘kšF6›EÑ€ñ(p,ßõP…ŠŠŠ+=Š~™R©D¥T@UUd·OÚ0¡\0MÃõ¼àä­ğıúx¨ŠŠaèšN*BQT<ÏÃ¶-\néeJÅ4k£i:RÇ¡\\.!}I¥b“_.by‚ÅåÂ·)•ñ‡°\\¯¤•aãÕoNáb :ƒàWpyn‘—\'&ƒÀWBÅv˜YZæÄ¥é@öÛv¨Ñ—j6Í\r£üÔm{¸kï¶Œ€PÈ¤LºR)TUÁóüH¶¤~OM%R[+0­Ftõ™İğ-Úg›ÉÚ•·­‰‰¨ŠÂ±“<}ügæqæ–Ø°yŒw¿ööoİ@_Wç¥í²Å‰¢¹²Ê¨)BpøÌ^8sÛu!bç†µŒôöğÑ¯ÿ,÷ìİNw&çûx^\\Ù$+…õxëpÈ8\0\n«¤×	¹R§ïKIJÓRò½ÃÇxöøY’±Á^nÙ¾=Gƒ\nØXùad]Ä¢\rgˆÂšhı\\EHšW4a<DLØb5Á­ˆõ;&I„7›ç×ÂdˆĞ¾’@‘µüÁ>T“Ineà-ïŒ˜Ï¯6ÀOê\r]Pˆğ>z~DBe$Ìhåó#¢=\\xï´3Ñ4Ó\n¼´mô¯õs…×CÃºóQ…À––8xâ4‡OŸg©XÆñ<öm^O_W†L:kHÚ›{É8iXqãË#\0(–Ë>}#ç.ày{6®§¯§E(-™˜ÄóU6ãd;*ˆŸ¼VO¦Æ}©Dİ 7Ú\ZO™H)ƒ$u´‡¤\0Ş¥â2¢#G²³ÆÀÕ^˜RJ¾óİC<üµÇù•÷=HOwc©Óßı\0çO]â£Ÿø&óùx€$Ñ\0S×abŠùË³x1–ñ‘>†r]Ï©\"4üj–\'\\ÚT»^\nøY¢åUJ\0dâà.~?ª:®CÊÔ_ÓOWÆŒÜßÔìO:ÁBÙ®\ZnÊÖ\0¦~T‚>˜R™»7ñ†7İÅÁC\'øÎ·ŸÆUUèÉ@©ÂGÎğï?ô	>óg¿E6m6Œõºña~çßÿ¿ş›À™‰+\0g7D`ªc&¹Ù;cj(BàùÕÒ²êç)B i\Z¦i‚f¦•ÒÇ÷}4MÇ0ShªÄÇ÷«€£X@×ttÃd©¸L©R@’8şŠS°eƒpê4÷‘¾\"”êç¥0QoĞuÓLá¸.)3…\n–]ay9cY8®ÏÜÂeWR(•1UI¹ba»”h	åKW`Z¦gãDÆp._`bz×óºÆº¡~ölçâì…¥eœŠÅ¢e“/UĞS&#ƒ½l\\3Èp®MÕèJ§ªÍÿ*nµwæZ³”×J“¯Èt²ã¶Ë¿\'uëxÒçĞéó<{ì,•r%epÏ\rÛxÇİ·Ğ×‰†+­©¨÷F8Xt=Ÿ¥r‰—¦8?9‹ğ|nÚµ‰®®Ç.\\áÔ¥)>øĞ=Ü½w;çGÔ¦ZÑúR†İëîI†ÊJ#Éw	³GÁºñ˜Ë/óıÃÇ9yyšLW–#ƒlaM_/ó…JÛçöA&H‹ÖÎìqhÉ?Ç\Z±¯ï|¾~îöÍ¦l3!ö:##[•”…ûvÄ*¾‹ŒøÊ¼âYßšÙe›¸òJíÿÕCG{Z5¬*W*<óòI:Ë‰‹“\\œYd¹\\¡bÙìÙ8ÊÖñõ¤L³8iğš‰É´İ+Å/°×T)=æó‹<uôKËE¶Œ¯aİğ0ÙTêªÎÎhùœXıdüÉ«3æ¥ÉÈEzâp²êEç‡\ZÂ´H0Ú:5³BM7\0˜Vo¬1<öuj³©#S:ø\'_fÛ–1ŞôºÛ\ZÊÊ4!xß»îçüÅişì£xu	Îæ™©*œ¿4Ã¨ˆŞ&\0\0 \0IDAT…+sìîÎÔo¹·;KO&\01~ĞP.}b¥M±ú_É³°ú÷lÚü)\Z‘¾ãÒÎ°~í ÙL*òîé™Ezú(•’Ùt,Úm`jÌm“ëJóàëncİè¿üë¿OE˜X\"mâ.—xì{ù«Ï=Â?ÏƒºcAî¹ë\0ozË=|ìÓß¤¸X€\\ÏŠrX;0Õ)Ól¶Ë o) •‚,.2x<ÃFSíPqÜ Tn \"•Ê i:¾\0W3•fy9ª©M¥P±¨”q]×1ªş(Aİp`L©ë:º®¡h\nÒ“x¾‡cÛÕFB]U1\rÏóĞ4l&ƒa˜H §+ÇÒò\"år‘Ù|ŠíázZ6…íù8®çù i+8¹AŞTĞIY³Í:,·º’Í\\Áæ¾ïR®X,—,¤ç1:ØÇC·ïãŞK©b±¸¼Ìùé¾õìQ~ôòfçó<}ü,\'/M3Ò×Ãöñ5üôí{Ù·u#¹\\¨¤äl¨$\')Àè¤¼d5e|L[©[u\Zh$rÎÕ!¾ôÉ—Jœº4ÅÉ‰ËØ¥\n÷Ş²‡ûn½‘ñ¡!<ßÇ‡z¯P\'ŸÛP\ZãKtMc~¹ÀSÇNrafR©BVUù…×ŞÁÙéy>ûÌKŒô²ëFÖ³\\ªD®á‹ä\\£/£½…26ß¤Ÿ˜0o(»‹³Iº¦1³¸ÄãÔÄep\\ú×±el\r)3MÉòV¡f.håÑÚ•é„Î®xÙÕ½­Ê§®E|#‘‰êô~B¦šfkL$15@¢4™ñ«“ëmÃQU-ÙjŠdv`E¼\n[:*]ÍşÓ®ç®ÙsïDn9iŸê<%¥¶ëpajš¯>ñ,÷İ¸ìäÿùü·˜Ë/sav—Ï_b|d-ÙtÀÆÆïOÆJ,#%ƒr%ñÚ(¬‘ô³æÆõ÷`ê*¥r‰ËÓWxò¥“Œ\r÷ñê¶1Ü—CUÔ¨ÿUÇ»zM0â\'€äG1­YBÂ\"ÔÓ«(·®6Ø ±Ü$HŠx¹U+Ako‘øõèëâÊÙI>ü±¿#×ßÃ½·ìBQ¢×ß½}=oó«yê™—Y¶|×§±k3tı\\7Ïœ¸À÷Ÿy™ñ5äB™1«}.5\0ÒFbzÅR»qcO0Í³HÀqÈ¥M¶nXKOw:òãK§™»<\0,½Ê®´\rR¥oe‹¬íòîw½–ûîº‘Ï~ñ»œ>|\n6­\r¨d¿\ZDfRäKe>ş—sï{Ù³ccÃ-š¦ÁûŞó/¼À£_ı>¢+‹TD“C-¬,ÖÀÔoİ•2’Hèš´6iÁ}ÙëÀØÊ³mŠËKäK%|ÏC q¥¢¨èº‡¦hzÀÒh‡i˜†NW¶]Oa§íª¥¨œ9ª¢`¦Ò¤Òéêâ‘¸®‹ë~5š«@¨zÀX¶…m[Ÿï}\0Š‚nè˜fªîÒŞÕ¥âKÈ˜\Zf*PVÊdK)ó(½_óvX]à­W„Àõ}ÎOÍ2½”Ø\0ÏãÆÍcÜ±k3#}9|ßg¤?Çº‘!vmÜÀ›/OñôñÓ|çàQÎ\\åâô<f8~a’5ı9voãÁ[÷²cı™tŠRÅÆEº‘³dÔN!Úæ¨[£Õ8­\\ØW¼3:óšiŒÅ‚2²åb…çONptb’Ùb™Lw–ï8À-;¶¬”óÈæêUáuÕŒ©“@wÆdny‰çOçìÅ)’şÁ^t]ãÄÅ)¦óüÎ/¼™=G±¯y¾ ‰†µRÎ0K$V2õB64W·ˆÙ”É¡Ù>ó§˜Z\\†”Áè`/¯=°ƒuC}Ø®×a)£Æ¸!p\"C	ÑáÔHnXÍs_MÙc²Ëè(û›ÔÖª‡,1Û‘(SİÌPU®\"2i„ö«V\'«Ş§ŒÍûÂâÊy-#\"Cõ5{Î­<›V»Ï´7²ƒrÒğ>)b{€‚á\\†=Á7>Äm;6pçîdÒiöncra‰ŠåP¶ğ½À»¬eé# I2Ê’1–ZÆ\0lf®<@¡lsøôE{ñ$•²Å`®—uC#tg²Õ>ÁÕ~’h{wÎ/üäÕ$/§ØŠGğ~¥ÚséË I(e]b¹EøP+\rI06ğ#’AAHÁ‡˜–¸X?Âãä³›Ö²aí\0›Ö4|Â}¯ÚËÏ¾çuü×O?B¹lGÔ\Zî!—áôKgyş©£¼íµ·F@Ln G×@ù|	éùDÅe<ísLõ½¶ÃPÆäÆíëéÉ®Ü×ñ³—øúcÏá)\nèáÔg\0#\0ÏC¸.{woâİo¹‡ù…<ÿå¿|	ÆG\Z7cUEê*/8Ïú“Ïñşİ[3ØÀÆØ³…ùÁ·1;5ÇO†u£àù\0Fv\0`QM!’§zuœ]×CS” ‹XÛOô¶¨Xf.a—\n(B t3Ûƒc[d2YtÃÄ0RõÌ–ª¨AoK*(ÓuƒR¹ˆeUp¥ƒİ0Q5OúØ¥–m!¥išxºã8¸‹ïyØ¶,¦:°ñª 1PäÒ5USÑT¿š=RT½.{)¥\\ií6WYm–nµ&6EŸSM5êôä4SUãzØ²[«@VUU2ŠB6•bıÈ ÛÇGØ2:ÌÚş>¾sğ(‡N_`úÊ,ÓSs k>{‘Ù¥<wîŞÆ\r›×±n°EQähJ_^óÆvwF]ÓK×U|ésvr†Sç/c*‚×ß¾—Ûvma¸¯\'è?jˆv:LBJ–ÅåÙN\\¼ÂÔìÃ}=Üº{O;Ç…™vŒ¯áŞwÑ×Óå8IÂ\\Õy˜l\\(Ã\Z±A¯ju\0`jßka9ÏËyîÄ9<Ç¡¯7Çø@›ÖĞNS´ÜöO¨îù\"›fSW`ä+2Úå›;‘9¾>³Y&1FMsäíï]ÊV\0æ\ZrÓç\ZUÅk¼myÍ÷p­}1×ôœÚIK7™µ0pr~‘“—&™Í/sÿş]¬_3ÂrÉbí@´¡£*\nYÓ@J×ùW•-ax\'€O^§±’Ò§T.rää9{é4=¹.6®a¤¿MU¯[ğÊ¬ÉÒŒ õ™ßÔUzå|TE•-ÃùÄ$mZq²Õ	e”Phœú¹ªBÊäëßxŠ=›Gùï3eD®>ØÛÅ/¾õ^œR™TJÇ²PcxôšBS‘‡£/OpèØyîïïÁ¨ª”mÙ4ÊæÍ£,:…çyA3~<¹½`\"“M6[˜Úû}ŸL6Íš‘şÈ[^>z–/íqUS‹yà@ƒ\n™˜,–+˜\Z?û‹odja™?ıó/2É¦µû0,Ïç“ıM6ïÚÄßó ı¹îÈÛ!xËëï`öâşÕ‰Ó,Êb[­§E’àº7Ù)€!n³L¡l“1tD¸a\\¨(jĞl¯é\ZN¹D~ö\nk¡¦²˜]½”JË˜†‰i˜¤2]èf\n«RFUÇAÓíàPÀ0L2™,¦a`è=¹>„\"¨T*íåR	Eîö¾çbÛÏóªò±Ao¡ëïêá¾ h>ó}‰+¼ª/MĞÃàú/¦tá…èà34\"!\ZıZÆ5è1ò9we©…<ÒÔïv®[Ãö±!.ÎW|Ÿå’‡\0v­gÏÆuìZ·–Ï?ößzöe+\0q¯Ìñ‰¿{Œï>Î›îØÇ»î»5ıı˜UŒx­k|tì¼‘ \Za5VQvZÚ™‹vúRø~Ğ÷QÈ/³cx€_~ğnÖ\rõãû2¡ˆo\rYÛx‰ƒ …sWf9xr‚‰é\\ËaÛÚ!nÛ±?xøïìåíwßL*•ÁGDÔÓê£\\‘–2zDÔ«’ö5Ù¨ÀÕ´l† tîÙã§xöØ)<ÛEaí@­ckh8~”hv=bÃ¥ì|>Õ¿wÒ‹XÑ@;IápU7!|UšŸMª	èÌ±­Ll¢…ÓµÜ|\\`¥7†:—¼šç)D¢¿U;&©¦6×bdĞ‚OäDÎÂñ‰°ä¶ô›ï­ä«W½/Åc›=©”z«õ *Ï—üàÈIÎOÏ±}l„á¾TU§â,W\rc%Ù”ÁH_ €\Zˆœ¶P%lÑ/U³:¨M¬$…¨Ñíõe`jëÔó|ff9yö3—§¹ùÖØ½q”á¾n|ÙÎûªƒ5\\Kà„Kãòº:ğ\"c¹íÚĞ&[ZÙ¥&ÿ/Ğš~r\rÀÄ›øW`êªe2º)7u~]Ï÷C9.»Â\'¾ğ=6nã¡×Ü„CØÇ‡ùí_{;¾P(•¬_Íêg¹>÷ñìéüÍ—¿Çî­c¬à¦=›¸}×FN<IŞw•20aÉ\0L‹ñ‰ÈK{Ğ¡ã\Z4s¤]ššçÑï?OéÊ<ŒôêmI¢ÿaà ”*t)ğöŸ¹-›Æøä_ıÿıÓˆÍãÈ$ã8¹\"~`¹ŸøÄß²yl˜w¾å¾Æ)ÜóšÛx×?{3ıãOÃ†ÑÔÀø!*ZTAm«\0]ú!ñö`œK¥*…+Š‚¦åÎİé4£ÃkĞÍó3WXœ™¤¸¼€ïz™/å‘®…a˜¤»û@Õ}C”SÕŞ£šwIU©¡Tû]4Òé4İÙ.º2Y–––¨Xe¤€RÅª›¦ª¨ªÀu=l»‚\nšª¡é:š¦£ªZqA‡/ıj|“ÚÑ\\ª4\\;­(J“Ö«¸9¦»´@Q&æÂÌ—ç—šÆîÍkÈf³,¿ş\\ã}+®ï#|¸uçVÆû¸c×&şèKßæÊä,h*¨*g/Mó…ï<Å™+³¼óŞÛ¸eûfúº»¸ø!)®î¨‘IÊV¥áÀ­IğĞN!¨Qõ-V*B°X,sêò4GÏ_æÀ­ÜwãN¶Œbêz¤ÄAÄ‚€p³~R@\Z—ÅUU…‹3:}³S³d{»‘ºÆ‘ó“*^{Ó.ŞÿúW‘¯øÕ2-«À’ ­‰mp³\nÍ\r[÷¨ª‚®i<úü1yîh0_$Ü°iŒ7Ü¶S×êUR†:y®Sô1Éz“xÌL¶~œu\"¹[û=?\"é.•2PV›³–	ÛÄU”oÕTôZL\"Ø¾G¯•*W³µ¿”;Y†Ö®H&	—=‰ì¶5·g<“ûZšÍ½v £ÉìÕÈK\'=[U¨ŠÇäì,®ã°wÃzÖö÷1\r,Çez1OÙ¶éÉ¤î¼Ôª\rdB†«db¥Ía«Šê`ÊHÂH4°ìŒ“Y¾~\0&ØÀ–Š%¾ôÄó<{æ\"Fw–\rÃılbm_O5fh¯ìW“í¥ú½ıVÛ½ó“æş¶ìŠŒ¦Å’ßJBß?«ïQ”šOL2½*\0“ä#š”\\%öœ46ÿ2ÜÇ¡cüÇ¿ø\nã£Ü¼gsä-º®ÑßŸc!_¬ªüÄË›äŠÌgÖÄšœãñæ©neíÈ\0šª°nÍ\0{¶‘R o»@*)‘PÎu-\0	¥2Æ‡¸ÿıôT}ilÇå«ß|‚é»0Ğö‰à…È„çCÅâÎ›wğ/ã|ü³ßâ>½U)T™|/ĞT¤¡súØ9¾òÕÇØ¿w+Û67°1Û6ñ¾Ÿû){ü\'ƒ\\6ğ¯©ş\nâ	×Ò»Ek\0ãûÑ÷×ÿÚÇr<|¿ê.®*2èéP•®LOÕQuİL#¦.R.WVxG©¸„U\\Fhmáz.é®^4]EÓ4tUÇóƒŒ•â)x44M\'e¤°RVµ>¤0C–U¦R.aÛtÃ$JcŠà¾=ÏÅó|„„¤ßßó›º\'‹Á;V’-ğE!˜Y*°˜/’Röl£;“ÆvüHïCÜãÂ¯ö5l_CW&EÙ¶ùê‡xşÄyğ%Òó˜œ]äÏÃÔ4<ßçÎ]ÛÈ¦S+‡FhÊ&A„X‰èÓ¼²Iîš„<q$ëS/EjŠ­P­Ø¤æ–\n\\šYÀÔ5nßµ…{öí\"c¦ê‡~¹¨bD:õdRR¶,¦—¸<3½\\d÷®-ø~tô4wïİÆ»·’É¤Y²\n–ŒÔöf¹\"%_eŸëÊµıTDMø$Í,EQ¨X6§.^æåó—X^ÌƒiÒß“aóÚa6­Áõ¨c®6‹}Õı\nBT¨i±”WóYI% W^Z<¯«Ie·¸VXPDˆDìÓñıw.”!cs‰DºÆt\\ia&).[&Ú‹f÷»\Zá‡ÕÏGÙ õ#;d„”-›™Åy–\nER†ÉPß\0Šª£k*¾çsfr†J©Ì`®›=Æ¨x\Z¶WKR7ÎÑJ†y˜úÃ¯õ,­ì±Q‰óÕÌduÿ¾õÄæïö|‡üò\"/?Çòâ2Ck†èïÉa)|”†uQÛWEAÇó¾øØv¤ªj¨z*·ˆ:CÙ¡°úOÀ\nÉ…ì²ÉÖ&C÷µRÄ·)ù—xÊ0Ä4“Qî„iPÎªÊJ€iŞXy‘6‹ƒ‡Nñ©/|‡\rkìÏµØ6eô³dXzGBw†3Süé§¾Éúõ#ÜvãV\0†ÖĞ;6Àôù©€µQÂf²¹†}+²V\0¦¶êKe¶­ä§îÚG6€˜—Ÿãßx‚âÅÑ™-\0Œ/¡PbÍÈ\0o~×ë¸|iŠï|ûI\n306”\\FáMSP\'eğÍo=ÉÚµƒüşïşZ`à{İvÓN~ÿÿü~îg›JÅ†´õ\n³XJ•]ñYÅvıL]\rJ2„\0¿ÚPìû>”8KÅªP.–ğ\\ÍL£§»¹dé£öôâyœÒ2öò\"®]¡¤é`¤©xU€¦tİ@Ñ4UÅÕ\r´¢†çy`\nç\"è†F6“A×4<_bÙ6¶mãºë¡»ã®mãØçnÉš@h\Z®ë­ˆ+ˆh¤Œ™¸i[\'që÷‡¬ç{”*år…”ÁÎu#ä²éH2 ÙÇXU„‘¾>~ñ§î&eè”-›3§°•@2}i©Àw{‰´©3ÜÛÃÎuc¤L½­\n\"ñŒfÍ,3Ù6:b™Øï4	àéZ6ìÆ~IÙvB°oË:nÛ¹…Mk†ëj@+l\Zm›‰›½ÈÏ.-31=ËÌâšªÒß•!oÙ,J¼íÕ7³mİWK¡¬âê2ŠµàP†óBõNğWæVüeh*sKyyö.ÎÎ×ÙÀı[Ö±m|-šfàúN2Xí@-,\\²´\Z•·úü©~ëº1\0³ªlqé<€îdy\'TUv.B@§b É¾ÍÌ5(²Å}d\'À+„»!Zè!\Z¿;môïtş%Ép¯^d$\nàâ .|qFH×T»LÙ¶ìí¥?×‹ëb4»Â…éPUÖô2Ü×Ëå…–ã„Ø¯xe‰hğö•	Q–”MB¿«L(8]eŠÕÅF¿qŸÖ5…™…\"/Ÿ;ÏÜì(\n#C}¬@R¬§N®IOÛq‚ª	Ç¦bWp]S…´©£©éH*&¹;¬Y0}\r	…*È&6Fµs¤Y2qEñ®yé­$ŞØl\0LÀ‘˜—$Ö°0²³€ßĞÁ.”ùÌgå;nà¡×İZ•Ámb>µ¿ó%\"›Â[.ñØó…ÿö6Œ22ØËîxÕ«odòÊ÷X®ØI…*›±I¬®‰?ÌÀÔJÜLƒñMcl\\·€Ùù%>ÿ…oóØ÷…¾îèx6020ËDQ¸óÎ½Üyû\rüÛßú¿\0½İÍï%N…€Lšù¹%şúÙ³;¿øÎ×5<]CÓxğ5·ñŞ÷>Ä\'ÿæÛX¥\nt§W€ŠdÀ„ÈšD\rrİ~d~èºJÚÔª˜ P”ÀT±\\)sqò2“3³X¶\røXå\"¾ç ©4BÉà§ÒØFĞ“î¤»oE7(ò,ç—‘¾È,›)Ré¶m‘×Mİ@Ó´@\nY€çé¨BÁ7MTUÃ0r¹Ò)×sĞ4Dpoôğ}ğ\\Çw@±ğ¤Ûµñd¨œ,æw¯ëzÒŠ–f|m`Eà¸ùbéù¤•ëÖĞ[1IF‹2t\r¥Úßã¡(:o¼ı\0½Ùøğ#œ¹4ë¹Sgaj^>Ã¶ñÖö÷bê¹†ƒ>Ş\'#›1Ã„oh(\rk•ÇN2>”1VF´9d“î¯\\¾/ÉeÓìÙ8ÆîãŒôåšJ\"´=¶ÎöÅKUEÁs.ÎÌqğäçgY3ÀÉ+3ôf3<xë^öoÛL_O–í4:¶6©•¯î¥µ#E	‹²„AŒ¬ï·Iœ®©,—Ê|óÙ—¸0³P6\Zo{õ-Ü¾sVÕø5ñyJÙ²¼§UĞÜQ“¶gcj9q‰óUÄgÉ^²e20lŒîE‰>¿Fîñªp¢æáë®¨ôE“q‚4\n ÚïGÍ}Q3)%–¼¨ƒ™4İ:\0—Íú¼’KÛœfûW»yÖ´RˆFF4–c%]KW\\×ernÇóèïÉ0>£ly,ä—˜œ¡hÙìÚ°–\r#CLÌÙa!‚Âˆp/[µ¯ğ-Õç\"B{^8Ö\n.yuÅT®ïqyzÇuX;´–şî.„T/d=¼·;¥óÜÔŸzôi,›¾ş›G¸iË8ƒ=ÙÀ$·>+ª\"èËšÌæ—¹43ËåÙy„t™_^f6_äÎ][Øœë\'Îb;>²-ËÒ©êà?ÍWr÷_‚ï]œ­Ü¼úÁ«?ÓV|?ZF¶j2?¹ù)Ì 4\\«\r€©Æ³BQ†ÎÌ|ßÿÈÃlÚ°†vml‘Ö‘Í/.¤/ÁÔ‘e›OæÛÜ°uŒö×°{Ë8o|õ~ğõ\'Yœ‡Lºúá²\r\0€U—	‚Ò¯²Åö¸ÿş›PT…b¹Â_?ü(ıùGY.Y0šzf#C§ãB¡Âİ¯ÚË{Şı:¾ôõ\'xô/€©!º3È°di«~¤Úõ{»9?1ÅŸşÙçyàUûX?6Üğ´t]ã7~ãgyü™—9zâ<8^`âée`:04öÕn«\n\\jÏB]QÀ0È¤S¤R)<Ï¥XXBºø.©t™î^ÌlšfàØ6ÅÂJa	3ÅH¥1t!%Š¢â{n}\\*–íú¨jM\r|c¤išF%[&Îb¦Rèš^•|öªàJÅ0€ƒô)—K‹Ê¥R +,>\n–”ÈnµDG†J\\Úl‰Û$™Ö¤y5¥²Í•¹%–Kå€q2uÆÈ¦Rx‚”mƒğ\'ôtsÓöÍ¼í[xø±g8u~2x§®qff9Å]{v0ĞÓ¦ªÎ»íÄC€#,6²Ú€¤UÓy[ÿ‡fAMh-Ê*Ï¦LL=PÒTµ¾›gÍWÿp\\‡©…%¦§ç°Šer£C\\[dÛØİq#½ÙL½<+\0\'QúÕõ\'b\"+Íñ„À«‰Ê‘¦ªœœæGGOre!S¶0³)ömgëø(¹®,eËé(Ûÿ»«é!Hz¿lìÂ×R„’ÈŒ¶zX+õÜáÿvrÊaŸ–pşJÔKÚ’‚gIX@ÄJ\'²F„hú=¢òºÑ½$v’„0h1Z[ÔÖj%ƒÿpÃµ±Œn‚¼r¤‰]4¿—fãº\Z–´İûWúND¢¢jR#|³ZB¹Âôâ\"³ùe2©]™.$‚ş49Ç#â•-îÜ½[vlÁvıŠ1QÈ¤!|[QŒ“\r åêLm{ÏË“œ¼x‰şsì\\?ÆH_™tŠî,]i“´a ¨\nÒ³˜››åâÄ$(\n}½İ¬dtp”™Æ“5U–K®,,1½°„ëV˜^ÌsynÅ|‘áşãCƒÜ°yı==(ª‰ë7Ùã…H8ú^Y°ÒaEùíU;Ç”ªr çW…:XÍDŠ„h\rEKkåLÖj¼­ &s¼*\0#“÷eq\r×\nß¾ç#9”ãñïä#Ÿü&ÿö×ŞÆæuÃï\rK\rÇL-€×4È&/Íğ‘¿ø2Cı=<ôú;8°wnŞÉÄ·ŸÅ±­ªJY;f•\0¦ö8\\	–Í¶óóo¹—²eóŸşÿñÿı³—çk†ªà£\r€ñ}„í²y|ˆ÷¾í>Æs¼ë>\r]iHêT€i¥ &0¢©œ:1ÁşÑ§øãÿ«„l¾Âîmëùßx¿ó¡1yvÖ^5M–pÏMY¿;WcÑêÍ¯›VIªbwB k*™Tšîn2]]”ÊE×	†™\"Ó#ÕÕƒ¦›Ø–…ãƒíº(š†ZB(¨šë9x¶ƒïyH!QU=\0Ï×Ã±-¤ç,†çQ¶,tMC­J=J	ª¢âwu¡\n°š‰Dş2o¢€¢ …‚çG1œ”í‰éÆ`M$p­eR!(T,.Î,°¸\\EíÎÒ×Ó¡ëXÛqVsåPVÊõğÀ¾]<{ü§.N?4\rŠ‹sWæ(Y²ùmµİÕ%h5u–…nØÛdP;¹NX®X×4]T	`ÙĞüzµ•6µò`Çõ˜[.rtâ2K…Š+6c½Ü¼}7nŞ€ª*8qÏ¹š\ZQ:_& ÙäªŠàØÄe~xä8Å²¶ÃÚ±aºíF†zsÔ‰Wñk–Ñ¿¦Æ9 ãÃ`{Nı3TEisñ’ÑÙx7	ht5‘Rb»+åiBE©ÂijPªW»ºëùAŸ/ësQv”¯®DfE‘íê”Óe›,îJ1Ÿ’˜Èi”(¨ŸEŠ„tNğ«¾cIë}µ\0¦sƒÖÆ¯’Dñ¶M÷\nÁr±ÂôBÅb‰~ıãg\0\0 \0IDAT6\r1ĞÓåzšä…Ó<{â<ƒ½Ü¸e#ëG†(Xn¨T¶œı5Ğ,i\"yp¿W­X&dR)×çğésœ¾<Å`.ÇÚ>ÆsçºéíÊ ë\ZÓóó9{!Hğ¦4\neÛer>Ï2eËÂÔ _,1µgz1cW°\\‰`¨·‡‘ş6²ut„¢åâx^]TD\\Û¸î@¦óóBÔc£º‘qµo÷j_A‘¤X.3µ¸ŒãyèªJWÚ$›J¡kÚµ›Ü®zg%É\"d\'ªaš7+ÁÿÅÊ¿ı¸:Y,J$£âR•cCüçO}“ãCüò{^Ï@¸\\ª¡Á ÀÔ>_ˆ±A{ú¿ûáÏ ©*wßµüâ›8räÇÎ\\‚‘ş(×¾\Z\0ÓàS}¯¢€åB±Ä¶xË›ïAQşÓ\'ş–ÿÙÃÌN/@n…š¯÷õÔÆ1Ë~æ÷³}Ï&~ïÃ_v ?ÈT{^ì^h¼÷xp¢èJ³´\\â¯şú[¼ö¡»yğ¾[P%ĞiªÊ¿øù7röè>öÑ/1Ÿ_Ê×|oÅt“\"YûÒP^ëEl70·¬¿§*Y\\ë…H™iº{ú°’¦á–K(š‰*Òó‘Š‹çXxå\"^yÕOCÆ\r»¢ÔUp|é£¨\n¦™\"íFUƒ¾«êãÊ€5q\\Û)à:6®UÂ÷4E!•Jc•zpºrXÙ.3ÆIÃ4È¦3EÃ“-h©OQ9Wduš{]D3ĞIf˜Í©pE(”*6—æY,”†Î@o†a1çædà}y¾@0Ô•%—2QT5ª,OoWC×b¥JQ`–œ–‰pö¸™9cBzK¹ŞªIINÚ‰llÏJ’IÊ9³*Wèp¦]‚¢eq~z\'œbÉqÑ³i®Ì/ñKoxØM:•ŠšÊæjXBÄ\Z‘ÔMÎº‹Ğ1 \ZšãÏÁ²mN_¾Â‹g.Pª›GGøé;n¢\'›Æv½TŸ:aTÚ±7+[PÔ­¼Ö\rS?\"ªƒ¡T{ğ‚òŸ¹|€¬™¢+“\nù7)q“\rõà\"rÄÅçfƒC|õï|ß¡d;Å¨¯\r\nVĞ­ªhÕ=MQ,ÛÃv¼:\0ê¨E9RÖ&›”µE÷„v}Wñæø$ö4~¾&õ…46¢	¢MaÖ($R!ƒ}\n¿Ñ)iİ7+ÿj¶?¬FÙ˜xLZn!.*±$GB©b³X(Q¶lÆ{ìÃr\\.\\™âàÉs”*6o¹k?ãCƒ¸2Îà‰z©XãwKbÒÂÈP&ŞÿÕ‚VS×yõ\r;éíâ›O¿À_:EÉ:ÃH_=™½Ù=™š¦r~j³“³Mƒ\"ÈË›˜$“z‘’å2»”§\\)¢AÊĞéÎ¤ìéb¸€Ñ¡!vŒ ¨:‹%«\r›+®ñ’›¥åÂãß¹X|8Ù[çQ¯dx¾ëU8e’ï>ÅÜr‘Œ©³qÍ¶mb¨¯C×å’¯˜4ˆhò~ö‰éŒ5ŠÀ/VÀrªÁi¨Ïeq‘r¹‚VÖYX,âÍ.AÊ€°Ö¶¦BÚ@èZs\0õCµ:ÑL9—ç‹_ù{·ó†×Ü‚VïŠÄ1\0#áºa~ôäQş·ßù8ÿîy{÷oãmo½‡?ıØß²´T\nz=\ZÒ§mr$ñ¦ùpÏ‰çC¡ÄXo7ÿæWŞÊkïÚÇïıÙøğŸ‘ùé…`ajjµ+4¥\nXv\0ø.B“¸ó&¶íØÈ#ßú_ıìÃĞ½òÁ¯fRˆ”02õçê7†ZŒã¸P.ú‚EÛâ×şÇßåÏÿèßsÿ]ûÉÄ¼z\0~ùƒoãâå>ûÉ/oƒÊÊêFà\'£©Iš!Å·X \Z_Ëup­Ş¹©(¥zÃ¾/«òÈ*†‘ÆK{ø^ĞôoÙV•M»R¤R˜Ã*äÁ—T2¨‚Ç¶q»\\DUŒª¬n¤êÀFú¶\0¿ÊÆx]Z]¦âÚ=90.©l–î\\©l7š™FÕtd ~¢\Z‚ûò«,x¡ÃCiÏ!ĞLE(é0\"ÈF–m›éÅe–JeRºNwÏóğ¤«…¥£TEÁv&ææùïÄ½geéyß÷{OºçÆÎ=¦{rN;;³	‹Á.‘\0AB$‹)’²dÙré‹ªüÉå¢]vÙ¥/ò«Je³dº,ˆ‘\0À‚X,6\0»³;³;9v÷tÎáŞî›O|ıáœ¾}c‡YlªvfºoŸø¾Ïÿyşaqm¿X3Ù\'Îå÷^½Ä@Wšª4ÍMú]#Ñ);¶Rïª6ÏİZ\"ïv’²¸iF3i´âÜı†Ó,¤á\\6©\ZBTê³M\ZP¡\\bny•©¹e2ùíI\rôráÈº;ëŠgñÛˆlZ¤nİZøè«\nÅ<ï¡©:ºAJ‰ªô‘qîŒÏ’Î¶Ã‘ÃûyáôÚID˜W´Sá\'~en}ÍŸ‡-F“&uøNn\\{0J\"åÄĞ`à¶§([İäm\0U³@ÈÖ÷§N†ÀG2·ºÆ­±	¦—3üá—_¥¿«ƒB¹Ìj&ÃõÇ“Ü›ZºÎ®ôıÊíL%9¶¿ŸgÓ×Õ…®ë8›ú¦Ç^`‚f‹¦\n¢††/ƒé´íº\r9T{½?5€wK^)eÎU`è*±ˆNDW)Y…²/½À%1lÀDtS“”ËEL/òhf‘ùÕô¸xôÇ÷Ò‘J6â;Ïnre¶¶ØZPZÏâŞş™Õ»6\"4ÆÈ—òd²Y|OÒ™j£·=ÅR&Ã÷?¸ÅõÇ¤â1¾|ù\"û:;p/Ø3k\nÎ-§1t%Ì°¸·C†A“ì¨jØ/5Ä*)AÕ\"èëç›ŸÕ¹|â@ ·‚éå4Ëë9Ò¹™|‘é¥4ë¹â&%ƒXDÇ4V3i„¢ĞÛfÒw°ƒhÄ¤+•d 3`d¨ŠMËê}3¸&ºªĞ•4)”]\n–Ódmú““5÷½…å^}$€$\":]	“¢ãQ(;”·F\n/„ 5ÑUI®ãŞÔ<csË¬¬gQUÁ§Np|ÿàŞü¥ÄĞuÊ¶ÍÃÉI>|0Âz>Ï`W;%K0:;Çİ‰ib¦I<\Z#\Z‰ùŠOñõ©âÂ:^«şÃnl}ÇcG‚M\rdU÷¸ìïjCïHpd°›X:P²ÂJLS\nÇbÙ&çx\rİËÚ	ŒhJÂ—©·ƒO>zÈ·¾ısèçÌ‰áºåb«*—--Ã‚YU¡³kwÇù“ÿı?ğÇÿğ×øÆ7®°8³Ì·^Ë\rµBìî64\0j\'e›Î$_şúg8{öÿßŸÿ”ñ|‹|¡QtZ\n™D‚$]††xák[ìâŸıóß\'S¶ùá[W9{ú(ŠÖ†ÊSæò%ÖÊv@¡«Ì‹:,&¾$fèô·Åi34O\"¥ƒ*J|põ6Ï?Ö\0b„=¼Ÿßÿ_cza…éi=†@¢ª*k%›¥²M9Æ7N²h¨ü\Z3MUĞTx¡Å¯~ÇÁµ­ÀYúg=t³­ ·Åõ\\J…,V)PT@`•Š8ç88V	×*â²èº&$~{Šª \n)}4MÅ’>V)ï9\rÁóğ]ßsñ×*á–KÁ³¾¡‘][@7\"h†‰nÆikëÄˆ·cÄÛHD XîÄvCq¿\"š7À›nú»}ÍEsj‹l¼7òEÊ–MÌ4hOÆğ¥mŸ·&§¢E{ı&`h\n‹ky~ğám,®£~Ë¦{°—W.âÊ¹¤bÑj÷ÍÆ#®Ò¼èªÊÊz–ñ…%:’qú:;HÅãXóÔ„á§-r·ë6Á‡¸¿[:›MKX)šk\n\\ßgamƒ‘ÙEre—d,Ê¥‡8<ĞG\"Âì¤¨šÂ4WõWäº5.uˆ8ü³ª*¤¢,Ûfjy•ñ…<_ÒŠ³¿+®é[zá},Û7Ç&›[¢T,ƒíğÙ³Çxåü‰OEûÚ±ÈlqÊ­©=µ”™êO6t•ÅµwÆ§˜^^åäğ ÉhäSmÍiÓz[ÔÆtH(”-îŒÏòÎíQ†öí#2³¼ÆüÊ\nK™,Ùb9œˆ\r\0UQ(Zg¹96ÅÌò\n_ºtCûPB[üFëız·eÉ^´,f–W°l›öD‚Ş×Ç—~óÉêî¯lA$kõä\Z6siÆæ—)”-º;8Ô×Kg2	ŠŠ¦(HéqcdŒÉÅ%6rY|_bh*íñ>Ó0B*ŞŞ‚.wû½Õ.^\r\nuÙœ²u©¶Õİ¬Ã¤Äs=ÒÙùR‰T\"Á¾6×æÖÈ8o|¨¦òê…êïÃ4\"U9] U°JACğæØ$IW[;±h4Èõ½Ú© ;‡®?íT&\Zqh`€®d<Ğ™\nÁ`O/Kë96\n%,Çá»ï|ÄúJ5¥»-É¥ã‡¹tü¾ï£ª\n‰ımøh¨ªNÜŒñR`{~¥V½~hªJÉ²¹>7K,bĞLbšq\\×mœ)÷|^’İ_0%ÜOs¥\"#Ëó,¬fX/Úìëæü¡ıX.EES¾osıÑc¦—)Y%tMEAW*Š/Êı^oS0½µ˜\\XàGŞ`9³Î±ı}\\>yŒñùefW2¬l¬Uh˜gÒğÔZN\ršèÀFo|ó%>÷ì1¢Û\rh^A9_âüù£(•¡¶(ÙõŠªT^ºTŒ‡“‹|ëkÜ¸;‰«*áp ~C\04ğ£·oĞµ¿‡ÿùŸÿnĞ«^e3ÊI÷0ÏGÄ\"Héswd†ıo~Àøô2\'Ïæòü\nïß€˜ªìaÓÚ.†¡qúÜaä/ÿêm¾ıİŸ“Ï„4,MeËd!,$,›dÌäK_¼Ä—^>GG\"F±d9™CWG—/Ÿb|v‰úG¿NW>fÄÀr%úï_çg?ı{«h]¢ñ6û>ÂóÙ`ô›¯ğÒÅ¬¥7‚á‘í`&bE2ºÖÀ!¸|ñ$ÿÛŸü§ç1ÌˆÆ£¼yõßùáûÌN/S¹\nˆñk»×~Õ=ª»¬]ÇĞõ ëëyxŞÖóây.V©H¹”Ã¶ÊÁ¢ãÙ(2œf!ñ]ßuA(ñ8Š¢â9v`l±\nX¹naƒˆG7\"XtÃDÕÔ¬88åÅl\ZÛ*UÕŠV)4E }<Ç\"WÈâ9FG3ãä:z0Rİ˜©nU’ì¤h9x~€¥+~­§B)«{Ìš«µ¢âˆªâhsÃò±ÊíKÅhOD«¾·‘–V[ëÔ~¾¢Ö²Y®?~Â_½ƒµµ\r04â¯½ü_zş<ƒİ]H)*Ù8¢®xªLXÂµ@ÓT–×³üôÆ=RÑ—æ™c‡ÑÑ’(,šüy7¶§Í®e+jOsš¨^MRøvÇ·ÓÆW-`®ÄAy‹+ÜÆ“-ew\'Ï=HoGªª†]W¥î÷UQlªËÇM#«ÙÊ,ÇfÍ)“Îfy49ËµÇSøRrú@?Ã=\'1#&®¯T6BÛqXJgx8=Ïüj\Z\\aF¸|â0çS(»{š‚m\'Â–õc.Ñlº\'w\0=õ/`øW¾Ïøüïİ~D*nÒÛ‘¢§=EÙñö,î¯İ’šÅl5\ZÏÖó%ÏòŸŞz„`u#‡çyêïåÈ@/ı)Ú1Ú1\"šJ:Wà‡×îpõş8³Ëk¤bQ’ñ(ı]][\\yQ;E¬ñÅÙd_+AÉÈì\"SóötóÂé“D\r3XóZ=Ïõzz¹€©ZD\r+„\Z÷;ßfvi‘¿¾v‡»“³\\<2Äo|æ\"Ï:‰@%W,°’^å/Şş%ŸŒNÑ5^>}”×9Éñ¡PŒÀú^U·¶äŞ‹ÖjšUõı®7¨M¶ßŒ‹-©çû”l›¥LËõ8ØßKÜÔ™ç§×ï0µ°Ì—Ÿ;Ë7^|&Œğë¬åeC@¯/}nM’Íç8¾¿Ÿã‘ˆF³•aÃ¯‚nLŠTlOàù5#ÙßÍÁ‰®)¤¢\Z×>aêÉ4MçÄP?Ÿ»pšÏœ=M®4uM	2r|Q1!(ÛŞ¶k¯ª(”l›kF15Á‘~@Á¯Àì¦R¥EÑ6²eÆçæyóÆCL/ğ¥‹\'9Şß†¢\'ñ|Ÿ|±ÈòÚ\"ßyû#îLÌÑÓà«—ÏpùÄaú:»(92h,í¡é·iÛ=³´Â/îÜã½;¹rö(_ºt³‡É[t··a\Z:]Ä\"Æ§ÒÜ<Uç§.xF£2²ƒH]W™[ãi`hjà½ùÂ\nÁÇ3_¢*ŠªTºË¾„DÌ`zeƒl1~Ş|ËÅô8\0‹èn#7¿Ê·ÿò=.Ÿ?Âï}ã\nÑˆ±•e Z}hxÂ¤ë!â&R×˜šYæOÿãOxí³çp¦íKv-ào%š¿G7Š¶Ã[ïÜàÁí—ÒˆşŞpùµ‚ø \ZÀõ%ókÜ¿7N\"bP-S…&Do¼yé{Äã&ËkHÏG×5Òù<ø-\0LU(˜€b±ÌØ“Ï%—+‹‚l6ÏÏşú£€ZU}]ÃÕÍŒèDÍ~ØÕ@Ä4˜\\ \\¶*£ßği¨}k\0L#5Çóa¿\"j…¢	t]C `(»”£˜ËP,YøìbX\"E< ÙŞŒ5_Õql|]Õ0c	Êß*P¶ËHÏÅó¬r‘Ì\Z¶ë¢j\Zëa²8¥BğYF¤’-„°RòˆŞEÕPL_ÓÀ÷Q5UHÊ¥YÛG3tVÖöQ,áI¹I/«®V«†‘(#Ø‘>ÕÀ\Z­[cMAÓ<$Òvˆk\ZíñhhR ›ó·›¸E	n«tùóŸ_åÿzı]2Ù\"”mR)>ù¿óêœ;4_kzV}‘êx>û{:yí™ü¯ÿïyûÖøÅ—øÒ¥óÄ£&ë¶\"‚-èfEÈvú‹½MqDCÍ—>k˜F„T<¾³åj¥7S¥×h¸ù^i0»°ÌÍÛÁ©øì¹£<{l˜D´¶ãÚX\\É\ZÇªMZc­N£öç¢Ë¶x01Á¿ùñ{¬näùµËgøÚ‹Ï²¯£\rCÓˆ¾T*Ÿ¡«*‹kë\\{<Å£™EÖ7ò˜Ñ—N¦·³Ï»šJµêz·ÔRT[Óîro•¢y>Ë¦şjz5Ã\'cÓÜœå«Ï_ ‹‡\Z½İ=/	€Z)>ëİ j±D­‹ ”~E{d;nà’èy\\}8Îó\'ğ÷_¹Ì+NÅñQ‚	¸¢ …Ó×ó¹tâ0?ùè&ÿËŸ½ÎÇ\'8º€Án|ÙØH¨å‹ª^ŸO[<Ê3‡¹ùxŒ›c7›_æ›Ÿ}‘} ı¦ôÈÊŠTe4°ùÖïÈ²®	\\ØüZ§Q¹åî%•ÏŸ=Ã±yııy4=ÇG\'8sèe;Ë›ßá[?ÿ™ùe>é4ÿè+WØ¿o€x4äŸ	¥r+]å]L`}ßoîŠXG?ªX‡5N«dû,êÚï[Ûc—å²ÍüÚ:/yöØ0ÓËiŞ½ıˆOfèïáÌÑ#öö…z.YCa«§¨ÉpÿågOòíw>ä_üùøƒ/¼ÈËgÏ0Ğİ4fêÀYãû(jl¶ŸÈ€10T¤iàp„Š@R,æqİ€êe\Z:g2ĞÕëûèÚ–DÁõä²À\\Ï#3ùúgùWÿåM^ÿğ.¿ÿÚ\\<q’dÛ¶t)jÏê\n5@|\' Q¥õ%,=’ä•‹¹ráÿÓø.£sK¼{g”W/]\"“ÍğÓkŸğo_GQ^¹p’ßşÜst´uÑ\r„\"Âø¾½ÍI!0U‡«÷ñíw>¦3ãÊ…óœ>t„¹Õ4?¿y‡õ\\Nç@_/13R1DøÇ0Õ%«ØÜ³Ô*:™M­	kß&‰HÅxıÍ¼ş½R01Ôú:6K]ßü¥^`oL{5Õé®;úcñ|hO‘YÏñ§ÿî‡œ:<€¯ˆ@8_#ûØÀlñÒóƒIHW²lñÖ›Ÿ ’QŒha»UÇ6şšœ“ê’ÍË÷¸óp\nw£\01¸o[2ahd]—7v7ÿê½@¨/\ZïB	:7?Çş®»ÑÓtİÖ\0&Øeğ5…™ÙşìŞë`•€ú,Ÿ@ğ\"Zô”ºî¯„HÚ>BÊÁT¥a‹w¼•ÎÀ¦«èF0²,ßópŠtMÇsì`Šâ{¸®‹ô‚\0L@Ñt\"Ñ8¾ï¡ê„ª¿Ñ÷ñœ ¤R)¾¬ë`—K¸®Š\ZŠß}6e—Šªá«\ZB(•¿\nB	,½…&ˆ%Úé>Œm#ïB<jŸôj·ïq~pÆ~ÕÖ(;vókB\në¾l×¥l;Ø®‡ïyÁø<‹h®ƒUãfA,¡P.qwb|pƒŸ\\¿ÇÊâ\ZHö´óÚ3\'ù£¯|–SÃƒ˜Fd‹ƒ¿\r%¨šÒáù>‰X”#ı$b&ŸŒLÑ5®œ;N{\"Šã5?oUU(•mf—WèHÆèéh#nÆ°]Ûqk¨­Ü‡j7äúÜæë£ª(Ì­¦¹õd’;O¦¹rî8_xöL¼VOÏ¢Î·c\"[\\£@â227Ï“ÙE°Œ®v\rprxöDUQ+9ÕE‹Gˆ¬Ğ•Z‚MA¨ğ`j†«÷Gx÷öcbÑ_}ş</œ<Â¡}¡%·_1ÚØ*z=Ö²YÌ-°–Ù€lä@/_{áÃ½]xşö÷`7NP¢æØ©¥	o×!¯‚\rrÔº	¡ã:LÌ/2¹°„ãúôu¶ÓíØ}Ü<·ˆ®aê*Làù‡úzˆèÑ`mØV O¥Q¥\np\\‹~t›_ÜC‰F8¸¯‹+çNñ…ËØßÓ‰P4ÏŠñº†eÒL2¼oÑ¨ÁÔò\Z³«™FMÜö2´\rU#OÒÙŞÆ‡0»°ÊçÏŸ¤¿34)š4×÷ØÈæˆê\nÉh”H$Š”`»^°.4 ™Æ<Ñô=U‰F¡ÒÓÑÎÈÜ\"³ki>xğÇÓó¼ùÉ=f¦øõÏ_â7?s™Ó‡‰î¾¬\rmÑĞØkWE3¾ÃRÈ*w´Z{jÙêÂËmÙ¡ÏO F$Ùbß÷9w Ÿß~Ì/o?diyö[_à³ç˜¸~h…[mÖR÷ù›Ïs{ª“¶DÙB‘ï½ƒáŞn.b>]hğç©~Ö³ù,ªâÓßÕÄÄñ$¶ëâ†îˆ{eÿš‘(år…ô3‰áø.Ë‹ä‹ePLCãÂáAö÷tày²2İ—OAu“¡®¶=ÙE,\Zgjy„ï¾wó‡Ğìa1Sª±J¯Şg%’ÌFšT,BW[\nWj8®œ¿ç‡Líìú\Z-m<	ªª5#!iOÄÉ\n<YX&úà!wF\'xûæ}Ö%şà/òõ/2´¯„V¡…r½İ_C×q\\—ï½ƒtéûüw¿ş\n—p÷É8ß~ç#l§Ä•³Gùâ¥óD£Qü¿üÒä=Üz·´Æq6ÛLÚ	èª\nb”ØøØü]~¿`‡ÏT{\nÓÀs]nÜyÂ¿ú·¯3¶°\n¦¾õóÍ\0Læ¿şßÂc1t0ÇËrªêòíô/MA›oÜÍE»=\Z;Ø(Ë° ¡#©m¨ÍZ$aÙ_`¶£\ršôu7™Î‰Æºv§¤úúl`üm¯o³Îep]$šnO¶aFãh%Gb~?¤™ó9\\ß£TÌã”KøÒ«tMJàN¦¨ ¨•SSUˆÅŒ%HìRG±‘J`N %\0xr‹.„\0!_?Z\rÀ‡ğĞ4ƒx{û#ÚÖC&_Â¶¨ª\ZĞ«üæš“Úìæzq°¨ÛìdCw¹UùV,ÛäŠeÊƒ/%ÑĞÁEĞh¸%Iİš¢¹®ËôF–GÓs¼õÉ=şíïC®€H%èHÅøÂÅ“ü½—/ñÙ³Çñ|š˜h¾ïc\Zº’)ºÛ”rEn?™Aú.º¦ ìVöÑ\nï³²±ÁÃÉiİ ¯§›hÄ \'§3•¨tÑëÅÿµt½V/YóµMSc3óü§Ÿş‚éµ\r÷÷`ê*EË\r—š­­±¸mqÿšòŠØ®Ë{wGy0½\0Q“=<sô\0\'†¨µ ´Y}$i*^—MªXÛu™[]ã\'×nóîíGXÇûò%¾òÜy¢¦‰íxUSŸÚkš-™\\Zatvb±ªÊ¾®v.?LW*Ñ”’ú4¹\ZŸ%¹7ºGC6wUèéæyäKenN0³¼FO{’¡’1sÇâ`ST´,f—ÖùÁ»3uRW.³¯Ë@Wô¦¶µ²Îƒ\\S²ù<7GFyãÚæ\'çIõuóÙ³G¹rş$ûûÉËHì†§u3û¨ì(H¡ÑJ/[äŠE4EàP¥»©Î¢¶îÚ¤°FtƒdÛq™œYÂqJ(ÂÇCmî6ÖÇbn)M¡l£x_{’¾Î®/Šn´l|N=/(5UÅu]f–Vø±ı	7F§ÙÈ—8æÿõW?Ç©ƒ)9p×Ã]€Ô¦à‡F-Œ¤‰î¥šú.v\00uïªç{Ë¤ô0t¤Ç­‘qf––9´¯‹/\\<Í}m¹mLıoF¢´\'’šÆÄ“Yr…<İÉóéÂ¶ÃÏ³YK§™š›-iFi›t·¥B]êŞŞw]ÓIÛ‹«Yz:UÃ¤X¶¹;1Çz¸ºh%c1Örö§ÊUÙt:FÌÊó}wt\r—ûÉí\0\0 \0IDAT˜ÎB¦Tİ:l¸Yg15¿ÂãIa$ˆF\"t&ct§’8¾(ğ»\00µğ¥‡ô<LCÇv]OÏ3µ´Â±²…2_}ş<¿ı¹ç9>´Ÿ•¬6™wWÕì-J #^\\Kóı«·™˜[æäN\r÷1>?Ï×ïqob’ß{õ9¾|ù‡úXÌ°=ïoÍb¹ş†mNÜµAG\rÈ[½+	Ûëivø¼j\0#ZÌ\rG-k¨¾‡ˆEp|ÉŸÿèj0I‰­©qM;ÿ¢ù±ÕO“v0u6_\rÒ™*‡²\Zƒªó¢ 4qTk>%kv<-¦A-íwë€T…Ú%‡-²iµ»½î)\0L•Mñ{Åò7è€èºNª½ƒöÎn4,«LÙĞAúkR!‹Äq-|éáKé	\\ÛÆµ­À`ÓÍGJ„¢‰Æéèé§­«7ËfX_[ÆÏ®#í c#%ø»ŒçºAX¦¢¢èf@óS¤ï‚Šª%hkëÀL¥(:.Å¢CÉ²°,/¼Vbû\\¸Ñ‰ŠÄ³¹çQíõM6Ş¢e“+•)ÛH^×‚\rA(ÕÓ¯úIwPrÙÃJ&Ã~ç\Zo|t—Ñ©P$côuµñ•K§ù§¿ş\n`5WÚu7³eHMñY]ÏëÑÓÄŒMó96Á/%Cc »ı¿æİë÷éìå¹ãøƒ×^àë/\\ äÈéd­òGZ»çÛŒLNóî·9vò0m‰ªªÖĞj¤ô:ÿÛıîjğæ=°l‡î?áñì2f2ÎùCƒ¼|æ§‡ûYÍ–ª~F6t®Unm;P}é³”YçÏßzŸ÷îĞˆó?üş¯qæà0ªªS\nİ{ZA½¹Õ·Æf¸9>‹m»töròèL3­ºö-4CÛİ‹\n@dKl¼C|d¥`‘UXT“!`´<—t6Ï»wF˜_Íğ/0ØÕF,bl…nóåù÷\'gøÏo]åÇo^åÜÑ!?{œÎö.İŞåmm¥šâóxfšùŸ²ÎB,JD×yöÈûÚ“”,»¾â×Ny~p††ˆùMM!ªe‹Zb¯¨(Tƒš0•€ˆ®P,)Û6fÄ ¢ë(\" <·š¬éšÊ@W;ßûåÇ|ûíklËìïéà¿øÿø×®³J®¨3\Zu§[Û¨™hª ÑˆGëéuİçq2†,Y<÷ì)şÇğuºû)Z~eúÒjÍÙkX®¨2ğ¨cÕ,UÖåØl˜¶ÓÅ4¡üJ67Çf1t˜iğöíGüüÚ=:â1şá7^!\Zm§X–¸¾ß¸Ï7¤ÁˆJ˜tg\\Cà°‘Í£&bÄ£&>;KèëlãşèşäO¿Ñç\ró•Ëgøû¯¾ˆª¬åíJBÄnAÅæÄ)Ñ…¢mó`zB¨iRtTÊ|Ú0—`Ò¨ĞÛ¦cY%¼’E[Gº®ãoÓÀÚ|&÷÷tò¿w?ûş;Äz:xæè¿ùÒ3üöçc-ïQÖöòåù’˜®Ò™0ˆ\Z‚…Õueó•\Zò…³Gùï÷+Ä¢m¬dËOíÂ4KTæW–yÿÎæW×èëî ¯³÷“÷¹öh]UùÃ/¼Äïá%R‰Ó«¹J&Íß\"niäXŠŠ;Y‹â©é”Dì¢ˆoñ¤W·9?-€©Š\0-(w0²ñ\\6\'L\rÉŞô/¢ñÇ¶.íÀìtm›±pk`šĞ»üºãk¸Võ¬3IMLô¶ÇÓÀl‚–ğßl×Ãñ%Z5åQ	42šª’ˆÆiKuâJ²mQ2\\Û\n6^UA• t!%¾ïá9®ãP(ä°Jy×A¨*ª¦#ßwq×u‚i‰„]:V	ßsÑ£´ˆYqÇğ<á¹émuÛ‘H×	×ÀQÎvt×A„6Çõ°\\7àXW®M•NbØÔÇoÓÈÀÍèdM»ü’BÙ\"[,…¨9ôªRCÛÛÔ•hj`f]¶,¦–WùàÁ?úè6c“ó,¥7Àu‰%S\\82Ä«Nò¥KçØßÓCÁrwMÍh¦w04¥ô>ajyıøæËB§d»M«ÕÍäg]UîéDDÀ²Ig²Üæü¡ı¼pêÑH4´İ^ç²›.­®©¨BğÆõ[¼}w4\r]Uñ}(Û~ƒoÿN,íÚ–Z:˜å8¬¤3ÌÍ-eqøÈ~^{ö,}]Êî–s¬zv*¤İğyêÃëêÉÔ5fVVyïö}şú7Pt•ç.áÒñÄÌ–Óºû¦(éù,f2Ì--SÊl€ç3ÜÓÁùÃƒ$¢‘à{vx&¶ÓK5ë|ï²Ri*+²¶‘µù>9®ËF>Gv9_.“ŠGIÆ‚¼#Ëµ›Ú‚ëZ Ïd³\\{<Î[×ïòÎõ»X¹<ÑdŒÎ@C´í¹š€TTå§ŸÜáîÄ,¿÷Êe~ğámnÍ ª\nÇ†úèiORvıZnµ`|©-8W*c„™¦a ÊV0Ñ®ÍuÚ†@Ó#(YS‹kÜŸœÃ4#|îÙaâÑ$¾¯4¹\'²HE¡+™ -CQ¼R™©ñîŒö1uñ4Édª¢…SmIëlÙàNë¸¹Bùµur–Ü¿’ÅÑ#ûùüÅÓïDQ´\n}qÇÆÄnšU¹J[á3îu5ì-ÙäÍß	ÏˆíûöEËæñìëù\"k\\{85xñÜIÎ>Ša¡Ö²UDpío6†®>åãÇã éüÆKÏĞ×ÙÍôjë)Ìæ{ÜÓ– ·#…FH<™[âF*Á•³\'éíÔÂ~SR)‰:‰(IS¡=®³œ‘<š^d£P¤»=ÉÙ˜†ŞòŞîiò£j”-›woOñhfTGŠßºò,¾ˆ°¸^nñù€U…`°«d\"®K1WàşÄz;ùì¹ D÷|şP”‹¶Mn©Èz¾ˆ½™ùg;œ=s˜¯\\>‹I†Ô`ÿ©®¢(¨ŠB®°Á\'ãüìæ²…ãQ,Y´§b\\82ÄåGyéÌI<2»Ú×òoyÓhv¢íü¢ÑV¤ú´Ë	ÌæÂú©\0L“‰‡”¡…ğn\0L“Â¹%€ÙÍ„¡	€iFk	`h`vüù½N<hBG’÷s[\0SE}j	`ê;?»TÍ=Y™Ä¼{QãÍ¯„“]Ó0Í(1×G3TÀ¶Ë@ÀóD|ÏÇñl|×£Ïa•KHé¡(*z$†Œ·ãªz0V•P*æĞóq4İÀ¶,\\ÇÅwİ`º\"@QT\nŠn z.Òs‘¾·5Y’>BÕ¾D¨\ZÁ÷<TE ¨İÌõüPt¹Sñ%ZnxµW¬V3#›0ˆj\'1„B`Âäo5ìäKke‹t6ÇèÜ\"wF\'ùàŞ(·îèÉCûxéÔ^:}”KÇqd°ß—äËVå8„h¾lwº†®0³šæ{Ü¤P¶xíâi¾şâETUÃv¼¦Ï”ÓĞp]—±¹eŠd)\nù’EÙqÃÍúÓgl:6	 W,òæõ{|<:–ˆaš@ÁöÂœ…&LÌ]¬Ï[Óo)‰E\"L.®óÎ­‡¬näˆ¥œàÜ¡$¢QŠ–S;J¨M¢‘N¶mÇËãñÔ?x÷:s«.<Ìñı}ÄÍh¥®4ÑTèšŠãºÌ,¯qíÑ8£s‹ıbG<Ê@W;‘ĞíçoÍÑf;Zc‰\\óç|±ÌøüEËFW54MµFÍ_Ï¨d+Ì­¦¹9:Á›×nóá½Q629èl£¿¯‡D4„Ó:#hsšR¶-tUãø`ç\ròËûc>Ã]©1Ó¤˜-m-ÛÕíH!jLz]×%W,ÓÓ–DQ5,7Ì€ÙU¾èºJ¶çÖØ$Oæ—éioã‹Ï=C\"À“M\0Lå	š K™\rrÅrğÜè\Zä‹”Êö– ºaoÜ5¹å8¬fÌ®fÈ•,0tÌdœ/^>Ã•s\'QU=Ì!Úò®ë\'YkAP“NW`äÓİ[<§¾3t1}8½ÈZ6‡ã¸äJe¾péŸ9ŠÎT[˜A&wuvÁ»+ĞÉÏoŞçæØ4C=|şÙsôvv‘É[Í+³p\r4MåL–™Õuˆ\Zàáª¹’U™íµ€÷¥$aF0”ÅR|åõ”möLòü‰ƒÄ\"FÓœ©½ÖÅ±ˆJz#Ï?¼ÍÜj†Cı|áÒ4İ$[´[¿¡©èªÂäâ*éB©²ß”,›BÙFÙÕFË†P¡l1»´B&WÌ43å•\'yõÂi\\3~ïŸ¯*\nç±”Ns÷ÉŞ½ı€‘™E\\ËÁ4\rú»ÚxöÄ!^8yŒãÃC´%’”ì€Í¢ˆ¿3cåÚI*;!ªŠşzşÎ™2Û˜]é­&0µ]³­\"o\0¦EJpk‹éVô9Ñ¤]\"·YZk`võùÛª\0LİyJZR¿Ù4i»•Ç¯»O`¤&jUÿ¤°inºÒøßè¾Š)ªªèø‘Hàœ¥ªÄCKeÚ1»®h`„ \ZB,MP%ƒ¼×A(\nV¹L1ŸE7LlÇ!ÙÔ2\0,›ô1„ÀŠªŸ+E¨±QP4\r_±ªŠó¸nèhš$ aøUÕåf£º‹¾ù¼ˆºìYÇZÜ‹‡\\ôêİ¶ê®-›|LUKJUxÒÇ÷|¤ïòd~‰ÑÙEîOÍò‹»£ŒNÌaçŠ¨±ímÚÇgNæ·¯<ÇÁ}=UÅ²J fj×eC@,–ËŒÎ,ğË{ct&c<ò0g\r“/•h!Õç®\ZÔÛ×™\\\\…01f\ZAjs[’l)º65¨hM_’\rë– “/po|’OOP\\[\'ÖÓE2Å0´J7zwRõMµ4V!1u•™¥U¾óŞÇ¬».Göq¬©º¦a9NÅiiëx›•ç­…ï›ç¸°¶Æ‡wññÇ0ûºè!‘/9ºZã2U½|Jé³”Ùàwóó_\\²¯Üª\"-ÓDÒ­ºåOŸ/#¶®E«ÉN•µp:WàæØ9 3G\"(ÙqÏopÚÚt›Y^ãíÛøÙÇ÷x82In#ñÇ‡ûŞ×‹+Õ@´+›O6©~®ç±\\(òÂ™ãtÄMV3a‘^,£(¢’mRß’¢ÖˆB‚’Uf#ŸÇv\\öu¶‘Œ\'X/:UÅ½Ø(l:g®mlpıñrÅg\rséÄbQ¿Ò—mcª\"È|øà1wÆgXÏƒ‹«ª´\'ãõv-+•‰å^l|Æ%+°˜Î’Í—P\rcxùüIN°Qpv[ÿVÛ	È`¤Š\\_sÌ[ë^“iáR›¶B`hÏ³y2·ÄÆjšXGŠ‡‡øâ³ç8sp¸‰ˆ\\nw’ËêR¹ÀÕc,¯çxåÂI’Š\'(YVKcEQ0TxãÎcŞ¸~/Ø»‰¡k´\'bô´§ˆš9«¼7:™”ÄLSW] 3±ì\"ç‚çÑÓ–äâ±aŒ_ˆ	Îßg=·Á/î 8ä\0‘\\×k¾ßˆ`Mó\\›ï}p‹OF¦Iƒ\"Â)RŒ})Ö\ne×İÓùoŞëbÙfrqõb	ÛqÑU…KÇğÒéã`bi_>­Ëõ<V2ë\\øˆŸ\\¿Ã£©y\\Ë×åìÉCüÎçŸçÕgÎ ¨Š–ílíí×à¥úKÛpÔWÂ{0­(d\rŸ¿W\0Sç*²“Y3êRKQş6\0¦ğ4¼ï$šohá40MÎu{\0Ãö!Ñ¼_ß8}©[áê\'0r·šSÚØ%€©üìÖišŠ\nù¤¸²Añ-BÊMãX‹PxOè ª\Z8ŠùšN$¶mƒ\"èhï@×\"x®K±TÀ¶-Ê¥\"VXé¸ÁFïØnE(\nŠ„_:v	_„lz^Õ4OAÑtTİÀó4„8€ùNßsÂÅIÅó$¶í`ÛÎVvJ—@6åÈmSØEÏ¹¾˜¨ªá(ZÙ¢EÉvÀ÷‰\Zí‰	Sgri‘Ù%æV×¸öx‚ã³Ì/¦ÉKø‹Ş‘âÒ±aÎâsçóò™chªØµº>[jV;¶lâğU:¦Ñ~~ã?úğ6ë¹_¾tš“C}Ø®»öäæı\rrj4U%¢©<˜šáõ«7yıÃÛlJè±(®çn=–Û.À¢¢Mj–^MŠ:™\\_Üáßüøm&WÒ5Ñ5…®TŒ˜©Wèª \"¤s5AvR4]&6Aİìê\ZwFÇ™‚X”îö$½É°ké³•÷Rõñb»µ½ñü´0/ã»ï}Â_ß|‰(š®bê:±ˆ^Ñ“l9††®ÒÕ¹õdš}t‡t‹ÕlÓŒà¸.¬…×*ğ±SÆO5xoXãÅÎYÃØÜÜª²Å£sËX®‹ièhª¼c²–\n54|~yo„t‡wn?bf%MO*I\"ga9Í±NíètMÙõM…¨Ãõ–ÖL,®MUAtÍ•*»ì-RBÕµ¡&ç–™CSU>ş8—UY=‹íA£èªB&»Á­±	Ş»7ÆÁŞNÎ÷cê[×#hYÉš,5Ig×ùddŒï¿ƒÇ³‹x!½Ì?;( Å6ÓÈmÀXÇZ¶ĞÉ\nEÚS	^¹p’T;%[6mòTjA)F4º–†S­\n}¬¦ğ¥êY‡\Z¶ÃÓo®è^Ht\'Y^Oó`|’r®\0ƒçNâ¿øÑ\rœfz­fËmxL	“Åtšï¿‘éE†º;xõÂ‰`ª]-Ü®’E%Ñ°ìïÜ¼Ç÷ßÿ„[ãsÄ¢QŠ²T¹‘Š .ge·ç-ñ|IÉ–lmFçVX^ß¨ì•ñh”Á^Ö‹^Ho}ºa—\" #nòxzšïpƒù•4¯>s‚ËÇ„æ#¢¡1€¨ŠF\"ª“Îf¸zÿ!¯x‹éå4f,FÙ²¶èœB<¥T\'`šäK#sËdrE°lôT’o¼t‰ş®æÓùfÆ—»›tù>css\\4ÂÕ{#<Y\\Åu\\ĞT”ˆÆ•gNñÍ+/°–µ°,¯i3©¦ñWg{ğ7ñ%*ïbmƒ[k(¢¦\Z¢I‘)w.´ë\'.Ÿ\nÀÔN5änèhÛ‰ÇŸÀlwìMLâ\nxie(°ËÉÖ®40ÍÎKnO“¢N£³€ip5Ún\"´\0#›¶Œ„(?LÖUCÓ‚/>¾ï\"åVŞ…ïI\\×C×@Q•Š\'ªªhªa˜Äc	„Pˆ%’ø¾G±P Ïâ86ª¦\"×q1K×°ÊÅÀÂ0œÆø^¸%ÔY…šïûHÏÇw„ôƒJŸá¨½£dY”-{+ñZl˜úwÑT²bÙœZÕ°ùÈ-Ç¤\\±EšJºPäæØ“«<œYäşÄ,³‹«Ì¥×Y]]‡b³³¡Cƒœ?2ÌËgrt £½t·µ‘/Û¡Uª¬ò»—Mevµ6•ÏSâeqwb–“sx¶CÜ0ˆ™UÃóüÊF¦¨\Z±ˆNÉ²˜\\Zæ“‘InN2¿–á¥ÓG¸3>ËøÂJ˜+)Yùb_ÖQÊ*MZä†o@qÓ@x<»È›ßã\'ßåöØ^ÙE!¢kt¥Ä\"‘­\"QVMWš¦È‹ğŞÔN¤LÉ¢†Â_¼}ƒOğòåÓÜŸ£P,áx¦®¡)\n–Ü‚¾›¢ıàıAt3€°iOZ,—øäñ$s+1°—|±DÙ¶I˜Á„Ór\\TEŠGÈ—,¦—Vxw~‘Ÿ~rŸ‡Óóô´\'8¾¿—é¥5>y8Ày½PÂñ|ÌÍ®}+Pñ´T3ÑV–¢õ4GÖi¡]Ãóanm¯l‡Á¹>ÑˆNDÂ5UÅó]æWÓÜ~2Åy÷:7Ç‚\0ÒÏ_8NoG3‹k,,­Ñİ–¤·£\rÓĞBÉßÖD¨Õ½QÕÀ.Ûõüâì%Ëâı{£¼z1B{²õBÏ\'Lü‘ø2˜Ôë£àãÇã|øğ	Ã½\\8r€ı=]m¿åd¢ú±kÙ|:ÃÈô<Ks+éí$7#5¥`\r¦áª€R¹Ä/ïsw|ŠéÅeR1“Áî\\ß\n2!°l‡õ|©Ä¨7{h¹–±\ZTE ñ(–‹¬®m€€ı}=œ\Z\"áÖèÑêÂ\\¼E•å¶l>é®Ùú›ícÍò§!NJ¨lâ„©1:;ÇÛ·îóÆG·‘ŠàÂá!®œ;Á™ƒP´»ñ:]‘”.+™4×M°±‘çH_É¨‰¡i¡eûV†ièDt•åÌ:÷Æçy89ÃÄâ\"=m	;y˜›£Sš8®G¾d¡îSÂëKÊËÄR¹•4®ç£·%èH&p|‰Ûü^ìa¹ğ¥ÃÔò2wLãË˜šF\"j†!¡?Ì~B!	Üo—2®?šåÑÔs««œÀÔuN/Tî›Òü<O}ªÂ>ÑÑTXYß —/‚¡sh ‡#ƒƒDÍ%Û}jG6);öh$Â±¡AJdÆ[Å¶ÖIÄĞI˜&Ù’D(~m8+›RtQ™m{ƒ\"‚µ§UüÁßÔ—V\Zš\0YõïÍ\\¸¶+²+ÕäDó-50ìÀ4ñ»0~‹p\0Ó0ìRÀ_ù|ş\0Œl2;Ş¥€¿Àˆ]K•{İ§0ÏÖf×WÊ­ÆFÀHPĞ5CÓH\\Ç‚1=/§x®‹çmq873-63a„\0]×\')j˜õâº.3$Ãtû|>K6»kYxƒúïKéã».¢à¹NÈ›÷ƒ`ºJÌæ”AÃ“àù.åMã{[\'%\Z…û¢f¢%nk½Øµ~ó¯Ş–ãR,Û”©•?¼zÛv™Ko0¿¼†•Î‚¡¡DzôsöØ;q˜KÇqê@?©x “/mu±ëlÆÅ•fãøÜræVÖ_\\%- HÉôò\ZOæVìîFW•€öæ9é¬ËüZ†›c“¼}ë™\\‰SÃıüî«ÏóşåOŸ…ˆã|ê©å5úººÂ´ªt•ÍeUw^UeÛf1áç7îóÓOî2³´Ê‰¡>æWÉ†œÿ¸iÑõğ}5æõA±Mk‹ğ>º†ï{L,,síÑ8ª¦ó_ıúLüû¿bv)ÍäÂ\nÙbhDÇĞ‚bc“ÒP-ƒ/¡((Í:e²úÚ+Ø®ÃâZš¥ô:”,HÅq,‡Ù•4csK<{lƒhÄÄr<<ß§X.0¹¸ÊGÇ¹öø	Oæ—Ù×ÑÆo¼x‘TÂäÍkwùäæcPVsE¦—Ö¶,™…lèv<Ú †¯Ÿî‰½”‘¢ü¨jà>¸‘+€ãP,[¬¬o°ËÑUŠ–CÉ²Iod¹öpŒ^½Åƒ‰9â±(/Ÿ;Æï\\¹ÈÚFõl=\Z!•HˆÆğ†8ÓF`µi,DtîT\nUUAB¾lñ—ïß$1yåÂéĞ×F­\'†ªâz>¹B‘üïÜ~Äôr†ßşÜ%ô÷¡ë°KÛR¬6;É¾”X¶ÍäÒ*S+HËfm=Çìj†ÅÌ:ÉxCÓƒÉµçR²]J¥\"Ëé5Şºñ€ñ…Úâ1¾té,7Ç¦Iç\n¤7\nÁ3‘-ğ`r£Ã‰è*®×úy¨Îvª~…|Ï¥\\.’ßÈÒˆsæğ~»;1\r£ê–­‹šç¦Êj»:(±nİĞt«ı´\0fóçuUAJÅµß}ï#Ş¸v—©ùeâÉ8Ÿ9{ŒÏœ>†ª›Ø¿•K²*U:›cji……µø…\"fèlï¡»-…\ZŒS°²]ÆuFfç¸öpŒ‘ÙE¦Éß»ò¹b™«÷ÇÀ÷ğ|I¶Xfzy\rU3Q£ÂŒØÕ+øÿÜj†Ç³K¸®Ç‰¡^»;ÈO%/ß¤€®¬o0½¼Æòz$,¥7›[¦=ÕEÜ4ĞÔ`ò_¶<,«D¾T`tvî2·š¡§=Åo}î9Şºñ€Û# (x^\0Ö\'WiOu†Tt÷] kEø”ÊeŠù\")^>{ŒD,N1?‡ÎTŠGsşÈTU§X¶XXYÃ÷<Ææ–¸ú`)\"èªŠª((ÊV¾\Zy¾ODWèJêº†+•_ˆi&€hb¶-Ò%5ñÎ»Éi\n`v«ŸùU˜m,”÷`Ä([b´¸VàˆİM¶ÄnEóõ³ã]ø«Áßv³JYÇYu×q\'7¸\0LÕ¡Ô‡­Tûàvl«UEàº.Åb²mW>WÓu¤¯ã„NcRnR­|ÔĞEÈÓ=ß? šù¦©ÄcqÉªª`[6Ã>#î¡i:Šªâz.ma—KXå2máy.¾ïâi@R¢1TUC×UŒğø,Û¡lÛ‡|Ë¼Qg¹«„@­Æk“JTM¡òêŠÚq°×óƒŒ\"]c6½Áâz×vñ…ÄÿUáôÑ!¾ùÒ3¼|î8ƒİİDÍ€S±îT¶¤²®¬íy6³Ë­³TV,ÇáÑÌ\"s«lÏÃ×4Şğ„¢ã1¿–áù“éiK†î<‹¼wg„Ñ¹%tMáÊÙ£œÚÏ‘Á>ôu	Î¶\r²åğxv‰k\'ùêíè†ï»5	8Õ,Ïz„!„ÀĞ5Ş»ıï¾s\'‹«\\84À?úòghK¶ñ­Ÿ½Ï{wc¹–íà{~Ğ©ª¼CUá“›VÙÛ\\)¡+ezi™ùí785ÜÇkÏ!KÅ˜_˜âıû£œÚÇ—/Ÿg »‹‚…PccYE\nV3%ÕnöMôªª°Q°™£lÙ·;¼ã‹«üøÚ×åÔ\"ºÎÜê:?çöøëÅíç¿ùÚ^<u”öd;#³‹îVİ\0\0 \0IDATèT\0†ÁÔJšÛOføıÏ€@ËV;9jÙ}¯Ï´©£6Ôš‹í®lltÄ“•õAQ,«D¡Å)•AÒù\">§¯=ĞxRrõá8·Æ¦¹7:Efuƒ×^:Ç—_¼È³Ç5TMßdq#Çş¾.öu¶1œÍ´÷Íw²¦Ø@ŸUÕI$Úš¬””m—«Æñ}I6_àk/œ§#Õ†íÊ¶äz¬®òÑƒGüå/>áƒû£œ=4Ä?şµ×èH¦ÈËM)d[m*ä°lKŒÍ-3µº±£‹«|ÿƒ,e6xåü	ô )\n³+inŒMsslšÅt†‡÷ó/=Ã‰áAôõ3³º³9¹6tÆ—VyãÚ=şÉ¾AâfÇu›RÇZİ3×õÈ•Ê¤syÜ’ÅÉá>?y$ºªkT5I„í¤ªFÔå¯lõkºšíW©µT®nJ´,·DKÜ¾íó©(\nm1ÛcOø~ô6>˜À²mÉ	3Â¹Cœ`z­´­«Y«\"^‚\'‹iN/R°lˆL­®óW¿¼A:[æ¥3G8:Øƒª(Ì¯¤ùøñ$×O`;gõóÇ_z‰T¼ƒÃƒ|ôp?ÜOm×c1½Áõ‘iL3ÉĞ¾^lgï™\"ˆ‹™,¦ğ]—s8=ÜîåOO`R„Àö$#³ËL,¬’/;1¸=9OÑ½ÆÊzOf¨§Ï÷™˜_áÃ‡Ox05‡/}^<y/]:CGª£ûy÷ÎX°ß˜&¶ë1½œæêƒq^>£+•ÚÓù W(²Ëãz^±Ä‰Ó‡ø—.Ñµ†we¯_ª¢ÒÓŞNoGRJ÷÷22;ÏRfßvøåfVÒèšAo{Šî¶8±ˆ6Ë$¹b9Ğ¡K÷vğ;Ÿ½@W{\'(Ú§-¢$¨ÛjŞL!ª41›&ûõ²]Ñ¿ş.\0Lı„eJWSJÔn\'0»0l?iuªòØ?=€áoÀP`ä6\0fŠŞvô¼ğ«l;8D×¶ÀÓæÿ§° ´¡ Qxx®çZAX¥cWËUEúAé:6¥’@UÀ@ÑÂÎõRBz©é†I4\ZCÓ41Œ¾ïázNd,Jåç!¥ç¹”\nù€šfFÉY™lÏËvˆ(\n–ènäv”„ºL‹šê­:ÒG4i†NF#xËèì7G\'˜\\X!-pHsmJ6”-´®6^yéÏŸ>Â©ƒûŞ×Cg;Ñ0ƒÉÛ,@…Ø¶C\"[3}šlêÁ	¸d£P\"_¶:ˆJwÇgIgó¼w÷1ŠPQ×c°«Ï	ÒãOõ³¯£d,†¢ª|íùs¬¤×¹şñ\\ÏçÎÈİíI.?ÈÁH/ªªà¹~˜b_g‰\Z°¡ªA\'ze·o=du}ƒCı]<{ü0\'†ú8Ø×ƒ¡üÁk/àÛ?z÷>zô„¾îv\"ºB\"¡Th3¶ãr¨¿T<V·45~F#ïßãÖØ8ç\ròÜ©£è\'[´8ØßÍÄÂOfùo}Ä‡&éël\'¢ëÌ®dˆ\Z\ZgöñÜ‰#D5‚öf|’° ±]Õ|`å©lu¥‹–ÍèÜ2…²Å;wc;.«ë9\"†ÆÙCƒ<âİİœîg «_\nzÚSêï¡§¿‡•ùeÜlÑ©9Şºq‡¯¼p‘îN\nÅrË Ïj@_-ÜÒ}ì†k.vx*«E›Ó^‚àE¡€ğ=(W–ç1¹¸Ê÷Ş¿É/îR²lF¦æÑ\rsGöóêo¾ÊÑC8<ĞO{<ÆâZ†‡Ó‹,¦7¸|ì zƒ®®_ei\\s>UiãõÇêú>_yîëëëŒ=œ œˆqëÉÙb‰›cÓD#&¾×—š`e}ƒÑ¹%¦—×øò¥ÓüÖ•çèL¦ˆ–BhY\'/ÃğO‰ãºd‹eò!eÒs=¦—Ö(–mFg‰E\\Ï#_*Ó™Œ1ÜÛÉ«ç1ØÓË@÷ÿÏŞ›ÅJ’¥y^¿s™¹ùz·¸±GÆ–‘¹T®µtuuu×ôô2£†0ƒXÄŒ\0Á#ğÄ€xAğ†Ä 	‰ÁĞÌôˆšîª®®®îª¬Ê=32##2Ö»øfÛ9<swÛİüFdmSWÊŒ»º›;Ë÷ÿşß÷ÿïrjk„ëx|ı…ëÜüˆÿñş˜èxÂOîòÊá·^{‘¾\rÏñÒ¾·v€4ŒcË®~şˆÈsé†º}¤rSu¶Š2ÛÒZ\\¢šÙËLVÒ–e)¯¡\0¶sÅ	™²IQ8*ëfeÚŸ&€é|Âóş”ï¿ûJ\nşÃù¯ò½wnñ|÷‡lõ%Qâ0e»~‰Œçã™U}‚8N¸ıà1ÿğoñö§·éw;„QBElõ}^¹z³»»\\9wšó§öpR9\\Üßå_ûı¯ó?ıÃ?a~çŸ!ßşáÛ\\<½ÇÅıİ•İ‰)%Û}Ë`g„¯_»È«×/r8o!6´n{0p<s<Å	B\n‚ âıÏî1\"şüƒé¸aD§·‡|ùÆeÎÚåêÙ3ìmmá¹‚¯İ¼Êo}…ÿııèˆ÷µá{<wñ<§†”T«Òñ\0óáÑ˜Oî?æ`2ßc°µÍ°¿…’§!î(¥\\V¨ü¥WŸgLxç“ÛÌ\'Ü½s‡G¸®Ç°ïÓóÜåÅ	ı®Ç›Ï>ÃëÏ^â™3§ñ¼>±QùzSÖÅäÃNQHP­Â\Z‘ë\ZvÊâåM\0¦) %˜×š`Ö4ºÓÀ”ˆ¥ª ·ˆ56y>©\n™©)ÊnëÃ\Z`XÜO\n`Ú”­c`\n‘^#³	€©€ãéuZš<!Ñ\ncä²&ÚJ/ƒ\n×õèø=.$Ó8$Š\"â8¶Íö!-0Z£uÂ\\\'$q‚ã8(Gá8.IbKÄ„1ÄqD…iû¤8cY<®ß]S’Ä„ÁœÉl–fO- \næsfó)q1‡˜‡Âö$—––™õª9%Å™ÊÓ¯¼â…ÁU‚w?½Ã[}ÊŸ½÷øçïòÉıGÉ7u§ÎîqvgÄ+×/ñ­7^ä7^¾ÁÎpÀ<¶Ï+ëºl*×T»ÍªÎ 31–;··Åv¿‡ÀÔ*¨†ñÁ.»£>gv¶¸|æßxùYŞxî2—Nïã8íKÂ(á×_ºA’$8®ËáãCfQÌ§÷ñG?z—8Öœ?µ‹ë¨|Éİâ¶ÒyF1Çî<xÈıƒ#vG¾şâ³<súı®”v>~åæuŞşğSşïòçüğı[·îŞgwÔc»ßeØí²3ì/±l™LñğJ’„{yû“Ï8Oø×_âÂ™}”ã\"eÈ_~ı&ğı¼Í÷şâ]¾÷£÷ğû].íïÒó==\ZÄïtq—xñ51¾I™HÏUœŞÙo¸nºf&AÈ»‡Çxı§F}Îíyşò~÷Í—øæË70ÂIiËòmõ{¼ùüU¦¾÷çïğÑİOçüÏøú½.ßzíE†½®ed\ZğwI\"zñ‘?„­%rëZûº€Æåx¸İQœ`æ!ÓYÀ[Çˆ®Ïş°Çµ3»\\æ¿õúü•¯¼¢ƒ’élÎ½ƒC>¾{ŸãÉœKgöØßá{Şr\r	cò2Èé×U«9Šíô­×^$šü/QÂ‡8|xÀ÷ğıw>&\'¼# ãÛêW_¸ÁßúÖ¯ñ—cTŸã¦‰\r‚®çqz{ÈÎ ÇÃÏ‚yóéñ„Û±;è±¿5bg‹Ïóµ›×yíÙgĞ¸!Óü˜kçOóû_y…ãYÄ§Ÿİåîã#Œ€?zëm¤\\¿pï[¡QZÅ|şè[÷ÑÛêsjw‡ß%Á2 u¬J¶¹Ø…)š\n|„)´úŠ,\nª,¬2´/˜¸u÷İ¹‹ïy|í…ëüÛí›ü×ü#ş·oŸıíF(æñÉ\0L:ïOm\r8··eı„ââ˜(ŒøxğéƒGìzìm\r9³½Ås—.ğ—åü©}<¯CbFÛşİÑ¿ñ¯0%¼õÁ-H¦óï~r›3Û#ÎÚ§ëyí\nS¶dwÔ£×ñìıy.§vvØ8˜Ÿ¨‰|q|Ùqj4Àu$óIIÂ,Šx<å“ûÙöØßrfg‡/]½Â›Ï]áìŞBØÒpËFÜ¸pî›_ãxpÿşC’$æp<á­nÑñ\\öwvqg­º—H/OøäŞ#Ù?½Ëéı=£Ò^óä¥ŠÆX£màÂş.¿ùÊMñÃ÷nñù£Cƒi0›Ú¶ï1êùlú\\>»Ï›Ï]ã¹g.²3¥ç®ä¤jâEÑìX\\(\'«ÚÊ6i4/²%Ğ°ÀPå9C€©M%d¦®)½‘%5ıA´P!{J&–•\'ï:ãÈu*dO\0`J\nd… Yg.Q×Íâp¤³{!¥¬µÁˆ…!£!­Ì²¯ãÑë÷p½„$£\0­\rãáù=G¥æ”Ì§Da`ç—g_+Ñ1aY%1­QRGAØ€ÉŒN–½4V	-A)©$JIÀ^”\nß÷­Û¯ÖÌæ3˜N\'´2«Òñ¬üršÙÒœBØ¦~SµS$ğò¦˜BØk>šóßı_Èÿğßåh2]=?%—ÏugkÈï}õeşßÿu^}ö\nãÀ6„OÂd©Ø•-Ë–ïdg{1ºµ¦ë»|åæU~ğÁ->øìs>\nîÛ©!ı^——.Ÿãwßxo½öÏ_¹€ÖbZ™ÖUaıh8ä¯ã+üŞW_å\'ÂŸ¼ó?¹u—oÿğ=¤t;.§w¶WÒ°&-KËö„ŒÇ|~pÀßııo²=!RÉn­Mê\r$PÒãê¥‹|ıË/ñİ¿x—ïığ}¾÷ÎÇ¸®Ão¿v“æë¯ñòõ+ôınM(Œ*mœÿ‹?f»çñâ3/pîÔ)”T„Q„ï¹üß|“ûG|ÿıOt¢‰Æu÷¯ü:¿ñòóz#b	`r{ƒ%0\Z%1£Ï¯İ¼ÊÙ­!KTr%áƒÂñ\\^»v‘¿ñõWù›ßxÏïÙæ[ct²\Z{¿ãñæsWyşÒ~øòs|û­÷øÿ~ôşÑşÏïü£^‡ß|õ¥e‚ ×µ°(·Ãä‹JR±«æøØÉ÷xˆ\nú…Šûê™Ûck1ÃíûGZà÷‡<ûìe>øä.A!]\r\\;wŠ¿òå—ø×ç×·Ñ(BmÒı@3\rçÜ~pŸÉxŒ/%£ÁNÇ^½º+SÎÀëâ÷&\\Ø?Ã?ÿÛßàú¥3ü—ÿëÿË;FÇéóšşù¾Ïk7.ñû_ù¿û•7öz	KeÀ…ĞfÉ8d·ı….—\'ÉÎhÀ—Ÿ»Â{÷øğã;$8\n×u8¿¿Ão~éY~÷—xóùv,bM²˜Ó™ùgŒâÅ+×ø®]ç³{wxû“Ïxëã;üä“»€-i|ñÊ•#Ú|‰m\'<Oxt<áÊé=¿x†ÓÛ£å~¹õ²ó¡´#-P‘;–‹&‘«9RU‰…iªY•;.öí: #¨,kSRòøøˆ¿xï~ğşGüõ¯}‰W®_#RIxùòyö·©ŠÖæ,ÄÂ®à…gÎES¾ûöûAÀtf–¢6WÎâë/^ã÷¿ò2×/\\Äu}Æ³È&xâ¬ AJ‡ı³ü{ûŸåh|ÈûŸİæ;?şˆ{øã·Şá·^óğvwñ·•OÔÂngÔ³‚\ZËÎhÀ$vx8ŸXËó’×®_âóGùÉ\'·y{Æ±Æğ\\n\\8Ão½rƒ¿ôÚ\\>m³ ¶BœEÚAº\\¿t…ÿäï]æááC~rëşì½OyçÓÏBğµ—\\öFÛVoÍı[ÿ±9÷Ï~ã¥ë¼ğÌ¹œ¬úÓü¸pãâEş³¿w‰ÿçû?æ»oÈÛŸ~Î­{¸xŒ£×Ïíóë/]çÍç®rùÌY´p31ÀÉFv[/	xâ_QÇZÖÊ(ŸÀ,¢«V%h&ëÖ—µ0ŞÏFª_mL U	`šşuMü_€©‘PÎ©\0‰à°æ~2ë(”Jİã…HÕ}/cÉ$±F’yR×í Pôú#<ßG9Òn‰mK½¯ã£‡(\n‰¢9qb´ÆQCb4rn³hc¯Åqèt¼%pÑ‰!I’Ô¸rák#pS™‚	Š¥a0\Zâw{H©2¹æ¬ÂW3H0ÂÔËW\nÁÀWÜºûˆ÷¿úïùÁûŸ2ğ;|ùù+QÌG‡Kå±ßûæëüßû×.çüŞ6Qb¯91yUS)œ3¥,Û\"ÛœqB/çLV¦VhÁã_ıİoğ;¯¿À§÷Òqçãz]zËî°Çö ›‚¿ŒKıBUh±¥¤cßõ;<ùç÷÷ùí7B’D³3ğÙêûcA€©º&=¿ÃÅı}ÎïÙr %Õ’3©\n0–EzíÚeşƒñ¯ñ½Wßåáá1ın—g/ãü©=Nmli—-L62_}n±68Jğæ³—,¨QR9™@züÍo~—®>Ãí{÷Øêw9»»ÃÎhÄŞÖˆ¾ßY²K(Ë|‚LU~wÈ¿ÿ/ıU¾ıò³üğÖgøÇ3û;\\;¿Ï¹S§ØØ\rñıÁR™jéR^ w„ô{}¾ôìU®\\8Ç_ÿõ/3…$ñœ#øğömÎíïÓñ:K9Ó|«ÛW1é\"?Gs	€¸T5®g“aCn^¾Àü÷şñŞ‡AÀéİ-Nïì0è÷Ùê÷F–‰Ó+\Z\'†‡G¾÷î-¦qÂÅsû\\ØÛ¦ã¸$\Zt\Z,›\nJlY¢Tq>™”±íú=^»ñÿé¿y†ñøˆÃñw£µIçÁˆNg@Ïï2\Zôv»ù&ó¼á|ú:¯Äeò’²FæçÿÆó¯D1B8(·‹’ŠaÏggØ\'A¥G\\>OœÛÒ,óşÎ)ú½!Ï_¾Êx6§×ñØõØêJf¡&N\rUKÒÏ™aIëiÕëx¼qã*/\\~†á0m<Ö™j[S‰D	E{°ò{š«ÒÃ,@.½¦ªf	r*Í¬÷¶1ìú|í…ë|éÚeö¶F ì^õáİ‡Ü=8¦ßõyùêöF}[(ZÔòÖ„>ã¹æÚù‹üçÿÖßæöı$IL×ó9®ã2êûìûáÆº‘)R ¤d8ØâùË]Îí_ cú¾Ë•ÓC£˜Ç “vL‰‚İÁ\0W)üËÏ^bgĞËU<ŒÃ7¾ô\"¯]¿Äíûğ”Ä‡q(ñ;.ÛıÛƒ>Q\"1Ú4ú\r	aå§wF»¼r£ÏµW	£˜İ¡Ï¹[rÄ†$Yö˜…Zk.ìmóÕorãÒ¥%óÿ´?¤Œƒ˜(‘\\:{‰í­}~ãU+ş¥>9¾ç²Õë2èúåZ`ş×b\nm	\"“7‘¦ú9\'ßÕÚĞ§Ğ\ZÀÔô¬TådÛ\0˜“4ñ7˜¶Æ‘m\0Ì†MüËqÕÍ¬ëšş×zÒ´0\"Ãœ´0­Ö•çél$g·*z?¤()–\n‰Ğhm3VF#%:Š™MÇÌë®Î¦)k#¥Àu<»ÁjHtBbŒ6t:>ÊqS%ˆã˜$‰ÀhâÄE¥0b)kˆSÀEÑÒÃ$JJ[n&Zkâ8ÆuœÔãÆ[*)Ç¡goÅD¹,LTAdßŒcG\r1Ä‰Ás]¾zó*/<ss§v¹´¿ÃÃÃcşèÇïó‡³Ÿ09<æê™=~óµ›ø{8XéÆ\n³9Aí»‰Œ¢¨HµèÊ¿4¹`u±%Höö¸¸·ËóÏœ·®È‡Vb9Jâ$!“r–Æd1¼!I©^Ç·õòU0“,g¾A7À8J-K\0­‰Îûñ¤w\'Œ`Ôïñ¥Á3ìo˜Îçø^‡ó§v‘ÒªEÅI‚1Õå\\9óD)ØJƒ±(±ÏQgÇ‰‹û§¸´¿ËıƒºvÇa<¢¸u¦3»Ö´„âõçeg‡?»GÇu9³=äüŞ6;£!Ik¢8Yí°;?u\ZĞz=v†Ã¥ÊÍ££CÛ2­åA¸Ş+¤²\nw‘03M‡dõÏ–»Xa€zÔëòú«œÙÙ\"‰cv†ö>Š Jã˜(^¹çHaM*Nøş»VjùÙ‹g¸zvßs—†År	Sˆf‹khu|Xå©A¯Ï«»;`b¦ó)¬ìû ÛagØG)8y§sN§åkÙÜaå„B~š´1t=Ÿ³}®?“ú.)„t‰bM”ØùFI%c’ıNû{„TŒúv†vß´	ˆ„D\'™¹kjx{Õ~ÇåÍç®°7êòÌÙs\\Ü?…”rÕc˜L…M*õ-L#«\\%ÀQwT.˜¼¬Êu@¦æ.1øÇÀïà8®\rzM”}t÷wZså{£³H×—İˆæR€(Ñô:.œÚæìŞƒç8L\"A”&è¢$±>OkrîÆØıJI¯ÛcÔØdŒ0(eˆ\"İZ¥kÁÄìo\rØêw9½=ä«Ï_fwØ[	Ë<…(Ñl÷ûœßÛæ|ª€‰LÂtÏO4q¬	Òù½îş£$A‡QÏeg8#p•AHƒôÒ ·)º×Úpi›¿üú¼ñÜ^¾v­~Ÿ/êC#Mi<ÏçL·‡’ÖsoÕânˆ“„8“§ÆUÌKÓ\"‰[.\'{j\0¦Eÿ:\0³N’ùi˜œvoÅ	¹N²yc\0³©‰eöıDÃ­ˆj&(;F&\Zä2%¹!€©bO\ZªŠsàp³¡âYØK¤fÀ4\"U%³ÌŒç8 ¦“1G‡ˆD“„3+\rIFcz”ãÚ…)m†)”ãâu<”«p\\[¯;3\ZÆq\\:!$:ÑDQH„Á!-ñı¾çá8®õŠI³€QªÒ’UèRR!„Äq<+ş¥œe†Uš}©,ÉdS /\Z\Zœ\'AÌÖp‹ÿâßù;Ì\"Í8ˆÑÚğğğ¿ãòÑİûüøşctúZ³ \\fCL£x]yGÈd™¸•\\¡IÏ˜¼‡É;c[éf³fQ„ÕsŞ”Y€âÇ…»tÎ/¼šŒ ®¢Çòvş&½ƒYÕ„©©æ©­Ä¶\räÃ8õ/JÁ85}EŸ’I¨Ë&|™ãc[Ã-Œ1LCáJ©»²…ªèµQV4ÆÅ…3gyæÜ¹ek´a<k7‘ËöçªŠÓ±cÍŒÔìUyœÚ9µÌ¦\'‰©T¢*úféy“ßE3¥gKŞê\08w\n™zóKËÆX»3Ü^~ÿ`\Z	WïE¾¦3cóáí{œŞqíÜ>÷wé¸+Ó˜¯*Î‹º6â$æp²0 óØ\Zu–óÁLƒ™!ò•N¹¬çŠ±óQƒíëÎÂˆYgÀ@”ş×$—¿§S@‘5°\\=÷•ÎP>Î0ŒÕëzüúË7ø7^äá8²0qŒ²`Q\'2Ï5VóTUÚº’YcLéøFäÎ4Qš„®Í”^I˜¬öG)\"mxïö=î3ìúœßÛ£ãûLÂiuŸ…h0¦~ó0æ£{G«9mª=HÚ\r™t%™ÓÉœvzÙu($®ãñÌ™}^{ö*/]y†AÏ\'Iˆ‘Bp8	8œÌYÖ˜”º6³ì4FÛö¢ôşçÑj™‰÷m4\\?šW®^ 1’ƒI@\'ğ°0Y cã—„°\rUö„X¹‹ß”âÑõ8›™PRf\\60¥@?oÄ˜0¯×¤Bö$\0¦ô»mšæ3“5´{j\0Æ¬aƒÚ\0¹Ì‚‰¥nèt-•³Æ§àl\\y_µ\"÷“»–üëÄZ§½\nb9Oì’¶ÄK\0QÍfDÓCĞ1³Ù„ãÃÇx^Çqğ:]¯ƒ”\n­Aë%»¸®‹ëzéB6 c½>£Ñkş§Ó)GG	óù¡m¦9Š¢xÑSc’×qèv{¸RÚ22l³³N©h)¬1&š0NÒ»ÔX›|›XMÙVŞY»|\ZJ!HÃíÇ3ëe“ïOíòâ¥s<³¿Ëû>ZDbÀ¥ÌaÖîº9 ³œ6Ñºá84eU \\ô×PòÍY”«Õ¼AQ¢wÙ›”ë©X•Óåñ\n™YëÑ’ä}`„\\K£‡ÈsmfU%ªœİS¢ì1+\n½ù°ìÁT’1¶7,%E³*0[•q_7_Vó8[Nej™=‘‘©6Z—úzLv,JéŒibªÆ 3¦ÚèüV˜^‹.2HÀãñwîCvz]NmmÑít@äUÁL… GÓ°	aêÁ¨6hA®çÂ”ñez>eŞËlšÒT‘o\ZŒ;×›åëÊUMØ-+1…MşÌ\"fqÊ¾,z|²2õ–+wíçlã=dÁN±F,ï&yeQÚ\n‹.›&\r.\rïŞ¾Çñ|Î©ím#vdŒªIhÖ¶~×€™ö&ŠM¦Ä†Aò¦à\"I4Ü;âõçç¥k×éu¼´¤J×&¨¯5¨ŠW[Š3Q,á4¥}³˜˜Â–ùM‚`	úÅ:JíçäÃTìµU!¢Á¬ÖEaïùCµˆ;•,É‰\0k‚t]èç=iŒ©ggJÌ	`6iào`Ö\ršXV½^•\nYEÙV¶ÿ…MCu9[qvÒ²µ¬=½\rDqL’èe©´qşrp¤¤Ûñéõ‡ôæ!”è$ šO	¢˜xrŒœÇôD\r\0\0 \0IDAT²&25‡›Mè·èöú¸Zã:.«Væ(EÇu1®cKÌb[r%¥¢Óé ¤•¤Œthÿ\rçD±BCÅË*I];^•\Z6b4:I–ğ²\\K´;Dİ²V»bë4@[f‰e9œaok‹7»ÂÛ·?§×í25Ç,¥¨Ë%-M©…‘›kùçnÖîõ¢”Ğ¨=;È7z/‚÷e†¹ïrºjBTî¬¦jÊ™TSçÊm\ná¾)v‹½BTä²eFåàkµˆBÀ›ñ2ÕGI\\Uºu>&Í&.™¾\nq‰b¦z“@pHtšì¸çÀË²5Sh ©jæ®ï?-‚:j‚àÕ³0¦|d»ä£»øÎÛÒëw¹rnŸ³;[$fÙb^Ïíó–™ë9‰rS±úWê™5™ceDK`Q\rN*=fZØÊÜ³©ÑMõìĞ‚UM–}F\"?7L×^ÖÒ:«¤òÍšÃÙüš¬fÛDM\"*·Ydô\\mbŞ¿sà…Kç¬¨FÒ6_İr]rÂ)úÄaœĞõ}†R¦J}ú|G‘¯(.\r¢x\"!R**öÁâSLŒY†b#óŞŸSà>K`¾1*.&Æ\n F”@Œ0k‚IS>Y7éi0Å¤P€©0O\\ÛÄ¿æ^ÖzÀTİW\r€É)pµzT˜kà\\Lf¡ë˜uãÓÄÀäØ4j\0\r\nr«×	¢Ø²‰IšMÒ KJßñ†Ì£„™çÚLM*·«&Ö	&IaDJÁ\0šÉøˆñäˆŞ`‹^¯‡’®­6’0Í–%_£Riå¾oe™}ß·Ö8!Û¯Ø’‹8Ñh¢´™?J¥õ¥+$ q£uRšvæIvŒb [xF“ bĞëñÕ›×ùôşc.œŞ#2ÏˆŠ¦â\n§A*¼ê°¨y\n[®ÉßM)°\\Ô¶WDB&——0…Ğ õ[?•Ã±6Àõ_W½)\0¤bğdÌÉ2ŸYæ&_Å´IÍ™ìô075¥yşºBŠ}›×²@¥{¹ñ=¡¢N)XM¯Pk>üìöŞ\'Œ¶Ü¼rËgN§¾T\'T¥£*mB7™RÆ²«@ñAúÏZ>Ï*fÅ4Eœd5eÄÒJy¹\Z8—fDñVÉS³ÿ˜‚CŞy\"s4Ñ(K´öy×Sn¬\nç ©|áTC‡|–JÿÚÍ«¸²¾C\rãÜê,1O´¾ğ™ÊÎgKÓ¾èAUŸäIÇ(?¡Å&õsúL6_í¦vDÄÉ«\"sR²6,C³‰%iÆoY·ÀT¦d\0ŒXÚ˜X6¹ÖWÖü^{ƒş¢V\0FT\0©\"‹U\00’ü¾‘Œ²a£&şÒßrb\0!a3\"-íÆ-„ee¤LUœã¤”šÀï‘ÄÑR±lQƒm€$˜ÇÂhz:%L³Ù)Ôò ñı.³éŒaˆßõJ¥ C p¤Âu]ğ ãy¸Z³ç¥MûÆ¤ê3‚`N£&f¡F$}Â $ò¥fºešÍ~ÚlhÕéŸ= í¨µaØíğÂ3ø«_‹Øğ]§TFS\nœL½!k6n*6dt×8Æ´ú]½èw©k[€’$¤)fo+C¦ä2‹KBT²y×üÏë^¯*#¾b{Ú–u•J\Z2×“ËgëRÇøeFûõÙ%±Â÷³e‰Ù@ÜˆlÓtf\\M]/(\0¾z°]%~ÓÔQ’@O…<¸ıù=pñô.7Ÿ9Çõó§y4	s=omP‹ÉÍ‘ë2…Ø,ôÙã¢© ¦À Qîg«\\;íö¡:¶&{BT€ DáH™õ¨«‘…,Ë“›…4·Yí<Æl^®É»Uáä\'2Lã–%*Ùé\nş%%ãÙ”î|Æáñ„×¯]à×^¼Æ<‘›7¸›v?û9ÏõÿôÂğ’Qù/Å]}áØ¨©”w™*MdU{m1V¨û<1š\'S!k\nÒ›ŒióZë\0Ì&2ÊO\rÀ|Q=0˜’YØdÊâä\ZÀPu²Ç\'çiYõœê<`*z™j\rH—iîz\\ÇÁ‘*UŠ² F§^ZÛ&çù|Ê|6!˜O	ƒ\'(åà÷(e{Z¢0°¬Œ’„t£<¯cÿëú=[6Ÿó´ÔË0\rf¸®›ª%0è¬Š	>RªÔC&•Ä•Šn·KÇï\"¥ Š\"¦SÇ´Z£”ƒpÛ!2Ö8.IôÊeqeåİdÚ–q»Alß¸Ë‹W.áH…’ª’]ÉÏ¹jI%S;•L}0´.D¹e²n3+è_‡º6QÕŸSšâ=ˆÆv±z…©šüqÅò…ìyË›6\'FeU“ImV½øl³EòåÚè”4¥ŒsƒÿQiû«SìÈŠQˆÚùW.©ŒÊV	„§×/…$N4o}ô	ß{Ëşö=¿‹®bƒŠŠ Åw/”3šb¯“Yùã¬\"í“™\rY6±äd¶2Ğ®|‘SI+¯ÇÅú‘)-–nŠj†¥¢\Z¬JiÌPıËæDH -ˆ1-ÿÖ …äãûùƒï¿Îìí±3ÜáîálÉÄTôëÿ\nœxş‹ìáQ[áğôß·6ûÖ\"Uö$i¶§Í¼ˆ…\"ZÏ&crFÓ‚ªŞËuI\'¯Ÿd60ëJÈÚ˜š€_g^k#\0ÓÄ&‰2H9©„²¨úşÓnâ	eÈyP4˜JpWèª*åk)\0˜\n²¦àÈu¤R¸J.)ôDTº\0¤€8\npğèq…3”R¸OÇï‚80ZÌ;(å0ŸNq¼~·Ï`¸E¯×\'\"Æ°ôs±2·VVĞè‡è8²JeQˆëÚFCRóÃ8ŠP®UAs…ò:¸®‹ïwSqƒëzD‰I¥Eeª`e¾ğìˆÈ)¾Ù€l«×·L•6Ouë3-ÿZ±¶^#XÍ\r³Y×ê×h+‡cZ•ò]€0´Gõ&}u õ	fPÆ1¾¼ó‰š,q€­¸G³AğWÍÄF r}Y\rÉ®öWkŒ¡ãJ)ùöŞåíÏ>gww‹/ŸgÔë1’õà¶f˜Š ÉdÙ”VcOuÿx\Z¼j‹+’•º.5úçz\0óç‹É±/,â(ª®dÓò¾\0ái´0,şl«ßa<ò·?ââ™].œ>E˜´+\rü€yJ¿v²l^J¹0Ş¢y7ªjxÿ…¦\0¶É«´¹w§ö\'ÙÆnc\nŞë‚ôb~·]`šÈjL Z×Äÿ´<`\ZE\0Öü\'0Å÷ÜÔ¦¶œ‚‡KÍ}mÂn•CÍœ+HÑ\n™–ÛHlC¼4VÎ]Òñ\\$†ùä˜Ç>OË½ÀïöĞZ§æ—^ÇKÙËÌ„aˆë¸ôº}¶¶vèu{A`e_A*k²è8BHâ8d>ÕÑ”yr<™XcKRd\nÎ•ã0évéõGôû#¼Á\n(éĞétğ°†{BJ+±¬W%Mª9U*U•ÓÂ×}gêŒëäœKJcZmãUÌùFÆò½Y‘-¯[ÛE_5a—-×ªê82¹Æz(–s‰Ì#*¯³®d©nL‹k9[jV•%®\nš›ä®—w¸®Ü«R××dzTÄÒ«#–êW¹Æpa–b\nù—Ï­Â½\nP’uMo×Œ¾b\'Û<‹ªı°¬X·üûüdFğ&á~ü>÷>Ä+/\\ãËÏ_áÔöĞúéTĞK«Û3«FS\\9¢”ß\\ô}‰ì¼3õë¼iRf‚*³vNUş,ÃtfÅ=Ê½IyÌª3 kL¹f/	O,\Zø\rµ¬)0|Ù^¹µĞô)ƒ§#?ôa8çÖ½‡ü­ßzƒëçOóx2Ïí‹æxÿ*ğ‰(îÅbã\'tòYÍ9º×1õ;æÏ)°©¼6Q¡ÚxlvoNu&ªBì§`jÈÑ/ÀT‰\r´0œP¬ÿÌ\0Œ¨6¡l¼6c·š\0LéyT(–viùY¹Z!QÂõ\\¤RVÑC€T(E…ó)I#(%‰ã[ Óíö\r·öGH%‰ÂÈŞ®Ö %J)ü^×ñHâ)QÛÒ4mˆ’Dè8@‡s’`I”ëâ÷‡ôG»tûC¤ã\"„Ä÷»Œ#¼nåX7v-VÚaë‚àusSÆxÓŸÕö.d¢0Órê—€M©ÕCTş\\/¾³”8®fğŒiPdÕT±W¥ø\ZM¥]\'Qâ*zŸÔEÆT±\r$Œ×‚ËlÎ¦°Le?TÅkÖXWõbÔ›Yfƒ“‘7\ràÄ4ö¬Ôı¬Í<Ï·Ùä›\nå‹öGIîyïÖÇAk|¯Ãåsçöû„Q\\R«35GLä”Ä²kÇÔEèÁÉblßo*E-±hèT°)U4#mVLñO–	‘ía™$Æb,L…ŸN¾¦XÉò‹Ü/Zİ½Ïoİf2ø½×oò¥k¹?N~‘{¾¦Å¹-DM%ÒI—“@Ôb…Á\"°T_ËÆ_éÚ­	?/º¥ëX–ŒgWñôßÓiúKà\'0l`*fjŞ\0†5Ì‰Œ©Vàj\r`t™ñh`¨0´0ÙEY0ÕUé\r`²büª\0L+&hqù«ßŸãÙœ~ÇEkëƒi¬ÿ†#ëázãa0i–QG®§AÙ‹²ş+WhG9xGÇó–ÛˆcÂÙÔŠ\0D!q0ÇïöR-ç°Nb’$²\0&IHâˆ$Œ‰‚9:\n\"Ö …K˜h“$xÊeÒëãu{ ‚­!OùÌÏï`L¿‚- –­Øtµ×õ ˆ’ãy±)5ïŒ0Õ\rô-,¦ê6;SXkUœT.XÉZØˆæà_ˆêÒ”¦öª©jNh2fJjXeÕÄjiV±³“]j™lÓ\"ÉÊğŠÚ÷ÍÇëú¦2¯z¶ÍeyÛ€òb€_iÌÚbˆ¬àAÖ?\"3¾®ãğÁgwùûßù¦3vNíğì…Óô|´Û˜©X 5-u×e6L\\¬›¯M÷_7¦Ä”ñ­É«\Z¶aªW{©ç ÍŞaL‹)aDµxæ/(3!…M(üé»·x÷³{\\Üß¡×!¥fÆ¯PÌ“™µ¨|íÄy:~-9åºaĞ\\©xú°ªvœD;£Ïj»\"‘3Ÿæ³K÷>\' ÌJâ¯À\Z[7ñWÊ´RmOGKIhQ#ó[€o`6•P.\0˜Êk©0@§ØÓ†ÉE&ÏÀd£ÑàS	n\0Œ-Æ…¢A3B‚0B¦’ÊBƒQ±ı;mŒëx8—;|“8ƒm¦OÍ\'…©ä©H%“eÙ™NÂù„Ùñah¯])ét{¸~¤\"˜Íˆ“Ø*béxu¹R!•uŒ”ÊA¹>Òí€tHtD8›0‹c&ãC¤ëÁtg›çÎo*w®uYÒ\0L‹([—n„È­mÃ\ZÍÑ†=İˆ¹Z™eÎ—İß—5™üj†#ï­Òß×˜/î€h~¦\'­9 ÓX~XâP\nÏGäUD•gN¶ônÅ¨4o;ÕbâmÒ‹¸ØP%­ØäÇz¦E0¥÷ë¸’ûùƒ?û	Çó_{ñ\"_»y)DZJ–Ÿ«Ul\\İıŠ¦ OœÕ{»œ4‹}°Kœ\"ª×~õZÍ$KìúšäBÕ6¹=.¿gı¢\0)íèüàıO¸pÌW¿Â<V<Fˆ_˜¬Ÿû\r‡\\é¸Ù”ÁÉ$ÓŒ)XÑdÓwéºùrNó3ê‘9iëø\"ß?=ßœ’Üme=Å:\0ÓPâT	`t\r€iëSñ\Z9\"+Ú$[üÓ0c³1€iÑÄ¿Àd{›šJÀš\0L[åMÌâ{©lò2Pp\\z‡ï9¸®Bk¬±dªc¬é—©dz‹ÖÍ<ŠC¢$Æ\\×Áh…Ç(ÇCÅ|p<ãú>ë1›™=frpŸ`r€	gˆ(BJ‰t<dÇGvû¸ƒ]Üî\0#$IÖB8¸.NÇ§Óß¦?Ü¡ãwÑIÄAL—A{ÅLgsÂ0Líå²£ª‚ãdLŞÅ»é4Õ”D±Æ¼NMLˆrºE˜êMWÚøV5«\r›Ç£®ghÙ¼¶%b}pÜ”á/©¢ì±8Ñûe?Ïöˆ*©3VÊ/åc@dÊ¶ªšLóT—)Ñ\'U@¤.6°ºş¢¦ş¯¶ ¾m©Ÿi0Q¸\rXû\0<™0ŸùôîCĞš›—ÎñÍ—o€RÄIÒ(ºÉX­(m`]‰]]ÏÜ¢ÏEd×¾Y±œ&ÛSuß³xOf©RTÉÖ”\ZSğ5Êì)¿=!ƒ+#î<|€ğ/ß`Ô÷ÑZó«ö€~İ”-cÍ÷[ŠzÚ¤1T7axÕ\'EZå6b9ò@æ©—d™ú^µMbRäºa.×ßÖp¶•%–ŸŠ„rÀèÒFÓ¾æ	È–Az:lsÃê5KS_ €Y\'ÿü4LÛ˜&q†\'052ÊM=0u\0F”KÙ\\ÇA©TbYI´LmŒU\0IÇsR.K$ÇIÆGD[;ô·÷ğz[)câ ”“Éóù„`~|ÈÑÁÂñCt0EI…3!”‡p<¤ã\";]¤ëaRÇt´ş2R£¥BH‰T¶´Íõ<|¿Ú\'I¤t0@§ãcf!ÒuI’ÔÃÆ˜ÆyÙvSÈƒ\n‘i®`]\nJHÙ:İÆR‘µÑ¬ğV)±%Ew÷æ<MÕ!Ó&ë¼X·yŸâW4gö¿eN¨µuLÏù¬,Ù–|f¯òï2k[Tô\0æü3\Z{«XzÚäŸ¥©fÖxˆ4±\'éãÊÏOrrå9İÅlÃú²ªIäæ¥ ¯†—Ã4Sú§ï|ÌŸ¼ó‘İ§º>;Ã-ıãY”QËjg¹®‡§-Ğ­jcÛt=mú‰Œ!Ïägj‹æ‘¦&a½êWkÈ˜›B?äLCƒû/ê‡£Ç³)?úğŞ½ı9gw·xõú·C¢Õ¶Ò½|3i\ZlÚòe±–Å¼.ú\'eË+EÁRdÏÄ2¦pfÏ­ºßÏ&ŠŠ•¢˜?ÏVndü¾J CÊTĞÄªÌ&‰¶sZTš9´X.uÄµeš\0Lz š5Šfm\0Œ¨êÏhÒëØ£JŸÀ´-kR k	`´‰?`\nhn\Z\\å=Õ°imŒÍßË,~+Elr%Ûóâ¹EÇó¬Š£ £€h6&8~Lpôàà>áHEœDè$Fv{èD3>< fÄÁ”x6Æ¤l×ÑÙŞG¸>B:iu¥@H•ŒJGA‚±¥iq3¢pNÒéà(ÇñĞ\r\"{ı!±ğR¥Ö8­ta[)T5ı^ÑÁ\rH[‹uÛ¤i(åØÔ1üIÆáiĞîmÙr.\nBOz-Y™]Vn÷wq¯\r˜«²…¦–EidÖá£*¶à¤GƒUTÓÓy™Ô6ËeQ¾Qe<hŠe#é³”Râ8’?şÉG|ûG€ãğòÕó\\Øß%Ö²Ö%şIæd[óÒâûµ}ß÷}UúİçÜ	oQåz¿&HûEÈ«¸0çŸüè=„€+göõG	ÄÉ¯˜˜§ùñÅ”g‰V{ciÿËDò¢ôÿMÁJÁ“l¹®À‹Èdrª´v”\\ˆ\r¤Iƒ4Q¦—â «D£Îükã½b–t*/ çªtÖ»>FJbmíKÌK±\"§\Z4¬ëĞ5y—J\0c~z\0f{´0ü¼\0˜ºë(üÎ`²÷U`¨f·6U!k\r`L.vK´Æk§)‘•–I‰ë:t<ÏuHâ˜$‰IŒAx>&Š˜>döà6Há¸(¿GoûıÑ.Êu\0M4;&šO0qŒôz¨Nw´‹;ÜA9®]vIIdûr¤DHŒ&Y,A©Hâ(œÅ¡m,¿;@›!¬è€Ç‘8‹t¼%cb[uÚ—­+Gª–q4µÙ™¶AMNy¡^UõØ¹à¯\ZĞ˜Æ’¢¶½\"Ùï‹\Z³ì{’&¥«M2ßË0ÙT½FÖÜÔ²O¥ï/Ø€b šû¤DdÅ£Í÷Y,ûŒjîMX°§LÛ|¯îšcU´pÎõ×/¹‚ê-». 2å R\\	ï|z—wo}†Ûñøİ7nò¥«ç	ã¸õz\\ÇÔ4ı^Õ|Ï²,–™6¥çYL\\¸\"-KÄÊŞçšû³×× \\–\'ãMi½(H.W0™¿LA5 „&¦|t÷¯^½À›7®p4‹PJı\nuœ\0ˆ´)›,£k\rŒ×™CotiñK¹ü~SÏ¡L1p†IE©U•TMë(A¿ã µ&Œ\"­IMœØ>â(I¿Ööó(‰“„8ÑD‰&ûµÖk´Öh%ù£c%yåêw@$UéúsÖçiq_d\\ºIˆš º0‚¹Âı¹\00l`ªX/ÀäŞºêZtAç³Ğ›\'-!£ÌN‰†gnŠÑi]	ÚSf`2åvb9¯²>\rSŒFèz†ıƒáÂqI\"öˆŸØïCâù”x>·ŠbZ“Íd|ˆ˜1;zDpğ\0Îl\0àvp<åy©)Ëb\r/Œ’8B!•BÇ1èÄf´¶åeÒA\nkÌFR£IR!gE\Z)¥İÒq©„ôÒ«CÔlĞf%»¸vsyÙQ‘+íZ™İÚ\0n³,Ÿ­ots>Ú0AvÕÔ¦á¸=RÅ4ˆ§\"Sı$Íå•»ª1ÒÈ‹2@Ë:š2Vi<0MMıvN·¥Å¼)ƒĞ´‹åLÅò¥Ê’	Ñb~ç8–ôÿz%J³œë–Pˆ\Zx_#†aŒFÅ4øàöç|şø1Ä	ª§xõú®œ=Íx¾Lob6ÆuÀ¼ô¶à*ª{šŸ}Qm¯¬0·:«F¶ÂÔËŠÅ!jE2™d“{Ò¿|Áx×søìÁC¾÷ö‡ÜyxÀo¿v“—¯^ÂQÎ/å=ÿTY®Š~Æ¦uÓ¤,ŞXTÄ]”“‹ıIJËDæl™Ø¢§qñs›XnÇÁsÂ‚(!Š¢ÄşF1QœD1aF	aœ¤ŸÛ¯£8&ctœàJ:Ì£ˆÉ<`Ø¿O´&¶Ìş§µ!N4±¶`%ÖÉ²L>Ö«ry!@	AœÄŒz>Ã^‡§=”Ó+ûÁebX³ø7“Û7Z£Á)—4°YF7®\rÖôÀl`ª~·ÔŸµ!€©Tğj«†ÖÆÄ²\nÄ¤O¨dÉ\\`LÕI¼ÀT\0ªÆq¡ZÁ¬ª‡¦Âô®ş9­«F–½ŒA\Z™NŒE`\'„ÁïxŒ†#öööéa0\'šÍ˜M=#ŒÑè($œÍˆÃ9Ú$H×#Š#»t‚0	&‰¬Ğ˜ã!”B)%B\ntÏ\'ÄA€ãz¤T R)0j•ã5 \\å¸` ŠB´N0Z[¥´Å¦uš½°¬YË·õ—\rt™Z½ZÛ€ÜäjĞDf(*O‰BöÔœ\\mëÍüî jMûªØ\rQ`Tyç´å¦ß-\',HM±HSĞV‚¹]©—hızm‚ï6lK[“Ö2ì4Ëœ†0UàÜä¶¢MÛº—ãµâ.…ÊÅíI0èz<8œñşü\'|üùèx\\9sŠÑ®ãbÌ¬rŒjÊB‹2³~lrMÕı•s¨XZf\ZcŠõ«G˜šÌmş;ŸŞáíOîpõì).Ÿ=Ãh0$Œºê‰ÿ´29mÏ@½è5ùQêÉ³ÿÙäŒÏ‘t¹d1ì)»‘X Çy@\'	q¬—_\'qZÓé8x®e]&³ Šìïë3²zıèˆãÕ×‰¶Â€«$~×É”ŠAÙ÷2‰!€()QR\"8R¡\\)¬Š¬ÒŠ\"I#%’È´B`Ğí°3\Z¡”²Ş8Æ”zßÊj>™ó1/±Ìªh#\0“ÿ}S§Âµr®#“¦©0mšø7qŠ¯=¨¿(Z’¦”g+\0Ó\0¦È/‰€YşHü{Öj\0ÈI\Zø+zhtƒó†MüUtIb3Z›%ZOy‹ôe\r®«è÷{loíàÇ1óÙ”©s\\¯ƒãZ«jS‚ÙÄ.H£q]W\nÂI‡8\n‘®r<ÇÅqm)Y4ˆ¦câùízXK¥‹’2ˆã\0·ããx¤”$IDR8®K…rlƒ›18éo 7‹DUÉõ¯¼h>_¯äUïw²^º²¾´¥)à=I]¿Èô˜¥ÏÍ×™u€UÑ¦ êhÖEÍéZ0MA¿É†ƒ&“½«r³/U{à±I¾n¬×)cÕÓ`ãl0ÓÜd9—‚É’i¦tøUåZy¶°¾çÂ>gÏLgS¾ıÃ÷¹uç§·üæ+7PÊc2W×!63*]I+7[å3«»—5<…É×ÓåÔË£›y¯œ1Sİi(Ê*ù‚s‡e¢£r]e¶Cì/\0î/Ê±ÏUóøèˆ·>ú”Ïò­×nrvo—X‹•	â¯>¤´ù¾õ™«?ı„K2­Ê›bö†hSèI;AŒÁ¤¬‚”0ğ]¶z³ d\Z„ÌÃ˜y-ÿ›Eó dÄÌ£˜yÚï§?Âˆ8Š!Ñ%p]‰’0£”9YÕ`ÈtHa{¥´ BIÛo,¥@9×qğF|×¡ïwèúa¤‰ƒ\"W¡‡ãĞñ<¥ğ…ë:x®CÇQxNú¹k_Ïs®ãà:V¤I)ÁÑ4bÄV¡Í¬ZJÊRfR£il%ÃÚüãz\0cj{R*\0ÌÓP!kêÙDB“^×S\00u%gkL$jN`j<rDË–\ndu×’•‚l`Iÿ!j\0\0 \0IDAT¤Õ3Ëãy€’’£A©®’ËPeÑô/\nB!Êqèözt»:~)•¥@“˜(œ1“ÄR98®G„Ìgcf³1Q!Õé\"‡$1II&!š‰‚	ÒíĞéèô†ˆÅÆ· z•BJ!‚“J®êØA]¿‹ïûtü>BªÔ©Zg[> *˜Y4\Z÷Õaî²¯)>d%xËò“Meb\'ÍÆWIÒV• •Ø“&ùX!*g­éaS?Rv9¬¥R±¢I‹©Ã¡‚:yÎ&ùŞ¶\0£­XÓëµy¯ªg¶œæiY„Éš\0UÙR™Œt´É€—¢Ke -*Ö©Œ‚ëú¤Œ1H)øìácŞºõ)÷1‡c®^»È¿òÛ_¥ßïÆq«±-ÍùÌš6¢™Ö[—(Ğ¥ÅÅ(+ækf~çR Y5„¬zÉ•95·Œ^•Ékİ\Z¯SD+çMDÌgë/61@G)¢8áÇ·>áÇ·>åhpqÿ4ÃnÿW(ä)h“/­^–h-Ê·2ìŠÈ²›Âªku=ÅvßE	Ãx6g2˜ÌÆÁœñlÎÑÌ\ZtOf!“yÀx0™Læ!ãyÀlÌæ”#ñ]Å<	¢˜8ÑéõØøÆQ2ıWá*e¿VÒ²JÒõn×Çs|×Áï¸t=ï¡”$ŒãiJá8ö5\\G¦@\"J-Åòw2Ÿ{®QbÂ„(NåÕEš4¢Ò­JU1i°ÄÆDšy¤—ËZ“‘–¹¤ˆ¨Ğ•Îæ¦¤P³ËLf“_§hÖ`*ƒ\'0bİë²şkÌ¦=0O\0`ªd˜EÀĞ\0`²†˜­šø7\00›4ğ×=×¦gmêLd\nJ„ÌÖÕC¢!Œ5ÚDÌÃÅâé‚wpX–¥ãy(ÇÁ¤\'|wp”\"c×¡ã÷Àâ(\"çÌ¦c’$A(å:DA€c@	eÇ¢\0Ä€@)„@Cb4:‰í!›Ä 5Ò±=6Fû7J8®Âõ\\bIãÖÇYc,SëT_‡³EƒCzSÖ¾°9aJ^\'O’Ù_—é_ ÿª*cm\'@Qš¸Àæ«5’ÀÅ†i-W[å½ØKÅªvf¹ìL&,ÓF{“`ê	L7MÙ(SÉZ“1¸mw!¨öjw_ëj½ø%%{£.ß{û6üÖ{|şè9êsåÂYNïîÄ’(İƒÚ˜û²ü·âÄjdÅ²òÛy6j¥<$\n0ÏäÁ±>K©T³òt3UIÇ‰‰üõ×Å¦ş2Q<©D¡`Ä”™6~‚X\'|şøˆğ½1CŞ¼q™kçÏĞíüJV¹6übU¶%„õ[YõŒd¾^ÄéÏvÌCË~Ì‚ˆYúùt2™[ğ1MÙ‘i`¿^”hÆ÷$Ã,ˆ˜ÌÃÔ¿\'íÿ(&á\nâ6¾Ûa×qètº» 	ÑÆ–e9©½Ät¬>w²_/\0‡cAGÇsQR\'†é<iÅ>T*ú!Óñ‘rõµZ~Nú3¹	‘Â2GJY–©˜906Êd Ës|ÁF‰lòsÛ‰Ff·t\\\Z–bN!2]ÃTd|J€¢&à×4”—é\Zö…–\0¦B%«\r€Év•\0ŒXÃàœ€±ØTB¹Øÿ\"¨ºÖ±\'0mÀáOÀd\0™ç¸xî‚ŠT(!m“×Bk<Ilf%Óğ…Ö™zU[›é(…pì†æHIÇ8n‚ç¹úƒ´VSÇ1ãÉ1aÚr4×EÇ	Áp‹y0æ³	Ñ|fû\\„Le’\rR*Œ´êIK…R\n·ãc<8²k\'Ñ\Z$D©áålÅ1¶ÂSÔ‚o`D.£o™©YëZwâ<YÆ±q@Õî”2­¯ªì”¹ÒËÏärE6S½.hoÿ:_òK”ñMuGF•ÑgŠÖº².ó3(¬_—)×-Æ° 2ı‚ 5Æv¥çmˆ“ˆïŞãïÌøàˆW_¸Ê+7¯%mÖƒÉ6e~âë®çsá@†î+*ıäG4?&“<kŞ]lğ´«LÍ¤Í-\0‘î9ÿŠìšù¥d„<>óã[Ÿğƒ÷oqãÂ>_»y½Ñ$¿œÙ}1ÏÔæc²?³6(Úh›L4óTk¡–µè#Éö‚­Ùßòñ]Áx6çx:c<[€™€I1[`3ÃÜØïMË–h“¬X!Óë”H©ğ\\E·ãÑëxt]ßsñ;¾ç–¾îu<º‹ßñøz‹”’I$HBÛ¸®UpÛc’#R —àÍ~Odä‘·S\0Så~Âì!£Ó$1I’Ú[$¹ÎƒºŞÒ*1\\åGF9yÉºÔ)±­9GŸ;\rÇó“˜R_dg~\0FX%òYÀ¶†š_(€É”GÈBZ©4˜Ÿ/\0#šØ°Vš<öÃu-pQRÙ&2± |mó™ë8z¾«@\'ÌgSÂ0 I@‚P©PÊIM2!)k#$åÒs=¤²å±$±Lß¯ßíâ9A˜h§c1´ÁnœQ„ö:$Ñœ0˜sÂÙX²@I£cMÌ!†8Ö»Œ§S¢8FÈ”ÆN2š\rÙ> Q„‰ÚÓ{¥^b–Q!2Ù[±*ŠÅ²œÙş\"Ø(>Ê,ƒ¢‹ÀaéN,r ÄT¨Øé%+· 6æ…¬¤ˆ«2ÄÙf@Q„É4\nf]¿i\0/ù>£¼â›©ˆÃ²ÏÈTà8S¹Ù·a¬ÚdÃÛši6=ïM^#×(íÜ²¾,\"3Ÿ?¦š¡*	Ä®Õ¢~½I*¸N^¸x_uc!¥$ŠcşôÛ|ÿ½[|vÿ\0æ!¿óÊsüÖ+ÏÄºÒ£¥òè_¸5¾NÖS‘T•1³ÚDÖ¼3§Ì™_%†l¹FV¾x5ş&=+…€ºş·ê1=™zZ“ÇM.³(y3\"¿Ê)§ş\"`\Z­5İ½Ãw~ü%yæôiÎìbi”ä—ÀÃ\Z»W‹m\nk?}ÎRÙføaG3BL&<:òèxÊãñ„Çã	\'<<\Zóx<áp2ç`<ãh2e:“ˆ”=×†XÛµë*…ï9ô:F=ŸÑ Ë°Ûaèû\\Üë1èú{>ƒn‡Q×ş|«×eÔóÙÛês4Ó<8¶g¸\\0A…Q™Ú\'HòU%‹ß)83BĞSã·îzÙšl€$Ÿ³Ïí¶™|ÆòX*ZkfQ‚ÈY¶”ÄhŠ>“¹šºçÉUR¥­®I[CO¨1Í\0†Z\0SƒŠšLW““}•GI)YãSrR\0cN\n`øL œÀ˜Ì5­-![Ó_´ÀÔ•ÛœÀ,–J•\nƒÆJ÷a,Åª%6ÂrœÆfÓ	=`2ğ:ƒ~×qQÊÁèˆé$´¢$ÚØ¬†Èh»¡8ÒÒ±ƒåºHÇAH—hzºCÔíá*‡~oˆã¸h0›Ï™Ï§L§fóQ\"„õ‚QÊb”c\\×C¦êe‰ÑqL˜h02\rHòb\n—\n™İº|…É,•¿™éÉõ·˜\nJ¼Ñ7&*	ªU·LÈTm\r<Eóû.d§©x=!JHË~QéœS`“)\0<`Y¼†¦Zf3ÛƒdrMÎmÁCSÀ|2V¢(ª3²,>S,?,Éh®ŸÏ¦PU’ÚİÀe¾\rÀ©’ö]…#Ş»}‡·Ş¿ÅãƒcöÎïszÿ4=P*÷©-)Ëy½¼r/Wó®4„Y¸bÏS\\ØËµf–Ì®ĞfÕ¬ß(B!šã“ÜÏ×›˜t.–Ş{)S\'r¥èŸT4\r¼?kF`pDÄßâ¿û#^½y×Ÿ»Êå³ûÌ\"—ıy¹îŠ˜$ëó³\nÜE&X_UFˆ4¹ÛwvÇS\'s¦sgs\'3\'3Òï/¾>O9˜Î˜‡Æh”°çxY™`)DÊ„¸–ùğì¿—ö·¸~nßuèzı®O¿kÉvÏ\'A1 Ñ¶İV}HÇ±‰R¹è\'ÉöŒ¬¾…ë\ZvGí×bİƒÉF¶¦ bV‡R¡˜ı~&®¢\\Uu‰U¡¦ `¿¬ãÕ‰º‚˜ÖÓd¬Z	N%ú¨ëÑ EÌ‰³ş\rL)®\00ëšø‹\0¦=ÓJÒ¹\0`JA}À˜V[S¶µ %Š\0f\"Z ;‰‰e‘şo«%\0c2Ši²ôütªğ±\\<:+²lBâ:.ç1O4A†³©}=!Â²6ë\"¥Âq­‘“6šY0\'V-9K©X[*sÏh¡êáº–ö\r‡øÆæAÀlŞÅïv	B`†s¶×&@ÎçÄqŒ1­5R[*<Héğ•¡(…luvs¢!û)*ˆ×GRÀ˜\'?àª‚ã\n SÜ€›ÄëîHÔì UÒ½¢†AjSšV’ò¢Æ#/ŒPhky«ıOM¾wÃ§©`«Ú÷æi¾æ‰Æ%ûwRÚÚù»ògïßâıOï¢|íåg9wê”îºEÉ˜(\"ú†ø¤Ú÷¬,ÊaJuâåÂ;A±?v³ª+AÅ’]³Z6’M\00ß3“2F´÷MÉÜğÏSÅ™–ÿ“wŞá»o¿O¬\ro>w•gÏŸÅs=fÑü§¦ê“RÕ‘¤)LZOY[‚å¶æaÌ,Œ¢h	8æQBßƒk8šÎ9œÎ™ÌæAÈ4Œå`q²ô4‰J¥Æà(IÇuÙêûxƒ6ƒıŞ¨ße«ï³Õï2êut;üıngõ¹ïÓ÷=¶zb£˜„š 6˜…ªØBÿP¯ú<LFelñy˜æ±&çS]Œ+M•DùÓ›‡¦dV”kµP4…˜ÀäW•dâV³ãò$÷¸¸Î¼:Y–V^«BvBËÒ6\0˜Ú’³MŒY`Ö	«²¡¤ó“ôÀ˜‚²hDâepw\0óMü™X¦/ª+\0L<›L¶ÍNƒ$±†J:ÇÃY—[¡5Çag{‹³gÏá9:>æğè€ãƒ‡(×£ÛëÓëõqÇ–¤)«kÇ\'Ì§3\"Ç6Ú+G¥MzéâMëB¥³\08Ê*‘iH¯HJë* ƒ£,ÓÓétp­\r³`Æx2Æ+fó¹U)‹\"0†0rSU’Å£[6¿““OÍK‰\Z¶©¿Å‚æÕ‘^Ê¤f3ÜÅ\r,ó¬Û6÷Ö‰f†:?–BùK.ØÉ:8Vˆ,Y¡B†+«ÔdÖe¿ª‚ÜšènuÙk¥°ŸŠ•LgÓVu¬|oe&¸‚‰¨ûÙ:æfù3)ÊŒŸ(»¢t2Uİ—(”)aò²¿™û«T‘kd²?×:ß¡ãHÉİG‡üñO>à{ï|ÄÁÁ1çOïò—^½É…SÛµÏm)l*df[Ï¬Q‘÷ÏÊ›Ï.y¬e„0eB±ÊŠ|©(…±Î+™R¿Iõ^Òœ¹m\ZÛ¦ò½âçEyåìó,¾×’±Ä R “­­MjT(ş,ÁŒ6‘õàğÿöüoßúŒ7^z–¯¾pƒ­Á€ÃiğÅ±(…{×/·ÅX.JÙâ‚±áâó$ı\\Ç	O²·åòğhÌıƒ1å\\SÆ³”m™q4›1ÍæÌ‚ˆD<G.Ë¯<!ét=¶†}öGv‡}vú}vG}NmØôÙtÙtÙ\r85êÓ÷}f‘àÑ8dÄ,S–6û½yó‰æÁx¶ê§=aI\n*“r_TrH”öJ¥a\'MeËrEå>)rçñ9§4\0&#‡opVâùº†i©BÖÀ´U +˜\Zß•M›ø×ïMÔİÆ\0f¡f]YÕšşJpWS^·LşÔŒÈ]jîgš±ºÆ$N˜C$DZ£ŒLkãÓK,Í”<¥èú0ÀS’®ßÁëtğıëşÿí}I³,ÇuŞw2kêáŞ7ï ø@ ŠĞDM²6²Vvhç•€Şú?Ø¿ÆGØ;B;¤°ÂƒHIJA\"A€ß»÷öPCf/²ª:++kè¾÷\r Ğ ÛİÕUYY™ç;ß9ß­òªB±İ È÷`£‘¥nİº8!Aàª²¶¬P¥É–•ÁÊFd¬JSËô\0V¥Ì\r£X\nHa‘- H ‰+ß,m#°2AVíCkİöz“íçÉqğ@ƒùCd-Ü’)7¨ìvbö\0M\'vÍÓ¥Z@W®¸\rf®»‘/öÿ©£ÏˆvSsçfGjbÓáÙÙeîl,~ÏÀ!x›¦Ù›k7ÆÊN•±^„9àg£{ğxÂ{¼G\\_üsš¥lÇÓÑçuümüï\nòrO>ÿŸ|ô) ^yå%¼zÿ%,³E›•õ–ÛSÂíÚê<jYI­÷udŞß¼F{GşØ&%^Oä)1ó™Mr\'`ñçFEÿ~I”‡ÀÊ”NO¹L 5òhr%½\0<OûµHbüò‹Ïñß¿ÿ×xÿ£Op¾Zâ×_ˆó³[\"‚Rê4Ë×K#Q‹T&Šµñ¡1ĞÊàÖB \Z_lğx³Åå¶.÷Úå¸Ú¸Úå¸Øî°ÙØ%”QmØ \rCa½Lqûl…Ûë%^¾{Ûö•d	ÖËg‹n-3œ¯2¬—JMøì¢´ê­Œ°İÛ¥8È[ƒEB®~y¡!.÷°}èµØãÛP_»k5ûŞ)¿ûuÎ:7\r~0˜Tp\r;ñŒ~ĞõÍÚJB jƒÎN m<\n{nÿS\00CAğœ˜“%”é\ZlĞ1\0æ˜¸cKV:\0¦C\0è&\0Ìˆ\\tÀ¸çrÈÒ–Jƒ´®Ù\n\r%…•JæF¢¯6B£Ì!ÉI’À°Æ\"[`¹\\!Ih­ ”BY¦ØJ‰²,!cëåRVö½ª*aØšQERbÁ©Íû\r*-ı/I KSH)k‰Â«Áu#ºáÚ|Nˆ\"˜È@GÖ+FJ+6À £­ª™Ï¤uÆ’’Ÿ=lô.ûâ™¦rÂ‡à©—~i‡(éPğº÷YfÉöd¨œaNš!È;Ø#rÕXœßf?#íö¿ø,Ã`j“A\Z8ÛP¹ØØ=\rÇ–J…Ô \'S,Qo]ö‚Äfváu·/dşÎG²S>Û\\Îf¿ÃO~ñ1şïOŞÇÅå_{ù|ï­×ğÂí[ˆ£(˜@è©é5Ìq¨ÿª.\"ˆZ´€ÌkxgçşSÛôŞÓäƒ[¸[ÿSóıò“–)4^†÷xVëX6ğ”ï´ÁĞg¨\0;<ÈÏÈ*Uà½>ÀûŸßÇvŸã÷¿óşä·\r«,ƒ1N´ÊTÍÜj‚{¥\n¥lé–²{g¥4¬S²ªÚş“}^—UÔ°-ùª”F*AÛ¢À®P¨”2W,îß^ã¥»ç¶ÌZJœ¯X¤	ˆ$v…Bš$8_-pV÷ ¬jå®e–Úÿ¯ûWÒ$†2À‹wUsÖ&’T¯_Î¥´µYhšÙG{I˜»¾Qüå‘±;Fô|Üf&\"·Òä^LâìøÑ!îµ<\'èïÎGdå\'ã1\03Vvƒ\0&Ø/3À„<vÜ¿“÷ıcŒ‡æz^<4“M\Z`·€é€ç0€i¨nÙ6fS«êÓd{„¶oÆXYÅ}‘£¬*h¥j…2†„4!Ò‚Ö‹lÍnk)I)Q*ëˆ[”Ú6¶e›ú¤İ(”VĞº–nAH	m4Êª„$‚f6BDÂ6\nÇƒÄ°2ºî‰©U×„õŒaˆ\ZôŒq\0s‚Ì×†e¨v•»:Gh‚æ˜éNyÕÈ°›ØÙ÷Åì+È²†èü¼Ê\Z^\\/šğ®0±ÉPÇøïXJŠ8p17µIu‚ÚÁò$t3~<É2u\0Ş‘çvÊ5s- |~y‰¿{ÿüà~\0øöÃWğ;o>ÄÙ\"… ô=<èÀıu¸âŠ[nØYÿ™ÌkÿYggc\'¯Ù\ZÈ3Ñz’`S‰;üğ}\ZÈ¨óÈâò4CÙfLŞıÅ/ğçó#üÃ»?Çëo~ÿì»ßÂ;¯Ÿ]­çÙØK’UÅÌKmK»´U2“ìkÓÅ«}mí}²/JTZaØ½ìb›ãñv¼(­³;Ûw¢LëuÂlKšH–2ÁÙ\"Åİ³•-ó:[áÎÙwVÜ^/q{½Â­U†e–Â°ÀÇûø¸®ö\rÑÌ¸ÌûŒ¢e>y	šóİõçéßõç‡Á˜bSŸKà¼¿‡ÿI^vÌ}\0ƒ#˜k\0˜N\0ÏAú€\0\'{À°/˜bƒÆŞpƒ\0\03õ@O\0˜ÁŞ¥›0şØPxma K¬¶úÙbe’ $´¶¥\\ÔèÅ‚Ö\n›Í%>ÿü(cuÜÙ0”²‹¼Uÿ‚aT•†ªØDRX5“4Á2[@i›±ÚïvPª„1¶C	!UU¡,r(U!Š¤\0V/>‰ÄIÒ*˜€]SõEU¢Rt´6Pª¬\r·\nk”ç”Ô5í*MiZ—êËâ6M©ˆ¿ßîf#;…[ª5&©ËCAã% î¿–¥Ôâ~éÃP 5W‰X#ò‚yò™!L—ju—5?×;7Ëç÷Ÿø×Ì£ı64ëxs\0Â© ©s¾N\0ÉN¢„;Úàa™¨±>–©¹±’£±·¿¸kcğÙå>şäS”.İ>ÇÃW_ÂkîÛõeÂßÓåJ¡Zy:Èr“é#¼À|óÍf	ÔSödÂ3ŠìŒ™éßLÇØN­!`9Öÿå\'E¢œC¦Ã*‡£àæ)20€u…ÿôçßÇüqk?ıÃßÄo¾ñŸ]•5(/q—d\r?x|Ÿö7;<Úì{(U¢ª*ì\nÛT¯Ù–ˆim ë„àz‘b™¦(5CF)î®3Ü=[âÖr³e†³E†[µÄğz‘a½Èğh[aWjHAÊ2`S\0Û2¨p\'óÕ9¡t—¹\r\'ì†îìQ¾b¿\Z0æ¹(7Á<EÁE¯`“bVÿ±ŒdS`=0=aŒ(paÀ`Z±+¨½3¡ğ08ÀP€‚rÖ-ˆ{\0;R™è¯èÎ¹8’u¹×Mœ\\+qmòDH“i,AäyQ«ƒÙ¦ü|»Á£GŸ##Äq‚,ÉÄiM@„ˆ DÔ3Ö\n•\0Ò4Åj¹D\Z\'`fìòU¥ ¸´FWBZÙff•Â¾( ´uğÂª¦¥q‚HH,Ó:®3ıhUÕªfŠRÁ4R»¢Q`#/ÃN¦ôĞ/Ò0+®üì¡¤‡(¬`,ãjû9%\r½fĞ¿w¯®¶F|‡FAŠÁ—=³2­HA(£ïI®ò˜ŸÕçà&:İàLC¢æó2ÑÇc77vYú\rD“c€löü›$Ïƒæš\r3.·9ş÷ÿ?|ïC@~÷ÛñÎë¯âÎùYG€Â\'·Ì‰@3V†osJä–ÓT¾º?GÁùæ3\Zş9ÎmÜ;ÿ~‰UôÆÑ9ß±l8<Œ›ŸúË0ãŞÙª*ğ_şòûøÁ»ï•ÂÃ—ïã{o½‡àb¯‚ër ïƒDjüà\'ïâ/ÿş=¬²Æ0ÒDb‘Ä(5#S¬—k,³‹$A–ÆX&1i‚[«VYŠ¼b(H)‘Å1ÒX\"‰\"Ä±İO­|&‰e![sƒC‰º,²1îÜ¹éà–ºOÌI§Îó3úİ/ÃrS¯¨Ô»ÆµUÈ0&õŞW\'\0L8`¤ãçÒûü\nd=&h(¨w¥†ùÉ˜9%d>œ’Q08ÀLˆ5ğaÁf¶¦TÚ0d«Cßd€¢H K,²I£T\nZ•¨Ê{¥\0Xƒ,)#¤qŒ4I ãBDHÒZ$I‚HZcM!\"HÓi’ ÓºW[¦’ˆ“Iœ@­5´R(Š»İ•®E²dÖ¶ÆÔY1n3¨@\ZId5ÃäÖzBı0=¡_¯òd\\¼‘f,êt{\\êağp…şIeWçUOç÷úÁY÷Y½	òD7ãcÊŠz6€ùæÏq\0XEÄÍn‡¿}÷gxÿ—Ÿay¶Âw^û\ZŞY’¢Tf4%Ö/<\Z˜ñ‘B˜îë]Ï}¢SİhS&ÇUsŒBGŸ>\00ÏY~™Æçñgßÿ!~úáÇ¸{÷ú¿×<€Œ€«Ù‘¿6Œ}YAiƒ³E†Õ\"Åõ\n·ÖK”Ú&ÏVYŠUfûOVi‚U–b‘Z§ø8’(*ƒR(cº}\'õ}(*XO”ÓŞ%¹Ø\'NÖOÀ|õz* ¦`LYœ¯Õ3ÔÎ’P\0˜“šøq¢™{¹\0¦yo®Ì˜€Âñ¸©æl¦M‹]Àøruı¬1N9”¯QÎ@ÅX¯V8?¿’ò|oUÂŒ•@â•ª_]@W%ÀQ#Í–X®Ï°\\,±X,°HSÄQ‚J™ºñPZµ$¥®İ²m¿ŒD–¤ˆ¢ºîw±Êf1kktE¨c·Ûa·Û ßm!¤DšeX-W8??Çİ[+¬i]jÀµpAã©BÜaˆ¨“åsáµ=ÄóSFZ®º×ìfsÊÓÜàÄ3º¤±šËxŒôZ¸`ÃÌèWégËs8”5vÕ\\|ª~àÇ)nuKÅÌ$ğ9Õ´ñÔ¬xWl!¼Éİ–v”>É«[âI°3V\"75÷&åÑ/×›\ZcÛ7§pµ½Ä/?ş(KÜùÚÜ¿wëÅ€\0“jªò¬(]M_§T«İ+¸‹Â¡·˜òd;\\Ğúšk±“ÃCâfÉƒ|)\ZE3×kLú{ÌgŒı£fè÷‡…@){lK;ì›ç$¬£|úş×<§åÜ\0\0 \0IDATşûŞ/ÀW;|ûíoâßüË?BÁ¾¸ÜÍ\0J-ğÎoâáË_Ã½óVYŠu–a‘ÄPLl—¡Î+F^G¬\0=Ã¬¹½ÏûğOƒy®@ƒk7ôAF¤ó§\0¸yR\0f”=y^\0ÌˆYÀğ)*d\'\0˜¹Šjc\0¦\'çŒ(!€)·œMxò¸‹°oµ‚‘ˆ$Y`I«Lf4ö[ ,öPJÙ&úfğH\"ŠcDq™Ä`A¸Ú^áñãÏÁÆ N2@XwŞå\"Ãz¹Är¹D’$`S{?ì(‰YU²ZíJH¤I†Åb$‰ÁFa»Yàò*…RBJä•Æ§ÿø,„ÁƒóïßFZ˜¶OÄ¥êk‹Ï¡ÌswåïHkö\ZßGÊÆøHÿ—9}5=ÿ†1@¤˜Ù{D­ŒòToX9”J4niÜh‰W·‘T–D\'>ôÄ—@ÑL@9–ÑÛ;ÒzÌ‘»\r´pÃ‡¹PJl”‡ºİtĞX¹Ø#sXÊÌh9“ÌGÛ-şöığèñ%²Õ¿õÆ×ñÛo¼†ÎÏlã5÷çÓa÷42ÏÃ<©“m*œR¯ş¬mRmÓz#ym\\•I×/éğ›­¬@OµŸ@âtÿĞ\\ º/c~GSkÍĞ=ò¥•Û5ŸŸŒ8³µ\0øúİ%şî§ÿ€ÿü—?À_\\âo=ÄıÆÛP´€ÖÇ…¿çĞK÷îâşF,mõ€ÕÊl;òÂ¾Ü=&%8¨ã¯èŠ¯^7b:õHÿ€	ºO\rÀoÓ}s*dGê¿ÿ…œ±š\r=æH²±ë™£@º¯Á™)\0c:ÇI\0C)a\0•6ÈËy™ ­lwÃ$Q/âR@JYK\0!%b\"Äqbÿ.¥eTªÊêt±mÔJAAµ~U¢,\r´ªP–%®¶Ûú˜Â2.Z!ßoQ,–È²dÁÔKTƒ¯¸©5NR0Ç0ÚÔ.ÄQÃÆ.×P,P([.7¶õZœ¼  ¹\'#;ƒ@·¤3Ï¥‚C¥2SRÇCÁ\rİ!/‰\nF!!\0\Z8Á¼÷ß3\neF€^(È¦ÎwNÉÎ-A;¦Ô‡WÜ\rÄ]ƒDgù\"÷–f—E˜[>5ÇxóÁ‚1`çş=.·ø‹ıe‰—îİÆ7^¾wî MJK9¸zÊ‚f.ØÀ¬dg)wu€Ú0sæ­?7Â¬Ù1F¡cŸçà:wô¾ç)Û=¯%™MòÅå~úÑÇx÷ÃOÀJáwß~ğİ·±/¹\'¸27ßŸ%IN®iåñ¦ÃOÀ|õúêus ÆÍàğ˜Y€aÍ†d‘oÀt$p\0LÀå™ÆäJ5À\\×M˜Xyj\0¦œMíœòRa™&ÖI˜RÀ†	Æ1šÔJA+«7ŸÄ	d!Éˆ¢D]•¸ªCÕ@FÁhƒ,[`µZCiK¿ò=˜¢RØåÊ¢¬OOÁ¨¦Ü#¬VgX®Î­¡¦1PJYIè*FEdûa*\r@\"Š#,\"!3Ü»sY¶œµ	\rº«;ì¤Øñ1#=Rä…<qğbá@0C ë0Uºüs¢Î£ì—¥L0G4cëí\Z†2ÿøçñ†¹ËDßD‰Ä¼±\"pß¢ìFçm´ì³¡Px úwÎùŒ1M¾²˜›Ğ˜üÎc±>|‰¿úñûĞ‘Ä×_}€×_º(Jjâº{qDÔ`szP:í(Ü«õ‡EW†BKq»?:3™Ø»%Ô’0˜9ñâPÃÒaÅS<Ì}šìyi”ªBÊyCÀÕf;÷<†½›— e4şîç¿ÄO?úŠ»/ŞÆwßx¯¿ò5löùÉÇ6Æ<÷Aæ3á¯^_½N1½éFTä„qâÓ0iàRà\Z0xÒ\0¦©±)Ùê˜ÀæbB÷â	˜š¸×=ÃÎL0On_Z3Ò$F–¦XÔ\r‰`®µñm“¼EQb»ÛáêêW›=Šb\"ßÂ¥$ªª‚áÃÆ¯k3­r·Áöê1„Œ\0¾ƒ8M!H£ª“³,C¶X‚A(Šš5öÛ+\\^|†Ïÿñ]”ÛÇ ˆW·­Ï±XŸc±>Ãj}ru²*‘-BÖ¾5\Z¢QâfS÷Óh(ÍuÉHÍ†xÌ;2èa×íéÄeFüŞ÷Ş÷\rôº½\rp·Qá.£xsMDo–xp¨¾ÏíxÚ‚+O*ºe¤¼ñ`xÌĞo0è¢\0 éf»mY‰_N6OvN€?Î~ßQzê¬dËWÈ¡˜FQs‹\ZsÕîxœâºv·LìÅ¬!v†@¸Ø^âãÏ>Áşbƒ/İÃï½õ\rüño¼1”+>¸ÍtŸj·îçj@¯Pıp5I†CÛ¡L¬ÿû˜‹äGÀp#Íî—>öùÌP/B÷ü¹½¿DÃÜOS&7çŞN©È…KÍo,Ó¬å7{|üè‘ø×üûxûÕ—PTêW+¢dşŠg9nv`f¶áŸø9M‚˜ÏFÈĞtÇVtd<	\03˜1Ó3 ó;ÀŒI(‹ú½¹\rü=Æ‹æ4ñ²¹ŒÛ}€á\0€Á8€ñœ¯,)\"ie–‰¬F¾íd#Ilı^Ùš¢XÂ…|·…R\nZi0‚„ec˜¡«Õ~ï/–ˆâ%`6¨Š=\") ×gˆã‚Ö\ZÄRÆuOŒÑ\Z†Ì~cÍ/ó-¶ŸâqŠt±Âòü²Õ’$ƒ”‘ŒQ•9„Œ‘W¶»Û}¢Ò0l¥£y àd‡1,±qÆ´•\n&\n‚Õ a&Ú“ÛşƒUß`kú©\\òÙÀğÜïyæ›c¿Ãïvã>¬áàYË9;ŸïËÁÎ©ÒÑş1só1€2e‚Ù÷Ö C@MqÇ!D{FîRELñ0x˜RõÄÌenÆÆ×ew\Z#ÂŸ|ğ1şæı_@$1¾ôŞËÅ\n»RÙ~òÀ†×DFÏjÎµ#vÊÆ\ZğBì4ğÅ	vw¯<”,5¢ ıõ$tï‡Jî¼sAÈÇeVÌ1g^9Yv}Î˜ˆ$’Hã÷ÎÖøo¿…ïÜ®“Z_fÌòd¹™Ùñ<–/×=‚4`\0ÔÍó\0L\'U2À`ÀğÜş\'İÄ?ÀÏğò\0ÃG\0˜©ë™`€	\0ã¬STÈFÁQW¡\'Kâö;ÖI˜­?‹$ÈzFR`‘Ä8[.q¶ZCD)Š2…R\ZeQÀØhË{.J+èª€.rè\"‡Ê|@{èråb	¾u·Vë5C! ÈÊ5ÇI³XÚ>˜(ˆ¡Ëå^AU%¢l‰åf‹Åù¤i†H¤ˆâBFĞ ,\"àr{yY‚9AøKôUæd›1P®Ä½#jµÁs¡éiÍ0¡Ù<S< È»mÔ`(fy~34½ÂÁ38ê™¡ÄÊu\\ÑçŒ÷ÉA†;	z’ùÃŸgÈ Ë2;`ˆOó=2s¾75v‚ì³ù£Ÿ}„¿~ÿC¬Î×øŞ[¯ã/İG^9ÍÈÎäŸ}.4+8”LRPÊUó5à¨?Ñ{÷ÎÕö¿¹Ó«Õ>]Ş+Ó“ÁŞ9\0öçƒùÁÏzóò¹§ëgül™áµûw …À‹·ï!ST_bó€ù²¿y†Ÿßûõ–Á€¡‰,şŒ²Ù\0†oÀàË`‚©µ#\0ÌœSÌĞ½\r`&JÈz\0¦ÏöUZCÁh+jÅê#¶ãlkã%’8F\ZÇ(£Ê².`°±øÌV‰Ïe¿Ëv³&A VĞÅºØ ¿x£*ˆÛwQ¾ø2´6µé¦ÑÌ¦>teË¼\ZæCFˆâ’õ-È8Eœ-‘,ÖQ‚²ÈqyõJ+û›\"Ë‹8ÂÕæ”•rJ—¨ã¤í«+\r©e%~)™Ğ÷q3uÊ±:¹d¢QğâCı.­ÎÒÌCy N)Ü©‹©›Õ\r½ßj²óè×t•–u	\"ê”äJn(r¦JÀN\røú¼ì6»×Måƒ½Öõn€Üüyš™Õ·3Õ?53Ğ\ZnFg2xÿ—Ÿâç¿üßzø2şø7ßÆo¼ş*ïªÙ}°TÂ°¼5ø—á’ÂÀïöQ‚Umû˜È–n6÷m€Á¥0àVQoj|ÇÊ ‰¥¾ÇîÈ§³`³º²æTÖ‹ß}í¼|ï6@„Jë)-–çæì¿Â+¿‚&\\˜ñDfĞ“‘ˆzñéI\0fNãü5\0Œ:\rü3Î#¦Lÿ\\nÀ¸+C\0fŠAêÀ=¥&~÷½1µ9_°àğ¥ë7ñ7Çö­êÀSm\"	Q{ ˆƒïBío ¤\0ÕÊdDl•Ë¢Ü\ZÒctUBçWPWŸØkgU– (Æ^¾øô#TZ#ŠSh¥ Œ5´¬T^7ØR…È²”Æ@D„tq†l}ÉêqšA«\nºÊA¸svçç·¥K\\í+,k€ÄÁç Ğ+4%—Ë)b7=ŞÎz@úÖvm“.×xœºêU4Tú…ùÒ©¡ªw&›öQtä–ıq²@vºTœ’´ÖT4p=\rOãÕ4¶à€9ô\n„ƒİ!àyªò˜ßğ>?È§Î<!7¡åÎ“ -–ÓÔ¡d\\Øëõ‡Mö>]§ÿïÇ04SŸ³3Øî®ğèòq,ñ‡ßy·Ïn¡2Ôóü™²ú÷ÉAgöSz¤fG*ì´ìKø½¾Ã=A?™Ò4İ\']åºµƒ\'d½]\\İ°<ÜÉÁR·oç9¾›ûÿö\ZŸ_¬Q*o-G)r¥[eğÓ1Šœ·~}õúò’ãØé9ÇÚ—‚Ñ6‡sÛOzJ÷AÌl\0cÆÙ—›``Æ<`BÁû$\n|>ä\0Ãsø)¬ø6åóÔŒ{ì1˜æš®	`§Y*e½bJëœWV!¨Ù#…¤Ö•0PZ£¬\neª, Uf}¨cd‘d¬‘œÑ\njwSìí‘.Qæ;\\~ñ	òıBJ’Õ¢$A’fql•1m$×lZq’![!]C‰½Ö`â$Åƒû/áåW^Eœ®ñÑçH“šJéN6ö˜r(KÙ¾ï6ë\rÑ½İŸ†\0Ç\r¤‡äi‡JÇ8À`ÍÊM8}Ï,†D›iVVùYWóîÌğ\0&½\'²áCŠS7±Ï2şé\nØ•şşıŸáÓ‹¼òÂüóïı\ZÎW+äåÍ–ıĞ‰×8d§ş^§(œ­™{r×<ú„º£#Ï?ì£4çZPÔ?WW)Ër~†İr–Ùiœ T\n_<~„Âä•Á2‰qï|\rI”Ê<Ã³üêõe0OußøM1ğLÌ‡¢C<Î7`‚Ağ‘\0O\nÀ\0=‚§`üÆÙd5\r?ÏÀ\ru¼Ü,€€BUBB* T\ZE¥¡ë:$ #Z—{­5ò|ÍfƒÍvƒı~‡\"ß¡*öuÉ…=W@‘q¥àª´Ÿ ‚Ñ\Ze¾GY\0QœbyvëõmTIŠÍ§\"§Ö~Ó¶‹±´¶À‹lo‹Ñ\Zª¬`´ŒSÜ:¿ƒ{w_D”­°©U•×>8¥UĞĞ:˜™#QÚîFæ\'Ó€ÙM @’g!Oš›Â|ò;\njä9•´fvŒ™yëí€¤†¡jƒß¾|ìpÆ’‚ÙéfŠ™1SFsLà>È‡‚Z¿¼ÏW ÚpuV²¿gÚˆ¶ŒinÉ×M–“M™`†Æ#‰%]Uø³ïÿ—ûï|ó!~ïí7Áˆ°/UoNÎ•pö›İif&ul,æôÅ\r={‡óğŒÉÍÆûe<	Ã†Ï‰z@Æ«±RÊF\\ÂtÄø\0`ZÅ‚cxsÁ9_„*#E	˜óÿŞÇU®À$ñÊİ[xéö‹4EQ•Oœùª—åËFNû¡YÛ¥“çM+â…ô]]\0êu~ŒuU\\ÄŒ¦$Od`†|D€(!Ãq\0&ôù^Š–‡3©7	`:wÓË¸ô<`Ğ“îŒ0x\0†lf£Ä­£2Ê<=[$)I‚,–8_.p¾L!¥ƒaŒºÒ(J…¼TØç9_<Æf»V\ZÕæ\nåö,\ZsL	¤qŒäüFCåÛC™L$/ÏİAš­°X¬p~çH)¡ª‘<Ì`]µ‚Ñ\Z¤K”«¢ÅÅĞ\0ˆD˜\nÛİ—›\rR ,eU¡(J[îæ€!£¿XA_Ú\"TˆP”î°‚BY–iùÌË3¤š\0!ëpY?6»íæ‹É9wáo~¹Z÷àö¶ôûZ¨#¡Ü”]\'3vJ1–‘;ßãÇ…e†=9_çÔ­¸SÚ¶3ƒó)W÷¡Ò»9Àeª9ÕÆíU‚İ^â/~ø.^{pÿâ÷ŞA¡	¦—c®zÚ)×u )ĞÖßá¹Óë4ï‹Á“Sæí¸ïL¨<’ëÄ†èzÙ±ÓåERCÊg\'=[~¬p¤3e³^íK¼pû.Şù¦Àßû `¥HãŒy	ƒc!×Ø!ıZz¶µlO\r¤=uÖ\"”ñ™á—4´ºŠ€s¦Œ‘äæ`LÕ–e’#`BÔMÃpû‡µŸÙ@@8Qu¿4ùÔq$?Á®Ä2qW³~0s>Àğë1C…×hâ?ª\0ãÔ*˜Q06ÄPù\0†<`ÆX®	YèSšø0¾ĞÂAĞñûkàeH£Ú_ÃÖë!`­blxaÀˆ\"‰8’ˆ¤­k7FÃh£+Û|OD1„µÄ²dŠ\"@H{Š2E	HX$H)§’å\Zq¶EÒx0€ªÀeSÀhÖ¨öäÛKHˆ(‚.\nTù¤+”yÖÚJG“õŸÙív(«LA‡>Œ`íz@ŠØg>:åYş>Xj2rozu‚sà8C%m×ÙŒY]¿™Èyã¸ÍÑÉ`\Z\"¨®~zBû¥T7•½Îqü®á~óxfĞé•âœØôxŒ17ø8vÌBìoš	Š²Äã«+\\ís|çá«øİ·Ş„1cö6š]\Z·7çØr¼ö5bIæáoc÷ˆFçóT8Å.MşfÃî¡;×ø	õ“4ÉvÃ§Ğ–8ã·+­ËwÏoãõW†\rÒ8Â\"‰¡ŒÀ¾Ô7v\r=1ç\\‰4Q`ë®×<k->ôZuúä8\0ìè¸¢éîÔ	%Ì©\r¨{s	ã‚,ó áômn÷\r”>{u\0L³óPÙæ¡Ç’:ï©¿ùãÛU‘t½ª|à+lW\'Áyì¹wª*† \0{a°{.qµC£0à8²‰vÿæº*d\'+\rğc\0Æmâ{8:,Ç€`¸Üïïu\0Ì{6\n`¼ñóoMO>úx\0ÓdÎµ1PÄPFÃ¶=1ê‘”Yc•&Èâ‹Ì6Ò»\n*Š¯Î¯¬BXƒ#\rÁ‚UA™\n\'*mE`­¥`T…ªÌ‘ç\0£¬r˜*‡)÷àbëÖJ\0ZCå9Ä~’)¢t¥J(UBAŒ,M°Ê2\\n÷¶®,P)eaváğÕw†š]á©iÑ1¨±³Ÿšølßó»¯BOŞq†X&\n”‚üòÓe ‚ãáèSe;|ÄVwzø¤²…=¦‚Ü8†ãşt ±å|€1ÈË§A!?ûäsüøçá·ßü:~ë[¯ãÅ;wñx»Ÿ´çŞ³©’6s}ó¾S$ìx8{-Ó1³˜)V0tî¡ë WFÕFğ:&±cK¢[×›â3@PÚ@Èß|åA¤1Ãîo•9Äğ¡5¸~\\½¸ƒ. ˆ:VtÌı€rĞÔ–{‡óü¦0‹¹Ÿ¸“ßUÚP Aw£ûÇqwf8©Fıı|Ètßš5ZğÒÈèyvµßóãî\Z67cOB´±cN1;¦½ş<âA0å3ÕìõæE‡ÿ8Ğ¶OÀ„êönÀÌ‘ÓÿòÄ\0ŒßÄ?ÀL<C\0:cçq<€\0­\r\"iıY¨{æVHÌ~F)\0ŒEšb½^ã¬P€Œ‘D	¢(†am}Y„„1\ZZUPU…2ßC1CÆ4*Öõñª6ã§«UY@ÄE{ÒÆhì®.Ql/ ÷°ª@éI›ï$£*ÀÈ(B¶X@Å1HJ6X¬Ï°Z¤Xe1VY†$É@\"ªK\nC£™Ì#k7p}2g¦9)%g?X¹9¸1fÊıów·×/¦h]“Ÿ´qÿXs;eª¿ŠÆÏ­.­kËi$pÈEŒ)&bŠÑ™síîûq,ñÃ÷?ÄŞı9şİ¿ú<¸÷\0»âZ¬Ê©ÌØ1ç=B}‰æ~å4w3ôõºÃSkÅ@ÓRŞÔu\r·´ì„/Lƒ\n‰sUızçëŸ3Ãc°şè…9yêÈj«€?ÑHPÊÔî{MÒÄ0m¿ »e@¢²­ÕõÂ!ÀAC½Ã<\0¤ü€”Vşõq€í\Z¾ìy±Öòáu…:ı“c{Â)«7ó9g¥Î|›º××OFuf­+äãìñ¡›M\rÛÒ&R|X®C3ôæŞ’[NlÍ‚»äi×&›1ıÌö%ç¾·fÄ¢D½€v(¨\r`Bª_c&”¦ÓúDTÈ&ÁÔ\0ˆ\Z\nºç\0˜Ù*d×\00ƒ`oblÆJ¼†Æ‹]ı¼cıhœ:!-B¶tŒ	škà\"ºÆ‹ªVB\"M¬W+!—‘ AÈ–«Ä¨JA©\nE¾GY±†*r”û\rÊ|U`cÀ†Q9@ª*Qìw0ºBqu]Úò/Š$(Š@2jËÌŒ®P{DÅéòÙr8ÍÀÊš`¥BYiÛŸCejpÖOˆÖÖ‡Šg\n¶ÁyÇç@³ı!rÊæ–Ë¸±r[âÎ³6\ròæ6û\nfÍù8ÃÃ!•3øµòËNvÚ•¡îôñI[İ*×TF}Lºz,›}ÒíÜjï«7nDèûB9ë“¿[ÏÉÓp°Û™Ş±[ÁØŠæ¾kÍxãåpw)ñÊ‹/AÊ•æYrÊCrÑsúTée\Z’šî”ñÕåVÄ>·Bı:rY™n°>Í˜İÏæe\r°¨9\'nz°¼ÄÊìÒ¼`>Ú)sÖAxÂ pÙeF˜dtïI}Ît€~U¥/­İe3k	îz0Æ@×Õlìfû9ô¬I! ¥„µ½@bœ±âN\ZˆÂ(Î\'8ĞFÀƒ¹}tK>G\n}wNºenuÄÜÜ{r+\Züõ™º²îA¯	âŸÊË× oy¦™\0¿gR˜óqÁ¤Ëäøw€†’›^©¹/è3–­¦AÃM˜¬¼ÿÏÀd…İT–á#Ø—\0Ì\\yê=OÀŒ2AÎ‡Ì©	l[g«ŒRÊH–¶÷¥¾]—˜Ù]\"–’Ø\0Y\n£+!±^®ÅIıyÛ7³ßïP9´ÖRZ5²\"G¾ß¢Ì·(÷{TEl4tUÂ0C«ª*@Q‚hynÅâ †©*]Ùà¨*Qí·¨Ò\r’4C\'0\0Je—*¥Û¦R\ZU¥¡Í¡Të ’è’ÇİŞóèH2\'0)§xÔ±;(çØ)èdşÈ5›¹R:‚šÌ_öÂ7°É– @Ü;}s‡š*0Ù#C yAoHŞ“¸ış 3r?µÑøÚ‹÷ğÚı;(LeøÆ³¥7Ñÿ4d¼ÉŞm´õ\Zq	#kÈ¤-\rä¶ñ½Ä_#åõÏ#{z™Æ¸ ‰İî¹[¥Ñ€˜:Ğn²Ón_A+ Qƒ­­šÖ¦ŞŸìÿk­ ¥-á°ABQû»¢Q‡â®H\0ğA…®W…Çì–;aB§W¡S/`?Úğ Û$Ÿ ¦ãˆ;¡ãáåNÚ©ù9}=Ñ%öOf÷¼_iØF¦%ŸxT±ß/Y¦Ágµÿ$F|àı¤ˆ!A3›š8÷³×ú¡ã¸Íû¼ğuÄxšEøç._õÿà*§ÑarÔ·ˆ†Ã%fç\\š2¯¡KøÑ¿şŒ3¶¦;~Æ=}3>İ²$óÜëN7^„ğ½ ÿ>ˆ@GŒŞÂà“C\nÒÔc¢£T\nee „­%3|0;3ŒZÒØ%ÚèzC-ÍI‰(ŠÚë‘‚ µA’f A¨”FYÈ‹ùn‹|sÙ:_·¥\0Ä`“\"]ß/ÏíK	£JèbS–VµLHè2G±y„(‰!“Àö:*mêş†ÖŠ(ªÊn`uöÑ´ªXÎ†Ú¯1ë™9Î‘eOâØ§)p|ê-ŒÔÉdºfš¡Ïº};˜¾t$“DAe1ê<nîùø‚„½å§‚ÜI@Ò`@Êø‚¯¢5†$‡Œç°\"× ‹7(]	şŞRã¡î%äq·¯ÀÏHcjUËfuÎa<X°²é4H™ÅŠE@¤sXuìIÊyıkÔ+ÅéôgQwæ²9m¶ºd3Ù»)±…›vómc2Æ~ó€ŞĞ¹\0ÎeˆÑ)uçóQLÃi §NŒa†6Êš&+U«LY–Š²D^”Ğ5Ë¢Ûëí±¤Œ&	YEÖÜ¹	Ã°‚dbjå3b€Eès7,s‰C^Ì{Îu\0Œ[BfÜš»À\Z×¬GÂ{¦‰œÒ$rè´k‡ÂÈĞBİËúPìÓ°59¥_n:3^Ë=õÏãÀËP\\&5¥Øççnd )\0š‰7ƒ6\0\0–IDAT£âr\\lJ£Ÿ÷ğ>Ğˆ>¾ï]¹aÇdîóx¶“ÆFas89t€ƒñ\"1 8¨íƒ¾¬s°¡¥ÛÁí§@ƒe[.\0uÇÂ_\ZƒPMË–ñˆm\0{îğ	« .‘ke…¢8\\R%(+)ìb¨M—Š6%.@ 8¶rÌ\rÏ6³Õü1€Ñ£5Œ1d%Ó$ƒ\r2\ZQ#NRD2‚R\nE±Ç~…|q	6!\"@\n«†¦4Xk£ UÙ{¿İ€Š ‚„AUuélŒJhÛµèİ’ œñ&™ÌŒº¼M6Lˆ Är°ï¤ÓS$ÇõºjË9µÁ4’ab„lÂ¬•»9wwÑ¹îC÷hl“ÉrIôòŒòÂ`o10Í  ÚòC7åÒd†çy¤t²u<Ô,î,SÔİĞ]®á bê•HÒÀ|tä¡	ıâ€¡Û2Ô\\7€éõQux:’×øNŞg¹PÎP§H6Ù‡Ön<©ÂI¹‚ØaŸìÎÁ¹\")]C½îµXFDJ‚òàk¤\\”ÊR!/Jlö{\\m®pµÙb—ï¡•-)–Q\'2FEˆ¢È3Šì{2j“z¥¨RˆC\nB$¤ H)	W¬¡Û÷HÌm¡3‚`\n</Ôzõtöˆ¶7‡»{Lğ¡aïØ¢yÂûíñ	ã•†œÁ½yï‡›\0}iÈê©õP@ÏİSiÆ^:ç½§=vC¿}óåğY–!Z¤%kyFØÀ>øMg`’4æX@\0ÀŒ¨¡ñğ&ÚMIòô`—‰kšõıó\Z7Ê¢òÈ)ñ@ı+õ2-s4jxüt-Š5¾ñÍûX,3h³oiyªY\ZáĞËvq¦¶lHÀh¥Ê:{Õd²,Cã.¶eY¢¬ê!Ç	DİGDĞQÇHÒË’4ƒ²Ì‘î2ìâDö{¶Tër3…|¿…*s­jªU@i¥+”UGˆÓOQiÆfsN%öE‰RiË*	™qgúcšøg5½zÌŸŒe§²úŞ!É[y¯Û|é~/È ,!ì¯X£5Ã½’=\ZÁ	bçfóæeUƒŸk¯™Iı‘ËëÆÎ\r»ÏáÁ¦pŠ(àü<´ü\r¯:„¾nôØ|§Æ—‰zy–şı`yŠ ÎÍàA‘‹c$¾çH>_\'	A]…á0d‚±ìå-O,eq0ì@qQkà7åN†­rfQé¶ç²(\nlv;\\m6ØnwØÊJAiÛÇW(\r¥\0 ËX.Sd\"ˆbpÃY»KX¯»ö(mÙm€4¶ÕZÔ`ÆARÀÔÀÆ†0æÜsª%ú¬hè‰âCR»†Ãm‘{«fSIANò‹]\0CŞí¡ãfSo}àuÎî—õ5wú>É%ê”2ï§ùŠşıø·ÈË\n±5Ş¸Îîxİøy$3\'ŸÜøsc ìæTûŸpsby>Oğ¼Ó¥cï3õÒ	XYVX,2üÑï¿ƒÿúŞÿAÕş0‘ı\'DK“kc©i[\ZFdÕÃª²¨«R\nØha[kƒJU(«Z+Pe+c!AÂÒÿmİqİ<E‘}OR«”EY¶@–­l_\r3Ê¢ÀÕå#Tª‘@ÅPU…|¿Á~¥]\\ 2€ÀÅÕ%$VfYë¶aSĞ\0©±ÏGÂ½l¬ÓÊƒI/0ä©´PŸíğÄ`¿ÎÌŒ.O¹!à@^íö]ÓûÅPâfşXÏÍÀO½7ËŒ‘ú—½§—úL]CK\nä`ÈHk\0CŸ‡Ët´ãæ­WíÒKCÇ0ÛŞÛwn§qE¹60vÅ%˜œyÊG%æ|n¨Œ«ã…@İ©Ø•¿v\rX¾òäR½D_CÍ+zÆŒ:ûå’İdgŸËpn\"…Ú>û¢¾Â¢Ë>´c@<sÛãƒ—”[êÎÀ&—ì?¢•™­*…B)lv{ì÷{l6Wxüø1>şì3|úÅ#|q±Á¾( ˆ°X¬pçŞ‹È–kDÑQ,±XŸa½Z#ËlIóA7ÃîoÚXáF¥5438õ=6QÉÆÀCBdŒ`!,àªYÇ¶\"½Ş×ú¥ÃÂú ºÏéßoî05öüEËàp§.ğˆl|‰‚pƒÉ¬CÉ)–}ö6©æ\Z¿f]LG½¤R¸—„\'ù‘ß cdÅ“~ı$9\'Û”½$\0\0\0\0IEND®B`‚'),(5,0,'%PDF-1.4\n%âãÏÓ\n1 0 obj\n<</Producer(PDFCreator 2.0.2.0; modified using iTextSharp 5.2.1 \\(c\\) 1T3XT BVBA)/CreationDate(D:20150313145251+01\'00\')/ModDate(D:20150313145252+01\'00\')/Title(şÿ\0O\0r\0g\0a\0n\0i\0g\0r\0a\0m\0m\0e\0_\0N\0O\0X\0 \0I\0N\0G\0E\0N\0I\0E\0R\0I\0E\0 \0E\0T\0 \0E\0N\0E\0R\0G\0I\0E\0_\0E\0S\0T\0_\01\05\00\03\01\06)/Author(şÿ\0c\0.\0d\0r\0e\0y\0e\0r)/Subject()/Keywords()/Creator(şÿ\0P\0D\0F\0C\0r\0e\0a\0t\0o\0r\0 \02\0.\00\0.\02\0.\00)>>\nendobj\n2 0 obj\n<</Length 3905/Type/Metadata/Subtype/XML>>stream\n<?xpacket begin=\"ï»¿\" id=\"W5M0MpCehiHzreSzNTczkc9d\"?>\n<x:xmpmeta x:xmptk=\"Adobe XMP Core 4.2.1-c041 52.342996, 2008/05/07-20:48:00\" xmlns:x=\"adobe:ns:meta/\">\n  <rdf:RDF xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\">\n   <rdf:Description rdf:about=\"\" xmlns:pdfaid=\"http://www.aiim.org/pdfa/ns/id/\">\n<pdfaid:part>2</pdfaid:part>\n<pdfaid:conformance>B</pdfaid:conformance>\n   </rdf:Description>\n   <rdf:Description rdf:about=\"\" xmlns:xmp=\"http://ns.adobe.com/xap/1.0/\">\n    <xmp:CreateDate>2015-03-13T14:52:51+01:00</xmp:CreateDate>\n    <xmp:ModifyDate>2015-03-13T14:52:52+01:00</xmp:ModifyDate>\n    <xmp:CreatorTool>PDFCreator 2.0.2.0</xmp:CreatorTool>\n   </rdf:Description>\n   <rdf:Description rdf:about=\"\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\">\n    <dc:format>application/pdf</dc:format>\n    <dc:title>\n     <rdf:Alt>\n      <rdf:li xml:lang=\"x-default\">Organigramme_NOX INGENIERIE ET ENERGIE_EST_150316</rdf:li>\n     </rdf:Alt>\n    </dc:title>\n    <dc:description>\n     <rdf:Alt>\n      <rdf:li xml:lang=\"x-default\"></rdf:li>\n     </rdf:Alt>\n    </dc:description>\n    <dc:creator>\n     <rdf:Seq>\n      <rdf:li>c.dreyer</rdf:li>\n     </rdf:Seq>\n    </dc:creator>\n    <dc:subject>\n     <rdf:Bag>\n      <rdf:li></rdf:li>\n     </rdf:Bag>\n    </dc:subject>\n   </rdf:Description>\n   <rdf:Description rdf:about=\"\" xmlns:stEvt=\"http://ns.adobe.com/xap/1.0/sType/ResourceEvent#\" xmlns:xmpMM=\"http://ns.adobe.com/xap/1.0/mm/\">\n    <xmpMM:DocumentID>uuid:0D8ECBA3A1082F70A6202A8AE5AA27C2</xmpMM:DocumentID>\n    <xmpMM:History><rdf:Seq><rdf:li rdf:parseType=\"Resource\"></rdf:li></rdf:Seq></xmpMM:History>\n   </rdf:Description>\n   <rdf:Description rdf:about=\"\" xmlns:pdf=\"http://ns.adobe.com/pdf/1.3/\">\n    <pdf:Producer>PDFCreator 2.0.2.0; modified using iTextSharp 5.2.1 (c) 1T3XT BVBA</pdf:Producer>\n    <pdf:Keywords></pdf:Keywords>\n   </rdf:Description>\n  </rdf:RDF>\n </x:xmpmeta>                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n<?xpacket end=\"w\"?>\nendstream\nendobj\n3 0 obj\n<</Type/Catalog/Pages 4 0 R/OutputIntents[5 0 R]/PageLayout/SinglePage/PageMode/UseNone/Page 1/Metadata 2 0 R>>\nendobj\n4 0 obj\n<</Type/Pages/Kids[6 0 R]/Count 1/ITXT(5.2.1)>>\nendobj\n7 0 obj\n<</Filter/FlateDecode/N 4/Length 1801>>stream\nxœ•”	P“×Çï÷}ÙûÇ¾H@d\n„E”}SH\"D‰IH°‚¥OEdbRQAêCQ¥ø\\\nu)ˆÏ\nT@\\\0««bE}ÅR(ó¦}oŞtæ™;ÿßœ{Îœ{Ï™9\0à»ıüa_\0Ò3”òè`tİú?\0À»$BşÒf´¨É!|~UºË‰ÆºÀYfzeS…‘ş×¹€(É•úráE\n\0Pög©•²?ôó3å±Ñ|\0`\0Ø=)âä?±|áá\0à‹ãS–øè\"\'/që\"+EY‹µ\0_*Û!§¤*Q[¾êÌã¹¡É;P¾T\"•£1RI¦R,ÍPpP?‰^S Ñ\"…H®	ÑP±@”¡¡B‘2I,Q ‚¤4Y„n•ffQi†\'šªTÊ<¹\\µZí(ˆ¥òî‚rE‹²ĞaGYêbC—şú»‘–.P•ó¿»B\" \0b\r‚?@\n8ÿïÀÿßçûßsdÊUK>øâïÕYÀØàB@ØRä€}@ª@=hÀ5pÜàx!bCäùC¡ĞZ(	JƒTP.T\0•C5PÔ\n]†z hz\nÍ@`<L‡`k˜{Áp$œ\0‹`¼Îƒ5p|n¿†{á!x~Ï!„…˜#\\d%‚Ä#BD|‚#‡‘¤¹ÜA&×CÇ˜ax_L$fF†ÉÅh0Ç0ç0W0ßc&1o±¬–ƒõÁFbØLl>ö0ö¶{û;‡ÓÆYâÜqa¸$œ\nWˆ;ŠkÃõââfñ¼ŞßŠÏÁ—áOã¯àïã_È‚!–NÈ#Ô:ı„i\"ˆ=‰qD)±€x‚ØE!¾#1I<RILÊ#Õ’:Ic¤_Èúd7rYI>Hn&ß&¿¤Ğ(\\JEJ)¡4Qú(3Z:Z+´âµ²´i]Òz@…©VÔª„ZJm¥S?ĞÌhA´4š†ÖNÑ†µmµ#´UÚÕÚWµ§é:t/º^Do£1ğ\'Fcãã®F‡«“ ³W§Yg”Idº2ÌRæ%æ‹Í\nb)Yµ¬~]H—§»E·T·S÷¥™^´Şn½6½\'l}ö\Zv»‰=®¯§¿Z—~‹şFQy\rfm\r7–Ş4Ây)ŒNMÇ—÷˜ &Ş&j“s&ÏMíL…¦GMGQ}4ıí3£™…™šİ0\'š¯2Ï7ï¶ X„Xì·èµ¤X†[–Zö[±¬ÖY¶z`mab}Úú•«M¶Í7¶ÛpÛrÛ;K;‰]«İœ} ıûáeæË$ËÚ9\'”SÉwà9d;ô8ê:\n›ç¹áÜjî4Ï‹WÈqâ8å8İrFåÎW—ë-ß¶ü’İEär~u…`E‡+ÕUèzÁá&vëtg»owïñ0÷ÈöôäyxNzùzUy½[»²Ù›êæİãcã“ç3ùQÀGu¾_¡ï5?k¿|¿)ÿPÿ³|?“7À;àx >0=°?È=¨&œ|g•÷ªúZHVÈãÕ¡«Û×˜­)Zó.TÚæv*œş&B1Él‰²ˆ*‹ÆE«£§bc¾‹õm³«‰gÆÄÏ¯U­^\'\\w}ÌúŞ„€„ËÜ64\'r¿Üh¾ñÈ&ƒMŸofnÖl¡m9DI*J&\'\n(‚b!UX*bˆÊ·²·V¥ )u©v©gÅ.âÛü¶u§E¦\rK’$ÏÒé2öIÒj™¬m»ßö[òDù”\"K‰WVdZg¶«‚UÃj±z.ëÀ³m¯úxt§<Ÿ]³<çÆ®¤]ï?ÑäÚç^ù4ñÓÙ¿ivsv»G°ì­ÎóÌŞ§Îgå·íÛÿ¦ ¢Ğ­ğnÑÎb“â®¢bÉ™Ò˜Ò÷ššƒAŸV^æ]ö¤¼¤Â£büóâJÊ‰/4‡¼M®¬\nªzS]w$¶SÓv4åûXïñœZ§ÚÉº/N„×#õç¿”´99ö÷Š†ˆS„S]§w6º6¾:ÓxVÜdİ4Ş|ìÜæ“–ÑÖê¶Mí&í¿:Ş!:o{şÇ4]P^ô¸8éúå¢¯c;:\'º\Z¿Q_ñ»J¹:t­öºôÛ•İÄî¡ú™½7Y7Ÿüó«[û¿ÛpÛ±îìoÈı>îg¼7tn¸ğ®ğÏ}öı×#·FÆö=>ô„>š<6~y¢f2÷IòOm‘ı45ğcÇô‘ç{~J{óÒë•åŒÖÌÛ×~¾ù¦c¶î­æİ®÷’møeõœçû_\rçµæçÿØËõY\0DıúŸ»Ú¡€CLßø‡Ï¼\0Ç\0tİş\rVä\nendstream\nendobj\n5 0 obj\n<</DestOutputProfile 7 0 R/OutputConditionIdentifier(CGATS TR001)/S/GTS_PDFA1/Type/OutputIntent>>\nendobj\n6 0 obj\n<</Type/Page/MediaBox[0 0 842 1191]/Rotate 90/Parent 4 0 R/Resources<</ProcSet[/PDF/ImageC/Text]/ExtGState 8 0 R/XObject 9 0 R/Font 10 0 R>>/Contents 11 0 R>>\nendobj\n11 0 obj\n<</Length 11889/Filter/FlateDecode>>stream\nxœí}[··‘Ş;Å~šè(³·w`ŞlÑ”ìEÓE+ÖxåA#)²gt±­‘W’_›·Øÿ\"Uè\n\r|İgŸsúP¤q-q³\n@…BİP\0ş|š.JŸ&şS~|öõ“Ÿ¼L§/¿{¢N_>1Æ”Â%˜“ræ”‚=ıå‹\'ÿãÉt™¼N1\Z®í©öEG›¨™¿|ùÄÆp²Ú;®Â)R3K5ç¬‘\nŸœQ\\Ë˜HÅ©–óf£–ÒjJV>1]lŒ“©µ¼i©å\\˜k1<Pß <†¡ütI6iEcâM‚a8úÃÑ§2~jo@A9ø†£¯d8üÊî…¤NIï‘KÀv„á˜²ÔG_åÇä]R‘»}ÀİØã®ä¦tGÂr-4†£ñd8Ï^ß’5·Ğ•K Ş3õá¨~göR“Â\\Üôj*¥®o;	võ¤q=aF¾…aÑ¬P–:!õ2Bym1FµQÇLj£	ÓFk§:~\nº`|ò×ğ\nu:!fÉğ2¢Q4 ÊxFÄ2œQF3 Ê`ÑŒe~¸^tÌ«Ì} ¹Gf80#à€œhÀŒ€fÄ}œë‘H»›€ÈÕTˆª¶§&»AA*Tj¯\n©íFwö‡‘ü$l­Ìµã »@7ËÁ]ıA\Zˆ¯P)/gLHcD\"õ‘9f+Ì-3,¹€€K÷’©dİŒØ7C´‰XÍÍØˆU\\Fà~Ä-%·?‡^Õ…¬H“KƒŒ¨ÂxÀTa<`ª01EáÚ#ì5`*{õa¢S™(^ÍDÁh!P³¨2B´Zn;vR®&Ô»~•r=¡mß¡m!c„¶¦Ò¶ÇmL¥­Á« Z[	iÚÚŒ¨„0•V¦RcÄj˜JS©1b\n5L¥Æˆ)ÔXaR™\\X>3 ÊWÒõ¢Ù(ë¡•ĞÆÊhce´±f²±2ÚXûln´÷Pe”G»Ë-WƒÂêŠ~@Q6c(Ë(Ên›-®%İŒA’.cD‘ö(g–u	ŒÌ@;¥Œè1Bä#d0•Œ=FÈx=ëp=¡bß¢P±Ç@)c 4c*±sdlÂÎáŒ\0:?#ÎÏ¤ógĞùÆù$”Ğ¶ÃÔñ˜:ŞSÆ«íõlí“¨ÎÖ®ÌB=F„P!4`ªê1–­Ìb­í–¨\ZAuµMš«É\"òwùš¬°»}NÖ_SoÆÔõ×cdıyL5.m“Œ=:„èù#z¾Çˆ0UÏ÷Ñó×ÛÂ–‡†\\Ñ\\ÑŒ@®hFàÈÖÎ,[\ZûyºÚ6œëZ´õ2¦ÒbÀÔ	œ°ÍfM\nØÌš1ÈÌÊhfe4³¬Ó[äÚŸ1F ‰¹…ÁÜ#p{B¬h®Ì\\ywtnò[ƒØa\"Ç,KWV[=Ú\rì[« /”ĞÊèîdthfrh2:4šƒšŒåßc «3c«“15 ³á9ç`T9ÃQÜ,#PÜ,#°š€\r3MzF Õ7#€­’p³†p·&#€­’8Ú¸¿Ç„#®n+âê¶\"®n+°ê¶«é•#®û!y·9u[‘S·9u[R· ÍØñEóÉQJØÛ¨6z»!‘3w*â(‹Â8#`SŒ€M¥\rÑœ°)F ¦ü4avÙçWo\"ä×G„Ì4íşŒ\0=Ë4ÈŒ€ƒÌ°ğ3oÆ­½Óˆ7O3â–mo½ƒ¶dF@[2c -™1Ğ–œ1È–ÌhKfŒ3¦ÆŒzLU8F¢I¦F“zLU8+;—H÷ç\'ñbø¿œĞşşìëÓÏ^=ùÉK5Y§W\\A]¦i\n§³:§“õG^Šu—Hüüêë\'¿çıú‡òÖ¾óòæL_ô“òïüº+ÀßÜĞÇ‚vşŸ×_\'*h½5î¨öïn¼ÿıÕ/Ÿ$N_xõüÉ«wß ›/J7~z£Â%9¥Ú&Q¿û+u~usÃ;]íOÔaiH°Í¿óüæ¬/z\"jš|‰ªËwdB‚æ‹ÒTş¨şzuã- ™œ4Çäÿ^t3ÅŞ/sœhö•¿$½L°¾Qæb5aê/wCÚ™\ZóÜØÙ8n!Î1^&ªõ9ÕúÅ& L“H6¬‰ï„¹zRÔs¹j4C&>ñ^[Éª®’›´Gq%ú¹kÅén}­îQ1“\'µä¹KÅØV´)^ÍÓY)šá¹ö«ú1!DlmiY)ö\rCMÀdó¤$oˆ¿háj™Ug@oÌ€¾uT%Ş!”ò;¥üU“ë*ylK=‘sCfÕ™±/¹bPím‰ñsIêú«\'¾õ‰#“ˆÖ¹¿bzÔ}çÕÜ·¢½9+\'¿_J·Í+ï/>m´îSôMÅnGE=#ŠZÅíç«ÕwÆ 6Fj/äüØ¹¡ˆè«Š´PP.u&ÇøÂ°³W¬q¡®ªîGPÈ \Z’õ#{Úãıµ$\nƒ&Ùh¤gR˜\"­Ìé¢w{B2š\\qÀÊÿÌÊÅéèl7	Á’Ä¦{¦¿£İ\Z9& ¯İ¹»mùæ~NkÖ\n4šÓ9-ì±îÆ™L«e®òú\"n\"»×–6Í­czZ¨¿,QCSBÄ KÏö][ÓÍ±8óœâÎVa¶ša;’ĞZíQÑlóOæ»ó²ÏÔUkâÜÆÈnMZZÄ¶Y¥U&OKò±—£à\"ëÍ[Jar¶ÊÑ±ÙG®ßì7à¹M‚5¹7`2@Fğf{+†+uOÜ{+Ï­ÿŠ\n3“Jso~şêÉ‡9¡ö*ëzÃò\n†Y$‘ÈP~1¾a/rüeı¼(ş÷\n$[&M¶)şëCóM&Z£\0N2¶—øÁM :)f{ûÃÅj Ît9¼\\¬éÆOo<»´Tk#”‚+6lˆDŸ‰Ö€Š¤İçn¾7Ö©=û{È»rù îÑÍÌWû]œ¡&jÉ“ˆ+~—|îës‰^Qßÿ^¹÷«J÷?Ö__Tl3ğguªd‚„•T•b€ÊÔÖR/{Úª4ªû´öã/7,­óÛÚ¯ö;\\{\"x^ë~<\"_PŸ4÷‡>¤Ë´†_ªíü‡C¶ 5-½\rÿT?%¿`7ŸÜö,\nòŞÙwöb\Z´|MˆòMíß`›ïJ3õÃ¿º±—‚^ˆœF3ü^³Ê/©ğœXš>¦*G?TÖé .$äB\"+,]ûòb ^]¼ï·°$ƒp`çíJ-k]yñ·€Ù½¹bÙÑz–ã¼XFñÛ=¡„Vßá’…Œ6²,\"yJ¢¥Y Â²~¿¯°Ïë ›ş7i!Tï¿*Ê¤}Tâ>‡ğšŠ‰,bc\"˜×ÊY•ì@é	iĞ<İ•o—Arø$²İB¾†Zoä$ï¤±WÍº_šU.]´sd$úê!K#\rÌ%­¥}·ŒÄŒ]p•z$×&¯	¼Li]zÂŸÿyC®Š7&Ø[üçûÂü—(ñ·ux/FaúêhqIŒË¬\'\'¶¡,œºĞ>¹ìg7†óÅ½cX%xÌ4Ms‚\'Uóƒğøß» š«ĞĞ¼Ê<Éä4D¶Üo†e%4@ri÷ÆEİèêCÅÎLÈQ&¿-w~\0}rO9uÏ8>OD\n‡èB•:\'Âææù­lAC}ƒêå8ó•S\0Ë\\¥\"^ë’…-}šü|5uÒ–¥ÅõÒ6ËS©x­´•\ZOkÌ<Şè!z˜±»x	l@dú?kİÙ$\"º	¤pâ3ø}CÏ¦³\"“„å¥Í‘ÊÏÁY™BÚÅÇºƒ¦w\n´Nã*BºSğìÉ\rÖÄ¥g¥/a‰)ÌKrÒfæ·løö‹Š>·VVÿjÍ¶¹ÜlO¹¢‚mÚØ—ŒÏj\rïóZJ~ZÁ;â_3Å|:Ö¬ZK=(´ó¢õVdaÆßë ?íüÁÀÌ\\»RFÃyeœ7IíIëp÷QË }æÄ ş\ZÉ¶K\"¢}¸Œ‰€q­ÅµT¬âçÕèÛUCy ø™c‰â_Õ†n±>½{á7ã,Œ—ßYÍ“3$İ˜[sâ\"_{C¬„3-¢óª¿ufşZ™UØVÈù¿HL¸Ëä¦âX9ÌİƒÑšÉ¯»ãg&²‡IN‘4}OæøPŒæ–ØìÀÛ¦‚ÂÎ9˜™vQŒ²Ø´u‹H¡–)œ\0¡‹ †ºp)²\nP8eŸ©F&®Kvµï*Ã\r¤x—áÒÿ>\\Òmv(qyvTW×>¤äÙXVğ§FËVö(ªëËÊ¦ß|İ›æ\'d»ÑT}Uş×úë:´$UøZ³J¥bé%´7ÑÊ½Eu1›½7¬¥•øS•’Vm?E­‹‘ğo†:Z¤É®T–ğÇ2Û½jQDÚÄ;k>,[XoÖBsÔÿ#Ú,W™|öM”+.™CåŠ\n¼Ïì\ráã0Ü«•îµã8G±Ï¥”ºÍF:w¢î~ß\r{ß\rğ»FWL¦]Ù•„…İä\n…ù§xH•‹,0©ùµ8ñ·¼\'1¢ÉM¶lƒ¿IÌë½9r­Ú¨a¢ŞıdÏ\0ûIÃ_V Œ¬÷PY·Nô¢Z8ãÍDU}É:üÆ¾…!=Bc‘Øãæ\\°M/*©?¬^Îô96~îHæ3aQ²·Œlî¢ôçãÚi†÷ßnx£ÅøV}ïè¡CÂONkw&8ÙJİÛË]ÆÖN%Úîû/7éâBH:çÈM‡;êÅ63qö‘7½È\Zc0ôĞ0\"À€‘~´6a†`Ë9‘èVLQ\"âè§=Š,….Q%º˜s h·ûõ—ãŒ¿jC#ë0×œåc/FåsRÿøA!í©ïÓ†Wş¸\ZûHñÅŞgİ¥\0f:p°òüñ wCP×J‹—B˜£7{— ÛzuéEgˆÜÁÔ·ÖşÌâ74ù·Es€cr•p~Z2Çv£*úXöVğ÷¼\'¢qœ_<Î³%ÚGÃ@Ø¼»5ªb‚Úõi\r™QÖWKö \r”[,@ä«‹a•IqÖ,;&>½S%ä8uì2»	4¨\' Ä\'æîÆt…Ëœ”Rõ@Æ®²$1¼4%2A&Î‡‡r#İ¤\\„£³ÍNúõ=»¾»Á	eSõŸ\n¶kğé*°øP‰èSŞ­sÖInHåÔ‡-¡OÑÚİÏ­ôlÜ©\Zá]ï4Ğâ\Zv\ZŞ“µ°„ğ*Ñ®ãï¥Ö!u®í­ˆfp;¡Ãh&µp‰«hfÖ™Ù²CáÌFÏ Õ­¢°Ù•t¯²abò«\rÆíÀ}¨ÈàØ5ÏıH#N»\nl¸ç”–q/PÆ÷iÕ’fæ«\rlóN®ï\'Bú~ë¾èT·ıõÛzë´dœCşReòå¼N–³;\'v¨I>¹TÎ]Z`§\nû—úK`Ïk9Tã³›‰ò•é´ ¿º9“SZ»öç÷ÿhóÃzäPÎöÇ\"¹œÔıNzñŸ`Ÿ×‚”/ÿ…\'Ó{:iè3Ô ¿¾9›é2™É4Ào\0qåÛÍg>ûù0v¡)1‰çÒü{ıõEı%_ù?\0öÕMgd1jI+ÿ|šÅâõ>4Í›®IÏ›JßÖ’ß€åó¥Z¥ØŒæ0ÂæÓÒßiÖm¾KŸ2Ä_×NüğÔ/Péwş6£¥Nw}°ö\0­Èë¶lú­¹éw2/RPH+ÓòõÌä–™©¹€µAaÁ†\'¾ES©iéO7ùØi{¤Ÿ¬0!ìÚ‡uâ¾Í4Õ°°4ùwÀH®•›Ê\'Ô4,$*`•ïoéî—µCh%Aªlt-3©Dm*c ^ş´²é÷`’ !¿\0£i¸bŸº÷™¯¾ÑyK@/\'Ğ·£úih²<È¼=DË Ş3YtéÃÓ¦1½ÇtCZFYs:{·œ#¾ç¹¨€LıZíX\'ñLÆwëA¹îŞaØ11´5^:®-ëe}:kåjáŠÀcğCàÑ¤À£A{\rgE&ršÔ‰dş»z”O7œºáf“\\¬°ûõí·iûı¬l ’#B¬”@t›¿.NÇgÕ\0ÿC5ÏÿVa_í;\'²R‡}ªò¼öO~-L®¼lué¾Rëu±Ç£ÌÑ=w!\nƒ_‡•·N]Ø	´,:ö÷yÖYÙíf^z©¨ZvªN ğŸk¢Ùä;Í‡òv[Cl!}\Z%Ú‘+MÔ¨>e\r’á`sT\'Õ©p7Ï :Í>^‚âœÿñm‹ì9Cáóe%Ü7@6~·º·—Æ\0Î‹·ÊqíïÑİ>%¢wIœ‰´Ú”M2¼İ\"“$%Gë£İ](Û:dÄOƒ{I’sXr(ş¶Ÿññ@bó5Î¬Ëæá¸qw÷Sûc’«pL²+êZn¿üeĞÆVoù™Ô–Ï!âTÎğ3öıŠ½æ Q)?/úüµâ‰À:ÇóÓ°×{ífmƒ¸ı¸ª>9TÒ[ïùâ&ÅQ‡­ë ‚¿no·Ş±BŠõZå|ä¬\Z­™œäî½…’^¤)…²-pÈ47±å„$k‡3”E }ŠÇûc˜Œ¥uŒãÌ¯DM›rFHÙ81—)‘ém§å^šß7eÅäõ÷ïÂIØGR¦C\nÓ­¶Vs»é?˜ë¢çÑ)İœ08ÂFİËÆi.) Û\"_ww+tÏ\r¬¬ÄÄ(5^çÀæ½ËÂêwØyomôkvŞ7ˆ³TîC/TŠµuQù¢!>Êìã*Õ„>Zô}l÷°„­Åqş]Cpd‰>ekå¹}\"‰šOQ‘™btïÁ|tY}°K æ†¶kÏŸåQöG	«Y}!é—oÈ*Ä¬#…[ğŸ!aˆ\0Ğ‘½ƒÎ¥ ‚{ÒÛ\nØ¯[I›8æß‚G>{ÈÇÌŞÔ¬Ù!Š§­¿¨OÉU/µÎÚ?o–nó†°Phê×yP’Î¥‡“’„Ú·2%©t˜î<ˆƒ¤û¶®l8§ÏÑâ9i>ÑnvÅÙQ‘ñÕ‰÷3c§Vn){qjbá9ë\'ÅÉAÇí±Ø8[®Éÿ°ª[8Ø\n©KnIıO±Q±oA`Dôá˜PE‹³­²¸¼Q–_˜nòº£{BŠüU<“ËwŞ@ÑVGZ_|Å>_Ğè»Uö÷]ËºY%Ï€±{}u–š×Ò|ª&íW…VwY”ö€³G’e\nï2{4¸7S{ÕW+Áª-tµ¾éãN¬ô¿¬Í¡¤¾[Á‹Tø`”&ùÖëçÄoŸzWF™#F‘J™ø\\_“aW™R:†ö\ZÚóqh£´ªóÉ¡{¼ÈYš&´‰TC0çw`^u‹o.‚çg^«d[yîø¨EhäùnöìÎşé!vŸV™ğ$¦å	ÑÄÍªù¾;vüíşy¯íãıò8(|ä¨o~pä¯ÍlŞqÌnIbœŒÁ7¥™ë¬“Î·uq:âxÒWîòÛ¿ô^­¤İ‹‘[›ÃeÔİızÊ×Xèşğª\\n\n¯\r•[P¯=»\0V6º•pô¦bGë\'°÷y­£¸—M±/ªÆòÍâÑWÄ-áMë\Z5tçÍ’\"UÄñ‡)»Œˆ­Ñ˜¿î²Öqİƒ›éBş?_‰·\\ŞŞ\nğflèüõgö-°A RFëÀVÅæ¡¿ÉB/®Ü.îíåÎŞèêÆ‹k¹\rş¾.wäz¤Ï‚İ…œo}7xîŞK[š÷dŞ\ZF×ÉÍô±½™êZ3ÕËøØ0.Ÿ*ıA¶‹~øíã˜(Æäl¼·?¨Ì~”ö5Qïš1à]ö;DWŠn¼±¯2å–`ãY[â³î2ˆcÅHq\0É|cŒã«v8ğ6]Ÿ<öCÍ×ä¯}·ôì £òÙjš^ïE(’¹sÏ¡ó“JùùÉÛ©-:ğr…ñÊh\0»W‡0=ØÄmõS“½îïa¨ïÛ>c°Ä.Ä¬q—;)ãêKIuÅ–üjÏÌá{k»º6|À;Ö*Ÿm¶8îì#>fØ›%ô±—œÌû¬Ö5¯¸½ñ‰êd9«ÌéU/”„Ïÿ­Ö»å®ßêrƒUpèj{Q)hä»”0ó\'+Y±yÒ-&:ºÿv¤ïHTwàÆ%ßZïÄ¹3ëïÉçÍœƒvy<RÎÁ²uéˆâñöá´·	×àh(oÏñ“%³µA‚w—ôş1Ş9ß=¬²¿å’Gâ¢İ} {É÷ïÇ$›.a¼œÿ‡2q_ßuäüp_\\Ÿc9î2òå	Î6F¨áy¯½ä’\\“U{åó8À Š²=ˆú—„XÿŞ¨r	ˆÎñ Ÿ™nôoÁ\0Ü|ìµ\":r2?nTï}ÿÍıÈcá3õæ§6ĞÒ’µf¼©wõªËÿ¬¿ÄË¸%ú_»¸ÇEÇ*­eG¾#üV0(öñ¨‘›;ıõ/T6Aøòü{¤ƒ­¸á)S»Âï˜\rVï¦úC¦‡„Üw<ı+nIq v€ü}´]Ï•ìz/…L>‚}u¢Ÿ{›­™è=zjè=`÷¨¶Ì£ïwÎáˆ¬Dè‹¦Û›)õ³Cõÿ\" Cš.şíGJ‹?Ô‹ıSõú¸LgÆ·w¡ÉíÕ´Î•áäêAëÃ-q¾2£åşŠßóşpŸö16jâ¬{û áİìÄ<˜Ì¿IÕãÿìÎmŠ¹¼¼M*§]HĞ{m¦bşüÓ±#çü2ôDTµ¦fd>âZgZ=«¼+¿ÛM^ÿoyt²t[ÙúX×CÁuLòJ,ÒGÕ1w‰Y¬µÌ±/a.ù5:¡Ô6ÙĞ’|<	¦Ã=ô¤ÊêRÿzğÈ#v|ƒ¼wloûÎÑõñşC5|æ7Ã¯ê;G•ßÆ™y¢ŞârdT›#Ãé‘&Í÷;•÷ŸàÅ±{{·P´æBÑuš”Ö§ƒû×È•÷òî^Ÿ1²6Ø,À×œŸùÒp›„ğÙµÉ”`(Gù¿Ş(}IÖÂ|Ò1ïæXÙ³¤<½]û»yfƒQ9«Ğü`i…×åÉK„ã	ß0&r®rFş/Pº]\ZgŸ*\"]Fâ\rh÷á3¹?R©Éò17]Ï?¾¦+$¶/€[İÏ·Î7ë–‡6ù\reeOjJu:§ºö>0†yÛ%f#Í\'Ÿèvô¥;Ü&ö_\"_Pé;Ş%v¯±—FöjÖŞí~½j{~P¯	çİöä\ZŠìíÜiíIl…|LğÇÈÍ|¿lZ?Ğ#Õ¯MšİË£G59uîX=“6·azX¦ÆÕ¡•Zª¯Û¢0šå+Ï$–È«\0L¾æ ¯œÚùSm½4|íãsãîéGƒ¨Ä=•å@\\´FL¯«‚ù‡Æö½C‹‡ûÓy‡,\Z\'Şíã20Èù¬ëoL>¯-€gš×\'”›óì.\\|¾×4í¿å><‰íàC«åÀÒ-±“>D +ö	”‘æ	ÅzD83tíÏµüøòîµ®Š5Mtì™i~dÚãw:©Z9õúÔ‹c^tÖ?òf“×F2ßüÍ¦³e›Ó“sl›¿è˜ßğ#(1¦rk¸üÅóÕ‹ÖúêÑÈ¡M”uş9Ú\'×şUb€|m0…¿º!\rOİrGoœsÛØGİŒ®n®g«ÛúŠO(bH{Û‚VşÛµ¾%ºzgàHèëV$\"XïˆôwE¬.¨“›K¾\0÷|5zä–›7vR ù¢\ZÍ— +3UÏ·»i/Kø&$1ŞØ åDÚG7†ñ:`G¼$Câ\'ŒQv&W¢!’¢Ss€Qäú±ÍTÜÕíæ£ƒtÈ’U|Õšıÿ÷RlëöÇº—bRl‚8_ëæõn`ëÚ$ÇºñŠ®jobå½notg¼kÈàÈİ!E*ÚŸX)×Ÿ£L¹Ë:¸şfƒ+B-öÁØ±Ñ×‚Ñ!ãxBöØË…¿ùÉZı şş!^î8„£Òœ=;q€¨ÿnˆ‘Ó<ùÏöî±ÿÀê÷D¿Öå\'Bªhu6šü&r@-5ù:bBÏ€‹ƒ®µ@ü=WPˆ¢qv©˜MÇõ³œ?¨b-)ÄŠlt¾ ÆğTö­Iö!ÛL•G]T¿«úp:Z,<ùµ¬Ë=A™l‡Ÿ•™=~N´÷?‰Ï)b…‹Yî÷¯kAbª¹[2aSĞßäÔ´Z/.¥IR»FÙ¦;-1aÈİ®J¥|ü^Ã<e	¬…`Çc•uxLyVîjräÛ¥F¸åoíK7Ğó—MÕ{æˆê­®²ıqŠ6?şŞğä¦\'ÛÇ¶vûX¥T•:Ş†2vğÅ@¡ß¡çs0Y…œùXíõîEÂğâé>;ôİE¢•9áš¬ÊU?zÑ\Zü-j¼„½kì¥Ô±¢uÉ§ŒQËYø‡\\›)‘FmÇµÉH«ÙØ OMDê-ˆì*¯/Ñ™Jˆí4ì³¬7ÿn9†\rıã/£é¾\"ö*ßÄyš2ôtYš\r§âŸMÒ­%Şq*¿\"€ÿ«KD?âµyîü^ŞR“_¿®¡Ôºa;Ç?yõîÃyŞÄ6Ëxn„ª•|ıõAOhZW ”§jöBÔ“j\"ªµ±”ş%qÛî2Ëİ9Ÿï›°yI<é“÷æ‰ß\"†ùÄvp†Ñºî>«hëâ¢îñqÃd#IËy—ÜLcıLcbN:ò¥¦ohÌ©61&&ƒ¤¾ën\0?2¾¤cËî­‰/™K$‘ºÊ<©ÕdŸ¡ÛqX¥häğşqpJwLj£ˆå5CÃI1/Û¢\0èœ(Éh¦D4È¤¢“ÿni‡‚c÷b¥ıÛ?t:‹ãÓõà5DãÇ7uèsd‹d CD’	Ş\ZÉ@%¬ásáñª­ÿ\nî†ÉØr¢`ûÂ.ª–MÊk´ğgkíkx°®ŠïwãlûæÊ-Gîöœ‚½lÏ÷Ÿxœ³ßõrW‹Lo7rdn†7|zÛ¯RÈW¡q¾P”ì¾7ìšõ3ù»Áçl¬æ”æØ®7ÄqÍjğ™G¸œ9LAö1$ó¸ˆŒ@ßz‘Qî³x»æñLN•;9GIwêx_	‹t»å5p¢Qb´dš}N)+‘¤õéì>¶ıàa.ù»v÷UûÕ¯z· }8Z;Ïi\\»/G¯8n?*]c;m8jmnfö­Lïk‰\\$>ë-êcğ~ÿxàu›bîœAn3¿k[R³ZÃxĞì>RE9ÚÿaF5æVù)ñ¥æJÜE¯Cï_]»o_Êş“l;ÉÜê¢€õN”w|lbÒå‰«pÀWK¬>ğ– ™ıŸeÉ‰îØ†½ì¬*H˜˜{-qp{6Ú®…ÙËu6ĞAšF€4b½(²zjÅ9\'—M…‹weî?‡)hŒâ‘h@ßµ};3ŞrBÈ>RwdrtM$ÜgW¬¹J–Zfo“Àwüñ†@Ÿ‹?’dãmö½´•›\'ªÉ÷‹ş\nœ¨»å>Üj_›èin´O§øºNÿ—›j.†ë³½¢êF@Ü@+å;dÏü„5ö#fxáıÖ0¢ÜŞÎ©ËùùR#Êğxşğ/¤äµ;IDê­ác.üøëY9sg{¢Q¯×j««mïNØ®³àävfù…Œ–§«Ô¤à/´bë³52ÙÈ$èŸ(Û|ÆšR€ÏQÀcÄºŞ´Ô§T*?ÄÙ<—æ. ­rxìb·ä£Ñº‡fĞ-9XÔ›ÍoìÍùÃ$SÎ@¨È¡šÏk&ç”šçÍ›N~02D›ŠthjÑÌ)løÁÙqH\'QÌ±lQ G}^ŒrÕñ=¨œ–d“àÎÏmˆ^x¤#6ä°²³òv±©tz-O¤“Ÿsx‰aë·Î§·çµÇ4]&ŸcT4ğòFvñ-ùZhdW¿ï-®rgë	ÍÉêÀô<‘emì=°Ä¿Ä‘Ád¶.1çA“;çXì¬Á¼ÉÒ´9E’«\\\Z1ü,”€K#\r˜_.ŠvNú	¾t$({JF-eËƒRh,\\|Áàƒ¹i=ÜÔïÅ@ßëÇÒ&0l8œ”óH¦Ò²%şvÓœÃÃ9qiGoÀJKn{Ôƒ~$«KÓ´4İAÓM«IEĞ6êw†~ÊpÀPjJ4¿°_vë]!!û´!dEÃ7º°\"6ƒA_òÌë9ÅJ›Úi1Ôƒ•×CÇ®†åÍ¤`yÃ;\0níÔ—É3kÍ!@æß¥¸×p:\\zÙÃK/{xée»4³èğù«Ú„ÕWKçûfJç{¸Ÿø9†ûX&4ÛŒzÏpÔ{†ƒŞÏpĞM†£n2w“\')ÕÏUHfd0b†#a8b‘,ÂpÀ\"^ºOR<¹Sí~;ÜH³‹àæÕFYuRFğ»ø‘5U.OŞn#àŠÜãm…¬©D}‚k$Bfs3ŞµÍPñ€qUV¨´.¿¥ÙbphÉÅ€Òf‚ÄüN\Zu/ÕU\Zh£&$tgøÒûVĞ±D›lnÆÛu3@HÏƒ]$`;X.¤77OªVuS“+ƒ{Éğ±—º“áà³Ú‘ÁÔÎğq3ÌU†#­‘eõ,Â[†]duÏÈ$Ğ ~˜E¸ê›ÉÅ·D>­[Øü¦*l­ÿe½ÍÖ•ŸÖåG¹0¯ˆbh¿*X¶¬ 	•G³µ,	\\Ìb.¿,­¾<œE¾¥rÑqÑ|ó)Ğ\\\\«Ğ‹\\i\\>Ø<Ò*\\Ş8ÛGÚ&‹Á¢,ûò@%’6ElšF°qy$Ù|)\"†SãÛòhñfsÇXËƒEÍå‹,éË£EÍå‹0iËó+Tãte0˜–äÏp@æ>’3ÃÙÈ“á€GÃMA¡‘Á@8d8û‹šáhñ2-ÒÄ¯\\‚a1ËpÔ´3ÃÁ¢Î²sµ$Ëz9up£,¤Ú,\"UßL.¨¹ˆHØ<¢ò,\"\'Ø>¢ş\"\"aûhVh¤UT±mŒöñ>/¢ª/ÖD.¿ˆª¾<Z+\\¾ˆª¾<ZC\\¾ˆª¡<X[¹|U~­¹ŠÆ±Ş®ÚAkqÑÓX3ól³Å^ƒÌå7˜SüÄuûÈÈå\rÕN;—\ZÊ˜ˆëÓ˜á`º2LËÉŸáœzª\ZÁºj»æòHäqù¢†ò[\Za±F	ŸË#óÛ|İ>©\\¾h–\rmL@hd0„@†ƒÅ>ÃÇEá@Ô\Z› 9gøH¶äÉp$‚Ù*GíÓÔ\".ÏåQûÙy\0íg¼ˆl1ú‹¬z8?¨?‹Z54ÃÅÑ¬,¢6fkµlÍ\"—¯\"»/f—áhvÉ†Ôçò@fd8’\rdÿ‰J°²X¢B*!¯*¡+dI._TBWÉ._UBWÉ._UB_È¤\\¾¨„®<U&™	‘Áh¸GÃb8ê~†ƒn2tÇN0úšÁ€™30m†æœáLXE´Ó.Ì/p«ŒfîÛ™Ëƒïf…¹(jÖåñ¢Â=ÁIù#m¹|å¾<˜–\\¾pOWqâûx‰ÒX“<Œ[føøİGìà4¤óé™á€nı—yT©§óÔÃ=ñY­Å—äXN)W._èÙ”Z6áèsîO\rıIÀ×r,´†ødcÖºgÛ¢zötÖ €é¢TßL.Vã²*zjæòh•ÎT^/2ª\\Ìº›¤Â\\Ío~,«Ë$·*V×b¾.ı×«òÈ›Í×Ù¶fİ>2óuBå‘JËåK´+5¸?ºyNûõ|…ÇùMAT£¬vç4§¹xU]q¤+rù¢\Z»ò@‡äÅR…›,–\\	“Ìü%°#Ì?——c×,–\\	îOnAmË#Ë„…a1ãÍdÖå=Êå‹OãX•Gvd._Ìø®<²/¹|*÷åvXíb¥gú¸f7îe¹½,·±—å<–åncÓÊmlZe8 n¬º\\3—«h†«ÅáM1·±)æ66ÅÜÆæ—ÛØüÊp4\\Ş=Bİ‰Ğps›\\¹<ìN„Z†£îğå8£\nÉ` *f†£Ï&¬03”÷|Î”\'84f\rX6›×’¶(ÌîMD›Ğ‹¢[¦M«âˆ\n‹¢[öÄÂª<š¬YÑMË›Y•GKkQt¹}Öí…9+®Eaöå·¨Vfß´e8+ºéƒ–î¢è`ûhÏpVt³ÂìË£¥Îå‹ÂÊ`m»Û_%ªÏ1­q-rñ¢0ûâhæòÕ—œVå‘(áòEaªWåÂÌå‹ÂôÖ®ËƒÅ•Ë/\n“ƒmy´H¹|Q˜}y$3¸|Q˜}ÿÑ&,—/\n³§’ğ¹|Ù…íÚG»°\\¾(Ì¡ü¨0sù¢0Ûò.!s:ƒÈp°Ú3¬ê>®Ş«4ÃÁjœáãªËp°º2%›eø¸Z´#½ë¦™Ù¸ËØsl7-`Û‚“ö±‡/k}‰5k%k”ÊÔm.1Ö3¼Z…-<º&İKõ²a‚ğ²KÚ}·_»ïÖmºî»e¼k¦nªvÍÔİÄ®™ºgŞu³nwğº	ŞÃ‹ÏÕÁ«o¥×{õ~šç¥ÙÏı¬»¼]ÿënn¯»¶ıt£\\ày×Öo2<¬éP}œ¦Ÿs.Ğ¤3\\|ŸÜ~5j›ögbX;c·¨¢‘nÔNİµ•vf&7³dàK$fğœÄ™–•ÊavNĞàs¶Ë°„rfæ(xrş$\0söãæ|ĞvN$^@Î\0‹ç@”ê¢\'(LŸµFN*Ç„+Å”YóÙ˜$µø´cR}¶ÀÛÏ²}Šà±÷É ‡LOïöÏÉ£°Ë™=#9çÔ\0·xÆµ3¡–-±±|Î\0íçír\0çıi˜š”UÎÇ±ĞNŞS\Z¿;o²\0xŞğÎíÇ&¡uPÖPÉåˆïVD•çH\'h?G(ÜaoÔú	&ë”HŞĞŸ€Ÿ)Dğ´áÈ,1²®v¬X–Aø†ÉoØÖ\Zù³˜ÒCy6€õè6Öuvw‘-—“(ÉÏ#²-Ù1ğì\0\"chŠ0yËkãÑx‹\ZŒ!¶Áx³‘„ÊöŒíO|°EnºPYoıˆÆñ«Dù’·O?Ñ3kÇHfå”«½ËâUŸH&»ù;Á[·`´åhe˜\r£8UÍfsXÌÏš\\U§ìİYRgDÍ|7§Ó—\n9I{Ç”>{SœÈÊ§Y8–\Z¦~úİùÛõÍ·³¸¨ˆ(ßÎù2áÃ\ZQ‡Ñ rSÑ4•—.\ZxF˜4Ûf+Dš6jäq€\Zó8\nbGAôãĞ.\rˆÜTE4Me„â—Ñ7*¢ÿ§İÃoTDûÉ¾dk6‹x+tj1d ú‚‘*>±…µäÀZá«Z*T¬Ù#‡Ö\Z\rÃ\"Öo(ëÖ5œ	ª¯AßFİ#šˆÂX#b™©Q&d…0ôZÖ ÷ª]\rŸ8½^kur{DÃ–&Ó,–9´kD%Ö€X@‹ olâ—Q³­=­kÔ	i›¢!œ¢²KŠmá’ÓngŸU;+C×“æ“wK·&úN\nõû–#´‹íE<¨8ßX/F¡\rAæH®f±¹¢pî²`¢`ş|Ê¹XüÎIàÃ€Ş“A˜›Ö§Ï¾æsƒöôôÛ\'ÒŸÿ,UY\nendstream\nendobj\n12 0 obj\n<</Type/ExtGState/OPM 1>>\nendobj\n13 0 obj\n<</BaseFont/ETAASF+Helvetica-Bold/FontDescriptor 14 0 R/Type/Font/FirstChar 32/LastChar 233/Widths[278 0 0 0 0 0 722 238 0 0 0 584 0 333 278 0 0 556 556 0 556 0 0 0 556 0 0 0 0 0 0 0 0 722 722 722 722 667 611 778 722 278 556 0 611 833 722 778 667 778 722 667 611 722 667 944 667 667 611 0 0 0 0 0 0 556 611 556 611 556 0 611 611 278 278 556 278 889 611 611 611 611 389 556 333 611 556 0 556 556 500 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 556 556 556]/Encoding/WinAnsiEncoding/Subtype/Type1>>\nendobj\n14 0 obj\n<</Type/FontDescriptor/FontName/ETAASF+Helvetica-Bold/FontBBox[0 -220 932 757]/Flags 4/Ascent 757/CapHeight 757/Descent -220/ItalicAngle 0/StemV 139/MissingWidth 278/CharSet(/A/B/C/D/E/F/G/H/I/J/L/M/N/O/P/Q/R/S/T/U/V/W/X/Y/Z/a/ampersand/b/c/ccedilla/d/e/eacute/egrave/eight/four/g/h/hyphen/i/j/k/l/m/n/o/one/p/period/plus/q/quotesingle/r/s/space/t/two/u/v/x/y/z)/FontFile3 15 0 R>>\nendobj\n16 0 obj\n<</BaseFont/MMVHJH+Helvetica/FontDescriptor 17 0 R/Type/Font/FirstChar 32/LastChar 233/Widths[278 0 0 0 0 0 0 0 0 0 0 0 278 0 278 278 556 556 556 556 556 556 556 556 556 556 278 0 0 0 0 0 0 667 0 722 722 667 611 778 0 278 0 0 556 833 722 778 667 778 722 667 611 722 667 0 667 0 0 0 0 0 0 0 0 556 0 500 556 556 0 556 556 222 0 0 222 833 556 556 556 556 333 500 278 556 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 556 0 0 0 0 0 0 0 0 556]/Encoding/WinAnsiEncoding/Subtype/Type1>>\nendobj\n17 0 obj\n<</Type/FontDescriptor/FontName/MMVHJH+Helvetica/FontBBox[-8 -218 762 741]/Flags 4/Ascent 741/CapHeight 741/Descent -218/ItalicAngle 0/StemV 114/MissingWidth 278/CharSet(/A/C/D/E/F/G/I/L/M/N/O/P/Q/R/S/T/U/V/X/a/agrave/c/colon/comma/d/e/eacute/eight/five/four/g/h/i/l/m/n/nine/o/one/p/period/q/r/s/seven/six/slash/space/t/three/two/u/zero)/FontFile3 18 0 R>>\nendobj\n19 0 obj\n<</Subtype/Image/ColorSpace/DeviceRGB/Width 72/Height 72/BitsPerComponent 8/Filter/DCTDecode/Length 1227>>stream\nÿØÿî\0Adobe\0d\0\0\0\0ÿÛ\0C\0\n\r	\r\r$, !\Z$4.763.22:ASF:=N>22HbINVX]^]8EfmeZlS[]YÿÛ\0C**Y;2;YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYÿÀ\0\0H\0H\"\0ÿÄ\0\0\0\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0\0\0}\0!1AQa\"q2‘¡#B±ÁRÑğ$3br‚	\n\Z%&\'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ\0\0\0\0\0\0\0\0	\nÿÄ\0µ\0\0w\0!1AQaq\"2B‘¡±Á	#3RğbrÑ\n$4á%ñ\Z&\'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz‚ƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿÚ\0\0\0?\0ä¨¢Šî<à¤¢’…RRQE%\0RQHd´”ø¤H¢IápH®½´{\r_C\'N…aÔí£I#RxqŸ¯ã9[pŒy¶8Ê*í¬¨N¯k´i¸3©ÎwëïVd°H4?í+„K¹\n[Æ8\n£ï7ôñ¢ác\"Š+bòÉ Óí5kx‘íçÊIäˆä{ô8È¡°HÆ§ÅK EÀîIès]eæŸc©x\\j:E¤QÍ1‚K/©ş?Jæ§eƒÈÿ\0–Ò\0Òÿ\0²:…ş§ğªT®SŠÒmŞvgglõÅÊ*„I[1jsi:ÔpŸ»!—³/–¹…şñY—ÑNò55İÄw¬±:0UN\\0Â¨QØsÅKC§ñ&¶“kšv\r¥ÔCÌøºöíşÿ\0ZMNêÛş½\ny-…ÌI•ŞWkü¼ñşéâ°-µY Ò/4ã–‚ãiû¬ş cò¨\"¾’;¬Û„>Óü:0ô=½ÅG+/™dÔ,KnM)öRW§§_×¿Ò¶og„x+…n¯Cs´Ï>œ~µÉUË›óvĞ¬Ê|ˆdQFÛBÈä¤÷4Úf¯…õ3¡Íö¹Ë}šr\"1âõoøqëGŒ4qa|/mÉ’Êğùˆàäy#?¨ö¬kÛ”¹t)F¨¡îÈ\0vsîMiÇâ\"ºÒfµóà=äùÿ\0³ÇóŞ•îŠMZÌÃ¢‡*XìW°\'\'ùQT@ú(¤ªRQIHŠ(¤0¤¢’€\n(¢É)(¢¨‘(¢ŠCŠ( ¤¢ŠC\n(¢ŸÿÙ\nendstream\nendobj\n8 0 obj\n<</R9 12 0 R>>\nendobj\n9 0 obj\n<</R14 19 0 R>>\nendobj\n10 0 obj\n<</R10 13 0 R/R12 16 0 R>>\nendobj\n15 0 obj\n<</Filter/FlateDecode/Subtype/Type1C/Length 3991>>stream\nxœµWyTS×ö¾î „P5Á¡( Ô:1¨OEˆâ¨ˆ€È(¤`«EÏc[µNuŠ ˆSPTÄbQAí ¶jëë µZm÷¥;íúxÚ¾?k½µ99¹9ûÛÓ÷í£`,Ì…BaŸšŸëéŸºTŞ\Z!õSHıÍ¤æ3~÷éŞÈ`Bß/³–4J†(Í‰Òâpu²4Î\Zl`õkŒ…Bá=5|Ç°°9nÃ§¤gäe&\'&e»Œ1b¬Ë’<—Şo\\â³’Ó\\\\é\"\'>5=CŸ–=#Y¿dE–ËÜØ´,—é.2†¿í¼:ìÿw<Ã0ÿ˜œ6ß?}Á”Œ…Ë3uYAÙÁ+¦æ„Äæ.™ºréŒø™³g\'ÍI›2oYXj¸>Âã¾ç¯ŸŞ9ÚÅÇu(Ãbf2¾Ì`fãÇaf3ã˜×™9Œ+3—ÊÌc†1aŒÎ¸3ŒãÏ,`¦0ÌB&€ñb\"™@æ\rFÇŒ`Şd‚™‘ÌTfÂŒf¦1c˜éÌX&”ñff0>Œ’icTÌ\rÆ†igì5#2\nÆ‰á™$f\"ÍcÁLbşÉœSŒT¼­8afioöÙ]s?ódóƒæ×,‚,NZ<aİØ8ö¶ˆı–[ÆqÈ;ñ‹ørş¡`/è…]Âã>á}>²´¶\\kÙb5Ê*Âª]i¥ôRÆ*K•Ê¬C­­kTAªHU£ê¦¯M¤M­Í/6Ï^[m;ĞvSu\'¨Áö`¸A!m„¡âÊ‚‡›»õ,úq¸ó=ÜY Ûï€­ˆs¸‡PÅª$ É¬Òv-àÑàÒW}ªEª•ôc\'¯îl­«é¸t4ešïÑ?yP†´¡à¿pùŒ8Úç¯ê~ƒº©]oIat³èÏ¡3®E{XË¢ƒLüW\ZÍYğç@[À·° ãdàõlúò[»;àE0m`H_õ‹;p›û†4í©«¬«,½LšÉgñ}Îjé³Ó¥5WœÉ¹ÌÆ%1•ó÷L ŞâÀmEğæ:*ÓÂÃÓµèÍ¡­qêŸW-›\Z¿Ì_‹Aõ8XøXE9õg+¸˜Ãé´ˆ¾®È uO‘?ğéüaÚ°ßp‚v²bç9İ@×ˆÀIçw<ŞĞqSûÒo\nÚİ\\ò†bŞ–¢YÏ¡¿D7ø’Åq¬3Ò½bp§JÈ;i+Ø+êè/ºÿ!åˆë/­®Ê¨wË«-¨KĞ]q\r¾vè\n1Ê0n›]¹5s\"<é#BĞ\rcnü–\r5yËk÷ålËİ¶D ~ašBî÷¡âSê[¾ìÛBšKtù£~.çNÌ:—ÖFpøTàssÅÍÄsÚÄ†à²D\"Ó’g\n`™.Ş¨×\rq[¨Ó,jú¬¾ı†V.°•²ÀV!}Ù­§ĞVêÃû³Xº:¶F—)‹íÉ¨éÉNšÍ‹ÔÍN¨âÀœ\\/9×|±ıØc6õñœÍºC&¯é÷îÆ§\"ıY?Ø¦ñ8GÏ¬ö¿|*íõI\ZF}\ZÇ§\\Zp$˜şÜÁUè;±hbÅBmÅüöäÒF\ZøT@šàîBw óÒ©ÀÈ\'OÏt\\7¥ïUñ)¾¢P!ÚDx¶ø|%kêÖÁ?ôR\r}×Ò²q¢²Áoê“¾ê—=RÍ“Ÿ/³<ñê›ş¹ü«ß42/6Õ_PÏú•7µÔ÷ÚùB¶“-ÛùŒÚùŒîıIÏßö‡Ü©Æl0ƒ`¦8C\'»úd&n~T;¾N]0V‡æ‰;R÷çh÷çî-8¿ÆE8–çïÌ\'+„äøÜ©şË÷6ækp\0÷Zİ›¾ä&iÚ}òDõñâ³ä¹‘Tp\0—î\\ó!)7œm;‘µp“FÕ½?ìa,¹œ–g\\‘Ri¦Á[WıÖòÄ¨9³(Õ˜_inGŞü	ìjV¥—i‹rw¬üh©\0¹< ¹ø	èS	8½03a0†…¯•ßiÒîó`àTp/ûWøõânOï•ˆàutÁ×u^ø-7öTìıãÅïX¢yÌ¯Ú¸¶0Ÿ	;Îh¡^æ\Z™êZ)Ì-»vŠâ$5èî}ÕßKÀ7\"~Ã«%pïÖ£–àI(Aw9²ğMOÛ[Iã\r¦Îˆ–C[å UR³?òÓ¢cu3õÇ¯jà	º•<*¯ƒğùÙ’ËÕši¼\nõôy‹œºdZÿ=‡Êé2•„º`†TÉâ0F-ö‘´ò\Zf+YSNí¥§ÅAŠc¬|Ä÷rUğóÒôs²JÛ4×Ñ}\nO&î[TW³´)·ƒö§Û·Ğ_+Uğ¦Ÿ÷°•\\ı3a€¹t`¯˜Y¼v7) ‘³IM”2\\\'Î@»\rôã¶^,ŞKø¤deBnÁªw\n´¹kÑåÏ]ãˆLŞü0âFíL(É8º¬>÷,¹D.:w¤¿¿f×ÛçpèE¿¸¨€Èôƒ\'kšwjÎl«Üºå½=:½ràp@¦ºÑè=\n¼åàÆC,ŒçîÃøq¼¼2Å½üH_£\rŠæŞn¦! 1tù„/¯Ïl§‹Á¼?_ñEb£6áüÔ²©”‘e&‡	°“K<\'vœ\r:,R8%êÚ‹\'õm/Yé¶AñµÕ•½‰‘ÖËı+\'Ó»º_£²¤‘ĞÂ¨A+IÃ¢QÆfvnR|D~Á¦Í+5ƒøıvî\'U¤lsÉö“{÷8Ø™İjÇ¿Ä¾L®—ığ£¸G…ıi}õ\ZˆÓQ÷`0ec‡ûwÀ~—¹¼ÀôŒyDŒi}q~{ıŞãÚ=Gí©&ÉáŒ=‚ªû‹RºîTt)êTéª}WYZO JWYãUSùæğhoìDG©“ÅìŞjÛ@yÚ(\Z)Zædá=\rØÆ\"+Íó°ÚØ¿‡üÈHÓÍ²¡üN.éBÔ¡ êƒè†¯¡·ÑäŠmeøµ”k¤œ>X~A@KÉZüìtğ a‘Á”2é¥Ì„ørç–EïCZwãZk$*ö^2Vi“‰Ê~ƒAÀæ7…t\0rÄ°Ğ&ÆZ}c8šcú?^`ı¨ı·ãZÔp+£ã³\"ÈR’ºû­#ï­+ŞØ(¼÷@Üv·¼ú\ni%U1[Ç	=,%m¦UM­¸Êœ»óÄ!Ä\'948D—0„ ‚şU¹ªk	º“òœ<\'wN´´·´}ü+é¢Â“ĞÒ1­cÜñDØ„ö\"ØÜ\ZŠ#ÑÍÏ•¨\Zÿ„Âñúê	¨z¤ÖRšI§”}“z»]NVìa&Î÷Â0põù\Z‡S¡7eG-è³.ü×•I“\'%$ë‘®^ôäA®X\rNæÒpš9>¶5ªt„½;Ú¡ÿ-À±¥jóy­?²pq`xRÑIÊã¯s›â>J/Ó×&\\Î»G›ÄçÁç ÖJŸğ¸E–´ÿ¡n‚\'Ojô¬şF›ö/ñ©íO·g—xöÒ±\'ä1ù-şù´öéí¾\'“ÁÄ7ezĞ«€U\rií\rØMraws…pÏ÷æm÷ÁâD¿Nÿ¬w—­]FœP9î)xö„T_\rÅ7fæ‡­ˆÖ¾œ!årk£†Órkëíp:B^9U×rñHòT\rŞ5\r¤-ïLÂ±Ô’Å»Y±”†^j/¢1ŸCcN[\ZªMm\r5\"LâZdÌÒR°ñ[–ïÑ;Á˜Ã\\ö®‚İäøzX¶~»WõİãÕŸ’Hsîù¤Šä²¨=¡D0öëÉÌHzâTşVifĞ”ŒÌñZŸK·©‘6YâLó‘¬ä\\·Ş‚¶‡-]ÑÈ%-\\¥â†0Ä\\z.} ‚‡ë]¤‡ã”¡¾8¹¦0pK×>{ëIne:™å4snü×Ùµ·ÖièÄ¶\rß\0f„’GäNÉ\'gj*‹/’Z…³/a¿äŠ(!Ğ BÓ™²[ã&oÖPltàé®¥à®ËàzÀ=áRóóõÿÚôş\Z\rZğG7”n<D„ïÊ+¾Óv·¾ÄlJƒì¼+w†(=!™·é×ËOÿ£Xr7Ë‡GÂ]Q\ZLgC9M|Óe±€À÷0bXÅ™†V“~ÉmpL>x“¬_ü¨Å±‹k¾ÓH”\0\nxâ[4ûltcdçòïÈw¤³¤ñÌÙº¢OÉA*x¥¡=!—©Úd–{uyè\0ïËwGOãXé´¼†BzoQınıò’r	´¨¥x\'õ¼úªË/ıå²ÒÖVññ¥ú#1\Z4šv®UT¿ú,Ùñ/¦]A&(2kn¬fyCØ‘©DP˜NâŞŠš+´ñªßzÀt§9ÀbÌ(YĞë(Ö™Ä5ÖRª­•÷a‰|¡êÇÑ™â\Z¨Œ×(ëŞ^c o¥ ÷++sé(Ô‰!hE¹ş§«Ú\"tÇ¤MçnÒ÷jôı·9Ôe‹`[øÓ½`+P%Y©KK\'z’ºëmCÖáUTC\ZdEù› €3÷ßŠäó¥hó´1c\rÛ·½g NÇ÷¯^‘•—¢ÏÙr0\\›Ñš}x]=qº{úÄ¥Z}é¢Õïl\\·šöÄ=ˆƒ~\nh€‡\"Â~pèCáX(…ˆ Fw¶ƒÓ;+¸*ZåVOWªàôŞãş¿±]MM£H_ïiÈõX ­«¨:.ğâWxûÇ Š^òè%ÏyÀ)>†~%kè6ùæÜÈí«*>Ğõ%¼öCy#y$€Æóßè†ÃÆF÷u¤`S¾œ‹¹Ûåu×Z*c§LÈÒã›h¡A¥oBèZt¤œã0\0\\î™,JÄÉR0úÒ{ºQÇ¢%Tâ›´,Şü‚ÇDå šäh™†%¬z3€µ+¢WiN‰`Mßi7<’<%ñà®[wl?rxo\r©ÀÜã6öEG?4×•Æ´&kÔ]¾ÑÉaŞÎèÜån0¬ë8“Üè{J£~DS¿Bl©Ÿ³4tzLUÓ…Úª+ZuW!–‰µQ“ƒ¢Åœº~£®^J‚´vŸ€Ólp”}ÕR±ÔG\\Ã“èµiÙ±ØÇï/—Ö’Ï…ûW\\ñ›2<ş£¤ÒMiÊÎ·Yõ·ØgF\\¸§3:ü4wÔí»|Gsz.c8´¯ëN<^Ùi3¿ƒÇ?ÂDè%Ææ¦§yó›.—í>\\º_«î¼ÁbDë†-¤D8Z´¯¼ÊğVBBîò%Y”Qºç@c³dŞÑ W\"ÛÄÕ€Èª²‹¥JL0Ds`i	Z+°Ü¦T‚v§Òšaş˜êÈg\nendstream\nendobj\n18 0 obj\n<</Filter/FlateDecode/Subtype/Type1C/Length 3620>>stream\nxœÍWkTS×¶Ş1dï-*q£ˆfS´A ¢HQŞå%E%€€ Vm)ÖV–£õU\Zß Šz| â£(Òú Ò\0ÒF¤ÕªçÌ»Â¸gÚs<÷ç÷Ç##Ùì5çúæ7¿one2„‰D¦Á©™©ùÉIÆ3¹`#Æ\rÆ‹Kp–~«¾H2\nßzÚ\\™QÈLŒÌLÊÆèµd#áüpX;‚2‰¦…Åç=’“Óä9Ù9E¹iéù¶nr¹§íÒ\"Û?îØú§æe¤eÙÚ“ƒ‚ÔÌìEjV~D†béª<Û˜¤¬<Û0ÛèÔ´U™I¹ÿqñßëıï\"P5Õ/ëÓì99ş+ró‚òW…$…%‡§D¤FF¥ÍMÎˆ™›§˜ìòÂU>ÅÍİcª§í´é^3º(ÊŠ¤¼¨(j\"5—úŠ¦ì©ê#jå@ÅRq”#5›r¦ü)*€r¥)95…\n¦Ü¨Ê\n¥<¨©”\'NM£\"(sj8ÕB FR–””\ZEq”5šQc(kj,eC}Oy’BP&Ôj\ruÒ‹Eu¢ÿ\Z1¤`È…!mâ9âÓb­‰­‰§ÉÄE’,¹(yNO§¿¥Û˜$ækÊ®dw?Ô{ègC·½`ji*7õ3=ezkØØaŞÃš11;b>Ê|´ùór‹0‹×pÒBïŠ”°P%È•\"!²¹\'8[ò–Æ;õ\n	6£ñŞ~…ä7º\r²%ğ­ŠÃki0ƒ.‰…p)…èGéJËÖ6ŸNØÚ1ZzºU8ÄuB\r#mşÇÍÖç÷k’Ãdø¿;[FzÓ^&•ÏDñŠE³Ùnf ª>€„´L9(`1£p5„j	–Ğ°Şm0•\09N€FXˆ%ÀĞ$r~›0¹MT©ë\Z1*9ìàn‡ıq@÷˜=ï`„N}ƒ\'ó›}¸7}°1×ÇÕ%º\r¤ mlÓñúeùj¡O-º¢ëÄe‡«\n{ IèãÌØÈ9i6EØ¬jb‹ãÜsz¢W/C,ëD—Äg¬ÍRD†gÌD,şĞX…H\r0`×Ô°&ë,wŸb÷<–¤Š³”0G%8ª,oaºª-í»³¸N8J_Š­ËkA,ŒëxƒÿT‚y^úÚE¯H	gŸ1Ò>\ZÖ„q¿ÜGâa3änÑí0†7¶÷·€ÔÂ]µ¨G\'ŒÓ‰{¬à\ra B6çñZ×oÃ	waŸ:âîëˆ\'òï§&:ªkb´9§_ãÀ¤4D$;“MÁ<ûtÙÿ¨şhc5O2Ø^ïÍõ4~Œ¥Øl®·»kÄO`w~ú…7ÖT\r[Õ°N-ÒêÄğ	tqÂjÃ°N«\r[ú‚Rm˜M[ÀsÂÕÊJË‡”ÑÒ;ÿ Î=9XwşøÑƒG¶ßÚÌv1Rù–u%›‹mbÑÒg²Ò¨^ÆB\0Â×æÿˆ¯Õø5‰b«6¬ëWèG¾äH­¾Ôˆ…PÁ‚+}t›“]Y|æèU“#¼jõ­ueh™uü‚å³§î=\\ [¿ï«}«Xwz6o™ãI}Æt6¿V%^œp„÷>ô×¬Ã¨Êºîâ‰–•Yó¶È,ôóÕğ\Z©E—™âÃ^[Hc+\'glí|¬v‰láµ,\rÒ²ô;˜‚ˆÛ£•²^z%8`“.ìÜĞœüèÏ€,Ax4‹óa<–Cüoªªg?ÊÊ%Mµ“ùÇQW‡vÀ¦ÂÄéx¢Ğ[:¶2«ùğ-©µ2ŸóEé\ZÄ¦ïªâ?gŒ\róHX ´lî€m³Œ–¾\n¬„CÓq=cà’tşL`¦æ˜ßeÒ;m¨îXİCv6Cbvé«bˆÓ+8ç~ÅzpAy›¨F{	oNÕq_nú\ZmDlÖgûòp‡ÑÕcÎ\'bUJš,/§X±i>ÛIïøşÜqbŸ^ÈçW1(½`mH	6][ôõŠõ+3¡ vòıÈ¿ß¿^v£I¶=öhş\rt\0íŞR±ƒÅöÄ¡ì’5¹ù™K?[€ØĞÔ“×*+´{ù=û·Uì56\ZRë¥¨ÂäéB¸¯Æ†3á$¡Á\nxÍ}}õ‹Ó…ÇÓêÂÏ&\\°“cÂğ™Z[°ƒ‘ÏÀ¨]ü4zİ´%Işˆu÷FÀèªŸ[/-½‹ğûñ \ZOº…İb!İ\n’ [¯ÀƒÓû‡ãLıp	æúİĞl\0£Pæ›|”ÿê3’àt\\N§_© IŒsÃ\"<>Ç\"°û±şXóe>ğ1ƒ×Iœ–ô™%6¿Ï~èü<v²n±~,YÏİ £\r#ÄŞ»›Ì\rİ’wƒb	Á-àÑ&vÁzµuemuÆsïk“Hd{g,Æ~ØOk`ÖÑô!²ıüÀ„´`‡—g_*<±áDé5vK·£¯é^\'b»šBœùÒåóœNØ§Öú\"§b;ì‚Wã\"ø\0;CZêX}ÿìA-HcásÌƒ3^.ó2·ßñ0ıí°yB>‘8J0¿!?®ü Õ¨a§Zô³zúÄDÔîrPD7¢Ëû«Ï^:°=`aüŒ6<Q†oÛ]°1Çô\\_èí·ĞmPİZaä@åk ®M,ÈIËø2Iwã‘[OÁöZp1¯N¼¹²5£ÚŠÚûlƒü¿\\Rµ*sIÑ§(eìÊ?°z_ÉwO²ôN‡¶(TèÁ‘35ç¯ì»`8+„2xu8§½î‹Gã‘±¾îòyFŸ±lPiÿ\'Pú•¥œsÛÃ§gtXk(Äv’e8\rÄp^Ms´GM­l’½s—à$ØÏ-ŠyX°bC\"²Æ®ïA%×·¿ çÜÙ±üŸ~l¤Yk±cq+aE¿¢ƒ˜±ÑŠ+–¬UÊÊ‹vå¢eì %w‡5|è·8ÿ“28Áp\njÕ°M-Òé{<à`İQ•<…/\rE‹¿MÜ«°I^¾áè¦¾R0[]ùñõ…Óu¨“Ë™õè¨‡­	lƒUÌ5t¢¤¬ğHÁŞåh	ë‘˜â ³€\\’æëw–÷;§“‰á!8’ªL7ê ¥]z…É4»Nš€@öZ%jÕ	\"Â-°‡ÛË ‹ëÏçT.¾ësÊTÏÃÁq«y™ËCÈB]Ş…e(Ú\Z¥$g®Ê*XT…¼QÜÁôšœSŸŸİ|™hùæà½‰Ç“ë;ÓAŒ4èeme]õÉfticî;ÃŸÔq/_Qn²›ë~¶y¾ÓfÙ€Ñèµ¾#ªò½\r%jÃC/ØĞoC,Æ8AèeJQ—N0%iÖ¸\r;™Iş‘xhlâŞ#é²´Š5U¨vºëØáï®à¾0äØË„Ì\0Æ&néÃdòğ´~ÅÀæÿ‹ÆYÁv29Ğx±¡/ú%Ñ°Ìb*ôŞä•cüŒ–ısøR3ÒOî´Ü=›\Z,ÃıÆÆÓ;•)!ÆSa<ÓwÕ! © j,ófR9é©<\0%¬Lc(ş[‘æ-7ávƒ×&lbS™Ö³—Ÿó`ö¯»bˆ!ÿ˜ğö}}åÿ¥Ä`Fåœ°ƒä6mœé$$t¡R¯A÷K\Zh(ÖKíH¥]ÔB•Vúx.Ef-[°(<ò€›nhÇ–0Õ¤/×lÕ/	ßË–ÕGU#v¦Ioídƒ-rä’ğ+ÄA\\moï`?‰`O·ö[8Ã–n}ü\\&‹\n×âqkØ0£«\"PCdÕK+¶j8ÃPzç­SUš«¯nŒùíÆÕG„gMy\rIÕIUŸBSPpfJDnê‰›æ°İôÖ+Ûï)+»ø·£×Û~;Ú7fùÂ°4Şu>v˜¶$¸Ë­…LzĞ:·Y\n¼6Pkì–• âvÓU›%}õ‰nóâ\\®¼ùŠ\'ÃJô®eûWTµ¦÷‘Åş…ÆjÓë=óÒ®ûÇN×ı0,f<Â6x‚ïLìô¬›Ş|q[ùîÃÊêKå\rˆUÕ.ö/R¤|Æçg~^:à§Jp|&‚v@;øpØ§|Ş=³–µ{bˆ–¸0pí‡siÈ…{ƒ.\Z¸jD‚7$‡Á0„3XI~¢/ÔÙ±½M¡vF…;ù$T·¤÷Ìİ•}håùØ3ÛIÒ^½G°uy‰ÇÅ\'¯W,å+`®¢\0wTM*ÜçÈâ	Õ×\0ëûSh&\nX–ôIb`¡ÂØÌª	;}7“Œ\Z`Ó÷\nx3E‡¥óræ§ò›ÁïæË×è.º˜ò]Kfê©\\×õ¨Én‘¡3¼Â[~î¾}GÃ¢\rŠéod+ûÛÈò¤4‰¿\nÄqxû‚®†Â˜Á¦wê1ä©,«´¡Z(%_dÈ\'ï5C¹G—ËÏ\ZÍÊÄ£ØøH÷™XR–öh±LúfFJòÜÇb«¾)ğØşª+Ur“WµLÚ‡YØÍ=¹’² ÑoÖÂKZ®\\zÂKßàz“îÛ1Ó=£æÉ§F6vt4İìá£G«àn›èœÎ½_On?fŸ…¡Öªšï/=TjpÄ„‹&İKi?i|k±qüóxŒÖF=¨+oø_ŠıbœìQ8ZR½®……QÂrN}7ÈÕ=2ÂÃ3®©WÛÔ¬æú¾Á¢Ë5@8dò§§B£ü¿1/¬âŒ/““”Ä\"¿L8¤„peX­2í\Z¦ú‹™Y×N3sŠú\'Æ©‡\nendstream\nendobj\nxref\n0 20\n0000000000 65535 f \n0000000015 00000 n \n0000000389 00000 n \n0000004369 00000 n \n0000004496 00000 n \n0000006432 00000 n \n0000006545 00000 n \n0000004559 00000 n \n0000022206 00000 n \n0000022236 00000 n \n0000022267 00000 n \n0000006719 00000 n \n0000018678 00000 n \n0000018720 00000 n \n0000019405 00000 n \n0000022310 00000 n \n0000019803 00000 n \n0000020465 00000 n \n0000026385 00000 n \n0000020839 00000 n \ntrailer\n<</Size 20/Root 3 0 R/Info 1 0 R/ID [<c6054b2d29ba099a30d4ccc9bd4173e6><20862b85281ab5dd7e6bddb73a0f2ac9>]>>\nstartxref\n30089\n%%EOF\n');
/*!40000 ALTER TABLE `ost_file_chunk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_filter`
--

DROP TABLE IF EXISTS `ost_filter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_filter` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `execorder` int(10) unsigned NOT NULL DEFAULT '99',
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `status` int(11) unsigned NOT NULL DEFAULT '0',
  `match_all_rules` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `stop_onmatch` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `reject_ticket` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `use_replyto_email` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `disable_autoresponder` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `canned_response_id` int(11) unsigned NOT NULL DEFAULT '0',
  `email_id` int(10) unsigned NOT NULL DEFAULT '0',
  `status_id` int(10) unsigned NOT NULL DEFAULT '0',
  `priority_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(10) unsigned NOT NULL DEFAULT '0',
  `team_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sla_id` int(10) unsigned NOT NULL DEFAULT '0',
  `form_id` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(11) unsigned NOT NULL DEFAULT '0',
  `ext_id` varchar(11) DEFAULT NULL,
  `target` enum('Any','Web','Email','API') NOT NULL DEFAULT 'Any',
  `name` varchar(32) NOT NULL DEFAULT '',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `target` (`target`),
  KEY `email_id` (`email_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_filter`
--

LOCK TABLES `ost_filter` WRITE;
/*!40000 ALTER TABLE `ost_filter` DISABLE KEYS */;
INSERT INTO `ost_filter` VALUES (1,99,1,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'Email','SYSTEM BAN LIST','Liste interne pour bannir certains e-mails. Ne pas supprimer','2015-12-01 09:25:03','2015-12-01 09:25:03');
/*!40000 ALTER TABLE `ost_filter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_filter_rule`
--

DROP TABLE IF EXISTS `ost_filter_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_filter_rule` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filter_id` int(10) unsigned NOT NULL DEFAULT '0',
  `what` varchar(32) NOT NULL,
  `how` enum('equal','not_equal','contains','dn_contain','starts','ends','match','not_match') NOT NULL,
  `val` varchar(255) NOT NULL,
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `notes` tinytext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filter` (`filter_id`,`what`,`how`,`val`),
  KEY `filter_id` (`filter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_filter_rule`
--

LOCK TABLES `ost_filter_rule` WRITE;
/*!40000 ALTER TABLE `ost_filter_rule` DISABLE KEYS */;
INSERT INTO `ost_filter_rule` VALUES (1,1,'email','equal','test@exemple.com',1,'','2015-12-01 09:25:03','2015-12-01 09:25:03');
/*!40000 ALTER TABLE `ost_filter_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_form`
--

DROP TABLE IF EXISTS `ost_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_form` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(8) NOT NULL DEFAULT 'G',
  `deletable` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `instructions` varchar(512) DEFAULT NULL,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_form`
--

LOCK TABLES `ost_form` WRITE;
/*!40000 ALTER TABLE `ost_form` DISABLE KEYS */;
INSERT INTO `ost_form` VALUES (1,'U',1,'Informations de contact',NULL,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,'T',1,'DÃ©tails du ticket','Veuillez dÃ©crire votre problÃ¨me','Ce formulaire sera joint Ã  chaque ticket, quelle que soit sa source. Vous pouvez ajouter de nouveaux champs Ã  ce formulaire, ils seront disponibles pour tous les tickets et seront intÃ©grÃ©s dans les options de recherche avancÃ©e et de filtrage.','2015-12-01 09:25:03','2015-12-01 09:25:03'),(3,'C',1,'Informations sur la sociÃ©tÃ©','DÃ©tails disponibles dans les modÃ¨les d\'e-mail',NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(4,'O',1,'Information sur la SociÃ©tÃ©','DÃ©tails sur la sociÃ©tÃ© de l\'utilisateur',NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(5,'L1',1,'PropriÃ©tÃ©s du statut des tickets','PropriÃ©tÃ©s qui peuvent Ãªtre dÃ©finies sur le statut d\'un billet.',NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03');
/*!40000 ALTER TABLE `ost_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_form_entry`
--

DROP TABLE IF EXISTS `ost_form_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_form_entry` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` int(11) unsigned NOT NULL,
  `object_id` int(11) unsigned DEFAULT NULL,
  `object_type` char(1) NOT NULL DEFAULT 'T',
  `sort` int(11) unsigned NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `entry_lookup` (`object_type`,`object_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_form_entry`
--

LOCK TABLES `ost_form_entry` WRITE;
/*!40000 ALTER TABLE `ost_form_entry` DISABLE KEYS */;
INSERT INTO `ost_form_entry` VALUES (1,4,1,'O',1,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,3,NULL,'C',1,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(3,1,1,'U',1,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(4,2,1,'T',1,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(5,1,2,'U',1,'2015-12-01 09:36:22','2015-12-01 09:36:22'),(6,2,2,'T',1,'2015-12-01 10:09:31','2015-12-01 10:09:31'),(7,1,3,'U',1,'2015-12-22 13:08:23','2015-12-22 13:08:23'),(8,2,3,'T',1,'2016-01-04 16:01:15','2016-01-04 16:01:15'),(9,2,4,'T',1,'2016-01-04 16:07:34','2016-01-04 16:07:34'),(10,1,4,'U',1,'2016-01-07 14:52:55','2016-01-07 14:52:55'),(11,2,5,'T',1,'2016-01-07 14:53:21','2016-01-07 14:53:21'),(12,2,6,'T',1,'2016-01-07 14:53:51','2016-01-07 14:53:51');
/*!40000 ALTER TABLE `ost_form_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_form_entry_values`
--

DROP TABLE IF EXISTS `ost_form_entry_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_form_entry_values` (
  `entry_id` int(11) unsigned NOT NULL,
  `field_id` int(11) unsigned NOT NULL,
  `value` text,
  `value_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_id`,`field_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_form_entry_values`
--

LOCK TABLES `ost_form_entry_values` WRITE;
/*!40000 ALTER TABLE `ost_form_entry_values` DISABLE KEYS */;
INSERT INTO `ost_form_entry_values` VALUES (1,28,'420 Desoto Street\nAlexandria, LA 71301',NULL),(1,29,'3182903674',NULL),(1,30,'http://osticket.com',NULL),(1,31,'Non seulement nous dÃ©veloppons le logiciel, nous l\'utilisons Ã©galement pour gÃ©rer le support d\'osTicket. Laissez nous vous aider Ã  rapidement mettre en place et tirer parti au maximum des fonctionnalitÃ©s d\'osTicket. Contactez nous pour un accompagnement professionnel ou visitez notre site web pour accÃ©der Ã  la documentation et Ã  l\'entraide communautaire.',NULL),(2,23,'Support Groupe Nox',NULL),(2,24,'http://localhost/Symfony/web/app.php/accueil',NULL),(2,25,NULL,NULL),(2,26,NULL,NULL),(3,3,NULL,NULL),(3,4,NULL,NULL),(4,20,'osTicket a Ã©tÃ© installÃ©!',NULL),(4,22,NULL,2),(5,3,NULL,NULL),(5,4,NULL,NULL),(6,20,'Test ticketing',NULL),(6,22,NULL,2),(7,3,'0608505976',NULL),(7,4,NULL,NULL),(8,20,'CA MARCHE PAS !',NULL),(8,22,NULL,2),(9,20,'Test',NULL),(9,22,NULL,1),(10,3,'0626810468',NULL),(10,4,NULL,NULL),(11,20,'J\'ai windows 10 T_T',NULL),(11,22,NULL,2),(12,20,'hohÃ© test2',NULL),(12,22,NULL,1);
/*!40000 ALTER TABLE `ost_form_entry_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_form_field`
--

DROP TABLE IF EXISTS `ost_form_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_form_field` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` int(11) unsigned NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'text',
  `label` varchar(255) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `private` tinyint(1) NOT NULL DEFAULT '0',
  `edit_mask` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(64) NOT NULL,
  `configuration` text,
  `sort` int(11) unsigned NOT NULL,
  `hint` varchar(512) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_form_field`
--

LOCK TABLES `ost_form_field` WRITE;
/*!40000 ALTER TABLE `ost_form_field` DISABLE KEYS */;
INSERT INTO `ost_form_field` VALUES (1,1,'text','Adresse email',1,0,15,'email','{\"size\":40,\"length\":64,\"validator\":\"email\"}',1,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,1,'text','Nom complet',1,0,15,'name','{\"size\":40,\"length\":64}',2,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(3,1,'phone','TÃ©lÃ©phone',0,0,0,'phone',NULL,3,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(4,1,'memo','Notes interne',0,1,0,'notes','{\"rows\":4,\"cols\":40}',4,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(20,2,'text','RÃ©sumÃ© du problÃ¨me',1,0,15,'subject','{\"size\":40,\"length\":50}',1,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(21,2,'thread','DÃ©tail de la demande',1,0,15,'message','{\"attachments\":true,\"size\":67108864,\"mimetypes\":null,\"extensions\":\".doc, .pdf, .jpg, .jpeg, .gif, .png, .xls, .docx, .xlsx, .txt\",\"max\":\"\"}',2,'DÃ©tailler les raisons pour lesquelles vous ouvrez un billet.','2015-12-01 09:25:03','2015-12-01 09:55:50'),(22,2,'priority','Niveau de prioritÃ©',0,1,3,'priority',NULL,3,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(23,3,'text','Nom de la sociÃ©tÃ©',1,0,3,'name','{\"size\":40,\"length\":64}',1,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(24,3,'text','Site Internet',0,0,0,'website','{\"size\":40,\"length\":64}',2,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(25,3,'phone','TÃ©lÃ©phone',0,0,0,'phone','{\"ext\":false}',3,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(26,3,'memo','Adresse',0,0,0,'address','{\"rows\":2,\"cols\":40,\"html\":false,\"length\":100}',4,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(27,4,'text','Nom',1,0,15,'name','{\"size\":40,\"length\":64}',1,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(28,4,'memo','Adresse',0,0,0,'address','{\"rows\":2,\"cols\":40,\"length\":100,\"html\":false}',2,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(29,4,'phone','TÃ©lÃ©phone',0,0,0,'phone',NULL,3,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(30,4,'text','site internet',0,0,0,'website','{\"size\":40,\"length\":0}',4,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(31,4,'memo','Notes internes',0,0,0,'notes','{\"rows\":4,\"cols\":40}',5,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(32,5,'state','Ã‰tatÂ ',1,0,63,'state','{\"prompt\":\"\\u00c9tat d\'un billet\"}',1,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(33,5,'memo','Description',0,0,15,'description','{\"rows\":2,\"cols\":40,\"html\":false,\"length\":100}',3,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03');
/*!40000 ALTER TABLE `ost_form_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_group_dept_access`
--

DROP TABLE IF EXISTS `ost_group_dept_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_group_dept_access` (
  `group_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `group_dept` (`group_id`,`dept_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_group_dept_access`
--

LOCK TABLES `ost_group_dept_access` WRITE;
/*!40000 ALTER TABLE `ost_group_dept_access` DISABLE KEYS */;
INSERT INTO `ost_group_dept_access` VALUES (1,1),(2,1),(3,1),(1,2),(2,2),(3,2),(1,3),(2,3),(3,3);
/*!40000 ALTER TABLE `ost_group_dept_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_groups`
--

DROP TABLE IF EXISTS `ost_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_groups` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `group_name` varchar(50) NOT NULL DEFAULT '',
  `can_create_tickets` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `can_edit_tickets` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `can_post_ticket_reply` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `can_delete_tickets` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `can_close_tickets` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `can_assign_tickets` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `can_transfer_tickets` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `can_ban_emails` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `can_manage_premade` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `can_manage_faq` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `can_view_staff_stats` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`group_id`),
  KEY `group_active` (`group_enabled`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_groups`
--

LOCK TABLES `ost_groups` WRITE;
/*!40000 ALTER TABLE `ost_groups` DISABLE KEYS */;
INSERT INTO `ost_groups` VALUES (1,1,'Dresseurs de Lion',1,1,1,1,1,1,1,1,1,1,0,'Admin du systÃ¨me. Ces utilisateurs (au dÃ©part) ont un contrÃ´le total de tous les dÃ©partements auxquels ils ont accÃ¨s.','2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,1,'Conducteurs d\'Ã©lÃ©phant',1,1,1,1,1,1,1,1,1,1,0,'Super utilisateurs (root)','2015-12-01 09:25:03','2015-12-01 09:25:03'),(3,1,'Dompteurs de puce',1,1,1,0,1,1,1,0,0,0,0,'Membres du personnel','2015-12-01 09:25:03','2015-12-01 09:25:03');
/*!40000 ALTER TABLE `ost_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_help_topic`
--

DROP TABLE IF EXISTS `ost_help_topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_help_topic` (
  `topic_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `topic_pid` int(10) unsigned NOT NULL DEFAULT '0',
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ispublic` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `noautoresp` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `flags` int(10) unsigned DEFAULT '0',
  `status_id` int(10) unsigned NOT NULL DEFAULT '0',
  `priority_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(10) unsigned NOT NULL DEFAULT '0',
  `team_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sla_id` int(10) unsigned NOT NULL DEFAULT '0',
  `page_id` int(10) unsigned NOT NULL DEFAULT '0',
  `form_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sequence_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `topic` varchar(32) NOT NULL DEFAULT '',
  `number_format` varchar(32) DEFAULT NULL,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`topic_id`),
  UNIQUE KEY `topic` (`topic`,`topic_pid`),
  KEY `topic_pid` (`topic_pid`),
  KEY `priority_id` (`priority_id`),
  KEY `dept_id` (`dept_id`),
  KEY `staff_id` (`staff_id`,`team_id`),
  KEY `sla_id` (`sla_id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_help_topic`
--

LOCK TABLES `ost_help_topic` WRITE;
/*!40000 ALTER TABLE `ost_help_topic` DISABLE KEYS */;
INSERT INTO `ost_help_topic` VALUES (1,0,1,1,0,0,0,2,1,0,0,0,0,0,0,2,'Demande gÃ©nÃ©rale','','Questions sur les produits ou services','2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,0,1,1,0,0,0,1,1,0,0,0,0,0,0,1,'Commentaires','','Tickets qui concernent principalement les dÃ©partements de vente et facturation','2015-12-01 09:25:03','2015-12-01 09:25:03'),(10,0,1,1,0,0,0,2,1,0,0,0,0,0,0,3,'Signaler un problÃ¨me','','ProblÃ¨mes liÃ©s Ã  un produit, un service ou un Ã©quipement','2015-12-01 09:25:03','2015-12-01 09:25:03'),(11,10,1,1,0,0,0,3,1,0,0,1,0,0,0,4,'ProblÃ¨me d\'accÃ¨s','','Signaler un problÃ¨me d\'accÃ¨s Ã  un Ã©lÃ©ment physique ou virtuel','2015-12-01 09:25:03','2015-12-01 09:25:03');
/*!40000 ALTER TABLE `ost_help_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_list`
--

DROP TABLE IF EXISTS `ost_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_list` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_plural` varchar(255) DEFAULT NULL,
  `sort_mode` enum('Alpha','-Alpha','SortCol') NOT NULL DEFAULT 'Alpha',
  `masks` int(11) unsigned NOT NULL DEFAULT '0',
  `type` varchar(16) DEFAULT NULL,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_list`
--

LOCK TABLES `ost_list` WRITE;
/*!40000 ALTER TABLE `ost_list` DISABLE KEYS */;
INSERT INTO `ost_list` VALUES (1,'Statut du billet','Statut des billets','SortCol',13,'ticket-status','Statut des billets','2015-12-01 09:25:03','2015-12-01 09:25:03');
/*!40000 ALTER TABLE `ost_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_list_items`
--

DROP TABLE IF EXISTS `ost_list_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_list_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `list_id` int(11) DEFAULT NULL,
  `status` int(11) unsigned NOT NULL DEFAULT '1',
  `value` varchar(255) NOT NULL,
  `extra` varchar(255) DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT '1',
  `properties` text,
  PRIMARY KEY (`id`),
  KEY `list_item_lookup` (`list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_list_items`
--

LOCK TABLES `ost_list_items` WRITE;
/*!40000 ALTER TABLE `ost_list_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_list_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_note`
--

DROP TABLE IF EXISTS `ost_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_note` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned DEFAULT NULL,
  `staff_id` int(11) unsigned NOT NULL DEFAULT '0',
  `ext_id` varchar(10) DEFAULT NULL,
  `body` text,
  `status` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ext_id` (`ext_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_note`
--

LOCK TABLES `ost_note` WRITE;
/*!40000 ALTER TABLE `ost_note` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_organization`
--

DROP TABLE IF EXISTS `ost_organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_organization` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL DEFAULT '',
  `manager` varchar(16) NOT NULL DEFAULT '',
  `status` int(11) unsigned NOT NULL DEFAULT '0',
  `domain` varchar(256) NOT NULL DEFAULT '',
  `extra` text,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_organization`
--

LOCK TABLES `ost_organization` WRITE;
/*!40000 ALTER TABLE `ost_organization` DISABLE KEYS */;
INSERT INTO `ost_organization` VALUES (1,'osTicket','',0,'',NULL,'2015-12-01 08:25:03',NULL);
/*!40000 ALTER TABLE `ost_organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_plugin`
--

DROP TABLE IF EXISTS `ost_plugin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_plugin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `install_path` varchar(60) NOT NULL,
  `isphar` tinyint(1) NOT NULL DEFAULT '0',
  `isactive` tinyint(1) NOT NULL DEFAULT '0',
  `version` varchar(64) DEFAULT NULL,
  `installed` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_plugin`
--

LOCK TABLES `ost_plugin` WRITE;
/*!40000 ALTER TABLE `ost_plugin` DISABLE KEYS */;
INSERT INTO `ost_plugin` VALUES (1,'LDAP Authentication and Lookup','plugins/auth-ldap.phar',1,1,NULL,'2015-12-01 09:27:00');
/*!40000 ALTER TABLE `ost_plugin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_sequence`
--

DROP TABLE IF EXISTS `ost_sequence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_sequence` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `flags` int(10) unsigned DEFAULT NULL,
  `next` bigint(20) unsigned NOT NULL DEFAULT '1',
  `increment` int(11) DEFAULT '1',
  `padding` char(1) DEFAULT '0',
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_sequence`
--

LOCK TABLES `ost_sequence` WRITE;
/*!40000 ALTER TABLE `ost_sequence` DISABLE KEYS */;
INSERT INTO `ost_sequence` VALUES (1,'Tickets GÃ©nÃ©raux',1,1,1,'0','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ost_sequence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_session`
--

DROP TABLE IF EXISTS `ost_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_session` (
  `session_id` varchar(255) CHARACTER SET ascii NOT NULL DEFAULT '',
  `session_data` blob,
  `session_expire` datetime DEFAULT NULL,
  `session_updated` datetime DEFAULT NULL,
  `user_id` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'osTicket staff/client ID',
  `user_ip` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `updated` (`session_updated`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_session`
--

LOCK TABLES `ost_session` WRITE;
/*!40000 ALTER TABLE `ost_session` DISABLE KEYS */;
INSERT INTO `ost_session` VALUES ('01b2snq3vs36fg966ch1t0qsk6','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"9b0f15eb5d2ed34420f82707b40d188015091356\";s:4:\"time\";i:1450616125;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-21 13:55:25','2015-12-20 13:55:25','0','192.168.100.1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('0c8cndkndos1brn44dom60t204','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"6de578875af14f695777c2bbac2dca6a57fe85ec\";s:4:\"time\";i:1450783386;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|b:0;cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}_auth|a:1:{s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}cfg:staff.1|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"5460ef161f60fb5e755718589051508d:1450783363:af2d259e90fd736bdab3fcba41ac540e\";}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";cfg:list.1|a:0:{}lastcroncall|i:1450783386;cfg:staff.2|a:0:{}cfg:pwreset|a:0:{}','2015-12-23 12:23:06','2015-12-22 12:23:06','0','192.168.69.51','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('0eub84t9rbvbcihb7sf1m270p2','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"44c1c941468afc5d63966a45f0c4e06dd995e862\";s:4:\"time\";i:1450273678;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-17 14:47:58','2015-12-16 14:47:58','0','::1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36'),('0l4dtlq6a0p1beafp8pdfbq9n3','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"a968cc1907ecdd5af1d411d857572efffae0bfe8\";s:4:\"time\";i:1452175395;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|b:0;cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}_auth|a:2:{s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"3\";s:3:\"key\";s:16:\"local:superadmin\";}s:4:\"user\";N;}cfg:staff.3|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"c9dcbb3249a1ec9e4604fa6a4c90f0bd:1452175395:e5b4cb54d6bd79b7511b7c5f58714e7c\";}staff:lang|s:2:\"fr\";::Q|s:8:\"assigned\";search_80660194a124c13eaa7dc47b636a678e|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=3)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=3 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1452175132;cfg:dept.1|a:0:{}cfg:staff.2|a:0:{}cfg:staff.1|a:0:{}users_qs_ce746b0b7166d4b0f070e09225bd7f27|s:504:\"SELECT user.*, email.address as email, org.name as organization\n          , account.id as account_id, account.status as account_status , count(DISTINCT ticket.ticket_id) as tickets  FROM ost_user user LEFT JOIN ost_user_email email ON (user.id = email.user_id) LEFT JOIN ost_organization org ON (user.org_id = org.id) LEFT JOIN ost_user_account account ON (account.user_id = user.id)  LEFT JOIN ost_ticket ticket ON (ticket.user_id = user.id)  WHERE 1  GROUP BY user.id ORDER BY user.name ASC  LIMIT 0,25\";search_9b689e26101d698bd7a28bba7e66a135|s:2068:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=3)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=3 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.staff_id=3 ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";','2016-01-08 15:03:15','2016-01-07 15:03:15','3','192.168.69.93','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('15fssh862fmia2a38nhtijmm75','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"fdc6c377b9733959e9f2e6aa152f6d8e54d6afda\";s:4:\"time\";i:1450800181;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:2:{s:4:\"user\";N;s:5:\"staff\";N;}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}','2015-12-23 17:03:01','2015-12-22 17:03:01','0','::1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('1dfv4aqph8d023lep8qku5cdm6','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"fdb7906a9b63e3453b34d57b14f631f0cf05a9c8\";s:4:\"time\";i:1449045124;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-03 09:32:04','2015-12-02 09:32:04','0','192.168.69.51','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'),('33pqhhquog6oc4sb7a1ksrlgs0','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"51a11d86a67231003fd0b071dc968f3e7b0641e3\";s:4:\"time\";i:1450787563;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:1:{s:4:\"user\";a:0:{}}:token|a:0:{}client:lang|s:2:\"fr\";','2015-12-23 13:32:43','2015-12-22 13:32:43','0','192.168.30.229','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('535m89lh5pea1f2hp9805i2615','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"ff6da1b88255ba33337f7905abc4888da67047d6\";s:4:\"time\";i:1451899846;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|b:0;cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}_auth|a:1:{s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}cfg:staff.1|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"8ccd16c5c1b4a0438bc9cf3c9099d52a:1451899845:e5b4cb54d6bd79b7511b7c5f58714e7c\";}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1451899846;','2016-01-05 10:30:46','2016-01-04 10:30:46','0','192.168.69.93','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('5r35akunmno7me1lv9g4uvs9c5','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"4acbefeb424ba8887bae5c8031ff3d517102a281\";s:4:\"time\";i:1450781176;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|b:0;cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}_auth|a:1:{s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}:token|a:1:{s:5:\"staff\";s:76:\"aec3c1d11318d3e3f57c8b6ae97870d0:1450781174:af2d259e90fd736bdab3fcba41ac540e\";}cfg:staff.1|a:0:{}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1450781175;','2015-12-23 11:46:16','2015-12-22 11:46:16','1','192.168.69.51','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('67kiu5b4bvd6ib0if8n1musrl0','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"aaaebb7c24616eeee87858133e08eae80f3e3539\";s:4:\"time\";i:1449239883;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:1:{s:4:\"user\";a:1:{s:7:\"strikes\";i:1;}}','2015-12-05 15:38:03','2015-12-04 15:38:03','0','192.168.69.125','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.73 Safari/537.36'),('6en5s85qkadv8pq9i96ltq5ru0','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"8d507e751e4c84861f1b08070f456325c37430c2\";s:4:\"time\";i:1450344274;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-18 10:24:34','2015-12-17 10:24:34','0','192.168.69.51','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36'),('6jkeqtdp8iv7f01b09tu8ltgi4','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"0997aafa16a80f03d0a1f846d0154cb4a92026e1\";s:4:\"time\";i:1450789817;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:1:{s:4:\"user\";a:0:{}}:token|a:0:{}client:lang|s:2:\"fr\";','2015-12-23 14:10:17','2015-12-22 14:10:17','0','192.168.30.229','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('6r58ov5t4ag3kv7kmped22mbe7','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"cb99d05ca6f1e272076d8c868c804298fd562353\";s:4:\"time\";i:1451920284;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|b:0;cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_client|a:1:{s:4:\"auth\";a:1:{s:4:\"dest\";s:29:\"/Symfony/web/support/open.php\";}}_auth|a:2:{s:4:\"user\";a:2:{s:2:\"id\";i:2;s:3:\"key\";s:13:\"ldap.client:2\";}s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}:token|a:2:{s:6:\"client\";s:76:\"8523239702a6f35a56ddd1ae10b81fce:1451920066:e5b4cb54d6bd79b7511b7c5f58714e7c\";s:5:\"staff\";s:76:\"bc75a0f89f9cf1941f643d5db1b95a57:1451920284:e5b4cb54d6bd79b7511b7c5f58714e7c\";}client:lang|s:2:\"fr\";cfg:dept.1|a:0:{}cfg:staff.3|a:0:{}cfg:staff.2|a:0:{}cfg:staff.1|a:0:{}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}staff:lang|s:2:\"fr\";::Q|s:6:\"closed\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1451920120;search_4be0933a68a2aed99289cde50de8c153|s:2021:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'closed\' )  ORDER BY ticket.closed DESC, ticket.created DESC LIMIT 0,25\";','2016-01-05 16:11:24','2016-01-04 16:11:24','1','192.168.69.93','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('751lo11hg2mjcrt46l2qqoofl3','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"8d229a3653980a809140b4bba393a253dc789682\";s:4:\"time\";i:1449045094;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-03 09:31:34','2015-12-02 09:31:34','0','::1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'),('7flcogjg0p9788ub6egifed7j7','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"4fe5493b8ce7c0e3c129b9b1f5c840ef70c5e087\";s:4:\"time\";i:1448964147;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:2:{s:4:\"user\";a:2:{s:2:\"id\";i:2;s:3:\"key\";s:13:\"ldap.client:2\";}s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}:token|a:2:{s:6:\"client\";s:76:\"61674990cb597f7fea719695e5f2241c:1448964127:837ec5754f503cfaaee0929fd48974e7\";s:5:\"staff\";s:76:\"d5f3923d3ac265ec8e6d7562e63352e0:1448963738:837ec5754f503cfaaee0929fd48974e7\";}client:lang|s:2:\"fr\";cfg:dept.1|a:0:{}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}cfg:staff.1|a:0:{}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1448963746;','2015-12-02 11:02:27','2015-12-01 11:02:27','0','::1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'),('9cjp43q2ijj8oiai649q2bv7f1','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"992b5e15416c541c3b62ffcfd537320265c3bce8\";s:4:\"time\";i:1450790198;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}_auth|a:1:{s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}cfg:list.1|a:0:{}cfg:staff.1|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"12fa3844dfa0a652041fc7486842da7c:1450790194:af2d259e90fd736bdab3fcba41ac540e\";}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1450790195;','2015-12-23 14:16:38','2015-12-22 14:16:38','0','192.168.69.51','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('are50ajdbir869l3roip7shme2','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"71472879e9d9324bdfdda1516176b93772a0edd5\";s:4:\"time\";i:1450788624;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}_auth|a:2:{s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}s:4:\"user\";a:0:{}}cfg:list.1|a:0:{}cfg:staff.1|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"68de1f1ce0a55559bf725eb4bc894cea:1450788427:af2d259e90fd736bdab3fcba41ac540e\";}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1450788427;client:lang|s:2:\"fr\";cfg:dept.1|a:0:{}','2015-12-23 13:50:24','2015-12-22 13:50:24','0','192.168.69.51','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('au0heqqb92fk82lhkcji0dspn5','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"daeb86ecc3e8e933a9cab8e6adf30ba12d5503dd\";s:4:\"time\";i:1450946888;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-25 09:48:08','2015-12-24 09:48:08','0','::1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('b6mu45r4thsh0g7rtken4i3bc5','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"3a85ba3ac8e9f1f2aeaff777791ff35f094cc4df\";s:4:\"time\";i:1450790098;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|b:0;cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:2:{s:4:\"user\";N;s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"2\";s:3:\"key\";s:13:\"ldap:s.jubeau\";}}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}cfg:staff.2|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"d962d72db7c48af7b0b9c22b4a7c2d37:1450790097:63b2ac7852f66dd6aa3b0bcd947bb4a7\";}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_68b19b8f98d2703afa98b4d6dbdfa04d|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=2)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=2 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1450790098;search_0670609443b16a452bd3b617c7094cb3|s:2021:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=2)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=2 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'closed\' )  ORDER BY ticket.closed DESC, ticket.created DESC LIMIT 0,25\";','2015-12-23 14:14:58','2015-12-22 14:14:58','0','192.168.30.229','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('ig4qk06p46rs17ut5n81ij3t32','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"88e1d79cbcb86137690809bbc2339efffa633ddf\";s:4:\"time\";i:1452177625;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2016-01-08 15:40:25','2016-01-07 15:40:25','0','192.168.69.125','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('iph24d3n8bg5umsnb83323iiq7','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"153274795b17569ca7d95c52cac24e543ce450e6\";s:4:\"time\";i:1451913350;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:2:{s:4:\"user\";a:2:{s:2:\"id\";i:2;s:3:\"key\";s:13:\"ldap.client:2\";}s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}cfg:staff.1|a:0:{}:token|a:2:{s:5:\"staff\";s:76:\"e450f5823e8ceb0704ef981b632d7343:1451912045:e5b4cb54d6bd79b7511b7c5f58714e7c\";s:6:\"client\";s:76:\"3b5b6c044c6bf913d7b44cdd8a264c82:1451913345:e5b4cb54d6bd79b7511b7c5f58714e7c\";}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1451912046;cfg:dept.1|a:0:{}users_qs_ce746b0b7166d4b0f070e09225bd7f27|s:504:\"SELECT user.*, email.address as email, org.name as organization\n          , account.id as account_id, account.status as account_status , count(DISTINCT ticket.ticket_id) as tickets  FROM ost_user user LEFT JOIN ost_user_email email ON (user.id = email.user_id) LEFT JOIN ost_organization org ON (user.org_id = org.id) LEFT JOIN ost_user_account account ON (account.user_id = user.id)  LEFT JOIN ost_ticket ticket ON (ticket.user_id = user.id)  WHERE 1  GROUP BY user.id ORDER BY user.name ASC  LIMIT 0,25\";cfg:pwreset|a:0:{}cfg:staff.3|a:0:{}client:lang|s:2:\"fr\";','2016-01-05 14:15:50','2016-01-04 14:15:50','0','192.168.69.93','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('kbm19adpao78sgdc5a8grs4k92','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"b7162ee843562e4870847bc93fbe37e0d7ff2fde\";s:4:\"time\";i:1451919453;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2016-01-05 15:57:33','2016-01-04 15:57:33','0','::1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('kcs1dmdl6qhcroj91ppof50t93','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"13f211bcef7bc0971333d7fb8c46873a6c87374b\";s:4:\"time\";i:1448962128;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}_auth|a:1:{s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}cfg:staff.1|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"347e8ef5e00104fcc6d61b4c9ea6d7c2:1448962122:837ec5754f503cfaaee0929fd48974e7\";}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";cfg:list.1|a:0:{}lastcroncall|i:1448962122;','2015-12-02 10:28:48','2015-12-01 10:28:48','0','::1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'),('kfijrnllmiqsvksp48046b30i1','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"d88ebb5562a5e579e4d70f085ff6bc82456f436f\";s:4:\"time\";i:1452259759;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|b:0;cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}_auth|a:1:{s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}cfg:staff.1|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"dfd272cbed9a360a9fe2f33ea9055899:1452259737:e5b4cb54d6bd79b7511b7c5f58714e7c\";}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";cfg:list.1|a:0:{}lastcroncall|i:1452259753;cfg:dept.1|a:0:{}cfg:staff.3|a:0:{}cfg:staff.2|a:0:{}','2016-01-09 14:29:19','2016-01-08 14:29:19','1','192.168.69.93','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('khov95vs0fvhf4ulbvuhs8s8o6','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"4bd4ed81aa6cb5d662f55177573c0b541e223136\";s:4:\"time\";i:1450857110;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-24 08:51:50','2015-12-23 08:51:50','0','192.168.100.1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('kmcbnslrcjdc4aef16octgp8u7','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"cd6eaedb29e41806bca135bbeb691f725955daff\";s:4:\"time\";i:1449048548;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-03 10:29:08','2015-12-02 10:29:08','0','192.168.69.120','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'),('knj29rqfcc9eifoovsvkk8brt6','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"1e7b9652754b7ff8e73f3deddba6cbab4cc93282\";s:4:\"time\";i:1452256212;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2016-01-09 13:30:12','2016-01-08 13:30:12','0','192.168.69.90','Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko'),('kpt5r2okf0lf0un0e0dat8tut1','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"40d30668c41115122121e42d68804196c7020ef7\";s:4:\"time\";i:1452175785;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:2:{s:4:\"user\";a:2:{s:2:\"id\";i:4;s:3:\"key\";s:13:\"ldap.client:4\";}s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"3\";s:3:\"key\";s:16:\"local:superadmin\";}}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}cfg:staff.3|a:0:{}:token|a:2:{s:5:\"staff\";s:76:\"79d378a0f551edb1a8083e61d0cbc1db:1452175080:ebada857b079da78a63d96005fb5ea85\";s:6:\"client\";s:76:\"298e5a63fbc49ae7c23dd3fb46c82482:1452175757:ebada857b079da78a63d96005fb5ea85\";}staff:lang|s:2:\"fr\";::Q|s:6:\"closed\";search_80660194a124c13eaa7dc47b636a678e|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=3)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=3 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1452175081;search_d020ea976a1be454ee0099f620a7cf80|s:2021:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=3)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=3 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'closed\' )  ORDER BY ticket.closed DESC, ticket.created DESC LIMIT 0,25\";users_qs_ce746b0b7166d4b0f070e09225bd7f27|s:504:\"SELECT user.*, email.address as email, org.name as organization\n          , account.id as account_id, account.status as account_status , count(DISTINCT ticket.ticket_id) as tickets  FROM ost_user user LEFT JOIN ost_user_email email ON (user.id = email.user_id) LEFT JOIN ost_organization org ON (user.org_id = org.id) LEFT JOIN ost_user_account account ON (account.user_id = user.id)  LEFT JOIN ost_ticket ticket ON (ticket.user_id = user.id)  WHERE 1  GROUP BY user.id ORDER BY user.name ASC  LIMIT 0,25\";cfg:dept.1|a:0:{}client:lang|s:2:\"fr\";','2016-01-08 15:09:45','2016-01-07 15:09:45','0','192.168.69.80','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('l6kdcju91nuk9m7rj92cnvt003','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"0b6681ee95ca0030b58488db7f605c065e661ad7\";s:4:\"time\";i:1450789632;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:2:{s:4:\"user\";a:0:{}s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"2\";s:3:\"key\";s:13:\"ldap:s.jubeau\";}}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}cfg:staff.2|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"e5b091feb6a92dc09566f0bcdffacab1:1450788897:63b2ac7852f66dd6aa3b0bcd947bb4a7\";}staff:lang|s:2:\"fr\";::Q|s:6:\"closed\";search_68b19b8f98d2703afa98b4d6dbdfa04d|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=2)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=2 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1450788900;users_qs_ce746b0b7166d4b0f070e09225bd7f27|s:504:\"SELECT user.*, email.address as email, org.name as organization\n          , account.id as account_id, account.status as account_status , count(DISTINCT ticket.ticket_id) as tickets  FROM ost_user user LEFT JOIN ost_user_email email ON (user.id = email.user_id) LEFT JOIN ost_organization org ON (user.org_id = org.id) LEFT JOIN ost_user_account account ON (account.user_id = user.id)  LEFT JOIN ost_ticket ticket ON (ticket.user_id = user.id)  WHERE 1  GROUP BY user.id ORDER BY user.name ASC  LIMIT 0,25\";cfg:dept.1|a:0:{}search_0670609443b16a452bd3b617c7094cb3|s:2021:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=2)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=2 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'closed\' )  ORDER BY ticket.closed DESC, ticket.created DESC LIMIT 0,25\";cfg:staff.1|a:0:{}_client|a:1:{s:4:\"auth\";a:1:{s:4:\"dest\";s:29:\"/Symfony/web/support/open.php\";}}client:lang|s:2:\"fr\";','2015-12-23 14:07:12','2015-12-22 14:07:12','0','192.168.30.229','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('ldfreki8b3bovnvog2josonah1','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"2d4960d221eac9153af7997a6454d8442aadaa82\";s:4:\"time\";i:1452174852;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:1:{s:4:\"user\";a:0:{}}client:lang|s:2:\"fr\";:token|a:0:{}cfg:dept.1|a:0:{}cfg:staff.3|a:0:{}cfg:staff.2|a:0:{}cfg:staff.1|a:0:{}','2016-01-08 14:54:12','2016-01-07 14:54:12','0','192.168.69.80','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('ljqti1n0licu7clemuarflg2v7','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"188cb92909f545171c4684235361d903238d0993\";s:4:\"time\";i:1449139263;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_client|a:1:{s:4:\"auth\";a:1:{s:4:\"dest\";s:29:\"/Symfony/web/support/open.php\";}}_auth|a:1:{s:4:\"user\";a:1:{s:7:\"strikes\";i:1;}}','2015-12-04 11:41:03','2015-12-03 11:41:03','0','192.168.69.120','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'),('n09mktonepg136ersvp68v58a3','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"d16b3e89aca8e0216e7d3427b1d7176e069981a1\";s:4:\"time\";i:1449580212;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-09 14:10:12','2015-12-08 14:10:12','0','192.168.30.75','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.73 Safari/537.36'),('ns4bomsh4e1ts3jhdefc0i3vp3','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"49402542cebb84301b5326173d37090026257415\";s:4:\"time\";i:1449737163;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-11 09:46:03','2015-12-10 09:46:03','0','::1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'),('ohisc46it79i4645f6vfph34e3','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"74c88ec0702390639c8b717fa3da0d614590d835\";s:4:\"time\";i:1450882197;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|b:0;cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:2:{s:4:\"user\";N;s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}cfg:staff.1|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"17372ec15a937f5b391af339ef8d7d07:1450882195:af2d259e90fd736bdab3fcba41ac540e\";}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_14d8edbcd9a8bd7e4d842e77cb9e8817|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=1)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=1 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1450882148;','2015-12-24 15:49:57','2015-12-23 15:49:57','1','192.168.69.51','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('ojmj251bjm3vmrapj4ld56u5q0','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"15de0e4dd336af95fea23d88ecf75ee64613cdd6\";s:4:\"time\";i:1452243229;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:2:{s:4:\"user\";N;s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"3\";s:3:\"key\";s:16:\"local:superadmin\";}}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}cfg:staff.3|a:0:{}:token|a:1:{s:5:\"staff\";s:76:\"abc58ae4c31511d3b1d5f6d00f3db9af:1452242613:ebada857b079da78a63d96005fb5ea85\";}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_80660194a124c13eaa7dc47b636a678e|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=3)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=3 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1452242436;','2016-01-09 09:53:49','2016-01-08 09:53:49','0','192.168.69.80','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('phba65tnrpr6qtih8a0soa0sh3','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"a5604d2892885dea69521dd43789dc49349aa753\";s:4:\"time\";i:1450789637;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}_auth|a:2:{s:5:\"staff\";N;s:4:\"user\";a:0:{}}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}cfg:list.1|a:0:{}:token|a:0:{}client:lang|s:2:\"fr\";cfg:dept.1|a:0:{}','2015-12-23 14:07:17','2015-12-22 14:07:17','0','192.168.69.51','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('q5ed7er1ooh8k51a4lu32q7462','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"738b667a007175820699c8b1ae60a8f9bd10e7de\";s:4:\"time\";i:1452242380;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_auth|a:2:{s:4:\"user\";a:0:{}s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"3\";s:3:\"key\";s:16:\"local:superadmin\";}}:token|a:1:{s:5:\"staff\";s:76:\"2ac1c62c831330d8e963c73cd0601d6f:1452242358:ebada857b079da78a63d96005fb5ea85\";}client:lang|s:2:\"fr\";cfg:dept.1|a:0:{}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}cfg:staff.3|a:0:{}staff:lang|s:2:\"fr\";::Q|s:4:\"open\";search_80660194a124c13eaa7dc47b636a678e|s:2071:\"SELECT ticket.ticket_id,tlock.lock_id,ticket.`number`,ticket.dept_id,ticket.staff_id,ticket.team_id  ,user.name ,email.address as email, dept.dept_name, status.state  ,status.name as status,ticket.source,ticket.isoverdue,ticket.isanswered,ticket.created  ,IF(ticket.duedate IS NULL,IF(sla.id IS NULL, NULL, DATE_ADD(ticket.created, INTERVAL sla.grace_period HOUR)), ticket.duedate) as duedate  ,CAST(GREATEST(IFNULL(ticket.lastmessage, 0), IFNULL(ticket.closed, 0), IFNULL(ticket.reopened, 0), ticket.created) as datetime) as effective_date  ,ticket.created as ticket_created, CONCAT_WS(\" \", staff.firstname, staff.lastname) as staff, team.name as team  ,IF(staff.staff_id IS NULL,team.name,CONCAT_WS(\" \", staff.lastname, staff.firstname)) as assigned  ,IF(ptopic.topic_pid IS NULL, topic.topic, CONCAT_WS(\" / \", ptopic.topic, topic.topic)) as helptopic  ,cdata.priority as priority_id, cdata.subject, pri.priority_desc, pri.priority_color  FROM ost_ticket ticket  LEFT JOIN ost_ticket_status status\n            ON (status.id = ticket.status_id)  LEFT JOIN ost_user user ON user.id = ticket.user_id LEFT JOIN ost_user_email email ON user.id = email.user_id LEFT JOIN ost_department dept ON ticket.dept_id=dept.dept_id  LEFT JOIN ost_ticket_lock tlock ON (ticket.ticket_id=tlock.ticket_id AND tlock.expire>NOW()\n               AND tlock.staff_id!=3)  LEFT JOIN ost_staff staff ON (ticket.staff_id=staff.staff_id)  LEFT JOIN ost_team team ON (ticket.team_id=team.team_id)  LEFT JOIN ost_sla sla ON (ticket.sla_id=sla.id AND sla.isactive=1)  LEFT JOIN ost_help_topic topic ON (ticket.topic_id=topic.topic_id)  LEFT JOIN ost_help_topic ptopic ON (ptopic.topic_id=topic.topic_pid)  LEFT JOIN ost_ticket__cdata cdata ON (cdata.ticket_id = ticket.ticket_id)  LEFT JOIN ost_ticket_priority pri ON (pri.priority_id = cdata.priority)  WHERE (   ( ticket.staff_id=3 AND status.state=\"open\")  OR ticket.dept_id IN (1,2,3) ) AND status.state IN (\n                \'open\' )  AND ticket.isanswered=0  ORDER BY pri.priority_urgency ASC, effective_date DESC, ticket.created DESC LIMIT 0,25\";lastcroncall|i:1452242359;','2016-01-09 09:39:40','2016-01-08 09:39:40','0','192.168.69.80','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('q84ro9qjpsoeq8hvfmbkq9s5c0','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"55b4f5abff3c4fa517fcddeb3b935e514feb5073\";s:4:\"time\";i:1450882221;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|b:0;cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_client|a:1:{s:4:\"auth\";a:1:{s:4:\"dest\";s:32:\"/Symfony/web/support/profile.php\";}}_auth|a:2:{s:4:\"user\";N;s:5:\"staff\";a:2:{s:2:\"id\";s:1:\"1\";s:3:\"key\";s:14:\"local:t.besson\";}}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:37:\"/Symfony/web/support/scp/settings.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}:token|a:1:{s:5:\"staff\";s:76:\"59ecdf70feda57be1494db9ba39ed7fe:1450882201:837ec5754f503cfaaee0929fd48974e7\";}cfg:staff.1|a:0:{}staff:lang|s:2:\"fr\";ost_upgrader|a:5:{s:4:\"task\";a:0:{}s:5:\"phash\";N;s:5:\"state\";N;s:4:\"mode\";N;s:6:\"stream\";N;}lastcroncall|i:1450882209;','2015-12-24 15:50:21','2015-12-23 15:50:21','1','::1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('rhv128tjstqe7jildfo7s86b92','cfg:core|a:2:{s:9:\"tz_offset\";s:3:\"1.0\";s:12:\"db_tz_offset\";s:6:\"1.0000\";}csrf|a:2:{s:5:\"token\";s:40:\"d8c0c09e9f4fa9afe3f8b495c4086bc18e077422\";s:4:\"time\";i:1450786125;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}_client|a:1:{s:4:\"auth\";a:1:{s:4:\"dest\";s:29:\"/Symfony/web/support/open.php\";}}_auth|a:2:{s:4:\"user\";a:0:{}s:5:\"staff\";a:1:{s:7:\"strikes\";i:2;}}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:34:\"/Symfony/web/support/scp/index.php\";s:3:\"msg\";s:24:\"Authentification requise\";}}:token|a:1:{s:5:\"staff\";N;}client:lang|s:2:\"fr\";','2015-12-23 13:08:45','2015-12-22 13:08:45','0','192.168.30.229','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36'),('t95frs8d7nsiclqker61kv7ga1','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"d62f16c3d93de7fa7a518eacbb73919a51ac68b3\";s:4:\"time\";i:1450275192;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-17 15:13:12','2015-12-16 15:13:12','0','192.168.69.121','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36'),('vns8fqvevhg9b4lorijh4g0n76','cfg:core|a:1:{s:9:\"tz_offset\";s:3:\"1.0\";}csrf|a:2:{s:5:\"token\";s:40:\"5037c7b3879d6a01a19f9ac90250c16ba5bf8a4a\";s:4:\"time\";i:1449044662;}TZ_OFFSET|s:3:\"1.0\";TZ_DST|s:1:\"0\";cfg:plugin.1|a:0:{}cfg:mysqlsearch|a:0:{}cfg:list.1|a:0:{}','2015-12-03 09:24:22','2015-12-02 09:24:22','0','192.168.69.51','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36');
/*!40000 ALTER TABLE `ost_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_sla`
--

DROP TABLE IF EXISTS `ost_sla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_sla` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_priority_escalation` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `disable_overdue_alerts` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `grace_period` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(64) NOT NULL DEFAULT '',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_sla`
--

LOCK TABLES `ost_sla` WRITE;
/*!40000 ALTER TABLE `ost_sla` DISABLE KEYS */;
INSERT INTO `ost_sla` VALUES (1,1,1,0,48,'SLA par dÃ©faut','','2015-12-01 09:25:03','2015-12-01 09:25:03');
/*!40000 ALTER TABLE `ost_sla` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_staff`
--

DROP TABLE IF EXISTS `ost_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_staff` (
  `staff_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `timezone_id` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(32) NOT NULL DEFAULT '',
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `passwd` varchar(128) DEFAULT NULL,
  `backend` varchar(32) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(24) NOT NULL DEFAULT '',
  `phone_ext` varchar(6) DEFAULT NULL,
  `mobile` varchar(24) NOT NULL DEFAULT '',
  `signature` text NOT NULL,
  `notes` text,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `isvisible` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `onvacation` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `assigned_only` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `show_assigned_tickets` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `daylight_saving` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `change_passwd` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `max_page_size` int(11) unsigned NOT NULL DEFAULT '0',
  `auto_refresh_rate` int(10) unsigned NOT NULL DEFAULT '0',
  `default_signature_type` enum('none','mine','dept') NOT NULL DEFAULT 'none',
  `default_paper_size` enum('Letter','Legal','Ledger','A4','A3') NOT NULL DEFAULT 'Letter',
  `created` datetime NOT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `passwdreset` datetime DEFAULT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`staff_id`),
  UNIQUE KEY `username` (`username`),
  KEY `dept_id` (`dept_id`),
  KEY `issuperuser` (`isadmin`),
  KEY `group_id` (`group_id`,`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_staff`
--

LOCK TABLES `ost_staff` WRITE;
/*!40000 ALTER TABLE `ost_staff` DISABLE KEYS */;
INSERT INTO `ost_staff` VALUES (1,1,1,15,'t.besson','Tristan','Besson','$2a$08$4bfnoHDdJi7nFB9UcKdAAu16VRzo2PpELSg13fs9FtfsnmRRbCEnO',NULL,'t.besson@groupe-nox.com','',NULL,'','',NULL,1,1,1,0,0,0,0,0,25,0,'none','Letter','2015-12-01 09:25:04','2016-01-08 14:15:23',NULL,'0000-00-00 00:00:00'),(2,1,1,15,'s.jubeau','Sylvain','Jubeau',NULL,'ldap','s.jubeau@groupe-nox.com','','','','','',1,1,1,0,0,0,0,0,0,0,'none','Letter','2015-12-22 12:21:26','2015-12-22 14:10:25',NULL,'2015-12-22 12:21:26'),(3,1,3,15,'superadmin','super','admin','$2a$08$s6XPEYwtOczTAGcxQ4hv4Ot763hPWLGn2VcMuF/RH7dgJTIB9Q97S','local','helpdesk@groupe-nox.com','','','','','',1,1,1,0,0,0,0,0,0,0,'none','Letter','2016-01-04 13:54:05','2016-01-08 09:39:58',NULL,'2016-01-04 13:54:05');
/*!40000 ALTER TABLE `ost_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_syslog`
--

DROP TABLE IF EXISTS `ost_syslog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_syslog` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_type` enum('Debug','Warning','Error') NOT NULL,
  `title` varchar(255) NOT NULL,
  `log` text NOT NULL,
  `logger` varchar(64) NOT NULL,
  `ip_address` varchar(64) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `log_type` (`log_type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_syslog`
--

LOCK TABLES `ost_syslog` WRITE;
/*!40000 ALTER TABLE `ost_syslog` DISABLE KEYS */;
INSERT INTO `ost_syslog` VALUES (1,'Debug','osTicket installed!','FÃ©licitations ! Installation d\'osTicket terminÃ©e !\n\nMerci d\'avoir choisi osTicket !','','::1','2015-12-01 09:25:04','2015-12-01 09:25:04'),(2,'Warning','Tentative de connexion Ã©chouÃ©e (utilisateur)','Nom d\'utilisateur: superadmin IP: 192.168.69.80 Temps: Jan 7, 2016, 2:54 pm CET Tentatives: 3','','192.168.69.80','2016-01-07 14:54:46','2016-01-07 14:54:46');
/*!40000 ALTER TABLE `ost_syslog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_team`
--

DROP TABLE IF EXISTS `ost_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_team` (
  `team_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lead_id` int(10) unsigned NOT NULL DEFAULT '0',
  `isenabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `noalerts` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name` varchar(125) NOT NULL DEFAULT '',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`team_id`),
  UNIQUE KEY `name` (`name`),
  KEY `isnabled` (`isenabled`),
  KEY `lead_id` (`lead_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_team`
--

LOCK TABLES `ost_team` WRITE;
/*!40000 ALTER TABLE `ost_team` DISABLE KEYS */;
INSERT INTO `ost_team` VALUES (1,0,1,0,'Support de niveau 1','Support de niveau 1, responsable du contact initial avec les clients','2015-12-01 09:25:03','2015-12-01 09:25:03');
/*!40000 ALTER TABLE `ost_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_team_member`
--

DROP TABLE IF EXISTS `ost_team_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_team_member` (
  `team_id` int(10) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(10) unsigned NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`team_id`,`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_team_member`
--

LOCK TABLES `ost_team_member` WRITE;
/*!40000 ALTER TABLE `ost_team_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_team_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket`
--

DROP TABLE IF EXISTS `ost_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket` (
  `ticket_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(20) DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_email_id` int(11) unsigned NOT NULL DEFAULT '0',
  `status_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sla_id` int(10) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(10) unsigned NOT NULL DEFAULT '0',
  `team_id` int(10) unsigned NOT NULL DEFAULT '0',
  `email_id` int(11) unsigned NOT NULL DEFAULT '0',
  `flags` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(64) NOT NULL DEFAULT '',
  `source` enum('Web','Email','Phone','API','Other') NOT NULL DEFAULT 'Other',
  `isoverdue` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isanswered` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `duedate` datetime DEFAULT NULL,
  `reopened` datetime DEFAULT NULL,
  `closed` datetime DEFAULT NULL,
  `lastmessage` datetime DEFAULT NULL,
  `lastresponse` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`ticket_id`),
  KEY `user_id` (`user_id`),
  KEY `dept_id` (`dept_id`),
  KEY `staff_id` (`staff_id`),
  KEY `team_id` (`team_id`),
  KEY `status_id` (`status_id`),
  KEY `created` (`created`),
  KEY `closed` (`closed`),
  KEY `duedate` (`duedate`),
  KEY `topic_id` (`topic_id`),
  KEY `sla_id` (`sla_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket`
--

LOCK TABLES `ost_ticket` WRITE;
/*!40000 ALTER TABLE `ost_ticket` DISABLE KEYS */;
INSERT INTO `ost_ticket` VALUES (1,'716347',1,0,3,1,1,1,1,0,0,0,'::1','Web',0,1,NULL,NULL,'2015-12-01 10:08:02','2015-12-01 09:25:04','2015-12-01 10:08:02','2015-12-01 09:25:04','2015-12-01 10:08:02'),(2,'491384',2,0,3,1,1,1,1,0,0,0,'::1','Web',0,1,NULL,NULL,'2015-12-01 10:12:43','2015-12-01 10:09:31','2015-12-01 10:11:28','2015-12-01 10:09:31','2015-12-01 10:12:43'),(3,'331975',2,0,3,1,1,10,1,0,0,0,'192.168.69.93','Web',0,1,NULL,NULL,'2016-01-04 16:04:39','2016-01-04 16:01:15','2016-01-04 16:04:39','2016-01-04 16:01:15','2016-01-04 16:04:39'),(4,'627426',2,0,3,1,1,2,1,0,0,0,'192.168.69.93','Web',0,1,NULL,NULL,'2016-01-04 16:08:36','2016-01-04 16:07:34','2016-01-04 16:08:36','2016-01-04 16:07:34','2016-01-04 16:08:36'),(5,'410067',4,0,1,1,1,10,3,0,0,0,'192.168.69.80','Web',0,1,NULL,NULL,NULL,'2016-01-07 14:53:21','2016-01-07 14:56:57','2016-01-07 14:53:21','2016-01-07 14:56:57'),(6,'575215',4,0,1,1,1,2,0,0,0,0,'192.168.69.80','Web',0,0,NULL,NULL,NULL,'2016-01-07 14:53:51',NULL,'2016-01-07 14:53:51','2016-01-07 14:53:51');
/*!40000 ALTER TABLE `ost_ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket__cdata`
--

DROP TABLE IF EXISTS `ost_ticket__cdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket__cdata` (
  `ticket_id` int(11) unsigned NOT NULL DEFAULT '0',
  `subject` mediumtext,
  `priority` mediumtext,
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket__cdata`
--

LOCK TABLES `ost_ticket__cdata` WRITE;
/*!40000 ALTER TABLE `ost_ticket__cdata` DISABLE KEYS */;
INSERT INTO `ost_ticket__cdata` VALUES (1,'osTicket a Ã©tÃ© installÃ©!','2'),(2,'Test ticketing','2'),(3,'CA MARCHE PAS !','2'),(4,'Test','1'),(5,'J\'ai windows 10 T_T','2'),(6,'hohÃ© test2','1');
/*!40000 ALTER TABLE `ost_ticket__cdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket_attachment`
--

DROP TABLE IF EXISTS `ost_ticket_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket_attachment` (
  `attach_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) unsigned NOT NULL DEFAULT '0',
  `file_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ref_id` int(11) unsigned NOT NULL DEFAULT '0',
  `inline` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  PRIMARY KEY (`attach_id`),
  KEY `ticket_id` (`ticket_id`),
  KEY `ref_id` (`ref_id`),
  KEY `file_id` (`file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket_attachment`
--

LOCK TABLES `ost_ticket_attachment` WRITE;
/*!40000 ALTER TABLE `ost_ticket_attachment` DISABLE KEYS */;
INSERT INTO `ost_ticket_attachment` VALUES (1,1,2,2,0,'2015-12-01 10:08:02'),(2,3,5,7,0,'2016-01-04 16:01:15');
/*!40000 ALTER TABLE `ost_ticket_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket_collaborator`
--

DROP TABLE IF EXISTS `ost_ticket_collaborator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket_collaborator` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `ticket_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `role` char(1) NOT NULL DEFAULT 'M',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `collab` (`ticket_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket_collaborator`
--

LOCK TABLES `ost_ticket_collaborator` WRITE;
/*!40000 ALTER TABLE `ost_ticket_collaborator` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_ticket_collaborator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket_email_info`
--

DROP TABLE IF EXISTS `ost_ticket_email_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket_email_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) unsigned NOT NULL,
  `email_mid` varchar(255) NOT NULL,
  `headers` text,
  PRIMARY KEY (`id`),
  KEY `email_mid` (`email_mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket_email_info`
--

LOCK TABLES `ost_ticket_email_info` WRITE;
/*!40000 ALTER TABLE `ost_ticket_email_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_ticket_email_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket_event`
--

DROP TABLE IF EXISTS `ost_ticket_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket_event` (
  `ticket_id` int(11) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(11) unsigned NOT NULL,
  `team_id` int(11) unsigned NOT NULL,
  `dept_id` int(11) unsigned NOT NULL,
  `topic_id` int(11) unsigned NOT NULL,
  `state` enum('created','closed','reopened','assigned','transferred','overdue') NOT NULL,
  `staff` varchar(255) NOT NULL DEFAULT 'SYSTEM',
  `annulled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL,
  KEY `ticket_state` (`ticket_id`,`state`,`timestamp`),
  KEY `ticket_stats` (`timestamp`,`state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket_event`
--

LOCK TABLES `ost_ticket_event` WRITE;
/*!40000 ALTER TABLE `ost_ticket_event` DISABLE KEYS */;
INSERT INTO `ost_ticket_event` VALUES (1,0,0,1,1,'created','SYSTEM',0,'2015-12-01 09:25:04'),(1,1,0,1,1,'closed','t.besson',0,'2015-12-01 10:08:02'),(2,0,0,1,1,'created','SYSTEM',0,'2015-12-01 10:09:33'),(2,1,0,1,1,'closed','t.besson',0,'2015-12-01 10:12:43'),(3,0,0,1,10,'created','SYSTEM',0,'2016-01-04 16:01:18'),(3,1,0,1,10,'closed','t.besson',0,'2016-01-04 16:04:39'),(4,0,0,1,2,'created','SYSTEM',0,'2016-01-04 16:07:37'),(4,1,0,1,2,'closed','t.besson',0,'2016-01-04 16:08:36'),(5,0,0,1,10,'created','SYSTEM',0,'2016-01-07 14:53:24'),(6,0,0,1,2,'created','SYSTEM',0,'2016-01-07 14:53:54');
/*!40000 ALTER TABLE `ost_ticket_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket_lock`
--

DROP TABLE IF EXISTS `ost_ticket_lock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket_lock` (
  `lock_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(10) unsigned NOT NULL DEFAULT '0',
  `expire` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`lock_id`),
  UNIQUE KEY `ticket_id` (`ticket_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket_lock`
--

LOCK TABLES `ost_ticket_lock` WRITE;
/*!40000 ALTER TABLE `ost_ticket_lock` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_ticket_lock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket_priority`
--

DROP TABLE IF EXISTS `ost_ticket_priority`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket_priority` (
  `priority_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `priority` varchar(60) NOT NULL DEFAULT '',
  `priority_desc` varchar(30) NOT NULL DEFAULT '',
  `priority_color` varchar(7) NOT NULL DEFAULT '',
  `priority_urgency` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ispublic` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`priority_id`),
  UNIQUE KEY `priority` (`priority`),
  KEY `priority_urgency` (`priority_urgency`),
  KEY `ispublic` (`ispublic`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket_priority`
--

LOCK TABLES `ost_ticket_priority` WRITE;
/*!40000 ALTER TABLE `ost_ticket_priority` DISABLE KEYS */;
INSERT INTO `ost_ticket_priority` VALUES (1,'low','Basse','#DDFFDD',4,1),(2,'normal','Normale','#FFFFF0',3,1),(3,'high','Haute','#FEE7E7',2,1),(4,'emergency','Urgence','#FEE7E7',1,1);
/*!40000 ALTER TABLE `ost_ticket_priority` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket_status`
--

DROP TABLE IF EXISTS `ost_ticket_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL DEFAULT '',
  `state` varchar(16) DEFAULT NULL,
  `mode` int(11) unsigned NOT NULL DEFAULT '0',
  `flags` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `properties` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `state` (`state`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket_status`
--

LOCK TABLES `ost_ticket_status` WRITE;
/*!40000 ALTER TABLE `ost_ticket_status` DISABLE KEYS */;
INSERT INTO `ost_ticket_status` VALUES (1,'Ouvert','open',3,0,1,'{\"description\":\"Tickets ouverts.\"}','2015-12-01 09:25:03','0000-00-00 00:00:00'),(2,'RÃ©solu','resolved',3,0,2,'{\"description\":\"Les tickets r\\u00e9solus sont des tickets ferm\\u00e9s qui ne peuvent \\u00eatre r\\u00e9-ouverts que par l\'utilisateur final. Cela peut \\u00eatre utile lorsqu\'une t\\u00e2che automatique est utilis\\u00e9e pour fermer des tickets r\\u00e9solus avec l\'envoi d\'une notification \\u00e0 l\'utilisateur final.\"}','2015-12-01 09:25:03','0000-00-00 00:00:00'),(3,'FermÃ©','closed',3,0,3,'{\"description\":\"Les billets marqu\\u00e9s comme \\u00e9tant ferm\\u00e9s ne peuvent pas \\u00eatre r\\u00e9-ouverts par l\'utilisateur final. Les billets seront cependant toujours accessibles sur les panneaux client et \\u00e9quipe.\"}','2015-12-01 09:25:03','0000-00-00 00:00:00'),(4,'ArchivÃ©','archived',3,0,4,'{\"description\":\"Tickets accessibles uniquement par les administrateurs mais plus dans les listes de ticket.\"}','2015-12-01 09:25:03','0000-00-00 00:00:00'),(5,'SupprimÃ©','deleted',3,0,5,'{\"description\":\"Tickets en attente de suppression. Non accessible depuis les listes de Tickets.\"}','2015-12-01 09:25:03','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ost_ticket_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket_thread`
--

DROP TABLE IF EXISTS `ost_ticket_thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket_thread` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL DEFAULT '0',
  `ticket_id` int(11) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `thread_type` enum('M','R','N') NOT NULL,
  `poster` varchar(128) NOT NULL DEFAULT '',
  `source` varchar(32) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `body` mediumtext NOT NULL,
  `format` varchar(16) NOT NULL DEFAULT 'html',
  `ip_address` varchar(64) NOT NULL DEFAULT '',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ticket_id` (`ticket_id`),
  KEY `staff_id` (`staff_id`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket_thread`
--

LOCK TABLES `ost_ticket_thread` WRITE;
/*!40000 ALTER TABLE `ost_ticket_thread` DISABLE KEYS */;
INSERT INTO `ost_ticket_thread` VALUES (1,0,1,0,1,'M','Support osTicket','Web','osTicket a Ã©tÃ© installÃ©!',' <p> Merci d\'avoir choisi osTicket. </p> <p> Veuillez rejoidre les <a href=\"http://osticket.com/forums\"> forums d\'osTicket</a> et notre <a href=\"http://osticket.com/updates\"> liste de diffusion</a> afin de rester Ã  jour sur les derniÃ¨res nouvelles, les alertes de sÃ©curitÃ© et les mises Ã  jour. Les forums d\'osTicket sont Ã©galement un excellent endroit pour obtenir aide, conseils, astuces ou pour aider d\'autres utilisateurs d\'osTicket. Outre les forums, le wiki d\'osTicket fournit une collection utile du matÃ©riel pÃ©dagogique, documentation et notes de la communautÃ©. Nous accueillons vos contributions Ã  la communautÃ© d\'osTicket. </p> <p> Si vous Ãªtes Ã  la recherche d\'un meilleur niveau de support, nous fournissons des services professionnels et un support professionnel avec temps de rÃ©ponse garantis et l\'accÃ¨s Ã  l\'Ã©quipe de dÃ©veloppement de base. Nous pouvons Ã©galement vous aider Ã  personnaliser osTicket ou encore ajouter de nouvelles fonctionnalitÃ©s au systÃ¨me pour rÃ©pondre Ã  vos besoins uniques. </p> <p> Si l\'idÃ©e de la gestion et de la mise Ã  niveau de cette installation d\'osTicket est intimidante, vous pouvez essayer osTicket comme un service hÃ©bergÃ© Ã  <a href=\"http://www.supportsystem.com\"> http://www.supportsystem.com/</a> - aucune installation requise et nous pouvons importer vos donnÃ©es ! Avec l\'infrastructure clÃ© en main de SupportSystem, vous obtenez le meilleur d\'osTicket, vous laissant libre de vous concentrer sur vos clients sans la charge de veiller Ã  ce que l\'application soit stable, maintenue et sÃ»re. </p> <p>Cordialement,</p> <p>-<br /> L\'Ã©quipe osTicket http://osticket.com/</p> <p><strong>PS.</strong> Il ne faut pas juste faire des clients heureux, faites d\'heureux clients ! </p> ','html','::1','2015-12-01 09:25:04','0000-00-00 00:00:00'),(2,1,1,1,0,'R','Tristan Besson','','','osTicket est un systÃ¨me de ticket de support largement utilisÃ© et open-source. C\'est une alternative intÃ©ressante aux systÃ¨mes de support plus coÃ»teux et complexes - ses qualitÃ©s : simple, lÃ©ger, fiable, open-source, basÃ© sur le web, facile Ã  installer et Ã  utiliser.','html','::1','2015-12-01 10:08:02','0000-00-00 00:00:00'),(3,0,1,1,0,'N','Tristan Besson','','Statut modifiÃ©','Statut modifiÃ© de Ouvert vers FermÃ© par Tristan Besson','html','::1','2015-12-01 10:08:02','0000-00-00 00:00:00'),(4,0,2,0,2,'M','Tristan BESSON','','','Ceci est un test de ticketing','html','::1','2015-12-01 10:09:32','0000-00-00 00:00:00'),(5,4,2,1,0,'R','Tristan Besson','','','Bien recu !<br /><br /><blockquote>Ceci est un test de ticketing</blockquote> <br /> ','html','::1','2015-12-01 10:11:28','0000-00-00 00:00:00'),(6,0,2,1,0,'N','Tristan Besson','','Statut modifiÃ©','Statut modifiÃ© de Ouvert vers FermÃ© par Tristan Besson<hr />Ticket de test terminÃ©','html','::1','2015-12-01 10:12:43','0000-00-00 00:00:00'),(7,0,3,0,2,'M','Tristan BESSON','','','Au secours SOS<hr /> ','html','192.168.69.93','2016-01-04 16:01:15','0000-00-00 00:00:00'),(8,0,3,1,0,'N','Tristan Besson','','Il soÃ»le avec ses question','Il est un peu bÃªteÂ ','html','192.168.69.93','2016-01-04 16:04:03','0000-00-00 00:00:00'),(9,7,3,1,0,'R','Tristan Besson','','','C\'est corrigÃ© !','html','192.168.69.93','2016-01-04 16:04:39','0000-00-00 00:00:00'),(10,0,3,1,0,'N','Tristan Besson','','Statut modifiÃ©','Statut modifiÃ© de Ouvert vers FermÃ© par Tristan Besson','html','192.168.69.93','2016-01-04 16:04:39','0000-00-00 00:00:00'),(11,0,4,0,2,'M','Tristan BESSON','','','testt t','html','192.168.69.93','2016-01-04 16:07:34','0000-00-00 00:00:00'),(12,11,4,1,0,'R','Tristan Besson','','',' <br /><blockquote>testt t</blockquote> <br /> ','html','192.168.69.93','2016-01-04 16:08:36','0000-00-00 00:00:00'),(13,0,4,1,0,'N','Tristan Besson','','Statut modifiÃ©','Statut modifiÃ© de Ouvert vers FermÃ© par Tristan Besson','html','192.168.69.93','2016-01-04 16:08:36','0000-00-00 00:00:00'),(14,0,5,0,4,'M','Arnaud POUZOLS','','','bkalblablalbla','html','192.168.69.80','2016-01-07 14:53:21','0000-00-00 00:00:00'),(15,0,6,0,4,'M','Arnaud POUZOLS','','','test2','html','192.168.69.80','2016-01-07 14:53:51','0000-00-00 00:00:00'),(16,14,5,3,0,'R','super admin','','','Veuillez downgradÃ© votre version de windows !','html','192.168.69.93','2016-01-07 14:56:57','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ost_ticket_thread` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_timezone`
--

DROP TABLE IF EXISTS `ost_timezone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_timezone` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `offset` float(3,1) NOT NULL DEFAULT '0.0',
  `timezone` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_timezone`
--

LOCK TABLES `ost_timezone` WRITE;
/*!40000 ALTER TABLE `ost_timezone` DISABLE KEYS */;
INSERT INTO `ost_timezone` VALUES (1,-12.0,'Eniwetok, Kwajalein'),(2,-11.0,'Midway Island, Samoa'),(3,-10.0,'Hawaii'),(4,-9.0,'Alaska'),(5,-8.0,'Pacific Time (US & Canada)'),(6,-7.0,'Mountain Time (US & Canada)'),(7,-6.0,'Central Time (US & Canada), Mexico City'),(8,-5.0,'Eastern Time (US & Canada), Bogota, Lima'),(9,-4.0,'Atlantic Time (Canada), Caracas, La Paz'),(10,-3.5,'Newfoundland'),(11,-3.0,'Brazil, Buenos Aires, Georgetown'),(12,-2.0,'Mid-Atlantic'),(13,-1.0,'Azores, Cape Verde Islands'),(14,0.0,'Western Europe Time, London, Lisbon, Casablanca'),(15,1.0,'Brussels, Copenhagen, Madrid, Paris'),(16,2.0,'Kaliningrad, South Africa'),(17,3.0,'Baghdad, Riyadh, Moscow, St. Petersburg'),(18,3.5,'Tehran'),(19,4.0,'Abu Dhabi, Muscat, Baku, Tbilisi'),(20,4.5,'Kabul'),(21,5.0,'Ekaterinburg, Islamabad, Karachi, Tashkent'),(22,5.5,'Bombay, Calcutta, Madras, New Delhi'),(23,6.0,'Almaty, Dhaka, Colombo'),(24,7.0,'Bangkok, Hanoi, Jakarta'),(25,8.0,'Beijing, Perth, Singapore, Hong Kong'),(26,9.0,'Tokyo, Seoul, Osaka, Sapporo, Yakutsk'),(27,9.5,'Adelaide, Darwin'),(28,10.0,'Eastern Australia, Guam, Vladivostok'),(29,11.0,'Magadan, Solomon Islands, New Caledonia'),(30,12.0,'Auckland, Wellington, Fiji, Kamchatka');
/*!40000 ALTER TABLE `ost_timezone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_user`
--

DROP TABLE IF EXISTS `ost_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL,
  `default_email_id` int(10) NOT NULL,
  `status` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_user`
--

LOCK TABLES `ost_user` WRITE;
/*!40000 ALTER TABLE `ost_user` DISABLE KEYS */;
INSERT INTO `ost_user` VALUES (1,1,1,0,'Support osTicket','2015-12-01 09:25:04','2015-12-01 09:25:04'),(2,0,2,0,'Tristan BESSON','2015-12-01 09:36:22','2015-12-01 09:36:22'),(3,0,3,0,'Sylvain JUBEAU','2015-12-22 13:08:23','2015-12-22 13:08:23'),(4,0,4,0,'Arnaud POUZOLS','2016-01-07 14:52:55','2016-01-07 14:52:55');
/*!40000 ALTER TABLE `ost_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_user_account`
--

DROP TABLE IF EXISTS `ost_user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_user_account` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `status` int(11) unsigned NOT NULL DEFAULT '0',
  `timezone_id` int(11) NOT NULL DEFAULT '0',
  `dst` tinyint(1) NOT NULL DEFAULT '1',
  `lang` varchar(16) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `passwd` varchar(128) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `backend` varchar(32) DEFAULT NULL,
  `registered` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_user_account`
--

LOCK TABLES `ost_user_account` WRITE;
/*!40000 ALTER TABLE `ost_user_account` DISABLE KEYS */;
INSERT INTO `ost_user_account` VALUES (1,2,1,15,1,NULL,'t.besson',NULL,'ldap.client','2015-12-01 08:36:22'),(2,3,1,15,0,NULL,'s.jubeau',NULL,'ldap.client','2015-12-22 12:08:23'),(3,4,1,15,1,NULL,'a.pouzols',NULL,'ldap.client','2016-01-07 13:52:55');
/*!40000 ALTER TABLE `ost_user_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_user_email`
--

DROP TABLE IF EXISTS `ost_user_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_user_email` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `address` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `address` (`address`),
  KEY `user_email_lookup` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_user_email`
--

LOCK TABLES `ost_user_email` WRITE;
/*!40000 ALTER TABLE `ost_user_email` DISABLE KEYS */;
INSERT INTO `ost_user_email` VALUES (1,1,'support@osticket.com'),(2,2,'t.besson@groupe-nox.com'),(3,3,'s.jubeau@groupe-nox.com'),(4,4,'a.pouzols@groupe-nox.com');
/*!40000 ALTER TABLE `ost_user_email` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-08 14:43:09
