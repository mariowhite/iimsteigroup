-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 03:52 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataflaqs`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `name`, `icon`) VALUES
(1, 'Business', ''),
(2, 'Finance', ''),
(3, 'Marketing', ''),
(4, 'Import/Export', ''),
(5, 'Networking', ''),
(6, 'Database', ''),
(7, 'Programming', ''),
(8, 'Digital Photography', ''),
(9, 'Production', ''),
(10, 'Publishing', ''),
(11, 'Cooking', ''),
(12, 'Transport', ''),
(13, 'Gestion', ''),
(14, 'Audit', ''),
(15, 'Security', ''),
(16, 'Technology', ''),
(17, 'IT', '');

-- --------------------------------------------------------

--
-- Table structure for table `course_review`
--

DROP TABLE IF EXISTS `course_review`;
CREATE TABLE IF NOT EXISTS `course_review` (
  `id_formation_courses` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `content` float NOT NULL,
  `knowledge` float NOT NULL,
  `assigments` float NOT NULL,
  `classroom` float NOT NULL,
  `instructor` float NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formation_categories`
--

DROP TABLE IF EXISTS `formation_categories`;
CREATE TABLE IF NOT EXISTS `formation_categories` (
  `id_formation_course` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formation_categories`
--

INSERT INTO `formation_categories` (`id_formation_course`, `id_category`) VALUES
(1, 1),
(1, 4),
(1, 12),
(2, 14),
(2, 15),
(2, 16),
(3, 13),
(4, 15),
(4, 5),
(4, 17);

-- --------------------------------------------------------

--
-- Table structure for table `formation_courses`
--

DROP TABLE IF EXISTS `formation_courses`;
CREATE TABLE IF NOT EXISTS `formation_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` text NOT NULL,
  `date` varchar(150) NOT NULL,
  `place` text NOT NULL,
  `duration` text NOT NULL,
  `prerequisite` text NOT NULL,
  `price` float DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `id_instructor` int(11) NOT NULL,
  `objetives` text NOT NULL,
  `description_file` text NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formation_courses`
--

INSERT INTO `formation_courses` (`id`, `course_name`, `date`, `place`, `duration`, `prerequisite`, `price`, `rating`, `id_instructor`, `objetives`, `description_file`, `image`) VALUES
(1, 'Séminaire sur la Logistique des Transports', '2014-04-19', 'Mali', '4 Jours', 'None', 1200, 3, 1, 'La logistique est une science jeune et toujours en pleine expansion. Le terme logistique est utilisé partout dans le monde lorsqu’il s’agit de parler de l’organisation des transports, d’envois d’aide humanitaire, de gestion des stocks, de localisation de centres de distribution. Le poste de vice-président logistique est un poste de plus en plus important dans les entreprises. Le vice-président logistique dirige la prévision de la demande, la gestion des commandes, la production et le transport des produits finis. Il a son mot à dire à tous les niveaux de décision, autant stratégique, que tactique ou opérationnel. Sans nul doute, un expert en logistique peut aujourd’hui se trouver facilement un emploi rémunérateur dans un grand nombre de pays.', 'Seminaire_Logistique_Transport_MAI_2014_Mali.dpf', 'angularjs.png'),
(2, 'Gouvernance, audit et sécurité des technologies de l''information', '19 AU 23 DÉCEMBRE 2016', 'PARIS, FRANCE', '25 Hours', 'University/College', 3545, 4, 2, 'D''acquérir les connaissances et les compétences liées aux aspects techniques des Technologies de l''information.\r\nDe comprendre et maîtriser les concepts liés à la gouvernance, au contrôle et à l''audit de sécurité des technologies de l''information.\r\nDe se familiariser avec les nouveaux outils d''analyse des risques liés à l''utilisation des technologies de l''information.\r\nDe maîtriser les techniques informatisées de contrôle et de vérification dans un environnement informatique.\r\n', 'Gouvernance_Informatique_Paris_Décembre_2016.pdf', ''),
(3, 'Le Gestionnaire Publique ', '12 au 23 décembre 2016', 'Montréal, Québec, Canada', '2 Semaines à raison de 5 heures par journée.', 'None', 899, 2, 2, 'Développer ses habiletés de leadership selon ses aptitudes et la rétroaction.\r\nAméliorer ou développer les relations avec son équipe de travail par une communication saine et efficace.\r\nBien comprendre son rôle et ses responsabilités de leader afin de mieux se l''approprier.\r\nMieux se connaître par l''identification de son style de leadership.\r\nBien connaître les fondements éthiques du rôle de leader.\r\nSavoir comment élaborer sa planification stratégique efficacement.\r\nResponsabiliser les membres de son équipe en les impliquant dans le succès du département.\r\nÉtablir et entretenir des relations saines avec ses employés et son équipe par une communication efficace.\r\nMieux définir les rôles de chacun pour améliorer les relations au sein de l’équipe.\r\nBien comprendre les besoins des citoyens et apporter les réponses adéquates\r\nRendre plus efficace la gestion quotidienne des espaces de travail tout en assurance la sécurité des fonctionnaires et leurs bien-être\r\nRendre les processus métiers de la fonction publique plus performante, é moindre couts et plus rapide dans leur exécution\r\nMaitriser les gaspillages et les éliminer pour assurer plus de services rendus au citoyen et gagner sa satisfaction.\r\n', 'Formation_en_Leadership_de_Gestion.pdf', 'programming.jpg'),
(4, 'SECURITE INFORMATIQUE', '20 Janvier 2017', 'BAMAKO, MALI', '2 Hours', 'Bonnes connaissances en réseaux et systèmes.', 49.95, 1, 1, 'Connaître les failles et les menaces des systèmes d''information\r\nMaîtriser le rôle des divers équipements de sécurité\r\nConcevoir et réaliser une architecture de sécurité adaptée\r\nMettre en œuvre les principaux moyens de sécurisation des réseaux\r\nUtiliser des outils de détection de vulnérabilités : scanners, sondes IDS\r\nSécuriser un système Windows et Linux\r\n', 'Formation_Securite_Informatique.pdf', ''),
(8, 'Séminaire sur la Logistique des Transports', '2014-04-19', 'Mali', '4 Jours', 'None', 1200, 3.6, 1, 'La logistique est une science jeune et toujours en pleine expansion. Le terme logistique est utilisé partout dans le monde lorsqu’il s’agit de parler de l’organisation des transports, d’envois d’aide humanitaire, de gestion des stocks, de localisation de centres de distribution. Le poste de vice-président logistique est un poste de plus en plus important dans les entreprises. Le vice-président logistique dirige la prévision de la demande, la gestion des commandes, la production et le transport des produits finis. Il a son mot à dire à tous les niveaux de décision, autant stratégique, que tactique ou opérationnel. Sans nul doute, un expert en logistique peut aujourd’hui se trouver facilement un emploi rémunérateur dans un grand nombre de pays.', 'Seminaire_Logistique_Transport_MAI_2014_Mali.dpf', NULL),
(7, 'Gouvernance, audit et sécurité des technologies de l''information', '19 AU 23 DÉCEMBRE 2016', 'PARIS, FRANCE', '25 Hours', 'University/College', 3545, 4.7, 2, 'D''acquérir les connaissances et les compétences liées aux aspects techniques des Technologies de l''information.\r\nDe comprendre et maîtriser les concepts liés à la gouvernance, au contrôle et à l''audit de sécurité des technologies de l''information.\r\nDe se familiariser avec les nouveaux outils d''analyse des risques liés à l''utilisation des technologies de l''information.\r\nDe maîtriser les techniques informatisées de contrôle et de vérification dans un environnement informatique.\r\n', 'Gouvernance_Informatique_Paris_Décembre_2016.pdf', NULL),
(6, 'Le Gestionnaire Publique ', '12 au 23 décembre 2016', 'Montréal, Québec, Canada', '2 Semaines à raison de 5 heures par journée.', 'None', 899, 2, 2, 'Développer ses habiletés de leadership selon ses aptitudes et la rétroaction.\r\nAméliorer ou développer les relations avec son équipe de travail par une communication saine et efficace.\r\nBien comprendre son rôle et ses responsabilités de leader afin de mieux se l''approprier.\r\nMieux se connaître par l''identification de son style de leadership.\r\nBien connaître les fondements éthiques du rôle de leader.\r\nSavoir comment élaborer sa planification stratégique efficacement.\r\nResponsabiliser les membres de son équipe en les impliquant dans le succès du département.\r\nÉtablir et entretenir des relations saines avec ses employés et son équipe par une communication efficace.\r\nMieux définir les rôles de chacun pour améliorer les relations au sein de l’équipe.\r\nBien comprendre les besoins des citoyens et apporter les réponses adéquates\r\nRendre plus efficace la gestion quotidienne des espaces de travail tout en assurance la sécurité des fonctionnaires et leurs bien-être\r\nRendre les processus métiers de la fonction publique plus performante, é moindre couts et plus rapide dans leur exécution\r\nMaitriser les gaspillages et les éliminer pour assurer plus de services rendus au citoyen et gagner sa satisfaction.\r\n', 'Formation_en_Leadership_de_Gestion.pdf', NULL),
(5, 'SECURITE INFORMATIQUE', '20 Janvier 2017', 'BAMAKO, MALI', '2 Hours', 'Bonnes connaissances en réseaux et systèmes.', 49.95, 3.9, 1, 'Connaître les failles et les menaces des systèmes d''information\r\nMaîtriser le rôle des divers équipements de sécurité\r\nConcevoir et réaliser une architecture de sécurité adaptée\r\nMettre en œuvre les principaux moyens de sécurisation des réseaux\r\nUtiliser des outils de détection de vulnérabilités : scanners, sondes IDS\r\nSécuriser un système Windows et Linux\r\n', 'Formation_Securite_Informatique.pdf', NULL),
(9, 'Séminaire sur la Logistique des Transports', '2014-04-19', 'Mali', '4 Jours', 'None', 1200, 3.6, 1, 'La logistique est une science jeune et toujours en pleine expansion. Le terme logistique est utilisé partout dans le monde lorsqu’il s’agit de parler de l’organisation des transports, d’envois d’aide humanitaire, de gestion des stocks, de localisation de centres de distribution. Le poste de vice-président logistique est un poste de plus en plus important dans les entreprises. Le vice-président logistique dirige la prévision de la demande, la gestion des commandes, la production et le transport des produits finis. Il a son mot à dire à tous les niveaux de décision, autant stratégique, que tactique ou opérationnel. Sans nul doute, un expert en logistique peut aujourd’hui se trouver facilement un emploi rémunérateur dans un grand nombre de pays.', 'Seminaire_Logistique_Transport_MAI_2014_Mali.dpf', NULL),
(10, 'Gouvernance, audit et sécurité des technologies de l''information', '19 AU 23 DÉCEMBRE 2016', 'PARIS, FRANCE', '25 Hours', 'University/College', 3545, 4.7, 2, 'D''acquérir les connaissances et les compétences liées aux aspects techniques des Technologies de l''information.\r\nDe comprendre et maîtriser les concepts liés à la gouvernance, au contrôle et à l''audit de sécurité des technologies de l''information.\r\nDe se familiariser avec les nouveaux outils d''analyse des risques liés à l''utilisation des technologies de l''information.\r\nDe maîtriser les techniques informatisées de contrôle et de vérification dans un environnement informatique.\r\n', 'Gouvernance_Informatique_Paris_Décembre_2016.pdf', NULL),
(11, 'Le Gestionnaire Publique ', '12 au 23 décembre 2016', 'Montréal, Québec, Canada', '2 Semaines à raison de 5 heures par journée.', 'None', 899, 2, 2, 'Développer ses habiletés de leadership selon ses aptitudes et la rétroaction.\r\nAméliorer ou développer les relations avec son équipe de travail par une communication saine et efficace.\r\nBien comprendre son rôle et ses responsabilités de leader afin de mieux se l''approprier.\r\nMieux se connaître par l''identification de son style de leadership.\r\nBien connaître les fondements éthiques du rôle de leader.\r\nSavoir comment élaborer sa planification stratégique efficacement.\r\nResponsabiliser les membres de son équipe en les impliquant dans le succès du département.\r\nÉtablir et entretenir des relations saines avec ses employés et son équipe par une communication efficace.\r\nMieux définir les rôles de chacun pour améliorer les relations au sein de l’équipe.\r\nBien comprendre les besoins des citoyens et apporter les réponses adéquates\r\nRendre plus efficace la gestion quotidienne des espaces de travail tout en assurance la sécurité des fonctionnaires et leurs bien-être\r\nRendre les processus métiers de la fonction publique plus performante, é moindre couts et plus rapide dans leur exécution\r\nMaitriser les gaspillages et les éliminer pour assurer plus de services rendus au citoyen et gagner sa satisfaction.\r\n', 'Formation_en_Leadership_de_Gestion.pdf', NULL),
(12, 'SECURITE INFORMATIQUE', '20 Janvier 2017', 'BAMAKO, MALI', '2 Hours', 'Bonnes connaissances en réseaux et systèmes.', 49.95, 3.9, 1, 'Connaître les failles et les menaces des systèmes d''information\r\nMaîtriser le rôle des divers équipements de sécurité\r\nConcevoir et réaliser une architecture de sécurité adaptée\r\nMettre en œuvre les principaux moyens de sécurisation des réseaux\r\nUtiliser des outils de détection de vulnérabilités : scanners, sondes IDS\r\nSécuriser un système Windows et Linux\r\n', 'Formation_Securite_Informatique.pdf', NULL),
(16, 'Séminaire sur la Logistique des Transports', '2014-04-19', 'Mali', '4 Jours', 'None', 1200, 3.6, 1, 'La logistique est une science jeune et toujours en pleine expansion. Le terme logistique est utilisé partout dans le monde lorsqu’il s’agit de parler de l’organisation des transports, d’envois d’aide humanitaire, de gestion des stocks, de localisation de centres de distribution. Le poste de vice-président logistique est un poste de plus en plus important dans les entreprises. Le vice-président logistique dirige la prévision de la demande, la gestion des commandes, la production et le transport des produits finis. Il a son mot à dire à tous les niveaux de décision, autant stratégique, que tactique ou opérationnel. Sans nul doute, un expert en logistique peut aujourd’hui se trouver facilement un emploi rémunérateur dans un grand nombre de pays.', 'Seminaire_Logistique_Transport_MAI_2014_Mali.dpf', NULL),
(15, 'Gouvernance, audit et sécurité des technologies de l''information', '19 AU 23 DÉCEMBRE 2016', 'PARIS, FRANCE', '25 Hours', 'University/College', 3545, 4.7, 2, 'D''acquérir les connaissances et les compétences liées aux aspects techniques des Technologies de l''information.\r\nDe comprendre et maîtriser les concepts liés à la gouvernance, au contrôle et à l''audit de sécurité des technologies de l''information.\r\nDe se familiariser avec les nouveaux outils d''analyse des risques liés à l''utilisation des technologies de l''information.\r\nDe maîtriser les techniques informatisées de contrôle et de vérification dans un environnement informatique.\r\n', 'Gouvernance_Informatique_Paris_Décembre_2016.pdf', NULL),
(14, 'Le Gestionnaire Publique ', '12 au 23 décembre 2016', 'Montréal, Québec, Canada', '2 Semaines à raison de 5 heures par journée.', 'None', 899, 2, 2, 'Développer ses habiletés de leadership selon ses aptitudes et la rétroaction.\r\nAméliorer ou développer les relations avec son équipe de travail par une communication saine et efficace.\r\nBien comprendre son rôle et ses responsabilités de leader afin de mieux se l''approprier.\r\nMieux se connaître par l''identification de son style de leadership.\r\nBien connaître les fondements éthiques du rôle de leader.\r\nSavoir comment élaborer sa planification stratégique efficacement.\r\nResponsabiliser les membres de son équipe en les impliquant dans le succès du département.\r\nÉtablir et entretenir des relations saines avec ses employés et son équipe par une communication efficace.\r\nMieux définir les rôles de chacun pour améliorer les relations au sein de l’équipe.\r\nBien comprendre les besoins des citoyens et apporter les réponses adéquates\r\nRendre plus efficace la gestion quotidienne des espaces de travail tout en assurance la sécurité des fonctionnaires et leurs bien-être\r\nRendre les processus métiers de la fonction publique plus performante, é moindre couts et plus rapide dans leur exécution\r\nMaitriser les gaspillages et les éliminer pour assurer plus de services rendus au citoyen et gagner sa satisfaction.\r\n', 'Formation_en_Leadership_de_Gestion.pdf', NULL),
(13, 'SECURITE INFORMATIQUE', '20 Janvier 2017', 'BAMAKO, MALI', '2 Hours', 'Bonnes connaissances en réseaux et systèmes.', 49.95, 3.9, 1, 'Connaître les failles et les menaces des systèmes d''information\r\nMaîtriser le rôle des divers équipements de sécurité\r\nConcevoir et réaliser une architecture de sécurité adaptée\r\nMettre en œuvre les principaux moyens de sécurisation des réseaux\r\nUtiliser des outils de détection de vulnérabilités : scanners, sondes IDS\r\nSécuriser un système Windows et Linux\r\n', 'Formation_Securite_Informatique.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

DROP TABLE IF EXISTS `instructors`;
CREATE TABLE IF NOT EXISTS `instructors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `name`, `title`, `description`, `email`, `phone`, `address`, `photo`) VALUES
(1, 'Yves Nobert', 'Dr.', 'Professeur titulaire\r\nÉcole des Sciences de la gestion\r\nDépartement de management et technologie\r\nUniversité du Québec à Montréal', 'nobert.yves@uqam.ca', '', '', 'yves_nobert.jpg'),
(2, 'Khelil Khelil', 'MBA', 'Formateur / Facilitateur', 'kkhelil@videotron.ca ', '(514)355-5684', '545, Marina Rd., Mohammed Bin Rashid Boulevard, Dubai 123234, UAE', 'Khelil.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
