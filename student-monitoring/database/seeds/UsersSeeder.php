<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        		'id'		=> 1,
        		'name'		=> 'Libna',
        		'matricula' => '20181infig0166',
        		'email'		=> 'libnarodrigues723@gmail.com',
        		'password'	=> md5('libna123')

        	]);

               DB::table('users')->insert([
                'id'        => 2,
                'name'      => 'Geovane',
                'matricula' => '20181infig0337',
                'email'     => 'geovanejose240899@gmail.com',
                'password'  => md5('geovane123')
                 ]);   


               DB::table('users')->insert([
                'id'        => 3,
                'name'      => 'Wolaci',
                'matricula' => '20181infig0077',
                'email'     => 'wolacijose8@gmail.com',
                'password'  => md5('wolaci123')
                 ]); 

                 DB::table('users')->insert([
                'id'        => 4,
                'name'      => 'Raul',
                'matricula' => '20181infig0387',
                'email'     => 'raulbarrosmr@gmail.com',
                'password'  => md5('raul12345')
                 ]); 

                 DB::table('users')->insert([
                'id'        => 5,
                'name'      => 'José',
                'matricula' => '20181infig0069',
                'email'     => 'jrlima150305@gmail.com',
                'password'  => md5('jose12345')
                 ]);   

                 DB::table('users')->insert([
                'id'        => 6,
                'name'      => 'Rebeca',
                'matricula' => '20181infig0011',
                'email'     => 'rebecacristina@gmail.com',
                'password'  => md5('rebeca123')
                 ]); 
    }
}
