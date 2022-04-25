-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2022 at 11:50 AM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahsas`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'HERITAGE RING GOLD', 170.00, 'WOMEN RINGS', '2022-04-15 09:12:50', '2022-04-15 09:12:50', 'Gold Toned Brass\r\nHigh Polish Yellow Gold Plated\r\n\r\nAny gold plated surface has a certain lifespan but with proper care you can prolong its life; Avoid swimming, sweating and high humidity. Remove at nights and store away. Keep your gold plated jewelry away from chemicals, lotions and cleaning products.', 'HERITAGE_RING_thumb.jpg', 'HERITAGE_RING_1.jpg,HERITAGE_RING_2.jpg'),
(2, 'EMPIRE NECKLACE', 145.00, 'WOMEN NECKLACES ', '2022-04-15 09:16:29', '2022-04-15 09:16:29', '18K Polished Gold Plated Stainless Steel\r\nPolished Gold Plated\r\n\r\n18K Gold plated steel necklace - 16-17 inch / 40-43 cm Length adjustable\r\n\r\n \r\n\r\nPlease note that necklaces with protective wrap are non-returnable / non-exchangeable for reasons of hygiene and safety. ', 'EMPIRE_NECKLACE_thumb.jpg', 'EMPIRE_NECKLACE_1.jpg,EMPIRE_NECKLACE_2.jpg,EMPIRE_NECKLACE_3.jpg,EMPIRE_NECKLACE_4.jpg'),
(3, 'LOVE LOCK BRACELET ', 115.00, 'WOMEN SOLID BRACELETS', '2022-04-15 09:24:02', '2022-04-15 09:24:02', '18k Gold Plated Stainless Steel\r\nHigh Polish Yellow Gold Plated\r\n\r\nAdjustable 18k Gold Plated Bracelet.', 'LOVE_LOCK_BRACELET_thumb.jpg ', 'LOVE_LOCK_BRACELET_1.jpg'),
(4, 'CLASSIC II EARRING', 110.00, ' WOMEN EARRINGS', '2022-04-15 09:26:06', '2022-04-15 09:26:06', 'Pair of 18k Polished Yellow Gold Plated Earrings\r\nPolished Yellow Gold\r\n\r\n18k Polished gold plated earrings. The earrings approximately measure: 30 x 30 mm with 3mm thickness\r\n\r\n \r\n\r\nPlease note that earrings are non-returnable / non-exchangable for reasons of hygiene and safety. ', 'CLASSICII_EARRING_thumb.jpg', 'CLASSICII_EARRING_1.jpg'),
(5, 'BLACK CAVIAR CLUTCH', 425.00, ' WOMEN HANDBAG', '2022-04-15 09:29:15', '2022-04-15 09:29:15', 'Finest re-enforced hard shell clutch / Brushed Gold Buckle\r\nComes with a hard cushioned box\r\n\r\nConstructed of the finest reinforced hard shell clutch with embossed micro-leather decoration. The solid buckle is matte gold finish. This clutch comes with a protective dust bag and cushioned hard case for storage and it measures 20x12x6cm approximately.\r\n\r\nDue to limited availability this is not returnable or exchangable.', 'BLACK_CAVIAR_CLUTCH_thumb.jpg', 'BLACK_CAVIAR_CLUTCH_1.jpg,BLACK_CAVIAR_CLUTCH_2.jpg,BLACK_CAVIAR_CLUTCH_3.jpg'),
(6, 'SORAYA II - BUCKET BAG', 370.00, ' WOMEN HANDBAGS ', '2022-04-15 09:32:45', '2022-04-15 09:32:45', 'Canvas & Genuine Leather\r\nComes with a dust bag and a box\r\n\r\nNIMANY\'s newelry released bucket bag design is a refrence to the classic french beauty cases of royal families. The modern interpretation of this classical beauty with NIMANY\'s signature Shahname paintings make this a unique bag. This stylish compact bag comes with a top handle and a long, adjustable strap, the bag can be styled to number of looks.\r\n\r\n5.8 x 6.5 x 5.8 inches\r\n(Length x Height x Width)\r\n\r\nL 5.8 x H 6.5 x W 5.8 inches \r\nHigh grade canvas body with 100% Genuine leather\r\nSuede lining\r\nHigh polish gold plated hardware\r\nTop handle for hand carry\r\nRemovable and adjustable leather strap for shoulder or cross-body carry\r\nZipped closure\r\nGold plated Lock and a key\r\n4 protective bottom studs', 'SORAYA II_ BUCKET BAG_thumb.jpg', 'SORAYA II_ BUCKET BAG_1.jpg,SORAYA II_ BUCKET BAG_2.jpg,SORAYA II_ BUCKET BAG_3.jpg'),
(7, 'LEILI', 155.00, ' WOMEN FRAGRANCE', '2022-04-15 09:35:58', '2022-04-15 09:35:58', 'Leili by NIMANY. A Perfume for women. A dangerous game between softness and intensity, between black and white. A fragrance as bewitching as it is enchanting. First white, this fragrance is built on a blends of white flowers. Tuberose, the most tempting and carnal of the white flower is at the center. She exudes her sensual, creamy and voluptuous scent with an aphrodisiacal character.Then, this fragrance reveals its dark side with addictive notes of tonka beans and woods. A seductive and dangerous fragrance leaving an obsessional trail. \r\n\r\nAll fragrances are Non-Refundable and Non-Exchangeable.', 'LEILI_thumb.jpg', 'LEILI_1.jpg'),
(8, 'COULEUR DE MONACO II', 160.00, ' Women Cashmere', '2022-04-15 09:38:44', '2022-04-15 09:38:44', 'Wool Cashmere blend\r\n14 Color Trasnfer print\r\n\r\nCouleur de Monaco II is part of limited edition prints of original art works with signature. These pieces have been produced by carefully scanning each art work, in a state of the art facility and re-printing on fine luxurious cotton viscose to create rich and long lasting colors with hand hemming details. \r\n\r\nApprox. 130 x 130 cm (52 x 52 Inch).\r\nMay be styled multiple ways.\r\nHand-Hemming finishes.\r\nHandmade Cashmere Wool Blend.\r\nDesigned in New York City.', 'COULEUR_DE_MONACO_II_thumb.jpg', 'COULEUR_DE_MONACO_II_1.jpg,COULEUR_DE_MONACO_II_2.jpg,COULEUR_DE_MONACO_II_3.jpg'),
(9, 'MAJNOON', 155.00, ' MEN FRAGRANCE', '2022-04-15 09:40:16', '2022-04-15 09:40:16', 'Majnoon by NIMANY. A Perfume for men. The everlasting legend of the night. The effervescence has reached its climax. All eyes are on him. His fragrance celebrates his power to captivate senses endlessly through the epitome of indelible and deep masculinity: the agarwood. An extremely long-lasting and rich scent underlined by spicy, aromatic and leathery facets. This majestic Oud is underlined by an overdose of oriental notes featuring a second skin effect in this warm and intoxicating atmosphere. \r\n\r\nAll fragrances are Non-Refundable and Non-Exchangeable.', 'MAJNOON_thumb.jpg', 'MAJNOON_1.jpg'),
(10, 'BERLIN BRACELET MEN', 145.00, 'MEN LEATHER BRACELETS', '2022-04-15 09:43:02', '2022-04-15 09:43:02', '(BEIGE / GOLD)\r\n\r\nGenuine Leather & Stainless Steel Hardware\r\nTanned Leather with Polished Gold\r\n\r\nGenuine leather with polished gold plated high grade stainless steel hardware, comes in protective velvet pouch and a secure hard box. Adjustable for popular mens sizes or large woman sizes.', 'BERLIN_BRACELET_MEN_thumb.jpg', 'BERLIN_BRACELET_MEN_1.jpg'),
(11, 'BRUSHED GOLD-PLATED RING', 130.00, 'MEN RINGS', '2022-04-15 09:47:02', '2022-04-15 09:47:02', '24k Gold Plated\r\nGold Plated & Brushed\r\n\r\nAny gold plated surface has a certain lifespan but with proper care you can prolong its life; Avoid swimming, sweating and high humidity. Remove at nights and store away. Keep your gold plated jewelry away from chemicals, lotions and cleaning products.', 'BRUSHED_GOLD-PLATED_RING_thumb.jpg', 'BRUSHED_GOLD-PLATED_RING_1.jpg'),
(12, 'GRAFFITI MIDNIGHT TIE', 155.00, 'MEN TIES', '2022-04-15 09:50:28', '2022-04-15 09:50:28', '100% Handmade Silk\r\nMulti Color Embroidery on Navy Silk Tie\r\n\r\nNIMANY ties are truly a luxury item from creation to delivery. Each piece is cut by hand from generous blocks of the finest silks, and sewn individually into a perfect shape. All patterns are embroidered with multi-color fine threads. All ties are inspected, gently hand pressed, and wrapped for packaging.  The finished piece comes with a protective hard-shell cover box, ready for delivery. Medium width.', 'GRAFFITI_MIDNIGHT_TIE_thumb.jpg', 'GRAFFITI_MIDNIGHT_TIE_1.jpg,GRAFFITI_MIDNIGHT_TIE_2.jpg,GRAFFITI_MIDNIGHT_TIE_3.jpg,GRAFFITI_MIDNIGHT_TIE_4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;