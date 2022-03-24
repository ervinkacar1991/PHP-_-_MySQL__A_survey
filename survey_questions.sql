-- -------------------------------------------------------------
-- TablePlus 3.11.0(352)
--
-- https://tableplus.com/
--
-- Database: eki
-- Generation Time: 2021-11-12 17:22:58.5770
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


INSERT INTO `survey_questions` (`id`, `survey_id`, `question`, `correct`) VALUES
('1', '1', 'Da', '1'),
('2', '1', 'Ne', '0'),
('3', '2', 'Da', '0'),
('4', '2', 'Ne', '1'),
('5', '3', 'Da', '1'),
('6', '3', 'Ne', '0'),
('7', '4', '1', '0'),
('8', '4', '2', '0'),
('9', '4', '3', '1'),
('10', '4', '4', '0'),
('11', '5', '1', '0'),
('12', '5', '2', '1'),
('13', '5', '3', '0'),
('14', '5', '4', '0');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;