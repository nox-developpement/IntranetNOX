-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: intranet
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
-- Current Database: `intranet`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `intranet` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `intranet`;

--
-- Table structure for table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `annonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `annonces`
--

LOCK TABLES `annonces` WRITE;
/*!40000 ALTER TABLE `annonces` DISABLE KEYS */;
/*!40000 ALTER TABLE `annonces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archive`
--

DROP TABLE IF EXISTS `archive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chemin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archive`
--

LOCK TABLES `archive` WRITE;
/*!40000 ALTER TABLE `archive` DISABLE KEYS */;
INSERT INTO `archive` VALUES (2,'Bron','\\\\192.168.35.210\\share\\arch_agence\\Bron','C:/wamp/www/Symfony/web/scriptsArchives/Bron.bat'),(3,'Nantes','\\\\192.168.35.210\\share\\arch_agence\\Nantes','C:/wamp/www/Symfony/web/scriptsArchives/Nantes.bat');
/*!40000 ALTER TABLE `archive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compteur`
--

DROP TABLE IF EXISTS `compteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Compteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Vue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compteur`
--

LOCK TABLES `compteur` WRITE;
/*!40000 ALTER TABLE `compteur` DISABLE KEYS */;
INSERT INTO `compteur` VALUES (1,'Accueil','1488');
/*!40000 ALTER TABLE `compteur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compteur_demande`
--

DROP TABLE IF EXISTS `compteur_demande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compteur_demande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compteur` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compteur_demande`
--

