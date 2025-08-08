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
        Schema::create('user_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName',30)->nullable();
            $table->string('middleName',30)->nullable();
            $table->string('lastName',30)->nullable();
            $table->string('fullName',90)->nullable();
            $table->text('headline')->nullable();
            $table->string('email',30);
            $table->string('mobile',15)->nullable();
            $table->string('mobile2',15)->nullable();
            $table->string('password',50)->nullable();
            $table->text('profilePic')->nullable();
            

            $table->string('cityName',30)->nullable();
            $table->bigInteger('cityId')->nullable();
            $table->string('localiity',100)->nullable();
            $table->string('stateName',50)->nullable();
            $table->bigInteger('stateId')->nullable();
            $table->string('countryName',60)->nullable();
            $table->bigInteger('countryId')->nullable();
            $table->text('address')->nullable();
            $table->string('zipcode',12)->nullable();
            
            
            
            $table->smallInteger('emailVerified')->default(0); 
            $table->text('emailVerificationLink')->nullable();
            $table->string('emailVerificationCode',60)->nullable();
            $table->smallInteger('mobileVerified')->default(0); 
            $table->smallInteger('mobile2Verified')->default(0);
            $table->string('otp',12)->nullable();
            $table->timestamps();

            $table->smallInteger('isActive')->default(1);
            $table->smallInteger('isDeleted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_master');
    }
};
