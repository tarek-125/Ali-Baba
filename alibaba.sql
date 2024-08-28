-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 02:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alibaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`) VALUES
(1, 2, 56),
(2, 3, 17),
(3, 3, 30),
(4, 3, 29),
(5, 3, 42),
(6, 3, 23),
(7, 3, 27),
(8, 3, 40),
(9, 2, 19),
(10, 6, 55),
(11, 6, 30),
(12, 6, 1),
(19, 2, 51),
(21, 2, 61),
(22, 2, 23);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Air-forward` varchar(140) NOT NULL,
  `price` varchar(40) NOT NULL,
  `min-order` varchar(40) NOT NULL,
  `image` varchar(140) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Air-forward`, `price`, `min-order`, `image`, `category`) VALUES
(1, 'Custom takeaway charcuterie food box,paper disposable food container packaging,brunch lunch grazing platter boxes window lid', '$0.01', '2 pieces', '/Ali Baba/busnisse-service/image-packaging/images-1.jpg', 'packaging'),
(2, '450ML Hello Master Frosted Custom Water Glass Bottle', '$0.25 - $0.35', '1000 pieces', '/Ali Baba/busnisse-service/image-packaging/images-2.jpg', 'packaging'),
(3, 'Custom High Quality Colorful PVC Digital Print Exclusive Business Card With Chip', '$0.05 - $0.10', '500 pieces', '/Ali Baba/busnisse-service/image-packaging/images-3.jpg', 'packaging'),
(4, 'Free Samples Cardboard Clamshell Type Glossy Square Black Gift Storage Candle Paper Box Packaging Boxes For Candles', '$0.05 - $0.10', '2 pieces', '/Ali Baba/busnisse-service/image-packaging/images-4.jpg', 'packaging'),
(5, 'Custom print logo design print eco friendly disposable cardboard cold drink hot coffee paper cup with lid sleeve holder takeaway', '$0.01', '2 pieces', '/Ali Baba/busnisse-service/image-packaging/images-5.jpg', 'packaging'),
(6, 'Minfly Digital Printing Custom Heat PVC PET Shrink Sleeve Labels for 12 oz Craft Beer Cans and Water Bottle Wrap', '$0.01 - $0.10', '50 pieces', '/Ali Baba/busnisse-service/image-packaging/images-6.jpg', 'packaging'),
(7, 'Custom Logo Luxury Cardboard Double Open Door Paper Packaging Rigid Gift Gate Fold Boxes', '$0.13', '300 pieces', '/Ali Baba/busnisse-service/image-packaging/images-7.jpg', 'packaging'),
(8, 'Everich ODM Design Double wall Insulated Stainless Steel 40oz Tumbler with Handle Leak-proof Lid and Straw Travel coffee mug', '$0.83 - $1.10', '2 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images.jpg', 'home-Garden'),
(9, '380Ml 510Ml Smart Temperature Display Stainless Steel Coffee Cup Double Wall Travel Office Coffee Vacuum Cup With Lid', '$0.68 - $0.99', '20 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-1.jpg', 'home-Garden'),
(10, '30 bubble candle mold candle making molds designer candle mold', '$2.50 - $4.50', '3 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-2.jpg', 'home-Garden'),
(11, 'Cheap Wholesale Glass Hubbly Shesha Portable Hookahs Flavor Pen Shisha Hookah Set With_Accessories', '$4.00 - $35.00', '2 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-4.jpg', 'home-Garden'),
(12, 'epoxy resin coaster butterfly silicone molds for epoxy', '$1.53 - $12.56', '2 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-3.jpg', 'home-Garden'),
(13, 'HOT Selling 40 Oz Cup Double Wall Stainless Steel Vacuum Insulated Mug Travel 40oz Tumbler With Handle Lid Straw In Stock', '$2.00 - $3.00', '2 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-6.jpg', 'home-Garden'),
(14, 'One and Only Unique Shisha Hookah in Specially Designing', '$4.45', '120 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-7.jpg', 'home-Garden'),
(15, 'New Molding 40oz Stainless Steel Vacuum Insulated Tumbler with handle Travel Mug Eco-friendly Upgraded Vacuum Insulated Travel', '$1.59 - $1.99', '2 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-8.jpg', 'home-Garden'),
(16, 'Wholesale Arab Portable Hookah Cup Stem Detachable Cleaning Hookah Portable Household Car Hookah Cups', '$6.85 - $8.55', '2 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-9.jpg', 'home-Garden'),
(17, 'Custom Logo USB Office Home Gift Smart Ceramic Warmer Cup Heater Heating Pad Temperature Control Water Coffee Mug Set', '$1.44 - $1.50', '19 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-10.jpg', 'home-Garden'),
(18, 'Customize Macaron Nice advertising gift glass liner creative water thermos simple department store student bottle with handle', '$0.28 - $0.30', '5 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-11.jpg', 'home-Garden'),
(19, '8 colors narguil wholesale X custom hookah set portable shisha hookah LED chicha complet with custom portable bag', '$8.09 - $10.70', '2 sets', '/Ali Baba/busnisse-service/image-home-Garden/images-12.jpg', 'home-Garden'),
(20, 'Gourde enfant Manufacturer Cheap Hiking Outdoor Hot Cold Water Children Cute Gift Drinkware Sport Glass Water Bottle', '$0.17 - $0.36', '1000 pieces', '/Ali Baba/busnisse-service/image-home-Garden/images-13.jpg', 'home-Garden'),
(23, 'COEOVO free sample private label matte glossy mini lip gloss shine lipgloss vegan lip gloss lipstick set nude lip gloss', '$0.35', '10 pieces', '/Ali Baba/busnisse-service/image-Beauty/images-1.jpg', 'Beauty'),
(24, 'Free Sample Private Label 24 Pcs Professional Makeup Brush Eyeshadow Foundation Powder Cosmetic tools Makeup Brush set Tools Kit', '$1.70', '1 bag', '/Ali Baba/busnisse-service/image-Beauty/images-2.jpg', 'Beauty'),
(25, '2020 hot sell IPL Machine Laser Device Portable Fast and Pain free Super Laser Hair Removal Handset', '$6.90', '1 pieces', '/Ali Baba/busnisse-service/image-Beauty/images-3.jpg', 'Beauty'),
(26, 'Private Label Feminine Hygiene Products Disposable Menstrual Pads Non Woven Sanitary Napkin', '$0.01', '', '/Ali Baba/busnisse-service/image-Beauty/images-4.jpg', 'Beauty'),
(27, 'Wax Heater Hair Removal Cream Heater 100g Wax Beans Wax Machine Warmer Heater Professional Mini SPA Hands Feet', '$1.00', '1pieces', '/Ali Baba/busnisse-service/image-Beauty/images-5.jpg', 'Beauty'),
(28, 'Natural private label eyebrow soap cruelty free brow styling soap gel set eyebrow enhancer mascara brow freeze wax', '$0.98', '50 pices', '/Ali Baba/busnisse-service/image-Beauty/images-6.jpg', 'Beauty'),
(29, 'Custom Logo Small Round Hand Pocket Mirror Keychain Cosmetic Mini Key Chain Vanity Espejo Makeup Mirrors', '$0.29', '2 pieces', '/Ali Baba/busnisse-service/image-Beauty/images-7.jpg', 'Beauty'),
(30, 'living room sofas sets with barber mirror station of small pillow for sofa waiting chair', '$1.00', '5 sets', '/Ali Baba/busnisse-service/image-Beauty/images-8.jpg', 'Beauty'),
(38, 'Djibouti/Malaysia/Saudi Arabia/lebanon/U', '0.5', '1', '/Ali Baba/busnisse-service/image-database/image-1.jpg', 'busnisse-service'),
(39, 'Sea Freight Forwarder From China To USA ', '0.6000000238418579', '21', '/Ali Baba/busnisse-service/image-database/images-2.jpg', 'busnisse-service'),
(40, 'Shipping Cost/Price Difference for Andro', '9.989999771118164', '1', '/Ali Baba/busnisse-service/image-database/images-3.jpg', 'busnisse-service'),
(41, 'Shenzhen forwarder offer dubai custom cl', '0.5', '1', '/Ali Baba/busnisse-service/image-database/images-4.jpg', 'busnisse-service'),
(42, 'Inspection Service shipping e-packet age', '0.5', '1', '/Ali Baba/busnisse-service/image-database/images-5.jpg', 'busnisse-service'),
(43, 'Quality Checking Before Shipment/pre-shi', '29', '1', '/Ali Baba/busnisse-service/image-database/images-6.jpg', 'busnisse-service'),
(44, 'Dropshipping agents Door to door DHL shi', '0.20999999344348907', '10', '/Ali Baba/busnisse-service/image-database/images-7.jpg', 'busnisse-service'),
(45, 'shipping service air freight forwarder d', '0.5899999737739563', '1', '/Ali Baba/busnisse-service/image-database/images-8.jpg', 'busnisse-service'),
(46, 'China To Saudi Arabia Used Container Shi', '39', '1', '/Ali Baba/busnisse-service/image-database/images-9.jpg', 'busnisse-service'),
(47, 'Quality Inspection shipping agent provid', '0.5', '1', '/Ali Baba/busnisse-service/image-database/images-10.jpg', 'busnisse-service'),
(48, 'Inspection International Shenzhen logist', '1.2000000476837158', '1', '/Ali Baba/busnisse-service/image-database/images-11.jpg', 'busnisse-service'),
(49, 'Low price DDP DDU fcl lcl door to door l', '0.6000000238418579', '1', '/Ali Baba/busnisse-service/image-database/images-12.jpg', 'busnisse-service'),
(50, 'Shipping Company China To Pakistan Agent', '0.800000011920929', '1', '/Ali Baba/busnisse-service/image-database/images-13.jpg', 'busnisse-service'),
(51, 'Air shipping service China Top 10 Freigh', '0.5', '1', '/Ali Baba/busnisse-service/image-database/images-14.jpg', 'busnisse-service'),
(52, 'Best ddp ddu sea Rate FCL/LCL Shipping f', '10', '100', '/Ali Baba/busnisse-service/image-database/images-15.jpg', 'busnisse-service'),
(53, 'Manufacturer Smart Tv Television 24 32 40 43 50 55 65 Inch LED Tv With Android WiFi', '$37.72 - $51.69', '1', '/Ali Baba/busnisse-service/image-consumer-electronics/images.jpg', 'consumer-electronics'),
(54, 'HD Output Retro Classic Gaming Console Wireless Controller Arcade Game Station with PS5 style 3D 4K Video Game Consoles for ps5', '$26.10 - $30.15', '1', '/Ali Baba/busnisse-service/image-consumer-electronics/images-1.jpg', 'consumer-electronics'),
(55, 'Case for Xiaomi Pad 5 Pad 5 Pro 11inch BT Wireless Keyboard Cover With Russian Spanish English Korean Arabic Keyboard', '$8.79 - $11.89', '1', '/Ali Baba/busnisse-service/image-consumer-electronics/images-2.jpg', 'consumer-electronics'),
(56, 'Usb Wired Rgb Colorful Lighting Effect X2 Computer Speakers For Computer Audio Multimedia Usb Subwoofer Desktop Game Audio', '$2.40 - $2.60', '10', '/Ali Baba/busnisse-service/image-consumer-electronics/images-3.jpg', 'consumer-electronics'),
(57, 'LEDTV 32LK50 32 full hd led tv 32 polegadas high definition television led tv', '$49.72 - $51.75', '2', '/Ali Baba/busnisse-service/image-consumer-electronics/images-4.jpg', 'consumer-electronics'),
(58, 'Hot ultrabook laptop 14.1 ultrabook intel celeron 4 cores laptop computer', '$88.00 - $98.00', '1', '/Ali Baba/busnisse-service/image-consumer-electronics/images-6.jpg', 'consumer-electronics'),
(59, 'Kids Camera Mini HD Screen 1080P Projection Video Camera Toys Children Baby Gifts Birthday Digital Kids Camera for kid', '$2.20 - $4.80', '1', '/Ali Baba/busnisse-service/image-consumer-electronics/images-7.jpg', 'consumer-electronics'),
(60, 'MIX lite Hot Selling Single Mini Mechanical Gaming Led Keyboard and Mouse Combo Gamer Keyboard mouse converter', '$5.90 - $11.00', '1', '/Ali Baba/busnisse-service/image-consumer-electronics/images-8.jpg', 'consumer-electronics'),
(61, 'Good quality portable 2.5 inch USB3.0 to sata external hard disk drive carrying case hdd case 2.5 usb 3 for sale', '$1.28 - $1.32', '10', '/Ali Baba/busnisse-service/image-consumer-electronics/images-9.jpg', 'consumer-electronics'),
(62, 'NEW SJRC F7 4K PRO DRONE With Camera RC HD 3-Axis Gimbal 3KM Quadcopter VS E88 SG906 4K', '$25.20 - $130.5', '1', '/Ali Baba/busnisse-service/image-consumer-electronics/images10.jpg', 'consumer-electronics'),
(63, 'Broadlink Bestcon Rm4C Mini Smart Universal Wifi Ir Blaster Infrared Tv Air Conditional Home Remote Controller', '$5.60 - $6.90', '5', '/Ali Baba/busnisse-service/image-consumer-electronics/images11.jpg', 'consumer-electronics'),
(64, 'For AirPods 1 2 Case Real Carbon Fiber Slim Shockproof Dirtproof Storage Case for AirPods 2 Cover For Air pods Protective Shell', '$0.67 - $1.17', '20', '/Ali Baba/busnisse-service/image-consumer-electronics/images12.jpg', 'consumer-electronics'),
(95, 'Portable Double Cup Glass Water/Milk/Coffee/Gift Cup with Straw 400/550ml Capacity for Gym Camping Adults', '$0.48 - $0.53', '50 pieces', '../busnisse-service/image-home-Garden/66cb0d844043b_images-14.jpg', 'home-Garden'),
(96, 'Eco-friendly Custom Printed Biodegradable Frosted zipper bag For Clothes Packaging plastic zipper bag', '$0.05 - $0.30', '100 pieces', '../busnisse-service/image-packaging/66cb0e5e6caf2_download.jpg', 'packaging');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(8) NOT NULL,
  `country` varchar(20) NOT NULL,
  `role` varchar(7) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `companyName` varchar(20) NOT NULL,
  `fullname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `country`, `role`, `email`, `password`, `companyName`, `fullname`) VALUES
(2, 'japan', 'Buyer', 'tarek12@gamil.com', 'Tarek!1234', 'Tarekkk', 'Tarek Katrib'),
(4, 'lebanon', 'Buyer', 'tarek121100@gamil.com', 'Tarek!1234', 'Tarekkk1', 'Tattatatata kkk '),
(5, 'lebanon', 'Seller', 'maher@gamil.com', 'Maher!1234', 'maher', 'maher katrib'),
(6, 'palastine', 'Buyer', 'lyjdrym112@gmail.com', 'lolo1234', 'lulu', 'layla rino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
