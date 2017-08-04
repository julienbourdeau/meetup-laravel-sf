<?php

namespace App\Console\Commands;

use AlgoliaSearch\Client;
use AlgoliaSearch\Index;
use Illuminate\Console\Command;

class AlgoliaExporter extends Command
{
    /**
     * @var Client
     */
    protected $algolia;

    /**
     * @var Index
     */
    protected $index;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'algolia:export
                            {index : Name of the index in Algolia}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export an index into a json file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->algolia = (new Client(
            config('scout.algolia.id'), config('scout.algolia.secret')
        ));
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->index = $this->algolia->initIndex($this->argument('index'));

        $data = [];
        foreach ($this->index->browse('') as $hit) {
            $data[] = $hit;
        }

        \File::put(resource_path('datasets/airbnb.json'), json_encode($data, JSON_PRETTY_PRINT));

        $keys = collect($data[0])->keys()->all();
        \File::put(resource_path('datasets/airbnb_keys.json'), json_encode($keys, JSON_PRETTY_PRINT));
    }
}
