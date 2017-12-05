-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 01 dec 2017 kl 01:45
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `millhouse`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `blogposts`
--

CREATE TABLE `blogposts` (
  `postID` int(10) UNSIGNED NOT NULL,
  `postDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `postTitle` varchar(60) NOT NULL,
  `postText` text NOT NULL,
  `userID` int(11) NOT NULL,
  `categoryName` varchar(200) NOT NULL,
  `imageName` varchar(200) DEFAULT NULL,
  `categoryID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `blogposts`
--

INSERT INTO `blogposts` (`postID`, `postDate`, `postTitle`, `postText`, `userID`, `categoryName`, `imageName`, `categoryID`) VALUES
(16, '2017-11-30 22:51:53', 'Venice', '', 1, 'Interior', 'best-western-hotel-olimpia-venezia.jpg', 0),
(18, '2017-12-01 01:06:05', 'Mountain lake', '', 1, 'Watches', 'Mountainlake.jpg', 0),
(31, '2017-11-30 01:49:52', 'itak', '<p>great</p>\r\n', 2, 'Interior', 'mh_interior_576.png', 0),
(33, '2017-11-30 02:31:45', 'vvv', '<p>cfnvnvn</p>\r\n', 2, 'Sunglasses', '', 0),
(34, '2017-11-30 16:15:07', 'test image upload', '<p>vjhbmnbm</p>\r\n', 2, 'Watches', 'spin_prod_197709401.jpg', 0),
(35, '2017-11-30 16:17:25', 'test image upload', '<p>vjhbmnbm</p>\r\n', 2, 'Watches', 'spin_prod_197709401.jpg', 0),
(36, '2017-11-30 16:20:36', 'image', '<p>fedweafe</p>\r\n', 2, 'Interior', 'cleric_of_kaga_by_willobrien-dadfp27.jpg', 0),
(37, '2017-11-30 16:27:16', 'test', '<p>dgdss</p>\r\n', 2, 'Interior', '8c6ce0219d1d54ad58dfa412f0b7b732--pirate-illustration-pirate-parrot.jpg', 0),
(38, '2017-11-30 16:28:34', 'reqw', '<p>vsvsa</p>\r\n', 2, 'Sunglasses', '06cb6263fa397f2d2d7dd76a5ab8f986.jpg', 0),
(39, '2017-11-30 16:34:41', 'DDDD', '', 2, 'Sunglasses', '2f883224bd85dbdef9f6f33db5603d77.jpg', 0),
(40, '2017-11-30 16:35:34', 'QWWERR', '', 2, 'Sunglasses', '05ad3d1beeaab4a57af6ffaeeb4be6f5.jpg', 0),
(41, '2017-11-30 16:36:05', 'gRGRWEGWERG', '<p>E</p>\r\n', 2, 'Watches', 'db7a928d94b226e4038cf57945fb07f1--fantasy-rpg-medieval-fantasy.jpg', 0),
(42, '2017-11-30 17:18:53', 'watch', '<p>y</p>\r\n\r\n<p><img alt=\"watch\" src=\"images/05ad3d1beeaab4a57af6ffaeeb4be6f5.jpg\" /></p>\r\n\r\n<p><img alt=\"watch\" src=\"images/\" /></p>\r\n\r\n<p><img alt=\"watch\" src=\"images/\" /></p>\r\n\r\n<p><img alt=\"watch\" src=\"images/06cb6263fa397f2d2d7dd76a5ab8f986.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 2, 'Interior', '8c6ce0219d1d54ad58dfa412f0b7b732--pirate-illustration-pirate-parrot.jpg', 0),
(44, '2017-11-30 17:11:47', 'super', '<p>india</p>\r\n', 2, 'Interior', '9a486e868a556759cb45eac4010f8601.jpg', 0),
(45, '2017-11-30 17:20:03', 'images', '<p>parrots</p>\r\n\r\n<p><img alt=\"images\" src=\"images/68c984be1e09c3fe72f1c576fff653fa.jpg\" /></p>\r\n', 2, 'Interior', '05ad3d1beeaab4a57af6ffaeeb4be6f5.jpg', 0),
(46, '2017-11-30 17:24:19', 'aqwa', '<p><img alt=\"aqwa\" src=\"images/db7a928d94b226e4038cf57945fb07f1--fantasy-rpg-medieval-fantasy.jpg\" /></p>\r\n\r\n<p>&ouml;l</p>\r\n', 2, 'Sunglasses', 'd637d5ef7e2a864c6b009b46485d09ca.jpg', 0),
(48, '2017-11-30 17:51:59', 'qb,mb,,', '<p><img alt=\"qb,mb,,\" src=\"images/\" /></p>\r\n\r\n<p><img alt=\"q\" src=\"images/blog_2.jpeg\" /></p>\r\n\r\n<p><img alt=\"q\" src=\"images/blog_7.jpg\" /></p>\r\n\r\n<p><img alt=\"q\" src=\"images/\" /></p>\r\n\r\n<p><img alt=\"q\" src=\"images/\" /></p>\r\n\r\n<p><img alt=\"q\" src=\"images/\" /></p>\r\n\r\n<p><img alt=\"q\" src=\"images/\" /></p>\r\n\r\n<p><img alt=\"q\" src=\"images/blog_9.jpeg\" /></p>\r\n\r\n<p>hghjjkb</p>\r\n', 2, 'Sunglasses', 'blog_8.jpeg', 0),
(49, '2017-11-30 17:49:52', 'hallo', '', 2, 'Interior', 'blog_3.jpg', 0),
(50, '2017-11-30 20:21:22', 'youtube', '<p><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XEfDYMngJeE\" frameborder=\"0\" allowfullscreen></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 2, 'Interior', '', 0),
(51, '2017-11-30 21:40:57', 'Nfgnf', '<p>fbdfbbfdbf</p>\r\n', 2, 'Sunglasses', 'cleric_of_kaga_by_willobrien-dadfp27.jpg', 0),
(52, '2017-11-30 22:44:47', 'y4ey4', '<p>ye4y4</p>\r\n', 2, 'Sunglasses', 'malena_pf_ranger_by_yamaorce-davcaqd.jpg', 0),
(53, '2017-11-30 22:59:33', 'Travel to Italy', '<p><img alt=\"Travel to Italy\" src=\"images/green.jpg\" /></p>\r\n\r\n<p>Italy is stunning and this tour is a fantastic way to see a snapshot of the regions. Mixing ancient wonders and lazy beach-side days, this tour was a good mix of fast and relaxed days.</p>\r\n\r\n<p>Our tour guide Maite was fantastic, she was passionate about her country, always willing to go 110% for us and you could tell she loved sharing her Italy with us. If it wasn&#39;t for her, I would not have had as good of a time.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 2, 'Watches', '', 0),
(54, '2017-11-30 23:14:55', 'Thailand', '<p><img src=\"images/\" /></p>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">It&rsquo;s no wonder <strong>Thailand</strong> has become such a popular tourist spot, because it is gorgeous. The humid weather gives the countryside lush greenery. Along the coast, limestone rock formations tower over the blue water. I have the luxury of being on the back of the motorbike while Jules drives us around, leaving me plenty of time to soak up the landscape.</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><q>The interior of the islands are thick with bush and trees, perfect for exploring. The beaches are quite pretty, although the nicest ones seem to be overrun with tourists. We&rsquo;re hoping to get off the beaten track soon to find some undiscovered coastline.</q></div>\r\n', 2, 'Watches', 'bamboowatch.jpg', 0),
(55, '2017-11-30 23:14:07', 'Sea story', '<p><img src=\"images/tyrrhsea.gif\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The Tyrrhenian Sea is part of the Mediterranean Sea, located off of the western coast of Italy.</p>\r\n\r\n<p>It&#39;s bordered in the west by Corsica and Sardinia, in the north by the Isle of Elba, and in the south by Sicily. The southwestern boundaries are an estimate at best, as it depends on where the sea actually ends.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 2, 'Sunglasses', 'sea.jpg', 0),
(56, '2017-11-30 23:24:57', 'Morning', '', 2, 'Watches', 'mh_watch_blogpost.jpeg', 0),
(57, '2017-11-30 23:45:05', 'Fika!', '<p><img src=\"images/\" /></p>\r\n\r\n<h2><span class=\"marker\">Best time of the day!</span></h2>\r\n\r\n<h1><tt><span class=\"marker\">Yes!</span></tt><img src=\"images/mh_sunglasses_blogpost.jpeg\" /></h1>\r\n\r\n<p><img src=\"images/\" /></p>\r\n', 2, 'Sunglasses', '', 0),
(59, '2017-11-30 23:32:31', 'Sunny day', '', 2, 'Sunglasses', 'sunglasses4.jpg', 0),
(60, '2017-11-30 23:34:54', 'Boat trip', '', 2, 'Sunglasses', 'boat.jpg', 0),
(61, '2017-11-30 23:52:11', 'Summer days in Italy', '<p><img src=\"images/manarola-italy-GettyImages-520953305.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"images/italy.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"images/italy2.jpg\" /></p>\r\n\r\n<p>Based on some of posts here and the prices of Airbnb&#39;s, now I&#39;m starting to think that going to&nbsp;<a href=\"https://www.tripadvisor.com/Tourism-g187893-Tuscany-Vacations.html\" target=\"_blank\">Tuscany</a>&nbsp;may be a better option for us. First. the Airbnb&#39;s are much cheaper, even when on right on the coast. Second, it seems much more conducive to renting a car. We travel to Europe every summer and always rent a car. We like the freedom it provides and we love visiting the little villages that you miss when you take trains between cities.</p>\r\n', 2, 'Sunglasses', '', 0),
(62, '2017-12-01 00:00:18', 'Bear', '', 2, 'Watches', 'bear.jpg', 0),
(64, '2017-12-01 00:05:27', 'Flip-flops', '', 2, 'Sunglasses', 'flipflop.png', 0),
(65, '2017-12-01 00:08:38', ' Awaglass', '<iframe src=\"https://player.vimeo.com/video/41661598\" width=\"640\" height=\"360\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Few things are as stressful as a ticking clock, so slow down time with the&nbsp;Awaglass: a bubble hourglass. In lieu of sand, bubbles of different shapes move up through the glass at varying speeds. Unlike its more traditional counterparts, the Awaglass is not meant to accurately tell time. Instead, it makes time arbitrary and reminds the owner to take a breath; it&#39;s hard to feel like time is slipping away when the hourglass&nbsp;is seemingly moving backwards.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 2, 'Watches', '', 0),
(66, '2017-12-01 01:03:51', 'Ski holiday', '<p><img src=\"images/switzerland.png\" /></p>\r\n', 1, 'Watches', '', 0),
(67, '2017-12-01 00:25:05', 'Sand and sun', '<p><strong>I tend to see this discussion as being akin to, &quot;Will the&nbsp;<em>sun</em>&nbsp;rise in the morning, or will it set in the&nbsp;<em>evening</em>?&quot;</strong></p>\r\n', 2, 'Watches', 'hipwee-time-and-the-writer.jpg', 0),
(68, '2017-12-01 01:01:03', 'Life style in the mountains', '<p><img src=\"images/breitling.jpg\" /></p>\r\n', 1, 'Watches', '', 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(0, 'Watches'),
(1, 'Sunglasses'),
(2, 'Interior');

-- --------------------------------------------------------

--
-- Tabellstruktur `comments`
--

CREATE TABLE `comments` (
  `commentID` int(10) UNSIGNED NOT NULL,
  `commentDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `commentText` varchar(200) NOT NULL,
  `userID` int(11) NOT NULL,
  `postID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `comments`
--

INSERT INTO `comments` (`commentID`, `commentDate`, `commentText`, `userID`, `postID`) VALUES
(1, '2017-11-30 22:25:24', 'Wonderful! Amazing!', 2, 50);

-- --------------------------------------------------------

--
-- Tabellstruktur `images`
--

CREATE TABLE `images` (
  `imageID` int(10) UNSIGNED NOT NULL,
  `postImage` varchar(200) NOT NULL,
  `postID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `images`
--

INSERT INTO `images` (`imageID`, `postImage`, `postID`) VALUES
(1, 'images/spin_prod_197709401.jpg', 0),
(2, 'images/cleric_of_kaga_by_willobrien-dadfp27.jpg', 0),
(3, 'images/8c6ce0219d1d54ad58dfa412f0b7b732--pirate-illustration-pirate-parrot.jpg', 0),
(4, 'images/06cb6263fa397f2d2d7dd76a5ab8f986.jpg', 0),
(5, 'images/2f883224bd85dbdef9f6f33db5603d77.jpg', 0),
(6, 'images/adefe5c77b003cd49418beb0e4132f2f.jpg', 0),
(7, 'images/e16e1eb5957897d5e9eed8145c374b37.jpg', 0),
(8, 'images/9a486e868a556759cb45eac4010f8601.jpg', 0),
(9, 'images/05ad3d1beeaab4a57af6ffaeeb4be6f5.jpg', 0),
(10, 'images/06cb6263fa397f2d2d7dd76a5ab8f986.jpg', 0),
(11, 'images/8c6ce0219d1d54ad58dfa412f0b7b732--pirate-illustration-pirate-parrot.jpg', 0),
(12, 'images/68c984be1e09c3fe72f1c576fff653fa.jpg', 0),
(13, 'images/05ad3d1beeaab4a57af6ffaeeb4be6f5.jpg', 0),
(14, 'images/db7a928d94b226e4038cf57945fb07f1--fantasy-rpg-medieval-fantasy.jpg', 0),
(15, 'images/d637d5ef7e2a864c6b009b46485d09ca.jpg', 0),
(16, 'images/blog_1.jpeg', 0),
(17, 'images/blog_4.jpeg', 0),
(18, 'images/blog_9.jpeg', 0),
(19, 'images/blog_9.jpeg', 0),
(20, 'images/blog_2.jpeg', 0),
(21, 'images/blog_3.jpg', 0),
(22, 'images/blog_8.jpeg', 0),
(23, 'images/cleric_of_kaga_by_willobrien-dadfp27.jpg', 0),
(24, 'images/malena_pf_ranger_by_yamaorce-davcaqd.jpg', 0),
(25, 'images/best-western-hotel-olimpia-venezia.jpg', 0),
(26, 'images/Mountainlake.jpg', 0),
(27, 'images/norway.png', 0),
(28, 'images/green.jpg', 0),
(29, 'images/bamboowatch.jpg', 0),
(30, 'images/sea.jpg', 0),
(31, 'images/tyrrhsea.gif', 0),
(32, 'images/sea.jpg', 0),
(33, 'images/bamboowatch.jpg', 0),
(34, 'images/mh_watch_blogpost.jpeg', 0),
(35, 'images/mh_sunglasses_blogpost.jpeg', 0),
(36, 'images/sunglasses4.jpg', 0),
(37, 'images/boat.jpg', 0),
(38, 'images/mh_sunglasses_blogpost.jpeg', 0),
(39, 'images/italy2.jpg', 0),
(40, 'images/italy.jpg', 0),
(41, 'images/manarola-italy-GettyImages-520953305.jpg', 0),
(42, 'images/bear.jpg', 0),
(43, 'images/yellow.jpg', 0),
(44, 'images/flipflop.png', 0),
(45, 'images/switzerland.png', 0),
(46, 'images/hipwee-time-and-the-writer.jpg', 0),
(47, 'images/breitling.jpg', 0),
(48, 'images/Mountainlake.jpg', 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `userID` int(10) UNSIGNED NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `userAvatar` varchar(100) NOT NULL DEFAULT 'images/user-icon.svg',
  `userEmail` varchar(200) NOT NULL,
  `userBio` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `userAvatar`, `userEmail`, `userBio`) VALUES
(1, 'mariia', 'qwert', 'images/user-icon.svg', 'super@gmail.com', 'my bio'),
(2, 'jimmi', 'asdf', 'images/user-icon.svg', 'jimmi@gmail.com', 'bio');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`postID`);

--
-- Index för tabell `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Index för tabell `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Index för tabell `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT för tabell `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
