<?php

use App\Models\PostLanguage;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_languages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vi')->nullable();
            $table->unsignedBigInteger('en')->nullable();
            $table->unsignedBigInteger('cn')->nullable();
            $table->tinyInteger('status')->default(PostLanguage::STATUS_ACTIVE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_languages');
    }
}
