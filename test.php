<?php
error_reporting(0);
echo 4444;die;
/*error_reporting(0);
$arr = array(1,3,9,23,54,88);
//二分查找（数组里查找某个元素）
//    非递归
//    $target是要查找的目标 $arr是已经排序好的数组
function binary($arr,$low,$top,$target){
    while($low <= $top){
//由于php取商是有小数的，所以向下取整，不过也可不加，数组也会取整
        $mid = floor(($low+$top)/2);
        if($arr[$mid]==$target){
            return $mid;
        }elseif($arr[$mid]<$target){
            $low = $mid+1;
        }else{
            $top = $mid-1;
        }
    }
    return -1;
}
echo binary($arr, 0, sizeof($arr), 23);
echo '<hr/>';
//    递归
function binaryRecursive(&$arr,$low,$top,$target){
    if($low<=$top){
        $mid = floor(($low+$top)/2);
        if($arr[$mid]==$target){
            return $mid;
        }elseif($arr[$mid]<$target){
            return binaryRecursive($arr,$mid+1,$top,$target);
        }else{
            return binaryRecursive($arr,$low,$mid-1,$target);
        }
    }else{
        return -1;
    }
}
echo binaryRecursive($arr, 0, sizeof($arr), 9);
echo '<hr/>';
//顺序查找（数组里查找某个元素）
function  seq_sch($arr, $n,  $k){
    for($i=0; $i<$n; $i++){
        if($arr[$i]==$k){
            break;
        }
    }
    if ($i<$n){
        return  $i;
    }else{
        return -1;
    }
}
echo seq_sch($arr, sizeof($arr), 23);
echo '<hr/>';

function php_decrypt($str)
{
    $enstr='';
    $encrypt_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $decrypt_key = 'ngzqtcobmuhelkpdawxfyivrsj2468021359';
    if ( strlen($str) == 0) return  false;
    for ($i=0;  $i<strlen($str); $i ++){
        for ($j=0; $j <strlen($decrypt_key); $j ++){
            if ($str[$i] == $decrypt_key [$j]){
                $enstr .=  $encrypt_key[$j];
                break;
            }
        }
    }
    return $enstr;
}
echo php_decrypt('yz12345');
echo '<hr/>';




//加密函数
function lock_url($txt,$key='www.jb51.net')
{
    $txt = $txt.$key;
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-=+";
    $nh = rand(0,64);
    $ch = $chars[$nh];
    $mdKey = md5($key.$ch);
    $mdKey = substr($mdKey,$nh%8, $nh%8+7);
    $txt = base64_encode($txt);
    $tmp = '';
    $i=0;$j=0;$k = 0;
    for ($i=0; $i<strlen($txt); $i++) {
        $k = $k == strlen($mdKey) ? 0 : $k;
        $j = ($nh+strpos($chars,$txt[$i])+ord($mdKey[$k++]))%64;
        $tmp .= $chars[$j];
    }
    return urlencode(base64_encode($ch.$tmp));
}
//解密函数
function unlock_url($txt,$key='www.jb51.net')
{
    $txt = base64_decode(urldecode($txt));
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-=+";
    $ch = $txt[0];
    $nh = strpos($chars,$ch);
    $mdKey = md5($key.$ch);
    $mdKey = substr($mdKey,$nh%8, $nh%8+7);
    $txt = substr($txt,1);
    $tmp = '';
    $i=0;$j=0; $k = 0;
    for ($i=0; $i<strlen($txt); $i++) {
        $k = $k == strlen($mdKey) ? 0 : $k;
        $j = strpos($chars,$txt[$i])-$nh - ord($mdKey[$k++]);
        while ($j<0) $j+=64;
        $tmp .= $chars[$j];
    }
    return trim(base64_decode($tmp),$key);
}

$str="脚本之家";
$pwd = lock_url($str);
echo "加密之后：".$pwd."<br/>";
echo "解密还原：".unlock_url($pwd);
echo '<hr/>';
//复制字符串 $cpstr
function strcpy($str)
{
    $cpstr='';
    $len = strlen($str);
    for($i=0;$i<$len;$i++)
    {
        $cpstr.=$str[$i];
    }
    return $cpstr;
}
echo strcpy('362');
echo '<hr/>';
//删除一段字符串
function str_delete($str , $i, $j)
{
    $startstr='';
    $laststr='';
    for ( $c=0; $c<$i;  $c++){
        $startstr .= $str [$c];
    }

    for ($c=( $i+$j); $c<strlen ($str); $c++){
        $laststr  .= $str[$c];
    }
    $str = ($startstr . $laststr );
    return $str;
}
echo str_delete('sfdhjmlknb',2,5);
echo '<hr/>';

//插入一段字符串
function str_insert($str,$in_str,$k)
{
    $len = strlen($str);
    $startStr='';
    $endStr='';
    for($i=0;$i<$k;$i++)
    {
        $startStr.=$str[$i];
    }
    for($j=$k;$j<$len;$j++)
    {
        $endStr.=$str[$j];
    }
    $newStr = $startStr.$in_str.$endStr;
    return $newStr;
}
echo str_insert('sfdhjmlknb','re',10);
echo '<hr/>';
//质数定义: 一个数,有且只能被1与其本身整除.
function checknumber($number){
    for($i=2;$i<$number;$i++)
    {
        if($number%$i === 0){
            $arr[] = $i;
        }
    }
    if(!$arr){
        return true;
    }else{
        return false;
    }
}
echo checknumber (88);*/
//字符串中最长的不重复子串
/*$str = "klgjsogsjfwsozflzfsrjylfjtdj";
$length = strlen($str);
$arr = array();
for($i=0;$i<$length;$i++)
{

}*/
echo '<pre>';
$str = "klgjsogsjfwsozflzfsrjylmfjtdj"; //定义一个字符串
$arr = array(); // 定义一个数组，用于保存所有计算过的字符串

// 1.采用递归实现
/*function diff($str,&$arr){
    $length = strlen($str);	// 算出$str的长度
    if($length == 0) return; // 如果长度为0直接返回
    $new = $str[0]; // 定义一个变量,用于保存所要求出的新的字符串
    for($i=1;$i<$length;$i++){
        if(strpos($new,$str[$i])!==false){ // 如果两个字符串有相同的值，那么就去掉字符串的第一个字母形成新的字符串，并进行递归调用
            $str = substr($str,1);
            diff($str,$arr);
            break; //一定要有break，因为到这一步，本次程序调用终止
        }else{ // 如果没有相同的值，就对$new进行拼接
            $new .= $str[$i];
            $arr[] = $new;
        }
    }
    return array_search(max($arr),$arr);
}
var_dump($arr[diff($str,$arr)]);*/

// 2.采用循环实现
/*function diff2($str,$arr){
    $length = strlen($str);
    for($i=0;$i<$length;$i++){
        $new = $str[$i];
        for($k=$i+1;$k<$length;$k++){
            if(strpos($new,$str[$k])!==false){
                break;
            }else{
                $new .= $str[$k];
                $arr[] = $new;
            }
        }
    }
    return $arr;
}
//var_dump(diff2($str,$arr));die;
$res = diff2($str,$arr);
$num = 0;
$array = array(); //定义一个新数组，用来存放$res数组的各个元素的长度
foreach($res as $k=>$v)
{
    $l = strlen($v);
    $array[$k] = $l;
}

$max = max($array); // 找出最大值
$key = array_keys($array,$max); //找出最大值所对应的下标
foreach($key as $v){
    echo '最长的字符串为:' . $res[$v] . "<br>";
    echo '长度为:' . $array[$v] . "<br>";
}*/











