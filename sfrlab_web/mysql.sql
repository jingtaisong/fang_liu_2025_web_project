-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creation date: 2025-09-16 08:50:03
-- Server version: 5.6.50-log
-- PHP version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fang_lab_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for `mobanqu_archives`
--

CREATE TABLE `mobanqu_archives` (
  `id` int(10) NOT NULL,
  `typeid` smallint(5) DEFAULT '0',
  `ismake` smallint(6) DEFAULT '0',
  `channel` smallint(6) DEFAULT '1',
  `arcrank` smallint(6) DEFAULT '0',
  `title` varchar(360) DEFAULT '',
  `shorttitle` varchar(360) DEFAULT '',
  `writer` text,
  `source` varchar(130) DEFAULT '',
  `litpic` char(120) DEFAULT '',
  `pubdate` int(10) DEFAULT NULL,
  `senddate` int(10) DEFAULT NULL,
  `mid` mediumint(8) DEFAULT NULL,
  `keywords` varchar(330) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `weight` int(10) DEFAULT '0',
  `body` mediumtext,
  `boody` varchar(11) DEFAULT NULL,
  `linkyurl` varchar(40) DEFAULT NULL,
  `paixu` int(11) NOT NULL DEFAULT '0',
  `lanmuid` int(11) NOT NULL DEFAULT '0',
  `pic1` varchar(100) DEFAULT NULL,
  `pic2` varchar(100) DEFAULT NULL,
  `pic3` varchar(100) DEFAULT NULL,
  `pic4` varchar(100) DEFAULT NULL,
  `pic5` varchar(100) DEFAULT NULL,
  `pic6` varchar(100) DEFAULT NULL,
  `pic7` varchar(100) DEFAULT NULL,
  `bodyy` text,
  `vieo` text,
  `fileiinput` varchar(300) DEFAULT NULL,
  `hot` int(50) DEFAULT '99',
  `product_album` varchar(1000) DEFAULT NULL COMMENT '多图',
  `ftitle` varchar(300) DEFAULT NULL,
  `ftitle1` varchar(300) DEFAULT NULL,
  `ftitle2` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobanqu_archives`
--

INSERT INTO `mobanqu_archives` (`id`, `typeid`, `ismake`, `channel`, `arcrank`, `title`, `shorttitle`, `writer`, `source`, `litpic`, `pubdate`, `senddate`, `mid`, `keywords`, `description`, `weight`, `body`, `boody`, `linkyurl`, `paixu`, `lanmuid`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `pic7`, `bodyy`, `vieo`, `fileiinput`, `hot`, `product_album`, `ftitle`, `ftitle1`, `ftitle2`) VALUES
(1, 11, 1, 1, 0, 'Home', '', '', '', '', 1744036405, NULL, NULL, '', '', 0, '', NULL, NULL, 2, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(2, 11, 1, 1, 0, 'Research', '', '', '', '../upload/202505180734402406.jpg', 1744036405, NULL, NULL, '', '', 0, '', NULL, NULL, 3, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(3, 11, 1, 1, 0, 'Team', '', '', '', '../upload/202505180735246318.jpg', 1744036405, NULL, NULL, '', '', 0, '', NULL, NULL, 4, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(4, 11, 1, 1, 0, 'Publications', '', '', '', '../upload/202505180735328773.jpg', 1744036405, NULL, NULL, '', '', 0, '', NULL, NULL, 5, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(5, 11, 1, 1, 0, 'News', '', '', '', '../upload/202505180735408652.jpg', 1744036405, NULL, NULL, '', '', 0, '', NULL, NULL, 6, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(6, 11, 1, 1, 0, 'Facilities', '', '', '', '../upload/2025051807354996.jpg', 1744036405, NULL, NULL, '', '', 0, '', NULL, NULL, 7, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(7, 11, 1, 1, 0, 'Teaching', '', '', '', '../upload/202505180735595197.jpg', 1744036405, NULL, NULL, '', '', 0, '', NULL, NULL, 8, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(8, 11, 1, 1, 0, 'Contact', '', '', '', '../upload/202505180736314538.jpg', 1744036405, NULL, NULL, '', '', 0, '', NULL, NULL, 9, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(9, 1, 1, 1, 0, 'Production of macroscopic 2D structures', '', '2D monolayers and few-layer flakes with atomic-scale thickness exhibit tunable electronic properties and strong light-matter interactions, making them ideal platforms for realizing high-efficiency transport, ultrafast optical tuning, and novel quantum phases for next-generation information processing and optoelectronic technologies. However, their advancement has been fundamentally constrained by challenges in material availability and quality. \r\nWe developed metal-assisted exfoliation techniques producing a broad range of high-quality single-crystal 2D flakes with macroscopic-scale dimensions, near-unity yield, and tunable thickness from monolayers to few-layers.', '', '../upload/202505180820099758.jpg', 1744036656, NULL, NULL, '', '', 0, '<p><span style=\"font-size:13px;line-height:107%;font-family: CMR10\"></span></p><p>2D monolayers and few-layer flakes with atomic-scale thickness exhibit tunable electronic properties and strong light-matter interactions, making them ideal platforms for realizing high-efficiency transport, ultrafast optical tuning, and novel quantum phases for next-generation information processing and optoelectronic technologies. However, their advancement has been fundamentally constrained by challenges in material availability and quality. We developed metal-assisted exfoliation techniques producing a broad range of high-quality single-crystal 2D flakes with macroscopic-scale dimensions, near-unity yield, and tunable thickness from monolayers to few-layers. 1D Nanoribbons with atomic thickness and nanometer width is another family of low-dimensional confined structure with unique quantum phenomena that surpass their bulk and monolayer counterparts. However, only very few types of nanoribbons are synthesized. We developed a universal exfoliation technique to obtain a wide variety of high-quality single-crystal nanoribbons, from insulators to semiconductors, directly from their bulk van der Waals (vdW) crystals. The flat, aligned nano ribbons with high aspect ratio facilitates study of electronic and optical properties under tunable confinement, strain, and edge configurations for devices.<br/><br/>Moiré superlattices formed by twisted vdW interfaces with nanoscale periodicity offer a promising platform for realizing a wide range of emergent strongly correlated and topological quantum phases. However, again a major bottleneck is sample availability and reproducibility. Conventional fabrication methods, such as exfoliation/tear-and-stack, suffer from extremely low yield (&lt;0.001%), contamination, restricted sample sizes (µm), and instability in twist angle control. To overcome these limitations, we developed a deterministic synthesis method that enables precise and scalable fabrication of a broad range of highly uniform moiré structures, covering transition metal dichalcogenide (TMDC), graphene, and hBN, reaching unprecedented macroscopic dimensions (millimeters to centimeters) with near-unity yield. This breakthrough facilitates comprehensive structural and electronic characterization via electron diffraction, X-ray diffraction, and high-resolution angle-resolved photoemission spectroscopy.<br/><br/>The ongoing and future work will leverage our existing building blocks above and construct artificial superlattices throughout a comprehensive library of 1D/2D/3D low dimensional systems, with diverse nanoscale alignments and symmetries. Such collection will enable systematic exploration of light-matter coupling and designer quantum phases at different levels of precisely engineered nanostructures on a macroscopic, synthetically tunable scale.<br/><br/><strong>Selected Publications</strong><br/></p><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Saunders, A. P., Chen, V., Wang, J., Li, Q., Johnson, A. C., McKeown-Green, A. S., Zeng, H. J., Mac, T. K., Trinh, M. T., Heinz, T. F., Pop, E., and Liu, F. Direct exfoliation of nanoribbons from bulk van der waals crystals. Small 20(47), 2403504 (2024).</p><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>McKeown-Green, A. S., Zeng, H. J., Saunders, A. P., Li, J., Shi, J., Shen, Y., Pan, F., Hu, J., Dionne, J. A., Heinz, T. F., Wu, S. M., Zheng, F., and Liu, F. Millimeter-scale exfoliation of hbn with tunable flake thickness for scalable encapsulation. ACS Appl. Nano Mater. 7(6), 6574–6582 (2024).</p><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Liu, F. “Mechanical Exfoliation of Large Area 2D Materials From VdW Crystals”. Prog. Surf. Sci. 100626 (2021).</p><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Liu, F., Wu, W., Bai, Y., Chae, S., Li, Q., Wang, J., Hone, J., and Zhu, X.-Y. “Disassembling 2D van der Waals Crystals into Macroscopic Monolayers and Reassembling into Artificial Lattices”. Science. 367, 903–906 (2020).</p><p><span style=\"font-size:13px;line-height:107%;font-family:CMR10\"> </span><br/></p>', NULL, NULL, 0, 0, '../upload/202505180806253530.png', '../upload/20250518080339108.png', '../upload/202505180806253532.jpg', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(10, 1, 1, 1, 0, 'Light-induced dynamics in low dimensional artificial lattices', '', 'The coupling between electronic and lattice (vibrational) degrees of freedom plays a critical role in the carrier dynamics, interfacial thermal transport, and the emergence of strongly correlated phases in quantum materials. We aim to harness and control these complex vibronic couplings to achieve ultrafast manipulation of quantum phenomena across multiple levels of spatial confinements.', '', '../upload/202505180835529758.png', 1744036656, NULL, NULL, '', '', 0, '<p>The coupling between electronic and lattice (vibrational) degrees of freedom plays a critical role in the carrier dynamics, interfacial thermal transport, and the emergence of strongly correlated phases in quantum materials. Using ultrafast electron diffraction (UED) spectroscopy, we investigated photoinduced non-equilibrium phonon dynamics in twisted MoS<sub>2</sub>/WS<sub>2</sub> and WSe<sub>2</sub>/MoSe<sub>2</sub> heterobilayers, uncovering an interlayer heat transfer channel with ~ 20 ps timescale – an order of magnitude faster than predicted by molecular dynamics simulations. This rapid transfer is driven by nonthermal phonon populations arising from electron-phonon scattering upon interlayer charge transfer. These findings are further validated by ultrafast diffuse scattering, which directly uncovers the momentum-resolved phonon distributions. Beyond flat nanostructures, we have developed monolayer-based 0D and 1D nano bubble-wrap structures with periodicity comparable with phonon mean free path, demonstrating promising potential for nanoscale thermal management. In small angle twisted WSe<sub>2</sub>/MoSe<sub>2</sub>, we demonstrated that photoexcitation drives coherent twisting and untwisting of the superlattice domains with sub-THz frequency. Going forward, we aim to harness and control these complex vibronic couplings to achieve ultrafast manipulation of quantum phenomena across multiple levels of spatial confinements.</p><p><strong>Selected Publications</strong></p><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Johnson, A. C., Georgaras, J. D., Shen, X., Yao, H., Saunders, A. P., Zeng, H. J., Kim, H., Sood, A., Heinz, T. F., Lindenberg, A. M., Luo, D., Jornada, F. H., and Liu, F. Hidden phonon highways promote photoinduced interlayer energy transfer in twisted transition metal dichalcogenide heterostructures. Science Adv. 10(4), eadj8819 (2024).</p><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Liu, F. Time- and angle-resolved photoemission spectroscopy (tr-arpes) of tmdc monolayers and bilayers. Chem. Sci. 14, 736<span style=\"font-family:DengXian\">–</span>750 (2023).</p><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Kobayashi, Y., Heide, C., Johnson, A. C., Tiwari, V., Liu, F., Reis, D. A., Heinz, T. F., and Ghimire, S. Floquet engineering of strongly driven excitons in monolayer tungsten disulfide. Nat. Phys. 19(2), 171–176 (2023).</p><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Heide, C., Kobayashi, Y., Johnson, A. C., Liu, F., Heinz, T. F., Reis, D. A., and Ghimire, S. <span style=\"font-family:DengXian\">“</span>probing electron-hole coherence in strongly driven 2d materials using high-harmonic generation<span style=\"font-family:DengXian\">”</span>. Optica 9(5), 512<span style=\"font-family:DengXian\">–</span>516 (2022).</p><p><br/></p>', NULL, NULL, 1, 0, '../upload/202505180825227587.png', '../upload/20250518082608362.jpg', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(11, 2, 1, 1, 0, 'Overview', '', '', '', '../upload/202505180653211801.jpg', 1744037465, NULL, NULL, '', '', 0, '<p><span style=\"color: rgb(33, 37, 43); font-family: &quot;open sans&quot;, Helvetica, Arial, sans-serif; font-size: 17px; text-wrap-mode: wrap; background-color: rgb(255, 255, 255);\">Low dimensional materials and the unique structures built from them has a variety of new exotic properties beyond traditional materials. We hope to produce low dimensional materials and their artificial structures in a sizable and controllable way.&nbsp;</span></p><p><span style=\"color: rgb(33, 37, 43); font-family: &quot;open sans&quot;, Helvetica, Arial, sans-serif; font-size: 17px; text-wrap-mode: wrap; background-color: rgb(255, 255, 255);\">Our ultimate goal is to use these materials to provide novel platforms for next-generation information processing, light processing, and quantum devices. In order to do that, we need to unravel their static and dynamical electronic, magnetic and photonic properties, using the cutting edge characterization techniques including optical and photoemission spectroscopy. We are an experimental material / physical chemistry group. Welcome to join us!</span></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(12, 14, 1, 1, 0, 'Fang Liu', '', '', '', '../upload/202504122315205127.jpg', 1744038719, NULL, NULL, '', '', 0, '<p style=\"line-height: 2em;\"><span style=\"font-size: 16px;\">Fang Liu is an assistant professor of chemistry at Stanford University. Her reserach is focused on the light induced dynamics of solid low dimensional materials and construction of low dimensional artificial structures. Prior to her current position, she was a DOE Office of Energy Efficiency and Renewable Energy (EERE) postdoctoral fellow in the group of Prof. Xiaoyang Zhu at Columbia University. Her postdoctoral research focused on using femtosecond extreme UV in probing time and angle resolved photoemission spectroscopy of 2D materials. Prior to working in Columbia, she worked under the direction of Prof. Marsha I Lester at University of Pennsylvania. She received her Ph.D. in 2015 and worked as a postdoc in the same group in 2016. At UPenn, she used time resolved spectroscopic techniques to study spectroscopy and photochemistry of Criegee intermediates. She received her B.S. in chemistry at Peking University in 2010.</span></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'Assistant Professor of Chemistry', 'fliu10@stanford.edu', 'https://scholar.google.com/citations?user=odYWw4EAAAAJ&hl=en'),
(13, 15, 1, 1, 0, 'Amalya Johnson', '', '', '', '../upload/202504122318303712.jpg', 1744039038, NULL, NULL, '', '', 0, '<p style=\"line-height: 2em;\"><span style=\"font-size: 20px;\">PhD Student, Materials Science &amp; Engineering</span></p><p style=\"line-height: 2em;\"><span style=\"font-size: 20px;\">Undergrad: Columbia University, B.A. in Physics</span></p><p style=\"line-height: 2em;\"><span style=\"font-size: 20px;\">Hometown: Montclair, NJ</span></p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'Ph.D Student, Materials Science & Engineering', 'amalyaj@stanford.edu', ''),
(14, 4, 1, 1, 0, 'TEAM', '', '', '', '../upload/202504122319338342.jpg', 1744039165, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(62, 5, 1, 1, 0, '2025', '', '', '', '', 1749607215, NULL, NULL, '', '', 0, '<p>55&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ludovica Guarneri,&nbsp; Thomas Bauer,&nbsp; Qitong Li,&nbsp; Jung-Hwan Song,&nbsp; Skyler Selvin,&nbsp; Ashley P. Saunders,&nbsp; Fang Liu,&nbsp; Mark L. Brongersma,&nbsp; Jorik van de Groep, Dynamic Excitonic Beam Switching with Atomically-Thin Binary Blazed Gratings. Adv. Optical Mater. 13, 2403257 (2025).</p><p>54&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gang Qiang, Ashley P. Saunders, Cong T. Trinh, Na Liu, Andrew C. Jones, Fang Liu, and Han Htoon. Localized exciton emission from monolayer WS₂ nanoribbon at cryogenic temperature. Nanophotonics. 14(11), 1721-1728 (2025).</p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(63, 5, 1, 1, 0, '2024', '', '', '', '', 1750390471, NULL, NULL, '', '', 0, '<p>53&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gregory Zaborski Jr., Paulina E. Majchrzak, Samuel Lai, Amalya C. Johnson, Ashley P. Saunders, Ziyan Zhu, Yujun Deng, Donghui Lu, Makoto Hashimoto, Z-X Shen, and Fang Liu. Macroscopic uniform 2D moiré superlattices with controllable angles. (2024, arXiv:2407.02600).</p><p>52&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ashley P. Saunders, Victoria Chen, Jierong Wang, Qitong Li, Amalya C. Johnson, Amy S. McKeown-Green, Helen J. Zeng, T. Kien Mac, M. Tuan Trinh, Tony F. Heinz, Eric Pop, and Fang Liu. Direct exfoliation of nanoribbons from bulk van der Waals crystals. Small&nbsp;20 (47), 2403504 (2024).</p><p>51&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jiaojian Shi, Yuejun Shen, Feng Pan, Weiwei Sun, Anudeep Mangu, Cindy Shi, Amy McKeown-Green, Parivash Moradifar, Moungi G. Bawendi, W. E. Moerner, Jennifer A. Dionne, Fang Liu, and Aaron M. Lindenberg. Solution-phase sample-averaged single-particle spectroscopy of quantum emitters with femtosecond resolution. Nat. Mater. 23(8), 1063–1069 (2024).</p><p>50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ludovica Guarneri, Qitong Li, Thomas Bauer, Jung-Hwan Song, Ashley P. Saunders, Fang Liu, Mark L. Brongersma, and Jorik van de Groep. Temperature-dependent excitonic light manipulation with atomically thin optical elements. Nano Lett. 24(21), 6240–6246 (2024). PMID: 38578061.</p><p>49&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amy S. McKeown-Green, Helen J. Zeng, Ashley P. Saunders, Jiayi Li, Jiaojian Shi, Yuejun Shen, Feng Pan, Jenny Hu, Jennifer A. Dionne, Tony F. Heinz, Stephen M. Wu, Fan Zheng, and Fang Liu. Millimeter-scale exfoliation of hBN with tunable flake thickness for scalable encapsulation. ACS Appl. Nano Mater. 7(6), 6574–6582 (2024).</p><p>48&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amalya C. Johnson, Johnathan D. Georgaras, Xiaozhe Shen, Helen Yao, Ashley P. Saunders, Helen J. Zeng, Hyungjin Kim, Aditya Sood, Tony F. Heinz, Aaron M. Lindenberg, Duan Luo, Felipe H. da Jornada, and Fang Liu. Hidden phonon highways promote photoinduced interlayer energy transfer in twisted transition metal dichalcogenide heterostructures. Science Adv. 10(4), eadj8819 (2024).</p><p><br/></p>', NULL, NULL, 1, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(64, 5, 1, 1, 0, '2023', '', '', '', '', 1750390570, NULL, NULL, '', '', 0, '<p>47&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jiaojian Shi, Haowei Xu, Christian Heide, Changan HuangFu, Chenyi Xia, Felipe de Quesada, Hongzhi Shen, Tianyi Zhang, Leo Yu, Amalya Johnson, Fang Liu, Enzheng Shi, Liying Jiao, Tony Heinz, Shambhu Ghimire, Ju Li, Jing Kong, Yunfan Guo, and Aaron M. Lindenberg. Giant room-temperature nonlinearities in a monolayer Janus topological semiconductor. Nat. Comm. 14(1), 4953 (2023).</p><p>46&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Niclas S. Mueller, Rakesh Arul, Gyeongwon Kang, Ashley P. Saunders, Amalya C. Johnson, Ana Sánchez-Iglesias, Shu Hu, Lukas A. Jakob, Jonathan Bar-David, Bart de Nijs, Luis M. Liz-Marzán, Fang Liu, and Jeremy J. Baumberg. Photoluminescence upconversion in monolayer WSe₂ activated by plasmonic cavities through resonant excitation of dark excitons. Nat. Comm. 14(1), 5726 (2023).</p><p>45&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qitong Li, Jung-Hwan Song, Fenghao Xu, Jorik van de Groep, Jiho Hong, Alwin Daus, Yan Joe Lee, Amalya C. Johnson, Eric Pop, Fang Liu, and Mark L. Brongersma. A Purcell-enabled monolayer semiconductor free-space optical modulator. Nat. Photonics 17(10), 897–903 (2023).</p><p>44&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yin Liu, Sze Cheung Lau, Wen-Hui Cheng, Amalya Johnson, Qitong Li, Emma Simmerman, Ouri Karni, Jack Hu, Fang Liu, Mark L. Brongersma, Tony F. Heinz, and Jennifer A. Dionne. Controlling valley-specific light emission from monolayer MoS₂ with achiral dielectric metasurfaces. Nano Lett. 23(13), 6124–6131 (2023). PMID: 37347949.</p><p>43&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C.J.R. Duncan, M. Kaemingk, W.H. Li, M.B. Andorf, A.C. Bartnik, A. Galdi, M. Gordon, C.A. Pennington, I.V. Bazarov, H.J. Zeng, Fang Liu, D. Luo, A. Sood, A.M. Lindenberg, M.W. Tate, D.A. Muller, J. Thom-Levy, S.M. Gruner, and J.M. Maxson. Multi-scale time-resolved electron diffraction: A case study in moiré materials. Ultramicroscopy 253, 113771 (2023).</p><p>42&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yuki Kobayashi, Christian Heide, Amalya C. Johnson, Vishal Tiwari, Fang Liu, David A. Reis, Tony F. Heinz, and Shambhu Ghimire. Floquet engineering of strongly driven excitons in monolayer tungsten disulfide. Nat. Phys. 19(2), 171–176 (2023).</p><p>41&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Christian Heide, Yuki Kobayashi, Amalya C. Johnson, Tony F. Heinz, David A. Reis, Fang Liu, and Shambhu Ghimire. High-harmonic generation from artificially stacked 2D crystals. Nanophotonics 12(2), 255–261 (2023).</p><p>40&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fang Liu. Time- and angle-resolved photoemission spectroscopy (tr-ARPES) of TMDC monolayers and bilayers. Chem. Sci. 14, 736–750 (2023). Selected and included in the 2023 most popular analytical chemistry articles collection.</p><p>39&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; B. Ardini, A. Bassi, A. Candeo, A. Genco, C. Trovatello, Fang Liu, X. Zhu, G. Valentini, G. Cerullo, R. Vanna, and C. Manzoni. High-throughput multimodal wide-field Fourier-transform Raman microscope. Optica 10(6), 663–670 (2023).</p><p><br/></p>', NULL, NULL, 2, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(17, 6, 1, 1, 0, '10/25/2024 Fang is named Chambers Fellow', '', 'Fang have been named a Chambers Fellow for recognition of excellence in teaching and research.', '', '', 1729783878, NULL, NULL, '', '', 0, '<p>Fang have been named a Chambers Fellow for recognition of excellence in teaching and research.</p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(18, 6, 1, 1, 0, '04/10/2024 Ashley is awarded the Sessler Leadership Award!', '', 'W﻿e had a lot of fun presenting at the nano@stanford/NNCI Annual Conference', '', '', 1729783928, NULL, NULL, '', '', 0, '<p>A﻿shley was nominated and selected for the Sessler Leadership Award from the Stanford Chemistry Department! Congratulations, Ashley!</p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(19, 7, 1, 1, 0, 'Facilities', '', '', '', '../upload/202505200817387980.jpg', 1744041192, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(20, 8, 1, 1, 0, '左侧文字', '', '', '', '', 1744041225, NULL, NULL, '', '', 0, '<strong>Wet preparation lab</strong><br/><p>The Liu lab has over 930 square feet of wet lab space, which includes one fume hood for wet chemistry processes, two portable cleanrooms for sample fabrication, one home-built transfer stage, two sinks, and over 56 feet of countertop space. The space is equipped with utilities including water, DI water, nitrogen, compressed air, and house vacuum to carry out chemical synthesis.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br/></p><p><br/></p><strong>Optics lab</strong><br/>The optics lab occupies approximately 700 square feet of state-of-the-art laser laboratory, adjacent to the wet preparation lab. It is comprised of four connected rooms housed on the ground level of a chemistry research building. Two of the laser rooms are temperature-controlled within ±1 degree Fahrenheit and humidity-controlled ±5%, with a dedicated air handling system that minimizes dust using HEPA filtration, ideal for femtosecond spectroscopy experiments. The lab includes vibration isolation tables to support the laser and experiments, and the utilities (water, nitrogen, compressed air, house vacuum, local exhaust) necessary to carry out ultra-high vacuum and cryogenic temperature experiments.<br/><p><span style=\"text-decoration: underline;\"><br/></span></p><p><span style=\"text-decoration: underline;\">The sample fabrication and processing capabilities (Lokey 154)</span> of the Liu lab include: a plasma cleaner with both argon and oxygen plasma, a cross-sectional polisher with grid sizes down to 50 nm, two portable cleanrooms of 40&#39; and 30&#39; with HEPA filters efficient on particles down to 0.3 microns in size, a spin coater, balance, heat stage, two vacuum sample storage containers, one nitrogen desiccator cabinet, a home-built microscope monolayer transfer and alignment stage in air, a home-built monolayer alignment stacking stage in vacuum, a Thermionics V90 thermal metal evaporator, and a home-built tube furnace with flow adjustment and turbo vacuum pumps.</p><span style=\"text-decoration: underline;\">Photoemission, electron diffraction, and pump probe spectroscopy (Lokey 155, 156, 157, 159)</span><br/>Two optical microscopes (Nikon and Zeiss) with magnifications from 2.5x to 100x. A home-built confocal laser microscope equipped with white light lamp, and CW lasers of 405 nm, 532 nm, and 632.8 nm. The microscope is coupled with a Princeton Instrument spectrograph and CCD camera, and Optigrate ultralow frequency Raman filters with detection capabilities including reflection, transmission, PL, and Raman spectra. The setup is integrated with a cryogenic cooler, a piezo scanning stage, and a garvo scanning stage, to enable spectroscopic mapping at temperatures down to 8 K. Lokey 157 is equipped with a Light Conversion Carbide femtosecond laser, a Few Cycle fiber compressor to provide tunable visible to near-infrared pump capabilities and a delay stage for pump-probe spectroscopy measurement. The optical setup is coupled to an ultrahigh vacuum mu-metal chamber with a Scienta Omicron R3000 electronic analyzer for angle-resolved photoemission spectroscopy measurements, manipulator, ion pump, a newly-installed Scienta Omicron UVS 10/35 UV source is for state-of-the-art ARPES studies in stand-alone applications, and a newly-installed a BDL800IR OCI Vacuum low energy electron spectrometer, ion gun, and mass spectrometer. Lokey 159 is equipped with a 532 nm pumped Tsunami femtosecond oscillator laser, and a home-built second-harmonic generation (SHG) stage.<br/><br/><br/><br/>', NULL, NULL, 1, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(21, 8, 1, 1, 0, '右侧文字', '', '', '', '', 1744041342, NULL, NULL, '', '', 0, '<h2>Stanford User Facilities</h2><p><a href=\"https://snsf.stanford.edu/\" target=\"_blank\">Stanford Nano Shared Facilities (SNSF)</a><br/></p><p><a href=\"https://snf.stanford.edu/\" target=\"_self\">Stanford Nanofabrication Facility (SNF)</a><br/></p><p><a href=\"https://mass-spec.stanford.edu/\" target=\"_self\">Stanford University Mass Spectrometry (SUMS)</a><br/></p><p><br/></p><p><br/></p><p><br/></p><h2>Department of Chemistry User Facilities</h2><p><a href=\"https://web.stanford.edu/group/chem-optics/\" target=\"_self\">Department of Chemistry Optics Facility</a></p><p><br/></p><h2>Other Facilities</h2><p><a href=\"https://physics.stanford.edu/resources/machine-shop\" target=\"_self\">Physics Machine Shop</a><br/></p><p><br/></p><p><br/></p>', NULL, NULL, 2, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(51, 7, 1, 1, 0, 'home built transfer stage', '', '', '', '../upload/202507281448034442.jpg', 1747268263, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(39, 1, 1, 1, 0, 'Lightwave manipulation with low dimensional structures', '', '2D TMDC monolayers demonstrate strong excitonic absorption and nonlinear optical responses, making them ideal platforms for radiative engineering in optical devices. \r\nThe strong nonlinear optical response and atomically thin structure of 2D materials make them ideal platforms for broad frequency conversion and for exploring strong field induced phenomena with ultrafast optical pulses.', '', '../upload/202504131422508237.jpg', 1744093355, NULL, NULL, '', '', 0, '<p>2D TMDC monolayers demonstrate strong excitonic absorption and nonlinear optical responses, making them ideal platforms for radiative engineering in optical devices. The strong nonlinear optical response and atomically thin structure of 2D materials make them ideal platforms for broad frequency conversion and for exploring strong field induced phenomena with ultrafast optical pulses. We have been central to several recent collaborative efforts achieving on-chip manipulation of coherent light-matter interactions in 2D TMDC monolayers through innovative material, photonic and plasmonic designs. These collaborative thrusts are focused on radiative engineering for additional 2D nanostructures, aiming to facilitate high-efficiency, scalable on-chip ultrathin quantum photonic networks for future information device applications. Our ongoing and future efforts aim to explore strong-field, nonequilibrium dynamics across a broader class of low-dimensional quantum materials and artificial heterostructures. Combined with tailored light–matter interactions via photonic and plasmonic platforms, we seek to realize ultrastrong coupling regimes and to engineer novel Floquet quantum phases with controlled symmetries on ultrafast timescales.</p><p>All of research directions above—spanning scalable synthesis, ultrafast dynamics, and radiative engineering across a hierarchy of confinement geometries— form an integrated program that will provide revolutionary new insight that will push the field of low dimensional materials beyond current understanding. Our discoveries will pave the way for future advances in nanoscale quantum devices and optoelectronics applications.</p><h2>Selected Publications</h2><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Mueller, N. S., Arul, R., Kang, G., Saunders, A. P., Johnson, A. C., S´anchez-Iglesias, A., Hu, S., Jakob, L. A., Bar-David, J., Nijs, B., Liz-Marz´an, L. M., Liu, F., and Baumberg, J. J. Photoluminescence upconversion in monolayer wse2 activated by plasmonic cavities through resonant excitation of dark excitons. Nat. Comm. 14(1), 5726 (2023).</p><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Li, Q., Song, J.-H., Xu, F., Groep, J., Hong, J., Daus, A., Lee, Y. J., Johnson, A. C., Pop, E., Liu, F., and Brongersma, M. L. A purcell-enabled monolayer semiconductor free-space optical modulator. Nature Photonics 17(10), 897<span style=\"font-family:DengXian\">–</span>903 (2023).</p><p><span style=\"font-family:Symbol\">·<span style=\"font:9px &#39;Times New Roman&#39;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Heide, C., Kobayashi, Y., Johnson, A. C., Heinz, T. F., Reis, D. A., Liu,F. , and Ghimire, S. High-harmonic generation from artificially stacked 2d crystals. Nanophotonics 12(2), 255–261 (2023).</p><p><br/></p>', NULL, NULL, 2, 0, '../upload/202505180834464549.png', '../upload/202505180834464568.jpg', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(23, 20, 2, 1, 0, 'Lecture Notes', '', '', '', '', 1744041774, NULL, NULL, '', '', 0, '<p>1、Class Intro / Symmetry Operations <a href=\"#\" target=\"_self\" textvalue=\"Lecture Slides\">Lecture Slides</a> | <a href=\"#\" target=\"_self\">Video Lecture</a></p><p>2、Symmetry and Point Groups <a href=\"#\" target=\"_self\" textvalue=\"Lecture Slides\">Lecture Slides</a> | <a href=\"#\" target=\"_self\">Video Lecture</a></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(24, 20, 2, 1, 0, 'Homework Problems', '', '', '', '', 1744041893, NULL, NULL, '', '', 0, '<p>All problems refer to the fifth edition of Inorganic Chemistry by Miessler, Fischer and Tarr.</p><p><br/></p><p>Chapter 4 – Symmetry and Group Theory</p><p>Problems: 2, 5, 9, 12, 15, 22, 24, 26, 28, 31, 32, 34, 41 | <a href=\"#\" target=\"_self\">Solutions</a></p><p>5th Edition, Chapter 4 Problems</p><p>Chapter 5 – Molecular Orbitals</p><p>Problems: 3, 7, 10, 14, 16, 27, 28, 31, 34, 35 | <a href=\"#\" target=\"_self\">Solutions</a></p><p>5th Edition, Chapter 5 Problems</p><p><br/></p><p><br/></p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(25, 20, 2, 1, 0, 'Additional Resources', '', '', '', '', 1744041969, NULL, NULL, '', '', 0, '<p><br/></p><p>Matrix Algebra Intro</p><p>from F. A. Cotton, Chemical Applications of Group Theory</p><p><br/></p><p>Derivation of General Rotation Matrix</p><p>from F. A. Cotton, Chemical Applications of Group Theory</p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(27, 21, 2, 1, 0, 'Lecture Notes', '', '', '', '', 1744041774, NULL, NULL, '', '', 0, '<p>1、Class Intro / Symmetry Operations <a href=\"#\" target=\"_self\" textvalue=\"Lecture Slides\">Lecture Slides</a> | <a href=\"#\" target=\"_self\">Video Lecture</a></p><p>2、Symmetry and Point Groups <a href=\"#\" target=\"_self\" textvalue=\"Lecture Slides\">Lecture Slides</a> | <a href=\"#\" target=\"_self\">Video Lecture</a></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(28, 21, 2, 1, 0, 'Homework Problems', '', '', '', '', 1744041893, NULL, NULL, '', '', 0, '<p>All problems refer to the fifth edition of Inorganic Chemistry by Miessler, Fischer and Tarr.</p><p><br/></p><p>Chapter 4 – Symmetry and Group Theory</p><p>Problems: 2, 5, 9, 12, 15, 22, 24, 26, 28, 31, 32, 34, 41 | <a href=\"#\" target=\"_self\">Solutions</a></p><p>5th Edition, Chapter 4 Problems</p><p>Chapter 5 – Molecular Orbitals</p><p>Problems: 3, 7, 10, 14, 16, 27, 28, 31, 34, 35 | <a href=\"#\" target=\"_self\">Solutions</a></p><p>5th Edition, Chapter 5 Problems</p><p><br/></p><p><br/></p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(29, 21, 2, 1, 0, 'Additional Resources', '', '', '', '', 1744041969, NULL, NULL, '', '', 0, '<p><br/></p><p>Matrix Algebra Intro</p><p>from F. A. Cotton, Chemical Applications of Group Theory</p><p><br/></p><p>Derivation of General Rotation Matrix</p><p>from F. A. Cotton, Chemical Applications of Group Theory</p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(30, 10, 1, 1, 0, 'Contact', '', '', '', '../upload/202504130009476153.jpg', 1744042126, NULL, NULL, '', '', 0, '<p style=\"text-align: right;\">We are always looking for highly-motivated students and postdocs to join our team.</p><p style=\"text-align: right;\">Please email Fang if you are interested in current opportunities.</p><p><br/></p><p style=\"text-align: right;\">Principal Investigator</p><p style=\"text-align: right;\">Prof. Fang Liu</p><p style=\"text-align: right;\">fliu10@stanford.edu</p><p style=\"text-align: right;\">Administrative Assistant</p><p><br/></p><p><br/></p><p style=\"text-align: right;\">Mailing Address</p><p style=\"text-align: right;\">Department of Chemistry</p><p style=\"text-align: right;\">337 Campus Drive</p><p style=\"text-align: right;\">Stanford, CA 94305</p><p style=\"text-align: right;\">Phones</p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(31, 12, 1, 1, 0, 'Stanford University', '', '', '', '', 1744042257, NULL, NULL, '', '', 0, '', NULL, NULL, 2, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'https://www.stanford.edu/', NULL, NULL),
(33, 12, 1, 1, 0, 'Stanford Chemistry Department', '', '', '', '', 1744042318, NULL, NULL, '', '', 0, '', NULL, NULL, 4, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'https://chemistry.stanford.edu/', NULL, NULL),
(34, 12, 1, 1, 0, 'Fang Liu Group on Google Map', '', '', '', '', 1744042327, NULL, NULL, '', '', 0, '', NULL, NULL, 5, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'https://www.google.com/maps/place/Lorry+I.+Lokey+Laboratory/@37.4319783,-122.1745409,17z/data=!3m1!4b1!4m6!3m5!1s0x808fbb2c9867f7cb:0x31e60f978456b7a4!8m2!3d37.4319783!4d-122.1730975!16s%2Fg%2F11c3vt8y17?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D', NULL, NULL),
(35, 13, 1, 1, 0, 'Fang Liu Group', '', 'Department of Chemistry\r\n337 Campus Drive\r\nStanford，CA 94305', '', '', 1744042493, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', '', '', ''),
(36, 13, 1, 1, 0, 'PRINCIPAL INVESTIGATOR', '', '', '', '', 1744042590, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'Prof. Fang Liu', '', 'fliu10@stanford.edu'),
(37, 13, 1, 1, 0, 'ADMINISTRATIVE ASSISTANT', '', '', '', '', 1744042686, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'Dewi Fernandez', '', 'dewif@stanford.edu'),
(38, 22, 1, 1, 0, 'Physical Chemistry Research at the Stanford University', '', 'Inventing techniques to measure and understand chemical processes down to femtosecond time resolutions, single-molecule lengths, and picomolar concentrations.', '', '../upload/202505180915131906.jpg', 1744078272, NULL, NULL, '', '', 0, '', NULL, NULL, 3, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'https://chemistry.stanford.edu/research/physical-chemistry', NULL, NULL),
(42, 6, 1, 1, 0, '10/25/2023 Amy and Ashely present at the NNCI Annual Conference', '', 'W﻿e had a lot of fun presenting at the nano@stanford/NNCI Annual Conference. (P.S. we also won the NanoTrivia event later in the afternoon. In the Liu lab, we know our nanoscience!)', '', '', 1744093695, NULL, NULL, '', '', 0, '<p><img src=\"/upload/image/20250413/1744525727623226.png\" alt=\"featured_hu1bc3626348888e5f71e029c45ec9a5f9_3650808_720x0_resize_lanczos_2.png\"/></p><p>W﻿e had a lot of fun presenting at the nano@stanford/NNCI Annual Conference. (P.S. we also won the NanoTrivia event later in the afternoon. In the Liu lab, we know our nanoscience!)</p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(43, 15, 1, 1, 0, 'Ashley Saunders', '', '', '', '../upload/202504131437098577.jpg', 1744094189, NULL, NULL, '', '', 0, '<p>Graduate Student, Physical Chemistry</p><p><br/></p><p>Undergrad: The Pennsylvania State University, B.S in Chemistry</p><p><br/></p><p>Hometown: Fairfax, VA</p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'Ph.D Student, Physical Chemistry', 'aps12@stanford.edu', ''),
(44, 15, 1, 1, 0, 'Gregory Zaborski Jr.', '', '', '', '../upload/202504131442223830.jpg', 1744094495, NULL, NULL, '', '', 0, '<p>Fellowships: N﻿SF-GRFP, Diversifying Academia, Recruiting Excellence (DARE) , Pat Tillman Foundation</p><p><br/></p><p>H﻿ometown: San Clemente, CA</p><p><br/></p><p>R﻿esearch: Atomic scale engineering and structural and optical characterization of moiré matter.</p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'Ph.D. Candidate, Materials Science & Engineering', 'gzjr@stanford.edu', 'https://scholar.google.com/citations?user=eRh2oz4AAAAJ&hl=en'),
(45, 15, 1, 1, 0, 'Qile Li', '', '', '', '../upload/202504131443214984.jpg', 1744094544, NULL, NULL, '', '', 0, '<p>I﻿ do ARPES, SPM and 2D materials</p><p><br/></p><p>Interests</p><p>Bouldering</p><p>music</p><p>food</p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'Postdoc', 'qileli@stanford.edu', ''),
(46, 15, 1, 1, 0, 'Samuel Lai', '', '', '', '../upload/202504131444094070.jpg', 1744094603, NULL, NULL, '', '', 0, '<p>Ph.D. Student, Materials Science &amp; Engineering</p><p><br/></p><p>H﻿ometown: Singapore</p><p><br/></p><p>U﻿ndergrad: National University of Singapore, Materials Science &amp; Engineering B.Eng</p><p><br/></p>', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'Ph.D. Student, Materials Science & Engineering', 'samlaice@stanford.edu', ''),
(48, 23, 1, 1, 0, '2', '', '', '', '../upload/202505180730274366.jpg', 1744679131, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(49, 22, 1, 1, 0, 'Liu Research Group', '', 'Low dimensional materials and the unique structures built from them has a variety of new exotic properties beyond traditional materials. We hope to produce low dimensional materials and their artificial structures in a sizable and controllable way. Our ultimate goal is to use these materials to provide novel platforms for next-generation information processing, light processing, and quantum devices. In order to do that, we need to unravel their static and dynamical electronic, magnetic and photonic properties, using the cutting edge characterization techniques including optical and photoemission spectroscopy. We are an experimental material / physical chemistry group. Welcome to join us!', '', '', 1744683653, NULL, NULL, '', '', 0, '', NULL, NULL, 2, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', '', NULL, NULL),
(50, 22, 1, 1, 0, 'Material Chemistry Research at the Stanford University', '', 'Designing sustainable new forms of matter with customized properties for applications in energy storage and conversion, future electronics, molecular imaging and sensing, drug and cell delivery, environmental remediation, and smart materials that can sense and respond to their environment.', '', '../upload/202505180915289122.jpg', 1744078272, NULL, NULL, '', '', 0, '', NULL, NULL, 4, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', 'https://chemistry.stanford.edu/research/materials-chemistry', NULL, NULL),
(52, 7, 1, 1, 0, '3D printer', '', '', '', '../upload/202507281447264094.jpg', 1747268289, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(53, 7, 1, 1, 0, 'furnace', '', '', '', '../upload/202507281446534044.jpg', 1747268301, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(54, 7, 1, 1, 0, 'plasma cleaner', '', '', '', '../upload/202507281446197168.jpg', 1747268313, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(55, 7, 1, 1, 0, 'chamber', '', '', '', '../upload/202507281445445480.jpg', 1747268328, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(56, 7, 1, 1, 0, 'fs laser', '', '', '', '../upload/202505200819089252.jpg', 1747268341, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '非法文件类型', 99, '', NULL, NULL, NULL),
(57, 7, 1, 1, 0, 'static PL', '', '', '', '../upload/202505200819229515.jpg', 1747268351, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(58, 7, 1, 1, 0, 'cryostat', '', '', '', '../upload/202507281445003215.jpg', 1747268365, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(59, 7, 1, 1, 0, 'evaporator', '', '', '', '../upload/202507281444225581.jpg', 1747268377, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(60, 7, 1, 1, 0, 'evp bonder', '', '', '', '../upload/202507281441288467.jpg', 1747268400, NULL, NULL, '', '', 0, '', NULL, NULL, 0, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(65, 5, 1, 1, 0, '2022', '', '', '', '', 1750390626, NULL, NULL, '', '', 0, '<p>38&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Eric Y. Ma, Jenny Hu, Lutz Waldecker, Kenji Watanabe, Takashi Taniguchi, Fang Liu, and Tony F. Heinz. The Reststrahlen effect in the optically thin limit: A framework for resonant response in thin media. Nano Lett. 22(20), 8389–8393 (2022).</p><p>37&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Christian Heide, Yuki Kobayashi, Amalya C. Johnson, Fang Liu, Tony F. Heinz, David A. Reis, and Shambhu Ghimire. Probing electron-hole coherence in strongly driven 2D materials using high-harmonic generation. Optica 9(5), 512–516 (2022).</p><p>36&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Varun Mapara, Arup Barua, Volodymyr Turkowski, M. Tuan Trinh, Christopher Stevens, Hengzhou Liu, Florence A. Nugera, Nalaka Kapuruge, Humberto Rodriguez Gutierrez, Fang Liu, Xiaoyang Zhu, Dmitry Semenov, Stephen A. McGill, Nihar Pradhan, David J. Hilton, and Denis Karaiskaj. Bright and dark exciton coherent coupling and hybridization enabled by external magnetic fields. Nano Lett. 22(4), 1680–1687 (2022).</p><p><br/></p>', NULL, NULL, 3, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL),
(66, 5, 1, 1, 0, '2021', '', '', '', '', 1750390662, NULL, NULL, '', '', 0, '<p>35&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yuki Kobayashi, Christian Heide, Hamed K. Kelardeh, Amalya Johnson, Fang Liu, Tony F. Heinz, David A. Reis, and Shambhu Ghimire. Polarization flipping of even-order harmonics in monolayer transition-metal dichalcogenides. Ultrafast Sci. 2021, 9820716 (2021).</p><p>34&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fang Liu. Mechanical Exfoliation of Large Area 2D Materials from vdW Crystals. Prog. Surf. Sci. 100626 (2021).</p><p>33&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Veronica R. Policht, Mattia Russo, Fang Liu, Chiara Trovatello, Margherita Maiuri, Yusong Bai, Xiaoyang Zhu, Stefano Dal Conte, and Giulio Cerullo. Dissecting interlayer hole and electron transfer in transition metal dichalcogenide heterostructures via two-dimensional electronic spectroscopy. Nano Lett. 21(11), 4738–4743 (2021). PMID: 34037406.</p><p>32&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kaiyuan Yao, Nathan R. Finney, Jin Zhang, Samuel L. Moore, Lede Xian, Nicolas Tancogne-Dejean, Fang Liu, Jenny Ardelean, Xinyi Xu, Dorri Halbertal, K. Watanabe, T. Taniguchi, Hector Ochoa, Ana Asenjo-Garcia, Xiaoyang Zhu, D. N. Basov, Angel Rubio, Cory R. Dean, James Hone, and P. James Schuck. Enhanced tunable second harmonic generation from twistable interfaces and vertical superlattices in boron nitride homostructures. Sci. Adv. 7(10) (2021).</p><p>31&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Olivia Fernandez-Delgado, P. S. Chandrasekhar, Natalia Cano-Sampaio, Zoe C. Simon, Alain R. Puente-Santiago, Fang Liu, Edison Castro, and Luis Echegoyen. The role of fullerene derivatives in perovskite solar cells: Electron transporting or electron extraction layers? J. Mater. Chem. C (2021). DOI: 10.1039/D0TC05903.</p><p>30&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chiara Trovatello, Andrea Marini, Xinyi Xu, Changhwan Lee, Fang Liu, Nicola Curreli, Cristian Manzoni, Stefano Dal Conte, Kaiyuan Yao, Alessandro Ciattoni, James Hone, Xiaoyang Zhu, P. James Shuck, and Giulio Cerullo. Optical parametric amplification by monolayer transition metal dichalcogenides. Nat. Photonics 15, 6–10 (2021).</p><p><br/></p>', NULL, NULL, 4, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL);
INSERT INTO `mobanqu_archives` (`id`, `typeid`, `ismake`, `channel`, `arcrank`, `title`, `shorttitle`, `writer`, `source`, `litpic`, `pubdate`, `senddate`, `mid`, `keywords`, `description`, `weight`, `body`, `boody`, `linkyurl`, `paixu`, `lanmuid`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `pic7`, `bodyy`, `vieo`, `fileiinput`, `hot`, `product_album`, `ftitle`, `ftitle1`, `ftitle2`) VALUES
(67, 5, 1, 1, 0, '2020 and before', '', '', '', '', 1750390679, NULL, NULL, '', '', 0, '<p>29&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yusong Bai, Lin Zhou, Jue Wang, Wenjing Wu, Leo McGilly, Dorri Halbertal, Chiu Fan Bowen Lo, Fang Liu, Jenny Ardelean, Pasqual Rivera, Nathan Finney, Xu-Chen Yang, Wang Yao, Xiaodong Xu, James Hone, Abhay Pasupathy, and X.-Y. Zhu. Excitons in strain-induced one-dimensional moiré potentials at transition metal dichalcogenide heterojunctions. Nature Mater. 19, 1124 (2020).</p><p>28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fang Liu, Qiuyang Li, and X.-Y. Zhu. Direct determination of momentum-resolved electron transfer in the photoexcited van der Waals heterobilayer WS₂/MoS₂. Phys. Rev. B 101, 201405 (2020).</p><p>27&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qiuyang Li, Fang Liu, Jake C. Russell, Xavier Roy, and Xiaoyang Zhu. Strong polaronic effect in a superatomic two-dimensional semiconductor. J. Chem. Phys. 152(17), 171101 (2020).</p><p>26&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fang Liu, Wenjing Wu, Yusong Bai, Sanghoon Chae, Qiuyang Li, Jue Wang, James Hone, and X.-Y. Zhu. Disassembling 2D van der Waals crystals into macroscopic monolayers and reassembling into artificial lattices. Science 367, 903–906 (2020).</p><p>25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Feifan Wang, Jue Wang, Sebastian F. Maehrlein, Yingzi Ma, Fang Liu, and X.-Y. Zhu. Broad band near-infrared doublet emission in a tetrathiafulvalene-based metal organic framework. J. Phys. Chem. Lett. 11, 762 (2020).</p><p>24&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Edison Castro, Olivia Fernandez-Delgado, Albert Artigas, Gerardo Zavala, Fang Liu, Antonio Moreno-Vicente, Antonio Rodriguez-Fortea, Jose D. Velasquez, Josep M. Poblet, and Luis Echegoyen. α-DTC70 fullerene performs significantly better than β-DTC70 as electron transporting material in perovskite solar cells. J. Mater. Chem. C 8, 6813–6819 (2020).</p><p>23&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fang Liu, Mark E. Ziffer, Kameron R. Hansen, Jue Wang, and X.-Y. Zhu. Direct determination of band-gap renormalization in the photoexcited monolayer MoS₂. Phys. Rev. Lett. 122, 246803 (2019).</p><p>22&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fang Liu<span style=\"font-family:&#39;Cambria Math&#39;,serif\">∗</span>, Feifan Wang<span style=\"font-family:&#39;Cambria Math&#39;,serif\">∗</span>, Kameron R. Hansen, and X.-Y. Zhu. Bimodal bandgaps in mixed cesium methylammonium lead bromide perovskite single crystals. J. Phys. Chem. C 123, 14865 (2019). (<span style=\"font-family:&#39;Cambria Math&#39;,serif\">∗</span>Equal contribution)</p><p>21&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Andrew P. Schlaus, Michael S. Spencer, Kiyoshi Miyata, Fang Liu, Xiaoxia Wang, Ipshita Datta, Michal Lipson, Anlian Pan, and X.-Y. Zhu. How lasing happens in CsPbBr₃ perovskite nanowires. Nature Commun. 10, 265 (2019).</p><p>20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Olivia Fernandez-Delgado, Edison Castro, Carolina Ganivet, Kaylin Fosnacht, Fang Liu, Thomas E. Mates, Ying Liu, Xiaojun Wu, and Luis Echegoyen. Variation of interfacial interactions in PC₆₁BM-like electron transporting compounds for perovskite solar cells. ACS Appl. Mater. Interfaces (2019).</p><p>19&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Xinjue Zhong, Kihong Lee, Bonnie Choi, Daniele Meggiolaro, Fang Liu, Colin Nuckolls, Abhay Pasupathy, Filippo De Angelis, Patrick Batail, Xavier Roy, and X.-Y. Zhu. Superatomic two-dimensional semiconductor. Nano Lett. 18, 1483–1488 (2018).</p><p>18&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Samuel R. Peurifoy, Edison Castro, Fang Liu, X.-Y. Zhu, Fay Ng, Steffen Jockusch, Michael L. Steigerwald, Luis Echegoyen, Colin Nuckolls, and Thomas J. Sisto. Three-dimensional graphene nanostructures. J. Am. Chem. Soc. 140, 9341–9345 (2018).</p><p>17&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tyler J.S. Evans, Kiyoshi Miyata, Prakriti P. Joshi, Sebastian Maehrlein, Fang Liu, and X.-Y. Zhu. Competition between hot-electron cooling and large polaron screening in CsPbBr₃ perovskite single crystals. J. Phys. Chem. C 122, 13724–13730 (2018).</p><p>16&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Edison Castro, Thomas J. Sisto, Elkin L. Romero, Fang Liu, Samuel R. Peurifoy, Jue Wang, X.-Y. Zhu, Colin Nuckolls, and Luis Echegoyen. Cove-edge nanoribbon materials for efficient inverted halide perovskite solar cells. Angew. Chem. Int. Ed. 56, 14648–14652 (2017).</p><p>15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Craig A. Taatjes, Fang Liu, Brandon Rotavera, Manoj Kumar, Rebecca Caravan, David L. Osborn, Ward H. Thompson, and Marsha I. Lester. Hydroxyacetone production from C₃ Criegee intermediates. J. Phys. Chem. A. 121, 16–23 (2016).</p><p>14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yi Fang, Fang Liu, Victoria P. Barber, Stephen J. Klippenstein, Anne B. McCoy, and Marsha I. Lester. Deep tunneling in the unimolecular decay of CH₃CHOO Criegee intermediates to OH radical products. J. Chem. Phys. 145, 234308 (2016).</p><p>13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yi Fang, Fang Liu, Stephen J. Klippenstein, and Marsha I. Lester. Direct observation of unimolecular decay of CH₃CH₂CHOO Criegee intermediates to OH products. J. Chem. Phys. 145, 044312 (2016).</p><p>12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amy M. Green, Fang Liu, and Marsha I. Lester. UV + VUV double-resonance studies of autoionizing Rydberg states of the hydroxyl radical. J. Chem. Phys. 144, 184311 (2016).</p><p>11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yi Fang, Fang Liu, Victoria P. Barber, Stephen J. Klippenstein, Anne B. McCoy, and Marsha I. Lester. Real-time observation of unimolecular decay of Criegee intermediates to OH radical products. J. Chem. Phys. 144, 061102 (2016).</p><p>10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fang Liu, Yi Fang, Manoj Kumar, Ward H. Thompson, and Marsha I. Lester. Direct observation of vinyl hydroperoxide. Phys. Chem. Chem. Phys. 17, 20490–20494 (2015).</p><p>9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fang Liu, Joseph M. Beames, and Marsha I. Lester. Direct production of OH radicals upon CH overtone activation of (CH₃)₂COO Criegee intermediates. J. Chem. Phys. 141, 234312 (2014).</p><p>8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fang Liu, Joseph M. Beames, Andrew S. Petit, Anne B. McCoy, and Marsha I. Lester. Infrared-driven unimolecular reaction of CH₃CHOO Criegee intermediates to OH radical products. Science 345, 1596–1598 (2014).</p><p>7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fang Liu, Joseph M. Beames, Amy M. Green, and Marsha I. Lester. UV spectroscopic characterization of dimethyl- and ethyl-substituted carbonyl oxides. J. Phys. Chem. A 118, 2298–2306 (2014).</p><p>6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Joseph M. Beames, Fang Liu, and Marsha I. Lester. 1+1<span style=\"font-family: DengXian\">′</span> resonant multiphoton ionization of OH radicals via the A²Σ⁺ state: Insights from direct comparison with A-X laser-induced fluorescence detection. Mol. Phys. 112, 897–903 (2014).</p><p>5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Joseph M. Beames, Fang Liu, Lu Lu, and Marsha I. Lester. UV spectroscopic characterization of an alkyl-substituted Criegee intermediate CH₃CHOO. J. Chem. Phys. 138, 244307 (2013).</p><p>4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Joseph M. Beames, Fang Liu, Lu Lu, and Marsha I. Lester. Ultraviolet spectrum and photochemistry of the simplest Criegee intermediate CH₂OO. J. Am. Chem. Soc. 134, 20045–20048 (2012). (Highlighted in RSC ChemistryWorld, April 12, 2013.)</p><p>3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fan Xiaobing, Fang Liu, Yao Siyu, Deng Xianhe, Zhou Wenjuan, Kou Yuan, et al. Preparation of MoS₂ nanocatalyst and its application in hydrodesulfurization. Chinese J. Catal. 33, 1027–1031 (2012).</p><p>2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Joseph M. Beames, Fang Liu, Marsha I. Lester, and Craig Murray. A new spectroscopic window on hydroxyl radicals using UV + VUV resonant ionization. J. Chem. Phys. 134, 241102 (2011).</p><p>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Xiao-Bing Fan, Zhi-Yuan Tao, Chao-Xian Xiao, Fang Liu, and Yuan Kou. Liquid-phase Fischer-Tropsch synthesis over Fe nanoparticles dispersed in polyethylene glycol (PEG). Green Chem. 12, 795–797 (2010).</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p><br/></p>', NULL, NULL, 5, 0, '', '', '', '', '', NULL, NULL, '', '', '', 99, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- The structure of `moba_admin_user`
--

CREATE TABLE `moba_admin_user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `add_time` varchar(32) NOT NULL DEFAULT '',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) DEFAULT '',
  `lanmuid` varchar(70) DEFAULT NULL,
  `lanmuid1` varchar(50) DEFAULT NULL,
  `lanmuid2` varchar(50) DEFAULT NULL,
  `lanmuid3` varchar(50) DEFAULT NULL,
  `lanmuid4` varchar(50) DEFAULT NULL,
  `lanmuid5` varchar(50) DEFAULT NULL,
  `lanmuid6` varchar(50) DEFAULT NULL,
  `lanmuid7` varchar(50) DEFAULT NULL,
  `lanmuid8` varchar(50) DEFAULT NULL,
  `lanmuid9` varchar(50) DEFAULT NULL,
  `lanmuid10` varchar(50) DEFAULT NULL,
  `lanmuid11` varchar(50) DEFAULT NULL,
  `lanmuid12` varchar(70) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moba_admin_user`
--

INSERT INTO `moba_admin_user` (`user_id`, `user_name`, `email`, `password`, `add_time`, `last_login`, `last_ip`, `lanmuid`, `lanmuid1`, `lanmuid2`, `lanmuid3`, `lanmuid4`, `lanmuid5`, `lanmuid6`, `lanmuid7`, `lanmuid8`, `lanmuid9`, `lanmuid10`, `lanmuid11`, `lanmuid12`) VALUES
(1, 'admin', 'admin@qq.com', '7fef6171469e80d32c0559f88b377245', '25-03-29 09:30:28', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- The structure of `moba_book`
--

CREATE TABLE `moba_book` (
  `id` int(11) NOT NULL,
  `ziduan1` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '账号',
  `ziduan2` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '密码',
  `ziduan3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '昵称',
  `ziduan4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '电话',
  `data` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ziduan5` text COLLATE utf8_unicode_ci COMMENT '备注',
  `ismake` int(10) NOT NULL DEFAULT '0',
  `ziduan6` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '微信',
  `ziduan7` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'QQ',
  `ziduan8` varchar(200) COLLATE utf8_unicode_ci DEFAULT '0' COMMENT '余额',
  `banjid` varchar(10) COLLATE utf8_unicode_ci DEFAULT '0',
  `ziduan9` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '真实姓名',
  `ziduan10` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '身份证'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='会员';

