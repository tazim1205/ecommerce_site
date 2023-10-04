<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UsersSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuActionsTableSeeder::class);
        $this->call(UserMenuActionsTableSeeder::class);
        $this->call(OtpSmsTableSeeder::class);
        $this->call(OfficersTableSeeder::class);
        $this->call(StaffsTableSeeder::class);
        $this->call(AboutUsesTableSeeder::class);
        $this->call(RegionalDirectorMessagesTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(UsefulLinksTableSeeder::class);
        $this->call(MissionVisionsTableSeeder::class);
        $this->call(ContactUsesTableSeeder::class);
        $this->call(EmployeeInformationsTableSeeder::class);
        $this->call(InstitutionInfosTableSeeder::class);
        $this->call(InstituteTradeInfosTableSeeder::class);
        $this->call(TradeInfosTableSeeder::class);
    }
}