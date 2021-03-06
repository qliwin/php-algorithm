<?php
/**
 * 插入排序
 * 把n个待排序的元素看成为一个有序表和一个无序表
 * 开始时有序表中只包含1个元素，无序表中包含有n-1个元素
 * 排序过程中每次从无序表中取出第一个元素，将它插入到有序表中的适当位置，使之成为新的有序表，重复n-1次可完成排序过程
 */
function insert_sort($arr)
{
    $len = count($arr); //长度
    for ($i = 1; $i < $len; $i++) { //无序轮次
        $temp = $arr[$i]; //拿出一个临时元素
        for ($j = $i - 1; $j >= 0; $j--) { //有序轮次
            if ($temp < $arr[$j]) { // 将临时元素放入有序位置
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

insert_sort($arr);
$t2 = microtime(true);
dump(($t2 - $t1) * 1000 . 'ms');