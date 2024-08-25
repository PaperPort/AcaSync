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
        Schema::create('detail_kelas_workspace', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kelas')->nullable();
            $table->string('nama')->nullable();
            $table->timestamps();
        });

        Schema::create('kelas_workspace', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('workspace_id');
            $table->foreign('workspace_id')->references('id')->on('workspaces');
            $table->unsignedBigInteger('detailKelas_id');
            $table->foreign('detailKelas_id')->references('id')->on('detail_kelas_workspace');
            $table->unsignedBigInteger('waliKelas_id');
        });

        Schema::create('join_kelas_workspace', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('kelasWorkspace_id');
            $table->foreign('kelasWorkspace_id')->references('id')->on('kelas_workspace');
            $table->unsignedBigInteger('userWorkspace_id');
            $table->foreign('userWorkspace_id')->references('id')->on('users_workspace');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kelas_workspace');
        Schema::dropIfExists('kelas_workspace');
        Schema::dropIfExists('join_kelas_workspace');
    }
};
