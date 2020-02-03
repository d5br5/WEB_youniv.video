CREATE TABLE member (
	mb_no int(11) NOT NULL AUTO_INCREMENT,
	mb_id varchar(20) NOT NULL DEFAULT '',
	mb_password varchar(255) NOT NULL DEFAULT '',
	mb_name varchar(255) NOT NULL DEFAULT '',
  mb_birth datetime NOT NULL DEFAULT '2000-01-01',
	mb_email varchar(255) NOT NULL DEFAULT '',
	mb_gender varchar(255) NOT NULL DEFAULT '',
	mb_ip varchar(255) NOT NULL DEFAULT '',
	mb_datetime datetime NOT NULL DEFAULT '1000-01-01 00:00:00',
	mb_modify_datetime datetime NOT NULL DEFAULT '1000-01-01 00:00:00',
	PRIMARY KEY (mb_no),
	UNIQUE KEY mb_id (mb_id),
	KEY mb_datetime (mb_datetime)
);

alter table member add mb_phone text after mb_birth;

CREATE TABLE memo(
	me_id int(11) not null AUTO_INCREMENT,
	me_recv_mb_id varchar(20) NOT NULL DEFAULT '',
	me_send_mb_id varchar(20) NOT NULL DEFAULT '',
	me_send_datetime datetime not NULL DEFAULT '1000-01-01 00:00:00',
	me_read_datetime datetime not NULL DEFAULT '1000-01-01 00:00:00',
	me_memo text NOT NULL,
	primary key(me_id),
	key me_recv_mb_id(me_recv_mb_id)
);


CREATE TABLE recruit(
  rc_no int(11) NOT NULL AUTO_INCREMENT,
  rc_title varchar(30) NOT NULL DEFAULT '',
  rc_group varchar(20) NOT NULL DEFAULT '',
  rc_form varchar(20) NOT NULL DEFAULT '',
  rc_career varchar(30) NOT NULL DEFAULT '',
  rc_deadline datetime NOT NULL DEFAULT '2000-01-01',
  rc_text text NULL,
  rc_directory varchar(255) NOT NULL DEFAULT '',
  rc_imagename varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (rc_no),
	UNIQUE KEY rc_no (rc_no),
	KEY rc_title (rc_title)
);

CREATE TABLE topic(
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(45) NOT NULL DEFAULT '',
  description text,
  created datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY(id)
) ENGINE=InnoDB;
