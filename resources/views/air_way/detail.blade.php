<!DOCTYPE html>
<html lang="en">
<style>

    td {
        overflow: hidden;
    }

    td.cs {
        padding-top: 15px;
    }

    td.h1 {
        height: 68px;
        overflow: hidden;
    }

    td.h45 {
        height: 45px;
        overflow: hidden;
    }

    td.h2 {
        height: 35px;
        overflow: hidden;
    }

    td.pl {
        padding-left: 10px
    }

    td.pt {
        padding-top: 10px
    }

    .first-half {
        float: left;
        width: 50%;
    }

    /* td.cs {
        padding-top: 15px;
    }

    td.h1 {
        height: 55px;
        overflow: hidden;
    }


    td.h45 {
        height: 40px;
        overflow: hidden;
    }


    td.h3 {
        height: 75px;
        overflow: hidden;
    }


    td.h2 {
        height: 35px;
        overflow: hidden;
    }

    td.pl {
        padding-left: 10px
    }

    td.pt {
        padding-top: 10px
    } */

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> --}}
    <title>Quality Express</title>
</head>

<body>
    <center>
        {{-- <font size="2"> --}}
        <table border="0"
            style="font-size: 10px; margin-left : 35px; border-color: black; border-collapse: collapse; width:100%; margin-top: 38px; table-layout: fixed;"
            cellpadding="0" cellspacing="0">
            <tbody>
                {{-- <tr>
                        <td>1</td>
                        <td >2</td>
                        <td >3</td>
                        <td >4</td>
                        <td >5</td>
                        <td >6</td>
                        <td >7</td>
                        <td >8</td>
                        <td >9</td>
                        <td >10</td>
                        <td >11</td>
                        <td >12</td>
                        <td >13</td>
                        <td >14</td>
                        <td >15</td>
                        <td >16</td>
                        <td >17</td>
                        <td >18</td>
                        <td >19</td>
                        <td >20</td>
                        <td >21</td>
                        <td >22</td>
                        <td >23</td>
                        <td >24</td>
                    </tr> --}}
                {{-- <tr>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                    <td colspan="20"><br></td>
                </tr> --}}
                <tr>
                    <td colspan="6" style="border-bottom-style: hidden;"></td>
                    <td colspan="6">
                        <p>{{ $aw->shipper_account_number }}</p>
                    </td>
                    <td colspan="3" rowspan="2" style="border-right-style: hidden;">
                    </td>
                    <td colspan="9" style="border-left-style: hidden;" rowspan="2">
                        {{ $aw->issued_by }}
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 50px; overflow:hidden;">
                            <p>{{ $aw->shipper }}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" style="border-bottom-style: hidden;"></td>
                    <td colspan="6">
                        <p> {{ $aw->account_no }} </p>
                    </td>
                    <td colspan="12" rowspan="2">
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 60px; overflow:hidden;">
                        {{ $aw->consignee }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 40px; overflow:hidden;">
                        <p>{{ $aw->issuing_carrier }}</p>
                        </div>
                    </td>
                    <td colspan="12" rowspan="3">NOTIFY PARTY : {{ $aw->notify_party }}</td>
                </tr>
                <tr>
                    <td colspan="6" style="padding-top: 35px"></td>
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 10px; overflow: hidden;">
                        <p>{{ $aw->airport_of_departure }}</p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="1">
                        <div style="overflow:hidden; height: 20px;padding-top: 15px">
                            {{ $aw->to }}
                        </div>
                    </td>
                    <td colspan="6" style="padding-left: 25px">
                        {{ $aw->by_first_carrier }}
                    </td>
                    <td style="padding-left: 10px">
                        {{ $aw->to_2 }}
                    </td>
                    <td>
                        {{ $aw->by }}
                    </td>
                    <td>
                        {{ $aw->to_3 }}
                    </td>
                    <td>
                        {{ $aw->by_2 }}
                    </td>
                    <td>
                        {{ $aw->currency }}
                    </td>
                    <td>
                        {{ $aw->chos_cd }}
                    </td>
                    <td>
                        {{ $aw->wtnal_pdd }}
                    </td>
                    <td>
                        {{ $aw->wtnal_coll }}
                    </td>
                    <td>
                        {{ $aw->qnay_pdd }}
                    </td>
                    <td>
                        {{ $aw->qnay_coll }}
                    </td>
                    <td colspan="3">
                        {{ $aw->declared_carriage }}
                    </td>
                    <td colspan="3">
                        {{ $aw->declared_costums }}
                    </td>
                </tr>

                <tr>
                    <td colspan="6">
                        <div style="height: 23px; overflow: hidden;">
                            {{ $aw->airport_of_destination }}
                        </div>
                    </td>
                    <td colspan="3" style="padding-left: 20px">
                        {{ $aw->start_flight_date }}
                    </td>
                    <td colspan="3" style="padding-left: 20px">
                        {{ $aw->end_flight_date }}
                    </td>
                    <td colspan="4" style="padding-left: 20px">
                        {{ $aw->amount_of_insurance }}
                    </td>
                    <td colspan="8"></td>
                </tr>
                <tr>
                    <td colspan="3" style="border-top-style: hidden; border-bottom-style: hidden;"></td>
                </tr>
                <tr>
                    <td colspan="21" rowspan="2" class="h2" style="border-right-style: hidden; padding-top: 10px">
                        {{ $aw->handling_information }}</td>
                    <td colspan="3"><br></td>
                </tr>
                <tr>
                    <td colspan="3" style="border-top-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="height: 70px"></td>
                    <td colspan="2"></td>
                    <td></td>
                    <td><b></b></td>
                    <td colspan="2"><b></b></td>
                    <td colspan="3"><b></b></td>
                    <td colspan="2"><b></b></td>
                    <td colspan="5"><b></b></td>
                    <td colspan="7"><b></b></td>
                </tr>
                <tr>
                    <td>
                        <div style="height: 200px; overflow: hidden;">
                            {{ $aw->no_of_pieces }}
                        </div>
                    </td>
                    <td colspan="2">{{ $aw->gross_weight }}</td>
                    <td rowspan="2">{{ $aw->kglg }}</td>
                    <td rowspan="2"></td>
                    <td colspan="2" rowspan="2">{{ $aw->commodity_item }}</td>
                    <td colspan="3" rowspan="2">{{ $aw->chargeable_weight }}</td>
                    <td colspan="2" rowspan="2">{{ $aw->rate_charge }}</td>
                    <td colspan="5" rowspan="2" style="padding-left: 45px">{{ $aw->total }}</td>
                    <td colspan="7" rowspan="2" style="padding-left: 45px">{{ $aw->nature_and_qty }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="5"><br></td>
                </tr>
                <tr>
                    <td colspan="5" style="padding-top: 10px"><b></b>
                        <div style="height: 20px; overflow: hidden;">
                            {{ $aw->prepaid }}
                        </div>
                    </td>
                    <td colspan="5"  style="padding-top: 10px"><b></b>
                        {{ $aw->collect }}
                    </td>
                    <td colspan="14"  style="padding-top: 10px" rowspan="3"><b></b>
                        <p>{{ $aw->other_charges }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  style="padding-top: 10px"><b></b>
                        <div style="height: 20px; overflow: hidden;">
                            {{ $aw->start_valuation_charge }}
                        </div>
                    </td>
                    <td colspan="5"  style="padding-top: 10px"><b></b>
                        {{ $aw->end_valuation_charge }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  style="padding-top: 10px"><b><b>
                        <div style="height: 20px; overflow: hidden;">
                            {{ $aw->start_tax }}
                        </div>
                    </td>
                    <td colspan="5"  style="padding-top: 10px"><b><b>
                                {{ $aw->end_tax }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  style="padding-top: 10px"><b></b>
                        <div style="height: 20px; overflow: hidden;">
                            {{ $aw->start_total_charge_agent }}
                        </div>
                    </td>
                    <td colspan="5"  style="padding-top: 10px"><b></b>
                        {{ $aw->end_total_charge_agent }}
                    </td>
                    <td colspan="14" rowspan="3" style="text-align: center">
                        <p>{{ $aw->signature_of_shipper }}</p>
                        <b></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  style="padding-top: 10px"><b></b>
                        <div style="height: 20px; overflow: hidden;">
                            {{ $aw->start_total_charge_carrier }}
                        </div>
                    </td>
                    <td colspan="5"  style="padding-top: 10px"><b></b>
                        {{ $aw->end_total_charge_carrier }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  style="padding-top: 10px" >
                        <div style="height: 20px; overflow: hidden;">
                            <br>
                        </div>
                    </td>
                    <td colspan="5"  style="padding-top: 10px" ><br></td>
                </tr>
                <tr>
                    <td colspan="5"><b></b>
                        <div style="height: 30px; overflow: hidden; padding-top: 15px">
                            {{ $aw->total_repaid }}
                        </div>
                    </td>
                    <td colspan="5" class="h40"><b></b>
                        {{ $aw->total_collect }}
                    </td>
                    <td colspan="4" rowspan="2" style="text-align: center">
                        <p>  {{ date('j F, Y', strtotime($aw->executed_date)) }}</p>
                        <b></b>
                    </td>
                    <td colspan="5" class="h40" rowspan="2" style="text-align: center">
                        <p>{{ $aw->at_place }}</p>
                        <b></b>
                    </td>
                    <td colspan="5" class="h40" rowspan="2" style="text-align: center">
                        <p>{{ $aw->signature_of_issue }}</p>
                        <b></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <div style="height: 40px; overflow: hidden;">
                            {{ $aw->current_conversion }}
                        </div>
                    </td>
                    <td colspan="5">
                        {{ $aw->cc_charges }}
                    </td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="5">
                        <div style="height: 40px; overflow: hidden;">
                        {{ $aw->charges_desti }}
                        </div>
                    </td>
                    <td colspan="4"><b></b>
                        {{ $aw->total_collect_charges }}
                    </td>
                    <td colspan="10"><b></b></td>
                </tr>
            </tbody>
        </table>
        {{-- </font> --}}
    </center>
</body>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> --}}

</html>
