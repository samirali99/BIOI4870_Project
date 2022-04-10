<?php

$conn = mysqli_connect(host:'localhost', user:'root', password:'', database:'chart');

if(!$conn)
{
    die(' Connection Error ');
}