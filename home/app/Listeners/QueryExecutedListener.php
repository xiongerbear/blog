<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 10/13/16
 * Time: 7:36 PM
 */

namespace Admin\Listeners;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\Log;

class QueryExecutedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QueryExecuted $event
     * @return void
     */
    public function handle(QueryExecuted $event)
    {
        Log::debug('illuminate.query', ['sql' => $event->sql, 'bindings' => $event->bindings, 'time' => $event->time]);
    }
}