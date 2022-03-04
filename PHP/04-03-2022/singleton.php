<?php

class DataBaseConnector {
				
	private static $obj;
				
	private final function __construct() {
		echo __CLASS__ . " initialize only once ";
	}
	
	public static function getConnect() {
		if (!isset(self::$obj)) {
			self::$obj = new mysqli('localhost', 'root', '', 'quicksol');
            echo "Connected<br/>";
		} else {
            echo "Already connected";
        }
		
		return self::$obj;
	}
}

$obj1 = DataBaseConnector::getConnect();

$obj2 = DataBaseConnector::getConnect();
$obj3 = DataBaseConnector::getConnect();
$obj4 = DataBaseConnector::getConnect();
$obj5 = DataBaseConnector::getConnect();
?>
