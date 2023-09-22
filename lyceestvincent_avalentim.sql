-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 03:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lyceestvincent_avalentim`
--
CREATE DATABASE IF NOT EXISTS `lyceestvincent_avalentim` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lyceestvincent_avalentim`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_ID` int(11) NOT NULL,
  `contact_firstname` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(30) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lien_technologie`
--

CREATE TABLE `lien_technologie` (
  `id_projet` int(11) NOT NULL,
  `id_technologie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE `projets` (
  `projet_ID` int(11) NOT NULL,
  `projet_titre` varchar(255) NOT NULL,
  `projet_intitule` varchar(255) NOT NULL,
  `projet_contexte` varchar(255) NOT NULL,
  `projet_outils` varchar(255) NOT NULL,
  `projet_charge_heure` varchar(30) NOT NULL,
  `projet_periode_realisation` varchar(255) NOT NULL,
  `projet_besoin_mission` varchar(255) NOT NULL,
  `projet_id_technologie` int(11) DEFAULT NULL,
  `projet_documentation` varchar(255) NOT NULL,
  `projet_bilan` text NOT NULL,
  `projet_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`projet_ID`, `projet_titre`, `projet_intitule`, `projet_contexte`, `projet_outils`, `projet_charge_heure`, `projet_periode_realisation`, `projet_besoin_mission`, `projet_id_technologie`, `projet_documentation`, `projet_bilan`, `projet_images`) VALUES
