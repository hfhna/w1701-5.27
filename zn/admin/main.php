<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        html,body{
            width:100%;
            height:100%;
        }
        body{
            padding:0;
            margin:0;
            overflow:hidden;
        }
        header{
            width:100%;height:20%;
            border-bottom:2px solid #000;
            font-size: 30px;
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .box{
            width:100%;
            height:80%;
        }
        .left{
            float:left;
            width:20%;
            height:100%;
            border-right: 2px solid #000;
            box-sizing: border-box;
        }
        .right{
            float:left;
            width:80%;
            height:100%;
        }
        iframe{
            width:100%;
            height:100%;
        }
    </style>
</head>
<body>
<header>
    欢迎xxx来到新闻管理系统
</header>
<div class="box">
    <div class="left">
        <ul>
            <li>
                <a href="">分类管理</a>
                <ul>
                    <li><a href="addCategory.php" target="iframe">添加分类</a></li>
                    <li><a href="" target="iframe">查看分类</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="right">
        <iframe src="welcom.html" frameborder="0" name="iframe"></iframe>
    </div>
</div>
</body>
</html>