<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;

class PruneArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prune:articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Article::query()
                ->where('created_at' , '<' , now()->subWeek())
                ->delete();

        return 0;
    }
}
