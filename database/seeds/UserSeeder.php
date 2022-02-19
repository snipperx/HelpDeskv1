<?php

use Illuminate\Database\Seeder;
use App\User;
use App\HRPeople;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Nkosana Ncube';
        $user->email = 'ncubesss@gmail.com';
        $user->password = Hash::make('12345678');
        $user->type = 1;
        $user->status = 1;
        $user->save();

        $HR = new HRPeople();
        $HR->user_id =  $user['id'];
        $HR->first_name = 'Nkosana';
        $HR->surname = 'Ncube';
        $HR->email = 'ncubesss@gmail.com';
        $HR->status = 1;
        $HR->save();

        $user = new User();
        $user->name = 'Faith Mthsarini';
        $user->email = 'faith@gmail.com';
        $user->password = Hash::make('12345678');
        $user->type = 2;
        $user->status = 1;
        $user->save();

        $HR = new HRPeople();
        $HR->user_id =  $user['id'];
        $HR->first_name = 'Faith';
        $HR->surname = 'Mthsarini';
        $HR->email = 'faith@gmail.com';
        $HR->status = 1;
        $HR->save();


        $user = new User();
        $user->name = 'Natalie Manku';
        $user->email = 'natalie@gmail.com';
        $user->password = Hash::make('12345678');
        $user->type = 1;
        $user->status = 1;
        $user->save();

        $HR = new HRPeople();
        $HR->user_id =  $user['id'];
        $HR->first_name = 'Natalie';
        $HR->surname = 'Manku';
        $HR->email = 'natalie@gmail.com';
        $HR->status = 1;
        $HR->save();

    }
}
