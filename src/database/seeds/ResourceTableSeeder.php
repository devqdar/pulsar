<?php

use Illuminate\Database\Seeder;
use Syscover\Pulsar\Models\Resource;

class ResourceTableSeeder extends Seeder {

    public function run()
    {
        Resource::insert([
            ['id_007' => 'admin','name_007' => 'Administration Package','package_007' => '2'],
            ['id_007' => 'admin-country','name_007' => 'Countries','package_007' => '2'],
            ['id_007' => 'admin-country-at1','name_007' => 'Countries -- Territorial Areas 1','package_007' => '2'],
            ['id_007' => 'admin-country-at2','name_007' => 'Countries -- Territorial Areas 2','package_007' => '2'],
            ['id_007' => 'admin-country-at3','name_007' => 'Countries -- Territorial Areas 3','package_007' => '2'],
            ['id_007' => 'admin-cron','name_007' => 'Cron task','package_007' => '2'],
            ['id_007' => 'admin-email-account','name_007' => 'Email accounts','package_007' => '2'],
            ['id_007' => 'admin-google-services','name_007' => 'Google Services','package_007' => '2'],
            ['id_007' => 'admin-lang','name_007' => 'Languagues','package_007' => '2'],
            ['id_007' => 'admin-package','name_007' => 'Packages','package_007' => '2'],
            ['id_007' => 'admin-perm','name_007' => 'Permissions','package_007' => '2'],
            ['id_007' => 'admin-perm-action','name_007' => 'Permissions -- Actions','package_007' => '2'],
            ['id_007' => 'admin-perm-perm','name_007' => 'Permissions -- Permissions','package_007' => '2'],
            ['id_007' => 'admin-perm-profile','name_007' => 'Permissions -- Profiles','package_007' => '2'],
            ['id_007' => 'admin-perm-resource','name_007' => 'Permissions -- Resources','package_007' => '2'],
            ['id_007' => 'admin-user','name_007' => 'Users','package_007' => '2'],
            ['id_007' => 'pulsar','name_007' => 'Pulsar','package_007' => '1']
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="ResourceTableSeeder"
 */