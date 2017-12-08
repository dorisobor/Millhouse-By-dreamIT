-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 08, 2017 at 04:42 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `millhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogPosts`
--

CREATE TABLE `blogPosts` (
  `postID` int(10) UNSIGNED NOT NULL,
  `postDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `postTitle` varchar(60) NOT NULL,
  `postText` text NOT NULL,
  `userID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `imageID` int(11) DEFAULT NULL,
  `categoryName` varchar(255) NOT NULL,
  `imageName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogPosts`
--

INSERT INTO `blogPosts` (`postID`, `postDate`, `postTitle`, `postText`, `userID`, `categoryID`, `imageID`, `categoryName`, `imageName`) VALUES
(3, '2017-11-24 11:14:00', 'Lovely Spain!', 'So it\'s finally time! Tomorrow we\'re going to Málaga. I\'m wearing these sunglasses from Millhouse and I will use them alot, it\'s 25 degrees there.\r\nI love Málaga place so much! The food is amazing, the people are so friendly and the architecture is beautiful. I remember when I lived in this wonderful city and I still feel like it\'s my second home. I don\'t even know Stockholm as well as I know Málaga. And ever since 2011 I\'ve been going back at least once a year. And tomorrow it\'s time again. I\'m so looking forward to enjoy the sun a bit, sipping Sangria and Tinto de Verano at Mariott Hotel with the view over the harbour and seaside. I wish I could live there and someday I might will. Hopefully soon, I miss it everyday.', 8, 2, 2, 'Sunglasses', 'blog_8.jpeg'),
(4, '2017-11-23 11:53:09', 'Watch Out!', 'I really have to show you this watch, I absolutely Love It! I bought it a few months ago but I\'ve used it everyday since then. And I\'ve gotten so many compliments for it! My sister even wished for her on for Christmas, so we\'ll just wait and see what Santa brings.', 6, 1, 3, 'Watches', 'blog_6.jpeg'),
(5, '2016-12-14 11:28:00', 'Happy Birthday My Love!', 'It was Simons birthday yesterday and I got hime the watch and sunglasses. And he loved it! We\'re going to Málaga over Christmas so he will surly use the sunglasses there. I\'m so happy that I got him the watch since he\'s always late. But I guess I\'m not the right person to comment on that haha. Hope you\'re enjoying this beautiful december day. ', 6, 1, 4, 'Watches', 'blog_7.jpg'),
(6, '2017-11-22 12:04:27', 'Home Is Where Your Heart Is!', 'In love with my new pillow cases. Especially the yellow one, it really pops with the grey ones. I think it\'s so important to bring in some color into your home and for me the perfect way to do it is with the small details!', 6, 3, 5, 'Interior', 'blog_9.jpeg'),
(7, '2016-11-24 12:08:48', 'Light It Up!', 'New In - Lamp from Millhouse! Works really well with the rest of the interior. ', 6, 3, 6, 'Watches', 'blog_5.jpeg'),
(8, '2017-12-04 14:20:08', 'New In!', 'Finally bought this beautiful drawer from Millhouse. It has lika vintage touch and fits so perfect with the rest of my interior. So happy that it\'s finally mine!', 8, 3, 7, 'Interior', 'blog_10.jpeg'),
(9, '2016-10-12 15:10:15', 'Clockmaster!', 'My newest member! So happy Millhouse decided to make it a part of their winter collection. I really like the silver with the brown leather!', 5, 1, 8, 'Watches', 'blog_11.jpeg'),
(10, '2017-12-05 14:48:05', 'It\'s the most wonderful time of the year!', 'Finally having some Christmas feelings. We have decorated the apartment with our new Christmas decorations from Millhouse. This year we\'ll go with silver details. Love it so much!', 6, 3, 9, 'Interior', 'blog_12.jpg'),
(11, '2017-11-20 00:00:00', 'Autumn Feelings', 'The summer is turning into autumn. The leaves has changed from green to red. And I absolutely love the smell of the autumn air. \r\n\r\nWe celebrated my brothers birthday and I gave him this watch from Millhouse. Really fits great now with the autumn coming.', 8, 1, 10, 'Watches', 'blog_2.jpeg'),
(12, '2017-12-05 14:56:56', 'Tea Time!', 'Love my new mugs from Millhouse! New in from Interior! Check it out! Love the silver ones too!', 8, 3, 11, 'Interior', 'blog_3.jpg'),
(14, '2017-10-03 15:16:30', 'Vilanova i la Geltru', 'I was in Barcelona with one of my best friends in the beginning of november. I wish it would be possible to go to the sun every year around that time. It feels like I got so much extra energy and now when it\'s december I actually still feel filled with energy. I\'m gonna do some shopping at Millhouse today, I\'ll probably buy some gifts for Christmas. I feel so grateful that I have some extra energy even though it\'s really dark and cold outside.', 8, 2, 13, 'Sunglasses', 'blog_13.jpg'),
(17, '2017-12-07 11:01:11', 'Cats 4 Life!', '<p>So this will be my first blogpost!&nbsp;<br />\r\nA little about me, I LOVE cats so I&#39;ll try to give you as much pictures of my best friend as possible. But today I&#39;ll give you a pic of this cool little fellow! :)</p>\r\n', 4, 2, NULL, '', 'Skärmavbild 2017-12-07 kl. 11.00.31.png'),
(18, '2017-12-08 07:37:20', 'Morning!', '<p>So today we&rsquo;ll have the group presentation, it feels really nervous but fun.&nbsp;</p>\r\n\r\n<p>I&rsquo;ll start my morning with my favorite straweberry tea in my favorite mug from Millhouse.&nbsp;</p>\r\n\r\n<p>Have a lovely day! :)</p>\r\n', 6, 3, NULL, '', 'blog_17.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Watches'),
(2, 'Sunglasses'),
(3, 'Interior');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(10) UNSIGNED NOT NULL,
  `commentDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `commentText` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL,
  `postID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `commentDate`, `commentText`, `userID`, `postID`) VALUES
