<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaracollCollection extends Migration
{
    public function up(): void
    {
        Schema::connection('mongodb')->create('laracoll', function (Blueprint $collection) {
            $collection->index('guid', ['unique' => true]);
        });
    }

    public function down(): void
    {
        Schema::connection('mongodb')->dropIfExists('laracoll');
    }
}

