-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost:3306
-- Čas generovania: Po 15.Máj 2023, 20:52
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
  `contact_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `contact`
--

INSERT INTO `contact` (`contact_name`, `contact_email`, `contact_message`) VALUES
('dsf', 'dfs@dfg.skdf', 'gdfgdg'),
('sdfs', 'dsfsfs@dfgd.dfg', 'sdfsfdsfsfsfsfs'),
('fabian', 'fabiam@fabian.sk', 'nie je dobre este tato stranka'),
('df', 'sdf@df.sk', 'dfgfgfdg'),
('df', 'sdf@df.sk', 'dfgfgfdg'),
('retreer', 'dfgdf@dfgd.sl', 'sdfs');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `kontaktne_udaje`
--

CREATE TABLE `kontaktne_udaje` (
  `id` int(11) NOT NULL,
  `meno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sprava` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `kontaktne_udaje`
--

INSERT INTO `kontaktne_udaje` (`id`, `meno`, `email`, `sprava`) VALUES
(3, 'w', 'ww@w', 'a'),
(4, 'mozno', 'nie@nie.nemozem', 'ano'),
(5, 'mozno', 'nie@nie.nemozem', 'ano');

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
(4, 'dsfs@dfg.sk');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `image`) VALUES
(1, 'sadsadasda', 'images/author-image1.jpg'),
(3, 'Jessie Ca', 'images/author-image3.jpg'),
(7, 'ahoj', 'images/author-image4.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `qna`
--

CREATE TABLE `qna` (
  `id` int(11) NOT NULL,
  `otazka` varchar(255) NOT NULL,
  `odpoved` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `qna`
--

INSERT INTO `qna` (`id`, `otazka`, `odpoved`) VALUES
(1, 'A1', 'B1'),
(2, 'ano', 'pretoze'),
(3, 'otazka 3', 'odpoved 3');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `user_name` varchar(45) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`user_name`, `user_email`, `user_password`) VALUES
('h', 'h@j.sk', '47bce5c74f589f4867dbd57e9ca9f808'),
('d', 'd@g.sk', '03c7c0ace395d80182db07ae2c30f034'),
('aa', 'da@g.sk', '0cc175b9c0f1b6a831c399e269772661'),
('tomas', 'tomas@hudec.sk', '0cc175b9c0f1b6a831c399e269772661'),
('fdg', 'fdg@dfg.sk', 'c6e2338f42ccaf2c390a47ecec08d62d'),
('dsfsf', 'gfhfg@fgh.sk', 'eff7d5dba32b4da32d9a67a519434d3f'),
('dsf', 'fdsg@df.ss', '38d7355701b6f3760ee49852904319c1'),
('admin', 'admin@admin.sk', '21232f297a57a5a743894a0e4a801fc3');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `kontaktne_udaje`
--
ALTER TABLE `kontaktne_udaje`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `kontaktne_udaje`
--
ALTER TABLE `kontaktne_udaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `qna`
--
ALTER TABLE `qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
