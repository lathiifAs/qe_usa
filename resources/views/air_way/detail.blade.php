<!DOCTYPE html>
<html lang="en">
<style>
    td.cs {
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
    }

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
            style="font-size: 10px; margin-left : 30px; border-color: black; border-collapse: collapse; width:97%; margin-top: 15px; table-layout: fixed;"
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
                <tr>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                    <td><br></td>
                    <td colspan="20"><br></td>
                </tr>
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
                    <td colspan="12" class="h1">
                        <p>{{ $aw->shipper }}</p>
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
                    <td colspan="12" class="h3">
                        {{ $aw->consignee }}
                    </td>
                </tr>
                <tr>
                    <td colspan="12" class="h3">
                        <p>{{ $aw->issuing_carrier }}</p>
                    </td>
                    <td colspan="12" rowspan="3">NOTIFY PARTY : {{ $aw->notify_party }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="h2"></td>
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td colspan="12" class="h2">
                        <p>{{ $aw->airport_of_departure }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="h2">
                        <p>{{ $aw->to }}</p>
                    </td>
                    <td colspan="6" style="padding-left: 25px">
                        <p>{{ $aw->by_first_carrier }}</p>
                    </td>
                    <td style="padding-left: -50px" colspan="2">
                        <p>{{ $aw->to_2 }}</p>
                    </td>
                    <td>
                        <p>{{ $aw->by }}</p>
                    </td>
                    <td>
                        <p>{{ $aw->to_3 }}</p>
                    </td>
                    <td>
                        <p>{{ $aw->by_2 }}</p>
                    </td>
                    <td>
                        <p>{{ $aw->currency }}</p>
                    </td>
                    <td>
                        <p>{{ $aw->chos_cd }}</p>
                    </td>
                    <td>
                        <p>{{ $aw->wtnal_pdd }}</p>
                    </td>
                    <td>
                        <p>{{ $aw->wtnal_coll }}</p>
                    </td>
                    <td>
                        <p>{{ $aw->qnay_pdd }}</p>
                    </td>
                    <td>
                        <p>{{ $aw->qnay_coll }}</p>
                    </td>
                    <td colspan="3">
                        <p>{{ $aw->declared_carriage }}</p>
                    </td>
                    <td colspan="3">
                        <p>{{ $aw->declared_costums }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" class="h2">
                        <p>{{ $aw->airport_of_destination }}</p>
                    </td>
                    <td colspan="3" style="padding-left: 20px">
                        <p>{{ $aw->start_flight_date }}</p>
                    </td>
                    <td colspan="3" style="padding-left: 20px">
                        <p>{{ $aw->end_flight_date }}</p>
                    </td>
                    <td colspan="4" style="padding-left: 20px">
                        <p>{{ $aw->amount_of_insurance }}</p>
                    </td>
                    <td colspan="8"></td>
                </tr>
                <tr>
                    <td colspan="3" style="border-top-style: hidden; border-bottom-style: hidden;"></td>
                </tr>
                <tr>
                    <td colspan="21" rowspan="2" class="h2" style="border-right-style: hidden;">
                        {{ $aw->handling_information }}</td>
                    <td colspan="3"><br></td>
                </tr>
                <tr>
                    <td colspan="3" style="border-top-style: hidden;"></td>
                </tr>
                <tr>
                    <td style="height: 150px"></td>
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
                    <td style="height: 100px" style="padding-top: 150px">{{ $aw->no_of_pieces }}</td>
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
                    <td colspan="5" style="padding-top: 60px"><b></b>
                        <p>{{ $aw->prepaid }}</p>
                    </td>
                    <td colspan="5"  style="padding-top: 40px"><b></b>
                        <p>{{ $aw->collect }}</p>
                    </td>
                    <td colspan="14"  style="padding-top: 40px" rowspan="3"><b></b>
                        <p>{{ $aw->other_charges }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  style="padding-top: 40px"><b></b>
                        <p>{{ $aw->start_valuation_charge }}</p>
                    </td>
                    <td colspan="5"  style="padding-top: 40px"><b></b>
                        <p>{{ $aw->end_valuation_charge }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  style="padding-top: 40px"><b><b>
                                <p>{{ $aw->start_tax }}</p>
                    </td>
                    <td colspan="5"  style="padding-top: 40px"><b><b>
                                <p>{{ $aw->end_tax }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  style="padding-top: 40px"><b></b>
                        <p>{{ $aw->start_total_charge_agent }}</p>
                    </td>
                    <td colspan="5"  style="padding-top: 40px"><b></b>
                        <p>{{ $aw->end_total_charge_agent }}</p>
                    </td>
                    <td colspan="14" rowspan="3" style="text-align: center">
                        <p>{{ $aw->signature_of_shipper }}</p>
                        <b></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  style="padding-top: 40px"><b></b>
                        <p>{{ $aw->start_total_charge_carrier }}</p>
                    </td>
                    <td colspan="5"  style="padding-top: 40px"><b></b>
                        <p>{{ $aw->end_total_charge_carrier }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  style="padding-top: 40px" ><br></td>
                    <td colspan="5"  style="padding-top: 40px" ><br></td>
                </tr>
                <tr>
                    <td colspan="5" class="h40"><b></b>
                        <p>{{ $aw->total_repaid }}</p>
                    </td>
                    <td colspan="5" class="h40"><b></b>
                        <p>{{ $aw->total_collect }}</p>
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
                    <td colspan="5" class="h40"><b></b>
                        <p>{{ $aw->current_conversion }}</p>
                    </td>
                    <td colspan="5" class="h40"><b></b>
                        <p>{{ $aw->cc_charges }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h40"><b></b></td>
                    <td colspan="5" class="h40"><b></b>
                        <p>{{ $aw->charges_desti }}</p>
                    </td>
                    <td colspan="4"><b></b>
                        <p>{{ $aw->total_collect_charges }}</p>
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
