<?php

class Creare_Latesttweet_Block_Latesttweet extends Mage_Core_Block_Template
{
	public function _prepareLayout()
	{
		return parent::_prepareLayout();
	}
	
	public function isEnabled()
	{
		if(Mage::getStoreConfig('latesttweet/twittersettings/active')){
			return true;
		} else { 
			return false;
		}
	}
	
	public function getTwitterId()
	{
		$twitterid = Mage::getStoreConfig('latesttweet/twittersettings/twitterid');
		return $twitterid;
	}
	
	public function getKeys()
	{
		$cs = Mage::getStoreConfig('latesttweet/twittersettings/consumerkey');
		$csk = Mage::getStoreConfig('latesttweet/twittersettings/consumersecret');
		$at = Mage::getStoreConfig('latesttweet/twittersettings/accesstoken');
		$ats = Mage::getStoreConfig('latesttweet/twittersettings/accesstokensecret');
		
		if($cs && $csk && $at && $ats){
			return array(
					'consumerkey' 		=> $cs,
					'consumersecret'	=> $csk,
					'accesstoken'		=> $at,
					'accesstokensecret' => $ats
					);
		} else {
			return false;	
		}
	}
	
	public function getNoFollow()
	{
		$nofollow = Mage::getStoreConfig('latesttweet/displaysettings/usenofollow');
		return $nofollow;
	}
	
	public function getNumberOfTweets()
	{		
		$numberoftweets = Mage::getStoreConfig('latesttweet/displaysettings/numberoftweets');
		return $numberoftweets;
	}
	
	public function showFollowButton()
	{
		$tagpref = Mage::getStoreConfig('latesttweet/displaysettings/showfollow');
		return $tagpref;	
	}
	
	public function getTagPref()
	{
		$tagpref = Mage::getStoreConfig('latesttweet/displaysettings/showlinks');
		return $tagpref;	
	}
	
	public function getNewWindow()
	{
		$tagpref = Mage::getStoreConfig('latesttweet/displaysettings/opennew');
		return $tagpref;	
	}
	
	public function getHashtags()
	{
		$tagpref = Mage::getStoreConfig('latesttweet/displaysettings/hashtags');
		return $tagpref;	
	}
	
	public function getAttags()
	{
		$tagpref = Mage::getStoreConfig('latesttweet/displaysettings/attags');
		return $tagpref;	
	}
	
	private function cleanTwitterName($twitterid)
	{
		$test = substr($twitterid,0,1);
		
		if($test == "@"){
			$twitterid = substr($twitterid,1);	
		}
		
		return $twitterid;
		
	}
	
	private function changeLink($string, $tags=true, $nofollow=true, $newwindow=true, $attags=true, $hashtags=true)
	{
		if(!$tags){
			$string = strip_tags($string);
		}
		if($nofollow){
			$string = str_replace('<a ','<a rel="nofollow"', $string);	
		}
		if($newwindow){
			$string = str_replace('<a ','<a target="_blank"', $string);	
		}
  		return $string;
 	}
	
	private function getTimeAgo($time)
	{
		   	$tweettime = strtotime($time); // This is the value of the time difference - UK + 1 hours (3600 seconds)
		   	$nowtime = time();
		   	$timeago = ($nowtime-$tweettime);
		   	$thehours = floor($timeago/3600);
		   	$theminutes = floor($timeago/60);
		   	$thedays = floor($timeago/86400);
  			/********************* Checking the times and returning correct value */
		   	if($theminutes < 60){
				if($theminutes < 1){
					$timemessage =  "Less than 1 minute ago";
				} else if($theminutes == 1) {
				 	$timemessage = $theminutes." minute ago";
				} else {
				 	$timemessage = $theminutes." minutes ago";
				}
			} else if($theminutes > 60 && $thedays < 1){
				 if($thehours == 1){
				 	$timemessage = $thehours." hour ago";
				 } else {
				 	$timemessage = $thehours." hours ago";
				 }
			} else {
				 if($thedays == 1){
				 	$timemessage = $thedays." day ago";
				 } else {
				 	$timemessage = $thedays." days ago";
				 }
			}
		return $timemessage;	
	}
	
	public function getTweets($tweets)
	{
		$t = array();
		$i = 0;
		foreach($tweets as $tweet)
		{	
			$text = $tweet->text;
			$urls = $tweet->entities->urls;
			$mentions = $tweet->entities->user_mentions;
			$hashtags = $tweet->entities->hashtags;
			if($urls){
				foreach($urls as $url){
					if(strpos($text,$url->url) !== false){
						$text = str_replace($url->url,'<a href="'.$url->url.'">'.$url->url.'</a>',$text);	
					}
				}
			}
			if($mentions && $this->getAttags()){
				foreach($mentions as $mention){
					if(strpos($text,$mention->screen_name) !== false){
						$text = str_replace("@".$mention->screen_name." ",'<a href="http://twitter.com/'.$mention->screen_name.'">@'.$mention->screen_name.'</a> ',$text);	
					}
				}
			}
			if($hashtags && $this->getHashtags()){
				foreach($hashtags as $hashtag){
					if(strpos($text,$hashtag->text) !== false){
						$text = str_replace('#'.$hashtag->text." ",'<a href="http://twitter.com/search?q=%23'.$hashtag->text.'">#'.$hashtag->text.'</a> ',$text);	
					}
				}
			}
			$t[$i]["tweet"] = trim($this->changeLink($text, $this->getTagPref(), $this->getNoFollow(), $this->getNewWindow()));	
			$t[$i]["time"] = trim($this->getTimeAgo($tweet->created_at));
			$i++;
		}
		return $t;
	}

 	public function getLatestTweets()
	{
		require_once('twitteroauth/twitteroauth.php');
		
		$screen_name = $this->getTwitterId();
		$not	     = $this->getNumberOfTweets();		
		$keys	     = $this->getKeys();
		
		$consumerkey = $keys['consumerkey'];
		$consumersecret = $keys['consumersecret'];
		$accesstoken = $keys['accesstoken'];
		$accesstokensecret = $keys['accesstokensecret'];
		
		if (!$screen_name){
			return false;
		}
		
		$twitterconn = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
		$latesttweets = $twitterconn->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$screen_name."&count=".$not);		
		
		if(!$latesttweets->errors){
			return($this->getTweets($latesttweets));
		}
  		
	}
}