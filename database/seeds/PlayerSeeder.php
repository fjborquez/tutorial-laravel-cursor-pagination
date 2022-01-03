<?php

use Flynsarmy\CsvSeeder\CsvSeeder;
use \Illuminate\Support\Facades\DB;

class PlayerSeeder extends CsvSeeder
{
    public function __construct()
	{
		$this->table = 'players';
		$this->filename = base_path().'/database/seeds/csv/FIFA-21.csv';
        $this->mapping = [
            0 => 'id',
            1 => 'name',
            2 => 'nationality',
            3 => 'position',
            4 => 'overall',
            5 => 'age',
            6 => 'hits',
            7 => 'potential',
            8 => 'team',
        ];
        $this->csv_delimiter = ';';
        $this->offset_rows = 1;
	}

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        DB::table($this->table)->truncate();
        parent::run();
    }
}
