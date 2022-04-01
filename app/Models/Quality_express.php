<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quality_express extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'shipper_exporter',
        'export_references',
        'bill_of_lading_no',
        'fmc_no',
        'no_of_original_signed',
        'consignee',
        'for_delivery',
        'notify_party',
        'also_notify',
        'vessel_voy',
        'part_of_loading',
        'pier_or_place',
        'type_of_move',
        'port_of_discharge',
        'place_of_delivery',
        'final_destination',
        'container_no',
        // 'seal_no',
        'no_of_pkgs',
        'kind_of_pkgs',
        'total_gross_weight',
        'total_measur',
        'total_no_pkgs',
        'freight_and_charges',
        'repaid_collect',
        'place_and_date_issue',
        'as_agent',
        'by',
        'desc_of_goods',
        'cont_no',
        'seal_no',
        'mother_vessel'
        // 'as_agent',
    ];

}
