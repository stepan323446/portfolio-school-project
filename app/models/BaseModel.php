<?php
namespace App\Models;

class Model {
    public $id;
    protected static $id_counter = 0;

    public function __construct() {
        $id = self::$id_counter++;
    }
    public function create_element() {
        // //
    }
}
?>