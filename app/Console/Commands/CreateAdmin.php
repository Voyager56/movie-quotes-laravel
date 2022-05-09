<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAdmin extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'make:admin';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Make Admin User';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		return 0;
	}
}
