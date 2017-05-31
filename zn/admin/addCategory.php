<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
include "../public/db.php";
$sql="select * from category";
$result=$db->query($sql);

?>
<form action="addCategoryCon.php" method="get">
    所属分类: <select name="pid" id="">
        <option value="0">一级分类</option>
        <?php
        include "../public/tree.php";
        $obj=new tree();
        $obj->getTree(0,0,"&nbsp;·",$db,"category");
        echo $obj->str;
        ?>
    </select><br>
    分类名称; <input type="text" name="catname"><br>
    <input type="submit" value="添加">
</form>
</body>
</html>