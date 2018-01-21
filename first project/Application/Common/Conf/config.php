<?php
return array(
	//'配置项'=>'配置值'
     /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'hospital',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'admin',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    
    'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息
    'LOG_RECORD' => true, // 开启日志记录
    
    // 模板标签配置
    'AR_TITLE' => '文章标题*',
    'AR_CON' => '文章简介*',
    //默认分组设置
    'DEFAULT_MODULE'        =>  'Home',
    'MODULE_ALLOW_LIST'     =>  array('Home', 'Admin'),
    'TMPL_ENGINE_TYPE'      =>  'Smarty',
);