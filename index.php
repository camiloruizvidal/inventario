<?php
@session_start();
if($_SESSION)
{
    
}
else
{
    header('location: login.php');
}
