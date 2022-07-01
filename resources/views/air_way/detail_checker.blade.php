<!DOCTYPE html>
<html lang="en">
<style>



    b {
        font-size: 13px;
        /* 40px/16=2.5em */
    }

    label {
        font-size: 13px;
        /* 40px/16=2.5em */
        font-family: Arial;
    }

    .pl1 {
        padding-left: 30px
    }


    p {
        font-size: 13px;
        /* 40px/16=2.5em */
    }

    .preserveLines {
        white-space: pre-wrap;
    }

    @page { margin-left: 30px; margin-top: 0px ;margin-bottom: -20px;}

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

    tr.hide_all > td, td.hide_all{
        /* border-style:hidden; */
        border-right-style:hidden;
        border-left-style:hidden;
        border-top-style:hidden;
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
                <tr  class="hide_all">
                    <td colspan="12">
                        <label for=""> {{ $aw->mawb_no }} </label>
                    </td>
                    <td colspan="12" style="text-align: right; padding-right: 10px">
                        <label for="" > {{ $aw->aawb_no }} </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" style="border-bottom-style: hidden;"><b>Shipper's Name and Address</b></td>
                    <td colspan="6"><b>Shipper Account Number</b>
                        <label>{{ $aw->shipper_account_number }}</label>
                    </td>
                    <td colspan="3" rowspan="2" style="border-right-style: hidden;">NOT NEGOTIABLE<p>
                            <b>Air Waybill</b>
                        </p>
                        <p>
                            Issued by : </p>
                    </td>
                    <td colspan="9" style="border-left-style: hidden;" rowspan="2">
                        <label class='preserveLines'>{{ $aw->issued_by }}</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 80px; overflow:hidden;">
                            <label class='preserveLines'>{{ $aw->shipper }}</label>
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
                        <div style="height: 60px; overflow:hidden;">
                            <label class='preserveLines'>{{ $aw->consignee }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 40px; overflow:hidden;"><b>Issuing Carrier's Agent Name and City</b><br>
                            <label class='preserveLines' style="padding-top: 5px">{{ $aw->issuing_carrier }}</label>
                        </div>
                    </td>
                    <td colspan="12" rowspan="3"><label for="" class='preserveLines'>{{ $aw->notify_party }}</label></td>
                </tr>
                <tr>
                    <td colspan="6" class="h2"><b>Agent's IATA Code</b></td>
                    <td colspan="6"><b>Account No.</b></td>
                </tr>
                <tr>
                    <td colspan="12" class="h2"><b>Airport of Departure (Addr. of First Carrier) and Request
                            Routing</b><br>
                        <label>{{ $aw->airport_of_departure }}</label>
                    </td>
                </tr>
                <tr>
                    <td><b>To</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->to }}</label>
                        </div>
                    </td>
                    <td colspan="7"><b>By First Carrier (Routing and Destination)</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->by_first_carrier }}</label>
                        </div>
                    </td>
                    <td><b>To</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->to_2 }}</label>
                        </div>
                    </td>
                    <td><b>By</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->by }}</label>
                        </div>
                    </td>
                    <td><b>To</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->to_3 }}</label>
                        </div>
                    </td>
                    <td><b>By</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->by_2 }}</label>
                        </div>
                    </td>
                    <td><b>Currency</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->currency }}</label>
                        </div>
                    </td>
                    <td><b>CHGS Cd</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->chos_cd }}</label>
                        </div>
                    </td>
                    <td><b>(WT/VAL) PDD</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->wtnal_pdd }}</label>
                        </div>
                    </td>
                    <td><b>(WT/VAL) COLL</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->wtnal_coll }}</label>
                        </div>
                    </td>
                    <td><b>(Other) PDD</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->qnay_pdd }}</label>
                        </div>
                    </td>
                    <td><b>(Other) COLL</b>
                        <div style="height: 13px; overflow:hidden;">
                            <label for="">{{ $aw->qnay_coll }}</label>
                        </div>
                    </td>
                    <td colspan="3">
                        <div style="height: 13px; overflow:hidden;">
                        <b>Declared Value of Carriage</b>
                        <label for="">{{ $aw->declared_carriage }}</label>
                        </div>
                    </td>
                    <td colspan="3">
                        <div style="height: 13px; overflow:hidden;">
                        <b>Declared Value of Costums</b>
                        <label for="">{{ $aw->declared_costums }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <div style="height: 30px; overflow:hidden;">
                        <b>Airport of Destination</b>
                        <br>
                        <label for="">{{ $aw->airport_of_destination }}</label>
                        </div>
                    </td>
                    <td colspan="3">
                        <div style="height: 30px; overflow:hidden;">
                        <b>Start Flight/Date</b>
                        <br>
                        <label for="">{{ $aw->start_flight_date }}</label>
                        </div>
                    </td>
                    <td colspan="3">
                        <div style="height: 30px; overflow:hidden;">
                        <b>End Flight/Date</b>
                        <br>
                        <label for="">{{ $aw->end_flight_date }}</label>
                        </div>
                    </td>
                    <td colspan="4">
                        <div style="height: 30px; overflow:hidden;">
                        <b>Amount of Insurance</b>
                        <br>
                        <label for="">{{ $aw->amount_of_insurance }}</label>
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
                        <label for="">{{ $aw->handling_information }}</label>
                    </td>
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
                    <td colspan="17">
                        <div style="height: 245px; overflow: hidden; padding-top: 20px">
                            <label for="" class='preserveLines'>{{ $aw->desc_of_goods }}</label>
                        </div>
                    </td>
                    <td colspan="7">
                        <div style="height: 245px; overflow: hidden; padding-top: 20px">
                            <label for="" class='preserveLines'>{{ $aw->nature_and_qty }}</label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="5" class="h2"><b>Weight Charge (Prepaid)</b>
                        <label>{{ $aw->prepaid }}</label>
                    </td>
                    <td colspan="5" class="h2"><b>Weight Charge (Collect)</b>
                        <label>{{ $aw->collect }}</label>
                    </td>
                    <td colspan="14" class="h2" rowspan="3"><b>Other Charges</b>
                        <label>{{ $aw->other_charges }}</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Start Valiation Charge</b>
                        <label>{{ $aw->start_valuation_charge }}</label>
                    </td>
                    <td colspan="5" class="h2"><b>End Valiation Charge</b>
                        <label>{{ $aw->end_valuation_charge }}</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Start Tax<b>
                                <label>{{ $aw->start_tax }}</label>
                    </td>
                    <td colspan="5" class="h2"><b>End Tax<b>
                                <label>{{ $aw->end_tax }}</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Start Total Other Charges Due Agent</b>
                        <label>{{ $aw->start_total_charge_agent }}</label>
                    </td>
                    <td colspan="5" class="h2"><b>End Total Other Charges Due Agent</b>
                        <label>{{ $aw->end_total_charge_agent }}</label>
                    </td>
                    <td colspan="14" rowspan="3" style="text-align: center">
                        <label>{{ $aw->signature_of_shipper }}</label>
                        <br>
                        <b>Signature of Shipper or His Agent</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Start Total Other Charges Due Carrier</b>
                        <label>{{ $aw->start_total_charge_carrier }}</label>
                    </td>
                    <td colspan="5" class="h2"><b>End Total Other Charges Due Carrier</b>
                        <label>{{ $aw->end_total_charge_carrier }}</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2" style="background-color: rgb(209, 72, 65);"><br></td>
                    <td colspan="5" class="h2" style="background-color: rgb(209, 72, 65);"><br></td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Total Prepaid</b>
                        <label>{{ $aw->total_repaid }}</label>
                    </td>
                    <td colspan="5" class="h2"><b>Total Collect</b>
                        <br>
                        <label>{{ $aw->total_collect }}</label>
                    </td>
                    <td colspan="4" rowspan="2" style="text-align: center">
                        <p>  {{ date('j F, Y', strtotime($aw->executed_date)) }}</label><br>
                        <b>Executed on (Date)</b>
                    </td>
                    <td colspan="5" class="h2" rowspan="2" style="text-align: center">
                        <label>{{ $aw->at_place }}</label><br>
                        <b>at (Place)</b>
                    </td>
                    <td colspan="5" class="h2" rowspan="2" style="text-align: center">
                        <label>{{ $aw->signature_of_issue }}</label><br>
                        <b>Signiture of
                            Issuing Carrier or itsAgent</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>Currency Conversion Rate</b>
                        <label>{{ $aw->current_conversion }}</label>
                    </td>
                    <td colspan="5" class="h2"><b>CC Charges in Des. Currency</b>
                        <label>{{ $aw->cc_charges }}</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="h2"><b>for Carrier's Use Only at Destination</b></td>
                    <td colspan="5" class="h2"><b>Charges at Destination</b>
                        <label>{{ $aw->charges_desti }}</label>
                    </td>
                    <td colspan="4"><b>Total Collect Charges</b>
                        <label>{{ $aw->total_collect_charges }}</label>
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
