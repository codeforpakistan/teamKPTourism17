-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 07:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism_kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `act_id` int(11) NOT NULL COMMENT 'primary key',
  `reg_id` int(11) NOT NULL COMMENT 'Foreign key',
  `name` varchar(200) NOT NULL,
  `spots_detail` varchar(150) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`act_id`, `reg_id`, `name`, `spots_detail`, `icon`, `image`, `description`, `status`) VALUES
(1, 1, 'Fishing', '5 Fishing spots', 'fishing1.png', 'img_(5).jpg', '&lt;span class=&quot;tooltiplink&quot; title=&quot;By: Anonymous &quot;&gt;Toy mouse squeak roll over&lt;/span&gt; &lt;span class=&quot;tooltiplink&quot; title=&quot;By: Anonymous &quot;&gt;lie on your belly and purr when you are asleep&lt;/span&gt;. Chase mice &lt;span class=&quot;tooltiplink&quot; title=&quot;By: Anonymous &quot;&gt;chew on cable&lt;/span&gt; climb leg, but &lt;span class=&quot;tooltiplink&quot; title=&quot;By: Anonymous &quot;&gt;chase dog then run away&lt;/span&gt; &lt;span class=&quot;tooltiplink&quot; title=&quot;By: Alex Rector&quot;&gt;purr.&lt;/span&gt;', '1'),
(2, 4, 'Fishing', '5 different fishing Spots', 'fishing.png', 'fishing2.png', '&lt;div id=&quot;lipsum&quot;&gt;\r\n&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dui ex. Integer vehicula pretium ipsum id ullamcorper. Duis vel dignissim felis, sed varius risus. Duis dolor leo, efficitur a nisi nec, tristique volutpat nisl. Vestibulum sit amet sodales neque. Pellentesque semper, leo in viverra eleifend, dui diam viverra ligula, id pharetra augue nibh ac leo. Ut auctor, tortor non vehicula maximus, tellus urna porttitor orci, sed eleifend ligula leo ut nisl. Aliquam tempor massa ut ultricies porttitor. Nulla tristique erat eget felis congue, vitae elementum justo facilisis. Proin diam nisl, rhoncus ut nisi eget, aliquam condimentum ipsum. Nulla a nisi dui. Sed neque sem, lobortis ut dignissim at, mattis suscipit felis. Praesent id vestibulum sapien.&lt;/p&gt;\r\n&lt;p&gt;Aliquam sagittis metus sed aliquam lacinia. Maecenas tristique condimentum turpis, eget ultrices diam venenatis ac. Nulla rhoncus ipsum ipsum, tempus maximus eros porta in. Fusce ut suscipit mi. Nullam vitae lacus a nisl ultrices finibus lacinia sed ligula. Vestibulum vitae leo et libero lobortis ultricies. Duis sed mi ut lacus placerat feugiat non et eros. Mauris placerat nisi eget interdum bibendum. Quisque odio diam, laoreet in tincidunt sit amet, tristique id est. Sed tincidunt laoreet ipsum, a maximus nisl vulputate at.&lt;/p&gt;\r\n&lt;p&gt;Sed molestie varius lacus, vitae condimentum leo placerat euismod. Sed a quam elit. Donec in augue orci. Vestibulum ante est, vulputate id urna vel, facilisis blandit velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque sit amet ante lectus. Maecenas tempor non augue cursus faucibus. Curabitur maximus velit eget sodales semper. Ut cursus mattis ligula, id malesuada ipsum maximus in. Sed at semper neque.&lt;/p&gt;\r\n&lt;p&gt;In laoreet nibh quis tellus suscipit lobortis. Proin vehicula vitae mauris sed vestibulum. Nullam hendrerit libero nunc, at ultrices orci accumsan nec. Nullam vitae augue sapien. Pellentesque eleifend finibus accumsan. Phasellus sagittis tortor eget risus mollis finibus. Donec id quam ut neque pretium mattis et elementum mauris. Suspendisse mollis ante id risus pretium posuere. Nam ac ipsum eleifend, suscipit dolor vitae, iaculis lorem. Fusce at dictum ligula. Suspendisse sollicitudin vel mi nec hendrerit. Quisque mollis accumsan lacus, vel malesuada elit viverra non. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus vel lobortis nisl.&lt;/p&gt;\r\n&lt;p&gt;Integer tristique augue sit amet lorem rhoncus suscipit. Cras ac neque sem. Quisque condimentum elit ac sollicitudin efficitur. Curabitur metus mauris, dapibus sed mollis vel, sodales in eros. Mauris eget iaculis lacus. Phasellus fermentum ligula ac urna vehicula pellentesque. Nullam feugiat rhoncus dui, eu porta erat scelerisque non. Proin justo odio, condimentum nec velit a, pretium efficitur ipsum. Nam sit amet risus vel urna aliquet efficitur ac et justo. Proin eget tristique lacus. Curabitur pretium quis leo a consectetur. Nulla vehicula sapien at aliquam interdum. Quisque vitae mattis ipsum, non finibus odio.&lt;/p&gt;\r\n&lt;/div&gt;', '1');

-- --------------------------------------------------------

--
-- Table structure for table `activity_spots`
--

CREATE TABLE `activity_spots` (
  `spot_id` int(11) NOT NULL COMMENT 'Primary Key',
  `act_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `name` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `open_timing` varchar(100) NOT NULL,
  `close_timing` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `description` text NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `header_image` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `image`, `post_title`, `created`) VALUES
(1, 'HIlal Ahmed', 'admin', '$2y$12$S2PhjInGlf48rxrnWdn8x.JrhIiUXXYqj1Yv6iiUA3CNGOUyxfPDC', 'avatar51.png', 'Asst Web Developer', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(150) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`, `status`) VALUES
(1, 'Attractions/Sights', '1'),
(2, 'Food &amp; Drink', '1'),
(3, 'Outdoor Activities/Recreation', '1'),
(4, 'Entertainment', '1'),
(5, 'Hotel/Accomodation', '1'),
(6, 'Events/Tours', '1'),
(7, 'Information', '1'),
(8, 'Transportation', '1'),
(9, 'Culture', '1');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL COMMENT 'Primary Key',
  `reg_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `title` varchar(200) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `event_type` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(150) NOT NULL,
  `open_timing` varchar(150) NOT NULL,
  `close_timing` varchar(150) NOT NULL,
  `rating` int(11) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `header_image` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events_gallery`
--

