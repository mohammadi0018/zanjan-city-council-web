<?php
include_once('./+lib/function/form.inc.php');
include_once('./+lib/models/news/News.php');
include_once('./+lib/models/staticpage/Staticpage.php');

$title = 'news';
$newsmanager = new News();
$staticpage= new Staticpage();

//for special news
$newslist['akhbarostan']= $newsmanager->getAll('*','createDate',6,0," and categoryId='1'");
$newslist['akhbaroshora']= $newsmanager->getAll('*','createDate',6,0," and categoryId='2'");
$newslist['notgh']= $newsmanager->getAll('*','createDate',8,0," and categoryId='3'");
$newslist['mosavabat']= $newsmanager->getAll('*','createDate',3,0," and categoryId='4'");
$newslist['lavayeh']= $newsmanager->getAll('*','createDate',3,0," and categoryId='5'");
$newslist['tarh']= $newsmanager->getAll('*','createDate',3,0," and categoryId='6'");

$staticpagelist['one']=$staticpage->getAll('*','createDate',3,0," and page_id='79'");
$staticpagelist['two']=$staticpage->getAll('*','createDate',3,0," and page_id='80'");
$staticpagelist['right']=$staticpage->getAll('*','createDate',3,0," and page_id='91'");
$staticpagelist['right2']=$staticpage->getAll('*','createDate',3,0," and page_id='152'");

?>