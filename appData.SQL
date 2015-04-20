CREATE TABLE 'Apps' (
	'aName'		varchar(16),
	'dev'		varchar(16),
	'platform'	varchar(16),
	'appID'		int(10),
	'rating'	int(10),
	'numRating'	int(10),
	PRIMARY KEY ('appID')	
)
CREATE TABLE 'Versions' (
	'appId'		int(10),
	'verNum'	varchar(10)
)

CREATE TABLE 'Comments' (
	'appID'		int(10),
	'desc'		varchar(200),
	'userID'	int(10),
	'comRating'	int(10)
)

CREATE TABLE 'User' (
	'fName'		varchar(16),
	'lName'		varchar(16),
	'uName'		varchar(16),
	'uPass'		varchar(16),
	'userID'	int(10),
	PRIMARY KEY ('userID')
)

CREATE TABLE 'Admin' (
	'fName'		varchar(16),
	'lName'		varchar(16),
	'uName'		varchar(16),
	'uPass'		varchar(16),
	'adminID'	int(10),
	PRIMARY KEY ('adminID')
)

INSERT INTO 'Apps' ('Snapchat', NULL, 'All', 00000001, 9, 10)
INSERT INTO 'Apps' ('Facebook', 'Facebook', 'All', 00000002, 8, 90)
INSERT INTO 'Apps' ('Instagram', 'Systrom', 'All', 00000003, 10, 24)
INSERT INTO 'Apps' ('Soundcloud', 'Walhforss', 'All', 00000004, 9, 10)
INSERT INTO 'Apps' ('Candy Crush', 'King', 'All', 00000005, 7, 13)
INSERT INTO 'Apps' ('Clash of Clans', 'Supercell', 'All', 00000006, 10, 32)
INSERT INTO 'Apps' ('Boom Beach', 'Supercell', 'All', 00000007, 2, 22)

INSERT INTO 'Comments' (00000004, "I love Soundcloud, it is my favorite app!" 100000001, 10)
INSERT INTO 'Comments' (00000002, "I love Facebook, it's pretty cool!" 100000002, 9)

INSERT INTO 'User' ('Dakota', 'Brown', 'browndm5', 'sophieMyDog', 10000001)
INSERT INTO 'User' ('Patrick', 'Straits', 'straitpe', 'racecar', 10000003)
INSERT INTO 'User' ('Josh', 'Godar', 'godarjd', 'racecar', 10000004)

INSERT INTO 'Admin' ('Gianna', 'Sheffield', 'sheffigm' 'racecar', 10000002)
INSERT INTO 'Admin' ('Michael', 'Flores', 'floresm2', 'racecar', 10000005)










