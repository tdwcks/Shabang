<?php
	$noOfItems = 8;
		$numbers = range(1, $noOfItems);
		shuffle($numbers);
		$tweet_i = 1;
		$post_i = 1;
		$rowChk = 1;
		$count = 0;
		
		include("twitter.php");
		include("facebook.php");

		define('STRING_TODAY', "Today");
		define('STRING_YESTERDAY', "Yesterday");
		define('STRING_DAYS', "%d days ago");
		define('STRING_WEEK', "1 week ago");
		define('STRING_WEEKS', "%d weeks ago");
		 
		/* Change the following date format to your taste */
		define('DATE_FORMAT', "m-d-Y");
		 
		/* The functions takes the date as a timestamp */        
		function DateToWords($time)
		{
		 
		    $_word = "";
		 
		    /* Get the difference between the current time 
		       and the time given in days */
		    $days = intval((time() - $time) / 86400);
		 
		    /* If some forward time is given return error */
		    if($days < 0) {
		        return -1;
		    }
		 
		    switch($days) {
		        case 0: $_word = STRING_TODAY;
		                break;
		        case 1: $_word = STRING_YESTERDAY;
		                break;
		        case ($days >= 2 && $days <= 6): 
		              $_word =  sprintf(STRING_DAYS, $days);
		              break;
		        case ($days >= 7 && $days < 14): 
		              $_word= STRING_WEEK;
		              break;
		        case ($days >= 14 && $days <= 365): 
		              $_word =  sprintf(STRING_WEEKS, intval($days / 7));
		              break;
		        default : return date(DATE_FORMAT, $time);
		 
		    }
		 
		    return $_word;
		}

		echo '<div class="row">';

		foreach ($numbers as $number) {
			if (($count / 4) == $rowChk) {
				echo '</div>';
				echo '<div class="row">';
				$rowChk++;
				$count = 0;
			}
			// Even numbers are tweets.
			if ($number % 2 == 0) {
				echo '<div class="story tw">';
				echo '<div class="info">';
				echo '<p>'.${'strTweet_'.$tweet_i}.'</p>';
				echo '</div>';
				echo '<div class="bottom">';
				echo '<span class="posted">'.DateToWords(strtotime(${'dateTweet_'.$tweet_i})).'</span>';
				echo '<a class="btn" href="https://twitter.com/shabangtheatre/status/'.${'lnkTweet_'.$tweet_i}.'">View Tweet</a>';
				echo '</div>';
				echo '</div>';
				$tweet_i++;
			} else {
			// Odd numbers are Facebook posts.
				echo '<div class="story fb">';
				if (${'fbimg_'.$post_i} != "") {
					echo '<img class="top" src="'.${'fbimg_'.$post_i}.'"/>';
				}
				echo '<div class="info">';
				echo '<p>'.${'status_'.$post_i}.'</p>';
				echo '</div>';
				echo '<div class="bottom">';
				echo '<span class="posted">'.DateToWords(strtotime(${'date_'.$post_i})).'</span>';
				if (${'fblink_'.$post_i} != "") {
					echo '<a class="btn" href="'.${'fblink_'.$post_i}.'">View Post</a>';
				} else {
					echo '<a class="btn" href="https://www.facebook.com/ShabangHuddersfield">View Post</a>';
				}
				echo '</div>';
				echo '</div>';
				$post_i++;
			}

			$count++;
		}
?>