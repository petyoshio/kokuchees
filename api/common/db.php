<?php
class DB
{

    public function db_xml_load(){

        $conf_path = '../conf/dbconf.xml';
        $xml = simplexml_load_file($conf_path);

    	return array(
    		"host" => $xml->dbhost,
    		"user" => $xml->dbuser,
    		"pass" => $xml->dbpass,
    		"usedb" => $xml->dbusedb
    	);
    }

    public function db_connect() {
        // DB情報取得
    	$dbst = $this->db_xml_load();
        // DBインスタンス生成し、接続
        $mysqli = new mysqli($dbst["host"],$dbst["user"],$dbst["pass"],$dbst["usedb"]);
        // 文字化け防止
        $mysqli->set_charset("utf-8");
        return $mysqli;
    }

    public function db_disconnect($mysqli){
    	$mysqli->disconnect();
    }
}
?>