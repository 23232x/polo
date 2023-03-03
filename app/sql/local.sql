-- MySQL dump 10.13  Distrib 5.7.28, for linux-glibc2.12 (x86_64)
--
-- Host: localhost    Database: local
-- ------------------------------------------------------
-- Server version	5.7.28

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
-- Table structure for table `wp_commentmeta`
--

DROP TABLE IF EXISTS `wp_commentmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_commentmeta`
--

LOCK TABLES `wp_commentmeta` WRITE;
/*!40000 ALTER TABLE `wp_commentmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_commentmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_comments`
--

DROP TABLE IF EXISTS `wp_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_comments`
--

LOCK TABLES `wp_comments` WRITE;
/*!40000 ALTER TABLE `wp_comments` DISABLE KEYS */;
INSERT INTO `wp_comments` VALUES (1,1,'A WordPress Commenter','wapuu@wordpress.example','https://wordpress.org/','','2023-02-06 16:01:22','2023-02-06 16:01:22','Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://en.gravatar.com/\">Gravatar</a>.',0,'post-trashed','','comment',0,0);
/*!40000 ALTER TABLE `wp_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_links`
--

DROP TABLE IF EXISTS `wp_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_links`
--

LOCK TABLES `wp_links` WRITE;
/*!40000 ALTER TABLE `wp_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_options`
--

DROP TABLE IF EXISTS `wp_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`),
  KEY `autoload` (`autoload`)
) ENGINE=InnoDB AUTO_INCREMENT=1692 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_options`
--

LOCK TABLES `wp_options` WRITE;
/*!40000 ALTER TABLE `wp_options` DISABLE KEYS */;
INSERT INTO `wp_options` VALUES (1,'siteurl','http://localhost:10014','yes');
INSERT INTO `wp_options` VALUES (2,'home','http://localhost:10014','yes');
INSERT INTO `wp_options` VALUES (3,'blogname','polo','yes');
INSERT INTO `wp_options` VALUES (4,'blogdescription','','yes');
INSERT INTO `wp_options` VALUES (5,'users_can_register','0','yes');
INSERT INTO `wp_options` VALUES (6,'admin_email','23232x@gmail.com','yes');
INSERT INTO `wp_options` VALUES (7,'start_of_week','1','yes');
INSERT INTO `wp_options` VALUES (8,'use_balanceTags','0','yes');
INSERT INTO `wp_options` VALUES (9,'use_smilies','1','yes');
INSERT INTO `wp_options` VALUES (10,'require_name_email','1','yes');
INSERT INTO `wp_options` VALUES (11,'comments_notify','1','yes');
INSERT INTO `wp_options` VALUES (12,'posts_per_rss','10','yes');
INSERT INTO `wp_options` VALUES (13,'rss_use_excerpt','0','yes');
INSERT INTO `wp_options` VALUES (14,'mailserver_url','mail.example.com','yes');
INSERT INTO `wp_options` VALUES (15,'mailserver_login','login@example.com','yes');
INSERT INTO `wp_options` VALUES (16,'mailserver_pass','password','yes');
INSERT INTO `wp_options` VALUES (17,'mailserver_port','110','yes');
INSERT INTO `wp_options` VALUES (18,'default_category','1','yes');
INSERT INTO `wp_options` VALUES (19,'default_comment_status','open','yes');
INSERT INTO `wp_options` VALUES (20,'default_ping_status','open','yes');
INSERT INTO `wp_options` VALUES (21,'default_pingback_flag','1','yes');
INSERT INTO `wp_options` VALUES (22,'posts_per_page','10','yes');
INSERT INTO `wp_options` VALUES (23,'date_format','F j, Y','yes');
INSERT INTO `wp_options` VALUES (24,'time_format','g:i a','yes');
INSERT INTO `wp_options` VALUES (25,'links_updated_date_format','F j, Y g:i a','yes');
INSERT INTO `wp_options` VALUES (26,'comment_moderation','0','yes');
INSERT INTO `wp_options` VALUES (27,'moderation_notify','1','yes');
INSERT INTO `wp_options` VALUES (28,'permalink_structure','/%postname%/','yes');
INSERT INTO `wp_options` VALUES (29,'rewrite_rules','a:94:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:13:\"favicon\\.ico$\";s:19:\"index.php?favicon=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:38:\"index.php?&page_id=8&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\"[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"([^/]+)/embed/?$\";s:37:\"index.php?name=$matches[1]&embed=true\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:24:\"([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:22:\"[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";}','yes');
INSERT INTO `wp_options` VALUES (30,'hack_file','0','yes');
INSERT INTO `wp_options` VALUES (31,'blog_charset','UTF-8','yes');
INSERT INTO `wp_options` VALUES (32,'moderation_keys','','no');
INSERT INTO `wp_options` VALUES (33,'active_plugins','a:2:{i:0;s:30:\"advanced-custom-fields/acf.php\";i:1;s:39:\"disable-gutenberg/disable-gutenberg.php\";}','yes');
INSERT INTO `wp_options` VALUES (34,'category_base','','yes');
INSERT INTO `wp_options` VALUES (35,'ping_sites','http://rpc.pingomatic.com/','yes');
INSERT INTO `wp_options` VALUES (36,'comment_max_links','2','yes');
INSERT INTO `wp_options` VALUES (37,'gmt_offset','0','yes');
INSERT INTO `wp_options` VALUES (38,'default_email_category','1','yes');
INSERT INTO `wp_options` VALUES (39,'recently_edited','','no');
INSERT INTO `wp_options` VALUES (40,'template','polouabsapiranga','yes');
INSERT INTO `wp_options` VALUES (41,'stylesheet','polouabsapiranga','yes');
INSERT INTO `wp_options` VALUES (42,'comment_registration','0','yes');
INSERT INTO `wp_options` VALUES (43,'html_type','text/html','yes');
INSERT INTO `wp_options` VALUES (44,'use_trackback','0','yes');
INSERT INTO `wp_options` VALUES (45,'default_role','subscriber','yes');
INSERT INTO `wp_options` VALUES (46,'db_version','53496','yes');
INSERT INTO `wp_options` VALUES (47,'uploads_use_yearmonth_folders','1','yes');
INSERT INTO `wp_options` VALUES (48,'upload_path','','yes');
INSERT INTO `wp_options` VALUES (49,'blog_public','1','yes');
INSERT INTO `wp_options` VALUES (50,'default_link_category','2','yes');
INSERT INTO `wp_options` VALUES (51,'show_on_front','page','yes');
INSERT INTO `wp_options` VALUES (52,'tag_base','','yes');
INSERT INTO `wp_options` VALUES (53,'show_avatars','1','yes');
INSERT INTO `wp_options` VALUES (54,'avatar_rating','G','yes');
INSERT INTO `wp_options` VALUES (55,'upload_url_path','','yes');
INSERT INTO `wp_options` VALUES (56,'thumbnail_size_w','150','yes');
INSERT INTO `wp_options` VALUES (57,'thumbnail_size_h','150','yes');
INSERT INTO `wp_options` VALUES (58,'thumbnail_crop','1','yes');
INSERT INTO `wp_options` VALUES (59,'medium_size_w','300','yes');
INSERT INTO `wp_options` VALUES (60,'medium_size_h','300','yes');
INSERT INTO `wp_options` VALUES (61,'avatar_default','mystery','yes');
INSERT INTO `wp_options` VALUES (62,'large_size_w','1024','yes');
INSERT INTO `wp_options` VALUES (63,'large_size_h','1024','yes');
INSERT INTO `wp_options` VALUES (64,'image_default_link_type','none','yes');
INSERT INTO `wp_options` VALUES (65,'image_default_size','','yes');
INSERT INTO `wp_options` VALUES (66,'image_default_align','','yes');
INSERT INTO `wp_options` VALUES (67,'close_comments_for_old_posts','0','yes');
INSERT INTO `wp_options` VALUES (68,'close_comments_days_old','14','yes');
INSERT INTO `wp_options` VALUES (69,'thread_comments','1','yes');
INSERT INTO `wp_options` VALUES (70,'thread_comments_depth','5','yes');
INSERT INTO `wp_options` VALUES (71,'page_comments','0','yes');
INSERT INTO `wp_options` VALUES (72,'comments_per_page','50','yes');
INSERT INTO `wp_options` VALUES (73,'default_comments_page','newest','yes');
INSERT INTO `wp_options` VALUES (74,'comment_order','asc','yes');
INSERT INTO `wp_options` VALUES (75,'sticky_posts','a:0:{}','yes');
INSERT INTO `wp_options` VALUES (76,'widget_categories','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (77,'widget_text','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (78,'widget_rss','a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (79,'uninstall_plugins','a:0:{}','no');
INSERT INTO `wp_options` VALUES (80,'timezone_string','','yes');
INSERT INTO `wp_options` VALUES (81,'page_for_posts','128','yes');
INSERT INTO `wp_options` VALUES (82,'page_on_front','8','yes');
INSERT INTO `wp_options` VALUES (83,'default_post_format','0','yes');
INSERT INTO `wp_options` VALUES (84,'link_manager_enabled','0','yes');
INSERT INTO `wp_options` VALUES (85,'finished_splitting_shared_terms','1','yes');
INSERT INTO `wp_options` VALUES (86,'site_icon','0','yes');
INSERT INTO `wp_options` VALUES (87,'medium_large_size_w','768','yes');
INSERT INTO `wp_options` VALUES (88,'medium_large_size_h','0','yes');
INSERT INTO `wp_options` VALUES (89,'wp_page_for_privacy_policy','3','yes');
INSERT INTO `wp_options` VALUES (90,'show_comments_cookies_opt_in','1','yes');
INSERT INTO `wp_options` VALUES (91,'admin_email_lifespan','1691251282','yes');
INSERT INTO `wp_options` VALUES (92,'disallowed_keys','','no');
INSERT INTO `wp_options` VALUES (93,'comment_previously_approved','1','yes');
INSERT INTO `wp_options` VALUES (94,'auto_plugin_theme_update_emails','a:0:{}','no');
INSERT INTO `wp_options` VALUES (95,'auto_update_core_dev','enabled','yes');
INSERT INTO `wp_options` VALUES (96,'auto_update_core_minor','enabled','yes');
INSERT INTO `wp_options` VALUES (97,'auto_update_core_major','enabled','yes');
INSERT INTO `wp_options` VALUES (98,'wp_force_deactivated_plugins','a:0:{}','yes');
INSERT INTO `wp_options` VALUES (99,'initial_db_version','53496','yes');
INSERT INTO `wp_options` VALUES (100,'wp_user_roles','a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}','yes');
INSERT INTO `wp_options` VALUES (101,'fresh_site','0','yes');
INSERT INTO `wp_options` VALUES (102,'user_count','1','no');
INSERT INTO `wp_options` VALUES (103,'widget_block','a:6:{i:2;a:1:{s:7:\"content\";s:19:\"<!-- wp:search /-->\";}i:3;a:1:{s:7:\"content\";s:154:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Recent Posts</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->\";}i:4;a:1:{s:7:\"content\";s:227:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Recent Comments</h2><!-- /wp:heading --><!-- wp:latest-comments {\"displayAvatar\":false,\"displayDate\":false,\"displayExcerpt\":false} /--></div><!-- /wp:group -->\";}i:5;a:1:{s:7:\"content\";s:146:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Archives</h2><!-- /wp:heading --><!-- wp:archives /--></div><!-- /wp:group -->\";}i:6;a:1:{s:7:\"content\";s:150:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Categories</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->\";}s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (104,'sidebars_widgets','a:2:{s:19:\"wp_inactive_widgets\";a:5:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";i:3;s:7:\"block-5\";i:4;s:7:\"block-6\";}s:13:\"array_version\";i:3;}','yes');
INSERT INTO `wp_options` VALUES (105,'cron','a:9:{i:1677862882;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1677863052;a:1:{s:18:\"wp_https_detection\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1677902482;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1677902636;a:1:{s:21:\"wp_update_user_counts\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1677945682;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1677945836;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1677945837;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1678204882;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}','yes');
INSERT INTO `wp_options` VALUES (106,'widget_pages','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (107,'widget_calendar','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (108,'widget_archives','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (109,'widget_media_audio','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (110,'widget_media_image','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (111,'widget_media_gallery','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (112,'widget_media_video','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (113,'widget_meta','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (114,'widget_search','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (115,'nonce_key','BG0hUBetR*{bEff_A_.z=l=aj59i$iJcW(^uhVAH4J;8`mQP]{Je3^!FQ,Rj1Z*Y','no');
INSERT INTO `wp_options` VALUES (116,'nonce_salt','H&>ej=<b}4.5o}V(tl`OHjlHoiVMrSD{U!`PM0Ky~kORM:,6x<B}Ax({<yC!(EO|','no');
INSERT INTO `wp_options` VALUES (117,'widget_recent-posts','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (118,'widget_recent-comments','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (119,'widget_tag_cloud','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (120,'widget_nav_menu','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (121,'widget_custom_html','a:1:{s:12:\"_multiwidget\";i:1;}','yes');
INSERT INTO `wp_options` VALUES (123,'recovery_keys','a:0:{}','yes');
INSERT INTO `wp_options` VALUES (124,'https_detection_errors','a:1:{s:20:\"https_request_failed\";a:1:{i:0;s:21:\"HTTPS request failed.\";}}','yes');
INSERT INTO `wp_options` VALUES (125,'_site_transient_update_core','O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-6.1.1.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-6.1.1.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-6.1.1-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-6.1.1-new-bundled.zip\";s:7:\"partial\";s:0:\"\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"6.1.1\";s:7:\"version\";s:5:\"6.1.1\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"6.1\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1677859398;s:15:\"version_checked\";s:5:\"6.1.1\";s:12:\"translations\";a:0:{}}','no');
INSERT INTO `wp_options` VALUES (131,'auth_key','n+b_GS6xQ/8Nm+2B(3a4N}*[tjxl/hTy_qo3uB,Xtx&Sh9I/mg/Cyneqg1P]~Ie_','no');
INSERT INTO `wp_options` VALUES (132,'auth_salt',')*9R*rYx95}tuWhhQhjMIiI{uc$$`9|mhm-M639xS#+a:(29 #?9?YB]]{lv9jyz','no');
INSERT INTO `wp_options` VALUES (133,'logged_in_key','~]fR#Uoxgb]C5f;.iAN~,.01ztDgl//Ou~DnqJ7.s#R~yYxPLk(xkO.(M@M)p^|X','no');
INSERT INTO `wp_options` VALUES (134,'logged_in_salt','m/?%!oJZ<6_,z&besb1}/?l2*Qr#rvQl7ol9vZPDetflGFn?gW%$GpX?g`w)|zk6','no');
INSERT INTO `wp_options` VALUES (140,'can_compress_scripts','0','no');
INSERT INTO `wp_options` VALUES (153,'theme_mods_twentytwentythree','a:1:{s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1675699448;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";}s:9:\"sidebar-2\";a:2:{i:0;s:7:\"block-5\";i:1;s:7:\"block-6\";}}}}','yes');
INSERT INTO `wp_options` VALUES (154,'current_theme','Polo UAB Sapiranga','yes');
INSERT INTO `wp_options` VALUES (155,'theme_mods_polouabsapiranga','a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;}','yes');
INSERT INTO `wp_options` VALUES (156,'theme_switched','','yes');
INSERT INTO `wp_options` VALUES (161,'finished_updating_comment_type','1','yes');
INSERT INTO `wp_options` VALUES (170,'recently_activated','a:0:{}','yes');
INSERT INTO `wp_options` VALUES (189,'acf_version','6.0.7','yes');
INSERT INTO `wp_options` VALUES (210,'wp_calendar_block_has_published_posts','','yes');
INSERT INTO `wp_options` VALUES (313,'_site_transient_update_themes','O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1677859399;s:7:\"checked\";a:1:{s:16:\"polouabsapiranga\";s:3:\"1.0\";}s:8:\"response\";a:0:{}s:9:\"no_update\";a:0:{}s:12:\"translations\";a:0:{}}','no');
INSERT INTO `wp_options` VALUES (318,'_transient_health-check-site-status-result','{\"good\":13,\"recommended\":4,\"critical\":1}','yes');
INSERT INTO `wp_options` VALUES (319,'_transient_dirsize_cache','a:316:{s:64:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/maint\";i:7643;s:66:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/network\";i:124260;s:63:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/user\";i:3418;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/css/colors/modern\";i:78662;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/css/colors/ocean\";i:75743;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/css/colors/sunrise\";i:79029;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/css/colors/coffee\";i:76514;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/css/colors/ectoplasm\";i:78291;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/css/colors/light\";i:78804;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/css/colors/midnight\";i:79071;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/css/colors/blue\";i:78232;s:69:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/css/colors\";i:647958;s:62:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/css\";i:2513909;s:69:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/js/widgets\";i:139382;s:61:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/js\";i:1907419;s:67:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/includes\";i:2938570;s:65:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin/images\";i:415159;s:58:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-admin\";i:8817398;s:68:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/upgrade\";i:0;s:60:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content\";i:28;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sitemaps/providers\";i:16711;s:70:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sitemaps\";i:46823;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/rest-api/endpoints\";i:732712;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/rest-api/search\";i:15903;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/rest-api/fields\";i:22340;s:70:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/rest-api\";i:857772;s:65:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/ID3\";i:1155209;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/latest-posts\";i:17123;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-content\";i:801;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/paragraph\";i:10751;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/audio\";i:12352;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/spacer\";i:10135;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/table\";i:38192;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/image\";i:35645;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/buttons\";i:17559;s:85:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/query-no-results\";i:845;s:87:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-comments-form\";i:15204;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/embed\";i:19828;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/group\";i:15854;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/text-columns\";i:8990;s:73:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/list\";i:4896;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/gallery\";i:85707;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-author-biography\";i:922;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/social-links\";i:57756;s:72:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/rss\";i:11940;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/query\";i:9858;s:85:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comment-template\";i:5686;s:97:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comments-pagination-previous\";i:969;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/missing\";i:564;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-author\";i:5748;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/social-link\";i:5220;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/list-item\";i:514;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/button\";i:22396;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/preformatted\";i:4416;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/nextpage\";i:6021;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/calendar\";i:5465;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/shortcode\";i:8171;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/widget-group\";i:319;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/navigation\";i:141329;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-date\";i:4237;s:93:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comments-pagination-next\";i:957;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/tag-cloud\";i:6043;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/search\";i:17653;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/avatar\";i:7768;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/page-list\";i:12609;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comments\";i:35308;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/query-pagination-next\";i:939;s:88:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comments-pagination\";i:14649;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-excerpt\";i:7621;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-title\";i:4779;s:89:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-navigation-link\";i:1032;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/home-link\";i:1076;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/freeform\";i:42245;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/heading\";i:5053;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/cover\";i:85161;s:73:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/html\";i:6703;s:85:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/term-description\";i:1017;s:82:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-template\";i:11234;s:73:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/code\";i:11282;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comment-edit-link\";i:1159;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/block\";i:4929;s:83:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comments-title\";i:4590;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/verse\";i:4485;s:94:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/query-pagination-previous\";i:951;s:73:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/more\";i:6746;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/columns\";i:14713;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/site-title\";i:4668;s:73:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/file\";i:15372;s:87:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/navigation-submenu\";i:8840;s:96:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comments-pagination-numbers\";i:4624;s:84:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comment-content\";i:4319;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/categories\";i:8039;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/pullquote\";i:16643;s:87:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comment-reply-link\";i:1001;s:85:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/query-pagination\";i:15348;s:82:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/legacy-widget\";i:501;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/loginout\";i:510;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/site-logo\";i:15563;s:88:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comment-author-name\";i:1138;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/media-text\";i:20633;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/read-more\";i:5292;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/query-title\";i:4337;s:88:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-featured-image\";i:32175;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/post-terms\";i:4279;s:84:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/navigation-link\";i:17801;s:82:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/template-part\";i:9183;s:93:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/query-pagination-numbers\";i:4748;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/video\";i:22073;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/separator\";i:14385;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/pattern\";i:324;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/quote\";i:11966;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/column\";i:1443;s:84:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/latest-comments\";i:7625;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/archives\";i:7295;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/comment-date\";i:1058;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks/site-tagline\";i:4358;s:68:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/blocks\";i:1571171;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/theme-compat\";i:15442;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/block-patterns\";i:8843;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/block-supports\";i:84759;s:105:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/namespaced/Core/Curve25519/Ge\";i:602;s:102:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/namespaced/Core/Curve25519\";i:820;s:100:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/namespaced/Core/Poly1305\";i:112;s:100:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/namespaced/Core/ChaCha20\";i:224;s:91:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/namespaced/Core\";i:2444;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/namespaced\";i:2698;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/lib\";i:87301;s:91:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core/Base64\";i:22135;s:98:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core/Curve25519/Ge\";i:7881;s:95:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core/Curve25519\";i:121645;s:97:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core/SecretStream\";i:3624;s:93:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core/Poly1305\";i:12912;s:93:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core/ChaCha20\";i:5264;s:84:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core\";i:452743;s:85:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/PHP52\";i:4116;s:100:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core32/Curve25519/Ge\";i:8177;s:97:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core32/Curve25519\";i:122690;s:99:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core32/SecretStream\";i:3656;s:95:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core32/Poly1305\";i:15965;s:95:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core32/ChaCha20\";i:6407;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src/Core32\";i:437041;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat/src\";i:1207254;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/sodium_compat\";i:1303466;s:65:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/IXR\";i:33914;s:68:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/assets\";i:22442;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/reusable-blocks\";i:5178;s:88:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/customize-widgets\";i:27716;s:83:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/block-editor\";i:510773;s:85:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/format-library\";i:10926;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/edit-post\";i:201859;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/edit-site\";i:227817;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/components\";i:360844;s:83:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/edit-widgets\";i:106919;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/widgets\";i:27376;s:91:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/list-reusable-blocks\";i:21908;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/nux\";i:14552;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/editor\";i:85270;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/block-directory\";i:17720;s:84:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist/block-library\";i:758154;s:70:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css/dist\";i:2377012;s:65:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/css\";i:3024212;s:69:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/crop\";i:20004;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/imgareaselect\";i:49024;s:73:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/thickbox\";i:31233;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/dist/vendor\";i:2356316;s:81:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/dist/development\";i:178306;s:69:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/dist\";i:16780808;s:70:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/jcrop\";i:24976;s:87:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/mediaelement/renderers\";i:18880;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/mediaelement\";i:720715;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/langs\";i:15529;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/themes/modern\";i:446221;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/themes/inlite\";i:452642;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/themes\";i:898863;s:88:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/wpemoji\";i:5099;s:92:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/colorpicker\";i:4910;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/image\";i:55874;s:95:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/directionality\";i:2749;s:88:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/charmap\";i:31811;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/wpgallery\";i:4806;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/media\";i:57914;s:89:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/tabfocus\";i:5336;s:85:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/link\";i:32949;s:92:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/wpeditimage\";i:37711;s:91:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/fullscreen\";i:7779;s:87:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/wpview\";i:8985;s:83:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/hr\";i:1347;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/wordpress\";i:50630;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/wpdialogs\";i:3761;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/paste\";i:113193;s:93:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/wpautoresize\";i:8332;s:87:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/wplink\";i:26476;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/lists\";i:97383;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/textcolor\";i:16237;s:94:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/wptextpattern\";i:11923;s:93:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/compat3x/css\";i:8179;s:89:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins/compat3x\";i:21758;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/plugins\";i:606963;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/utils\";i:18822;s:92:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/skins/lightgray/img\";i:2856;s:94:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/skins/lightgray/fonts\";i:155760;s:88:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/skins/lightgray\";i:210254;s:95:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/skins/wordpress/images\";i:14207;s:88:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/skins/wordpress\";i:22831;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce/skins\";i:233085;s:72:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/tinymce\";i:2853655;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/codemirror\";i:1287141;s:73:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/plupload\";i:489841;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/swfupload\";i:8715;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/jquery/ui\";i:808560;s:71:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js/jquery\";i:1323894;s:64:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/js\";i:25997791;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/style-engine\";i:37964;s:72:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/php-compat\";i:1203;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/certificates\";i:233231;s:66:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/pomo\";i:53989;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Text/Diff/Engine\";i:31662;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Text/Diff/Renderer\";i:5535;s:71:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Text/Diff\";i:44010;s:66:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Text\";i:56929;s:67:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/fonts\";i:289826;s:85:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Requests/Exception/HTTP\";i:14365;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Requests/Exception/Transport\";i:919;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Requests/Exception\";i:16778;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Requests/Cookie\";i:3865;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Requests/Proxy\";i:3488;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Requests/Response\";i:2135;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Requests/Utility\";i:3310;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Requests/Auth\";i:1939;s:80:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Requests/Transport\";i:30090;s:70:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/Requests\";i:139225;s:71:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/PHPMailer\";i:227415;s:71:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/customize\";i:173214;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/random_compat\";i:43330;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie/Net\";i:7493;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie/HTTP\";i:11487;s:83:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie/Decode/HTML\";i:17241;s:78:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie/Decode\";i:17241;s:84:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie/Content/Type\";i:8015;s:79:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie/Content\";i:8015;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie/Cache\";i:39607;s:77:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie/Parse\";i:20551;s:87:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie/XML/Declaration\";i:7098;s:75:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie/XML\";i:7098;s:71:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/SimplePie\";i:458625;s:69:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/widgets\";i:157421;s:74:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/images/media\";i:2419;s:72:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/images/wlw\";i:4413;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/images/smilies\";i:10082;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/images/crystal\";i:15541;s:68:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes/images\";i:103747;s:61:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-includes\";i:42862354;s:49:\"/home/TI/adrianoamado/Local Sites/polo/app/public\";i:51860085;s:93:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/tecnicos\";i:16727;s:88:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/FIC\";i:4935;s:98:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/pos-graduacao\";i:144916;s:109:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/img/footer/social\";i:6011;s:102:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/img/footer\";i:34003;s:105:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/img/icons/faq\";i:185;s:124:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/img/icons/social-medias-top-page\";i:4725;s:101:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/img/icons\";i:18446;s:100:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/img/hero\";i:1049047;s:104:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/img/partners\";i:70570;s:102:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/img/header\";i:30418;s:95:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/img\";i:1202484;s:95:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/doc\";i:153362;s:95:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/css\";i:25050;s:94:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/js\";i:1783;s:100:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets/includes\";i:0;s:91:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/assets\";i:1382679;s:94:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga/graduacao\";i:123091;s:84:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes/polouabsapiranga\";i:2580241;s:67:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/themes\";i:2580269;s:96:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/lang\";i:7275990;s:108:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/build/css\";i:1139841;s:107:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/build/js\";i:1463458;s:104:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/build\";i:2603299;s:120:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/inc/datepicker/images\";i:11397;s:113:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/inc/datepicker\";i:61331;s:121:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/inc/color-picker-alpha\";i:27318;s:112:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/inc/select2/3\";i:268765;s:112:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/inc/select2/4\";i:582442;s:110:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/inc/select2\";i:851207;s:113:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/inc/timepicker\";i:130956;s:102:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/inc\";i:1070812;s:111:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/images/icons\";i:23609;s:118:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/images/field-states\";i:628;s:122:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/images/field-type-icons\";i:26778;s:105:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets/images\";i:83426;s:98:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/assets\";i:3757537;s:106:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/forms\";i:78258;s:109:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/rest-api\";i:32269;s:108:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/walkers\";i:5692;s:105:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/ajax\";i:22999;s:104:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/api\";i:128204;s:112:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/admin/views\";i:44154;s:112:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/admin/tools\";i:17548;s:106:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/admin\";i:134113;s:110:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/locations\";i:49210;s:107:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/legacy\";i:1777;s:107:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes/fields\";i:311382;s:100:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields/includes\";i:1035918;s:91:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/advanced-custom-fields\";i:12140987;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/disable-gutenberg/img\";i:0;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/disable-gutenberg/css\";i:1804;s:89:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/disable-gutenberg/js\";i:2842;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/disable-gutenberg/lib\";i:0;s:96:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/disable-gutenberg/languages\";i:7651;s:100:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/disable-gutenberg/fonts/awesome\";i:950854;s:92:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/disable-gutenberg/fonts\";i:950854;s:90:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/disable-gutenberg/inc\";i:37880;s:86:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins/disable-gutenberg\";i:1031268;s:68:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/plugins\";i:13172283;s:76:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/uploads/2023/02\";i:0;s:73:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/uploads/2023\";i:0;s:68:\"/home/TI/adrianoamado/Local Sites/polo/app/public/wp-content/uploads\";i:0;}','yes');
INSERT INTO `wp_options` VALUES (885,'category_children','a:2:{i:4;a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}i:2;a:1:{i:0;i:6;}}','yes');
INSERT INTO `wp_options` VALUES (1346,'_site_transient_timeout_php_check_9522db31646a2e4672d744b6f556967b','1678290296','no');
INSERT INTO `wp_options` VALUES (1347,'_site_transient_php_check_9522db31646a2e4672d744b6f556967b','a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}','no');
INSERT INTO `wp_options` VALUES (1654,'_site_transient_timeout_theme_roots','1677861198','no');
INSERT INTO `wp_options` VALUES (1655,'_site_transient_theme_roots','a:1:{s:16:\"polouabsapiranga\";s:7:\"/themes\";}','no');
INSERT INTO `wp_options` VALUES (1656,'_site_transient_update_plugins','O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1677859399;s:8:\"response\";a:1:{s:39:\"disable-gutenberg/disable-gutenberg.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:31:\"w.org/plugins/disable-gutenberg\";s:4:\"slug\";s:17:\"disable-gutenberg\";s:6:\"plugin\";s:39:\"disable-gutenberg/disable-gutenberg.php\";s:11:\"new_version\";s:3:\"2.9\";s:3:\"url\";s:48:\"https://wordpress.org/plugins/disable-gutenberg/\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/plugin/disable-gutenberg.2.9.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/disable-gutenberg/assets/icon-256x256.png?rev=1925990\";s:2:\"1x\";s:70:\"https://ps.w.org/disable-gutenberg/assets/icon-128x128.png?rev=1925990\";}s:7:\"banners\";a:0:{}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.9\";s:6:\"tested\";s:3:\"6.2\";s:12:\"requires_php\";s:6:\"5.6.20\";}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:1:{s:30:\"advanced-custom-fields/acf.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:36:\"w.org/plugins/advanced-custom-fields\";s:4:\"slug\";s:22:\"advanced-custom-fields\";s:6:\"plugin\";s:30:\"advanced-custom-fields/acf.php\";s:11:\"new_version\";s:5:\"6.0.7\";s:3:\"url\";s:53:\"https://wordpress.org/plugins/advanced-custom-fields/\";s:7:\"package\";s:71:\"https://downloads.wordpress.org/plugin/advanced-custom-fields.6.0.7.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-256x256.png?rev=1082746\";s:2:\"1x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-128x128.png?rev=1082746\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:78:\"https://ps.w.org/advanced-custom-fields/assets/banner-1544x500.jpg?rev=1729099\";s:2:\"1x\";s:77:\"https://ps.w.org/advanced-custom-fields/assets/banner-772x250.jpg?rev=1729102\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.7\";}}s:7:\"checked\";a:2:{s:30:\"advanced-custom-fields/acf.php\";s:5:\"6.0.7\";s:39:\"disable-gutenberg/disable-gutenberg.php\";s:5:\"2.8.1\";}}','no');
INSERT INTO `wp_options` VALUES (1690,'_transient_timeout_global_styles_polouabsapiranga','1677861586','no');
INSERT INTO `wp_options` VALUES (1691,'_transient_global_styles_polouabsapiranga','body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url(\'#wp-duotone-dark-grayscale\');--wp--preset--duotone--grayscale: url(\'#wp-duotone-grayscale\');--wp--preset--duotone--purple-yellow: url(\'#wp-duotone-purple-yellow\');--wp--preset--duotone--blue-red: url(\'#wp-duotone-blue-red\');--wp--preset--duotone--midnight: url(\'#wp-duotone-midnight\');--wp--preset--duotone--magenta-yellow: url(\'#wp-duotone-magenta-yellow\');--wp--preset--duotone--purple-green: url(\'#wp-duotone-purple-green\');--wp--preset--duotone--blue-orange: url(\'#wp-duotone-blue-orange\');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}','no');
/*!40000 ALTER TABLE `wp_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_postmeta`
--

DROP TABLE IF EXISTS `wp_postmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_postmeta`
--

LOCK TABLES `wp_postmeta` WRITE;
/*!40000 ALTER TABLE `wp_postmeta` DISABLE KEYS */;
INSERT INTO `wp_postmeta` VALUES (1,2,'_wp_page_template','default');
INSERT INTO `wp_postmeta` VALUES (2,3,'_wp_page_template','default');
INSERT INTO `wp_postmeta` VALUES (6,8,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (7,8,'_edit_lock','1675701344:1');
INSERT INTO `wp_postmeta` VALUES (8,8,'_wp_page_template','page-home.php');
INSERT INTO `wp_postmeta` VALUES (9,3,'_wp_trash_meta_status','draft');
INSERT INTO `wp_postmeta` VALUES (10,3,'_wp_trash_meta_time','1675701454');
INSERT INTO `wp_postmeta` VALUES (11,3,'_wp_desired_post_slug','privacy-policy');
INSERT INTO `wp_postmeta` VALUES (12,2,'_wp_trash_meta_status','publish');
INSERT INTO `wp_postmeta` VALUES (13,2,'_wp_trash_meta_time','1675701455');
INSERT INTO `wp_postmeta` VALUES (14,2,'_wp_desired_post_slug','sample-page');
INSERT INTO `wp_postmeta` VALUES (17,16,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (18,16,'_edit_lock','1675703604:1');
INSERT INTO `wp_postmeta` VALUES (23,16,'_wp_trash_meta_status','publish');
INSERT INTO `wp_postmeta` VALUES (24,16,'_wp_trash_meta_time','1675703749');
INSERT INTO `wp_postmeta` VALUES (25,16,'_wp_desired_post_slug','edital-de-cussos-graduacao');
INSERT INTO `wp_postmeta` VALUES (26,1,'_wp_trash_meta_status','publish');
INSERT INTO `wp_postmeta` VALUES (27,1,'_wp_trash_meta_time','1675703754');
INSERT INTO `wp_postmeta` VALUES (28,1,'_wp_desired_post_slug','hello-world');
INSERT INTO `wp_postmeta` VALUES (29,1,'_wp_trash_meta_comments_status','a:1:{i:1;s:1:\"1\";}');
INSERT INTO `wp_postmeta` VALUES (30,19,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (31,19,'_edit_lock','1675703733:1');
INSERT INTO `wp_postmeta` VALUES (32,19,'_wp_page_template','graduacao/educacao-do-campo-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (33,21,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (34,21,'_wp_page_template','graduacao/filosofia-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (35,21,'_edit_lock','1675703844:1');
INSERT INTO `wp_postmeta` VALUES (36,23,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (37,23,'_wp_page_template','graduacao/fisica-UFSM.php');
INSERT INTO `wp_postmeta` VALUES (38,23,'_edit_lock','1675704002:1');
INSERT INTO `wp_postmeta` VALUES (39,25,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (40,25,'_wp_page_template','graduacao/Form-de-profess-para-educacao-profissional-UFSM.php');
INSERT INTO `wp_postmeta` VALUES (41,25,'_edit_lock','1675704146:1');
INSERT INTO `wp_postmeta` VALUES (42,27,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (43,27,'_wp_page_template','graduacao/geografia-ufsm.php');
INSERT INTO `wp_postmeta` VALUES (44,27,'_edit_lock','1675704187:1');
INSERT INTO `wp_postmeta` VALUES (45,29,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (46,29,'_wp_page_template','graduacao/historia-furg.php');
INSERT INTO `wp_postmeta` VALUES (47,29,'_edit_lock','1675704331:1');
INSERT INTO `wp_postmeta` VALUES (48,31,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (49,31,'_wp_page_template','graduacao/matematica-FURG.php');
INSERT INTO `wp_postmeta` VALUES (50,31,'_edit_lock','1675704516:1');
INSERT INTO `wp_postmeta` VALUES (51,33,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (52,33,'_wp_page_template','graduacao/matematica-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (53,33,'_edit_lock','1675705170:1');
INSERT INTO `wp_postmeta` VALUES (54,35,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (55,35,'_wp_page_template','graduacao/pedagogia-UFRGS.php');
INSERT INTO `wp_postmeta` VALUES (56,35,'_edit_lock','1675705270:1');
INSERT INTO `wp_postmeta` VALUES (57,37,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (58,37,'_edit_lock','1675705490:1');
INSERT INTO `wp_postmeta` VALUES (59,37,'_wp_page_template','graduacao/pedagogia-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (60,39,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (61,39,'_wp_page_template','graduacao/letras-Espanhol-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (62,39,'_edit_lock','1675705554:1');
INSERT INTO `wp_postmeta` VALUES (63,41,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (64,41,'_wp_page_template','graduacao/letras-ingles-UFRGS.php');
INSERT INTO `wp_postmeta` VALUES (65,41,'_edit_lock','1675705622:1');
INSERT INTO `wp_postmeta` VALUES (66,43,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (67,43,'_wp_page_template','graduacao/licen-em-Letras-Espanhol-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (68,43,'_edit_lock','1675705685:1');
INSERT INTO `wp_postmeta` VALUES (69,45,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (70,45,'_wp_page_template','graduacao/licen-em-Filosofia-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (71,45,'_edit_lock','1675705813:1');
INSERT INTO `wp_postmeta` VALUES (72,47,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (73,47,'_wp_page_template','graduacao/licen-em-História-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (74,47,'_edit_lock','1675705894:1');
INSERT INTO `wp_postmeta` VALUES (75,49,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (76,49,'_wp_page_template','default');
INSERT INTO `wp_postmeta` VALUES (77,49,'_edit_lock','1675706161:1');
INSERT INTO `wp_postmeta` VALUES (78,51,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (79,51,'_wp_page_template','graduacao/licen-em-Matemática-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (80,51,'_edit_lock','1675706311:1');
INSERT INTO `wp_postmeta` VALUES (81,53,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (82,53,'_edit_lock','1675706359:1');
INSERT INTO `wp_postmeta` VALUES (83,53,'_wp_page_template','graduacao/licen-em-Pedagogia-FURG.php');
INSERT INTO `wp_postmeta` VALUES (84,55,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (85,55,'_wp_page_template','graduacao/licen-em-Computacao-UFSM.php');
INSERT INTO `wp_postmeta` VALUES (86,55,'_edit_lock','1675706398:1');
INSERT INTO `wp_postmeta` VALUES (87,57,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (88,57,'_wp_page_template','graduacao/licen-em-Educacao-Especial-UFSM.php');
INSERT INTO `wp_postmeta` VALUES (89,57,'_edit_lock','1675706442:1');
INSERT INTO `wp_postmeta` VALUES (90,59,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (91,59,'_wp_page_template','graduacao/linguagens-letras-IFSUL.php');
INSERT INTO `wp_postmeta` VALUES (92,59,'_edit_lock','1675706522:1');
INSERT INTO `wp_postmeta` VALUES (93,61,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (94,61,'_edit_lock','1675706595:1');
INSERT INTO `wp_postmeta` VALUES (95,61,'_wp_page_template','graduacao/tec-em-sistemas-para-internet-IFSUL.php');
INSERT INTO `wp_postmeta` VALUES (96,63,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (97,63,'_wp_page_template','pos-graduacao/especializacao-em-Artes-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (98,63,'_edit_lock','1675707547:1');
INSERT INTO `wp_postmeta` VALUES (99,65,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (100,65,'_wp_page_template','pos-graduacao/alfabetizacao-FURG.php');
INSERT INTO `wp_postmeta` VALUES (101,65,'_edit_lock','1675707623:1');
INSERT INTO `wp_postmeta` VALUES (102,67,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (103,67,'_wp_page_template','pos-graduacao/matematica-midias-digitais-Didatica-UFRGS.php');
INSERT INTO `wp_postmeta` VALUES (104,67,'_edit_lock','1675707671:1');
INSERT INTO `wp_postmeta` VALUES (105,69,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (106,69,'_wp_page_template','pos-graduacao/educacao-Ambiental.php');
INSERT INTO `wp_postmeta` VALUES (107,69,'_edit_lock','1675707719:1');
INSERT INTO `wp_postmeta` VALUES (108,71,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (109,71,'_wp_page_template','pos-graduacao/info-Instrumental.php');
INSERT INTO `wp_postmeta` VALUES (110,71,'_edit_lock','1675707830:1');
INSERT INTO `wp_postmeta` VALUES (111,73,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (112,73,'_wp_page_template','pos-graduacao/gestao-publica-UFRGS.php');
INSERT INTO `wp_postmeta` VALUES (113,73,'_edit_lock','1675707871:1');
INSERT INTO `wp_postmeta` VALUES (114,75,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (115,75,'_wp_page_template','pos-graduacao/gestao-em-saude-UFRGS.php');
INSERT INTO `wp_postmeta` VALUES (116,75,'_edit_lock','1675707967:1');
INSERT INTO `wp_postmeta` VALUES (117,77,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (118,77,'_wp_page_template','pos-graduacao/gestao-publica-municipal-UFRGS.php');
INSERT INTO `wp_postmeta` VALUES (119,77,'_edit_lock','1675708055:1');
INSERT INTO `wp_postmeta` VALUES (120,79,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (121,79,'_wp_page_template','pos-graduacao/gestao-de-polos-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (122,79,'_edit_lock','1675708092:1');
INSERT INTO `wp_postmeta` VALUES (123,81,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (124,81,'_edit_lock','1675708152:1');
INSERT INTO `wp_postmeta` VALUES (125,81,'_wp_page_template','pos-graduacao/midias-na-educacao-IFSUL.php');
INSERT INTO `wp_postmeta` VALUES (126,83,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (127,83,'_wp_page_template','pos-graduacao/Gestao-educacional-UFSM.php');
INSERT INTO `wp_postmeta` VALUES (128,83,'_edit_lock','1675708227:1');
INSERT INTO `wp_postmeta` VALUES (129,85,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (130,85,'_wp_page_template','pos-graduacao/tecnologias-da-informacao-e-da-Comunicacao-na-educacao-FURG.php');
INSERT INTO `wp_postmeta` VALUES (131,85,'_edit_lock','1675709816:1');
INSERT INTO `wp_postmeta` VALUES (132,87,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (133,87,'_wp_page_template','pos-graduacao/tecnologias-da-informacao-e-da-Comunicacao-na-educacao-FURG.php');
INSERT INTO `wp_postmeta` VALUES (134,87,'_edit_lock','1675710567:1');
INSERT INTO `wp_postmeta` VALUES (135,89,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (136,89,'_wp_page_template','pos-graduacao/rs-soci-poli-cultu.php');
INSERT INTO `wp_postmeta` VALUES (137,89,'_edit_lock','1675710685:1');
INSERT INTO `wp_postmeta` VALUES (138,91,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (139,91,'_wp_page_template','pos-graduacao/matematica-FURG.php');
INSERT INTO `wp_postmeta` VALUES (140,91,'_edit_lock','1675710877:1');
INSERT INTO `wp_postmeta` VALUES (141,93,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (142,93,'_wp_page_template','pos-graduacao/educacao-física-e-anos-iniciais-UFSM.php');
INSERT INTO `wp_postmeta` VALUES (143,93,'_edit_lock','1675711314:1');
INSERT INTO `wp_postmeta` VALUES (144,95,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (145,95,'_wp_page_template','pos-graduacao/aplicacoes-para-a-web-FURG.php');
INSERT INTO `wp_postmeta` VALUES (146,95,'_edit_lock','1675711534:1');
INSERT INTO `wp_postmeta` VALUES (147,97,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (148,97,'_edit_lock','1675711763:1');
INSERT INTO `wp_postmeta` VALUES (149,97,'_wp_page_template','pos-graduacao/ensino-de-sociologia-no-ensino-medio-FURG.php');
INSERT INTO `wp_postmeta` VALUES (150,99,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (151,99,'_wp_page_template','pos-graduacao/psicopedagogia-UFRGS.php');
INSERT INTO `wp_postmeta` VALUES (152,99,'_edit_lock','1675711833:1');
INSERT INTO `wp_postmeta` VALUES (153,101,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (154,101,'_wp_page_template','pos-graduacao/filosofia-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (155,101,'_edit_lock','1675712043:1');
INSERT INTO `wp_postmeta` VALUES (156,103,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (157,103,'_edit_lock','1675712117:1');
INSERT INTO `wp_postmeta` VALUES (158,103,'_wp_page_template','pos-graduacao/educacao-em-Direitos-Humanos-FURG.php');
INSERT INTO `wp_postmeta` VALUES (159,105,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (160,105,'_wp_page_template','pos-graduacao/gestao-da-Educacao-UFRGS.php');
INSERT INTO `wp_postmeta` VALUES (161,105,'_edit_lock','1675712190:1');
INSERT INTO `wp_postmeta` VALUES (162,107,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (163,107,'_edit_lock','1675712241:1');
INSERT INTO `wp_postmeta` VALUES (164,107,'_wp_page_template','pos-graduacao/ciencias-e-10!-FURG.php');
INSERT INTO `wp_postmeta` VALUES (165,109,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (166,109,'_edit_lock','1675712343:1');
INSERT INTO `wp_postmeta` VALUES (167,109,'_wp_page_template','pos-graduacao/artes-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (168,111,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (169,111,'_wp_page_template','pos-graduacao/educacao-fisica-escolar-UFPel.php');
INSERT INTO `wp_postmeta` VALUES (170,111,'_edit_lock','1675712412:1');
INSERT INTO `wp_postmeta` VALUES (171,113,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (172,113,'_wp_page_template','pos-graduacao/EPPEC.php');
INSERT INTO `wp_postmeta` VALUES (173,113,'_edit_lock','1675712698:1');
INSERT INTO `wp_postmeta` VALUES (174,115,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (175,115,'_edit_lock','1675712859:1');
INSERT INTO `wp_postmeta` VALUES (176,115,'_wp_page_template','pos-graduacao/ensino-de-filosofia-no-ensino-medio-UFSM.php');
INSERT INTO `wp_postmeta` VALUES (177,117,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (178,117,'_wp_page_template','pos-graduacao/atendimento-Educacional-Especializado-FURG.php');
INSERT INTO `wp_postmeta` VALUES (179,117,'_edit_lock','1675713065:1');
INSERT INTO `wp_postmeta` VALUES (180,119,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (181,119,'_edit_lock','1675713136:1');
INSERT INTO `wp_postmeta` VALUES (182,119,'_wp_page_template','pos-graduacao/midia-e-educacao-UNIPAMPA.php');
INSERT INTO `wp_postmeta` VALUES (183,121,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (184,121,'_wp_page_template','FIC/cursos-FIC.php');
INSERT INTO `wp_postmeta` VALUES (185,121,'_edit_lock','1675713734:1');
INSERT INTO `wp_postmeta` VALUES (186,123,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (187,123,'_edit_lock','1675714350:1');
INSERT INTO `wp_postmeta` VALUES (188,124,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (191,124,'_edit_lock','1675971632:1');
INSERT INTO `wp_postmeta` VALUES (194,124,'_wp_trash_meta_status','publish');
INSERT INTO `wp_postmeta` VALUES (195,124,'_wp_trash_meta_time','1675971782');
INSERT INTO `wp_postmeta` VALUES (196,124,'_wp_desired_post_slug','vagas');
INSERT INTO `wp_postmeta` VALUES (197,128,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (198,128,'_edit_lock','1676664385:1');
INSERT INTO `wp_postmeta` VALUES (199,128,'_wp_page_template','blog.php');
INSERT INTO `wp_postmeta` VALUES (200,130,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (201,130,'_edit_lock','1676663640:1');
INSERT INTO `wp_postmeta` VALUES (202,134,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (203,134,'_edit_lock','1676398016:1');
INSERT INTO `wp_postmeta` VALUES (204,134,'_wp_page_template','page-sobre.php');
INSERT INTO `wp_postmeta` VALUES (205,136,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (206,136,'_wp_page_template','page-faq.php');
INSERT INTO `wp_postmeta` VALUES (207,136,'_edit_lock','1676481361:1');
INSERT INTO `wp_postmeta` VALUES (208,138,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (209,138,'_wp_page_template','page-biblioteca.php');
INSERT INTO `wp_postmeta` VALUES (210,138,'_edit_lock','1676483237:1');
INSERT INTO `wp_postmeta` VALUES (211,140,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (212,140,'_wp_page_template','page-contato.php');
INSERT INTO `wp_postmeta` VALUES (213,140,'_edit_lock','1676491448:1');
INSERT INTO `wp_postmeta` VALUES (214,142,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (215,142,'_wp_page_template','default');
INSERT INTO `wp_postmeta` VALUES (216,142,'_edit_lock','1676491523:1');
INSERT INTO `wp_postmeta` VALUES (217,142,'_wp_trash_meta_status','publish');
INSERT INTO `wp_postmeta` VALUES (218,142,'_wp_trash_meta_time','1676563804');
INSERT INTO `wp_postmeta` VALUES (219,142,'_wp_desired_post_slug','tes');
INSERT INTO `wp_postmeta` VALUES (220,144,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (223,144,'_edit_lock','1676663601:1');
INSERT INTO `wp_postmeta` VALUES (234,130,'_wp_trash_meta_status','publish');
INSERT INTO `wp_postmeta` VALUES (235,130,'_wp_trash_meta_time','1676663785');
INSERT INTO `wp_postmeta` VALUES (236,130,'_wp_desired_post_slug','ola');
INSERT INTO `wp_postmeta` VALUES (237,144,'_wp_trash_meta_status','publish');
INSERT INTO `wp_postmeta` VALUES (238,144,'_wp_trash_meta_time','1676663792');
INSERT INTO `wp_postmeta` VALUES (239,144,'_wp_desired_post_slug','dasada');
INSERT INTO `wp_postmeta` VALUES (240,149,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (241,149,'_edit_lock','1677089674:1');
INSERT INTO `wp_postmeta` VALUES (242,149,'_wp_page_template','default');
INSERT INTO `wp_postmeta` VALUES (243,149,'_wp_trash_meta_status','publish');
INSERT INTO `wp_postmeta` VALUES (244,149,'_wp_trash_meta_time','1677169763');
INSERT INTO `wp_postmeta` VALUES (245,149,'_wp_desired_post_slug','menuteste');
/*!40000 ALTER TABLE `wp_postmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_posts`
--

DROP TABLE IF EXISTS `wp_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_posts`
--

LOCK TABLES `wp_posts` WRITE;
/*!40000 ALTER TABLE `wp_posts` DISABLE KEYS */;
INSERT INTO `wp_posts` VALUES (1,1,'2023-02-06 16:01:22','2023-02-06 16:01:22','<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->','Hello world!','','trash','open','open','','hello-world__trashed','','','2023-02-06 17:15:54','2023-02-06 17:15:54','',0,'http://localhost:10014/?p=1',0,'post','',1);
INSERT INTO `wp_posts` VALUES (2,1,'2023-02-06 16:01:22','2023-02-06 16:01:22','<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost:10014/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->','Sample Page','','trash','closed','open','','sample-page__trashed','','','2023-02-06 16:37:35','2023-02-06 16:37:35','',0,'http://localhost:10014/?page_id=2',0,'page','',0);
INSERT INTO `wp_posts` VALUES (3,1,'2023-02-06 16:01:22','2023-02-06 16:01:22','<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost:10014.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Comments</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Media</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Embedded content from other websites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where your data is sent</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph -->','Privacy Policy','','trash','closed','open','','privacy-policy__trashed','','','2023-02-06 16:37:35','2023-02-06 16:37:35','',0,'http://localhost:10014/?page_id=3',0,'page','',0);
INSERT INTO `wp_posts` VALUES (8,1,'2023-02-06 16:36:18','2023-02-06 16:36:18','','Home - Página Inicial','','publish','closed','closed','','home-pagina-inicial','','','2023-02-06 16:37:41','2023-02-06 16:37:41','',0,'http://localhost:10014/?page_id=8',0,'page','',0);
INSERT INTO `wp_posts` VALUES (9,1,'2023-02-06 16:36:18','2023-02-06 16:36:18','','Home - Página Inicial','','inherit','closed','closed','','8-revision-v1','','','2023-02-06 16:36:18','2023-02-06 16:36:18','',8,'http://localhost:10014/?p=9',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (11,1,'2023-02-06 16:37:35','2023-02-06 16:37:35','<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost:10014.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Comments</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Media</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Embedded content from other websites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where your data is sent</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph -->','Privacy Policy','','inherit','closed','closed','','3-revision-v1','','','2023-02-06 16:37:35','2023-02-06 16:37:35','',3,'http://localhost:10014/?p=11',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (12,1,'2023-02-06 16:37:35','2023-02-06 16:37:35','<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost:10014/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->','Sample Page','','inherit','closed','closed','','2-revision-v1','','','2023-02-06 16:37:35','2023-02-06 16:37:35','',2,'http://localhost:10014/?p=12',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (16,1,'2023-02-06 17:11:52','2023-02-06 17:11:52','','edital de cussos graduação','','trash','open','open','','edital-de-cussos-graduacao__trashed','','','2023-02-06 17:15:49','2023-02-06 17:15:49','',0,'http://localhost:10014/?p=16',0,'post','',0);
INSERT INTO `wp_posts` VALUES (17,1,'2023-02-06 17:11:52','2023-02-06 17:11:52','','edital de cussos graduação','','inherit','closed','closed','','16-revision-v1','','','2023-02-06 17:11:52','2023-02-06 17:11:52','',16,'http://localhost:10014/?p=17',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (18,1,'2023-02-06 17:15:54','2023-02-06 17:15:54','<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->','Hello world!','','inherit','closed','closed','','1-revision-v1','','','2023-02-06 17:15:54','2023-02-06 17:15:54','',1,'http://localhost:10014/?p=18',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (19,1,'2023-02-06 17:16:58','2023-02-06 17:16:58','','Educação do Campo - UFPel','','publish','closed','closed','','educacao-do-campo-ufpel','','','2023-02-06 17:17:26','2023-02-06 17:17:26','',0,'http://localhost:10014/?page_id=19',0,'page','',0);
INSERT INTO `wp_posts` VALUES (20,1,'2023-02-06 17:16:58','2023-02-06 17:16:58','','Educação do Campo - UFPel','','inherit','closed','closed','','19-revision-v1','','','2023-02-06 17:16:58','2023-02-06 17:16:58','',19,'http://localhost:10014/?p=20',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (21,1,'2023-02-06 17:18:02','2023-02-06 17:18:02','','Filosofia - UFPel','','publish','closed','closed','','filosofia-ufpel','','','2023-02-06 17:18:13','2023-02-06 17:18:13','',0,'http://localhost:10014/?page_id=21',0,'page','',0);
INSERT INTO `wp_posts` VALUES (22,1,'2023-02-06 17:18:02','2023-02-06 17:18:02','','Filosofia - UFPel','','inherit','closed','closed','','21-revision-v1','','','2023-02-06 17:18:02','2023-02-06 17:18:02','',21,'http://localhost:10014/?p=22',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (23,1,'2023-02-06 17:19:53','2023-02-06 17:19:53','','Física - UFSM','','publish','closed','closed','','fisica-ufsm','','','2023-02-06 17:20:03','2023-02-06 17:20:03','',0,'http://localhost:10014/?page_id=23',0,'page','',0);
INSERT INTO `wp_posts` VALUES (24,1,'2023-02-06 17:19:53','2023-02-06 17:19:53','','Física - UFSM','','inherit','closed','closed','','23-revision-v1','','','2023-02-06 17:19:53','2023-02-06 17:19:53','',23,'http://localhost:10014/?p=24',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (25,1,'2023-02-06 17:22:32','2023-02-06 17:22:32','','Formação de Professores para a Educação Profissional - UFSM','','publish','closed','closed','','formacao-de-professores-para-a-educacao-profissional-ufsm','','','2023-02-06 17:23:53','2023-02-06 17:23:53','',8,'http://localhost:10014/?page_id=25',0,'page','',0);
INSERT INTO `wp_posts` VALUES (26,1,'2023-02-06 17:22:32','2023-02-06 17:22:32','','Formação de Professores para a Educação Profissional - UFSM','','inherit','closed','closed','','25-revision-v1','','','2023-02-06 17:22:32','2023-02-06 17:22:32','',25,'http://localhost:10014/?p=26',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (27,1,'2023-02-06 17:24:55','2023-02-06 17:24:55','','Geografia - UFSM','','publish','closed','closed','','geografia-ufsm','','','2023-02-06 17:25:03','2023-02-06 17:25:03','',0,'http://localhost:10014/?page_id=27',0,'page','',0);
INSERT INTO `wp_posts` VALUES (28,1,'2023-02-06 17:24:55','2023-02-06 17:24:55','','Geografia - UFSM','','inherit','closed','closed','','27-revision-v1','','','2023-02-06 17:24:55','2023-02-06 17:24:55','',27,'http://localhost:10014/?p=28',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (29,1,'2023-02-06 17:25:36','2023-02-06 17:25:36','','História - FURG','','publish','closed','closed','','historia-furg','','','2023-02-06 17:25:58','2023-02-06 17:25:58','',8,'http://localhost:10014/?page_id=29',0,'page','',0);
INSERT INTO `wp_posts` VALUES (30,1,'2023-02-06 17:25:36','2023-02-06 17:25:36','','História - FURG','','inherit','closed','closed','','29-revision-v1','','','2023-02-06 17:25:36','2023-02-06 17:25:36','',29,'http://localhost:10014/?p=30',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (31,1,'2023-02-06 17:27:59','2023-02-06 17:27:59','','Matemática - FURG','','publish','closed','closed','','matematica-furg','','','2023-02-06 17:30:40','2023-02-06 17:30:40','',0,'http://localhost:10014/?page_id=31',0,'page','',0);
INSERT INTO `wp_posts` VALUES (32,1,'2023-02-06 17:27:59','2023-02-06 17:27:59','','Matemática - FURG','','inherit','closed','closed','','31-revision-v1','','','2023-02-06 17:27:59','2023-02-06 17:27:59','',31,'http://localhost:10014/?p=32',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (33,1,'2023-02-06 17:31:04','2023-02-06 17:31:04','','Matemática - UFPel','','publish','closed','closed','','matematica-ufpel','','','2023-02-06 17:32:39','2023-02-06 17:32:39','',8,'http://localhost:10014/?page_id=33',0,'page','',0);
INSERT INTO `wp_posts` VALUES (34,1,'2023-02-06 17:31:04','2023-02-06 17:31:04','','Matemática - UFPel','','inherit','closed','closed','','33-revision-v1','','','2023-02-06 17:31:04','2023-02-06 17:31:04','',33,'http://localhost:10014/?p=34',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (35,1,'2023-02-06 17:41:58','2023-02-06 17:41:58','','Pedagogia - UFRGS','','publish','closed','closed','','pedagogia-ufrgs','','','2023-02-06 17:42:17','2023-02-06 17:42:17','',8,'http://localhost:10014/?page_id=35',0,'page','',0);
INSERT INTO `wp_posts` VALUES (36,1,'2023-02-06 17:41:58','2023-02-06 17:41:58','','Pedagogia - UFRGS','','inherit','closed','closed','','35-revision-v1','','','2023-02-06 17:41:58','2023-02-06 17:41:58','',35,'http://localhost:10014/?p=36',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (37,1,'2023-02-06 17:43:49','2023-02-06 17:43:49','','Pedagogia - UFPel','','publish','closed','closed','','pedagogia-ufpel','','','2023-02-06 17:43:51','2023-02-06 17:43:51','',8,'http://localhost:10014/?page_id=37',0,'page','',0);
INSERT INTO `wp_posts` VALUES (38,1,'2023-02-06 17:43:49','2023-02-06 17:43:49','','Pedagogia - UFPel','','inherit','closed','closed','','37-revision-v1','','','2023-02-06 17:43:49','2023-02-06 17:43:49','',37,'http://localhost:10014/?p=38',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (39,1,'2023-02-06 17:47:18','2023-02-06 17:47:18','','Letras Espanhol - UFPel','','publish','closed','closed','','letras-espanhol-ufpel','','','2023-02-06 17:47:31','2023-02-06 17:47:31','',8,'http://localhost:10014/?page_id=39',0,'page','',0);
INSERT INTO `wp_posts` VALUES (40,1,'2023-02-06 17:47:18','2023-02-06 17:47:18','','Letras Espanhol - UFPel','','inherit','closed','closed','','39-revision-v1','','','2023-02-06 17:47:18','2023-02-06 17:47:18','',39,'http://localhost:10014/?p=40',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (41,1,'2023-02-06 17:48:23','2023-02-06 17:48:23','','Letras Inglês - UFRGS','','publish','closed','closed','','letras-ingles-ufrgs','','','2023-02-06 17:49:01','2023-02-06 17:49:01','',8,'http://localhost:10014/?page_id=41',0,'page','',0);
INSERT INTO `wp_posts` VALUES (42,1,'2023-02-06 17:48:23','2023-02-06 17:48:23','','Letras Inglês - UFRGS','','inherit','closed','closed','','41-revision-v1','','','2023-02-06 17:48:23','2023-02-06 17:48:23','',41,'http://localhost:10014/?p=42',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (43,1,'2023-02-06 17:49:33','2023-02-06 17:49:33','','Licenciatura em Letras Espanhol - UFPel','','publish','closed','closed','','licenciatura-em-letras-espanhol-ufpel','','','2023-02-06 17:49:49','2023-02-06 17:49:49','',8,'http://localhost:10014/?page_id=43',0,'page','',0);
INSERT INTO `wp_posts` VALUES (44,1,'2023-02-06 17:49:33','2023-02-06 17:49:33','','Licenciatura em Letras Espanhol - UFPel','','inherit','closed','closed','','43-revision-v1','','','2023-02-06 17:49:33','2023-02-06 17:49:33','',43,'http://localhost:10014/?p=44',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (45,1,'2023-02-06 17:50:33','2023-02-06 17:50:33','','Licenciatura em Filosofia - UFPel','','publish','closed','closed','','licenciatura-em-filosofia-ufpel','','','2023-02-06 17:50:58','2023-02-06 17:50:58','',8,'http://localhost:10014/?page_id=45',0,'page','',0);
INSERT INTO `wp_posts` VALUES (46,1,'2023-02-06 17:50:33','2023-02-06 17:50:33','','Licenciatura em Filosofia - UFPel','','inherit','closed','closed','','45-revision-v1','','','2023-02-06 17:50:33','2023-02-06 17:50:33','',45,'http://localhost:10014/?p=46',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (47,1,'2023-02-06 17:52:41','2023-02-06 17:52:41','','Licenciatura em História - IFSUL','','publish','closed','closed','','licenciatura-em-historia-ifsul','','','2023-02-06 17:52:53','2023-02-06 17:52:53','',8,'http://localhost:10014/?page_id=47',0,'page','',0);
INSERT INTO `wp_posts` VALUES (48,1,'2023-02-06 17:52:41','2023-02-06 17:52:41','','Licenciatura em História - IFSUL','','inherit','closed','closed','','47-revision-v1','','','2023-02-06 17:52:41','2023-02-06 17:52:41','',47,'http://localhost:10014/?p=48',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (49,1,'2023-02-06 17:54:04','2023-02-06 17:54:04','','Licenciatura em História - UFPel','','publish','closed','closed','','licenciatura-em-historia-ufpel','','','2023-02-06 17:55:48','2023-02-06 17:55:48','',8,'http://localhost:10014/?page_id=49',0,'page','',0);
INSERT INTO `wp_posts` VALUES (50,1,'2023-02-06 17:54:04','2023-02-06 17:54:04','','Licenciatura em História - UFPel','','inherit','closed','closed','','49-revision-v1','','','2023-02-06 17:54:04','2023-02-06 17:54:04','',49,'http://localhost:10014/?p=50',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (51,1,'2023-02-06 17:58:29','2023-02-06 17:58:29','','Licenciatura em Matemática - UFPel','','publish','closed','closed','','licenciatura-em-matematica-ufpel','','','2023-02-06 17:58:47','2023-02-06 17:58:47','',8,'http://localhost:10014/?page_id=51',0,'page','',0);
INSERT INTO `wp_posts` VALUES (52,1,'2023-02-06 17:58:29','2023-02-06 17:58:29','','Licenciatura em Matemática - UFPel','','inherit','closed','closed','','51-revision-v1','','','2023-02-06 17:58:29','2023-02-06 17:58:29','',51,'http://localhost:10014/?p=52',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (53,1,'2023-02-06 18:01:07','2023-02-06 18:01:07','','Licenciatura em Pedagogia - FURG','','publish','closed','closed','','licenciatura-em-pedagogia-furg','','','2023-02-06 18:01:19','2023-02-06 18:01:19','',8,'http://localhost:10014/?page_id=53',0,'page','',0);
INSERT INTO `wp_posts` VALUES (54,1,'2023-02-06 18:01:07','2023-02-06 18:01:07','','Licenciatura em Pedagogia - FURG','','inherit','closed','closed','','53-revision-v1','','','2023-02-06 18:01:07','2023-02-06 18:01:07','',53,'http://localhost:10014/?p=54',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (55,1,'2023-02-06 18:01:47','2023-02-06 18:01:47','','Licenciatura em Computação  - UFSM','','publish','closed','closed','','licenciatura-em-computacao-ufsm','','','2023-02-06 18:01:59','2023-02-06 18:01:59','',8,'http://localhost:10014/?page_id=55',0,'page','',0);
INSERT INTO `wp_posts` VALUES (56,1,'2023-02-06 18:01:47','2023-02-06 18:01:47','','Licenciatura em Computação  - UFSM','','inherit','closed','closed','','55-revision-v1','','','2023-02-06 18:01:47','2023-02-06 18:01:47','',55,'http://localhost:10014/?p=56',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (57,1,'2023-02-06 18:02:26','2023-02-06 18:02:26','','Licenciatura em Educação Especial   - UFSM','','publish','closed','closed','','licenciatura-em-educacao-especial-ufsm','','','2023-02-06 18:02:49','2023-02-06 18:02:49','',8,'http://localhost:10014/?page_id=57',0,'page','',0);
INSERT INTO `wp_posts` VALUES (58,1,'2023-02-06 18:02:26','2023-02-06 18:02:26','','Licenciatura em Educação Especial   - UFSM','','inherit','closed','closed','','57-revision-v1','','','2023-02-06 18:02:26','2023-02-06 18:02:26','',57,'http://localhost:10014/?p=58',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (59,1,'2023-02-06 18:03:18','2023-02-06 18:03:18','','Linguagens - Letras - IFSUL','','publish','closed','closed','','linguagens-letras-ifsul','','','2023-02-06 18:04:02','2023-02-06 18:04:02','',8,'http://localhost:10014/?page_id=59',0,'page','',0);
INSERT INTO `wp_posts` VALUES (60,1,'2023-02-06 18:03:18','2023-02-06 18:03:18','','Linguagens - Letras - IFSUL','','inherit','closed','closed','','59-revision-v1','','','2023-02-06 18:03:18','2023-02-06 18:03:18','',59,'http://localhost:10014/?p=60',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (61,1,'2023-02-06 18:04:41','2023-02-06 18:04:41','','Tecnologia em Sistemas para a Internet - IFSUL','','publish','closed','closed','','tecnologia-em-sistemas-para-a-internet-ifsul','','','2023-02-06 18:04:47','2023-02-06 18:04:47','',8,'http://localhost:10014/?page_id=61',0,'page','',0);
INSERT INTO `wp_posts` VALUES (62,1,'2023-02-06 18:04:41','2023-02-06 18:04:41','','Tecnologia em Sistemas para a Internet - IFSUL','','inherit','closed','closed','','61-revision-v1','','','2023-02-06 18:04:41','2023-02-06 18:04:41','',61,'http://localhost:10014/?p=62',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (63,1,'2023-02-06 18:20:41','2023-02-06 18:20:41','','Especialização em Artes - UFPel','','publish','closed','closed','','especializacao-em-artes-ufpel','','','2023-02-06 18:20:55','2023-02-06 18:20:55','',8,'http://localhost:10014/?page_id=63',0,'page','',0);
INSERT INTO `wp_posts` VALUES (64,1,'2023-02-06 18:20:41','2023-02-06 18:20:41','','Especialização em Artes - UFPel','','inherit','closed','closed','','63-revision-v1','','','2023-02-06 18:20:41','2023-02-06 18:20:41','',63,'http://localhost:10014/?p=64',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (65,1,'2023-02-06 18:21:43','2023-02-06 18:21:43','','Alfabetização - FURG','','publish','closed','closed','','alfabetizacao-furg','','','2023-02-06 18:21:54','2023-02-06 18:21:54','',8,'http://localhost:10014/?page_id=65',0,'page','',0);
INSERT INTO `wp_posts` VALUES (66,1,'2023-02-06 18:21:43','2023-02-06 18:21:43','','Alfabetização - FURG','','inherit','closed','closed','','65-revision-v1','','','2023-02-06 18:21:43','2023-02-06 18:21:43','',65,'http://localhost:10014/?p=66',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (67,1,'2023-02-06 18:22:53','2023-02-06 18:22:53','','Matemática, Mídias Digitais e Didática - UFRGS','','publish','closed','closed','','matematica-midias-digitais-e-didatica-ufrgs','','','2023-02-06 18:23:06','2023-02-06 18:23:06','',8,'http://localhost:10014/?page_id=67',0,'page','',0);
INSERT INTO `wp_posts` VALUES (68,1,'2023-02-06 18:22:53','2023-02-06 18:22:53','','Matemática, Mídias Digitais e Didática - UFRGS','','inherit','closed','closed','','67-revision-v1','','','2023-02-06 18:22:53','2023-02-06 18:22:53','',67,'http://localhost:10014/?p=68',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (69,1,'2023-02-06 18:23:40','2023-02-06 18:23:40','','Educação Ambiental - UFSM','','publish','closed','closed','','educacao-ambiental-ufsm','','','2023-02-06 18:23:52','2023-02-06 18:23:52','',8,'http://localhost:10014/?page_id=69',0,'page','',0);
INSERT INTO `wp_posts` VALUES (70,1,'2023-02-06 18:23:40','2023-02-06 18:23:40','','Educação Ambiental - UFSM','','inherit','closed','closed','','69-revision-v1','','','2023-02-06 18:23:40','2023-02-06 18:23:40','',69,'http://localhost:10014/?p=70',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (71,1,'2023-02-06 18:24:27','2023-02-06 18:24:27','','Informática Instrumental para Professores da Educação Básica - UFRGS','','publish','closed','closed','','informatica-instrumental-para-professores-da-educacao-basica-ufrgs','','','2023-02-06 18:24:50','2023-02-06 18:24:50','',8,'http://localhost:10014/?page_id=71',0,'page','',0);
INSERT INTO `wp_posts` VALUES (72,1,'2023-02-06 18:24:27','2023-02-06 18:24:27','','Informática Instrumental para Professores da Educação Básica - UFRGS','','inherit','closed','closed','','71-revision-v1','','','2023-02-06 18:24:27','2023-02-06 18:24:27','',71,'http://localhost:10014/?p=72',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (73,1,'2023-02-06 18:26:18','2023-02-06 18:26:18','','Gestão Pública - UFRGS','','publish','closed','closed','','gestao-publica-ufrgs','','','2023-02-06 18:26:27','2023-02-06 18:26:27','',8,'http://localhost:10014/?page_id=73',0,'page','',0);
INSERT INTO `wp_posts` VALUES (74,1,'2023-02-06 18:26:18','2023-02-06 18:26:18','','Gestão Pública - UFRGS','','inherit','closed','closed','','73-revision-v1','','','2023-02-06 18:26:18','2023-02-06 18:26:18','',73,'http://localhost:10014/?p=74',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (75,1,'2023-02-06 18:26:59','2023-02-06 18:26:59','','Gestão em Saúde - UFRGS','','publish','closed','closed','','gestao-em-saude-ufrgs','','','2023-02-06 18:27:15','2023-02-06 18:27:15','',8,'http://localhost:10014/?page_id=75',0,'page','',0);
INSERT INTO `wp_posts` VALUES (76,1,'2023-02-06 18:26:59','2023-02-06 18:26:59','','Gestão em Saúde - UFRGS','','inherit','closed','closed','','75-revision-v1','','','2023-02-06 18:26:59','2023-02-06 18:26:59','',75,'http://localhost:10014/?p=76',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (77,1,'2023-02-06 18:28:35','2023-02-06 18:28:35','','Gestão Pública Municipal - UFRGS','','publish','closed','closed','','gestao-publica-municipal-ufrgs','','','2023-02-06 18:28:44','2023-02-06 18:28:44','',8,'http://localhost:10014/?page_id=77',0,'page','',0);
INSERT INTO `wp_posts` VALUES (78,1,'2023-02-06 18:28:35','2023-02-06 18:28:35','','Gestão Pública Municipal - UFRGS','','inherit','closed','closed','','77-revision-v1','','','2023-02-06 18:28:35','2023-02-06 18:28:35','',77,'http://localhost:10014/?p=78',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (79,1,'2023-02-06 18:30:03','2023-02-06 18:30:03','','Gestão de Polos - UFPel','','publish','closed','closed','','gestao-de-polos-ufpel','','','2023-02-06 18:30:12','2023-02-06 18:30:12','',8,'http://localhost:10014/?page_id=79',0,'page','',0);
INSERT INTO `wp_posts` VALUES (80,1,'2023-02-06 18:30:03','2023-02-06 18:30:03','','Gestão de Polos - UFPel','','inherit','closed','closed','','79-revision-v1','','','2023-02-06 18:30:03','2023-02-06 18:30:03','',79,'http://localhost:10014/?p=80',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (81,1,'2023-02-06 18:30:56','2023-02-06 18:30:56','','Mídias na Educação - IFSUL','','publish','closed','closed','','midias-na-educacao-ifsul','','','2023-02-06 18:30:56','2023-02-06 18:30:56','',8,'http://localhost:10014/?page_id=81',0,'page','',0);
INSERT INTO `wp_posts` VALUES (82,1,'2023-02-06 18:30:56','2023-02-06 18:30:56','','Mídias na Educação - IFSUL','','inherit','closed','closed','','81-revision-v1','','','2023-02-06 18:30:56','2023-02-06 18:30:56','',81,'http://localhost:10014/?p=82',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (83,1,'2023-02-06 18:31:40','2023-02-06 18:31:40','','Gestão Educacional - UFSM','','publish','closed','closed','','gestao-educacional-ufsm','','','2023-02-06 18:31:53','2023-02-06 18:31:53','',8,'http://localhost:10014/?page_id=83',0,'page','',0);
INSERT INTO `wp_posts` VALUES (84,1,'2023-02-06 18:31:40','2023-02-06 18:31:40','','Gestão Educacional - UFSM','','inherit','closed','closed','','83-revision-v1','','','2023-02-06 18:31:40','2023-02-06 18:31:40','',83,'http://localhost:10014/?p=84',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (85,1,'2023-02-06 18:33:02','2023-02-06 18:33:02','','Educação de jovens e adultos na diversidade - FURG','','publish','closed','closed','','educacao-de-jovens-e-adultos-na-diversidade-furg','','','2023-02-06 18:33:21','2023-02-06 18:33:21','',8,'http://localhost:10014/?page_id=85',0,'page','',0);
INSERT INTO `wp_posts` VALUES (86,1,'2023-02-06 18:33:02','2023-02-06 18:33:02','','Educação de jovens e adultos na diversidade - FURG','','inherit','closed','closed','','85-revision-v1','','','2023-02-06 18:33:02','2023-02-06 18:33:02','',85,'http://localhost:10014/?p=86',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (87,1,'2023-02-06 18:59:26','2023-02-06 18:59:26','','Tecnologias da Informação e da Comunicação na Educação - FURG','','publish','closed','closed','','tecnologias-da-informacao-e-da-comunicacao-na-educacao-furg','','','2023-02-06 18:59:42','2023-02-06 18:59:42','',8,'http://localhost:10014/?page_id=87',0,'page','',0);
INSERT INTO `wp_posts` VALUES (88,1,'2023-02-06 18:59:26','2023-02-06 18:59:26','','Tecnologias da Informação e da Comunicação na Educação - FURG','','inherit','closed','closed','','87-revision-v1','','','2023-02-06 18:59:26','2023-02-06 18:59:26','',87,'http://localhost:10014/?p=88',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (89,1,'2023-02-06 19:11:55','2023-02-06 19:11:55','','Rio Grande do Sul: sociedade, política e cultura - FURG','','publish','closed','closed','','rio-grande-do-sul-sociedade-politica-e-cultura-furg','','','2023-02-06 19:12:13','2023-02-06 19:12:13','',8,'http://localhost:10014/?page_id=89',0,'page','',0);
INSERT INTO `wp_posts` VALUES (90,1,'2023-02-06 19:11:55','2023-02-06 19:11:55','','Rio Grande do Sul: sociedade, política e cultura - FURG','','inherit','closed','closed','','89-revision-v1','','','2023-02-06 19:11:55','2023-02-06 19:11:55','',89,'http://localhost:10014/?p=90',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (91,1,'2023-02-06 19:13:53','2023-02-06 19:13:53','','Matemática - FURG','','publish','closed','closed','','matematica-furg','','','2023-02-06 19:15:12','2023-02-06 19:15:12','',8,'http://localhost:10014/?page_id=91',0,'page','',0);
INSERT INTO `wp_posts` VALUES (92,1,'2023-02-06 19:13:53','2023-02-06 19:13:53','','Matemática - FURG','','inherit','closed','closed','','91-revision-v1','','','2023-02-06 19:13:53','2023-02-06 19:13:53','',91,'http://localhost:10014/?p=92',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (93,1,'2023-02-06 19:17:05','2023-02-06 19:17:05','','Educação Física  e Anos Iniciais - UFSM','','publish','closed','closed','','educacao-fisica-e-anos-iniciais-ufsm','','','2023-02-06 19:23:00','2023-02-06 19:23:00','',8,'http://localhost:10014/?page_id=93',0,'page','',0);
INSERT INTO `wp_posts` VALUES (94,1,'2023-02-06 19:17:05','2023-02-06 19:17:05','','Educação Física  e Anos Iniciais - UFSM','','inherit','closed','closed','','93-revision-v1','','','2023-02-06 19:17:05','2023-02-06 19:17:05','',93,'http://localhost:10014/?p=94',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (95,1,'2023-02-06 19:24:23','2023-02-06 19:24:23','','Aplicações para a Web - FURG','','publish','closed','closed','','aplicacoes-para-a-web-furg','','','2023-02-06 19:24:31','2023-02-06 19:24:31','',8,'http://localhost:10014/?page_id=95',0,'page','',0);
INSERT INTO `wp_posts` VALUES (96,1,'2023-02-06 19:24:23','2023-02-06 19:24:23','','Aplicações para a Web - FURG','','inherit','closed','closed','','95-revision-v1','','','2023-02-06 19:24:23','2023-02-06 19:24:23','',95,'http://localhost:10014/?p=96',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (97,1,'2023-02-06 19:28:09','2023-02-06 19:28:09','','Ensino de Sociologia no Ensino Médio - FURG','','publish','closed','closed','','ensino-de-sociologia-no-ensino-medio-furg','','','2023-02-06 19:28:39','2023-02-06 19:28:39','',8,'http://localhost:10014/?page_id=97',0,'page','',0);
INSERT INTO `wp_posts` VALUES (98,1,'2023-02-06 19:28:09','2023-02-06 19:28:09','','Ensino de Sociologia no Ensino Médio - FURG','','inherit','closed','closed','','97-revision-v1','','','2023-02-06 19:28:09','2023-02-06 19:28:09','',97,'http://localhost:10014/?p=98',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (99,1,'2023-02-06 19:31:52','2023-02-06 19:31:52','','Psicopedagogia - UFRGS','','publish','closed','closed','','psicopedagogia-ufrgs','','','2023-02-06 19:32:14','2023-02-06 19:32:14','',8,'http://localhost:10014/?page_id=99',0,'page','',0);
INSERT INTO `wp_posts` VALUES (100,1,'2023-02-06 19:31:52','2023-02-06 19:31:52','','Psicopedagogia - UFRGS','','inherit','closed','closed','','99-revision-v1','','','2023-02-06 19:31:52','2023-02-06 19:31:52','',99,'http://localhost:10014/?p=100',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (101,1,'2023-02-06 19:33:01','2023-02-06 19:33:01','','Filosofia - UFPel','','publish','closed','closed','','filosofia-ufpel','','','2023-02-06 19:35:23','2023-02-06 19:35:23','',8,'http://localhost:10014/?page_id=101',0,'page','',0);
INSERT INTO `wp_posts` VALUES (102,1,'2023-02-06 19:33:01','2023-02-06 19:33:01','','Filosofia - UFPel','','inherit','closed','closed','','101-revision-v1','','','2023-02-06 19:33:01','2023-02-06 19:33:01','',101,'http://localhost:10014/?p=102',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (103,1,'2023-02-06 19:36:39','2023-02-06 19:36:39','','Educação em Direitos Humanos - FURG','','publish','closed','closed','','educacao-em-direitos-humanos-furg','','','2023-02-06 19:36:40','2023-02-06 19:36:40','',8,'http://localhost:10014/?page_id=103',0,'page','',0);
INSERT INTO `wp_posts` VALUES (104,1,'2023-02-06 19:36:39','2023-02-06 19:36:39','','Educação em Direitos Humanos - FURG','','inherit','closed','closed','','103-revision-v1','','','2023-02-06 19:36:39','2023-02-06 19:36:39','',103,'http://localhost:10014/?p=104',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (105,1,'2023-02-06 19:37:45','2023-02-06 19:37:45','','Gestão da Educação - UFRGS','','publish','closed','closed','','gestao-da-educacao-ufrgs','','','2023-02-06 19:38:00','2023-02-06 19:38:00','',8,'http://localhost:10014/?page_id=105',0,'page','',0);
INSERT INTO `wp_posts` VALUES (106,1,'2023-02-06 19:37:45','2023-02-06 19:37:45','','Gestão da Educação - UFRGS','','inherit','closed','closed','','105-revision-v1','','','2023-02-06 19:37:45','2023-02-06 19:37:45','',105,'http://localhost:10014/?p=106',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (107,1,'2023-02-06 19:39:04','2023-02-06 19:39:04','','Ciências é 10! - FURG','','publish','closed','closed','','ciencias-e-10-furg','','','2023-02-06 19:39:10','2023-02-06 19:39:10','',8,'http://localhost:10014/?page_id=107',0,'page','',0);
INSERT INTO `wp_posts` VALUES (108,1,'2023-02-06 19:39:04','2023-02-06 19:39:04','','Ciências é 10! - FURG','','inherit','closed','closed','','107-revision-v1','','','2023-02-06 19:39:04','2023-02-06 19:39:04','',107,'http://localhost:10014/?p=108',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (109,1,'2023-02-06 19:40:14','2023-02-06 19:40:14','','Artes - UFPel','','publish','closed','closed','','artes-ufpel','','','2023-02-06 19:40:14','2023-02-06 19:40:14','',8,'http://localhost:10014/?page_id=109',0,'page','',0);
INSERT INTO `wp_posts` VALUES (110,1,'2023-02-06 19:40:14','2023-02-06 19:40:14','','Artes - UFPel','','inherit','closed','closed','','109-revision-v1','','','2023-02-06 19:40:14','2023-02-06 19:40:14','',109,'http://localhost:10014/?p=110',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (111,1,'2023-02-06 19:41:31','2023-02-06 19:41:31','','Educação Física Escolar - UFPel','','publish','closed','closed','','educacao-fisica-escolar-ufpel','','','2023-02-06 19:41:39','2023-02-06 19:41:39','',8,'http://localhost:10014/?page_id=111',0,'page','',0);
INSERT INTO `wp_posts` VALUES (112,1,'2023-02-06 19:41:31','2023-02-06 19:41:31','','Educação Física Escolar - UFPel','','inherit','closed','closed','','111-revision-v1','','','2023-02-06 19:41:31','2023-02-06 19:41:31','',111,'http://localhost:10014/?p=112',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (113,1,'2023-02-06 19:42:40','2023-02-06 19:42:40','','Espaços e possibilidades para a educação continuada - IFSUL','','publish','closed','closed','','espacos-e-possibilidades-para-a-educacao-continuada-ifsul','','','2023-02-06 19:42:46','2023-02-06 19:42:46','',8,'http://localhost:10014/?page_id=113',0,'page','',0);
INSERT INTO `wp_posts` VALUES (114,1,'2023-02-06 19:42:40','2023-02-06 19:42:40','','Espaços e possibilidades para a educação continuada - IFSUL','','inherit','closed','closed','','113-revision-v1','','','2023-02-06 19:42:40','2023-02-06 19:42:40','',113,'http://localhost:10014/?p=114',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (115,1,'2023-02-06 19:47:36','2023-02-06 19:47:36','','Ensino de Filosofia no ensino Médio  - UFSM','','publish','closed','closed','','ensino-de-filosofia-no-ensino-medio-ufsm','','','2023-02-06 19:48:11','2023-02-06 19:48:11','',8,'http://localhost:10014/?page_id=115',0,'page','',0);
INSERT INTO `wp_posts` VALUES (116,1,'2023-02-06 19:47:36','2023-02-06 19:47:36','','Ensino de Filosofia no ensino Médio  - UFSM','','inherit','closed','closed','','115-revision-v1','','','2023-02-06 19:47:36','2023-02-06 19:47:36','',115,'http://localhost:10014/?p=116',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (117,1,'2023-02-06 19:50:07','2023-02-06 19:50:07','','Atendimento Educacional Especializado  - FURG','','publish','closed','closed','','atendimento-educacional-especializado-furg','','','2023-02-06 19:50:26','2023-02-06 19:50:26','',8,'http://localhost:10014/?page_id=117',0,'page','',0);
INSERT INTO `wp_posts` VALUES (118,1,'2023-02-06 19:50:07','2023-02-06 19:50:07','','Atendimento Educacional Especializado  - FURG','','inherit','closed','closed','','117-revision-v1','','','2023-02-06 19:50:07','2023-02-06 19:50:07','',117,'http://localhost:10014/?p=118',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (119,1,'2023-02-06 19:53:59','2023-02-06 19:53:59','','Mídia e Educação - UNIPAMPA','','publish','closed','closed','','midia-e-educacao-unipampa','','','2023-02-06 19:54:40','2023-02-06 19:54:40','',8,'http://localhost:10014/?page_id=119',0,'page','',0);
INSERT INTO `wp_posts` VALUES (120,1,'2023-02-06 19:53:59','2023-02-06 19:53:59','','Mídia e Educação - UNIPAMPA','','inherit','closed','closed','','119-revision-v1','','','2023-02-06 19:53:59','2023-02-06 19:53:59','',119,'http://localhost:10014/?p=120',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (121,1,'2023-02-06 20:03:49','2023-02-06 20:03:49','','Cursos FIC - IFSUL','','publish','closed','closed','','cursos-fic-ifsul','','','2023-02-06 20:04:38','2023-02-06 20:04:38','',8,'http://localhost:10014/?page_id=121',0,'page','',0);
INSERT INTO `wp_posts` VALUES (122,1,'2023-02-06 20:03:49','2023-02-06 20:03:49','','Cursos FIC - IFSUL','','inherit','closed','closed','','121-revision-v1','','','2023-02-06 20:03:49','2023-02-06 20:03:49','',121,'http://localhost:10014/?p=122',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (123,1,'2023-02-06 20:12:30','0000-00-00 00:00:00','','404','','draft','closed','closed','','','','','2023-02-06 20:12:30','2023-02-06 20:12:30','',0,'http://localhost:10014/?page_id=123',0,'page','',0);
INSERT INTO `wp_posts` VALUES (124,1,'2023-02-09 19:42:22','2023-02-09 19:42:22','sadadadasdadasdadad','Vagas','','trash','open','open','','vagas__trashed','','','2023-02-09 19:43:02','2023-02-09 19:43:02','',0,'http://localhost:10014/?p=124',0,'post','',0);
INSERT INTO `wp_posts` VALUES (125,1,'2023-02-09 19:42:22','2023-02-09 19:42:22','sadadadasda','Vagas','','inherit','closed','closed','','124-revision-v1','','','2023-02-09 19:42:22','2023-02-09 19:42:22','',124,'http://localhost:10014/?p=125',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (126,1,'2023-02-09 19:42:40','2023-02-09 19:42:40','sadadadasdadasdadad','Vagas','','inherit','closed','closed','','124-revision-v1','','','2023-02-09 19:42:40','2023-02-09 19:42:40','',124,'http://localhost:10014/?p=126',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (128,1,'2023-02-09 19:56:23','2023-02-09 19:56:23','','Blog','','publish','closed','closed','','blog','','','2023-02-09 19:56:40','2023-02-09 19:56:40','',0,'http://localhost:10014/?page_id=128',0,'page','',0);
INSERT INTO `wp_posts` VALUES (129,1,'2023-02-09 19:56:23','2023-02-09 19:56:23','','Blog','','inherit','closed','closed','','128-revision-v1','','','2023-02-09 19:56:23','2023-02-09 19:56:23','',128,'http://localhost:10014/?p=129',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (130,1,'2023-02-09 19:57:37','2023-02-09 19:57:37','olas','ola','','trash','open','open','','ola__trashed','','','2023-02-17 19:56:25','2023-02-17 19:56:25','',0,'http://localhost:10014/?p=130',0,'post','',0);
INSERT INTO `wp_posts` VALUES (131,1,'2023-02-09 19:57:37','2023-02-09 19:57:37','olas','ola','','inherit','closed','closed','','130-revision-v1','','','2023-02-09 19:57:37','2023-02-09 19:57:37','',130,'http://localhost:10014/?p=131',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (132,1,'2023-02-09 19:57:46','2023-02-09 19:57:46','','ola','','inherit','closed','closed','','130-autosave-v1','','','2023-02-09 19:57:46','2023-02-09 19:57:46','',130,'http://localhost:10014/?p=132',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (134,1,'2023-02-14 18:08:39','2023-02-14 18:08:39','','Sobre','','publish','closed','closed','','sobre','','','2023-02-14 18:08:47','2023-02-14 18:08:47','',0,'http://localhost:10014/?page_id=134',0,'page','',0);
INSERT INTO `wp_posts` VALUES (135,1,'2023-02-14 18:08:39','2023-02-14 18:08:39','','Sobre','','inherit','closed','closed','','134-revision-v1','','','2023-02-14 18:08:39','2023-02-14 18:08:39','',134,'http://localhost:10014/?p=135',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (136,1,'2023-02-15 17:14:26','2023-02-15 17:14:26','','FAQ','','publish','closed','closed','','faq','','','2023-02-15 17:18:25','2023-02-15 17:18:25','',0,'http://localhost:10014/?page_id=136',0,'page','',0);
INSERT INTO `wp_posts` VALUES (137,1,'2023-02-15 17:14:26','2023-02-15 17:14:26','','FAQ','','inherit','closed','closed','','136-revision-v1','','','2023-02-15 17:14:26','2023-02-15 17:14:26','',136,'http://localhost:10014/?p=137',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (138,1,'2023-02-15 17:18:51','2023-02-15 17:18:51','','Biblioteca','','publish','closed','closed','','biblioteca','','','2023-02-15 17:20:08','2023-02-15 17:20:08','',0,'http://localhost:10014/?page_id=138',0,'page','',0);
INSERT INTO `wp_posts` VALUES (139,1,'2023-02-15 17:18:51','2023-02-15 17:18:51','','Biblioteca','','inherit','closed','closed','','138-revision-v1','','','2023-02-15 17:18:51','2023-02-15 17:18:51','',138,'http://localhost:10014/?p=139',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (140,1,'2023-02-15 17:49:52','2023-02-15 17:49:52','','Contato','','publish','closed','closed','','contato','','','2023-02-15 17:50:11','2023-02-15 17:50:11','',0,'http://localhost:10014/?page_id=140',0,'page','',0);
INSERT INTO `wp_posts` VALUES (141,1,'2023-02-15 17:49:52','2023-02-15 17:49:52','','Contato','','inherit','closed','closed','','140-revision-v1','','','2023-02-15 17:49:52','2023-02-15 17:49:52','',140,'http://localhost:10014/?p=141',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (142,1,'2023-02-15 20:06:40','2023-02-15 20:06:40','','Tes','','trash','closed','closed','','tes__trashed','','','2023-02-16 16:10:04','2023-02-16 16:10:04','',0,'http://localhost:10014/?page_id=142',0,'page','',0);
INSERT INTO `wp_posts` VALUES (143,1,'2023-02-15 20:06:40','2023-02-15 20:06:40','','Tes','','inherit','closed','closed','','142-revision-v1','','','2023-02-15 20:06:40','2023-02-15 20:06:40','',142,'http://localhost:10014/?p=143',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (144,1,'2023-02-17 19:52:21','2023-02-17 19:52:21','asdadsadd','dasada','','trash','open','open','','dasada__trashed','','','2023-02-17 19:56:32','2023-02-17 19:56:32','',0,'http://localhost:10014/?p=144',0,'post','',0);
INSERT INTO `wp_posts` VALUES (145,1,'2023-02-17 19:52:21','2023-02-17 19:52:21','','dasada','','inherit','closed','closed','','144-revision-v1','','','2023-02-17 19:52:21','2023-02-17 19:52:21','',144,'http://localhost:10014/?p=145',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (146,1,'2023-02-17 19:55:20','2023-02-17 19:55:20','asdadsadd','dasada','','inherit','closed','closed','','144-revision-v1','','','2023-02-17 19:55:20','2023-02-17 19:55:20','',144,'http://localhost:10014/?p=146',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (149,1,'2023-02-22 15:57:46','2023-02-22 15:57:46','','menuteste','','trash','closed','closed','','menuteste__trashed','','','2023-02-23 16:29:23','2023-02-23 16:29:23','',0,'http://localhost:10014/?page_id=149',0,'page','',0);
INSERT INTO `wp_posts` VALUES (150,1,'2023-02-22 15:57:46','2023-02-22 15:57:46','','menuteste','','inherit','closed','closed','','149-revision-v1','','','2023-02-22 15:57:46','2023-02-22 15:57:46','',149,'http://localhost:10014/?p=150',0,'revision','',0);
/*!40000 ALTER TABLE `wp_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_term_relationships`
--

DROP TABLE IF EXISTS `wp_term_relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_term_relationships`
--

LOCK TABLES `wp_term_relationships` WRITE;
/*!40000 ALTER TABLE `wp_term_relationships` DISABLE KEYS */;
INSERT INTO `wp_term_relationships` VALUES (1,1,0);
INSERT INTO `wp_term_relationships` VALUES (16,6,0);
INSERT INTO `wp_term_relationships` VALUES (124,1,0);
INSERT INTO `wp_term_relationships` VALUES (130,8,0);
INSERT INTO `wp_term_relationships` VALUES (144,7,0);
INSERT INTO `wp_term_relationships` VALUES (144,8,0);
/*!40000 ALTER TABLE `wp_term_relationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_term_taxonomy`
--

DROP TABLE IF EXISTS `wp_term_taxonomy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_term_taxonomy`
--

LOCK TABLES `wp_term_taxonomy` WRITE;
/*!40000 ALTER TABLE `wp_term_taxonomy` DISABLE KEYS */;
INSERT INTO `wp_term_taxonomy` VALUES (1,1,'category','',0,0);
INSERT INTO `wp_term_taxonomy` VALUES (2,2,'category','',4,0);
INSERT INTO `wp_term_taxonomy` VALUES (3,3,'category','',4,0);
INSERT INTO `wp_term_taxonomy` VALUES (4,4,'category','',0,0);
INSERT INTO `wp_term_taxonomy` VALUES (5,5,'category','',4,0);
INSERT INTO `wp_term_taxonomy` VALUES (6,6,'category','',2,0);
INSERT INTO `wp_term_taxonomy` VALUES (7,7,'post_tag','',0,0);
INSERT INTO `wp_term_taxonomy` VALUES (8,8,'category','',0,0);
/*!40000 ALTER TABLE `wp_term_taxonomy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_termmeta`
--

DROP TABLE IF EXISTS `wp_termmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_termmeta`
--

LOCK TABLES `wp_termmeta` WRITE;
/*!40000 ALTER TABLE `wp_termmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_termmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_terms`
--

DROP TABLE IF EXISTS `wp_terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_terms`
--

LOCK TABLES `wp_terms` WRITE;
/*!40000 ALTER TABLE `wp_terms` DISABLE KEYS */;
INSERT INTO `wp_terms` VALUES (1,'Uncategorized','uncategorized',0);
INSERT INTO `wp_terms` VALUES (2,'Graduação','graduacao',0);
INSERT INTO `wp_terms` VALUES (3,'Pós Graduação','pos-graduacao',0);
INSERT INTO `wp_terms` VALUES (4,'Cursos','cursos',0);
INSERT INTO `wp_terms` VALUES (5,'Técnicos','tecnicos',0);
INSERT INTO `wp_terms` VALUES (6,'Licenciatura','licenciatura',0);
INSERT INTO `wp_terms` VALUES (7,'editais','editais',0);
INSERT INTO `wp_terms` VALUES (8,'editais','editais',0);
/*!40000 ALTER TABLE `wp_terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_usermeta`
--

DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_usermeta`
--

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','polo');
INSERT INTO `wp_usermeta` VALUES (2,1,'first_name','');
INSERT INTO `wp_usermeta` VALUES (3,1,'last_name','');
INSERT INTO `wp_usermeta` VALUES (4,1,'description','');
INSERT INTO `wp_usermeta` VALUES (5,1,'rich_editing','true');
INSERT INTO `wp_usermeta` VALUES (6,1,'syntax_highlighting','true');
INSERT INTO `wp_usermeta` VALUES (7,1,'comment_shortcuts','false');
INSERT INTO `wp_usermeta` VALUES (8,1,'admin_color','fresh');
INSERT INTO `wp_usermeta` VALUES (9,1,'use_ssl','0');
INSERT INTO `wp_usermeta` VALUES (10,1,'show_admin_bar_front','false');
INSERT INTO `wp_usermeta` VALUES (11,1,'locale','');
INSERT INTO `wp_usermeta` VALUES (12,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}');
INSERT INTO `wp_usermeta` VALUES (13,1,'wp_user_level','10');
INSERT INTO `wp_usermeta` VALUES (14,1,'dismissed_wp_pointers','');
INSERT INTO `wp_usermeta` VALUES (15,1,'show_welcome_panel','0');
INSERT INTO `wp_usermeta` VALUES (16,1,'session_tokens','a:5:{s:64:\"aef075ce0cf0783989bc2adebd77f9b8e76626e29032ce0f77c76d725e33fa2a\";a:4:{s:10:\"expiration\";i:1677181298;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:101:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36\";s:5:\"login\";i:1675971698;}s:64:\"0d68443ac074980939318997a6aca18cf24cd81a50a4ac42fe5fca878e395e9c\";a:4:{s:10:\"expiration\";i:1677258354;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:101:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36\";s:5:\"login\";i:1676048754;}s:64:\"82560f4cf2ea0a012b31d9ef70555d1f0419564e61ad91ce2ccf4ba799dc348c\";a:4:{s:10:\"expiration\";i:1677607658;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:101:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36\";s:5:\"login\";i:1676398058;}s:64:\"308551a26790620c5e6bc2327ef72bf3df42c8bc960b8b775605b75795c5ae24\";a:4:{s:10:\"expiration\";i:1677254234;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:101:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36\";s:5:\"login\";i:1677081434;}s:64:\"8fa9bc7e02352e87d5936bdb2ea66ef222efeb34b206009a1b456a6a5571eff4\";a:4:{s:10:\"expiration\";i:1677342531;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:101:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36\";s:5:\"login\";i:1677169731;}}');
INSERT INTO `wp_usermeta` VALUES (17,1,'wp_user-settings','editor=html&hidetb=0&mfold=o&cats=pop');
INSERT INTO `wp_usermeta` VALUES (18,1,'wp_user-settings-time','1676664049');
INSERT INTO `wp_usermeta` VALUES (19,1,'wp_dashboard_quick_press_last_post_id','148');
INSERT INTO `wp_usermeta` VALUES (20,1,'community-events-location','a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}');
INSERT INTO `wp_usermeta` VALUES (21,1,'meta-box-order_dashboard','a:4:{s:6:\"normal\";s:38:\"dashboard_right_now,dashboard_activity\";s:4:\"side\";s:0:\"\";s:7:\"column3\";s:61:\"dashboard_site_health,dashboard_primary,dashboard_quick_press\";s:7:\"column4\";s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (22,1,'closedpostboxes_dashboard','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (23,1,'metaboxhidden_dashboard','a:0:{}');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_users`
--

DROP TABLE IF EXISTS `wp_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_users`
--

LOCK TABLES `wp_users` WRITE;
/*!40000 ALTER TABLE `wp_users` DISABLE KEYS */;
INSERT INTO `wp_users` VALUES (1,'polo','$P$B4UjD134IBCcEpsu2Rk6yizGtU0wYb/','polo','23232x@gmail.com','http://localhost:10014','2023-02-06 16:01:22','',0,'polo');
/*!40000 ALTER TABLE `wp_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-03 13:45:47
