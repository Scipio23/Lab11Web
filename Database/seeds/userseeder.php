<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
		'username' => 'kikyyy',
		'useremail' => 'rifkyyulianto23@gmail.com',
		'userpassword' => password_hash('Astaroth', PASSWORD_DEFAULT),
		]);
	}
}
