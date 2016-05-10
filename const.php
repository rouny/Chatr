<?php
// DATABASE
// userinfo
// CREATE TABLE userinfo(userid, firstname, lastname, handle, password);
// CRETAE TABLE chatmobile (userid,message);
// CREATE TABLE chatwindow (userid,message);

//database usage
/*
$host="54.88.27.113";
$port="3306";
$db_address = "batserver.ciobvvsw69oa.us-east-1.rds.amazonaws.com:3306";
$db_username = "joker";
$db_pass = "riddler0";
$db_name = "md";
*/

$host="http://localhost/";
$db_address = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "chatr";

$userinfo_tablename = 'chatuserinfo';
$userinfo_userid = 'userid';
$userinfo_firstname = 'firstname';
$userinfo_lastname = 'lastname';
$userinfo_handle = 'userhandle';
$userinfo_password = 'userpass';
$userinfo_userkey = 'userkey';

$chatmobile_tablename = 'chatmobile';
$chatmobile_userid = 'userhandle';
$chatmobile_message = 'msg';


// WINDOW
$chatwindow_tablename = 'chatwindowmessage';
$chatwindow_messageid = 'id';
$chatwindow_receiver = 'user1';
$chatwindow_sender = 'user2';
$chatwindow_message = 'message';


$userlist_tablename='userlist';
$userlist_id='id';
$userlist_user1='user1';
$userlist_user2='user2';




?>