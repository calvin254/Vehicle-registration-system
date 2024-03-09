/**Create Database Doreen **/
CREATE DATABASE doreen;

/**Use Database doreen**/
USE doreen;

/**CREATE TABLE ADMIN**/

CREATE TABLE admin (
  admin_name varchar(100) NOT NULL,
  admin_numer varchar(100) NOT NULL,
  admin_email varchar(100) NOT NULL,
  password varchar(100) NOT NULL
);

/**Create table MEMBERS**/
CREATE TABLE members (
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  id int(100) NOT NULL,
  phone int(100) NOT NULL,
  profile blob NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(100) NOT NULL
);

/**Create table MESSAGES**/

CREATE TABLE messages (
  message_id int(100) NOT NULL,
  senderemail varchar(100) NOT NULL,
  sendername varchar(100) NOT NULL,
  date date NOT NULL,
  subject varchar(200) NOT NULL,
  body varchar(300) NOT NULL
);


/** CREATE TABLE TRANSFER**/

CREATE TABLE transfer (
  oname varchar(100) NOT NULL,
  oemail varchar(100) NOT NULL,
  reg_no varchar(100) NOT NULL,
  tname varchar(100) NOT NULL,
  temail varchar(100) NOT NULL,
  tid varchar(100) NOT NULL,
  tphone varchar(100) NOT NULL,
  tdate date NOT NULL
);


/**CREATE TABLE VEHICLE**/

CREATE TABLE vehicle (
  email varchar(100) NOT NULL,
  chasis varchar(100) NOT NULL,
  engine varchar(100) NOT NULL,
  vmake varchar(100) NOT NULL,
  vmodel varchar(100) NOT NULL,
  wheels varchar(100) NOT NULL,
  vcolor varchar(100) NOT NULL,
  vpicture blob NOT NULL,
  date date NOT NULL,
  fuel varchar(100) NOT NULL,
  reg varchar(100) NOT NULL,
  status varchar(100) NOT NULL,
  plate_num varchar(100) NOT NULL
);


/**ADDING PRIMARY KEY**/
/**ADMIN TABLE**/
ALTER TABLE admin
  ADD PRIMARY KEY (`admin_email`);

/**MEMBERS TABLE**/
ALTER TABLE members
  ADD PRIMARY KEY (`email`);

/**MESSAGES TABLE**/
ALTER TABLE messages
  ADD PRIMARY KEY (`message_id`);

/**TRANSFER**/
ALTER TABLE transfer
  ADD PRIMARY KEY (`reg_no`);

/**VEHICLE**/
ALTER TABLE vehicle
  ADD PRIMARY KEY (`reg`);

