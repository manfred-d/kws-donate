<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAdoptionsTable extends Migration
{
    public function up()
    {
        Schema::table('adoptions', function (Blueprint $table) {
            $table->unsignedBigInteger('adpotee_id');
            $table->foreign('adpotee_id', 'adpotee_fk_3834124')->references('id')->on('crm_customers');
            $table->unsignedBigInteger('transaction_id')->nullable();
            $table->foreign('transaction_id', 'transaction_fk_3834125')->references('id')->on('transactions');
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id', 'animal_fk_3834126')->references('id')->on('product_categories');
        });
    }
}
