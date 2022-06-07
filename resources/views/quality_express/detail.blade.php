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
        padding-left: 20px
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
    }

    div.h1 {
        height: 65px;
        overflow: hidden;
    }

    div.k1 {
        height: 13px;
    }

    td.pl {
        padding-left: 0px
    }
    @page { margin-bottom: 0px; margin-left: 12px }


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
                <td style="text-align: right; width:50%"><b>
                        <h3></h3>
                    </b></td>
            </tr>
        </table>
        {{-- <font size="2"> --}}
        <table
            style="font-size: 10px; border-color: black; border-collapse: collapse; width:104%; table-layout: fixed;"
            cellpadding="0" cellspacing="0">
            <tr>
                {{-- 1 --}}
                <td colspan="4" class="pl" rowspan="2">
                    <div style="height: 70px; overflow: hidden; padding-top: 10px" >
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
                    <p><label for="">{{ $qe->export_references }}</label></p>
                </td>
                {{-- 6 --}}
                <td colspan="2" class="pl1" style="padding-top:10px;">
                    <p><label for="">{{ $qe->bill_of_lading_no }}</label></p>
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
                    <p>{{ $qe->fmc_no }}</p>
                </td>
                {{-- 6 --}}
                <td colspan="2" class="pl1" style="padding-top: 20px;">
                    <p><label for="">{{ $qe->no_of_original_signed }}</label></p>
                </td>
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>
            {{--  --}}
            <tr>
                <td colspan="4" class="pl">
                    <div style="height: 60px; overflow: hidden;">
                        <p><label for="" class='preserveLines'>{{ $qe->consignee }}</label></p>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                {{-- 4 --}}
                <td colspan="4" class="pl">
                    <div style="height: 60px; overflow: hidden;" class="pl1">
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
                    <div style="height: 65px; overflow: hidden; padding-top: 10px">
                        <p><label for="" class='preserveLines'>{{ $qe->notify_party }}</label></p>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                {{-- 4 --}}
                <td colspan="4" style="padding-top: 15px;">
                    <div style="height: 65px; overflow: hidden;" class="pl1">
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
                        <p><label for="">{{ $qe->vessel_voy }}</label></p>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                <td colspan="2" style="padding-left: 25px">
                    <div class="k1" style=" padding-top: 2px;padding-left: 15px">
                        <p><label for="" class=" white-space: nowrap;">{{ $qe->part_of_loading }}</label></p>
                    </div>
                </td>
                {{-- 3 --}}
                {{-- 4 --}}
                <td colspan="2" style="padding-left: 15px">
                    <div class="k1" style="padding-top: 2px;padding-left: 15px;">
                        <p><label for="">{{ $qe->pier_or_place }}</label></p>
                    </div>
                </td>
                {{-- 5 --}}
                {{-- 6 --}}
                <td colspan="2" style="padding-left: 50px">
                    <div class="k1" style="padding-top: 1px; padding-left: 15px;">
                        <p><label for="">{{ $qe->type_of_move }}</label></p>
                    </div>
                </td>
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>

            <tr>
                <td colspan="2" class="pl">
                    <div class="k1" style="padding-top: 1px">
                        <p><label for="">{{ $qe->port_of_discharge }}</label></p>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                <td colspan="2" style="padding-left: 25px">
                    <div class="k1" style="padding-left: 15px;">
                        <p><label for="">{{ $qe->place_of_delivery }}</label></p>
                    </div>
                </td>
                {{-- 3 --}}
                {{-- 4 --}}
                <td colspan="2" style="padding-left: 15px">
                    <div class="k1" style="padding-left: 15px;">
                        <p><label for="">{{ $qe->final_destination }}</label></p>
                    </div>
                </td>
                {{-- 5 --}}
                {{-- 6 --}}
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>



            {{-- copy area --}}

            <tr>
                <td colspan="2" style="border:none;" class="pl">
                    <div style="height: 315px; padding-top: -10px">
                        <p><label for="" class='preserveLines'>{{ $qe->container_no }}</label></p>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                <td colspan="5" style="padding-left: 20px; border:none;">
                    <div style="height: 315px;  padding-top: -10px; padding-left: 20px">
                        <p><label for="" class='preserveLines'>{{ $qe->no_of_pkgs }}</label></p>
                    </div>
                </td>
                {{-- 4 --}}
                {{-- 5 --}}
                {{-- <td style="border:none;">
                        <label for=""  class='preserveLines'><p>{{ $qe->total_gross_weight }}</p></label>
                    </td> --}}
                {{-- 6 --}}
                <td style="border:none">
                    <div style="height: 315px; padding-top: 30px">
                        <p><label for="" class='preserveLines'>{{ $qe->total_measur }}</label></p>
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
                    <div style="height: 20px; padding-top: 5px">
                        <p><label for=""></label></p>
                    </div>
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                <td colspan="4" class="pl">
                    <div style="height: 18px; padding-top: 5px">
                        <p><label for="">{{ $qe->total_no_pkgs }}</label></p>
                    </div>
                </td>
                {{-- 4 --}}
                {{-- 5 --}}
                {{-- 6 --}}
                <td colspan="2">
                    <div style="height: 20px; padding-top: 5px">
                        <p><label for=""></label></p>
                    </div>
                </td>
                {{-- 7 --}}
                {{-- 8 --}}
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
                </td>
                {{-- 1 --}}
                {{-- 2 --}}
                {{-- 3 --}}
                <td colspan="2" style="text-align: center; padding-top: 10px">
                    <div style="height: 25px;">
                    </div>
                </td>
                {{-- 4 --}}
                {{-- 5 --}}
                <td colspan="2" style="text-align: center">
                </td>
                {{-- 6 --}}
                {{-- 7 --}}
                <td colspan="2" style="text-align: center">
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
                <td colspan="2" style="text-align: right; padding-right:10px; padding-top: 10px">
                    <div style="height: 25px; padding-left: 35px">

                        {{-- jakarta --}}
                        <label for="">{{ $qe->place_and_date_issue }}</label>
                    </div>
                </td>
                {{-- 4 --}}
                {{-- 5 --}}
                {{-- 6 --}}
                {{-- 7 --}}
                <td colspan="2" style="text-align: left; padding-left: 58px; padding-top: 13x">, {{ $qe->by }}
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
                    <div class="row" style="height: 40px; padding-top: 75px">
                        <div style="text-align: right; padding-right: 55px;">
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
