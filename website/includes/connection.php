<?php
$server_usename ="root"; //thong tin dang nhap host
$server_password =""; //mat khau trong truong hop nay la trong
$server_host ="localhost"; //host la localhost
$database ='website'; //database la website
//Tạo kết nối đến database dùng mysqli_connect()
$conn = mysqli_connect($server_host,$server_usename,$server_password,$database) or die("ko thể kết nối đến database");
//thiết lập kết nối của chúng ta khi truy vấn là dạng UTF8 trong trường hợp dữ liệu là tiếng việt có dấu
mysqli_query($conn,"SET NAMES 'UTF8'");