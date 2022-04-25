-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 04:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_vechile`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `message`, `email`, `date`, `type`) VALUES
(2, 'fbbfbs', 'subasht854@gmail.com', '2019-04-10', 'old'),
(3, 'hello there', 'subasht854@gmail.com', '2019-04-28', 'old');

-- --------------------------------------------------------

--
-- Table structure for table `mesg`
--

CREATE TABLE `mesg` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `name`, `description`, `image`) VALUES
(1, 'Special 10% discount on ATV bike ride', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in consequat justo. Aenean non suscipit eros, vitae hendrerit quam. Nulla facilisi. Nulla placerat ultricies lectus, vel interdum lacus elementum eu.', ''),
(2, 'Special 10% discount on ATV bike ride', '              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in consequat justo. Aenean non suscipit eros, vitae hendrerit quam. Nulla facilisi. Nulla placerat ultricies lectus, vel interdum lacus elementum eu.', ''),
(3, 'Special 10% discount on ATV bike ride', '              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in consequat justo. Aenean non suscipit eros, vitae hendrerit quam. Nulla facilisi. Nulla placerat ultricies lectus, vel interdum lacus elementum eu.', ''),
(4, 'Special 10% discount on ATV bike ride', '              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in consequat justo. Aenean non suscipit eros, vitae hendrerit quam. Nulla facilisi. Nulla placerat ultricies lectus, vel interdum lacus elementum eu.', ''),
(7, 'Special 10% discount on ATV bike ride', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in consequat justo. Aenean non suscipit eros, vitae hendrerit quam. Nulla facilisi. Nulla placerat ultricies lectus, vel interdum lacus elementum eu.', '');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(10) NOT NULL,
  `pickup_date_time` varchar(255) NOT NULL,
  `return_date_time` varchar(255) NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `return_location` varchar(255) NOT NULL,
  `Booked_By_User` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `vechile_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `pickup_date_time`, `return_date_time`, `pickup_location`, `return_location`, `Booked_By_User`, `status`, `vechile_id`, `user_id`) VALUES
