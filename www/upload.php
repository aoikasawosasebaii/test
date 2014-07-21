<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<p><?php
require_once 'db.php';
if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
	$str = preg_replace('/(\s|　)/','',$_FILES["upfile"]["name"]);
	if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "files/" . "$str")) {

		$db=new mydb();
		$link=$db->con();
		$link=$db->insert($link,2,$str);

		chmod("files/" . $str, 0644);
		echo $str . "<a href =/form.html>Done</a>";
	} else {
		echo "ファイルをアップロードできません。";
	}
} else {
	echo "<a href =/form.html>Please choose upload file</a>";
}

?></p>

</body>
</html>
