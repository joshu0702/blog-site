<?php
require_once(__DIR__.'/../lib/layout.php');

/*
 * Author  Avinash Kumar  < toAvinash@clipming.com >
 * Copyright 2016 ClipMing.Com
 */

// - -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --


 class dataManager {

   public function addImg($base64data) {
     if(!empty($base64data)) {
       global $_db;
       $next_aid_prob = $_db->select("article","max(article_id)");
       if(empty($next_aid_prob)) $next_aid_prob = 0;
       $uniqueName = "img_".($next_aid_prob['max(article_id)']+1).'_'.common::keygen(8);
       $localPath = $_SERVER['DOCUMENT_ROOT']."/gallery/data/";

   		 if(!file_exists($localPath)) {
   			 mkdir($localPath, 0777, true);
   		 }

   		 $localPath.= $uniqueName;

       clearstatcache();

   		 $fp = fopen($localPath, "x");
   		 fwrite($fp, $base64data);
   		 fclose($fp);

       return array('image_uri' => $uniqueName);
     }
   } // << End addSpecs()   -----------------------------------------------------

   public function addPost() {
     if(isset($_POST["a-Cat"]) && isset($_POST["a-Title"]) && isset($_POST["a-SubTitle"]) && isset($_POST["a-Story"])) {
       global $_db;
       $cat = substr($_POST["a-Cat"],1);

       $info = pathinfo($_FILES['a-Banner']['name']);
       $ext = $info['extension'];
       $newname = "newname.".$ext;
       $localPath = "/gallery/data/";
       $next_aid_prob = $_db->select("article","max(article_id)");
       if(empty($next_aid_prob)) $next_aid_prob = 0;
       $uniqueName = "img_".($next_aid_prob['max(article_id)']+1).'_'.common::keygen(8);
       $target = $localPath.$uniqueName.'.'.$ext;
       move_uploaded_file( $_FILES['a-Banner']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$target);

       return $_db->insert('article',array($cat, $_POST["a-Title"], $_POST["a-SubTitle"], $target, $_POST["a-Story"]),"cat_id, title, sub_title, banner, content");
     }
   } // << End addSpecs()   -----------------------------------------------------

 } // << End class dataManager

$_D = new dataManager();
$_D->addPost();
?>
