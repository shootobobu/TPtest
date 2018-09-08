<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller{
    public function test(){
        echo 'Hello';
    }
    public function testu(){
        // echo U('User/uuu');
        echo __URL__;
    }
}