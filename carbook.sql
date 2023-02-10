-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 04:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rating` int(11) NOT NULL,
  `hour` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `company`, `description`, `rating`, `hour`, `day`, `month`, `pic`) VALUES
(1, 'Mercedes-Benz SLC-Class', 'Mercedes', 'The Mercedes-Benz SLC-Class is a luxury roadster that offers a stylish and sophisticated design, with its iconic retractable hardtop roof and sporty profile. It is equipped with powerful and efficient engines, ranging from four-cylinder to V6 and V8 options. The interior is luxurious, with a range of advanced technology and safety features, including a comprehensive infotainment system and driver assistance systems. The SLC-Class offers a comfortable and refined driving experience, with smooth power delivery, precise handling, and a well-tuned suspension. It is a great choice for those seeking a convertible car that provides an enjoyable driving experience while combining luxury and style.', 3, 10, 90, 500, 'car-1.jpg'),
(2, 'Rang Rover Evoque', 'Rang Rover', 'The Range Rover Evoque is a compact luxury SUV that offers stylish and modern design, with its distinctive coupe-like roofline and sporty profile. It is available in front-wheel drive or all-wheel drive configurations and is equipped with a range of efficient engines, including mild-hybrid options. The interior is spacious and luxurious, with high-quality materials and advanced technology features such as a large infotainment display and a digital driver display. The Evoque offers a comfortable and capable driving experience, with smooth and responsive handling, a well-tuned suspension, and advanced off-road capabilities. It is a great choice for those seeking a premium SUV that combines style, performance, and versatility.', 4, 15, 120, 600, 'car-2.jpg'),
(3, 'McLaren 720S', 'McLaren', 'The McLaren 720S is a high-performance supercar that offers a bold and aerodynamic design, with its sleek and futuristic profile. It is equipped with a powerful 4.0-liter V8 engine that delivers astonishing acceleration and performance. The interior is stylish and functional, with premium materials and advanced technology features such as a large infotainment display and a digital driver display. The 720S offers a thrilling and exhilarating driving experience, with its sharp and precise handling, excellent balance and grip, and advanced aerodynamics. It is a great choice for those seeking a supercar that offers unrivaled performance and cutting-edge technology.', 4, 20, 150, 750, 'car-3.jpg'),
(4, 'Ford Mustang', 'Ford', 'The Ford Mustang is an iconic American muscle car that offers a bold and aggressive design, with its classic long hood and short deck profile. It is available in a range of powertrains, including V8 engines, turbocharged four-cylinders, and electric options. The interior is spacious and modern, with premium materials and advanced technology features such as a large infotainment display and a digital driver display. The Mustang offers a fun and engaging driving experience, with its powerful engines, sharp and responsive handling, and well-tuned suspension. It is a great choice for those seeking an affordable sports car that offers style, performance, and versatility.', 3, 13, 95, 550, 'car-4.jpg'),
(5, 'BMW 3 Series', 'BMW', 'The BMW 3 Series is a compact executive car manufactured by the German automaker BMW. It is the successor to the 02 Series and has been produced in seven different generations. The 3 Series is BMW\'s best-selling model, accounting for around 30% of the brand\'s annual sales. It is known for its balanced handling, powerful engines, and premium interior quality. The latest iteration of the 3 Series features a sleek exterior design, spacious and well-equipped cabin, and advanced technology including a large touch screen display and a range of advanced driver assistance systems. The 3 Series is offered in a variety of body styles, including sedan, wagon, and Gran Turismo, and is available with a range of gasoline and diesel engines.', 3, 8, 70, 400, 'car-5.jpg'),
(6, 'Alfa Romeo 4C', 'Alfa Romeo', 'The Alfa Romeo 4C is a compact, rear-wheel drive sports car produced by the Italian automaker Alfa Romeo. It was first introduced in 2013 and is still in production today. The 4C is notable for its lightweight design, weighing less than a ton, and its low center of gravity. This, combined with a powerful turbocharged engine, results in sharp handling and thrilling performance. The car\'s sleek, aerodynamic body is made of carbon fiber and its interior is minimalistic and driver-focused, with sporty bucket seats and a small steering wheel. The Alfa Romeo 4C is a limited-production model, with only a few thousand units produced each year. It is a rare and distinctive sports car that appeals to enthusiasts who value driving purity and Italian style.', 5, 22, 160, 770, 'car-6.jpg'),
(7, 'Mercedes-Benz S-Class', 'Mercedes', 'The Mercedes-Benz S-Class is a line of luxury vehicles produced by the German automaker Mercedes-Benz. It is the company\'s flagship model and is known for its high-end features, premium materials, and advanced technology. The S-Class has a spacious and elegant interior, with premium leather upholstery, wood trim, and advanced infotainment technology. The latest models feature large touchscreen displays, advanced driver assistance systems, and cutting-edge connectivity features. The S-Class is available in several different body styles, including sedan, coupe, cabriolet, and limousine, and is offered with a range of powerful engines. The S-Class is widely regarded as one of the finest luxury cars on the market and is a benchmark in its segment.', 3, 10, 90, 500, 'car-7.jpg '),
(8, 'Jeep Wrangler', 'Jeep', 'The Jeep Wrangler is a compact SUV that is known for its rugged capabilities and distinctive styling. It has been in production since the 1940s and is considered an icon of the off-road community. The Wrangler features a boxy, no-nonsense design with removable doors and a fold-down windshield for ultimate open-air driving. The latest models are equipped with advanced off-road technology, including locking differentials, skid plates, and a high-clearance suspension. The Wrangler is offered with a choice of powerful engines, including a turbocharged four-cylinder and a V6, and is available in both two- and four-door configurations. The interior of the Wrangler is functional and durable, with waterproof materials and features that are built to withstand the rigors of off-road use. Overall, the Jeep Wrangler is a capable and iconic vehicle that appeals to outdoor enthusiasts and off-road adventurers.', 5, 22, 160, 770, 'car-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `Airconditions` int(11) NOT NULL,
  `Child_Seat` int(11) NOT NULL,
  `GPS` int(11) NOT NULL,
  `Luggage` int(11) NOT NULL,
  `Music` int(11) NOT NULL,
  `Seat_Belt` int(11) NOT NULL,
  `Sleeping_Bed` int(11) NOT NULL,
  `Water` int(11) NOT NULL,
  `Bluetooth` int(11) NOT NULL,
  `Onboard_computer` int(11) NOT NULL,
  `Audio_input` int(11) NOT NULL,
  `Long_Term_Trips` int(11) NOT NULL,
  `Car_Kit` int(11) NOT NULL,
  `Remote_central_locking` int(11) NOT NULL,
  `Climate_control` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `car_id`, `Airconditions`, `Child_Seat`, `GPS`, `Luggage`, `Music`, `Seat_Belt`, `Sleeping_Bed`, `Water`, `Bluetooth`, `Onboard_computer`, `Audio_input`, `Long_Term_Trips`, `Car_Kit`, `Remote_central_locking`, `Climate_control`) VALUES
(1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1),
(2, 2, 0, 1, 1, 1, 1, 0, 0, 1, 1, 0, 1, 1, 0, 0, 1),
(3, 3, 1, 0, 0, 1, 1, 0, 1, 0, 0, 1, 1, 0, 1, 1, 0),
(4, 4, 1, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 0, 1, 1, 1),
(5, 5, 1, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 6, 0, 0, 1, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0),
(7, 7, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0),
(8, 8, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 1, 1, 1, 1, 0),
(9, 9, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `pick_location` varchar(255) NOT NULL,
  `drop_location` varchar(255) NOT NULL,
  `pick_date` varchar(255) NOT NULL,
  `drop_date` varchar(255) NOT NULL,
  `pick_time` varchar(255) NOT NULL,
  `reserve_date` varchar(255) NOT NULL,
  `trip_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `user_id`, `car_id`, `pick_location`, `drop_location`, `pick_date`, `drop_date`, `pick_time`, `reserve_date`, `trip_status`) VALUES
