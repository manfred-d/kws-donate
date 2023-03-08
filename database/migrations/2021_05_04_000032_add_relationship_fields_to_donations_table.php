<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDonationsTable extends Migration
{
    public function up()
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->unsignedBigInteger('donor_id')->nullable();
            $table->foreign('donor_id', 'donor_fk_3833994')->references('id')->on('crm_customers');
            $table->unsignedBigInteger('campaign_id');
            $table->foreign('campaign_id', 'campaign_fk_3833997')->references('id')->on('campaigns');
        });
    }
}
