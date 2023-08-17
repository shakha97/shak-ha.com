<?php
namespace App\Console\Commands;
use App\Models\RssItem;
use Illuminate\Console\Command;
use SimplePie\Item;
use SimplePie\SimplePie;

class FetchRssData extends Command
{
    protected $signature = 'rss:fetch';

    protected $description = 'Fetch and save RSS data';

    public function handle()
    {
        // Define the RSS feed URL
        $feedUrl = 'https://rss.nytimes.com/services/xml/rss/nyt/RealEstate.xml';

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
        $description = $item->get_description();
        // ...

        // Save the data to the database using your Laravel model
        $rssItem = new RssItem();
        $rssItem->title = $title;
        $rssItem->link = $link;
        $rssItem->description = $description;
        // ...
        $rssItem->save();
    }
}
