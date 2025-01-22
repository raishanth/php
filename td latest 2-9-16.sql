-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 02, 2016 at 06:43 AM
-- Server version: 5.0.18
-- PHP Version: 5.1.2
-- 
-- Database: `td`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `contact`
-- 

CREATE TABLE `contact` (
  `sno` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desig` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `deptadd` varchar(100) NOT NULL,
  `offno` varchar(40) default NULL,
  `faxno` varchar(40) default NULL,
  `resino` varchar(40) default NULL,
  `mno` varchar(40) default NULL,
  PRIMARY KEY  (`sno`),
  KEY `mno` (`mno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `contact`
-- 

INSERT INTO `contact` VALUES (29, 'KRISHNA RAO', 'ADVOCATE', '', '', '', '', '', '9434281950');
INSERT INTO `contact` VALUES (28, 'R.P.SINGH', '', 'ELECTRICITY', '', '', '', '', '9434283426');
INSERT INTO `contact` VALUES (27, 'BISHNU PADA RAY', 'MP', '', '', '242222, 236835', '', '', '9434282720');
INSERT INTO `contact` VALUES (26, 'K.ABDU', 'AS', 'Hr.Edn', '', '231158', '', '', '9933231581');
INSERT INTO `contact` VALUES (2, 'SIVA KUMAR', 'DEO', 'MEDICAL', '', '', '', '', '9434286677');
INSERT INTO `contact` VALUES (25, 'SATYAPAL', 'HC', 'RAJ NIWAS', '', '', '', '', '9434263452');
INSERT INTO `contact` VALUES (3, 'K RAJAN', 'COMPUTER ASST.', 'RAJNIWAS', '', '233113', '', '', '9434294563');
INSERT INTO `contact` VALUES (24, 'HAMEED', 'AS', 'SHIPPING', '', '232761', '', '', '9434281135');
INSERT INTO `contact` VALUES (23, 'LINU ALEX', 'LAB TECHNICIAN', 'G.B.PANT', '', '', '', '', '9434267018');
INSERT INTO `contact` VALUES (22, 'K.K.PATHAK', 'JOINT SECY', 'UT', '', '23092630', '', '', '');
INSERT INTO `contact` VALUES (21, 'BB GHARAMI', 'AS HOME', 'SECRETARIATE', '', '241042', '', '', '');
INSERT INTO `contact` VALUES (20, 'Dr.WAJID ALI SAHA', 'PATHOLOGIST', '', '', '', '', '', '9434281129');
INSERT INTO `contact` VALUES (1, 'Prof Jagdesh Mukhi', 'LT. Governer', 'Raj Niwas', '', '233331', '234568', '258633, 25543031', '9350053031');
INSERT INTO `contact` VALUES (4, 'Nisha ', 'Steno', 'Raj Niwas', '', '', '', '', '9531802541');
INSERT INTO `contact` VALUES (5, 'Munish Kumar', 'Peon', 'Raj Niwas', '', '233113', '', '', '9933210263');
INSERT INTO `contact` VALUES (19, 'ANIL', 'ROOM BOOKING COUNTER', 'IP&T', '', '232694', '232642', '', '9474225476');
INSERT INTO `contact` VALUES (6, 'Selva', 'CA', 'RD', '', '', '', '', '9434283977');
INSERT INTO `contact` VALUES (7, 'RASHEEDA IQBAL', '', 'Cellular Jail', '', '', '', '', '9434260984');
INSERT INTO `contact` VALUES (8, 'MOHD.JADWET', '', 'JADWET', '', '232271', '', '', '9434280314');
INSERT INTO `contact` VALUES (9, 'GULAM HUSSAIN JADWET', '', 'JADWET', '', '233051', '233400', '233034', '9933285284');
INSERT INTO `contact` VALUES (10, 'PATRICK(PETER)', '', 'DUGONG GUEST HOUSE', '', '243237', '243257', '', '9434260823');
INSERT INTO `contact` VALUES (11, 'JAMES', 'JTO', 'BSNL', '', '', '', '', '9434287994');
INSERT INTO `contact` VALUES (12, 'JAMES', 'OSD', 'IT', '', '', '', '', '9474219947');
INSERT INTO `contact` VALUES (13, 'VENKET', '', 'PBMC', '', '', '', '9933208100', '9434282072');
INSERT INTO `contact` VALUES (15, 'NAGUR', 'HOUSE HOLD', 'RAJ NIWAS', '', '', '', '', '9434266088');
INSERT INTO `contact` VALUES (16, 'BALBIR SINGH', 'SE', '', '', '', '', '', '9434288639');
INSERT INTO `contact` VALUES (17, 'MATHEW', 'HAVELOCK GUEST HOUSE', '', '', '', '', '', '9434275522');
INSERT INTO `contact` VALUES (18, 'RENU SAHNI', 'ELECTION COMMISSIONER', 'UT', '', '01123382554', '', '', '');
INSERT INTO `contact` VALUES (30, 'D.V.NEGI', 'PCCF', 'FOREST', '', '233270', '230113', '236971', '9434283939');
INSERT INTO `contact` VALUES (31, 'YAMEEN', 'SE', '', '', '', '', '', '9434289754');
INSERT INTO `contact` VALUES (32, 'Ajay Kr. Singla', 'Secy to LG', 'Raj Niwas', '', '233113', '232135', '243032', '9434280022, 9971844992');
INSERT INTO `contact` VALUES (33, 'SRINIVASAN', 'REGIONAL DIRECTOR', 'IGNOU', '', '', '', '', '9531830920');
INSERT INTO `contact` VALUES (34, 'STATE CONTROL ROOM', '', '', '', '242697`', '', '', '');
INSERT INTO `contact` VALUES (35, 'RASHEED', 'CO-OP INSPECTOR', '', '', '', '', '', '9434283531');
INSERT INTO `contact` VALUES (36, 'PRAMOD KUMAR', 'Dy.Secy', 'NCT,DELHI', '', '01123392168', '', '', '');
INSERT INTO `contact` VALUES (37, 'ASHOK SHARMA', 'DIRECTOR', 'D.M', '', '', '', '', '9734489884');
INSERT INTO `contact` VALUES (38, 'CHINMOY BISWAL', 'Addl.SP', '', '', '232405', '', '', '9434288546');
INSERT INTO `contact` VALUES (39, 'B.AJAY KUMAR', 'MANAGER', 'AVIS ISLAND COOP SOCIETY', '', '', '', '', '9434290677');
INSERT INTO `contact` VALUES (40, 'L Johnikutty', 'Sr.PS to SLG', 'Raj Niwas', '', '233113', '232135', '200103', '9474216526');
INSERT INTO `contact` VALUES (41, 'Sobha', 'PA', 'Raj Niwas', '', '233113', '232135', '', '9474276777');
INSERT INTO `contact` VALUES (42, 'PRADEEP', 'MANAGER', 'JETAIRWAYS', '', '230545', '242707', '', '9732470077');
INSERT INTO `contact` VALUES (43, 'Venkata Appa Rao', 'DRM', 'Raj Niwas', '', '233113', '232135', '', '9933276141');
INSERT INTO `contact` VALUES (44, 'R.K.VERMA', 'SP/ A/C', '', '', '', '', '', '9434289897');
INSERT INTO `contact` VALUES (45, 'P.K.SINGH', 'CE', 'APWD', '', '232852', '230215', '', '9434262857');
INSERT INTO `contact` VALUES (46, 'HANIFFA', 'HGC', 'VIGILANCE', '', '', '', '', '9476005397');
INSERT INTO `contact` VALUES (47, 'PAVITHRAN', 'OS', 'VIGILANCE', '', '', '', '', '9933296965');
INSERT INTO `contact` VALUES (48, 'BALAMURGAN', 'ATCP', '', '', '', '', '', '9434281285');
INSERT INTO `contact` VALUES (50, 'Darsana Devi', 'DRM', 'Raj Niwas', '', '', '', '', '9476070583');
INSERT INTO `contact` VALUES (51, 'AMIT', 'PHOTOGRAPHER', 'IPT', '', '', '', '', '9531815743');
INSERT INTO `contact` VALUES (52, 'Dr.Z.Ahmed', '', '', '', '05946232532', '', '', '');
INSERT INTO `contact` VALUES (53, 'SARVESH JAWADKAR', 'CONSULTANT', 'CANOPY WALKWAY', '', '', '', '', '09673811919');
INSERT INTO `contact` VALUES (54, 'S.K.MONDAL', 'PP', '', '', '', '', '', '9434281152');
INSERT INTO `contact` VALUES (55, 'SURESH', '', 'DELHI COURT', '', '', '', '', '09013359720');
INSERT INTO `contact` VALUES (56, 'AIRPORT AUTHORITY', 'CONTROLLER', '', '', '235619', '233390', '211188', '9434281195');
INSERT INTO `contact` VALUES (57, 'TM.MEENA', '', '', '', '244554', '', '', '9434289913');
INSERT INTO `contact` VALUES (58, 'Kasi Muthu', 'Driver', 'Raj Niwas', '', '233113', '232135', '', '9933237456');
INSERT INTO `contact` VALUES (59, 'JAY SINGH', '', 'DELHI HIGH COURT', '', '', '', '', '09136432123');
INSERT INTO `contact` VALUES (60, 'D Kurma Rao', 'Cleaner', 'Raj Niwas', '', '', '', '', '9434278401');
INSERT INTO `contact` VALUES (61, 'BHASKAR', 'ANDAMAN CHAMBER OF COMMERCE', '', '', '232906/212131', '', '', '9434281560');
INSERT INTO `contact` VALUES (62, 'REKHA BHASKAR', '', '', '', '', '', '', '9434282227');
INSERT INTO `contact` VALUES (63, 'GEORGE JACOB', 'CONSERVATOR OF FOREST', '', '', '233233', '', '', '9476046481');
INSERT INTO `contact` VALUES (64, 'A.P.MOHAMMED', '', 'GRAM SUDHAR SANGAM', '', '', '', '', '9434282477');
INSERT INTO `contact` VALUES (65, 'AJAY CHAGH', 'ADD.SECT(VIG)', '', '', '01123392210', '', '', '09871622144');
INSERT INTO `contact` VALUES (66, 'PAUL', 'AE', 'WORKSHOP DIVISION', '', '', '', '', '9434260911');
INSERT INTO `contact` VALUES (68, 'PRAMANIK', 'JE', 'WORKSHOP DIVISION', '', '', '', '', '9434282466');
INSERT INTO `contact` VALUES (69, 'AMIT', 'Assistant Commissioner', 'CAMPBELLBAY', '', '', '', '', '9434284570');
INSERT INTO `contact` VALUES (70, 'ACHLA SINGH', 'SS(HEALTH)', 'DELHI', '', '01123392069', '01123392464', '01123980095', '09868141415');
INSERT INTO `contact` VALUES (71, 'AJAY SAXEENA', '', '', '', '232382, 233549', '', '233862, 200261', '9933262334');
INSERT INTO `contact` VALUES (72, 'Rajender', 'Hindi Translator', 'Raj Niwas', '', '', '', '9933270401', '9474267832');
INSERT INTO `contact` VALUES (73, 'Peer', 'Hindi', 'Raj Niwas', '', '', '', '', '9732477586');
INSERT INTO `contact` VALUES (74, 'CSH.P.STANLAIN', 'STATION DIRECTOR', 'AIR(STATION ENGINEER)', '', '230260, 230682, 230448', '', '230134', '9434282306');
INSERT INTO `contact` VALUES (75, 'Vijay Roy', 'Correspondance', 'Raj Niwas', '', '', '', '', '9933260853');
INSERT INTO `contact` VALUES (76, 'ALAYAMMA', '', '', '', '232363', '', '', '9434263835, 9732476112');
INSERT INTO `contact` VALUES (77, 'ABDUAL RASHEED', '', 'RCS OFFICE', '', '', '', '', '9434283531');
INSERT INTO `contact` VALUES (78, 'Abdul Hameed', 'Statistical Officer', 'Raj Niwas', '', '', '', '', '9434260030');
INSERT INTO `contact` VALUES (79, 'PRAKASH', 'MANGER', 'AXIS BANK', '', '244108, 244109', '244063', '', '8001901572');
INSERT INTO `contact` VALUES (80, 'VIJAY KALUR', 'ZONAL BUSINESS MANGER', '', '', '', '233998', '', '9932449346');
INSERT INTO `contact` VALUES (81, 'T.BANERJI', 'MANGER', 'AIRTEL', '', '80001901571', '', '', '');
INSERT INTO `contact` VALUES (82, 'MRS.SHAIMA SHAMIM', '', '', '', '', '', '', '9932080401');
INSERT INTO `contact` VALUES (83, 'SHAJED REHMAN ', 'SALES MANGER', '', '', '233989', '233998', '', '9932449139');
INSERT INTO `contact` VALUES (84, 'VIKAS AHLAWAT', 'Asst Commr(HQ)', '', '', '237825', '', '', '');
INSERT INTO `contact` VALUES (85, 'PL.PICHAI', '', '', '', '', '233998', '', '');
INSERT INTO `contact` VALUES (86, 'ABERDEEN BLAIR', 'TRIBAL COUNCIL', '', '', '', '', '', '9474200829');
INSERT INTO `contact` VALUES (87, 'MANDEEP SINGH RANDHAWAY', 'S.P NICOBAR', '', '', '265223', '', '', '');
INSERT INTO `contact` VALUES (88, 'ARUL PRASANTH', 'ADVOCATE', '', '', '', '', '', '9933201300');
INSERT INTO `contact` VALUES (89, 'SANTOSH PRAKASH', 'AC SETTLEMENT', '', '', '', '', '', '9434284401');
INSERT INTO `contact` VALUES (90, 'AMMU', '', 'RCS', '', '', '', '', '9933288743');
INSERT INTO `contact` VALUES (91, 'CSH.FREDERIZ SAYMIHICH', 'DIRECTOR OF AUDIT', 'AUDIT DEPTT', '', '227195', '227437', '', '9476046264');
INSERT INTO `contact` VALUES (92, 'JIJU', 'INSPECTOR', 'RCS', '', '', '', '', '9434266911');
INSERT INTO `contact` VALUES (94, 'NEELAM', '', '', '', '', '', '', '9434284186');
INSERT INTO `contact` VALUES (95, 'AMIT BANKA', 'ADM', '', '', '', '', '', '09717677177');
INSERT INTO `contact` VALUES (98, 'RAMESH', 'AE', 'ELECTRICITY', '', '234718', '', '', '9434272799');
INSERT INTO `contact` VALUES (97, 'MAHESHWAR RAO', 'EE', 'PBMC', '', '9434274118', '', '', '');
INSERT INTO `contact` VALUES (96, 'RAMACHANDER', 'AE', 'PBMC', '', '', '', '', '9434280339');
INSERT INTO `contact` VALUES (99, 'MANOHAR SINGH', 'CHAIRMAN', 'CGRF', '', '', '', '', '9434280409');
INSERT INTO `contact` VALUES (100, 'AJAY KUMAR DAS', 'Asst Genl MANAGER', 'MEGAPODE', '', '', '', '', '9434272733');
INSERT INTO `contact` VALUES (101, 'SUDEEP RAI SHARMA', '', '', '', '', '', '', '9434280917');
INSERT INTO `contact` VALUES (102, 'N.KALA', 'CCF', '', '', '', '', '', '9434287898');
INSERT INTO `contact` VALUES (103, 'NP Pillai', 'Director', 'Director of Accounts & Budget', '', '230168, 230879, 232220', '230168', '232442', '200700');
INSERT INTO `contact` VALUES (104, 'sita Nair', 'PA', 'Director of Accounts & Budget', '', '', '', '', '9434288468');
INSERT INTO `contact` VALUES (105, 'THEVA NEETHI DHAS', 'SECY(TW/Industries)', '', '', '', '', '', '09443357479');
INSERT INTO `contact` VALUES (106, 'MA SALAM', 'DIRECTOR', 'Director of Agriculture', '', '233257, 200705', '233257', '232809', '9434281905');
INSERT INTO `contact` VALUES (107, 'B Mahto', 'Director', 'Director of AH & VS', '', '233286', '233286', '254002', '9434288627');
INSERT INTO `contact` VALUES (108, 'Ayyappan', 'PA', 'Do Agriculture', '', '', '', '', '9434260430');
INSERT INTO `contact` VALUES (109, 'Sheeja', 'PA', 'Director of Agriculture', '', '', '', '', '9474245139');
INSERT INTO `contact` VALUES (110, 'D.SAVITHRI', '', '', '', '', '', '', '9933262215');
INSERT INTO `contact` VALUES (111, 'Rajeshwari', 'PA', 'Director of AH & VS', '', '', '', '', '9933206883');
INSERT INTO `contact` VALUES (112, 'Beena', 'PA', 'Director of AH & VS', '', '', '', '', '9434287453');
INSERT INTO `contact` VALUES (114, 'V Krishnamurthy', 'Director', 'Director of Fisheries', '', '232770, 232821', '231474', '200737', '9434263814');
INSERT INTO `contact` VALUES (115, 'K.N.SURESH', '', '', '', '', '', '', '9434280189');
INSERT INTO `contact` VALUES (116, 'Pushpa', 'PA', 'Director of Fisheries', '', '', '', '', '9932082142');
INSERT INTO `contact` VALUES (117, 'Jameela', 'PS', 'CE, APWD', '', '', '', '', '9474226509');
INSERT INTO `contact` VALUES (118, 'YOGESH PRATHAP', 'SDM', '', '', '232575', '', '', '9531836888');
INSERT INTO `contact` VALUES (119, 'Som Naidu', 'Director', 'Director of CS & CA', '', '232321', '232321', '', '9476040222');
INSERT INTO `contact` VALUES (120, 'Shajiamma', 'PA', 'Director of CS & CA', '', '', '', '', '9434286300');
INSERT INTO `contact` VALUES (121, 'Elizhaba', 'PA', 'Director of CS & CA', '', '', '', '', '9474243902');
INSERT INTO `contact` VALUES (122, 'PR Saida', 'PA', 'RCS', '', '', '', '', '9474225601');
INSERT INTO `contact` VALUES (311, 'Pankaj', '', 'Ravi Construction', '', '', '', '', '9434787820');
INSERT INTO `contact` VALUES (124, 'Nedunchezian', 'Director', 'RCS', '', '232806', '232388', '', '9434289941');
INSERT INTO `contact` VALUES (126, 'Gaurang Mishra', 'Director', 'Director of Eco & Sta', '', '232476', '234181', '200749, 227766', '9474224632');
INSERT INTO `contact` VALUES (127, 'YOGESH', '', '', '', '', '', '', '9679510773');
INSERT INTO `contact` VALUES (128, 'Dev Das', 'Director', 'Director of Education', '', '232777', '230101', '', '9434289595');
INSERT INTO `contact` VALUES (129, 'Urmila', 'PA', 'Director of Education', '', '', '', '', '9474212487');
INSERT INTO `contact` VALUES (130, 'Prasanna', 'PA', 'Director of Education', '', '', '', '', '9434299897');
INSERT INTO `contact` VALUES (190, 'N.K.Sharma', 'Secretary (Coop)', 'RCS', '', '232388', '', '', '9434287790');
INSERT INTO `contact` VALUES (132, 'Alice', 'PA', 'Polytechnic', '', '', '', '252122', '');
INSERT INTO `contact` VALUES (133, 'Utpal Sharma', 'Principal', 'Polytechnic', '', '250587', '250587', '228400, 229439', '9434280130');
INSERT INTO `contact` VALUES (134, 'ABHAY KUMAR', 'Addl PS TO Min OF STATE FOR AGRICULTURE', '', '', '01123388165', '', '', '');
INSERT INTO `contact` VALUES (135, 'SUNDEV', '', 'BSNL', '', '291222', '', '', '');
INSERT INTO `contact` VALUES (136, 'U.N.CHOUDHARY', 'AD', 'SPORTS', '', '', '', '', '9474229417');
INSERT INTO `contact` VALUES (137, 'RUSTAM', '', 'DOLPHIN', '', '', '', '', '9474261741');
INSERT INTO `contact` VALUES (138, 'GEETHA GLADSEN', '', 'NGO', '', '', '', '', '9933290400');
INSERT INTO `contact` VALUES (139, 'DHARAM RAJ', 'PROTOCOL OFFICER', '', '', '231014', '', '', '9434262613, 9434285411');
INSERT INTO `contact` VALUES (209, 'Viswanathan', 'AS', 'Vig (Sec)', '', '232835', '', '', '9474212588');
INSERT INTO `contact` VALUES (140, 'Udit Prakash Rai', 'DC, SA', '', '', '233089, 240253', '245444', '233253', '9434280018');
INSERT INTO `contact` VALUES (141, 'ABDUL WASEEM ', 'LAW OFFICER', 'SHIPPING DEPTT', '', '', '', '', '9434280348, 9434280189');
INSERT INTO `contact` VALUES (142, 'PARVEZ', 'GM', 'ANDIIDCO', '', '232098', '', '', '9434280661');
INSERT INTO `contact` VALUES (143, 'DR. ARPITA', '', '', '', '', '', '', '9474204481');
INSERT INTO `contact` VALUES (144, 'YESMIN', 'DD(IC)', 'AIDS CONTROL', '', '', '', '', '9933269492');
INSERT INTO `contact` VALUES (145, 'DR.TRIPTI BANIK', 'MOINTER AND EVCLAUATION OFFICER', '', '', '230140, 236555', '', '', '9447226532, 9531823828');
INSERT INTO `contact` VALUES (146, 'SANJIB KUMAR ROY', 'ANDAMAN SHEEKHA ', '', '', '213499', '', '', '9932082892');
INSERT INTO `contact` VALUES (147, 'ARCHANA ARORA', 'NDMC', '', '', '01123743579, 01123742269', '', '', '09810895757');
INSERT INTO `contact` VALUES (148, 'ANAND PAL SINGH', '', '', '', '', '', '', '9474223499');
INSERT INTO `contact` VALUES (149, 'Jagadishan', 'CGM', 'BSNL', '', '233800', '233660', '233900', '9531991700');
INSERT INTO `contact` VALUES (150, 'SENTHIL VARAN', 'GM', 'BSNL', '', '238800', '', '231122', '9434288333');
INSERT INTO `contact` VALUES (151, 'SUSHILA GOPINATHAN', 'DGM', 'BSNL', '', '230988', '', '', '9434287755');
INSERT INTO `contact` VALUES (152, 'K.CHANDRA SEKHARAN', 'DGM(TRANSMISSION', 'BSNL', '', '233255, 239988', '', '', '94342834333');
INSERT INTO `contact` VALUES (153, 'YM MURTAZA', 'SE', 'ELECTRICITY DEPTT', '', '232404', '233365', '233563', '9434289754');
INSERT INTO `contact` VALUES (154, 'MOLLY CHACKO', 'PA(SE)', 'ELECTRICITY', '', '', '', '', '9474216773');
INSERT INTO `contact` VALUES (155, 'BABY', 'PA(SE)', 'ELECTRICITY', '', '', '', '', '9476015672');
INSERT INTO `contact` VALUES (156, 'SHOBHANA', 'PS(PCCF)', 'FOREST', '', '', '', '', '9474248190');
INSERT INTO `contact` VALUES (157, 'DR. Shipra Paul', 'DHS', 'HEALTH DEPTT', '', '233331', '232910', '', '9474234099');
INSERT INTO `contact` VALUES (158, 'VENUGOPAL', 'PA(DHS)', 'HEALTH DEPTT', '', '', '', '', '9434280063');
INSERT INTO `contact` VALUES (159, 'M.N.MURALI', 'DIRTECTOR', 'DIRTECTOR OF INDUSTRIES', '', '232395', '230499', '232880', '9434284790');
INSERT INTO `contact` VALUES (160, 'MEENA', 'PA', 'DIRTECTOR OF INDUSTRIES', '', '', '', '232771', '');
INSERT INTO `contact` VALUES (161, 'MADHU', 'LABOUR COMMISSIONER', 'LABOUR COMMISSIONER', '', '233138', '231774', '233339', '9434270182');
INSERT INTO `contact` VALUES (162, 'PARMEELA', 'PA(LC)', '', '', '', '', '', '9474269905');
INSERT INTO `contact` VALUES (163, 'SBS DEOL', 'DIRECTOR OF POLICE', 'POLICE DEPTT', '', '230216', '230262', '230346', '9434280003');
INSERT INTO `contact` VALUES (164, 'A.NEDUNCHEZHAIN', 'DIRECTOR ', 'DIRECTOR OF INDUSTRIES', '', '233397', '242708', '', '9434289941');
INSERT INTO `contact` VALUES (165, 'SHERLY', 'PA(RD&P)', 'PA(DIRECTOR OF RD AND PANCHAYATS', '', '', '', '', '9476027358');
INSERT INTO `contact` VALUES (166, 'S.K.HALDAR', 'DIRECTOR', 'DIRECTOR OF SOCIAL WELFARE', '', '233356', '243817', '232819', '200912(WL)');
INSERT INTO `contact` VALUES (167, 'MANJU', 'PA(DCW)', '', '', '', '', '', '9476043564');
INSERT INTO `contact` VALUES (168, 'S SENTHIL KUMAR', 'DIRECTOR', 'DIRECTOR OF SCIENCE & TECHNOLOGY', '', '250370', '251395', '200754', '9679538684');
INSERT INTO `contact` VALUES (169, 'K S SESHASAI', 'DIRECTOR', 'DSS', '', '246625, 246608', '230480, 245608, 238017', '231259', '9434287808');
INSERT INTO `contact` VALUES (170, 'L KUNJAMMA', 'PA(DSS)', '', '', '', '', '', '9933254039');
INSERT INTO `contact` VALUES (171, 'Jivraj Kishen', 'Tehsildar Hut Bay', 'Revenue', '', '', '', '', '9434290139');
INSERT INTO `contact` VALUES (172, 'DERRICK', 'CORRESPONDENT(i/c)', 'RAJ NIWAS', '', '', '', '', '9434293308');
INSERT INTO `contact` VALUES (173, 'ANIL SHRIVASTAV', 'Addl. PS', 'Min. OF PWD', '', '2339211627', '', '', '');
INSERT INTO `contact` VALUES (174, 'GOPAKUMAR', '', '', '', '', '', '', '9933200293');
INSERT INTO `contact` VALUES (175, 'DEEPAK', '', '', '', '', '', '', '9531856330');
INSERT INTO `contact` VALUES (176, 'TEJENDER KHANNA', 'Lt. GOVERNOR, DELHI', '', '', '01123960809', '', '', '');
INSERT INTO `contact` VALUES (177, 'S.N.MISHRA', 'PS to LG,DELHI', '', '', '23975022', '', '', '');
INSERT INTO `contact` VALUES (178, 'JAYANTHI NATARAJAN', 'Secy to MINISTER E&F', 'ENVIRONMENT&FOREST', '', '24361727, 24363958, 24362222', '', '', '');
INSERT INTO `contact` VALUES (179, 'EAPEN', '', 'ELECTRICITY', '', '', '', '', '9434285967');
INSERT INTO `contact` VALUES (180, 'SHIV KUMAR', 'AO', 'ELECTRICITY', '', '', '', '', '9474204622');
INSERT INTO `contact` VALUES (181, 'ELIAMMA', '', 'ELECTRICITY', '', '', '', '', '9732476112, 9679540748');
INSERT INTO `contact` VALUES (182, 'DEEPAK', '', 'ELECTRICITY', '', '', '', '', '9434263835');
INSERT INTO `contact` VALUES (183, 'SHASHI KUMAR', '', 'EDUCATION', '', '234938', '', '', '9434289959');
INSERT INTO `contact` VALUES (184, 'SHOBHA', '', 'EDUCATION', '', '', '', '', '9434269688');
INSERT INTO `contact` VALUES (185, 'ASHOK KUMAR', '', 'EDUCATION', '', '', '', '', '9474201474');
INSERT INTO `contact` VALUES (186, 'BALWINDER SINGH', 'EX-SERVICE MEN', 'C/BAY', '', '', '', '', '9434272623');
INSERT INTO `contact` VALUES (187, 'RAJ KUMAR ', 'DCF', 'MILL DIVISION', '', '233060', '', '', '9434288897');
INSERT INTO `contact` VALUES (188, 'FIRDOSH BIBI', 'CHAIRPERSON', 'MUNICIPAL', '', '232696', '', '', '9933293431');
INSERT INTO `contact` VALUES (189, 'Dr. MOHD IQBAL', 'PRINCIPAL', 'JNRM', '', '232503', '232503', '', '9434282011');
INSERT INTO `contact` VALUES (123, 'Jag Parvesh Dahiya', 'ADC to Governor, Haryana', '', '', '0172-2742121', '0172-2740557', '', '09888222222');
INSERT INTO `contact` VALUES (191, 'VINOD KRISHNA', '', '', '', '239777', '', '', '9434283366');
INSERT INTO `contact` VALUES (192, 'SHYAM SHANKAR DAS', 'PRADHAN', 'GUPTAPARA', '', '', '', '', '9474219879');
INSERT INTO `contact` VALUES (193, 'G Peter', 'Sr.Accountant', 'Raj Niwas', '', '', '', '', '9434266313');
INSERT INTO `contact` VALUES (194, 'M V Balakrishnan Nair ', 'Ex-Sr.PS to Lt.Governor', '', '', '', '', '238448', '');
INSERT INTO `contact` VALUES (195, 'P Roy', 'PA to Lt.Governor', 'Raj Niwas', '', '233333, 244290', '', '238697', '');
INSERT INTO `contact` VALUES (196, 'S Saji', 'HGC', 'Raj Niwas', '', '', '', '236666', '9434260148, 9434299994');
INSERT INTO `contact` VALUES (197, 'G.Sambath', 'Sr.Investigator', '', '', '', '', '', '9434289275');
INSERT INTO `contact` VALUES (198, 'Mohsin Fareed', 'LGC', 'Raj Niwas', '', '', '', '239523 ', '9476061218');
INSERT INTO `contact` VALUES (199, 'Neeraj Lall', 'LGC', 'Raj Niwas', '', '', '', '', '9679592498');
INSERT INTO `contact` VALUES (200, 'D Nagarajan', 'Agriculture Assistant ', 'Raj Niwas', '', '', '', '', '9933257488');
INSERT INTO `contact` VALUES (201, 'B.Mini', 'Agri. Field Asst.', 'Raj Niwas', '', '', '', '254021', '9437219102');
INSERT INTO `contact` VALUES (202, 'Kala Venkat Rao', 'CA Gr. ''A''', 'Raj Niwas', '', '235411', '', '', '9434283221');
INSERT INTO `contact` VALUES (203, 'Shahid Ali', 'LO', 'Raj Niwas', '', '', '', '', '9474258844');
INSERT INTO `contact` VALUES (204, 'Santosh Kumar', 'Police Radio Operator ', 'Raj Niwas', '', '239734', '', '', '9474237454');
INSERT INTO `contact` VALUES (205, 'Raj Niwas Exchange', '', '', '', '246446, 230369', '', '', '');
INSERT INTO `contact` VALUES (206, 'Police Duty Staff', '', '', '', '232724', '', '', '');
INSERT INTO `contact` VALUES (207, 'Michael', 'Police Radio Operator ', 'Raj Niwas', '', '', '', '', '9434287303');
INSERT INTO `contact` VALUES (208, 'Mahender', 'Police Radio Operator ', 'Raj Niwas', '', '', '', '', '9474276043');
INSERT INTO `contact` VALUES (125, 'Rizwanullah', 'DS Law', 'Secretariat', '', '232835', '', '', '9933289780');
INSERT INTO `contact` VALUES (131, 'Sunil Kumar', 'JE', 'Raj Niwas', '', '232338', '', '227691', '9474286293');
INSERT INTO `contact` VALUES (211, 'Ramesh', 'NIC Engineer', 'NIC', '', '232733', '', '', '9933248977');
INSERT INTO `contact` VALUES (212, 'Pravesh', 'NIC Engineer', 'NIC', '', '232733', '', '', '9531868739');
INSERT INTO `contact` VALUES (213, 'Sanjay', 'Manager', 'Go Air', '', '231540', '', '9932080326', '9932082868');
INSERT INTO `contact` VALUES (214, 'K.C.AGARWAL', 'DIRECTOR', 'TRANSPORT', '', '230225, ', '230235', '235551', '9434284790');
INSERT INTO `contact` VALUES (215, 'SOM NAIDU', 'DIRECTOR', 'TRIBAL WELFARE', '', '231639', '232247', '233862', '9476040222');
INSERT INTO `contact` VALUES (216, 'Amit Anand', 'DIRECTOR', 'IP&T', '', '230933', '230933', '', '9531856933');
INSERT INTO `contact` VALUES (217, 'SUBHASH', 'PA', 'TRANSPORT', '', '230225', '', '9933298988', '9434271985');
INSERT INTO `contact` VALUES (218, 'VINOD', 'PA', 'IP&T', '', '230933', '230933', '', '9434262095');
INSERT INTO `contact` VALUES (219, 'LUCAS ROBERT', 'DIRECTOR', 'SPORTS, ARTS & CULTURE', '', '232637', '232637', '', '9933226738');
INSERT INTO `contact` VALUES (222, 'P. JAWAHAR', 'DC, CAR NICOBAR', '', '', '265220', '265177, 265813', '265190, 265197', '9476046496');
INSERT INTO `contact` VALUES (221, 'CHERIAN', 'PA', 'DC OFFICE (S/A)', '', '233089', '245444', '', '9474229850');
INSERT INTO `contact` VALUES (223, 'EVLIN', 'PA', 'DC OFFICE, NICOBAR', '', '265220', '265177', '', '9434275248');
INSERT INTO `contact` VALUES (224, 'ARAVA GOPI KRISHNA', 'DC, N&M', '', '', '262999', '262997', '262998', '9434286261, 9679513032');
INSERT INTO `contact` VALUES (225, 'ASLAM', 'PA', 'DC OFFICE, MAYABUNDER', '', '262999', '262997', '', '9434266497');
INSERT INTO `contact` VALUES (226, 'R.S.MEHRA', 'SUPERINTENDENT', 'DISTRICT JAIL', '', '260316, 260377', '260364', '243411', '9933255772');
INSERT INTO `contact` VALUES (227, 'BIMAL SINHA', 'CPA', 'DCE, ALHW', '', '233679, 232773', '233675', '', '');
INSERT INTO `contact` VALUES (228, 'NARAYANAN KUTTY', 'PA to CPA', 'ALHW', '', '233679', '233675', '', '9933254788');
INSERT INTO `contact` VALUES (229, 'Capt.ASHWINI KUMAR', 'HM', 'ALHW', '', '237804', '', '233231, 200630', '9434289307');
INSERT INTO `contact` VALUES (230, 'RATHI RAJA', 'STENO', 'ALHW', '', '237804', '', '', '9434273824');
INSERT INTO `contact` VALUES (231, 'NIRMALA', 'PA', 'JNRM', '', '232503', '232503', '', '9434285520');
INSERT INTO `contact` VALUES (232, 'A.R.P.SINHA', 'PRINCIPAL', 'M.G COLLEGE, MAYABUNDER', '', '276464', '276464', '276446', '9474281443');
INSERT INTO `contact` VALUES (233, 'SHREEJA', 'PA', 'M.G COLLEGE, MAYABUNDER', '', '276464', '276464', '', '9434270271');
INSERT INTO `contact` VALUES (234, 'Dr. J.D.SINGH', 'PRINCIPAL', 'TAGORE GOVT COLLEGE', '', '232695', '244045', '233567, 200751', '9434282037');
INSERT INTO `contact` VALUES (235, 'NITHA ', 'STENO', 'TAGORE GOVT COLLEGE', '', '232695', '244045', '', '9434282037');
INSERT INTO `contact` VALUES (236, 'STATE LIBRARY', '', '', '', '232433', '', '', '');
INSERT INTO `contact` VALUES (237, 'Hemanto', '', 'Fisheries', '', '', '', '', '9474260973');
INSERT INTO `contact` VALUES (238, 'Pradeep Kumar', 'Clener', 'Raj Niwas', '', '', '', '', '9476008359');
INSERT INTO `contact` VALUES (239, 'Susan George', 'PS', 'Secretariate', '', '', '', '', '9474287800');
INSERT INTO `contact` VALUES (240, 'Prasanth Saani', '', 'Delhi', '', '', '', '', '09810401967');
INSERT INTO `contact` VALUES (220, 'Prakash', 'Ticketing Manager', 'ANIDDCO', '', '244312', '', '', '9933280141');
INSERT INTO `contact` VALUES (242, 'Kuldeep Rai Sharma', 'Congress', '', '', '232800, 233255', '244703', '', '9434266877');
INSERT INTO `contact` VALUES (243, 'Dnyaneshwar', 'High Commissioner of India', 'Maldeep', '', '', '', '', '009607771728');
INSERT INTO `contact` VALUES (244, 'PS to High commissioner', 'PS', 'Maldeep', '', '009603323716', '', '', '');
INSERT INTO `contact` VALUES (245, 'M I Chandy', 'Sr. manager Administration', 'Suryachakra', '', '231715', '231716', '260519', '9434269815');
INSERT INTO `contact` VALUES (246, 'Dhaiya', 'Dy. SP', 'Port Mourt', '', '289455', '', '9933262910', '9434288672');
INSERT INTO `contact` VALUES (241, 'Tuntuni Chowdhry', 'Asst. Director General Trsm', 'Ministry of Tourism', '', '011-23731546', '', '', '09818446696');
INSERT INTO `contact` VALUES (247, 'Vaasu', 'Cook', 'Secretary Home', '', '', '', '', '9933237361');
INSERT INTO `contact` VALUES (248, 'Adhikari', 'LAN', 'POLYTECHNIC', '', '', '', '', '9474221991');
INSERT INTO `contact` VALUES (249, 'Beniya Verghese', 'PA', 'Polytechnic', '', '', '', '', '9434264348');
INSERT INTO `contact` VALUES (250, 'Sunder', 'Accountant', 'PBMC', '', '', '', '', '9434264165');
INSERT INTO `contact` VALUES (251, 'A.K. Shukla', 'CCF(Territorial)', 'Forest(Mountariat Incharge)', '', '241874', '', '', '9434288580');
INSERT INTO `contact` VALUES (252, 'Boby Gomez', 'Accounts Officer', 'PBMC', '', '', '', '', '9434269855');
INSERT INTO `contact` VALUES (253, 'Rajesh', 'Snokling', 'Tourism', '', '', '', '', '9474212595');
INSERT INTO `contact` VALUES (254, 'Parimal', 'Tour Operator', 'Tourism', '', '', '', '', '9933245202');
INSERT INTO `contact` VALUES (255, 'Heamnth Rao', 'Asst. Manager', 'ANIDDCO', '', '', '', '', '9434281011');
INSERT INTO `contact` VALUES (256, 'Balram Variya', 'Manager Snokling', 'Osan Blue', '', '', '', '', '9531868891');
INSERT INTO `contact` VALUES (257, 'Reception', '', 'Tourism', '', '232694', '', '', '');
INSERT INTO `contact` VALUES (258, 'Zakir', 'LGC', 'Tourism', '', '', '', '', '9434287433');
INSERT INTO `contact` VALUES (259, 'Takur Madam', 'JTO', 'BSNL', '', '', '', '', '9434286699');
INSERT INTO `contact` VALUES (260, 'Rabia Madam', '', 'Tourism', '', '244081', '', '', '9933255364');
INSERT INTO `contact` VALUES (261, 'Mega Varnam', 'Boat Operator', 'Boat Operator', '', '', '', '', '9932081971');
INSERT INTO `contact` VALUES (286, 'Vijay Tyagi', 'Lucturer', 'JNRM', '', '', '', '', '9434282479');
INSERT INTO `contact` VALUES (263, 'Mukul Wasnik', 'Minister', 'Social justice & empowerment', '', '01123381001', '01123381390', '', '');
INSERT INTO `contact` VALUES (264, 'S.K. Bhandari', 'CCF', 'Forest Department', '', '231718', '', '', '');
INSERT INTO `contact` VALUES (265, 'Niwajish Ali', 'SE', 'APWD', '', '232556', '', '', '9434280553');
INSERT INTO `contact` VALUES (266, 'PNR Pillai', 'AS (Perl)', 'Secretariat', '', '233179', '233179', '', '9434280527');
INSERT INTO `contact` VALUES (342, 'S.C.Nath', 'Jt.Secy', 'PWD', '', '', '', '', '9679593341');
INSERT INTO `contact` VALUES (268, 'Ashwin Kumar', 'Captain', 'PMB', '', '2333679', '', '', '9434289307');
INSERT INTO `contact` VALUES (269, 'Ajit Ananad', 'Asst. Director', 'Industry', '', '', '', '', '947423055');
INSERT INTO `contact` VALUES (270, 'Sumit Chowdhry', 'JS', 'APWD', '', '', '', '', '9434272083');
INSERT INTO `contact` VALUES (271, 'Nic Antivirus', 'Engineer', 'NIC', '', '', '', '', '9933248977');
INSERT INTO `contact` VALUES (272, 'Victor Raj', 'DRC', 'DRC Chennai', '', '04426549294, 04426549295', '04426548092', '04426190902', '09444007488');
INSERT INTO `contact` VALUES (273, 'RC Office', 'RC', 'RC Office Delhi', '', '01126119590', '01126880237', '', '');
INSERT INTO `contact` VALUES (274, 'Kuldeep Singh Thakur', 'DRC', 'DRC Delhi', '', '01124104134', '01126882116', '01126888552', '09810860704');
INSERT INTO `contact` VALUES (275, 'DRC Kolkata', 'DRC', 'DRC Kolkata', '', '03323577628', '03323577629', '03324189133', '09831175552');
INSERT INTO `contact` VALUES (276, 'RK Varma', 'SP (Anti Corruption)', 'Police', '', '244698', '', '', '9434289897');
INSERT INTO `contact` VALUES (278, 'Jetlite', 'Airlines', 'Airport, Port Blair', '', ' 230545, 242707', '242707', '1800223020, ', '');
INSERT INTO `contact` VALUES (279, 'Boat Arrival', '', 'Chatam', '', '231794, 232725', '', '', '');
INSERT INTO `contact` VALUES (280, 'R. Mohan', 'BJP President', 'Political Party', '', '', '', '', '9434260915');
INSERT INTO `contact` VALUES (281, 'Dr. Kusum', 'Medical Supdt.', 'DHS', '', '234941', '', '', '9434282087');
INSERT INTO `contact` VALUES (282, 'Veeraiah', 'DD', 'Shipping', '', '232725', '', '229049', '9679522304');
INSERT INTO `contact` VALUES (283, 'MS Randhawa', 'SP', 'Police', '', '230841', '', '', '9434288536');
INSERT INTO `contact` VALUES (406, 'Rashmi', 'Secretary', '', '', '233377', '', '', '9474241102');
INSERT INTO `contact` VALUES (285, 'Raj Bhadur', '', '', '', '', '', '', '9933288022');
INSERT INTO `contact` VALUES (262, 'Dr Rohinder Lall', 'Eye Specialist', 'Private', '', '244933', '', '', '9434284193, 9933274092');
INSERT INTO `contact` VALUES (287, 'Principal ', '', 'JNRM', '', '232364', '232503', '227523', '');
INSERT INTO `contact` VALUES (288, 'Golbir Singh', 'Delhi', 'Delhi', '', '', '', '', '09796427222');
INSERT INTO `contact` VALUES (289, 'Tapan Kr Chakraborthy', 'Exe.Director', 'Reacon', '', '233048', '', '', '9434282000, 9932081200');
INSERT INTO `contact` VALUES (290, 'Navneet Singh', 'Sr.manager', 'IP&T', '', '', '', '', '9434262609');
INSERT INTO `contact` VALUES (291, 'Alex', 'AE', '', '', '', '', '', '9434280816');
INSERT INTO `contact` VALUES (292, 'Leelam Anand', 'Sr Audit Officer', '', '', '', '', '', '9434284186');
INSERT INTO `contact` VALUES (293, 'Baby', '', 'Kerala furnishing', '', '', '', '', '9434260301');
INSERT INTO `contact` VALUES (294, 'Riki Balaji', '', '', '', '', '', '', '9476000234');
INSERT INTO `contact` VALUES (295, 'Mahesh Ch Lal', 'Director', '', '', '', '', '', '9933246044, 09952090538');
INSERT INTO `contact` VALUES (296, 'Reji', 'AAO', 'RD', '', '', '', '', '9434260921');
INSERT INTO `contact` VALUES (298, 'Dr.Sasi Kumar', 'Addl.PCCF', 'Forest', '', '233270', '', '', '');
INSERT INTO `contact` VALUES (299, 'Sahadevan', 'Welfare Officer', '', '', '234327', '', '', '');
INSERT INTO `contact` VALUES (300, 'P.R.C.Nair', 'REvenue Officer', '', '', '242701', '', '', '9434285053');
INSERT INTO `contact` VALUES (301, 'G. Thankachan', 'Sr. AO', '', '', '', '', '', '9531822660');
INSERT INTO `contact` VALUES (302, 'Dr.Vivek Kumar', 'AC, Diglipur', '', '', '', '', '', '9434292911');
INSERT INTO `contact` VALUES (303, 'Kanak Radha Chatterjee', 'Editor', 'Daily Telegram', '', '', '', '', '9434261879');
INSERT INTO `contact` VALUES (305, 'Sukumar Das', '', 'Range Office, Garacharma', '', '254334', '', '', '9474243261');
INSERT INTO `contact` VALUES (306, 'DFO', 'DFO, S/A', '', '', '255228', '', '', '');
INSERT INTO `contact` VALUES (308, 'Dr R K Haldar', '', '', '', '', '', '232492', '9434262800');
INSERT INTO `contact` VALUES (309, 'Deepak', 'AAI', '', '', '', '', '', '9434281682');
INSERT INTO `contact` VALUES (277, 'Bhattacharjee', '', 'WEBCON', '', '232993', '', '', '');
INSERT INTO `contact` VALUES (316, 'Shri Balaji Srivastava', 'IGP', 'Police', '', '232305', '-', '-', '9434288822');
INSERT INTO `contact` VALUES (210, 'Das  ', '', 'ANIIDCO', '', '231664', '', '', '9933249048');
INSERT INTO `contact` VALUES (307, 'Rishikesh', '', '', '', '', '', '', '9434270824');
INSERT INTO `contact` VALUES (267, 'Jakeem', 'JE', '', '', '', '', '', '9434295011');
INSERT INTO `contact` VALUES (67, 'Mustaqueem Hayat Singh', '', '', '', '', '', '', '9434281209');
INSERT INTO `contact` VALUES (14, 'Tabraiz', 'Advocate', 'Court', '', '', '', '', '9434280419');
INSERT INTO `contact` VALUES (312, 'Barun Mitra', 'Joint Secretary', 'Rashtrapathy Bhawan', '', '23793302', '', '', '');
INSERT INTO `contact` VALUES (304, 'Issac', '', 'Industries', '', '', '', '', '9434261500');
INSERT INTO `contact` VALUES (314, 'Dr.Sabitha', '', 'Ayush', '', '', '', '', '9434299827');
INSERT INTO `contact` VALUES (297, 'Aarti Pandey', 'AS', 'Education', '', '232720', '', '', '9434276898');
INSERT INTO `contact` VALUES (315, 'K.K.Jindal', '', '', '', '', '', '', '9434287009');
INSERT INTO `contact` VALUES (310, 'D.Savithri', '', '', '', '', '', '', '9933262215');
INSERT INTO `contact` VALUES (359, 'YP SINGH', 'RANGER', 'WANDOOR', '', '', '', '', '9476038092');
INSERT INTO `contact` VALUES (317, 'Prabhakar Singh', 'PGC', 'Raj Niwas', '', '233830', '233830', '', '9434281937');
INSERT INTO `contact` VALUES (319, 'Sanjay', 'AC (HQ', 'DC South', '', '', '', '', '9474263300');
INSERT INTO `contact` VALUES (320, 'Shiju Cherian', 'Asst. Marine Engineer', '', '', '', '', '', '9932080480');
INSERT INTO `contact` VALUES (321, 'Rajan', 'PA', 'ALHWD', '', '', '', '', '9932082085');
INSERT INTO `contact` VALUES (322, 'Shekhar', 'CE', 'ALHW', '', '', '', '', '9434280172');
INSERT INTO `contact` VALUES (323, 'Sashi Kumar', 'PCCF', 'Wild Life', '', '233270', '', '', '9434289198');
INSERT INTO `contact` VALUES (324, 'Dr.R.N.Rath', '', 'JNRM', '', '', '', '', '9434280145');
INSERT INTO `contact` VALUES (325, 'Mandeep Singh Randhawa', 'SP', '', '', '230841', '', '', '');
INSERT INTO `contact` VALUES (326, 'Kailash Chandra', 'Spl. Secy. Services, Delhi', '', '', '011-23392146', '', '', '');
INSERT INTO `contact` VALUES (327, 'CS', 'CS', 'NCT, Delhi', '', '011-23392100', '', '', '');
INSERT INTO `contact` VALUES (328, 'A.S. Dagar', '', '', '', '011-23392346', '', '', '');
INSERT INTO `contact` VALUES (329, 'Narayanan', '', 'NIC', '', '', '', '', '9434287811');
INSERT INTO `contact` VALUES (330, 'Tinku Debnath', 'LGC', 'Raj Niwas', '', '233830', '', '', '9474251384');
INSERT INTO `contact` VALUES (331, 'A.Dhanakaran', 'AD', 'PIB', '', '', '', '', '9434282373');
INSERT INTO `contact` VALUES (332, 'S.K. Bhandari', 'OSD', 'IT', '', '', '', '', '09868205575');
INSERT INTO `contact` VALUES (333, 'B.C.Sharma', '', 'Finance', '', '', '', '', '9679565871');
INSERT INTO `contact` VALUES (334, 'Ashok Kumar', 'CA-II Division', 'Rashtrapathi Bhawan', '', '011-23015321 ext. 4216', '', '', '');
INSERT INTO `contact` VALUES (335, 'Dr. Senthil Kumar', 'DCF', 'Wild Life', '', '200754, 232816', '', '', '');
INSERT INTO `contact` VALUES (336, 'Rakesh Bhatnagar', 'Spl.Secy.', 'Home', '', '244022', '', '', '9476046349');
INSERT INTO `contact` VALUES (337, 'S.N.Mishra', 'Secretary-cum-Director', 'Registrar of Co-operatives', '', '233205', '', '', '9531856561');
INSERT INTO `contact` VALUES (338, 'Amandeep Singh', 'PS to Sachin Pilot', 'Ministry of IT', '', '011-24368757, 24368758', '', '', '');
INSERT INTO `contact` VALUES (339, 'Satinder Pal Singh', 'Lecturer', 'JNRM', '', '', '', '', '9933205744');
INSERT INTO `contact` VALUES (340, 'Senthil Kumar', '', 'Forest', '', '', '', '', '9679538684');
INSERT INTO `contact` VALUES (341, 'Omit Panyang', 'Secy', 'CS', '', '', '', '', '9434260889');
INSERT INTO `contact` VALUES (318, 'Geetha Rani Verma', '', '', '', '', '', '', '9531856173');
INSERT INTO `contact` VALUES (343, 'Imlus ', 'Asst.Manager', 'IPT', '', '', '', '', '9474200066');
INSERT INTO `contact` VALUES (344, 'Revathy', 'Actor', '', '', '', '', '', '08056032118');
INSERT INTO `contact` VALUES (345, 'Rajita', 'PA', 'PBMC', '', '232576', '', '', '');
INSERT INTO `contact` VALUES (346, 'George Jacob', 'CF', 'Forest', '', '233233', '', '', '');
INSERT INTO `contact` VALUES (348, 'Pillai', 'Director', 'CVC', '', '011-24651013', '', '', '');
INSERT INTO `contact` VALUES (349, 'Leela Vargheese', '', '', '', '245498', '', '', '');
INSERT INTO `contact` VALUES (350, 'Trivedi', 'Addl.PCCF', 'Forest', '', '', '', '', '9434284067');
INSERT INTO `contact` VALUES (351, 'Prasad', '', 'IPT', '', '', '', '', '9474203104');
INSERT INTO `contact` VALUES (93, 'Mallick', 'LGC', 'GA', '', '', '', '', '9531850185');
INSERT INTO `contact` VALUES (352, 'Baba Ram Dev', 'Patanjali ', 'Lamba Lane', '', '9932080819', '', '', '9732474606');
INSERT INTO `contact` VALUES (353, 'CP Mohammed', 'Tesildar', 'DC Office', '', '', '', '', '9434262465');
INSERT INTO `contact` VALUES (354, 'Magesh', 'Co-ordinator', 'Sea Walk', '', '', '', '', '9933210433');
INSERT INTO `contact` VALUES (355, 'Asif', 'Manager', 'Sea Walk', '', '', '', '', '9933243118');
INSERT INTO `contact` VALUES (356, 'Narender Sharma & Saurav Kumar', '', 'Critique New Delhi', '', '', '', '', '9910533030, 9711255343');
INSERT INTO `contact` VALUES (357, 'Dirender Kumar', 'Deputy Director (Panchayat)', 'RD & Panchayat', '', '238150', '', '', '9679564995');
INSERT INTO `contact` VALUES (358, 'Mini ZOO', '', 'Forest, Haddo', '', '232816', '', '', '');
INSERT INTO `contact` VALUES (113, 'RC Das', 'Manager', 'Magapode Resort', '', '246231, 232380', '', '', '9933249048');
INSERT INTO `contact` VALUES (360, 'GUEST HOUSE', '', 'WANDOOR', '', '280119', '', '', '');
INSERT INTO `contact` VALUES (361, 'Election Customer No.', 'Election Office', 'Election Office', '', '1950', '', '', '');
INSERT INTO `contact` VALUES (362, 'Revathy', 'Actor', '', '', '', '', '', '08056032118');
INSERT INTO `contact` VALUES (363, 'George Jacob', 'CFC (HQ)', 'Forest Department', '', '233233', '', '', '');
INSERT INTO `contact` VALUES (364, 'Sahadevan', 'ALWC', 'Shipping', '', '234777', '', '', '');
INSERT INTO `contact` VALUES (391, 'DN Singh', 'Director cum Secretary RD', 'RD', '', '233397', '', '', '9434261266');
INSERT INTO `contact` VALUES (49, 'Shri. Jose P. John', 'AE (works)', 'PWD', '', '', '', '', '9474261777');
INSERT INTO `contact` VALUES (367, 'Leela Varghese', 'AD, Educaton', 'Education', '', '245498', '', '', '');
INSERT INTO `contact` VALUES (374, 'Umapathi', 'Manager', 'International School', '', '', '', '', '9531811626');
INSERT INTO `contact` VALUES (369, 'Shri. Prasad', '', 'IP&T', '', '', '', '', '9474203104');
INSERT INTO `contact` VALUES (370, 'Pradeep Kumar', '', '', '', '', '', '', '9434292518');
INSERT INTO `contact` VALUES (371, 'Ali AK Ban', 'Ranger', 'Forest', '', '', '', '', '9474247173');
INSERT INTO `contact` VALUES (375, 'D.Banerjee', 'Manager ', 'Air India P/B', '', '', '', '', '9434280114');
INSERT INTO `contact` VALUES (373, 'Lt. Col. K.P.R. Singh', '', '', '', '', '', '', '9531856146');
INSERT INTO `contact` VALUES (372, 'Vijay', 'Manager', 'IP &T', '', '', '', '', '9434285093');
INSERT INTO `contact` VALUES (368, 'Eswar Rao', 'Tennis Player', '', '', '', '', '', '9679524254');
INSERT INTO `contact` VALUES (366, 'Makruzz', '', 'Shipping', '', '212355/ 236677', '', '', '');
INSERT INTO `contact` VALUES (376, 'Col.Bala Subramaniam', 'Supreme Count', 'Advocate', '', '', '', '', '09968093041');
INSERT INTO `contact` VALUES (377, 'Sarkar', '', 'DSS', '', '', '', '', '9474286482');
INSERT INTO `contact` VALUES (378, 'Satya Narayan', 'Hindi Trauslator', '', '', '', '', '', '9933221288');
INSERT INTO `contact` VALUES (379, 'DJ', 'District Judge', '', '', '232353', '', '', '');
INSERT INTO `contact` VALUES (380, 'Hotel SeaShell', '', '', '', '242773', '', '', '');
INSERT INTO `contact` VALUES (381, 'Ginsh Arora', '', '', '', '', '', '', '9434280295');
INSERT INTO `contact` VALUES (382, 'Pradeep  Tyagi', '', 'RC Delhi', '', '', '', '', '09968447720');
INSERT INTO `contact` VALUES (383, 'Capt Mahajan', '', '', '', '', '', '9434288548', '9434282226');
INSERT INTO `contact` VALUES (384, 'Sauvabh Vijay', 'Director', 'RashtrapathiBhawan', '', '23016767', '23014580', '', '');
INSERT INTO `contact` VALUES (385, 'Jayaraj', 'PS ', 'Rashtrapathi Bhawan', '', '', '23014580', '', '');
INSERT INTO `contact` VALUES (386, 'Sajan Paul', 'Dfo. Baratang', '', '', '279524', '', '', '200755');
INSERT INTO `contact` VALUES (365, 'Tej Bahadur', 'Supdt Engineer', 'ZP/PBMC', '', '246754', '', '', '9434274413');
INSERT INTO `contact` VALUES (388, 'Mahadavan', 'R,D.Office', '', '', '', '', '', '9434296057');
INSERT INTO `contact` VALUES (389, 'Thirnmujan', '', '', '', '', '', '', '9476097718');
INSERT INTO `contact` VALUES (390, 'Mahavir Prasad', 'Director', '', '', '01123746567', '', '', '');
INSERT INTO `contact` VALUES (387, 'Anil Kumar', 'Secy(SW)', '', '', '0172 2740008', '2740216', '', '');
INSERT INTO `contact` VALUES (392, 'Hamza', 'Manager', 'Industries (Sagarita)', '', '', '', '', '9933227784');
INSERT INTO `contact` VALUES (393, 'Rakesh Bhatnagar', 'SS (Home)', 'Secretriate', '', '244022,244011', '', '', '9476046349');
INSERT INTO `contact` VALUES (394, 'Patanjali', 'clinic', '-', '', '9932080819', '', '9732474606', '');
INSERT INTO `contact` VALUES (395, 'Abdullah', 'SO', 'RBD Section', '', '', '', '', '9434261271');
INSERT INTO `contact` VALUES (396, 'Deepak', 'PA', 'Airport', '', '', '', '', '9434281682');
INSERT INTO `contact` VALUES (397, 'SARAVANAN', 'NIC ENGINEER', 'NIC', '', '', '', '', '9434290191');
INSERT INTO `contact` VALUES (398, 'Anand', 'JTO', 'BSNL', '', '', '', '', '9531808977');
INSERT INTO `contact` VALUES (401, 'Shobana Unni', 'SO', 'Stastical Office', '', '', '', '', '9476046349');
INSERT INTO `contact` VALUES (400, 'Ltg Pondy', 'PS to SLG', 'Pondicherry', '', '04132224555', '', '', '04132337144');
INSERT INTO `contact` VALUES (402, 'Esupadam', 'AS Higher Education', 'Secretariat', '', '231158', '', '', '9933255213');
INSERT INTO `contact` VALUES (403, 'KP Sanjeev', 'Deputy Director Technical', 'All India Radio AIR', '', '230260', '', '', '9434282306');
INSERT INTO `contact` VALUES (404, 'Manju Revathy Iyer', 'Documentary', '', '', '', '', '', '09987062361');
INSERT INTO `contact` VALUES (313, 'Dr. Veer Bhusan', 'Joint Secretary', 'Indian Red Cross Society (IRCS)', '', '011 23710429', '011 23717454', '', '');
INSERT INTO `contact` VALUES (347, 'Prabhat Singh', '', 'Petro Net LNG', '', '011 23472501', '', '', '');
INSERT INTO `contact` VALUES (405, 'Babu Rao', 'Assistant Secretary (GA)', 'Secretariat', '', '236572', '', '', '');
INSERT INTO `contact` VALUES (399, 'Krishna Chakraborthy', 'Deputy Secretary Perl', 'Secretariat', '', '236637', '', '', '9933250110');
INSERT INTO `contact` VALUES (284, 'Hari ', 'JE Electrical', 'Electricity Dept', '', '', '', '', '9434262196');
INSERT INTO `contact` VALUES (407, 'Vinod', 'DRC / JT Secretary to LG', 'Rajniwas', '', '', '', '', '9474292744');
INSERT INTO `contact` VALUES (408, 'Dubey', 'Protocol officer', 'GA', '', '232051', '', '', '9476084555');
INSERT INTO `contact` VALUES (414, 'Capt Rajinder Kumar', 'DSS', 'SHIPPING', '', '230480', '', '', '9434260414');
INSERT INTO `contact` VALUES (410, 'Mathura Prasad', 'Chief Engineer', 'APWD', '', '232852', '230215', '', '9531905290');
INSERT INTO `contact` VALUES (411, 'Ankita Mishra Bundela', 'Secretary ', 'Tourism, ANIIDCO, Art & Culture ', '', '246444', '232076', '', '9434289144');
INSERT INTO `contact` VALUES (412, 'Mohd. Pravez', 'GM', 'ANIIDCO', '', '', '', '', '9434280661');
INSERT INTO `contact` VALUES (413, 'Atal Mukhi', 'Son of LG', 'Delhi', '', '098011613410', '', '', '09811020900');
INSERT INTO `contact` VALUES (409, 'Priyaswamy', 'Project Attendent', 'Rajniwas', '', '', '', '', '9474216091');
INSERT INTO `contact` VALUES (415, 'Dilip Kumar ', 'Under Secretary', 'MHA', '', '011 23092688', '', '', '');
INSERT INTO `contact` VALUES (416, 'Subesh Kumar Das', 'Director General DG', 'Administrative Training Institute ATI', '', '033 23375244', '', '', '');
INSERT INTO `contact` VALUES (417, 'Narendra Modi', 'Prime Minister', 'MHA', '', '011 23019545', '011 23014396', '', '');
INSERT INTO `contact` VALUES (418, 'Pranab Mukherjee', 'President of India', 'MHA', '', '011 23017290', '011 23011949', '', '');
INSERT INTO `contact` VALUES (419, 'Girish Arora', 'ACC President', 'Chamber of Commerce', '', '220690', '', '', '9434280295');
INSERT INTO `contact` VALUES (420, 'SHEIK UDUMAN', 'Executive Engineer PBSD', '', '', '232784, 232266', '', '', '9434280592');
INSERT INTO `contact` VALUES (423, 'Thavamani', 'Blacksmith', 'APWD', '', '', '', '', '9474229404');
INSERT INTO `contact` VALUES (422, 'Ramaswamy', 'DRM', 'APWD', '', '', '', '9474215097', '9933225097');
INSERT INTO `contact` VALUES (424, 'Jagdish Mukhi', 'Honble LG', 'Andaman', '', '011 26882104', '', '', '');
INSERT INTO `contact` VALUES (425, 'Nippo', 'LGC', 'Secretariate (Perl)', '', '', '', '', '9734484700');
INSERT INTO `contact` VALUES (426, 'Naresh Gupta', 'LBSNAA ', 'Lal Bahadur Shastri National Academy of Administration', '', '', '', '', '9412075148');
INSERT INTO `contact` VALUES (427, 'Personnal Section', 'Personal Section (perl)', 'Secretariat (perl)', '', '234335', '', '', '');
INSERT INTO `contact` VALUES (428, 'Ashutosh Kumar', 'Secretary', 'Vigilance', '', '233227', '', '', '9474212314');
INSERT INTO `contact` VALUES (429, 'Dr. Rani', 'Homeo', 'AYUSH', '', '', '', '', '9434279787');

-- --------------------------------------------------------

-- 
-- Table structure for table `dept`
-- 

CREATE TABLE `dept` (
  `sn` int(4) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `dept`
-- 

INSERT INTO `dept` VALUES (1, 'APWD');
INSERT INTO `dept` VALUES (2, 'A/C (N&M)');
INSERT INTO `dept` VALUES (3, 'Accts & Bud');
INSERT INTO `dept` VALUES (4, 'Agriculture');
INSERT INTO `dept` VALUES (5, 'AH&VS  ');
INSERT INTO `dept` VALUES (6, 'Art & Culture');
INSERT INTO `dept` VALUES (7, 'CensusOperation');
INSERT INTO `dept` VALUES (8, 'Coop Society (RCS)');
INSERT INTO `dept` VALUES (9, 'CS & CA');
INSERT INTO `dept` VALUES (10, 'D.C (N&M)');
INSERT INTO `dept` VALUES (11, 'D.C (Nicobar)');
INSERT INTO `dept` VALUES (12, 'D.C (S/A)');
INSERT INTO `dept` VALUES (13, 'District Indus C');
INSERT INTO `dept` VALUES (14, 'District Jail');
INSERT INTO `dept` VALUES (15, 'Disaster Management');
INSERT INTO `dept` VALUES (16, 'Dr.BRAIT');
INSERT INTO `dept` VALUES (17, 'DRC Chennai');
INSERT INTO `dept` VALUES (18, 'DRC Delhi');
INSERT INTO `dept` VALUES (19, 'DRC Kolkatta');
INSERT INTO `dept` VALUES (20, 'Eco & Stat');
INSERT INTO `dept` VALUES (21, 'Educa');
INSERT INTO `dept` VALUES (22, 'Election');
INSERT INTO `dept` VALUES (23, 'Electricity');
INSERT INTO `dept` VALUES (24, 'Fisheries');
INSERT INTO `dept` VALUES (25, 'Forest');
INSERT INTO `dept` VALUES (26, 'Govt Press');
INSERT INTO `dept` VALUES (27, 'Health services');
INSERT INTO `dept` VALUES (28, 'Industries');
INSERT INTO `dept` VALUES (29, 'Infor & Publicity');
INSERT INTO `dept` VALUES (30, 'JNRM College');
INSERT INTO `dept` VALUES (35, 'Port Management Board');
INSERT INTO `dept` VALUES (34, 'Police');
INSERT INTO `dept` VALUES (33, 'PBMC');
INSERT INTO `dept` VALUES (31, 'Judiciary');
INSERT INTO `dept` VALUES (32, 'Labr, Empl& Trai');
INSERT INTO `dept` VALUES (36, 'RD & Panchayat');
INSERT INTO `dept` VALUES (37, 'Sci.Tech & Pollu');
INSERT INTO `dept` VALUES (38, 'Ship Services');
INSERT INTO `dept` VALUES (39, 'Social Welfare');
INSERT INTO `dept` VALUES (40, 'Tourism');
INSERT INTO `dept` VALUES (41, 'Transport');
INSERT INTO `dept` VALUES (42, 'Tribal Welfare');
INSERT INTO `dept` VALUES (43, 'Youth Aff, Sports');
INSERT INTO `dept` VALUES (44, 'Zilla Parishad');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `sno` int(20) NOT NULL auto_increment,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `init` enum('Mr.','Mrs.','Miss.','Dr.') default NULL,
  `name` varchar(255) NOT NULL,
  `desig` varchar(255) NOT NULL,
  `contact` varchar(20) default NULL,
  `type` enum('admin','user') NOT NULL,
  `photo` varchar(255) default NULL,
  PRIMARY KEY  (`sno`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` VALUES (1, 'krajan1', 'a124710ce4fb0b50987209ae701d4599', 'Mr.', 'K Rajan', 'Computer Assistant', '9434294563', 'admin', 'upimage/rajan.jpg');
INSERT INTO `login` VALUES (3, 'subash', 'b4caefa3d450d0e36e183160d17aba24', 'Mr.', 'Subash', 'PA', '9933298988', 'admin', 'upimage/');
INSERT INTO `login` VALUES (2, 'natha', '69f6a057033df806dffb0b6f631a9b61', 'Miss.', 'Nathasaha', 'Steno', '9434290560', 'admin', 'upimage/');
