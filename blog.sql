SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `b_categories`
--

CREATE TABLE IF NOT EXISTS `b_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `b_categories`
--

INSERT INTO `b_categories` (`id`, `title`) VALUES
(1, 'Food'),
(2, 'Sport'),
(3, 'Politics'),
(4, 'Technology'),
(5, 'Space'),
(6, 'Transport'),
(7, 'Religion'),
(8, 'Psychology'),
(9, 'Finance'),
(10, 'Education'),
(11, 'World News'),
(12, 'Arts'),
(13, 'Music'),
(14, 'History'),
(15, 'Computer Science'),
(16, 'Engineering'),
(17, 'Literature');

-- --------------------------------------------------------

--
-- Структура таблицы `b_comments`
--

CREATE TABLE IF NOT EXISTS `b_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `b_comments`
--

INSERT INTO `b_comments` (`id`, `text`, `user_id`, `news_id`) VALUES
(1, 'Good!', 1, 4),
(2, 'Nice!', 1, 1),
(3, 'So interesting', 1, 4),
(4, 'dfdsfdgdfs', 2, 3),
(5, 'fdgfdgrwgsd', 11, 1),
(6, 'hdgfddfgfd', 10, 1),
(7, 'Best', 8, 1),
(8, 'Super', 5, 1),
(9, 'Cool!', 9, 1),
(10, 'Amazing!', 8, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `b_news`
--

CREATE TABLE IF NOT EXISTS `b_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `b_news`
--

INSERT INTO `b_news` (`id`, `title`, `text`) VALUES
(1, 'Earth''s Moon Formed in ''Moonlet'' Mash-Up After Many Earth Impacts', 'Earth''s moon may be the product of many small moonlets that merged after multiple objects as big as Mars collided with Earth, leaving disks of planetary debris orbiting the planet, a new study suggests.\n\nThis idea that multiple impacts led to the moon''s birth challenges the most prevalent theory of lunar formation, which suggests that one giant impact led to the formation of the moon.\n\nThe new, multiple-impact hypothesis suggests that about 20 moon- to Mars-size objects struck the Earth, flinging debris from the planet into orbit. There, the debris formed disks around the Earth that looked somewhat like Saturn''s rings. Over centuries, debris in several disks accreted to form moonlets that migrated farther and farther from the Earth due to tidal interactions. Eventually, the moonlets settled at a distance known as the Hill radius, coalescing to form one big moon. [How the Moon Formed: 5 Wild Lunar Theories]\n\nThis graphic illustrates how the moon may have formed after multiple collisions on Earth. Moon- to Mars-sized impactors strike the Earth and leave a disk of debris orbiting the planet. The debris forms "moonlets" and migrate farther away from the Earth due to a tidal interaction, but eventually settle at a distance known as the Hill radius. Here, the moonlets merge to eventually form the moon.\nThis graphic illustrates how the moon may have formed after multiple collisions on Earth. Moon- to Mars-sized impactors strike the Earth and leave a disk of debris orbiting the planet. The debris forms "moonlets" and migrate farther away from the Earth due to a tidal interaction, but eventually settle at a distance known as the Hill radius. Here, the moonlets merge to eventually form the moon.\nCredit: Raluca Rufu, et al. / Nature Geoscience\nThis process isn''t too far off from the "Giant Impact Hypothesis," which states that a planet-size rock named Theia struck the Earth, leaving behind a jet of debris that went on to form the moon. But there''s one problem with this theory: it doesn''t provide a good explanation for the strong similarity between the composition of the moon and the Earth.\n\n"The multiple-impact scenario is a more natural way of explaining the formation of the moon," Raluca Rufu, a researcher at the Weizmann Institute of Science in Israel and lead author of the study, told Space.com. "In the early stages of the solar system, impacts were very abundant; therefore, it is more natural that several common impactors formed the moon, rather than one special one.\n\nIn a giant impact scenario, the object that struck the Earth would have needed an Earth-like composition to create a moon that is made of the same materials as Earth. If the impactor were composed of different stuff than Earth, the moon would not be so Earth-like in composition. [How the Moon Evolved: A Photo Timeline]\n\nAuthors of the new study, which was published today (Jan. 9) in the journal Nature Geoscience, performed several numerical simulations of moon-forming processes and determined that a multiple-impact scenario better explains the moon''s Earthly composition.\n\n"Moreover, the composition similarity between the Earth and the moon in the giant impact cannot be explained without using a special Earth-like impactor," Rufu added. "However, if multiple of bodies contribute to the final moon, their chemical signatures can even out, therefore the traces of the various impacts will be masked."\n\n \nRufu also said that no existing evidence points more strongly to a single-impact hypothesis, though some studies have found that it is possible to reproduce the moon''s composition with a single impact if it strikes with enough angular momentum. Such an impact "will excavate more Earth material; hence the final moon composition is similar to Earth," she said. "After the impact, the Earth-moon system has to lose the excess angular momentum."\n\n"To match both compositional and angular momentum constraints, the single giant-impact hypothesis requires such a specific type of collision that the moon''s formation becomes an uncomfortably improbable coincidence," Gareth Collins, a planetary scientist at Imperial College London who studies impacts throughout the solar system, wrote in an accompanying Nature News & Views article. Collins wrote that the study revives "the hitherto largely discarded scenario that a series of smaller and more common impacts, rather than a single giant punch, formed the moon."\n\nRufu and her colleagues are not the first to propose a multiple-impact scenario. Another paper published in 1989 raised that possibility, but "no further work was done on the subject," Rufu said. "This paper is first to provide extensive calculations that we hope will stimulate others to reexamine the issue."\n\nFurther research into the multiple-impact hypothesis is already underway. One of Rufu''s collaborators, physicist Hagai Perets of the Technion ― Israel Institute of Technology, is already working to find out the efficiency of moonlet mergers. Rufu and her adviser also plan to study the moonlet-merging process "to understand the mixing of the moonlets inside the final moon."'),
(2, 'Ancient Toy Inspires Low-Cost Medical Diagnostic Tool', 'Modern medicine often feels like magic: A technician pricks your skin, draws a drop of blood and whisks it away into another room. Oftentimes, this gives the doctor enough information to make a diagnosis and prescribe a treatment. But for people in developing countries, these kinds of diagnostics can be more science fiction than reality.\r\n\r\nModern medicine relies heavily on technology, like centrifuges, that are costly, bulky and require electricity. In many places around the world, this kind of equipment can be hard to come by. But in a new study published online today (Jan. 10) in the journal Nature Biomedical Engineering, researchers described an inexpensive, hand-powered centrifuge that''s based on an ancient toy and could help doctors working in developing countries.\r\n\r\nThe centrifuge is the workhorse of modern medical laboratories. The device spins samples at high speeds to separate particles or cells based on size and density, effectively concentrating specific components. Most diagnostics "are like looking for a needle in a haystack," said Manu Prakash, lead researcher on the new study and an assistant professor of bioengineering at Stanford University. A centrifuge, Prakash said, puts all the needles in one place, making them easier to find.'),
(3, 'Seahawks Score Touchdown, and Fans Shake Earthquake Monitors', 'Seattle Seahawks fans'' enthusiastic stomping and cheering at CenturyLink Field during the NFL playoff season is so powerful it can be felt by sensitive earthquake-detection equipment. And seismologists made special preparations to record the crowd noise that accompanied an important game on Saturday (Jan. 7) against the Detroit Lions.\r\n\r\nThe Pacific Northwest Seismic Network (PNSN) installed an array of seismometers (equipment that visualizes shaking as waves) at several stations throughout the stadium, in anticipation of the tremors that Seahawks followers have become famous for generating. PNSN shared web displays of the wave readings so that viewers at home could track the boisterous celebrations in real time — in fact, the seismographs were visible several seconds before the cheering appeared on TV, PNSN reported on its website. [The 10 Biggest Earthquakes in History]\r\n\r\nPreliminary analysis of the Jan. 7 data revealed that the largest recorded seismic signal emerged shortly after 8 p.m. local time during a play toward the end of the game, when Seahawks quarterback Russell Wilson threw a touchdown pass to wide receiver Doug Baldwin. The signal lasted for about 30 seconds, and some shaking continued after the main activity subsided, PNSN reported on their website.'),
(4, 'Oldest Evidence of Silk Found in 8,500-Year-Old Tombs', 'The oldest evidence of silk made by silkworms has been found buried in 8,500-year-old tombs in China, revealing that people may have used the luxurious material thousands of years earlier than previously thought, a new study finds.\r\n\r\nSilk was a rare luxury good in the ancient world. Its fame helped give a name to the Silk Road, the legendary network of trade routes that once connected the East and West from China to Rome.\r\n\r\nThe secret of how to make silk was first discovered in China. According to Chinese legend, after a silkworm cocoon dropped into the teacup of the wife of the Yellow Emperor, she found that the cocoon could unravel to yield about 3,300 feet (1 kilometer) of thread.'),
(5, 'Key to Keeping New Year''s Resolutions: Be Kind to Yourself', 'This article was originally published at The Conversation. The publication contributed the article to Live Science''s Expert Voices: Op-Ed & Insights.\r\n\r\nMany of us will start out the New Year by making a list of resolutions - changes we want to make to be happier such as eating better, volunteering more often, being a more attentive spouse, and so on. But, as we know, we will often fail. After a few failures we will typically give up and go back to our old habits.\r\n\r\nWhy is it so hard to stick to resolutions that require us to make effective or lasting changes?\r\n\r\nI would argue the problem isn''t that we try and we fail — the problem is how we treat ourselves when we fail. I study self-compassion, and my research and that of others show that how we relate to personal failure — with kindness or harsh self-judgment — is incredibly important for building resilience.\r\n\r\nFrom early childhood, we are taught how we must succeed at all costs. What most of us aren''t taught is how to fail successfully so we can change and grow.\r\n\r\nOne of the best ways to deal with failure is to have self-compassion.\r\n\r\nWhat exactly is self-compassion?\r\n\r\nI define self-compassion as having three main components: self-kindness, common humanity, and mindfulness. Self-kindness refers to the tendency to be caring, understanding, and supportive toward ourselves when we fail or make mistakes rather than being harshly critical or judgmental.\r\n\r\nCommon humanity involves recognizing that all humans are imperfect, and connecting our own flawed condition to the shared human condition so we can have greater perspective on our shortcomings.\r\n\r\nMindfulness involves being aware of the pain associated with failure in a clear and balanced manner so that we neither ignore nor obsess about our faults. The three together combine to create a self-compassionate frame of mind.\r\n\r\nA large body of research shows that self-compassion results in greater emotional well-being. One of the most consistent findings in this research is that greater self-compassion is linked to less depression, anxiety and stress.'),
(6, 'jhjh', '<p>\r\n	hgfhgfhfghgf</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `b_news_to_category`
--

CREATE TABLE IF NOT EXISTS `b_news_to_category` (
  `news_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `b_news_to_category`
--

INSERT INTO `b_news_to_category` (`news_id`, `category_id`) VALUES
(1, 5),
(1, 11),
(1, 13),
(2, 4),
(2, 16),
(3, 2),
(4, 12),
(4, 14),
(5, 8),
(6, 13);

-- --------------------------------------------------------

--
-- Структура таблицы `b_users`
--

CREATE TABLE IF NOT EXISTS `b_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `b_users`
--

INSERT INTO `b_users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'helenka', 'helenka@gmail.com', '21d2124db4d2f47684c5398ad74e4e2b', 2),
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2),
(3, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 1),
(4, '1111', 'user@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 1),
(5, '111', '111@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 1),
(6, 'hello', 'hello@gmail.com', '5d41402abc4b2a76b9719d911017c592', 1),
(7, 'hi', 'hi@gmail.com', '49f68a5c8493ec2c0bf489821c21fc3b', 1),
(8, 'gii', 'gii@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 1),
(9, '555', '555@gmail.com', '6074c6aa3488f3c2dddff2a7ca821aab', 1),
(10, 'addfs', 'ds@d.d', 'b59c67bf196a4758191e42f76670ceba', 1),
(11, 'dsfdin', 'admin@a.a', 'b59c67bf196a4758191e42f76670ceba', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
