<!DOCTYPE html>
<html lang="en">

<style>

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
        <table style="border-color: black; border-collapse: collapse; width:80%">
            <tr>
                <td style="width:50%"></td>
                <td style="text-align: right; width:50%"></td>
            </tr>
        </table>
        <font size="2">
        <table border="0" style="border-color: black; border-collapse: collapse; width:100%; margin-top: 6%; table-layout: fixed;" cellpadding="0" cellspacing="0" >
            <tr>
                <td rowspan="2" style="width: 40%">
                    <p>
                        {{ $qe->shipper }}
                    </p>
                </td>
                <td colspan="3">
                    <p>
                        {{ $qe->export_references }}
                    </p>
                </td>
                <td style="width: 10%">
                    <p>
                        {{ $qe->bill_of_lading_no }}
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>
                        {{ $qe->fmc_no }}
                    </p>
                </td>
                <td style="width: 10%">
                    <p>
                        {{ $qe->no_of_original_signed }}
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="1">
                    <p>
                        {{ $qe->consignee }}
                    </p>
                </td>
                <td>
                    <p>
                    </p>
                </td>
                <td>
                    <p>
                    </p>
                </td>
                <td colspan style="width: 40%">
                    {{ $qe->issued_by }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>
                    </p>
                </td>
                <td colspan="3">
                    <p>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>
                    </p>
                </td>
                <td colspan="3">
                    <p>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>
                        {{ $qe->notify_party }}
                    </p>
                </td>
                <td colspan="3">
                    <p>
                        {{ $qe->also_notify }}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        {{ $qe->vessel_voy }}
                    </p>
                </td>
                <td>
                    <p>
                        {{ $qe->part_of_loading }}</p>
                </td>
                <td colspan="2">
                    <p>
                        {{ $qe->pier_or_place }}
                    </p>
                </td>
                <td>
                    <p>
                        {{ $qe->type_of_move }}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        {{ $qe->port_of_discharge }}
                    </p>
                </td>
                <td style="width: 35%">
                    <p>
                        {{ $qe->place_of_delivery }}
                    </p>
                </td>
                <td colspan="3">
                    <p>
                        {{ $qe->final_destination }}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        {{ $qe->container_no }}
                    </p>
                </td>
                <td rowspan="2">
                    <p>
                        {{ $qe->no_of_pkgs }}
                    </p>
                </td>
                <td>
                    <p>
                        {{ $qe->kind_of_pkgs }}
                    </p>
                </td>
                <td>
                    <p>
                        {{ $qe->total_gross_weight }}
                    </p>
                </td>
                <td>
                    <p>
                        {{ $qe->total_measur }}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                    </p>
                </td>
                <td colspan="3" rowspan="2">
                    <p>
                        {{ $qe->desc_of_goods }}
                    </p>
                </td>
                <td>
                    <p>
                    </p>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
                        <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="1">
                </td>
                <td>
                    {{-- total --}}
                    <p>
                        {{ $qe->total_no_pkgs }}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td style="text-align: right" colspan="3">
                        {{ $qe->repaid_collect }}
                        {{ $qe->place_and_date_issue }}, &nbsp; &nbsp;
                </td>
                <td style="text-align: left">
                    <p>
                        {{ $qe->by }}
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p>
                    </p>
                </td>
                <td style="text-align: right; width:10%; padding-right: 2%" colspan="4">
                    <p>
                        {{ $qe->as_agent }}
                    </p>
                </td>
            </tr>
        </table>
        </font>
    </center>
</body>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> --}}

</html>
