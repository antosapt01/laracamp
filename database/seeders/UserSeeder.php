<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           "name" => "admin",
           "email" => "admin@gmail.com",
           "email_verified_at" => date('Y-m-d H:i:s', time()),
           "password" => \bcrypt('password'),
           "avatar" => "https://lh3.googleusercontent.com/proxy/o6iT_kWXI_GHbfmI1XvE1-7Ql5eRdtGMNA-_846gwQB369OkxQlBwte_AvVo7d-VDT6962eri3fCgHM-_FVGViT8UfieB8K5PkebAydUplNzvDTp7dmqZQ",
           "initial" => "https://ui-avatars.com/api/?name=admin&background=0D8ABC&color=fff",
           "occupation" => "programmer",
           "is_admin" => true

        //    "name" => "user",
        //    "email" => "user@gmail.com",
        //    "email_verified_at" => date('Y-m-d H:i:s', time()),
        //    "password" => \bcrypt('password'),
        //    "avatar" => "https://lh3.googleusercontent.com/proxy/o6iT_kWXI_GHbfmI1XvE1-7Ql5eRdtGMNA-_846gwQB369OkxQlBwte_AvVo7d-VDT6962eri3fCgHM-_FVGViT8UfieB8K5PkebAydUplNzvDTp7dmqZQ",
        //    "initial" => "https://ui-avatars.com/api/?name=user&background=0D8ABC&color=fff",
        //    "occupation" => "Ui Ux",
        //    "is_admin" => false
       ]);
    }
}