-- --------------------------------------------------------

--
-- The structure of `moba_classt`
--

CREATE TABLE `moba_classt` (
  `cat_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `paixu` int(11) DEFAULT '50',
  `cat_name` varchar(100) DEFAULT '',
  `typedir` char(60) DEFAULT '',
  `ispic` int(11) DEFAULT '1',
  `isclass` char(11) DEFAULT '1',
  `isabout` int(11) NOT NULL DEFAULT '1',
  `isshuju` int(11) NOT NULL DEFAULT '1',
  `ispicsmalll` int(11) NOT NULL DEFAULT '1',
  `content` varchar(10) DEFAULT NULL,
  `body` text,
  `body1` text,
  `litpic1` varchar(300) DEFAULT NULL,
  `litpic2` varchar(300) DEFAULT NULL,
  `hot` varchar(50) DEFAULT '99',
  `datae` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moba_classt`
--

INSERT INTO `moba_classt` (`cat_id`, `parent_id`, `paixu`, `cat_name`, `typedir`, `ispic`, `isclass`, `isabout`, `isshuju`, `ispicsmalll`, `content`, `body`, `body1`, `litpic1`, `litpic2`, `hot`, `datae`) VALUES
(1, 0, 50, 'Research', '', 1, '2', 2, 2, 1, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(2, 0, 50, 'Research introduce', '', 1, '2', 1, 2, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(3, 0, 50, 'Team', '', 1, '1', 2, 2, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(4, 0, 50, 'Team Carousel', '', 1, '2', 2, 1, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(5, 0, 50, 'Publications', '', 2, '2', 2, 2, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(6, 0, 50, 'News', '', 2, '2', 2, 2, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(7, 0, 50, 'Facilities Carousel', '', 1, '2', 2, 1, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(8, 0, 50, 'Facilities introduce', '', 2, '2', 1, 2, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(9, 0, 50, 'Teaching', '', 2, '1', 2, 2, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(10, 0, 50, 'Contact', '', 1, '2', 1, 2, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(11, 0, 50, 'Column', '', 1, '2', 1, 1, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(12, 0, 50, 'Link', '', 2, '2', 2, 1, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(13, 0, 50, 'Bottom text', '', 2, '2', 1, 1, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(14, 3, 50, 'Principal Investigator', '', 1, '1', 1, 1, 1, NULL, '0', '0', '', '', '99', '2025-04-12 23:04:32'),
(15, 3, 50, 'Researchers', '', 1, '1', 1, 1, 1, NULL, '0', '0', '', '', '99', '2025-04-12 23:04:43'),
(20, 9, 50, 'CHEM 131: Instrumental Analysis Principles and Practice', '', 1, '1', 1, 1, 1, NULL, '<p>The core objectives of the course will focus upon introducing and \r\nproviding hands-on practice with analytical separation, spectroscopic \r\nidentification, and calibrated quantification with strong technical \r\ncommunication (for the Writing-in-the-Major requirement) emphasized \r\nthroughout the course. Lectures will focus on theory, and laboratory \r\nactivities will provide hands-on practice with the GC, LC, XPS, ICP, MS,\r\n and UV/Vis instruments. Data analysis will be emphasized throughout the\r\n course with Python being the primary tool for plotting and \r\ncomputations. Statistical measurements will be introduced to gauge the \r\nquality and validity of data. Lectures will be three times a week with a\r\n required four-hour laboratory section. The course should be completed \r\nprior to CHEM courses 174,176, or 184. Prerequisite: \r\n<a href=\"https://explorecourses.stanford.edu/search?view=catalog&filter-coursestatus-Active=on&page=0&q=CHEM33\">CHEM 33</a> or \r\n<a href=\"https://explorecourses.stanford.edu/search?view=catalog&filter-coursestatus-Active=on&page=0&q=CHEM100\">CHEM 100</a>; and \r\n<a href=\"https://explorecourses.stanford.edu/search?view=catalog&filter-coursestatus-Active=on&page=0&q=CS106A\">CS 106A</a>.</p>', '0', '', '', '99', '2025-04-13 00:01:50'),
(21, 9, 50, 'CHEM 173/271: Advanced Physical Chemistry / Quantum chemistry', '', 1, '1', 1, 1, 1, NULL, 'The principles of quantum mechanics. General formulation, mathematical \r\nmethods, and applications of quantum theory. The topics include: \r\nSchrodinger equation, multidimensional systems, quantum mechanical \r\ntunneling, Dirac notation, postulates of quantum mechanics, harmonic \r\noscillator, vibrational modes in molecules and solids, approximate \r\nmethods including perturbation theory and the variational method. \r\nIntroduction to molecular structure methods.', '0', '', '', '99', '2025-04-13 00:01:58'),
(22, 0, 50, 'Homepage Text', '', 1, '2', 1, 1, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL),
(23, 0, 50, 'Carousel image', '', 1, '2', 2, 1, 2, NULL, NULL, NULL, NULL, NULL, '99', NULL);

-- --------------------------------------------------------

--
-- The structure of `moba_feld` 
--

CREATE TABLE `moba_feld` (
  `id` int(11) NOT NULL,
  `typeid` int(100) NOT NULL,
  `feldname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `textname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feldwidth` int(11) NOT NULL DEFAULT '50',
  `checked` int(11) NOT NULL DEFAULT '1',
  `paixu` int(11) NOT NULL DEFAULT '9999'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `moba_feld`
--

INSERT INTO `moba_feld` (`id`, `typeid`, `feldname`, `textname`, `remark`, `feldwidth`, `checked`, `paixu`) VALUES
(1, 3, 'ftitle', '职称', '', 400, 1, 9999),
(2, 3, 'ftitle1', '邮箱', '', 400, 1, 9999),
(3, 3, 'ftitle2', 'Google', '', 700, 1, 9999),
(5, 12, 'ftitle', '外链', '', 700, 1, 9999),
(6, 13, 'ftitle', '名称', '', 400, 1, 9999),
(7, 13, 'ftitle1', '电话', '', 400, 1, 9999),
(8, 13, 'ftitle2', '邮箱', '', 400, 1, 9999),
(9, 22, 'ftitle', '外链', '', 700, 1, 9999);

-- --------------------------------------------------------

--
-- The structure of `moba_set`
--

CREATE TABLE `moba_set` (
  `we_id` int(10) UNSIGNED NOT NULL,
  `web_name` varchar(50) DEFAULT NULL,
  `goods_img` varchar(80) DEFAULT NULL,
  `web_titlel` varchar(200) DEFAULT NULL,
  `we_con` longtext,
  `we_gjz` varchar(255) DEFAULT '',
  `we_gjzms` varchar(255) DEFAULT NULL,
  `we_gjzms2` varchar(250) DEFAULT NULL,
  `we_gjzms3` varchar(250) DEFAULT NULL,
  `we_gjzms4` varchar(250) DEFAULT NULL,
  `we_gjzms5` varchar(250) DEFAULT NULL,
  `we_gjzms6` varchar(250) DEFAULT NULL,
  `we_gjzms7` varchar(250) DEFAULT NULL,
  `we_gjzms8` varchar(250) DEFAULT NULL,
  `we_gjzms9` varchar(250) DEFAULT NULL,
  `we_gjzms10` varchar(250) DEFAULT NULL,
  `we_gjzms11` varchar(250) DEFAULT NULL,
  `we_gjzms12` varchar(250) DEFAULT NULL,
  `we_gjzms13` varchar(250) DEFAULT NULL,
  `we_url` varchar(1000) DEFAULT NULL,
  `wei_yejiao` varchar(255) DEFAULT NULL,
  `m_fahuo` varchar(50) DEFAULT NULL,
  `m_down` varchar(50) DEFAULT NULL,
  `we_youqlj1` varchar(50) DEFAULT NULL,
  `we_ceshi` varchar(500) DEFAULT NULL,
  `checkd` int(10) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moba_set`
--

INSERT INTO `moba_set` (`we_id`, `web_name`, `goods_img`, `web_titlel`, `we_con`, `we_gjz`, `we_gjzms`, `we_gjzms2`, `we_gjzms3`, `we_gjzms4`, `we_gjzms5`, `we_gjzms6`, `we_gjzms7`, `we_gjzms8`, `we_gjzms9`, `we_gjzms10`, `we_gjzms11`, `we_gjzms12`, `we_gjzms13`, `we_url`, `wei_yejiao`, `m_fahuo`, `m_down`, `we_youqlj1`, `we_ceshi`, `checkd`) VALUES
(1, '', '../upload/202507281436271237.png', 'Fang Liu Group', NULL, 'Fang Liu Group', '© Copyright Fang Liu Group', 'Fang Liu Group', 'upload/202207250855435760.jpg', '', '', '', '../upload/20250413002634275.png', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 1);

--
-- Dumping indexes for tables
--

--
-- Keys for `mobanqu_archives`
--
ALTER TABLE `mobanqu_archives`
  ADD PRIMARY KEY (`id`);

-- Keys for `moba_admin_user`
--
ALTER TABLE `moba_admin_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Keys for `moba_book`
--
ALTER TABLE `moba_book`
  ADD PRIMARY KEY (`id`);

--
-- Keys for `moba_classt`
--
ALTER TABLE `moba_classt`
  ADD PRIMARY KEY (`cat_id`);

--
-- Keys for `moba_feld`
--
ALTER TABLE `moba_feld`
  ADD PRIMARY KEY (`id`);

--
-- Keys for `moba_set`
--
ALTER TABLE `moba_set`
  ADD PRIMARY KEY (`we_id`);

--
-- AUTO_INCREMENT for exported tables
--

--
-- Use AUTO_INCREMENT `mobanqu_archives`
--
ALTER TABLE `mobanqu_archives`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Use AUTO_INCREMENT `moba_admin_user`
--
ALTER TABLE `moba_admin_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Use AUTO_INCREMENT `moba_book`
--
ALTER TABLE `moba_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Use AUTO_INCREMENT `moba_classt`
--
ALTER TABLE `moba_classt`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Use AUTO_INCREMENT `moba_feld`
--
ALTER TABLE `moba_feld`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