CREATE TABLE `events_gallery` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `caption` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_slider`
--

CREATE TABLE `main_slider` (
  `id` int(11) NOT NULL COMMENT 'Primary key',
  `heading` char(200) NOT NULL,
  `description` text NOT NULL,
  `image` char(250) NOT NULL,
  `link` char(250) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_slider`
--

INSERT INTO `main_slider` (`id`, `heading`, `description`, `image`, `link`, `status`) VALUES
(1, 'Astounding Sights in Naran', 'Efficiently unleash cross-media information without cross-media value.', 'img_6.jpg', 'http://tckp.herokuapp.com/discover', '1'),
(2, 'Treks In Kaghan', 'Irish skinny, grinder affogato, dark, sweet carajillo.', 'img_12.jpg', 'http://tckp.herokuapp.com/discover', '1');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `reg_id` int(11) NOT NULL COMMENT 'Primary key',
  `name` varchar(200) NOT NULL,
  `location` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `thumb_image` varchar(30) NOT NULL,
  `thumb_overlay` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `elevation` varchar(10) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `heading_desc` varchar(300) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `weather` varchar(250) NOT NULL,
  `is_famous` varchar(10) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`reg_id`, `name`, `location`, `description`, `thumb_image`, `thumb_overlay`, `image`, `elevation`, `heading`, `heading_desc`, `rating`, `weather`, `is_famous`, `status`) VALUES
