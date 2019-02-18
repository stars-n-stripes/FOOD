<?php
/**
 * Created by PhpStorm.
 * User: jlynch
 * Date: 2/17/2019
 * Time: 7:06 PM
 */

$dbconn = pg_connect("host=localhost port=5432 dbname=mary user=postgres");

if ($_POST['both'])
    $query = 'SELECT count()'
$query = 'SELECT'