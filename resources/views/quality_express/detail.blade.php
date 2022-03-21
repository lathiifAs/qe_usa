<!DOCTYPE html>
<html lang="en">
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
                    <td style="width:50%">LOGO Perusahaan</td>
                    <td style="text-align: right; width:50%"><h2>BILL OF LADING</h2></td>
                </tr>
            </table>
            <hr>
            <table border="1" style="border-color: black; border-collapse: collapse; width:100%">
                <tr >
                    <td rowspan="2" colspan="3"><b><h5>SHIPPER / EXPORTER :</h5></b>
                    <p>
                    {{ $qe->shipper }}
                    </p>
                </td>
                    <td ><b><h5>EXPORT REFERENCES :</h5></b>
                    <p>
                        {{ $qe->export_references }}
                    </p>
                    </td>
                    <td ><b><h5>BILL OF LADING NO :</h5></b>
                    <p>
                        {{ $qe->bill_of_lading_no }}
                    </p>
                    </td>
                </tr>
                <tr >
                    <td ><b><h5>FMC NO. :</h5></b>
                    <p>
                        {{ $qe->fmc_no }}
                    </p>
                </td>
                    <td ><b><h5>NO OF ORIGINAL
                        B(S)/L(S) SIGNED :</h5></b>
                    <p>
                        {{ $qe->no_of_original_signed }}
                    </p>
                    </td>
                </tr>
                <tr >
                    <td  colspan="2"><b><h5>CONSIGNEE :</h5></b>
                    <p>
                        {{ $qe->consignee }}
                    </p>
                    </td>
                    <td  colspan="3"><b><h5>FOR DELIVERY PLEASE APPLY TO :</h5></b>
                    <p>
                        {{ $qe->issued_by }}
                    </p>
                    </td>
                </tr>
                <tr >
                    <td  colspan="2"><b><h5>NOTIFY PARTY :</h5></b>
                    <p>
                        {{ $qe->notify_party }}
                    </p>
                    </td>
                    <td  colspan="3"><b><h5>ALSO NOTIFY (NAME AND FULL ADDRESS) / DOMESTIC ROUTING :</h5></b>
                    <p>
                        {{ $qe->also_notify }}
                    </p>
                    </td>
                </tr>
                <tr >
                    <td ><b><h5>VESSEL VOY :</h5></b>
                    <p>
                        {{ $qe->vessel_voy }}
                    </p>
                    </td>
                    <td ><b><h5>PORT OF LOADING :</h5></b>
                    <p>
                        {{ $qe->part_of_loading }}</p>
                    </td>
                    <td colspan="2"><b><h5>PIER OR PLACE OR RECEIPT :</h5></b>
                    <p>
                        {{ $qe->pier_or_place }}
                    </p>
                    </td>
                    <td ><b><h5> TYPE OF MOVE :</h5></b>
                    <p>
                        {{ $qe->type_of_move }}
                    </p>
                    </td>
                </tr>
                <tr >
                    <td ><b><h5>PORT OF DISCHARGE :</h5></b>
                    <p>
                        {{ $qe->port_of_discharge }}
                    </p>
                    </td>
                    <td ><b><h5>PLACE OF DELIVERY :</h5></b>
                    <p>
                        {{ $qe->place_of_delivery }}
                    </p>
                    </td>
                    <td colspan="3"><b><h5>FINAL DESTINATION (FOR THE MERCHANT'S REFERENCES ONLY) :</h5></b>
                    <p>
                        {{ $qe->final_destination }}
                    </p>
                    </td>
                </tr>
                <tr >
                    <td ><b><h5>CONTAINER NO. MARKS & NOS<br> SEAL NO : :</h5></b>
                    <p>
                        {{ $qe->container_no }}
                    </p>
                    </td>
                    <td ><b><h5>NO OF PKGS OR CONTAINER :</h5></b>
                    <p>
                        {{ $qe->no_of_pkgs }}
                    </p>
                    </td>
                    <td><b><h5>KIND OF PACKAGES; DESCRIPTION OF GOODS :</h5></b>
                    <p>
                        {{ $qe->kind_of_pkgs }}
                    </p>
                    </td>
                    <td><b><h5>TOTAL GROSS WEIGHT KGS; (POUNDS) :</h5></b>
                    <p>
                        {{ $qe->total_gross_weight }}
                    </p>
                    </td>
                    <td><b><h5>TOTAL MEASUREMENT CBM; (CFT) :</h5></b>
                    <p>
                        {{ $qe->total_measur }}
                    </p>
                    </td>
                </tr>
                <tr >
                    <td colspan="5"><b><h5>TOTAL OF NO PACKAGES :</h5></b>
                    <p>
                        {{ $qe->total_no_pkgs }}
                    </p>
                    </td>
                </tr>
                <tr >
                    <td ><b><h5>FREIGHT AND CHARGES :</h5></b>
                        <p>
                            {{ $qe->freight_and_charges }}
                        </p>
                    </td>
                    <td><b><h5>REPAID &nbsp;&nbsp;&nbsp; COLLECT :</h5></b>
                        <p>
                            {{ $qe->repaid_collect }}
                        </p>
                    </td>
                    <td><b><h5>PLACE AND DATE OF ISSUE :</h5></b></td>
                    <td colspan="2"><b><h5>DATE &nbsp;&nbsp;&nbsp; BY :</h5></b>
                        <p>
                            {{ $qe->place_and_date_issue }} - {{ $qe->by }}
                        </p>
                    </td>
                </tr>
            </table>
        </center>
</body>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> --}}

</html>