(1, 'LiveQuestion', 'Forum de questions/réponses sur des problématiques', 'Répartition des tâches au sein d\'un groupe ; projet personnel encadré', 'Git ; GitHub ; Discord', '100H', '15 février 2021 au 30 avril 2021', 'Gestion des inscriptions au forum ; gestion des échanges en asynchrone ; gestion des droits', 2, 'Cahier Des Charges &amp; Livrables', 'Veille d\'approfondissement sur les technologies utilisées', 'livequestion-home.png'),
(2, 'Site personnel', 'Témoin de mon apprentissage, outil de prospection', 'Ajout de projets réalisés pendant l\'année ; ajout des technologies apprises', 'Visual Studio Code ; XAMPP', '50H', '9 septembre 2020 et en progression continue', 'Gestion des projets ; évolution constante du site personnel', 2, 'Support des bonnes pratiques', 'Veille d\'approfondissement sur les technologies utilisées', 'Capture-d-Aoy-cran-2021-09-08-103405.png'),
(3, 'Game Station', 'Site vitrine d\'un magasin de jeux vidéos', 'Réalisation d\'un site vitrine avec différentes informations ; initiation au CMS WordPress', 'WordPress : XAMPP', '12H', '5 octobre au 23 novembre 2020', 'Gestion des articles ; gestion des newsletters', 3, '&quot;Comment installer WordPress&quot;', 'Veille d\'approfondissement sur le CMS WordPress', 'wordpress-accueil2.jpg'),
(4, 'CV en ligne', 'CV en ligne', 'Réalisation d\'un CV en ligne grâce à une maquette ; premier projet d\'initiation à la formation du BTS SIO', 'Sublime Text 3', '16H', '7 septembre au 9 septembre 2020', 'Affichage des informations lié à la personne', 1, 'Maquette CV', 'Veille contextualisées sur les technologies utilisées', 'CVDupont.png'),
(5, 'Epicerie Fine', 'Site vitrine d\'une Epicerie Fine', 'Réalisation d\'un site vitrine avec différentes informations ; initiation au CMS WordPress', 'WordPress ; XAMPP', '20H', '30 septembre au 16 décembre 2019', 'Gestion des articles ; gestion des newsletters', 3, '&quot;Comment installer WordPress&quot;', 'Veille d\'approfondissement sur le CMS WordPress', 'wordpress.png'),
(6, 'Fashion &amp; Beauty', 'Forum de questions/réponses sur des articles', 'Répartition des tâches au sein d\'un groupe ; projet personnel encadré', 'Sublime Text 3, XAMPP ; Discord', '24H', '18 octobre au 8 novembre 2019', 'Gestion des articles ; gestion des échanges en asynchrone', 2, 'Cahier des charges', 'Veille d\'approfondissement sur les technologies utilisées', 'capture1.jpg'),
(7, 'Projet d\'intégration', 'Site vitrine avec des informations variées', 'Réalisation d\'une page web responsive : ordinateur, tablette et téléphone à l\'aide de maquettes ; mise en place des bonnes pratiques de l\'intégration', 'Visual Studio Code', '48H', '2 novembre au 13 mars 2021', 'Affichage d\'informations diverses', 1, 'Maquettes + support des bonnes pratiques de l\'intégration', 'Veille d\'approfondissement sur les technologies utilisées', 'eTu9AqRXmG.png'),
(9, 'Projet Disney', 'Site vitrine avec les informations des séries', 'Projet qui va permettre d\'approfondir le CMS WordPress ; création d\'un thème personnalisé', 'WordPress ; XAMPP', '8H', '8 mars 2021 au 15 mai 2021', 'Affichage des différents films/séries ; affichage des détails de chaque film/série', 3, 'Maquettes', 'Veille d\'approfondissement sur le CMS WordPress', '2-Vue film detail.png'),
(10, 'Maintenance éditoriale', 'Annuaire des lieux de rafraîchissement', 'Découverte du CMS TYPO3', 'TYPO3, système MacOS', '6H', '1 juin 2021 au 3 juin 2021', 'Gestion des différents points d\'eau de la ville', 5, 'Cahier des charges', 'Veille contextualisée sur les technologies utilisées', 'Capture-d-Aoy-cran-2021-06-26-124209.png'),
(11, 'Les Gouttes d\'eau', 'Forum d\'inscription aux évènements', 'Faire connaître l\'association (sa fondation, ses missions) ; Inciter à l\'inscription pour devenir membre de l\'association ; Inciter à participer aux évènements proposés par l\'association.', 'Visual Studio ; Discord ; Gmail ; Wetransfer ; Git ; GitHub', '50H', '4 juin 2021 au 2 février 2022', 'Créer un site permettant de promouvoir les différents évènements de l\'association.', 2, 'Maquettes graphiques, Cahier Des Charges', 'La conduite du projet a été globalement bien gérée malgré certaines incompréhensions de notre part par rapport à ce qui été demandé au départ. C\'est un projet qui a été proposé par le lycée Saint-Vincent, nous avons donc pu aider une association qui avait comme besoin la création d’un site internet pour les lycéens et les Senlisiens. Nous avons réalisé un ouvrage fonctionnel et répondant bien à la demande initiale. Nous avons réalisé un ouvrage fonctionnel et répondant bien à la demande initiale. Ce projet a été réalisé en plus des projets que nous avons pendant notre formation, c’est un projet qui a donc été fait hors du contexte scolaire. J’ai pu monter en compétences dans les stacks techniques tels que : HTML, CSS, JS, PHP et MySQL et en ce qui concerne la gestion de projet. Enfin, j’ai pu faire un échange avec un utilisateur.', 'association.jpg'),
(12, 'Intranet Front Page', 'Site vitrine avec les informations de la ville de Bobigny', 'Réalisation d\'une page web à l\'aide d\'une maquette', 'Visual Studio Code ; système MacOS', '30H', '3 juin 2021 au 25 juin 2021', 'Affichage des dernières informations ; affichage des différentes catégories', 1, 'Maquettes', 'Mise en pratique des technologies acquises avec un projet réel', 'Capture-d-Aoy-cran-2021-06-26-125457.png'),
(13, 'My Series Companion', 'Compte contenant les différentes séries d\'un utilisateur', 'Réalisation d\'un site avec différentes fonctionnalités ; projet réalisé pendant les vacances solaires', 'VMware ; Visual Studio Code', '72H', '28 juin 2021 au 2 septembre 2021', 'Gestion des inscriptions ; gestion des séries ; gestion des catégories', 2, 'Cahier Des Charges', 'Veille contextualisée sur les technologies utilisées', 'Capture-d-Aoy-cran-2021-09-08-103157.png'),
(16, 'Gestion d\'une infirmerie', 'Application qui permet de gérer les visites des élèves', 'Réalisation d\'une application avec différentes fonctionnalités', 'Visual Studio 2022 ; SQL Server ; Git ; GitHub', '30H', '21 octobre 2021 au 7 janvier 2022', 'Gérer les élèves ; gérer les visites ; gérer les médicaments', 4, 'Cahier Des Charges', 'Veille contextualisée sur le langage de programmation C#', 'Capture-d-Aoy-cran-2021-12-03-091610.jpg'),
(17, 'LaTribuneAuto', 'Site permettant de décrire différentes caractéristiques', 'Réalisation d\'une maintenance applicative avec différents modules à modifier', 'PhpStorm ; Git ; GitHub', '20H', '07/01/2022 au 14/01/2022', 'Correction d\'un bug d\'affichage ; changement de la taille d\'un titre d\'une promotion', 1, 'Cahier Des Charges', 'Le projet LaTribuneAuto me permet de m\'initier à l’utilisation de Doctrine et à son fonctionnement et de faire une veille plus contextualisée sur le Framework Symfony. Cela me permet de découvrir l’organisation d’un projet Web dans le monde de l’entrepris', 'Image1.png'),
(18, 'MW-Guardian', 'Site permettant de créer différents tickets', 'Réalisation d\'une maintenance applicative avec différents modules à modifier', 'PhpStorm ; Git ; GitHub', '20H', '17 janvier 2022 au 28 janvier 2022', 'Ajout du nom du client afin de pouvoir revenir à la liste des tickets associés ; ajout d\'une fonction afin d’autoriser l’ajout de fichiers multiples relatif à un ticket', 1, 'Cahier Des Charges', 'Le projet MW-Guardian me permet d’approfondir mes connaissances dans l’utilisation de Symfony, ainsi que dans la création d’une commande Symfony qui permet de faire un rappel à un utilisateur de tickets déjà existant.', 'Image2.png'),
(19, 'Clésence', 'Site permettant de proposer de l’aide à l’insertion', 'Réalisation d\'une maintenance applicative avec différents modules à modifier', 'PhpStorm ; Git ; GitHub', '60H', '1 février 2022 au 4 mars 2022', 'Correction du wording ; ajout d\'un manifeste ; lien entre l\'intégration du site et l\'espace d\'administration', 1, 'Cahier Des Charges', 'Le projet Clesence me permet d’approfondir mes connaissances dans l’utilisation de Symfony et de son fonctionnement. Cela me permet également de faire des veilles technologiques sur des composants que je n’ai pas encore utilisés jusqu\'à présent comme cela', 'image3.jpg'),
(20, 'Gestion des locations', 'Application qui permet de gérer des locations', 'Réalisation d\'un site avec différentes fonctionnalités', 'PhpStorm ; XAMPP ; Git ; GitHub', '40H', '20 décembre 2021 au 25 avril 2022', 'Gérer les locations ; gérer les locataires ; gérer les mandataires ; gérer les biens', 1, 'Cahier Des Charges', 'Veille contextualisée sur le Framework Symfony', 'symfony1.jpg'),
(21, 'GestionAS', 'Application qui permet de gérer différents évènements', 'Maintenance d\'un site avec différentes fonctionnalités', 'PhpStorm ; XAMPP ; Git ; GitHub', '50H', '1 septembre 2022 au 16 janvier 2023', 'Gérer les évènements ; gérer les élèves', 1, 'Cahier des Charges ; Documentation utilisateur', 'Veille contextualisée sur le Framework Symfony ainsi que la maintenance applicative et corrective d\'un projet réel', 'Capture-d-y-cran-2023-03-05-220157.png'),
(22, 'Resasnack', 'Application qui permet de commander des sandwichs', 'Maintenance d\'un site avec différentes fonctionnalités', 'PhpStorm ; XAMPP ; Git ; GitHub', '50H', '1 septembre 2022 au 16 janvier 2023', 'Gérer les sandwichs ; gérer les commandes individuelles : gérer les commandes groupées', 1, 'Cahier des Charges ; Documentation utilisateur', 'Veille contextualisée ainsi que la maintenance applicative et corrective d\'un projet réel', 'Capture-d-y-cran-2023-03-05-220611.png'),
(23, 'Gestion sorties scolaires', 'Application qui permet de gérer différentes sorties', 'Réalisation d\'un site avec différentes fonctionnalités', 'PhpStorm ; XAMPP ; Git ; GitHub ; Figma', '50H', '16 janvier 2023 et en cours de réalisation', 'Gestion des sorties ; gestion de la liste d\'appel', 1, 'Cahier Des Charges ; Maquettes fonctionnelles', 'Veille contextualisée sur le Framework Symfony, l\'élaboration du cahier des charges ainsi que la création des différentes maquettes fonctionnelles', 'Capture-d-y-cran-2023-03-05-221209.png');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `techno_ID` int(11) NOT NULL,
  `techno_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`techno_ID`, `techno_type`) VALUES
(1, 'HTML/CSS/JS'),
(2, 'Technologies d\'intégration + PHP/MySQL'),
(3, 'WordPress'),
(4, 'C#'),
(5, 'TYPO3');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `utilisateur_id` int(11) NOT NULL,
  `utilisateur_email` varchar(255) NOT NULL,
  `utilisateur_mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`utilisateur_id`, `utilisateur_email`, `utilisateur_mdp`) VALUES
(3, 'valentin.arthur1000@gmail.com', 'a07a5f73a418d24402347a0b32c60f72ba55d5b38045dc5e72541a78097126b7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_ID`);

--
-- Indexes for table `lien_technologie`
--
ALTER TABLE `lien_technologie`
  ADD PRIMARY KEY (`id_projet`,`id_technologie`),
  ADD KEY `fk_id_technologie` (`id_technologie`);

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`projet_ID`),
  ADD KEY `projet_id_technologie` (`projet_id_technologie`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`techno_ID`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`utilisateur_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `projet_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `techno_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projets`
--
ALTER TABLE `projets`
  ADD CONSTRAINT `fk_id_technologie` FOREIGN KEY (`projet_id_technologie`) REFERENCES `technologies` (`techno_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
