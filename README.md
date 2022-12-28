# php users managment
 Management of user access in php 

I'm working on a script that collects certain data from user, and logs them to db.

The idea is that at jobstart the user simply logs in, and pushes a START-botton.
and at jobend he fill out a form with the location he had been working, and the distance to his homeaddr.
then he pushes a STOP-botton. and the script will automaticly save all the data to a db.
DATAS:
	Date, month, year, week, starttime, stoptime, break/pause, workhours, location, distance*2

I would like to make it a multiuser service, for my team. But don't know how to make it so
user1 only has access to user1 logs, and user2 only his. etc etc
