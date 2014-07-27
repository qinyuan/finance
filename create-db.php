<?php
require_once 'lib/config.php';
require_once 'lib/MyPdo.class.php';

$pdo = new MyPdo();

$query = "create table if not exists finance_company(
			id int primary key auto_increment,
			name char(50) not null
			) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$pdo -> query($query);

$query = "create table if not exists finance_user(
			id int primary key auto_increment,
			name char(20) not null,
			password char(50) not null,
			super_id int,
			company int,
			has_add_pri boolean not null default FALSE
			) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$pdo -> query($query);

$query = "create table if not exists finance_inout(
			id int primary key auto_increment,
			user_id int not null,
			add_date date not null,
			amount double not null,
			description char(20) not null,
			inout_type tinyint not null
			) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$pdo -> query($query);

$query = "create table if not exists finance_inout_type(
			id tinyint primary key,
			description char(10) not null
			) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$pdo -> query($query);

$query = "truncate table finance_inout_type";
$pdo -> query($query);

$query = "insert into finance_inout_type values(1,'income'),(2,'expense')";
$pdo -> query($query);
?>