-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2020 at 02:17 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblial`
--

-- --------------------------------------------------------

--
-- Table structure for table `auteurs`
--

CREATE TABLE `auteurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auteurs`
--

INSERT INTO `auteurs` (`id`, `nom`) VALUES
(1, 'tite kubo'),
(3, 'chuya koyama'),
(4, 'yusuke murata'),
(5, 'alexandreeeeeee'),
(6, 'francois'),
(7, 'lucas kevin'),
(8, 'guy'),
(9, 'Anthonny ferreira'),
(13, 'tetsuya tsutsui');

-- --------------------------------------------------------

--
-- Table structure for table `auteurs_livres`
--

CREATE TABLE `auteurs_livres` (
  `auteurs_id` int(11) DEFAULT NULL,
  `livres_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auteurs_livres`
--

INSERT INTO `auteurs_livres` (`auteurs_id`, `livres_id`) VALUES
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(5, 17),
(6, 18),
(6, 19),
(6, 20),
(6, 21),
(1, 24),
(1, 25),
(7, 26),
(7, 27),
(8, 28),
(9, 29),
(13, 39),
(13, 40);

-- --------------------------------------------------------

--
-- Table structure for table `editeurs`
--

CREATE TABLE `editeurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editeurs`
--

INSERT INTO `editeurs` (`id`, `nom`) VALUES
(1, 'glenat'),
(2, 'kurokawa'),
(3, 'edital'),
(4, 'pika'),
(5, 'kevin'),
(6, 'alexandre'),
(7, 'kioon');
-- --------------------------------------------------------

--
-- Table structure for table `editeurs_livres`
--

CREATE TABLE `editeurs_livres` (
  `editeurs_id` int(11) DEFAULT NULL,
  `livres_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editeurs_livres`
--

INSERT INTO `editeurs_livres` (`editeurs_id`, `livres_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 13),
(5, 14),
(5, 15),
(6, 16),
(6, 17),
(6, 18),
(7, 19),
(7, 20),
(7, 21),
(1, 22),
(1, 23),
(2, 24),
(2, 25),
(3, 26),
(3, 27),
(4, 28),
(4, 29),
(5, 31),
(6, 32),
(6, 33),
(7, 34),
(7, 35),
(5, 36),
(5, 37),
(6, 38),
(1, 39),
(7, 40); 

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

CREATE TABLE `livres` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `Numero_du_tome` int(4) DEFAULT NULL,
  `Nombres_de_pages` int(50) DEFAULT NULL,
  `date_publication` date DEFAULT NULL,
  `resum` text,
  `img` text,
  `isbn` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `livres`
--

