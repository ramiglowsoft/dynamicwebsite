-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 06:22 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lovetrust`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutinfo`
--

CREATE TABLE `aboutinfo` (
  `id` int(11) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `content` varchar(500) NOT NULL,
  `contents` varchar(500) NOT NULL,
  `upcomingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutinfo`
--

INSERT INTO `aboutinfo` (`id`, `image`, `heading`, `content`, `contents`, `upcomingdate`) VALUES
(2, '1547737230_b2.jpg', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.', 'Fusce feugiat malesuada odio orbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna onec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend.', 'Bulum iaculis lacinia est. Proin dictum elemntum velit. Fusce euismod cons equat ante. Lorem ipsum dmeconsectetuer adipiscing elit. ellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla vene natis. In pede mi aliquet sit amet euismod in auctor ut ligula.', '2019-01-17 15:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `shorttitle` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `abstractevent` varchar(500) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `shorttitle`, `title`, `date`, `abstractevent`, `content`) VALUES
(27, 'b2.jpg', 'LOREM IPSUM IS SIMPLY', 'LOREM IPSUM IS SIMPLY CONSECTETUR ADIPISICING ELIT SED DO EIUSMOD TEMPOR.', '01-01-2019', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus porta. Fusce suscipit varius mi. nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna in 2001 donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit 2005 varius mi. nascetur ridiculus mus'),
(30, 'b3.jpg', 'LOREM IPSUM IS SIMPLY ', 'LOREM IPSUM IS SIMPLY CONSECTETUR ADIPISICING ELIT SED DO EIUSMOD TEMPOR.', '02.01.2019', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus porta. Fusce suscipit varius mi. nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna in 2001 donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit 2005 varius mi. nascetur ridiculus mus'),
(31, 'b4.jpg', 'LOREM IPSUM IS SIMPLY', 'LOREM IPSUM IS SIMPLY CONSECTETUR ADIPISICING ELIT SED DO EIUSMOD TEMPOR', '03.01.2019', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus porta. Fusce suscipit varius mi. nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna in 2001 donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit 2005 varius mi. nascetur ridiculus mus'),
(32, 'b5.jpg', 'LOREM IPSUM IS SIMPLY', 'LOREM IPSUM IS SIMPLY CONSECTETUR ADIPISICING ELIT SED DO EIUSMOD TEMPOR', '04.01.2018', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus porta. Fusce suscipit varius mi. nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna in 2001 donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit 2005 varius mi. nascetur ridiculus mus');

-- --------------------------------------------------------

--
-- Table structure for table `charities`
--

CREATE TABLE `charities` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `content` varchar(500) NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charities`
--

INSERT INTO `charities` (`id`, `heading`, `content`, `updatedate`) VALUES
(1, 'Adoption Child', 'Curabitur convallis rutrum erat nec vestibulum. Sed iaculis hendrerit lectus sit amet lobortis. Suspendisse ultrices nec justo nec condimentum. Fusce vel justo sem.Donec vulputate magna finibus molestie tellus.', '2019-01-17 03:47:33'),
(2, 'Charity actions', 'Curabitur convallis rutrum erat nec vestibulum. Sed iaculis hendrerit lectus sit amet lobortis. Suspendisse ultrices nec justo nec condimentum. Fusce vel justo sem.Donec vulputate magna finibus molestie tellus.', '2019-01-17 15:13:10'),
(3, 'Child Protection', 'Curabitur convallis rutrum erat nec vestibulum. Sed iaculis hendrerit lectus sit amet lobortis. Suspendisse ultrices nec justo nec condimentum. Fusce vel justo sem.Donec vulputate magna finibus molestie tellus.', '2019-01-17 15:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `eventupdate`
--

CREATE TABLE `eventupdate` (
  `id` int(11) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `month` varchar(50) NOT NULL,
  `day` varchar(30) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventupdate`
--

INSERT INTO `eventupdate` (`id`, `eventname`, `date`, `month`, `day`, `time`) VALUES
(2, 'FAMILY SUNDAY', '20', 'JULY', 'Sunday', '9:30am'),
(3, 'FAMILY SUNDAY', '20', 'JULY', 'Sunday', '9:30am'),
(4, 'FAMILY SUNDAY', '20', 'JULY', 'Sunday', '9:30am'),
(5, 'FAMILY SUNDAY', '20', 'JULY', 'Sunday', '9:30am'),
(6, 'FAMILY SUNDAY', '20', 'JULY', 'Sunday', '9:30am');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(24, 'g6.jpg'),
(25, 'g3.jpg'),
(26, 'g4.jpg'),
(27, 'g5.jpg'),
(28, 'g7.jpg'),
(29, 'g8.jpg'),
(30, 'g8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `leavecomment`
--

CREATE TABLE `leavecomment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavecomment`
--

INSERT INTO `leavecomment` (`id`, `name`, `email`, `comment`, `comment_date`) VALUES
(1, 'ram kumar', 'ramkumarcse2k18@gmail.com', 'Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit 2005 varius mi. nascetur ridiculus mus', '2018-12-16 06:40:19'),
(2, 'karthi keyan', 'smartkarthi@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus porta. Fusce suscipit varius mi. nascetur ridiculus mus.', '2018-12-16 07:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `memberregister`
--

CREATE TABLE `memberregister` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `fathername` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `qulification` varchar(50) NOT NULL,
  `dateofbirth` varchar(20) NOT NULL,
  `age` int(100) NOT NULL,
  `city` varchar(90) NOT NULL,
  `state` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `idproofnumber` varchar(50) NOT NULL,
  `idproofphoto` varchar(5000) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberregister`
--

INSERT INTO `memberregister` (`id`, `firstname`, `lastname`, `fathername`, `email`, `address`, `gender`, `qulification`, `dateofbirth`, `age`, `city`, `state`, `code`, `bloodgroup`, `contact`, `idproof`, `idproofnumber`, `idproofphoto`, `register_date`, `photo`) VALUES
(1, 'Ram', 'Kumar', 'Kalimutu', 'ramkumarcsae2k18@gmail.com', '75,Muniyandi Kovil Street,Mettu Street,Bethaniyapuram', 'male', 'B.E', '1996-12-19', 23, 'Madurai', 'TamilNadu', '625016', 'O+', '7502870103', 'voter', 'dkf8e4e94393', '1547648005_assure_logo2.png', '2019-01-16 14:13:25', '1547648005_abo_pic_1.jpg'),
(2, 'Karthik', 'Keyan', 'BalaKrishan', 'smartkarthik@gmail.com', 'mettu', 'male', 'B.E', '1996-10-12', 23, 'dindigul', 'tamilnadu', '625016', 'O+', '8015060933', 'aadhar', 'ggdsyrddu656755', '1547808039_1.png', '2019-01-18 10:40:39', '1547808039_5.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `description` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `fullcontent` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `description`, `content`, `fullcontent`) VALUES
(4, 'insurehomepagebanner.jpg', 'Keep your supporters up to date has never !', 'The Children Charity is the leading independent organization. in need in the United States and aroun', 'Duis ultricies pharetra magna in 2001 donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit 2005 varius mi. nascetur ridiculus mus'),
(5, 'banner2.jpg', 'Keep your supporters up to date has never !', 'The Children Charity is the leading independent organization. in need in the United States and aroun', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus porta. Fusce suscipit varius mi. nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem.');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subscriberdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `subscriberdate`) VALUES
(1, 'smartkarthik@gmail.com', '2019-01-18 05:34:00'),
(2, 'smartkarthik@gmail.com', '2019-01-18 05:35:01'),
(3, 'ramkumar19121996@gmail.com', '2019-01-19 02:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `content1` varchar(300) NOT NULL,
  `content2` varchar(300) NOT NULL,
  `content3` varchar(300) NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `content1`, `content2`, `content3`, `updatedate`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker includ', 'It has survived not only five centuries, but also the leap into electronic typesettingLorem Ipsum is simply dummy text of the printing.', '2019-01-17 03:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `id` int(11) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teammember`
--

INSERT INTO `teammember` (`id`, `image`, `name`, `city`, `designation`) VALUES
(16, '1547869369_teamember-1.jpg', 'Amudra', 'Madurai', 'CEO'),
(17, '1547869429_tea-member-2.jpg', 'ram', 'Trichy', 'chairman'),
(18, '1547869476_tea-member-3.jpg', 'karthika', 'Madurai', 'Leader'),
(19, '1547869553_tea-member-4.jpg', 'Aruna', 'Madurai', 'Staff'),
(20, '1547869705_tea-member-4.jpg', 'Aruna', 'Madurai', 'Staff'),
(21, '1547872266_tea-member-4.jpg', 'Aruna', 'Madurai', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `video` varchar(400) NOT NULL,
  `uploaddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `id` int(11) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `heading` varchar(400) NOT NULL,
  `content` varchar(500) NOT NULL,
  `contents` varchar(500) NOT NULL,
  `uploaddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`id`, `image`, `heading`, `content`, `contents`, `uploaddate`) VALUES
(3, '1547713043_1.png', 'Welcome to LOVE TRUST !', 'The Children Charity is the leading independent organization creating lasting change in the lives of children in need in the United States and around the world.', 'Dolore magnaorem ipsum dolor ser adipiscing elit, sed diam nonummy nibh euismod tincidunt ut  laoreet dolore set.sit amet consectetuer Aadipiscing elit, sed diam nonummy. nonummy nibh euismod  tincidunt ut laoreet dolore magna.orem ipsum dolor ser adipiscing elit, sed diam nonummy  Dolore magnaorem ipsum dolor ser adipiscing elit, sed diam nonummy nibh euismod tincidunt ut   laoreet dolore set.sit amet consectetuer Aadipiscing elit, sed diam nonummy. nonummy nibh euismod\r\n						  tincidunt ut la', '2019-01-17 08:17:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutinfo`
--
ALTER TABLE `aboutinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charities`
--
ALTER TABLE `charities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventupdate`
--
ALTER TABLE `eventupdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavecomment`
--
ALTER TABLE `leavecomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberregister`
--
ALTER TABLE `memberregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammember`
--
ALTER TABLE `teammember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutinfo`
--
ALTER TABLE `aboutinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `charities`
--
ALTER TABLE `charities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventupdate`
--
ALTER TABLE `eventupdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `leavecomment`
--
ALTER TABLE `leavecomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `memberregister`
--
ALTER TABLE `memberregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teammember`
--
ALTER TABLE `teammember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
