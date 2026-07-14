-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2023 at 11:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('uma', 'uma');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `stdname` varchar(30) NOT NULL,
  `stdid` varchar(7) NOT NULL,
  `date` date NOT NULL,
  `comp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`stdname`, `stdid`, `date`, `comp`) VALUES
('Vijay', 'o170030', '2022-08-17', 'Surroundings are dirty.'),
('Vinay', 'o170421', '2022-08-17', 'Rice is not good'),
('sai', 'o170031', '2022-08-17', 'The mess is messy and food served like we were prisoners. The quality of food is worst.'),
('uma', 'o170013', '2023-03-30', 'curries are not good');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `studentid` varchar(7) NOT NULL,
  `Idli` int(2) DEFAULT NULL,
  `Rice` int(2) DEFAULT NULL,
  `Vada` int(2) DEFAULT NULL,
  `AluFry` int(2) DEFAULT NULL,
  `TomatoChutney` int(2) DEFAULT NULL,
  `VankayabattaniCurry` int(2) DEFAULT NULL,
  `Sambar` int(2) DEFAULT NULL,
  `Curd` int(2) DEFAULT NULL,
  `Noodles` int(2) DEFAULT NULL,
  `Thotakurapappu` int(2) DEFAULT NULL,
  `Rasam` int(2) DEFAULT NULL,
  `EggRice` int(2) DEFAULT NULL,
  `DondakayaFry` int(2) DEFAULT NULL,
  `GongureChutney` int(2) DEFAULT NULL,
  `Ravvakesari` int(2) DEFAULT NULL,
  `AluDumFry` int(2) DEFAULT NULL,
  `PalakuraPappu` int(2) DEFAULT NULL,
  `MulakayaTomato` int(2) DEFAULT NULL,
  `Pickle` int(2) DEFAULT NULL,
  `VegPalav` int(2) DEFAULT NULL,
  `CapsicumPanner` int(2) DEFAULT NULL,
  `ChickenCurry` int(2) DEFAULT NULL,
  `Upma` int(2) DEFAULT NULL,
  `SorakayapesaraPappu` int(2) DEFAULT NULL,
  `VankayaChutney` int(2) DEFAULT NULL,
  `Laddu` int(2) DEFAULT NULL,
  `PalakDal` int(2) DEFAULT NULL,
  `MixedVegetable` int(2) DEFAULT NULL,
  `KandhiPacchadhi` int(2) DEFAULT NULL,
  `EggCurry` int(2) DEFAULT NULL,
  `CarrotFry` int(2) DEFAULT NULL,
  `DosakayaPappu` int(2) DEFAULT NULL,
  `BeansCurry` int(2) DEFAULT NULL,
  `DondakayaChutney` int(2) DEFAULT NULL,
  `ChakkaraPongali` int(2) DEFAULT NULL,
  `LemonRice` int(2) DEFAULT NULL,
  `Uthappam` int(2) DEFAULT NULL,
  `PannerButterMasala` int(2) DEFAULT NULL,
  `GoruchukuduFry` int(2) DEFAULT NULL,
  `Chapathi` int(2) DEFAULT NULL,
  `TomatoPappu` int(2) DEFAULT NULL,
  `DosakayaChutney` int(2) DEFAULT NULL,
  `timeliness` float DEFAULT NULL,
  `quality` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `neatness` float DEFAULT NULL,
  `behaviour` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`studentid`, `Idli`, `Rice`, `Vada`, `AluFry`, `TomatoChutney`, `VankayabattaniCurry`, `Sambar`, `Curd`, `Noodles`, `Thotakurapappu`, `Rasam`, `EggRice`, `DondakayaFry`, `GongureChutney`, `Ravvakesari`, `AluDumFry`, `PalakuraPappu`, `MulakayaTomato`, `Pickle`, `VegPalav`, `CapsicumPanner`, `ChickenCurry`, `Upma`, `SorakayapesaraPappu`, `VankayaChutney`, `Laddu`, `PalakDal`, `MixedVegetable`, `KandhiPacchadhi`, `EggCurry`, `CarrotFry`, `DosakayaPappu`, `BeansCurry`, `DondakayaChutney`, `ChakkaraPongali`, `LemonRice`, `Uthappam`, `PannerButterMasala`, `GoruchukuduFry`, `Chapathi`, `TomatoPappu`, `DosakayaChutney`, `timeliness`, `quality`, `quantity`, `neatness`, `behaviour`) VALUES
('o170030', NULL, 3, NULL, NULL, NULL, NULL, 3, 1, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 4, 3, 4, 4, 4),
('o170183', NULL, 1, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `itemNo` int(11) NOT NULL,
  `monday` text DEFAULT NULL,
  `tuesday` text DEFAULT NULL,
  `wednesday` text DEFAULT NULL,
  `thursday` text DEFAULT NULL,
  `friday` text DEFAULT NULL,
  `saturday` text DEFAULT NULL,
  `sunday` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`itemNo`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOSpzkKI1RNSVpBGYBPSk3gmFLnHOCuN4SKA&usqp=CAU', 'https://www.whiskaffair.com/wp-content/uploads/2017/11/Schezwan-Egg-Fried-Rice-3.jpg', 'https://www.vegrecipesofindia.com/wp-content/uploads/2021/07/vada-recipe-1.jpg', 'https://www.seriouseats.com/thmb/XPrh-AqaBdXXnDnLVuE-ad8OCGs=/569x427/smart/filters:no_upscale()/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__recipes__images__2012__05__20121405-Sooji-Upma-20Indian-Breakfast-21e04a2320de433eb5906cb71caa2b70.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOSpzkKI1RNSVpBGYBPSk3gmFLnHOCuN4SKA&usqp=CAU', 'https://static.toiimg.com/thumb/61203720.cms?imgsize=670417&width=800&height=800', 'https://vaya.in/recipes/wp-content/uploads/2018/02/Uthappam.jpg'),
(2, 'https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o=', 'https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o=', 'https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o=', 'https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o=', 'https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o=', 'https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o=', 'https://media.istockphoto.com/photos/cooked-rice-picture-id491090528?k=20&m=491090528&s=612x612&w=0&h=oKwbkVWhU_17ZBhB4v3SKOTGT85nmi2YS7KbPPa-x8o='),
(3, 'https://2.bp.blogspot.com/-YExsgwtPhP4/UZFOE6tdoZI/AAAAAAAABk4/E5hZBulMeKw/s1600/thotakura+pappu+also+called+a+blend+of+amaranth+leaves+and+lentils.jpg', 'https://i.ytimg.com/vi/4TAszDj6nvY/maxresdefault.jpg', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2014/02/spinach-dal.jpg', 'https://i.pinimg.com/736x/20/ce/99/20ce99c41cda2d5c2e74a67ddcafb85b--halal-recipes-spicy-recipes.jpg', 'https://www.spiceupthecurry.com/wp-content/uploads/2022/05/moong-dal-palak-2.jpg', 'https://www.archanaskitchen.com/images/archanaskitchen/1-Author/Padma_Veeranki/Yellow_Cucumber_Dal__Dosakaya_Pappu.jpg', 'https://www.ruchiskitchen.com/wp-content/uploads/2020/12/Paneer-butter-masala-recipe-3-500x375.jpg'),
(4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrxm61dZ5WxtjzTsgHgUs0QMlEL-MaeVi7WA&usqp=CAU', 'https://www.whiskaffair.com/wp-content/uploads/2017/12/Tindora-Masala-3.jpg', 'https://www.keralacookingrecipes.com/wp-content/uploads/2019/06/Drumstick-Tomato-Curry.jpg', 'https://www.indianrecipeinfo.com/wp-content/uploads/2017/02/Brinjal-Chutney-Vankaya-Pachadi.jpg', 'https://static.toiimg.com/thumb/87621413.cms?imgsize=81300&width=800&height=800', 'https://www.thespruceeats.com/thmb/b4DafD1X9BRI6cJS3xHUOq9h4HM=/1825x1825/smart/filters:no_upscale()/rajma-red-kidney-bean-curry-1957982-hero-images-1-571fc72f271b46759c3bb5b4f1bb4212.JPG', 'https://www.indianveggiedelight.com/wp-content/uploads/2019/07/veg-pulao-instant-pot-featured.jpg'),
(5, 'https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800', 'https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800', 'https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800', 'https://i.ytimg.com/vi/M4uuuuyBhl4/maxresdefault.jpg', 'https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800', 'https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800', 'https://headbangerskitchen.com/wp-content/uploads/2020/06/5INGCHICKENCURRY-Vertic2.jpg'),
(6, 'https://www.yummytummyaarthi.com/wp-content/uploads/2015/12/1-4.jpg', 'https://www.archanaskitchen.com/images/archanaskitchen/0-Archanas-Kitchen-Recipes/2018/Andhra_Gongura_Pachadi_Recipe_-_Andhra_Style_Sorrel_Leaves_Chutney-10.jpg', 'https://www.vegrecipesofindia.com/wp-content/uploads/2020/04/pickle-recipes.jpg', 'https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800', 'https://cdn.aahaaramonline.com/wp-content/uploads/2018/04/andhra_kandi_pachadi_tuvaram_paruppu_thogayal-500x500.jpg', 'https://www.archanaskitchen.com/images/archanaskitchen/0-Affiliate-Articles/Tindora_Chutney_Andhra_Style_Recipe-_Dondakaya_Pachadi-15.jpg', 'https://static.toiimg.com/thumb/53615103.cms?imgsize=113818&width=800&height=800'),
(7, 'https://www.teluguone.com/recipeuserfiles/Batani.jpg', 'https://www.awesomecuisine.com/wp-content/uploads/2008/03/rava_kesari.jpg', 'https://www.indianveggiedelight.com/wp-content/uploads/2019/07/veg-pulao-instant-pot-featured.jpg', 'https://c.ndtvimg.com/2021-03/d4bkvgro_boondi-ladoo_625x300_25_March_21.jpg?im=FaceCrop,algorithm=dnn,width=1200,height=886', 'https://thevegconnection.com/wp-content/uploads/2021/06/Egg-Curry-9-Edit-720x720.jpg', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/01/sweet-pongal-chakkara-pongal.jpg', 'https://cdn2.foodviva.com/static-content/food-images/chutney-raita-recipes/dosakaya-pachadi/dosakaya-pachadi.jpg'),
(8, 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg', 'https://1.bp.blogspot.com/-bZFklOn6O8Q/XGUcV9ZoQUI/AAAAAAAAEaw/AUGKOgqL4lszA2p3Y8gWLcCjhqc-JjknwCLcBGAs/s1600/Dum%2Baalo.jpg', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2022/04/kadai-paneer-recipe.jpg', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg', 'https://maayeka.com/wp-content/uploads/2014/09/lemon-rice.jpg', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg'),
(9, 'https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg', 'https://headbangerskitchen.com/wp-content/uploads/2020/06/5INGCHICKENCURRY-Vertic2.jpg', 'https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg', 'https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg', 'https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg', 'https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg'),
(10, NULL, 'https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg', 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/05/sambar.jpg', NULL, NULL, NULL, NULL),
(11, NULL, NULL, 'https://images.healthshots.com/healthshots/en/uploads/2022/02/17155413/curd.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `monthreport`
--

CREATE TABLE `monthreport` (
  `stdcount` float NOT NULL,
  `Idli` float DEFAULT NULL,
  `Rice` float DEFAULT NULL,
  `Vada` float DEFAULT NULL,
  `AluFry` float DEFAULT NULL,
  `TomatoChutney` float DEFAULT NULL,
  `VankayabattaniCurry` float DEFAULT NULL,
  `Sambar` float DEFAULT NULL,
  `Curd` float DEFAULT NULL,
  `Thotakurapappu` float DEFAULT NULL,
  `Rasam` float DEFAULT NULL,
  `EggRice` float DEFAULT NULL,
  `DondakayaFry` float DEFAULT NULL,
  `GongureChutney` float DEFAULT NULL,
  `Ravvakesari` float DEFAULT NULL,
  `AluDumFry` float DEFAULT NULL,
  `PalakuraPappu` float DEFAULT NULL,
  `MulakayaTomato` float DEFAULT NULL,
  `Pickle` float DEFAULT NULL,
  `VegPalav` float DEFAULT NULL,
  `CapsicumPanner` float DEFAULT NULL,
  `ChickenCurry` float DEFAULT NULL,
  `Upma` float DEFAULT NULL,
  `SorakayapesaraPappu` float DEFAULT NULL,
  `VankayaChutney` float DEFAULT NULL,
  `Laddu` float DEFAULT NULL,
  `PalakDal` float DEFAULT NULL,
  `MixedVegetable` float DEFAULT NULL,
  `KandhiPacchadhi` float DEFAULT NULL,
  `EggCurry` float DEFAULT NULL,
  `CarrotFry` float DEFAULT NULL,
  `DosakayaPappu` float DEFAULT NULL,
  `BeansCurry` float DEFAULT NULL,
  `DondakayaChutney` float DEFAULT NULL,
  `ChakkaraPongali` float DEFAULT NULL,
  `LemonRice` float DEFAULT NULL,
  `Uthappam` float DEFAULT NULL,
  `PannerButterMasala` float DEFAULT NULL,
  `GoruchukuduFry` float DEFAULT NULL,
  `Chapathi` float DEFAULT NULL,
  `TomatoPappu` float DEFAULT NULL,
  `DosakayaChutney` float DEFAULT NULL,
  `timeliness` float DEFAULT NULL,
  `quality` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `neatness` float DEFAULT NULL,
  `behaviour` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monthreport`
