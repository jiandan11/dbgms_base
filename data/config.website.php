<?php
if(!defined('DBGMS_ROOT')){
	header('HTTP/1.1 404 Not Found');
	exit("权限路径.No direct script access allowed");
}
return array (
  'base' => 
  array (
    'title' => '',
    'keywords' => '',
    'description' => '',
    'domain' => '/',
    'copyright' => '',
    'icp' => '',
    'logo' => '',
    'logow' => '',
    'logoh' => 'dbgms',
    'enablelanguage' => '1',
    'isopenqq' => '0',
    'qq' => '',
    'phone' => '',
    'isopencnzz' => '0',
    'cnzz' => '',
    'isopensite' => '0',
    'closeinfo' => '',
  ),
  'en' => 
  array (
    'title' => '',
    'keywords' => '',
    'description' => '',
  ),
  'email' => 
  array (
    'smtp_host' => '',
    'smtp_port' => '',
    'smtp_user' => '',
    'smtp_pass' => 'dbgms123456..',
    'name' => '',
  ),
  'trait' => 
  array (
    'lang' => '1',
    'dbgmscaptcha' => '0',
    'debug' => '0',
    'static' => '0',
    'fcache' => '0',
    'hcache' => '0',
    'dbcache' => '0',
    'cookie' => '',
    'session' => '0',
    'delsessionopen' => '0',
  ),
  'upload' => 
  array (
    'thumb' => '1',
    'type' => '1',
    'thumb_width' => '500',
    'thumb_height' => '500',
    'watermark' => '1',
    'watermark_point' => '0',
    'watermark_img' => '',
    'format' => '',
    'size' => '',
    'path' => '',
  ),
  'domain' => 
  array (
    'default' => 'http://www.dbg.com/',
    'mobile' => '',
    'file' => 'http://www.dbg.com/file/',
    'usesr' => 'http://www.dbg.com/usesr/',
  ),
);
?>