(4, 'Chitral Valley', 'Chitral District, KP', '&lt;p&gt;Chitral is counted amongst the highest regions of the world, sweeping from 1,094 meters at Arandu to 7,726 meters at Tirichmir, and packing over 40 peaks more than 6,100 meters in height. The terrain of Chitral is very mountainous and &lt;a title=&quot;Tirich Mir&quot; href=&quot;https://en.wikipedia.org/wiki/Tirich_Mir&quot;&gt;Tirich Mir&lt;/a&gt; (25,289 feet) the highest peak of the &lt;a title=&quot;Hindu Kush&quot; href=&quot;https://en.wikipedia.org/wiki/Hindu_Kush&quot;&gt;Hindu Kush&lt;/a&gt;, rises in the north of the district. Around 4.8 per cent of the land is covered by forest and 76 per cent is mountains and glaciers.&lt;/p&gt;\r\n&lt;div class=&quot;thumb tright&quot;&gt;\r\n&lt;div class=&quot;thumbinner&quot; style=&quot;width: 222px;&quot;&gt;&lt;a class=&quot;image&quot; href=&quot;https://en.wikipedia.org/wiki/File:The_green_and_the_yellow.JPG&quot;&gt;&lt;img class=&quot;thumbimage&quot; src=&quot;https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/The_green_and_the_yellow.JPG/220px-The_green_and_the_yellow.JPG&quot; srcset=&quot;//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/The_green_and_the_yellow.JPG/330px-The_green_and_the_yellow.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c6/The_green_and_the_yellow.JPG/440px-The_green_and_the_yellow.JPG 2x&quot; alt=&quot;&quot; width=&quot;208&quot; height=&quot;156&quot; data-file-width=&quot;1280&quot; data-file-height=&quot;960&quot; /&gt;&lt;/a&gt;\r\n&lt;div class=&quot;thumbcaption&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;thumb tright&quot;&gt;\r\n&lt;div class=&quot;thumbinner&quot; style=&quot;width: 222px;&quot;&gt;\r\n&lt;div class=&quot;thumbcaption&quot;&gt;Chitral Ayun&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;p&gt;Chitral is connected to the rest of Pakistan by two major road routes, the &lt;a title=&quot;Lowari Pass&quot; href=&quot;https://en.wikipedia.org/wiki/Lowari_Pass&quot;&gt;Lowari Pass&lt;/a&gt; (el. 10,230&amp;nbsp;ft.) from &lt;a class=&quot;mw-redirect&quot; title=&quot;Dir (Pakistan)&quot; href=&quot;https://en.wikipedia.org/wiki/Dir_%28Pakistan%29&quot;&gt;Dir&lt;/a&gt; and &lt;a title=&quot;Shandur Top&quot; href=&quot;https://en.wikipedia.org/wiki/Shandur_Top&quot;&gt;Shandur Top&lt;/a&gt; (elevation 12,200&amp;nbsp;ft.) from Gilgit. Both routes are closed in winter. The &lt;a title=&quot;Lowari Tunnel&quot; href=&quot;https://en.wikipedia.org/wiki/Lowari_Tunnel&quot;&gt;Lowari Tunnel&lt;/a&gt; is being constructed under the Lowari Pass.&lt;sup id=&quot;cite_ref-Lowari-Tunnel_7-0&quot; class=&quot;reference&quot;&gt;&lt;a href=&quot;https://en.wikipedia.org/wiki/Chitral_District#cite_note-Lowari-Tunnel-7&quot;&gt;[7]&lt;/a&gt;&lt;/sup&gt; A number of other high passes, including &lt;a title=&quot;Darkot Pass&quot; href=&quot;https://en.wikipedia.org/wiki/Darkot_Pass&quot;&gt;Darkot Pass&lt;/a&gt;, &lt;a title=&quot;Thoi Pass&quot; href=&quot;https://en.wikipedia.org/wiki/Thoi_Pass&quot;&gt;Thoi Pass&lt;/a&gt; and &lt;a title=&quot;Zagaran Pass&quot; href=&quot;https://en.wikipedia.org/wiki/Zagaran_Pass&quot;&gt;Zagaran Pass&lt;/a&gt;, provide access on foot to Chitral from Gilgit-Baltistan in &lt;a title=&quot;Ghizer District&quot; href=&quot;https://en.wikipedia.org/wiki/Ghizer_District&quot;&gt;Ghizer District&lt;/a&gt;.&lt;/p&gt;', 'chitral1.png', 'chitral_hover1.png', 'img_(12)_c.jpg', '1,517', 'Chitral Valley', 'A fascinating combination of scenic beauty and cultural diversity', '5', 'moderate', '1', '1'),
(5, 'Kalam', 'Kalam, Swat', '&lt;p&gt;&lt;strong&gt;Kalam&lt;/strong&gt; is a cool heaven for tourists which is located at distance of 99&amp;nbsp;km from Mingora in the northern upper reaches of Swat Valley along the bank of Swat River in Khyber Pukhtunkwa province of Pakistan.Kalam is surrounded by lush green hills, thick forests and bestowed with mesmeric lakes, meadows and waterfalls which are worth seen features of the landscape. It is the birthplace of Swat River which forms with confluence of two major tributaries of Gabral river &amp;amp; Ushu river.&lt;br /&gt;It is a spacious sub-valley of Swat, at an elevation of about 2,000 meters (6,600 feet) above sea level, and providing rooms for a small but fertile plateau above the river for farming. Here, the metalled road ends and shingle road leads to the Usho and Utror valleys. From Matiltan some snow-capped mountains are visible including Mount Falaksar 5,918 meters (19,416 feet), and another unnamed peak 6,096 meters (20,000 feet) high.&lt;sup id=&quot;cite_ref-2&quot; class=&quot;reference&quot;&gt;&lt;/sup&gt;There are a lot of grand hotels in Kalam, where one can stay for night and enjoy the cool breeze of Swat river.&lt;/p&gt;', 'kalam.png', 'kalam_hover.png', 'River_kalam.jpg', '2,001', 'Kalam, a cool heaven in KPK', 'Kalam is surrounded by lush green hills, thick forests and bestowed with mesmeric lakes', '5', 'cold', '1', '1'),
(6, 'Mardan', 'District Mardan,KP', '&lt;h3&gt;&lt;span id=&quot;Ancient_history&quot; class=&quot;mw-headline&quot;&gt;Ancient history&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;Mardan District is a part of the Peshawar valley the whole area was once part of the ancient kingdom of Gandhara, the remains of which are scattered throughout the district.&lt;/p&gt;\r\n&lt;p&gt;The armies of Alexander the Great reached the Indus Valley by two separate routes, one through the Khyber Pass and the other led by Alexander himself through Kunar, Bajaur, Swat, and Buner in 326 BCE. After Alexander\'s death, the valley came under the rule of Chandragupta, who ruled the valley from 297 to 321 BCE. During the reign of the Buddhist emperor Ashoka (the grandson of Chandragupta) Buddhism became the religion of the Peshawar Valley. The valley saw the revival of Brahmanism after the Greeks took over in the time of King Mehanda. The Scythians and Indians followed and retained control of the valley till the 7th century CE.&lt;/p&gt;\r\n&lt;h3&gt;&lt;span id=&quot;Arrival_of_Afghans&quot; class=&quot;mw-headline&quot;&gt;Arrival of Afghans&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;By the 8th century, the Afghans had appeared in the valley. At that time the Peshawar valley was under control of the rulers at Lahore. The Afghans joined the Gakkhars who held the country between the Indus and the Jhelum rivers and compelled the Lahore rulers to cede to them the hill country west of the Indus and south of the Kabul River.&lt;/p&gt;\r\n&lt;h3&gt;&lt;span id=&quot;Ghaznavid_Era&quot; class=&quot;mw-headline&quot;&gt;Ghaznavid Era&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;In the 10th century the area came under the control of Sultan Sabuktigin who defeated Raja Jaipal, the Hindu ruler of Lahore. Sabuktgin\'s son Sultan Mahmud of Ghazni made this area the rallying point for his numerous raids into the interior of India. In the 12th century the Ghaurid empire of the turkic origin overthrew the Ghaznavis and the era of Ghaznavis came to an end.&lt;/p&gt;\r\n&lt;h3&gt;&lt;span id=&quot;Mughal_Era&quot; class=&quot;mw-headline&quot;&gt;Mughal Era&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;In 1505 the Mughal emperor Babar invaded the area through Khyber Pass. Baber swiftly captured the area. The People of swat in those days were of mix origins. On one side of the river lived Pashtun along with gujars, syriake people of whom many were Sikhs and Hindus and Muslims. In the battle of bajaur in 1519 Baber defeated the yousafzai tribe. The then ruler of yousafzai tribe offered Baber her daughter as a sign of peace. Baber then married Bibi Mubarka Yousafzai, the maternal grandmother of Adham Khan who was a foster brother of Emperor Akbar. During the Aurangzeb regime the Pashtun tribes revolted and Aurangzeb himself led his army to re-establish his authority as struggle which lasted for two years, he finally subdued the Pashtuns. In the same war the prominent rebel leader, Darya Khan Afridi was killed and the revolt was crushed. Later the area came under the rule of Ranit Singh.&lt;/p&gt;\r\n&lt;h3&gt;&lt;span id=&quot;British_Era&quot; class=&quot;mw-headline&quot;&gt;British Era&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;Ranjit Singh conquered Attock 1814 and Peshawar city in 1822. He left Hari Singh Nalwa in command and withdrew himself to Lahore. Peshawar city, Nowshera and Hazara were under Sikh rule for a while. Hazara was set free by tanooli clane from Sikhs but fell to Britain in 1838. Peshawar city also fell to Pashtuns in 1834 [Nowla died in the battle of Jamrud] but soon the British took it in 1837. The British then went after the Sikhs and the Sikh were defeated by the British in the Second Sikh War. Major Lawrence was appointed first Deputy Commissioner of Peshawar. From that time Peshawar city and Attock regions only [This does not include most of what is Khyber-Pakhtunkhwa today] became an administrative district under the Punjab Government. In 1909 Khyber-Pakhtunkhwa (then NWFP) was constituted and in 1937, Peshawar district was bifurcated into Peshawar and Mardan districts. Britain tried its best to include FATA, DIR, Swat and other region into Khyber-Pakhtunkhwa but they suffered heavy setback and finally came to an agreement in 1920s that Britain will no longer bother the tribes and swat region.&lt;/p&gt;\r\n&lt;h2&gt;&lt;span id=&quot;Food&quot; class=&quot;mw-headline&quot;&gt;Food&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;The most common diet of the people is bread which is mainly made of wheat flour but maize bread is also eaten. Generally the foods are spicy. The people of the area are fond of meat, especially various forms of beef cooked in shape of &lt;em&gt;chapli kebab, seekh kebab&lt;/em&gt; and &lt;em&gt;tikkas&lt;/em&gt; etc. Mostly black tea with milk is taken as hot drink but &lt;em&gt;Qahwa&lt;/em&gt; (green tea) is also popular and is liked by most of the people. The oranges are a local famous fruit which is grown in Rustam valley in Palay, Palo Dheray, Baroch and Malandray villages. These oranges are transported to various parts of the country. A new access road to these villages is being constructed via Rustam through Kaludheri Srakabroona Baringan Malandry to Buner District.&lt;/p&gt;\r\n&lt;h2&gt;&lt;span id=&quot;Dress_and_ornaments&quot; class=&quot;mw-headline&quot;&gt;Dress and ornaments&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;The Pashtun dress is an ancient dress and date back to the time of Israel. This dress was brought into Iran by the Jews and spread from Iran to Afghanistan Tajikistan, Pakistan and a few more. It has undergone many changes but it originated from Israel Originally 2500 years ago. There is significant difference in dress of common people and educated and upper classes. The upper-class people are inclined to western dress. The middle and lower classes are generally wearing typical Pashtun dress, the old loose coat or khalqa has been replaced by the less cumbersome qamiz with blanket or coarse chader during winter season around the body. Among the villagers use of mazari cloth is common for qamiz and shalwar. A chitrali woolen cap is used in winter white a typical light colour cap in summer. Chapplies are the most common foot wear. Shalwar qamiz and dopatta is the dress of female. Pardah is universal among women in a form of a printed coarse chaddar or plain white chaddar or burqa.&lt;/p&gt;\r\n&lt;p&gt;The use of ornaments among female is also common in the district. The women adorn themselves with ear rings and bangles with rare use of band quba, which consists of two egg like cups connected by chain or a flat circle shaped gold hanging on forehead.&lt;/p&gt;\r\n&lt;h2&gt;&lt;span id=&quot;Dwellings&quot; class=&quot;mw-headline&quot;&gt;Dwellings&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;The villages are divided into Kandis have congested house. Each Kandi is further occupied by sub-section. The division of Kandis are on the pattern of agricultural lands. Their houses are generally consists of two or three rooms and a courtyard turned as ghollai and verandah. The cattle and poultry are also accommodated beside the shelter for family.&lt;/p&gt;\r\n&lt;p&gt;Each Kandi of the village has its own mosque and its own Maulvi and a place of meeting or for public assembly called Hujra. In most cases it is the property of elders of the Kandi who is expected to feed and give shelter to the visitors and travellers. These Hujras are commonly used for the settlement of public disputes/business beside public meetings. Residents of Kandi assemble there to smoke, hear news of the day and discuss their problems and politics. Nowadays the people in service abroad have accumulated sufficient wealth which brought a distinct change in the life of the villagers who construct pacca houses of cement, bricks and timber.&lt;/p&gt;\r\n&lt;p&gt;A Tandoor (Oven) is also found for baking bread in many houses and some time women of three or four houses assembled on one Tandoor (Oven) for baking bread on their turn. The houses have huge compound walls around with gates. Chairs and tables are used in the houses of well-to-do persons whereas others use the ordinary cot (Charpoy).&lt;/p&gt;\r\n&lt;h2&gt;&lt;span id=&quot;Occupations&quot; class=&quot;mw-headline&quot;&gt;Occupations&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;Most of the people are farmer in profession in villages. They are engaged in agriculture either directly or indirectly. Industrial labour has increased after the establishment of factories in different places of the district. Some people are engaged in-business and Government service also.&lt;/p&gt;\r\n&lt;h2&gt;&lt;span id=&quot;Name.2C_location.2C_boundary_and_area&quot; class=&quot;mw-headline&quot;&gt;Name, location, boundary and area&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;The name means the land of brave men.The district lies from 34&amp;deg; 05\' to 34&amp;deg; 32\' north latitudes and 71&quot; 48\' to 72&amp;deg; 25\' east longitudes. It is bounded on the north by Buner district and Malakand protected area, on the east by Swabi and Buner districts, on the south by Nowshera district and on the west by Charsadda district and Malakand protected area. The total area of the district is 1632 square kilometres.&lt;/p&gt;\r\n&lt;p&gt;Recently Mardan has made a lot of improvement specially in Education Sector, new talent is emerging with new ideas in the field of Software, Medical, and Engineering.&lt;/p&gt;\r\n&lt;h2&gt;&lt;span id=&quot;Physical_features_and_topography&quot; class=&quot;mw-headline&quot;&gt;Physical features and topography&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;Mardan district may broadly be divided into two parts, north eastern hilly area and south western plain. The entire northern side of the district is bounded by the hills. In the district, the highest points in these hills are Pajja or Sakra, 2056 meters high and Garo or Pato, 1816 meters high. The south western half of the district is mostly composed of fertile plain with low hills strewn across it. It is generally accepted that this plain once formed the bed of a lake which was gradually filled up by the load of the river flowing into from the surrounding hills. From the foot hills the plain runs down at first with a steep slope which carried the rain water to the lower levels and ultimately to the Kabul river.&lt;/p&gt;\r\n&lt;h3&gt;&lt;span id=&quot;Rivers_and_streams&quot; class=&quot;mw-headline&quot;&gt;Rivers and streams&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;Generally stream flows from north to the south. Most of the streams drain into Kabul river. Kalpani, an important stream of the district rises in the Baizai and flowing southwards join Kabul river. Other important streams which join Kalpani are Baghiari Khawar on the west and Muqam Khawar, coming from Sudham valley and Naranji Khawar from the Narangi hills on the left.&lt;/p&gt;\r\n&lt;h3&gt;&lt;span id=&quot;Climate&quot; class=&quot;mw-headline&quot;&gt;Climate&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;The summer season is extremely hot. A steep rise of temperature observed from May to June. Even July, August and September record quite high temperatures. During May and June dust storms are frequent at night. The temperature reaches to its maximum in the month of June i.e. 43.5&amp;nbsp;&amp;deg;C (110.3&amp;nbsp;&amp;deg;F). Due to intensive cultivation and artificial irrigation the tract is humid and heat is oppressive (Heat Index 69 on 7 July 2006). However, a rapid fat! of temperature has been recorded from October onwards. The coldest months are December and January. The mean minimum temperature recorded for the month of January the coldest month is 0.5&amp;nbsp;&amp;deg;C (32.9&amp;nbsp;&amp;deg;F).&lt;/p&gt;\r\n&lt;p&gt;Most of the rainfall occurs in the month of July, August, December and January. Maximum rainfall recorded for the month of August the rainiest month is 12S.8Smm. Towards the end of cold weather there are occasional thunder storms and hail storms. The relative humidity is quite high throughout the year while maximum humidity has been recorded in December i.e. 73.33 percent.&lt;/p&gt;\r\n&lt;h3&gt;&lt;span id=&quot;Flora&quot; class=&quot;mw-headline&quot;&gt;Flora&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;The present flora of the irrigated areas is exotic. The common trees are mesquite, ber, different species of acacia and jand. The most common shrubs are tarmariax, articulata, spands, akk, small red poppy, spera, pueghambrigul, drab grass, spera, eamelthorl and pohli chaulai etc.&lt;/p&gt;\r\n&lt;h3&gt;&lt;span id=&quot;Fauna&quot; class=&quot;mw-headline&quot;&gt;Fauna&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;The district has a variety of fauna comprising the following:.&lt;/p&gt;\r\n&lt;ol&gt;\r\n&lt;li&gt;Snake&lt;/li&gt;\r\n&lt;li&gt;Mongoose&lt;/li&gt;\r\n&lt;li&gt;Jackal&lt;/li&gt;\r\n&lt;li&gt;Wild Goat&lt;/li&gt;\r\n&lt;li&gt;Pheasant&lt;/li&gt;\r\n&lt;li&gt;Mule&lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;h2&gt;&lt;span id=&quot;Administration&quot; class=&quot;mw-headline&quot;&gt;Administration&lt;/span&gt;&lt;/h2&gt;\r\n&lt;p&gt;The district of Mardan is administratively subdivided into three tehsils, these are:&lt;sup id=&quot;cite_ref-2&quot; class=&quot;reference&quot;&gt;&lt;/sup&gt;&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Mardan&lt;/li&gt;\r\n&lt;li&gt;Takht Bhai&lt;/li&gt;\r\n&lt;li&gt;Katlang&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;The district is represented in the provincial assembly by eight elected MPAs who represent the following constituencies:&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Pk-23 (Mardan-1)&lt;/li&gt;\r\n&lt;li&gt;Pk-24 (Mardan-2)&lt;/li&gt;\r\n&lt;li&gt;Pk-25 (Mardan-3)&lt;/li&gt;\r\n&lt;li&gt;Pk-26 (Mardan-4)&lt;/li&gt;\r\n&lt;li&gt;Pk-27 (Mardan-5)&lt;/li&gt;\r\n&lt;li&gt;Pk-28 (Mardan-6)&lt;/li&gt;\r\n&lt;li&gt;Pk-29 (Mardan-7)&lt;/li&gt;\r\n&lt;li&gt;Pk-30 (Mardan-8)&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;District Mardan is represented by three MNAs in national assembly&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;NA-9 Mardan-1&lt;/li&gt;\r\n&lt;li&gt;NA-10 Mardan-2&lt;/li&gt;\r\n&lt;li&gt;NA-11 Mardan-3&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;&lt;strong&gt;Districts of Mardan Division&lt;/strong&gt;&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Swabi&lt;/li&gt;\r\n&lt;li&gt;Nowshera&lt;/li&gt;\r\n&lt;/ul&gt;', '', '', 'mardan.jpg', '283', 'The historic City of Mardan', 'Mardan city is the Headquarter of mardan district', '3', 'warm', '0', '1'),
(7, 'Dummuu Region', 'Dummy Text', 'Dummy Text', '', '', 'River_kalam1.jpg', '123', 'Dummy Text', 'Dummy Text', '4', 'moderate', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `regions_slider`
--

CREATE TABLE `regions_slider` (
  `id` int(11) NOT NULL COMMENT 'Primary key',
  `reg_id` int(11) NOT NULL COMMENT 'Foreign key',
  `heading` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `link` varchar(150) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rest_id` int(11) NOT NULL COMMENT 'Primary Key',
  `reg_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(150) NOT NULL,
  `open_timing` varchar(100) NOT NULL,
  `close_timing` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `header_image` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rest_id`, `reg_id`, `name`, `address`, `contact`, `email`, `website`, `open_timing`, `close_timing`, `rating`, `latitude`, `longitude`, `header_image`, `description`, `type`, `status`) VALUES
(1, 4, 'Hindukush Heights', 'Gankorini Village, Chitral, Pakistan', '0943-413151', 'azamkalash@gmail.com', 'http://www.hindukush.com.pk/', 'All days', '-', 5, '35.903107', '71.803986', 'hindukush-heights-hotel.jpg', 'Hindukush heights is by far the best hotel in Chitral. Tatler, UK,in its travel guide2010 ranks it among the best 101 hotels in the world.Footprint Pakistan&lt;br /&gt;Hindukush heights is by far the best hotel in Chitral. Tatler, UK,in its travel guide&lt;br /&gt;2010 ranks it among &amp;ldquo;the best 101 hotels in the world&amp;rdquo;.Footprint Pakistan&lt;br /&gt;Handbook 2nd Edition on page 399 writes &amp;ldquo;this hotel is in a class of its own&amp;hellip;.&lt;br /&gt;the loving care and attention which has gone into this place is evident the moment you walk in the door.&amp;rdquo;&lt;br /&gt;&lt;br /&gt;Michael Palin in his book Himalaya writes, on page 28, &amp;ldquo;The Hindukush Heights hotel is set on the side of a hill with a fine view of the valley and Chitral town&amp;hellip;. The emphasis is firmly on local design and craftsmanship &amp;hellip;In the garden the heat smells of rosemary and jasmine.&amp;rdquo; Hindukush Heights has its own hydro electricity and the water into the hotel is gravity &amp;ndash; fed from a mountain spring. A tastefully decorated dining room serves a variety of tasty dishes. Vegetables are supplied from the hotels own organic garden.&lt;br /&gt;&lt;br /&gt;Dave Winter in Footprints 1st Edition of Northern Pakistan handbook, on page 129, writes: &amp;ldquo;for a truly memorable night out for your taste buds, treat yourself to a meal here. The food here ranks amongst the best in Pakistan&amp;rdquo;.&lt;br /&gt;&lt;br /&gt;Among the many assets of Hindukush Heights is a caring and friendly staff who the owners show off proudly to their guests &amp;ldquo;most of these boys have grown up with the hotel since its infancy. Like the flowers and bushes you see around&amp;rdquo; says Ghazalla Ulmulk whose tender care can be seen in every part and aspect of Hindukush Heights.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Top amenities:&lt;/strong&gt;&lt;br /&gt;\r\n&lt;div class=&quot;ui_column is-4&quot;&gt;\r\n&lt;ul class=&quot;list top_amenities&quot;&gt;\r\n&lt;li class=&quot;item&quot;&gt;Free Internet&lt;/li&gt;\r\n&lt;li class=&quot;item&quot;&gt;Restaurant&lt;/li&gt;\r\n&lt;li class=&quot;item&quot;&gt;Breakfast included&lt;/li&gt;\r\n&lt;li class=&quot;item&quot;&gt;Free Parking&lt;/li&gt;\r\n&lt;li class=&quot;item&quot;&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;strong&gt;Hotel Amenities:&lt;/strong&gt;&lt;br /&gt;\r\n&lt;ul class=&quot;list hotel_amenities&quot;&gt;\r\n&lt;li class=&quot;item&quot;&gt;Laundry Service&lt;/li&gt;\r\n&lt;li class=&quot;item&quot;&gt;Breakfast included&lt;/li&gt;\r\n&lt;li class=&quot;item&quot;&gt;Free Parking&lt;/li&gt;\r\n&lt;li class=&quot;item&quot;&gt;Airport Transportation&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/div&gt;', 63, '1');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_gallery`
--

CREATE TABLE `restaurant_gallery` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `rest_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `image` varchar(50) NOT NULL,
  `caption` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sights`
--

CREATE TABLE `sights` (
  `sight_id` int(11) NOT NULL COMMENT 'Primary Key',
  `reg_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(150) NOT NULL,
  `open_timing` varchar(100) NOT NULL,
  `close_timing` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `header_image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sights`
--

INSERT INTO `sights` (`sight_id`, `reg_id`, `name`, `address`, `contact`, `email`, `website`, `open_timing`, `close_timing`, `rating`, `latitude`, `longitude`, `header_image`, `description`, `type`, `status`) VALUES
(1, 1, 'Saif ul Malook', 'Kaghan Valley, Tina Ipsum, 2000, KP', '+92 313 123457', 'kaghan@gmail.com', 'kaghan.pk', 'April', 'September', 5, '34.876957°N', '73.694485°E', 'img_(9).jpg', 'Sit, qui breve body, extra single shot id at, lungo redeye coffee, aftertaste cinnamon trifecta and ut cream grounds. Siphon that single origin beans java caffeine skinny sugar mocha white ut caffeine, single origin at, mug spoon turkish, siphon coffee filter sugar froth. Cup, trifecta affogato aged gal&amp;atilde;o redeye single shot, instant ut et latte a caf&amp;eacute; au lait. Frappuccino arabica so medium, robusta french press latte coffee seasonal arabica breve, black, barista coffee froth french press sugar lungo coffee frappuccino latte. Single origin plunger pot macchiato single shot coffee sit latte turkish id, crema ut, barista froth medium, rich, coffee, organic, qui that aroma id wings turkish cappuccino. Sit, eu crema froth dark, aroma caffeine dark, single shot con panna, aged, robust decaffeinated iced mocha sugar. Robust acerbic, to go milk chicory extraction, robusta cup, medium, pumpkin spice rich brewed irish con panna, barista acerbic body single origin et aromatic whipped. Latte doppio, qui affogato acerbic milk, qui variety ut aroma crema gal&amp;atilde;o that single origin con panna.&lt;br /&gt;&lt;br /&gt;Fair trade, robust, caramelization steamed coffee con panna, steamed, frappuccino et, caffeine cup dark percolator sweet spoon. A sugar bar percolator trifecta irish caffeine affogato et white cortado con panna aged and latte. Skinny as, white eu body qui cup, chicory dark milk shop caffeine to go. Ut, eu, a variety percolator, black, variety body qui plunger pot aromatic, et, est, et, so, blue mountain turkish eu aged grinder wings. Blue mountain robust milk as, est mazagran cup pumpkin spice latte cup fair trade medium saucer, organic saucer breve lungo acerbic aromatic caf&amp;eacute; au lait grinder. Cream qui decaffeinated, breve fair trade viennese single origin brewed con panna, spoon mug, doppio body, cortado, whipped lungo grounds beans whipped pumpkin spice. Sugar, sweet whipped foam gal&amp;atilde;o rich frappuccino rich cultivar, variety wings cream organic crema siphon blue mountain, cultivar froth a medium body con panna barista black. Ristretto extraction cinnamon blue mountain, single origin et saucer decaffeinated and sweet, con panna, filter black shop spoon variety macchiato dripper iced.&lt;br /&gt;&lt;br /&gt;Id est that, breve organic kopi-luwak so, that, arabica carajillo caramelization blue mountain and, carajillo, bar, and foam aroma mug skinny acerbic. Extra medium americano, java, est, dripper strong body foam doppio breve, latte as, iced pumpkin spice, con panna plunger pot that black percolator body whipped. Mocha java froth, viennese, spoon latte french press, milk frappuccino viennese crema coffee lungo irish crema filter. Espresso grinder id frappuccino cup single origin so, pumpkin spice breve irish, kopi-luwak mocha caf&amp;eacute; au lait, a sit, robusta brewed grounds cup espresso. Ristretto kopi-luwak espresso blue mountain half and half, doppio cream, filter rich aged, dark bar, americano, chicory frappuccino latte est, plunger pot, iced black filter affogato coffee. Single shot espresso doppio grounds filter, cortado froth brewed, espresso cup, ristretto, chicory, beans bar irish that java body. Qui, dark, eu flavour so brewed chicory, doppio organic ristretto roast strong percolator. Percolator, bar cup, sweet, eu, ristretto percolator chicory espresso, at trifecta qui latte and a sugar breve con panna.&lt;br /&gt;&lt;br /&gt;Chicory extraction steamed grounds that, cup, whipped saucer, coffee turkish, in as irish trifecta caf&amp;eacute; au lait steamed sweet. Chicory foam, filter single origin, gal&amp;atilde;o java, acerbic, est macchiato so cortado barista mazagran. Sugar robusta barista and, aged et, gal&amp;atilde;o froth skinny arabica so caf&amp;eacute; au lait, half and half shop crema kopi-luwak, eu barista viennese blue mountain robust cinnamon. Pumpkin spice iced, eu dark aromatic acerbic, americano ut crema blue mountain, extraction medium americano foam brewed grounds sweet aroma body. Seasonal single origin cup strong, to go, cultivar, redeye french press mocha latte beans to go, sugar, mug sweet in organic trifecta plunger pot. Dark redeye plunger pot, wings, beans, est sugar java spoon, frappuccino, doppio espresso, doppio redeye single origin doppio americano espresso aftertaste. Trifecta, steamed extra, doppio grinder filter sugar plunger pot percolator, filter, brewed caffeine coffee ristretto percolator. Aftertaste sweet, so cream, coffee, pumpkin spice dark extraction, macchiato grounds seasonal medium cinnamon that.&lt;br /&gt;&lt;br /&gt;Organic trifecta wings, irish that single shot, grinder, blue mountain cortado caramelization, lungo in, foam instant strong caramelization sweet grounds. Frappuccino aromatic, arabica redeye body decaffeinated single shot extra, caramelization grinder acerbic, steamed java mocha, body sweet rich gal&amp;atilde;o as milk fair trade dripper. Filter seasonal arabica a single shot milk est robusta iced, barista variety gal&amp;atilde;o whipped doppio. Percolator decaffeinated, ut caramelization, pumpkin spice acerbic body, brewed at trifecta aged, lungo cinnamon, in single shot cultivar eu lungo. Dark cup, bar arabica flavour, extraction americano decaffeinated milk so, aged, extra, redeye iced viennese robust eu foam. Robusta viennese, grinder a, in acerbic cup lungo, macchiato, body id, extraction filter that et wings. Mug redeye est caramelization gal&amp;atilde;o brewed a, crema steamed latte arabica, cup, coffee ristretto acerbic at grinder to go. Foam carajillo pumpkin spice, saucer est con panna percolator, crema flavour, irish mug seasonal strong decaffeinated.', 1, '1'),
(2, 4, 'Tirich Mir', 'Hindu Kush Mountain Range, Chitral', '-', '-', '-', 'All Day', '-', 5, '36.255', '71.8386446', '10961417.jpg', 'This lofty mountain peak is the highest of Hidukush range. Tirich Mir can be viewed from a higher place of Chitral Town (Like roof top of the hotel where you stay) in a clear weather. It can also be viewed from the palace of Chitral&amp;rsquo;s King. This mountain is also highest in the world apart from Himalaya and Karakoram ranges. - See more at: http://tourism.kp.gov.pk/page/chitral_1#sthash.TmQ1cuSx.dpuf', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `sights_gallery`
--

CREATE TABLE `sights_gallery` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `sight_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `image` varchar(150) NOT NULL,
  `caption` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sights_gallery`
--

INSERT INTO `sights_gallery` (`id`, `sight_id`, `image`, `caption`) VALUES
(7, 1, 'img_(6)1.jpg', ''),
(8, 1, 'img_(7).jpg', ''),
(9, 1, 'img_(8)1.jpg', ''),
(10, 1, 'img_(9)1.jpg', ''),
(11, 2, '1.jpg', ''),
(12, 2, '2.jpg', ''),
(13, 2, '3.jpg', ''),
(14, 2, '4.jpg', ''),
(15, 2, '5.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `spots_gallery`
--

CREATE TABLE `spots_gallery` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `spot_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `image` varchar(150) NOT NULL,
  `caption` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL COMMENT 'Primary Key',
  `cat_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `name` varchar(150) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `cat_id`, `name`, `status`) VALUES
(1, 1, 'Sights', '1'),
(2, 1, 'Mountains', '1'),
(3, 1, 'Amusement Park', '1'),
(4, 1, 'Archaeological Sight', '1'),
(5, 1, 'Architecture', '1'),
(6, 1, 'Art Gallery', '1'),
(7, 1, 'Boat', '1'),
(8, 1, 'Bridge', '1'),
(9, 1, 'Budhist Site', '1'),
(10, 1, 'Cable Car', '1'),
(11, 1, 'Cathedral', '1'),
(12, 1, 'Cave', '1'),
(13, 1, 'Cemetery', '1'),
(14, 1, 'Memorial Park', '1'),
(15, 1, 'Church', '1'),
(16, 1, 'Factory', '1'),
(17, 1, 'Farm', '1'),
(18, 1, 'Forest', '1'),
(19, 1, 'Gardens', '1'),
(20, 1, 'Gorge', '1'),
(21, 1, 'Harbor', '1'),
(22, 1, 'Hill', '1'),
(23, 1, 'Historic Building', '1'),
(24, 1, 'Historic Site', '1'),
(25, 1, 'Lagoon', '1'),
(26, 1, 'Lake', '1'),
(27, 1, 'Landmark', '1'),
(28, 1, 'Library', '1'),
(29, 1, 'Lighthouse', '1'),
(30, 1, 'Marine Park', '1'),
(31, 1, 'Marine Reserve', '1'),
(32, 1, 'Market', '1'),
(33, 1, 'Maze', '1'),
(34, 1, 'Memorial', '1'),
(35, 1, 'Mine', '1'),
(36, 1, 'Monument', '1'),
(37, 1, 'Mountain', '1'),
(38, 1, 'Museum', '1'),
(39, 1, 'National Park', '1'),
(40, 1, 'Nature Reserve', '1'),
(41, 1, 'Notable Building', '1'),
(42, 1, 'Observatory', '1'),
(43, 1, 'Park', '1'),
(44, 1, 'Picnic Area', '1'),
(45, 1, 'Port', '1'),
(46, 1, 'Religious Site', '1'),
(47, 1, 'River', '1'),
(48, 1, 'Sculpture', '1'),
(49, 1, 'Ship', '1'),
(50, 1, 'Spring', '1'),
(51, 1, 'Stadium', '1'),
(52, 1, 'Statue', '1'),
(53, 1, 'Temple', '1'),
(54, 1, 'Theatre', '1'),
(55, 1, 'Tower', '1'),
(56, 1, 'View Point', '1'),
(57, 1, 'Village', '1'),
(58, 1, 'Visitor Center', '1'),
(59, 1, 'Waterfall', '1'),
(60, 1, 'Zoo', '1'),
(61, 2, 'Cafes', '1'),
(62, 2, 'Diners', '1'),
(63, 2, 'Restaurant', '1'),
(64, 2, 'Pakistani', '1'),
(65, 2, 'Pizza', '1'),
(66, 2, 'Fast Food', '1'),
(67, 2, 'Delicatessen', '1'),
(68, 2, 'Juices and Drink', '1'),
(69, 2, 'Sea Food', '1'),
(70, 2, 'Steak', '1'),
(71, 2, 'Street Food', '1'),
(72, 2, 'Deserts', '1'),
(73, 2, 'Breakfast', '1'),
(74, 1, 'Buffet', '1'),
(75, 2, 'Ice Cream', '1'),
(76, 2, 'Bakery', '1'),
(77, 2, 'Barbecue', '1'),
(78, 2, 'Pashtun', '1'),
(79, 2, 'Take Away', '1'),
(80, 2, 'Desi', '1'),
(81, 2, 'Cultural', '1'),
(82, 3, 'Rafting', '1'),
(83, 3, 'Rappelling', '1'),
(84, 3, 'Paragliding', '1'),
(85, 3, 'Cycling', '1'),
(86, 3, 'Jeep Rallies', '1'),
(87, 3, 'Train Safari', '1'),
(88, 3, 'Trekking', '1'),
(89, 3, 'Camping', '1'),
(90, 3, 'Boating', '1'),
(91, 3, 'Kayaking', '1'),
(92, 3, 'Chair Lift', '1'),
(93, 3, 'Zip Lining', '1'),
(94, 3, 'Polo', '1'),
(95, 3, 'Swimming', '1'),
(96, 4, 'Antiques', '1'),
(97, 4, 'Arts &amp; Crafts', '1'),
(98, 4, 'Books &amp; Libraries', '1'),
(99, 4, 'Ceramics', '1'),
(100, 4, 'Clothing', '1'),
(101, 4, 'Cosmetics', '1'),
(102, 4, 'Department Stores', '1'),
(103, 4, 'Design', '1'),
(104, 4, 'Fashion', '1'),
(105, 4, 'Food &amp; Drink', '1'),
(106, 4, 'Gallery', '1'),
(107, 4, 'Movies &amp; Cinema', '1'),
(108, 4, 'Gifts &amp; Souvenirs', '1'),
(109, 4, 'Groceries', '1'),
(110, 4, 'Home wares', '1'),
(111, 4, 'Jewelry', '1'),
(112, 4, 'Magic', '1'),
(113, 4, 'Mall', '1'),
(114, 4, 'Maps', '1'),
(115, 4, 'Market', '1'),
(116, 4, 'Music', '1'),
(117, 4, 'Perfume', '1'),
(118, 4, 'Photography', '1'),
(119, 4, 'Shoes', '1'),
(120, 4, 'Shopping Centers', '1'),
(121, 4, 'Souvenirs', '1'),
(122, 4, 'Spices', '1'),
(123, 4, 'Sports &amp; Outdoors', '1'),
(124, 4, 'Toys', '1'),
(125, 4, 'Vintage', '1'),
(126, 4, 'Cinema', '1'),
(127, 4, 'Comedy', '1'),
(128, 4, 'Festivals', '1'),
(129, 4, 'Concert', '1'),
(130, 4, 'Concert Venue', '1'),
(131, 4, 'Football', '1'),
(132, 4, 'Cricket', '1'),
(133, 4, 'Historic Building', '1'),
(134, 4, 'Horse Racing', '1'),
(135, 3, 'Horse Racing', '1'),
(136, 4, 'Live Music', '1'),
(137, 4, 'Performing Arts', '1'),
(138, 4, 'Rubgy', '1'),
(139, 4, 'Spectator Sport', '1'),
(140, 4, 'Stadium', '1'),
(141, 4, 'Theatre', '1'),
(142, 4, 'Amusement Park', '1'),
(143, 5, 'Hotels', '1'),
(144, 5, 'Camping Pods', '1'),
(145, 5, 'Rest Houses', '1'),
(146, 5, 'Youth Hostels', '1'),
(147, 5, 'Apartment', '1'),
(148, 5, 'Bungalow', '1'),
(149, 5, 'Lodge', '1'),
(150, 5, 'Motel', '1'),
(151, 5, 'Resort', '1'),
(152, 5, 'Guesthouse', '1'),
(153, 6, 'Air Tours', '1'),
(154, 6, 'Cultural &amp; Theme Events', '1'),
(155, 6, 'Train Tours', '1'),
(156, 6, 'Trek &amp; Trail', '1'),
(157, 6, 'Family Friendly', '1'),
(158, 6, 'Food &amp; Nightlife', '1'),
(159, 6, 'Luxury &amp; Special Occasions', '1'),
(160, 6, 'Multi-day &amp; Extended Tours', '1'),
(161, 6, 'Outdoor Activities/Recreation', '1'),
(162, 6, 'Private &amp; Custom Tours', '1'),
(163, 6, 'Shows, Concerts &amp; Sports', '1'),
(164, 6, 'Sightseeing Tickets &amp; Passes', '1'),
(165, 6, 'Theme Parks', '1'),
(166, 6, 'Tours &amp; Sightseeing', '1'),
(167, 6, 'Walking &amp; Biking Tours', '1'),
(168, 6, 'Water Sports', '1'),
(169, 7, 'Booking Services', '1'),
(170, 7, 'Travel Agencies', '1'),
(171, 7, 'Shopping', '1'),
(172, 7, 'Tour Operators', '1'),
(173, 7, 'Tourist Information Centers', '1'),
(174, 7, 'Rental Services', '1'),
(175, 7, 'Jeep Rentals', '1'),
(176, 7, 'Car Rentals', '1'),
(177, 7, 'Churches', '1'),
(178, 7, 'Mosque', '1'),
(179, 7, 'Library', '1'),
(180, 7, 'Religious Site', '1'),
(181, 7, 'Emergency Centers', '1'),
(182, 7, 'Hospitals', '1'),
(183, 7, 'Institution', '1'),
(184, 7, 'School', '1'),
(185, 7, 'University', '1'),
(186, 8, 'Bus Stands', '1'),
(187, 8, 'Car Rentals', '1'),
(188, 8, 'Taxi Service', '1'),
(189, 8, 'Public Transport', '1'),
(190, 8, 'Bus Transport', '1'),
(191, 8, 'Wagon', '1'),
(192, 9, 'Handicraft Bazar', '1'),
(193, 4, 'Hadicraft Bazar', '1'),
(194, 9, 'Culture Centers', '1'),
(195, 9, 'Cultural Exhibitions', '1'),
(196, 9, 'Libraries and Archives', '1'),
(197, 9, 'Museum', '1'),
(198, 9, 'Heritage Sites', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `activity_spots`
--
ALTER TABLE `activity_spots`
  ADD PRIMARY KEY (`spot_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `events_gallery`
--
ALTER TABLE `events_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_slider`
--
ALTER TABLE `main_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `regions_slider`
--
ALTER TABLE `regions_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rest_id`);

--
-- Indexes for table `restaurant_gallery`
--
ALTER TABLE `restaurant_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sights`
--
ALTER TABLE `sights`
  ADD PRIMARY KEY (`sight_id`);

--
-- Indexes for table `sights_gallery`
--
ALTER TABLE `sights_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spots_gallery`
--
ALTER TABLE `spots_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `activity_spots`
--
ALTER TABLE `activity_spots`
  MODIFY `spot_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';
--
-- AUTO_INCREMENT for table `events_gallery`
--
ALTER TABLE `events_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `main_slider`
--
ALTER TABLE `main_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `regions_slider`
--
ALTER TABLE `regions_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key';
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rest_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `restaurant_gallery`
--
ALTER TABLE `restaurant_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';
--
-- AUTO_INCREMENT for table `sights`
--
ALTER TABLE `sights`
  MODIFY `sight_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sights_gallery`
--
ALTER TABLE `sights_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `spots_gallery`
--
ALTER TABLE `spots_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=199;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
