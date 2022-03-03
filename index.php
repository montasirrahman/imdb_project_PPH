<?php

error_reporting(0);
ini_set('display_errors', 0);

// Create DOM from URL or file
//	echo ''.$html->plaintext.'';
//foreach($html->find('img') as $img)
//       echo $img->src . '<br>';


// imdb get data
//$websiteurlimdb = 'https://www.imdb.com';
//$htmlimdb = file_get_html($websiteurlimdb);
//echo $htmlimdb;


//img src
//echo $html->find('img.img-responsive',5)->src;

//img background
//echo $html->find('div#background-image',0)->style


//<!-----------------------While loop START---------------------->
 
//			$count = 0;
			
//			while($count <= 3) {
//				echo '

//			'.$imdb->find('a',$count)->plaintext.'

//				'; 
//			$count++;
//			} 
			
//<!-----------------------While loop END----------------------->

//<!----html to output Vaia--->
?>


<?php 	

include("asset/simple_html_dom.php");

$tt = 'tt1160419';

$imdb = file_get_html($imdbUrl . '/' . $tt);

$allep = ''.$imdb->find('a.ipc-button.ipc-button--single-padding.ipc-button--center-align-content.ipc-button--default-height.ipc-button--core-baseAlt.ipc-button--theme-baseAlt.ipc-button--on-textPrimary.ipc-text-button.subnav__all-episodes-button.EpisodeNavigationForEpisode__AllEpisodesButtonLongText-sc-bji0pk-4.ebbHRh . div.ipc-button__text', 0)->plaintext.'';



	if (strlen($allep) > '2') {
  		echo 'Episode';
	} else {

		$movtv = ''.$imdb->find('a.EpisodeNavigationForSeries__EpisodeGuideLink-sc-1aswzzz-0.fUurKa . span.EpisodeNavigationForSeries__EpisodeGuideText-sc-1aswzzz-1.kzEMhq.episode-guide-text', 0)->plaintext.'';

		if (strlen($movtv) < '2') {
			  
echo 'Movie <br><br>';

echo '

Title : 
'.$imdb->find('h1.TitleHeader__TitleText-sc-1wu6n3d-0', 0)->plaintext.'	
<br>

Year : 
'.$imdb->find('span.TitleBlockMetaData__ListItemText-sc-12ein40-2.jedhex', 0)->plaintext.'
<br><br>

<img src="'.$imdb->find('div.ipc-media.ipc-media--poster-27x40.ipc-image-media-ratio--poster-27x40.ipc-media--baseAlt.ipc-media--poster-l.ipc-poster__poster-image.ipc-media__img . img.ipc-image', 0)->src.'" >
<br><br>

Genres : 
'.$imdb->find('div.ipc-chip-list.GenresAndPlot__GenresChipList-sc-cum89p-4.cDpOeC', 0)->plaintext.'
<br><br>

Plot(char190) : 
'.$imdb->find('span.GenresAndPlot__TextContainerBreakpointXS_TO_M-sc-cum89p-0.kHlJyu', 0)->plaintext.'
<br><br>

Rating : 
'.$imdb->find('div.AggregateRatingButton__ContentWrap-sc-1ll29m0-0.hmJkIS . div.AggregateRatingButton__Rating-sc-1ll29m0-2.bmbYRW . span.AggregateRatingButton__RatingScore-sc-1ll29m0-1.iTLWoV', 0)->plaintext.'
<br><br>

Number of People : 
'.$imdb->find('div.AggregateRatingButton__ContentWrap-sc-1ll29m0-0.hmJkIS . div.AggregateRatingButton__TotalRatingAmount-sc-1ll29m0-3.jkCVKJ', 0)->plaintext.'
<br><br>

';

$director = ''.$imdb->find('ul.ipc-inline-list.ipc-inline-list--show-dividers.ipc-inline-list--inline.ipc-metadata-list-item__list-content.base . li.ipc-inline-list__item . a.ipc-metadata-list-item__list-content-item.ipc-metadata-list-item__list-content-item--link', 0)->href.'';
$director2 = basename(parse_url($director, PHP_URL_PATH));

echo 'Director : '.$director2.'  <br></br>';

$writers01 = ''.$imdb->find('ul.ipc-inline-list.ipc-inline-list--show-dividers.ipc-inline-list--inline.ipc-metadata-list-item__list-content.base . li.ipc-inline-list__item . a.ipc-metadata-list-item__list-content-item.ipc-metadata-list-item__list-content-item--link', 1)->href.'';
$writers1 = basename(parse_url($writers01, PHP_URL_PATH));

$writers02 = ''.$imdb->find('ul.ipc-inline-list.ipc-inline-list--show-dividers.ipc-inline-list--inline.ipc-metadata-list-item__list-content.base . li.ipc-inline-list__item . a.ipc-metadata-list-item__list-content-item.ipc-metadata-list-item__list-content-item--link', 2)->href.'';
$writers2 = ', ' . basename(parse_url($writers02, PHP_URL_PATH));

$writers03 = ''.$imdb->find('ul.ipc-inline-list.ipc-inline-list--show-dividers.ipc-inline-list--inline.ipc-metadata-list-item__list-content.base . li.ipc-inline-list__item . a.ipc-metadata-list-item__list-content-item.ipc-metadata-list-item__list-content-item--link', 3)->href.'';
$writers3 = ', ' . basename(parse_url($writers03, PHP_URL_PATH));

echo 'Writers : '.$writers1 . $writers2 . $writers3.'';
			  
		} else {
	
echo 'TV-Shows <br><br>';
echo '

<br>

'.$imdb->find('h1.TitleHeader__TitleText-sc-1wu6n3d-0', 0)->plaintext.'	
<br>

'.$imdb->find('span.TitleBlockMetaData__ListItemText-sc-12ein40-2.jedhex', 0)->plaintext.'
<br>

<img src="'.$imdb->find('div.ipc-media.ipc-media--poster-27x40.ipc-image-media-ratio--poster-27x40.ipc-media--baseAlt.ipc-media--poster-l.ipc-poster__poster-image.ipc-media__img . img.ipc-image', 0)->src.'" >
<br>

'.$imdb->find('div.ipc-chip-list.GenresAndPlot__GenresChipList-sc-cum89p-4.cDpOeC', 0)->plaintext.'
<br>

'.$imdb->find('span.GenresAndPlot__TextContainerBreakpointXS_TO_M-sc-cum89p-0.kHlJyu', 0)->plaintext.'
<br>

'.$imdb->find('span.TitleBlockMetaData__ListItemText-sc-12ein40-2.jedhex', 0)->plaintext.'
<br>
';
	
	
		}


	}






echo '







';

						
?>


