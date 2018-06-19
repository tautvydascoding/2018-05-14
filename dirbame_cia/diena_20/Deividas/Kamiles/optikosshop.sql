-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2018 at 07:23 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `optikosshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(1, 'biotrue'),
(2, 'opti-free'),
(3, 'renu-mps'),
(4, 'lesiai'),
(5, 'papildai'),
(6, 'aksesuarai');

-- --------------------------------------------------------

--
-- Table structure for table `pagrindinis`
--

CREATE TABLE `pagrindinis` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagrindinis`
--

INSERT INTO `pagrindinis` (`id`, `name`, `img`, `description`) VALUES
(1, 'Kontaktiniai lešiai ', '/Kamiles/img/akis.jpg', 'Kontaktiniai lešiai – bene patogiausia regejimo korekcijos priemone, kuri leidžia atsikratyti tokiu nepatogumus sukelianciu regejimo sutrikimu kaip trumparegyste, toliaregyste, astigmatizmas ir presbiopija (senatvine toliaregyste). Šioje el. parduotuveje prekiaujame pasaulyje puikiai žinomu gamintoju, tokiu kaip Bausch&Lomb, CibaVision.'),
(2, 'Papildai akims. ', '/Kamiles/img/maistas.jpg', 'Daugeliui žmoniu nusilpsta akys del mus veikianciu žalingu faktoriu – darbas kompiuteriu, rukymas, pernelyg ryškios šviesos arba nepakankamas apšvietimas, prasta mityba. Vitaminai ir maisto papildai regejimui yra puikus pasirinkimas norint gauti pakankamai naudingu medžiagu organizmui ir akims stiprinti. Maisto papildai akims - tai ivairiu vitaminu ir mineralu šaltinis, galintis padet išsaugoti normalu regejima. Prieš vartojant šiuos maisto papildus deretu nepamiršti, kad vitaminai akims negali buti traktuojami kaip maisto pakaitalai. Taip pat šiu maisto papildu efektyvumas bus didesnis, jei derinsite juos kartu su subalansuota ir ivairia mityba bei sveiku gyvenimo budu.'),
(3, 'Tirpalai. ', '/Kamiles/img/tirpalas.jpg', 'Regejimas yra tiesiog neikainojamas, todel butina daryti viska, kas imanoma, jam išsaugoti. Teisingai pasirinkti kontaktiniai lešiai, valomieji tirpalai, ir reguliari akiu priežiura gali apciuopiamai pagerinti akiu bukle ir regos kokybe.'),
(4, 'Aksesuarai. ', '/Kamiles/img/akiniai.jpg', 'Smulkmenos paivairinti gyvenimui.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `list_price` decimal(10,2) NOT NULL,
  `brand` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `list_price`, `brand`, `img`, `description`) VALUES
