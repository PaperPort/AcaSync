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

        Schema::create('workspaces', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('alamat')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kode_akses');
            $table->timestamps();
        });

        Schema::create('role_workspace', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('workspace_id');
            $table->foreign('workspace_id')->references('id')->on('workspaces');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::create('access_module_role_workspace', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('rw_id');
            $table->foreign('rw_id')->references('id')->on('role_workspace');
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('module_page');
            $table->enum('can_view',['0','1']);
            $table->enum('can_add',['0','1']);
            $table->enum('can_edit',['0','1']);
            $table->enum('can_delete',['0','1']);
        });

        Schema::create('detail_users_workspace', function(Blueprint $table){
            $table->id()->primary();
            $table->char('nomor_induk',18);
            $table->year('tahun_ajaran');
            $table->enum('is_active',['0','1']);
            $table->timestamps();
        });
 
        Schema::create('users_workspace', function(Blueprint $table){
            $table->id()->primary();
            $table->unsignedBigInteger('workspace_id');
            $table->foreign('workspace_id')->references('id')->on('workspaces');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('detailUser_id')->nullable();
            $table->unsignedInteger('rw_id')->nullable();
            $table->unsignedInteger('akun_terkait')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workspaces');
        Schema::dropIfExists('role_workspace');
        Schema::dropIfExists('access_module_role_workspace');
        Schema::dropIfExists('detail_users_workspace');
        Schema::dropIfExists('users_workspace');
    }
};
