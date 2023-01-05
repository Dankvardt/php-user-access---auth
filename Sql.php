<?php

/* Created table for data storing */
$sql = "create table time_sched (
    id int(5) auto_increment primary key,
    date int(2),
    month int(2),
    year int(4),
    week int(2),
    start varchar(5),
    stop varchar(5),
    break int(1),
    hours varchar(5),
    location text(50),
    distance int(4),
    user varchar(15)
) engine = innodb;
