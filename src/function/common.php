<?php


// "print" 是 PHP 的关键字，不能用作函数名，这里将其改为 "printStr"
function printStr(?string $str = null) {
    echo '这是个字符串：' .$str;
}