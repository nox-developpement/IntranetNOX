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
INSERT INTO `ost__search` VALUES ('H',1,'osTicket a été installé!','Merci d\'avoir choisi osTicket. Veuillez rejoidre les forums d\'osTicket et notre liste de diffusion afin de rester à jour sur les dernières nouvelles, les alertes de sécurité et les mises à jour. Les forums d\'osTicket sont également un excellent endroit pour obtenir aide, conseils, astuces ou pour aider d\'autres utilisateurs d\'osTicket. Outre les forums, le wiki d\'osTicket fournit une collection utile du matériel pédagogique, documentation et notes de la communauté. Nous accueillons vos contributions à la communauté d\'osTicket. Si vous êtes à la recherche d\'un meilleur niveau de support, nous fournissons des services professionnels et un support professionnel avec temps de réponse garantis et l\'accès à l\'équipe de développement de base. Nous pouvons également vous aider à personnaliser osTicket ou encore ajouter de nouvelles fonctionnalités au système pour répondre à vos besoins uniques. Si l\'idée de la gestion et de la mise à niveau de cette installation d\'osTicket est intimidante, vous pouvez essayer osTicket comme un service hébergé à http://www.supportsystem.com/ - aucune installation requise et nous pouvons importer vos données ! Avec l\'infrastructure clé en main de SupportSystem, vous obtenez le meilleur d\'osTicket, vous laissant libre de vous concentrer sur vos clients sans la charge de veiller à ce que l\'application soit stable, maintenue et sûre. Cordialement, - L\'équipe osTicket http://osticket.com/ PS. Il ne faut pas juste faire des clients heureux, faites d\'heureux clients !'),('H',2,'','osTicket est un système de ticket de support largement utilisé et open-source. C\'est une alternative intéressante aux systèmes de support plus coûteux et complexes - ses qualités : simple, léger, fiable, open-source, basé sur le web, facile à installer et à utiliser.'),('H',3,'Statut modifié','Statut modifié de Ouvert vers Fermé par Tristan Besson'),('H',4,'','Ceci est un test de ticketing'),('H',5,'','Bien recu ! Ceci est un test de ticketing'),('H',6,'Statut modifié','Statut modifié de Ouvert vers Fermé par Tristan Besson Ticket de test terminé'),('H',7,'','Au secours SOS'),('H',8,'Il soûle avec ses question','Il est un peu bête'),('H',9,'','C\'est corrigé !'),('H',10,'Statut modifié','Statut modifié de Ouvert vers Fermé par Tristan Besson'),('H',11,'','testt t'),('H',12,'','testt t'),('H',13,'Statut modifié','Statut modifié de Ouvert vers Fermé par Tristan Besson'),('H',14,'','bkalblablalbla'),('H',15,'','test2'),('H',16,'','Veuillez downgradé votre version de windows !'),('K',1,'Test question','testestestest'),('O',1,'osTicket','420 Desoto Street\nAlexandria, LA 71301\n(318) 290-3674\nhttp://osticket.com\nNon seulement nous développons le logiciel, nous l\'utilisons également pour gérer le support d\'osTicket. Laissez nous vous aider à rapidement mettre en place et tirer parti au maximum des fonctionnalités d\'osTicket. Contactez nous pour un accompagnement professionnel ou visitez notre site web pour accéder à la documentation et à l\'entraide communautaire.'),('T',1,'716347 osTicket a été installé!',''),('T',2,'491384 Test ticketing','Test ticketing'),('T',3,'331975 CA MARCHE PAS !','CA MARCHE PAS !'),('T',4,'627426 Test','Test'),('T',5,'410067 J\'ai windows 10 T_T','J\'ai windows 10 T_T'),('T',6,'575215 hohé test2','hohé test2'),('U',1,'Support osTicket','support@osticket.com'),('U',2,'Tristan BESSON',''),('U',3,'Sylvain JUBEAU',''),('U',4,'Arnaud POUZOLS','');
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
INSERT INTO `ost_canned_response` VALUES (1,0,1,'Qu\'est-ce que osTicket (exemple) ?','osTicket est un système de ticket de support largement utilisé et open-source. C\'est une alternative intéressante aux systèmes de support plus coûteux et complexes - ses qualités : simple, léger, fiable, open-source, basé sur le web, facile à installer et à utiliser.','en_US','','2015-12-01 09:25:04','2015-12-01 09:25:04'),(2,0,1,'Exemple (avec des variables)','Bonjour % {ticket.name.first}, <br /><br />Votre ticket #% {ticket.number} créé le % {ticket.create_date} est dans le département nommé \"% {ticket.dept.name}\".','en_US','','2015-12-01 09:25:04','2015-12-01 09:25:04');
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
INSERT INTO `ost_config` VALUES (1,'core','admin_email','helpdesk@groupe-nox.com','2016-01-08 13:29:12'),(2,'core','helpdesk_url','http://localhost/Symfony/web/support/','2015-12-01 08:25:04'),(3,'core','helpdesk_title','Support Groupe Nox','2015-12-01 08:25:04'),(4,'core','schema_signature','b26f29a6bb5dbb3510b057632182d138','2015-12-01 08:25:04'),(5,'dept.1','assign_members_only','','2015-12-01 08:25:03'),(6,'dept.2','assign_members_only','','2015-12-01 08:25:03'),(7,'dept.3','assign_members_only','','2015-12-01 08:25:03'),(8,'sla.1','transient','0','2015-12-01 08:25:03'),(9,'list.1','configuration','{\"handler\":\"TicketStatusList\"}','2015-12-01 08:25:03'),(10,'core','time_format',' H:i','2015-12-01 08:25:03'),(11,'core','date_format','d/m/Y','2015-12-01 08:25:03'),(12,'core','datetime_format','d/m/Y G:i','2015-12-01 08:25:03'),(13,'core','daydatetime_format','D, M j Y G:i','2015-12-01 08:25:03'),(14,'core','default_timezone_id','15','2015-12-01 08:25:03'),(15,'core','default_priority_id','2','2015-12-01 08:25:03'),(16,'core','enable_daylight_saving','0','2015-12-01 08:25:03'),(17,'core','reply_separator','--Répondre au-dessus de cette ligne--','2015-12-01 08:25:03'),(18,'core','allowed_filetypes','.doc, .pdf, .jpg, .jpeg, .gif, .png, .xls, .docx, .xlsx, .txt','2015-12-01 08:25:03'),(19,'core','isonline','1','2015-12-01 08:25:03'),(20,'core','staff_ip_binding','0','2015-12-01 08:25:03'),(21,'core','staff_max_logins','10','2015-12-01 09:04:48'),(22,'core','staff_login_timeout','2','2015-12-01 08:25:03'),(23,'core','staff_session_timeout','30','2015-12-01 08:25:03'),(24,'core','passwd_reset_period','0','2015-12-01 08:25:03'),(25,'core','client_max_logins','10','2015-12-01 09:04:48'),(26,'core','client_login_timeout','2','2015-12-01 08:25:03'),(27,'core','client_session_timeout','30','2015-12-01 08:25:03'),(28,'core','max_page_size','25','2015-12-01 08:25:03'),(29,'core','max_open_tickets','0','2015-12-01 08:25:03'),(30,'core','max_file_size','67108864','2015-12-01 08:55:57'),(31,'core','max_user_file_uploads','1','2015-12-01 08:25:03'),(32,'core','max_staff_file_uploads','1','2015-12-01 08:25:03'),(33,'core','autolock_minutes','3','2015-12-01 08:25:03'),(34,'core','default_smtp_id','0','2015-12-01 08:25:03'),(35,'core','use_email_priority','0','2015-12-01 08:25:03'),(36,'core','enable_kb','1','2015-12-01 09:05:23'),(37,'core','enable_premade','1','2015-12-01 08:25:03'),(38,'core','enable_captcha','0','2015-12-01 08:25:03'),(39,'core','enable_auto_cron','0','2015-12-01 08:25:03'),(40,'core','enable_mail_polling','1','2016-01-04 15:06:16'),(41,'core','send_sys_errors','0','2015-12-01 09:06:21'),(42,'core','send_sql_errors','1','2015-12-01 08:25:03'),(43,'core','send_login_errors','1','2015-12-01 08:25:03'),(44,'core','save_email_headers','1','2015-12-01 08:25:03'),(45,'core','strip_quoted_reply','1','2015-12-01 08:25:03'),(46,'core','ticket_autoresponder','0','2015-12-01 08:25:03'),(47,'core','message_autoresponder','0','2015-12-01 08:25:03'),(48,'core','ticket_notice_active','1','2015-12-01 08:25:03'),(49,'core','ticket_alert_active','1','2015-12-01 08:25:03'),(50,'core','ticket_alert_admin','0','2015-12-01 09:06:21'),(51,'core','ticket_alert_dept_manager','1','2015-12-01 08:25:03'),(52,'core','ticket_alert_dept_members','1','2015-12-01 09:06:21'),(53,'core','message_alert_active','1','2015-12-01 08:25:03'),(54,'core','message_alert_laststaff','1','2015-12-01 08:25:03'),(55,'core','message_alert_assigned','1','2015-12-01 08:25:03'),(56,'core','message_alert_dept_manager','0','2015-12-01 08:25:03'),(57,'core','note_alert_active','0','2015-12-01 08:25:03'),(58,'core','note_alert_laststaff','1','2015-12-01 08:25:03'),(59,'core','note_alert_assigned','1','2015-12-01 08:25:03'),(60,'core','note_alert_dept_manager','0','2015-12-01 08:25:03'),(61,'core','transfer_alert_active','0','2015-12-01 08:25:03'),(62,'core','transfer_alert_assigned','0','2015-12-01 08:25:03'),(63,'core','transfer_alert_dept_manager','1','2015-12-01 08:25:03'),(64,'core','transfer_alert_dept_members','0','2015-12-01 08:25:03'),(65,'core','overdue_alert_active','1','2015-12-01 08:25:03'),(66,'core','overdue_alert_assigned','1','2015-12-01 08:25:03'),(67,'core','overdue_alert_dept_manager','1','2015-12-01 08:25:03'),(68,'core','overdue_alert_dept_members','0','2015-12-01 08:25:03'),(69,'core','assigned_alert_active','1','2015-12-01 08:25:03'),(70,'core','assigned_alert_staff','1','2015-12-01 08:25:03'),(71,'core','assigned_alert_team_lead','0','2015-12-01 08:25:03'),(72,'core','assigned_alert_team_members','0','2015-12-01 08:25:03'),(73,'core','auto_claim_tickets','1','2015-12-01 08:25:04'),(74,'core','show_related_tickets','0','2015-12-01 08:55:57'),(75,'core','show_assigned_tickets','1','2015-12-01 08:25:04'),(76,'core','show_answered_tickets','0','2015-12-01 08:25:04'),(77,'core','hide_staff_name','0','2015-12-01 08:25:04'),(78,'core','overlimit_notice_active','0','2015-12-01 08:25:04'),(79,'core','email_attachments','1','2015-12-01 08:25:04'),(80,'core','number_format','######','2015-12-01 08:25:04'),(81,'core','sequence_id','0','2015-12-01 08:25:04'),(82,'core','log_level','2','2015-12-01 08:25:04'),(83,'core','log_graceperiod','12','2015-12-01 08:25:04'),(84,'core','client_registration','public','2015-12-01 08:25:04'),(85,'core','landing_page_id','1','2015-12-01 08:25:04'),(86,'core','thank-you_page_id','2','2015-12-01 08:25:04'),(87,'core','offline_page_id','3','2015-12-01 08:25:04'),(88,'core','system_language','fr','2015-12-01 08:25:04'),(89,'mysqlsearch','reindex','0','2015-12-01 08:25:57'),(90,'core','default_email_id','3','2016-01-04 15:06:16'),(91,'core','alert_email_id','0','2016-01-08 13:29:12'),(92,'core','default_dept_id','1','2015-12-01 08:25:04'),(93,'core','default_sla_id','1','2015-12-01 08:25:04'),(94,'core','default_template_id','1','2015-12-01 08:25:04'),(95,'plugin.1','msad','','2015-12-01 08:33:58'),(96,'plugin.1','domain','nox.local','2015-12-01 08:33:58'),(97,'plugin.1','dns','192.168.35.10','2015-12-01 08:33:58'),(98,'plugin.1','ldap','','2015-12-01 08:33:58'),(99,'plugin.1','servers','SRV-NOX.nox.local','2015-12-01 08:33:58'),(100,'plugin.1','tls','0','2015-12-01 08:33:58'),(101,'plugin.1','conn_info','','2015-12-01 08:33:58'),(102,'plugin.1','bind_dn','DC=nox,DC=local','2015-12-01 08:33:58'),(103,'plugin.1','bind_pw','','2015-12-01 08:33:58'),(104,'plugin.1','search_base','DC=nox,DC=local','2015-12-01 08:33:58'),(105,'plugin.1','schema','{\"msad\":\"Microsoft\\u00ae Active Directory\"}','2015-12-01 08:33:58'),(106,'plugin.1','auth','','2015-12-01 08:33:58'),(107,'plugin.1','auth-staff','1','2015-12-01 08:33:58'),(108,'plugin.1','auth-client','1','2015-12-01 08:33:58'),(109,'core','client_logo_id','4','2015-12-01 09:25:06'),(110,'core','staff_logo_id','4','2015-12-01 09:25:06'),(111,'core','default_help_topic','0','2015-12-01 08:55:57'),(112,'core','default_ticket_status_id','1','2015-12-01 08:55:57'),(113,'core','enable_html_thread','1','2015-12-01 08:55:57'),(114,'core','allow_client_updates','0','2015-12-01 08:55:57'),(115,'core','allow_pw_reset','1','2015-12-01 09:04:48'),(116,'core','pw_reset_window','30','2015-12-01 09:04:48'),(117,'core','clients_only','1','2015-12-01 09:04:48'),(118,'core','client_verify_email','1','2015-12-01 09:04:48'),(119,'core','restrict_kb','0','2015-12-01 09:05:23'),(120,'core','ticket_alert_acct_manager','1','2015-12-01 09:06:21'),(121,'core','message_alert_acct_manager','0','2015-12-01 09:06:21'),(122,'pwreset','5T7F_YA5qcZ8L63l3KA5YnJNQLvevFXUN3TzIYCN=8PIoH0f','2','2016-01-04 12:50:24'),(123,'core','verify_email_addrs','1','2016-01-04 15:06:16'),(124,'core','accept_unregistered_email','1','2016-01-04 15:06:16'),(125,'core','add_email_collabs','1','2016-01-04 15:06:16');
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
INSERT INTO `ost_content` VALUES (1,1,1,'landing','Page d’accueil','<h1>Bienvenue au centre de Support</h1>\n<p>\nAfin de simplifier les demandes de support et de mieux vous servir, nous\nutilisons un système de gestion de ticket. A chaque demande de support\nest attribué un numéro de ticket unique vous permettant de suivre en\nligne sa progression et les réponses apportées. Pour votre information,\nnous fournissons des archives et un historique complet de toutes vos\ndemandes de support. Une adresse e-mail valide est nécessaire pour\nsoumettre un ticket.\n</p>','fr','La page d’accueil se réfère au contenu de la vue initiale du Portail client. Le modèle modifie le contenu vu au dessus des deux liens <strong>Ouvrir un nouveau ticket</strong> et <strong> Verifier le status d\'un ticket</strong>.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(2,2,1,'thank-you','Merci','<div>%{ticket.name},\n<br>\n<br>\nMerci de nous avoir contacté.\n<br>\n<br>\nUne demande de ticket de support a été créée. Un membre de l\'équipe support\nvous contactera sous peu si nécessaire.\n</p>\n<br><br>\nL\'équipe support </div>','fr','La page de remerciement est affichée sur le portail client quand un utilisateur crée un nouveau ticket via le portail client.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(3,3,1,'offline','Hors-ligne','<div><h1> <span style=\"font-size: medium\">  Support hors Ligne</span></h1> <p>Merci d\'utiliser notre outil de support.</p> <p>Notre helpdesk est actuellement hors ligne . Veuillez réessayer ultérieurement.</p> </div>','fr','La page hors connexion s\'affiche dans le portail client lorsque le support d\'assistance est hors connexion.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(4,4,1,'registration-staff','Bienvenue sur osTicket','<h3><strong>Bonjour %{recipient.name.first},</strong></h3> <div>Nous vous avons créé un compte sur notre support d\'assistance & l\'adresse %{url}.<br/><br/> Veuillez suivre le lien ci-dessous pour confirmer votre compte et accédez à vos billets. <br/><br/><a href=\"%{link}\">%{link}</a><br/><br/><em style=\"font-size: small\">Votre système d\'assistance<br/> %{company.name}</em></div>','fr','Ce modèle définit le courriel initial (facultatif) transmis aux Agents lorsqu\'un compte est créé en leur nom.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(5,5,1,'pwreset-staff','Réinitialisation du mot de passe pour le personnel d\'osTicket','<h3><strong>Bonjour %{staff.name.first},</strong></h3> <div>Une demande de réinitialisation de mot de passe a été soumise à votre place pour le service d\'assistance à %{url}. <br /><br />Si vous pensez que cela a été fait par erreur, supprimez et ignorer ce mail. Votre compte est toujours sécurisé et personne n\'y a eu accès. Il n\'est pas verrouillé et votre mot de passe n\'a pas été réinitialisé. Quelqu\'un pourrait avoir par erreur entré votre courriel. <br /><br />Suivez le lien ci-dessous pour vous connecter au support d\'assistance et changer votre mot de passe. <br/><br/><a href=\"%{link}\">%{link}</a><br/><br/><em style=\"font-size: small\">amicalement, votre système de Support</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width: 126px\" /></div>','fr','Ce modèle définit le courriel envoyé aux employés qui choisissent le lien <strong>J\'ai oublié mon mot de passe</strong> sur la page de connexion du personnel.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(6,6,1,'banner-staff','Authentification requise','','fr','Ceci est la bannière et le message initial montré sur la page de connexion de l’équipe. Le premier champ entré fait référence au texte en rouge qui apparaît en haut. Le composant texte est pour créer le contenu de la bannière qui servira d\'avertissement.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(7,7,1,'registration-client','Bienvenue sur %{company.name}','<h3><strong>Bonjour %{recipient.name.first},</strong></h3> <div>Nous vous avons créé un compte sur notre support d\'assistance à l\'adresse %{url}.<br/><br/>Veuillez suivre le lien ci-dessous pour confirmer votre compte et accéder à vos billets. <br/><br/><a href=\"%{link}\">%{link}</a><br/><br/><em style=\"font-size: small\">Cordialement <br />%{company.name}</em></div>','fr','Ce modèle définit le courriel envoyé aux clients lorsque leur compte a été créé dans le portail client ou par un agent à leur place. Ce courriel permet la vérification de cette adresse. Merci d\'utiliser %{link} quelque part dans le corps de ce modèle.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(8,8,1,'pwreset-client','%{company.name} Accès au support d\'assistance','<h3><strong>Bonjour %{user.name.first},</strong></h3><div> Une demande de réinitialisation de mot de passe a été faite à votre place pour le service d\'assistance à %{url}.<br/><br/>Si vous pensez que cela a été fait par erreur,  veuillez supprimer et ignorer ce message. Votre compte est toujours sécurisé et personne n\'y a eu accès. Il n\'est pas verrouillé et votre mot de passe n\'a pas été réinitialisé. Quelqu\'un pourrait avoir entré votre courriel par erreur. <br/><br/>Suivez le lien ci-dessous pour vous connecter au support d\'assistance et changer votre mot de passe. <br/><br/><a href=\"%{link}\">%{link}</a><br/><br/><em style=\"font-size: small\">Amicalement, votre système d\'assistance <br/>%{company.name}</em></div>','fr','Ce modèle définit le courriel envoyé aux Clients qui cliquent sur le lien <strong>J\'ai oublié mon mot de passe</strong> sur la page de connexion du Client.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(9,9,1,'banner-client','Connectez-vous à %{company.name}','Afin de pouvoir mieux les servir, nous encourageons nos Clients à ouvrir un compte.','fr','Ceci compose l\'en-tête de la page de connexion du Client. Ceci peut être utile pour informer vos clients sur vos politiques d\'enregistrement et de connexions.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(10,10,1,'registration-confirm','Enregistrement d\'un compte','<div><strong>Merci pour l\'ouverture d\'un compte.</strong><br/><br />Nous venons juste de vous envoyer un courriel à l\'adresse que vous avez entré. Veuillez suivre ce lien pour confirmer votre compte et accédez à vos billets.</div>','fr','Ces modèles définissent la page présentée aux Clients après avoir terminé le formulaire d\'inscription. Le modèle devrait mentionner que le système leur envoie un lien de confirmation par courriel et quelle est la prochaine étape dans le processus d\'inscription.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(11,11,1,'registration-thanks','Compte confirmé!','<div><strong>Merci pour la création d\'un compte.</strong><br/><br/>Vous avez confirmé votre courriel et activé votre compte. Vous pouvez désormais ouvrir un nouveau billet ou gérer les billets existants. <br/><br/><em>Votre centre d\'assistance</em><br/> %{company.name}</div>','fr','Ce modèle définit le contenu affiché quand des clients s\'inscrivent avec succès en confirmant leur compte. Cette page doit informer l\'utilisateur que l\'inscription est terminée et que le client peut maintenant soumettre un ticket ou accéder des tickets existants.','2015-12-01 09:25:04','2015-12-01 09:25:04'),(12,12,1,'access-link','Lien d\'accès billet [#%{ticket.number}]','<h3><strong>Bonjour %{recipient.name.first},</strong></h3> <div>Une demande de lien  pour le billet #%{ticket.number} a été faite à votre place pour le service d\'assistance sur %{url}.<br/><br/> suivez le lien ci-dessous pour vérifier l\'état du billet #%{ticket.number}.<br/><br/><a href=\"%{recipient.ticket_link}\">%{recipient.ticket_link}</a><br/><br/>si vous <strong>n\'avez pas</strong> fait la demande, veuillez supprimer et ignorer ce courriel. Votre compte est toujours sécurisé et personne n\'a eu accès aux billets. Un tiers pourrait avoir entré par erreur votre courriel. <br/><br/>--<br/> %{company.name}</div>','fr','Ce modèle définit la notification qui est envoyée aux clients les prévenant qu\'un lien d\'accès a été envoyé à leur courriel. Le numéro de ticket et le courriel créent le lien d\'accès.','2015-12-01 09:25:04','2015-12-01 09:25:04');
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
INSERT INTO `ost_department` VALUES (1,0,0,0,0,0,'Support','Service support',1,1,1,1,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,0,1,0,0,0,'Ventes','Vente et fidélisation du client',1,1,1,1,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(3,0,0,0,0,0,'Maintenance','Service maintenance',0,0,1,1,'2015-12-01 09:25:03','2015-12-01 09:25:03');
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
INSERT INTO `ost_draft` VALUES (2,1,'page.1',' <h1>Bienvenue au centre de Support</h1> Afin de simplifier les demandes de support et de mieux vous servir, nous utilisons un système de gestion de ticket. A chaque demande de support est attribué un numéro de ticket unique vous permettant de suivre en ligne sa progression et les réponses apportées. Pour votre information, nous fournissons des archives et un historique complet de toutes vos demandes de support. Une adresse e-mail valide est nécessaire pour soumettre un ticket. <br /> ',NULL,'2015-12-01 09:06:38','2015-12-01 09:06:48'),(3,3,'ticket.client.ildfo7s86b92','',NULL,'2015-12-22 12:08:25',NULL),(4,3,'ticket.client.sb7a1ksrlgs0','',NULL,'2015-12-22 12:32:36',NULL),(5,2,'tpl.note.alert.1',' <h3><strong>Bonjour %{recipient.name},</strong></h3> Un agent à posté une note interne sur le ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{note.poster} </td> </tr> <tr> <td> <strong>Titre</strong>: </td> <td> %{note.title} </td> </tr> </tbody></table> <br /> %{note.message} <br /><br /><hr /> Pour voir/répondre au ticket, merci de vous <a href=\"%%7Bticket.staff_link%7D\">connecter</a> au support <br /><br /><em>L\'équipe du support</em> <br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2015-12-22 12:53:06','2015-12-22 12:53:16'),(6,2,'tpl.message.alert.1',' <h3><strong>Bonjour %{recipient},</strong></h3> Nouveau message ajouté au ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{ticket.name} &lt;%{ticket.email}&gt; </td> </tr> <tr> <td> <strong>Département</strong>: </td> <td> %{ticket.dept.name} </td> </tr> </tbody></table> <br /> %{message} <br /><br /><hr /> <div>Pour visualiser ou répondre au ticket, merci de vous <a href=\"%%7Bticket.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">connecter</span></a> au système de support par ticket</div> <em style=\"color:rgb(127, 127, 127)\">Votre Système de Support Client dévoué</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"23\" style=\"width:126px\" /> ',NULL,'2015-12-22 12:53:12','2015-12-22 12:53:22'),(7,2,'ticket.response.2','Bonjour % {ticket.name.first}, <br /><br />Votre ticket #% {ticket.number} créé le % {ticket.create_date} est dans le département nommé \"% {ticket.dept.name}\".',NULL,'2015-12-22 12:54:16','2015-12-22 12:54:26'),(8,2,'ticket.note.2','',NULL,'2015-12-22 12:54:16','2015-12-22 12:54:26'),(9,2,'ticket.client.ih8a0soa0sh3','',NULL,'2015-12-22 13:05:15',NULL),(10,3,'ticket.client.7rj92cnvt003','',NULL,'2015-12-22 13:07:05',NULL),(11,3,'ticket.client.1b09tu8ltgi4','',NULL,'2015-12-22 13:08:14','2015-12-22 13:08:24'),(12,1,'ticket.response.1','',NULL,'2016-01-04 12:48:48','2016-01-04 12:48:58'),(13,1,'ticket.note.1','',NULL,'2016-01-04 12:48:48','2016-01-04 12:48:58'),(19,1,'ticket.response.3','',NULL,'2016-01-04 15:04:48','2016-01-04 15:04:57'),(20,1,'ticket.note.3','',NULL,'2016-01-04 15:04:48','2016-01-04 15:04:58'),(27,4,'ticket.client.5','',NULL,'2016-01-07 13:53:29','2016-01-08 08:38:12'),(29,4,'ticket.client.6','',NULL,'2016-01-07 13:53:55',NULL),(31,3,'ticket.note.5','',NULL,'2016-01-07 13:56:32','2016-01-07 13:58:21'),(32,3,'ticket.response.5','',NULL,'2016-01-07 13:57:42','2016-01-07 13:58:21'),(33,1,'ticket.response.6','',NULL,'2016-01-08 13:15:29',NULL),(34,1,'ticket.note.6','',NULL,'2016-01-08 13:15:29',NULL);
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
INSERT INTO `ost_email_template` VALUES (1,1,'ticket.autoresp','Billet ouvert [#%{ticket.number}]',' <h3><strong>Cher %{recipient.name.first},</strong></h3> <p>Une demande d\'assistance a été créée et affectée au billet #%{ticket.number}. Un membre de l’équipe se rapproche de vous dès que possible. Vous pouvez <a href=\"%%7Brecipient.ticket_link%7D\"> suivre la progression de ce billet en ligne</a>. </p> <br /><div style=\"color:rgb(127, 127, 127)\"> L’équipe de %{company.name} , <br />%{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small\"> <em>Si vous désirez ajouter des commentaires ou des informations supplémentaires au sujet de ce billet, répondez simplement à ce courriel ou <a href=\"%%7Brecipient.ticket_link%7D\"> <span style=\"color:rgb(84, 141, 212)\"> connectez-vous à votre compte</span></a> pour visualiser les archives de vos demandes de support.</em> </div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(2,1,'ticket.autoreply','Re: %{ticket.subject} [#%{ticket.number}]',' <h3><strong>Cher %{recipient.name.first}</strong></h3> Une demande de support a été créé et un billet a été assigné <a href=\"%%7Brecipient.ticket_link%7D\">%{ticket.number}\"&gt;</a> avec la réponse automatique suivante <br /><br /> Rubrique: <strong>%{ticket.topic.name}</strong> <br /> Sujet: <strong>%{ticket.subject}</strong> <br /><br /> %{response} <br /><br /><div style=\"color:rgb(127, 127, 127)\"> Votre équipe %{company.name}<br /> %{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small\"><em>Nous espérons que cette réponse a suffisamment répondu à votre question. Si vous désirez rajouter des commentaires ou donner de plus amples informations, merci de répondre à ce courriel ou <a href=\"%%7Brecipient.ticket_link%7D\"><span style=\"color:rgb(84, 141, 212)\">connectez-vous à votre compte</span></a> pour visualiser les archives de vos demandes.</em></div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(3,1,'message.autoresp','Confirmation de Message',' <h3><strong>Cher %{recipient.name.first},</strong></h3> Votre réponse à la demande de service d\'assistance <a href=\"%%7Brecipient.ticket_link%7D\">#%{ticket.number}</a> a été prise en compte.<br /><br /><div style=\"color:rgb(127, 127, 127)\"> Votre équipe %{company.name}, <br />%{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small;text-align:center\"> <em>Vous pouvez visualiser, en ligne, l\'avancement de votre demande en cliquant <a href=\"%%7Brecipient.ticket_link%7D\">ici</a></em> </div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(4,1,'ticket.notice','%{ticket.subject} [#%{ticket.number}]',' <h3><strong>Cher %{recipient.name.first},</strong></h3> Notre service client a créé un billet, <a href=\"%%7Brecipient.ticket_link%7D\"> #%{ticket.number}</a> à votre nom, avec les détails suivants : <br /><br />rubrique: <strong>%{ticket.topic.name}</strong> <br />sujet: <strong>%{ticket.subject}</strong> <br /><br />%{message} <br /><br />Si nécessaire, un membre de notre équipe se rapproche de vous dès que possible. Vous pouvez également <a href=\"%%7Brecipient.ticket_link%7D\"> suivre l\'avancement de ce billet en ligne</a>. <br /><br /><div style=\"color:rgb(127, 127, 127)\"> L\'equipe de %{company.name} , <br />%{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small\"> <em>si vous souhaitez fournir des commentaires ou des informations supplémentaires au sujet de ce ticket, répondez simplement à cet email ou <a href=\"%%7Brecipient.ticket_link%7D\"> <span style=\"color:rgb(84, 141, 212)\"> connectez-vous à votre compte</span></a> pour visualiser les archives complètes de vos demandes de support.</em> </div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(5,1,'ticket.overlimit','Limite du nombre de Billets ouverts atteinte',' <h3><strong>Cher %{ticket.name.first},</strong></h3> Vous avez atteint le nombre maximal de billets ouverts autorisés. Pour être en mesure d\'ouvrir un autre billet, l\'un de vos billets en attente doit être fermé. Pour mettre à jour ou ajouter des commentaires à un billets, <a href=\"%%7Burl%7D/tickets.php?e=%%7Bticket.email%7D\"> connectez vous simplement à notre support</a>. <br /><br />Merci, <br /> l\'équipe support',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(6,1,'ticket.reply','Re: %{ticket.subject}',' <h3><strong>Cher %{recipient.name},</strong></h3> %{response} <br /><br /><div style=\"color:rgb(127, 127, 127)\"> L’équipe %{company.name}, <br />%{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small;text-align:center\"> <em>Nous espérons que cette réponse a suffisamment répondu à votre question. Si ce n\'est pas le cas, veuillez ne pas envoyer un autre courriel. Au contraire, répondez à ce courriel ou <a href=\"%%7Brecipient.ticket_link%7D\" style=\"color:rgb(84, 141, 212)\"> Connectez-vous à votre compte</a> pour visualiser les archives complètes de toutes vos demandes de support et les réponses associées.</em> </div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(7,1,'ticket.activity.notice','Re: %{ticket.subject} [#%{ticket.number}]',' <h3><strong>Cher %{recipient.name.first},</strong></h3> <div> <em>%{poster.name}</em>vient juste d\'ajouter un message à un billet auquel vous participez.</div> <br />%{message} <br /><br /><hr /> <div style=\"color:rgb(127, 127, 127);font-size:small;text-align:center\"> <em>Vous recevez ce courriel parce que vous collaborez avec ce billet <a href=\"%%7Brecipient.ticket_link%7D\" style=\"color:rgb(84, 141, 212)\">#%{ticket.number}</a>. Pour participer, répondez simplement à ce courriel ou <a href=\"%%7Brecipient.ticket_link%7D\" style=\"color:rgb(84, 141, 212)\"> cliquez ici</a> pour voir l\'historique complet de ce billet.</em> </div> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(8,1,'ticket.alert','Alerte : Nouveau ticket',' <h2>Bonjour %{recipient},</h2> Nouveau ticket #%{ticket.number} créé <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{ticket.name} &lt;%{ticket.email}&gt; </td> </tr> <tr> <td> <strong>Département</strong>: </td> <td> %{ticket.dept.name} </td> </tr> </tbody></table> <br /> %{message} <br /><br /><hr /> <div>Pour voir ou répondre au ticket merci de vous <a href=\"%%7Bticket.staff_link%7D\">connecter</a>dans le support</div> <em style=\"font-size:small\">Amicalement le Support client</em> <br /><a href=\"http://osticket.com/\"><img width=\"126\" height=\"19\" style=\"width:126px\" alt=\"Powered By osTicket\" src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" /></a> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(9,1,'message.alert','Alerte de Nouveau Message',' <h3><strong>Bonjour %{recipient},</strong></h3> Nouveau message ajouté au ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{ticket.name} &lt;%{ticket.email}&gt; </td> </tr> <tr> <td> <strong>Département</strong>: </td> <td> %{ticket.dept.name} </td> </tr> </tbody></table> <br /> %{message} <br /><br /><hr /> <div>Pour visualiser ou répondre au ticket, merci de vous <a href=\"%%7Bticket.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">connecter</span></a> au système de support par ticket</div> <em style=\"color:rgb(127,127,127);font-size:small\">Votre Système de Support Client dévoué</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(10,1,'note.alert','Alerte d\'une nouvelle activité interne',' <h3><strong>Bonjour %{recipient.name},</strong></h3> Un agent à posté une note interne sur le ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{note.poster} </td> </tr> <tr> <td> <strong>Titre</strong>: </td> <td> %{note.title} </td> </tr> </tbody></table> <br /> %{note.message} <br /><br /><hr /> Pour voir/répondre au ticket, merci de vous <a href=\"%%7Bticket.staff_link%7D\">connecter</a> au support <br /><br /><em style=\"font-size:small\">L\'équipe du support</em> <br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(11,1,'assigned.alert','Un ticket vous a été assigné',' <h3><strong>Bonjour %{assignee.name.first},</strong></h3> Le ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> vous a été assigné par %{assigner.name.short} <br /><br /><table><tbody> <tr> <td> <strong>De</strong>: </td> <td> %{ticket.name} &lt;%{ticket.email}&gt; </td> </tr> <tr> <td> <strong>Sujet</strong>: </td> <td> %{ticket.subject} </td> </tr> </tbody></table> <br /> %{comments} <br /><br /><hr /> <div>Pour voir/répondre au ticket, merci de vous <a href=\"%%7Bticket.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">identifier </span></a> dans le système de support</div> <em style=\"font-size:small\">Votre système de support client</em> <br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(12,1,'transfer.alert','Transfert de ticket #% {ticket.number} - % {ticket.dept.name}',' <h3>Bonjour %{recipient.name},</h3> Le billet <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> a été transféré au service %{ticket.dept.name} par <strong>%{staff.name.short}</strong> <br /><br /><blockquote> %{comments} </blockquote> <hr /> <div>Pour voir ou répondre au billet, merci de vous <a href=\"%%7Bticket.staff_link%7D\">connecter</a> au le support. </div> <em style=\"font-size:small\">Cordialement, le service d\'assistance</em> <br /><a href=\"http://osticket.com/\"><img width=\"126\" height=\"19\" alt=\"Powered By osTicket\" style=\"width:126px\" src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" /></a> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04'),(13,1,'ticket.overdue','Alerte : Ticket obsolètes',' <h3> <strong>Bonjour %{recipient.name}</strong>,</h3> Un billet, <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> est très en retard. <br /><br />Nous devrions tous travailler dur pour garantir que tous les billets soient traité dans les délais. <br /><br />Signé, <br />%{ticket.dept.manager.name} <hr /> <div>Pour visualiser ou réagir au billet, <a href=\"%%7Bticket.staff_link%7D\"> <span style=\"color:rgb(84, 141, 212)\"> Connectez-vous</span></a> au système de support. Vous recevez cet avis parce que le billet vous est personnellement affecté, à une équipe ou à un service dont vous êtes membre.</div> <em style=\"font-size:small\">Cordialement, <span style=\"font-size:smaller\">(même si notre patience a une limite)</span> le support client</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" height=\"19\" alt=\"Powered by osTicket\" width=\"126\" style=\"width:126px\" /> ',NULL,'2015-12-01 09:25:04','2015-12-01 09:25:04');
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
INSERT INTO `ost_email_template_group` VALUES (1,1,'Modèle osTicket par défaut (HTML','fr','Modèles osTicket par défaut','2015-12-01 09:25:04','2015-12-01 08:25:04');
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
INSERT INTO `ost_file_chunk` VALUES (1,0,'�PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0�\0\0\0(\0\0\0�G��\0\0\nCiCCPICC profile\0\0xڝSwX��>��eVB��l�\0\"#��Y��\0a�@Ņ�\nV�HUĂ�\nH���(�gA��Z�U\\8�ܧ�}z�����������y��&��j\09R�<:��OH�ɽ�H� ���g�\0\0�yx~t�?��o\0\0p�.$�����P&W\0 �\0�\"��R\0�.T�\0�\0�S�d\n\0�\0\0ly|B\"\0�\r\0��I>\0ة��\0آ�\0�\0�(G$@�\0`U�R,��\0��@\".���Y�2G��\0v�X�@`\0��B,�\0 8\0C� L�0ҿ�_p��H\0�˕͗K�3���\Zw����!��l�Ba)f	�\"���#H�L�\0\0\Z����8?������f�l��Ţ�k�o\">!�����\0N���_���p��u�k�[\0�V\0h��]3�	�Z\n�z��y8�@��P�<\n�%b��0�>�3�o��~��@��z�\0q�@������qanv�R���B1n��#�ǅ��)��4�\\,��X��P\"M�y�R�D!ɕ��2���	�w\r\0��O�N���l�~��X�v\0@~�-�\Z�\0g42y�\0\0����@+\0͗��\0\0��\\��L�\0\0D��*�A�������aD@$�<B�\n��AT�:���\Z�����18\r��\\��p`����	A�a!:�b��\"���\"aH4��� �Q\"��r��Bj�]H#�-r9�\\@���� 2����G1���Q�u@��\Z�Ơs�t4]���k�\Z�=�����K�ut\0}��c��1f��a\\��E`�X\Z&�c�X5V�5cX7v��a�$���^��l���GXLXC�%�#��W	��1�\'\"��O�%z��xb:��XF�&�!!�%^\'_�H$ɒ�N\n!%�2IIkH�H-�S�>�i�L&�m������ �����O�����:ň�L	�$R��J5e?���2B���Qͩ����:�ZIm�vP/S��4u�%͛Cˤ-��Кigi�h/�t�	݃E�З�k�����w\r�\r��Hb(k{��/�L�ӗ��T0�2�g��oUX*�*|���:�V�~��TUsU?�y�T�U�^V}�FU�P�	��թU��6��RwR�P�Q_��_���c\r���F��H�Tc���!�2e�XB�rV�,k�Mb[���Lv�v/{LSCs�f�f�f��q�Ʊ��9ٜJ�!�\r�{--?-��j�f�~�7�zھ�b�r�����up�@�,��:m:�u	�6�Q����u��>�c�y�	������G�m��������7046�l18c�̐c�k�i������h���h��I�\'�&�g�5x>f�ob�4�e�k<abi2ۤĤ��)͔k�f�Ѵ�t���,ܬج��9՜k�a�ټ�����E��J�6�ǖږ|��M����V>VyV�V׬I�\\�,�m�WlPW��:�˶�����v�m���)�)�Sn�1���\n���9�a�%�m����;t;|rtu�vlp���4éĩ��Wgg�s��5�K���v�Sm���n�z˕�\Z�ҵ������ܭ�m���=�}��M.��]�=�A���X�q�㝧�����/^v^Y^��O��&��0m���[��{`:>=e���>�>�z�����\"�=�#~�~�~���;�������y��N`����\Z��k��5��/>B	\rYr�o���c3�g,����Z�0�&L�����~o��L�̶��Gl��i��})*2�.�Q�Stqt�,֬�Y�g��񏩌�;�j�rvg�jlRlc웸�����x��E�t$	�����=��s�l�3��T�tc��ܢ����˞w<Y5Y�|8����?� BP/O�nM򄛅OE����Q���J<��V��8�;}C�h�OFu�3	OR+y���#�MVD�ެ��q�-9�����R\ri��+�0�(�Of++�\r�y�m������#�s��l�Lѣ�R�PL/�+x[[x�H�HZ�3�f���#�|���P���ظxY��\"�E�#�Sw.1]R�dxi��}�h˲��P�XRU�jy��R�ҥ�C+�W4�����n��Z�ca�dU�j��[V*�_�p�����F���WN_�|�ym���J����H��n��Y��J�jA�І�\r���_mJ�t�zj��ʹ���5a5�[̶���6��z�]�V������&�ֿ�w{��;��켵+xWk�E}�n��ݏ\Zb���~ݸGwOŞ�{�{�E��jtolܯ���	mR6�H:p囀oڛ�w�pZ*�A��\'ߦ|{�P������ߙ���Hy+�:�u�-�m�=���茣�^G���~�1�cu�5�W���(=��䂓�d���N?=ԙ�y�L��k]Q]�gCϞ?t�L�_�����]�p�\"�b�%�K�=�=G~p��H�[o�e���W<�t�M�;����j��s���.]�y�����n&��%���v��w\n�L�]z�x�����������e�m��`�`��Y�	�����Ӈ��G�G�#F#���\r\Z��dΓ᧲���~V�y�s������K�X�����Ͽ�y��r﫩�:�#���y=�����}���ǽ�(�@�P���cǧ�O�>�|��/�����9%\0\0\0tEXtSoftware\0Adobe ImageReadyq�e<\0\0(iTXtXML:com.adobe.xmp\0\0\0\0\0<?xpacket begin=\"﻿\" id=\"W5M0MpCehiHzreSzNTczkc9d\"?> <x:xmpmeta xmlns:x=\"adobe:ns:meta/\" x:xmptk=\"Adobe XMP Core 5.6-c014 79.156797, 2014/08/20-09:53:02        \"> <rdf:RDF xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\"> <rdf:Description rdf:about=\"\" xmlns:xmp=\"http://ns.adobe.com/xap/1.0/\" xmlns:xmpMM=\"http://ns.adobe.com/xap/1.0/mm/\" xmlns:stRef=\"http://ns.adobe.com/xap/1.0/sType/ResourceRef#\" xmp:CreatorTool=\"Adobe Photoshop CC 2014 (Macintosh)\" xmpMM:InstanceID=\"xmp.iid:6E2C95DEA67311E4BDCDDF91FAF94DA5\" xmpMM:DocumentID=\"xmp.did:6E2C95DFA67311E4BDCDDF91FAF94DA5\"> <xmpMM:DerivedFrom stRef:instanceID=\"xmp.iid:CFA74E4FA67111E4BDCDDF91FAF94DA5\" stRef:documentID=\"xmp.did:CFA74E50A67111E4BDCDDF91FAF94DA5\"/> </rdf:Description> </rdf:RDF> </x:xmpmeta> <?xpacket end=\"r\"?>����\0\0IDATx��]	�S��?/{2�df�aq�]67�ϭ(*�-\n��.�+�օ� n�J���S�R��:VDT�,e�2�l�����3��L���ݛ�os�N��Pq���$���������s�1�NY96��t����S�/Q��]k~K����z���>�%4ߤ�5���<��,��clmY������\'��B�h���B�LZ��M?���\0]s�G�>���Z(4W�]h\r\"Ҿ&F4�]���?JKD$�F>Yd-}Q�ZY�e�)���*t��ӄ���$��\r	=(t���Bg	=�����_���єQ\0m�V�+�S�va�D�W�g�����B���B�e���B��L�H���#t�B�	�mFW�\0;t� _���@��њ�x��.t!�[�!#�\\���|��W��:��\rG��I��9��*ʍ6ˁ���Jk�S��A�qG�N��\09���EB�M�~-4?홝�~�I�}�&�y�eY�����o\n�u��{.r��Bk��iv?���LG��є�j�-+��Q散\02%>�|���(^����\n�X��r��T��R��-�*����-��R�˅V���BI�:G�T�#��5i�\ZE\"F��lD;�\\_�p��sj�d��B\"t��B)�2�w���ϊ��`���Ф�^���MnA!��<�Y�>�������\n�kt�M�Jw%���<.����B�U\\G�BI?禓]\0�o����^����eF�&.���a��a5�͚��#ңo>��=L^���]F����J�N\0�G��ㅾV�\Z��!q#!�����6=X�9�\\T2�ﲨ{��c�捳,Ў)zak�l��@1���{���^��MF��_b��(7�9����+\'J��{h�n��[\\�hi��Gc41\'\'�M��1����>;k�ǐL�����݋���$�|�~�,��ݕ�x� �l��(4W.�\ZAjՈ�r���sr�W���M�W�r�\"z�h��>��;��Y�窊E,�0ތ\\�\\1�b����\"�\'����x���u�LY�ȣx9�)��^[\0�P�XV��NX�ͻ�T(\"Y���u��W�e�v�݈RU�C55A��C��GY6?���@��1k�VS|�9��I�X���*�rD�\"��L���Ύ=*@4�=N�wZj�9�%p���%a��~��yBe��������\r���K�;HT�o�+�)�Q�_Ÿt����cI�U�ȱB\"�Vڪ�Vg>L�vW�S�1�|�X���pѰ�y��Zx�rR��\'�#��)��W�H�[ ԍ����	�(#�=B2��C�۲@�JL,H$�ݵ(��N)2���\'��䘮\Z��/*��\'rZ�KD��V�((��g	��ś{��P�]aY� �jߊ=B��\n\"4~n�VnwR���X�F�U�rQsΐJd��\Zz��7\"�y�7e�cV������������%�B�T`��S�O�;]NNy�X�z7�s��}���~j/�߬\rn����F�z���*��f�ۉ洌5)��E��EK|��j�4��4\rI.��x����.�j�6��GJ�G_��Ә�Zz1`Nx�P��<8�^��$6�v�hUY�\n�G���jrެ/^�D����a�S��ۚIm·L��\Z�^ f��Z��A36�ck��{,\Z9�Rܱ@W�Q%��Z�d���Wm��o��\'rK��J���U0�7YާD~&*�������1~��&=PH:	��e�ְȁ~��|�d4ş:�҇��\n��{��ţTǹ+h�,��9ww��z��X\0�����-�K��N/R������\r�3-H��h+�apymv+��gɧ�7��E#�:��*����Z;x��΁w�*��Kq�8W�Q���ȶ<�{X�&�ң�xPTR�;Pđ �#�����%·\'��H/�d���&A�y��?�����Ljȇ6�=\"�9�t9\Z_��2I$��\0�K�,�-\"�h���g.��v��8߼�a�=�ٞ]MV*D-z�c0:�z7y�ɣGϯ(/y=�|ҧ^[�Ӻ�ca�q�>ѺQj���)�bD���ky��J@���c��K�����leh\rK���)��Axn�v�F8\r�J��Bww*%Gl^͖̋*�D�LV���� �)Q�x��1�NT�7o��.�|�e�S�V�>^�����B/�\Z�ҽ��qSE���>;-��41�t����iD�瓍8U�}\'�\"�OB�z��#����w���v8;���I�F>�:Թ�㰀�O4D��r�����S�m�.��F!%�8䊛I��y\"�������e�*H�NE�f�t5��K#��L��B���E�3��6P����$�V72��;��P\"1�Óȹ������ڹ��\\y�� �(�r�\"�W�>�����z�S�}��|?A��6N���y΋p9H��\0����6�1�6ʧP�Z}i�\"���R7�%��O��č��ыkCU!j/@61�z	�\'�[�~��wף�7V\0q_�+�}�o^e4\"6����¨�s����!��\\r��k�JN�T�$@�Q�N���S�������$yZ(_�:�{���W,��\r�/��u�\Zs�x��Ѱqh�����.��}	����g(�b[\Z�s�L7��RF��+�%�(��G�8\"�4�r��)�5V��6I��F�\r:� XR>9��Q;G)ڴ����^��LȰR�#���.c�/ ��5/d�Izf9�,��}Og+>{8���xq�*���k��^�Z`5��r�u��u��ʠ��\"�I��E[uT�\\�\n�q���f�-�ϵ�ͺ/I4%8�{0�7\"W+k���T��Ga_�dC:���2����v\0�Y���-���{���0ǟN�6V�����!1��y��\0@�LF�y�@:�:x�:�/+E�îu.^f=0	�W�V\"b��K�5�3G��ht�#�+��>?��ǽ=���0�}0��t�ɼ��u\r�V���9�)�ftѼ~;��W�9Xt�tƊ#)\n6Ex�9r���8���_K���g����D�������+	ȸ�\n���Z���u��-@�G��L���M\Z��`��^N�\r�^F�ȫ	�����` #��bL�FD�~�x֎@7���:���!l�1�l\Z��\'�9@p)�b�PbN�UP��q�����t��8��\"�\'�\r\\&!ª���&OGGׂb�nf`]�0��N=m?��k����X�F$?��2�bP\n��ؕp�0��{�EAoh��|��d�Y�E,�qjQe�0��T`��K|4bf.�D�f�����o��N�D�Á���=l,uف1�\\����v�U����P��w�B�G_�)1�\0�N�o������C�����&ҁ��痁�<Pq~�6����cmZ����b>�	�\\�U�����\' �y�>!ܶF��G�,�G���MO�f �uQ������nx�����H�rL<�4�?f/��qR���Jʿ�ɤ%e\"���2�s!֧�!��\'�~��p\r#Je�+R=u���m�^J��U�|���F�op�C���(h_oI3��]puB4�+�q.��C���I[�IM�gTm(��F�F�g/\"�X���A��]��\03#��)I�5�r���cӨ}ʪ�G���@�@Q�|\0��E(�N���w��̥�uD�K\0��h�*�Y�C�.�1��UrX4<�y��̐;���_B�@�D1p~mx�V�ޯ�g�5Ze�+x���H��\'�P\rD龬��lw����P��d�x�>]h���B����G���G���R�|��`���Q��v���Ӡ�B��C,ERO�g*��/6��9�p�8!ĭ��씯�q\"BZ45xH2Ţ-G:��I83%���$�|��aY�\0<ܴ�Z��W���0�&����aTn��U��â�Zt���ep�\Z��i#E���F�6���*��\\��o��&H\'	�=�c6�m\"Ķ6�W���JVQSq*겨b���,�Q����d��{�4��{r���u!Ʋ��F�n��-赒��7a��L�����7i@�{P�L閮%$��(��\'q��c���w`��`@��5	�e�����\Z����9�fգ���V%������M(�ë�q�a���s���Q��w^��w�\nRZ0ǲ�E�O�tn`Ň�藸eY=�m.���\'2_��CN`Ʈ�(!�k��M�č�4u���%�4)��H�[��/�;��}\\��8�*�X���=Mwh\r\Zt\n�\\\'\"�\nƄ�Z~M3��-9�8�R8��g�_@uWN��4��ꓚϹ�5b5��T^RcSVh�b�>b\0#��5:�,�w�cT��Pma������\'� �E	e0�XԎBI�Fx\\y���U��\"�8�r���[��E�r:!5�dIA��h�\'Z4Wt�����g�4醲�v�<�Q�]�-��\\��A(5`m,�	皌�V�\Z�Xd��*��Pb��<�B%+�#c.V*���P���,Vՙy(:�\0�F#\"|Fu7����l+\0(����ŀ�b�����`xڗPR�7՝*)�.^U(�\\�Μ��;��脫PЙ\0�y�\Z�������\0�j��8���\Z�����y�d�Q�e���Z�	�EO����h�u)���h�3�!�[SU�\'��_��q����(.��RO�B�b�W�Ѷh�ԋG\r�N���)����|V�F�h��&D]���E4 k�y6hw���=���?D��\'����u�b-�Ts��G���y�y��`8����<�\na+V�\rh�2	�x��1�іMA��y�)l�k$����H��y�7��t\r��j�H�/6-�J�u&<}\"�Qĕn@{�j�K\Z�.`-N�Bچ�ӫh�M/^���\\߀1vS�/GJP�!�6#���9�:Cb������DčR�_�9���C\r��SU]SE4;���B�o�\"�(���Px)\'��̵pʲ�	ޝӜ{�P�4	��0,@:�L���\\j�_��g�08�0�c�\"!��,x77��\Z\n��d�\"~�h������~P�9I��,FS��;km@F2?\n%�5z|:��5h�D��C�tG�TET��}-��qz�{\n��iI�Q�3�#��dt�-�!�DWD�#w#e&��\Z��QND�w���ݔj�q���{p��k���+܏{gZǫrХl��\"�l�m$l�p$I?�1�`<���:$���Bi�b�B��c]��݀k8q��v�C�d�W��xU�\'�y�������Q��.�=o��3��V�� %��|F��=�V�+��$�E\'^9O�7K��L��轲Z��ȫ�I�4x��a���A��>��g�Џ����\0`_c:\Z��\rF�(D�~@3ѷ3)��S:�� _?𵀓\\�M)��8�~x/����F!�Pn�p/ؽ��%h[p݋Xes,ھđ�\nie�L���D��JKKr��u�A�)J�w\"�d����x^���W��\np���$��\0D�(�-�]�]��:�hk���i��d3�����+��;��Un�4\nKɶP(P�h���\n;^�Ʋ�,]|��X�˫�Tw	V���v\0�u���ྞbS(��ٖZ?=g`x��ѡ5�MY9\Z��\\S�l3�e:Y	j�Bn�v�J5�s�z��S��.\'��%�jh̜�\0Z=_�\Z���h`oe[���)�#�2�i����M�7י�bV����N@t�S�_]����wfHu͙He��m����Hk Z�D۽��\'(�����NT��|_;�\"��VJL�ɔi����/�Bh�����8�\"��/�!w�������F5��vT!+Q��/A�FOҘ��4�C�\Zp0jC�\nJ�\'6��Q�~�7vD3/�B5���@�Z p����_�\0�௘s]J�\0\0\0\0IEND�B`�'),(2,0,'exemple de pièces jointes !'),(4,0,'�PNG\r\n\Z\n\0\0\0\rIHDR\0\01\0\0\0�\0\0\0����\0\0\0gAMA\0\0���a\0\0\n0iCCPICC profile\0\0H���wTT��Ͻwz��0)C�\r �7��Da�`(34�!�EDA�\"��\"�\"���`�� ��`QQy3�Vt�彗��g}k���=g�}ֺ\0�����tX\n�4����J����c��\0�\0`�23B=ÀH>n�L��\"�7w�+\07����t��I������؂��d��Pĩق�}F���1�(1�E������\";����c�X|�v\Z[�=\"ޚ%��qQ��-�[\"�L�qE�V��af�\"��+IĦ\"&��B�D�\0)�+������Rn��|nb����ң���2�ޜ�T�@`�d�0�l�[zZ����?KF\\[����f���F��f_�n�M�{�H��?���}���_z=\0�YQmv|����c3\0����4 )�[��W����%I Ȱ31���6�rX�������7�������(ݝ���\n�⺱�SӅ|zf�š�y��q�_��0����sx��pєqy��v��\\7�G���S�a؟�8�\"Q\Z>j�1�\Z���>��s@���7|8��ՉŹ�,�߳�e�%���9�-$�������H*P\0*@�#`l�=p��0VHi��A>��@	�v�jP\Z@h\'@8\r.���:�n�`���`��a!2D� UH2��!�y@�P�A�B��&�*���:�	�:]��B��=h��~���L���2�\r��������p\"�\Z΃��p\\����u�6<?�g�\Z��!�\r	D�����C��J�iA��^�&2�L#�PEG��Qި�(j5j�U�:�jG��n�FQ3�Oh2Z	m��C��#щ�lt�݈nC_B�F���`0\ZFc���Da�1k0����V�y� f3��b�Xl ��`��{�ǰ�C�q�[��3�y�q<\\�ww7������Zx;| ���ŗ��]��8~� M�!8�Ʉ��*B��!��HT\'���\\�b�8�\nq���$C�\'��bHB�v�a�y�=�+2��Mv&G����&�E�c�[	�����[b�D�D�Đ�I������*�<�Jɓ���Rx)m)7)��:�\Z�SR�R��i3�@�4�R��W�\'e�2�22l�B�C2e�(E��FaQ6Q\Z(�(�TU��CM��P���Sgded-e�esdkd�Ȏ��6͇�J+���ݡ��S�s���m�k����_\"�,ϑ/�o��-�^��ࡐ��S�C�\"JQ_1X1[��%��%�%�KXK���Xr_	V�W\nQZ�tH�OiVYE�K9Cy��E�i���J�J��Y�)U���*W�B���3�,݅�J����gԔԼՄjuj�j��:����[�i4\Z	\Z\Z�\Z3������͚���Z�$�=Z�Zs�:��[�;�\'u�u|t�t�u�u�tW�������1�R����Ї�����k�`k��~�AC���!ϰ�p؈d�b�e�l4jL3�7.0�0~a�im�Ӥ�䓩�i�i��33_��.�����Y�5�,���-:-^Z\ZXr,X޵�XXm���hmcͷn���Ѵ���g3̠2���+�h[W����m��Y�	�N��fod�b�~r��R�҆�c�L�:�G�c��A�\'5\'�S��g\rg�s�󄋞K��1����|�6�97;��n��w/�b�~����=�==�=g����x��F{�y���Q�a�4���������#���U�=�����w���.�Z�[�}w>\n�	Z�c0&8(�&�i�YH~Ho(%46�h�0װ���u��w�K�Ǆ7��E�G�G�D�D����ō��F�G7FϮ�X�{�x�ULQ̝�:+sV^]��*uՙX�Xf��8t\\D�Ѹ�@f=s6�\'~_�ˍ�����̮`Oq8圉����D��]�SINI�I�\\7n5�e�wrm�\\J`�ᔅԈ��4\\Z\\�)�/�ד����>�a�Q�1��n���3|?~c&��2�S@�L�	u����Y�Y5Yo�óO�H��r�r�s��N�y�}�����;_-c��Z��u�u���k�/\\?��kÑ���)*0-(/x�)bSW�r�±�^���$��E�[��nEm�n��f�m�O���k%�%�%JY�׾1��ꛅ�	��ˬ�������i�r���]��+���w��ZiYY���G�g�ʿ�s���{?T\'U߮q�iݧ�o۾����C���*זԾ?�=x�Ϋ��^����P֡�\r�\r��2�mjTl,i�x�wx�Hȑ�&����JG˚�fa�Ա�c7�s���Ũ����Zr�}��wN���>�8�����(m��P{n�LGR�HgT��)�S�]�]m?\Z�x����3�g����]8�wn�|����ƺc�\\��x�\'����ߥ+�=/_�u�=w����vWO]c\\�n}��Ϫ��\'�������l:o���\Z\\:xv�i��M���o�ܺ~{���;�����˾;y/����Y��lx�~X�H�Q�c���?���:b=rf�}��I�c���d��a��)�i��DӤ���)ϩ�V<��|~��W�_���}��oο��DΌ��\\����«ï-_w��>~��f~�����#��z�G�������P�Q�c�\'�O�����7E;\0\0\0 cHRM\0\0z&\0\0��\0\0�\0\0\0��\0\0u0\0\0�`\0\0:�\0\0p��Q<\0\0\0	pHYs\0\0�\0\0�n�u>\0\0\0tIME�	-}mR\0\0 \0IDATx��ٖ$ɑ%vEUm�%\"2�\n����M���!�ɟ�?��|���/��3�gxș>�Q\0�\n�̌�[T�`�������g��;\'���j���r������>��`Ƨ{\r���g�w�#XO���y��6�������\\�^���\"���Kx.��Է-���>���d���&6Ǫ�?��������t�����������u����O����8U\r�v;hf!��nqww�2/@D8�g|x|��|Ʈ�`S� h4M\r�\Z;%��\n��3 /��92�P�\r��g��k\0I�IC�~��&����M!������)�ù��錯������7�Dh�F�v�����\"\Z���� 꺙Ⱥ��)Y[D@��g\"D�� @���ݟ��3��ŧ�_�ƚ략�$h4��><�� @w��l�M�`�r?3<M�����5Ckm?c�����+n�{�s�vة�(�s����4�b�\0��������F���\0�m���}=�1L�\\#���,��\r���1ƾ�L09���!M׌}�co����{���(����A���>���4����<���������r�Ȟ;\03G�;���%�]f��3��{-���O�q�ܵ[d�	�M�y�w�k8�V򴜻�0�!���y7�;G���f�#�3ff��y7m�^�n����s,�gWL�~�	��_��I9+__�g��������o���/�&��y�zd�\"�2�x�)L	�1/�pj���\Z�2��\0(��`��&��〉��i��ॿ���a�Ϛﱱ{�P��x:���|6w\03�L!�2�\Z��M�@H�P5���WH! �@�)()ж�n�RU�p<��+Ȣ@Q�(�e���_�j����K�4\ZUӢ�\Z����ݦN\"Ab25�Gך�[\r�y��Eg��`����1n����;����x,(�%�2�54�d��l���6����\0`c��S���[���a��f،��&�~P�[�g�����gP.���fo����#wf�!�L�o�3���&����l��_���{ws�%�u0u�3�:�-���א�\0��G��9����O�kR����an��{���ģ���䔮b�G���4y0�Z���p��<����B��V#�!9_��!����m�4[�+��9og{%(�zr�m�~����6����it>�!\\���կԳ]m����D �9X���y�\Z��G��\0\0�{?���0�����|�����wjǽ���y����g����ϛ�L��|��[�T�y����X�q�}@��dh�&�}�GY䨈�R`���n�Cմ8�O8W�q���y�#�2�Y������\ZB�Y�M���j<6G����0�0�\\�8�+�+�l$��5ex�y�8����`� A�\r`���Z�mm�]�K�WF�fjn�]�fDe�;�j9�!��z�\"�H��)⓺�93\Z3D],,��1f���R�n�lu�ǃܙ����K��ϳ�S�ͳtO��{0!(gFcܮ#s��9g(���ELQ�6F���Џ�Q���oZX�lձq��uH_ǫ�A`�NKNr�}��f����O�c��������\ZZ�����b\0�ڈ(!�ރ�����S3��W�f�g>Mؿ�]y-���\'#�Oo��5;���S��R4�j�O\n�h��IO��]���Y��bǓo�O;�E>7P�\\�_k�l�(�wW2#���n=m\rm�f0��u�Y��\n���6������?_4Ǽފ��ȉ��O���1����͔�����|n\0R8x�suFӶx~~���L�(J�M=�y�CJ	)	� �ʲ��Jb�PR�\\�x9����A����j��/w�Z�D���B�$\0ց6�H3�j�f�!\r�\0�S�����3�0X\'�AAF�f8j�zz0��MY�(�~1�n<>�dܳy�������~�ҷ�[A�8p͟��Q��MS��g\r8�W�n[}m�����ԞGC�x��bL#r�� ��������t�\"��!����+�\\��8�<����}6(FN�t����K䬥8v=�D>\0�O:�	M�O��_G���@\"`�6��K�B�>B�G?@#�\n\0Î㔬�:����v6X	\'�&{�-�JO#���L�uT-��a�Ed�]�����\"W6�}��Y�����=��d�K��S���|ʤ��`d�f�R}ݯ>� {\"\ZD�k<\0�h!��0����\n���X\0�����z���PΆ�S�m`\"�\Z���|���_u?�6��%c�_��bv���ȱE�cB\n�2/p��rA���`(Z��+��gh�Q���87(�e�A9R��,�~��.\Zsxy��_���S����EM�j��E��\n`�+T����Z��Lh�v�Ty�����h\r�\Z��E���\0a#|���Gi��$\"Hr�n�e��(y�!rl<富��<��\rԳ1rd.I��1\ZG|�!����ßy���W�W�a���i9�ƾ�׷:���t��i�L?�0;���4]0�#��f�����̗Cc.�������}/Ӛ�4C� ��������,5�!A4�e�9�3ic̔���?V�Q�D�M���L��΅f[�|�5�\r���4�C��\Z�]��w\0���q��1B!�����	�TVG;�����݀i��6�[�+\'Q+M�qr.��\"|���/�1dl�Ȣ@�A��K��h��;9�>���P\n}�<�K��@���x74�=�I�Y�����Ŷ,�P�R��T=X�/o��Rմ����Ȳ�fJJdY0��+O\'h�QU����s�\"�QT�:��t�R\n�Y�\\*�š�p��Y�!P�=��H	�ӹE�6he� ��D�)�y�L)Tm�,�֨[����)�gJd[r2��@�\r\'\Z���������?�����Y��������!GQËFo=V����s}n�O^E�cH���6~�ln�0�$幞�\'l/yw/2r��pF0Nu�5��Z���F&h\Z�\'�<Jy�h1(�n���H��ӌ/Q�ha��Idߜ�B��=D���\Z�E\03��عtk)����k�SD�Ș\0ʢ���b�@#\0%D�6�XC�8��\0yz�F��f�b�������KFf�(M�b���A�\'g\"��ޏ� ���Z\0Y3\0��n�~Q 2^�0����D\0�*\Z4\0�\r��;{�&�]sn*|x���O�y��m@B�(6�m7���\Z�r�<��|x���\00ڶř+��HH�%��g���Ȑ+�\"Sx��-ZE�u����tS��3(/�[�y�<S(s�<Ȕ�IA�4-�m�s��V~���(d(j\r���\'a�}�H��\r�U�,�&���;����|�)ǆ��p`��&d)j\r��dҠ�|�:�*;\rm��w��R\\.4�芩��G�#�[�dGG��J��3ϟ���S�$B�z.����a�)x����~�	|���8�	n=���ɔ��;�{��a0�͕��=p6nl\01s�u[����^́l�\0���<��q��]E2������5����g�[-�C�~�F�578N��1�Hc�Q�1�і���3\'.D^��\n CD�z�\r��C�d;z4��\"��}떓}�����M������~��Oe+71)\0F�Gh��ԈO�D#+y���Ҋ��M�3�\0����>��ĩ�(���?}����~%3�e��~���7 ~�~�Ƕ�aS\0$�L\n�E	�203N�3��FU���+<\nl���\0�|\Z2%q��@�����,��Q55�������3��ں��n�2�oK�o��\'<���,#��-D у�1�2���t���q�a�,\npe>JN�e��\n�y�+��K̎�3���١l��&͞}�h!�,��y~x/�g�QAN�@�5K��@4���qР�F^��o�p�)@��82>�~	ƨ�鞰���[6O�˔/�F!�����{��Ad��X��\rg�H�3�����o��\0)�q��Zb\'�n����)�����\nw,-�pn����.��L�@̀�7�F��{�(�k����P̰gۈ�E���H�<���� \Z�����1�U0Ҭ��W\"����#q�a�]$&5sK\0c�d��?\'�1y���^\nK\r�0�r����k�D���M��r\"�bW�kU�χo����d��{<>|�×_���[�w{�y	fF��Ja�Gf4k�E�sU�x:�����q&p�k���\"�P9�<G�e�R!�K�EJ�L��@�j�\n�����-��2�a_H@��� �e_�����X/�?����\"L����s,ͩ!<KHu�T��Q�>ƞT�9��J�2\"�D��c�]P�;\'9|t�5z|˄�=�x�!�Ȅ7��v�jA�Pf���ywsg��b�k�z�	�l�s@!:^�:�웜��|�([Ԙ�����5v�����~�4�������d�)��%aIHcq�ht!�:�F2?E�n�R��D�\0w�����\'SL$N��(\\�]�ɺG�\\�oi�\nի�8O�\0��ҺM}���P\n��s�R}}E�y�����Q�VwZ�D�\01�`4;ƪp�\0�`º��{s`\0L(g��M�dƜB��7�}����T��Q!���x9[�\0���~��{�E� �=���u���hA8���l�ؕ;�\0Je�B���\06e��i��,q:�T��,�\"����\n�M�uQ��EY(�Č2SP�3�\"�A ��\ZU���X��p�Ǘ3��3�E�Bjߔ�Z����q��<�v��V���N�D=Ml(7%�/��bV����m�n���܏V�lS,�#�,O���Z2Q�+��̱#��:�|�|��h��\"ZQ�����ڶ�Ex����ޱ8�+�Qu�<yw����g�����A�\0��yi��`Q��~�\0Ц�f\\��Gm��ڑE���ui��\r:i��x�m���Er]��1�#`�:�`0�98��?��8�Y+��(�ͮ|6��������i��d��[@�u{�+h���Ӈ�����]��e�	��\0��\nْ��^ǌt�=����\"�+�9Ѷ��%A��e����Qw�.B���;���B[<`�Rზh�T�8�\Zϧ\'|/�!tE�MQ\0?�9������\"�MYb��a��c�ۂ\0<=���p��t��|��t�ǧl7l7Ah�B�\\���T�2�IK��i�\0U�ùƶ��G�4`t5f�}hc�,��(1��b�s�Q��7�ʝ�bs�U؞W�Ƙ�?ʙ��0�b���ED+��*3y��hj@��v¾�*�O����.1#d�>#0~y]���\Z��f�L�U�l?���x��q�sB�̀\\��@X)�y�&�j%��������!bl�V�����R�������b�0Rm�V� �e\\5*�D�y��n�/���{�)�2�`��1�0lG������n����~��8\nRk��s���z��v���G^�\'`*�jݍ��k�d�\0!L[�B6k{��e��>�,³���\0o�ƞ\'EFY��	���ܴ\0�\r~sd�SU��2��YQ�~��6#@�x:W�������߽�������}���[�;I�-����(�e\neQ`�����	�д\ZB\nhn����haeY@\n\"�\\))��3�^0 S\n���L��N����<V�g��Yz�CDE�\0Fؠe��TK�v9,ڭ�³C|؛ڬ��D�|	\'8���\'����>M	t^A�y�(���rU��b���y��*м���X�+��%NBј�O\0�ԑ�:�������I\0t�5�$���ۻOf>\09ԯ�QG�ܟ�&���Ȭ��6ϔ����<�C���q\n͢k�i�;����2e����l�;N�2�ȅO�����8�㼋FxS������C]�)�°r~��.���h�]�+�G��ټ\"����qGa|���1h���<���\0���901\0�����$���\0�\n���p�l\r8����T�,�\0@Ӵ��x�[�������tO�R\n\nw���^�!WxnJ��P�-\Z|W?�t�3��?���=�%��lvw�B@���ReQBJ�y�{:������Ik�Z�\\u��SU#W\n������\'���%HE�V�/�)�|�����ϛHS�L\0#x���l�,-**��-l$�[���91��,沷8�\0���oZ�ퟹ�g��c����-8ޓ7�ed\Z�ʬT>�%�;�E�<�k<kq\0�rHc�{��`�� �ﯔ`��ik��}p!�1m�)!��hRD��W׀?��Yl/>��^0�z�;9�w�:+�R9M��x���2�WRPg�����ܿ(\Z�o׬6(<گ��@��|獆f���Ay@]���@G�;D���E�R\03�7�9�0�G�g�Li� ��\0��6��i\Z�������S]C)%rb������;�7w��/��g���������>|�o�}Ɵ��(�}�%��	N�/p��n���Rl�\r�R(�J����t��񈧗^�GNgy�s]C)	�S�T����n\Zi��L�\nb30bV8�Db���H#�j�uܜ���v����b%���7b#f�n��nBm�Y2�[����n�Y��K�y��M��:9�z�|�I\"?�+$<��p�O9�b�$����P���\'��\r17�t����\0��2F3�3y�l�%?eϛ3�.��#��qR���e:�L������/�Y-O,͐��h1�P��K_rOO8���6��1	aM��c%�g����������&��<�m�b�@�b�\\1ȩ��K(n���A%��\Z��|�6y}��x��$���.�)�+A�\Z\0c�WE`\0�r�\0�ELN���1s\n����\0x�CWZL��\0��5,����]=Dt�\Z�6кE�[�3N/���ěo��n��f��[���>�o�KpS�O��巿���w���������������o����\r�r��eY�L�ww��+��5><=�m4�B�e�J�i[Ngh�!{���i��9ʜдz���Y��G��`䈞&����}?�B�m�6P���0���R�J[����̚<�7Рt*�\"�lg��F��0��vL���*�k�H\ZBԞx��S�sqs�l��=KҲ�%Ԙ�ڃrف{���I�z_�����N�yc}�����6����|��!�\\���F=�5��b�2u�4\rv�(�伀�MJ�\r�׌ur�����V���nr�������zA�C�[hG� X\\���4��O��R��b}�{2I���H��K�\n?{m.�E�M�/^��n�+кa�%�����#1�.��G1�Q�\ZWe+b��\"0��NJ����3�:0>�g�#0�T	����DnE!��gchF`���,�l����K�C��\Z\\�ўNН�	͌�P�N-�7\'d/-���N��{��,��=�_�����O������i��?������{�w(������n���wPR`S��n6 ʢ�T�8�QU5����5m��i�+�U��u\"z4yl�#iF^FU�!a_��:���&�uM�S.���P�E�^:\"�0٥G�`x�<��b�՛n��a�W������ޥ��qio�PR:-����#����UE�0/���L��\'ܶ�w\Z��Р�AīD\\�֝��	�kz�#�\'d�\'z�Yi~$�׸\\{\\`B������|�uv�n�>$�jk�����V��\0�����+��� �\05���D(K��qm�F\n�R��e�S�܅�6③B�5ґ�l�|����\0���\"\0��K��j.��de��\Z�L\nh�ȕ�h[4��d^ /\nȼ\0H�eƟOg��p��������x��/��ïp�~�_�;@����q~y�w�O�x:�p>�x~����5ڦ���������e��,�nS��r������t��်mA �-�\\58�;P�u�\0��A���c¾`& ��&3\0��\n�dм��3O�zǲs�;�ɖ�2ϒ�m|��[Ȕ9�][�\n��\nNR��S�r\"_N���D���0.�&]2˯�`pB4��5Sr�V�:IѨ������x�q�g߉%h\'Y�k0>��#%��XH\n!ǰ縕H�[g����a1l�lɾ�m|�;6S��t3��>���x$\0\0 \0IDAT�y��A�nC���ab��n�hN�#��́=���\n��G�QW;t��Nm���>2�8�}\'鴲(!��=ײ�~�Cr	�Y.��듍��_1��\nA\"�H_R![#�Lt`�8�\n�K!�?۬�Z�0/(��\nY���`hV������s&#\\H���Qnw�6;��\0�[u��ms�ʻ�/YV��ΨN��\nx���\r��@Y�ȄD.s�=�û�\'\0�����G4Oﱩx��`>���	�|��\Z\Z��o�|	�����C�eؖl7%6�E~�R�%%���g��R�����K�@Úrb,2#�E@�f�(�1��rOOa�5]�6$�u��Ϝnt��L`f(4�mךI]����e�F��盜%����\\�;�lh�����6�D����k.P�?&xG�k}}�aI��2�ɴW-��p��q��M7]��v�b%�q��^C�l�0�����LIr��iFȓ�l�\r��n^[���=��K�?e��3��u�%������S���숥t�f���<��*����5�j�LR϶��+����g�\0�&����Ƕ9>\'F��x��+��`qlDb��Q�\rj�Z0+\0�W�L_`U�<\0&�����R�^\0�2�mҽ/����J\0ӿ�]Γ�\0�Hߤ��r���!�@�ݣ<�!����3ںA}:B�쾢Ϧ��O8��$�ʱ���e��$�6�l6P�;��w��[�����\\\"�7x_3Jn������#N�\nT�����3��*|qw�M�AI�m/��)��aH��<����z�ra��H���>4�scR�	���J#Q��*Fn�Y��NP��t�4��Q�;3�AO(�K81�#��A���2��gm����K�6����n���\\���%�ǫ�\\�n1\'�0�ձ��b�{��d�]�Du��v@r$��\r�d��#ū��R�bt�®W2{�Y��!�L��p�g�Uv�g{Mԡ��Ѕye�|9tκ�y�TΪғ#�>C��OJ�.�Ο��|��Z��dh���W�T�.LV�cI�gġ���/�迾.�\'��s��\r���\0&\Z�	lj��\0Ƣ�]a�۪�`\"�ڜ��I�WI(��7��K0��{k�`wk�Q&�`���%\0c�&!APJ\"�3dy	!��]7�m��:w��к�nN��G4u�E>�4��\r	||*���a��#�2��=P���{����?���3�U�c�q|����g�?~������]�� l�9�LB	B�����d��>�E\n\Z�����`#<ꮩ�<��j��y��5#��)�Ũ\r�fM�Y�y��\ZУ��Vc)J� Mn�Q����Y�؋/\n�/ݮ��0�K!�uin�`4�5dr�e&�~���S�z�0�gⰎ���:�{�Ac/(�uΊFZȝc.%e]2\0�k�Z\"\"n��SLw�v\Z_��oG��*rϧ�ڀw�.Z��gd:�g��	xk�\\=}�s�VNS��4��\0��u�Nzi����\"Lc\Z�)\0&���a�dD����.��a��5p���/`p���*�Y���S�Q��?��3i���`��F�Th�IF%�� ��\r�D2�TW��	���:��ƓT�Pl���c����\n!�OB�`�������a�\r��#������������?��w��B��o��xsw�2/ ���{�!��ɳ(F*F�b��\r�&l��xw\0����E=m̨ü0�����@ҰQ	a\"�I�y	���z8i�H�F�x೓��ʔ��48V�ky�,��LL3�L��H�2�ˠ�?����X���z\rǆ��n�ͥ���C\"�F�נ�ZK=kf��� N�w�ٖ�jo�̼#w�9S����g+a�}�Xo����(ϯ���E��7�����/�NI�R`�bǉf���k4��!GLJۇ��+K�\n�9N�~���<�+��F�%A��w��\"����U�5R��+̹���c�G��Xқ�<���Q�)w\0�����)pE�������cV�sg�\\�h�+�?܇t\0�R_�hWݶ��풸d��v�}��x\0�M�Mg�2H��eT��mhȶ-�����i@M��dtBu|���#��(v����\0޿�������[��7�ۻ\r����?�\n�c���w\n�����\\���|x�pj*��iqn���\r�����%��̂��VE��l�6����/.���s�\r�3v\r�d�_��h�(ؙZ�e���Bg�!W�+\\�2v�O˜=���!�khG씱K��yS�4�p�Y�����:�-N������h��_u�	:�w�(���j���v����/{D�Ul��\rʙy&�]E�g<��>��\"�i�\Z�Ef/\nCP�����&��@n\Z�5QC;?���l�\ZC�e4��1!|.\'%\rH<a��HX����2a��%J�)Z�7w���;��sw\n�Q�H�Q@��?�\\�k\0�/�bx�\0$F;U\'�B��E��	�T����ĪcE�%�`�`���+(_>z��|+%��\ng	\0\0��h�\Z�č����.��,7x���Og<?=�:���+H){�/)%�T\0�����43D��jݢպ������M�@\'0	��O��U���	O�<n��*�|��ϳw�\'�����-�9�%�S�Q���\0�F�J���N��X��e2\"LmK&����� \"^���~rt�?h�����-(`k۸�۶Z���\Z�`���Ϫm�~�/����t�1�o���ơ`�����P\"Յ.#�]�ɺVqL�r��j-��\rP�-�Xgq�!����K��2\"������U�����3��@�͠���/���EW�\r\r����{�A��7�o�����W[&��Q�\"��z����suy)d:|��V!K-b����QXK �47\00޾�\0���t,\0Z`p!�	y`�}���T3�F�n���_|M\n��Ox~�������$:u���Ѷm_SC7\r��lw���@\n	n4m�����3�����\rTV�Puu�7�|����W9�y�㿽��W~q�ǿ\Z,%~��E�?�\r�S;�f���e� 5_����7���&Es�6\0\'?ƒ\'��@��e�!M�E<V�ְ�m��\\����#R��m+s�Ր�����K�g�\"]/�����3�ќ������VVݭ5U�]�=��A�ќ�l�!CO�&�{=�^���g���+�0�+�\0�F\n��ڦ�l�L��OV:�~B	���\'�5�Vȥl�QCd}�e���	(�2{����t���:o:M{\'[\r;3���4�S��AX&|�_�#)mh\rz�N��9E���d^��sc��ۼ� %��n\0L__?J B+�\r�9\Z��G��׃J���$QҰ�$��]`|90�\0��\0�\r\0��{�/`��\",\0�e@�/T.pj4�7%v;����lQ%��#���u��m��B��u G�5�F�@B� �D*7 ݠ��h�Je�T�$���d׾���͑�M{�?�h|��������\n�a#��į�����?�;U�MY��D�d��?)0�G��=�,�.�V�.:�GO���@�H�.�b��h+��)v	������(LɻϾw8	0����\'\0�������_K\nH�1��>>��\r��JOQ�Y�3��K��<�\r3���۞�e�y��͐bO��Y�����0)3�0��{v���N{̈́��9wt�i]�Q�����5B�y�ϒ�NF1]�K���\0Z�fѨ_d�26���H\'Kp/E��J�+�<���\"��2!��(9`~�����_6h�?�ĎGw$�=G�,��me��O\n`R%�=���\n�%����\\!�觕�s�$�K�)H�(	��c@�Y2�����*\r��ɔ�&ϰ�5$1Z�ȳR)���r<�TU8�� 0\Z�@\n�,k�b�BX�A���Y)K���!%�R� {�-�y\0��[F#Z*Ѫڲ��>Ǘo��?���PȔ��&C�h\r޹e2�h)�b3ρ��i���Z���E\Z��.��F�4���!�ORa��h��I�l��f:F�5jn�8�%ԅ6c���\"�J��Hs�C�<N|�`���f�D7��gŘ�Ml5�����-��\r�\r\0��\Z�s?�9���\Z\"�F�|�]��#_2�\r\0�U1*h��5�f�����Na_�+B��Gy|�߬���2/�I����{-��=����Sn���݋V\\��I�}p(�\0�*d�:��U)������(\r�̌��g0H��%��H0���<�_��P#�-2)�u���P���3��eY��sHA8�+��O�� 	��r_zþˁiѶMwp\n)$�RP*�\n`=\ZG�����S\nE�#/\n����n������!v%��\r�,6��\n	dJ�Ȧ>s��	�T��2z4i�����\Z����d$�Ƅ��^-��P� Ȕ^��d���D�PNx�g�B_sI-��r����-��$_Go8``p��Z(��\nQe������$��82�s&�G�RȌ�\n�;�b�se��91��d��y��4�`�}৪޹����K��\r��9��9��*�%hݚW}!�Ț\\*B�����F`b��	N�����y�v�+^��^_��@˚����v��i?R�E�/\n���Q^0���Hٺ%�Y!P�T��?�>΍�7Җ������\r\Z)�(�é����3�LA�@&%��\"�����$���?J�CU�&��n��5ںBU�Q�uWWF�Q�U�Mg��2d}4F�@&ʼ��,q����~��������M�m�cWfP�����]-r��\\�~+7D��f�f��h0UZG���F_3�\ZR���0�FPk��s#��7l$Įuig&\r#�͚Ѥe{\Z�gD؄��F5BT���w�ǘ�,<7���xt%�ȎI�(R0�\r�9/!ph�^ؑ2@�����Z�LtkĴ��\'�ld�\"!o��@?Fj��4J\n�E�p�И2ULa�g�[Ѥතa�d�!��ѕ�E\Z����r���p:�-�|�������&�ї��\\�w�����I/\\v���Ww	,��2��A]�a�\\P��\nj��\'�`��p�;O���F`�́Yxo�^��Z�,4\0��kY�r`b�0��%���4̠��ƹ�p8����G\0Jt^���A�`\'4��o7��r��782@J���S���\\��t��t��x��\ZJI�m��4-\Z�v-��y�mYb��஗N~�����w���ؖ9�L��\n%��)�j)L�q�FI��ј�_4�z������3Z��(g�B�8�B�T3+7��º��&)%ӚB3GK�T��B�uA+�j����q�r�a�|F�\r�p�_ڵv1D�X+y\r�(��bC�Ɩ\"ޤ^ڷ0�A%J�.Q�(��-5���mF_��}�P�D��5*�R��C8NW�l��89X�Sŀ�\r-�1������=fK��H�M.px#�V}/Cv�c�,�᥎�8�2��4����ɳԓ����ӵQ\"t��\'Iy�\\�������A����$����٭��C�0z]�/ȸQ�챻M\0C\0K�����57��F��N����t��\0C�9N�#N��&��n�B��H���m��-��s�?+�p�����V#�20kTu�ӹ¹��\"$6E���w{�����n���\r�l�m2�J�m���%\n%�I��l\r�����9a�g0P���G���������vm#8��o�[ѯe��4[��ri���M��cC��WPr�5tM�U�)�G�-��뺞,�=�y6�w�57�̕��9y+��MŔ�sFqa�FI�L������G\n���qҥ(�]Z1��Y��ܷK�Ѽ\0Lo#�*�-�_k>��\"	��R?�v�����b�k\0�c��5ԜF��+C�J�\0���<���O`.�P��\'0ގ�\r��\n�#)Ih{�9�rl�\r�\"��\\�j��u\r:���|�w�)�����f�;��A0~.$�.\Z��}��B���s��Ayp�O�.��m���~S���o�wxw��ö��6��&�6W(3�\\	HAM\n����xahM�`h�^=t��K�a:ټSN��0MlQ���`6-�(�#ol�vW�z�w<\Z���,j9��)+E�o\r�4�;T�$��	��nj�	G͋���f��)�@q*X(Ru�w��,�\Z#�i٦�i�q<Q��Q<�C�,yF�J������@��� ]���TZƓ�c6����V��%���]@?�>�\" !��i�spo!� cP<ͺT�>y��l�<A�#3��;QVJ0���8X����ߺ�F��s\0w�\rR�L3�y�A���bdyPM���n�R�C�/	`���	\0fx�0ZۜhK�l��\0�žK0�}=���U��7�;�J\0�U,s\0�a�(A�B��3y�]���y���Mۀ��R\n5�og|�Q�x(����j����Y����*�����2R��Gf���Ȕ��n���\r�7]�˶Ȱ+$�L\"W�����-�PF�j�}7(���;�@�X=Ŧ���/u�y/�&%2{�\'6��J+�fLԣZ�p�{l�����ˎ��G�=5lh�ټuJ:�\0�$�y�Y=w�Lf���\rj��8G\\��x�ɐ�M���.��e���-�5��P�s�0O��1$�>���Ld�O��\0��B����G[Y����m��W�_2Jgy��i�^��\0;��G�>�m���K��5�TsN�\rS�%�����%{ߚ$�C�\n\\B�vb\n�~|k3V���ȍ=\'�)��~s\"�LQ+��<�I0�f^_7���L�viꪆ�Ɗ�	�IH�O�P�*ޭT�r��X��,$ݏ�*\0�f�O`�\nd�-�Pg�\n�\Z\00�AXP� A)��[dZ#�3�y	\rF�US㹪�����ݹ�/�~�-��.S�J_�6#�I�($B�\Z�Ȳ���M�m!Q(�\\I�k��������)�U\r�n5� H�E�D�K��jԓ$���b�Y�LZ#7Ա��R����#r�ݾ]�8�l���N�sm����g�H~O!π/8s�Ν�O&��O�R@/�`b̌� 4�;���D7�i�ܑ�#9�[�=l� �1D^܈���\r�\rp�2�N�ϊ&{���Kf�ϳ�+��\'-߆~u�FOh�G�=�(q,�0�)i�\rbģ����[�O�׺E��h��6\ns;�x�m��o;\n�l8������x��i}�n���I�0 �l�}&\0����2~?n\0`��N^�.�V!K~��e��ؘ�ZV��|BU5Ь!�DF��-���H���\n��/8j�ߝ[��=�5~�i��m�_nr|����V��L /%�L�Y�x�JT2��\n�\\b����J0@���\'�W�/�����L\0��D���n���������o���2\r/���^�^���<y�J�҉�8ddW#���G{�k��\rv�x��/m�����M�4�ȭ�y�ص}�0����G\Z�g��J1r��H��=�/i�)��=d<�f3�bGslH ��䊠 P��\Z,%�/Y]�h���5U���\r�@t��V\"��N�\\@��B���X���nWGe��ڏ��@�]��<�(bp��=�8K0sʬM!s#��NՒ�=(���59o�\"�3�͊��<2�����@�sM�Q������S%�6�N��/�Dխ~t\0a\03������/��i�L\0	ќ[v�ON0l)�-�0����_�j	�=]����=Nu����M���@��(���P��Z0H(h��	^4��n��I��-�os�W;��D^l�Jh�AJ�\\�Ȕ����䛠���m��K��Q5\Z�/�U�\\	�aSH�>Ȯ-��L�uk2�Ĩ��G���C�L��k�ȕ<W�˶q�IGy��r5v��.$}�8�j���+�y�.�X�Π��\'�3�&�g���/D[C��ȱ ���\\��\rFq\'=M�B!�dCeʤ��J\Z�=o9w\0����5A�����C���%D9\\Y����v8�l�mN���`����U�f�څ/	W�����qĘ�\'�sc��c��8�LD�ai�䄹cRX]�s2��r�؅p��!��+w��{CP�J��y�et����\n�P��83��ЬѶ]�5�P��1\0��AI�\0�ێ`0���?��\0\0 \0IDATw����:\033�S�x �h����	QȦ���q\r��Z��;O�\0��rt)�-3����/�3�ʺ\"�RA\n�,����B��s(%��y_����V>�%��m!����>ː�.��Da��Ӛ��������������\Z�B�~��͌ڲH�@���K(�̳�Mo� ��\0	ӻ�\Zk`�����H�!C���$�(퐽�o�?���E&z%$Ǻy%A#�Ñ��8�\\��\r�5U�/S�u���=�d�#!��q��$9ƣ1��\0�M%>�>���ZL:��^ph�\'�\'��SQ\"�щ�눜|���(B�^�4����{��=b6$A���Y�q�&�����XG�ڸtr�x.�a����LL(X��_�����㤦W�ا�h��oH��A[U}$ƺ�*�`�Ks\r���У��?�Xy��\n��Y����Ke�qA���*��k$��e��o�+�\n��y%$ZP�i[032�!��P\nM�v�bR�mZH)��w�E�#��\"�y�</�ݖ��%��@���3�rIPCҾ �:�f��@�uT�Ʊj�t��t�;S��7\n��M�a�u�<Er��*�p�}r�&�d$�S��#��+��fr\"&>����x����a!��V[/�ie�T]s0%G)B9�q{I��\r)��e�29|�K�hٳo�k1�$��@�e\0���M�\n�+���?9<}b��E�L��=}ǼE���K��Cc|�X�E�Kq��=�88>�:Ko�5{�x���2\'��O^�e�\0�����a���b���i�MS�d��;E\n�C!��\0FkO��Is�u\0�\Z�YTb�^�\Z�1�urO�Ni��\'��\0��m�F\0�{���d1I�u���wwo��0��F��+�5�u���\nV*���	K亅����î�æ�î���Q�\nE!���L��$�$����`h�d�ۖ;�;*Y�0΍ƹjq���_�@	�nt��CИ�gl:�=�\"�4ቆ2܎z ��D�l����\\pȀY�9�/{N��9j�/���ٴ���ly��\"}��C��j��c�W,Дr���\0�+;���5��1�I�b �QA�d(���w.�$O�0��Ĉ�}r�)N��w�T���g\rWRh=�a��\\�Ao�H�1��,	u\n�@8��������k@kh���EJ�,�|6��j>2�iE�G���B��K�scZe��͉}Jt�T)|v7hF��-{�5}b댌>0��& �����}}\Zd�1W4�n�6��O%�,��з����0�{+\"�|k��LHBy��s�� `X��`RȬ���3-/�l^��ݶ@!\0)$v`�v��;Ⱥ�c]�!����!;]�>yS\n	)�<��v���wx{���6��&öP(3�<�\"/]��f�o��û�@�5��Ѵ\Z�f4m�s�Q�-�u\'8P�MF(�@&��ڴ�����²2Q�wӀ�X��\'l��u@��ｶ�p9��t}�O[Zl�\0�O�Bu.�-ͻ����ƀo�yr4{&����Q7��R�*��o�Y���B�8BF�����7f�\"��ُ�S�c���c��o��r[��Y5Z���_���8}���v���e�{L�;e�.��)�G��&b���2���\0�\"��\Z�d-��2`\0�\\�e{�9�Z^���?Ĉ�8)i�NO�br~�(�I��K��x���u�sU�ĸ�!9��3�1YO���<��0	e�8Ab˵�*��q)=n1:�a\0fM�_wI!��2�Pe�f[����)��QH<��HR�S+S9�<�nS`Sdx{��������ovE_�E��r%�)��za\'�cĤ��TM�S��\\�piuӢi4��E�[h�QpE\Z;	h\"����\0`���7N͈qH�҈Lb=99.�浼�`�ښ댛�ː�}}E��\0����5	���\\�\0K���[3!��]�|ڧ����8�\0�K�:!<��\\����dZ�?hǟ�[_O�ó��r7\\\r`|�ɩk�/;�6*�qG%�k�um։��\0�k��Tٺ��E�`��.0t{\0��\0A\0cx���mP��o�\0��\Zm&�A��*(�T�x\Z��7P�Ad8�u�C�[����aW���w�ɱ+T^2�\\u�ɂL�[��-wQ���N�U��N5��Uj��EU787\Z�n!�q�YUC�dnu��)2�	|�C�T�q|��ʳ?S@����aH�xn�L��`z����w��II\' _��Wg�c*d�.E�b��)�]#�z���ӊz���A��6yf��$a�Ei��c�ƚי�i^Šl%��X�Z{L��\\P�����^��Q�B<i�9r��/�i��:�V��4�5�G�FF/�>�μ�����:��{!O��#=i�d��ؼ/�#e!�K!�`L��毯��!�לZ�hۦ�}��º�A��F�WOe	�\0�\"��\0	J��R{��P%↳$S�ʟ���x\0�x=�K��\n�+\0���?�Ilk��6hE���	��5�M�����b�E���r����~��m��2ö̰�e\\z�1)D�w2p������6�0C��˩��jP�\ZM�Q��/ϧ\Z/�3����@UC0a��\"�/�e��4.����lj��܁��K�dC����S!\Z�|�v|�����������n��fN�~ɧg\Z���f��K\r��M��~����.��k�DR�l9eX��>Z��L�D���8�r�^t����)fW�O��K�sۖ��٘�Me�gG.q�]	]��2#\ZZ����B����V�k��O\rІf���AZ-4�(���@�5r�)ߥy8�>G�v\n����U���ka|Ȧ�s/�Ϭ�ډ���g�\'E`h93\Z�	��&���XO\00& �ڜ@]Y�\n^A�o�L�\r�`�G��R��E�=k�\\��-�쭪�h5�p\rb����-� 7�:��a�/�{|���q�ǟ�-�(Jl��\\��$�LNjcN�H�D�-�h��ը���87\ZUۢj5ε��T�T7h�\"�M�9�+�z���g��\nչ�\0��t�ݻ~v�k	ћ���B�\nL��|i%��\Z���~�1���1]��7|ר��̿��\Zit)���H�F��\0���Ly�A������:c�SX��P�,\Z��^���_�$�������Ͻ�Γ�~3����\0�*`���������xf�j�XF���e��F:̵gJG�ΑN�lo�t�ל�@�E�/�f� O�� \0�CQ����\'�7�7.��^_�}��MI@�t8��!�3��l\0C!�xe�� ��4\0���<���4li�K$������?��Yȁ	��V^�7�!�Zn���н�{��Rt�b�����j���7��T8����o�x{���_;<���$dR ��Վq�6C�[��4�F�0NM��@�s]��1U�8� F��-M�q<�8��x>��列�Ʊ�@`����/�3�VC\ni���y�p�XW�2X1v��>:C�a��\0db>ϬY�;u�$#�۲>���\"4�q���\0OA��\rU��ԤYbvB���d���I����Wlg{�T�,\ZrM���P7�(y�rJ�� )�J�w=�lm��RQ��3z�����2����2�Q�2Jp.��K��i�N	�+DD�#��(�y��\0&�^���y�O����a�$��O\nH)\r3U�<�4R\03�fEfI���^�^����D�,���\nP@�\r��8��Yx��Č��p�-Q�[|x|��<���#�wr��B ���G�����?o�h�o�\rvY�B(2�Br) % H8���o{�X��X�����jp\Z���u���h�M����T��4h�jp�j�g0k�����{��[F�v���N,@w5�u�2S^ZM��{σ�0�󥅰��@��q�ԗ.��S�����X��Wn�����cԅ�]��K�k�Z@�ϭ�k(c1���_t�y�����93 �{�2\'c\0�:R����cT���HnH�=5��ɓ�<7��-��e;.�]Ȕ�6-�B���[>�F��H�^���g�klu�3��^��.a�$�Ԅ$���~p�|��/�����q2��rB-�M%�[���7�a�Z}�$BH(�!�r�8��\0S KJR}ߧ0}F9�N�\Z�$$��{7-\0��~�0��\Z\0L3�p�������t�o��3�D\Z�!�NEdBB�����Oߢ��ݦ�o����y���)�It�/d?�`���`���_���-��5O5U��\'7\r�u�ӹ��t�������UU�i�N���mѶ\ZJ)�Y�e(�B�N�L�3����еU��<���M�>��c��s{��㯊4�V�6��!�O9V�%T�̮��.��/{W�uk=���q:d!��\ZI�5����(\r}^nL�[�`�;��l�\"���������������6��=��Eid�\Z�w�a�+����1���\'���x��|�̹o>�j$͎�>�m��`\niMD������v���.������K�V48?v6��a�p�\'(L/��U�z�{��\\d��\"0R)�L���|�\n�-Ȗ>sS\0�@g��\n��P���g[����osO�L,�t	�1ۢ�i�w�����P�~B\r�x�ݨ�c�1 �B WJ�\\�P��\"��n�m�%헙@���� ��+2S�d# C��i��{�t9/U�B75DSC4\Z��/�_N�����|x��\\��+h݂Rt�\\fy޵_ZMh���`�\r��4�M`�<�\'��ĉB�\Z)+�3�\n��~�ڕ�Új�q��h\"6����5�u^���@0�,��T(q���j�i�z�����0�E&�Uys랊-�.�q����/�jo��g0�/7��Z4�Էғ\"c]���l\"���3ǌi�Џe��D̯��F=J�EaDbT�C٤�k)dK\0q�o��(V��k#0�K|F�\nE�k�ٗ���A$�e%Sp�Y.0�;�	���O~����/OG�P�\0�goJ\"SSr���&���\\bۃ\Z%	BtueL��.i���m���q�\ZTMW����՚Qi�n[��\Zf�o5�\Z�/G|��#~�����j3q\'\Z���m�����:e���s�Ng�=��+�\rf&����1�����T����?L�B_f�/�Kr��v��=�y��7.\r\Z��I�vQ�(pS9�����7;�g_�rfΑ~_#M�z�%�a˙D��C+�:岄$j�3�i��&�s��CA|�c�].�܍}9k�ߞG*�;��\\������`�����Q^��>J��|&�Q%���| �\'�M�D�UK\\���#���>��X�6C�М�;��V\05#2�\0�4~d�O�fʒr�^�W����7\r��Ae�TΛ�R*�`� N0�l�\nIf��\'���\Z\'/h��DE�X��PK��?\0�0	�C̠j������?~��S�Լh\Z�zWd(r�2S��@����y/�Lڷn�hu���hF�\'��/�Ǫ��nѴ]�K����5�4\'�u�sC8�6B�M��6l%ᬧ|(�TW\0�Q��t�~~�G]㫭���_�m��_80F�\Z���K���1�TJ0�SAĒ��:]���Yz��c�\r�xg��×i��a�˅lw�bDe�B\0(F�YR�7�+���B9���o{�ذ�W��,ȇs¼��m�e\"0��\0bv�@��_\0������2�=A~�:�*��a\n�������h4���́8�rt/`B�47c��ch�C&�a��]�R]S����U�e��ErM����{}ݪϻ�\\	\"���̌�Y��\0�y��*H���y��>O�G:��ET��(b���\n��P��X\Z���|��\0ş�ۖ!\0�����/���?��-���\\́q��f(r�\\u5^2I}�~O������kW�i\'�����{GYv�u��}�M����:�[�VN�dٲ,cccp�a��y��o`f�z<�x�Y��<`H�������6X�l˲��\n�:��:wWu�N���qn8��[]M0�ki����s��g���}��u�\0��>km�V�e��eH������Y�[X���IG�b�3��LN���*�<�U��|!��q=��-MC	����l�v����]����/c�T,J�P��Ҕ0�\"+� bN�f\nj�E7�4AlBOE���;�e[�x�����5�Soɲj�gT������m˙Jp��\"�n���|�����$�<�RW��F�sV*�,+&[��+����t��\n(��왖/�������l�\0Lj����h�c#gA�������#_~}���fW�PE)�E�6�0\0�6���]���!�hL���=0���!��H	ٰ������(��]v���;�󩇟�#���G&Cb�d�>�Q-|M�-�n���k��~����L��\Z|)%~\nT:^��I/��$��Ӷ]��km����������E����!�:fm��Z����|��0uھ�j���:R7��E�b�4���6+��0��C1B�;GPN%2.�^���q���W:�(W�K:Û	(�>\0�p@�u��4���s��a���ӎj��\\5���p 3��ĿU, �^�e�e��#?p������֋\Z�,V|%�Q�;,D\'8�P�UqQ0У�ϟ�2=j���ceW1���-� *U�$�%	���7���+���U\0\\���@D/{%3鱎�2_Jl�}��m��@��g�TI0�����B�b���6�1z���,\'��yM��|����R�\'}C٥h�\\jn��(_)��aAQ��`<���Em����$�/Y�p�j鵐�@�٫4x�UML]���ėH����%(��)\\?��:n��v30^����l��v����m��@�Xk��x��K�p]�j�A�1�x�ʤ�s�4�h:��S�Vo0Q��U��A��i�0� @j\Zvc��z���q�J=,=�dE������!�@�<�_�g\"��8��8�\n�yZ�2�zYl8�Z��s�G�3�O���U�%��X_FL\0>�~4�.�15	T\"�7�߉�f����)�)y���K�\\EI�R������X)�A�$��Ȍ���E,~��r2i`7��}0��}ĘƵw\" <ro��o���|�\rd-buh�������Qtk����)���\\eu�<�8\n9�\Z�q\"��-Y񂹰t�8+=*�]��EN�F$&?�EYs��d�K�h���1���I�����>��*��BcK�A��M�����d��~\ZU�T*�#sz`\"�N��=��t���)ҜY^����\r����?��WF0����f��z�x�jP6��Bzc/P���K��i�m7�Vv�f�a�����\Z�W�i��.}���8,�������{����>�JqAh�B`�:�J�Y�f��13�@h\Z5��uL]Ӡ�\\�ZL�U0t�@�T\n�D7!�\"��hb�Uh�\Zs��w�R�1*E�U1c#h�d��C�,�Q�wRJ��%�n��U��g��F�E��JtZ\"�&��Z��X�@ ��>�DY�ߪ��@w�>�db��$%��<�R��J�8B��(��`�;cQ)]��Q�P�\\�Y�#�YA6ۜ���QAn���Z�n�W*�Xo�ő/kߊ�l�~&�w�-\Z�|`S��b��`o\'����ײ��Il�O���h{Xq�)�U���G�sM_U�ĔR\"�$��[N�՟����D*�ȴ�-F����0\0&}���0�5��S$�ٕ�1�n�c?[�Nq��K4W�0=���.`ba��0z�cI�z�/�������:���R%�\\����\n?�=����qXm�Y^[c}�����Nd��B(�xB�(h�AY����y�:S���Q�M��\n�\n�Z��Jb�:�R���s������R�\r0���B��i�u�-�Hj�lȧ�E�ٓ�R\"!@#�|\n!��G*�aG@R�Dl�!qvA�r�Un��m���[�D�3,�,����s��p��;ڗo�gcC%P��y�mok���R8��	:cA�V��W�.&���u:��X��C��f��߷����es��T�b�T=��S���B�W\n`��V��+�O����L\0���\0L�r�)7$�2��\ZJbX&��yWx�C0���c���t�@��mZR\0\0 \0IDAT\'�\Z/���U�g�-nWt2�����:�O���}%�����=��!CC\Z.��c��А2$\0�ǚ��4.ul���a2�h�M�i�k:B��[ɠ/h����M�A,<��8+�Z�elHC��l_�#oQΒ�jeXr���S�5���\"t�Qب�-!�w2�o�#I:gZ�����Ҕ���j�\n��~�H��K7�g�H��2�N�G��8\n=k���H��\\�(Zz�y���2�+��H��v&�����hVZ�kB�*�K�I0,�gB��Q1+�x��X]�`˰�]�z�R�,:z���Vҗ!��@�(\"����Q\Z���cOT�/\\d�T~U	4�k�]}@��i�1�gK���erEA�>l�\nG�(�)v��J��Qz��8��+�Px-!DN	�*`(0\\A	�$* �&	`(0	-���!�oL\'���ο�8���۱�c\'Σ�CQFi\03�0P(G%a)��+lO��>~���@����,�0��[G��ڞ����}	�V�Z�\n_z^�#��@׍��m����h�A�{���0A�!L� �X\r\\Z����V?�^��:\r�c{>2�Ʉ֛kZ��=Zޯ����ZJu��+1���cO*�;�l�a���ϳsÃ�iǡй��ke=	�{��Ss��B�k��!x��|��S��z�<p�\rخ�yCJ$���i2�9���?{��/����u�l��U7^����aĨ���Q�o���E�,*����-�@�)FګF�o?Y����:���R�fyA�<�\"�$�A�� ���/�HA�\Z͹rE����\n�)�D\Z�̧�d�T��Y¦�Y���<n3�S-�j����}L���~�ˬ�`f���ӭG�g��\"\"�\08J�.��\0���t�0��d*��S*�P`T���30y�D��\Z�RFm�/�T\0`\n\0�H�d��P˂��lV�����F��>p;���8��	���t\0FfC����qZ���x~���2|JRQ���TQh���_Ғ���1n��հ��7� �[o�8����;�v�{`h(��q|��@�[U�c���:N@Ӷ�x���+5)�U:��/eJ(1�eQ���^�-�!��,�Wv ~���f����\'�`cn������S�{WenK�Є@����՗��g_�4\rn۷Sױ񊂼��:�Ѻ���v�N��Ĺ�(ШV�hԨY�v�z�FŪl.�U�j �{Si6뀍7��Yem�V:�|~��wy�R�/O�$�N�d��f��f^/�� j�#�t�tś}/%!I�Wlz9YV����xT��c{�L�v��^�*>��_E�HC�tt3\nbi|h�(�!��E��w�ˌ\'� &�2�67��gD\0#��݊\0\0&#�%#���2]1����>��S<}�4~Ŋ��+0*F���0��K��a�K��X�xt�P���|l�[�bB�\"@n�\'p�T�qM�b��\Z:m�d�2C�LMC	�4-�E����V��U�R�y.�w���<��c��X��:�TxN��gݴ@ӱ�Il�3ER�z�1��oZԣB�Fފ�Ⲭ^y�>��>�H�|�\"xӍ�aB�F���2e:���|W�y,�\r���g�QV���m�$G��E�D�+%OY�B����p�����9���]��ay����ŗQq\'���)%Y]_���Kx��[^u;[�g��U�=��:���;���`�⩙����,D����\"&@���c_w1����r�b��i��5�9��*�vE#�\"3��Z�	`Fa��0��R�[5�̣��?�o�cߣt�r��2�Oچ\"ۘ���p�q󳬥�>ϯ�^$Q�-�������zb�;˶we�_~\r�_��)BhhB��\ZJ��,\n�$sN�=��`��C�8�X�+4���Z����KJKo�A�`%b]%t�\0��a�6\"3j�o��%.�T�i�_��0�Tm*Ӕo�Adы�b� ���fS�<�\"ͦ\r��y�0�z����2��ח�]����q<_Ҳڮ����ˁ�����X��X��aZLWM,K��	�,�-�*��:>\n_�#͎G�RA7L4���uL�@�v�M��Fk}%�VT*�����p�6�v4˪�׻`L��9�7e�Ph�@�D,���i�$��Q9Qn��S%k!u��]�������>�x�������ht����6�/h����1���M��|mt�\n����O}�_�ӏ�������;^}��G��\0��!�-UJ��l�����L��`�^A)����]�:v����l�{+�]���(qt\r�z%�T���*�RRs�\\�y9��9�fvUA~ ͜�U\"Y��*\Z�9�E�#����9�U�w����pD*�1(G����G&��ͱE�/SZ�E,яU+qȇۿ����;��nr��T�\Z-���\\�`Y�|Q b��F�0b�~N�S��\r��h�H�}\ZM�1LM��21�=�A�.��z�B��U͢�� ��l@��Ji�t_-ua���(�*�	\n��FL4�6�l\'[�����,�F\r?yj�0\"s�+��vQ��\n�fA�\'\0���\r��`i�Zam��\r�e\0�n~�g���f�u���3$�Z��{���������~���B��c3\0L�����x�[*6��x^H���aL���j�r\\�RH��w=\\���tPEQ��L׫�U-MC7L���x��fh�BД�VU2]��V��R��s����8�\Z�JӰ�<�i�����c�{JI4] Dh�{Z6a��`\rJ�2n𣮖��y1��aM�7��aD�+3Ա���#��x�#�w*��B��=��C�\Z���_��GQ��LE�JE���S<~�8~�1�x��x��pǍ4����0��!��B�2�U�b�RDHءB�\'��9r�\"����-7�Z��5�	N=*���љ��\n#�C�6�s�~���欣<O��Ш��H����Mْߤ�2�Sa#�S�9)I`&j22�\"��d��T�rX�&��kX@�([\\$��gz;u%�\\�w*�{\Z���F��/��޲0�k1���u%�����P^o����ʍ��`z�.6�:M�h���6��7����F��O^�ٗ.�v�	��r�@���޵�w��ꖎ����#`qy������҄�^����Os��9��N\\X��]��چ ��W\\����\Z�5m��]*��`<�����=;����Ӵ.�[���	\0Ӎ@9.c��]�����Ө�8n��4��gm�E�c#�@�TR�jBcj���D=��S`:�/���Oq��ِM,��w�Bkvؽco|��8�ȓO��:�F�V`\0L�[I�x�@�:0\n�:0]������6���4m�����n����[��6�j��j�z�Dh:u�d�b1_�0^���&�07�b��*��5:Jє�U��4-*����5A�i!��m�(��\Z�fH�l�X��}���d�\'&���Ȉ,,Ҍ]6��u�e�ZGK�Fa�-���{��#0���W6\ZZ��(dF��Q�~���k\ZRI�/-�/?�g�x��1���w�g~�\'����yv�M��Ԇi�����[M�&�Jr��\"�w.��٫L�T���K%ǟ�HE�ؐ�?�b)꾉�m�2z�C����zM\nqf*9u?��	��b��.۲�<F��tr�*���e��|��|�X6�a��rR���>.S>�\\I�[%1_	M\'1���ߋ�̡v��\n��z.�٭�D����k�ޥX�K��l���a��p`;��\rԪ����w}f�&����2��&�W,�:r�_��>��>�$��x�@�p2�bff����F����H?�X������K�����/�ф����>��C��o<v��r=hu�op����������>t�-6^B���\"|�ι)^q�>N����|����0K=��$M��N^��;��Ӷ_ҨZ�n\'����A���vy���.�255N %ՊE�v�ʳ/r��N�S�LV�~���s#�޺���Kf�-}:���!q�\\���g��Y���	|I�������Z�X\\Ye���\r$�JC׻lK\ZR��J�!X���V۱��G]טo��29�Dc��j�I�b�2k`�5X���6Z�CŐ�u\r�t,!*T+U*V%ԡq:�vHxH�P����t�s���XRc8�}�\'@�l���%�T@\0����Q>7�}9l\\y;(��:�*;(�0�+(w+vd6t��LY�+�ؔ�\"�i%��U��V��|�1>���\\�w��.n۷����<s�?����=������;��$���EΘc�-l�*d������\\^o����RUNs�����-kA��<��LM9F=1|!ĳ�	�>\nz[��%+#�2�32FP^SE�o����w{X�h�,�KPR,���bb����[���y /�˥A�GP%���9�e��(�<�}��դ�_ ��r���9�\0��gQ�r�z2�u6$��D�-oRj����A_�/�\'x\Z���jB���n9Y�ۮ�I�{�M��؃����>���B�.^����~�����m3��~��)�/��̳\'��܄F��瑳��ǎ�����!�Q�PI�ou��9���?�G>�y>�wOP�ht�A\"\0S�9��B4�0�%1�DXR��f���|�}��ݯ�C|�G;�:�J\0�r\Z0�4i5;z�8w�t\r��G���=��o�%A�FT+�p����T,�}ɧ>�O}� �\n<�v��\'���=��M�f��z�͇>����>��t��FX����:�N\r�Ē\Z0�[�F��;�c��m<��1V�/�����\r�|&Jd���\nTW�tM�K�J��ᓧ8��ڭ&�� t�j}��I*V]���K�&PZ����=��R��4;���vh��hT*LU+lm4Xk0W�(��$uӠV1��Z��\ZU�@�f�&��P�*ԫU\\��.¬�텔���c�>R��)}G\rs�7E�4�eQK д�\0��t�u�K��_�A(:X�]�\\/�ȍF�z�tj�)���hh\Z�kM�9v���;���f�<o{�+�1;��/����%�V�z�ʺ��\"̽�m���6K����+E�*���UP#x\"B�+Z2W��R��\"��+�\rM6�|��L���҈��M�pCd;r��2	�7^�$ٱ~�A,n��ۦ�!H��G8�U�>ڂ�˰��g�J\"v3Y�I��S��Ǭ޳��#��<㤾L��p�_�����@�\'(Q�} 6�K��mJ���I�ʈ�s=I�E�E�b��0�Mpw�M��kw�����-rݹˬ5;���o����5��/�lS���m#M�B)�:�/�zb��z�I�c�m���E�>r\Z&�\"\Z	]i��\Z�[j\'1pi�ݻ��S?���W��8��W�8b����n\0���W �&\'/\\�|�W߶�_����7t~��ն��.2c��\r�.�p�u�lY�=y����en�{�<�\nRT+�;_��<�ן�-��wŎ�%�\0��� P����a��_�\'l����l��,9�G�����<)�]���UN�=�奋x��cLN�HI�R�4t=,���MJt!�\r]]�%��6���$U�gɶ�Ա��l1_� 4�#4:��eAEר5�L[ϧ�K�m��u] ����Fhz�B��PJp�$�~�B��S=�-҃�cK�R����wh�6^P1�~�k�_�2Ǌ,��C����,��~\ro~5t��.,��S/���S��k��k�m�.,�pqe���	4�Mn,j��3�\0�e��Mڶå�Uj�I�2G�_-M�ƀ�\0�{���:�*�T9@F(����	�V���6c_��/�E����QʧJ2$n����}\\1���^1vל>*���n�B�8!r�j�%�\'�V	�&��?���o�L�\r\r%T��L�Dg�TШ�Xd����qY������(�᎛���4ި�7��������a��\'dq��i��x<�`�O��k\Z��\Z�N�d����j��ջWM�N]��w�o~�ݼ�[����|�/>�ҹE��T���^4��Q�*_;��/��_2�m����߃n���o��j��������F���6_z���{���շs�ݱ���k^u?�#��ӗ8ua���\r��\0&Y��4�?���|䯿H���>���J����Y\0�;C@ �R�2l�7u��Z��Z�u]�v�8�6-��T\Z�i��\Z�iQ�V�}Ƕ�u�0B^,�$�*x��iZԫ�����R�a���\n���-�RŰ,��U�T�l�7�e������PxS�q��0*Ԭ*�J����\\�`K-�Q\n�D��!��1z��@�/���F{F_Jźcs��%\\�g��<c�ZHK}J�$KNΊ%\"w)0T$��Ӑ�>Dˈ�\rX{�&&?�]��T�)�i��r��9���a�/�M���;ￓ�e�/~�ŵ&o�ԫ��&K�晭����(���ih/\r]�ԅ�|��	*��X�ҧ91Y��E!�ه��$�.U.T\Z�(\n�#g��LZ��u�v/��놰J����wfY��Ba�HO`�/��K���K�bŅ���n�H�s�Ж*e�R�e\"^ޗ�Z�\0ʔ�%�j�\\L�7YZ�W\n^����EB�C�q��Nb�ޗ��b�,U^�5��������H0d�e��s����57R��kX/B���)���5>�Ï�Z�q`�B7�;x�o����|�ɣ,�v������\'���Q�{8)T ���=�\rM� @-��w�v~�G������xy����y��yhԲ�/���K	TP{�y>���q�+n�?�ķѨ��گ���s(/���E�Tʃ��H>���z�nؿS���LM���n�{��-����6�*aKV	�H�\\	B*����=w��>��~�Yض�*���� ���P�r��`߶�@c���V�PRR���f����tl��+���(�cұ�\\�j����!˅�X�\n�UŲ*X���L|��uV����]�\r��.��b�����	�.�4��h�����+��T����{\rubdn�F)C���\\� ����3��������S�dnr���;禸n�Vnܳ�-��_n����s��=�Uk���\'\'�r�iC\Z6�~E6�A���\'b=��hhR#K�D�����Jk{$Ǣ�M�u\r]�$Oy���9��1&��r�^�v/U��Ob�Q���q=����ɲ\n�DW[��� T!X�u�#�`�\Z�Wx�k/R�XL4�������\r�H\0$VO��m�qG<ʆ�P��d��W�&��Re��L��Ș���N_�ޢlZrU���`���J��2�G)���\'��Z�fήL�[	g<.8�����bY��*��s��,�۽�_�#8�g\"{짛��gr��2d�5�J�C\"·��H0^M��Y�Y2\r��\r������G\"#@!�1��\'&\n�F�=�(93\r\rO��ȵ���/�i�>f�\Z��c?����x����ֆ�Z��D& s�xT�%4p�����*|�w��w��~*��3ϟ䑇��nو���gF0�\0�~ShH	�/=q�O|�I������w�g�����Ǹpn	fBz��}��\nM����z�������n���פ|���I��ݯ��g����\'u�\\\0#��jw��?�3�ŗ�x�G}�h�!���L0��?�]��THT����i05�`��y&�N� =A���m| <\\�Ay2��ɭ�j�i�0�5\r���<�*��������\n�h�B��8^�� ���e2VoP�,�z�z�תTt����,�~�et�������)v��ðj��Y\\�S_}�?�UN��j�*�*s�c욛f߶9f�\Z,�:|���y�M��ꛯ�^��h~�;5z���g�I���f$�c׋6[�T�c6P�J��/��S�O�^os��놽X�����фb��Sc\rl�B��绉\r���_ר��[9s���,079�0ffBԠ=:]\r�L��aa��p7��e������x�b3��=�Y����d��eA���b�C�9Q�s�|Gۻ)��Blx�_9�9Ow�ѕ��}Go�A�2�y����H�j������ד�qǋ�o��^Gאˬ�`bB�����4�F\0\0 \0IDAT��x��z�?���y�ko�=o�\'����|�y�������q�����0*D�C-�6�������x-[�\'8ua��{�9�V�a�T�|l\0#�uA&���u�Wx�c|�S����dvz����o��K��>�����T{|Ә:�j��3���?�4��y�=۶�Fv㾝�܏}�}�N.��\r�nI�Hϝ�8�����^�����=��S[gB!�L`��\0���u�\'@!�04�� @��\0%`�Z�j�hA�$m?@Y&�e�׫(��ulڞ�M�v�v��aӿ���F�R����h`Z��L]�R��Wkh�F %ǡ�i�.U�b�i�\0K����k�{A(��yx�O #���?�t%˨(\02ɗe�\\X^���r�Cc��x����s��x��\"~� 8^x�Z�;�x�2�O�c�Q�V���F?b�喡䬅�.������`�<?ʊn�a+*G\Z�N��\"q���\Z�_O���͉sx��qN���t��ﾅۯ�ͥ�u>��W�m�v��\0��eg�J�����$���\n|V�M.7[�߾�����QG_��,g!Έ�\"�]�\'\"蕼uFW7T��8Q\0�$��ζ�\rSy�Ɩ�j�=&������K�R�,�>%أ�lr������d���ZUt��|� o���G�{�a�T\\�L9p�s��0���LF��M�Y�oW##�=f�j���f�_�D�^%�A�_uܠ��#\0�Qϗ�Y���Z�E6�����Ǎ\0�A�K)��	��\n�������ط���J]F����o�Թ�|�+����еDq�*��(W����*.6%@��7޴��z��8�w;\0�;��~� K��J�\0 ����!�D6i_T���y�ŉC/qqq��s�\\�{�o�7��gy�g`a.EsL��\n��#���a���!4-��v�-���|�����Zf&�ܝ�@��qǭ���|;�����3�`�\Z\\9b\n��ĺIll��>Ե�\ZhhXFX.���8���٥�\Z\r]GvB�S���P&<�\\�m�������t��MZ���I��t�aX�abj:�iR�ש�Ob�:RJ4�Ĵ,4�@u�+%�)h�n ����t�WJ\\�eX�h�]GH:�CH�|;8�E�kf�2=�5�s\\�s��\ZB��z�ç/�7�?��N��ݶ1-�O}�i����ؾc�7��F^{���N�2�U,]\'d�I���(��*����$�ڢ�1�F�G���>�	����\rMв;����:���w�č{��0=�#���<����䵷��J\n5D~��i��@�䋧x��i\\�g��y�N�D���I�\n��D��_93\07���ב#�Թ�Vf��>��-W~�YN������V�hYӕ�/�w�U�Բ�\r5غ*�y\'��`/G��j1��Q���BE�-\ncYi��CI��k%lW�=(��\\j�*U�Y�P!��\r\0�\0�D\"1ޔ;��Шغ���B�<Y����U!�n4b�ߏ�3b�=�\n\0L�Y7*&z���s\'��?�4?�cog�����^q�>���{8zv���Þ\rM+�C.I[V�_Xm�ka�����ｹ����9�L��5�3���&���U��7�Z�#g����=oy5��ū���U<��p� �{\"eh��*��Z|���W���۾�) 3>V�]o{-�}���sOAہ��}��!a��ع���]�=��>�2�P&����F\0���#Z\"c{a=�&�	@��X]_���\"��qE�0��U�Z�ىq�-�L��p|�hx>ʲP㴛u��VYo�|�\Z�\"����n� �6�U�1=Ocr�F}�z�N}lê�THB��:���4\r_)l�t\\���$��ץ�x��i\ZR拗��Ru�\n�~�z�/ٵu�w�B��̎7�Z&B�����ʣ�NP�X,�Nq�]�8{�N��S�X[^�+�a��nܽ���lc��&\r&�a���%�Q\'h�G/r.\"�F��Y$)<�)}j�3�6�\r;=@Ӳ�;y�O~�9N/��m�,�ܸ���8~�\"ϟ<͍���}v��i�v�l�Z���mm�Jף�Ƭk\Z\Z�\'�����g0t��[�096�%�]Fu�R�-*͌�2|�\"A��Z�����h�C��5�hS����)ꑩx��х�GȌ��mV�>;������\"IŬBk&���\r��\r�h�K�5�d>H����\nj�z]$8�ʡzd�!.�P\r��Y�,LZ#\n�D#�q: 4L��y�5�ԩ��/3�������F\0��A�\nC����Û�9��[��2��e��ݯ���E~���4mx(Oe��D��H8���!j�|�u��ޛ�v{u�ך:v�@�r20\"��I^�^�й%>�������V��h�x�;^ˡN�?���07�%?�Ϫg$5N������x�]7033���{��o~�=,_\\�/<\r�w��:�D��y�-��������`�P�\n20C��2�2�aKe��@��\"=>���8����\n��+ح&�a0>>���4�E�^�bLM�a*��C�ˢ11�d�NǶY�tX�t����i�M�u���(ڝk��%�6V�:6�0����ju�W\'�2�)�@��\n�a\"� P�x���Fx6�3e��F�@�I���\"Rt3E\Z˰���l�+�m{w��.���C�y��i��8é3y���n�����-{wr`�v��g���a`\Z:J�⾊��ڠs��l�lB%؛�@�0q@�Ȏ�R\\\\^����x��#`\\�ww^������c<s�%�y��NN�r��S�T��6!$:�u/W���y>u����l�\Zg���4�O�C2\0L9�r�\\�C��	M��������h��ʙ,!Fs���7�!�gdLJb�x�����FÆ}�B�̈��xJd�\n�۵��>�Q�#E��E?���L]��=.�\\&|��:��ؼJ��P�n����/#��0�FsM��z!�j�^m����y��oN]z��?��od��\n����Ό!�� ��2G\r��h��c]���y�~��;���Y�ǟ;��/���i}����,d�\0&r-Ӏ�K,�x\Z�L��f;o}����GF� SL�@���W��������;��\Z�?p]�\r���}כ���9~��@���V�x۷�Ϸ~ӽ������GN������W��,�J2���Ƭ�o���/�\0�el��z��ui./�9�n���g�kT*�MM3)u�s~�2����ԫ��1n��JM�8��±��]�����0�c��/��$�v���S��Y�6�@c|���i�}\Z�SX�� �P�I3��\n�aR��0�����0*7R�6��*���q #	\\7mD5��V��O�����Bpݎ�ؿ���q^w�\r|��!}�(�����K=~�#G^�SS���}�}�^^q�nܽ�����O�;��q�P���TB����5�B5��T�tA��S*R��\".�\"TR�~�34,�S��3����/\\�ȉ�t�Vٱw;���}���8�>Ω������V��&�0�e;,�q�Ĝ�v}Iv2M�p=�s��8�t��ep��$��ň�c٘�ФC�aU$>-�P}���S��\Z>��t��++X�\0�A�rH\\�RQ���H�Le=\"�1���S~����0k��iB�A�YqֱL�I,0�/WO�s�D��.�y\'�M���y���]����~@�xgy%C�˰�B�F�Gi~��݃���	~$uE �L\n��r�a��ni,�6O~���s�^�<�}\Z9���k� �D+3�[^}ro�l����_�������j�}�^t-��7^��x�x��Q�>��2�|~�L!N�%d�e�@��wq�m��Z����G��#�q�\n鏇��d�%#��Rc͸^���J���+,l���������o��O�	�K|�\n��JA�J�����o��=|��_�X�{k�b�-o}\r�:�o�����3��5��y��k���s�9�vr4\0�b �lס\0&~]]S�l�Z�9TԪu\Z�S�ϸ��C�{�nI�� t�;6_<y��uh��T�&hLNR���ё���|ɵH&��8�b��xm�DS��B�RX�:�֝�$�0��\n��֗�p�%��S4��C\ngäR��i:2P2���\n�G�Y&U��,���C��DP�T,�����Ǟ���m�ʾms�R3�-S�|Ý7q˾���9���1=�3�N�~�_�����������r��mܹ�\Z�o_��|�����?�#��sDw��pŌC�&Ĕ����gZ	\'Le�>U�T��oԒ�������J\\�塧^����Ů�9�n��L��2�y�m�3QC�4�@�G�D w��R�rǴ�k,�9<~�%�9z��z���~��z)Ny�\"��3jdU�n�b�����\"#�e*�^S�\'\Z��\\��FJ�RB/㤪\Z�v�=����빜�_>C#r�\Z����E>F��\0���C�:I\\��0Q��-�L3��(Cc��.�<����ӧ)g@��	���%Ԉ��Q2g}&��� x{n�2g.�G�u榦�\Z�j���� S�GK�d����OI���_e��4������X�w�~-��/�����1-��c�*`�?fD����6��wp�]�S�ǝ���Y9wt�K,P�L*��{�L��b��vx��i���I�jpˁ=��M�䳟�\n�/��1�	�b������Anس����-����s��]o�ࡗ��_��9\Z�˷}�7�:��?�:7�f`�\r�e_�[\Z����\04��&��Z���LӴ���0����@�󹼾�m��w�^�2�i�4;6�.-���0U��f&�Wk̙&f��]���kh�������h\0:B�PJ�:6����m�C����iX��Uk�}43�\Z�ͤj@�qp=�@�\\��b!��|Ly���\Z����y���(M����ܸ+�z� ���d��$;ffصe��;ػu���Or���N��ܥe.,����Ӝ����7�ֽ;�L/�C�M19�n0��J�r���<m�5Kv�m�`�ͯ�it�#�����X�����-ܶo7��̰�j��s����\0B�cP�k�87��҄`����9��ʎ�inڽ��U	��%�#uΈ��9�\r_P�\\9QmQꛇ\Z��o�=���&/p����w\\�Ҧ��+�hm�������t���w�����\Z]U*�������\'9u���x���iL������ _? &\'C\0#s�� ��z��e>��\'���kx����4����󾷿�/>�<������q���z�����XY�U���o�����Oym�zP�F�kE���O͙S�0\0��r��������� �4t�ݻ���	.]^dCrAC�ߖN��<�������������g7t���}#?�o�Ǟcmm�{��W�s3���y�������Ș0$C6��l�Wi����i U(x)���D�5��wq�6~x.�k�;J4�@�\r�n �P+��i�����Zg��)���t���Y�g��:=���~�Ƅ��)����\ZX\ZJ��C4��D3�vg}{u��N�\n���f�269�Qi�����1:��M d��\\�E٨���0�\r�a�z��K�/r��y���p�-�9�z?\n�z>B&�\Z�}`{�����������C�q��Y��-�?͉K<{�,�?�O��M�۾\r�0B�th�\\��[��<`�2���\rGh#���(���uʋ��7k�����j�O~��g/���w�s��ס	�G�?�����2�5�[�^�a#�(�ۜ���fqu�c�.�\ZsӓL���k���Ee�o�32�(ry�/\Z7J��,����޼���&�LA̔\Zzo�̦�>%2�R�a����p�����J�BgJO�J)DI�	QШ�F$%�ZEّL�3)6��\"�ᥩ\"�ъ��B ��*B�=6�Ц��e1b\0��Ů�]7��#e���K�p�4�p�5� �m/կ����	Ĥ@J�)�,�����I�=�o�ރ���8�o{*P�0;���;9y��;�24��e8�Q�Z\r9t�v�s����rz�j�6��mT�F\rрI|T�-YeW������5��ęK4[6Dd^�l�⎻���w\\�V�y`�Z��|�#�c��-��O|{�*����.~�_��?�����}|��c|�_���0u��c!+�0����z�ֈ[��X/��@ʐL*��:x�G��v���׀A�����:�;�z�I۵�ח��|���9-%S�*�j���8k�>\n�������f}u/�%�\n϶���aV��\Zf����ﴐ2@3�e}m��1E��\\۱��G�J��N��r�T�y�INPpF�	^8u���<\n�U��F�Z�F��S�t��~j��D������n�O~������4�-��ك�Xn��_��&�|��\\n:�%�F�HD\Z���x�A����:ιNҹ)S��tc^S\\ZY��?�8����`az�W�p\rϿt��� �\\��[��^���0��KZ`��;�\"ٕ\"�/��h��t�\'��ı�K��:�u;�1\rkP֗�ȉ����G!����J��zS2�\'�fQU�Q��H\\�׃%��dL&���(�/{,��P*k��6��氦mP2q�F�RΚ�,z]!J�|eJ��K*ZVVH,�c�Tn�T�&\"��6S�̋H��t�2�j��>6�|/%�CS.����څ����؞�$bs��b֤�,#����:1RF�#\0�����P�)����<��I~�|������T���=�����o���e�X���%�B�F\0P^\0s�L-̄MՑ�ɳ�9��D\"�c)��\"zSoI�a\0����x�<�D���.��u���u��/�A�\Zװ��4T������G��[��ͯ�;5�3�������=�f�����9;�d\0�Q(��\0��W*Ҥ��\ZR�ލ		�d�Qcb�A�^�Ղ\0�A�8m��d(��aa�M>��!�k۸v����=4C�����,���$��~@�uXw:��6�k#4��hBC\ZJ�]���1*u�G�TM�z�N�Z��zX���\n����A���\n�#4�?�~OA����c�y��i���-3�L�!�M���-c�4\rK7����~C��S��2̓�c<q�,N�ê�󅃇�y�[�\'�3���Ɍ���h�\Z	.{Ȍ�0�\0E��YH��8ME����={���>��K�i��1�=�_�Z����,�������>7�}���J�\"����5�$�A�H7�g<M\\X^���3\\8s�7�w����c�p����3�L��:{1lJpv���\\�i�6������ F�,O��R1�T���٩4�j��N~byA�֪�q�\Z��{|��h�D�b܉lb$�U��E)�$\n�)�Hޥ�\'R}J*\nszY�^_�(|D�\\Q�d(��]\\�ĹS���ĝ���k~�喟�lp(��E���k4�[A1\0��l0I�4��U\n�\01Q�ov��Ǿ�����{�L��R������;��O>����r}L�^Q��%vl:.��,�ua6��X^m���[ha����2�n�����+@�d��^�41��0h�,n1-��	�y�.�a\'�f�ƹ��.�-���?$#��)]��\Z/|�8�������X����;x�[^�O����c��x=�-�.��Dr��.�T�����י��D����,�cm����2k(�����!�ۨ L�F���\"�}�>���<�U��u�J�uZ��x�K %����4\r,Ӣ^o����y8�����f%2*`fb����\'&�����{�I���J�V��/��IG��\Z<�_{�<�Z��vγuj�X���=�=?d���x����>3A�Z�|�!��vC&�f�G�;����޺��k1F���|T�y�uXD~ r��ȣг������d\Z\Z_=t���i��X�wo��7]˓G_�虋��:��m�L��}RF����c6�<.��HYJB�\"/�-��u^��ȉ��:�.la߶�X�N�`�\Z^�ئT�8z��\"[�*7���ees�݁��B��{��^7^��p�(�UI��U4v��VC�R�Jzs��R��U�0�I��LA�N8���W�8ϧ)�5��!#(��o����=�rU%{ME)�����r��V���^5K�KϞ��>ƍ�س���\0\0 \0IDATk3�I�?�٬�ڗ_���L6���G^v&����D��1�)~��?̽7]ë�>cZ��\'�����>��GFh���sփ�q�Yv�Oc�qJ��f���4:j��53�۶Q���\0zlf����6tt�$X^uTd������L#��v�e�4\",�\Zxj���z������45�\0�\'��F$[׺�:����G��7~�/�����T�`j��\r�v�v�AL�����,d\00)�7b�fŶ�L|�T�Ah+������I:�˙�9u�F˞��<����]\'<�L���8vC���JI4]�g*T�<�C�#=�Ns��Vm������q������3��ʺ��������n�B�B���`n{0���=fv�ޙ���؋ǻ����0�`s ���j�Z}�Gu�UYy�����yTw���$�RWVd��������~Y��nzs9r=9,�b~~�r��gK�n��)U#�w���C}��rǕ����_]���J��íR�0=7�3�Dn�\Z��d���AQ�U��z�\0�H�i���G��XZZ!([N�ml-$�찾ڞ��n�~�6摫epV[�!: [�:�A���Kg&x�œ�M����ƑA�������X)����id��iT�$c�+h5R�����q�I�,E ��:��������[dp|\r}��z*8m$W5IJi��mԽ�cK���kz�F�Z���Au۹�!���5P�r��g%d�����\"DrO�>�\Z���~��L6�A\n\Z�j�H��>��n\n|D��ȗ�\nk��K��w^�Q 	�\\����y�&��\n�l,UmRƺ�����ϟ㉗N���\0�k�X,9m�����W�\\���ɫ=�#����L3�%tJ��ɈH��ME\"�p�\n����^6�i��M;7�?�\0��f8|�2^.�����ϗ�x�uӗ�6���%��/���;wct�I!x�������I��y(��������[��Y(�ĳ�0r����^!ןc�����nT]�캘�Oe���Փ&c踞���\'�:�,��ӐQ���D�	�	˞d���|��w����n�P��ۓ�_��[�x�_�����2�u�R�l�\0&�K2*��I���e�9��{��D�4rY���,MХ*,�m*���8v۶������2�U�W5<�G�&��F��>��s|�C���8V�RD5�hF\Z$���r��e�x�K�R��Y<��q,4#E���\\.b;= 5`�\Z�\';�\'�5�w�\'ɤj�Jɲ9u�Ӌy@��*�F�����fk��+(B�1\r��%f���4���b\0`6o�����n�\0�D�xc�h��h4l\rd�Q�Ӧ�!ܔ\Zb:i�W���C+�E>�/�+��i���R�Tx��#<w�|�o�4n߹�-k�x��e.�.2�������^g���r�F���JLT!�E��dt	��U�c���Ĺ�(�/�[��i��i�,Z�.�}ՠ�}��9pM�lo.�8�C�VeA���Û���l~�Dt숦@��&z���7��eu~JB��+|V�8�m�)-�Tpc5�m���N0�\n%�[ə�ж�2�d\"�t=oO�$�?��q���oYO:�C���7o���\'���<�fi�(a���/��Eg+F�߿�UA��/<������Ͽ�5=\ru�oz�͜�8ͅ�ي(�կ�⫅˜��i�����P,V0S�ܼ��?��i6�siv�T��?s7��O2�����\r<w�v�ft����1z�V����!$p���G�u��=��R����K��6NW6����ѝ1x����NP��M����\0��(�<�������������9p�������iN]���\0��(�c`�	��`+��շz�Ī���j�\"�\Zz���m�L�$�2���H�HMGQU\\ϥl���XZT�6ECSU��\Z&�UX4E�ul�F��u�;�up+E�=<�LQ��:(TUG�t��s�JϮPI�K9*�\n���>�&�|�ߢd�j2cW[С�\n��\n�?|���:��1��+�&_�W���9�{�O�q�ZX������/qnj3�f��u<p�.�|����0�R�<�����{dsc���jX��8�:�:^�f._ė��iГ�T�|�V�������W�x��&�@&EW��U{�2:��c�O�\n���ìB�`�%e�WU�P�#�]�+?�&(����r����879���<Ɔ�~�)ח��t�U`�,\\g��hV����PA�\"W4ǚ��ɦ6Z2��<�?(��W��ձy�#ؿ�V���Kʕ��)8��ƨB�.Ӌ�|��05�/��6$:E˽��p�b���������I���\"���6X�>`B����5����2<����q)]�\\&�2y聛y��i���Ob��Ԓi��f[䵀+^�zˋy���Ȟݛ������Sܰg3.�q���X���|�r�b~�����c������`���Ƈٹ{#/<{�r����F�ԙ�]�̥�z0M]U�l���<O>�\"/����4md�g��*L�ah���?x����sl�<F�+Yh����;n�m?s\'O_$?������s�P��\0L���C���k���)>MS0tS�Ii*��09�D:�F���\"�O_Ƥ�+�/�`9仺�uw3���K��j��J�\"�J׮`���}OJ,�BQ���\n���VJ�V%��݀�Q5R]�dz�Iug����c�������<,ۢ\"l�ūe�e(3-Z�1�Zʨ�3EB0�)\nŲœ��0���0\rz2)���4:��6����~ঞ/��Z���K\'�9t�Y��\r7�����«n�A�4ɗ*m2�a�W�\"G��L�F�Jt�������E�Q(=-��M�X���,ϟ��v<6�r�έ�d3��Ҳ��]�:�<�r���)�-b�v3>�Ƕ�QTE���s�a��u����؁�b���h���5b��?��g�#�+J�!�]��3�|���\\ʗ�82�����tc�\Z��\\}���x\0U߾d�4)I��Sw��YX�e���̒gg+vG��e�LQ�8���\"���,%b��(i��%����.{����\'��X�#���X�c�k�\'�[s��NJ�Z�I�M�m���h�,�HR\0m��ڊ��)l&�Q�����\"�,_1\0�0*W��y����_�7��\r��e� q���-Y*�d�z�L-��p��O^��\Zd��Xk\0\0�[���q�$H4Iy�>b(Ǖy�+?d��u�z�V�X����c������C�9{y�+Em&���&�;�g	Ҧ��*L�.13���>7�Z��\rk8wi���fٿc=�<w�uQ5���Iu�X��L�@���JIFQPu���9���f���)��;6pv�\n/9Ź��8^k�A�\"Z�Iz�2*)��v��X�gғM�o����y�������1�Z}?�0\0J����<\'������TٲY.�\nXN��z.�L�lڤ;m࣐����f�ʛX��\'�M��l7�ׇ�8����<�S���/�A��Ǭ��J0o�R�la)�T�0q��)���H�#��a�2dL����Uт��p�Iw��K!�y/$���O�����Iʅ\"�C���4Nw:��LCG����G�r(U,\n�B�B�P���i^<{���]fa�Hw:�[����n�����uc�:^��2���Iȶ.�h�Jՠ�tAG[�Yf��3CS���|���^��/��:�vnB�4nٱ���,��E��v�\'����ƉK��ݓɗ� %��?s��T,�g�����<o��6��b��>:���2V\"\"�JW2�\0�=Q�uXX\\���3du�=�60��B�v���z� �9�f�sA&q����(z5̾&��AA��J��L��3�\",N bJ���J&��Q>\',�b��.V��!�)�j���I}|bF�R4&�d5.�(�G�H�l����3��_��*�\r�!�Rް���55B.s��g\']��.�����c�0�7�g�V;�k�W|�#b`����L�&~�2&��ّU)���_5!L�V>M�)k��n���>��G�����C\nZ�T�½�����w����1[�@O6.�CD�*r2	\\��u�MM����ÇOӗ���o�����6n�>�w�8���2}�Y&_>Oyf���6s��	���Ї~\rEU1S���SL�*���;7R����^b)_�[.r��s�y��Slݳ�[�nf�p/�=�9q�\n_�ܷ��k�ф�h���w�Ea��;���|��3��û���	�y�\Z������S/�ď��Pot\'\\�M\0�\0�����ܐR��@���<,ۦX2���()I�*��\"���2��JH��i��Rώ[�H�����(\n��`YˢT\\��V�h�h�\n�����6���PHu��v�!4)T���4\r�T*�\"]jH�E4K��m__G�Z�S(���_�^ף;�b�H?�csaz�|���{x�Oٲ����[����g�]�B�B�b��>���gߖ�غ��[7Г�`�^�%��;<\"Z��̒�9�:9�;�r�����J�v�0=��,_���L����Iq��Fv�e��UQ���:?>M]gbz�o=�%�]ct��7�z#Ϝ8Ñsٲv�ͣ#�d���^�I��-=Tb�1�fOLU�M���K\'��f�����֤o��B�=]W�������b�׈l0�맹�M�dX̳��]��G;��ΚU=���ık\"�+Ì�5&1~�c\r�ȪI�h���	8��d���j�E���J����\\�����8qi��<p;;׏S��k�1~�\Z���l�x���N���	Y�v&i3�agV�\r)�]×�\\���,?��v��x����j`�A�T���>���|��OR�X`��&�ز�����2K�E|_&z��&�=Y�-x���\r��͘|oj�G?��x��qz�\n�G�bdSLL���]{���%^<v���Y��]f�x��	.O\\��T�-�!cR�:��\\�04<ϧ�\\MEdӁ\ZZB���~��\Z\0�\0ʌ��?����SG��_~�[_����{�]���ܺm=�����玁�����s-\0�o`Be���,Y�4�U�k\n,�Ĳl�Ke<�C�U<�B�T�0\n]�0�=��m#���覉��节\"%n:���d�]�f\n�s)��,�P�OŪ (�N*���=\n�U�)8�N�S�(*B1�AYS)W�T����(2���cR$HT&�ŕ�Zf.Ck:)PUU�˳����d(j�\r��9{�󹲰D�\\�u]J���e.�-rif��|�l&æ����0ʞ��j�V���`���S�\01,������dF�U��ZvT�ѲL\"�~V�a�0jU�����z�0_��Af/M�\Z�q������[�w�.{�&��´;d����*Ss=�l�۟c����9qa�|��;ｍ��^�)�6y�9�э�����M��j�Ռl��q^8u�o=wi\Z���n�����Pq<�}y�JH�q\0�����=I,h���8/�ʴ`A��I��Nن�+T���v��߫�+b�̸��\\�8\\���A�[4����2�l6\\���\'��5�Xz\'�~��`u�I�W	)���l�:>�F����j��?���\"��mR.�������3���i4Ue��(c��x�o���4q�I\0���;�1x	����q)e���ί[�~[�E$���1s�V�Wp]�P/sKE~�Ͼ��-c��\rr����������<w�hZ�LY�*6T�^����\"��k+��\'C��Q{�L�|�o�\r� 0B��MBڄ�n���π�u����j\Z@�l���\"/�>_U�48{�r���\0E������W��� �F���&|���%ʮ�V-�[��������^O�\'�_|�o�x��l��?�m��/��!��M����������?���@O�+��\\\"��u0�S�v�3,!𥂮���b�\"��.�KKMG(M�I��q��a�VU��)r]4U�b��{Tl�v�\r�����A3Rh�N�\\ԥT)}<�Ŷm����,jx)�����h�U�vll_�R)#]�r���x�5u���D�:�kˀ%]_U.�.rt�\n�灦0���O��OS�斋�%<��w=_����΍�ܴe=��9����y���l5!�\\we�LX�D33�fA���n]\"��.\n�α�\0����j��.O���T,��1�����[vl�;���:̌�ǭЪ��/�ɗOr��Y\\χR�{���k����Ǟ��gظf����M�4��]�b6W��+�+T_S�\n����,\"\"�*�R�7�ү?7�󙘞�ȩs\\�4Mn���FY?<�烢4)����:!��eE�.�8���F��� ���U:f;��\r�Y5���Y=�_}�`YDJƚ�t�<�I�E4���?)�I��@�ؾ�8I����4Z���x_C&�Ӓ`�ʮK���3��yKm?�4R*JN\\�����X�fMKU�do8Ѱ�������XE�q]&fg9x��r��d��W*m�\"�Ɣ��oY�p�%!�V�L�&��Պ��J���r\0&̾����H(ju\nǽNL��R������mclZ���W�n_���S�~�K�?7�b��H�2زM���W�29�P�ї�\n��}	�\n�LL��Z���Z�aD�\"M��%�yW3锡�&m^1��x���,�6�_*�ҩ�t=����Ԟ���>��{?|�������,�P?��\\�S��߽���64̣5C}��_y;O=~��_8�\'��YUR��\0���mQ/h�<�#�\0�k�F6�Eэ��(p,��P����+=�~�R�D�T@UUd�O�0�\0M����������x���a�N*�BQT<�ö-\n�eJ�4�k�i:Rǡ\\.!}I�b�_.by���·)��\\���a��oN�b :��Wpyn��\'&��WB�v�YZ�ĥ�@��v�їj6͎\r���m{�k�����PȤL�R)TU���H��~OM%R[+0�F�t����-�g����������±�<}�g�q�ذy�w���o�@_W�����ŉ���ʨ)Bp��^8s�u!�b熵����ѯ����,���Nw&���x^\\�$+��x�p�8\0\n���	�R��KIJӐR���x��Y����^nپ�=G�\n�X�ad]Ģ\rg��h�\\EH�W4a<DL�b5����;&I�7����d�о�@����>T�Ine�-ϯ6�O�\r]P��>z~D�Be$�h��#�=\\�x�3�4�\n��m���s��Cú�Q����8x�4�O�g�X��<�m^O_W�L:kH��{�8iXq��#\0(��>}�#�.�y{6����E(-����U6�d;*���VO��}�Dݠ7�\ZO�H)�$u���\0ޥ�2�#G�����^�RJ���C<������=HOwc����\0�O]⣟�&���x�$�\0S�ab��˳x1��>�r]��\"4�j�\'\\�T�^�\n�Y��UJ\0d��.~?�:�C��_�OWƌ����O:�Bٮ\Zn��\0��~T�>�R��7�7���C\'�η��UU��@��G���?�	>�g�E6m6����a~���������+\0g7D`�c&��;cj(B���Ҳ��)B�i\Z�i�f�����}4M�0Sh��������X@�tt�d��L�R@�8��S�e�p��4����\"���0Qo�u�L�.)3�\n�]ay9�cY8����eWR(�1UI�ba���h	�KW`Z�g�D��p._`bz���ƺ�~�l�����e��Ţe�/U�S&#��l\\3�p�M��J����*n�w�Z���J���t��˿\'u�x�����<{�,�r%ep�\r�x�ݷ����+����F8Xt=��r���8?9��|nڵ����.\\�ԥ)>��=ܽw;��GԦZ��R����I��J#�w	�G����/����9yy�LW��#�laM_/�J���A&H����qh�?�\Z���|�~��ͦl3!�:##[����v�*����ʼ�Yߚ�e���J��ՎCG{Z5�*W*<��I�:ˉ��\\�Yd�\\�b���8�����L��8i�ɴ�+ŏ/��T)=��<u�K�E���a��0�T���h��X�d�ɫ3���Ez�p��E�\Z´H0�:5�BM7\0��Vo�1<�uj��#S:�\'_fۖ1����\Z��4!x߻����i��xu	���*��4è��&\0\0 \0IDAT�+s����o��;KO&\01~�P.}b�M���_�����l��)\Z���ҝΰ~� �L*���E�z�(���t,�m`j̏m��J���nc�����OE�X\"m�.�x�{���=�?σ�cA��\0oz�=|��ߤ�X�\\ϊrX;0�)�l�ˠo) ��,.2x<�FS��PqܠT�n�\"�ʠi:�\0W3�fy9���M�P���q]�1��(A�p`L��:���h\nғx��c��FB]U1\r���4�l&�a�H��+���\"�r��|����zZ6���8�����i+8�A�T�IY��:,����\\���R�X,�,��1:��C����K�b���������Q~��f��<}�,\'/M3�����5���{ٷu#�\\����l�$\')�褼d5�e|L[�[u\Zh$r��!��ɗJ��4�ɉ�إ\n�޲��n���!<�Ǉz�P\'��P\Z�KtMc~��S�Nraf�R�BVU�������y>��K����F֏�\\�D���\\�/���26ߤ��0o(���I��1��ď����ep\\���el\r)3M��V�f.h���ڕ�ήx�����ʧ�E|#����~B��fkL$15@�4���m�QU-�j��dv`E�\n[:*]��Ӯ��s�Dn9i��<%���paj��>�,�ݸ���������/sav���_b|d-�t����O�J,#%�r%��(��������`�*�r���Wx򥓌\r����1ܗCUԨ�UǻzM0�\'��G1�YB�\"�ӫ(��6� ��$H��x�U+Ako���������I>���#��ý��BQ��߽}=o�yꙗY�|ק�k3t�\\7Ϝ����y��5�B��1�}.5\0�Fbz�R�qcO0ͳ�H�qȥM�nXKOw:��K���<\0,�ʮ�\rR�oe�����w����~�>|\n6�\r�d�\ZDfR�Ke>��s�{ٳcc�-������/����_�>�+�TD�C-�,���oݏ�2�H��6i�}����ʳm��K�K%|�C q����躇�hz��h��i��NW�]Oa�����9��`�Ҥ���⑸���~5��@�z�X��m[���}\0��n�f����ե�KȘ\Zf*�PV�dK)�(�_�vX]��W���}�O�2���\0����cܱk3#}9|�g�?Ǻ�!vm���/O����|��Q�\\����<f8~a�5�9vo��[��c��t�R��E���d�N!��[��8�\\�W�3:�i�ł2��b��ONptb��b�Lw��8�-;�������U�uՌ��@w�dny��O����)����^t]���)����/��=G��y������R�0K$V2�B64W��ٔɡ�>󝧘Z\\����`/�=��uC}خ�a�)�Ƹ!p\"C	���HnX�s_M�c�ː�(���֪�,1ۑ(S��PU�\"2i���V\'�ާ������y-#\"C��5{έ<�V�ϴ7��r��>)b{���\\�=�7�>�m;6p��d�i�ncra���P�����e�#�I2ʒ1�Z�\0�lf�<�@�ls��E{�$���`��uC#tg��>��~�h{w�/���$/��؊G�~��s�� I(e]b�E�P+\rI06�#�AAH�����X?��䳛ֲa�\0�֍4|�}���Ͼ�u��O?B�lGԎ\Z�!���Kgy�����F@Ln G�@��|	��D�e<�sL����P������ɮ�����c��)\n���g\0#\0�C�.{wo��o����<��|	�G\Z7cUE�*/�8�������[3���س����1;5�O�u����\0Fv\0`QM!��zu�]�CS� �X�O���Xf.a�\n(B t3ۃc[d2Yt��0R�̖��AoK*(�u�R��eUp���0Q5O�إ�m!��i�x���8����yض,�:�� 1P��5US�T��=RT�.{)�\\i��6WYm�n��&6E�SM5���4SU�zز�[�@VUU2�B6�b�� ��G�2:���>�s�(�N_`��,�Ss�k>{�٥<w���\r�ױn�EQ�hJ_^���vwF]�K�U|�svr�S�/c*��߾��vma��\'�?j�v:LBJ����N\\�����}=ܺ{O;ǅ�v����w��Ӎ�8I�\\�y�l\\(Þ\Z�A�ju\0`j�ka9��y��9<ǡ�7��@�֎НNS���O���\"�fSW`�+2��;�9�>�Y&1FMs���]�V\0�\Zr��\ZU�k�my��p�}1����IK7���0pr~���&��/s��]�_3�r�b�@����*\nY�@J��W�-ax\'�O^���ҧT.r��9�{�4=�.6��a��MU�[�ʬ��������Uz�|TE�-���$mZq��	e�P�h����B����x�=�G��3eD�>���/��^�R�TJǲ�Pcx��BS���/Op��y�������m�4��ͣ,:��yA3~<��`\"�M6[���}�L6͚���[^>z�/�qUS�y�@�\n��,�+�\Z?��odja�?��/2ɦ��0,���M6����� �����!x���`���Չ�,ʁb[��E���7�)�!n�L�l�1tD�a\\�(j�l��\ZN�D~�\n�k����]��J˘��i��2]�f\n�RFU�A���P�0L2�,�a`�=�>�\"�T*��R	E����b����Ao������ᾏ h>�}�+��/M����/�t����34\"!\Z��Z�5�1�9we���<���v�[���!.�W|�咇\0v�g��u�Z���?��z�e+\0q���{��>Λ��ǻ5���U�x�k|t켑 �\Za5VQvZڙ�v�R�~��Q�/�cx�_~�n�\r���2���o\r�Y�x����sWf9xr���\\�a��!n۱�?x�����w�L*��GD����\\��2zDԫ��5٨�մl��t���x��)<�Ea�@��ck�h8~�hv=bå�|>տw��X�@;I�p�U7!|U���M�	�����Ll�����|\\`�7�:����)D��U;&��6�bdЂO�D���������W�/�c�=���z���*ϗ���I�Oϱ}l��TU��,W\rc%ٔ�H_��\Z���P%l�/U�:�M�$�����e`j���|ff9y�3�����ؽq��n|�����5\\K��K��:�\"c��ڞ�&[Z��&�/К~r\r�ě�W`�e2�)7u~]��C9.���\'��=6n��܄C�Ǉ��_{;�P(��_��g�>�����͗���c��=��}�FN<I�w�20aɞ�\0L���K{Н��\Z4s�]�����?O��<���mI��a� �*t)�����-����_����ӈ���$�8�\"~`����߲yl�w���)���x�?{3��OÆ����!*ZTAm�\0]�!��`�K�*�+�������4��k���3WX�������z�/呮�a����@�}C�S�ޣ�wIU��T�]4��4��.�2Y����Xe��RŪ������u=l��\n����:����Z�qA��/�j|���\\�4\\;�(J�֫�9���@Q&���������k�f�,��\\�}+��#|�u�V���c�&��K����,h*�*g/M��<ř+����۸e�f�����!)�I�V����I��N!�Q�-V*B�X,s��4G�_�����w�N���b�z��AĂ�p�~R@\Z��UU��3:}��S�d{���Ƒ�*^{�.���W����2-�������mp�\n�\r[�����i<��1y�h0_$ܰi�7ܶS��UR�:y�S�1�z�x�L�~�u\"�[�=?\"�.�2PV���	��U�o�T�Z�L\"ؾG��*W����;Y�֮H&	�=���5�g<��Z�ͽv �����K\'=[U�����,��w�z����1\r,�ez1Oٶ�ɤ��Ԫ\rdB��db��a���`�H�H4����Y�~\0&����%����<{�\"Fw�\r��lbm_O5fh��W������V۽����슌�Œ�JB�?��Q��OL2�*\0��#��\\%��46�2�ǡc�ǿ�\n�ܼgs�-���ߟc!_����˛��g�Ě����ne��\0���n�\0{���R o�@*)�P�u-\0	�2Ƈ�����T}il���|���0��������C��Λw�/�|�����>�U)T�|/�T��s��9����ؿw+�6�7�1�6���){�\'���\\6��\n�	���Ek\0��������r<|��.�*2��P��LO�Qu�L#�.R.W�Vx�G���U\\Fh�m�z.�^4]E�4tU�󃌕�)x��44M\'e��RV�>�0C�U�R.a�t�$�Jc��=���|������\'��;V�-�E!�Y*��/�R�l�;��v�H�C��¯�5l_CW&Eٶ���x��y�%��]����4<���]�ȦS+�Fh�&A�X��Ӽ�I<q$�S/Ej��P�ؤ�\n\\�Y��5nߵ�{��\"c��~���bD:�d�RR�,���<3��\\d��-�~t�4w������ɤY�\n����f�\"%_e��ʵ�TDM�$�,EQ�X6�.^���X^̃i�ߓa��a6����c�6�}��\nBT���i��W�YI%�W^Z<��Ie��VXPD�D����w.�!cs�D��t�\\i�a&).[&��f��\Z���G٠�#;d��-���y�\nER��P�\0���k*��sfr�J��`��=ƨx\Z�WKR7��J�y��ï�,��Q����du�������|���\"/?���2Ck����a)|��uQ�WEA����v���j�z*��:C١��O�\nɅ���&C��Rķ)��x�0�4�QiPΪ��J�i�Xy�6����N�/|�\rk�ϵ�6e��dXzGBw�3S�駾���#�v�V\0���;6������Q�f����}+�V\0���Ke�����G6�������x���љ-\0�/�Pb��\0o~��|i��|�I\n306�\\F�MSP\'e��o=�ڵ�����Z`�{�v�N~���~�g�Jņ��\n�XJ�]�Y�v�L]\rJ2�\0��P��>��8�KŪP.��\\�L����d����y��2��\"�]���`��xU��t�@�4U��\r����y`\n��\"�F6�A�4<_b�6�m������m����nɚ��@h\Z�뭈+�h����i[\'q�����{�*�r�����u#��H2���XU���>~��&e�-�3���@2}i��w�{���3����uc�L��\n\"�f�,3�6:b���4	��Z6��~I�vB�o�:n۹�Mk��j@+l\Zm������.-31=������ߕ!o�,J���7�m�WK����2���P��B�N�W�V�eh*sKyy�.������[ֱm|-�f��N2X�@-,\\��\Z�����~뺐1\0��lq��<��dy\'TUv.B@�b ɾ́�5(��}d\'�+��!Z�!\Z��;m��t�%�p�^d$\n��.|qFH�T���Lٶ��?׋�b4��PU��2������دxe�h���	Q��MB��L(8�]e���F�q��5���\"/�;���(\n#C}�@�R��N��IO�q��	ǦbWp]S������H*&�;�Y0}\r	�*�&6F�s�Y2qE�y�$��l\0L����$ְ0����Н�.���g�;n���Z��mb>���%\"��[.�����6�22���xիod���X�ؐI�*��I���?���J�L��Mcl\\����%>��o��������x6020�DQ��ν�y�\r������\0����%N��L���%��ٳ;����5<]C�x�5����>�\'���X�\nt�W��d��ȚD\rr�~d~�J�Ԫ� P��T�\\)sq�2�3�X�\r�X�\"�� �4B����F�����oE7(�,痑��,�)R��m��M�@Ӵ@\nY���B�7MTU�0r��)�s�4Dpo���}�\\�w@���۵�d��,�w��zҊ�f|m`E��b��������[1IF�2t\r����(:o��\0����#��4��Sgaj�^>ö����b깆�>�\'#�1Äoh(\rk��N2>�1VF�9d��\\�/�e���8�����J\"�=����KUE�s.��q���gY3��+3�f3<x�^�o�L_O��4:�6���#E	���A���I����,��|�ٗ�0�P6\Zo{�-ܾsV��5�yJٲ��U��Q��g�cj9q��U�g�^�e20l��E�>�F��p���뮨�E�q�4\n���G�}Q3)%�����4�:\0�����K��f�W�yִR�FF4�c%]KW\\�ern�����0>��ly,䗘���h��ڰ�\r#CL��a!�p/[���-��\"B{^8�\n.yu�T��qyz�uX;����.�T/d=��;�����z�i,����G�i�8�=��$�>+�\"�˚�旹43���y�t�_^f6_��][؜�\'��b;>�-�ҩ��?�Wr�_��]���ܼ���?�V|?ZF�j2?��)� 4\\�\r��ƳBQ����|�����lڰ�vml�֐��/.�/�ԑe�O��ܰu���װ{�8o|�~��\'Y���L���\r\0�U��	�ү�������PT�b��_?�(��GY.Y0�zf�#C���B��ݯ��{��:���\'x�/��!�3Ȱdi�~���{�9?1ş���y�U�X?6��t]�7~�gy���9z�<8^`��e`:04��n�\n\\j�B]Q�0ȤS�R)<ϥXXB��.�t��^�l�f��6��Ja	3��H�1t!%���{n}\\*�����jM\r|c�i�F%[&��b�R�^�|���J�0���)�K�ʥR +,>\n���n�DG�J\\�l���$�֤y5��͕�%�K�q2u�ȦR�x��m���\'�ts��ͼ�[x��g8u~2x��qff�9�]{v0�Ӎ���λ��C�#,6�ڀ�U�y[��fAMh-�*ϦLL=P�T���g�W�p\\���%��簊er�C\\�[d���q#��L�<+\0\'Q���\'b\"+�����ʑ������GGOre!�S�0�)�mg��(��,e��(�����!Hz�l���R��Ȍ�zX+����vr�a��p�J�Kڒ�gIX@�J\'�F�h�=��ѽ$v��0h1Z�[��j%���põ��n��r��]4��f�\Z����W�ND��jR#|�Z�B����\"��e2�]�.$���4�9�#��-�ܽ�[vl�v��1QȤ!|[Q��\r���Lm{������x���s�\\?�H_�t���,]i��a��\nҳ������$(\n}�ݬdtp���Ɠ�5U�K�,,1����V�^�syn��|����C�ܰy�==(���7��H8�^Y��aE���U;ǔ�r��W��:X�D��h\rEK�k�L�j�� &s�*\0#��eq\r�\n߾�#9�����#��&������uÍ�\rK\r�L-��4�&/���2C�=<��;8�wn��ķ�ű��JY;f�\0��8\\	�͝���o���e����������k���\r��}��y|����>�s��>\r]iH��T�i� &0���:1��ѧ�����l���m����x��1yv�^5M�p�MY�;Wc��ͯ�VI�bwB�k*�T��n2]]��E�	��\"ӝ#�Ճ��ؖ���(��ZB(����9x���yH!QU=\0��ñ-��,��Q�,tMC�J=J	���wu�\n���D�2�o��� ���G1�����`M$p�eR!(T,.�,��\\E�����Ӎ��X��qVs�PV�����]<{��.N?4\r��sW�(Y��m���%�h5u��n��dP;�NX�X�4]T	`���z��6��`���[.rt�2K��+6c�ܼ}7nހ�*8q���\ZQ:_& �䪊���e~x�8Ų��ڱa��F�zs��W��k�ѿ��9 ��`{N�3TEis���x7	ht5�Rb�+�iBE��ijP�W����A��/�sQv���DfE����e�,�J�1����i�(��E��tN�cI�}�\0�s��Ư�D�M�\n�r���B��b�~��g\0\0 \0IDAT6\r1�Ӎ�z���<{�<��ܸe#�G�(Xn�T���5�,i\"y�p�W�X&dR)����s��<�`.�ځ>�s���ʠ�\Z���9{!H�4\ne�er>��2e��� _,1��gz1�cW�\\�`�����6���ut����x^]TD\\���@���B�c���q�o�j_A��X.3����y�JW�$�J�kڵ�ܮzg�%�\"�d\'�a�7+���ʿ���:Y,J$��R�cC��O}���C��{^�@�\\��� ��>_��A�{����Ϡ�*wߵ���8r���\\���(׾\Z\0���S}����B�Ķ�x˛�AQ��\'������N/@n�������1�~���}�&~���_v�?�T{^�^h��xp��J��\\���[����y�[P%�i�ʿ��7r��>��/1�_��|o�t��\"Y��P^�El70����*Y\\�H�i�{������K(��*�󑊋�Xx�\"^y�OC�\r���Up|飨\n��\"��FU�����ʀ5q\\�)�:6�U��4E!�Jc�zp�rX�.3�I�4Ȧ3EÓ-h��OQ9Wdu�{]D3�If�ͩpE(�*6��Y,���@o�a1��d�}y��@0ԕ%�2QT5�,OoWC�b�JQ`�����p���9cB�zK���IINډll�J�I��9�*W�p�]��eq~z�\'��b�qѳi��/�Kox�M:�����jXB�\Z��Mκ��1 \Z������mN_�g.P��GG��;n�\'��v��T�:aTڱ7+[Pԭ��\rS?\"���T{�����|����+��\n�7)q�\r��\"r���f�C|��|ߡd;Ũ�\r\nVЭ�h�=MQ,��v�:\0�E9R�&���E��v}W���$�4~�&��46�	�Ma�($R!�}\n��)i�7+�j�?�Fِ�x�LZn!.*�$GB�b�X(Q�l�{��r\\.\\����s�*6o�k?�C��2���z�X�wKb���P&��ՂVS�y�\r;���O��_:E�:�H_=���=���r~j�����M�\"����$�z���2���\\)�A���Τ��b��ѡ!v����:��%�\r�+��������߹X|8�[�Q�dx���U8e��>��r����q��mb��C�咯�4��h�~���5��/V�r��i��eq�r��V�YX,��.Aʀ�ֶ�B�@�Zs\0�C�:�L9��_�{����܂V��1\0#�a~��Q����8��y{�o�mo��?��߲�T\nz=\Zҧmr$��pω�C��Xo7��W��k�����������`ajj�+4�\nXv\0�.B���&����#��_���н���fR��02���7�Z��P.��E�����������s�]��ļz\0~��o���>��/�o����F�\'��I��!ŷX \Z_�up�޹�(�zþ/���*���K{�^��o�V�M�R�R��*���T2��Ƕq�\\DU���n���F��\0���x�]Z�]���=�90.�l��\\�l7��F�td�~�\Z���,�x��Ci�!�LE(�0\"�F�m���e�JeR�Nw�������TE�v&����Ľg�e�y��{O����=�{rN;;�	��.�\0AB$�)��d�r鋪���]v٥/��Je�d�,��\0��X,6\0��;�;9v�t����O|�᜾}c�Y�l�vf�o�����y�aqm�X3�\'���^��@W��4�M�]#�);�R�6��Z\"�v���iF3i������,���\\6�\ZBT�M\ZP�\\bny���e2���I�\r�r���;�g�ۈlZ�n�Z���\n�<�:�AJ���q�ϒ���Ñ��y���ID�W�S�\'~en}͟�-F�&u�Nn\\{0J\"���`ට([��m\0U�@����N��G2��ƭ�	��3��_����B��j&��ǓܛZ�ή���ʝ�L%9���g���Յ��8����^`�f��\n���/���\r9T{�?5�wK^)e��U`�*��NDW)Y���/��%1l�DtS���EL/�hf������x���ґJ6�;��nre���ZPZ������ջ6\"4�ȗ�d�Y|Oҙj��=�R&��?������1�|�\"�:;p/�3k\n�-�1t%̰��C�A��j�/5�*)A�\"��盟չ|�@�����4��9ҹ�|��4��&%�XD�4V3i����f�w��hĤ+�d�3`d��M��}3�&��Е4)�]\n��dm���5����^}$�$\":]	���Q(;��F\n/� 5�UI�����<csˬ�gQU��Np|�������uʶ���I>|0�z>�`W;%K0:;�݉ib�I<\Z#\Z���O�����:^���nl�}�cG�M\rdU����jC�Hpd��X:P��JLS\n��b�&�x\r���	�hJ���O>zȷ��s��̉��b�*�--�ÂYU���kw�����?�������7��8�̷^�\r�B��64\0j\'e�Ύ$_��g8{��ߟ���|�|�Qt�Z\n�D���$]��x�k[�����\'S���[W9{�(�ֆ�S��%��v@��̋:,&�$f����i34O\"��*J|p�6Ϟ?�\0b�=����_cza���i=�@��*k%���M9�7N�h��\Z3MU�Tx�ů�~�����Y�g=t�� ���\\J�,V)�PT@`��8���88V	�*��躁&$~{���\n)}4MŒ>V)��9\r���]�s��*�K�����][@7\"h��n�ik�Ĉ�c��HD�X��vCq�\"�7��n��}�Esj�l�7�EʖM�4hO��m��&��E{�&`h\n�ky~��m�,��~˦{��W.��ʹ�b�j���#�Ҽ���z��%:�q�:;H��X��Ԅ�-r��6����[:�MKX)�k\n\\�gam���Ere�d,ʥ�8<�G\"�줨��4W�W�5.�u�8���*��,�fjy��<_ҝ���+���[�z�},�7�&�[�T,���ٳ�x���OE�ڱ�lqʭ�=����O6t�ŵwƧ�^^��� �h�Sm͏i�z[��tH(�-�����Q���#�2�����\nK�,�b9��\r\0UQ(Z�g�96���\n_�t�C�PB[�F��z�e�^�,f�W�l��D�ގ�Ǘ~����lA$k��\Z6si��)�-�;8��Kg2	���(H�qcd���%6rY|_bh*��>�0B*�ނ.w���.^\r\nuٜ�u��Րݬä�s=���R�T\"���6����8o|��������4\"U9] U�JAC���$IW[;�h4���ک ;��?�T&\Z�qh`��d<Й\n�`O/K�96\n%,���|��J5��-ɥㇹt��\n���m�h��N܌�R`{~�V�~h�Jɲ�>7K,bОLb�q\\�m�)�|^��_0%�Os�\"#��,�fX/�������X.EES�os��c��)Y%tMEAW*�/��^oS0���\\X�G�`9�α�}\\>y���efW2�l�Uh�gҝ��ZN\r���F�o|�%>��1��\rh^A9_����(���(����T^��T����|�kܸ;��*�p�~C\04��oе������n��^�e3�I�0�G�\"H�swd��o~���2\'����\n������a��.��q��a��/��m��ݟ�τ4,Me�d!,$,�d��K_�ė^>GG\"F�d9��CWG�/�b|v��G�NW>f��r%��_�g?�{�h]��6�>���`��������7���`&bE2���!�|�$�۟���1��ƣ�y������N/S�\n��k��~�=���]������yx����y.V�H��ö�����(2�f!�]�uA(�8���9v`�l�\nX�na��G7\"X�t�D���88��l\Z�*U��V)4E }<�\"W��9�FG3��:z0Rݘ�nU��h9x~��+~��B)�{̚���∪�hs�����K�hOD�����V[��~��ֲY�?~�_����\r04�����_z�<��]H)*�8��x�LXµ@�T�׳���=R����c��ђ(,��y7��ͮe+jOs���^MR�vǷ��W-`��Ay�+��Ɠ-ew\'�=HoG���]W���UQl���M�#����,�f�)��fy49˵�S�Rr�@?�=\'1#&��T6B�qXJgx8=��j\Z\\aF�|�0�S(�{��m\'�c.�l�\'w\0=�/`�W������~D*n�ۑ��=E���,�ݒ��l5\Z���%����z�`u#��y����@/�)�1�1\"�J:W����p��8��k�bQ��(�]][\\yQ;E����d_+A���\"S��t���D\r3X�Z=��zz���ZD\r+�\Z�;��fvi���v����\\<2�o|�\"ϝ:�@%W,��^�/��%��N�5^>}�מ9��P���^U���ދ�j�U���7�M����-�����l��L��8��K�������0��̗�;�7^|&����eC@�/}n�M���8������F���aï�nL�TlO��5#������)��\Z�>a��4M��P?��p�Ϝ=M�4uM	2r|Q1!(�޶k��(�l�k�F15���~@����R�E�6�e���y��CL/�\'9�߆�\'�|�|����\"�y�#�L��Ӟ૗�p��a�:�(92h,��i�=���/���;��r�(_�t������[t��a\Z:]�\"Ƨ��<U�.xF��2��H]W��[�i`hj����\n���3_�*��T�˾�D�`ze��l1~�|���8\0���n#7�ʷ��=.�?��}�\nш��e Z}�hx¤�!�&Rט�Y�O��Ox��p����Kv-�o%��G7���[������҈��p�����\Z��%�kܿ7N\"bP-S�&Do�y�{��&�kH�G�5��<�-\0LU(��b��ؓ�%�+��l6������ZU}]��͌�D�~��@�4��\\�\\�*���i�}�k\0L#5��a�\"j��	t]C�`(�����P,Y��b�X\"E<� ���5_�ql|]�0c	��*P��H����r���\Z��j\Z��a�8�B�YF��-��R��E�PL_���Q5UHʥY�G3tV��Q,�I�I/��V���(#ؑ>��\Z�[cMA�<$�v�k\Z��hhR ���E	n�t��_��z�]2�\"�mR�)>�����;4�_kzV}��x>�{:y�����y���ŗ�ҥ�ģ&��\"�-�fE�v���MqDC͗>k�F�T<���j�7S��h��^i0����ۏ���칣<{l�D����X\\�\ZǪMZc�N���˶x01����{�n����g�ڋϲ��\rCӈ�T*���*�k�\\{<ţ�E�7���N������J��z��RT[��ro��y>˦�jz5�\'c�ܝ���_ ��\Z��=/�	�Z)>�ݠj�D����~E{d;n���y\\}8��\'��_��+N���Q�	�������t�0?��&�˟��Ǐ\'8����n|��H�勪^�O[<�3���x��c7�_曟}�} ����ʊTe4�����Ȳ�	\\��Z�Q���%�ϟ=ñy���y4=�G\'8s�e;˛��[?����e>�4��+Wؿo�x4�	�r�+]�]L`}�o�XG?�X�5N�d�,���[�c������:�/y��0��i޽��Of�����#���z.YCa����p��gO��w>�_�����/���g�0��4f��Y��(jl��Ȁ10T��i�p��@R,�q݀�e\Z:g2�Վ���ږD��䞲�\\�#3��g�W��M^��.���\\<q��d۶t)j��\n5@|\' Q��%,=�䕋�r����.�sK�{g�W/]\"����k��o_GQ^�p����st�u�\r�\"�����I!0U�����w>�3�ʅ�>t���4?�y��\\�N�@_/13R1D��0�%��ܳ�*:��M�	k�&�H�x�����R01��:6K]���^`oL{5��;��c�|hO�Y���:<���@8_#���l���IHW�l�֛� �Q�ha�U�6������͝����p\nw�\01�o[2ahd]�7v�7��@�/\Z�B	:7?�����ӎt��\0&�e�5�������`���,�@�\"Z���H��>Bʝ�T�a�w���������F0�,��p�tM�s�`��{����\0L�@�t\"�8��������� �R)���`�K���\Z��}6e����\ZB(���\nB	,��&�%��>�m#�B<j��j��q~p�~��(;v�kB\n�lץl;خ��y��<�h��U�fA,�P.qwb�|p��\\����\ZH����3\'���|�SÃ�Fd���\r%�����>�X�#�$b&��L�5��;N{\"��5?oUU(�mf�W�H���h#nư]�qk��܇j7��܎�룪(̭���d�;O��r�8_x�L�VOϢ���c\"[\\�@�227ϓ�E���v�\rprx��DUQ+9�E��G��ЕZ�MA��`j���Gx��cb�_}�</�<¡�}�%�_1��*z=ֲY��-��ـl��@/_{�ý]x���`7NP��ة�	o�!���\rrԺ	��:L�/2������u�����}�<���a�*�L����z���`m�V O�Q�\np\\�~t�_�C�F8���+�N����ӉP4���e�L2�oѨ���\Z���FM���2�\rU#O���Ƈ�0����ϟ��34)�4������\n�h�H$��`�^�.4 ��<��=U�F�������\"�ki>x������=f����_�7?s�Ӈ�\r�m���kWE3��R�*w�Z{j����mِ��O��F$�b��9w����~�/o?diy��[_�����~h�[m�R����s{���D�B�����n.b>]h��~ֳ�,����Վ���$����{e���(�r���3����.ˋ�ePLC���A��t�y�2ݗOAu����=�E,\Zgjy��w��Н�a1S��J��g%��F�T,BW[\nWj8����L����\Z-m<	��5#!iO��\n<YX&��!wF\'x��}�%��/��/2���V��r��_C�q\\���t���w��\n��p��8�~�#l�ĕ�G���D�Q�����=�z���q6�L��	�\nb�����]~�`�ϐT{\n��s]n�y¿���3��\n�����\0L�����c1t0��r�����/MA�o��E�=\Z;�(˰ �#��m��Z$a�_`��\r��u7�Ήƺv����l`�m�o��ep]$�nO�aF�h%Gb~?���9\\ߣT��K�ҫtMJ�N�����SSU��Ō%H�RG��J`N�%\0xr�.�\0!_?Z\r����4�x{�#��C&_¶��\ZЫ�暓���zq����dCw�U�V,��eʎ�/%���E�h�%Iݚ�����F�G�s���=���C��H%�H���œ���/�ٳ��|���h��c\Z��)���rEn?�A�.�� �V��\n�ﳲ����iݠ���hĠ\'�3��t�����t�V/Y�MSc3�������\r��`�*E�\r������mq���خ�{wGy0�\0Q�=<s�\0\'��� �Y}$i*^�M�X�u�[]�\'�n���GX����%���y����xUS��k�-�\\Zatv�b��ʾ�v.?LW*є��4��\Z�%�7�GC6wU���y�Ken�N0��FO{����1s��`ST�,f�����3uRW.���@W�����΃\\S��<7GFy���\'�I�u�ٳG�r�$����H솧u3���(H�ўJ�/[�E4E�P�������ڤ�Ft��d�q��Y�qJ(��Cm�6��bn)M�l��x_{����/�n�l|N=/(5U�u]f�V���	7F��ȗ8���W?ǩ�)9�p��]�Ԧ��F-����.v\00u��{���0t�ǭ�qf��9���/\\<́�}m�mL�oF��\'���ēYr�<����¶�ϳYK����-�iFi��t��B]���w]�I���Yz:UäX��;1�z���h%c1�r���U�t:�F���}wt\r����\0\0 \0IDAT���B�T�:l�Y�g15���Ia$�F\"t&ct��8�(�\00���<LC�v]O�3�����2_}�<����9>����6�wW���-J�#^\\K������[��N\r�1>?���qob��{�9�|���X��=�o�b���mNܵAG\rȐ[�+	��iv��j\0#Z�\rG-k����Ep|ɟ��j0I���qM;�����O�v0u6_\rҙ*��\Z��� 4qTk>%kv<-�A-�w�T��%�-�i����)\0L��M�{��7��N�����n4,�L��A��kR!���q-|��K�	\\�Ƶ��`��GJ������駭�7�fX_[�Ϯ#�c#%����AX����f@�S�����%hk��L�(:.ŢCɲ�,/�Vb�\\�щ�ĳ��Q��M6ޢe�+�)ہH^ׂ\rA(�ӯ�IwPrَ�J&�~�\Zo|t�ѩP$c�u��K�����\n`5W�u7�eHM�Y]ρ��ӞČM�96��/%Cc�����������������^��/\\����d��GZ��یLN���9v�0m�����j��:����j��=�l��?���2f2��C��|����Y͖�~F6t�Unm;P}鳔Y���z���О��?���q��0��S\n�{ZA�����f�9>�m�t�r��L3���-4C�݋\n@dKl�C|d�`�UXT�!`�<�t6ϻwF�_���/0��F,bl�n����\'g��o]��o^���!�?{���.���mm����xf�������B,JD�y���ړ�,�����Ny~p����MM!��e�Zb���(T��0����P,)�6f� ��(\"�<�����@W;����|��kl����������׮��J��3\Zu�[ۍ��h� шG��u��q2�,Y<��)���u��)Z~e��j��kX��2�c�,U���l����4��J67�f1t��i���G���=:�1��7^!\Zm�X���߸�7���J�tg\\C఑ͣ&bģ&>;K��l�����O���\r��g���������JB�nA���)���m�`z��B��iRtT�|�0�`Ҩ�ۦcY%��E[G���o���|&��t��w�?��;�z:x�����3���c-�Q���������ҙ0�\Z���ue�\Z�G���+Ģm�d�O��4KT�W�y���W����������h]U��/����%R�ӫ�J&��\"ni�X��;Y���D좈o�W�9?-���\0-(w0��\\6\'L\r���/��Ƕ�.���tm��pk`�л���k�V��3IML�����l����l���%Z5�Q	42�����iKu�J��mQ2\\�\n6^UA� t!%���9��P(�Jy�A�*��#�wq�u�i��]:V	�sѣ��Yq��<��muۑH�	��Q�vt�A�6���\\7�XW�M�Nb���o������dM���B�\"[,��9��RC��ԕhj`f]�,��W���?��6c��,�7�u�%S\\82īN�K����C�rwM�h�w04���>ajy�����B�d�M����g]U��D�D��Ig��������p��H4���^粛.����B���[�}w4\r]U�}(�~�o�N,���Z:��8��3��-�eq��~^{�,}�]��s��zv*���y������5fVVy��}��7Pt��.�������Ӻ��(��,f2�--S�l��3����Ã$���{vx&��K5�|�Ri*+�����>9��F>Gv9�_.��GIƂ�#˵�ڂ�Z �d�\\{<�[������X�<�d���@C����TT姟����,���e~��mn�͠�\nǆ��iORv�Zn�`|�-8W*c����a �V0Ѯ�uچ@�#(YS�kܟ��4#|��a��$��4�\'�HE�+��-CQ�R�����1u�4�d���SmI�l��N��B���ur�ܿ���#������DQ�\n}q���n�U�J[��3�u5�-����	ψ���E������\"k\\{8�5x��I�>�a�ֲUDp�o6��>�������K������j�)��{�Ӗ��#�FH<�[�F*���\'����~SR)�:�(IS�=����<�^d�P��=��������i�j�-�woO�hf�TG�ߺ�,����^n���U�`���d\"�K1W���z;���D�|�P���Mn��z�����g;�=s��\\>�I��`�����(��B����\'��������Q,Y��b\\82��Gy��I<2����oy�hv������V�����	�����\0L�������n\0L�¹%��̈́�	�iF�k	`h`v���N<hBG���s[\0SE}j	`�;?�T͞=Y���{Q�ͯ��]�0�(1�G3T���@��D|���l|ף��a�KH�(*z$����z0V�P*���q4���,\\��w�`�\"@QT\n�n�z.�s���5Y�>B��D�\Z����<TE������Pt�S�%Znx�W�V3#�0�j\'1�B`��o5��Kke�t6���\"wF\'���(���C�x��^:}�K�qd�ߗ��V�8�h�lw���0���{ܤP�x��i���ETU�v��ώ���p]���e��d)\n��E�q����g�l:6	 W,���{|<:���a�@���&L�]��[�o)�E\"L.��έ��n䈥��ܡ$�Q��S;J�M��N�m�����?x�:s�.�<���}��h��4�T蚊��,�q��8�s��bG<�@W;����o��f;Zc�\\��|����E�FW54M�F�_Ϩd+̭��9:���n��Q629�l����D4��:#hs�R�-tU��`�\r���c>�]�1Ӥ�-m-���H!jLz]�%W,�ӖDQ5,7̀�U��J�����$O��io��=C\"���M\0L�	� K�\rr�r���\Z䋔��� �aoܝ5��8�f̮fȕ,0t�d�/^>Õs\'QU=�!ڝ��\'YkAP�NW`���[<��3t1}8��Z6���Je�p��9��T[�A&wuv��+���o����4C=|��s�vv��[�+�p\r4M��L���u�\Z�᪹�U����$aF0��R|����m�L�����\"FӜ���ű�Jz#�?���j�C�|��4�$[�[��������*�B��ߔ,�B�F��FˆP�l1��B&W�43�\'y��i\\3~*\n�籔Ns��޽����E\\��4\r���x��!^8y���C�%���͢��3c��I*;�!���z�Ι2��]�&0�]��\"o�\0�EJpk��V�9Ѥ]\"�Y�Zk`v�����\0L�yJZR��4i��ǯ�O`�&jU���in�������)������H�����CKe�1��h`� \Z�B,�MP�%���A(\nV�L1�E7Ll�!�Ԑ2\0,��1�����+E��QP4\r_������n�h��$�a�U��f���������Y�Z���\\��ݶ�-�|�LUKJUx���|���d~���E�O�򋻣�N�a犨��m��gN淯<��}=UŲ�J�f�j�eC@,�ˌ�,��{ct&c<�0g\r�/�h!��\Z��י\\\\�0�1f\ZAjs[�l)�65�hM_�\r� �/po|�OOP\\[\'��E2�0�J7zwR�M�4V!1u���U���Ǭ�.G�q�����a9N�ii�x��筅�縰�Ƈw���0���!��/9�Z�2U�|J鳔��w��_\\����\"-�Dҭ��O�/#��E��N��p:W���9�3G\"(�q�op��t�Y^�������x82In#�Ǉ��׋+�@�+�O6�~��\\(��t�MV3a�^,�(��mRߒ�ֈB��Uf#��v\\�u���\'X/:UŽ�(l:g�mlp��r�g\rs��bQ�җmc�\"�|��1w�gX������\'��v�-+���^l|��%�+��Β͗P\r�cx��IN�Qpv�[��V�	�`��\\_s�[�^�i�R��B`hϳy2���j�XG������8sp���\\nw���R���c,��x��I��\'(YVKcEQ0Tx��c޸~/ػ��k�\'b�����9��7:���LSW�] 3��\"����Ӗ��a�_�	��g=��/8�\0�\\�k�߈`M�\\��}p�OF�I�\"�)R�})�\ne����o��b�frq��b	�q�U�K�����`bi_>���<V2�\\���\\�ã�y\\�����C�����gΠ�����l�����K�p�W�{0�(d\r��W\0S�*��Y3�RKQ�6\0��4��$�oh�40M�u{\0��!Ѽ_�8}�[��\'0r��S��%�����i��\n����A�-B�M��X�PxO� �\Z8���N$�m�\"�h�@�\"x�K�T��-ʥ\"VX��F�؁nE(\n��_:v	_�lz^�4OA�tT���4�8��N�s��I��$��`��VvJ�@6��mS�EϹ�����(Z٢E�v���\Z�	Sgri���%�V׸�x���/��K���ޑ�ұa��s���ch�ص�>[j�V;�l��U:��~~�?��6�_�t��C}خ�����\rrj4U%��<�����7y���lJ�(��n=��.���Mj�^M�:�\\�_�����m&W�5�5��T���W�� \"�s5AvR4]&6A���\ZwF���X���$�ɰk鳕�R��b������0/��}�_�|�(��b�:��^ѓl9����չ�d�}t�t��lӌ�.����*�S�O5xoX���Y���ܪ���s�X��i�h��c��\n54|~yo�t�wn?bf%MO*I\"ga9ͱ�N��tM��M������L,�MUAt͕*��-RBյ�&���CSU>�8��UY=��A��B&����	޻7���N��c�[�#hYɚ,5Ig��dd���ǳ�x!��?;( �6��m��X��Z���\nE�S	^�p��T;%[6m�TjA)F4���S�\n}����Y���\Z���o��^Ht\'Y^O�`|�r�\0��N⏿���\r�fz�f�mxL�	��t�����E��;x�`�]-ܮ�E%Ѱ��ܼ�����[�sĢQ��T����.ge��-�|IɖlmF�VX^ߨ��h���^֋^Ho}�a�\"�#n�xz��p���4�>s�����#��1���F\"���f�z�!�x���4f,Fٲ��B<�T\'`��K#s�drE�l�T�o�t������fƗ��t�>css\\4��{#<Y\\�u\\�T��ƕgN��+/����,�i3���Wg{�7�%*�bm�[k(��\Z�I�)w.��\'.�\n��N5�n�hۉǟ�lw�ML�\nxie(���֮40��KnO��N���ip5�n\"�\0#����(?L�UCӂ/>��\"�Vޅ�I\\�C�@Q��\'���h��a��c	�P�%���G�P����86��\"�q1Kװ����0���^�%�Y����H��w�����J�����dY�-{+�Zl��w�T�bٜZհ��-Ǥ\\�E�J�P�����<�Y���,���̥�Y]]�b����C��?2��g�rt����t���/ۡU���Mev�6���S�eqwb��sx�C�0��U����F��\Z��Nɲ�\\Z擑In�N2����G�3>���J�+)Y�b_�Q�*MZ�o@q�@x<�ț��\'����^�E!�kt��\"��\"QVMW��ȋ���N�Lɢ��_�}��O�������P,�x���)\n�܂������At3��iOZ,����$s+1��|�DٶI����r\\TE��Gȗ,��Vxw~��~r������\'8����5>y8�y�P��|�ͮ}+P�T3�V���4G�i�]��anm�l���>шND�5U��]�W��~2�y�:7ǂ\0��_8NoG3�k,,��ݖ���\r��B���D�սQ��.������%���{��z1B{���B�\'L���2�������|��	ý\\8r��=]m��d���k�|:���<Ks+��$�7#�5�`\r�᪀R��/�sw|���eR1���\\�\n2!�l��|�Ĩ7{h���\ZTE �(����m���}=�\Z\"�������\\�E��l>�����ć�!NJ�l����1:;�۷���G������!��;���P����:]��.+�4�M����H_ɨ��i�e�V��i�Dt���:���y89���\"=m	�;y���S�8�G�d��S���Kʎ��R���4�磷%�H&p|���^�a�����2w�L�˘�F\"j�!�?�~B!	�o�2�?����s�����uN/T���<O}��>��TXY� �/��sh��#��D�%�}jG6);�h$±�AJ�d�[Ŷ�I��I�&ْD(~m8+�RtQ�m{��\"���U���ԗV\Z�\0Y���\\��+�+��D�-50��4�0~��p\0�0�R�_�|�\0�l2;ޥ����]K�{ݧ0���f�Wʭ�F�HP�5C�H\\��1=/�x���mq873-63a�\0]�\')j���.3$�t�|>K6��kYx����K��.���Nț��`�J���AÓ��.�M�{[\'%\Z���f�%nk�ص~����R,۔���?�z�v�Ko0����΂��Dz�s���;q�K�q�@?�x� �/mu��l�Ŏ�f���r�V�_\\%�-�H���\ZO�V��FW����9���Z��c��}��\\�S��������O�����|��5������t�͍�eUw^Ue�f1���7���O�2��ʉ�>�WɆ���i���}5��A�Mk��>���{L,,s��8���_��L���bv)���\n�b�hD�Ђbc��P-�/�((�:e���+خ��Z���:�,H�q,�ٕ4csK<{l�h��r<<ߧX.0���Gǹ��	O�����o�x�T���kw���cPVsE��ֶ,��l�v<� ��������j�>��+��P,[��o����U��CɲIod��p�^�Ń�9�(/�;��\\���F��l=\Z!�H�����8�F`�i�,Dt��T\nUUAB�l���$1y�����F�\'���z>�B�����~��r����%�����K�R�6;ɾ�X����*S+H�fm=��j���:�xCӃɵ�R�]J�\"��5޺����1�t�,7ǦI�\n�7\n�3�-�`r�����*���y��v�~�|ϥ\\.���Ҟ�s��~�;1\r�Ꝗ�����j�:(�n���t���\0f��uUAJ�ŵ�}�#޸v���e��8�9{�Ϝ>���؎��K�*U:�cji�����\"�f�l-�\Z�S���]�uFf��p���E��߻��b�������|I�Xfzy\rU3Q���+���j�ǳK��ǉ�^�;��O%/ߤ���o0����z$,�7�[�=�E�4��`�_�<,�D�T`tv��2����=�o}�9޺��#�(x^\0�\'WiOu�Tt�]�kE���e��\"�)^>{�D,N1?���T�Gs��TU�X�XXY��<�斸�`)\"誊�((�V��\Zy�ODW�J���+�_�i&�hb�-�%5�λɁi\n`v���U�m,��`�([b��V���M��nE����]����v�JY�Yu�q\'7��\0Lաԇ�T��vl��UE�.�b��mW>W�u���NcRnR�|��E��=�?��������cq���`[6�>#�i:���z.�ma�KX�2�m�y.���i@R�1TUC�U���,ۡlہ�|˼Qg����@��k�JTM�����q���\"]c6���z�v���U���!���3�|�8���D̀S��T������y6�˭�TV,����\"s�l���4�����1������iK��<��wg�ѹ%tM��٣��ϑ�>�u	ζ\r����xv�k�\'���膎�5	8�,�z�!���5޻���s�\'��\\84�?��ghK�񭟽�{wc����{~Щ��CUᓛV��\\)�+ezi���785��kϞ!K�Ř_�������Ǘ/�g������P�ccYE\nV3%��n�M����Q����l��;�㋫�����ԁ\"����:?���������^<u��d;#����V�\0\0 \0IDAT�T\0���J��Of����@�V;9j�}�ϴ��6Ԛ��lltē��AQ,�D���)�A��\">��=�xRr��8�Ʀ�7:Efu��^:Ǘ_�ȳ�5TM�dq#���.�u�1�ʹ��w����@��U�I$�����m����}I6_�k/��#Ն�ʶ�z���уG��/>����=4�?����H���M)d[m*�lK��-3������|��,e6x��	���)\n�+in�Mssl��t����/=É�A��3����9�6tƗVy��=�ɾA�f�u�R�Z�3��ȕʤsyܒ���>�?y���$��kT5�I��F��l�k���W��T�nJ�,�DKܾ��(\nm1��cO�~�6>���m�	3¹C�`z����Y�\"^�\'�iN/R�l�L���W��A:[�3G8:؃�(̯����$�O`;g���_z�T��Ã|�p?�Om�c1����iL3�о^lg�\"���,���]�s8=���OO`R���$#��L,��/;1�=9Oѽ��z�Of������_�ÇOx05�/}^<y�/]:CG����y��X�ߘ&��1����q^>�+���� W(����z^�ĉӇ���.ѵ�we�_�����NoGRJ��22;�Rf�v��fV��Ao{��8��6�$�b9СK�v�;��@W{\'(ڧ-�$��j�L!�41�&���]ѿ�.\0L��eJWSJ�n\'0�0l?�iu����?=��o�P`�6\0f��v���l;8�D׶������ �� Qxx���ZAX�cW�UE�A��:6��@U��@�����RB�z���I4\ZC�41����zNd,J���!��織\n���fF�Y�l��v�(\n��n�v���L���:�G4i�NF#x����7G\'�\\X!-pHsmJ6�-��6^y�ϟ>©����Cg;�0���,@�ضC\"[3}�l��	��d�P\"_�:�Jw�gIg�w�1�PQ�c���Ϟ	��O�����d,���|��s��׹��\\������I.?��H/���~�b_g�\Z���A\'ze��o=du}�C�]<{�0\'��8�׃���k/��?z�>z��v\"�B\"�Th3��r���T<V�45~F#�����8�\r�ܩ��\'[�8�����Of��o}ć�&��l\'��̮d�\Z\Zg��܉#D�5��f|����]�Ս|`�lu������2���;wc;.��9\"���C�<��ݜ�g��_\nz�S�����e�l�ѩ9޺q���p���N\n�rˠ�j@_-��}�k.vx*�E��^��E���=(�W��1����޿�/�R�lF���\r�sG���o���C8<�O{<��Z��Ӌ,�7�|� z���_ei\\s>Ui�����>�_y����=����q���b��c�D#&�ח�`e}�ѹ%�������֕��L����BhY\'/��O��d�e�!e�s=���(�mFg�E\\�#_*ә�1��ɫ�1���@���ޛ�J��y^�s����z���GƖ��T��tuuu���2��0�XČ\0�#����xA��� �	��������=32##2ֻ�f�9<sw���FdmSWʌ���;��������rjk��x|�����������xO����^{��\r��Ҿ�v�4�cˮ~���s鍆�}�rSu��2��Z\\����LVҖe)��\0�s�	��IQ8*�feڟ&��|������J\n�����wn�|��l�%Q�0�e��~����U}�8N���1��o�����w;�QBEl�}^�z����\\9w���p�R9\\���_����?��?a~��!����\\<����ݕ��)%�}�`�g��_�ȫ�/r8o!6�n{0p<�s<��	B\n� ����1\"�����aD���|��eΝ����3�mm���ݼʝo}��������{<w�<���T���\0��јO�?�`2�c��Ͱ����!�(�\\V���W�gLx��̏\'ܽs��G��ǰ������	��Ǜ�>���^�3��>�Q��zS����NQHP��\Z��\Zv���M\0�)�%�ך`�4����������56y>�\n��)�n��\Z`X�O\n`ڔ��c`\n�^#�	�����uZ�<!�\nc�&�J/��\n����=�.$�8$�\"�8���!-0Z�u�\\\'$q��8(G�8.IbKĄ1�qD�i��8�cY<���]S�Ą���l�fO- \n�sf�)q1�������$�������9%ř�ӯ���U�w?��[}ʟ��������G�7u���qvg�+�/�7^�7^���p�<��+�l*�T�ͪΠ31�;���v�����*�����.��>gv��|��x�Y�x�2�N��8��K�(��_�A�$8����CfQ̧��G?z�8֜?���|����yF1��<x���#vG���<s�����v>~��u���S�������[���gw�c��e��3�/�l�L��J��{�y���8O���_�}��\"e�_~�&�������]������].����=�=\Z���tq�x�51�I�H�U���o�n�f&AȻ��x��F}��y��~�͗���70�Ii��m�{���U��������O������.�z�E���ed\Z�wI\"z��?��%r�Z�����x��Q�`�!�Y�[ǈ����ǵ3�\\�������������lν�C>�{��ɜKg����{�r\r	c�2���U�9�����^$��/Q��8|x����w>&\'�#����W_����֯񍗞cT�㦉\r���qz{�Π����y�����;豿5bg����y��gи!���k�O��_y��Yħ�����#��?z�m�\\�p���[�QZ�|��[����sjw���%�2�u�J��؅)�\n|�)���,\n�,�2�/�����u�ݹ��y|��������#��o���F(����\0L:�Om\r8��e����(��x��G�z�m\r9���s�.�������}<�CbF����ѐ��0�%���-H���~r�3�#Ξڧ�y�\nS�dwԣ����y.�vv��8�����|q|��qj4�u$�II�,�x<������rfg�/]��]���B��pˎFܸp��_�x�p��C�$�p<᭏n��\\�wvqg���H/O���#��?����=��^�䥊�X�m���.���M���n���C���i0�����1��l�\\>�ϛ�]�g.�3���j�E��X\\(\'���6i4/�%а�P�9C��M%d��)���%5�A�P!{J&��\'�:��u*dO\0`J\nd��Yg.Q�͍�p��{!������!�!��̲�����p��$��\0�\r����=G��̧Da`�g_+�1aY%1�QRGA؀��N��4V	-A)�$JI�^��\n���ۯ���3����N\'��2����r��ҜBئ~S�S$��B�k>����_�����h2]=?%��ugk��}�e����u^}�\n��6�O�d�ؕ-���dg{1������|��U~��->��s>\n�۩!�^��.��w�x�o���_���bZ��Ua�h8��+��W_�\'��?�u�o��=��t;.�w�WҰ&-�K�����|~p����o�=!R�n�M�\r$P��ꥋ|��/�ݿx����}���Ǹ��o�v������+��n�M(�*m���?f����3/p��)�T�Q����|��G|��O�t���u���:����z#�b	`r{�%0\Z%1��ϯݼ�٭!K�Tr%���\\^�v����W���x����[ct�\Z{����sWy��~��s|�����~��������^��|��e� ׵�(���JR�������x�\n������ck1���GZ���<��e>��.A!]\r\\;w����������(Bm��@3\r��~p��x�/%���N�^��+S�����&\\�?�?������3������;F���������k7.��_����7�z	Ke���f�8d���.�\'��h����{����;$8\n�u8���o~�Y~���x��v,bM��ә�g���+����]�{wx���x��;�䓻�-i|�ʕ#�|�m\'<Oxt<���=��x��ۣ�~����#-P�;��&��9RU��i�Y�;.��: #�,kSR�����x�~��G���}�W�_#RI�x��y������,�®��g�ES����A�tf��6WΞ��/^����2�/\\�u}Ƴ�&x� �AJ�����{���h|�����;?��{�����^��vw���O��ngԳ�\Z���h�$vx8��X˞�׮_��G��\'�y{Ʊ��\\n\\8�o�r����\\>m� �B�E�A�\\�t����]���C~r���Oy���B�\\�F�V�o��[��9���~���̹������p��E���w����?�o�۟~έ{��x�������/]���r��Y�p31�ɞFv[/	x�_Q�Z��(��,��V%h&��֗�0��F�_mL U	`��uM�_���PΩ\0���~2��(�J��H�}/c�$�F�yR�� P��#<�G9�n�mK����(\n��9qb��QCb4rn�hc��q�t�%pщ!I�Ըr�k#pS���	���a0\Z�w{H�2���W3H0���W\n��Wܺ����������2�;|��+Q̝G�K����������.����6Qb�91yUS)��3�,�\"ۜqB/�LV�Vh��_��o�;������q���z]z����������K�BUh���c��;<������7B�D�3����cA���&=����}���r %Ւ3�\n�0�Ez��e����W����1�n�g/����=Nm�li�-L62_}n�68J�泗,�QR9�@z��o~���>��{���w9����h��ֈ��Y�K��(�|�LU�~wȿ�/�U������g���3�;\\;�ϹS���\r���R�j�R^�w���{}���U�\\8�_��/3��$�#���m�����:K9�|��W1�\"?Gs	��T5�g��aCn^������އA���-N��0������F���+\Z\'��G���-�q��s�\\�ۦ�$\Zt\Z,�\nJlY�Tq>�����=^����y������w��I���Ng@��2\Z�v��&��|��:��e�F�������D1B8(����a�gg�\'A�G\\>O���,���)��!�_��x6�������Jf�&N\rUK�ϙaI�i��x�q�*/\\~���0m<֙j[S�D	E{��{����,@.���f	r*�ͬ��1��|��|��e��F��^��݇�=8���y���F}[(Z��ք>�������������$IL��9��2�����ƺ�)R �d8����]��_ c��˕�C��Ǡ�vL����\0W)����^bg��U<��7��\"�]�������q(�;.��ۃ>Q\"1�4�\r	a�wF��r�ϵW	��ݡϹ[rĆ$Y���Zk.�m��or�ҥ%���?����(�\\:{��}~�U+��>9����2���Z`��b\nm	\"�7����9\'���Ч�\Z����T�d�\0��4�7��Ƒm\0̆M��q������zҴ0\"Ü�0�֕��l$�g�*z?�()�\n��hm3VF�#%:��M���Φ)k#��u<��jHtBb�6t:>�qS%��$��h��E�0b)�k�S�E���$JJ[n&Zk�8�u����[*�)ǡg��o�D�,LTAdߌcG\r�1ĉ�s]�z�*/<s�s�v������c����󇳟09<��=~��{8X��\n�9A�����H��ʿ4�`u�%H�������Ϝ��Ȏ��Vb9J�$!�r��d1�!I�^Ƿ��U0�,�g�A7�8J-K\0������w\'�`����3�o����^��v�ҪE�I�1��\\9�D)�J��(��Qgǉ�����������v�a<���u�3�ִ����eg�?�G�u9�=���6;�!Ik�8Y��;?u\Z�z=v�å�ͣ�C�2��A��+��\nw�03M�d�ϖ�Xa�z���������\"�cv��>� J�(^��HaM*N���Vj�ًg�zv�s����r	S�f�khu|X�A�ϫ�;`b��)�������ag�G)�8�y�sN��k�ܐa�B~���1t=���}��?��.)�t�bM���FI%c���N�{�T��v�vߴ	��D\'��kjx{�~���箰7����s\\�?��r�c�L�M*�-L#�\\%�QwT.����u@��.�1������8�\rz�M�}t�wZs�{��Hח݈�R�(��:.�������8L\"A�&�$�>Okr����JI��c��d�0(e�\"�Z�k���o\r��w9�=��_fw�[	�<��(�l������|����L�t�O4q�	������$A�Q�eg8#p�AH���� �)���pi�������^�v��~�/�C#Mi<��L����so��n���8���U�K�\"�[.\'{j\0�E�:\0�N��i��vo�	�N�yc\0���e��Dí�j&(;F&\Z�2%�!��bO\Z��s�p����Y�K�f�4\"U%�̌�8���1G��D��3+\rIFcz��څ)m�)����u<��p\\[�;3\Z��q\\:!$:�DQH��!-�����8���I��Q�ҒU�RR!��q<+���e�U�}�,��dS�/\Z\Z�\'A��p�����;�\"�8���������������ct�Z� \\fCL��x]yG�d���\\�IϘ����;c[�f��fQ��sޔY�����t�/��������v�&��Y����橭Ķ\r��8�/J�85}E��I��&|��c[�-�1LC�J������QV4ƐŅ3gy�ܹek�a<�k7���窊ӱ�c͌��Uy��9�̦\'��T�*�f�y��E3�gK��\08w\n�z�K��X��3�^~�`\Z�	W�E��3c���{��q��>�w�+Ә�*΋�6�$�p�0���\Zu����L��!�N��犱�Q����Yg�@���$���S@�5�\\=���P>�0���z���7��7^��8�0q���`Q\'2�5V�TUں�YcL��F��4Q���͔^I���G)\"mx��=�3����ۣ��L�iu��h0�~�0�{G�9m�=H�\r�t%��ɜvz�u($���̙}^{�*/]y�A�\'I���Bp8	8��Y֘��6��4F�������j���m4\\?�W�^ 1��I@\'��0Y c㗄�\rU��X��ߔ���8��PRf\\60�@?oĘ0�פB�$\0���m��3�5�{j\0Ƭa��\0��̂��n�t-��Ƨ�l\\y_�\"�������Z��\nb9O�����K\0Q�fD�C�1�ل���x^�q�:]���\n�A�%�����z�B6�c�>���k���)GG	���m�9��x��Sc��q�v{�R�22l��N�h)��1&�0N���X�|�XM�V�Y�|\ZJ!H���3�e��O���s<��ˏ�>ZDb��̐a��9 ��6Ѻ�84e��U \\����P��Y��ռAQ�wٛ��X����\n�Y�ђ�}`�\\�K����smfU%���S���1+\n�����T��1�7,%E�*0[�q_7_V�8[Nej�=���6Z��zLv,J�ib�� 3����V�^�.2H���w��Cvz]Nmm��t@�U�L� GӰ	a���6hA���ez>e��l��T�o\Z�;ׁ����UM�-+1�M��\"�fqʾ,z|�2��+w���l�=d�N�F,�&yeQ�\n�.�&\r.\r�޾��|Ω�m�#vd��Ihֶ~׀��&�M�ĆA��\"I4�;����k��u���J�&��5��W[�3Q,�4�}����M�`	��:J����T�U!����Ea��C��;�,ɉ\0k�t]��=i��ggJ�	`6i�o`֍\r�XV�^�\nYE�V���MCu9[qvҲ��=�\rDqL��e���q�rp���������!���$ �O	��xr�����D\r\0\0 \0IDAT�&25��M��������Z�:.�V�(E�u1�cK�b[r%���� ����th�\r�D�BC�ˍ*I];^�\Z6b4:I��\\K�;D�ݲV�b�4@[f�e9�aok�7���۷?���2�5�,���%-M����k��n�����Ш=;�7z/��e���r�jBTjʙTS��m\n�)v��BT��eF��k���B���2�GI\\U�u>&�&.��\nq�b�z�@p�Ht����˲5Sh��j��?-�:j��ճ0�|d��䣻�����w�rn��;[$f�b^�����9�rS��Wꁙ5�ceDK`Q\rN*=fZ��ܳ��M��ЂUM�}F\"?7L��^��:���͚�����f�DM\"*�Y�d�\\mb޿s���K笨F�6_�r]r�)��a���}�R�J}�|G��(.\r�x\"!R�**���SL�Y��b#�ޟS�>K`�1*.&�\n�F�@�0k�IS>Y7�i0ŤP��0O\\�Ŀ�^�z�T�W\r��)p�zT�k�\\Lf���u������4j\0\r\nr��	�ز�I�M� KJ����̣����LM*���&�	&IaDJ�\0�������`�^�����6�0�͖%_��Ri��oe�}߷�8!ۯ�ؒ�8�h���?J���+$�q�uR�v�Iv�b [xF� b���՛����c.��#2ψ���\n�A*��갨y\n[���M)�\\ԶWDB&��0�Р�[?�ñ6��_W��)\0�b�d��2�Y�&_ŴI����075�y��B�}�ײ@�{��=��N)XM�Pk>����\'��ܼr��gN��T\'�T��*mB7�RƲ�@�A��Z>�*f�4E�d5e��Jy�\Z8�fD�V�S�����C�y\"s4�(K��y�Sn�\n砩|�TC�|�J��ͫ����C\r���,1O������gKӾ�AU��I�(?��&�s�L6_�vD���\"sR�6,C��%i�oY���T�d\0�XژX6��W��^{���V\0FT\0�\"�U\00�������a�&���rb\0!a3�\"-��-�ee�LU���������R�lQ�m�$���h�z:%L��)����.��a���J��C�p��u]��y��Z��M�Ƥ�3�`N�&f�F$}� $��f�e��~�lh��=�큨�a����3��_���]�TFS\n�L�!k6n*6dt�8ƴ�]��w�k[��$�)fo+C��2�KBT�y����^�*#�b{ږu�J\Z2ד�g�R��eF���%����e��@܈l�tf\\M]/�(\0�z�]%~��Q�@O�<�����=p��.7�9���y4	s=omP�����2��,��㢩 �� Q�g�\\;���:�&{BT� D�H������,˓��4�Y�<�l^�ɻU��\'2L�%*��\n�%%�ٔ��|���ׯ]��^��<��7��v?�9������Q�/�]}�ب��w�*MdU{m1V��<1�\'S!k\nқ�i�Z�\0�&2�O\r�|Q=0��Y�d���\Z�Pu��\'�iY���<`*z�j\rH�i�z\\���*U�� F�^Z�&��|�|6!�O	�\'(���(e{Z�0�����t�<�c���=[6����0\rf�����%�0���	>R��C&�ĕ�n�K��\"� �\"�S��Z���p��!2�8.I��eqe��dږq�Al���ˋW.�H����]�ϹjI%S;�L}0�.D�e�n3+�_��6Q՟S��=��v�z����q����y˛6\'FeU�ImV��l�E����4��s��Qi���S�ȊQ���W.���V	���/�$N4o}�	�{����=���b�����w/�3�b��Y��\"��\rY6��d�2Ю|�SI+�����)�-�n�j���\Z�Ji�P���DH�-�1-�� �������ￍ���3����l��T���\n��x����Q[���߷6��\"U�$i��ͼ��\"Z�&crFӂ���uI\'��d60�J�����_g^k#\0��&�2H9�������n�	e�yP4�JpW��*�k)\0�\n����u�R�J.)�DT�\0��8\np��q�3�R��O���80Z�;(�0�Nq�~��`�E��\'�\"ư�s�2�VV����8�JeQ���FCR��8�P�UAs��:����wSq��zD�I�Ee�`e����)�ـl�׷L�6Ou�3-�Z��^#X�\r�Y���h+�cZ���]���0�G�&}u �	fP�1���,q���G�A�W��F r}Y\rɮ�Wk���J)�������>gww�/�g��1����f����dٔVcOu�x\Z�j�+���.5��z\0��ɱ/,�(��d��\0�i�0,�l��a<��?��].�>E��+\r��yJ�v�l^J�0��y7�jx���\0�ɫ��w��\'��nc\n����b~�]`��jL�Z����<`\ZE\0��\'0����������K�}m�n��C͜+H�\n���HlC�4V�]��\\$����>O˽����Z��^�K��̄a����}��v�u{A`e_�A*k��8BH�8d>�єyr<�XcKRd\nΕ�0�v��G��#����\n(���t�{BJ+��W%M�9U*U����}g���KJcZm�U���F��Y�-�[�E_�5a�-ת�82��z(�s�́#*���d�nL�k9[jV�%�\n��䮗w��ܫR��dzT�ҫ#��W��pa�b\n��ϭ½\nP�uMo׌�b\'�<�����X����dF��&�~�>�>�+/\\���_������T�K��3�FS\\9���\\�}��3��i��Rf�*�vNU�,�tf�=ʽIy̪3 kL��f/	O,\Z�\r���)0|�^����)��#?�a8�ֽ����z���O�x2���x�*��(��b�\'t�Y�9��1�;��)���6Q��xlvoNu&�B��`j��/�T�\r�0�P����\0��6�l�6c��\0L�yT(�vi��Y�Z!Q���\\�RV�C�T(E��)I#�(%��[����\r��GH%���ޮ� %J)�^��H�)Q��4m���D�8@�s�`�I������G�t�C��\"�����#�n�X7v-V�a��usS�xӟ��.d�0�rꗀM��CT�\\/���8�f��iPd�T�W��\ZM�]\'Q�*z�ԝE�T�\r$�ׂ�lΦ�Le?T�k�X�W�bԛYf���7\r��4������<Ϸ���\n��GI��y����Ak|���s����Q\\R�35GL�Ĳk�ԏE���bl�o*E-��h�T�)U4#mVL�O�	��a�$�b,L��N��X���/ZݽϏo�f2���o�k�?N~�{��Ź-DM%�I��@�b��\"�T_��_�ڭ	?/���X��gW����i�K��\'0l`*fj�\0�5̉��V�j\r`t��h`�0�0�EY0�U�\r`�b��\0L+&hq��ߟ�ٜ~�Ek��i���#���z��a0i�QG��Aً��+WhG9x�G��ۈ�c��Ԋ\0D!q0���R-�Nb�$�\0&IH�$���9:\n�\"֠�K�h��$x�e���u{���!O����`L��-����t�������y�)5�0�\r�-,��6;SXkU�T.X�Z؈��_��Ҕ�����jNh2fJjXe��jiV���]j�l�\"�������ǐ���2�z��eyۀ�b�_i��b���A�?\"3�����gw�����3vN�����|��ۘ�X 5-u�e6L\\���M�_7�Ĕ�ɫ\Z�a�W{����aL�)�aD�x�/(3!�M(�黷x��{\\�ߡ�!�fƯP̓���|��y:~-9�a�\\��x���v�D;��j�\"�3��K�>\' �J��\Z[7�WʴRmOGKIhQ#�[�o`6�P.\0��k�0@��ӆ��E&��d���S	n\0�-ƅ�A3B�0B���B�Q��;m���x8��;|�8�m�O�\'����H%��eٙN�����ah��])�t{�~�\"�͈��*b�xu�R!�u���A�>��tHtD8�0�c&�C���tg���o*w�uYҍ\0L�([�n�ȭm�\Z�ц=݈�Z�eΗ�ߗ5��j�#�����/�h~�\'�9 �X~X�P\n�G�U�D�gN��nŨ4o;�b�mҋ��P%����z�E�0��븒����?�	��_{�\"_�y)DZJ���Ul\\�����O��{��4��}�K�\"��~�Z�$K����B�6�=.�g��\0)�����O�p�W���<V<�F�_����\r�\\�ٔ��$ӌ)X�d�w��rN�3�9i��\"�?=ߜ��me=�:\0�P�T	`t\r�i�S�\Z9\"+�$[��0c�1�i�Ŀ�d{��J��\0L[�M��{�l�2Pp\\z���9��Bk��d�c���dz���<�C�$�\\��h��(�C�|p<��>��1���=frp�`r�	g�(BJ�t<d�Gv���]��\0#$I�B8�.Nǧ�ߦ?ܡ�w�I�AL�A{�Lgs�0L������dL�Ż�4ՔD�ƼNML�r�E��MW��V5�\r�ǣ�gh���%b}pܔ�/���8��e?���*�3V�/�c@dʶ��L�T�)�\'U@�.6�������� ��m��i0Q�\r�X�\0<�0�����CК����͗o�R�I�(��X�(m`]�]]�ܢ�Ed׾Y��&�Su߳xOf�RTɐ��\ZS�5��)�=!�+#�<|��/�`���Z���~��-c��[�zڤ1T7�ax�\'EZ�6b9�@橗d��^�Mb�R�a.���p��%����r���FӾ�	ȖAz:ls��5KS_ �Y\'��4L��&q�\'052�M=0u\0F�K�\\�A�TbYI�Lm�U\0I�s�R.K$ǏI�GD[;����z[)c⠔�����`~|�����Ct0EI�3!��p<��\";]��aR�t���2R��BH�T����<|��\'I�t0@��cf!�uI���Ƙ�y�vSȃ\n�i�`]\nJH�:��R��Ѭ�V)�%Ew��<M�!�&뼎X�y��W4g��eN���uL���,ٖ|f���2k[T�\0��3\Z{�Xz�䟥�f�x�4�\'����Orr�9��l����I�� ����4S���|̟��ݧ�>;�-��Y�Q�jg����-Эjc�t=m���!��gj�摦&a��WkȘ�B?�LC��/ꇣǳ)?��޽�9gw�x���C�նҽ|3i\Zl��e��ż.�\'e�+E�Rd��2�pfϭ���&�����?�Vnd��J�C�T�Ī�&��sZT�9��X.uĵe�\0Lz��5�fm\0����h��أJ����-kR k	`���?`\nhn�\Z\\�=հim����,~+Elr%����E�������h6&8~Lp����>��HE�D�$Fv{�D3>< f���x6Ƥl�����G�>B:iu�@H��JGA���iq3�pN���(��О\r\"{�!��R��8�ta[)T5�^��\rH[�uۤi(���1�I��i��mفr�.\nBOz-Y�]Vn��wq�\r������Eid���*�ँG�UT��y��6�eQ�Qe<h�e#鳔R�8�?��G|�G������\\��%ֲ�%�I�d[�����}��}U����	oQ�z�&H�Eȁ���0���=��+g��G	�ɯ�����Ŕg�V{ci��D���M�J��l�����dr��v�\\�\r�I�4Q��� �D���k��b�t*/��t��>FJbm�K�K�\"�\Z4���5y�J\0c~z\0f{�0��\0���(��`��U`�f�6U!k\r`L.vK��k�)����I��:t<�uH�$�I�Ax>&��>d��6H�(�Go���.�u\0M4;&�O0q��z�Nw��;�A9�]vIId�r�DH�&Y,A�H�(�šm,�;@�!�耐Ǒ8��t�%cb[uڗ�+G��q4�ٙ�AMNy�^U����\ZИƒ���\"��\Z��{�&��M2��0�T�F֍�ԲO��/؀b����Ddţ��Y,��j�MX��L�|��cU�p���/���-�. 2� R\\	�|z�wo}�����7n��	��z\\��4�^�|ϲ,��6��YL�\\�\"-K�������נ\\�\'�Mi�(H.W0��LA5��&�|t��^���7�p4�PJ�\nu�\0��)�,��k\r�יCoti�K��~SϡL1p�IE��U�TM�(A�㠵&�\"�IM��>�(I����(����8�D�&����k��h%��c%y��w@$U��s��iq_d�\\�I����0������\00l`�X�/��޺�ZtA�Л\'-!��N��gn��i]	�Sf`2�vb9��>\rS�F�z�����qI\"�����C���x>��bZ��d|��1;zDp�\0�l\0�vp<�y�)�b\r/��8B!�B�1��f���e�A\nk�FR�IR!gE\Z)���q���ҫC�l�f%��vsy�Q�+�Z���\0n�,��ots>�0Av�Ԧ�=R�4��\"S�$�啻�1�ȋ2@�:�2Vi<0MM�vN����)�����L��ʒ	�b~�8���z%J����P�\Zx_#�a�F�4����|��1�	��x����=�x�Lob�6�u�����*�{��}Qm��0�:�F���ˊ�!jE2�d�{ҿ|�x�s���C�����yx�o�v���^�Q�/�=�TY��~ƦuӤ,�XT�]����IJ�D�l�آ�q�s�X�n��s��(!����F1Q�D1aF	a���ۯ�8&�ct��J�:̣��<`ؿO�&�����!N4��`%�ɲL>֫ry!@	A�Čz>�^��=��+��ebX��7��7Z���)�4�YF7�\r���l`�~�ԟ�!��T�j����Ĳ\nĤO�d�\\`L�I��T\0��q�Z���������9��F���A\Z��N�E`\'���x��#����a0\'�͘M=#���($�͈�9�$H�#�#�t�0	&��И�!�B)%B\nt�\'�A��z�T R)0j��5�\\�` �B�N0Z[����u����Y˷��\rt�Z�Zۀ��j�Df(*O�B�Ԝ\\m���� jM���\rQ`Ty���-\',HM�HS�V��]��h�zm��6lK[��2�4˜�0U��䶢Mۺ�㵐�.����I0�z<8����\'|���x\\9s�����b̬r�j�B�2�~lrM���s�XZf\Zc���G���m�;����O�p��).�=�h0$�����29m�@��5��Q�ɳ���ϑt�d1�)��X �y@\'	q��_\'qZ��8x�e]&�� ����3�z����׉��$~�ɔ�A��2�!�()QR\"8R�\\)���Ҋ\"I�#%��ȴB`��3\Z����8Ɣz��j>��1/�̪h#\0��}S�µr�#���0m��7q��=��(Z���g+\0�\0��/��Y�H�{�j\0�I\Z�+zht��M�U�tIb3Z�%ZOy��e\r����{lo���1�ٔ�s\\���Z�jS���.H�q]W\n�I�8\n���r<��qm)Y4���c���z�XK�����2���\0���x��$ID�R8�K�rl��18�o 7�DU����h>_��U�w�^�����)�=I]��􍘥ύ���u��U�Ѧ��h�E��Z0MA�Ɇ�&���r�/�U{�I�n��)c��`�l0���d9��ɒi�t�U�Zy�����>g�LgS�����u�����+7P�c2�W�!63*]I+7�[�3���5<������ˣ�y��1S�i(�*��s�e��r]e�C�/\0�/ʱ�U��舷>�����nrvo�X��	�>��������?���K2�ʛb���hS�I;A������0�]�z� d\Z��Øy-��E� d�̣�y��?8�!�%p]��0��9Y�`�tHa{����BI�o,�@9�q�F|ס�w��a���\"W������<����:x�C�QxN��k_�s���:V�I)��4b�V�ͬZJʎRfR�il%�����z\0cj{R*\0��P!k��DB�^�S\00u%gkL$jN`j<rD˖\nduג��l`I�!j\0\0 \0IDAT��3ˏ�y����A����Pe��/\nB!�q��zt�:~)��@��(�1��R98�G��gcf�1Q!��\"�$1II&!����	�������Ʒ�z�BJ!��J���A]����t�>B�ԩZg[>�*��Y4\Z��a��)>d%x��Meb\'��WI�V� �ؓ&�X!*g��aS?Rv9��R��I��á�:y�&�޶\0��X��y��g���iY�ɚ\0U�R��t�ɀ��Ke -*ց�������1H)���c޺�)���1�c�^�ȿ��_����q��-��̚6���[�(Х�Ş(+�kf~�R�Y5��z�ɝ�95��^��k�\Z�SD+�MD�g��/6�1@G)�8�Ƿ>�Ƿ>�hpq�4�n�W(�)h�/�^�h-ʷ2�Ȳ�ªku=�v�E	�x6g2�������l���\ZtOf!�y�x0�L�!�y�l����#�]�<	��8������Q2�W�*e�VҲJ��n��s|���t=��$��iJ�8�5\\G�@\"J-���w2�{�Qb(N��E�4�ҭJU1i��ƐD�y���Z��������Е�榤P�ˍLf�_�h�`*�\'0b����k̦=0O\0`�d�E��\0`������7\00�4��=צgm�Ld\nJ����C�!�5�D�����wp�X���y(���\'|wp�\"�cס����(\"�̦c�$A(�:DA�c@	eǢ\0�Ā@)�@Cb4:��!�Ġ5ұ=6F�7J�8���\\bI���Yc,S�T_��E�CzS־�9aJ^\'O��_��_ ��*cm\'@Q������5����i-W[���KŪvf��L&,�F{�`�	L7M�(S�Z�1�mw!��jw_��j��%%{�.�{�6��{|��9�s��YN��Ē(݃��������jdŲ��y6j�<$\n0�����>K�T��t3UI������Ŧ�2Q<�D�`Ĕ�6~��X\'|����1C޼q�k�����JV�6�bU�%��[Y��d�^���v��C�~̂�Y��t2�[�1Mّi`�^�h���$�,����Կ\'��(&�\n�6���a�q�t��� 	��Ɩe9���t�>w�_/\0�cAG�sQR\'��<i�>T*�!��r��Z~N�3�	��2GJY���906�d��s|�F�l�sۉFf�t\\\Z�bN!2]�Td|J��&��4���\Z���\0�B%�\r��v�\0�X������TB���\"��ֱ\'0m��O�d\0��xT(!m��Bk<Ilf%���֙zU[��(�p��HI�8n�����VS�1��1a�r4�E�	�p�y0��	�|f�\\�Le�\rR*���IK�R\n��c<�8�k\'�\Z�$D���l�1��S��o`D.�o��Y�Zw�<YƱq@��2���씹����rE6S�.ho�:_��K��MuGF��g��ֺ�.�3(�_�)�-ư 2���5�v��m�����������W_��+7�%mփ�6e~���s�@��+*��G4?&�<k�]l𴫁Lͤ�-\0��9�����d�<>��[����oq��>_�y����$����}1���c�?�6(�h�L4�Tk����#��������]�x6�x:c<[���I1�[`3����M˖h��X!��H��\\E����xt]�s�;�疾�u<������z����I$HB۸�Up�c�#R ���~Od䑷S\0S�~��!��$1I��[$�΃���*1�\\�GF9yɺ�)��9G�;\r���R_dg~\0FX%�Y����_(�ɔG�BZ�4��/\0#�؝�V�<��u-pQR�&2��|m��8z��@\'�gS�0 I@�P�P�IM2!)k#$��s=����$��L߯���9A�h��c1���n�Q��:$ќ0�s���X�@I�cM�!�8����S�8FȔ�N2�\r�> Q����{�^b�Q!2�[�*�Ų���\"�(>�,����a�N,r��T���%+� 6慬���2��f@Q���4\nf]��i\0/�>��⛩�ò��T�8S�ٷa��d�ۚi6=�M^#�(�ܲ�,\"3�?���*	Į�բ~�I*�N^�x_uc!�$�c����|��[|v�\0�!���s��+�ĺң���_�5�N�S��T�1��Dּ3�̙_%�l�FV�x5�&=+������1=�zZ��M.�(y3\"���)��\"`\Z�5ݽ�w~�%y��i��bi����\Z�W�m\nk?}�R�f�aG3BL&<:���x�����	\'<<\Z�x<�p2�`<�h2e:����=׆X۵�*��9�:F=�Ѡ˰�a��\\��1��{>�n�Q��|��e�����s4�<8�g�\\0A�Q��\'H�U%��)83B�S��zٚl�$����|��X*ZkfQ��Y���h�>������UR���I[CO��1�\0�Z\0S���LW��}�GI)�Y�SrR\0cN\n`�L�����5�-![�_��ԕۜ�,�J�\n��J�a,Ū%6�r��f�	�=`2�:�~�qQ����$���$�ج��h��8�ұ���H�AH��hz�C���*�~o��h�0�ϙϧL�f�Q\"���Q�b�c�\\�C��e��qL�h02\rH�b\n��\n�ݺ|��,��������\nJ��7&*	�U�L�Tm�\r<E��.d��x=!JH�~Q�S`�)\0�<`Y���Zf3ۃdrM�m�CS�|2V�(�3�,>S,?,�h��ϦPU����e�\r����]�#޻}��޿��c���sz�4=P*��-)�y��r/W�4�Y�b�S\\�˵f�̮�fլ�(B!����כ��t.��{)S\'r��T4\r�?kF`pD�����#^�y�ן�����\"����y�$��\n�E&X_UF�4��wv��S\'s��s�gs\'3\'3��/�>O9�Θ��h���xY�`)Dʄ����쿗���~n�u�z��O�k�v�\'A1� Ѷ�V}HǱ�R��\'�������\ZvG��b݃�F���bV�R���~&��\\�Uu�U�� `���Չ�����d�Z	N%���ѠE̉��\rL)�\00���\0�=�Jҹ\0`JA}��V[S���%�\0f�\"Z ;��e��o�%\0c2�i���t��\\<:+�l�B�:.��1O4A���}=!²6��\"��q���6�Y0\'V�-9K�X[*s�h��ẖ�\r�����A�l���v	B`�s��&@���q�1�5R[*<H��(�luvs�!�)*��GR��\'?ં�\n S܀����H�� Uҽ��AjS�V����#/�Phky��OM�w���`����i���%�wR������g����O�|��g9w���Eɘ(\"�������,�aJu���;A�?v��+AŒ]�Z6�M\00�3�2F��M����Sř����w��o�O�\ro>w�gϟ�s=f�����RՑ�)LZOY�[����a�,��h	8�QB߃�k8��9�Ι��A�4��`q��4�J���(I�u���x��6��ި�e����2�ut;��ng�����=�zb���� 6����B�P��<LFel�y��&�S]�+M�D�ӛ��dV�k�P4����W�d�V���$���μ:Y�V^�BvB��6\0�ڒ�M�Y`�	����������hD�epw\0�M��X�/�+\0L<�L��N�$��J:��Y�[�5�ag{��g���9:>���デ(ף�����qǖ�)�k�\'̧3\"�6�+G�Mz��M�B��\08�*�i�H�HJ��*���,���tp�\r�`�x2�+f�U)�\"0�0rSU�ţ[6���O�K�\Z������Ց^ʤf3��\r,��6�֞�f�:?�B�K.��:8V�,Y�B�+��d�e���ܚ�nu��k�����Lg�Vu��|oe&������:�f�3)ʌ�(��t2Uݗ(�)a򲿙��T�kd�?�:ߡ�H��G���O>�{�|���1�O��^�ɅS۵�m)l*df[ϬQ���ʛ�.y�e��0eB�ʎ�|�(���+��R�I�^Ҝ�m\Zۦ���Ey���,�ג�� R ���MjT(�,��6�������o���7^z���p�����i�ű(�{�/��X.J�₱���$�\\�	O�����h���1���\\SƳ�m�q4�1���̂�D<G.˯<!�t=��}�Gv�}v�}vG}Nm���t�t�\r85���}f���8d�,S��6��y���x��=aI\n*�r_TrH��J�a\'Me�rE�>)r��9��4\0&#�opV�����i�B���U +�\ZߕM����M���\0f��f]Y՚�JpWS^�L����]j�g����$N�C�$DZ��Lk��K,͔<���0�S�����t�������}I�,�u�w2k���7� �@ ��DM�6�Vvh����?ؿ�G�;B;��HIJA\"A�߻��PCf/��:++k��\r�� ����UYY��;�9���B�ݠ��`���nݺ�8�!Aલ���P�ɖ���Fd�JS��\0V��\r�X\nHa�- H �+�,m#�2AV�Ck��z����ɝq�@���Cd-ܒ)7��vb�\0M\'v��ӥZ@W��\rf���/����ψvSs�fGjb����e�l,~��!x��ٛk7��N���^�9�g��{�x�{�G\\_�s��l����u�m��\n�r�O>��|�) ^y�%�z�%,�E������S����<jYI��ud�ߝ�F{G��&%^O�)1��Mr\'`��F�E�~�I���ʔNO�L�5��hr%�\0<O��Hb����߿��x��Op�Z��_��[\"�R�4��K#Q�T&���1����B \Z_l�x���.�����������%�Qmؠ\rCa�Lq�l���%^�{���d	��g�n-3��2��JM�좴ꝭ���ۥ8�[�EB�~y�!.��}����P_�k5���)��u�:7\r~0�Tp\r;�~����JB j��N m<\n{n�S\00CA���%��\Zl�1\0���cKV:\0�C\0�&\0̈\\t���r�ҖJ����\n\r%��J�F��6�B��!�I����\"[`�\\!Ih���BY��J��,!c��RV���*aؚQERb����\r*-�/I KSH)k����u#���|N�\"��@G�+FJ+6� ����Ϥuƒ��=l�.�♦rਫ਼�~i�(�P���Yf��d��aN�!�;�#r�X��f?#����,�`j�A\Z8�P���=\rǖJ�Ԡ�\'S,Qo]���f�v�u�/d���G�S>�\\�f��O~�1��O����_{�|�����[��(�@��5�q���.�\"�Z���k�xg��S�����[�[�S���)4^��xV�X6����g�\0;<���*U�>�����v�������\r�,��1N��T��j�{�\n�l閲{g�4�S������}^�U�԰-���F*Aۢ��P����2W,��^㥻��ZJ��X�	�$v�B�$8_-pV���j�e�����W�$�2��wUs�&��T�_Υ��Yh��G{I���Q�呱;F�|�f&\"����^L����!���<\'���Gd�\'�1\03Vv�\0&�/3��<vܿ���c���z^<4�M\Z`�����0�i�n�6fS���d{��o�XY�}���*h�j�2��4�!����l��nk)I)Q*�[��6�e����(�Vк�nAH	m4ʪ�$�f6BD�6\nǃİ�2�Uׄ��a�\Z�q\0s�̐׆e�v��:Gh����Ny��Ȱ�������+�Ȳ�����ʁ\Z^\\/��0��P���XJ�8p17�Iu����$t3�~�<�2u\0ޑ�v�5s- |~y��{���~\0���W�;o>��\"� �=<���u�➊�[n�Y���k�Yggc\'�ٞ\Z��3�z��`S�;���}\ZȨ����4C�fL���/���#�û?��o~����;��]����K�U��KmK��U2��k�ū}�m�}�/JTZa�ؽ�b���v��(��;�w�L�u�lK�H��2��\"�ݳ�-�:[���wV�^/q{�­U�e�°�������\r�̸����e>�y	�����������bS�K������I^v�}\0�#�k\0�N\0�A��\0\'{��/�b���p�\0\03�@O\0��ޥ�0��Pxma K����b�e� �$���\\�����\n��%>��(cu��0�����U��aT����DRX5�4�2[@i����vP��1�C	!UU�,r(U!��\0V/>��I�*��]S�EU�Rt�6P��\r�\nk���5�*MiZ����6M�����f#;�[�5&��CA�% �����~��P 5W�X#�y�!L�ju�5?�;7������̣�64�xs\0© �s�N\0�N��;��a���>�����������kc���>��S��.�>��W_�k���e����J�Zy:�r��#��|��f	�S�d�3�쌙��L��N�!`9���\'E��C���*����)20�u�������qk�?����o���]�5(/q�d\r?x|����7;<��{(U��*�\n�T�ٖ�im���z�b��(5CF)�3�=[��r��e��E�[���z�a���h[aWjHA��2`S\0�2�p\'��9�t��\r\'���Q�b�\Z0�(7�<E�E�`�bV���dS`=0=a�(pa�`Z�+��3��08�P���r�-�{\0;R�華�ι8�u��M�\\+qm�DH�i,A�yQ��٦�|���G�#�#�q�,ɐ�iM@�� D�3�\n�\0�4�j�D\Z\'`f��U����FWBZ�ff�¾(��u�ª��q�HH,�:�3�hUժf�R�4R��Q`#/ÏN���/�0+��졤�(�`,�j�9%\r�fО�w���F|�FA���=�2�HA(��I�����&:��LC���2���c�77vY�\rD�c�l���$���\r3.�9����?|�C@~��������YG��\'�̉@3V�osJ���T��?G���3\Z�9�m�;�~�U���9߱l8<�����0����*�_���������×��{o����b���r �Dj��\'��/��=���0�Db��(5#�S��k,��$A��X&1i�[�VY��b(H)��1�X\"�\"ı�O�|&�e!�[s�C��,�1�ܹ����O�I����3��/�rS��ԻƵUȎ0�&��W\'\0L8`�������\nd=&h(�w�����9%d>��Q08�L�5�a�f��T�0d�C�d��H K,�I�T\nZ���{�\0X�,)#�q�4I �BDH�Z$I�HZcM!\"�H�i� �ӺW[����I�@�5�R(�����E�dֶ��Y1n3�@\ZId5���zB�0=�_��d\\��f,�t�{\\�a�p���IeW�UO����Y�Y�	��D7�cʊz6�����q�\0XE��n��}�gx���ay��w^�\Z�Y��Tf4%�/<\Z��B���]�}�S�hS&��Us�BG�>\00�Y~������g��!~��Ǹ{�����<����ّ�6�}YAi��E��\"ŝ�\n��K��&�VY�Uf�OVi�U�b�Z��8�(*�R(c�}\'�}(*XO���%��\'N�O�|�z* �`LY���3�ΒP\0����q��{�\0�yo�̍�����l�M�]��r�u��1N9��Q�@�X�V8?���|oU�@�����_]@W%�Q#͖X�ϰ\\,�X,�HS�Q�J���PZ�$��ݲm��D������w��f1kktE�c��a�� �m!�D�eX-W8??��[+�i]j��pA�B��a����s��=��SFZ����fs�����3�����x��Z�`���W�g�s8�5v�\\|�~��)nuK��$�9մ�ԬxWl!����v�>ɫ[�I�3V\"75�&��/כ\Zc�7�p���/?�(K���ܿw���\0�j��(]M_�T��+����¡���d;\\���k���C�fɃ|)\ZE3�kL�{̏g���f����@){lK;쁛�$���|���<���\0\0 \0IDAT����/�W;|��o����?B�����\0J-��o���_ý�VY�u�a��PLl���+F^G�\0=�������O�y�@�k7�AF��\0�yR\0f�=y^\0̈Y��)*d\'\0���jc\0�\'�(!�)��Mx���o����$Y`I�Lf4�[�,�PJ�&�f�H\"�cDq��`A��^������ N2@Xw��\"�z��r�D�$`S{?��(�YU�Z�JH�I��b�$��Fa�Y��*�RBJ�Ƨ��,������FZ��Oĥ�k�ϡ�sw��Hk�\Z�G���H��9}5=��1@���{D���T�oX9�J4ni�h�W��T�D\'�>�ď�@�L@9�ў�;�z̑�\r�pÇ�PJl����t�X��#sX��h9��G�-������%��������o����l�5���a�4�2��<��m*�R���mRm�z#ym\\�I�/�𛭬@O��@�t��\\��/c~GSk��=��5����8��\0���%�������?�_\\�o=����P���ǅ����K����F,m����l;�¾�=&�%�8��芯^7b:�H��	�O\r��o�}s*dG�������\r=�H��뙣@�����)\0c:�I\0C)a\0�6��y� �lw�$Q/�R@JYK\0!%b\"�qb�.�eT���t�m�JAA��~U�,\r��P�%������2.Z!�oQ,�Ȳd�ԞKT����5NR0�0��.�Q��.�P,P([.7��Z�� ��\'#;�@���3���C�2SR�C�\r�!/�\nF!!\0\Z8����3\neF�^(Ȧ�wN��-A;�ԇW�\r�]�Dg�\"��f�E�[>5�x���1`��=�.����e�����7^��w� MJK9�z��f�.���dg)wu��0s�?7¬�1F�c���:w���)�=�%�M���~���x��O�J�w�~�ݷ�/�\'�27ߟ%IN�i���O�|���us ����Y��a͆d�o�t$p\0L����J5�\\�M�Xyj\0���M���Ra�&�I�R��	�1��JA+�7��	d!���D]���C�@F�h�,[`�ZCiK��=���R��ʢ�OO����#��VgX�έ��1PJY�I�*FEd�a*\r@\"�#,\"!�3ܻsY���	\r��;������1#=R��<q��b�@0C �0U���s�Σ엥L0G4c��\Z�2�����D�D�ļ�\"pߢ�F�m�쳡�Px��w���1M����И��c�>|�����Б��_}��_��(Jj�{qD�`szP:�(����EW��BKq�?:3�ػ%Ԓ0��9��P��a�S<�}��yi��B�yC��f;�<����� e4����O?����/��w�x���5l����6�<�A�3�^_�N1��F�T�q��0i�R�\Z0x�\0���)�����bB��	�����=��L0On_Z3�$F��X�\r�`���m��EQb�����W�=�b�\"���$�����Ưk3�r����1��\0��8M!H����,C�X�A(��5��+\\^|����]��� �W���ϱX�c�>�j}�ru��*�-B־5\Z�Q�fS��h(�u�H͆x�;2�a����eF�����\r���\r�p�Q�.�xsMDo�xp����x�ڂ+O*�e���`x��o0�\0��f�mY�_N6O�vN�?�~�Qz�d�Wȡ�FQ�s�\Zs��x���v�L�Ŭ!v�@��^���>��b�/����\r��o�1�+>��t�j���j@��P�p5I�CۡL������G�p#��>���P/B�����D��OS&7��N�ȅK͞o,Ӭ�7{|�������x�՗PT�W+�d��g9nv`f���9M����F��t�Vtd<	\03�1��3 �;��I(����\r�=Ƌ�4����ې}��\0��8����,)\"ie���F���d#�Il�^���X��|��R\nZi0��ec����~��/���%`6��=\") �g����\Z�R�uO���\Z��~c�/�-����q�t�������$����Q�9���W���}���0l��y �d�1,�qƴ�\n&\n�ՠa&ړ���U�`k��\\������y�c�Á�v�>����Y�9;�����Ω���1s�1�2e���֠C@Mq�!D�{�F�REL�0x�R���en���ew\Z#|�1���_@$1�����\n�R�~����DF�jε#v��\Z�B�4���	vw�<�,5� ��$t�J�sA��eV�1g�^9Y�v}Θ�$�H������o���ܮ�Z_f��d����<�/�=��4`\0ԝ��\0L\'U2�`����\'��?����\0�G\0���`�	\0��ST�F�QW�\'K��;�I��?�$�z�FR`��8[.q�ZCD)�2�R\ZeQ��h�{.J+誀.r�\"���|@{�r��b	�u�V�5C! ��5�I�X�>�(����^AU%�l��f����i�H���BF� ,\"�r{yY�9A�K�U��d�1P�Ľ�#j��s��i�0��<S< ��m�`(fy~34���38�����u\\����A�;	z��ßgȠ�2;`�O�=2s�75v�����}��~�C�����[��/�G^9����}.4�+8�LRP�U�5�?�{������ӫ�>]�+ӓ��9\0�����z�򹍧�g�l���w �����!�ST_b������y����������,����\0�o���`���#\0̜��S�н�\r`&J�z\0���UZC�h+jŏ�#��lk�%�8F\Z�(�ʲ.`�����V��e��v�&A V���� �x�*��wQ��2�6���̦>�te˼\Z�CF����-�8E�-�,�Q���qy�J+��\"��8�����rJ����+\r�e%~��)���q3uʱ:�d�Q��C�.����Cy�N)ܩ����\r��j����t���u	\"��Jn(r�J�N\r�����6��M�僽��n����y��շ3�?53�\ZnFg2x�������z�2��7��o��*��}�T°�5�������Q�Um��Ȗn6�m���0�VQoj|�� ������ȧ�`�����T֋�}��|�6@�J�)-�����+��&\\��DfГ��z��I\0fN��5\0�:\r�3�#�L�\\n���+C\0f�A��=�&~��1�9_����7�7�����Sm�\"�	Q{ ���B�o �\0��dDl�ˢ�\Z�ctUB�WPW��kgU��(�^���#TZ#�Sh���5��T^7�R��Ȳ��@D�tq�l}��q�A�\n��A�sv���K\\�+,k���� �+4%��)b7=��z@��vm�.�x���U4T���ҩ��w&��Qt��q�@v�T����T4p=\rO��4���9�\n���!�y����>?ȧ�<!7��Γ�-��ԡd\\����M�>]����04S��3�����q,��y��n�2�������ɎAg�Sz�fG*��K����=�A?��4�\'�]庁��\'d�]\\ݰ<���R�o�9�����\Z�_�Q*�o-G)r�[e��1���~}������9�ڗ��6�s�OzJ�A�l\0c�ٗ�``�<`B��$�\n|>�\0�s�)��6����{�1�暮	`�Y*e�bJ��WV!��#��֕0PZ��\ne��,�Uf}�cd�d����\njwS���.Q�;\\~�	��BJ���$A�f�ql�1m$�lZq�![�!]�C���`�$Ń�/��W^E�����H��J�N6���r(Kپ�6�\r��ݟ�\0�\r���i�J�8��`��M8}�,�D�iVV�YW����\0&�\'��C�S7���2��\nؕ�����Ӌ�������\Z�W+��͖�Љ�8d��^�(���{r�<����#�?�4�ZP�?WW)���r~��r��i��T\n_<~����2�q�|\rI��<ó���e0Ou��M1�L̇�C<�7`�A�\0O\n�\0=���`��ِd5\r?��\ru��,��BU�BB*�T\ZE���:$ #�Z�{�5�|��f��v��~�\"ߡ*�uɅ=W@�q�઴� ��\Ze�GY\0Q�byv��mTI�ͧ\"��~Ӷ������lo��\Z��`���S�:��{w_D����U��>8�U��:��#Q��F�\'Ӏ�M @��g!O���|�;\nj�9��fv��y��퀤��j�߾|�pƒ���f���1SFsL�>ȇ�Z���W��puV��gڈ��in��M��M�`��#�%]U�������|�!~��7���/UoNΕp���if&ul,���\r={��������e�<	Æωz@���R�F\\�t��\0`Złcxs�9_�*#E	�����U��$���[x���4EQ�O�������FN��Y�����M+��]]\0�u~�uU\\Č�$Od`�|D�(!�q\0&��^���3�7	`:w�˸�<`���0x\0�lf�ĭ�2�<�=[$)I�,�8_.p�L!��a���(J��T��9_<�f�V\Z��\n��,\ZsL	���q����FC��C�L$/ϐ��A���X�p~�H)���<�`]����\Z�K������\0�D�\n����\r��R�,eU�(J[�怎!��XA_�\"T�P����BY�i���3��\0!��pY?6����9w�o~�Z������Z�#�ܔ�]\'3vJ�1��;��ǅe�=9_�ԭ�S��3��)W��һ9�e�9���U��^�/~�.^{p����A�	���c�z�)�u�)������4���S���L�<��Ć�zٱӏ�ERC�g\'=[~�p�3e�^�K�p�.������ `��H��y	�c!��!�Zz��lO\r�=u�\"���4�����s������`LՖe�#`B�M�p�����@@8Qu�4��q$?����2qW�~0s>���1C��h�?��\0��*��Q06�P�\0�<`�X�	Y�S���0���A����k�eH��_���!`�blxa��\"�8����k7F�h�+�|OD1��Ĳd�\"@H{�2E	HX$H)���\Zq�E�x�0���eS�h֨���KH�(�.\nT��+�y��JG�����v(�LA�>�`�z@��g>:�Y�>Xj2�rozu�s�8C%m�ٌ�Y]���y����`\Z\"��~zB��T7���q���~�xf��⁜��x��17�8v�B�o�	����+\\�s|���ݷބ1c��6��]�\Z�7��r��5b�I��oc��F��T�8�.M�f��;��	��4�vçЖ8�+��w�o��W�\r�8�\"������7v\r=1�\\�4Q`���<k->�Zu��8\0�踢���	%̩\r�{s	�,� ��mn�\r�>{u\0L���P��ǒ�:奔���U�t��|�+lW\'�y�w�*� \0{a�{.�q�C�0�8��v��*d\'+�\r�c\0�m�{8:,��`���u\0�{6\n`���oMO>�x\0�dε1P�PF��=1�ꑔYc�&����6��\n*�����BX�#\r��UA�\n\'*mE`��`T��̑�\0��r�*�)��b��J\0ZC�9�~�)�t�J(UBA�,M��2\\n���,P)ea�v���w��]�i�1������l��BO�q�X&\n������e�����Se;|�Vwz����=���8����t����|�1�˧A!?��s������:~�[���;w�x����޳��6s}�S$�x8{-��1��)V0t�렁WF�F�:&�cK�[כ�3@P�@��|�A�1��o�9��5�~\\���. �:Vt���r�Ԗ{����0������U�P Aw���qwf8�F��|�tߚ5Z�ҝ��yv�����\Z67cOB��cN1;���<�A0�3����E��8жO����n�̑�����\0���?�L�<C\0:c�q<�\0�\r\"i�Y�{�VH�~F)\0�E�b�^�P���D	�(�am}Y��1\ZZUPU�2�C1C�4*���6㧫UY@�E{��h�.Ql/����@�I��$�*��(B�X@�1HJ6X�ϰZ�Xe1VY�$�@\"�K\nC���#k7p}2g�9)�%g?X��9��1�f���w��/�h]���q�Xs;e�����ϭ.�k�i$p�E��)&b�љs���q,���?���9�ݿ�<��\0��Z�ʩ��1�=B}��~�4w3����Sk�@ӐR��u\r���/L�\n�sU�z��3�c���9y��j��?�HP���{M��0m� �e@�����!�AC��<\0����V��q��\Z���y����u�:��c{�)�7�9g��|����OFuf�+����M\r��&R|�X�C3��ޒ[Nl͂��i�&�1���%羷fĢD��v(��\r`B�_c&����DT�&��\0�\Z\n��\0��*d�\00�`obl�J��Ƌ]��c�h�:!-B�t�	�k�\"�Ƌ�VB\"M�W+!�� AȖ�ĨJA�\nE�GY��*r��\r�|U`c��Q9@�*Q�w0�Bqu]��/�$(�@2j�̌�P{D����r�8��ʚ`�BYi۟Cejp�O��և�g�\n��y��@��!r��˸�r[�γ6\r��6�\nf��8��!�3����Nvڕ����I[ݐ*�TF}L�z,�}���j�7nD��B9듿[�Ɏ�p�ۙޱ[��؊�k�x��pw)�ʋ/A���Yr�Cr�s�T��e\Z������V�>�B�:rY�n�>������e\r��9\'nz�����Ҽ`>�)s�Ax p�eF�dt�I}�t�~U�/��e3k	�z�0�@��l�f��9��I! ����@b���N\Z��(�\'8�F���}tK�>G�\n}wN�enu���{r+\Z������A��	����� oy��\0�gR��q�����w����^��/�3����A�M�������d��T��#ؗ\0�\\y�=O��2A·̩	l[g���R�H�����]���]\"���\0Y\n�+!�^��I�y�7���P9��RZ5�\"G�ߢ̷(�{TEl4tU�0C��*@Q�hyn�� ��*]��*Q��\r�4C\'0\0Je��*�ۍ�R\ZU��͡�T렒����ޏ��H2\'0)�xԱ;(��)�d��5��R:���_��7����@�;}s��*0�#C�yAoHޓ��� 3r?���ڋ����;(Le�Ƴ�7��4d���m��\Zq	#k���-\r����_#���#{z�Ƹ����[�р�:�n��n_A+�Q����֦ޟ��k���-��ABQ���Q��H\0�A��W���;aB�W�S/`?���$�����;�����Nک�9}=�%�O�f���_i�F��%�xT��/Y��g��$F|����!A3��8����������u�x�E��._���*��arԷ���%f�\\�2��K�ѿ��3��;~�=}3>ݲ$����N�7^�� �>�@G�����C\n��c��T\nee ��%3|0;3�Z��%��zC-�I�(�������A�f A��FYȋ�n�|s�:_��\0�`�\"]�/��K	�J�bS�V�LH�2G�y�(�!���:*m�����(��n`u�Ѵ�XΆگ1�9Α�eO�ا�)p|�-���d�f��Ϻ};��t$�DAe1�<n���������I@�`@ʎ����5�$���灏�\"� �7(]	��R��%�q����Hc�jU�fu�a<X���4H���E@�sXu�I��y�k�+���gQw�9m��d3ٻ)���v�mc2�~��й\0�e��)u��QL�i��N�a�6ʚ&+U�LY���D^��5ˢ�����&	YE�ܹ	ð�dbj�3b�E�s7,s��C^�{�u\0�[Bfܚ��\Z׬G�{����$r�k����B���P�Ӱ59�_n:3^��=�����P\\&5�����nd�)\0��7�6\0\0�IDAT��r\\l�J����>Ј>��]�a�d��x���Fas8�9t���\"1��8�탾�s������@�e[.\0u��_\Z�P�M˖�m\0{��	��.�ke��8\\R�%(+)�b�M��6%.@�8�r�\r�6����1���5�1d%��$�\r2\ZQ#NRD2�R\nE��~�|q	6!\"@\n���4Xk��U�{�݀� ��AUu�l�Jh��۵�ݒ� ��&�̌���M6L���r���S$����j��9��4�ab�l¬��9wwѹ��C�hl��rI����`o�10� ���C7��d��y�t�u<�,�,S���]��b�H��|t�	�‡�2�\\7���Qux:���N�g�P�P�H�6ه�n<��I�����a�����\")]C���XFDJ���k�\\��R!/Jl�{\\m�p��b�-)�Q\'�2FE���3��{2j�z��R�C\nB$� H)	W����H�m�3�`\n</�z�t���7��{L�a�آy����	㕎�����y\0}i���P@��Si�^:罧=vC�}���Y�!Z�%kyF��>�Mg`�4�X@\0������&�MI��`���k�����\Z7ʢ��)�@�+�2�-s4j�x�t-�5����X,3h�oiy�Y\Z���vq��lH�h��:{�d�,C�.�eY���!�	D�GD�Q�H���4��̑�2��D�{�T��r3�|��*s�j�U@i�+�U�G��OQi�fsN%�E�Ri�*	�qg�c��g5�z���e����!�[y��|�~/Ȟ ,!�X�5ý�=\Z�	b�f��eU��k��I������\r�����p��(��<��\r�:��n��|�Ɨ�zy���`y�����A��c$��H>_\'	A]���0d����-O,eq0�@qQk�7�N��rfQ��(\nlv;\\m6�nw��JAi��W(\r�\0 �X.Sd\"��bp�Y�KX���(m�m�4��Z�`�AR���Ɔ0��s�%��h��CR����m�{�fSIAN�]\0C���fSo}�uΝ��5w�>�%�2���������\n�5޸��x��y$3\'���sc���T��psb�y>O�ӥc�3��	XYVX,2��ￃ����A��0��\'�DK�kc�i[\ZFd�ê���R\n�ha[k�JU(�Z+Pe�+c!A���m�q�<E�}OR��EY�@��l_\r3ʢ���#T��@�PU�|��~�]\\�2�����%$VfY�aS�\0����G½l��ʃI/0䩴P����`��̌.O��!�@^��]���P�f�X���O�7ˌ�������L]CK\n�`ȍHk\0C����t���W��KC�0���wn�qE�60v�%��y�G%�|n����@ݩؕ�v\rX����R�D_C�+zƌ:���dg��pn\"��>���¢�>�c@<s�プ�[����&��?����*�B)lv{��{l6Wx��1>��3|��#|q���( ��X�p�ދȖkD�Q,�X�a�Z#�lI�A7��o�X�F�5438��=6Q���CBd�`!,�YǶ\"�������� ����o�05��E��p�.�l|��p�ɬC�)�}�6��\Z�f�]LG��R���\'���� c�dœ~�$9\'۔�$\0\0\0\0IEND�B`�'),(5,0,'%PDF-1.4\n%����\n1 0 obj\n<</Producer(PDFCreator 2.0.2.0; modified using iTextSharp 5.2.1 \\(c\\) 1T3XT BVBA)/CreationDate(D:20150313145251+01\'00\')/ModDate(D:20150313145252+01\'00\')/Title(��\0O\0r\0g\0a\0n\0i\0g\0r\0a\0m\0m\0e\0_\0N\0O\0X\0 \0I\0N\0G\0E\0N\0I\0E\0R\0I\0E\0 \0E\0T\0 \0E\0N\0E\0R\0G\0I\0E\0_\0E\0S\0T\0_\01\05\00\03\01\06)/Author(��\0c\0.\0d\0r\0e\0y\0e\0r)/Subject()/Keywords()/Creator(��\0P\0D\0F\0C\0r\0e\0a\0t\0o\0r\0 \02\0.\00\0.\02\0.\00)>>\nendobj\n2 0 obj\n<</Length 3905/Type/Metadata/Subtype/XML>>stream\n<?xpacket begin=\"﻿\" id=\"W5M0MpCehiHzreSzNTczkc9d\"?>\n<x:xmpmeta x:xmptk=\"Adobe XMP Core 4.2.1-c041 52.342996, 2008/05/07-20:48:00\" xmlns:x=\"adobe:ns:meta/\">\n  <rdf:RDF xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\">\n   <rdf:Description rdf:about=\"\" xmlns:pdfaid=\"http://www.aiim.org/pdfa/ns/id/\">\n<pdfaid:part>2</pdfaid:part>\n<pdfaid:conformance>B</pdfaid:conformance>\n   </rdf:Description>\n   <rdf:Description rdf:about=\"\" xmlns:xmp=\"http://ns.adobe.com/xap/1.0/\">\n    <xmp:CreateDate>2015-03-13T14:52:51+01:00</xmp:CreateDate>\n    <xmp:ModifyDate>2015-03-13T14:52:52+01:00</xmp:ModifyDate>\n    <xmp:CreatorTool>PDFCreator 2.0.2.0</xmp:CreatorTool>\n   </rdf:Description>\n   <rdf:Description rdf:about=\"\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\">\n    <dc:format>application/pdf</dc:format>\n    <dc:title>\n     <rdf:Alt>\n      <rdf:li xml:lang=\"x-default\">Organigramme_NOX INGENIERIE ET ENERGIE_EST_150316</rdf:li>\n     </rdf:Alt>\n    </dc:title>\n    <dc:description>\n     <rdf:Alt>\n      <rdf:li xml:lang=\"x-default\"></rdf:li>\n     </rdf:Alt>\n    </dc:description>\n    <dc:creator>\n     <rdf:Seq>\n      <rdf:li>c.dreyer</rdf:li>\n     </rdf:Seq>\n    </dc:creator>\n    <dc:subject>\n     <rdf:Bag>\n      <rdf:li></rdf:li>\n     </rdf:Bag>\n    </dc:subject>\n   </rdf:Description>\n   <rdf:Description rdf:about=\"\" xmlns:stEvt=\"http://ns.adobe.com/xap/1.0/sType/ResourceEvent#\" xmlns:xmpMM=\"http://ns.adobe.com/xap/1.0/mm/\">\n    <xmpMM:DocumentID>uuid:0D8ECBA3A1082F70A6202A8AE5AA27C2</xmpMM:DocumentID>\n    <xmpMM:History><rdf:Seq><rdf:li rdf:parseType=\"Resource\"></rdf:li></rdf:Seq></xmpMM:History>\n   </rdf:Description>\n   <rdf:Description rdf:about=\"\" xmlns:pdf=\"http://ns.adobe.com/pdf/1.3/\">\n    <pdf:Producer>PDFCreator 2.0.2.0; modified using iTextSharp 5.2.1 (c) 1T3XT BVBA</pdf:Producer>\n    <pdf:Keywords></pdf:Keywords>\n   </rdf:Description>\n  </rdf:RDF>\n </x:xmpmeta>                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n                                                                                                   \n<?xpacket end=\"w\"?>\nendstream\nendobj\n3 0 obj\n<</Type/Catalog/Pages 4 0 R/OutputIntents[5 0 R]/PageLayout/SinglePage/PageMode/UseNone/Page 1/Metadata 2 0 R>>\nendobj\n4 0 obj\n<</Type/Pages/Kids[6 0 R]/Count 1/ITXT(5.2.1)>>\nendobj\n7 0 obj\n<</Filter/FlateDecode/N 4/Length 1801>>stream\nx���	P�����}��ǾH@d\n�E�}SH\"D�IH���OEdb�RQA�CQ���\\\nu)��\nT@\\\0��bE}�R(�}o�t杙;�ߜ{Μ{ϙ9\0���a_\0�3���`t��?\0��$�B��f���!|~U�ˉƺ�YfzeS���׹�(�ɕ�r�E\n\0P�g���?��3��|\0`\0�=)��?�|��\0���S���\"\'/q�\"+EY��\0_*�!��*Q[���㹡�;P�T\"��1RI�R,�PpP?��^S��\"�H�	�P�@���B�2I,Q���4Y�n�ffQi�\'��T�<�\\�Z�(����rE���aGY�bC������.P��B\" \0b\r��?@�\n8��������sd�UK>����Y���B@�R��}@�@=h�5p��x!bC���C��Z(	J�TP.T\0�C5P�\n]�z�hz\n�@`<L��`k�{��p$�\0�`�΃5p|n���{�!x~�!���#\\d%��#BD�|�#������A&��Cǘax_L$fF���h0�0�0W0�c&1o������Fb�Ll>�0��{�;���Y��qa�$�\nW�;�k����f����ߊ����O����_��!��N�#�:��i\"��=�qD)��x��E!�#1I<RIL�#Ւ:Ic�_��d7rYI>Hn&�&���(\\JEJ)�4Q�(3Z:Z+�⵲�i]�z@��V���ZJm�S?��hA�4���Nц�m�#�U���W���:t/��^Do��1�\'Fc��F�����W�Yg�Id�2�R�%���\nb)Y��~]H���E�T�S����^��n�6�\'l}�\Zv��=����Z�~��FQy\rfm\r7��4�y)�NM���� &�&j�s&�M�L��GMGQ}4��3������0\'��2�7� X�X�赤X�[�Z�[���Y�z`ma�b}�����M��7��p�r�;K;�]�ݜ}����e��$��9\'�S�w�9d;�8�:\n����j�4ϋW�q�8�8�rF���W��-߶���E�r~u�`E�+�U�z���&v�tg�ow��0�����yxNz�zUy�[��ٛ����c��3�Q�Gu�_��5?k�|�)�P��|?�7�;�x >0=�?�=�&�|g����ZHV��ա��ט�)Z�.T��v*���&B1ɏl���*��E���bc����m�����g��ϯU��^\'\\w}��ބ����64\'r��h���&�M�ofn�l�m9�DI*J&\'\n(�b!UX*b�ʷ��V��)u�v�g�.����u�E�\rK�$���2�I�j���m���[�D��\"K�WVdZg���U�j�z.���m��xt�<�]��<�Ʈ�]�?����^�4��ٿivsv�G�����ާ�g�������Э�n��b���bəҘ�����A�V^�]����£b���J�ʉ/4��M��\n�zS]w$�S�v4��X��Z��ɺ/N��#�翔��99�����S�S]�w6�6�:�xV�d�4�|��������M�&��:�!:o{��4]P^��8��墯c;�:\'�\Z�Q_�J�:t����ە������7Y7���[���p۱��o��>�g�7tn����}���#�F��=>��>�<6~y�f2�I�Om����45�c����{~J{�������׏~���c���ݮ��m�e����_\r�������Y\0D����ڡ�CL���ϼ\0��\0t��\r�V��\nendstream\nendobj\n5 0 obj\n<</DestOutputProfile 7 0 R/OutputConditionIdentifier(CGATS TR001)/S/GTS_PDFA1/Type/OutputIntent>>\nendobj\n6 0 obj\n<</Type/Page/MediaBox[0 0 842 1191]/Rotate 90/Parent 4 0 R/Resources<</ProcSet[/PDF/ImageC/Text]/ExtGState 8 0 R/XObject 9 0 R/Font 10 0 R>>/Contents 11 0 R>>\nendobj\n11 0 obj\n<</Length 11889/Filter/FlateDecode>>stream\nx��}[����;�~��(��w`�lє�E�E+�x�A#)�gt���W�_����\"U�\n\r|�g�s�P�q-q�\n@�B�P\0�|�.J�&�S~|�����L�/�{�N_>1Ɲ���%��r攂=��\'���t��N1\Z����EG����|���p��;��)R3K5笏�\n��Q\\˘Hũ��f���jJV>1]l������i��\\�k1<P� <���tI6iEc�M�a8��ѧ2~jo@A9����d8�����NIK��v�ᘲ�G_����]R��}������tG�r-4���d8�^ߒ5�ЕK��3���~g�R��\\���j*��o;	�v��q=aF��aѬP�:!�2Bym1F�Q�Lj��	�Fk��:~\n�`|���\nu:!f��2�Q4 �xF�2�QF3 �`ьe~�^t̫�}��Gf80#���h���f�}��H������T����&�AA*Tj�\n��Fw����$l�̵� �@7��]�A\Z��P)/gLHcD\"��9f�+�-3,����K����d݌�7C��X��؏�U\\F�~�-%�?�^Յ�H�K����x�Ta<`�01E��#�5`*{�a�S�(^�D�h!P��2B�Zn;vR�&Ի~�r=�m��m��!c���Ҷ�mL���� Z[	i�ڌ��0�V�Rc�j�J�S�1b\n5L�ƈ)�XaR��\\�X>3 �W����(롍����hce��f��2�X�ln��Pe�G��-W���~@Q6c�(�(�n�-�%݌A�.cD��(g��u�	��@;����1B�#d0��=F�x=�p=�bߢP��@)c�4c*�sdl���\0:?#�����g����$�ж����:�Sƫ��l퓨�֮�B=F�P�!4`��1���b����\ZAu�M���\"�w�����}N�_So����cd�yL5.m��=:���#z�ǈ�0U��������\\�\\ь@�hF����,[�\Z�y��6��Z��2��b��	���fM\n�̚1���hfe4���[�ڟ1�F�������#p{B�h��\\ywtn�[��a\"�,KW�V[=�\r�[��/�����dthfrh2:4������c��3c���15���9�`T9�Q�,#P�,#����\r3MzF��7#���p��p�&#���8ڸ�Ǆ#�n+��\"�n+����#��!y�9u[�S�9u[R� ���E��QJ�ۨ6z�!�3w*�(���8#`S��M�\rќ�)F���4av��Wo\"��G��4����\0=�4Ȍ�����3o�ƭ�ӈ7O3�mo���dF@[2c�-�1Ж�1Ȗ�hKf�3�ƌzLU8F�I�F�zLU8+;�H��\'�b����������^=��K5�Y�W\\A]�i\n��:����G^�u�H����\'������־���L_������+����ǂv����_\'*h�5����n����/�$N_x��ɫwߠ�/J7~z��%9��&Q��+u~us�;]�O�aiH������/z\"j�|���wdB��ҎT���zu�-���4���^t3��/s�h���$�L��Q�b5a�/wCڙ\Z����8n!��1^&��9��ō&�L�H6��zRԐs�j4C&>�^[ɪ����Gq%���k��n}��Q1�\'��K��V�)^��Y)�����1�!DlmiY)�\rCM�d�$o��h�j�Ug@ò�u�T%��!���;��U��*ylK=�sCfՙ��/�bP�m���sI���\'���#��ֹ�bz�}��ܷ��9+\'�_J��+�/>m��S�M�nGE=#�Z�����wƠ6Fj/��ع��諊�PP.u&��°�W�q����GP� \Z��#{����$\n�&�h�gR�\"���w{B2�\\q��������l7	��Ħ{����\Z9& ����m��~Nk�\n4��9-��ƙL�e���\"n\"�ז6ͭc��zZ��,QCSB� K��][�ͱ8���Va��a;��Z�Q�l�O����Uk����nMZZĶY�U&OK򱗣�\"��[Jar�����G���7�M�5�7`2@F�f{+�+uO�{+ϭ��\n3�Jso~��ɇ9��*�z��\n�Y$��P~1��a/r�e��(��\n$[&M�)��C�M&Z�\0N2����M�:)f{���j �t9�\\���Oo<��Tk#��+6l��D��ր����n�7֩=�{Ȼr������W�]��&jɓ�+~�|��s�^Q��^���J�?�__Tl3�gu�d���T�b����R/{��4�����/7,���ڏ��;\\{\"x^�~<\"_P�4��>�˴�_����C��5-�\r�T?%�`7���,\n���w�b\Z�|M��M��`���J3�ÿ����^��F3�^��/��X�>�*G?T��.$�B\"�+,]��b ^]����$�p`���J-k]y�ٽ�b��z��XF��=��V�ᒅ�6�,\"y�J��Y��~����� ��7�i!T�*ʤ}T�>�𚊉,bc\"���Y��@�	i�<ݕo�Ar�$��B��Zo�$櫓Wͺ_�U.]�sd$��!K#\r�%���}��Č]p�z$�&�	�Li]z�yC��7&�[������(�ux/Fa��hqI�ˬ\'\'��,���>��g7��ŽcX%x�4Ms�\'U����� ���м�<��4D��o�e%4@ri���E���C��L��Q&�-w~\0}rO9u�8>OD\n��B�:\'������lAC}���8�S\0�\\�\"^뒅-}��|5uҖ����6�S�x���\ZOk��<��!z���x	l@d�?k��$\"�	�p�3�}CϦ�\"���͑���Y�B��Ǻ��w\n��N�*B�S���\r�ĥg�/a�)�Kr�f�l����>�VV�jͶ��lO����m�ؗ��j\r����ZJ~�Z�;�_3�|:֞�ZK=(���Vda��� ?������\\�RF�ye�7I�I�p�Q�� }�� �\ZɶK\"�}����q�ŵT������UCy ��c��_Նn��>�{�7�,���ߎY��3$��[s�\"_{C��3-��uf�Z�U�V���HL����X9�݃��ɯ��g&��IN�4}O��P�����ۦ���9��vQ��شu�H��)�\0�� ��p)�\nP8e��F&�Kv��*�\r�x����>\\�m�v(qyvTW�>���XV�F�V�(���ʦ�|���\'d��T}U����:�$U�Z�J�b�%�7�ʽEu1��7����S��Vm?E����o�:Z�ɮT���2۽jQD��;k>,[Xo�Bs��#�,W�|�M�+.�C�\n���\r��0ܫ���8G��ϥ���F:w��~�\r{�\r�FWL�]ٕ����\n���xH���,0���8�\'1��M�l��I��9r�ڨa���d�\0�I�_V����PY��N��Z8��DU}�:�ƾ�!=B�c����\\�M/*�?�^��96~�H�3aQ���l�����i���nx���V}��C�ONkw&8�J���]��N%���/7��BH:��M�;��63q��7��\Zc0��0\"���~�6a�`�9��VLQ\"��=�,�.Q%��s h����㌿jC#�0ל�c/F�sR����A!��ӆW��\Z�H���gݥ\0f:p���� wCP�J��B��7{���zu�Eg���������74��Es�cr�p~Z2�v�*�X�V�����\'�q�_<γ%�G�@ؼ�5�b���i\r�Q�WK��\r�[,@䫋a�Iq�,;&>�S%�8�u�2�	4�\' �\'���t�˜�R�@���$1�4%2A&Ν��r#�ݤ\\����N��=����	eS��\n���k��*��P��Sޭs�InH�ԇ-�O���ϭ�lܩ\Z�]�4��\Zv\Zޓ����*Ѯ���!u���fp;�Íh&�p��hf֙ٲC�̍FϠխ��ٕt��ab�\r���}�����5��H#N�\nl�甖q/P��iՒf�\rl�N��\'B�~��T���ہz�d�C�Re�弞N��;\'v�I>�T�]Z`�\n���K`�k9T㳛���鴠��9��SZ�����h��z�P���\"����Nz�`�ׂ�/��\'�{�:i�3Ԑ���9��2��4�o\0q���g>��0v�)1����{��E�%_�?\0��Mgd1jI+�|�����>4���IϛJ�֒߀��Z�،�0����߁i�m�K�2�_�N���/P�w�6��Nw}��\0���붎l����w2/RPH+����䖙����Aa��\'�ES�i�O7��i�{���0!�ڇu��4հ�4�w�H�����\'�4,$*`��o�Ch%A�lt-3�Dm*c�^�����`� !�\0�i�b�������yK@/\'з��ih�<��=Dˠ�3Yt��Ӧ1��tCZFYs:{��#�繨�L�Z�X\'�L�w�A���a�11�5^:�-�e}:k�j��c�C�Ѥ���A{\rgE&r�ԉd��z�O7���f�\\������i���l �#B��@t��.N�g�\0�C5��Va_�;\'�R�}���O~-L��lu��R�u�ǣ��=w!\n��_���N]�	�,:��y�Y��f^z��Zv�N��k���;͇�v[Cl!}\Z%ڑ+MԨ>e\r��`sT\'թp7Ϡ:�>^�⎐���m���9C��e%�7@6~�����\0΋���q����>%�wI�����M2��\"�$%G��](�:d�O�{I�sXr(�����@b�5ά����qw�S�c��pL�+�Zn��e��Vo��Ԗ�!�T��3�����Q�)?/�����:��Ӱ�{�fm�����>9T�[���&�Q��� ��no�ޱB��Z�|�\Z�������^��)���-p�47��$k�3�E�}���c���u���̯DM�rFH�81�)��m��^��7e������I�GR�C\nӭ�Vs���?����)ݜ08�F���i.) �\"_ww+t�\r����(�5^�������w�yom�kv�7��T�C/T��uQ��!>���*Մ>Z�}l�����q��]Cpd�>ek�}\"��OQ��bt��|tY}�K 憶kϟ��Q�G	�Y}!�o�*Ĭ#�[�!a�\0Б���Υ �{��\n��[I�8�߂G>{����Ԭ�!�����O�U/���?o�n���Ph��yP�Υ����ڷ2%��t��<������l8����9i>�nv��Q��Չ��3c�Vn){qjb�9�\'��A���8[�����[8�\n�KnI�O�Q�oA`D��PE������Q�_�n�{B��U<����w�@�V�GZ_|�>_��U��]˺Y%π�{}u����|�&�W��VwY����G�e\n�2{4�7S{�W+��-t����N����͡��[���T�`�&������o�zW�F�#�F�J��\\_�aW�R:���\Z��qh����ɡ{��Y�&��TC0�w`^u�o.���g^�d[y���Eh��n�����!v�V��$��	��ͪ��;v���y������8(|�o~p��l�q�nIb���7��묓ηuq:�x�W��ۿ�^��݋�[��e����z��X���\\n\n�\r�[P�=�\0V6��p��bG�\'��y����M�/������W�-�M�\Z5t�͒\"U��)����ј���q݃��B�?_��\\��\n�fl���g�-�A�RF��V�桿�B/��.�������Ƌk�\r��.w�z�ς݅�o}7x��K[��d�\ZF����������Z3�����0.�*�A��~���(��l��?��~��5Q�1�]�;D�W�n���2�`�Y[Ⳑ�2�c�Hq\0�|c��v8�6]�<��C���}��� ���j�^�E(���sϡ�J���۩-:�r���h�\0�W�0=��m�S����a���>c��.Ĭq��;)��KIuŖ�j���{k���6|�;�*��m�8��#>f؛%��������5�����d9���U/�����ֻ���r�Up�j{Q)h仔0�\'+Y�y��-&:��v��HT�w��%�Z�Ĺ3����͜�vy<R���u�������	��h(o��%��A��w���1�9�=�����G��} {�����$�.a����2q_�u��p_\\�c9�2��	�6F��y���\\�U{��8� ��=����X�ޝ�r	��� ���n�o�\0�|�\":r2?nT�}����c�3��6�Ғ�f��w�������˸%�_���E�*�eG�#�V0(�񨑛;��/T6A���{�����)S���\rV�C����w<�+nIq v��}�]���z/�L>��}u��{����=zj�=`���̣�w�ሐ�D����ۛ)��C��\" C�.���GJ�?����S���LgƷw���մΕ���A��-q�2�������p��16j�{�� ����<�̿I�����m����M*�]H��{m�b��ӱ#��2�DT��fd>�ZgZ=��+��M^��oyt�t[��X�C�uL�J,�G�1w�Y��̱/a.�5:��6�В|<	��=����R�z��#v|��wlo������C5|�7ï�;G����y���rdT�#��&��;�����ű{{�P��B�u���֧���ȕ���^�1�6�,�ל���p����ٵɔ`(G���(}I��|�1��Xٳ�<�]��yf�Q9���`i����K��	�0&r�rF�/P�]\Zg�*\"]F�\rh��3�?R���17]�?��+$�/�[�Ϸ�7떇6�\reeOjJu:�����>0�y�%f#�\'��v��;�&��_\"_P�;�%v���F�j���~�j{~P�	����\Z����i�Il�|L����|�lZ?�#կM��ˣG�59u�X=�6�azX��ա�Z���ۢ�0��+�$�ȫ\0L��� ����Sm�4|��s���G���=��@\\�FL���������C����y�,\Z\'���20����oL>�-�g��\'����.\\|��4��><���C����-��>D�+�	���	��zD83t�ϵ�����5Mt�i~d��w�:�Z9��ԋc�^t��?�f��F2��ͦ�e�ӓsl������#(1�rk�����Ջ����ȡM�u�9�\'��Ub�|m0���!\rO�rGo�s��G݌�n��g����O(bH{�ۂV�۵�%�zg�H��V�$�\"�X��wE�.���K�\0�|5z䖛7vR���\Z͗�+3UϷ�i/K�&$1�� �D�G7����:`G�$C�\'�Q�v&W�!��Ss�Q����T���棃tȒU|՚���Rl��Ǻ�bRl�8_���n`��$Ǻ�job�no�tg�k����!E*ڟX)���L��:��f�+B-��ر�ׂ�!�xB��˅���Z� ��!^�8��Ҝ=;q���n���<����������D���\'B�hu6��&r@-5�:bBπ����@�=WP��qv��M����?�b-)Ċlt�����T��I�!�L�G]T���p:Z,<����=A�l����=~N��?���)b��Y���kAb��[2a�S���ԝ�Z/�.�IR�F٦;�-1a�ݮ�J�|�^�<e	��`�c��uxLyV�jr�ۥF��o�K7��M�{�꭮��q�6?���䦍\'�Ƕv�X�T�:ކ2�v��@�ߡ�s0Y����X���E������>;��E��9ᚬ�U?z�\Z�-j����k�Ա�uɧ�Q�Y��\\�)�Fmǵ�H��ؠOMD�-��*�/љJ��4쳬7�n9�\r���/��\"�*��y�2�tY�\r��Mҭ%�q*�\"���KD?�y��^�R�_���Ժa;��?y���y��6�xn���|��AOhZW���j�Bԓj\"�����%q��2��9�yI<�����\"���vp����>�h����q�d#I�y��Lc�L�cbN:�oh̩61&&����n\0?2��c�/�K$���<��d���qX�h����qpJwL�j���5C�I1/ۢ\0�(�h�D4�����ni��c�b��ۏ?t:������5D�ǁ7u�sd�d CD�	�\Z�@%��s���\n����r�`��.���M�k��gk�kx����w�l���-G�����l���x����rW�Lo�7rdn�7|zۯR�W�q�P��7��3����l���خ7�q��j��G��9LA�1$󸈌@�z�Q�x���LN�;�9GIw�x_	�t��5p�Q�b�d��}N)+�����>���a.��v�U�կz��}8Z;�i\\�/G�8n?*]c;m8jmnf��L�k���\\$>�-�c�~�x�u��b��An3�k[R�Z��x��>RE9��aF5�V�)��J�E�C�_]�o_���l;��ꢀ�N�w|lb�剫p�WK�>����eɁ��؆����*H��{-qp{6ڮ���u6�A�F�4b�(�zj�9\'�M��we���?�)h��h@ߵ};3�rB�>RwdrtM$�gW��J�Zfo��w��@��?�d�m�����\'�����\n����>܎j_��in�O���N���j.�볽��F@�@+�;d���5�#fx���0���Ω���R#��x��/��;ID��c.���Y9sg{�Q��j��m�Nخ���vf������Ԥ�/�b�52��$�(�|��R��Q��c���޴ԧT*?��<���. ��rx�b��Ѻ�f�-9Xԛ�o����$S�@�ȡ��k&甚�͛N~02D��thj�̎)l���qH\'Q̱lQ�G}^�r��=����d����m�^x�#6䰲��v��tz-O���sx�a�Χ���4]&�cT4��Fv�-�ZhdW��-�rg�	�����<�em�=�Ŀĝ��d�.1�A��;�X�����Ҵ9E��\\\Z1�,��K#\r�_.�vN�	�t$({JF-e��Rh,\\|�����i=����@����&0l8����H�Ҳ%�vӜ��9qiGo�JKn{��~$�K��4݁A�M�IE�6��w�~�p�PjJ4��_�v�]!!��!dE�7��\"�6�A_���9�J��i1����C�����ͤ`y�;\0n�ԗ�3k�!@�ߥ��p:\\z��K/{x�e�4�����ڄ�WK��fJ�{���9��X&4��z�p�{����p�M��n2w�\')��UHfd0b�#a8b�,�p�\"^�OR<��S�~;�H�����FY�uRF���5U.O�n#����m���D}�k$Bf�s3޵�P�qUV��.���bp�h�Ł��f�ď�N\Zu/�U\Zh�&$tg���VбD�ln��u3@Hσ]$`;X.�77O�VuS�+�{������������q3�U�#��e�,�[�]du��$Р~�E���ŷD>�[���*l��e��֕���G�0��bh�*X���	�G��,	\\�b.�,��<�E��r�q��|�)�\\\\�Ћ�\\i�\\>�<�*\\�8�G�&���,��@%�6El�F�qy$�|)\"�S���h�fs�X˃E��,�ˣE��0i��+T�te0����p@�>�3���ȓ�G�MA���@8d8����h�2-�į\\�a1�p��3���βs�$�z9up�,��,\"U�L.����H�<��,\"\'�>��\"\"a�hVh�UT�m���>/��/��D.����<Z+\\����<ZC\\����<X[�|U~���Ʊޮ�Akq��X3�l��^���7�S��u�Ȟ��\r�N;�\Zʘ��Ә�`�2L�ɟᐜz�\Z��j���H�q����[\Za�F	��#��|�>�\\�h��\rmL@hd0�@���>��E��@�\Z� 9g�H���p$��*G���\".��Q��y\0�g��l1����z8?�?�Z54��Ѭ,�6�fk�l�\"��\"�/f��hv�����@fd8�\rd��J��X�B*!�*�+�dI._TBW�._UBW�._UB_Ȥ\\����<�U&�	���h�G�b8�~��n2t�N0�����30m���LXE��.�/p��f�ۙ˃�f��(j����=�I�#m�|垾<��\\�pOWq���x��X�<�[f���G��4����n��yT�����=�Y�ŗ�XN)W._�ٔ�Z6��s�O\r�I��r,���dc��gۢz�t֠��T�L.�V�*zj��h��T^/2�\\̺���\\�o~,��$�*�V�b�.�׫�������f�>2�uB�J��K�+�5��?�yN��|���MAT��v�4��xU�]q�+r��\Z��@���R��,�\\	���%�#�?��c�,�\\	�OnAm�#˄�a1��d��=��O�X�Gvd._���<�/�|�*��vX�b�g��f7�e���,����<��nc��mlZe8 n��\\�3��h�����M1��)�66��������p4\\�=B݉�ps�\\�<�N�Z�����8�\n�`�*f���&�03��|��\'84f\rX6�ג�(��MD�Ћ�[�M��\n��[��ª<��Y�M˞�Y�GKkQt�}���9+�Ea�巨Vf��e8+�郖��`�h�pVt���ˣ�����`m��_%��1�q-r�0��h���՗�V�(��Ea�W������֮˃ŕ�/\n��my�H�|Q�}y$3�|Q�}��&,�/\n����|م��G��\\�(̡��0s��0��.!s:���p��3��>���4��j����p��2%�e��Z�#�릙ٸ��sl7-`ۂ����/k}�5k%k���m.1�3�Z�-<�&�K��a��K�}�_���m��e�k�n�v���Į��g�u�n�w�	�Ë����o��{�~��������]��nn����t�\\�y��o2<��P}���s.Ф3\\|��~5j��gbX;c����n�Nݵ�vf&7�d�K$f�ę���avN��s�˰�rf�(xr�$\0s���|�vN$^@�\0��@��\'(L��FN*Ǆ+ŔY�٘$���cR}���ϲ}�ు�� �LO������˙=#9��\0�xƵ3���-��|�\0���r\0��i���U�Ǳ�N�S\Z�;o�\0x�����&�uP�P���VD��H\'h?G(�ao��	&�H�П��)D���,1��v�X�A���o��\Z����Cy6���6�uvw�-��(���#�-�1��\0\"ch�0y�k��x�\Z�!��x�������O|�En�PYo����D���O?�3k�Hf唫���U�H&��;�[�`��he�\r�8U�fsX�Ϛ\\U���YRgD͝|7�ӗ\n9I{�ǔ>{S��ʧY8�\Z�~�����ͷ����(���2��\ZQ�� rS�4��.\ZxF�4�f+D�6j�q�\Z�8\nbGA���.\r��TE4Me���7*�����oTD����dk6�x+tj1d ���*>�����Z�Z*T��#��\Z\r�\"�o(��5�	��AߐF�#���X#b��Q&d�0�Z� ��]�\r�8�^kur{D�Ö&�,�9�kD%րX@��o�l�Q��=�k�	i��!���K�m��ng�U;+Cד�wK�&�N\n���#���E<�8�X/F�\rA�H�f���p�`�`�|ʹX��I�ÀޓA��֧Ͼ�s�����\'ҟ��,UY\nendstream\nendobj\n12 0 obj\n<</Type/ExtGState/OPM 1>>\nendobj\n13 0 obj\n<</BaseFont/ETAASF+Helvetica-Bold/FontDescriptor 14 0 R/Type/Font/FirstChar 32/LastChar 233/Widths[278 0 0 0 0 0 722 238 0 0 0 584 0 333 278 0 0 556 556 0 556 0 0 0 556 0 0 0 0 0 0 0 0 722 722 722 722 667 611 778 722 278 556 0 611 833 722 778 667 778 722 667 611 722 667 944 667 667 611 0 0 0 0 0 0 556 611 556 611 556 0 611 611 278 278 556 278 889 611 611 611 611 389 556 333 611 556 0 556 556 500 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 556 556 556]/Encoding/WinAnsiEncoding/Subtype/Type1>>\nendobj\n14 0 obj\n<</Type/FontDescriptor/FontName/ETAASF+Helvetica-Bold/FontBBox[0 -220 932 757]/Flags 4/Ascent 757/CapHeight 757/Descent -220/ItalicAngle 0/StemV 139/MissingWidth 278/CharSet(/A/B/C/D/E/F/G/H/I/J/L/M/N/O/P/Q/R/S/T/U/V/W/X/Y/Z/a/ampersand/b/c/ccedilla/d/e/eacute/egrave/eight/four/g/h/hyphen/i/j/k/l/m/n/o/one/p/period/plus/q/quotesingle/r/s/space/t/two/u/v/x/y/z)/FontFile3 15 0 R>>\nendobj\n16 0 obj\n<</BaseFont/MMVHJH+Helvetica/FontDescriptor 17 0 R/Type/Font/FirstChar 32/LastChar 233/Widths[278 0 0 0 0 0 0 0 0 0 0 0 278 0 278 278 556 556 556 556 556 556 556 556 556 556 278 0 0 0 0 0 0 667 0 722 722 667 611 778 0 278 0 0 556 833 722 778 667 778 722 667 611 722 667 0 667 0 0 0 0 0 0 0 0 556 0 500 556 556 0 556 556 222 0 0 222 833 556 556 556 556 333 500 278 556 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 556 0 0 0 0 0 0 0 0 556]/Encoding/WinAnsiEncoding/Subtype/Type1>>\nendobj\n17 0 obj\n<</Type/FontDescriptor/FontName/MMVHJH+Helvetica/FontBBox[-8 -218 762 741]/Flags 4/Ascent 741/CapHeight 741/Descent -218/ItalicAngle 0/StemV 114/MissingWidth 278/CharSet(/A/C/D/E/F/G/I/L/M/N/O/P/Q/R/S/T/U/V/X/a/agrave/c/colon/comma/d/e/eacute/eight/five/four/g/h/i/l/m/n/nine/o/one/p/period/q/r/s/seven/six/slash/space/t/three/two/u/zero)/FontFile3 18 0 R>>\nendobj\n19 0 obj\n<</Subtype/Image/ColorSpace/DeviceRGB/Width 72/Height 72/BitsPerComponent 8/Filter/DCTDecode/Length 1227>>stream\n����\0Adobe\0d\0\0\0\0��\0C\0\n\r	\r\r$, !\Z$4.763.22:ASF:=N>22HbINVX]^]8EfmeZlS[]Y��\0C**Y;2;YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY��\0\0H\0H\"\0��\0\0\0\0\0\0\0\0\0\0\0	\n��\0�\0\0\0}\0!1AQa\"q2���#B��R��$3br�	\n\Z%&\'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������\0\0\0\0\0\0\0\0	\n��\0�\0\0w\0!1AQaq\"2�B����	#3R�br�\n$4�%�\Z&\'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������\0\0\0?\0䨢��<ढ���RRQE%\0RQHd����H�I��pH���{\r_C\'N�a��I#Rxq���9[p�y�8�*��N�k�i�3��w��Vd�H4?�+�K�\n[�8\n��7���c\"�+b�� ��5kx����I��{�8ȡ�HƧ�K E��I�s]e�c�x\\j:E�Q�1�K/��?J�e���\0��\0��\0�:�����T�S���m�vggl���*�I[1jsi:�p��!��/������Y��N�55��w��:0UN\\0¨Q�s�KC��&���k�v\r��C�������\0ZMN����\ny-��I���Wk������-�Y��/4㖂�i��� c�\"��;���>��:0�=��G+/�d�,KnM)�RW��_׿Ҷog�x+�n�Cs��>�~��U˛�vЬ�|�dQF�B�䞤�4�f���3�����}�r\"1���o�q�G�4qa|/mɒ������y#?���k۔�t)F����\0vs�Mi��\"��f���=����\0���ޕ��MZ�â�*X�W�\'\'�QT@�(��RQIH�(�0����\n(���)(���(��C�(����C\n(�����\nendstream\nendobj\n8 0 obj\n<</R9 12 0 R>>\nendobj\n9 0 obj\n<</R14 19 0 R>>\nendobj\n10 0 obj\n<</R10 13 0 R/R12 16 0 R>>\nendobj\n15 0 obj\n<</Filter/FlateDecode/Subtype/Type1C/Length 3991>>stream\nx��WyTS���� �P5��( �:1�OE������(�`�E�ρc[�Nu���SPT�bQA� �j�렵Zm��;���xھ?k��99�9�����`,��Ba�����韞�T�\Z!�SH�ͤ�3~����`B�/��4J�(͉��pu��4�\Zl`�k��B�=5|ǰ�9nç�g�e&\'&e��1b�˒<��o\\Ⳓ�\\\\�\"\'>5=C��=#Y�dE���ش,��.2���:��w<�0���6�?}�����3uYA��+����.���r����g\'�I��2oYXj�>������9���u(�bf2��`f��af3�י9�+3���c�1a�θ3���,`�0��B&��b\"�@�\rFǌ`�d����Tff�1c���X&��ff0>��icT�\rƆig�5#2\nƉ�$f\"�c�Lb�ɜS�T��8afio���]s?�d���,�,NZ<a��8�����[�q�;��r��`/�]��>�}>���\\k�b5�*ª]i��R�*K����C��kTA�HU�ꦍ�M�M��/6�^[m;�vSu\'���`�A!m���ʂ����,�q��=��Y���s��PŪ$ ���v-����W}�E����c\'��l���t4e��ѝ?yP����p��8�����~���]oIat��ϡ3�E{Xˢ��L�W\Z�Y��@[�����d��l��[�;�E0m`H_��;p���4���,�L��g�}�j�ӥ5W�ɹ��%1���L ���mE��:*������͡�q��W-�\Z��_�A�8X�XE9�g+���鴈��ȠuO�?���aڰ�p�v�b�9�@׈�I�w<��qS��o\n��\\�bޖ�Yϡ�D7���q�3ҽbp��J�;i+�+��/��!��/��ʨ�w˫-�K�]q\r�v�\n1�0n�]�5�s\"<�#B�\rcn��\r5y�k��l�ݶD�~a��B�����S�[���B�Kt���~.�N�:��Fp�T�ss���s�Ć�D\"Ӓg\n`�.ި�\rq[��,j�����V.����V!}٭���V����X�:�F��)��ɨ��N�͋��N����\\/9�|���c6��ͺC&����Ƨ\"�Y?ئ�8G�����|*��I\ZF}\Zǧ\\Zp$����U�;�hb�Bm�����F\Z���T@���Bw �ҩ�Ȏ\'O�t\\7��U�)��P!�Dx��|%k���?�R\r}�Ҳq�����o꓾ꎗ=R͓�/��<���������42/6�_P���7�����B��-��������I����ܩ��l0�`�8C�\'���d&n~T;�N]0V��;R��h���-8��E8����\'+���ܩ���6�kp\0�Zݛ��&i�}�D������Tp\0��\\�!)�7�m;��p�Fս?�a,���g�\\��Ri���[W����Ĩ9�(՘_inG��	�jV��i�rw��h�\0�<���	�S	8�03a0�������i���`�Tp/�W����nO�ut��u^�-7�T�����X�y̯ڸ�0�	;�h�^�\Z��Z)�-�v��$5��}��K�7\"~ë%p�֣��I(Aw9��MO�[I�\r�Έ�C[� UR�?�Ӣcu3�ǯj�	��<*����ْ�՚i�\n���y���dZ�=���2���`�T��0F-����\Zf+YSN��A�c�|��rU����s�J�4��}\nO&�[TW��)����۷��_+U����\\�3a��t`��Y�v7)���IM�2\\\'�@�\r��^,�K���deBn��w\n��k���]�L��0�F�L(�8��>�,�D.:w����f���p�E������\'k�wj�l�ܺ�=:�r��p@����=\n����C,�����q��2Ž�H_�\r���n�!�1t��/��l�����?_�Eb�6��Բ���e&�	��K<\'v�\r:,R8%�ڋ\'�m/Y�A�Օ������+\'ӻ�_�����¨A+IâQ�fvnR|D~���+5���v�\'U�ls���{�8���jǿľL����G��i}��\Z��Q�`0ec��w�~������yD�i}q~{����=G��&��=�����R��Tt)�T�}�WYZO JWY�US���ho�DG�����j�@y�(\Z)Z�d�=\r��\"+���ؿ���H�́����N.�Bԡ �膯����me���k���>X~A@K�Z��t�a����2�̄�r睖E�CZw�Zk$*�^2Vi���~�A��7�t\0r��Н&ƏZ}c8�c�?^`�����Z�p+��\"�R����#��+��(��@�v���\ni%U1[�	=,%m�UM�������!�\'948D�0����U��k	���<\'wN����}�+���1�c��D؄�\"��\Z�#�����\Z������	�z��R�I��}�z�]NV�a&���0p��\Z�S�7eG-�.�וI�\'%$�둮^��A�X\rN��p�9>�5�t���;ڡ��-���j�y�?�pq`xR�I��s��>J/��&\\λG������J��E����n�\'O�j���F��/��O�g�x�ұ\'�1�-������\'���7ezЫ�U\ri�\r�Mraws�p���m���D�N��w��]F�P9�)x��T_\r�7f懭�־�!�rk����rk��p:B^9U�r�H�T\r�5\r��-�L±ԒŻY�����^j/�1�CcN[\Z�Mm\r5\"L�Z�d��R��[���;���\\������zX�~�W���՟�Hs����䲨=�D0����Hz�T�VifД���Z�K���6Y�L��\\�ނ��-]��%-\\���0�\\z.} ���]��㔡�8��0pK�>{�Ine:��4sn��ٵ��i�Ķ\r�\0f��G�N�\'gj*�/�Z��/a��(!� �Bә�[�&o�Plt�鮥���z�=�R�������\Z\rZ�G7�n<D���+��v���lJ���+w�(=!����ˍO��Xr7ˇG�]Q\ZLgC9M�|�e����0bXř�V�~�mpL>x��_��ű���k��H�\0\nx�[4�ltcd����w�����ٺ�O�A*x��=!���d�{uy�\0��wGO�X鴼�BzoQ�n��r	���x\'�����/����V���#1\Z4�v�UT��,��/�]A&(2kn�fyCؑ�DP��N�ފ�+���z�t�9�b�(Y��(֙ĝ5�R����a�|���љ�\Z���(��^c�o���++s�(ԉ!hE������\"tǤM�n��j���9�e�`[�ӽ�`+P%Y�KK\'z���mC��U�TC\ZdE����3�ߊ��h�1c\r۷�g N���^�������r0\\�њ}x]=q�{�ĥZ}���l\\����=��~\nh��\"�~p�C�X(���Fw��Ӂ;+�*Z�VOW��������]MM�H�_�i��X ����:.��Wx�Ǡ�^��%�y�)>�~%k�6�����*>��%��Cy#y$������ƎF�u�`S������u�Z*c�L���h�A�oB�Zt���0\0\\�,J��R0��{�QǢ%T⛴,����D� ��h��%�z3��+�Wi�N�`M�i7<�<%��[wl?rxo\r����6�EG?4וƴ&k�]���a�����n0��8���{J�~DS�Bl����4tzLUӅڪ+ZuW!���Q���Ŝ�~��^J��v���lp�}՝R��G\\Ó�iٱ���/�֒υ�W\\��2<����Mi�ηY���gF\\��3:�4w��|Gsz.c8����N<^�i3���?�D�%���y�.��>\\�_���bD�-�D8Z�����VBB��%Y�Q��@c�d�ѠW�\"��ՀȪ���JL0Ds`i	Z+�ܦT�v�Қa����g\nendstream\nendobj\n18 0 obj\n<</Filter/FlateDecode/Subtype/Type1C/Length 3620>>stream\nx��WkTS׶�1d�-*q��fS�A �HQ��%E%�� Vm)�V����U�\Z� �z| �(�� �\0�F�ժ�̝�¸g�s<����##ُ�5���7�one2��D�������I�3�`#�\rƋKp�~��H2�\n�z�\\��Q�L��L�ƍ�d#��pX;�2�����=����9�9E�i���nr����\"�?�����e�e�ړ�����EjV~D�b�<ۘ��<�0��ԴU�I��q�����\"P5�/���99�+r��W�$�%��D�FF��M�Έ�������U>���c����^3�(ʎ����(j\"5�������#j�@�Rq�#5�r��)*�r�)95�\n�ܨʝ\n�<���\'NM�\"(sj8�B��FR���\ZEq�5�Qc(kj,eC}Oy�BP&�j\ru�ҋEu��\Z1�`ȅ!m�9��b��������E�,�(yNO���ۘ$�kʮdw?�{�gC��`ji*7�3=ezk��a����11;b>�|���r�0��p�B�P%ȕ\"!��\'8[��;�\n	6���~��7�\r�%��ki0�.��p)��G�J��6�N��1Zz�U8�uB\r#m������k��d��;[Fz�^&��D�E��nf �>���L9(�`1��p5��j	�а�m0�\09N�FX�%��$r~�0�MT���\Z1*9��n��q@��=�`�N}�\'�}�7}�1���%�\r� ml���e�j�O-����e���\n{�I����Ȑ9i6Eجjb���sz�W/C,�D��g��RD�g�D,��X�H\r0`�԰&�,w�b�<�����0G%8�,oa��-���N8J_���kA,��x��T�y^��E�H	g�1�>\Zքq�ܞ�G�a3�n��0�7������]��G\'�Ӊ{��\ra B6��Z�o�	wa�:���\'��&:��kb��9�_���4D�$;�M�<�t����hc5�O2�^���4~���l���k�O`w~��7�T\r[հN-����	tq�j��N��\r[��Rm�M[�s�ʍJˇ���;� �=9Xw��уG����v1R��u%��mb��g�Ҩ^�B\0��������5�b�6��W�G��H��Ԉ�P��+}t��]Y|��U�#�j��ueh�u�����=\\ [��}�Xwz6o��I}�t6�V%^�p��>�׬èʺ�≖�Y��,�����\Z��E����Í^�[Hc+\'gl�|�v�l�,\rҲ�;���ۣ���^z%8`�.��М��π,Ax4��a<�C�o��g?��%M�����QW�v�����x��[:�2����-���2��E�\ZĦ��?g�\r�HX��l�m�����\n��C�q=c��t��L`����e�;m��X�Cv6Cbv�b��+8�~�zpAy��F{	oN�q_n�\ZmDl�g���p���c�\'bUJ�,/�X�i>�I����qb�^Ȏ�W1(�`mH	6][����+3� v��ȿ߿^v�I�=�h�\rt\0��R����ġ�5���K?[���ԓ�*+�{��=��U�56\ZR������B��Ɔ3�$��\nx�}}��Ӆ����&\\��c��Z[���Ϟ��]�4zݴ%I��u��F����[/-������ \ZO���b!�\n���[�������L�p	���Аl\0�P��|���3��t\\N�_�� I�s�\"<>�\"����X�e>�1��I����%6��~���<�v�n�~,Y�ݠ�\r#������\rݒw�b	�-��&v�z�uemu�s�k�Hd{g,�~�Ok`���!������`��g_*<��D�5vK����^\'b��B�����Nا��\"�b;�W�\"�\0;CZ��X}��A-Hc�s̃3^.�2���0���yB>�8J0�!?���ըa�Z��z��D��rPD7�����^:�=`a��6<Q�o�]�1����\\_����mP�Za�@�k��M,�I��2Iw���[O���Zp1��N���5�ڊ��l���\\R��*sIѧ(e��?�z_�wO���N��(�T���35�컏`8+�2xu8���G㑱���yF��lPi�\'P����s�çgtXk(�v�e8\r�p^M�s��GM�l��s��$��-�y�X�bC\"�Ʈ�A%׷� ��ٱ��~l�Yk�cq+aE�����ъ+���U�ʋv�e�%w�5|�8��28�p\njհM-��{<�`�Q�<�/\rE��Mܫ�I�^��覾R0[]�����u��˙������	l�U�5t����H���h	둘� ��\\���w��;����!8��L7ꠥ]z��4�N��@�Z%j�	\"�-����ˠ����T.��sʎT����q��y��C�B]ޅe(�\Z�$g��*XT��Q�����S���|�h��ཉǓ�;�A�4�eme]��ftic�;ßԍq/_Q�n����~�y��fـ����#���\r%j�C/��oC,�8A�eJQ�N0%i��\r;�I��xhl��#鲴�5U��v��������0��˄��\0�&n��d��~������Y�v2�9�x��/�%Ѱ��b*���c�����s�R3�O��=�\Z,�����;�)!�Sa<�w�! � j�,�fR9��<\0%�Lc(�[��-7�v��&lbS�ֳ���`���b�!����}}�����`F地��6m��$$t�R�A�K\Zh(�K�H�]�B�V�x.Ef-[�(<�nhǖ0դ/ׁl�/	�˖�GU#v�Io�d�-r���+�A\\mo�`?�`O��[8Ön}�\\&�\n��qk�0��\"�PCd�K+�j8�Pz�SU���n�����G�gMy\rI�IU�BSPpfJDn�������+ۏ�)+������~;�7f�°4�u>v��$�˭�Lz�:�Y\n�6Pk얕��v�U�%}���n��\\�����\'�J��e�WT���������j��=��Ү��N��0,f<�6x��L�􍬛�|q[�����K�\r�U�.��/R�|��g~^:�Jp|&�v@;�pا|�=���{b���0p��siȅ{�.\Z�jD�7$��0��3XI~�/ԝ���M�vF�;�$T�����ݕ}h���3�I�^�G�uy���\'�W,�+`���\0wTM*����	��\0��Sh&\nX��Ib`���̪	;}7��\Z`��\nx3E���r��������.���]Kf�\\����n��3��[~�}G��\r��od+������4���\n�qx���������w�1�,���Z(%_d�\'�5C�G���\Z��ģ���H��XR��h�L�fFJ�܏�b��)����+Ur�W�LڇY��=��� �o��KZ�\\z�K��z���1�=��ɧF6vt4����G��n��ν_On?f����֪��/=TjpĄ��&�Ki?i|k�q��x��F=�+o�_��b��Q8ZR����Q�rN}7��=2��3��W�Ԭ������5@8d��B���1/��/����\"�L8��peX�2�\Z����Y�N3s��\'Ʃ�\nendstream\nendobj\nxref\n0 20\n0000000000 65535 f \n0000000015 00000 n \n0000000389 00000 n \n0000004369 00000 n \n0000004496 00000 n \n0000006432 00000 n \n0000006545 00000 n \n0000004559 00000 n \n0000022206 00000 n \n0000022236 00000 n \n0000022267 00000 n \n0000006719 00000 n \n0000018678 00000 n \n0000018720 00000 n \n0000019405 00000 n \n0000022310 00000 n \n0000019803 00000 n \n0000020465 00000 n \n0000026385 00000 n \n0000020839 00000 n \ntrailer\n<</Size 20/Root 3 0 R/Info 1 0 R/ID [<c6054b2d29ba099a30d4ccc9bd4173e6><20862b85281ab5dd7e6bddb73a0f2ac9>]>>\nstartxref\n30089\n%%EOF\n');
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
INSERT INTO `ost_form` VALUES (1,'U',1,'Informations de contact',NULL,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,'T',1,'Détails du ticket','Veuillez décrire votre problème','Ce formulaire sera joint à chaque ticket, quelle que soit sa source. Vous pouvez ajouter de nouveaux champs à ce formulaire, ils seront disponibles pour tous les tickets et seront intégrés dans les options de recherche avancée et de filtrage.','2015-12-01 09:25:03','2015-12-01 09:25:03'),(3,'C',1,'Informations sur la société','Détails disponibles dans les modèles d\'e-mail',NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(4,'O',1,'Information sur la Société','Détails sur la société de l\'utilisateur',NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(5,'L1',1,'Propriétés du statut des tickets','Propriétés qui peuvent être définies sur le statut d\'un billet.',NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03');
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
INSERT INTO `ost_form_entry_values` VALUES (1,28,'420 Desoto Street\nAlexandria, LA 71301',NULL),(1,29,'3182903674',NULL),(1,30,'http://osticket.com',NULL),(1,31,'Non seulement nous développons le logiciel, nous l\'utilisons également pour gérer le support d\'osTicket. Laissez nous vous aider à rapidement mettre en place et tirer parti au maximum des fonctionnalités d\'osTicket. Contactez nous pour un accompagnement professionnel ou visitez notre site web pour accéder à la documentation et à l\'entraide communautaire.',NULL),(2,23,'Support Groupe Nox',NULL),(2,24,'http://localhost/Symfony/web/app.php/accueil',NULL),(2,25,NULL,NULL),(2,26,NULL,NULL),(3,3,NULL,NULL),(3,4,NULL,NULL),(4,20,'osTicket a été installé!',NULL),(4,22,NULL,2),(5,3,NULL,NULL),(5,4,NULL,NULL),(6,20,'Test ticketing',NULL),(6,22,NULL,2),(7,3,'0608505976',NULL),(7,4,NULL,NULL),(8,20,'CA MARCHE PAS !',NULL),(8,22,NULL,2),(9,20,'Test',NULL),(9,22,NULL,1),(10,3,'0626810468',NULL),(10,4,NULL,NULL),(11,20,'J\'ai windows 10 T_T',NULL),(11,22,NULL,2),(12,20,'hohé test2',NULL),(12,22,NULL,1);
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
INSERT INTO `ost_form_field` VALUES (1,1,'text','Adresse email',1,0,15,'email','{\"size\":40,\"length\":64,\"validator\":\"email\"}',1,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,1,'text','Nom complet',1,0,15,'name','{\"size\":40,\"length\":64}',2,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(3,1,'phone','Téléphone',0,0,0,'phone',NULL,3,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(4,1,'memo','Notes interne',0,1,0,'notes','{\"rows\":4,\"cols\":40}',4,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(20,2,'text','Résumé du problème',1,0,15,'subject','{\"size\":40,\"length\":50}',1,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(21,2,'thread','Détail de la demande',1,0,15,'message','{\"attachments\":true,\"size\":67108864,\"mimetypes\":null,\"extensions\":\".doc, .pdf, .jpg, .jpeg, .gif, .png, .xls, .docx, .xlsx, .txt\",\"max\":\"\"}',2,'Détailler les raisons pour lesquelles vous ouvrez un billet.','2015-12-01 09:25:03','2015-12-01 09:55:50'),(22,2,'priority','Niveau de priorité',0,1,3,'priority',NULL,3,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(23,3,'text','Nom de la société',1,0,3,'name','{\"size\":40,\"length\":64}',1,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(24,3,'text','Site Internet',0,0,0,'website','{\"size\":40,\"length\":64}',2,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(25,3,'phone','Téléphone',0,0,0,'phone','{\"ext\":false}',3,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(26,3,'memo','Adresse',0,0,0,'address','{\"rows\":2,\"cols\":40,\"html\":false,\"length\":100}',4,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(27,4,'text','Nom',1,0,15,'name','{\"size\":40,\"length\":64}',1,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(28,4,'memo','Adresse',0,0,0,'address','{\"rows\":2,\"cols\":40,\"length\":100,\"html\":false}',2,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(29,4,'phone','Téléphone',0,0,0,'phone',NULL,3,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(30,4,'text','site internet',0,0,0,'website','{\"size\":40,\"length\":0}',4,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(31,4,'memo','Notes internes',0,0,0,'notes','{\"rows\":4,\"cols\":40}',5,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(32,5,'state','État ',1,0,63,'state','{\"prompt\":\"\\u00c9tat d\'un billet\"}',1,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03'),(33,5,'memo','Description',0,0,15,'description','{\"rows\":2,\"cols\":40,\"html\":false,\"length\":100}',3,NULL,'2015-12-01 09:25:03','2015-12-01 09:25:03');
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
INSERT INTO `ost_groups` VALUES (1,1,'Dresseurs de Lion',1,1,1,1,1,1,1,1,1,1,0,'Admin du système. Ces utilisateurs (au départ) ont un contrôle total de tous les départements auxquels ils ont accès.','2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,1,'Conducteurs d\'éléphant',1,1,1,1,1,1,1,1,1,1,0,'Super utilisateurs (root)','2015-12-01 09:25:03','2015-12-01 09:25:03'),(3,1,'Dompteurs de puce',1,1,1,0,1,1,1,0,0,0,0,'Membres du personnel','2015-12-01 09:25:03','2015-12-01 09:25:03');
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
INSERT INTO `ost_help_topic` VALUES (1,0,1,1,0,0,0,2,1,0,0,0,0,0,0,2,'Demande générale','','Questions sur les produits ou services','2015-12-01 09:25:03','2015-12-01 09:25:03'),(2,0,1,1,0,0,0,1,1,0,0,0,0,0,0,1,'Commentaires','','Tickets qui concernent principalement les départements de vente et facturation','2015-12-01 09:25:03','2015-12-01 09:25:03'),(10,0,1,1,0,0,0,2,1,0,0,0,0,0,0,3,'Signaler un problème','','Problèmes liés à un produit, un service ou un équipement','2015-12-01 09:25:03','2015-12-01 09:25:03'),(11,10,1,1,0,0,0,3,1,0,0,1,0,0,0,4,'Problème d\'accès','','Signaler un problème d\'accès à un élément physique ou virtuel','2015-12-01 09:25:03','2015-12-01 09:25:03');
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
INSERT INTO `ost_sequence` VALUES (1,'Tickets Généraux',1,1,1,'0','0000-00-00 00:00:00');
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
INSERT INTO `ost_sla` VALUES (1,1,1,0,48,'SLA par défaut','','2015-12-01 09:25:03','2015-12-01 09:25:03');
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
INSERT INTO `ost_syslog` VALUES (1,'Debug','osTicket installed!','Félicitations ! Installation d\'osTicket terminée !\n\nMerci d\'avoir choisi osTicket !','','::1','2015-12-01 09:25:04','2015-12-01 09:25:04'),(2,'Warning','Tentative de connexion échouée (utilisateur)','Nom d\'utilisateur: superadmin IP: 192.168.69.80 Temps: Jan 7, 2016, 2:54 pm CET Tentatives: 3','','192.168.69.80','2016-01-07 14:54:46','2016-01-07 14:54:46');
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
INSERT INTO `ost_ticket__cdata` VALUES (1,'osTicket a été installé!','2'),(2,'Test ticketing','2'),(3,'CA MARCHE PAS !','2'),(4,'Test','1'),(5,'J\'ai windows 10 T_T','2'),(6,'hohé test2','1');
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
INSERT INTO `ost_ticket_status` VALUES (1,'Ouvert','open',3,0,1,'{\"description\":\"Tickets ouverts.\"}','2015-12-01 09:25:03','0000-00-00 00:00:00'),(2,'Résolu','resolved',3,0,2,'{\"description\":\"Les tickets r\\u00e9solus sont des tickets ferm\\u00e9s qui ne peuvent \\u00eatre r\\u00e9-ouverts que par l\'utilisateur final. Cela peut \\u00eatre utile lorsqu\'une t\\u00e2che automatique est utilis\\u00e9e pour fermer des tickets r\\u00e9solus avec l\'envoi d\'une notification \\u00e0 l\'utilisateur final.\"}','2015-12-01 09:25:03','0000-00-00 00:00:00'),(3,'Fermé','closed',3,0,3,'{\"description\":\"Les billets marqu\\u00e9s comme \\u00e9tant ferm\\u00e9s ne peuvent pas \\u00eatre r\\u00e9-ouverts par l\'utilisateur final. Les billets seront cependant toujours accessibles sur les panneaux client et \\u00e9quipe.\"}','2015-12-01 09:25:03','0000-00-00 00:00:00'),(4,'Archivé','archived',3,0,4,'{\"description\":\"Tickets accessibles uniquement par les administrateurs mais plus dans les listes de ticket.\"}','2015-12-01 09:25:03','0000-00-00 00:00:00'),(5,'Supprimé','deleted',3,0,5,'{\"description\":\"Tickets en attente de suppression. Non accessible depuis les listes de Tickets.\"}','2015-12-01 09:25:03','0000-00-00 00:00:00');
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
INSERT INTO `ost_ticket_thread` VALUES (1,0,1,0,1,'M','Support osTicket','Web','osTicket a été installé!',' <p> Merci d\'avoir choisi osTicket. </p> <p> Veuillez rejoidre les <a href=\"http://osticket.com/forums\"> forums d\'osTicket</a> et notre <a href=\"http://osticket.com/updates\"> liste de diffusion</a> afin de rester à jour sur les dernières nouvelles, les alertes de sécurité et les mises à jour. Les forums d\'osTicket sont également un excellent endroit pour obtenir aide, conseils, astuces ou pour aider d\'autres utilisateurs d\'osTicket. Outre les forums, le wiki d\'osTicket fournit une collection utile du matériel pédagogique, documentation et notes de la communauté. Nous accueillons vos contributions à la communauté d\'osTicket. </p> <p> Si vous êtes à la recherche d\'un meilleur niveau de support, nous fournissons des services professionnels et un support professionnel avec temps de réponse garantis et l\'accès à l\'équipe de développement de base. Nous pouvons également vous aider à personnaliser osTicket ou encore ajouter de nouvelles fonctionnalités au système pour répondre à vos besoins uniques. </p> <p> Si l\'idée de la gestion et de la mise à niveau de cette installation d\'osTicket est intimidante, vous pouvez essayer osTicket comme un service hébergé à <a href=\"http://www.supportsystem.com\"> http://www.supportsystem.com/</a> - aucune installation requise et nous pouvons importer vos données ! Avec l\'infrastructure clé en main de SupportSystem, vous obtenez le meilleur d\'osTicket, vous laissant libre de vous concentrer sur vos clients sans la charge de veiller à ce que l\'application soit stable, maintenue et sûre. </p> <p>Cordialement,</p> <p>-<br /> L\'équipe osTicket http://osticket.com/</p> <p><strong>PS.</strong> Il ne faut pas juste faire des clients heureux, faites d\'heureux clients ! </p> ','html','::1','2015-12-01 09:25:04','0000-00-00 00:00:00'),(2,1,1,1,0,'R','Tristan Besson','','','osTicket est un système de ticket de support largement utilisé et open-source. C\'est une alternative intéressante aux systèmes de support plus coûteux et complexes - ses qualités : simple, léger, fiable, open-source, basé sur le web, facile à installer et à utiliser.','html','::1','2015-12-01 10:08:02','0000-00-00 00:00:00'),(3,0,1,1,0,'N','Tristan Besson','','Statut modifié','Statut modifié de Ouvert vers Fermé par Tristan Besson','html','::1','2015-12-01 10:08:02','0000-00-00 00:00:00'),(4,0,2,0,2,'M','Tristan BESSON','','','Ceci est un test de ticketing','html','::1','2015-12-01 10:09:32','0000-00-00 00:00:00'),(5,4,2,1,0,'R','Tristan Besson','','','Bien recu !<br /><br /><blockquote>Ceci est un test de ticketing</blockquote> <br /> ','html','::1','2015-12-01 10:11:28','0000-00-00 00:00:00'),(6,0,2,1,0,'N','Tristan Besson','','Statut modifié','Statut modifié de Ouvert vers Fermé par Tristan Besson<hr />Ticket de test terminé','html','::1','2015-12-01 10:12:43','0000-00-00 00:00:00'),(7,0,3,0,2,'M','Tristan BESSON','','','Au secours SOS<hr /> ','html','192.168.69.93','2016-01-04 16:01:15','0000-00-00 00:00:00'),(8,0,3,1,0,'N','Tristan Besson','','Il soûle avec ses question','Il est un peu bête ','html','192.168.69.93','2016-01-04 16:04:03','0000-00-00 00:00:00'),(9,7,3,1,0,'R','Tristan Besson','','','C\'est corrigé !','html','192.168.69.93','2016-01-04 16:04:39','0000-00-00 00:00:00'),(10,0,3,1,0,'N','Tristan Besson','','Statut modifié','Statut modifié de Ouvert vers Fermé par Tristan Besson','html','192.168.69.93','2016-01-04 16:04:39','0000-00-00 00:00:00'),(11,0,4,0,2,'M','Tristan BESSON','','','testt t','html','192.168.69.93','2016-01-04 16:07:34','0000-00-00 00:00:00'),(12,11,4,1,0,'R','Tristan Besson','','',' <br /><blockquote>testt t</blockquote> <br /> ','html','192.168.69.93','2016-01-04 16:08:36','0000-00-00 00:00:00'),(13,0,4,1,0,'N','Tristan Besson','','Statut modifié','Statut modifié de Ouvert vers Fermé par Tristan Besson','html','192.168.69.93','2016-01-04 16:08:36','0000-00-00 00:00:00'),(14,0,5,0,4,'M','Arnaud POUZOLS','','','bkalblablalbla','html','192.168.69.80','2016-01-07 14:53:21','0000-00-00 00:00:00'),(15,0,6,0,4,'M','Arnaud POUZOLS','','','test2','html','192.168.69.80','2016-01-07 14:53:51','0000-00-00 00:00:00'),(16,14,5,3,0,'R','super admin','','','Veuillez downgradé votre version de windows !','html','192.168.69.93','2016-01-07 14:56:57','0000-00-00 00:00:00');
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
