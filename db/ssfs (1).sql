-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2018 at 09:55 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.1.17-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_text` varchar(255) DEFAULT NULL,
  `banner_sub_text` varchar(255) DEFAULT NULL,
  `banner_image` varchar(250) NOT NULL,
  `sequence_no` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_text`, `banner_sub_text`, `banner_image`, `sequence_no`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SAI SHRADDHA FOODS SERVICES', 'Taste Of Your Choice', 'slider2.webp', 1, 1, '2018-05-23 18:30:00', '2018-05-23 18:30:00', NULL),
(2, 'Taste Of Your Choice', 'Browse through over 600 tasty recipe.', 'slider1.webp', 2, 1, '2018-05-23 18:30:00', '2018-05-26 14:03:50', NULL),
(3, NULL, NULL, '1527418071.jpg', 3, 1, '2018-05-27 05:15:53', '2018-05-27 05:17:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `job_title` varchar(250) NOT NULL,
  `job_description` text,
  `job_location` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_title`, `job_description`, `job_location`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Commis Chef-1', NULL, 'Navi Mumbai', 1, '2018-05-29 18:30:00', '2018-05-05 04:53:06', NULL),
(2, 'Commis Chef-2', NULL, 'Navi Mumbai', 1, '2018-05-26 13:27:22', '2018-05-04 04:53:26', NULL),
(3, 'Commis Chef-3', NULL, 'Navi Mumbai', 1, '2018-05-27 04:53:43', '2018-05-03 04:53:43', NULL),
(4, 'Operations Executive', NULL, 'Navi Mumbai', 1, '2018-05-27 04:54:12', '2018-05-27 05:06:48', NULL),
(5, 'Receptionist', NULL, 'Navi Mumbai', 1, '2018-05-27 04:54:32', '2018-05-01 04:54:32', NULL),
(6, 'Executive Chef (Head Chef)', NULL, 'Navi Mumbai', 1, '2018-05-27 05:07:27', '2018-05-27 05:07:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `slug`, `title`, `content`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'about-us', 'About Us', '<div>\r\n<p>Sai Shraddha food services is a leading catering service provider with a great reputation for high-quality foods and customer friendly services. Headquartered in Mumbai it provides standout catering and hospitality services for regular corporate lunch and all kinds of event catering needs. Quality and hygienic foods and niche catering service are two quality attributes of this catering service.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We are a professionally managed catering and food processing service with widespread clientele across companies and corporate establishments. We have some of the most seasoned and experienced operation managers and supervisors and many leading chefs with experience in Michelin rated restaurants and hotels. Our professional management, quality service and authentic cuisine ensure optimum satisfaction for our clientele across the board.&nbsp;</p>\r\n</div>', 1, '2018-04-30 18:30:00', '2018-05-18 15:02:29', NULL),
(2, 'home_about_us', 'Home About US', '<p>Sai Shraddha food services is a leading catering service provider with a great&nbsp;for high-quality foods and customer friendly services. Headquartered in Mumbai it<br />\r\nprovides standout catering and hospitality services for regular corporate lunch and all kinds of event catering needs.&nbsp;Quality and hygienic foods and niche catering service are two quality attributes of this catering service.</p>\r\n\r\n<p>We are professionally managed catering and food processing service with widespread clientele across companies and corporate establishments.</p>', 1, '2018-04-30 18:30:00', '2018-05-16 11:25:26', NULL),
(3, 'short_address', 'Short Address (Header)', '<%tag_name%>PAP-R-300, Rabale MIDC</%tag_name%>\r\n<span>Navi Mumbai</span>', 1, '2018-05-15 18:30:00', '2018-05-15 18:30:00', NULL),
(4, 'full_address', 'Full Address', '<span>PAP-R - 300, Rabale MIDC,</span><br/>\r\n<span>Behind Golden Garage,</span><br/>\r\n<span>Navi Mumbai</span', 1, '2018-05-16 18:30:00', '2018-05-16 18:30:00', NULL),
(5, 'about-us-vision', 'Vision (About Us)', '<div class=\"tnit-heading-outer text-center our-values\">\r\n                  <h2>Our Vision</h2>\r\n                  <span class=\"small\">- What We Promise To Deliver -</span>\r\n                </div>\r\n\r\n                 <div class=\"our-vision-list\">\r\n                    <ul>\r\n                      <li>\r\n                        <span>We Are Passionate For Quality</span>\r\n                        <div class=\"our-vision-dropdown-content\">\r\n                            <p>It has been always our focus to deliver the best food with the guarantee of high quality service and clear cost advantage. With Sai Shraddha food services you get the best food with a professional service and true value for money.</p>\r\n                        </div>\r\n                      </li>\r\n                      <li>\r\n                        <span>Cutting Edge Food & Supply Chain</span>\r\n                        <div class=\"our-vision-dropdown-content\">\r\n                          <p>We are proud to make use of latest technologies, high-end equipments and professionally equipped setup to prepare and cater food to the satisfaction and expectations of our clients. From most advanced storage systems to maintaining state of the art maintenance protocol to taking care of nutritional value and hygiene of foods, our catering and food processing service is backed by a robust and high quality infrastructure. </p> \r\n                        </div>\r\n                      </li>\r\n                      <li>\r\n                          <span>Service Beyond Expectation</span>\r\n                          <div class=\"our-vision-dropdown-content\">\r\n                             <p>We are open to learn new recipes, experiment with established recipes and cuisines and deliver the best of class catering and food processing service for diverse clients across establishments and organisations. Our food quality and mastery with the traditional cuisine helped us grow as a catering and food service bringing lasting reputation to our service.</p> \r\n                        </div>\r\n                      </li>\r\n                    </ul>\r\n                  </div>', 1, '2018-05-19 18:30:00', '2018-05-19 18:30:00', NULL),
(6, 'contact-us', 'Contact Us', '<h2>LOOKING FOR A CATERER ?</h2>                               <span>- Get In Touch -</span>                               <p>Do you want to know more our our daily corporate catering services? Just give us a call\r\nor drop us a message and we are going to get in touch with you at the earliest.</p>', 1, '2018-05-19 18:30:00', '2018-05-19 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `short_desc` varchar(250) DEFAULT NULL,
  `description` text,
  `position` int(11) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `url`, `short_desc`, `description`, `position`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cafeteria Services', 'cafeteria-services', '<p>We prepare and serve restaurant grade food for our corporate clients and serve them hot in their cafeterias and canteens at the lunch hour.</p>', '<div>\r\n                  <p>Sai Shraddha food services is one of the leading name in the corporate catering\r\n                  services located Ahmedabad. Having track record of providing best quality means with\r\n                  outstanding quality and delight for the taste buds it has already created a niche\r\n                  reputation for itself.</p><br/> \r\n\r\n                  <p>Having been in the service since 2014 the company continued to\r\n                  grow with increasing number of corporate clients subscribing for food service from us.\r\n                  We prepare and serve restaurant grade food for our corporate clients and serve them\r\n                  hot in their cafeterias and canteens at the lunch hour. Our food quality and timely and\r\n                  as well as professional service made us one of the preferred catering services of the\r\n                  city. We are proud to boast of some of the most seasoned catering managers and\r\n                  experienced multi-cuisine chefs to manage our catering service and prepare foods\r\n                  maintaining highest quality.</p><br/>\r\n                  <p>There are many aspects that help the Sai Shraddha food services stand out\r\n                  competitively from the rest. One of the most important aspect is the hygienic quality of\r\n                  our foods with handpicked ingredients and trusted food processing techniques. Offering\r\n                  tasty meals with fresh ingredients is the strongest aspect of our food processing unit.\r\n                  We offer a choice of conventional and unconventional menus boasting of different\r\n                  cuisine traditions to meet the demands of the employees and corporate staff. Apart from\r\n                  ensuring highest quality foods with high hygienic score, we also ensure delivering the\r\n                  food at time and without slightest delay in delivery.</p><br/><br/>\r\n             \r\n              </div>\r\n              <div class=\"pd-top-30\">\r\n                <div>\r\n                  <h3>What We Promise To Deliver To Your Employees ?</h3>\r\n                </div>\r\n                <div class=\"service-bullets\">\r\n                  <ul>\r\n                    <li><span>Restaurant-quality food prepared onsite daily by professional chefs</span></li>\r\n                    <li><span>Creative menu choices that please different tastes, appetites and preferences for\r\n                        convenience</span></li>\r\n                    <li><span>Meals with fresh, flavorful ingredients from trusted local and national suppliers</span></li>\r\n                    <li><span>Impeccable Service</span></li>\r\n                  </ul>\r\n                </div>\r\n              </div>', 1, 'cafeteria_service.jpg', 1, '2018-04-30 18:30:00', '2018-05-16 10:39:01', NULL),
(3, 'Onsite Corporate Catering', 'onsite-corporate-catering', '<p>When it comes to offering foods for executive dining we ensure optimum quality and delivering up to the varied preferences of attendees.</p>', '<p>Sai Shraddha food services is one of the specialist catering and food order processing services for wide variety of corporate events. Having been specialised in world-class culinary traditions, hospitality services and operations.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>we bring our clients most memorable, customised catering and food experience in all kinds of events ranging from meetings, conferences and meetups. Our authentic food and highly professional quality services will ensure creating a good impression of your brand in all events.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Over the years, our catering and food services for special events and corporate meetups helped hundreds of businesses secure standout reputation among the participants arriving from all over the country and the globe. Starting our journey from 2014, as of now we have catered foods for more than hundred of events with national and global significance.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>We have an extensive range of corporate catering services for our clients that include the following</h3>\r\n\r\n<div class=\"service-bullets\">\r\n<ul>\r\n	<li><strong><span>Daily Catering</span></strong>\r\n\r\n	<div>\r\n	<p>Our daily catering services look after food services at meeting breaks, lunch breaks at workplaces and staff breakfasts. For regular workplace catering we ensure providing high quality food with a variety of menu options and an affordable rate.</p>\r\n	</div>\r\n	</li>\r\n	<li><strong><span>Special Event Catering</span></strong>\r\n	<div>\r\n	<p>We provide excellent quality foods for all special events and occasions with a promise to create a memorable experience with outstanding delicacies across cuisine traditions and most professional grade services to make guest happy.</p>\r\n	</div>\r\n	</li>\r\n	<li><strong><span>Executive Dining</span></strong>\r\n	<div>\r\n	<p>We are one of the sought after catering services with a niche reputation for preparing and delivering widespread multi cuisine menu choices and extraordinary food quality. When it comes to offering foods for executive dining we ensure optimum quality and delivering up to the varied preferences of attendees.</p>\r\n	</div>\r\n	</li>\r\n</ul>\r\n</div>', 3, 'onsite_corporate_catering.webp', 1, '2018-04-30 18:30:00', '2018-05-22 11:29:10', NULL),
(4, 'Educational Fascilities', 'educational-fascilities', '<p>we also offer catering and food delivery services for educational institutions and the cafeteria facilities of schools and institutions.</p>', '<p>At Sai Shraddha food services, we also offer catering and food delivery services for educational institutions and the cafeteria facilities of schools and institutions. Our catering services for educational institutions particularly take care of maintaining freshness of food ingredients and optimum hygienic standards. At present, we are one of the most sought after catering services offering high quality foods at schools and educational institutions.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>One of the prime reason educational institutions choose us for serving food at their cafeterias and at lunch breaks is the wide range of menu choices with fresh food ingredients and hygienic food preparation at our well equipped facility. Professional grade service delivered at the doorstep of schools at the right time is another reason most schools and institutions choose us for delivering foods. Moreover, we offer several budget options to serve high quality foods at schools.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Starting our journey from 2014 we quickly rose to prominence as one of the leading food caterer for schools. At present, we have several leading institutions and schools who prefer our food catering services to feed their students. An unmatched variety, time tested food quality with fresh ingredients and professional grade service, all these together made us a leading name among food caterers for educational institutions.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By offering high quality food prepared at our state of the art processing unit we promote healthy and hygienic eating habits and a thoroughly positive experience with catering services at school cafeterias. We also boost footfall of students at cafeteria with healthy special breakfast and lunch options and contests and events to make the meal time a lot funnier.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Do you want to know more about our food catering services at school cafeterias and at educational institutions? Just give us a call or drop us a message and we are going to engage with you in minutes time.&nbsp;<br />\r\n&nbsp;</p>', 4, 'educational_catering.webp', 1, '2018-04-30 18:30:00', '2018-05-22 11:31:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `label` varchar(250) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `value` varchar(250) NOT NULL,
  `field_type` varchar(250) NOT NULL DEFAULT 'textbox',
  `seq_no` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `label`, `name`, `value`, `field_type`, `seq_no`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Email Address', 'contact_email', 'info@ssfs.com', 'textbox', 1, 1, '2018-05-15 18:30:00', '2018-05-26 07:59:43', NULL),
(2, 'Contact Number', 'contact_number', '+91 8080661025', 'textbox', 2, 1, '2018-05-15 18:30:00', '2018-05-26 07:59:43', NULL),
(3, 'Company Name', 'company_name', 'Sai Shraddha Foods Services', 'textbox', 4, 1, '2018-05-15 18:30:00', '2018-05-26 07:59:43', NULL),
(4, 'Happy Clients Count', 'happy_clients_count', '56', 'number', 5, 1, '2018-05-19 18:30:00', '2018-05-26 07:59:43', NULL),
(5, 'People Catered Count', 'people_catered_count', '4000', 'number', 6, 1, '2018-05-19 18:30:00', '2018-05-26 07:59:43', NULL),
(6, 'Receipes Count', 'receipes_count', '100', 'number', 7, 1, '2018-05-19 18:30:00', '2018-05-26 07:59:43', NULL),
(7, 'Whatsapp Number', 'whatsapp_number', '9662717762', 'textbox', 3, 1, '2018-05-19 18:30:00', '2018-05-26 07:59:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SSFS', 'ssfs@gmail.com', '$2y$10$cZ.NBS4ky83edIsP/oQI5.yqAkNBNCk/lZ5hUFVTjICNK9vdTvIBm', 'tRjKaAOI06cUp47Sww9an1PV90BQjpph0yys0xHjh5V2KSFMWslcYcPlEZUj', '2018-05-06 10:58:18', '2018-05-07 11:33:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
