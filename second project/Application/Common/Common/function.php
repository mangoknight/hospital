<?php
/**
 * TODO 基础分页的相同代码封装，使前台的代码更少
 * @param $count 要分页的总记录数
 * @param int $pagesize 每页查询条数
 * @return \Think\Page
 */
function getpage($count, $pagesize = 10) {
    $p = new Think\Page($count, $pagesize);
    $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $p->setConfig('prev', '上一页');
    $p->setConfig('next', '下一页');
    $p->setConfig('last', '末页');
    $p->setConfig('first', '首页');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
}
   function   get_week($date){
        //强制转换日期格式
        $date_str=date('Y-m-d',strtotime($date));
   
        //封装成数组
        $arr=explode("-", $date_str);
        
        //参数赋值
        //年
        $year=$arr[0];
        
        //月，输出2位整型，不够2位右对齐
        $month=sprintf('%02d',$arr[1]);
        
        //日，输出2位整型，不够2位右对齐
        $day=sprintf('%02d',$arr[2]);
        
        //时分秒默认赋值为0；
        
        //转换成时间戳
        $strap = mktime($month,$day,$year);
        
        //获取数字型星期几
        $number_wk=date("w",$strap);
        
        //自定义星期数组
        $weekArr=array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
        
        //获取数字对应的星期
        return $strap;
    }
    
    //测试

?>