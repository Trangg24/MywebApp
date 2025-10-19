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
        Schema::table('users', function (Blueprint $table) {
            //bên trong này cần định nghĩa thêm các trường mới cần phải biết đc trường đấy đặc tính như nào
            $table -> enum('gender', ['male', 'female']) -> nullable(); // cho phép nó rỗng thì nullable 
            //tham số đầu tiên là tên trường 'gender'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table -> dropColumn('gender');
        });
    }
};
