<?php

namespace Database\Seeders;

use Botble\ACL\Database\Seeders\UserSeeder;
use Botble\Base\Supports\BaseSeeder;
use Botble\Language\Database\Seeders\LanguageSeeder;

class DatabaseSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->prepareRun();

        $this->call([
            UserSeeder::class,
            LanguageSeeder::class,
            PageSeeder::class,
            GallerySeeder::class,
            BlogSeeder::class,
            WidgetSeeder::class,
            ThemeOptionSeeder::class,
            TestimonialSeeder::class,
            TeamSeeder::class,
            PortfolioSeeder::class,
            MenuSeeder::class,
            SettingSeeder::class,
            UserMetaSeeder::class,
        ]);

        $this->finished();
    }
}
