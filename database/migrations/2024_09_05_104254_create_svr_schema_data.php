<?php

use App\ApplicationAnimalStatusEnum;
use App\ApplicationStatusEnum;
use App\ImportStatusEnum;
use App\SystemBreedingValueEnum;
use App\SystemNotificationsTypesEnum;
use App\SystemParticipationsTypesEnum;
use App\SystemSexEnum;
use App\SystemStatusConfirmEnum;
use App\SystemStatusDeleteEnum;
use App\SystemStatusEnum;
use App\SystemStatusNotificationEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('CREATE SCHEMA IF NOT EXISTS data');
        DB::statement("COMMENT ON SCHEMA data IS 'Основная схема'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP SCHEMA IF EXISTS data CASCADE');
    }
};
