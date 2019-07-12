CREATE TABLE parentreg(
    	parentid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    	firstname varchar(20) NOT NULL,
    	lastname varchar(20) NOT NULL,
    	middlename varchar(20) NOT NULL,
    	country varchar(30) NOT NULL,
    	dob date NOT NULL,
    	region varchar(20) NOT NULL,
    	email varchar(50) UNIQUE NOT NULL ,
    	phone1 varchar(20) NOT NULL,
    	phone2 varchar(20),
    	residence TEXT NOT NULL,
        gender varchar(10) NOT NULL,
        picture TEXT,
    	regdate datetime NOT NULL
    )