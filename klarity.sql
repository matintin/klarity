-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 15-09-22 14:14
-- 서버 버전: 5.6.24
-- PHP 버전: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `klarity`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  `post_id` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `comments`
--

INSERT INTO `comments` (`id`, `content`, `post_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'We should be there', 1, '2015-09-21 01:28:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 테이블 구조 `labels`
--

CREATE TABLE IF NOT EXISTS `labels` (
  `id` int(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `labels`
--

INSERT INTO `labels` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Rugby', '2015-09-21 01:47:24', NULL, NULL),
(2, 'RWC', '2015-09-21 02:05:54', NULL, NULL),
(3, 'Soccer', '2015-09-21 02:08:33', NULL, NULL),
(4, 'Golf', '2015-09-21 02:10:12', NULL, NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `label_post`
--

CREATE TABLE IF NOT EXISTS `label_post` (
  `id` int(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `label_id` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `label_post`
--

INSERT INTO `label_post` (`id`, `post_id`, `label_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2015-09-21 01:47:46', NULL, NULL),
(2, 2, 1, '2015-09-21 02:06:08', NULL, NULL),
(3, 3, 3, '2015-09-21 02:08:45', NULL, NULL),
(4, 4, 4, '2015-09-21 02:10:29', NULL, NULL),
(6, 1, 2, '2015-09-22 08:31:46', NULL, NULL),
(7, 2, 2, '2015-09-22 08:31:46', NULL, NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `user_id` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `posts`
--

INSERT INTO `posts` (`id`, `title`, `photo`, `content`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'World Rugby cracks down on unauthorised', 'rugby.jpg', 'World Rugby has reinforced its commitment to protecting fans with the successful seizure of a significant number of tickets supplied at unauthorised hospitality events in a direct breach of the Rugby World Cup 2015 ticketing terms and conditions.The operation was successfully executed in advance of the opening match between Fiji and England at Twickenham on Friday night, following intelligence obtained by Rugby World Cup through its integrity programme.The holders of the tickets that were seized had attended an unauthorised hospitality event arranged by The Hospitality Group (THG) in Teddington under the marketing title The Triple Crown Club and other unauthorised hospitality at Cole Court under the marketing title The Grand Slam Club.REFUSED ENTRYIn line with the significant Buy Official education programme undertaken by World Rugby and Tournament Organisers England Rugby 2015 in partnership with the City of London and Met Police since the ticketing launch in November 2013, purchasers were refused entry to the ground and provided with information regarding the Buy Official programme.World Rugby spokesperson: “This seizure reinforces our commitment to protecting the genuine fan and that we are serious about cracking down on unauthorised providers who breach the ticketing terms by purchasing tickets and coupling them with unauthorised hospitality at a massively inflated price.“It is prohibited within the Rugby World Cup 2015 ticketing terms and conditions to couple any tickets with unauthorised hospitality packages and fans are urged to only buy tickets via the official public, travel and hospitality ticketing routes detailed via rugbyworldcup.com in order not to be let down.UNOFFICIAL SOURCES“We continue to gather intelligence regarding unauthorised hospitality providers and urge any fans who believe that they have unwittingly purchased tickets through unofficial sources to contact the official hospitality programme via our website www.rugbyworldcup.com/hospitality”A spokesperson for Rugby Travel and Hospitality, the exclusive provider of hospitality and travel packages said: "We fully support the action taken by Rugby World Cup in tackling the unofficial hospitality market for Rugby World Cup 2015.”', 1, '2015-09-21 01:23:49', NULL, NULL),
(2, 'Jeering of Richie McCaw ', 'rugby2.jpg', 'Richie McCaw had no complaints when the boos began ringing in his ears at Wembley Stadium on Sunday after he was yellow-carded by an old acquaintance, English referee Wayne Barnes, during the hard-earned victory over Argentina.The All Blacks captain, talking with a tinge of relief after New Zealand’s opening game 26-16 win over the Pumas, was despatched to the sin bin in the first half after sticking out his leg in what he called a “dumb” reflex action as Juan Martin Fernandez Lobbe was powering away from a ruck.McCaw could even have considered himself fortunate not to have seen red for the sort of cynical professional foul that officials have been told to clamp down upon. After he went to sit on the bench and his face was beamed on the big screen to the 89,000 fans, a crescendo of boos rang around the famous stadium.The old warrior simply shrugged, appearing to accept it was all part of the game, even if he suspected it was also the perfect chance for the boisterous, largely pro-Argentina crowd to put off the already-shaken All Blacks.“Well, I was sitting in the sin bin at the time so I didn''t really have a lot of comeback with that,” he said of the crowd’s jeering. “It was a dumb mistake I made. But you can''t worry about those sort of things, it is what it is."It''s happened before, there''s no good getting worried or all wound up about it. That''s not going to help you. I guess it''s a way of trying to put you off but you''ve just got to block that sort of stuff out.”He did just that. McCaw has an unflappable temperament after all these years, having long been used to being accused of cheating by opposing fans because of the way he pushes the laws to the limit. He is not only used to it, he still does not worry about it either.What worried him rather more was that his action, allied to Conrad Smith being shown a card just before half-time for what coach Steve Hansen thought was another unnecessary foul, put his team in danger with the Pumas already in the ascendancy.0:000:00"It was one of those things that as soon as it happens you wish it hadn''t. I knew straightaway, it was a reflex thing and it wasn''t the right thing to do. We suffered because of it and I put the team under pressure because of it,” McCaw reflected.That it was Barnes, the referee who became New Zealand’s public enemy No 1 in 2007 when his performance was blamed for them losing to France in the quarter-finals, who flourished the cards in the space of a few minutes to both him and Smith, was lost on no Kiwi in the crowd.Barnes and McCaw have history, with McCaw having claimed in his autobiography that the official should have never been selected for that 2007 event because he was too inexperienced.Here, though, McCaw could have no argument with his punishment, only the third time in 143 internationals that he has seen yellow. FAMILIAR TRIBUTEAs for the boos, Hansen reckoned that they were actually a familiar old tribute to his captain. “Well, it’s normal over here. It’s been happening for years,” he said, with a wry smile.“We’ll take it for what it is, a mark of respect against a great player. You don’t get booed unless you’re any good. If you’re no good, no one cares.” Everyone, of course, cares about the man who later showed in the game that he is still one of its great players. Throwing himself into the tackle with all his old ferocity, he went on to play a big part in the last-quarter revival which should act as an ideal launch pad for the All Blacks’ bid to defend their crown. RNS ic/js/sw', 2, '2015-09-21 02:04:17', NULL, NULL),
(3, 'Heung-Min Son hands Spurs all three points', 'soccer.jpg', 'Heung-Min Son scored on his home Premier League debut to give Tottenham a 1-0 win over Crystal Palace at White Hart Lane.\r\n\r\nThe South Korean, who scored twice in the 3-1 midweek Europa League win over Qarabag, broke the deadlock with 22 minutes remaining with a left-footed effort from just inside the box to give the hosts their second 1-0 league win in succession.\r\n\r\nCrystal Palace had not dropped a point away from home before Sunday''s game, and hit the post either side of half-time, first through Yohan Cabaye and then Bakary Sako, whose fierce shot was fantastically clipped onto the woodwork by Hugo Lloris.', 3, '2015-09-21 02:08:17', NULL, NULL),
(4, 'Day dominates during BMW Championship win', 'golf.jpg', 'Jason Day won the BMW Championship by an impressive six shots and will be in the top spot of the FedExCup standings entering next week’s season finale at the TOUR Championship by Coca-Cola at East Lake Country Club.\r\n\r\nDay finished at 22 under for the week, six shots better than second-place finisher Daniel Berger. Day also becomes only the third player since 2003 to win five or more times in one season. The others are Tiger Woods and Vijay Singh.\r\n\r\nDay moved to No. 1 in the Official World Golf Ranking and became only the second player this season to win in wire-to-wire fashion. Jordan Spieth went wire-to-wire at the Masters.', 3, '2015-09-21 02:09:52', NULL, NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `avatar` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_tokken` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `role`, `avatar`, `created_at`, `updated_at`, `deleted_at`, `remember_tokken`) VALUES
(1, 'marry.smith@mail.com', '1', 'Marry', 'Smith', 0, 'avatar.png', '2015-09-22 11:01:17', NULL, NULL, ''),
(2, 'peter.pan@mail.com', '1', 'peter', 'pan', 0, 'avatar.png', '2015-09-22 11:00:48', NULL, NULL, ''),
(3, 'martin.cho@mail.com', '1', 'Martin', 'Cho', 1, 'avatar.png', '2015-09-22 11:00:40', NULL, NULL, ''),
(4, 'C.R7@mail.com', '$2y$10$4V9Q9tAjlAwNWBd3RuCmPupjLQfJhnk36A1KipT5K86', 'Christian', 'Ronaldo', 0, '', '2015-09-22 10:07:16', '2015-09-21 22:07:16', NULL, ''),
(5, 'n.w@mail.com', '$2y$10$ii23.cWETZrsaWXwzub0/uuiHyGdfBtASmecgHAK/Al', 'nice', 'weather', 0, '', '2015-09-22 11:04:01', '2015-09-21 23:04:01', NULL, ''),
(6, 'g.b@mail.com', '$2y$10$DMqfxGMSNyngO.ElwGMR3uGYS5eUOh626A6OXeGINsW', 'good', 'boy', 0, 'avatar.png', '2015-09-22 11:06:26', '2015-09-21 23:06:26', NULL, '');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- 테이블의 인덱스 `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `label_post`
--
ALTER TABLE `label_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`,`label_id`),
  ADD KEY `label_id` (`label_id`);

--
-- 테이블의 인덱스 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 테이블의 AUTO_INCREMENT `labels`
--
ALTER TABLE `labels`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 테이블의 AUTO_INCREMENT `label_post`
--
ALTER TABLE `label_post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- 테이블의 AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 테이블의 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- 덤프된 테이블의 제약사항
--

--
-- 테이블의 제약사항 `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- 테이블의 제약사항 `label_post`
--
ALTER TABLE `label_post`
  ADD CONSTRAINT `label_post_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `label_post_ibfk_2` FOREIGN KEY (`label_id`) REFERENCES `labels` (`id`);

--
-- 테이블의 제약사항 `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
