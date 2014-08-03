create table kokuchees.user
	(
	user_id int(10) ZEROFILL not null,
	user_name varchar(200) not null,
	user_address varchar(200) not null,
	user_email varchar(200) not null,
	invalid_flg tinyint not null default 0,
	inst_ymd timestamp not null DEFAULT CURRENT_TIMESTAMP,
	updt_ymd timestamp,
	del_ymd timestamp,
	del_flg tinyint default 0,
	primary key(user_id)
	);