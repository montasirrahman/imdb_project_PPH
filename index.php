<?php

//error_reporting(0);
//ini_set('display_errors', 0);

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

$tt = 'tt10872600';

$imdb = file_get_html($imdbUrl . '/' . $tt);

$allep = ''.$imdb->find('a.ipc-button.ipc-button--single-padding.ipc-button--center-align-content.ipc-button--default-height.ipc-button--core-baseAlt.ipc-button--theme-baseAlt.ipc-button--on-textPrimary.ipc-text-button.subnav__all-episodes-button.EpisodeNavigationForEpisode__AllEpisodesButtonLongText-sc-bji0pk-4.ebbHRh . div.ipc-button__text', 0)->plaintext.'';



	if (strlen($allep) > '2') {
  		echo 'Episode';
	} else {

		$movtv = ''.$imdb->find('a.EpisodeNavigationForSeries__EpisodeGuideLink-sc-1aswzzz-0.fUurKa . span.EpisodeNavigationForSeries__EpisodeGuideText-sc-1aswzzz-1.kzEMhq.episode-guide-text', 0)->plaintext.'';

		if (strlen($movtv) < '2') {
			  
echo 'Movie <br> id : '.$tt.'<br>';

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
'.$imdb->find('div.ipc-chip-list.GenresAndPlot__GenresChipList-sc-cum89p-4.cDpOeC . a.GenresAndPlot__GenreChip-sc-cum89p-3.LKJMs.ipc-chip.ipc-chip--on-baseAlt', 0)->plaintext.', '.$imdb->find('div.ipc-chip-list.GenresAndPlot__GenresChipList-sc-cum89p-4.cDpOeC . a.GenresAndPlot__GenreChip-sc-cum89p-3.LKJMs.ipc-chip.ipc-chip--on-baseAlt', 1)->plaintext.', '.$imdb->find('div.ipc-chip-list.GenresAndPlot__GenresChipList-sc-cum89p-4.cDpOeC . a.GenresAndPlot__GenreChip-sc-cum89p-3.LKJMs.ipc-chip.ipc-chip--on-baseAlt', 2)->plaintext.'
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

Moviemeter : 
'.$imdb->find('div.TrendingButton__ContentWrap-sc-bb3vt8-0.jQthUT . div.TrendingButton__TrendingScore-sc-bb3vt8-1.efbXIW', 0)->plaintext.'
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

echo 'Writers : '.$writers1 . $writers2 . $writers3.' <br><br>';

$artists01  = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 0)->href.'';
$artists1 = basename(parse_url($artists01, PHP_URL_PATH));

$artists02 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 1)->href.'';
$artists2 = ', ' . basename(parse_url($artists02, PHP_URL_PATH));

$artists03 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 2)->href.'';
$artists3 = ', ' . basename(parse_url($artists03, PHP_URL_PATH));

$artists04 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 3)->href.'';
$artists4 = ', ' . basename(parse_url($artists04, PHP_URL_PATH));

$artists05 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 4)->href.'';
$artists5 = ', ' . basename(parse_url($artists05, PHP_URL_PATH));

$artists06 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 5)->href.'';
$artists6 = ', ' . basename(parse_url($artists06, PHP_URL_PATH));

$artists07 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 6)->href.'';
$artists7 = ', ' . basename(parse_url($artists07, PHP_URL_PATH));

$artists08 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 7)->href.'';
$artists8 = ', ' . basename(parse_url($artists08, PHP_URL_PATH));

$artists09 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 8)->href.'';
$artists9 = ', ' . basename(parse_url($artists09, PHP_URL_PATH));

$artists010 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 9)->href.'';
$artists10 = ', ' . basename(parse_url($artists010, PHP_URL_PATH));

$artists011 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 10)->href.'';
$artists11 = ', ' . basename(parse_url($artists011, PHP_URL_PATH));

$artists012 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 11)->href.'';
$artists12 = ', ' . basename(parse_url($artists012, PHP_URL_PATH));

$artists013 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 12)->href.'';
$artists13 = ', ' . basename(parse_url($artists013, PHP_URL_PATH));

$artists014 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 13)->href.'';
$artists14 = ', ' . basename(parse_url($artists014, PHP_URL_PATH));

$artists015 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 14)->href.'';
$artists15 = ', ' . basename(parse_url($artists015, PHP_URL_PATH));

$artists016 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 15)->href.'';
$artists16 = ', ' . basename(parse_url($artists016, PHP_URL_PATH));

$artists017 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 16)->href.'';
$artists17 = ', ' . basename(parse_url($artists017, PHP_URL_PATH));

$artists018 = ''.$imdb->find('div.ipc-sub-grid.ipc-sub-grid--page-span-2.ipc-sub-grid--wraps-at-above-l.ipc-shoveler__grid . div.StyledComponents__CastItemWrapper-sc-y9ygcu-9.jMNnlN . div.StyledComponents__CastItemSummary-sc-y9ygcu-11.keoaUD . a.StyledComponents__ActorName-sc-y9ygcu-1.ezTgkS', 17)->href.'';
$artists18 = ', ' . basename(parse_url($artists018, PHP_URL_PATH));






echo 'Artists : '.$artists1 . $artists2 . $artists3 . $artists4 . $artists5 . $artists6 . $artists7 . $artists8 . $artists9 . $artists10 . $artists11 . $artists12 . $artists13 . $artists14 . $artists15 . $artists16 . $artists17 . $artists18.' <br><br>';


			  
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


