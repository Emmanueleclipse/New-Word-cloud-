-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 09:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordcloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `wordcount`
--

CREATE TABLE `wordcount` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wordcount`
--

INSERT INTO `wordcount` (`id`, `word`, `count`) VALUES
(721, 'how', 1),
(722, 'the', 14),
(724, 'cloud', 1),
(725, 'generator', 1),
(726, 'works', 1),
(727, 'layout', 6),
(728, 'algorithm', 4),
(729, 'for', 4),
(730, 'positioning', 1),
(731, 'words', 6),
(732, 'without', 3),
(733, 'overlap', 1),
(734, 'is', 5),
(735, 'available', 1),
(736, 'on', 2),
(737, 'github', 1),
(738, 'under', 1),
(739, 'an', 2),
(740, 'open', 1),
(741, 'source', 1),
(742, 'license', 1),
(743, 'as', 4),
(744, 'd3-cloud', 1),
(745, 'note', 1),
(746, 'that', 1),
(747, 'this', 2),
(748, 'only', 1),
(749, 'and', 3),
(750, 'any', 2),
(751, 'code', 1),
(752, 'converting', 1),
(753, 'text', 1),
(754, 'into', 1),
(755, 'rendering', 1),
(756, 'final', 1),
(757, 'output', 1),
(758, 'requires', 1),
(759, 'additional', 1),
(760, 'development', 1),
(761, 'placement', 1),
(762, 'can', 2),
(763, 'be', 2),
(764, 'quite', 1),
(765, 'slow', 1),
(766, 'more', 1),
(767, 'than', 1),
(768, 'a', 5),
(769, 'few', 1),
(770, 'hundred', 1),
(771, 'run', 1),
(772, 'asynchronously', 1),
(773, 'with', 3),
(774, 'configurable', 3),
(775, 'time', 2),
(776, 'step', 3),
(777, 'size', 1),
(778, 'makes', 1),
(779, 'it', 5),
(780, 'possible', 1),
(781, 'to', 5),
(782, 'animate', 1),
(783, 'they', 1),
(784, 'are', 2),
(785, 'placed', 2),
(786, 'stuttering', 1),
(787, 'recommended', 1),
(788, 'always', 1),
(789, 'use', 1),
(790, 'even', 1),
(791, 'animations', 1),
(792, 'prevents', 1),
(793, 'browserâ€™s', 1),
(794, 'event', 1),
(795, 'loop', 1),
(796, 'from', 1),
(797, 'blocking', 1),
(798, 'while', 1),
(799, 'placing', 1),
(800, 'itself', 1),
(801, 'incredibly', 1),
(802, 'simple', 1),
(803, 'each', 1),
(804, 'starting', 2),
(805, 'most', 1),
(806, 'important', 1),
(807, 'attempt', 1),
(808, 'place', 1),
(809, 'at', 1),
(810, 'some', 1),
(811, 'point', 1),
(812, 'usually', 1),
(813, 'near', 1),
(814, 'middle', 1),
(815, 'or', 1),
(816, 'somewhere', 1),
(817, 'central', 1),
(818, 'horizontal', 1),
(819, 'line', 2),
(820, 'if', 1),
(821, 'intersects', 1),
(822, 'previously', 1),
(823, 'move', 1),
(824, 'one', 1),
(825, 'along', 1),
(826, 'increasing', 1),
(827, 'spiral', 1),
(828, 'repeat', 1),
(829, 'until', 1),
(830, 'no', 1),
(831, 'intersections', 1),
(832, 'found', 1),
(833, 'hard', 1),
(834, 'part', 1),
(835, 'making', 1),
(836, 'perform', 1),
(837, 'efficiently!', 1),
(838, 'according', 1),
(839, 'jonathan', 1),
(840, 'feinberg', 1),
(841, 'wordle', 1),
(842, 'uses', 1),
(843, 'combination', 1),
(844, 'of', 1),
(845, 'hierarchical', 1),
(846, 'bounding', 1),
(847, 'boxes', 1),
(848, 'quadtrees', 1),
(849, 'achieve', 1),
(850, 'reasonable', 1),
(851, 'speeds', 1),
(852, 'glyphs', 2),
(853, 'in', 1),
(854, 'javascript', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wordcount`
--
ALTER TABLE `wordcount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wordcount`
--
ALTER TABLE `wordcount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=855;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
