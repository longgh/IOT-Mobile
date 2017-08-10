<?php
return array(
    //加载其他配置文件
    'LOAD_EXT_CONFIG' => 'db',

    //默认访问目录
    'DEFAULT_MODULE'       =>    'Home',

    /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '$COMMON$'   => __ROOT__ . '/Public/Common',
        '$RESOURCE$'   => __ROOT__ . '/Public/Application',
    ),

    'URL_MODEL'             =>  2,
    // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
);