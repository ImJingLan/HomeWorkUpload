<?php
$name=array("不要改这个","学生1","学生2");//学生姓名,按学号排，一定要从第二个项目写第一个学生的名字
$n=2;//有几个学生
echo('
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>作业提交情况查询系统</title>
    <link href="css/dmaku.main.css" rel="stylesheet"/>
</head>
<body class="md-skin">
	<form action="./FileServer/check.php" class="form-horizontal" method="post" enctype="multipart/form-data">
		<div id="loginbox">
			<div><h1 class="logo-name"></h1></div>
			<div class="form-group"><h3>作业提交情况查询系统</h3></div>
			<div class="form-group"><select name="num" style="width:150px;height:40px; font-size:120%">');
			for($i=1;$i<=$n;$i++)//输出学生选择框
                {
                        echo '<option value ="'.$i.'">'.$i.'号 '.$name[$i].'</option>';
                }
		echo ('	</select><br><br></div>
			
			<div class="form-group">
				<input type="submit" class="btn btn-primary btn-block" value="提交" />
			</div>
			<p>© 2021 董航聿 , All rights reserved.</p>
		</div>
	</form>
</body>
</html>');
?>