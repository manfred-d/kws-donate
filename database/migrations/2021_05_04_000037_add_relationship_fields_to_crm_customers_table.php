<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrmCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('crm_customers', function (Blueprint $table) {
            // $table->unsignedBigInteger('status_id')->nullable();
            $table->foreignId('status_id', 'status_fk_3743136')->nullable()->constrained('crm_statuses');

        });
    }
}
