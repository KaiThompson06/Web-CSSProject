-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2025 at 02:57 AM
-- Server version: 8.0.39
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `cardID` int NOT NULL,
  `suit` enum('HEARTS','CLUBS','SPADES','DIAMONDS') COLLATE utf8mb4_general_ci NOT NULL,
  `rank_num` int NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `back_color` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `price` double NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`cardID`, `suit`, `rank_num`, `image_path`, `back_color`, `price`, `year`) VALUES
(107, 'HEARTS', 1, './images/cards/1H.png', 'green', 938, '1959'),
(108, 'HEARTS', 2, './images/cards/2H.png', 'red', 572, '1957'),
(109, 'HEARTS', 3, './images/cards/3H.png', 'gray', 575, '1987'),
(110, 'HEARTS', 4, './images/cards/4H.png', 'gray', 551, '2005'),
(111, 'HEARTS', 5, './images/cards/5H.png', 'gray', 729, '1970'),
(112, 'HEARTS', 6, './images/cards/6H.png', 'red', 772, '2004'),
(113, 'HEARTS', 7, './images/cards/7H.png', 'red', 614, '1958'),
(114, 'HEARTS', 8, './images/cards/8H.png', 'gray', 638, '1996'),
(115, 'HEARTS', 9, './images/cards/9H.png', 'yellow', 542, '1972'),
(116, 'HEARTS', 10, './images/cards/10H.png', 'green', 645, '1984'),
(117, 'HEARTS', 11, './images/cards/11H.png', 'red', 753, '1965'),
(119, 'HEARTS', 13, './images/cards/13H.png', 'purple', 757, '1994'),
(120, 'CLUBS', 1, './images/cards/1C.png', 'gray', 784, '1958'),
(121, 'CLUBS', 2, './images/cards/2C.png', 'yellow', 581, '1979'),
(122, 'CLUBS', 3, './images/cards/3C.png', 'red', 515, '1980'),
(123, 'CLUBS', 4, './images/cards/4C.png', 'green', 580, '1989'),
(124, 'CLUBS', 5, './images/cards/5C.png', 'yellow', 700, '1994'),
(125, 'CLUBS', 6, './images/cards/6C.png', 'gray', 670, '1996'),
(126, 'CLUBS', 7, './images/cards/7C.png', 'green', 827, '2005'),
(127, 'CLUBS', 8, './images/cards/8C.png', 'gray', 545, '2005'),
(128, 'CLUBS', 9, './images/cards/9C.png', 'gray', 810, '1990'),
(129, 'CLUBS', 10, './images/cards/10C.png', 'gray', 870, '2004'),
(131, 'CLUBS', 12, './images/cards/12C.png', 'red', 668, '2001'),
(133, 'SPADES', 1, './images/cards/1S.png', 'green', 570, '2005'),
(134, 'SPADES', 2, './images/cards/2S.png', 'purple', 594, '1999'),
(135, 'SPADES', 3, './images/cards/3S.png', 'gray', 645, '1954'),
(136, 'SPADES', 4, './images/cards/4S.png', 'red', 697, '1988'),
(137, 'SPADES', 5, './images/cards/5S.png', 'yellow', 725, '1972'),
(138, 'SPADES', 6, './images/cards/6S.png', 'yellow', 554, '1950'),
(139, 'SPADES', 7, './images/cards/7S.png', 'yellow', 739, '1999'),
(140, 'SPADES', 8, './images/cards/8S.png', 'purple', 537, '1998'),
(141, 'SPADES', 9, './images/cards/9S.png', 'green', 640, '1968'),
(142, 'SPADES', 10, './images/cards/10S.png', 'red', 833, '1955'),
(143, 'SPADES', 11, './images/cards/11S.png', 'yellow', 959, '2003'),
(145, 'SPADES', 13, './images/cards/13S.png', 'yellow', 786, '1992'),
(146, 'DIAMONDS', 1, './images/cards/1D.png', 'blue', 1065, '1982'),
(147, 'DIAMONDS', 2, './images/cards/2D.png', 'gray', 558, '1953'),
(148, 'DIAMONDS', 3, './images/cards/3D.png', 'blue', 622, '1996'),
(149, 'DIAMONDS', 4, './images/cards/4D.png', 'green', 618, '1980'),
(150, 'DIAMONDS', 5, './images/cards/5D.png', 'red', 505, '1988'),
(151, 'DIAMONDS', 6, './images/cards/6D.png', 'blue', 790, '1972'),
(152, 'DIAMONDS', 7, './images/cards/7D.png', 'blue', 583, '1950'),
(153, 'DIAMONDS', 8, './images/cards/8D.png', 'blue', 833, '1952'),
(154, 'DIAMONDS', 9, './images/cards/9D.png', 'purple', 545, '1983'),
(155, 'DIAMONDS', 10, './images/cards/10D.png', 'green', 519, '1986'),
(156, 'DIAMONDS', 11, './images/cards/11D.png', 'red', 972, '1999'),
(157, 'DIAMONDS', 12, './images/cards/12D.png', 'green', 608, '1995'),
(158, 'DIAMONDS', 13, './images/cards/13D.png', 'blue', 689, '1985'),
(159, 'HEARTS', 1, './images/cards/1H.png', 'red', 509, '1997'),
(160, 'HEARTS', 2, './images/cards/2H.png', 'yellow', 542, '1982'),
(161, 'HEARTS', 3, './images/cards/3H.png', 'gray', 565, '1973'),
(162, 'HEARTS', 4, './images/cards/4H.png', 'green', 619, '1983'),
(163, 'HEARTS', 5, './images/cards/5H.png', 'blue', 708, '1955'),
(164, 'HEARTS', 6, './images/cards/6H.png', 'gray', 555, '1975'),
(165, 'HEARTS', 7, './images/cards/7H.png', 'gray', 726, '1979'),
(166, 'HEARTS', 8, './images/cards/8H.png', 'yellow', 675, '1991'),
(167, 'HEARTS', 9, './images/cards/9H.png', 'green', 667, '1995'),
(168, 'HEARTS', 10, './images/cards/10H.png', 'green', 938, '1973'),
(169, 'HEARTS', 11, './images/cards/11H.png', 'yellow', 758, '2001'),
(170, 'HEARTS', 12, './images/cards/12H.png', 'purple', 907, '1989'),
(171, 'HEARTS', 13, './images/cards/13H.png', 'blue', 508, '1960'),
(172, 'CLUBS', 1, './images/cards/1C.png', 'red', 699, '1951'),
(173, 'CLUBS', 2, './images/cards/2C.png', 'green', 573, '1995'),
(174, 'CLUBS', 3, './images/cards/3C.png', 'green', 541, '1987'),
(175, 'CLUBS', 4, './images/cards/4C.png', 'gray', 630, '2002'),
(176, 'CLUBS', 5, './images/cards/5C.png', 'red', 639, '1981'),
(177, 'CLUBS', 6, './images/cards/6C.png', 'gray', 726, '1973'),
(178, 'CLUBS', 7, './images/cards/7C.png', 'red', 716, '1975'),
(179, 'CLUBS', 8, './images/cards/8C.png', 'red', 704, '1969'),
(180, 'CLUBS', 9, './images/cards/9C.png', 'yellow', 625, '1980'),
(181, 'CLUBS', 10, './images/cards/10C.png', 'gray', 855, '1979'),
(182, 'CLUBS', 11, './images/cards/11C.png', 'purple', 798, '1982'),
(183, 'CLUBS', 12, './images/cards/12C.png', 'red', 743, '1951'),
(184, 'CLUBS', 13, './images/cards/13C.png', 'yellow', 952, '1987'),
(185, 'SPADES', 1, './images/cards/1S.png', 'gray', 677, '1980'),
(186, 'SPADES', 2, './images/cards/2S.png', 'blue', 506, '1984'),
(187, 'SPADES', 3, './images/cards/3S.png', 'yellow', 617, '1979'),
(188, 'SPADES', 4, './images/cards/4S.png', 'red', 669, '1991'),
(189, 'SPADES', 5, './images/cards/5S.png', 'yellow', 555, '1960'),
(190, 'SPADES', 6, './images/cards/6S.png', 'blue', 573, '1969'),
(191, 'SPADES', 7, './images/cards/7S.png', 'yellow', 550, '1979'),
(192, 'SPADES', 8, './images/cards/8S.png', 'purple', 828, '1963'),
(193, 'SPADES', 9, './images/cards/9S.png', 'green', 766, '1958'),
(194, 'SPADES', 10, './images/cards/10S.png', 'gray', 702, '1971'),
(195, 'SPADES', 11, './images/cards/11S.png', 'gray', 572, '2003'),
(196, 'SPADES', 12, './images/cards/12S.png', 'purple', 936, '2004'),
(197, 'SPADES', 13, './images/cards/13S.png', 'yellow', 765, '1953'),
(199, 'DIAMONDS', 2, './images/cards/2D.png', 'blue', 528, '1986'),
(200, 'DIAMONDS', 3, './images/cards/3D.png', 'yellow', 643, '1972'),
(201, 'DIAMONDS', 4, './images/cards/4D.png', 'blue', 677, '1963'),
(202, 'DIAMONDS', 5, './images/cards/5D.png', 'purple', 709, '1995'),
(203, 'DIAMONDS', 6, './images/cards/6D.png', 'purple', 701, '1974'),
(204, 'DIAMONDS', 7, './images/cards/7D.png', 'green', 535, '1999'),
(205, 'DIAMONDS', 8, './images/cards/8D.png', 'yellow', 840, '1976'),
(206, 'DIAMONDS', 9, './images/cards/9D.png', 'red', 648, '1965'),
(207, 'DIAMONDS', 10, './images/cards/10D.png', 'yellow', 511, '1968'),
(208, 'DIAMONDS', 11, './images/cards/11D.png', 'yellow', 515, '1986'),
(209, 'DIAMONDS', 12, './images/cards/12D.png', 'yellow', 968, '1977'),
(210, 'DIAMONDS', 13, './images/cards/13D.png', 'blue', 631, '1970'),
(212, 'HEARTS', 2, './images/cards/2H.png', 'purple', 562, '1969'),
(213, 'HEARTS', 3, './images/cards/3H.png', 'red', 625, '1998'),
(214, 'HEARTS', 4, './images/cards/4H.png', 'green', 593, '1957'),
(215, 'HEARTS', 5, './images/cards/5H.png', 'yellow', 640, '1963'),
(216, 'HEARTS', 6, './images/cards/6H.png', 'yellow', 703, '1971'),
(217, 'HEARTS', 7, './images/cards/7H.png', 'gray', 743, '1950'),
(218, 'HEARTS', 8, './images/cards/8H.png', 'blue', 662, '1967'),
(219, 'HEARTS', 9, './images/cards/9H.png', 'yellow', 833, '1957'),
(220, 'HEARTS', 10, './images/cards/10H.png', 'green', 880, '1951'),
(221, 'HEARTS', 11, './images/cards/11H.png', 'gray', 769, '1960'),
(222, 'HEARTS', 12, './images/cards/12H.png', 'blue', 941, '1981'),
(223, 'HEARTS', 13, './images/cards/13H.png', 'purple', 571, '1976'),
(224, 'CLUBS', 1, './images/cards/1C.png', 'gray', 533, '1974'),
(225, 'CLUBS', 2, './images/cards/2C.png', 'yellow', 561, '1961'),
(226, 'CLUBS', 3, './images/cards/3C.png', 'yellow', 622, '1999'),
(227, 'CLUBS', 4, './images/cards/4C.png', 'red', 579, '1967'),
(228, 'CLUBS', 5, './images/cards/5C.png', 'gray', 525, '1979'),
(229, 'CLUBS', 6, './images/cards/6C.png', 'green', 694, '1972'),
(230, 'CLUBS', 7, './images/cards/7C.png', 'red', 799, '1980'),
(231, 'CLUBS', 8, './images/cards/8C.png', 'red', 567, '1959'),
(232, 'CLUBS', 9, './images/cards/9C.png', 'purple', 826, '1981'),
(233, 'CLUBS', 10, './images/cards/10C.png', 'blue', 809, '2001'),
(234, 'CLUBS', 11, './images/cards/11C.png', 'blue', 838, '2002'),
(235, 'CLUBS', 12, './images/cards/12C.png', 'blue', 1008, '1986'),
(238, 'SPADES', 2, './images/cards/2S.png', 'gray', 577, '1957'),
(239, 'SPADES', 3, './images/cards/3S.png', 'blue', 645, '1956'),
(240, 'SPADES', 4, './images/cards/4S.png', 'gray', 506, '1974'),
(241, 'SPADES', 5, './images/cards/5S.png', 'green', 505, '1992'),
(242, 'SPADES', 6, './images/cards/6S.png', 'yellow', 682, '1977'),
(243, 'SPADES', 7, './images/cards/7S.png', 'red', 514, '1957'),
(244, 'SPADES', 8, './images/cards/8S.png', 'yellow', 505, '1976'),
(245, 'SPADES', 9, './images/cards/9S.png', 'gray', 561, '1961'),
(246, 'SPADES', 10, './images/cards/10S.png', 'blue', 656, '1964'),
(247, 'SPADES', 11, './images/cards/11S.png', 'red', 871, '1993'),
(248, 'SPADES', 12, './images/cards/12S.png', 'purple', 564, '1961'),
(249, 'SPADES', 13, './images/cards/13S.png', 'red', 525, '1992'),
(250, 'DIAMONDS', 1, './images/cards/1D.png', 'gray', 976, '2004'),
(251, 'DIAMONDS', 2, './images/cards/2D.png', 'blue', 537, '1986'),
(252, 'DIAMONDS', 3, './images/cards/3D.png', 'yellow', 548, '2004'),
(253, 'DIAMONDS', 4, './images/cards/4D.png', 'green', 603, '1985'),
(254, 'DIAMONDS', 5, './images/cards/5D.png', 'red', 668, '1952'),
(255, 'DIAMONDS', 6, './images/cards/6D.png', 'green', 624, '2005'),
(256, 'DIAMONDS', 7, './images/cards/7D.png', 'yellow', 795, '1969'),
(257, 'DIAMONDS', 8, './images/cards/8D.png', 'gray', 658, '1958'),
(258, 'DIAMONDS', 9, './images/cards/9D.png', 'yellow', 918, '1971'),
(259, 'DIAMONDS', 10, './images/cards/10D.png', 'blue', 587, '1980'),
(260, 'DIAMONDS', 11, './images/cards/11D.png', 'yellow', 763, '1999'),
(261, 'DIAMONDS', 12, './images/cards/12D.png', 'green', 1032, '1969'),
(262, 'DIAMONDS', 13, './images/cards/13D.png', 'red', 888, '1956'),
(263, 'HEARTS', 1, './images/cards/1H.png', 'purple', 651, '1997'),
(264, 'HEARTS', 2, './images/cards/2H.png', 'purple', 550, '1970'),
(265, 'HEARTS', 3, './images/cards/3H.png', 'yellow', 564, '1995'),
(266, 'HEARTS', 4, './images/cards/4H.png', 'purple', 510, '1994'),
(267, 'HEARTS', 5, './images/cards/5H.png', 'purple', 547, '1975'),
(268, 'HEARTS', 6, './images/cards/6H.png', 'gray', 515, '1975'),
(269, 'HEARTS', 7, './images/cards/7H.png', 'blue', 661, '1950'),
(270, 'HEARTS', 8, './images/cards/8H.png', 'blue', 874, '2003'),
(271, 'HEARTS', 9, './images/cards/9H.png', 'green', 707, '2004'),
(272, 'HEARTS', 10, './images/cards/10H.png', 'blue', 884, '2004'),
(273, 'HEARTS', 11, './images/cards/11H.png', 'yellow', 656, '1978'),
(274, 'HEARTS', 12, './images/cards/12H.png', 'red', 961, '1967'),
(275, 'HEARTS', 13, './images/cards/13H.png', 'yellow', 854, '1964'),
(276, 'CLUBS', 1, './images/cards/1C.png', 'red', 594, '1983'),
(277, 'CLUBS', 2, './images/cards/2C.png', 'green', 554, '1964'),
(278, 'CLUBS', 3, './images/cards/3C.png', 'red', 513, '1956'),
(279, 'CLUBS', 4, './images/cards/4C.png', 'gray', 593, '1971'),
(280, 'CLUBS', 5, './images/cards/5C.png', 'yellow', 720, '1979'),
(281, 'CLUBS', 6, './images/cards/6C.png', 'red', 500, '1966'),
(282, 'CLUBS', 7, './images/cards/7C.png', 'purple', 501, '1996'),
(283, 'CLUBS', 8, './images/cards/8C.png', 'red', 558, '1981'),
(284, 'CLUBS', 9, './images/cards/9C.png', 'gray', 827, '1983'),
(285, 'CLUBS', 10, './images/cards/10C.png', 'yellow', 625, '1955'),
(286, 'CLUBS', 11, './images/cards/11C.png', 'purple', 650, '1996'),
(287, 'CLUBS', 12, './images/cards/12C.png', 'gray', 712, '2000'),
(289, 'SPADES', 1, './images/cards/1S.png', 'red', 695, '1995'),
(290, 'SPADES', 2, './images/cards/2S.png', 'purple', 578, '1982'),
(291, 'SPADES', 3, './images/cards/3S.png', 'red', 535, '2001'),
(292, 'SPADES', 4, './images/cards/4S.png', 'red', 660, '1952'),
(293, 'SPADES', 5, './images/cards/5S.png', 'yellow', 595, '1955'),
(294, 'SPADES', 6, './images/cards/6S.png', 'gray', 549, '1973'),
(295, 'SPADES', 7, './images/cards/7S.png', 'red', 662, '1980'),
(296, 'SPADES', 8, './images/cards/8S.png', 'gray', 647, '1996'),
(297, 'SPADES', 9, './images/cards/9S.png', 'yellow', 834, '1968'),
(298, 'SPADES', 10, './images/cards/10S.png', 'purple', 883, '1971'),
(299, 'SPADES', 11, './images/cards/11S.png', 'yellow', 635, '1955'),
(302, 'DIAMONDS', 1, './images/cards/1D.png', 'green', 575, '1956'),
(303, 'DIAMONDS', 2, './images/cards/2D.png', 'purple', 527, '1976'),
(304, 'DIAMONDS', 3, './images/cards/3D.png', 'yellow', 648, '1984'),
(305, 'DIAMONDS', 4, './images/cards/4D.png', 'red', 537, '1970'),
(306, 'DIAMONDS', 5, './images/cards/5D.png', 'gray', 540, '1990'),
(307, 'DIAMONDS', 6, './images/cards/6D.png', 'red', 521, '1955'),
(308, 'DIAMONDS', 7, './images/cards/7D.png', 'yellow', 592, '1968'),
(309, 'DIAMONDS', 8, './images/cards/8D.png', 'green', 832, '2001'),
(310, 'DIAMONDS', 9, './images/cards/9D.png', 'green', 804, '1963'),
(311, 'DIAMONDS', 10, './images/cards/10D.png', 'gray', 683, '1972'),
(312, 'DIAMONDS', 11, './images/cards/11D.png', 'purple', 897, '1976'),
(313, 'DIAMONDS', 12, './images/cards/12D.png', 'red', 798, '1951'),
(314, 'DIAMONDS', 13, './images/cards/13D.png', 'red', 885, '2001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`cardID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `cardID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
