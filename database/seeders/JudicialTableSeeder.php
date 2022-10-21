<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Judicial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JudicialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('judicials')->delete();
        $judicials = new Judicial();
        $judicials->name = 'Omar Saoudi';
        $judicials->statement = 'الخبرة الاولى';
        $judicials->council_or_court = 'المجلس';
        $judicials->case_number = '001/2022';
        $judicials->index_number = '750';
        $judicials->session_day = date('2022-12-13');
        $judicials->room = 'الثانية';
        $judicials->investigation_number = '36914';
        $judicials->prosecution_number = '25874';
        $judicials->deposit_date = date('1998-10-23');
        $judicials->deposit_number = '420';
        $judicials->advance_amount = 1000;
        $judicials->amount_invoice = 2000;
        $judicials->estimated_amount = 3000;
        $judicials->note = 'سوف نبلغ جميع السلطات';
        $judicials->save();
    }
}
