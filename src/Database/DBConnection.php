<?php
namespace App\Database;

use PDO;

class DBConnection {
    public static function get() {
       return new PDO("mysql:host=localhost;dbname=student_app_db","root","");
    }
}