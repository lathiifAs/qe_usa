<!DOCTYPE html>
<html lang="en">

<style>
    b {
        font-size: 12px;
        text-transform: uppercase;
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

    td.cs {
        padding-top: 15px;
        padding-left: 10px
    }

    table {
        padding-left: 10px
    }

    div.h1 {
        height: 65px;
        overflow: hidden;
    }

    div.k1 {
        height: 30px;
    }

    td.pl {
        padding-left: 10px
    }
    @page { margin-bottom: -30px; margin-left: 15px; margin-top: 20px; size: 24cm 33cm}


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
    <div class="row col-lg-12">
        <div class="text-right">
            <b>
                <h3 style="text-align: right; padding-right: 10px">BILL OF LADING</h3>
            </b>
        </div>

    </div>
    <center>
        {{-- <font size="2"> --}}
        <table border="1"
            style="font-size: 10px; border-color: black; border-collapse: collapse; width:100%; table-layout: fixed; padding: 0px; margin: 0px;"
            cellpadding="0" cellspacing="0">
            <tr>
                {{-- 1 --}}
                <td colspan="4" class="pl" rowspan="2">
                    <div style="height: 90px; overflow: hidden;">
                        <b>SHIPPER/EXPORTER</b> <br>
                        <p>
                            <label for="" class='preserveLines'>{{ $qe->shipper }}</label>
                        </p>
                    </div>
                </td>
                {{-- 2 --}}
                {{-- 3 --}}
                {{-- 4 --}}
                {{-- 5 --}}
                <td colspan="2" style="width: 20%" class="p1l">
                    <b style="padding-left: 10px">EXPORT REFERENCES</b><br>
                    <p><label for="">{{ $qe->export_references }}</label></p>
                </td>
                {{-- 6 --}}
                <td colspan="2" style="padding-top:20px;">
                    <center>
                        <b>BILL OF LADING NO.</b><br>
                        <p><label for="">{{ $qe->bill_of_lading_no }}</label></p>
                    </center>
                </td>
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>

            <tr>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                {{-- 4 --}}
                {{-- 5 --}}
                <td colspan="2" class="pl">
                    <b style="padding-left: 10px">FMC NO.</b>
                    <p>{{ $qe->fmc_no }}</p>
                </td>
                {{-- 6 --}}
                <td colspan="2" style="padding-top: 20px">
                    <center>
                        <b>
                            NO. OF ORIGINAL B(s)/L(s) SIGNED
                        </b>
                        <p><label for="">{{ $qe->no_of_original_signed }}</label></p>
                    </center>
                </td>
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>
            {{--  --}}
            <tr>
                <td colspan="4" class="pl">
                    <div style="height: 90px; overflow: hidden; padding-top: 5px">
                        <b>CONSIGNEE</b>
                        <p><label for="" class='preserveLines'>{{ $qe->consignee }}</label></p>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                {{-- 4 --}}
                <td colspan="4">
                    <div style="height: 90px; overflow: hidden; padding-top: 5px; padding-left: 10px">
                        <b>FOR DELIVERY PLEASE APPLY TO :</b>
                        <p><label for="" class='preserveLines'>{{ $qe->for_delivery }}</label></p>
                    </div>
                </td>
                {{-- 5 --}}
                {{-- 6 --}}
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>

            <tr>
                <td colspan="4" class="pl">
                    <div style="height: 95px; overflow: hidden; padding-top: 5px;">
                        <b>NOTIFY PARTY</b>
                        <p><label for="" class='preserveLines'>{{ $qe->notify_party }}</label></p>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                {{-- 4 --}}
                <td colspan="4">
                    <div style="height: 95px; overflow: hidden; padding-top: 5px; padding-left: 10px">
                        <b>ALSO NOTIFY (NAME AND FULL ADDRESS) / DOMESTIC ROUTING</b>
                        <p><label for="" class='preserveLines'>{{ $qe->also_notify }}</label></p>
                    </div>
                </td>
                {{-- 5 --}}
                {{-- 6 --}}
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>

            {{--  --}}

            <tr>
                <td colspan="2" style="width:35%" class="pl">
                    <div class="k1" style="padding-top: 5px" >
                        <b>Vessel Voy</b><br>
                        <label for="" style="padding-top: -10px">{{ $qe->vessel_voy }}</label>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                <td colspan="2" style="padding-left: 10px">
                    <div class="k1" style=" padding-top: 5px;">
                        <b>Port of Loading</b><br>
                        <label for="" class=" white-space: nowrap;">{{ $qe->part_of_loading }}</label>
                    </div>
                </td>
                {{-- 3 --}}
                {{-- 4 --}}
                <td colspan="2" style="padding-left: 10px">
                    <div class="k1" style="padding-top: 5px;">
                        <b>Pier of Plance of Receipt</b><br>
                        <label for="">{{ $qe->pier_or_place }}</label>
                    </div>
                </td>
                {{-- 5 --}}
                {{-- 6 --}}
                <td colspan="2" style="padding-left: 10px">
                    <div class="k1" style="padding-top: 5px;">
                        <b>Type of Move</b><br>
                        <label for="">{{ $qe->type_of_move }}</label>
                    </div>
                </td>
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>

            <tr>
                <td colspan="2" class="pl">
                    <div class="k1" style="padding-top: 5px">
                        <b>Port of Discharge</b><br>
                        <label for="">{{ $qe->port_of_discharge }}</label>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                <td colspan="2" style="padding-left: 10px">
                    <div class="k1" style="padding-top: 5px">
                        <b>Place of Delivery</b><br>
                        <label for="">{{ $qe->place_of_delivery }}</label>
                    </div>
                </td>
                {{-- 3 --}}
                {{-- 4 --}}
                <td colspan="4">
                    <div class="k1" style="padding-top: 5px; padding-left: 10px">
                        <b>Final Destination (For The Merchant's Reference Only)</b> <br>
                        <label for="">{{ $qe->final_destination }}</label>
                    </div>
                </td>
                {{-- 5 --}}
                {{-- 6 --}}
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>


            {{-- copy area --}}

            <tr>
                <td colspan="2" style="width:30%;" class="pl">
                    <div style="height: 20px;">
                        <b>Container No, Seal No, Marks & Nos</b>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                <td colspan="4" style="padding-left: 10px">
                    <b>No of PKGS. or Containers, Kid of PKGS, Description of Goods</b>
                    </td>
                {{-- 3 --}}
                {{-- 4 --}}
                <td colspan="1" style="padding-left: 20px">
                    <b>Total Gross Weight KGS ; (Pounds)</b>
                    </td>
                {{-- 5 --}}
                {{-- 6 --}}
                <td colspan="1"  style="padding-left: 10px">
                    <b>Total Measurement CBM; (CFT)</b>
                </td>
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>

            <tr>
                <td colspan="2" style="border:none;" class="pl">
                    <div style="height: 360px;">
                        <label for="" class='preserveLines'>{!! $qe->container_no !!}</label>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                <td colspan="5" style="padding-left: 20px; border:none;">
                    <div style="height: 360px;  padding-left: 20px">
                        <label for="" class='preserveLines'>{!! $qe->no_of_pkgs !!}</label>
                    </div>
                </td>
                {{-- 4 --}}
                {{-- 5 --}}
                {{-- <td style="border:none;">
                        <label for=""  class='preserveLines'><p>{{ $qe->total_gross_weight }}</p></label>
                    </td> --}}
                {{-- 6 --}}
                <td style="border:none">
                    <div style="height: 360px; padding-top: 10px;padding-left: 15px">
                        <label for="" class='preserveLines'>{!! $qe->total_measur !!}</label>
                    </div>
                </td>
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>


            <tr>
                <td colspan="3" style="border:none;"></td>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                <td colspan="3" style="border:none;">
                    <div style="height: 40px;">
                        <p><label for="">{{ $qe->desc_of_goods }}</label></p>
                    </div>
                </td>
                {{-- 4 --}}
                {{-- 5 --}}
                {{-- 6 --}}
                <td colspan="2" style="border:none;">
                    <div style="height: 40px;">
                        <p><label for=""></label></p>
                    </div>
                </td>
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>

            {{--  --}}
            <tr>
                <td class="pl" colspan="2">
                    <div style="height: 20px;">
                        <p><label for=""><b>TOTAL NO OF PACKAGES</b></label></p>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                <td colspan="6" class="pl">
                    <div style="height: 18px;">
                        <p><label for="">{{ $qe->total_no_pkgs }}</label></p>
                    </div>
                </td>
                {{-- 4 --}}
                {{-- 5 --}}
                {{-- 6 --}}
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>

            <tr>
                <td colspan="2">
                    <center>
                        <label for="">FREIGHT AND CHARGES</label>
                    </center>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                <td colspan="2" class="text-center">
                    <center>
                        {{-- jakarta --}}
                        <label for="">PREPAID   &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;    COLLECT</label>
                    </center>
                </td>
                {{-- 3 --}}
                <td colspan="2" class="text-center">
                    <center>
                        <label for="">PLACE AND DATE OF ISSUE</label>
                    </center>
                </td>
                {{-- 4 --}}
                {{-- 5 --}}
                {{-- 6 --}}
                {{-- 7 --}}
                <td colspan="2" class="text-center">
                    <center>
                        <label for="">DATE, BY</label>
                    </center>
                </td>
                {{-- 8 --}}
            </tr>

            <tr>
                <td colspan="2"></td>
                {{-- 1 --}}
                {{-- 2 --}}
                <td colspan="2" class="text-center">
                    <center>
                        <label for="">{{ $qe->repaid_collect }}</label>
                    </center>
                </td>
                {{-- 3 --}}
                <td colspan="2" style="text-align: right; padding-top: 10px">
                    <div style="height: 25px; padding-left: 45px">

                        {{-- jakarta --}}
                        <label for="">{{ $qe->place_and_date_issue }}</label>
                    </div>
                </td>
                {{-- 4 --}}
                {{-- 5 --}}
                {{-- 6 --}}
                {{-- 7 --}}
                <td colspan="2" style="text-align: left; padding-left: 68px; padding-top: 13x"><label for="">, {{ $qe->by }}</label>
                </td>
                {{-- 8 --}}
            </tr>
            <tr style="border:none">
                <td colspan="3" style="border: none">
                    <div style="height: 35px;">
                        &nbsp;
                    </div>
                </td>
            </tr>

            <tr style="border:none">
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                {{-- 4 --}}
                {{-- 5 --}}
                <td colspan="8" style="padding-left:10px; border:none">
                    <div class="row" style="height:70px; padding-top: 60px">
                        <div style="text-align: right; padding-right: 35px; ">
                            <label for="">{{ $qe->as_agent }}</label>
                        </div>
                    </div>
                </td>
                {{-- 6 --}}
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>
        </table>
        {{-- </font> --}}
    </center>
</body>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> --}}

</html>
