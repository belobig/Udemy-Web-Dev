<?php
	
	require "twitteroauth/autoload.php";

	use Abraham\TwitterOAuth\TwitterOAuth;
	
	$consumerkey = "QhR0cImp8skJX9yUxHuXwmwy4";
	$consumersecret = "JHpa4U1ErSkODP8FSLaPL23KMrSu6B1clVYrYP5r5wweB1w3YZ";
	$accesstoken = "725028290671611904-HqPf7xXuIN0pk1TbTWg5zmcgnJkFpyb";
	$accesstokensecret = "U7DuezrlvyVUugDUQZSbrcffp1HNGY9mjHYAXiOnTcDS5";
	
	$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
	$content = $connection->get("account/verify_credentials");
	
	
	
	$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]); //used to get last <count> of tweets
	
	foreach ($statuses as $tweet) {
		
		if ($tweet->favorite_count >=2) {
			$status = $connection->get("statuses/oembed", ["id" => $tweet->id]);
			echo $status->html;
		}
		
	}
?>