(14, 'April 17, 2019 6:00 PM', 'April 17, 2019 7:00 PM', 'Airport', 'Airport', 'laka', '', 9, 4),
(15, 'April 18, 2019 9:00 AM', 'April 19, 2019 11:00 PM', 'Airport', 'Airport', 'subashdaka', '', 7, 4),
(19, 'April 22, 2019 9:00 AM', 'April 23, 2019 2:00 PM', 'Airport', 'Airport', 'subashdaka', 'book', 4, 4),
(20, 'April 30, 2019 10:58 PM', 'May 2, 2019 6:00 AM', 'Airport', 'Airport', 'neymar', 'book', 1, 4),
(22, 'May 5, 2019 6:57 PM', 'May 5, 2019 11:00 PM', 'Airport', 'Airport', 'neymar', 'book', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rent_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `customer_name`, `product`, `amount`, `currency`, `status`, `created_at`, `rent_id`) VALUES
('ch_1ELcAoJARnGuHNljmt8z3p19', '9', 'daka', 'HONDA CBR 600 RENT FOR 5 DAYS', '10000', 'npr', 'succeeded', '2019-04-05 02:13:35', 15),
('ch_1EMM9bJARnGuHNljc2CjS9OS', '9', 'daka', 'HONDA CBR 600 RENT FOR 5 DAYS', '10000', 'npr', 'succeeded', '2019-04-07 03:19:24', 15),
('ch_1EMML6JARnGuHNljmFQn1DsO', '9', 'daka', 'HONDA CBR 600 RENT FOR 5 DAYS', '10000', 'npr', 'succeeded', '2019-04-07 03:31:16', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `acess_level` varchar(255) NOT NULL DEFAULT 'user',
  `acess_code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `hash_code` varchar(255) NOT NULL,
  `Registered_On` date NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `DOB`, `gender`, `contact_number`, `address`, `username`, `password`, `acess_level`, `acess_code`, `status`, `hash_code`, `Registered_On`, `type`) VALUES
(4, 'Subash', 'silva', 'subasht854@gmail.com', '1999-03-12', 'male', '9867190326', 'jorpati', 'neymar', '$2y$10$LRq8HsNVVZq4QtH8JujjeOI1gV6YT3Tbx18c4LOG6XuNsf/1qO19O', 'user', '', 'active', '', '2019-04-18', 'old'),
(7, '', '', 'bipin@12.com', '0000-00-00', '', '', '', 'baka', '$2y$10$c968geoAznt3lwMRbD.Yxub.OxKsq2v6nNItL2OHDHvmKNU2.0pRK', 'admin', '', '0', '', '2019-04-29', 'new'),
(8, 'chaka', '', 'subasht854@gmail.com', '0000-00-00', '', '', '', 'laka', '$2y$10$Kl43EKOSi0wtubRqAAGbTOFlQ4aIhhfvgAPqlgco2lDGeYdg56FDK', 'user', '', '0', '', '2019-04-07', 'old'),
(9, 'daka', 'singh', 'subasht854@gmail.com', '2019-04-12', 'male', '988775744', 'kanpur,delhi,IND', 'daka', '12', 'user', '', 'active', '', '2019-04-15', 'old'),
(10, '', '', 'subasht854@gmail.com', '0000-00-00', '', '', '', 'subash11', '$2y$10$h.igg2XDSw0DuKzhzqDf1.vR/7AVq/tsY5qOsJ1AcXbMgcX49fayu', 'user', '', 'unactive', '', '2019-04-20', 'old'),
(11, '', '', 'subasht854@gmail.com', '0000-00-00', '', '', '', 'subash22', '$2y$10$y3mEBhBRcMdmCxcdqrDLdupJ5EI75NH7bMSavuhtC5gtYz3TuHndG', 'user', '', 'unactive', '91131731', '2019-04-01', 'old'),
(12, 'subash', 'thapa', 'subasht854@gmail.com', '2019-04-18', 'male', '131231', 'sss,kathmandu', 'hahah', '$2y$10$btO.EJYfRa1XCR6TarIgsOdln.D8hvcP/cQKb.mfHwe6tChdJ2YQa', 'user', '', 'active', '11695', '2019-04-05', 'old'),
(13, '', '', 'subasht854@gmail.com', '0000-00-00', '', '', '', 'subash', '$2y$10$2otiJP0/QGa58luUcddCh.OSo9p7Dqp3favr6ijm140a8rtITYDLm', 'user', '', 'unactive', '26762', '0000-00-00', 'old'),
(14, '', '', 'kcgaytri09@gmail.com', '0000-00-00', '', '', '', 'subash111', '$2y$10$8pZoM44XD2g39hz9wuo/QertdY4m3WppC55lgMG.xYAWwR33i1c32', 'user', '', 'unactive', '12162', '0000-00-00', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `vechile`
--

CREATE TABLE `vechile` (
  `vechile_id` int(11) NOT NULL,
  `vechile_name` varchar(255) NOT NULL,
  `regestration_Number` int(10) NOT NULL,
  `vechile_type` varchar(255) NOT NULL,
  `engine_type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `no_of_seat` int(10) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vechile`
--

INSERT INTO `vechile` (`vechile_id`, `vechile_name`, `regestration_Number`, `vechile_type`, `engine_type`, `price`, `mileage`, `description`, `no_of_seat`, `image`) VALUES
(1, 'BMW M6 Gran Coupe', 647677878, 'Car', 'Disel', 10, '47.5kmpl', 'The 2019 BMW M6 Gran Coupe is a high-performance luxury sedan available in a single trim level.', 4, 'usc90bmc531a021001.png'),
(2, 'Mercedes-Benz', 647677878, 'Car', 'Disel', 10, '47.4kmpl', 'The 2019 BMW M6 Gran Coupe is a high-performance luxury sedan available in a single trim level. It stands apart visually from other 6 Series Gran Coupes with di', 2, 'usc70mbcbd1a021001.png'),
(3, 'Land Rover Discovery', 53656974, 'Car', 'Disel', 10, '47.4kmpl', 'The Land Rover Discovery Sport has 1 Diesel Engine and 1 Petrol Engine on offer. The Diesel engine is 1999 cc while the Petrol engine is 1997 cc. It is availabl', 6, 'usc70lrs011b021001.png'),
(4, 'Range Rover Sport', 53656974, 'Car', 'Disel', 10, '47.4kmpl', 'A new plug-in hybrid, the Range Rover Sport P400e, features an electric motor, a lithium-ion battery pack and a gas four-cylinder engine. Total system output is', 4, 'usc80lrs071c021001.png'),
(5, 'HONDA CRF250L', 77778890, 'Motor Bike', 'petrol', 5, '44 kmpl', 'A machine made for the serious dual-sportthat’s directly linked to the HRC CRF450 RALLY Dakar racer, the CRF250 RALLY has the look of a competitive desert racer', 2, 'honda-crf.png'),
(6, 'HONDA XR150L', 2147483647, 'Motor Bike', 'petrol', 5, '44 kmpl', 'The XR 150L is designed for riders who dare to feel more. The dual-purpose motorcycle is perfectly suited for its two functions, unpaved or paved city roads and', 2, 'Honda-XR-.png'),
(7, 'Royal Enfield Classic 500', 2147483647, 'Motor Bike', 'Petrol', 5, '44 kmpl', 'Power is drawn from a 499cc, single cylinder, 4-stroke Twinspark engine producing top power and torque of 27.2bhp at 5250rpm along with 41.3Nm of torque at 4000', 2, 'royal-enfield-classic-500-tan-500x500.png'),
(8, 'Yamaha FZ S', 2147483647, 'Motor Bike', 'Petrol', 5, '44 kmpl', 'The FZ-S Version 2.0 highlights the style quotient with new colours and graphics. There is no change in the design and the rest of the model is pretty much the ', 2, 'yamaha_17fzsfi_lightningcyan.png'),
(9, 'KAWASAKIâ€™S NEW KVF300 ATV', 2147483647, 'ATV Bike', 'Disel', 8, '30KMPL', 'The adage â€œGood things come in small packagesâ€ is exemplified by the KVF300. Designed not only to meet strict company standards for safety and reliability.', 1, 'Quad-Bike-Transparent-Background-PNG-1.png'),
(10, 'SUZUKI Quad Sport Z400', 2147483647, 'ATV Bike', 'Disel', 8, '30KMPL', '398cm3, i-cyclinder, LIQUID-COOLED, DOHC, aluminium-alloy engine with flat torque curveand strong response over a wide rpm range, Lightweight engine faetures a ', 1, 'Quad-Bike-Transparent-Images-1 (2).png'),
(11, 'ELIMINATOR 4WD ELECTRIC QUAD', 2147483647, 'ATV Bike', 'Electric', 10, '30KMPL', 'The bike comes with all of Eco Chargerâ€™s key features â€“ \'Charge and hours indicator\', emergency stop button and the versatile forward/reverse flick switch. ', 1, 'Quad-Bike-Transparent-Image-1 (2).png'),
(12, 'Airborne GOBLIN 29', 647676163, 'Bicycle', 'none', 5, '', 'Race ready and built for the long haul, the Airborne Goblin 29er is the riderâ€™s choice for a true MTB experience.', 1, 'bicycle-png-black-bicycle-png-transparent-image-463.png'),
(13, 'Megatower CC Sanata cruz', 2147483647, 'Bicycle', 'none', 5, '', 'The Megatower is the fusion of big wheels and the biggest-hitting suspension system. Itâ€™s a modern day brawler, as suited to diehard racers as it is to riders wanting to conquer their hometown trails.', 1, 'Bicycle-PNG-Background-Image (1).png'),
(14, 'Airborne GUARDIAN 29', 17617674, 'Bicycle', 'None', 5, '', 'Cross-country or across town, the Guardian 29 is our answer to an affordable, all-purpose MTB. ', 1, 'airborne-guardian-green-angle_2000x.png'),
(15, '2019 BMW 230', 2147483647, 'Car', 'Disel', 100, '44 kmpl', 'Very Comfortable for ride and best among the luxury cars.The 2-series is a premium compact with typical BMW refinement and balanced performance.', 4, 'usc80bmc793a021001 (1).png'),
(16, '2019 Audi RS 5', 2147483647, 'Car', 'Disel', 10, '44 kmpl', 'The Audi A5 and its siblings were redesigned for 2018 and are derived from the A4 sedan. The A5 and S5 come in coupe, convertible and four-door hatchback (Sportback) body styles; the high-performance RS5 comes in coupe and Sportback body styles.', 5, 'usc90auc292a021001.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesg`
--
ALTER TABLE `mesg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `vechile_id` (`vechile_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rent_id` (`rent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vechile`
--
ALTER TABLE `vechile`
  ADD PRIMARY KEY (`vechile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mesg`
--
ALTER TABLE `mesg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vechile`
--
ALTER TABLE `vechile`
  MODIFY `vechile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`vechile_id`) REFERENCES `vechile` (`vechile_id`),
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`rent_id`) REFERENCES `rent` (`rent_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