INSERT INTO `livres` (`id`, `titre`, `Numero_du_tome`, `Nombres_de_pages`, `date_publication`, `resum`, `img`, `isbn`) VALUES
(1, 'bleach', 1, 192, '2001-01-01', 'Ichigo kurosaki 15 ans peut voir les esprits ', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(2, 'Space Brothers', 1, 19, '2002-02-02', 'Deux frÃ¨res l\'un est un genie astronaute, le second un ratÃ© ', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/8806.jpg', NULL),
(3, 'one punch man', 1, 192, '2002-02-05', 'un garÃ§on qui tÃ©rasse ses ennemis en un seul coup ', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/13832.jpg', NULL),
(4, 'Zombie Powder', 1, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/6522.jpg', NULL),
(5, 'Zombie Powderrrr', 1, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/6522.jpg', NULL),
(6, 'Zombie Powderrrrrrrrrrrr', 1, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/6522.jpg', NULL),
(7, 'Zombie Powderrrrrrrrrrrr', 1, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/6522.jpg', NULL),
(8, 'Zombie Powderrrrrrrrrrrr', 1, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/6522.jpg', NULL),
(9, 'Zombie Powderrrrrrrrrrrrrrrrrrr', 1, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/6522.jpg', NULL),
(10, 'bleach', 2, 192, '2031-01-20', 'Ichigo kurosaki 15 ans peut voir les esprits', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/6522.jpg', NULL),
(11, 'bleach', 3, 192, '2004-02-19', 'Ichigo kurosaki 15 ans peut voir les esprits ', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/6522.jpg', NULL),
(12, 'bleach', 8, 192, '2001-01-01', 'nouveau test ', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(13, 'bleacheeeeeeeee', 8, 192, '2001-01-01', 'nouveau test ', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(14, 'bleachoooooooooo', 8, 192, '2001-01-01', 'nouveau test ', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(15, 'bleachaaaa', 8, 192, '2001-01-01', 'nouveau test ', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(16, 'bleachaaaa', 8, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/6522.jpg', NULL),
(17, 'Zombie Powderrrrrrrrrrrr', 8, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(18, 'Zombie Powderrrrrrrrrrrr', 8, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(19, 'Zombie Powderrrrrrrrrrrr', 8, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(20, 'Zombie Powderrrrrrrrrrrr', 8, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(21, 'Zombie Powderrrrrrrrrrrr', 8, 192, '2001-01-01', 'une histoire de l\'autre cotÃ© de soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(22, 'one piece', 93, 192, '0202-02-02', 'une histoire de piraterie, luffy et kid en prison. ', 'https://www.manga-sanctuary.com/v10_good/public/img/objet/300/328804.jpg', NULL),
(23, 'one piece', 93, 192, '0202-02-02', 'une histoire de piraterie, luffy et kid en prison. ', 'https://www.manga-sanctuary.com/v10_good/public/img/objet/300/328804.jpg', NULL),
(24, 'bleach', 10, 200, '2004-02-20', 'rukia va repartir pour soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(25, 'bleach', 10, 200, '2004-02-20', 'rukia va repartir pour soul society', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/730.jpg', NULL),
(26, 'kevin et lucas', 1, 10, '2007-02-20', 'lucas prend kevin pour son pere ', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/736.jpg', NULL),
(27, 'Space Brothers', 1, 192, '2010-02-20', 'Deux frÃ¨res l\'un est un gÃ©nie astronaute, le second un ratÃ© ', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/8806.jpg', NULL),
(28, 'test de 15h20', 1, 10, '2011-02-20', 'de l\'autre cÃ´tÃ© RÃ©sumÃ©', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/8806.jpg', NULL),
(29, 'anthonny l\'appro', 1, 700, '2011-02-20', 'c\'est un approvisionneur qui travaille Ã  wilo', 'https://www.manga-sanctuary.com/v10_good/public/img/fiche/300/51793.jpg', NULL),
(31, 'Naruto -', NULL, NULL, NULL, 'Naruto est un garçon un peu spécial. Solitaire au caractère fougueux, il n\'est pas des plus appréciés dans son village. Malgré cela, il garde au fond de lui une ambition: celle de devenir un \'maître Hokage\', la plus haute distinction dans l\'ordre des ninjas, et ainsi obtenir la reconnaissance de ses pairs mais cela ne sera pas de tout repos... Suivez l\'éternel farceur dans sa quête du secret de sa naissance et de la conquête des fruits de son ambition! Naruto offre de l\'action, de l\'originalité et de l\'humour: bref, le parfait dosage du divertissement!', NULL, NULL),
(32, 'Naruto Gaiden - Chapitre 2', NULL, 19, '2015-05-11', 'Rendez-vous la semaine prochaine pour découvrir la suite des aventures de Boruto ! Message de Masashi Kishimoto : Mon fils a commencé à lire Naruto. Il me propose des tas de nouvelles techniques de son invention.', NULL, NULL),
(33, 'Naruto -', NULL, 224, '2016-11-04', 'Naruto est un garçon un peu spécial. Solitaire au caractère fougueux, il n\'est pas des plus appréciés dans son village. Malgré cela, il garde au fond de lui une ambition: celle de devenir un \'maître Hokage\', la plus haute distinction dans l\'ordre des ninjas, et ainsi obtenir la reconnaissance de ses pairs mais cela ne sera pas de tout repos... Suivez l\'éternel farceur dans sa quête du secret de sa naissance et de la conquête des fruits de son ambition! Naruto offre de l\'action, de l\'originalité et de l\'humour: bref, le parfait dosage du divertissement!', NULL, NULL),
(34, 'Naruto -', NULL, 224, '2016-11-04', 'Naruto est un garçon un peu spécial. Solitaire au caractère fougueux, il n\'est pas des plus appréciés dans son village. Malgré cela, il garde au fond de lui une ambition: celle de devenir un \'maître Hokage\', la plus haute distinction dans l\'ordre des ninjas, et ainsi obtenir la reconnaissance de ses pairs mais cela ne sera pas de tout repos... Suivez l\'éternel farceur dans sa quête du secret de sa naissance et de la conquête des fruits de son ambition! Naruto offre de l\'action, de l\'originalité et de l\'humour: bref, le parfait dosage du divertissement!', NULL, NULL),
(35, 'Naruto -', NULL, 224, '2016-11-04', 'Naruto est un garçon un peu spécial. Solitaire au caractère fougueux, il n\'est pas des plus appréciés dans son village. Malgré cela, il garde au fond de lui une ambition: celle de devenir un \'maître Hokage\', la plus haute distinction dans l\'ordre des ninjas, et ainsi obtenir la reconnaissance de ses pairs mais cela ne sera pas de tout repos... Suivez l\'éternel farceur dans sa quête du secret de sa naissance et de la conquête des fruits de son ambition! Naruto offre de l\'action, de l\'originalité et de l\'humour: bref, le parfait dosage du divertissement!', NULL, NULL),
(36, 'One Piece - Édition originale -', NULL, 208, '2020-01-02', 'Conviée au château d’Orochi en même temps que la grande courtisane Komurasaki, Robin est prise la main dans le sac par les espions de son hôte alors qu’elle est à la recherche d’informations. La voilà dos au mur ! Quant à Chapeau de paille, il cherche un moyen de s’évader de la carrière où il est retenu prisonnier depuis qu’il a été battu par Kaido. Les aventures de Luffy à la poursuite du One Piece continuent !', NULL, NULL),
(37, 'Bleach', NULL, 192, '2017-11-07', 'For use in schools and libraries only. Part-time student, full-time Soul Reaper, Ichigo is one of the chosen few guardians of the afterlife. Ichigo Kurosaki never asked for the ability to see ghosts--he was born with the gift. When his family is attacked by a Hollow--a malevolent lost soul--Ichigo becomes a Soul Reaper, dedicating his life to protecting the innocent and helping the tortured spirits themselves find peace. Find out why Tite Kubo\'s Bleach has become an international manga smash-hit! As the war between the Soul Reapers and Quincies heads for a climactic conclusion, Mayuri finds himself up against the weirdest enemy yet. Can his daughter Nemu step in and finish a foe that refuses to die?', NULL, NULL),
(38, 'L\'Attaque des Titans', NULL, 192, '2019-12-11', 'Déterminés à déclencher le Grand Terrassement, les pro-Jäger passent à l’action. Après avoir assassiné le général Zackley et neutralisé l’ensemble de l’État-major, ils partent rejoindre Sieg, dont Livaï s’apprête à découvrir les véritables intentions...', NULL, NULL),
(39, 'prophecy', 1, 192, '2005-05-12', 'La section de lutte contre la cybercriminalitÃ© de Tokyo est sur les dents. Un individu coiffÃ© dâ€™un masque en papier journal poste sur Internet des vidÃ©os menaÃ§antes oÃ¹ il prÃ©dit les pires crimes : incendies, agressions, viols... Le problÃ¨me ? DÃ¨s le lendemain, ses prophÃ©ties se rÃ©alisent Ã  la une des journaux tÃ©lÃ©visÃ©s. Qui est-il, comment procÃ¨de-t-il, quelles sont ses motivations ? Câ€™est le dÃ©but dâ€™une course contre la montre qui mÃ¨ne les inspecteurs jusquâ€™au siÃ¨ge vide dâ€™un cybercafÃ© de la banlieue de Tokyo. Mais tandis que lâ€™enquÃªte piÃ©tine, contre toute attente, le soutien populaire grandit autour du mystÃ©rieux personnage. Marginaux, employÃ©s tyrannisÃ©s par leur hiÃ©rarchie, internautes qui hantent les forums de discussion : ils sont de plus en plus nombreux Ã  se retrouver dans son combat.', 'https://www.manga-sanctuary.com/v10_good/public/img/objet/300/57413.jpg', NULL),
(40, 'prophecy', 2, 192, '2005-08-12', 'Alors que le Net est en effervescence, le mystÃ©rieux homme au journal fait une nouvelle victime. Cette fois, sa cible se retrouve passÃ©e Ã  tabac en direct sur un site de streaming, Ã  la grande joie des internautesâ€¦  Mais lâ€™Ã©tau se resserre peu Ã  peu autour du criminel. Lâ€™Ã©quipe du lieutenant Yoshino dÃ©couvre que derriÃ¨re le masque de Paperboy se cachent non pas un, mais plusieurs individus ! Et voilÃ  que lâ€™un dâ€™entre eux apparaÃ®t sur la vidÃ©o de surveillance dâ€™un cybercafÃ©. Sur le registre, un nom Ã©nigmatique : Nelsin Kato Ricarte', 'https://www.manga-sanctuary.com/v10_good/public/img/objet/300/62992.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`, `roles_id`) VALUES
(4, 'ale', 'alex.charlot18@gmail.com', '$2y$10$fyzzhhimZD1SAu3GDPTzVeVNkkPVBaxEWzYe3UAUH/4Mz0R6aEyQG', NULL, '2020-02-14 15:52:55', 2),
(5, 'kirua', 'alex.charlot18@gmail.com', '$2y$10$3/QO6cQm73/lo1gGStJz2ehLWwcujt03DGwMG3KsZMraKUNxJy7gm', NULL, '2020-02-17 10:26:04',1),
(6, 'ichigo', 'alex.charlot18@gmail.com', '$2y$10$swIQ11eX2XhTJ3k7mNZVdOLE.QCOM8.dSs4WaDNqIHS0DzWpesgsS', NULL, '2020-02-17 10:36:40',1),
(7, 'marie', 'alex.charlot18@gmail.com', '$2y$10$kYiBOx8oQlSJkgKQH9c.xOmt8Oun1bqXMv7Jj5X/rLaYP1jWtUL2a', NULL, '2020-02-17 16:18:07',1);

-- --------------------------------------------------------

--
-- Table structure for table `users_livres`
--

CREATE TABLE `users_livres` (
  `users_id` int(11) DEFAULT NULL,
  `livres_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_livres`
--

INSERT INTO `users_livres` (`users_id`, `livres_id`) VALUES
(4, 20),
(5, 8),
(5, 29),
(5, 16),
(6, 26),
(6, 24),
(6, 12),
(5, 13),
(5, 27),
(4, 28),
(4, 27),
(4, 24),
(5, 15),
(4, 39),
(4, 40),
(4, 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auteurs_livres`
--
ALTER TABLE `auteurs_livres`
  ADD KEY `auteurs_id` (`auteurs_id`),
  ADD KEY `livres_id` (`livres_id`);

--
-- Indexes for table `editeurs`
--
ALTER TABLE `editeurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editeurs_livres`
--
ALTER TABLE `editeurs_livres`
  ADD KEY `editeurs_id` (`editeurs_id`),
  ADD KEY `livres_id` (`livres_id`);

--
-- Indexes for table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_livres`
--
ALTER TABLE `users_livres`
  ADD KEY `users_id` (`users_id`),
  ADD KEY `livres_id` (`livres_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `editeurs`
--
ALTER TABLE `editeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auteurs_livres`
--
ALTER TABLE `auteurs_livres`
  ADD CONSTRAINT `auteurs_livres_ibfk_1` FOREIGN KEY (`auteurs_id`) REFERENCES `auteurs` (`id`),
  ADD CONSTRAINT `auteurs_livres_ibfk_2` FOREIGN KEY (`livres_id`) REFERENCES `livres` (`id`);

--
-- Constraints for table `editeurs_livres`
--
ALTER TABLE `editeurs_livres`
  ADD CONSTRAINT `editeurs_livres_ibfk_1` FOREIGN KEY (`editeurs_id`) REFERENCES `editeurs` (`id`),
  ADD CONSTRAINT `editeurs_livres_ibfk_2` FOREIGN KEY (`livres_id`) REFERENCES `livres` (`id`);

--
-- Constraints for table `users_livres`
--
ALTER TABLE `users_livres`
  ADD CONSTRAINT `users_livres_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_livres_ibfk_2` FOREIGN KEY (`livres_id`) REFERENCES `livres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
