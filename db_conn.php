<?php
$conn = mysqli_connect( host: 'localhost', user: 'root', password:'', database: 'test_dbb');

if(!$conn)
{
die(' Connection Error ');
}