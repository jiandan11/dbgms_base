<?php
if(!defined('DBGMS_ROOT')){
	header('HTTP/1.1 404 Not Found');
	exit("权限路径.No direct script access allowed");
}
return array (
  0 => 
  array (
    'id' => '2',
    'name' => '公司简介',
    'sign' => 'about',
    'model' => '1',
    'icon' => '-',
    'link' => 'zh/about/',
    'mlink' => 'zh/about/',
  ),
  1 => 
  array (
    'id' => '1',
    'name' => '新闻中心',
    'sign' => 'news',
    'model' => '1',
    'icon' => '-',
    'link' => 'zh/news/',
    'mlink' => 'zh/news/',
  ),
  2 => 
  array (
    'id' => '3',
    'name' => '产品中心',
    'sign' => 'product',
    'model' => '1',
    'icon' => '-',
    'link' => 'zh/product/',
    'mlink' => 'zh/product/',
    'list' => 
    array (
      0 => 
      array (
        'id' => '5',
        'name' => '办公用具',
        'sign' => 'bangongyongju',
        'model' => '1',
        'icon' => '###',
        'link' => 'zh/bangongyongju/',
        'mlink' => 'zh/bangongyongju/',
      ),
      1 => 
      array (
        'id' => '6',
        'name' => '工业设备',
        'sign' => 'gongyeshebei',
        'model' => '1',
        'icon' => '###',
        'link' => 'zh/gongyeshebei/',
        'mlink' => 'zh/gongyeshebei/',
      ),
    ),
  ),
  3 => 
  array (
    'id' => '4',
    'name' => '联系我们',
    'sign' => 'contact',
    'model' => '1',
    'icon' => '-',
    'link' => 'zh/contact/',
    'mlink' => 'zh/contact/',
  ),
);
?>