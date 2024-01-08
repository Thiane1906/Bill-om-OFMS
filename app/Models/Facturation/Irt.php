<?php

namespace App\Models\Facturation;

use Carbon\Carbon;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Irt extends Model
{
    use Uuids;
    protected $table='irt';
    public $timestamps = false;
    protected $fillable=array('transaction_reference','irt_session_id','mmh_name','mmh_operation_id','sender_operation_id','receiver_operation_id','orange_transfer_way','creation_date','modification_date','irt_status_code',
'irt_status_description','irt_sender_operation_status','irt_sender_operation_sub_status','sender_country_code','sender_currency_code','sender_operator','sender_id','irt_receiver_operation_status','irt_receiver_operation_sub_status','receiver_country_code','receiver_id',
'mmh_quotation_id','wholesale_rate','change_markup','retail_rate','transfer_hedging_rate','sender_amount','sender_operator_fee_amount','quotation_amount','round_amount',
'receiver_amount','receiver_operator_commission','withholding_tax','sender_om_transfer_id','sender_om_transfer_txn_mode','receiver_om_transfer_id','receiver_om_transfer_txn_mode',
'sender_om_rollback_id','sender_om_rollback_txn_mode','sender_om_refund_id','sender_om_refund_txn_mode','receiver_om_refund_id','receiver_om_refund_txn_mode','irt_version',
'creation_date_in_gr_db','modification_date_in_gr_db','sender_last_name','sender_first_name','sender_dob','sender_country_of_birth','sender_address','sender_id_document_type',
'sender_id_document_number','receiver_last_name','receiver_first_name','receiver_dob','receiver_country_of_birth','receiver_address',
'receiver_id_document_type','receiver_id_document_number','reason_of_transfer','prod_data_time');

public function setCreationDateAttribute($value)
{
    $this->attributes['creation_date'] = Carbon::createFromFormat('d/m/Y H:i', $value)->format('YmdHi');
}

}
            
        
         