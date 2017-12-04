<?php

class HomeController extends Controller{
	

	
	public function index(){

	    $feed = "http://abcnews.go.com/abcnews/mostreadstories";
        $rss = new RssDisplay($feed);

        $feed_data = $rss->getFeedItems(8);
        $channel_title = $feed_data->channel->title;

        $this->set('rss_title', $channel_title);

        $channelInfo = $rss->getChannelInfo($feed_data);


        $i = 0;
        foreach($channelInfo as $item) {

            $story_title = $item->title;

            $this->set('rss_story_title'.$i, $story_title);

            $story_description = $item->description;

            $this->set('rss_story_description'.$i, $story_description);

            $story_link = $item->link;

            $this->set('rss_story_link'.$i, $story_link);

            $story_pubDate = $item->pubDate;

            $this->set('rss_story_pubDate'.$i, $story_pubDate);

            $i++;

        }

	
	}
	
	
}
