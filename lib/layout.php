<?php

/*
 * Author  Avinash Kumar  < toAvinash@clipming.com >
 * Copyright 2017 ClipMing.Com
 *
 *
 * This module provides communication with
 */

// - -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --
require_once(__DIR__.'/client.php');

class layout {
	public function showAllCat() {
		global $_db;
		$all_cat = $_db->select("category");
		$htm = '<ul class="p-3">';
		foreach ($all_cat as $cat) {
			$htm.='<li class="row">'.$cat['icon_markup'].$cat['cat_name'].'</li>';
		}
		$htm.= '</ul>';
		return $htm;
	}

	public function showArticles() {
		global $_db;
		$articles = fixArray($_db->select("article"));
		$htm = '';
		foreach ($articles as $post) {
			$htm.='	<div class="card mb-2">
								<a href="/view/'.seoTxt($post['title']).'-'.$post['article_id'].'" class="card-link">
								<img src="'.$post['banner'].'" class="img-fluid rounded" />
								<div class="card-img-overlay">
								    <i class="fa fa-heart"></i>
								</div>
							  <div class="card-body p-2">
							    <h4 class="card-title">'.$post['title'].'</h4>
								  <p class="card-text">'.$post['sub_title'].'</p>
								 </div>
								 </a>
							</div>';
		}
		$htm.= '</ul>';
		return $htm;
	}

	public function RecomArticles() {
		global $_db;
		$articles = fixArray($_db->select("article","*",null,"article_id desc"));
		$htm = '';
		foreach ($articles as $post) {
			$htm.='<div class="card mb-2">
							<img src="'.$post['banner'].'" class="img-fluid rounded">
						  <div class="card-body p-2">
						    <a href="/view/'.seoTxt($post['title']).'-'.$post['article_id'].'" class="card-link"><h6 class="card-title">'.$post['title'].'</h6></a>
						  </div>
						 </div>';
		}
		$htm.= '</ul>';
		return $htm;
	}

	public function viewArticle() {
		global $_db;
		$aid = explode('-',$_REQUEST['aid']);
		$aid = end($aid);

		$article = $_db->select("article","*","article_id=".$aid);
		$htm = '		<div class="card w-100">
								  <img class="card-img-top" src="'.$article['banner'].'" alt="Article Banner">
								  <div class="card-img-overlay">
										<div class="head-tit">
									    <h4 class="display-4">'.$article['title'].'</h4>
									    <p class="card-text">'.$article['sub_title'].'</p>
										</div>
									</div>
								</div>
								<div class="row m-art">
									<div class="col-md-2">

									</div>
									<div class="col-md-10">
										<div class="jumbotron">
											<p>'.$article['content'].'</p>
										</div>
									</div>
								</div>';
		return $htm;
	}

	public function catDropDown() {
		global $_db;
		$all_cat = $_db->select("category");
		$htm = '<select name="a-Cat" class="form-control w-25">';
		foreach ($all_cat as $cat) {
			$htm.='<option value="c'.$cat['cat_id'].'">'.$cat['icon_markup'].$cat['cat_name'].'</option>';
		}
		$htm.= '</select>';
		return $htm;
	}

}

$_L = new layout();

?>
