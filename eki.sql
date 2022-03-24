-- -------------------------------------------------------------
-- TablePlus 3.11.0(352)
--
-- https://tableplus.com/
--
-- Database: eki
-- Generation Time: 2021-10-20 21:53:27.3170
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `survey_questions` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `survey_id` int(6) unsigned DEFAULT NULL,
  `question` varchar(255) NOT NULL,
  `correct` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `survey_id` (`survey_id`),
  CONSTRAINT `survey_questions_ibfk_1` FOREIGN KEY (`survey_id`) REFERENCES `surveys` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

CREATE TABLE `survey_user` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(6) unsigned DEFAULT NULL,
  `survey_id` int(6) unsigned DEFAULT NULL,
  `survey_question_id` int(6) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `survey_id` (`survey_id`),
  KEY `survey_question_id` (`survey_question_id`),
  CONSTRAINT `survey_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `survey_user_ibfk_2` FOREIGN KEY (`survey_id`) REFERENCES `surveys` (`id`),
  CONSTRAINT `survey_user_ibfk_3` FOREIGN KEY (`survey_question_id`) REFERENCES `survey_questions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

CREATE TABLE `surveys` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE TABLE `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `brindexa` varchar(255) NOT NULL,
  `prioritet` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;