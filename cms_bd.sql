-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 26 juil. 2021 à 06:10
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cms_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `cat_id` int(3) NOT NULL,
  `cat_titre` varchar(255) NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_titre`, `cat_image`) VALUES
(32, 'fruits et legumes', 'fruits et légumes.jpg'),
(35, 'farm tractor equipment', 'farm tractor equipment1.jpeg'),
(36, 'Matériel pour  les abeilles et le miel ', 'Matériel pour  les abeilles et le miel .jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_pro_id` int(11) NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_nom` varchar(255) NOT NULL,
  `comment_emil` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_pro_id`, `comment_status`, `comment_nom`, `comment_emil`, `comment_content`, `comment_date`) VALUES
(8, 21, 'noactive', 'zahmidi', 'abderahmanzahmidi@gmail.com', 'nace <3', '2021-07-26'),
(9, 21, 'noactive', 'zahmidi', 'abderahmanzahmidi@gmail.com', 'nace <3', '2021-07-26');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` int(11) NOT NULL,
  `contact_message` varchar(255) NOT NULL,
  `contact_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_message`, `contact_date`) VALUES
(1, 'zahmidi', 'abderahmanzahmidi@gmail.com', 618181155, 'fayn. asi. mohame d mazeyan.   colexi maeuyan ', '2021-07-25');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `produit_id` int(11) NOT NULL,
  `produit_cat_id` int(11) NOT NULL,
  `produit_titre` varchar(255) NOT NULL,
  `produit_prix` int(11) NOT NULL,
  `produit_img` text NOT NULL,
  `produit_comment` varchar(255) NOT NULL,
  `produit_description` text NOT NULL,
  `produit_date` date NOT NULL,
  `produit_evaluation` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`produit_id`, `produit_cat_id`, `produit_titre`, `produit_prix`, `produit_img`, `produit_comment`, `produit_description`, `produit_date`, `produit_evaluation`) VALUES
(20, 32, 'Cucumber', 4, 'Cucumber.jpg', '4', 'Le concombre est une annuelle tendre avec une tige rugueuse, succulente et traînante. Les feuilles velues ont trois à cinq lobes pointus', '2021-07-21', 2.5),
(21, 32, 'La Carotte', 5, '1200px-Morötter.jpg', '2', 'La Carotte (Daucus carota subsp. sativus) est une plante bisannuelle de la famille des Apiacées (aussi appelées Ombellifères)', '2021-07-21', 3.5),
(22, 32, 'La pastèque', 20, 'watermelon.jpg', '0', 'La pastèque est une espèce de plante à fleurs de la famille des cucurbitacées et du nom de son fruit comestible. Une plante grimpante et rampante, La pastèque est une espèce de plante à fleurs de la famille des cucurbitacées et du nom de son fruit comestible.', '2021-07-21', 4.5),
(23, 32, 'Un raisin', 9, 'grapes_0.jpg', '0', 'Un raisin est un fruit, botaniquement une baie, des vignes ligneuses à feuilles caduques du genre de plante à fleurs Vitis. Les raisins peuvent être consommés frais comme raisins de table, ', '2021-07-21', 3.5),
(24, 35, 'Spraying Season Easier', 333, 'farm tractor.jpeg', '0', 'Summum de la couverture des cultures, heures de service au long cours et esprit pratique maximum quelles que soient les conditions météo avec HighTechAirPlus d’Agrifac. Ce système assure une taille de gouttes constante et facile à paramétrer. Conditions climatiques changeantes', '2021-07-26', 5.5),
(25, 35, '1bqdx-2.3 ', 2395, 'farm tractor equipment1.jpeg', '0', 'Agriculture Machine Disc Harrow Parts', '2021-07-26', 4.5),
(26, 35, 'Subsidies for Farmers ', 25000, 'farming-tractor.jpeg', '0', 'Agricultural subsidies are necessary, as the Indian economy is largely dependent on the farming sector. Similarly, a significant chunk of farmers investment is dedicated to the pieces of machinery', '2021-07-26', 4.5),
(27, 36, ' le miel ', 50, 'Natural-Honey-Bee-Products-Honeycomb-Nest-Honey.jpeg', '0', 'Le miel est une substance alimentaire sucrée et visqueuse fabriquée par les abeilles mellifères et certains insectes apparentés, tels que les abeilles sans dard. ', '2021-07-26', 5),
(28, 36, 'Matériel pour  les abeilles', 50, 'bee equipment2.jpeg', '0', ' pour récupérer le miel produit en surplus par les abeilles la grille à reine, pour empêcher le passage de la reine et év', '2021-07-26', 4);

-- --------------------------------------------------------

--
-- Structure de la table `rappelles`
--

CREATE TABLE `rappelles` (
  `rappelle_id` int(11) NOT NULL,
  `rappelle_name` varchar(255) NOT NULL,
  `rappelle_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rappelles`
--

INSERT INTO `rappelles` (`rappelle_id`, `rappelle_name`, `rappelle_email`) VALUES
(1, 'zahmidi', 'abderahman@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `reserve_produit`
--

CREATE TABLE `reserve_produit` (
  `reserve_id` int(11) NOT NULL,
  `reserve_name` varchar(255) NOT NULL,
  `reserve_email` varchar(255) NOT NULL,
  `reserve_phone` int(20) NOT NULL,
  `reserve_id_produit` int(11) NOT NULL,
  `date` date NOT NULL,
  `reserve_message` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reserve_produit`
--

INSERT INTO `reserve_produit` (`reserve_id`, `reserve_name`, `reserve_email`, `reserve_phone`, `reserve_id_produit`, `date`, `reserve_message`, `status`) VALUES
(1, 'aziz', 'aziz.zahmidi@gmail.com', 618181155, 12, '2021-07-25', 'hade prodewi khaliheli behade taman ', 'noactive'),
(2, 'zahmidi', 'abderahma@gmail.com', 618181155, 12, '2021-07-25', 'sdsjbdsbds hbfsdhjfbsf jhbfdsf ds', 'active');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(255) NOT NULL,
  `user_prenome` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_img` text NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_nome`, `user_prenome`, `user_email`, `user_role`, `user_img`, `user_username`, `user_password`) VALUES
(1, 'zahmidi', 'abderahman  ', 'abderahmanzahmidi@gmail.com', 'admin', 'commenter_img.jpeg', 'zahmidi1', 'abdelZ1997'),
(5, 'imad', 'korchi ', 'korchiimad@gmail.com', 'majour', 'commenter_img.jpeg', 'imad', '123ZAHMIDI');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`produit_id`);

--
-- Index pour la table `rappelles`
--
ALTER TABLE `rappelles`
  ADD PRIMARY KEY (`rappelle_id`);

--
-- Index pour la table `reserve_produit`
--
ALTER TABLE `reserve_produit`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `produit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `rappelles`
--
ALTER TABLE `rappelles`
  MODIFY `rappelle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reserve_produit`
--
ALTER TABLE `reserve_produit`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
