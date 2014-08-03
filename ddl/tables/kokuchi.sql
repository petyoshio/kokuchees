create table kokuchees.kokuchi
	(
	kokuchi_id MEDIUMINT NOT NULL AUTO_INCREMENT,
	user_id int(10) ZEROFILL not null,
	start_timing timestamp not null,
	end_timing timestamp not null,
	kokuchi_title varchar(100) not null,
	kokuchi_detail varchar(4000) not null,
	inst_ymd timestamp not null DEFAULT CURRENT_TIMESTAMP,
	updt_ymd timestamp,
	del_ymd timestamp,
	del_flg tinyint default 0,
	primary key(kokuchi_id,user_id)
	);