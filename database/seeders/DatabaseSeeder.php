<?php

namespace Database\Seeders;

use CountrySeeder;
use Illuminate\Database\Seeder;
use JobDesignationSeeder;

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
            ForestDivisionTableSeeder::class,
            JoiningInfoTableSeeder::class,
            ProjectRevenueLonesTableSeeder::class,
            MaritalStatusTableSeeder::class,
            LicenseTypeTableSeeder::class,
            LanguageListTableSeeder::class,
            ExamBoardSeeder::class,
            GenderSeeder::class,
            DivisionSeeder::class,
            DistrictSeeder::class,
            ExaminationsTableSeeder::class,
            ExamBoardsTableSeeder::class, 
            ResultGroupsTableSeeder::class, 
            ResultsTableSeeder::class, 
            CountrySeederlist::class, 
            JobDesignationSeederlist::class, 
            GradeSeeder::class, 
        ]);
    }
}
