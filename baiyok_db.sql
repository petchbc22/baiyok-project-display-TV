-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 12:00 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baiyok_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `direction`
--

CREATE TABLE `direction` (
  `d_id` int(4) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `th_name` varchar(200) NOT NULL,
  `en_name` varchar(200) NOT NULL,
  `ch_name` varchar(200) NOT NULL,
  `ru_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `direction`
--

INSERT INTO `direction` (`d_id`, `icon`, `th_name`, `en_name`, `ch_name`, `ru_name`) VALUES
(1, 'img/compass-n.png', 'เหนือ', 'North', '北方', 'на север'),
(2, 'img/compass-s.png', 'ใต้', 'South', '南', 'юг'),
(3, 'img/compass-e.png', 'ตะวันออก', 'East', '東', 'восток'),
(6, 'img/compass-w.png', 'ตะวันตก', 'West', '西', 'запад');

-- --------------------------------------------------------

--
-- Table structure for table `place_en`
--

CREATE TABLE `place_en` (
  `id` int(3) NOT NULL,
  `d_id` int(4) NOT NULL,
  `images` varchar(100) NOT NULL,
  `place_name` varchar(200) NOT NULL,
  `detail` text NOT NULL,
  `sound` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place_en`
--

INSERT INTO `place_en` (`id`, `d_id`, `images`, `place_name`, `detail`, `sound`) VALUES
(1, 1, 'img/fa0a64263aba4f909a80368c3706f66c.jpg', 'Chitralada Palace', 'Chitralada Royal Villa is a royal villa located within Dusit Palace. This villa was the unofficial permanent-residence of King Bhumibol Adulyadej (Rama IX), the longest serving monarch of Thailand and Queen Sirikit. He moved there after the death of his older brother, King Rama VIII in the Grand Palace. The palace grounds, which are surrounded by a moat and guarded by the royal guards, also contain the Chitralada School, initially established for the children of the royal family and palace staffs. Prince Dipangkorn Rasmijoti is a pupil in the Chitralada School. The school is considered the most exclusive in Thailand.', ''),
(2, 2, 'img/IMG_1252.jpg', 'Suan Pakkad Palace', ' The Suan Pakkad Palace is the first museum in Thailand where the owner, their Royal Highnesses Prince and Princess Chumbhot of Nagara Svarga, decided to convert their private residence, built in the traditional Thai style opened in 1952 , is located on 6 Rai on Sri Ayudhya Road, Bangkok, containing their Royal Highnesses Prince and Princess Chumbhot of Nagara Svarga\'s collection of antiquities, which has been passed down through successive generations. The Suan Pakkad Palace is a combination of fine arts and ancient artifacts from the era of H.R.H. Prince Paribatra Sukhumbandhu, son of His Majesty King Chulalongkorn, Rama V and Her Majesty Queen Sukhumala Marasri.\r\n\r\n      There are groups of 4 traditional Thai houses with the covered hallway between them. Houses 5 to 8 are located along the west side of the property. The Lacquer Pavilion stands in the main garden to the south of the compound. The Ban-Chiang Museum [Thai Heritage] and Marsi Gallery are in the Chumbhot-Pantip Centre of Arts.', '');

-- --------------------------------------------------------

--
-- Table structure for table `place_th`
--

CREATE TABLE `place_th` (
  `id` int(4) NOT NULL,
  `d_id` int(4) NOT NULL,
  `images` varchar(100) NOT NULL,
  `place_name` varchar(200) NOT NULL,
  `detail` text NOT NULL,
  `sound` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place_th`
--

INSERT INTO `place_th` (`id`, `d_id`, `images`, `place_name`, `detail`, `sound`) VALUES
(1, 1, 'img/fa0a64263aba4f909a80368c3706f66c.jpg', 'พระตำหนักจิตรลดารโหฐาน', 'พระตำหนักจิตรลดารโหฐาน สร้างขึ้นเมื่อ พ.ศ. 2456 ในรัชสมัยพระบาทสมเด็จพระมงกุฎเกล้าเจ้าอยู่หัว ณ บริเวณทุ่งส้มป่อย ซึ่งเป็นทุ่งนาระหว่างพระราชวังสวนดุสิตกับวังพญาไท (ปัจจุบันคือโรงพยาบาลพระมงกุฎเกล้า) โดยโปรดเกล้าฯ ให้เจ้าพระยายมราช (ปั้น สุขุม) เสนาบดีกระทรวงนครบาลจัดสร้างพระตำหนักขึ้น โดยมีพระยาวิศุกรรมศิลปประสิทธิ์ (น้อย ศิลปี) เป็นผู้ควบคุมและดำเนินการก่อสร้าง เพื่อทรงใช้เป็นที่รโหฐานสำหรับทรงพระราชนิพนธ์หนังสือ รวมทั้งราชเสวกจะได้มีโอกาสเฝ้าทูลละอองธุลีพระบาทเป็นการส่วนพระองค์ โปรดเกล้าฯ พระราชทานนามทุ่งส้มป่อยว่า สวนจิตรลดา พระราชทานนามพระตำหนักว่า \"พระตำหนักจิตรลดารโหฐาน\"[1] บริเวณรอบพระตำหนักมีการขุดคูและทำกำแพงรั้วเหล็กโดยรอบ มีประตู 4 ทิศ พระราชทานชื่อประตูตามสวนจิตรลดาของพระอินทร์และท้าวโลกบาล คือ ด้านทิศตะวันออก ชื่อประตู “พระอินทร์อยู่ชม” ด้านทิศใต้ ชื่อประตู “พระยมอยู่คุ้น” ด้านทิศตะวันตก ชื่อประตู “พระวรุณอยู่เจน” และด้านทิศเหนือ ชื่อประตู “พระกุเวนอยู่เฝ้า” ในปัจจุบันเป็นทางเข้าออกได้เพียง ๓ ทิศ เว้นทิศตะวันออก มีสะพาน ๒ สะพาน มีประตูน้ำ ๒ ประตู และมีซุ้มทหารยาม ๓๐ ซุ้ม ความสำคัญของประตู “พระวรุณอยู่เจน” เป็นประตูสำหรับเสด็จพระราชดำเนิน ของพระบาทสมเด็จพระเจ้าอยู่หัวฯ และ สมเด็จพระนางเจ้าฯ พระบรมราชินีนาถ', ''),
(2, 1, 'img/IMG_1252.jpg', 'วังสวนผักกาด', 'วังสวนผักกาด เดิมเป็นสวนผักกาด เป็นวังที่ประทับของพระเจ้าวรวงศ์เธอ พระองค์เจ้าจุมภฏพงษ์บริพัตร กรมหมื่นนครสวรรค์ศักดิพินิต และ หม่อมราชวงศ์พันธุ์ทิพย์ บริพัตร (เทวกุล) ตั้งอยู่บนพื้นที่ 6 ไร่ บนถนนศรีอยุธยา เขตราชเทวี กรุงเทพมหานคร โดยสร้างเพื่อประทับในช่วงสุดสัปดาห์ และเปิดให้บุคคลภายนอกเข้าชมศิลปะและโบราณวัตถุ โดยที่เจ้าของบ้านยังใช้เป็นที่พำนักอยู่ ตั้งแต่ พ.ศ. 2495 ภายหลังจากพระเจ้าวรวงศ์เธอ พระองค์เจ้าจุมภฏพงษ์บริพัตร กรมหมื่นนครสวรรค์ศักดิพินิต สิ้นพระชนม์เมื่อ พ.ศ. 2502 พระชายา คือ หม่อมราชวงศ์พันธุ์ทิพย์ บริพัตร ได้มอบให้วังสวนผักกาดอยู่ในความดูแลของ มูลนิธิจุมภฏ-พันธุ์ทิพย์ และเปิดเป็น พิพิธภัณฑ์วังสวนผักกาดตั้งแต่นั้นมา', ''),
(3, 2, 'img/p86tjz4jyr04qiMogz7-o.jpg', 'อนุสาวรีย์ชัยสมรภูมิ', 'อนุสาวรีย์ชัยสมรภูมิสร้างขึ้นเพื่อเทิดทูนวีรกรรมของทหาร ตำรวจ และพลเรือนที่เสียชีวิตไปในกรณีพิพาทระหว่างไทยกับฝรั่งเศสเรื่องการปรับปรุงพรมแดนไทยกับอินโดจีนฝรั่งเศส ซึ่งในครั้งนั้นมีผู้เสียชีวิต 59 คน ทั้งทหาร ตำรวจ และพลเรือน พลเอก พระยาพหลพลพยุหเสนา เป็นผู้วางศิลาฤกษ์เมื่อวันที่ 24 มิถุนายน 2484 และจอมพล ป.พิบูลสงคราม เป็นผู้ทำพิธีเปิดเมื่อวันที่ 24 มิถุนายน 2485 สถาปนิกผู้ออกแบบอนุสาวรีย์คือ หม่อมหลวงปุ่ม มาลากุล\r\n\r\nก่อนที่จะมีการสร้างวงเวียนอนุสาวรีย์ บริเวณจุดตัดของถนนพญาไท ถนนราชวิถี และถนนพหลโยธินนี้มีชื่อเรียกว่า สี่แยกสนามเป้า', ''),
(4, 2, 'img/lib-supeen.jpg', 'หอสมุดแห่งชาติ', 'หอสมุดแห่งชาติ ก่อตั้งขึ้นโดยพระมหากรุณาธิคุณในพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว ที่ทรงพระกรุณาโปรดเกล้าฯ ให้รวมหอพระสมุด 3 แห่งเข้าด้วยกันคือ หอพุทธสาสนะสังคหะ หอพระมณเฑียรธรรม และหอพระสมุดวชิรญาณ แล้วพระราชทานนามว่า หอพระสมุดวชิรญาณสำหรับพระนคร เมื่อวันที่ 12 ตุลาคม พ.ศ. 2448 ตั้งอยู่ ณ หอคองคอเดียในพระบรมมหาราชวัง (ปัจจุบันคือ ศาลาสหทัยสมาคม)\r\n\r\nต่อมา พระบาทสมเด็จพระมงกุฎเกล้าเจ้าอยู่หัว ทรงพระกรุณาโปรดเกล้าฯ ให้ขยายพื้นที่ตั้งแห่งใหม่มาอยู่ตึกถาวรวัตถุ ริมถนนหน้าพระธาตุ เสด็จพระราชดำเนินทรงเปิดอาคารเมื่อวันที่ 6 มกราคม พ.ศ. 2459\r\n\r\nในรัชกาลที่ 7 พระบาทสมเด็จพระปกเกล้าเจ้าอยู่หัว โปรดเกล้าฯ ให้ขยายพื้นที่การให้บริการเป็น 2 แห่งคือ หนังสือตัวพิมพ์ทั้งหมดและหนังสือส่วนพระองค์พระบาทสมเด็จพระมงกุฎเกล้าเจ้าอยู่หัว ให้บริการ ณ ตึกถาวรวัตถุ พระราชทานนามว่า หอพระสมุดวชิราวุธ ส่วนศิลาจารึก คัมภีร์ใบลาน หนังสือสมุดไทย ตู้ลายรดน้ำ ย้ายไปให้บริการที่พระที่นั่งศิวโมกขพิมาน พระราชทานนามว่า หอพระสมุดวชิรญาณ เสด็จพระราชดำเนินทรงเปิดหอพระสมุดวชิรญาณและหอพระสมุดวชิราวุธ เมื่อวันที่ 26 กุมภาพันธ์ พ.ศ. 2469\r\n\r\nครั้นภายหลังเปลี่ยนแปลงการปกครอง รัฐบาลมีพระราชกฤษฎีกาจัดวางระเบียบราชการสำนักงานและกรมในกระทรวงธรรมการ พ.ศ. 2476 กำหนดให้หอพระสมุดวชิรญาณสำหรับพระนครเป็นกองหอสมุด ขึ้นอยู่ในกรมศิลปากร ภายหลังเปลี่ยนชื่อเป็น หอสมุดแห่งชาติ\r\n\r\nหอสมุดแห่งชาติได้พัฒนามาเป็นลำดับ สถานที่ให้บริการที่ตึกถาวรวัตถุจึงไม่เพียงพอ กรมศิลปากรจึงดำเนินการก่อสร้างอาคารหลังใหม่ที่ท่าวาสุกรี แล้วเสร็จเมื่อ พ.ศ. 2509 และเริ่มให้บริการ ณ สถานที่แห่งใหม่มาจนถึงปัจจุบัน', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `place_en`
--
ALTER TABLE `place_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_th`
--
ALTER TABLE `place_th`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `direction`
--
ALTER TABLE `direction`
  MODIFY `d_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `place_en`
--
ALTER TABLE `place_en`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `place_th`
--
ALTER TABLE `place_th`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
