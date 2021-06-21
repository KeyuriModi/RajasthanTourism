-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2020 at 02:14 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rajasthan`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackid` int(11) NOT NULL AUTO_INCREMENT,
  `registrationid` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `registrationid`, `subject`, `message`) VALUES
(1, 1, 'hotel', 'gud'),
(2, 2, 'package', 'exelent'),
(19, 0, 'service', 'very good service'),
(20, 0, 'service', 'very good service');

-- --------------------------------------------------------

--
-- Table structure for table `hotelbooking`
--

CREATE TABLE IF NOT EXISTS `hotelbooking` (
  `registrationid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `hotelname` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `mobileno` int(10) NOT NULL,
  `country` text NOT NULL,
  `emailid` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `payment` text NOT NULL,
  PRIMARY KEY (`registrationid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `hotelbooking`
--

INSERT INTO `hotelbooking` (`registrationid`, `firstname`, `lastname`, `hotelname`, `address`, `city`, `state`, `mobileno`, `country`, `emailid`, `checkin`, `checkout`, `adult`, `child`, `payment`) VALUES
(1, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 123, 'india', 'jay@gmail.com', '0000-00-00', '2018-12-30', 0, 0, ''),
(9, 'keyuri', 'modi', 'keyuri modi', 'porbandar', 'porbandar', 'gujarat', 2147483647, 'india', 'keyurimodi@gmail.com', '2019-03-16', '2019-03-19', 2, 0, 'check');

-- --------------------------------------------------------

--
-- Table structure for table `hoteldetails`
--

CREATE TABLE IF NOT EXISTS `hoteldetails` (
  `hotelid` int(11) NOT NULL AUTO_INCREMENT,
  `hotelname` text NOT NULL,
  `contactus` text NOT NULL,
  `reachus` text NOT NULL,
  `facalities` text NOT NULL,
  `overview` text NOT NULL,
  `price` text NOT NULL,
  `ratings` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`hotelid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `hoteldetails`
--

INSERT INTO `hoteldetails` (`hotelid`, `hotelname`, `contactus`, `reachus`, `facalities`, `overview`, `price`, `ratings`, `photo`) VALUES
(2, 'MOTEL BARR', 'Address :Ajmer-Jodhpur Road \r\n	Contact Person :Sh. Rishpal Ji \r\n	Contact No :02937-284224 \r\n	Mobile : +91 9414359275 \r\n	Email : barr@rtdc.in ', 'Bus Stand : 1.5 km towards East (--) \r\n	Railway Station : 25 kms from Beawar (--) \r\n	Air Port : 125 km from Jodhpur (--) \r\n', '1.Centrally Located\r\n2.Internet,Fax & STD\r\n3.Doctor on Call\r\n4.Computer Support\r\n5.Lush Green Garden\r\n6.Parking Facility', 'HotelBarr Located on National Highway No. 14 after and before Beawar. This motel is good choice for comfortable stopover for people travelling on the Ajmer - Jodhpur stretch. It is an ideal place for group and family stay. It offers AC rooms and Non AC rooms with modern amenities. Restaurant serves variety of cuisine and well stocked bar offers drinks including IMFL, wine and beer. Hotel provides travellers an experience of Rajasthan with safety, comfort, hygiene and security. Place To Visit : -- Around Ajmer-Jodhpur : --', '', 'no rating available ', 'h2.jpg'),
(3, 'HOTEL BHARATPUR FOREST LODGE', 'Address :Keoladeo National Park \r\n	Contact Person :Bhagwan Singh Saini \r\n	Contact No :05644-222760 \r\n		Mobile : 9413014177 \r\n	Email : forestlodge@rtdc.in', 'Bus Stand : From City Center (03) \r\n	Railway Station : Bharatpur Railway Station (08) \r\n	Air Port : Delhi (220) \r\n', '1.All Major Credit Cards Accepted\r\n2.Broadband Internet Connectivity\r\n3.Money Changer\r\n4.Laundry\r\n5.Parking\r\n6.Postal Services\r\n7.Safe Deposite\r\n8.Campfire Parties On Request\r\n9.Car On Rent\r\n10.Rickshaw /Bicycle for Park visit\r\n11.Boating for Closer View Of Bird\r\n12.Jungle Experience', 'Hotel Bharatpur Forest Lodge Bharatpur forest lodge is situated inside the Bharatpur Bird Sanctuary at a distance of 1.5 kms from the main entry gate of the bird sanctuary, Due to its location this birding lodge is undoubtedly the best located birding lodge in Bharatpur. Bharatpur forest lodge is having 17 Ac Rooms, all are equipped with all the modern facilities with attached bathroom running hot and cold water, all the rooms at forest lodge is having private balconies with sanctuary view.Bharatpur forest lodge is considered as a paradise for bird watchers. Place To Visit : Keoldadeo national park ; a world heritage site and famous bird sanctuary, Lohagarh fort, The Royal palace, Government museum, Jawahar burj, Fateh burj Around Bharatpur : Deeg [32 kms], Kaman [60 kms], Bayana [45 kms], Brij bhumi [Mathura, Vrindavan and Govardhan], Taj Mahal at Agra [45 kms], Fatehpur Sikri [15 kms]', '428rs/pr', '4', 'h3.jpg\r\n'),
(4, 'HOTEL CHAMBAL\r\n', 'Address :Near Chatravilas Park, Nayapura, Kota \r\n	Contact Person :Sh.Charan Singh \r\n	Contact No :0744-2326527 \r\n	Mobile : 8769154358 \r\n	Email : chambal@rtdc.in ', 'Bus Stand : 0.5 km towards East (--) \r\n	Railway Station : 4kms (--) \r\n	Air Port : 5 kms (--) ', '1.Doctor on Call\r\n2.Car Rental\r\n3.Lush Green Garden\r\n4.Bar\r\n5.Internet,Fax & STD\r\n6.Laundry & Dry-Cleaning\r\n7.Parking Facility\r\n8.Dormitory for Drivers', 'Hotel Chambal Chambal - The Hotel is situated on the main road and around 3 km from Railway/ Bus Station. Hotel has AC and Non AC double and family rooms with modern facilities. Restaurant serves Indian and Rajasthani cuisines and well stocked bar to boost the spirit of holday. Safety, security, hygiene and comfort are taken care to make the stay memorable. Place To Visit : Maharao Madho Singh Museum, Jag Mandir, Chabal Garden, Kota Barrage Around Kota : Badoli , Rana Pratap Sagar Dam, Darrah Wildlife Sanctuary, Jhalawar City', '1,742rs - 2,758rs', '3', 'h4.jpg'),
(5, 'HOTEL DHOLA MARU', 'Address :Near Puran Singh Circle, Bikaner \r\n	Contact Person :Sh Vasudev Singh \r\n	Contact No :0151-2529621 \r\n	Mobile : 8107713979 \r\n	Email : dholamaru@rtdc.in', ' Bus Stand : 1299 km from Mumbai, 754 km from Ahmedabad,\r\n		321 km from Jaipur, and 470 km from New Delhi. (--) \r\n	Railway Station : Convenient overnight trains from New Delhi, \r\n	Mumbai, Ahmedabad & Jaipur. (--) \r\n	Air Port : Direct flights from Delhi or Mumbai to Jodhpur which\r\n	is the nearest airport around 200 km from Bikaner. (--) \r\n', '1.Doctor on Call\r\n2.Sight Seeing & Package Tours\r\n3.Car Rental\r\n4.Conference Room\r\n5.Lush Green Garden\r\n6.Bar\r\n7.Internet\r\n8.Fax & STD\r\n9.Computer support\r\n10.Laundry & Dry-Cleaning\r\n11.Money Exchange\r\n12.parking Facilities\r\n', 'Hotel Dhola Maru The name of the hotel holds the essence of Rajasthan as it is named after the love story of prince Dhola of Narvar and princess Maru of Poogal. The hotel holds comfort for not only the travelers but also for the local residents as it is situated in the heart of city. It is no doubt a preferred place for stay by travelers for individual or family purpose; plus, bookings can be done for functions or marriages as there is sufficient place .The guests get the comfort of all modern amenities. The restaurant gives a wide choice of vegetarian and non vegetarian dishes. The hotel bar serves variety of alcoholic drinks, beer and wine at a comfort price. Safety, comfort, hygiene and security are basic priorities given to the travelers visiting us; hence making their stay with us a cherishable one ! An added attractive feature for the guests is camping facility for the caravan travelers. Place To Visit : Junagarh fort, Suraj pole [Sun gate], Sadul museum and Lalgarh palace, Prachina, Ganga Government museum Around Bikaner : Deshnok-Karni Mata temple [Famous as Rat temple], Kolayat, Gajner wildlife sanctuary\r\n', '935rs - 2,446rs', '2', 'h5.jpg'),
(1, 'HOTEL ANAND BHAWAN\r\n', 'Address :Fateh Sagar Road, Uaipur - (India) \r\nContact Person :Mr. Lalit Prasad Poovriya \r\nContact No :+91-294-2523018 \r\nMobile : 9928147218 \r\nEmail : anandbhawan@rtdc.in', 'Bus Stand : 5 KM towards South- East (--) \r\n	Railway Station : 5 KM towards South- East (--) \r\n	Air Port : 25 KMS towards South-East (--)\r\n', '1.Centrally Located\r\n2.Doctor on Call\r\n3.Sight Seeing & Package Tours\r\n4.Lush Green Garden\r\n5.Internet, Fax & STD\r\n6.Laundry & Dry-Cleaning\r\n7.Credit Cards Acceptance\r\n8.Parking Facility\r\n9.Dormitory for Drivers', 'Hotel Anand Bhawan RSHCL\r\nThe Maharana of Mewar built Anand Bhawan nine decades ago as a Guest house to accommodate Senior British and Indian officials. Thereafter it became the official residence of Prime Minister of Mewar. Soon after independence of India, the Anand Bhawan was converted into State Hotel. Since then, Hotel Anand Bhawan has been welcoming Indian and foreign tourists and has also been extending its hospitality to all its visitors. Perched on top of a hillock, it commands a majestic view of Udaipur and overlooks Fatehsagar'' and Swaroop Sagar Lakes. There are 21 beautifully designed and furnished AC rooms at moderate price with all amenities. Safety, comfort and hygiene are the prime concerns of the hotel.Restaurant services Indian, continental cuisines and the bar is well stocked with IMFL, wines and beer. Place To Visit : City Palace, Jagdish Temple, Bhartiya Lok Kala, Saheliyon-ki-Bari , Pratap Memorial , Fateh Sagar, Pichola Lake, Sajjan Garh Around Udaipur : Eklingji, Nagda, Haldighati Nathdwara, Kankroli, Kumbhalgarh Fort, Jaisamand Lake, Ranakpur', '1,280rs - 2,980rs', '3', 'h1.jpg'),
(101, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '111', '1', 'uploads/abdulla_pir.jpg'),
(107, 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aaa', 'uploads/bagor ki haveli.jpg'),
(103, 'gregwd', 'gregreer', 'fefwefcc', 'dregrgr', 'rrergtgtgreger', '32343', '6', 'uploads/ahar museum.jpg'),
(105, 'vdvsc', 'gregreg', 'jiojuhyg', 'kdbkccncc', 'fhfijofijpe', '4454', '2', 'uploads/chambalgarden.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `packagebooking`
--

CREATE TABLE IF NOT EXISTS `packagebooking` (
  `registrationid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `packagename` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `mobileno` int(10) NOT NULL,
  `country` text NOT NULL,
  `emailid` text NOT NULL,
  `adult` text NOT NULL,
  `child` text NOT NULL,
  `payment` text NOT NULL,
  PRIMARY KEY (`registrationid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `packagebooking`
--

INSERT INTO `packagebooking` (`registrationid`, `firstname`, `lastname`, `packagename`, `address`, `city`, `state`, `mobileno`, `country`, `emailid`, `adult`, `child`, `payment`) VALUES
(1, 'keyuri', 'modi', 'religious tour', 'porbandar', 'porbandar', 'gujarat', 2147483647, 'india', 'keyurimodi@gmail.com', '2', '4', 'check');

-- --------------------------------------------------------

--
-- Table structure for table `packagedetails`
--

CREATE TABLE IF NOT EXISTS `packagedetails` (
  `packageid` int(11) NOT NULL AUTO_INCREMENT,
  `packagename` text NOT NULL,
  `daynight` text NOT NULL,
  `photo` text NOT NULL,
  `placecovered` text NOT NULL,
  `overview` text NOT NULL,
  `costinclude` text NOT NULL,
  `costnotinclude` text NOT NULL,
  PRIMARY KEY (`packageid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `packagedetails`
--

INSERT INTO `packagedetails` (`packageid`, `packagename`, `daynight`, `photo`, `placecovered`, `overview`, `costinclude`, `costnotinclude`) VALUES
(1, 'RELIGIOUS TOUR', '(11 Nights /12 Days)\r\n', 'p1.jpg', 'Jaipur-Bikaner-Jaisalmer-Jodhpur-Ranakpur-Udaipur-Pushkar-Jaipur', 'Every home in Rajasthan has its own Deities. Every village has its temples. From the vermilion daubed stones revered under the thickening trunks of ancient trees to carved temples that celebrate the spirit of ancient faith. Every faith has its Gods â€“ whether Hindu, Islamic or Jain, in the nature of gurus or as the cosmos itself. Every one of them has a place in Rajasthan, not only tolerant of each otherâ€™s religions but also participating in many events or letting faiths intermingle to create a new vocabulary for those who believe in gods and their power.', '1.Stay in Non AC Room /AC Room on twin sharing basis with breakfast.\r\n2.All transfers and tour by AC Sedan car, driver allowance, fuel, GST on Transport only, toll tax and parking.', '1.Any Air/Train/Bus fare, Meals or services unless specified above, any personal expenses, any travel insurances, any Monument entrance fee, Guide fee, Sanctuary park Fees, porterage, Elephant ride at Amber, Boat Rjde at Udaipur, Any Camera Fee and any items not specifically forming a part of above package.\r\n2.The above package tour rales are not valid during Deepawali period, Christmas Period, New Vear p6riod,Desert Fair (Jaisalmer) and Pushkar fair (pushkar).\r\n3.Guests are requested to pay the difference of room rent at the Hotel (Plan tariff). lf package tour during period mention here above.\r\n4.GST/Taxes on Accommodation Part i.e. Room Tariff of Hotels is not included in this cost, Guest have to pay \r\n5.GST/Taxes at Every Hotel of city which covered in package at the time of Checkout.\r\n'),
(2, 'RAJASTHAN DARSHAN', '(10 Nights /11 Days)', 'p2.jpg', 'Jaipur-Chittaurgarh-Udaipur-Mount Abu-Jodhpur-Jaisalmer-Bikaner-Jaipur\r\n', 'A comprehensive tour designed keeping in mind the diversity of cultures prevent in various parts of Rajasthan. â€œRajasthan Darshanâ€ brings the ethnic blending of Marwar and Mewar region? Of Rajasthan. This tour also aims to explore the topographical distinctions ranging from sand dunes to fresh water lakes.', '1.Stay in Non AC Room /AC Room on twin sharing basis with breakfast.\r\n2.All transfers and tour by AC Sedan car, driver allowance, fuel, GST on Transport only, toll tax and parking.', '1.Any Air/Train/Bus fare, Meals or services unless specified above,any personal expenses, any travel insurances, any Monument entrance fee,Guide fee, Sanctuary park Fees, porterage, Elephant ride at Amber, Boat Rjdeat Udaipur, Any Camera Fee and any items not specifically forming a part of above package.\r\n2.The above package tour rales are not valid during Deepawali period, Christmas Period, New Vear p6riod,Desert Fair (Jaisalmer) and Pushkar fair (pushkar).\r\n3.Guests are requested to pay the difference of room rent at the Hotel (Plan tariff).lf package tour during period mention here above.\r\n4.GST/Taxes on Accommodation Part i.e. Room Tariff of Hotels is not included in this cost, Guest have to pay GST/Taxes at Every Hotel of city which covered in package at the time of Checkout.'),
(3, 'PEARLS OF RAJASTHAN', '(6 Nights /7 Days)', 'p3.jpg\r\n', 'Jaipur-Jodhpur-Udaipur-Jaipur', 'Rajasthan, dissemblance at its best. A land where the landscapes and dialects change at every thousand pace. Experience the same with our package â€œPearls of Rajasthanâ€ covering Udaipur, Jodhpur and Jaipur. Udaipur, city of lakes and once the capital of the Ranas of Mewar. The city is known for its fairytale palaces that will make your fantasies come alive. Jodhpur, the city of timeless architecture, was once the capital of Rathore Rajjputs in 16th century. Mehrangarh Fort and Umaid Bhawan Place, paint capturing images of castles and places in you mind. Jaipur, known as the Pink City promises a rich tradition of ornate handicrafts and sand stone places that speak volumes about the royal past of the city.\r\n', '1.Stay in Non AC Room /AC Room on twin sharing basis with breakfast.\r\n2.All transfers and tour by AC Sedan car, driver allowance, fuel, GST on Transport only, toll tax and parking.', '1.Any Air/Train/Bus fare, Meals or services unless specified above,any personal expenses, any travel insurances, any Monument entrance fee,Guide fee, Sanctuary park Fees, porterage, Elephant ride at Amber, Boat Rjde at Udaipur, Any Camera Fee and any items not specifically forming a part of above package.\r\n2.The above package tour rales are not valid during Deepawali period, Christmas Period, New Vear p6riod,Desert Fair (Jaisalmer) and Pushkar fair (pushkar).\r\n3.Guests are requested to pay the difference of room rent at the Hotel (Plan tariff).lf package tour during period mention here above.\r\n4.GST/Taxes on Accommodation Part i.e. Room Tariff of Hotels is not included in this cost, Guest have to pay GST/Taxes at Every Hotel of city which covered in package at the time of Checkout.'),
(4, 'BEST OF WILD LIFE PACKAGE', '( 5 Nights /6 Days)', 'p4.jpg', 'Jaipur-Ranthambore-Bharatpur via Deeg-Sariska-Jaipur', 'Rajasthan is one of the most sought after tourist destinations because of its varied topography and rich wildlife. Its variety of breathtaking flora and fauna along with enchanting forts like the Jogi Mahal at Ranthambhore is worth a thousand visits. This package helps you to explore the best of wild Raiasthan.\r\n', '1.Stay in Non AC Room /AC Room on twin sharing basis with breakfast.\r\n2.All transfers and tour by AC Sedan car, driver allowance, fuel, GST on Transport only, toll tax and parking.', '1.Any Air/Train/Bus fare, Meals or services unless specified above,any personal expenses, any travel insurances, any Monument entrance fee,Guide fee, Sanctuary park Fees, porterage, Elephant ride at Amber, Boat Rjde at Udaipur, Any Camera Fee and any items not specifically forming a part of above package.\r\n2.The above package tour rales are not valid during Deepawali period, Christmas Period, New Vear p6riod,Desert Fair (Jaisalmer) and Pushkar fair (pushkar).\r\n3.Guests are requested to pay the difference of room rent at the Hotel (Plan tariff).lf package tour during period mention here above.\r\n4.GST/Taxes on Accommodation Part i.e. Room Tariff of Hotels is not included in this cost, Guest have to pay GST/Taxes at Every Hotel of city which covered in package at the time of Checkout.'),
(5, 'RAJASTHAN PACKAGE', '(12 Nights /13 Days)', 'p5.jpg', 'Jaipur-Bikaner-Jaisalmer-Jodhpur-Mount Abu-Ranakpur-Udaipur-Pushkar-Jaipur', 'Non-stop Rajasthan for fifteen days, giving you every bit of this vibrant state. From cuisines to castles from lakes to sand dunes, making this journey the never before experience. The comprehensive package tour is dedicated to the land of heros. Rajasthan is a destination where every step narrates the story of sacrifice and bravery. This tour is just an opportunity to interact with the people and see life from the close quarters.\r\n', '1.Stay in Non AC Room /AC Room on twin sharing basis with breakfast.\r\n2.All transfers and tour by AC Sedan car, driver allowance, fuel, GST on Transport only, toll tax and parking.', '1.Any Air/Train/Bus fare, Meals or services unless specified above,any personal expenses, any travel insurances, any Monument entrance fee,Guide fee, Sanctuary park Fees, porterage, Elephant ride at Amber, Boat Rjde at Udaipur, Any Camera Fee and any items not specifically forming a part of above package.\r\n2.The above package tour rales are not valid during Deepawali period, Christmas Period, New Vear p6riod,Desert Fair (Jaisalmer) and Pushkar fair (pushkar).\r\n3.Guests are requested to pay the difference of room rent at the Hotel (Plan tariff).lf package tour during period mention here above.\r\n4.GST/Taxes on Accommodation Part i.e. Room Tariff of Hotels is not included in this cost, Guest have to pay GST/Taxes at Every Hotel of city which covered in package at the time of Checkout.'),
(6, 'DESERT CIRCUIT', '(7 Nights /8 Days)', 'p6.jpg', 'Jaipur-Bikaner-Jaisalmer-Jodhpur via Ajmer- Pushkar-Jaipur', 'Non-stop Rajasthan for fifteen days, giving you This package foretells the mystifying stories of the sand dunes. Jaisalmer the city of memories, most celebrated for its exquisite stone carved Havelis and the Golden Citadel-the Jaisalmer Fort. This package makes an effort to explore various cultures which have evolved from the desert life styles.\r\n', '1.Stay in Non AC Room /AC Room on twin sharing basis with breakfast.\r\n2.All transfers and tour by AC Sedan car, driver allowance, fuel, GST on Transport only, toll tax and parking.', '1.Any Air/Train/Bus fare, Meals or services unless specified above,any personal expenses, any travel insurances, any Monument entrance fee,Guide fee, Sanctuary park Fees, porterage, Elephant ride at Amber, Boat Rjde at Udaipur, Any Camera Fee and any items not specifically forming a part of above package.\r\n2.The above package tour rales are not valid during Deepawali period, Christmas Period, New Vear p6riod,Desert Fair (Jaisalmer) and Pushkar fair (pushkar).\r\n3.Guests are requested to pay the difference of room rent at the Hotel (Plan tariff).lf package tour during period mention here above.\r\n4.GST/Taxes on Accommodation Part i.e. Room Tariff of Hotels is not included in this cost, Guest have to pay GST/Taxes at Every Hotel of city which covered in package at the time of Checkout.'),
(7, 'fsffewf', 'dasd', 'uploads/anand_sagar_lake.jpg', 'adbcjvjkf', 'bhihjoijop', 'gfhf', '13rjdbiusuhciusdhc'),
(10, 'sfhafhiasfa', 'dasd', 'alnia dam', 'adbcjvjkf', 'hgukhuil', 'hgilughyvv', 'ihihiohojh');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `registrationid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `address` text NOT NULL,
  `mobileno` text NOT NULL,
  `bdate` date NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  PRIMARY KEY (`registrationid`),
  FULLTEXT KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `password`, `registrationid`, `firstname`, `middlename`, `lastname`, `address`, `mobileno`, `bdate`, `gender`, `email`, `city`, `state`, `country`) VALUES
('keyuri', 'modi', 1, '', '', '', '', '0', '0000-00-00', '', '', '', '', ''),
('prini_1127', '123456', 56, 'Priya', 'Nitinbhai', 'Bhogayata', 'chhaya', '2147483647', '2019-05-11', 'female', 'p@gmail.com', 'porbandar', 'Gujrat', 'india'),
('bhumi', 'thanki', 55, 'bhumi', 'n', 'thanki', 'Old post office mg road porbandar', '2147483647', '2000-11-28', 'female', 'bhumithanki464146@gmail.com', 'porbandar', 'gujarat', 'india');
