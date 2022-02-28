-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 28 fév. 2022 à 15:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ardis`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

DROP TABLE IF EXISTS `activites`;
CREATE TABLE IF NOT EXISTS `activites` (
  `activ_id` int(11) NOT NULL AUTO_INCREMENT,
  `activ_nom` varchar(50) NOT NULL,
  `activ_image` varchar(500) NOT NULL,
  `activ_loca` varchar(50) NOT NULL,
  `activ_tarif` int(5) NOT NULL,
  `activ_date` date NOT NULL,
  `activ_descri` varchar(150) NOT NULL,
  `activ_dispo` int(2) NOT NULL,
  `hotel_id` int(1) NOT NULL,
  PRIMARY KEY (`activ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`activ_id`, `activ_nom`, `activ_image`, `activ_loca`, `activ_tarif`, `activ_date`, `activ_descri`, `activ_dispo`, `hotel_id`) VALUES
(1, 'Promenade en chameaux', 'promenade_cham.webp', 'Dubaï', 50, '2021-06-12', 'Promenade en chameaux dans le désert', 5, 2),
(2, 'Jet-ski', 'jet-sski.webp', 'Punta Cana', 50, '2022-07-23', 'Initiation au Jet-Ski', 0, 1),
(3, 'Visite phare de bayahibe', 'phare.webp', 'Punta Cana', 15, '2020-09-12', 'Visite phare de bayahibe avec notre guide', 3, 1),
(4, 'Ski', 'ski.webp', 'Suisse', 100, '2020-06-28', 'Ski sur nos pistes privées', 5, 3),
(5, 'Raquette', 'raquette.webp', 'Suisse', 150, '2020-06-12', 'Raquette entre amis sur nos pistes privées', 3, 3),
(6, 'Promenade en chameaux', 'promenade_cham.webp', 'Dubai', 30, '2018-03-20', 'Promenade en chameaux dans le désert', 0, 2),
(7, 'Promenade en chameaux', 'promenade_cham.webp', 'Dubai', 30, '2017-03-20', 'Promenade en chameaux dans le désert', 0, 2),
(8, 'Promenade en chameaux', 'promenade_cham.webp', 'Dubai', 30, '2015-03-20', 'Promenade en chameaux dans le désert', 0, 2),
(9, 'Raquette', 'ski.webp', 'Suisse', 100, '2022-06-28', 'ski sur nos pistes privées', 5, 3),
(10, 'Ski', 'ski.webp', 'Suisse', 100, '2022-05-28', 'ski sur nos pistes privées', 5, 3),
(11, 'Ski', 'ski.webp', 'Suisse', 100, '2022-07-28', 'ski sur nos pistes privées', 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `avis_id` int(11) NOT NULL AUTO_INCREMENT,
  `avis_titre` varchar(50) NOT NULL,
  `avis_cont` varchar(50) NOT NULL,
  `avis_date` date NOT NULL,
  `avis_nomphoto` varchar(50) DEFAULT NULL,
  `avis_note` int(1) DEFAULT NULL,
  `avis_hotel` int(11) NOT NULL,
  PRIMARY KEY (`avis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`avis_id`, `avis_titre`, `avis_cont`, `avis_date`, `avis_nomphoto`, `avis_note`, `avis_hotel`) VALUES
(1, 'Super hôtel !', 'Super hôtel , le staff est super ! ', '2018-07-18', 'vacance.jpg', 5, 1),
(2, 'Bof', 'Vraiment décus ...', '2019-12-02', 'pascontent.webp', 2, 3),
(3, 'Joli', 'c joli', '2020-11-05', 'joi.webp', 4, 2),
(4, 'Gérnial', 'c\'était génial , moi et mon mari avont adorées !', '2012-05-12', 'moi_et_fabrice.png', 5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE IF NOT EXISTS `chambres` (
  `chamb_id` int(5) NOT NULL,
  `chamb_num` int(5) NOT NULL,
  `chamb_tel` varchar(20) NOT NULL,
  `nbr_lit` int(2) NOT NULL,
  `hotel_id` int(5) NOT NULL,
  `chamb_dispo` int(1) NOT NULL,
  PRIMARY KEY (`chamb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`chamb_id`, `chamb_num`, `chamb_tel`, `nbr_lit`, `hotel_id`, `chamb_dispo`) VALUES
(1, 1, '0389451170', 4, 1, 0),
(2, 2, '0389451170', 4, 1, 0),
(3, 3, '0389451170', 4, 1, 0),
(4, 4, '0389451170', 4, 1, 1),
(5, 5, '0389451170', 4, 1, 1),
(6, 6, '0389451170', 4, 1, 0),
(7, 7, '0389451170', 4, 1, 0),
(8, 8, '0389451170', 4, 1, 0),
(9, 9, '0389451170', 4, 1, 0),
(10, 10, '0389451562', 4, 1, 1),
(11, 11, '0389451562', 4, 1, 1),
(12, 12, '0389451562', 4, 1, 1),
(13, 13, '0389451562', 4, 1, 0),
(14, 14, '0389451562', 4, 1, 0),
(15, 15, '0389451562', 4, 1, 0),
(16, 16, '0389451562', 4, 1, 0),
(17, 17, '0389451562', 4, 1, 1),
(18, 18, '0389451562', 4, 1, 1),
(19, 19, '0389451562', 2, 1, 1),
(20, 20, '0389451562', 2, 1, 1),
(21, 21, '0389451562', 2, 1, 0),
(22, 22, '0389451562', 2, 1, 0),
(23, 23, '0389451562', 2, 1, 0),
(24, 24, '0389451562', 2, 1, 1),
(25, 25, '0389451562', 2, 1, 1),
(26, 26, '0389451562', 2, 1, 0),
(27, 27, '0389451562', 2, 1, 1),
(28, 28, '0389451562', 2, 1, 0),
(29, 1, '0389451562', 4, 2, 1),
(30, 2, '0389451562', 4, 2, 1),
(31, 3, '0389451562', 4, 2, 0),
(32, 4, '0389451562', 4, 2, 1),
(33, 5, '0389451562', 4, 2, 1),
(34, 6, '0389451562', 4, 2, 0),
(35, 7, '0389451562', 4, 2, 1),
(36, 8, '0389451562', 4, 2, 1),
(37, 9, '0389451562', 4, 2, 0),
(38, 10, '0389451562', 4, 2, 1),
(39, 11, '0389451562', 4, 2, 0),
(40, 12, '0389451562', 4, 2, 0),
(41, 13, '0389451562', 4, 2, 0),
(42, 14, '0389451562', 4, 2, 0),
(43, 15, '0389451562', 4, 2, 0),
(44, 16, '0389451562', 4, 2, 0),
(45, 17, '0389451562', 4, 2, 0),
(46, 18, '0389451562', 4, 2, 0),
(47, 19, '0389451562', 2, 2, 0),
(48, 20, '0389451562', 2, 2, 1),
(49, 21, '0389451562', 2, 2, 1),
(50, 22, '0389451562', 2, 2, 0),
(51, 23, '0389451562', 2, 2, 1),
(52, 24, '0389451562', 2, 2, 0),
(53, 25, '0389451562', 2, 2, 0),
(54, 26, '0389451562', 2, 2, 1),
(55, 27, '0389451562', 2, 2, 1),
(56, 28, '0389451562', 2, 2, 1),
(57, 1, '0389451562', 2, 3, 0),
(58, 2, '0389451562', 2, 3, 0),
(59, 3, '0389451562', 2, 3, 0),
(60, 4, '0389451562', 2, 3, 0),
(61, 5, '0389451562', 2, 3, 0),
(62, 6, '0389451562', 4, 3, 0),
(63, 7, '0389451562', 4, 3, 0),
(64, 8, '0389451562', 4, 3, 1),
(65, 9, '0389451562', 4, 3, 0),
(66, 10, '0389451562', 4, 3, 1),
(67, 1, '+1-808-687-7700', 2, 4, 0),
(68, 2, '+1-808-687-7700', 2, 4, 0),
(69, 3, '+1-808-687-7700', 2, 4, 1),
(70, 4, '+1-808-687-7700', 2, 4, 0),
(71, 5, '+1-808-687-7700', 2, 4, 0),
(72, 6, '+1-808-687-7700', 2, 4, 0),
(73, 7, '+1-808-687-7700', 2, 4, 0),
(74, 8, '+1-808-687-7700', 2, 4, 0),
(75, 9, '+1-808-687-7700', 2, 4, 0),
(76, 10, '+1-808-687-7700', 2, 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_civ` varchar(255) NOT NULL,
  `client_nom` varchar(50) NOT NULL,
  `client_prenom` varchar(50) NOT NULL,
  `client_adresse` varchar(100) NOT NULL,
  `client_cp` varchar(50) NOT NULL,
  `client_ville` varchar(50) NOT NULL,
  `client_pays` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_tel` varchar(50) NOT NULL,
  `client_profil_img` varchar(255) DEFAULT NULL,
  `compte_client` int(11) DEFAULT NULL,
  `resrv_client` int(11) DEFAULT NULL,
  `client_avis` int(11) DEFAULT NULL,
  PRIMARY KEY (`client_id`),
  KEY `client_compte_fk` (`compte_client`),
  KEY `client_reserv_fk` (`resrv_client`),
  KEY `client_avis_fk` (`client_avis`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`client_id`, `client_civ`, `client_nom`, `client_prenom`, `client_adresse`, `client_cp`, `client_ville`, `client_pays`, `client_email`, `client_tel`, `client_profil_img`, `compte_client`, `resrv_client`, `client_avis`) VALUES
(1, 'Mr', 'MATHIEU', 'Antoine', '3 Rue de la Gare', '75000', 'Paris', 'France', 'mathieuAntoine@gmaiL.com', '0654851240', '', NULL, NULL, NULL),
(2, 'Mr', 'KURT', 'Cobain', '171 Lake Washington Blvd E', 'WA 98112-5033', 'Seattle', 'USA', 'shot.gun@gmail.com', '0911524087', '', NULL, NULL, NULL),
(3, 'Mr', 'JEAN-CHRYSOSTOM', 'Dolt', '673 boulevard Alfred Philippe', '61110', 'Bouvet', 'France', 'Carl0s@gmail.com', '0914785470', '1646059195_1486b5519ae7af9c759d.jpg', NULL, NULL, NULL),
(4, 'Mr', 'ARMANDee', 'Thieryt', '2 bis Rue de Villiers', '92300', 'Levallois-Perret', 'France', 'ATcontact@armandthiery.fr', '0145193333', '', NULL, NULL, NULL),
(5, 'Mr', 'CHRISTIAN', 'Dior', '30 avenue Montaigne', ' 75008 ', 'Paris', 'France', 'contactdioreu@dior.com', '0140735444', '', NULL, NULL, NULL),
(6, 'Mme', 'HAMILTON', 'Margaret', '3 Rue de Apollo', '75000', 'Paris', 'France', 'hamilton.Marge@hotmail.fr', '0645784054', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `compt_id` int(11) NOT NULL AUTO_INCREMENT,
  `compt_pseudo` varchar(50) NOT NULL,
  `compt_pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`compt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`compt_id`, `compt_pseudo`, `compt_pass`) VALUES
(1, 'MAth.ant', '$2y$10$xtpq3ErdGQhrivzh/k2aa.urlp/ixfIWIXLbryjcJozlevybbWyUm'),
(2, 'lithium', '$2y$10$ytD4TNRXZiXEhUGvJIVEluoJ6WLp8qIVo/F6BRJ2hnwdSb.P3M.5K'),
(3, 'Carlos', '$2y$10$h5SpqQ9fcu.kV6QUPBDRh.FOFEuwebN7Lo8h8G/KiNHBx/aQnXAPS'),
(4, 'ArmT', '$2y$10$d8vqGX6DlCa/lV8d8nGWvefynqtMQ2h9F5cJHuLPLjNyGCA4ChJ/S'),
(5, 'Chrithor', '$2y$10$zDo.TW7h1qpPi8YViijdo.K94HqAAMgGbRGSyohsSoSFr7aNITSvW'),
(6, 'Space', '$2y$10$hmm6CR4IWkjc1F.RgNXFm.jgV9x04moxo/EDWqZ2RpLXzqPP01m9q');

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `hotel_id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_nom` varchar(50) NOT NULL,
  `hotel_adresse` varchar(100) NOT NULL,
  `hotel_cp` varchar(10) NOT NULL,
  `hotel_ville` varchar(50) NOT NULL,
  `hotel_pays` varchar(250) NOT NULL,
  `hotel_mail` varchar(50) NOT NULL,
  `hotel_tel` text NOT NULL,
  `hotel_image` varchar(255) DEFAULT NULL,
  `hotel_activ` int(11) DEFAULT NULL,
  `hotel_menu` int(11) DEFAULT NULL,
  `hotel_chambre` int(11) DEFAULT NULL,
  `hotel_price` int(11) NOT NULL,
  `hotel_note` int(5) NOT NULL,
  `hotel_contenue` varchar(1000) NOT NULL,
  PRIMARY KEY (`hotel_id`),
  KEY `hotel_image_fk` (`hotel_image`),
  KEY `hotel_menu_fk` (`hotel_activ`),
  KEY `hotel_activ_fk` (`hotel_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_nom`, `hotel_adresse`, `hotel_cp`, `hotel_ville`, `hotel_pays`, `hotel_mail`, `hotel_tel`, `hotel_image`, `hotel_activ`, `hotel_menu`, `hotel_chambre`, `hotel_price`, `hotel_note`, `hotel_contenue`) VALUES
(1, 'Sampatico', 'Boulevard Zona Hotelera', '23302', 'Punta Cana', 'République dominicaine ', 'Sampatico@ardis.fr', '384551422', 'punta_cana.webp', NULL, NULL, NULL, 250, 4, 'L\'hotel se trouve en République domicaine a Punta cana.La nuit est à partir de €.\r\n\r\nPour les amoureux des caraibe, cette hotel ce trouve a l\'extremité de la mer de caraibe, avec une vue sur la mer est est les palmiers est le phare de bayahibe\r\n\r\nL\'hotel est luxueux est bien assez proche de la mer.Cette hotel 4 etoile a 18 chambre a 4 lits chacune, 10 chambre a 2 lits\r\n\r\nLes sorite sont organiser selon vos envie, vous pouvez visiter le phare de bayahibe ou vous baigner dans Hoyo Azul'),
(2, 'Dubai', 'Dubai Fountain St - Downtown Dubai ', '00000', 'Dubai', 'Émirats arabes unis', 'Dubaï@ardis.fr', '384581422', 'dubai.webp', NULL, NULL, NULL, 320, 5, 'L\'hôtel est assez proche pour voit les tempêtes de sable arriver, ces tempêtes ne sont pas dangereux .Cet hôtel 5 étoiles à 5 ilots et dans un chaque ilot il y a 1 grand lit pour 2 personnes, ce séjour là c\'est fait pour les amoureux. Les sorties sont organisées selon vos envies, vous pouvez visiter la ville ou vous se balader en chameaux.\r\n\r\nL\'hôtel est luxueux est bien assez proche de la mer. Cet hôtel 4 étoiles à 18 chambres à 4 lits chacune, 10 chambres à 2 lits.\r\n\r\nLes sorites sont organisés selon vos envies, vous pouvez visiter le phare de bayahibe ou vous baigner dans Hoyo Azul.'),
(3, 'Alpardis', 'Rue du théatre 9', '54450', 'Turbenthal', 'Suisse', 'Alpardis@ardis.fr', '384874422', 'suisse.webp', NULL, NULL, NULL, 100, 3, 'Notre hôtel alpadris à 3 étoiles se situe en Suisse, plus précisément à Turbenthal, la nuit est à partir de  €. L\'hôtel est situé dans les alpes, pour les amoureux de la neige est des montagnes, cet hôtel est pour vous. Par notre qualité de service nous sommes à top ! Il y a 5 étages et 10 chambres, 5 a deux lits et 10 pour 4 lits. Pour les activités, nous vous proposerons du ski et de la luge et une visite guide dû la chocolaterie Lindt.'),
(4, 'Aloardis', '129 Paoakalani Ave', '96815', 'Honolulu', 'Hawai,USA', 'Aloardis@ardis.com', '+1-808-687-7700', 'hawai.webp', NULL, NULL, NULL, 500, 5, 'Notre hôtel Aloardis à 5 étoiles se situe  à Hawai , plus précisément à Waikiki Beach, la nuit est à partir de  €. L hôtel est situé a quelques pas de la mer : amoureux en lune de miel , cet hôtel est pour vous! Cette hôtel a 10 chambres avec uniquement des lits deux places .');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(5) NOT NULL AUTO_INCREMENT,
  `image_nom` varchar(50) NOT NULL,
  `image_date` date NOT NULL,
  `page` varchar(255) NOT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`image_id`, `image_nom`, `image_date`, `page`, `hotel_id`) VALUES
(1, 'resto_vegeterien.webp', '2018-07-18', 'restaurant', NULL),
(2, 'restaurant-01-plat.webp', '2018-07-18', 'restaurant', NULL),
(3, 'resto1', '2018-07-18', 'restaurant', NULL),
(12, 'background.webp', '2018-07-18', 'index', NULL),
(13, 'logo.webp', '2018-07-18', 'layout', NULL),
(14, 'logo_menu.webp', '2018-07-18', 'layout', NULL),
(15, 'Objet dynamique vectoriel.webp', '2018-07-18', 'footer', NULL),
(16, 'desert_activiter.webp', '2018-07-18', 'activier', NULL),
(17, 'desert_sortie.webp', '2018-07-18', 'activier', NULL),
(18, 'luge_1.webp', '2018-07-18', 'activier', NULL),
(19, 'phare.webp', '2018-07-18', 'activier', NULL),
(20, 'plagues-surf.webp', '2018-07-18', 'activier', NULL),
(21, 'bar.webp', '2018-07-18', 'galerie_photo ', 2),
(22, 'istockphoto-182404406-170667a.webp', '2018-07-18', 'galerie_photo ', 2),
(23, 'istockphoto-512882668-170667a.webp', '2018-07-18', 'galerie_photo ', 2),
(24, 'hawai.webp', '2018-07-18', 'hawai', 4),
(25, 'photo-1563911302283-d2bc129e7570.webp', '2018-07-18', 'galerie_photo', 1),
(26, 'photo-1571003123894-1f0594d2b5d9.webp', '2018-07-18', 'punta_cana', 1),
(27, 'photo-1618773928121-c32242e63f39.webp', '2018-07-18', 'galerie_photo', 1),
(28, 'ressto.webp', '2018-07-18', 'galerie_photo', 1),
(29, 'image2.webp', '2018-07-18', 'suisse', 3),
(30, 'montagne_room.webp', '2018-07-18', 'galerie_photo', 3),
(31, 'camel.webp', '2018-12-13', 'galerie_photo', 2),
(32, 'camel.webp', '2018-12-13', 'galerie_photo', 2),
(33, 'dihram.webp', '2018-12-13', 'galerie_photo', 2),
(34, 'dubaivue.webp', '2018-12-13', 'galerie_photo', 2),
(35, 'jetski.webp', '2018-12-13', 'galerie_photo', 2),
(36, 'museum.webp', '2018-12-13', 'galerie_photo', 2),
(37, 'nuitdesert.webp', '2018-12-13', 'galerie_photo', 2),
(38, 'oryx.webp', '2018-12-13', 'galerie_photo', 2),
(39, 'rembarde.webp', '2018-12-13', 'galerie_photo', 2),
(40, 'villedubai.webp', '2018-12-13', 'galerie_photo', 2),
(41, 'aloha.webp', '2019-12-12', 'galerie_photo', 4),
(42, 'tortue.webp', '2019-12-12', 'galerie_photo', 4),
(43, 'danse.webp', '2019-12-12', 'galerie_photo', 4),
(44, 'dauphin.webp', '2019-12-12', 'galerie_photo', 4),
(45, 'flore.webp', '2019-12-12', 'galerie_photo', 4),
(46, 'gazebo.webp', '2019-12-12', 'galerie_photo', 4),
(47, 'helico.webp', '2019-12-12', 'galerie_photo', 4),
(48, 'hotelhawai.webp', '2019-12-12', 'galerie_photo', 4),
(49, 'paddle.webp', '2019-12-12', 'galerie_photo', 4),
(50, 'caprin.webp', '2019-12-12', 'galerie_photo', 3),
(51, 'hotelsuisse.webp', '2019-12-12', 'galerie_photo', 3),
(52, 'lac.webp', '2019-12-12', 'galerie_photo', 3),
(53, 'lindt.webp', '2019-12-12', 'galerie_photo', 3),
(54, 'lugenocturne.webp', '2019-12-12', 'galerie_photo', 3),
(55, 'pilatus.webp', '2019-12-12', 'galerie_photo', 3),
(56, 'piscine.webp', '2019-12-12', 'galerie_photo', 3),
(57, 'ski.webp', '2019-12-12', 'galerie_photo', 3),
(58, 'suite.webp', '2019-12-12', 'galerie_photo', 3),
(59, 'aeroport.webp', '2019-12-12', 'galerie_photo', 1),
(60, 'bayahibe.webp', '2019-12-12', 'galerie_photo', 1),
(61, 'hotelbaya.webp', '2019-12-12', 'galerie_photo', 1),
(62, 'hoyo_azul.webp', '2019-12-12', 'galerie_photo', 1),
(63, 'maison.webp', '2019-12-12', 'galerie_photo', 1),
(64, 'perroquet.webp', '2019-12-12', 'galerie_photo', 1),
(65, 'resto.webp', '2019-12-12', 'galerie_photo', 1),
(66, 'Saint-Domingue.webp', '2019-12-12', 'galerie_photo', 1),
(67, 'saona.webp', '2019-12-12', 'galerie_photo', 1);

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_nom` varchar(50) NOT NULL,
  `menu_prix` varchar(11) NOT NULL,
  `menu_descri` varchar(800) NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `conso_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`menu_id`),
  KEY `menu_conso_fk` (`conso_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_nom`, `menu_prix`, `menu_descri`, `menu_image`, `conso_menu`) VALUES