(1, '2017-11-24 11:37:02', 'I also love Málaga, such a lovely city!', 6, 3),
(2, '2017-12-04 15:16:19', 'That\'s a really nice watch! ', 6, 9),
(3, '2017-12-04 15:19:30', 'Are the mugs from Millhouse too?', 6, 8),
(4, '2017-12-04 15:22:08', 'You have such beautiful pictures! And I hope Santa will bring me that watch too! :)', 4, 4),
(5, '2017-12-08 10:05:08', 'I also love Spain! Never been to Barcelona, but it looks really beautiful!', 4, 14),
(6, '2017-12-08 10:35:16', 'How far from barcelona city is this place? :)', 5, 14),
(7, '2017-12-08 10:36:27', 'Wow! What a nice picture, love the colors! ', 6, 14),
(8, '2017-12-08 10:39:59', '@Sofia Bernard, no unfortunately they\'re not. :(', 8, 8),
(12, '2017-12-08 11:13:01', 'Thank you guys! :)', 8, 14),
(17, '2017-12-08 16:36:26', ' hej hej', 4, 18),
(18, '2017-12-08 16:38:12', ' Woho!', 4, 18),
(19, '2017-12-08 16:40:00', ' Love the basket! :)', 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageID` int(10) UNSIGNED NOT NULL,
  `postImage` varchar(255) NOT NULL,
  `postID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageID`, `postImage`, `postID`) VALUES
(1, 'images/blog/blog_1.jpeg', 1),
(2, 'images/blog/blog_8.jpeg', 3),
(3, 'images/blog/blog_6.jpeg', 4),
(4, 'images/blog/blog_7.jpg', 5),
(5, 'images/blog/blog_9.jpeg', 6),
(6, 'images/blog/blog_5.jpeg', 7),
(7, 'images/blog/blog_10.jpeg', 8),
(8, 'images/blog/blog_11.jpeg', 9),
(9, 'images/blog/blog_12.jpg', 10),
(10, 'images/blog/blog_2.jpeg', 11),
(11, 'images/blog/blog_3.jpg', 12),
(13, 'images/blog/blog_13.jpg', 14),
(14, 'images/blog/Christmas-Hat-PNG-HD.png', 0),
(15, 'images/Thats+my+wallpaper+d+_7f3f0ad4a2b86b9d521cc912f08d443e.jpg', 0),
(16, 'images/Skärmavbild 2017-12-07 kl. 11.00.31.png', 0),
(17, 'images/blog_17.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) UNSIGNED NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `userAvatar` varchar(100) DEFAULT 'images/user-icon.svg',
  `userEmail` varchar(200) NOT NULL,
  `userBio` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `userAvatar`, `userEmail`, `userBio`) VALUES
(4, 'emmichiwa', '$2y$10$OqPrVjJRnZMuSXCORIn2cOOy2nAcqBDx7nNhdm.vIR2DHOaXusUPi', 'images/user-icon.svg', 'emmelie.engstrom@medieinstitutet.se', 'I love cats!'),
(5, 'Marcos', '$2y$10$PnBhMJvhgp7Y7Qgyadm6Zu60AVmEMkxAzR0hg44ZiV3IKoTMSZZyi', 'images/user-icon.svg', 'marcos@talia.se', 'Life is what you make it'),
(6, 'Sofia Bernard', '$2y$10$1PpfWlFRoMQmY3pGkNXgeORGN.bn3INkhrXBihRO/VO/yj4Vb142O', 'images/user-icon.svg', 'sofia@gmail.com', 'Fashions fade, Style is eternal'),
(8, 'Emmelie', '$2y$10$kOtDxKXMWfQ3jXpwV6wlTO8s7PD7W9TSJ4Qx06J0t4qbWNe0t3njG', 'images/user-icon.svg', 'emmelie@talia.se', 'Málaga <3'),
(9, 'jimmy', '$2y$10$8LLf5x.WVTb4w33CBrHmfeUjxDPKxO1D4lrTzlid9y0A6IehpXysi', 'images/user-icon.svg', 'jimmy@hotmail.com', 'love school');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogPosts`
--
ALTER TABLE `blogPosts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogPosts`
--
ALTER TABLE `blogPosts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;