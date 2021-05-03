-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 mai 2021 à 15:22
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ppe4`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210310155743', '2021-03-10 16:00:29', 855),
('DoctrineMigrations\\Version20210328140232', '2021-03-28 14:05:08', 1112);

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `texte` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_debut_publication` datetime DEFAULT NULL,
  `date_fin_publication` datetime DEFAULT NULL,
  `publie` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `titre`, `texte`, `date_creation`, `date_debut_publication`, `date_fin_publication`, `publie`) VALUES
(1, '<p>1ère publication</p>', '<p>Symfony permet de créer une classe qui va gérer les formulaires, depuis leur création jusqu\'au traitement des données. Le formulaire sera même capable d\'hydrater une entitée à partir des données reçues.</p>\r\n\r\n<p>Bonjour !</p>', '2021-01-14 09:06:00', NULL, NULL, 1),
(2, '<p>2ème publication</p>', '<p style=\"text-align:justify\">Symfony permet de créer une classe qui va gérer les formulaires, depuis leur création jusqu\'au traitement des données. Le formulaire sera même capable d\'hydrater une entitée à partir des données reçues.Oui</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">oui</p>\r\n\r\n<p style=\"text-align:justify\">oui</p>', '2021-01-14 09:06:00', '2021-01-20 10:00:00', NULL, 1),
(3, '<p>3ème publication</p>', '<p>test 123 \\r\\n é ð ☺ ? &amp; ö à😊</p>', '2021-01-18 13:30:00', '2021-01-20 10:00:00', '2021-02-24 03:00:00', 1),
(4, '<p>4ème publication</p>', '<p>Test</p>\r\n\r\n<p>Merci d\'envoyer à <span style=\"color:#e67e22\">cette</span> <span style=\"background-color:#e74c3c\">adrsse</span> : <strong>dza@gmail.com</strong></p>', '2021-01-27 09:57:00', NULL, NULL, 1),
(5, '<p><span style=\"color:#e74c3c\"><u>IMPORTANT</u></span></p>', '<p>Merci d\'envoyer vos CV et Lettre</p>', '2022-02-13 15:18:00', NULL, NULL, 1),
(6, '<p>Titre&nbsp;</p>', '<p>blablba</p>', '2016-01-01 00:00:00', NULL, '2021-02-16 16:19:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `password`, `email`, `roles`) VALUES
(5, '$2y$13$nuxCw/.nEsn6cZoS92s.qev92Ggcdj5Kxfwc15RxwXJXGFxTrgcai', 'schon.matteo@gmail.com', 'null'),
(8, '$argon2id$v=19$m=65536,t=4,p=1$MnNDd2VGRlRBTlA0N3hmWg$4tBdh2EuxaDPcbgsdozdP0pg2cafp3BmdBAsB3G11P4', 'krypsio@outlook.fr', '[]'),
(9, '$argon2id$v=19$m=65536,t=4,p=1$aWh0eWczYnBCeG9xd2l0dQ$ayJE24MX32vWiR4i0oo6wJhS6T2n480SFJt+yHZAOTg', 'francoisand67@gmail.com', '[]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