(1, 1, 2, 'alex', 'kafr', '2/1/2023', '2/14/2023', '12:00am', '2023/02/08 16:46:40', 'Approved'),
(2, 1, 2, 'motobs', 'matroh', '1/30/2023', '2/3/2023', '12:30am', '2023/02/08 16:47:27', 'Processing'),
(3, 3, 6, 'Aswan', 'Alex', '2/11/2023', '2/14/2023', '2:30am', '2023/02/10 16:03:52', 'Finished'),
(4, 3, 6, 'Assiut', 'Sharm Elsheikh', '2/16/2023', '2/21/2023', '6:00am', '2023/02/10 16:04:31', 'Approved'),
(5, 4, 2, 'Rasheed', 'Tanta', '2/18/2023', '2/22/2023', '12:00am', '2023/02/10 16:05:49', 'Finished'),
(6, 6, 3, 'El mahala', 'Rasheed', '2/15/2023', '2/21/2023', '8:00pm', '2023/02/10 16:07:14', 'Processing'),
(7, 4, 1, 'fowa', 'motobs', '2/3/2023', '2/22/2023', '2:30am', '2023/02/10 16:19:56', 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `address`, `phone`, `admin`) VALUES
(1, 'Eslam', 'Mohamed', 'eslam@gmail.com', '12345678', 'Alex', '01221805839', 1),
(2, 'Ali', 'Mostafa', 'ali@gmail.com', '12345678', 'kafr elshiekh/ motobs', '0123456789', 1),
(3, 'Amr', 'Mohamed', 'amr@gmail.com', '12345678', 'Alex', '01111111111', 0),
(4, 'Ahmed', 'mostafa', 'Ahmed@gmail.com', '12345678', 'Rasheed', '+315255625268', 0),
(5, 'Khaled', 'Mohamed', 'khaled@gmail.com', '12345678', 'Motobs', '01060435777', 0),
(6, 'Zeyad', 'adel', 'zeyad@gmail.com', '12345678', 'El-mahala', '012211111111', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
