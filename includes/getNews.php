<?php
function getAllNewsEntries() {
// Reads through all lines in the text file
// Then stores them in a multi-dim array.
	$newsFile = fopen("includes/news.txt", "r");
	while(!feof($newsFile)) {
		$newsEntry = fgets($newsFile);
		
		// Delimit news articles
		list($newsID, $newsTime, $newsTitle, $newsBody) = explode(":#:#:", $newsEntry);
		
		// The first line is stored in $array[0], the second in $array[1], etc
		// The first element for the first line is in $array[0][0], etc.
		// //////
		// The first index (0) will always be the ID
		// The second index (1) will always be the time the news was created
		// The third index (2) will always be the title of the news
		// The fourth index (3) will always be the body of the news
		$newsEntryArray[$newsID] = array(
								'ID' 		=> $newsID,
								'Posted' 	=> $newsTime,
								'Title' 	=> $newsTitle,
								'Body'		=> $newsBody
								);
	}
	fclose($newsFile);
	return $newsEntryArray;
}

function listNewsEntries($news) {
	for($i = 1; $i < count($news); $i++) {
		$newsURL = $news[$i]['ID'];
		$newsTITLE = $news[$i]['Title'];
		print("<a href=\"?page=news&id=".$newsURL."\">".$newsTITLE."</a><br/>");
	}
}

?>