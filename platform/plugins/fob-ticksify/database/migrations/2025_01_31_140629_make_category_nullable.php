<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        if (! Schema::hasColumn('fob_tickets', 'category_id')) {
            return;
        }

        Schema::table('fob_tickets', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('fob_tickets', function (Blueprint $table) {
            $table->foreignId('category_id')->change();
        });
    }
};