--

INSERT INTO `monthreport` (`stdcount`, `Idli`, `Rice`, `Vada`, `AluFry`, `TomatoChutney`, `VankayabattaniCurry`, `Sambar`, `Curd`, `Thotakurapappu`, `Rasam`, `EggRice`, `DondakayaFry`, `GongureChutney`, `Ravvakesari`, `AluDumFry`, `PalakuraPappu`, `MulakayaTomato`, `Pickle`, `VegPalav`, `CapsicumPanner`, `ChickenCurry`, `Upma`, `SorakayapesaraPappu`, `VankayaChutney`, `Laddu`, `PalakDal`, `MixedVegetable`, `KandhiPacchadhi`, `EggCurry`, `CarrotFry`, `DosakayaPappu`, `BeansCurry`, `DondakayaChutney`, `ChakkaraPongali`, `LemonRice`, `Uthappam`, `PannerButterMasala`, `GoruchukuduFry`, `Chapathi`, `TomatoPappu`, `DosakayaChutney`, `timeliness`, `quality`, `quantity`, `neatness`, `behaviour`) VALUES
(4, NULL, 3, 2.75, NULL, NULL, NULL, 2.25, 1.75, NULL, 2, NULL, NULL, NULL, NULL, NULL, 3, 2.25, 2.5, 2.75, 1.75, 1.75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2.75, 2.5, 2.75, 2.75, 2.75);

