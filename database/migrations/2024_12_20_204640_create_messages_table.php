<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id(); // auto-incrementing primary key
            $table->string('message_title'); // message title (subject)
            $table->text('message_body'); // message body
            $table->timestamp('message_time')->useCurrent(); // message timestamp (defaults to current time)
            $table->timestamps(); // Laravel timestamps (created_at, updated_at)
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
