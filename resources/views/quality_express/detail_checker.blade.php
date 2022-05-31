<!DOCTYPE html>
<html lang="en">

<style>

    b {
    font-size: 12px; /* 40px/16=2.5em */
    }

    label {
    font-size: 12px; /* 40px/16=2.5em */
    }

    .preserveLines {
        white-space: pre-wrap;
    }

    td.cs {
        padding-top: 15px;
    }

    div.h1 {
        height: 68px;
        overflow: hidden;
    }

    td.pl {
        padding-left: 10px
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
        <table style="border-color: black; border-collapse: collapse;">
            <tr>
                <td style="width:50%"></td>
                <td style="text-align: right; width:50%"><b><h3>Bill of Lading</h3></b></td>
            </tr>
        </table>
        {{-- <font size="2"> --}}
            <table border="1"
                style="font-size: 10px; border-color: black; border-collapse: collapse; width:104%; table-layout: fixed;"
                cellpadding="0" cellspacing="0">
                <tr>
                    {{-- 1 --}}
                    <td colspan="4" class="pl" style="padding-right:20px; padding-top:10px" rowspan="2" >
                        <div class="h1">
                            <b>Shipper / Exporter</b>
                            <label for=""  class='preserveLines'><p>{{ $qe->shipper }}</p></label>
                        </div>
                    </td>
                    {{-- 2 --}}
                    {{-- 3 --}}
                    {{-- 4 --}}
                    {{-- 5 --}}
                    <td colspan="2" style="width: 20%" class="pl">
                        <b>Export References</b>
                        <p>{{ $qe->export_references }}</p>
                        </td>
                    {{-- 6 --}}
                    <td colspan="2" class="pl" style="padding-top:20px">
                        <b>Bill of Lading No</b>
                        <p>{{ $qe->bill_of_lading_no }}</p>
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
                        <b>Export References</b>
                        <p>{{ $qe->fmc_no }}</p>
                        </td>
                    {{-- 6 --}}
                    <td colspan="2" class="pl" style="padding-top: 20px">
                        <b>No. of Original B(s)/L(s) Signed</b>
                        <p>{{ $qe->no_of_original_signed }}</p></td>
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>
                {{--  --}}
                <tr>
                    <td colspan="4" style="padding-top: 10px;" class="pl">
                        <div style="height: 90px; overflow: hidden;">
                            <b>Consignee</b>
                            <label for=""  class='preserveLines'><p>{{ $qe->consignee }}</p></label>
                        </div>
                    </td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    {{-- 4 --}}
                    <td colspan="4" class="pl" style="padding-top: 20px;">
                        <div style="height: 90px; overflow: hidden;">
                            <b>For Delivery Please Apply To</b>
                            <label for=""  class='preserveLines'><p>{{ $qe->for_delivery }}</p></label>
                        </div>
                    </td>
                    {{-- 5 --}}
                    {{-- 6 --}}
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

                <tr>
                    <td colspan="4" class="pl">
                        <div style="height: 90px; overflow: hidden;">
                            <b>Notify Party</b>
                            <label for=""  class='preserveLines'><p>{{ $qe->notify_party }}</p></label>
                        </div>
                    </td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    {{-- 4 --}}
                    <td colspan="4" class="pl" style="padding-top: 15px;">
                        <div style="height: 90px; overflow: hidden;">
                            <b>Also Notify (Name Full Address) / Domestic Routing</b>
                            <p>
                            <label for=""  class='preserveLines'>{{ $qe->also_notify }}</label>
                        </p>
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
                        <div style="height: 40px;">
                            <b>Vessel Voy</b>
                            <p>{{ $qe->vessel_voy }}</p>
                        </div>
                    </td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    <td colspan="2" style="padding-top: 5px; padding-left: 10px">
                        <b>Port of Loading</b>
                        <p>{{ $qe->part_of_loading }}</p>
                        </td>
                    {{-- 3 --}}
                    {{-- 4 --}}
                    <td colspan="2" style="padding-top: 5px; padding-left: 20px">
                        <b>Pier of Plance of Receipt</b>
                        <p>{{ $qe->pier_or_place }}</p>
                        </td>
                    {{-- 5 --}}
                    {{-- 6 --}}
                    <td colspan="2"  style="padding-top: 5px; padding-left: 10px">
                        <b>Type of Move</b>
                        <p>{{ $qe->type_of_move }}</p></td>
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

                <tr>
                    <td colspan="2" class="pl" style="padding-top: 5px">
                        <b>Port of Discharge</b>
                        <p>{{ $qe->port_of_discharge }}</p>
                        </td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    <td colspan="2"  style="padding-top: 15px; padding-left: 10px">
                        <b>Place of Delivery</b>
                        <p>{{ $qe->place_of_delivery }}</p>
                        </td>
                    {{-- 3 --}}
                    {{-- 4 --}}
                    <td colspan="4"  style="padding-top: 15px; padding-left: 20px">
                        <b>Final Destination (For The Merchant's Reference Only)</b>
                        <p>{{ $qe->final_destination }}</p></td>
                    {{-- 5 --}}
                    {{-- 6 --}}
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

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

                {{-- copy area --}}

                <tr>
                    <td colspan="2" style="border:none;" class="pl">
                        <div style="height: 180px; ">
                            <label for=""  class='preserveLines'><p>{{ $qe->container_no }}</p></label>
                        </div>
                    </td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    <td colspan="5" style="padding-left: 20px; border:none;">
                        <label for=""  class='preserveLines'><p>{!! $qe->no_of_pkgs !!}</p></label>
                    </td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    {{-- <td style="border:none;">
                        <label for=""  class='preserveLines'><p>{{ $qe->total_gross_weight }}</p></label>
                    </td> --}}
                    {{-- 6 --}}
                    <td style="border:none">
                        <label for=""  class='preserveLines'><p>{{ $qe->total_measur }}</p></label>
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
                            {{ $qe->desc_of_goods }}
                        </div></td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    {{-- 6 --}}
                    <td colspan="2" style="border:none;"></td>
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

                {{--  --}}
                <tr>
                    <td class="pl" colspan="2"><b>Total No of Packages</b></td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    <td colspan="4" class="pl">
                        <div style="height: 20px; padding-top: 5px">{{ $qe->total_no_pkgs }}</div></td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    {{-- 6 --}}
                    <td colspan="2"></td>
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

                <tr>
                    <td colspan="2" style="text-align: center">
                        <b>Freight and Charges</b></td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    <td colspan="2" style="text-align: center; padding-top: 10px">
                        <div style="height: 25px;">
                        <b>Prepaid Collect</b>
                    </div>
                </td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    <td colspan="2" style="text-align: center"><b>Place and Date of Issue</b></td>
                    {{-- 6 --}}
                    {{-- 7 --}}
                    <td colspan="2" style="text-align: center"> <b>Date, by</b> </td>
                    {{-- 8 --}}
                </tr>

                <tr>
                    <td colspan="2"></td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    <td colspan="2" class="text-center">
                        <center>
                            {{ $qe->repaid_collect }}
                        </center>
                    </td>
                    {{-- 3 --}}
                    <td colspan="2" style="text-align: right; padding-right:10px; padding-top: 10px">
                        <div style="height: 25px;">

                        {{-- jakarta --}}
                            {{ $qe->place_and_date_issue }}
                        </div>
                    </td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    {{-- 6 --}}
                    {{-- 7 --}}
                    <td colspan="2" style="text-align: left; padding-left: 58px; padding-top: 13x">, {{ $qe->by }}</td>
                    {{-- 8 --}}
                </tr>
                <tr style="border:none">
                    <td colspan="3" style="border: none">
                        <div style="height: 30px;">
                            &nbsp;
                        </div>
                    </td>
                </tr>

                <tr style="border:none">

                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    <td colspan="5" style="border: none"></td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    <td colspan="3" style="text-align: left; padding-left:10px; border:none"> {{ $qe->as_agent }} as Agent</td>
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
