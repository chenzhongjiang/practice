<?php

    // 简单数据类型：整型、浮点型和布尔型

    // 定义4种整型数据

    $a1 = 110;
    $a2 = 0b110;
    $a3 = 0110;
    $a4 = 0x110;

    echo $a1,'~',$a2,'~',$a3,'~',$a4,"<hr>";    // 默认的PHP输出数值都会自动转换成10进制输出

    /**
     * 十进制转二进制
     * 10 ---》 8 + 2 ---》 2^3 + 2^1 ---》 从二进制右侧开始，按照对应的指数次位置补1，没有的补0
     * 
     * 从最右侧开始：00000000 00000000 00000000 00001010
     * 
     * 二进制转十进制
     * 01101011 ==> 从右侧开始 1*2^0 + 1*2^1 + 0*2^2 + 1*2^3 + 0*2^4 + 1*2^5 + 1*2^6 + 0*2^7
     * == 1 + 2 + 0 + 8 + 0 + 32 + 64 + 0 == 107
     */

     // 利用进制函数运算
     var_dump(decbin(107));
     echo "<hr>";

     // 浮点数
     $f1 = 1.23;
     $f2 = 1.23e10;
     $f3 = PHP_INT_MAX + 1;

     var_dump($f1,$f2,$f3);

     // 浮点数判断

     $f4 = 0.7;
     $f5 = 2.1;
     $f6 = $f5 / 3;

    echo "<hr>";

     var_dump($f4 == $f6);

     echo "<br>";

     // 布尔类型

     $b1 = true;
     $b2 = FALSE;

     var_dump($b1,$b2);