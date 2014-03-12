CREATE TABLE Users(
	BlazerID varchar(10) primary key,
	Name varchar(100) NOT NULL
);

CREATE TABLE Events(
	ID SERIAL primary key NOT NULL,
	title varchar(100) NOT NULL,
	startTime date NOT NULL,
	endTime date NOT NULL,
	details varchar(10000),
	created date NOT NULL,
	BlazerID varchar(10) NOT NULL
);

CREATE TABLE Comments(
	ID SERIAL primary key NOT NULL,
	title varchar(50),
	details varchar(500),
	created date NOT NULL,
	BlazerID varchar(10) NOT NULL,
	eventID integer NOT NULL
);

CREATE TABLE SessionKey(
	ID SERIAL primary key NOT NULL,
	Hash varchar(100) NOT NULL,
	Expires date NOT NULL
);




