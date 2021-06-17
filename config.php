<?php
$connection = new mysqli("sql107.epizy.com","epiz_28842553","qhR6tChVhgWlIg","epiz_28842553_gcetts_db");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}