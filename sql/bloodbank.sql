
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodinfo`


CREATE TABLE bloodinfo (
  bid int(11) NOT NULL,
  hid int(11) NOT NULL,
  bg varchar(10) NOT NULL
) ;

INSERT INTO bloodinfo (bid, hid, bg) VALUES
(1, 1, 'B+'),
(2, 2, 'A+'),
(3, 3, 'O+'),
(4, 3, 'B+'),
(5, 3, 'AB-'),
(6, 4, 'B-'),
(7, 4, 'AB+'),
(8, 5, 'O-'),
(9, 5, 'B+'),
(10, 6, 'A-'),
(11, 6, 'B-');


CREATE TABLE bloodrequest (
  reqid int(11) NOT NULL,
  hid int(11) NOT NULL,
  rid int(11) NOT NULL,
  bg varchar(11) NOT NULL,
  status varchar(100) NOT NULL DEFAULT 'Pending'
) ;


INSERT INTO bloodrequest (reqid, hid, rid, bg, status) VALUES
(1, 1, 1, 'B+', 'Pending'),
(2, 3, 3, 'AB-', 'Accepted'),
(3, 4, 5, 'O-', 'Accepted'),
(4, 2, 6, 'A-', 'Pending');

CREATE TABLE hospitals (
  id int(11) NOT NULL,
  hname varchar(100) NOT NULL,
  hemail varchar(100) NOT NULL,
  hpassword varchar(100) NOT NULL,
  hphone varchar(100) NOT NULL,
  hcity varchar(100) NOT NULL
);


INSERT INTO hospitals (id, hname, hemail, hpassword, hphone, hcity) VALUES
(1, 'Gandhi Hospital', 'gandhihospital@gmail.com','gandhi123', 9805764132 , 'Chennai'),
(2, 'SRM Hospital', 'srmhospital@gmail.com', 'srm123', 9084562431, 'Kancheepuram'),
(3, 'Apollo Hospital', 'apollohospital@gmail.com', 'apollo123', 6391245780, 'Chennai'),
(4, 'MIOT Hospital', 'miothospital@gmail.com', 'miot123', 6931254870, 'Chennai'),
(5, 'Stanley Hospital','stanleyhospital@gmail.com', 'stanley123', 6908754321, 'Coimbatore'),
(6, 'Kauvery Hospital', 'kauveryhospital@gmail.com', 'kauvery123', 9102837465, 'Salem'),
(7, 'Rajiv Hospital', 'rajivhospital@gmail.com','rajiv123','1243567890','Coimbatore');


CREATE TABLE receivers (
  id int(11) NOT NULL,
  rname varchar(100) NOT NULL,
  remail varchar(100) NOT NULL,
  rpassword varchar(100) NOT NULL,
  rphone varchar(100) NOT NULL,
  rbg varchar(10) NOT NULL,
  rcity varchar(100) NOT NULL
);

INSERT INTO receivers (id, rname, remail, rpassword, rphone, rbg,rcity) VALUES
(1, 'Praveen', 'praveen@gmail.com', 'praveen123', '9178234217', 'A-', 'Chennai'),
(2, 'Arjun', 'arjun@gmail.com', 'arjun123', '7256300185', 'O-', 'Chennai'),
(3, 'Priya', 'priya@gmail.com', 'priya123', '9174568052', 'AB+', 'Salem'),
(4, 'Sandiya', 'sandiya@gmail.com', 'sandiya123', '9176252209', 'B+', 'Coimbatore'),
(5, 'Deepak', 'deepak@gmail.com', 'deepak123', '9174534561', 'O+', 'Chennai');
-- Indexes for table `bloodinfo`
--
ALTER TABLE bloodinfo
  ADD PRIMARY KEY (bid),
  ADD KEY hid (hid);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE bloodrequest
  ADD PRIMARY KEY (reqid),
  ADD KEY hid (hid);

--
-- Indexes for table `hospitals`
--
ALTER TABLE hospitals
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY hemail (hemail);

--
-- Indexes for table `receivers`
--
ALTER TABLE receivers
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY remail (remail);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodinfo`
--
ALTER TABLE bloodinfo
  MODIFY bid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE bloodrequest
  MODIFY reqid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE hospitals
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE receivers
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodinfo`
--
ALTER TABLE bloodinfo
  ADD CONSTRAINT bloodinfo_ibfk_1 FOREIGN KEY (hid) REFERENCES hospitals (id);
COMMIT;

