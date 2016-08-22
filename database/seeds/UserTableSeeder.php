<?php

use Illuminate\Database\Seeder; 

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $users = [
		    [
		    	'email' => 'user1@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('password123')
	    	],
	    	[
		    	'email' => 'user2@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('cazorla')
	    	],
	    	[
		    	'email' => 'user3@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('ozil')
	    	],
	    	[
		    	'email' => 'user4@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('sanchez')
	    	],
	    	[
		    	'email' => 'user5@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('xhaka')
	    	],
	    	[
		    	'email' => 'user6@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('bellerin')
	    	],
	    	[
		    	'email' => 'user7@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('wilshere')
	    	],
	    	[
		    	'email' => 'user8@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('iwobi')
	    	],
	    	[
		    	'email' => 'user9@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('Welbeck')
	    	],
	    	[
		    	'email' => 'user10@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('Ox-Chamberlain')
	    	],
	    	[
		    	'email' => 'user11@codeup.com',
		    	'name' => 'Luis',
		    	'password' => Hash::make('Wenger')
	    	]
    	];
	    
	    // $user2 = new App\User();
	    // $user2->email = 'user2@codeup.com';
	    // $user2->name = 'Cam';
	    // $user2->password = Hash::make('password123');
	    // $user2->save();

	    foreach($users as $user){
		    App\User::create($user);
		}
    }
}
