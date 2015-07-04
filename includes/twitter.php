<?php	
require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library

$consumerkey = "znS4fE1Deqf2rLy1g8erQ";
$consumersecret = "9tcASeSNJ70PBiE1yFGGWFESNt0umHgL5o5daJpaWc";
$accesstoken = "283681347-KeDckssq1mBx3hqIlKktpGd6McaLBUcq1g1WDPFz";
$accesstokensecret = "dl7zBsCMKZIERQkmefgnJtiM3hUzv8pLDt3H2fiDYZo";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

$noOfTweets = 6;
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=shabangtheatre&count=".$noOfTweets."&include_rts=true&include_entities=1");

for ($i = 0; $i <= $noOfTweets-1; $i++) {
    ${'strTweet_'.$i} = $tweets[$i]->text;
    ${'strTweet_'.$i} = preg_replace('@((https?://)?([-\w]+\.[-\w\.]+)+\w(:\d+)?(/([-\w/_\.]*(\?\S+)?)?)*)@', '<a href="$1" target="blank">$1</a>', ${'strTweet_'.$i});
	${'strTweet_'.$i} = str_replace("href=\"www.","href=\"http://www.",${'strTweet_'.$i});
	${'strTweet_'.$i} = preg_replace('/(^|\s)#(\w*[a-zA-Z_]+\w*)/', '\1<a target="_blank" href="https://twitter.com/search?q=\2">#\2</a>', ${'strTweet_'.$i});
	${'lnkTweet_'.$i} = $tweets[$i]->id_str;
	${'dateTweet_'.$i} = $tweets[$i]->created_at;
}

?>