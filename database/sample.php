<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampleTable extends Migration
{
    public function up()
    {
        Schema::create('sample_table', function (Blueprint $table) {
            $table->bigIncrements('id');              // Auto-incrementing BIGINT (primary key)
            $table->unsignedBigInteger('user_id');    // Foreign key column

            // String types
            $table->string('title', 255);             // VARCHAR(255)
            $table->char('code', 10);                 // CHAR(10)
            $table->text('description');              // TEXT

            // Numeric types
            $table->integer('quantity');              // INT
            $table->bigInteger('views');              // BIGINT
            $table->float('rating', 8, 2);            // FLOAT(8,2)
            $table->decimal('price', 10, 2);          // DECIMAL(10,2)
            $table->double('weight', 8, 2);           // DOUBLE(8,2)

            // Date & time
            $table->date('publish_date');             // DATE
            $table->time('publish_time');             // TIME
            $table->dateTime('publish_at');           // DATETIME
            $table->timestamp('created_at')->nullable(); // TIMESTAMP
            $table->timestamp('updated_at')->nullable(); // TIMESTAMP

            // Boolean
            $table->boolean('is_active')->default(true); // TINYINT(1)

            // JSON
            $table->json('metadata')->nullable();     // JSON

            // ENUM (if your DB supports it)
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sample_table');
    }
}
