<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('record_person', function (Blueprint $table) {
            $table->id();
            // カラムを追加
            $table->string('name');
            $table->unsignedBigInteger('genre_id');
            $table->date('birthday')->nullable();
            $table->string('position')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('img_path')->nullable();
            $table->longText('description');
            // 'timestamp'に現在時刻をデフォルトを設定するuseCurrent()。
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_person');
    }
};
