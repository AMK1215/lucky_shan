<?php

namespace Database\Seeders;

use App\Models\Admin\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            PaymentTypeTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            GameTypeTableSeeder::class,
            ProductTableSeeder::class,
            GameTypeProductTableSeeder::class,
            BannerSeeder::class,
            BannerTextSeeder::class,
            //AsiaGamingTablesSeeder::class,
            PragmaticPlaySeeder::class,
            JDBTablesSeeder::class,
            PGSoftGameListSeeder::class,
            JiliTablesSeeder::class,
            Live22SMTablesSeeder::class,
            //CQ9GameListTableSeeder::class,
            //CQ9FishingTablesSeeder::class,
            //EvolutionGamingTableSeeder::class,
            //JokerGameListSeeder::class,
           // SexyGamingSeeder::class,
            //RealTimeGamingSeeder::class,
            //YggdrasilSeeder::class,
            //KAGamingTablesSeeder::class,
            //SpadeGamingTablesSeeder::class,
           //SpadeGamingFishingTablesSeeder::class,
            //PlayStarTablesSeeder::class,
            //PlayStarFishingTablesSeeder::class,
            //HabaneroGamingTablesSeeder::class,
            //MrSlottyTablesSeeder::class,
            //TrueLabTablesSeeder::class,
            //BGamingTablesSeeder::class,
            //WazdanTablesSeeder::class,
            //FaziTablesSeeder::class,
            //NetGameTablesSeeder::class,
            //RedRakeTablesSeeder::class,
            //BoongoTablesSeeder::class,
            //SkywindTablesSeeder::class,
            //SkywindCasinoTablesSeeder::class,
            //AdvantPlayTablesSeeder::class,
            //GENESISTablesSeeder::class,
            //SimplePlayTablesSeeder::class,
            //FuntaGamingTablesSeeder::class,
            //FelixGamingTablesSeeder::class,
            //SmartSoftTablesSeeder::class,
            //ZeusPlayTablesSeeder::class,
            //NetentTablesSeeder::class,
            //RedTigerTablesSeeder::class,
            //GamingWorldTablesSeeder::class,
            //YesGetRichTablesSeeder::class,
            BannerAdsSeeder::class,
            BankTableSeeder::class,
            ReportTransactionsSeeder::class,
            //GSCReportSeeder::class
        ]);

    }
}