<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judicials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('statement'); // البيان
            $table->string('council_or_court'); // المجلس او المحكمة
            $table->string('case_number'); // رقم القضية
            $table->string('index_number'); // رقم الفهرس
            $table->date('session_day'); // يوم جلسة
            $table->string('room'); // الغرفة
            $table->string('investigation_number'); // رقم التحقيق
            $table->string('prosecution_number'); // رقم النيابة
            $table->date('deposit_date'); // تاريخ الإيداع
            $table->string('deposit_number'); // رقم الإيداع
            $table->decimal('advance_amount',8,2); // مبلغ التسبيق
            $table->decimal('amount_invoice',8,2); // مبلغ الفاتورة
            $table->decimal('estimated_amount',8,2); // المبلغ المقدر
            $table->text('note')->nullable(); // الملاحظة
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
        Schema::dropIfExists('judicials');
    }
};
