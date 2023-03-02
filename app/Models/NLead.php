<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NLead extends Model
{
    use HasFactory;
    protected $table = 'NLead';
    protected $fillable = ['customer', 'rem', 'interest', 'remark'];

    public function Customer()
    {

        return    $this->belongsTo(Customer::class);
    }
    public function Status()
    {

        return    $this->belongsTo(Status::class);
    }
    public function Source()
    {

        return    $this->belongsTo(Source::class);
    }
    public static function SaveMe($single, $customer)
    {

        $lead = new NLead;
        $lead->customer_id = Customer::create($customer)->id;
        $lead->remark = $single["txt_remark"];
        $lead->interest =  $single["txt_interest"];
        // $ls = Source::where('name', 'Tiktok')->first();
        // $lead->status_id = Status::where('name', 'New')->first()->id;
        // $lead->source_id = Source::where('name', 'Tiktok')->first()->id; 
        $lead->status_id = $single["opt_status"]+1;
        $lead->source_id = $single["opt_source"]+1;
        $saved =  $lead->save();
        return $saved;
    }
}
