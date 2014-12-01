CREATE TABLE cs312_payment (
  cs312_useremail varchar(255) NOT NULL, 
  cardNo          bigint(16) NOT NULL UNIQUE, 
  cardName        varchar(255) NOT NULL, 
  sortcode        int(6) NOT NULL, 
  securityNo      smallint(3) NOT NULL, 
  expiryMonth     smallint(2) NOT NULL, 
  expiryYear      int(4) NOT NULL, 
  PRIMARY KEY (cs312_useremail, 
  cardNo)) ENGINE=InnoDB;
CREATE TABLE cs312_stock (
  name        varchar(255) NOT NULL, 
  `size`      char(1) NOT NULL, 
  colour      varchar(20) NOT NULL, 
  description varchar(255), 
  quantity    int(10) NOT NULL, 
  price       int(10) NOT NULL, 
  image       varchar(255), 
  PRIMARY KEY (name, 
  `size`, 
  colour)) ENGINE=InnoDB;
CREATE TABLE cs312_orderItem (
  cs312_orderId     bigint(19) NOT NULL, 
  cs312_stockname   varchar(255) NOT NULL, 
  cs312_stocksize   char(1) NOT NULL, 
  cs312_stockcolour varchar(20) NOT NULL, 
  quantityOrdered   int(10) NOT NULL, 
  PRIMARY KEY (cs312_orderId)) ENGINE=InnoDB;
CREATE TABLE cs312_order (
  Id              bigint(19) NOT NULL AUTO_INCREMENT, 
  cs312_useremail varchar(255) NOT NULL, 
  `date`          date NOT NULL, 
  street          varchar(140) NOT NULL, 
  town            varchar(140) NOT NULL, 
  county          varchar(60), 
  postcode        varchar(8), 
  PRIMARY KEY (Id)) ENGINE=InnoDB;
CREATE TABLE cs312_user (
  email    varchar(255) NOT NULL, 
  fname    varchar(60) NOT NULL, 
  sname    varchar(60) NOT NULL, 
  dob      date NOT NULL, 
  password varchar(128) NOT NULL, 
  PRIMARY KEY (email)) ENGINE=InnoDB;
ALTER TABLE cs312_order ADD INDEX FKcs312_orde831537 (cs312_useremail), ADD CONSTRAINT FKcs312_orde831537 FOREIGN KEY (cs312_useremail) REFERENCES cs312_user (email);
ALTER TABLE cs312_orderItem ADD INDEX FKcs312_orde759218 (cs312_orderId), ADD CONSTRAINT FKcs312_orde759218 FOREIGN KEY (cs312_orderId) REFERENCES cs312_order (Id);
ALTER TABLE cs312_orderItem ADD INDEX FKcs312_orde905810 (cs312_stockname, cs312_stocksize, cs312_stockcolour), ADD CONSTRAINT FKcs312_orde905810 FOREIGN KEY (cs312_stockname, cs312_stocksize, cs312_stockcolour) REFERENCES cs312_stock (name, `size`, colour);
ALTER TABLE cs312_payment ADD INDEX FKcs312_paym993654 (cs312_useremail), ADD CONSTRAINT FKcs312_paym993654 FOREIGN KEY (cs312_useremail) REFERENCES cs312_user (email);
