<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('geometry_type')->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->string('fac_nam')->nullable(); // 시설명
            $table->string('fac_tel')->nullable(); // 전화번호
            $table->string('cat_nam')->nullable(); // 시설 카테고리
            $table->string('fac_o_add')->nullable(); // 기존 주소
            $table->string('fac_n_add')->nullable(); // 새로운 주소
            $table->string('feature_id')->unique(); // 고유 ID
            $table->timestamps(); // created_at, updated_at 자동 추가
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
