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
        Schema::create('detail_mapel_workspace', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
        
        Schema::create('mata_pelajaran_workspace', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workspace_id');
            $table->unsignedInteger('detailMapel_id');
        });

        Schema::create('kelas_mapel_workspace', function (Blueprint $table) {
            $table->id();
            $table->integer('kelasWorkspace_id');
            $table->integer('mapelWorkspace_id');
            $table->integer('guruMapel_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_mapel_workspace');
        Schema::dropIfExists('mata_pelajaran_workspace');
        Schema::dropIfExists('kelas_mapel_workspace');
    }
};
