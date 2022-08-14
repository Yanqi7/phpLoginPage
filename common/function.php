<?php

// 自定义函数，过滤gpc 防止特殊字符 防止注入
//function filter_str($value){
//    if(get_magic_quotes_gpc()){
//        $value == addcslashes(trim($value));
//        return $value;
//    }
//    return trim($value);
//} 该函数在php6版本以上就已经弃用，更换新方法 addslashes()


