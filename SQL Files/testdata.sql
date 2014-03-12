INSERT INTO users VALUES ('B001231111', 'John Doe');
INSERT INTO users VALUES ('B001232222', 'Mike Doe');
INSERT INTO users VALUES ('B001233333', 'Sarah Doe');
INSERT INTO users VALUES ('B001234444', 'Jean Doe');
INSERT INTO users VALUES ('B001235555', 'Neera Doe');


INSERT INTO events (title, startTime, endTime, details, created, BlazerID) VALUES (
	'Event1',
	'2014-2-2',
	'2014-2-3',
	'Event 1 details here',
	CURRENT_TIMESTAMP,
	'B001231111'
);


INSERT INTO events (title, startTime, endTime, details, created, BlazerID) VALUES (
	'Event2',
	'2014-2-1',
	'2014-2-3',
	'Event 2 details here',
	CURRENT_TIMESTAMP,
	'B001232222'
);

INSERT INTO events (title, startTime, endTime, details, created, BlazerID) VALUES (
	'Event3',
	'2014-1-1',
	'2014-2-3',
	'Event 3 details here',
	CURRENT_TIMESTAMP,
	'B00123333'
);

INSERT INTO comments (title, details, created, BlazerID, eventID) VALUES (
	'Mikes Comment',
	'Comment On Event 1',
	CURRENT_TIMESTAMP,
	'B001232222',
	1
);

INSERT INTO comments (title, details, created, BlazerID, eventID) VALUES (
	'Sarah Comment',
	'Comment On Event 3',
	CURRENT_TIMESTAMP,
	'B001233333',
	3
);

INSERT INTO comments (title, details, created, BlazerID, eventID) VALUES (
	'Neera Comment',
	'Comment On Event 2',
	CURRENT_TIMESTAMP,
	'B001235555',
	2
);

