<?php


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create(
            [
                'name' => "test",
                'email' => "test@test.ru",
                'email_verified_at' => now(),
                'password' => bcrypt(env("APP_TEST_USER_PASS", "123456")),
                'remember_token' => Str::random(10),
            ]
        );
        Log::info("test user was created");

    }
}
