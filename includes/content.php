<?php 
include("getNews.php");
$news = getAllNewsEntries();
	if(empty($_GET['id']) || !isset($_GET['id'])) {
		// Nothing
	} else {
		for($i = 1; $i < count($news); $i++) {
			if($_GET['id'] == $i) {
				//getNews($news[$i]['ID']);
				print($news[$i]['Body']);
			}
		}
	}

	if(empty($_GET['page']) || !isset($_GET['page']) && !isset($_GET['id'])) {
		print("Home");
	} elseif($_GET['page'] == "news" && !isset($_GET['id'])) {
		listNewsEntries($news);
	}
	
	
?>