LOCK TABLES `compteur_demande` WRITE;
/*!40000 ALTER TABLE `compteur_demande` DISABLE KEYS */;
INSERT INTO `compteur_demande` VALUES (6,2,'2016-02-12');
/*!40000 ALTER TABLE `compteur_demande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donnees_formulaire`
--

DROP TABLE IF EXISTS `donnees_formulaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donnees_formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdFormulaire` int(11) NOT NULL,
  `Donnee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donnees_formulaire`
--

LOCK TABLES `donnees_formulaire` WRITE;
/*!40000 ALTER TABLE `donnees_formulaire` DISABLE KEYS */;
INSERT INTO `donnees_formulaire` VALUES (16,45,'Ordinateur fixe'),(17,45,'Ordinateur portable'),(18,45,'Tablette'),(19,45,'Smartphone'),(20,45,'Ecran');
/*!40000 ALTER TABLE `donnees_formulaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donnees_suivi`
--

DROP TABLE IF EXISTS `donnees_suivi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donnees_suivi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdSuivi` int(11) NOT NULL,
  `Version` double NOT NULL,
  `Donnees` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donnees_suivi`
--

LOCK TABLES `donnees_suivi` WRITE;
/*!40000 ALTER TABLE `donnees_suivi` DISABLE KEYS */;
INSERT INTO `donnees_suivi` VALUES (90,62,1,'a:1:{s:8:\"Quantite\";a:3:{s:4:\"Data\";d:150;s:4:\"Type\";s:6:\"number\";s:8:\"Position\";s:2:\"A2\";}}','Achat Objets 2016_v1'),(93,62,1.1,'a:1:{s:8:\"Quantite\";a:3:{s:4:\"Data\";i:1;s:4:\"Type\";s:7:\"integer\";s:8:\"Position\";s:2:\"A2\";}}','Achat Objets 2016_v1.1'),(94,62,1.2,'a:1:{s:8:\"Quantite\";a:3:{s:4:\"Data\";i:2;s:4:\"Type\";s:7:\"integer\";s:8:\"Position\";s:2:\"A2\";}}','Achat Objets 2016_v1.2'),(95,62,1.3,'a:1:{s:8:\"Quantite\";a:3:{s:4:\"Data\";i:2;s:4:\"Type\";s:7:\"integer\";s:8:\"Position\";s:2:\"A2\";}}','Achat Objets 2016_v1.3'),(96,62,1.4,'a:1:{s:8:\"Quantite\";a:3:{s:4:\"Data\";i:1;s:4:\"Type\";s:7:\"integer\";s:8:\"Position\";s:2:\"A2\";}}','Achat Objets 2016_v1.4'),(97,62,1.5,'a:1:{s:8:\"Quantite\";a:3:{s:4:\"Data\";i:2;s:4:\"Type\";s:7:\"integer\";s:8:\"Position\";s:2:\"A2\";}}','Achat Objets 2016_v1.5'),(98,62,1.6,'a:1:{s:8:\"Quantite\";a:3:{s:4:\"Data\";i:1;s:4:\"Type\";s:7:\"integer\";s:8:\"Position\";s:2:\"A2\";}}','Achat Objets 2016_v1.6'),(99,62,1.7,'a:1:{s:8:\"Quantite\";a:3:{s:4:\"Data\";i:45;s:4:\"Type\";s:7:\"integer\";s:8:\"Position\";s:2:\"A2\";}}','Achat Objets 2016_v1.7'),(100,62,1.8,'a:1:{s:8:\"Quantite\";a:3:{s:4:\"Data\";d:1.5;s:4:\"Type\";s:6:\"number\";s:8:\"Position\";s:2:\"A2\";}}','Achat Objets 2016_v1.8');
/*!40000 ALTER TABLE `donnees_suivi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fichier_suivi`
--

DROP TABLE IF EXISTS `fichier_suivi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fichier_suivi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Chemin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fichier_suivi`
--

LOCK TABLES `fichier_suivi` WRITE;
/*!40000 ALTER TABLE `fichier_suivi` DISABLE KEYS */;
INSERT INTO `fichier_suivi` VALUES (51,'C:\\wamp\\www\\Symfony\\web\\uploads\\AssistantAffaires\\FeuillesSuivis\\Materiel Informatique','Informatique');
/*!40000 ALTER TABLE `fichier_suivi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formulaires`
--

DROP TABLE IF EXISTS `formulaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formulaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulaires`
--

LOCK TABLES `formulaires` WRITE;
/*!40000 ALTER TABLE `formulaires` DISABLE KEYS */;
INSERT INTO `formulaires` VALUES (49,'Quantité','Nombre','Informatique');
/*!40000 ALTER TABLE `formulaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `helpdesk`
--

DROP TABLE IF EXISTS `helpdesk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `helpdesk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `helpdesk`
--

LOCK TABLES `helpdesk` WRITE;
/*!40000 ALTER TABLE `helpdesk` DISABLE KEYS */;
INSERT INTO `helpdesk` VALUES (1,'Helpdesk','helpdesk@groupe-nox.com');
/*!40000 ALTER TABLE `helpdesk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imprimantes`
--

DROP TABLE IF EXISTS `imprimantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imprimantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chemin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cheminPilote` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomReseau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fileLPR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imprimantes`
--

LOCK TABLES `imprimantes` WRITE;
/*!40000 ALTER TABLE `imprimantes` DISABLE KEYS */;
INSERT INTO `imprimantes` VALUES (10,'Bron','C:/wamp/www/Symfony/web/scriptsImprimantes/PrinterDriverInstaller.exe','IMP','imp',NULL,NULL,NULL,NULL),(19,'Nantes','C:/wamp/www/Symfony/web/scriptsImprimantes/KLM(Nantes).cmd','KLM','tra','testIp','testChemin','testReseau','testLPR');
/*!40000 ALTER TABLE `imprimantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liaison_suivi_champ`
--

DROP TABLE IF EXISTS `liaison_suivi_champ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `liaison_suivi_champ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdChamp` int(11) NOT NULL,
  `IdSuivi` int(11) NOT NULL,
  `CoordonneesDonnees` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liaison_suivi_champ`
--

LOCK TABLES `liaison_suivi_champ` WRITE;
/*!40000 ALTER TABLE `liaison_suivi_champ` DISABLE KEYS */;
INSERT INTO `liaison_suivi_champ` VALUES (104,49,51,'A2');
/*!40000 ALTER TABLE `liaison_suivi_champ` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liens`
--

DROP TABLE IF EXISTS `liens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `liens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `liens` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liens`
--

LOCK TABLES `liens` WRITE;
/*!40000 ALTER TABLE `liens` DISABLE KEYS */;
INSERT INTO `liens` VALUES (83,'Test1',NULL,'Aucune','Catégorie',1),(84,'Test2',NULL,'Aucune','Catégorie',2),(85,'Test3',NULL,'Aucune','Catégorie',3),(87,'Test4','http://google.fr','Test2','Lien',NULL);
/*!40000 ALTER TABLE `liens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pdf`
--

DROP TABLE IF EXISTS `pdf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Chemin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pages` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateEnvoi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16099 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pdf`
--

LOCK TABLES `pdf` WRITE;
/*!40000 ALTER TABLE `pdf` DISABLE KEYS */;
/*!40000 ALTER TABLE `pdf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profils`
--

DROP TABLE IF EXISTS `profils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profils`
--

LOCK TABLES `profils` WRITE;
/*!40000 ALTER TABLE `profils` DISABLE KEYS */;
INSERT INTO `profils` VALUES (9,'Informatique');
/*!40000 ALTER TABLE `profils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `references_keywords`
--

DROP TABLE IF EXISTS `references_keywords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `references_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4806 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `references_keywords`
--

LOCK TABLES `references_keywords` WRITE;
/*!40000 ALTER TABLE `references_keywords` DISABLE KEYS */;
INSERT INTO `references_keywords` VALUES (4797,'Env',1),(4798,'Montagne',1),(4799,'Ecologie',1),(4800,'Méthodologie',1),(4801,'Références',1),(4802,'Ajout',1),(4803,'Suppression',1),(4804,'Documents',1),(4805,'Mots-clés',1);
/*!40000 ALTER TABLE `references_keywords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serveur`
--

DROP TABLE IF EXISTS `serveur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serveur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chemin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serveur`
--

LOCK TABLES `serveur` WRITE;
/*!40000 ALTER TABLE `serveur` DISABLE KEYS */;
INSERT INTO `serveur` VALUES (3,'Biot','\\\\192.168.73.1\\share\\biot','C:/wamp/www/Symfony/web/scriptsServeurs/Biot.bat'),(4,'Dijon','\\\\192.168.72.1\\share\\dijon','C:/wamp/www/Symfony/web/scriptsServeurs/Dijon.bat'),(5,'Ecuisses','\\\\192.168.71.1\\share\\ecuisses','C:/wamp/www/Symfony/web/scriptsServeurs/Ecuisses.bat'),(6,'Boulogne','\\\\192.168.68.1\\share\\boulogne','C:/wamp/www/Symfony/web/scriptsServeurs/Boulogne.bat'),(7,'Rennes','\\\\192.168.30.1\\share\\Rennes','C:/wamp/www/Symfony/web/scriptsServeurs/Rennes.bat'),(8,'Beaune','\\\\192.168.61.1\\share\\beaune','C:/wamp/www/Symfony/web/scriptsServeurs/Beaune.bat'),(9,'Aubière','\\\\192.168.63.1\\share\\Clermont','C:/wamp/www/Symfony/web/scriptsServeurs/Aubière.bat'),(10,'Angoulême','\\\\192.168.16.1\\share\\angouleme','C:/wamp/www/Symfony/web/scriptsServeurs/Angoulême.bat'),(11,'Brest','\\\\192.168.39.10\\share\\Brest','C:/wamp/www/Symfony/web/scriptsServeurs/Brest.bat'),(12,'Lorient','\\\\192.168.57.1\\share\\lorient','C:/wamp/www/Symfony/web/scriptsServeurs/Lorient.bat'),(13,'Paris','\\\\192.168.75.1\\share\\paris','C:/wamp/www/Symfony/web/scriptsServeurs/Paris.bat'),(14,'Saintes','\\\\192.168.17.1\\share\\saintes','C:/wamp/www/Symfony/web/scriptsServeurs/Saintes.bat'),(15,'Bron','\\\\192.168.69.1\\z','C:/wamp/www/Symfony/web/scriptsServeurs/Bron.bat'),(16,'Bron Energie','\\\\192.168.69.1\\ze','C:/wamp/www/Symfony/web/scriptsServeurs/Bron Energie.bat'),(17,'Woippy','\\\\192.168.67.1\\share\\woippy','C:/wamp/www/Symfony/web/scriptsServeurs/Woippy.bat');
/*!40000 ALTER TABLE `serveur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suivis`
--

DROP TABLE IF EXISTS `suivis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suivis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Agence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NumeroGX` int(11) NOT NULL,
  `Profil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IdModele` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suivis`
--

LOCK TABLES `suivis` WRITE;
/*!40000 ALTER TABLE `suivis` DISABLE KEYS */;
INSERT INTO `suivis` VALUES (62,'Achat Objets 2016','Bron',9875,'Informatique','En cours',51);
/*!40000 ALTER TABLE `suivis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `texte_encart`
--

DROP TABLE IF EXISTS `texte_encart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `texte_encart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext COLLATE utf8_unicode_ci,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `texte_encart`
--

LOCK TABLES `texte_encart` WRITE;
/*!40000 ALTER TABLE `texte_encart` DISABLE KEYS */;
INSERT INTO `texte_encart` VALUES (1,'<p>Les archives du groupe&nbsp;sont stock&eacute;es sur un volume d&eacute;di&eacute; &agrave; <u><strong>Nantes</strong></u>. (et en lecture seule)<br />\r\nPour plus de s&eacute;curit&eacute;, ces donn&eacute;es sont dupliqu&eacute;es sur le site de Bron.</p>\r\n\r\n<p>Vous pouvez acc&eacute;der, si besoin, aux archives de toutes les entit&eacute;s.</p>\r\n\r\n<p>Pour y acc&eacute;der, un raccourci a&nbsp;&eacute;t&eacute; cr&eacute;&eacute; dans le r&eacute;pertoire &quot;Z:\\2_Archives&quot; de chaque agence. (arborescence finale)</p>\r\n\r\n<p><span style=\"color:#FF0000\"><strong>IMPORTANT : </strong></span>Vu que les archives ont &eacute;t&eacute; centralis&eacute;es, merci de faire attention &agrave; ne pas recopier les dossiers en entier sur votre partage local. Cette copie passera par votre liaison internet et&nbsp;en fonction du volume,&nbsp;la dur&eacute;e de transfert pourra &ecirc;tre plus ou moins longue.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Concernant les modalit&eacute;s de passage en archive :</strong></p>\r\n\r\n<p>Une affaire est consid&eacute;r&eacute;e termin&eacute;e lorsque&nbsp;la derni&egrave;re facture est sold&eacute;e.<br />\r\nLe &quot;responsable&quot; de l&#39;affaire&nbsp;devra veiller &agrave; ce que le contenu du dossier informatique soit exhaustif&nbsp;(Donn&eacute;es de production, facturation scann&eacute;e, communication avec le client etc...) et le d&eacute;placera dans le dossier &quot;Z:\\_A_Archiver&quot;.</p>\r\n\r\n<p>La DSI se chargera de basculer ces donn&eacute;es sur le partage centralis&eacute; afin de sortir ces donn&eacute;es de votre partage et des sauvegardes quotidiennes.</p>\r\n\r\n<p>Un PROCESS qualit&eacute; est en cours de r&eacute;daction et formalisera la proc&eacute;dure. (Acc&eacute;ssible dans un premier temps sur le N:\\)</p>','Archives',NULL),(3,'<p>Panne du serveur h&eacute;bergeant l&#39;IREEF</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"600\" scrolling=\"no\" src=\"https://www.google.com/maps/d/u/0/embed?mid=zKbvCJ-EBI40.kus0fHAc15jI\" width=\"100%\"></iframe></p>','Information',NULL),(7,'<p><u><strong>Gestion des Softs :</strong></u><br />\r\n-&nbsp;D&eacute;ploiement sur les postes de travail de l&#39;antivirus Symantec EndPoint : <span style=\"color:#008000\">Termin&eacute;</span><br />\r\n-&nbsp;Mise en place de Landesk (prise en main et inventaire logiciels) : <span style=\"color:#008000\">Termin&eacute;</span><br />\r\n- Mutualisation des licences AutoDESK en r&eacute;seau V2016 : <span style=\"color:#FF8C00\">Serveur de licence install&eacute;, images 2016 en cours de d&eacute;ploiement</span><br />\r\n- Mutualisation des licences Bentley en r&eacute;seau V8i : <span style=\"color:#FF8C00\">Packages d&#39;installation en cours de pr&eacute;paration</span><br />\r\n<br />\r\n<strong><u>Messagerie :</u></strong><br />\r\n-&nbsp;Mise en place de la messagerie sous Exchange 365 : <span style=\"color:#FF8C00\">En cours</span><br />\r\n&gt; Reste le site de <span style=\"color:#FF0000\">Beaune </span>(contraintes techniques)</p>\r\n\r\n<p><u><strong>Serveurs&amp;Arborescences :</strong></u><br />\r\n- Angoul&ecirc;me : <span style=\"color:#FF8C00\">En cours de migration (90%)</span><br />\r\n- Aubi&egrave;re :&nbsp;&nbsp;Migration&nbsp;<span style=\"color:rgb(0, 128, 0)\">termin&eacute;e</span>&nbsp;; Arborescence en&nbsp;<span style=\"color:rgb(255, 0, 0)\">standby&nbsp;</span>(contraintes techniques)<br />\r\n- Beaune : Migration <span style=\"color:#008000\">termin&eacute;e</span>&nbsp;; Arborescence en <span style=\"color:#FF0000\">standby&nbsp;</span>(contraintes techniques)<br />\r\n- Biot : Migration <span style=\"color:#008000\">termin&eacute;e</span><br />\r\n- Boulogne : Migration<span style=\"color:#008000\"> termin&eacute;e</span><br />\r\n- Brest : <span style=\"color:#FFA500\">En cours de migration (90%)</span><br />\r\n- Bron : <span style=\"color:#FF0000\">A Faire ; </span>Arborescence <span style=\"color:#FF8C00\">en cours (95%) </span>(Energie Bron ;&nbsp;Arborescence en&nbsp;<span style=\"color:rgb(255, 0, 0)\">standby&nbsp;</span>(contraintes techniques))<br />\r\n- Dijon :&nbsp;Migration&nbsp;<span style=\"color:rgb(0, 128, 0)\">termin&eacute;e</span><br />\r\n- Ecuisses : Migration&nbsp;<span style=\"color:rgb(0, 128, 0)\">termin&eacute;e</span><br />\r\n- Laval : &nbsp;<span style=\"color:rgb(255, 140, 0)\">En cours de migration (5%)</span><br />\r\n- Lorient : <span style=\"color:#FF8C00\">En cours de migration (5%)</span><br />\r\n- Paris : Migration&nbsp;<span style=\"color:rgb(0, 128, 0)\">termin&eacute;e</span><br />\r\n- Rennes : Migration <span style=\"color:rgb(0, 128, 0)\">termin&eacute;e&nbsp;</span>; <span style=\"color:#FF8C00\">Arborescence en cours (80%)</span><br />\r\n- Saintes : Migration <span style=\"color:rgb(0, 128, 0)\">termin&eacute;e</span><br />\r\n- St Herblain :&nbsp;<span style=\"color:rgb(255, 0, 0)\">A Faire ;&nbsp;</span>Arborescence&nbsp;<span style=\"color:rgb(0, 128, 0)\">termin&eacute;e</span><br />\r\n- St Malo :&nbsp;Migration&nbsp;<span style=\"color:rgb(0, 128, 0)\">termin&eacute;e&nbsp;</span>;&nbsp;<span style=\"color:rgb(255, 140, 0)\">Arborescence en cours (90%)</span><br />\r\n- Woippy :&nbsp;Migration&nbsp;<span style=\"color:rgb(0, 128, 0)\">termin&eacute;e</span></p>\r\n\r\n<p><u><strong>Archivage :</strong></u><br />\r\n- Process Global&nbsp;:&nbsp;<span style=\"color:rgb(0, 128, 0)\">Termin&eacute;</span><br />\r\n- Moyen mat&eacute;riels mis en oeuvre : <span style=\"color:#008000\">Termin&eacute;</span></p>\r\n\r\n<p><u><strong>Mat&eacute;riel :</strong></u><br />\r\n- Commande de postes : <span style=\"color:#FF8C00\">En cours de pr&eacute;paration</span><br />\r\n- D&eacute;ploiement onduleurs&amp;parafoudres : <span style=\"color:#FF8C00\">En cours</span></p>\r\n\r\n<p><strong><u>Intranet :</u></strong><br />\r\n-&nbsp;Mise en place de l&#39;Intranet pr&eacute;vue pour courant Mars 2016<br />\r\n- V1 <span style=\"color:#FF8C00\">en cours</span> de finalisation pour tests sur Bron et Rennes</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n</ul>','AvancementProjet',NULL),(8,'<p>Vous trouverez dans cette partie un gestionnaire de comp&eacute;tences.</p>\r\n\r\n<p>Chaque agence met &agrave; disposition un document PDF r&eacute;sumant les comp&eacute;tences de ses collaborateurs et les personnes &agrave;</p>\r\n\r\n<p>contacter en cas de besoin.</p>\r\n\r\n<p>La proc&eacute;dure de cr&eacute;ation du document est disponible dans Ressources \\ FAQ.</p>','Competences',NULL),(10,'<p style=\"margin-left:360px\"><a href=\"http://groupe-nox.com/\" target=\"_blank\"><span style=\"color:#1F4E79\"><span style=\"font-size:24px\">Site du Groupe NOX</span></span></a></p>\r\n\r\n<p style=\"margin-left:360px\"><a href=\"https://login.microsoftonline.com/\" target=\"_blank\"><span style=\"color:#1F4E79\"><span style=\"font-size:24px\">WebMail</span></span></a></p>\r\n\r\n<p style=\"margin-left:360px\"><span style=\"color:#1F4E79\"><strong><span style=\"font-size:24px\">Partage</span></strong></span></p>\r\n\r\n<p style=\"margin-left:400px\"><span style=\"font-size:20px\"><a href=\"https://360.autodesk.com/Login\" target=\"_blank\"><span style=\"color:#1F4E79\">A360 Drive</span></a></span></p>\r\n\r\n<p style=\"margin-left:400px\"><span style=\"font-size:20px\"><a href=\"https://groupenox.autodesk360.com/\" target=\"_blank\"><span style=\"color:#1F4E79\">A360 Team</span></a></span></p>\r\n\r\n<p style=\"margin-left:400px\"><span style=\"font-size:20px\"><a href=\"https://onedrive.live.com/about/fr-fr/\" target=\"_blank\"><span style=\"color:#1F4E79\">OneDrive</span></a></span></p>\r\n\r\n<p style=\"margin-left:400px\"><span style=\"font-size:20px\"><a href=\"https://www.wetransfer.com/\" target=\"_blank\"><span style=\"color:#1F4E79\">WeTransfer</span></a></span></p>','Liens',NULL),(11,'<p style=\"margin-left:40px\"><a href=\"http://192.168.35.218/Symfony/web/uploads/References/M%C3%83%C2%A9thodologie%20R%C3%83%C2%A9f%C3%83%C2%A9rences.pdf\" target=\"_blank\"><span style=\"color:#1F4E79\">M&eacute;thodologie R&eacute;f&eacute;rences</span></a></p>','References',NULL),(33,'<p>sqdsqd</p>','Edito','2016-02-17'),(34,'<p>gfgfdgfdgfdgfdgfd</p>','Edito','2016-02-17'),(35,'<p style=\"text-align: center;\"><span style=\"font-size:28px\"><span style=\"color:#5882fa\">Intranet en d&eacute;veloppement</span></span></p>','Edito','2016-02-17'),(36,'<p style=\"text-align:center\"><span style=\"font-size:28px\"><span style=\"color:#5882fa\">Intranet en d&eacute;veloppement</span></span></p>','Edito','2016-02-17'),(37,'<p>&quot; <strong>Ne &nbsp;l&eacute;sinez jamais sur&nbsp;la Qualit&eacute;&nbsp;. Peu de gens ont l&#39;habitude d&#39;un environnement o&ugrave; l&#39;excellence est la norme.</strong>&quot; Steve JOBS</p>','Citations','2016-02-18'),(38,'<p style=\"text-align:center\"><span style=\"font-size:28px\"><span style=\"color:#5882fa\">Intranet en d&eacute;veloppement</span></span></p>','Edito','2016-02-22'),(39,'<p style=\"text-align:center\"><span style=\"font-size:28px\"><span style=\"color:#5882fa\">Intranet en d&eacute;veloppement</span></span></p>','Edito','2016-02-22'),(40,'<p style=\"text-align:center\"><span style=\"font-size:28px\"><span style=\"color:#5882fa\">Intranet en d&eacute;veloppement</span></span></p>','Edito','2016-02-22'),(41,'<p style=\"text-align:center\"><span style=\"font-size:28px\"><span style=\"color:#5882fa\"><img alt=\"\" src=\"/intranet/uploads/ImagesPublication/chantier.jpeg\" style=\"height:230px; width:350px\" /></span></span></p>','Edito','2016-02-25'),(42,'<p style=\"text-align:center\"><span style=\"font-size:28px\"><span style=\"color:#5882fa\"><img alt=\"\" src=\"/intranet/uploads/ImagesPublication/chantier.jpeg\" style=\"height:280px; width:450px\" /></span></span></p>','Edito','2016-03-01'),(43,'<p style=\"text-align:center\"><span style=\"font-size:28px\"><span style=\"color:#5882fa\"><img alt=\"\" src=\"/intranet/uploads/ImagesPublication/chantier.jpeg\" style=\"height:280px; width:450px\" /></span></span></p>','Edito','2016-03-01'),(44,NULL,'Procedures','2016-03-02'),(45,NULL,'ModesOperatoires','2016-03-02'),(46,NULL,'FormulairesEtDocumentTypes','2016-03-02');
/*!40000 ALTER TABLE `texte_encart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dateAjout` date NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `local` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agence` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=471 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'c.cottarel','7bad7333f5dc2831d9e62cfbdbac8886','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Christophe','COTTAREL'),(2,'i.colombotto','1f3c7c63883ed936c918350ba3d58360','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Isabelle','COLOMBOTTO'),(3,'f.larnaud','89857f64707b48186888b121db4a7c00','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Floriane','LARNAUD'),(4,'k.said','56e7e017f46fb625a7809ca92976e052','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Kamelia','SAID'),(5,'as.perrinelle','1e4178ad627b6403c63578b68d50b3a8','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Anne-sophie','PERRINELLE'),(6,'c.bellot','88e8fb2b9fe4227abea378f9813d6928','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Cl','BELLOT'),(7,'n.richard','798b49bc29f0fca2654ebec5681b4e0d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Nicolas','RICHARD'),(8,'Administrateur','b845827ec6c0c2e2030b2c290e07f2cb','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default',NULL,'Administrateur',''),(10,'p.kakwata-misongo','b2ddb20587e2ca024e4a45869591ed96','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Pathy','KAKWATA MISONGO'),(11,'f.adnot','daf873cda933e387b0a590d50573a62d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Francis','ADNOT'),(12,'h.rejony','9ca53ea2adc5e25a264cc974df4926ce','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Herve','REJONY'),(13,'c.aujogues','195742ac30c0920c460018dbdfa37bd0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Christian','AUJOGUES'),(14,'v.louessard','f03ee7cdb8186b846163ae6be0cd6aba','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Vincent','LOUESSARD'),(15,'c.decourville','3c9363f31fca5939154fb8a14fef343d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saint Malo','Charles','DE COURVILLE'),(16,'d.rouveure','16bfbd9d91eb6df9ba0bff917030d87b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','David','ROUVEURE'),(17,'p.chevalier','7d4f6ff5f0120784ee4298c82294b359','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Pierre','CHEVALIER'),(18,'m.sellin','771183302b0949aa140ce0bb76c38a67','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Mathieu','SELLIN'),(19,'a.leguenic','495f4df112505fb94a3a4af9a5f92bf1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecodiag','Aurelien','LE GUENIC'),(20,'f.gesnot','9521e2c530350099439aed6389dab0a9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Florent','GESNOT'),(21,'e.alex','e2b43acbcebbfdc01c84c16eb50798f9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Evelyne','ALEX'),(22,'h.entzmann','d6dd3cc02062ae74d54ee2f44e7c0296','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Huguette','ENTZMANN'),(23,'m.poncet','56e6a14bf923f57f6c4f74224640a34a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Murielle','PONCET'),(24,'t.audran','70caf445221b2e4b91671ec808a8be16','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Tiphaine','AUDRAN'),(25,'y.tardy','edd230df7028ed56831f1a8230473297','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Yohann','TARDY'),(26,'c.roussiau','d595c8a15835dd9377c5e4d79292ead4','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Catherine','ROUSSIAU'),(27,'s.chaussee','1ce1203a76b428711167b8053d5372ec','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Simon','CHAUSSEE'),(28,'v.faure','0e618d8df9920938941a20858440505c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','Vincent','FAURE'),(29,'p.vigier','d26096bbbf782c7a43f9728c287ba4db','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saint Malo','Patrick','VIGIER'),(30,'d.marras','73b9a4f9562046423a4c3e1194da0c82','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Dominique','MARRAS'),(31,'a.morin','40497e51e204bb1fb4bdb6ebecf92f26','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Laval','Arnaud','MORIN'),(32,'m.blay','6a89450682ec6fa40b2b37199b6d8819','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saint Malo','Martine','BLAY'),(33,'b.weill','bda0d51675e4346deddf7095ed8defa4','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Bruno','WEILL'),(34,'a.desquesses','ec66c9f77913994a2051b59617fa4f93','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saint Malo','Annie','DESQUESSES'),(35,'c.saget','8b6d10aba58e1f74f47a4f23fb9c4094','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Cecile','SAGET'),(36,'s.labbe','d6f569adde0a46f03ecb9204ae689a8d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Sandra','LABBE'),(37,'y.millon','f329a19dad9a970d3a61bbd4d7f8baf1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Yann','MILLON'),(38,'s.ageneau','09a0e449a6b42f0ee7b48f58f67afee5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Sylvain','AGENEAU'),(39,'m.hamaddache','da8bba0cd4fc2bf3b175007730c195ad','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','M','HAMADDACHE'),(40,'l.debecdelievre','f180eeb66d96e38c2988828af3ce752e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Laurence','DEBECDELIEVRE'),(41,'c.janssen','5bd5e722ff6f95c073c698de3e02d2a9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Cyril','JANSSEN'),(42,'a.corrot','d181493a19dc1c76f410850cfe92320c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Agathe','CORROT'),(43,'jl.chemin','8891f6fb57c0070a033ddd56918b6066','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Jean-Louis','CHEMIN'),(44,'p.marin','e06c43147ffb7ad956aca6b944c84482','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Patrice','MARIN'),(45,'b.roudet','488aa95191ba0fcf407ad37a0782ea13','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Bernard','ROUDET'),(46,'s.aujogues','0467d92c21d5ed477112bddd8717b0fe','a:11:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:10:\"ROLE_CHSCT\";i:9;s:0:\"\";i:10;s:9:\"ROLE_USER\";}',0,'default','Bron','Sandrine','AUJOGUES'),(47,'f.sechery','af6ecb5393d6bde7e3604bb88f75fa3b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saint Malo','Franck','SECHERY'),(48,'v.thiel','8f6e6e9bfe398a6e0cd0451395741ee9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Virginie','THIEL'),(49,'m.benhaoua','2b271b3055adde652140a8e0d162e88e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Mehdi','BENHAOUA'),(50,'p.menard','4f9c062725a40ae48ec4692e71e50dfc','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Pierre','MENARD'),(51,'l.thomas','1938c2b9bf70ff1729eac1054f6a5c77','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Laurent','THOMAS'),(52,'e.bloch','e4491e9e857579b3c84fce40ea12f462','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Emilien','BLOCH'),(53,'k.heritier','90f923dfabd2e116b787fc9a2f1d92fc','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Katia','HERITIER'),(54,'v.gingat','4b11b25e54c54c11e104f4a7a2fbddf3','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saint Malo','Vincent','GINGAT'),(55,'l.guillemer','3898d6da049914db0de9672377e00a1b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Laurent','GUILLEMER'),(56,'n.chaffangeon','b127540e2ed529842b70fc632943fa91','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Nicolas','CHAFFANGEON'),(57,'a.garnier','57919ea60aac5909e66df8c9970cb8a3','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Aymeric','GARNIER'),(58,'e.midali','7565b282c2c32589e2175de9e87c1ed6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Eric','MIDALI'),(59,'p.collet','8a0c9102a2acffbef10c67975fc740b4','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Pierre','COLLET'),(60,'mc.mace','2fd66ed7a2add341c7240d7f3b09f25e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Marie-Christine','MACE'),(61,'n.folempin','29f82dba7262c3ee4d75ee930a559755','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Nicolas','FOLEMPIN'),(62,'g.pivot','b12ec0063b98177fc46d9a47ae689e61','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Gregory','PIVOT'),(63,'s.herve','61cff180c1dfb9dd51208fd5fa1b73d5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Sylvie','HERVE'),(64,'l.mechain','6d53c381a5df928db154f3601dae0ea2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Ludovic','MECHAIN'),(65,'m.azib','3a9dff72b222f5e3ee7adec3ff095af5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Malika','AZIB'),(66,'c.dufosse','0b41cce1fc31ee560e11447f1866d953','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Christophe','DUFOSSE'),(67,'c.lengronne','31c2a63b0538238e238495a1772de90b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Cl','LENGRONNE'),(68,'t.nussbaum','c42e96652d6adf9f0768c57d76e2a634','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Thomas','NUSSBAUM'),(69,'l.pouzols','4ec15327fcab3fa9cc122d74e0cc2982','a:11:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:9:\"ROLE_USER\";}',0,'default','Bron','Laure','POUZOLS'),(70,'a.barsot','16b7358d4880830405ff379697b90d09','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Audrey','BARSOT'),(71,'a.sow','642be5b43ec4e8c79e827830dbdecae2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Abdoumaye','SOW'),(72,'p.masa','a24e1a90348f7e579ca443da0e920d5f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Pierre','MASA'),(73,'d.angebault','e40203007b57ce700a3dd973dfe7d044','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Dominique','ANGEBAULT'),(74,'b.ponel','dd570141c21e5c513ba432099377cdb1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Boris','PONEL'),(75,'nox.rennes','41a79296bf186548f8f7be7b0269c32d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Generique','nox.rennes',''),(77,'y.sourmay','e247dc925b1a080edd3a111e21a7f033','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Yohann','SOURMAY'),(78,'g.garrec','486458538a2b318453598b5687350d56','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Gildas','GARREC'),(79,'d.orso','d5388163743966ae8806908a7722ecc2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Dominique','ORSO'),(80,'jm.jestin','00987c083a946aef0d15a285ae369d37','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Maroc','Jean-Marc','JESTIN'),(81,'l.brenckle','1180868167bc7b7dbd406d2476da9bbe','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Laetitia','BRENCKLE'),(82,'i.bennett','7435f3d07e0908bf1a7990da471ec84d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','International','Ian','BENNETT'),(83,'x.simon','9f1e3aed1aee77616baf57984f6b2690','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Xavier','SIMON'),(84,'f.faye','98542ceec051233a9b681ad560cb7119','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Fran','FAYE'),(85,'j.letheo','96c4a8aab07821e3a42dc9b154db81bc','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Jacqueline','LE THEO'),(86,'g.gouesmel','30d89e6c6e90caef66c665d35de9cc04','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Guillaume','GOUESMEL'),(87,'g.helary','2e84f68b464aedd94807cf80c7f06c8a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Guillaume','HELARY'),(88,'n.girard','70f668256fbd69ccf8f7d65f60f42229','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Nicolas','GIRARD'),(89,'d.guilbaud','6d1b32be70040ec6abb901b6d0799a2b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Denis','GUILBAUD'),(90,'f.aulnette','f11cd7c32188b12076f991ac6f8310d1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Flavien','AULNETTE'),(91,'h.boisard','8b150428d15a4490dca662e7711da9b1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Henri','BOISARD'),(92,'jm.courtois','f10a0efa3df28ec2b031cc3c4944f353','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecodiag','Jean-Michel','COURTOIS'),(93,'m.cormerais','3fb09c14c751d964bcea69f1896395d5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Meggy','CORMERAIS'),(94,'j.billy','165f69f00f37d1b15bbccd2a4765e45a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Johanna','BILLY'),(95,'m.kone','fa92b5bf9a0fec7cf7a691257154c491','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Mamari','KONE'),(96,'b.arnaud','220f05c9b36ca977d070d908e577dafc','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Benjamin','ARNAUD'),(97,'l.guillet','ddd749a6193decf3e91dfb1c60950509','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Ludovic','GUILLET'),(98,'a.ducristel','e548ee4fb9a7fe4b0a3e2de2701aa3fc','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Aude','DUCRISTEL'),(99,'f.hamon','642b3d5ca65a5161b63a567e8de54ca0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Franck','HAMON'),(100,'k.amara','d7dabf8a6cfaccb4a4841c0dcd10bc0b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Khaled','AMARA'),(101,'p.delin','3e7a5945e293bdba36f3c8dcc13461a9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Philippe','DELIN'),(102,'e.fromont','d8fe617f6c9989a680dda22a438db255','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Laval','Estelle','FROMONT'),(103,'s.roeder','49db19d685bcfd05f698a111a6d9ca41','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Stefan','ROEDER'),(104,'c.lemiere','a424788971d2ad9e3c67a76315c90820','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Cedric','LEMIERE'),(105,'p.martin','1f67e011490493e3b2dfe85ec8593baa','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Pierre','MARTIN'),(106,'i.legoux','cd3f52fd6908d90d1ee928ad3154edd0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Isabelle','LEGOUX'),(107,'c.salvan','e380331c19c6e7e58cf4c9fdf5c0013d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Carole','SALVAN'),(108,'n.naud','7b607ba9731295389de501dc528fee03','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Nicolas','NAUD'),(109,'n.lelouard','9d21e926b4f7d470e5ed3834e6884193','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Nicolas','LELOUARD'),(110,'c.guigni','943166b77f56d1a479453050ed0c2fca','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Corinne','GUIGNI'),(111,'m.gendron','820e2621922c3a86cb29a8a9421dd40e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Developpement Immobilier','Mickael','GENDRON'),(112,'m.fave','252fbc9526fd9c41bd4bd0324c375475','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Michel','FAVE'),(113,'j.routhier','4b8b9ea4f7b696c385c4c51c4f5611f1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Jeremy','ROUTHIER'),(114,'h.gourdon','3f796d0d3894f7659d4422e32efd1ae6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Hugues','GOURDON'),(116,'scc','6479a9a8caf80c032e71bdb61e0d5983','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Externe','','SCC'),(117,'s.jubeau','8277f5f3235211ca50fa4db761737214','a:11:{i:0;s:10:\"ROLE_ADMIN\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:9:\"ROLE_USER\";}',0,'default','Siège','Sylvain','JUBEAU'),(118,'a.pouzols','cfdb3e2c32dea6e5f7c2569a4d2fad09','a:10:{i:0;s:10:\"ROLE_ADMIN\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:9:\"ROLE_USER\";}',0,'default','Siège','Arnaud','POUZOLS'),(120,'n.bammez','fcf38fac2d5b569d9cb1e29c90885147','a:11:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:18:\"ROLE_COMMUNICATION\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:9:\"ROLE_USER\";}',0,'default','Siège','Nicolas','BAMMEZ'),(121,'k.roulliere','52ec96890a140c33c8e5dcda18c87b97','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Laval','Kevin','ROULLIERE'),(122,'l.setti','4bfd4dca64802658b5378da06a3cb75b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Laval','Laetitia','SETTI'),(123,'j.hinault','432860b7fccfec899df4a4a9792e1245','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Laval','Julien','HINAULT'),(124,'p.moison','18d31f0b1a487e3a11ce4fada5a4538c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Laval','Patrice','MOISON'),(125,'p.regereau','1fc486ec2f8a1e85f89a5fbec4c905a9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Laval','Philippe','REGEREAU'),(126,'mc.houdu','12e74c7e28511dab170f8bc76e582551','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Laval','Marie Chantal','HOUDU'),(128,'j.richard','413de56273c049976a5aa906f7047db7','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Joffrey','RICHARD'),(129,'b.stock','25fd3f023eec2e3c2feecf66bcd0c04e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Benoit','STOCK'),(130,'e.grand','b560de936d0bfd071c3bcb59a0df0f4d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Emilie','GRAND'),(131,'j.caruso','67064a7f4660d470c948a3f12b3f0c55','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Jeanne','CARUSO'),(132,'s.melin','cff3352d1c98b2d19d0f72ee6eb87fde','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Sandra','MELIN'),(133,'m.chevalier','c96226f39a5456b54e99cd09f7dfab29','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Madeleine','CHEVALIER'),(135,'c.rosier','fa0cd0327175b5829777858dccc9d083','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Christophe','ROSIER'),(136,'n.carnet','87fabfc4249c601afe6a5eb7f69e91ca','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Nicole','CARNET'),(137,'g.chassigneux','a7c29a5b454c1a2196632fbc9360c774','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Guillaume','CHASSIGNEUX'),(138,'h.lacquement','16be2fc502c880bbf045a12cac880958','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Herve','LACQUEMENT'),(139,'n.ihle','c553d66a68b8d646746150365973c1f5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Nathanael','IHLE'),(140,'l.boigelot','0e4af0780860616f4e77fced32ed012a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Laurence','BOIGELOT'),(142,'d.lhenry','1c92da21f54d0dd139cea9fc06194af4','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Denis','LHENRY'),(143,'n.gerard','7e337bd971d5807de97c6c9ada03070a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Nicolas','GERARD'),(144,'s.guenot','c6e2becf63f8f6fef0877aca6fb0daba','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Sandrine','GUENOT'),(145,'b.rougetet','a5935002e931c9fa9ef42baaa8042917','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Bruno','ROUGETET'),(146,'c.ripplinger','46463f9e0282cff443637ba32b90fc19','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Christian','RIPPLINGER'),(147,'jm.campana','9c4c51be190390228c8bf2aac5cad0a7','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Jean-Marc','CAMPANA'),(148,'f.benfreha','0ae9ef2ac000c9378f772f4adef2775b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Ferouse','BENFREHA'),(149,'p.gonnet','994838e3b9025cdfb1529220c5796b45','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Patrick','GONNET'),(150,'qn.bernard','0fa20a6c1f9defa6cc051e1df098cb3a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Quentin','BERNARD'),(151,'a.bigot','7393a1b254526781aed8f230b95a3871','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Alain','BIGOT'),(152,'c.barret','ab6c28fd40b36a9b0bc625178ceaf9de','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Laval','Chloe','PERIN'),(153,'j.prestawsky','1e533a79ba14f95bf527c59d3b06c4f4','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Julien','PRESTAWSKY'),(154,'t.douguet','792b21c85b94ebf3e455a136f7526253','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Thomas','DOUGUET'),(155,'k.merini','2f71bd10bbb05d71f4b90ac03a6438f0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Karine','MERINI'),(156,'t.piquet','355a7828952a594b231c3990d588c1fc','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Tiphaine','PIQUET'),(157,'a.lefoulgoc','621a8d9491443165ab57ef191e70c1e7','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Anne','LE FOULGOC'),(158,'e.feutren','0ec16b043bb47d29d2054e5d7c27fea5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Enora','FEUTREN'),(159,'c.jeanneau','6a80a2d824454f2aca897b25e7392f45','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Christelle','JEANNEAU'),(160,'c.letoupin','fe4bf4f781bbf91f7c18af1f2e314125','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Carole','LETOUPIN'),(161,'a.carre','8496147172ee9b19f43aa31e6c529dcd','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Amelie','CARRE'),(162,'a.talbot','140cf4b86bb4a532c28ccdd2ec7cf3b2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Anthony','TALBOT'),(163,'l.scaviner','0ae7813eabce1af0b9b804e61b8c8eef','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Lydia','SCAVINER'),(164,'m.legall','08efbe80712b5c98c1cba1afbb5e0fe2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Mathieu','LE GALL'),(165,'c.hery','207f96f1def23fd3004c08c55bcda4de','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Charles','HERY'),(166,'noxpristi','5736401781187277b21eca300f6c0b71','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','International','NoxR','PRISTINA'),(168,'nox33l1','0033e1e846723aa1f1c1000a6c9c2e07','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Laval','NOX33 LIBRE1',''),(169,'openbee','94dc559b272af4031b6e0304df4fe104','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Generique','Open','BEE'),(171,'p.schaufelberger','9b63ed77d0f30e0f0220c12f5e56caa0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Woippy','Patrice','SCHAUFELBERGER'),(172,'g.siefert','6e8531fd07c8d686778d35383494ef62','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Gerald','SIEFERT'),(173,'p.nicolas','b63729dc8982276b01980d09ee0431c5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Patrick','NICOLAS'),(174,'o.moreau','394e80efec734c6327a7d8944346909b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Orianne','MOREAU'),(175,'s.michiels','fa269b8edcd08229ed4df52a89e77134','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Sebastien','MICHIELS'),(176,'f.lallemand','c3ec1a231951fe6c1cca1b047ced98e3','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Francois','LALLEMAND'),(177,'m.krieger','09af6cdddbbdc8d8143522fb478d16b9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Marion','KRIEGER'),(178,'d.holder','bfc4da5c02e6fb98a2d47bc15baffdfe','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Damien','HOLDER'),(179,'j.bernard','2f16202223fcf1ceb157f2d12048596d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Jonathan','BERNARD'),(180,'m.meslem','cf6978c785f55e416c052dcc062eeda8','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Miloud','MESLEM'),(182,'o.marsa','418b60e3516c8c0ee46844ce0dda7861','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Olivier','MARSA'),(183,'y.tabourdeau','c0119b099deef6d41e4e2228f277c833','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Yann','TABOURDEAU'),(184,'a.benabdellaoui','137d28d62052ca39a20a47120e1187fe','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Abdeslam','BENABDELLAOUI'),(185,'a.caproplacide','646cd7bc5565cecc80e4344a7902bd9b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','CAPRO-PLACIDE Azizah',''),(186,'c.paul','52f89e936895cf86387b88a23132c318','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Christine','PAUL'),(187,'e.hermann','a2b22a5057b17f287bea3d45803e96bf','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Emilie','HERMANN'),(188,'f.develay','b7856fba4cff88f91fee5a238c20b6c6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Franck','DEVELAY'),(189,'j.sularec','a04c278bf4cef71a29aca5805e7180dd','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Jerome','SULAREC'),(190,'v.richoffer','cc078a1d72fbd7b29d858b4d0465d9d5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Veronique','RICHOFFER'),(191,'m.veillon','86cb70ea7ee6eb4d7e47003c8926c965','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Mikael','VEILLON'),(192,'l.laville','f448cc8f4e135d331c4042c998ca41a5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Lucien','LAVILLE'),(193,'g.valy','8603947a36615ede52a58f201e95bd3b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Glen','VALY'),(194,'b.gandon','152cb1c33f71be984a941049c2f8c4d6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Bruno','GANDON'),(195,'s.lerouge','5aefcf8ac0e0fd9557a7890732beaea9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Sol','LEROUGE'),(197,'f.magnin','feaa094ab94d3e0ecd8e554f6cd602ca','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Brest','Florence','MAGNIN'),(198,'b.moraglia','537acb91cedd82f50fb10fdce0d2e379','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Externe','Bertrand','MORAGLIA'),(199,'s.lecoz','67a80394241b1463c51d0b64e9abf51c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Brest','Soizic','LE COZ'),(200,'m.daillet','a39a396d750df3c5dd1263b78cd229fb','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Brest','Morgan','DAILLET'),(201,'s.huellou','d362f6689914843fc3053d9bb3c62605','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Brest','Sebastien','HUELLOU'),(202,'t.stoll','3f34d8fa0328f299338e5e3b7325d805','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Thibault','STOLL'),(203,'p.ollu','717bfd9417c19cb97f2072d7e5d14fdb','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Brest','Pierre','OLLU'),(204,'d.liniger','8330855ee62b9a75904530b645a299c6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Brest','Daniel','LINIGER'),(206,'airbat','70b21c3c5455002a2ad46acabb7452db','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Generique','','AIRBAT'),(207,'x.debeauvois','99631d7eda069ae05a8d60d9c3c12cc0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Xavier','DEBEAUVOIS'),(208,'j.plenard','82ed527c25a0ff679072893f737d9123','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Jerome','PLENARD'),(210,'f.kleber','8076385449ac68200af498930e33fb18','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Frederic','KLEBER'),(211,'y.couach','a194a3b4fa2bbf1ad9662cd6d79af13f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Yannick','COUACH'),(212,'j.dupuy','7245c6e13dddf217f8b040a7131b9b36','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Jacques','DUPUY'),(213,'a.vallee','74a62fbb832c042b6ff8eb48f3a05f5d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Arnaud','VALLEE'),(214,'m.grosdidier','59c817acfa1c10be338a60c2b63af10f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Maxime','GROSDIDIER'),(215,'x.faligant','b7a0bc13ba8920c5f997ddbe3aecf2e3','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Xavier','FALIGANT'),(216,'j.goubin','9df32feaa7187385af86c7ac29fcd7ad','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Julien','GOUBIN'),(217,'nox.risks','18981295e827bdc59f9e674a4d511364','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','','NOX RISKS'),(218,'l.lemarechal','0a13d0eb0c7d204ab692840591e0e85f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Lionel','LEMARECHAL'),(219,'p.ramsey','916fa53a33da1a811a002970183b5cb3','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Peter','RAMSEY'),(220,'j.challam','9b8ae371ad6e0372dc55d5c93f403fa2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Julie','CHALLAM'),(221,'s.chesnel','6aafe9e3d51a0081da1ebf97ea00199a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','St','CHESNEL'),(222,'o.bosoni','8fca9ec60e60db942fcdeabd80001071','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Olivier','BOSONI'),(223,'e.kameni','a18082c408dc01a8219f055caf651f98','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Edmond','KAMENI'),(224,'nox61user','628b78df7694298ae2f02eed0508118e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','NOX61USER',''),(225,'f.morel','74af96084ec781566bdc32ce99d823e0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Girec','Fabien','MOREL'),(226,'i.robichon','2120fde7b25e7c78caf7a6d9aab6b10c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Girec','Isabelle','ROBICHON'),(227,'g.kersuzan','27e3f1050c4d6595f11f6374eb5b5d2d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Girec','Gwenael','KERSUZAN'),(228,'k.gravier','5bb9aba9cf232d263a84b57af037f51a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','K','GRAVIER'),(229,'a.gacem','951f1da69f2b7efdc16460c39c847149','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Alexia','GACEM'),(230,'j.lequeux','96f0ec8f6657fe4a306b338ca6e1470d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saint Malo','Jany','LEQUEUX'),(232,'s.smail','23b7300e03ff915293731b3a5872c089','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Sami','SMAIL'),(233,'g.toure','63fe2994c5e214a4341e5aba9575c0e3','a:11:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:12:\"ROLE_QUALITE\";i:10;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Georgina','TOURE'),(234,'c.dreyer','c9ecd5975505a625a8712a8e56440152','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Claude','DREYER'),(235,'m.busson','cbc59634b3799ba4e2e869332fcab430','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Marine','BUSSON'),(236,'p.bouenard','75101edd21d7f69756b4462a0ddb6a16','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Pierre','BOUENARD'),(237,'m.julienne','c4bc222419cb16851ad845faeb62a050','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Mathieu','JULIENNE'),(238,'nox65user','039c662f670e15b1f3692b9d077b1af6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','NOX65USER',''),(239,'Nox65scan','87832cf68efbabd454127634ecaedba2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Nox65scan',''),(240,'r.faverial','b8f19595b1becf6833603686c76f7b8a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Remi','FAVERIAL'),(241,'m.bourreau','0182efb26f987a77797b85f186d16dab','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Martin','BOURREAU'),(242,'s.lapierre','e9b024d6bd824c72236aad56d0e09a69','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Stephane','LAPIERRE'),(243,'s.bisserier','c16eff83838dcd2f876aac6d38c48eb5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Serge','BISSERIER'),(244,'j.andre','0936c3dbf762fded0c65cbe46358cc30','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saintes','Justine','ANDRE'),(245,'d.chagnaud','01677a8ba0065a098c9318c620433ef0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Damien','CHAGNAUD'),(246,'e.labrousse','12c8967f1c5ebd0cc9de733a95cbefcf','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Elodie','LABROUSSE'),(247,'jm.leduc','28b972e0c4169de49f1738ef7247eeb2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Jean-Marc','LEDUC'),(248,'m.palet','399a897730e7925107117401e0c53dbf','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','M','PALET'),(249,'s.aubron','64a9d54d0a3f6d110c649cc082c3f03e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saintes','Samuel','AUBRON'),(250,'b.deliat','5b80a305a35e395b5118d1062f037365','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saintes','Beatrice','DELIAT'),(251,'a.barraud','a8372409c49b623429cd18a841da15d4','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Anne','BARRAUD'),(252,'f.chiron','66d7fe91fd437b0ff48bf5e34ccd8eff','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Frederic','CHIRON'),(253,'prestataire-absys2','986e556707f97a52a31c73850ea4a1e3','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Externe','prestataire-absys2',''),(254,'mfpsoft','bba5e941a3bce91fc6a2e8211dae0f21','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Externe','mfpsoft',''),(255,'mfpsoft2','bd3ad33df750af143f527e8221674c01','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Externe','mfpsoft2',''),(256,'mfpsoft1','2b197641907d52f8235bab943bbc2fff','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Externe','mfpsoft1',''),(257,'prestataire-absys','998755eb9cfdb0764e99501ee2edb6a0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Externe','prestataire-absys',''),(258,'t.hellrigel','6115a574f86ceead1cc96032ef068ba1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','Thierry','HELLRIGEL'),(259,'m.jaunet','648a6dea35d4c6b2aa7316ca6c4b8a6b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Mathilde','JAUNET'),(260,'f.gabellone','39e32b91f0f23857e70b9e1698e0ff5f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Restauration','Fabrizio','GABELLONE'),(262,'a.forestier','e217451b62ebd8fdfcd5fe822680c733','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Am','FORESTIER'),(263,'m.bruneau','0955c874448a886b5b343f50d75c88ff','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Magalie','BRUNEAU'),(264,'al.meltier','a4575f371820935e72747a735120bb22','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Anne-Lise','MELTIER'),(265,'l.bouelou','a2015993e403837b4771b298e5db8e4f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Laetitia','BOUE LOU'),(266,'c.robillon','f49427132af28405541ea5306a2e68a0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','Christian','ROBILLON'),(267,'c.boinet','cbb6263fc85f5f6e8c7fc06cb17dd19f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','Catherine','BOINET'),(268,'e.by','f49e64c92182c5a4089f2c64766705ec','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Estelle','BY'),(269,'o.federspiel','28371eed3a9a600390ac071615c9c4d4','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Olivier','FEDERSPIEL'),(270,'c.chareil','4e3975bf85e9f00ed20881200334a2bf','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Cedrick','CHAREIL'),(271,'m.guerin','2fbe28dbce2600867fffa0a21be9999c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Marc','GUERIN'),(272,'b.mangin','7d46eb523269f3ebd264efdfb2e267c9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Brian','MANGIN'),(273,'nox69user','9706bd3f31939cca772af19c0f211c9c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','NOX69USER',''),(274,'s.fouques','f6a5aa51ea38f83f54c207403d4b15e4','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Sylvain','FOUQUES'),(275,'test1','258ceb76cdc2a543d256519d4dea449c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Test','test1',''),(277,'x.vabre','7b03a30498ddae4bf00465e0fbe944d7','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Xavier','VABRE'),(278,'d.breton','0be1b122a7181ca6dacec23a72ac986f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Dijon','Didier','BRETON'),(279,'s.delutre','ac844eea04f2eb5fc199052c9534c78f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Salvatore','DELUTRE'),(280,'p.lofferon','10f7e8b9b1c1aed610ad80a1435c350a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Pierre','LOFFERON'),(281,'j.breton','430daf33d7ba1c7226393e53f948637e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Jacques','BRETON'),(282,'l.vernier','12e893407409606d4ca35c8c5041f77b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Lionel','VERNIER'),(283,'e.besson','e6b372fcc4f24397436f0bd637649c10','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Emmanuel','BESSON'),(284,'g.fouillade','f9a304212b969293d1f00d0ab55dc3aa','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Gilles','FOUILLADE'),(285,'j.follea','594b5a86da10903b93a1d176a5eb46da','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Dijon','Julien','FOLLEA'),(286,'b.bobin','b3da6f3df9b56bbc0344e26501c5c69e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Benjamin','BOBIN'),(287,'m.szczepanska','51cf1cd8d314846e915721bce6aa4cae','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Dijon','Malgorzata','SZCZEPANSKA'),(288,'a.morisot','e89da82d5f7cf41a3a6becd152660c12','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Adrien','MORISOT'),(289,'a.duverne','b1a636bd7f76e479fb22d42a3d1e9451','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Agnes','DUVERNE'),(290,'a.jassoud','ac16f9354683c2d9a01b518fb46ca9ca','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','Audrey','JASSOUD'),(291,'m.donde','90d92815cf37fc19d02c89c0a1de8057','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Maxime','DONDE'),(292,'t.fleury','4eef2541c5b8aa651637854fa8e12794','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Thibault','FLEURY'),(293,'a.sauvageot','2b1f69a23e92eaaa19460db4bae9e6b9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Anthony','SAUVAGEOT'),(294,'jl.palin','3cf90a0e069d55a649b527ea5d968021','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecodiag','Jean-Luc','PALIN'),(295,'d.cavron','4dcac13831304e3b6cdf4a9688b4804d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecodiag','David','CAVRON'),(296,'t.keruzore','070c18a86d731051930f4819bee3e9d3','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecodiag','Thierry','KERUZORE'),(297,'nox63scan','b2ab992b02b1825de2843af82c927c71','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','nox63scan',''),(298,'nox63user','b7aff1adb195f009e3b292b38cb2aa54','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','NOX63USER',''),(299,'l.rojat','a76a2c003dcb19b664348990992c4238','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Laurence','ROJAT'),(300,'c.mirabel','20ebd00d8c20164327752e059f731138','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Corinne','MIRABEL'),(301,'d.jaimet','707fabe616ee2c47ca581d0460d5388b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Denis','JAIMET'),(302,'jp.baudy','51cd6a2f4fb831f305170a794ff12bc7','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','Jean-Paul','BAUDY'),(303,'b.robbe','6434281affdcbe58afc853cf959b5594','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saintes','Benjamin','ROBBE'),(304,'a.moreau','847b449d5a54d2c072eba3491f0dc139','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saintes','Aurelien','MOREAU'),(305,'t.maire','456241f1833a35085d183ca10fec36c1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saintes','Thibaut','MAIRE'),(306,'d.brosseau','eaf9afdc4764ee9aa6814c454336c426','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saintes','Dominique','BROSSEAU'),(307,'h.rabefarinotrona','53f34f0d00ae465417a804deca6806bc','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Hudson','RABEFARINOTRONA'),(308,'f.ferro','61dd549485e4804ac80560c878917cc3','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','Francis','FERRO'),(309,'a.rouabhia','e6194191fc752b5e18aeef792563a5cb','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Abderhaman','ROUABHIA'),(310,'h.ghabara','d30935aed05b999771f6863cb44263a4','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Hamza','GHABARA'),(313,'a.chautard','f29b3edb186b8a1828f6cf82b10fadec','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Arnaud','CHAUTARD'),(314,'jl.parmentier','45b762d202275425c734845decba63f6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Jean-Luc','PARMENTIER'),(315,'d.racouet','ace35f38ae91866296430f8b8378324f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Damien','RACOUET'),(316,'j.couret','20a34555d5bc66146060a7978f4b93fa','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','Julien','COURET'),(317,'g.germain','7fe4db81a6720ae4ee2f6e9665f02745','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','Guillaume','GERMAIN'),(318,'d.chartoire','8fa826efdfb37a02741f7a394f25fcff','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','David','CHARTOIRE'),(319,'g.eskandar','84493fc9ad984b80c8ed14bf7d00a55a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','Guillaume','ESKANDAR'),(320,'c.andanson','1f154506af3d7ae7b2ef9a46e826445d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','Claudine','ANDANSON'),(321,'temporaire','246b6bb234fae20b0b22f81251c3d948','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Temporaire','Temporaire',''),(322,'c.guiet','f2cd588ff8f92e35fe40471b9357b20a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Camille','GUIET'),(323,'y.noblanc','d399052ed0783ef7f3e5fe9b8a91f92c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Yann','NOBLANC'),(324,'t.sobczak','e7d7f3feb997ec60025d54b8a8a9fec2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','Thierry','SOBCZAK'),(325,'d.badkouf','ef199142e561cf7883b6d05de5aa5767','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Djaffer','BADKOUF'),(326,'f.delapparent','adff435d6b63a66ee9d644b3438128a7','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Fabien','DE LAPPARENT'),(327,'v.salcuni','75ef41aacb6c54f40c3d5be6199d0f09','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Valentina','SALCUNI'),(328,'n.jago','a513f0b8840d0466c0ccbe78eaf9899d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','Nathalie','JAGO'),(329,'r.alexandru','73eeb40178c16fe067dfa6ca85f5c901','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Roumanie','Rodica','ALEXANDRU'),(330,'l.braniste','3a797cb072c0e9fb5447ee98176898a1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Roumanie','Lavinia','BRANISTE'),(331,'f.balon','37672094442c3f113014f140dc6bba39','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Franck','BALON'),(332,'supervision','e30f0db209c124557e7e38600a46d73f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Supervision r',''),(333,'robot','4ea2127b8dd2901bd4f9041682c7bf42','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Robot',''),(334,'p.dubois','57a30f7af57ab303097d70b2bc93b807','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Patrick','DUBOIS'),(335,'s.hachemane','7e635d6484f23abfcdff1134897173c3','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecodiag','Samir','HACHEMANE'),(336,'Nox30user','aa0fecf884471e5ccb703a32b07f0ea5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Nox30user',''),(337,'p.lebrun','67f6427ace6fdea9f9e51b3f5e79fc04','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Brest','Philippe','LEBRUN'),(338,'e.fremont','8aaaa15026004198e3a996bf5544eecd','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Brest','Emile','FREMONT'),(339,'p.gendron','65351ad956abb7ac738893ae116ffa8e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Pascal','GENDRON'),(340,'r.ballureau','1ade7246dd50f7ecee7532d562e0c4bd','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Renald','BALLUREAU'),(341,'s.maindron','01d33251344b38070710cb96791124e6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Sophie','MAINDON'),(342,'s.moron','f0f8dafe1590672f8820174420c3e614','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Sophie','MORON'),(343,'t.schreckenberger','639be7d59f8ee2c7e9dbedcdfd1f1498','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Tony','SCHRECKENBERGER'),(344,'v.quettier','8dd09492cadd14de77c50dd5d7bf77ce','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Vincent','QUETTIER'),(345,'c.hamelin','be2ce6dc6eef521ae5f6050b7f10e9a1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','C','HAMELIN'),(346,'m.leborgne','24c3c1d0bc0b2333c0b676bceecfec28','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Marion','LE BORGNE'),(347,'j.grenet','ab7ddea2ee1557af286d3b4edcdd7ac7','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Julian','GRENET'),(348,'f.emmery','6fe5f539b0b24233481a98ce075b9c68','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Fred','EMMERY'),(349,'s.girardeau','2994095d445f17f4582bdf2f7bfc5d7c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','St','GIRARDEAU'),(350,'n.rigaudeau','e1e025626a3c3ed4b3a729b38a91daee','a:12:{i:0;s:10:\"ROLE_ADMIN\";i:1;s:15:\"ROLE_REFERENCES\";i:2;s:0:\"\";i:3;s:15:\"ROLE_PROCEDURES\";i:4;s:18:\"ROLE_COMMUNICATION\";i:5;s:8:\"ROLE_FAQ\";i:6;s:10:\"ROLE_LIENS\";i:7;s:7:\"ROLE_CE\";i:8;s:10:\"ROLE_CHSCT\";i:9;s:7:\"ROLE_RH\";i:10;s:0:\"\";i:11;s:9:\"ROLE_USER\";}',0,'default','Siège','Nicolas','RIGAUDEAU'),(351,'m.gaillot','57c625d1404443844a97715664e82cd8','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','Michele','GAILLOT'),(352,'a.gachot','ce7f6ee5b9917f01f932678419a875ba','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Aurore','GACHOT'),(353,'e.dorville','0a691f2e6757f54f147a9ac04b34c9fe','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','El','DORVILLE'),(354,'d.hoff','2223bf834c4d3c819289e4fc0ed79a89','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','Didier','HOFF'),(355,'m.colombet','96281669f86bcc28cedc850b232bb017','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Mathieu','COLOMBET'),(356,'m.ly','a96351682efebe39e42da761b5103093','a:11:{i:0;s:10:\"ROLE_ADMIN\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:9:\"ROLE_USER\";}',0,'default','Siège','Marie','LY'),(357,'s.dahini','c9baef179a986c8180f1fc42fbf5009c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Skander','DAHINI'),(358,'l.bounoure','fee9bc66e9d1c3827405c066ffdc07d7','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Loubna','BOUNOURE'),(359,'s.mouchetta','b74d69ade12b06d5969f6249e544907d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Saad','MOUCHETTA'),(360,'p.tanel','d7a752b0d49d651d387370281d029ee5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Pierre','TANEL'),(362,'p.maso','ff43a48311d62ce43fce46c0184fb41c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Paolo','MASO'),(363,'r.parmentier','1a75c530c34a156b7a6ebf889e09aa20','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','Romain','PARMENTIER'),(364,'s.lamaziere','5c737ab7954b14a40f96acabc05c1f31','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Samuel','LAMAZIERE'),(365,'m.martiny','e55256659657fd39d77abc7006edf4e6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Woippy','Mathieu','MARTINY'),(366,'f.landais','72836e64a95219c52b109bb1fb521d42','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Flavy','LANDAIS'),(367,'a.nahuet','8980319869a8d48eb24ec6c04abcaaea','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Arnaud','NAHUET'),(368,'t.gaillard','d30432e49d17459e3d2c74fc29d6e7e2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Thomas','GAILLARD'),(369,'m.galluet','1f083e3587921b927ee3ea2a8c615b3d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Woippy','Marc','GALLUET'),(370,'j.grondain','62228304b2ba7d87bf13be53262fddba','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','J','GRONDAIN'),(371,'a.rabasse','e8e9b302ac1b026bb466395b06259946','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Albert','RABASSE'),(372,'g.lecoeur','f38ec23a7dab07dc9f195cda69c644a3','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecuisses','Guillaume','LECOEUR'),(373,'i.dauchin','759b81ae57b4c1a4efa97c3c1373837f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Woippy','Isabelle','DAUCHIN'),(374,'b.gauthier','b616408ea9719878fae54cfbc943abd1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Woippy','Brice','GAUTHIER'),(375,'prestataire-rh','9f42b0c0a14925861924b6ff09a73021','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Externe','Prestataire','RH'),(376,'X\'6e756dc3a97269736174696f6e\'','06ec3502b17d83afb40def1195858013','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Generique','Num',''),(377,'d.pasquet','3393db231bbf50b79b7a6b22c9cef28d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saintes','Dominique','PASQUET'),(378,'m.lebastard','6850e47ac1da1b113ddb287bfcaab901','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Marie','LEBASTARD'),(379,'r.penido','5c3eea544e32a56c8dfcacdfcf038435','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','Rogerio','PENIDO'),(380,'a.guillenlobo','716d364a46892d65cafa087257bb2b26','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Ana','GUILLEN LOBO'),(381,'j.lhermitte','b991506bd60f15a366eafea2e04b352d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Julien','LHERMITTE'),(382,'d.eon','d2a5e2748b513e11b9d9fca2e4106836','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Damien','EON'),(383,'l.morisseau','2871831f689f14fdb4fd603355c02603','a:11:{i:0;s:10:\"ROLE_ADMIN\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:9:\"ROLE_USER\";}',0,'default','Siège','Laurent','MORISSEAU'),(385,'a.kenana','d4cda0c7098642ddbb36ccb293c05379','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Abdel','KENANA'),(386,'scan','f20dd9eec1138c0d5434fe500825685f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Generique','scan',''),(387,'j.boiselet','2ca44247bf4e7a1d29dd8d8b624e621e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Woippy','Joseph','BOISELET'),(388,'noxbuca','23f1892d9c74b79c6361c71dccbe6553','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','International','NoxR','BUCAREST'),(391,'c.thureau','28229b2459e1ef0f81ef514686311b9a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','C','THUREAU'),(392,'test2','6170383e91560a0695526314153e9fc8','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Test','test2',''),(393,'s.halim','039edaf6fc20821283798e83d8104ed0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Siryne','HALIM'),(394,'c.quevreux','36091af08a71b7c28de87fd212a64192','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Charles','QUEVREUX'),(395,'save.bdd','91292a51c4dce28c1cf27681f2b2c287','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Generique','Sauvegarde','BDD'),(396,'f.barbier','99a5aa9416f37093931b184e5047f770','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Florence','BARBIER'),(397,'jp.neveux','8f85cdf13fa5b554163f2b165093911f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Woippy','Jean-Philippe','NEVEUX'),(398,'m.signor','43f73fd97a65009dd2f57ff8acf3ea1d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Maya','SIGNOR'),(399,'m.niang','d48868a8f7b4532b7c4c2c7b12423df9','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Momar','NIANG'),(400,'a.zahir','264d1e0d061d219f13d0a90713b124d6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Ecodiag','A','ZAHIR'),(401,'p.drut','0ca77e15014ad2012dd14128b6a202fe','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Philippe','DRUT'),(402,'a.claudel','c750943cf03691d6d24260e3ac5ccb61','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Arnaud','CLAUDEL'),(403,'reportserveur','2c8a681dd95a80a80df5f0782d6d220b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Report Serveur',''),(404,'f.gomes','945492fee3c0509fe3b751da73463329','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Floris','GOMES'),(405,'t.pagnard','2c8dfa39f02309a1b06cca4003fe8ca6','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Th','PAGNARD'),(406,'j.chanas','612122ac4d417b6ccc10f8c791dd5bf5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Johann','CHANAS'),(407,'a.audoire','4a62642fc97b1a2b88a2f5a66a6f9646','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Annabelle','AUDOIRE'),(408,'q.gravier','44adbee0902b88d885d2c283648533fe','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Quentin','GRAVIER'),(409,'b.divard','588a78819417aaddd0ee5c455c902b68','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Bilitis','DIVARD'),(410,'z.elkharraz','9f03b8fb28ebfb55b3c8195939880052','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Dijon','Zineb','EL KHARRAZ'),(411,'v.lemay','7ed8e42536702128e5e9ee7e87c5cfc0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Vanessa','LE MAY'),(412,'g.petitot','94c3db62a51fec224f53abd6bc9e85f1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Guillaume','PETITOT'),(413,'r.guillot','f7c913e49a336fc69ac9f7ec1d41312e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Robin','GUILLOT'),(415,'project','edfe1e75212e92b685445636c3248f1d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Microsoft Project',''),(416,'jb.chaput','9900f56aadb009e48b1b53cfe1ba5003','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Woippy','Jean-Baptiste','CHAPUT'),(419,'m.deandrade','d022d3fb5a3e5577f16e1f91f6474373','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Micka','DE ANDRADE'),(420,'t.monteiro','bb238bb31efd9ea2b1e0719f9151e0d8','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Tony','MONTEIRO'),(422,'m.courtois','d5c29db46a6c4f0fce3f7febfb35ce53','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Manuella','COURTOIS BERNARD'),(423,'a.perraud','31276943308865cb6ca3fc38dd5c6a7c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Restauration','Amandine','PERRAUD'),(425,'c.aurousseau','61963140e5f5a333bacf85627a38a63a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Carine','AUROUSSEAU'),(426,'a.tarrit','859a38bb7e6e75f95b5ab591ed182659','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','Aur','TARRIT'),(427,'s.joncour','f1465de43b4d4d6a18611101ed26ce9a','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Sophie','JONCOUR'),(428,'landesk','5e3e774e5873629a206acfb0b53100d0','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Landesk',''),(429,'test3','30a156d1b6738cb6538c6164f7f6401e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Test','test3',''),(431,'t.besson','4d9d680e8db6728b7ef0afc86ca7837b','a:12:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:9:\"ROLE_USER\";}',0,'default','Siège','Tristan','BESSON'),(433,'a.monperrus','bc55b3f26fd1b69956ca12159074045f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Antoine','MONPERRUS'),(434,'t.genly','4e8260bad1a35e49bae7c76411147536','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Ted','GENLY'),(435,'k.gaboriau','970fe8e5118a46f9b615d1852a3d872c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','Katia','GABORIAU'),(436,'c.buffet','cf255271f165c066a1e7f9d3b87e9956','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Biot','C','BUFFET'),(437,'s.rizet','49702186fb4bdc9d68c81eaec3ad2798','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Simon','RIZET'),(438,'p.bougaret','1cb772f382740bef385c43519566142b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Clermont','Patricia','BOUGARET'),(439,'l.tulane','fa16bd3ce8adc49c7600457dafbd333d','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Luc','TULANE'),(440,'b.fuhlhaber','4213ae1a2fb4e5002d943e0eb0d90397','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Baptiste','FUHLHABER'),(441,'c.furlan','8eb9a41d93d90ccaf5395fc55de69996','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Caroline','FURLAN'),(442,'a.bachesais','ba7a42693a97014aeb92c5328627da7f','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Alg','Adila','BACHESAIS'),(443,'r.sperandio','76baddb2ee2a4599b7e01d3cee39926b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','R','SPERANDIO'),(444,'p.lopezpinto','491a6dff35bddbc38ec0c48108fc3e06','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Cote d\'Ivoire','Patrick','LOPEZ PINTO'),(445,'i.martin','ca998578d0372ee4ef953420c3510197','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Rennes','Isabelle','MARTIN'),(446,'c.laplassotte','4229d59aa46a3d1e749c29c48ebb1e0b','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Claire','LAPLASSOTTE'),(447,'superadmin','02073a542eb5c39c0a7f8ec7bdd494a8','a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}',1,'superadmin','Jakku','Super','Admin'),(449,'m.pages','cf9c27402eeccb470d14e999bee98927','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','M','PAGES'),(450,'n.luong','d68288cf923be361d8a78b8bfc8d0f2c','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saintes','Ngo Hoang Oanh','LUONG'),(451,'m.vinet','e30bbc5e350a7668d9bdfd4bd0487033','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Lorient','Mathieu','VINET'),(453,'n.delabroyallard','7b27c217ac3faad694b16e870056e2e5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Paris','Nathan','DELABROY ALLARD'),(454,'g.chelminiak','b061f1a1a490ab5a17903c4176d835fb','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Guillaume','CHELMINIAK'),(455,'c.schwarz','7fa72b632af1cfb5448b69123c3c3df4','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Clara','SCHWARZ'),(456,'d.guegan','a29462e1281a2e68806f291fb0b07dbc','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Siège','Delphine','GUEGAN'),(457,'AdminUD','b8355ef84b9d70b3f29fb69a8e21d5e2','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Generique','Admin','UD'),(458,'g.morel','be7bfd42735df0aeb5bb88851c15d9d1','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','G','MOREL'),(459,'s.chatain','c45e34ae846986e59d2a75be50925dd5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Saintes','Samuel','CHATAIN'),(460,'ud_test_user','b3dd990d126d75d1e9a62f34484a2410','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','_Test','','UD TEST'),(461,'ap.dronet','b579a7564237c6c41945431c8452692e','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Andr','DRONET'),(462,'d.eps','0eaae3697f4b28359764a4e2cc7fd9ca','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Delphine','EPS'),(463,'f.testa','d5cf20ad58be5b808be0dda5449172de','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Beaune','Fabrice','TESTA'),(464,'l.piot','0547c28cb86dc0115b1812eeb6f6ab60','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Laura','PIOT'),(465,'d.pintor','f53193ad1cd7ccd28f45da8113fe20aa','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Dja\'far','PINTOR'),(466,'b.lebrun','6f4ea48b29532c8efd83509ae32cb1fa','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Nantes','Blandine','LE BRUN'),(467,'s.pedra','03c414b7ca096e20eda4943f43ba6559','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Brest','Steven','PEDRA'),(468,'n.bouscaud','45375bf9a674743aff553ba1a26dbaf5','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Boulogne','Nicolas','BOUSCAUD'),(469,'f.sling','cab98c94c72e7ffa1bd4274a4961f113','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Angouleme','Fran','SLING'),(470,'m.richard','44cdd983033e7b2a75cf15703b134326','a:1:{i:0;s:9:\"ROLE_USER\";}',0,'default','Bron','Matthieu','RICHARD');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-04  8:00:02
