<?php
/*
 *   class的语法
 *   类是对象的抽象
 *   对象的类的实例(具象的物体)
 *   public private protected
 * 
 *   递归函数
 *    一个函数在指定的条件下调用自己
 *
 *   顶层分类  pid
 *   层级
 *   标识
 *   &db
 *
 * */
class tree{
    public $str="";
    function getTree($pid,$step,$flag,$db,$table){
        $step+=1;
        $sql="select * from ".$table." where pid=".$pid;
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            // 1.编程类
            $id=$row["id"];
            $catname=$row["catname"];
            $str=str_repeat($flag,$step);
            $this->str.="<option value='{$id}'>{$str}{$catname}</option>";
            $this->getTree($id,$step,$flag,$db,$table);
        }
    }
}
