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
        <table border="1"
            style="font-size: 10px; margin-left : -10px; border-color: black; border-collapse: collapse; width:104%; margin-top: 15px; table-layout: fixed;"
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
                    <td colspan="6" style="border-bottom-style: hidden;"><b>Shipper's Name and Address</b></td>
                    <td colspan="6"><b>Shipper Account Number</b>
                        <p>{{ $aw->shipper_account_number }}</p>
                    </td>
                    <td colspan="3" rowspan="2" style="border-right-style: hidden;">NOT NEGOTIABLE<p>
                            <b>Air Waybill</b>
                        </p>
                        <p>
                            Issued by : </p>
                    </td>
                    <td colspan="9" style="border-left-style: hidden;" rowspan="2">
                        {{ $aw->issued_by }}
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 40px; overflow:hidden;">
                        <p>{{ $aw->shipper }}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" style="border-bottom-style: hidden;"><b>Consignee's Name and Address</b></td>
                    <td colspan="6"><b>Consegnee's Account Number</b>
                        <p> {{ $aw->account_no }} </p>
                    </td>
                    <td colspan="12" rowspan="2">
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 40px; overflow:hidden;">
                        {{ $aw->consignee }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 40px; overflow:hidden;"><b>Issuing Carrier's Agent Name and City</b>
                        <p>{{ $aw->issuing_carrier }}</p>
                        </div>
                    </td>
                    <td colspan="12" rowspan="3">NOTIFY PARTY : {{ $aw->notify_party }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="h2"><b>Agent's IATA Code</b></td>
                    <td colspan="6"><b>Account No.</b></td>
                </tr>
                <tr>
                    <td colspan="12" class="h2"><b>Airport of Departure (Addr. of First Carrier) and Request
                            Routing</b>
                        <p>{{ $aw->airport_of_departure }}</p>
                    </td>
                </tr>
                <tr>
                    <td><b>To</b>
                        <div style="height: 13px; overflow:hidden;">
                            {{ $aw->to }}
                        </div>
                    </td>
                    <td colspan="7"><b>By First Carrier (Routing and Destination)</b>
                        <div style="height: 13px; overflow:hidden;">
                            {{ $aw->by_first_carrier }}
                        </div>
                    </td>
                    <td><b>To</b>
                        <div style="height: 13px; overflow:hidden;">
                            {{ $aw->to_2 }}
                        </div>
                    </td>
                    <td><b>By</b>
                        <div style="height: 13px; overflow:hidden;">
                            {{ $aw->by }}
                        </div>
                    </td>
                    <td><b>To</b>
                        <div style="height: 13px; overflow:hidden;">
                            {{ $aw->to_3 }}
                        </div>
                    </td>
                    <td><b>By</b>
                        <div style="height: 13px; overflow:hidden;">
                            {{ $aw->by_2 }}
                        </div>
                    </td>
                    <td><b>Currency</b>
                        <div style="height: 13px; overflow:hidden;">
                        {{ $aw->currency }}
                        </div>
                    </td>
                    <td><b>CHGS Cd</b>
                        <div style="height: 13px; overflow:hidden;">
                        {{ $aw->chos_cd }}
                        </div>
                    </td>
                    <td><b>(WT/VAL) PDD</b>
                        <div style="height: 13px; overflow:hidden;">
                        {{ $aw->wtnal_pdd }}
                        </div>
                    </td>
                    <td><b>(WT/VAL) COLL</b>
                        <div style="height: 13px; overflow:hidden;">
                        {{ $aw->wtnal_coll }}
                        </div>
                    </td>
                    <td><b>(Other) PDD</b>
                        <div style="height: 13px; overflow:hidden;">
                        {{ $aw->qnay_pdd }}
                        </div>
                    </td>
                    <td><b>(Other) COLL</b>
                        <div style="height: 13px; overflow:hidden;">
                        {{ $aw->qnay_coll }}
                        </div>
                    </td>
                    <td colspan="3">
                        <div style="height: 13px; overflow:hidden;">
                        <b>Declared Value of Carriage</b>
                        {{ $aw->declared_carriage }}
                        </div>
                    </td>
                    <td colspan="3">
                        <div style="height: 13px; overflow:hidden;">
                        <b>Declared Value of Costums</b>
                        {{ $aw->declared_costums }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <div style="height: 30px; overflow:hidden;">
                        <b>Airport of Destination</b>
                        <br>
                        {{ $aw->airport_of_destination }}
                        </div>
                    </td>
                    <td colspan="3">
                        <div style="height: 30px; overflow:hidden;">
                        <b>Start Flight/Date</b>
                        <br>
                        {{ $aw->start_flight_date }}
                        </div>
                    </td>
                    <td colspan="3">
                        <div style="height: 30px; overflow:hidden;">
                        <b>End Flight/Date</b>
                        <br>
                        {{ $aw->end_flight_date }}
                        </div>
                    </td>
                    <td colspan="4">
                        <div style="height: 30px; overflow:hidden;">
                        <b>Amount of Insurance</b>
                        <br>
                        {{ $aw->amount_of_insurance }}
                        </div>
                    </td>
                    <td colspan="8"></td>
                </tr>
                <tr>
                    <td colspan="21" rowspan="2" style="border-bottom-style: hidden; border-right-style: hidden;">
                        <b>Handling Information</b></td>
                    <td colspan="3" style="border-bottom-style: hidden;"></td>
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
                    <td colspan="3" style="border-top-style: hidden;"><b>SCI</b></td>
                </tr>
                <tr>
                    <td><b>No Of Piesces RCP</b></td>
                    <td colspan="2"><b>Gross Weight</b></td>
                    <td><b>Kg/lb</b></td>
                    <td><b>Rate Class</b></td>
                    <td colspan="2"><b>Commodity Item No.</b></td>
                    <td colspan="3"><b>Chargeable Weight</b></td>
                    <td colspan="2"><b>Rate / Charge</b></td>
                    <td colspan="5"><b>Total</b></td>
                    <td colspan="7"><b>Nature and Qty of Goods (Incl. Dimensions or Volume)</b></td>
                </tr>
                <tr>
                    <td style="height: 100px">{{ $aw->no_of_pieces }}</td>
                    <td colspan="2">{{ $aw->gross_weight }}</td>
                    <td rowspan="2">{{ $aw->kglg }}</td>
                    <td rowspan="2"></td>
                    <td colspan="2" rowspan="2">{{ $aw->commodity_item }}</td>
                    <td colspan="3" rowspan="2">{{ $aw->chargeable_weight }}</td>
                    <td colspan="2" rowspan="2">{{ $aw->rate_charge }}</td>
                    <td colspan="5" rowspan="2">{{ $aw->total }}</td>
                    <td colspan="7" rowspan="2">{{ $aw->nature_and_qty }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="5"><br></td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Weight Charge (Prepaid)</b>
                        <p>{{ $aw->prepaid }}</p>
                    </td>
                    <td colspan="5" class="h2"><b>Weight Charge (Collect)</b>
                        <p>{{ $aw->collect }}</p>
                    </td>
                    <td colspan="14" class="h2" rowspan="3"><b>Other Charges</b>
                        <p>{{ $aw->other_charges }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Start Valiation Charge</b>
                        <p>{{ $aw->start_valuation_charge }}</p>
                    </td>
                    <td colspan="5" class="h2"><b>End Valiation Charge</b>
                        <p>{{ $aw->end_valuation_charge }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Start Tax<b>
                                <p>{{ $aw->start_tax }}</p>
                    </td>
                    <td colspan="5" class="h2"><b>End Tax<b>
                                <p>{{ $aw->end_tax }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Start Total Other Charges Due Agent</b>
                        <p>{{ $aw->start_total_charge_agent }}</p>
                    </td>
                    <td colspan="5" class="h2"><b>End Total Other Charges Due Agent</b>
                        <p>{{ $aw->end_total_charge_agent }}</p>
                    </td>
                    <td colspan="14" rowspan="3" style="text-align: center">
                        <p>{{ $aw->signature_of_shipper }}</p>
                        <b>Signature of Shipper or His Agent</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Start Total Other Charges Due Carrier</b>
                        <p>{{ $aw->start_total_charge_carrier }}</p>
                    </td>
                    <td colspan="5" class="h2"><b>End Total Other Charges Due Carrier</b>
                        <p>{{ $aw->end_total_charge_carrier }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2" style="background-color: rgb(209, 72, 65);"><br></td>
                    <td colspan="5" class="h2" style="background-color: rgb(209, 72, 65);"><br></td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Total Prepaid</b>
                        <p>{{ $aw->total_repaid }}</p>
                    </td>
                    <td colspan="5" class="h2"><b>Total Collect</b>
                        <p>{{ $aw->total_collect }}</p>
                    </td>
                    <td colspan="4" rowspan="2" style="text-align: center">
                        <p>  {{ date('j F, Y', strtotime($aw->executed_date)) }}</p>
                        <b>Executed on (Date)</b>
                    </td>
                    <td colspan="5" class="h2" rowspan="2" style="text-align: center">
                        <p>{{ $aw->at_place }}</p>
                        <b>at (Place)</b>
                    </td>
                    <td colspan="5" class="h2" rowspan="2" style="text-align: center">
                        <p>{{ $aw->signature_of_issue }}</p>
                        <b>Signiture of
                            Issuing Carrier or itsAgent</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Currency Conversion Rate</b>
                        <p>{{ $aw->current_conversion }}</p>
                    </td>
                    <td colspan="5" class="h2"><b>CC Charges in Des. Currency</b>
                        <p>{{ $aw->cc_charges }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>for Carrier's Use Only at Destination</b></td>
                    <td colspan="5" class="h2"><b>Charges at Destination</b>
                        <p>{{ $aw->charges_desti }}</p>
                    </td>
                    <td colspan="4"><b>Total Collect Charges</b>
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
