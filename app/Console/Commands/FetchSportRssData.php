<?php

namespace App\Console\Commands;

use App\Models\RssItem;
use App\Models\RssSportItem;
use Illuminate\Console\Command;
use SimplePie\Item;
use SimplePie\SimplePie;

class FetchSportRssData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-sport-rss-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Define the RSS feed URL
        $feedUrl = 'https://rss.nytimes.com/services/xml/rss/nyt/Sports.xml';

        // Create an instance of SimplePie
        $feed = new SimplePie();
        $feed->set_feed_url($feedUrl);
        $feed->enable_cache(false);
        $feed->init();

        // Loop through the feed items and save them to the database
        foreach ($feed->get_items() as $item) {
            $this->saveItemToDatabase($item);
        }

        $this->info('RSS data fetched and saved successfully!');
    }

    private function saveItemToDatabase(Item $item)
    {
        // Extract data from the RSS item
        $title = $item->get_title();
        $link = $item->get_link();
        $media_content = $item->get_item_tags('http://search.yahoo.com/mrss/', 'content');
        $image =  $media_content[0]['attribs']['']['url'] ?? '';
        $description = $item->get_description();
        // ...

        // Save the data to the database using your Laravel model
        $rssItem = new RssSportItem();
        $rssItem->title = $title;
        $rssItem->link = $link;
        $rssItem->image = $image;
        $rssItem->description = $description;
        // ...
        $rssItem->save();
    }
}
