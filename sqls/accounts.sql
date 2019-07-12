CREATE accounts(
	accountid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar(20) NOT NULL,
	password varchar(150) NOT NULL,
	accounttype INT NOT NULL,
	parentid INT NOT NULL,
	-- teaherid INT NOT NULL,
	-- adminid INT NOT NULL,
	regdate datetime NOT NULL
)