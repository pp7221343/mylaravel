<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\model\Admin;

class indexController extends Controller
{
    public function getlogin(Request $request){
//        $partten = "/([1-9]\[[a-z]{1,}\])/";
//        $base_str = 'abc3[a]5[qw]';
//        $content = "";
//        $new_str = "";
//        $int_key = 0;
//        preg_match($partten,$base_str,$content);
//        dd($content);
        dd(app());
        

        return view('welcome');
    }


    public function postlogin(){
        dd(Auth::guard()->attempt());

//        $img = imagecreatefrompng('img.png');   //获取原图标识
//        $data = getimagesize('img.png');        //获取原图大小
//        $new = imagecreatetruecolor(80,80);  //新建空白位图并获取标识
//        imagecopyresampled($new,$img,0,0,0,0,80,80,$data[0],$data[1]);
        //将原图copy到新位图中
//        imagepng($new,'new.png',9);         //通过新位图的标识来生成实际文件
//        return "<img href=\"new.png\" />";
        return 0;
    }

    public function quickSort(&$arr){
        if(count($arr)>1){
            $k = $arr[0];
            $x = array();
            $y = array();
            $_size = count($arr);
            for($i=1;$i<$_size;$i++){
                if($arr[$i]<=$k){
                    $x[] = $arr[$i];
                }elseif ($arr[$i]>$k){
                    $y[] = $arr[$i];
                }
            }
            $x = $this->quickSort($x);
            $y = $this->quickSort($y);
            return array_merge($x,array($k),$y);
        }else{
            return $arr;
        }
    }

    public function array_out_of_order($str_array){
        $str_int = 0;                                   //单个字符串的int值和
        $str_int_array = array();                       //存放字符串转换后的ascii码
        $str_array = ["code","lint","intl","inlt"];     //原字符串数组
        $new_array = array();                           //返回的乱序字符串数组

        foreach ($str_array as $key => $value){         //将字符串数组转换成ascii数组
            $str_int = 0;
            for($i=0;$i<strlen($value);$i++){
                $str_int += ord($value[$i]);
            }
            $str_int_array[$key] = $str_int;
        }
        foreach ($str_int_array as $key =>$value){       //将转换后的数组通过key对比提取出乱序字符串
            $num = 0;
            foreach ($str_int_array as $item){
                if($value == $item){
                    $num++;
                }
            }
            if($num > 1 ){
                $new_array[] = $str_array[$key];
            }
        }
        return $new_array;
    }
};
