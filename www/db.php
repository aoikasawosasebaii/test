<?php
class mydb {
	public function con() {
		$link = mysql_connect('mysql319.db.sakura.ne.jp', 'leleclub', 'zidane10');
		if (!$link) {
			print(mysql_error());
		} else {
			print("success");
			return $link;
		}
	}
	public function insert($link,$id,$name) {
		mysql_set_charset('utf8');
		$db_selected = mysql_select_db('leleclub_f', $link);
		$sql = "INSERT INTO test (id, name) VALUES ( $id, '$name');";
		$result_flag = mysql_query($sql);

		if (!$result_flag) {
			die('INSERT failed!   '. $sql  .mysql_error());
		}
	}
}
?>
