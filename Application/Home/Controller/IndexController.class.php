<?php
namespace Home\Controller;

use Think\Controller;
use Think\Upload;
/**
 * 前端首页控制器
 */
class IndexController extends Controller
{    
    public function index()
    {
        /** 
     * 数据导出 
     * @param array $title   标题行名称 
     * @param array $data   导出数据 
     * @param string $fileName 文件名 
     * @param string $savePath 保存路径 
     * @param $type   是否下载  false--保存   true--下载 
     * @return string   返回文件全路径 
     * @throws PHPExcel_Exception 
     * @throws PHPExcel_Reader_Exception 
     */ 
     //p(__ROOT__ . '/ThinkPHP/Library/Vendor/PHPExcel/Classes/PHPExcel.php');
     //echo "-------------------------------"."<br>";   
     //exportExcel("实验文件", array('1','2','3'), 'excel文件', './', 0);
     //exportExcel(array('姓名','年龄'), array(array('a',21),array('b',23)), '档案', './testtt/', true);
     importExecl('dkdkdkkdk');
        die();
        $this->display();
    }
    public function uploadExcel(){
        //echo __ROOT__.'./Public/Uploads/';
        //die();
        $this->display();
    }
    public function upload(){    
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
        $upload->exts      =     array('jpg', 'xls', 'xlsx');// 设置附件上传类型    
        $upload->rootPath = "./Public/";
        $upload->savePath = "Uploads/";
        //$upload->savePath  =     '../Public/Uploads/'; // 设置附件上传目录  
        //echo   $upload->savePath;
        //die();
        $upload->saveName = 'ThinkPHP2';
        //$upload->autoSub = false;
        $upload->subName = 'get_user_id';
        // 上传单个文件     
        $info   =   $upload->uploadOne($_FILES['file1']);    
        //$info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息        
            $this->error($upload->getError());    
        }else{// 上传成功 获取上传文件信息         
            echo $info['savepath'].$info['savename'];   
            //$this->import($upload->rootPath . $info['file']['savepath'] . $info['file']['savename']); 
        }
    }
    
    
}