(1, 'Menu végétarien', '5.82', 'Cette recette végétarienne gastronomique est également vegan. La sauce au cresson est réalisée à base de noix de cajou qui lui ajoute du corps, le condiment d’estragon et amandes grillées donne de la texture tandis que les pommes de terre rôties offrent fondant et douceur.', 'menu_vege.webp', NULL),
(2, 'Menu enfant', '5.99', 'Le menu enfant comporte une viande ou un poisson avec accompagnement au choix (légumes de saison, féculents) et un dessert au chocolat ou aux fruits réalisé par notre pâtissier Ce menu servi à la demande est servi aux enfants de moins de 12 ans et permet à l ensemble de la table ou du groupe de passer un agréable moment culinaire.', 'menu_enfant.webp', NULL),
(3, 'Menu du jour', '9.99', 'Le menu jour de lan comporte des œufs de poule surprise Nougat de foie gras glacé au jus de canard et Clémentine Noix de Saint-Jacques de Dieppe poêlées / endives à la carbonara jus court Filet de perdreau cuisiné en canapé et glacé au porto.', 'menu_du_jour.webp', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reserv_id` int(11) NOT NULL AUTO_INCREMENT,
  `reserv_datedeb` date NOT NULL,
  `reserv_datefin` date NOT NULL,
  `reserv_datepayar` date NOT NULL,
  `client_id` int(11) NOT NULL,
  `chamb_reserv` int(11) NOT NULL,
  `chamb_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `activ_id` int(11) DEFAULT NULL,
  `activ_reserv` int(11) DEFAULT NULL,
  `conso_reserv` int(11) DEFAULT NULL,
  PRIMARY KEY (`reserv_id`),
  KEY `reserv_activ_fk` (`activ_reserv`),
  KEY `reserv_chambre_fk` (`chamb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`reserv_id`, `reserv_datedeb`, `reserv_datefin`, `reserv_datepayar`, `client_id`, `chamb_reserv`, `chamb_id`, `hotel_id`, `activ_id`, `activ_reserv`, `conso_reserv`) VALUES
(1, '2021-05-12', '2021-05-22', '2021-04-05', 2, 8, 8, 1, 1, NULL, NULL),
(2, '2022-01-01', '2022-02-01', '2022-02-01', 3, 12, 12, 2, NULL, NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `client_avis_fk` FOREIGN KEY (`client_avis`) REFERENCES `avis` (`avis_id`),
  ADD CONSTRAINT `client_reserv_fk` FOREIGN KEY (`resrv_client`) REFERENCES `reservations` (`reserv_id`);

--
-- Contraintes pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotel_activ_fk` FOREIGN KEY (`hotel_menu`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `hotel_menu_fk` FOREIGN KEY (`hotel_activ`) REFERENCES `activites` (`activ_id`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reserv_activ_fk` FOREIGN KEY (`activ_reserv`) REFERENCES `activites` (`activ_id`),
  ADD CONSTRAINT `reserv_chambre_fk` FOREIGN KEY (`chamb_id`) REFERENCES `chambres` (`chamb_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
