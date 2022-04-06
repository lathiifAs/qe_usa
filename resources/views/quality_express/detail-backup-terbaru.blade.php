<!DOCTYPE html>
<html lang="en">
<style>

    td.cs {
        padding-top: 15px;
    }

    div.h1 {
        height: 68px;
        overflow: hidden;
    }

    td.pl {
        padding-left: 30px
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
                <td style="text-align: right; width:50%"></td>
            </tr>
        </table>
        {{-- <font size="2"> --}}
            <table border="0"
                style="font-size: 10px; margin-left : -10px; border-color: black; border-collapse: collapse; width:104%; margin-top: 5%; table-layout: fixed;"
                cellpadding="0" cellspacing="0">
                <tr>
                    {{-- 1 --}}
                    <td colspan="4" style="padding-right:20px; padding-top:24px" rowspan="2" >
                        <div class="h1">
                            {{ $qe->shipper }}
                        </div>
                    </td>
                    {{-- 2 --}}
                    {{-- 3 --}}
                    {{-- 4 --}}
                    {{-- 5 --}}
                    <td colspan="2" style="width: 20%">{{ $qe->export_references }}</td>
                    {{-- 6 --}}
                    <td colspan="2" class="cs pl" style="width: 20%;">{{ $qe->bill_of_lading_no }}</td>
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

                <tr>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    {{-- 4 --}}
                    {{-- 5 --}}
                    <td colspan="2">{{ $qe->fmc_no }}</td>
                    {{-- 6 --}}
                    <td colspan="2" class="cs pl">{{ $qe->no_of_original_signed }}</td>
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>
                {{--  --}}
                <tr>
                    <td colspan="4" style="padding-top: 24px;">
                        <div style="height: 80px; overflow: hidden;">
                            {{ $qe->consignee }}
                        </div>
                    </td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    {{-- 4 --}}
                    <td colspan="4" class="pl" style="padding-top: 24px;">
                        <div style="height: 80px; overflow: hidden;">
                            {{ $qe->issued_by }}
                        </div>
                    </td>
                    {{-- 5 --}}
                    {{-- 6 --}}
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

                <tr>
                    <td colspan="4" style="padding-top: 15px;">
                        <div class="h1">
                            {{ $qe->notify_party }}
                        </div>
                    </td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    {{-- 4 --}}
                    <td colspan="4" class="pl" style="padding-top: 15px;">
                        <div class="h1">
                            {{ $qe->also_notify }}
                        </div>
                    </td>
                    {{-- 5 --}}
                    {{-- 6 --}}
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

                {{--  --}}

                <tr>
                    <td colspan="2" style="padding-top: 15px; width:35%">
                        <div style="height: 17px;">
                            {{ $qe->vessel_voy }}
                        </div>
                        </td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    <td colspan="2" style="padding-top: 15px; padding-left: 45px">{{ $qe->part_of_loading }}</td>
                    {{-- 3 --}}
                    {{-- 4 --}}
                    <td colspan="2" style="padding-top: 15px; padding-left: 20px">{{ $qe->pier_or_place }}</td>
                    {{-- 5 --}}
                    {{-- 6 --}}
                    <td colspan="2"  style="padding-top: 15px; padding-left: 65x">{{ $qe->type_of_move }}</td>
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

                <tr>
                    <td colspan="2" class="cs">{{ $qe->port_of_discharge }}</td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    <td colspan="2"  style="padding-top: 15px; padding-left: 50px">{{ $qe->place_of_delivery }}</td>
                    {{-- 3 --}}
                    {{-- 4 --}}
                    <td colspan="4"  style="padding-top: 15px; padding-left: 20px">{{ $qe->final_destination }}</td>
                    {{-- 5 --}}
                    {{-- 6 --}}
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

                {{-- copy area --}}

                <tr>
                    <td colspan="2" style="padding-top: 50px">
                        <div style="height: 280px;">
                            CONT.NO : {{ $qe->cont_no }}<br>
                            SEAL.NO : {{ $qe->seal_no }}<br>
                            MOTHER VESSEL : {{ $qe->mother_vessel }}
                        </div>
                    </td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    <td colspan="3" style="padding-left: 42px">{{ $qe->no_of_pkgs }}</td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    <td></td>
                    {{-- 6 --}}
                    <td colspan="2">{{ $qe->total_gross_weight }} <p> {{ $qe->total_net }}</p><p>{{ $qe->total_measur }}</p></td>
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>


                <tr>
                    <td colspan="3"></td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    <td colspan="3">
                        <div style="height: 130px;">
                            {{ $qe->desc_of_goods }}
                        </div></td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    {{-- 6 --}}
                    <td colspan="2"></td>
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>

                {{--  --}}
                <tr>
                    <td colspan="3"></td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    <td colspan="3">
                        <div style="height: 20px;">
                            {{ $qe->total_no_pkgs }}
                        </div></td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    {{-- 6 --}}
                    <td colspan="2"></td>
                    {{-- 7 --}}
                    {{-- 8 --}}
                </tr>
                <tr>
                    <td colspan="4"></td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    <td colspan="2" style="text-align: right">
                        <div style="height: 25px;">
                        &nbsp;
                    </div>
                </td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    {{-- 6 --}}
                    {{-- 7 --}}
                    <td colspan="2" style="text-align: center"></td>
                    {{-- 8 --}}
                </tr>
                <tr>
                    <td colspan="4"></td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    <td colspan="2" style="text-align: right; padding-right:10px">

                        {{-- jakarta --}}
                            {{ $qe->repaid_collect }}
                            {{ $qe->place_and_date_issue }}
                    </td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    {{-- 6 --}}
                    {{-- 7 --}}
                    <td colspan="2" style="text-align: left; padding-left: 58px; padding-top: 15x">, {{ $qe->by }}</td>
                    {{-- 8 --}}
                </tr>

                <tr>
                    <td>
                        <div style="height: 105px;">
                            &nbsp;
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="3"></td>
                    {{-- 1 --}}
                    {{-- 2 --}}
                    {{-- 3 --}}
                    <td colspan="2"></td>
                    {{-- 4 --}}
                    {{-- 5 --}}
                    <td colspan="3" style="text-align: left; padding-top: 20px; padding-left:10px"> {{ $qe->as_agent }}</td>
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
