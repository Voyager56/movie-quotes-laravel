<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateAdmin extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'make:admin {email} {password}';

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
		$email = $this->argument('email');
		$password = $this->argument('password');

		User::create([
			'email'    => $email,
			'password' => $password,
		]);
	}
}
