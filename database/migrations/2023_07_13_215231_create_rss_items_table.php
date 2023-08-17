<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRssItemsTable extends Migration
{
    public function up()
    {
        Schema::create('rss_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->text('description');
            // ...

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rss_items');
    }
}