-- --------------------------------------------------------

--
-- Table structure for table `prevmonthreport`
--

CREATE TABLE `prevmonthreport` (
  `stdcount` float NOT NULL,
  `Idli` float DEFAULT NULL,
  `Rice` float DEFAULT NULL,
  `Vada` float DEFAULT NULL,
  `AluFry` float DEFAULT NULL,
  `TomatoChutney` float DEFAULT NULL,
  `VankayabattaniCurry` float DEFAULT NULL,
  `Sambar` float DEFAULT NULL,
  `Curd` float DEFAULT NULL,
  `Thotakurapappu` float DEFAULT NULL,
  `Rasam` float DEFAULT NULL,
  `EggRice` float DEFAULT NULL,
  `DondakayaFry` float DEFAULT NULL,
  `GongureChutney` float DEFAULT NULL,
  `Ravvakesari` float DEFAULT NULL,
  `AluDumFry` float DEFAULT NULL,
  `PalakuraPappu` float DEFAULT NULL,
  `MulakayaTomato` float DEFAULT NULL,
  `Pickle` float DEFAULT NULL,
  `VegPalav` float DEFAULT NULL,
  `CapsicumPanner` float DEFAULT NULL,
  `ChickenCurry` float DEFAULT NULL,
  `Upma` float DEFAULT NULL,
  `SorakayapesaraPappu` float DEFAULT NULL,
  `VankayaChutney` float DEFAULT NULL,
  `Laddu` float DEFAULT NULL,
  `PalakDal` float DEFAULT NULL,
  `MixedVegetable` float DEFAULT NULL,
  `KandhiPacchadhi` float DEFAULT NULL,
  `EggCurry` float DEFAULT NULL,
  `CarrotFry` float DEFAULT NULL,
  `DosakayaPappu` float DEFAULT NULL,
  `BeansCurry` float DEFAULT NULL,
  `DondakayaChutney` float DEFAULT NULL,
  `ChakkaraPongali` float DEFAULT NULL,
  `LemonRice` float DEFAULT NULL,
  `Uthappam` float DEFAULT NULL,
  `PannerButterMasala` float DEFAULT NULL,
  `GoruchukuduFry` float DEFAULT NULL,
  `Chapathi` float DEFAULT NULL,
  `TomatoPappu` float DEFAULT NULL,
  `DosakayaChutney` float DEFAULT NULL,
  `timeliness` float DEFAULT NULL,
  `quality` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `neatness` float DEFAULT NULL,
  `behaviour` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prevmonthreport`
--

INSERT INTO `prevmonthreport` (`stdcount`, `Idli`, `Rice`, `Vada`, `AluFry`, `TomatoChutney`, `VankayabattaniCurry`, `Sambar`, `Curd`, `Thotakurapappu`, `Rasam`, `EggRice`, `DondakayaFry`, `GongureChutney`, `Ravvakesari`, `AluDumFry`, `PalakuraPappu`, `MulakayaTomato`, `Pickle`, `VegPalav`, `CapsicumPanner`, `ChickenCurry`, `Upma`, `SorakayapesaraPappu`, `VankayaChutney`, `Laddu`, `PalakDal`, `MixedVegetable`, `KandhiPacchadhi`, `EggCurry`, `CarrotFry`, `DosakayaPappu`, `BeansCurry`, `DondakayaChutney`, `ChakkaraPongali`, `LemonRice`, `Uthappam`, `PannerButterMasala`, `GoruchukuduFry`, `Chapathi`, `TomatoPappu`, `DosakayaChutney`, `timeliness`, `quality`, `quantity`, `neatness`, `behaviour`) VALUES
(157, 3, 4, 5, 1.4, 4, 3, 4.5, 5, 4, 3, 5, 1.5, 2, 3, 4, 3, 2.5, 3.5, 2.5, 1.75, 4.32, 3.65, 4.75, 2, 3, 4, 5, 5, 2, 3, 4, 5, 4, 3, 3, 4, 3, 4, 2, 1, 2, 3.4, 2.5, 4.75, 1.23, 4.1);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `studentname` varchar(30) NOT NULL,
  `studentid` varchar(7) NOT NULL,
  `dateofbirth` date NOT NULL,
  `stream` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `father/guardianname` varchar(30) NOT NULL,
  `mobilenumber` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `itemNo` int(11) NOT NULL,
  `monday` varchar(20) DEFAULT NULL,
  `tuesday` varchar(20) DEFAULT NULL,
  `wednesday` varchar(20) DEFAULT NULL,
  `thursday` varchar(20) DEFAULT NULL,
  `friday` varchar(20) DEFAULT NULL,
  `saturday` varchar(20) DEFAULT NULL,
  `sunday` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`itemNo`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, 'Idli', 'EggRice', 'Vada', 'Upma', 'Idli', 'Chapathi', 'Uthappam'),
(2, 'Rice', 'Rice', 'Rice', 'Rice', 'Rice', 'Rice', 'Rice'),
(3, 'Thotakurapappu', 'TomatoPappu', 'PalakuraPappu', 'SorakayapesaraPappu', 'PalakDal', 'DosakayaPappu', 'PannerButterMasala'),
(4, 'AluFry', 'DondakayaFry', 'MulakayaTomato', 'VankayaChutney', 'MixedVegetable', 'BeansCurry', 'VegPalav'),
(5, 'Rasam', 'Rasam', 'Rasam', 'GoruchukuduFry', 'Rasam', 'Rasam', 'ChickenCurry'),
(6, 'TomatoChutney', 'GongureChutney', 'Pickle', 'Rasam', 'KandhiPacchadhi', 'DondakayaChutney', 'Rasam'),
(7, 'VankayabattaniCurry', 'Ravvakesari', 'VegPalav', 'Laddu', 'EggCurry', 'ChakkaraPongali', 'DosakayaChutney'),
(8, 'Sambar', 'AluDumFry', 'CapsicumPanner', 'Sambar', 'CarrotFry', 'LemonRice', 'Sambar'),
(9, 'Curd', 'Sambar', 'ChickenCurry', 'Curd', 'Curd', 'Curd', 'Curd'),
(10, 'timeliness', 'Curd', 'Sambar', 'timeliness', 'timeliness', 'timeliness', 'timeliness'),
(11, 'quality', 'timeliness', 'Curd', 'quality', 'quality', 'quality', 'quality'),
(12, 'quantity', 'quality', 'timeliness', 'quantity', 'quantity', 'quantity', 'quantity'),
(13, 'neatness', 'quantity', 'quality', 'neatness', 'neatness', 'neatness', 'neatness'),
(14, 'behaviour', 'neatness', 'quantity', 'behaviour', 'behaviour', 'behaviour', 'behaviour'),
(15, NULL, 'behaviour', 'neatness', NULL, NULL, NULL, NULL),
(16, NULL, NULL, 'behaviour', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yestreport`
--

CREATE TABLE `yestreport` (
  `stdcount` float NOT NULL,
  `Idli` float DEFAULT NULL,
  `Rice` float DEFAULT NULL,
  `Vada` float DEFAULT NULL,
  `AluFry` float DEFAULT NULL,
  `TomatoChutney` float DEFAULT NULL,
  `VankayabattaniCurry` float DEFAULT NULL,
  `Sambar` float DEFAULT NULL,
  `Curd` float DEFAULT NULL,
  `Thotakurapappu` float DEFAULT NULL,
  `Rasam` float DEFAULT NULL,
  `EggRice` float DEFAULT NULL,
  `DondakayaFry` float DEFAULT NULL,
  `GongureChutney` float DEFAULT NULL,
  `Ravvakesari` float DEFAULT NULL,
  `AluDumFry` float DEFAULT NULL,
  `PalakuraPappu` float DEFAULT NULL,
  `MulakayaTomato` float DEFAULT NULL,
  `Pickle` float DEFAULT NULL,
  `VegPalav` float DEFAULT NULL,
  `CapsicumPanner` float DEFAULT NULL,
  `ChickenCurry` float DEFAULT NULL,
  `Upma` float DEFAULT NULL,
  `SorakayapesaraPappu` float DEFAULT NULL,
  `VankayaChutney` float DEFAULT NULL,
  `Laddu` float DEFAULT NULL,
  `PalakDal` float DEFAULT NULL,
  `MixedVegetable` float DEFAULT NULL,
  `KandhiPacchadhi` float DEFAULT NULL,
  `EggCurry` float DEFAULT NULL,
  `CarrotFry` float DEFAULT NULL,
  `DosakayaPappu` float DEFAULT NULL,
  `BeansCurry` float DEFAULT NULL,
  `DondakayaChutney` float DEFAULT NULL,
  `ChakkaraPongali` float DEFAULT NULL,
  `LemonRice` float DEFAULT NULL,
  `Uthappam` float DEFAULT NULL,
  `PannerButterMasala` float DEFAULT NULL,
  `GoruchukuduFry` float DEFAULT NULL,
  `Chapathi` float DEFAULT NULL,
  `TomatoPappu` float DEFAULT NULL,
  `DosakayaChutney` float DEFAULT NULL,
  `timeliness` float DEFAULT NULL,
  `quality` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `neatness` float DEFAULT NULL,
  `behaviour` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yestreport`
--

INSERT INTO `yestreport` (`stdcount`, `Idli`, `Rice`, `Vada`, `AluFry`, `TomatoChutney`, `VankayabattaniCurry`, `Sambar`, `Curd`, `Thotakurapappu`, `Rasam`, `EggRice`, `DondakayaFry`, `GongureChutney`, `Ravvakesari`, `AluDumFry`, `PalakuraPappu`, `MulakayaTomato`, `Pickle`, `VegPalav`, `CapsicumPanner`, `ChickenCurry`, `Upma`, `SorakayapesaraPappu`, `VankayaChutney`, `Laddu`, `PalakDal`, `MixedVegetable`, `KandhiPacchadhi`, `EggCurry`, `CarrotFry`, `DosakayaPappu`, `BeansCurry`, `DondakayaChutney`, `ChakkaraPongali`, `LemonRice`, `Uthappam`, `PannerButterMasala`, `GoruchukuduFry`, `Chapathi`, `TomatoPappu`, `DosakayaChutney`, `timeliness`, `quality`, `quantity`, `neatness`, `behaviour`) VALUES
(4, NULL, 3, 2.75, NULL, NULL, NULL, 2.25, 1.75, NULL, 2, NULL, NULL, NULL, NULL, NULL, 3, 2.25, 2.5, 2.75, 1.75, 1.75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2.75, 2.5, 2.75, 2.75, 2.75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`itemNo`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`itemNo`);

--
-- Indexes for table `yestreport`
--
ALTER TABLE `yestreport`
  ADD PRIMARY KEY (`stdcount`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `itemNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `itemNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
