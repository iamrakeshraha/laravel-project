<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id("customer_id");                  // id bydeafult by we can change it as Customer_id
            $table->string("name", 30);
            $table->string("email",40)->unique();
            $table->string("phone",20);
            $table->text("address");
            $table->enum("gender",["M","F","O"]);
            $table->date("birthday");
            $table->string("password");
            $table->timestamps();               // create_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
