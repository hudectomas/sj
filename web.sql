-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost:3306
-- Čas generovania: St 17.Máj 2023, 19:22
-- Verzia serveru: 10.4.27-MariaDB
-- Verzia PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `web`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contact`
--

CREATE TABLE `contact` (
  `contact_name` varchar(45) NOT NULL,
  `contact_email` varchar(60) NOT NULL,
  `contact_message` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `contact`
--

INSERT INTO `contact` (`contact_name`, `contact_email`, `contact_message`, `id`) VALUES
('sdfs', 'dsfsfs@dfgd.dfg', 'sdfsfdsfsfsfsfs', 2),
('df', 'sdf@df.sk', 'dfgfgfdg', 4),
('df', 'sdf@df.sk', 'dfgfgfdg', 5);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'ghf@f.sk'),
(2, 'ahoj@afgfd.sk'),
(3, 'dsfs@dfg.sk'),
(4, 'dsfs@dfg.sk'),
(5, 'ahojj@agsi.sk');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `image`) VALUES
(1, 'Štefan Chamraz', 'images/author-image1.jpg'),
(3, 'doc. Ing. Mária Králiková, PhD', 'images/author-image3.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `user_name` varchar(45) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`user_name`, `user_email`, `user_password`, `id`) VALUES
('h', 'h@j.sk', '47bce5c74f589f4867dbd57e9ca9f808', 1),
('d', 'd@g.sk', '03c7c0ace395d80182db07ae2c30f034', 2),
('aa', 'da@g.sk', '0cc175b9c0f1b6a831c399e269772661', 3),
('tomas', 'tomas@hudec.sk', '0cc175b9c0f1b6a831c399e269772661', 4),
('fdg', 'fdg@dfg.sk', 'c6e2338f42ccaf2c390a47ecec08d62d', 5),
('dsfsf', 'gfhfg@fgh.sk', 'eff7d5dba32b4da32d9a67a519434d3f', 6),
('dsf', 'fdsg@df.ss', '38d7355701b6f3760ee49852904319c1', 7),
('admin', 'admin@admin.sk', '21232f297a57a5a743894a0e4a801fc3', 8);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
