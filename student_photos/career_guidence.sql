-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2019 at 12:17 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admission_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_courses`
--

CREATE TABLE `college_courses` (
  `college_course_id` int(50) NOT NULL auto_increment,
  `college_id` int(80) NOT NULL,
  `course_id` int(50) NOT NULL,
  `course_fees` int(80) NOT NULL,
  `first_year_fees` int(11) NOT NULL,
  `program_type` varchar(60) NOT NULL,
  PRIMARY KEY  (`college_course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `college_courses`
--

INSERT INTO `college_courses` (`college_course_id`, `college_id`, `course_id`, `course_fees`, `first_year_fees`, `program_type`) VALUES
(5, 2, 22, 35000, 0, ''),
(6, 3, 3, 40000, 0, ''),
(7, 5, 2, 25000, 0, ''),
(8, 0, 0, 0, 0, ''),
(9, 2, 2, 35000, 0, ''),
(10, 0, 0, 0, 0, ''),
(11, 3, 0, 35000, 0, ''),
(12, 0, 0, 0, 0, ''),
(13, 0, 2, 10000, 0, ''),
(14, 0, 2, 10000, 0, ''),
(15, 0, 0, 100, 0, ''),
(16, 5, 0, 1, 0, ''),
(17, 0, 0, 11, 0, ''),
(18, 0, 0, 0, 0, ''),
(19, 0, 0, 0, 0, ''),
(20, 0, 0, 0, 0, ''),
(21, 0, 0, 0, 0, ''),
(22, 5, 2, 100000, 0, ''),
(23, 18, 8, 1000000, 0, ''),
(24, 0, 0, 0, 0, ''),
(25, 18, 8, 500000, 0, ''),
(26, 16, 7, 100, 0, ''),
(27, 16, 6, 100000, 0, ''),
(28, 13, 6, 10000, 0, ''),
(29, 21, 7, 25000, 0, ''),
(30, 21, 8, 55000, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `college_details`
--

CREATE TABLE `college_details` (
  `college_id` int(110) NOT NULL auto_increment,
  `college_name` varchar(115) NOT NULL,
  `address` varchar(120) NOT NULL,
  `landmark` varchar(125) NOT NULL,
  `city` varchar(130) NOT NULL,
  `state` varchar(135) NOT NULL,
  `pincode` int(140) NOT NULL,
  `website` varchar(145) NOT NULL,
  `contact_person` varchar(150) NOT NULL,
  `contact_number` varchar(155) NOT NULL,
  `email_id` varchar(160) NOT NULL,
  `college_desc` varchar(2000) NOT NULL,
  `prospectus` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `college_logo` varchar(200) NOT NULL,
  `college_type` varchar(60) NOT NULL,
  PRIMARY KEY  (`college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `college_details`
--

INSERT INTO `college_details` (`college_id`, `college_name`, `address`, `landmark`, `city`, `state`, `pincode`, `website`, `contact_person`, `contact_number`, `email_id`, `college_desc`, `prospectus`, `image`, `college_logo`, `college_type`) VALUES
(1, 'SDM COLLEGE OF DENTAL SCIENCES AND HOSPITAL SATTUR', 'Hubli Dhawad Highway (SH-73), Sattur \r\nDharwad - 580009 \r\nKarnataka , India', 'Dharwad ', 'Dharwad ', 'Karnataka', 580009, 'www.sdmcds.org', '08362462410', '08362464699', 'sdmcdsh@gmail.com', 'SDM College Of Dental Sciences And Hospital, Dharwad works under the esteem guidance of Sri Dharmasthala Manjunatheshwara Educational Society. It aims not only at bringing out graduates who excel in knowledge, skill and service, but also making them good human beings competent enough to serve the society. Its teaching, patient care, and research programmes are strong and dynamic. It is open to new advanced technology and helps the students be aware of them. The School is also committed to offering the best in continuing education and other forms of service to practicing dentists.', 'image.webp', 'SDM COLLEGE OF DENTAL SCIENCES AND HOSPITAL SATTUR, DHARWAD.jpg', 'SDM COLLEGE OF DENTAL SCIENCES AND HOSPITAL SATTUR, DHARWAD logo.jpg', 'PRIVATE'),
(2, 'UNIVERSITY COLLEGE OF LA  KARNATAK UNIVERSITY', 'Pavate Nagar Dharwad \r\nDharwad - 580003 \r\nKarnataka , India', 'Dharwad ', 'Dharwad', 'Karnataka', 580003, 'www.kud.ac.in', '08362448600', '08362448600', 'kud@gmail.com', 'University College Of Law- Karnatak University, Dharwad was established in 1962 to cater to the educational needs of the law students of North Karnataka. The college is affiliated to Karnataka University. The college has, from its beginning, introduced the 5- year bachelor of arts in law program recommended by the Bar Council of India. The Institution has on its roll competent, qualified, dedicated teachers and researchers most of them have carved out a niche amongst the members of legal fraternity and enjoy an enviable standing at the national level. The college offers integrated B.A,LL.B (hons.) courses.', 'UNIVERSITY COLLEGE OF LAW, KARNATAK UNIVERSITY, DHARWAD.jpg', 'UNIVERSITY COLLEGE OF LAW, KARNATAK UNIVERSITY, DHARWAD.jpg', 'UNIVERSITY COLLEGE OF LAW, KARNATAK UNIVERSITY, DHARWAD logo.jpg', 'PUBLIC'),
(3, 'HURAKADLI AJJA LAW COLLEGE', 'Near Sri Durgadevi Temple \r\nDharwad - 580008 \r\nKarnataka , India', 'Dharwad ', 'Dharwad', 'Karnataka', 580008, 'http://www.halawcollege.com', '08362446205', '08362446205', 'halawcolege@gmail.com', 'Hurakaldi Ajja Law College, Dharwad is one of the constituent units of Lingyat Education Association which is also known as LEA. Lea has a sincere objective to promote the cause of education in Karnataka. It has been rendering yeoman service to the society by way of providing scholarship to the poor and deserving students.', 'Library_Management_System_SRS_Report_Lib.pdf', 'HURAKADLI AJJA LAW COLLEGE, DHARWAD.jpg', 'HURAKADLI AJJA LAW COLLEGE, DHARWAD logo.png', 'PUBLIC'),
(4, 'UNIVERSITY OF AGRICULTURAL SCIENCES', 'Krishi Nagar \r\nDharwad - 580005 \r\nKarnataka , India', 'Dharwad ', 'Dharwad', 'Karnataka', 580005, 'http://www.uasd.edu/', '8362214420', '8362214420', 'egistrar@uasd.in', 'University Of Agricultural Sciences(UAS), Dharwad is a premier institute of Agricultural Science, was established in 1986 under section 3 of the Karnataka Universities of Agricultural Sciences Act, 1963. It began College of Agriculture in 1947 at Dharwad. The university aims to provide for undergraduates and postgraduate instructions in agriculture and other allied branches of learning.', 'Library_Management_System_SRS_Report_Lib.pdf', 'UNIVERSITY OF AGRICULTURAL SCIENCES - [UAS], DHARWAD.png', 'UNIVERSITY OF AGRICULTURAL SCIENCES - [UAS], DHARWAD logo.png', 'PUBLIC'),
(5, 'KARNATAK UNIVERSITY ', 'Pavate Nagar \r\nDharwad - 580003 \r\nKarnataka , India', 'Dharwad ', 'Dharwad', 'Karnataka', 580003, 'www.kud.ac.in', '08362215333', '08362215333', 'kud@gmail.com', 'Karnatak University Dharwad (KUD), is a state university, sprawling in 888 acres of land, recognized by UGC and has also been accredited by NAAC, established on 1st March 1950, located in the Dharwad region of Karnataka State. It is the 2nd oldest university in the Karnataka state located in the mesmerizing region of Dharwad. Under the university, there are five constituent colleges present in different parts of the state with 224 teachers, 47 PG Departments, and 4500 students. There are 250 affiliated colleges of the university. The University offers courses in the various faculties such as:', 'Library_Management_System_SRS_Report_Lib.pdf', 'KARNATAK UNIVERSITY - [KU], DHARWAD.png', 'KARNATAK UNIVERSITY - [KU], DHARWAD logo.jpg', 'PUBLIC'),
(6, 'KLE COLLEGE OF PHARMACY', 'Vidyanagar \r\nHubli - 590010 \r\nKarnataka , India', 'Hubli', 'Hubli', 'Karnataka', 580010, 'www.klescoph.org', '08362373174', '08362373174', 'principal.klescoph@gmail.com', 'K.L.E. Societyâ€™s (KLES)College Of Pharmacy was established in 1968. The institution is the constituent unit of KLE University, Belagavi, which is accredited by NAAC â€œAâ€ grade by UGC, up to March 2015. It was established with the aim of providing quality education in pharmaceutical sciences. The courses started with, Diploma in Pharmacy (1968) followed by B. Pharm (1975), M. Pharm (1988), the Ph. D Programmes (2000), M. Sc. In Clinical Pharmacy (2013) and eventually Pharm. D (2014).\r\n\r\nThe College of Pharmacy is run in a spacious well-equipped building of its own with hostel, library and sports facilities. The college is approved by Pharmacy Council of India (PCI) and All India Council for Technical Education (AICTE), New Delhi and the UG programme is accredited by the NBA (National Board of Accreditation).', 'BTS.docx', 'KLE COLLEGE OF PHARMACY, HUBLI.jpg', 'KLE COLLEGE OF PHARMACY, HUBLI logo.jpg', 'PUBLIC'),
(7, 'KARNATAKA STATE LAW UNIVERSITY ', 'Sutagatti Road, Near RTO Office, Navanagar \r\nHubli - 580025 \r\nKarnataka , India', 'Hubli', 'Hubli', 'Karnataka', 580025, 'http://www.kslu.ac.in/', '836 2222492 ', ' 8362222392', 'ksluls111@gmail.com', 'Karnataka State Law University (KSLU) located in Navanagar, Hubli is a State Law University that was established in 2009. Tocreate a law graduate and postgraduate lawyer who is motivated by leadership and motivation for the mission of promoting service and self-interest, the universityoffers BBA L.L.B (Hons.) / BBA-L.L.B / BA-L.L.B / L.L.B courses at the Undergraduate level and LLM Program at the Postgraduate level.', 'Library_Management_System_SRS_Report_Lib.pdf', 'KARNATAKA STATE LAW UNIVERSITY - [KSLU], HUBLI.jpg', 'KARNATAKA STATE LAW UNIVERSITY - [KSLU], HUBLI ogo.png', 'GOVERNMENT'),
(8, 'KLE TECHNOLOGICAL UNIVERSITY', 'Vidyanagar, Hubli \r\nHubli - 580031 \r\nKarnataka , India', 'Hubali', 'Hubali', 'Karnataka', 580031, 'www.kletech.ac.in', '8362378300', '8362378103', 'info@kletech.ac.in', 'KLE Technology University is a State Private University in Hubli, Karnataka. It was founded in 1947 by the Karnatak Lingayat Education Society (KLE Society) as a Polytechnic institute named B.V Bhoomaraddi College of Engineering and Technology in Gadag. It later shifted to Hubli and upgraded into a college affiliated to Visvesvaraya Technological University in 1948. In 2014, BVBCET emerged as an Autonomous Private University recognized by Karnataka State Government and renamed after its founding KLE Society as KLE Technology University. KLE Technology University Course structure offers undergraduate programs, postgraduate courses and research and Ph.D in various areas of study. KLE Technology University Campus stretches over 53 acres with hostels facilities for both boys and girls. KLE Technology University is recognized by UGC (University Grant Commission).', 'KLE TECHNOLOGICAL UNIVERSITY, HUBLI.jpg', 'KLE TECHNOLOGICAL UNIVERSITY, HUBLI.jpg', 'KLE TECHNOLOGICAL UNIVERSITY, HUBLI logo.jpg', 'PRIVATE');

-- --------------------------------------------------------

--
-- Table structure for table `college_photos`
--

CREATE TABLE `college_photos` (
  `college_photo_id` int(110) NOT NULL auto_increment,
  `college_id` int(120) NOT NULL,
  `college_photo` varchar(130) NOT NULL,
  PRIMARY KEY  (`college_photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `college_photos`
--

INSERT INTO `college_photos` (`college_photo_id`, `college_id`, `college_photo`) VALUES
(1, 100, ''),
(2, 555, 'E:sports day1522850010674.jpg'),
(4, 555, ''),
(5, 100, 'E:sports day1522850010089.jpg'),
(6, 0, ''),
(7, 6, 'E:sports day1522850010674.jpg'),
(8, 3, 'E:sports day1522850007663.jpg'),
(9, 10, 'E:sports day1522850010674.jpg'),
(10, 0, ''),
(11, 0, ''),
(12, 0, ''),
(13, 0, ''),
(14, 10, 'E:sports day1522850007749.jpg'),
(15, 0, ''),
(16, 5, 'E:sports day1522850010089.jpg'),
(17, 5, ''),
(18, 0, ''),
(19, 0, ''),
(20, 0, ''),
(21, 0, ''),
(22, 0, ''),
(23, 13, 'download.jpg uni.jpg'),
(24, 16, 'download.jpg kud2.jpg'),
(25, 21, 'download.jpg kud2.jpg'),
(26, 24, 'gbs_bg.jpg'),
(27, 1, 'SDM COLLEGE OF DENTAL SCIENCES AND HOSPITAL SATTUR, DHARWAD.jpg'),
(28, 2, 'UNIVERSITY COLLEGE OF LAW, KARNATAK UNIVERSITY, DHARWAD logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `course_id` int(100) NOT NULL auto_increment,
  `course_name` varchar(115) NOT NULL,
  `course_description` varchar(120) NOT NULL,
  `course_duration` int(125) NOT NULL,
  `eligibility_criteria` varchar(130) NOT NULL,
  `additional_requirements` varchar(135) NOT NULL,
  `course_stream` varchar(60) NOT NULL,
  `course_type` varchar(60) NOT NULL,
  `course_substream` varchar(60) NOT NULL,
  PRIMARY KEY  (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_id`, `course_name`, `course_description`, `course_duration`, `eligibility_criteria`, `additional_requirements`, `course_stream`, `course_type`, `course_substream`) VALUES
(6, 'mba', 'Master of Business Aadministration', 2, 'bca', '2', 'COMMERCE', '', 'Management'),
(7, 'MCA', 'Master of Computer Application', 2, 'ranking', '24', '', '', ''),
(8, 'msc', 'master graduation', 2, 'ranking', '20', '', '', ''),
(9, 'msc', 'chemistry', 2, '20to24', '15', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `external_course`
--

CREATE TABLE `external_course` (
  `external_course_id` int(55) NOT NULL auto_increment,
  `external_course_name` varchar(60) NOT NULL,
  `external_course_description` varchar(100) NOT NULL,
  `external_course_duration` int(120) NOT NULL,
  `external_course_eligibility` varchar(100) NOT NULL,
  `external_additional_requirements` varchar(200) NOT NULL,
  PRIMARY KEY  (`external_course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `external_course`
--

INSERT INTO `external_course` (`external_course_id`, `external_course_name`, `external_course_description`, `external_course_duration`, `external_course_eligibility`, `external_additional_requirements`) VALUES
(14, 'php', 'good', 4, 'bca', 'extra subjects'),
(15, 'python', 'no knowledge', 1, 'bca', 'learn to subjects'),
(16, 'java', 'java', 6, '2', 'scholarships');

-- --------------------------------------------------------

--
-- Table structure for table `institute_courses`
--

CREATE TABLE `institute_courses` (
  `institute_course_id` int(110) NOT NULL auto_increment,
  `institute_id` int(115) NOT NULL,
  `external_course_id` int(100) NOT NULL,
  `course_fees` int(135) NOT NULL,
  PRIMARY KEY  (`institute_course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `institute_courses`
--

INSERT INTO `institute_courses` (`institute_course_id`, `institute_id`, `external_course_id`, `course_fees`) VALUES
(2, 3333, 3333, 1000),
(4, 14, 0, 100000),
(5, 14, 0, 12000),
(6, 0, 0, 100),
(7, 0, 0, 10000),
(9, 0, 0, 0),
(10, 15, 15, 15000),
(11, 0, 15, 30000),
(12, 0, 14, 12000),
(13, 0, 14, 12000),
(14, 0, 16, 12000),
(15, 14, 16, 12000),
(16, 14, 14, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `institute_details`
--

CREATE TABLE `institute_details` (
  `institute_id` int(100) NOT NULL auto_increment,
  `institute_name` varchar(100) NOT NULL,
  `institute_address` varchar(200) NOT NULL,
  `institute_landmark` varchar(150) NOT NULL,
  `institute_city` varchar(45) NOT NULL,
  `institute_state` varchar(50) NOT NULL,
  `institute_pincode` int(200) NOT NULL,
  `institute_website` varchar(100) NOT NULL,
  `institute_contact_person` varchar(100) NOT NULL,
  `institute_contact_number` varchar(200) NOT NULL,
  `institute_email_id` varchar(95) NOT NULL,
  `image` varchar(200) NOT NULL,
  `logo_institute` varchar(200) NOT NULL,
  PRIMARY KEY  (`institute_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `institute_details`
--

INSERT INTO `institute_details` (`institute_id`, `institute_name`, `institute_address`, `institute_landmark`, `institute_city`, `institute_state`, `institute_pincode`, `institute_website`, `institute_contact_person`, `institute_contact_number`, `institute_email_id`, `image`, `logo_institute`) VALUES
(1, 'CMAs Group Of Institutions ', 'Dharwad', 'Karnataka', 'Dharwad ', 'Karnataka', 580006, 'f', '9152165856', '8362214420', 'vwg@gamil.com', 'cma-s-group-of-institutions-saptapur-dharwad-colleges-h64x8wigen.jpg', 'cma-s-group-of-institutions-saptapur-dharwad-colleges-h64x8wigen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `institute_photos`
--

CREATE TABLE `institute_photos` (
  `institute_photo_id` int(100) NOT NULL auto_increment,
  `institute_id` int(200) NOT NULL,
  `institute_photo` varchar(250) NOT NULL,
  PRIMARY KEY  (`institute_photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `institute_photos`
--

INSERT INTO `institute_photos` (`institute_photo_id`, `institute_id`, `institute_photo`) VALUES
(4, 1224, 'E:sports day1522850008120.jpg'),
(5, 22222222, 'E:sports day1522850010674.jpg'),
(6, 2, 'E:sports day1522850008120.jpg'),
(8, 15, 'images.jpg inst2.jpg'),
(9, 15, 'download.jpg inst.jpg'),
(10, 0, 'download.jpg kud2.jpg'),
(11, 0, 'vishu.png'),
(12, 14, 'vishu.png'),
(13, 1, 'cma-s-group-of-institutions-saptapur-dharwad-colleges-h64x8wigen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `hint_q` varchar(100) NOT NULL,
  `hint_a` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `hint_q`, `hint_a`, `status`) VALUES
('admin', '123', 'admin', 'who are you', 'admin', 'active'),
('student', '4444', 'student', 'who are you', 'student', 'active'),
('college', '12', 'college', 'who are you', 'college', 'active'),
('vishurg1996@gmail.com', '123456', 'student', 'Which is your lucky number?', '5', 'active'),
('vishurg1996@gmail.com', '123456', 'college', 'What is your email?', 'vishurg1996@gmail.com', 'active'),
('kudcs@gmail.com', '123456', 'college', 'What is your email?', 'kudcs@gmail.com', 'active'),
('www.gbl.hubli@gmail.com', '123456', 'college', 'What is your email?', 'www.gbl.hubli@gmail.com', 'active'),
('www.gbl.hubli@gmail.com', '123456', 'college', 'What is your email?', 'www.gbl.hubli@gmail.com', 'active'),
('shekhar3k@gmail.com', '123456', 'student', 'Which is your favourite color?', 'red', 'active'),
('klebcabbacollege@gmail.com', '123456', 'college', 'What is your email?', 'klebcabbacollege@gmail.com', 'active'),
('sdmcdsh@gmail.com', '123456', 'college', 'What is your email?', 'sdmcdsh@gmail.com', 'active'),
('kud@gmail.com', '123456', 'college', 'What is your email?', 'kud@gmail.com', 'active'),
('halawcolege@gmail.com', '123456', 'college', 'What is your email?', 'halawcolege@gmail.com', 'active'),
('egistrar@uasd.in', '123456', 'college', 'What is your email?', 'egistrar@uasd.in', 'active'),
('kud@gmail.com', '123456', 'college', 'What is your email?', 'kud@gmail.com', 'active'),
('principal.klescoph@gmail.com', '123456', 'college', 'What is your email?', 'principal.klescoph@gmail.com', 'active'),
('ksluls111@gmail.com', '123456', 'college', 'What is your email?', 'ksluls111@gmail.com', 'active'),
('info@kletech.ac.in', '123456', 'college', 'What is your email?', 'info@kletech.ac.in', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `registration_details`
--

CREATE TABLE `registration_details` (
  `reg_id` int(100) NOT NULL auto_increment,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `university_name` varchar(60) NOT NULL,
  `year_of_passing` int(11) NOT NULL,
  `obtained_marks` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `percentage` float NOT NULL,
  `caste` varchar(60) NOT NULL,
  `category` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL,
  PRIMARY KEY  (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `registration_details`
--

INSERT INTO `registration_details` (`reg_id`, `first_name`, `last_name`, `dob`, `gender`, `address`, `mobile_no`, `email`, `qualification`, `university_name`, `year_of_passing`, `obtained_marks`, `total_marks`, `percentage`, `caste`, `category`, `photo`) VALUES
(2, 'vishwanath goudappanavar', '', '0000-00-00', '', 'hubli', '7204040613', 'vishurg1996@gmail.com', 'BCA', '', 0, 0, 0, 0, '', '', ''),
(6, 'guru awari', '', '0000-00-00', 'male', 'dharwad', '2147483647', 'guru1996@gmail.com', 'bcom', '', 0, 0, 0, 0, '', '', ''),
(7, 'shreekant chavan', '', '0000-00-00', 'male', 'dharwad', '2147483647', 'shree1995@gmail.com', 'bsc', '', 0, 0, 0, 0, '', '', ''),
(8, 'deeksha gouda', '', '0000-00-00', 'female', 'banglore', '2147483647', 'deeksha222@gmail.com', 'BBA', '', 0, 0, 0, 0, '', '', ''),
(9, 'pallavi', '', '0000-00-00', 'female', 'kbl', '9880995753', 'pallu.@gmail.com', 'bsc', '', 0, 0, 0, 0, '', '', ''),
(10, 'madhu', '', '0000-00-00', 'female', 'hubli', '8755758454', 'madhu@2gmail.com', 'bca', '', 0, 0, 0, 0, '', '', ''),
(11, 'vishu', 'g', '1996-08-07', 'male', 'hubli', '7204040613', 'vishurg1996@gmail.com', 'mca', 'kud', 2008, 500, 700, 85, 'Hindu', '3B', 'Capture.PNG'),
(12, 'Chandrashekhar', 'Katagi', '1986-12-06', 'male', 'Dwd', '8618218519', 'shekhar3k@gmail.com', 'MCA', 'VTU', 2010, 320, 380, 80, 'Hindu', 'GM', 'banner_SMM.jpg');
