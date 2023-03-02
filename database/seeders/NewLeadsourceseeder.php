<?php

namespace Database\Seeders;

use App\Models\Customer;

use App\Models\NLead;
use App\Models\Source;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\CommonMark\Node\Inline\Newline;

class NewLeadsourceseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'Alaa Mohra',
                'phone' => '+971585557777',
                'Email' => 'engmohra@gmail.com',
                'country' => 'Egypt',
            ],

        ];


        foreach ($customers as $single) {

            $lead = new NLead;
            $lead->customer_id = Customer::create($single)->id;
            $lead->remark = 'HE wants to buy now';
            $lead->interest = 'soba tower';
            // $ls = Source::where('name', 'Tiktok')->first();
            $lead->status_id = Status::where('name', 'New')->first()->id;
            $lead->source_id = Source::where('name', 'Tiktok')->first()->id;
            $lead->save();
        }

        //
    }
}