(1, 'biotrue 300 ml', 10.99, 17.50, 1, '/Kamiles/imgshop/biotrue-300-ml.jpg', 'Puikiai nuvalo nešvarumus ir baltymų apnašas bei mažina jų susidarymą, todėl akys išlieka sveikos ir gaivios.'),
(4, 'Renu mps 120 ml', 10.00, 15.00, 3, '/Kamiles/imgshop/renu-mps-120-ml.jpg', 'Renu MPS naudojamas kontaktinių lęšių praplovimui, sudrėkinimui ir saugojimui. MPS tirpalas nuvalo ir pašalina plėvelinius užteršimus ir kitas nuosėdas nuo minkštų kontaktinių lęšių. Tirpalas tinkamas visų tipų kontaktiniams lęšiams įskaitant silikono-hidrogelio lęšius. ReNu MPS rekomenduojamas pacientams, turintiems jautrias akis.\r\n'),
(5, 'opti free 120 ml', 11.00, 15.00, 2, '/Kamiles/imgshop/opti-free-120-ml.jpg', 'Opti–Free Express - tirpalas skirtas visų rūšių minkštiems kontaktiniams lęšiams valyti, dezinfekuoti ir laikyti, kuomet lęšiai nėra naudojami. Jaučiant dirginimą ar diskomfortą taip pat galima įlašinti 1-2 šio tirpalo lašus į akis ir pamirksėti. Atidarius Opti-Free Express flakoną, tirpalą galima naudoti iki 6 mėn. Pakuotėje yra lęšių konteineris.'),
(6, 'opti free puremoist ', 10.00, 14.00, 2, '/Kamiles/imgshop/opti-free-puremoist-300.jpg', 'OPTI-FREE PureMoist - efektyvus lęšių priežiūros tirpalas, valantis kontaktinių lęšių apnašas ir naikinantis kenksminą mikroflorą. Naudojant PureMoist daugiafunkcinį tirpalą užtikrinama nuolatinė lęšių švara bei nešiojimo komfortas net ir dienos pabaigoje. OPTI-FREE PureMoist suteikia lęšių drėkinimą iki 16 val. Tirpalo veikliosios medžiagos ne tik apgaubia lęšio paviršių, bet ir drėkiną lęšį iš vidaus, taip užtikrindamos kontaktinių lęšių nešiotojui komfortą nuo ryto iki vėlyvo vakaro.'),
(7, 'purevision', 22.50, 27.00, 4, '/Kamiles/imgshop/purevision.jpg', 'Lęšiai gaminami iš unikalios AerGel medžiagos, kuri suteikia išskirtinį matymą ir galimybę lęšius nešioti nejaučiant nuovargio, akių sausumo ar paraudimo.\r\nUžapvalinti lęšio kraštai ir plonas profilis, palengvina ašarų patekimą ir natūralų ragenos drėkinimą.'),
(8, 'proclear', 35.00, 40.00, 4, '/Kamiles/imgshop/proclear.jpg', 'Sukurti naudojant unikalią ir visame pasaulyje plačiai pripažintą PC technologiją.\r\nIšsaugo 3 kartus daugiau vandens, lyginat su kitais kontaktiniais lęšiais.\r\nUnikalūs dėl phosphorylchonilo medžiagos, kuri pritraukia ir sulaiko vandens molekules, todėl papildomai nereikia naudoti dirbtinių ašarų.'),
(9, 'optima-fw', 18.56, 20.00, 4, '/Kamiles/imgshop/optima-fw.jpg', 'Lęšai yra skirti trijų mėnesių nešiojimui, todėl yra ekonomiški.\r\nLęšių pagaminimo medžiaga suteikia plonumo ir lygumo.\r\nNejoninės savybės užtikrina atsparumą baltyminių apnašų susidarymui.\r\nTuri neryškų melsvą atspalvį, palengvinantį jų įsidėjimą.'),
(10, 'night day aqua', 36.00, 40.00, 4, '/Kamiles/imgshop/night-day-aqua.jpg', 'Night and Day Aqua kontaktiniuose lęšiuose įdiegtas unikalus drėkinimo elementas, kuris padeda dienos eigoje išlaikyti akis drėgnesnes ir jaustis komfortiškai tiek dieną, tiek naktį miego metu.'),
(11, 'highway eye bright plus', 8.00, 10.00, 5, '/Kamiles/imgshop/highway-eye-bright-plus.jpg', 'Vitaminas A ir cinkas padeda išsaugoti normalų regėjimą. Be to cinkas padeda palaikyti normalią vitamino A apykaitą. Vitaminas C, selenas ir cinkas padeda apsaugoti ląsteles nuo oksidacinės pažaidos.\r\n\r\nSudedamosios dalys: L-askorbo rūgštis, kapsulės apvalkalas – želatina, paprastųjų mėlynių (Vaccinium myrtillus) uogų ekstraktas, rutozidas, pievinių akišveičių (Euphrasia officinalis) lapų ekstraktas, kukurūzų krakmolas, cinko oksidas, liuteinas, magnio stearatas, retinilo acetatas, natrio selenatas.'),
(12, 'visionace plus omega 3', 22.00, 25.00, 5, '/Kamiles/imgshop/maisto-papildas-visionace-plus-omega-3.jpg', 'Cinkas, vitaminai A,B2 padeda išsaugoti normalų regėjimą.\r\nMėlynėse esantys antocianai palaiko regos aiškumą, tinklainės funkciją, kraujotaką į akis.'),
(13, 'doppelherz augen vital capsn', 12.00, 15.00, 5, '/Kamiles/imgshop/doppelherz-augen-vital-akims-caps-n30.jpg', 'Maisto papilda\r\nDėka sudedamųjų dalių SuperOptic veikia įvairiai:\r\nDokozaheksaeno rūgštis (DHR)\r\n- padeda išsaugoti normalų regėjimą*'),
(14, 'maisto papildas superoptic', 19.00, 25.00, 5, '/Kamiles/imgshop/maisto-papildas-superoptic.jpg', ''),
(15, 'Lęšių dėkliukas', 3.00, 5.00, 6, '/Kamiles/imgshop/1841-800x600.jpg', 'puikus dekliukas vaikams'),
(16, 'Ray Ban Saulės ', 80.00, 130.00, 6, '/Kamiles/imgshop/1.jpg', 'Ray-Ban® prekinis ženklas – lyderis akinių gamyboje. Su kiekviena nauja kolekcija šis prekinis ženklas diktuoja ateinančio sezono standartus ir tendencijas. Ray-Ban® prekės ženklo kūrėjams ir dizaineriams pavyko rasti beveik tobulą funkcionalumo ir elegancijos santykį, todėl akiniai vadinami legendiniais. Ray-Ban® akiniai nuo saulės išskirtiniu būdu apjungia patogumą su nauda.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagrindinis`
--
ALTER TABLE `pagrindinis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pagrindinis`
--
ALTER TABLE `pagrindinis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
