<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Air_way extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipper_name_address',
        'shipper_account_number',
        'issued_by',
        'consignee_name_address',
        'issuing_carrier',
        'accounting_information',
        'agents_iata_cd',
        'account_no',
        'airport_of_departure',
        'to',
        'by_first_carrier',
        'to_2',
        'by',
        'to_3',
        'by_2',
        'currency',
        'chos_cd',
        'wtnal_pdd',
        'wtnal_coll',
        'qnay_pdd',
        'qnay_coll',
        'declared_carriage',
        'declared_costums',
        'airport_of_destination',
        'start_flight_date',
        'end_flight_date',
        'amount_of_insurance',
        'handling_information',
        'no_of_pieces',
        'gross_weight',
        'kglg',
        'commodity_item',
        'chargeable_weight',
        'rate_charge',
        'total',
        'nature_and_qty',
        'prepaid',
        'collect',
        'start_valuation_charge',
        'end_valuation_charge',
        'start_tax',
        'end_tax',
        'start_total_charge_agent',
        'end_total_charge_agent',
        'start_total_charge_carrier',
        'end_total_charge_carrier',
        'total_repaid',
        'total_collect',
        'charges_desti',
        'cc_charges',
        'current_conversion',
        'other_charges',
        'total_collect_charges',
        'executed_date',
        'at_place',
        'signature_of_shipper',
        'signature_of_issue',
        'desc_of_goods',
        'mawb_no',
        'aawb_no',
    ];
}
