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

    .first-half {
        float: left;
        width: 50%;
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
                    <td colspan="12">
                        <label for=""> {{ $aw->mawb_no }} </label>
                    </td>
                    <td colspan="12" style="text-align: right; padding-right: 10px">
                        <label for="" > {{ $aw->aawb_no }} </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" style="border-bottom-style: hidden;"></td>
                    <td colspan="6">
                        <label>{{ $aw->shipper_account_number }}</label>
                    </td>
                    <td colspan="3" rowspan="2" style="border-right-style: hidden;">
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
                    <td colspan="6" style="border-bottom-style: hidden; padding-top: 10px"></td>
                    <td colspan="6">
                        <label> {{ $aw->account_no }} </label>
                    </td>
                    <td colspan="12" rowspan="2">
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 75px; overflow:hidden; padding-top: 10px">
                        <label class='preserveLines'>{{ $aw->consignee }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 60px; overflow:hidden; padding-top: 25px">
                        <label class='preserveLines'>{{ $aw->issuing_carrier }}</label>
                        </div>
                    </td>
                    <td colspan="12" rowspan="3"><label for="" class='preserveLines'>{{ $aw->notify_party }}</label></td>
                </tr>
                <tr>
                    <td colspan="6" style="padding-top: 35px"></td>
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div style="height: 20px; overflow: hidden;">
                        <label>{{ $aw->airport_of_departure }}</label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="1">
                        <div style="overflow:hidden; height: 30px;padding-top: 15px">
                            <label>{{ $aw->to }}</label>
                        </div>
                    </td>
                    <td colspan="6" style="padding-left: 25px">
                        <label>{{ $aw->by_first_carrier }}</label>
                    </td>
                    <td style="padding-left: 5px;">
                        <label>{{ $aw->to_2 }}</label>
                    </td>
                    <td>
                        <label style="margin-left: 14px;">{{ $aw->by }}</label>
                    </td>
                    <td>
                        <label for="">{{ $aw->to_3 }}</label>
                    </td>
                    <td>
                        <label for="">{{ $aw->by_2 }}</label>
                    </td>
                    <td  colspan="2">
                        <label for="" style="margin-left: 30px;">{{ $aw->currency }}</label>
                    </td>
                    <td>
                        <label for="">{{ $aw->chos_cd }}</label>
                    </td>
                    <td>
                        <label for="">{{ $aw->wtnal_pdd }}</label>
                    </td>
                    <td>
                        <label for="">{{ $aw->wtnal_coll }}</label>
                    </td>
                    <td>
                        <label for="">{{ $aw->qnay_pdd }}</label>
                    </td>
                    <td>
                        <label for="">{{ $aw->qnay_coll }}</label>
                    </td>
                    <td colspan="2">
                        <label for="">{{ $aw->declared_carriage }}</label>
                    </td>
                    <td colspan="3">
                        <label for="" style="padding-left: 45px">{{ $aw->declared_costums }}</label>
                    </td>
                </tr>

                <tr>
                    <td colspan="6">
                        <div style="height: 23px; overflow: hidden;">
                            <label for="">{{ $aw->airport_of_destination }}</label>
                        </div>
                    </td>
                    <td colspan="3" style="padding-left: 20px">
                        <label for="">{{ $aw->start_flight_date }}</label>
                    </td>
                    <td colspan="3" style="padding-left: 20px">
                        <label for="">{{ $aw->end_flight_date }}</label>
                    </td>
                    <td colspan="4" style="padding-left: 20px">
                        <label for="">{{ $aw->amount_of_insurance }}</label>
                    </td>
                    <td colspan="8"></td>
                </tr>
                <tr>
                    <td colspan="3" style="border-top-style: hidden; border-bottom-style: hidden;"></td>
                </tr>
                <tr>
                    <td colspan="21" rowspan="2" style="border-right-style: hidden; height: 85px; overflow: hidden;">
                        <label for="">{{ $aw->handling_information }}</label></td>
                    <td colspan="3"><br></td>
                </tr>
                <tr>
                    <td colspan="3" style="border-top-style: hidden;"></td>
                </tr>
                <tr>
                    <td colspan="18">
                        <div style="height: 245px; overflow: hidden; padding-top: 20px">
                            <label for="" class='preserveLines'>{{ $aw->desc_of_goods }}</label>
                        </div>
                    </td>
                    <td colspan="6">
                        <div style="height: 245px; overflow: hidden; padding-top: 20px">
                            <label for="" class='preserveLines'>{{ $aw->nature_and_qty }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="5"><br></td>
                </tr>
                <tr>
                    <td colspan="5"><b></b>
                        <div style="height: 30px; overflow: hidden; ">
                            <label for="" style="">{{ $aw->prepaid }}</label>
                        </div>
                    </td>
                    <td colspan="5" ><b></b>
                        <div style="height: 30px; overflow: hidden; ">
                            <label for="" style="">{{ $aw->collect }}</label>
                        </div>
                    </td>
                    <td colspan="16"  rowspan="3"><b></b>
                        <div style="height: 110px; overflow: hidden; ">
                            <label>{{ $aw->other_charges }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" ><b></b>
                        <div style="height: 30px; overflow: hidden;  ">
                            <label for="">{{ $aw->start_valuation_charge }}</label>
                        </div>
                    </td>
                    <td colspan="5" ><b></b>
                        <div style="height: 30px; overflow: hidden;  ">

                        <label for="">{{ $aw->end_valuation_charge }}</label>
                    </div>

                    </td>
                </tr>
                <tr>
                    <td colspan="5" ><b><b>
                        <div style="height: 30px; overflow: hidden; ">
                            <label for="">{{ $aw->start_tax }}</label>
                        </div>
                    </td>
                    <td colspan="5" ><b><b>
                        <div style="height: 30px; overflow: hidden; ">
                                <label for="">{{ $aw->end_tax }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" ><b></b>
                        <div style="height: 30px; overflow: hidden;  ">
                            <label for="">{{ $aw->start_total_charge_agent }}</label>
                        </div>
                    </td>
                    <td colspan="5" ><b></b>
                        <div style="height: 30px; overflow: hidden;  ">
                        <label for="">{{ $aw->end_total_charge_agent }}</label>
                        </div>
                    </td>
                    <td colspan="14" rowspan="3" style="text-align: center; padding-top: 23px">
                        <div style="height: 25px; overflow: hidden;  ">
                            <label>{{ $aw->signature_of_shipper }}</label>
                        </div>
                        <b></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" ><b></b>
                        <div style="height: 30px; overflow: hidden; ">
                            <label for="">{{ $aw->start_total_charge_carrier }}</label>
                        </div>
                    </td>
                    <td colspan="5" ><b></b>
                        <div style="height: 30px; overflow: hidden; ">
                        <label for="">{{ $aw->end_total_charge_carrier }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"  >
                        <div style="height: 20px; overflow: hidden;">
                            <br>
                        </div>
                    </td>
                    <td colspan="5"  ><br></td>
                </tr>
                <tr>
                    <td colspan="5"><b></b>
                        <div style="height: 30px; overflow: hidden; padding-top: 15px">
                            <label for="">{{ $aw->total_repaid }}</label>
                        </div>
                    </td>
                    <td colspan="5" class="h40"><b></b>
                        <div style="height: 30px; overflow: hidden; ">
                        <label for="">{{ $aw->total_collect }}</label>
                        </div>
                    </td>
                    <td colspan="4" rowspan="2" style="text-align: center">
                        <div style="height: 30px; overflow: hidden; ">
                        <label>  {{ date('j F, Y', strtotime($aw->executed_date)) }}</label>
                        </div>
                        <b></b>
                    </td>
                    <td colspan="5" class="h40" rowspan="2" style="text-align: center">
                        <div style="height: 30px; overflow: hidden; ">
                        <label>{{ $aw->at_place }}</label>
                        </div>
                        <b></b>
                    </td>
                    <td colspan="5" class="h40" rowspan="2" style="text-align: center">
                        <label>{{ $aw->signature_of_issue }}</label>
                        <b></b>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <div style="height: 40px; overflow: hidden;">
                            <label for="">{{ $aw->current_conversion }}</label>
                        </div>
                    </td>
                    <td colspan="5">
                        <label for="">{{ $aw->cc_charges }}</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="5">
                        <div style="height: 40px; overflow: hidden;">
                        <label for="">{{ $aw->charges_desti }}</label>
                        </div>
                    </td>
                    <td colspan="4"><b></b>
                        <label for="">{{ $aw->total_collect_charges }}</label>
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
