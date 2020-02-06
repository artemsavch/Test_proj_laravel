<?php

namespace App\Providers;

use  App\Providers\onAddArticleEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class AddArticleListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  onAddArticleEvent  $event
     * @return void
     */
    public function handle(onAddArticleEvent $event)
    {
//        $event->user_name;
//        $event->article_name;
        Log::info('Article save in data base', [$event->user_name . ' - ' . $event->article_name]);
    }
}

