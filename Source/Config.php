<?php 

define("ROOT", "http://localhost/projeto-remaster");

define("SITE", "CondApp");

define("DATA_LAYER_CONFIG", [
	"driver" => "mysql",
	"host" => "localhost",
	"port" => "3306",
	"dbname" => "condo",
	"username" => "root",
	"passwd" => "123123",
	"options" => [
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	]
]);

function url(string $uri = null): string
{
	if ($uri) {
		return ROOT . "{$uri}";
	}

	return ROOT;
}