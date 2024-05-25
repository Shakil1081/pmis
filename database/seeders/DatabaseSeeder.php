<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            StatusTableSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            QuotaTableSeeder::class,
            BloodGroupTableSeeder::class,
            ReligionTableSeeder::class,
            OfficeUnitTableSeeder::class,
            ForestStateTableSeeder::class,
            ForestDivisionSeeder::class,
            JoiningInfoTableSeeder::class,
            ProjectRevenueLonesTableSeeder::class,
            MaritalStatusTableSeeder::class,
            LicenseTypeTableSeeder::class,
            LanguageListTableSeeder::class,
            ExamBoardSeeder::class,
            GenderSeeder::class,
            DivisionSeeder::class,
            DistrictSeeder::class,
        ]);
    }
}
