<!DOCTYPE html>
<html lang="en">
<style>

    td.cs {
        padding-top: 15px;
    }

    td.h1 {
        height: 68px;
        overflow: hidden;
    }


    td.h2{
        height: 45px;
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
                    <tr>
                        <td ><br></td>
                        <td ><br></td>
                        <td ><br></td>
                        <td ><br></td>
                        <td colspan="20" ><br></td>
                    </tr>
                    <tr>
                        <td colspan="6" ><b>Shipper's Name and Address</b></td>
                        <td colspan="6" ><b>Shipper Account Number</b></td>
                        <td colspan="12" rowspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="12" class="h1"><br></td>
                    </tr>
                    <tr>
                        <td colspan="6" ><b>Consignee's Name and Address</b></td>
                        <td colspan="6" ><b>Consegnee's Account Number</b></td>
                        <td colspan="12" rowspan="2" ></td>
                    </tr>
                    <tr>
                        <td colspan="12" class="h1"></td>
                    </tr>
                    <tr>
                        <td colspan="12" class="h2"><b>Issuing Carrier's Agent Name and City</b></td>
                        <td colspan="12" rowspan="3" ><br></td>
                    </tr>
                    <tr>
                        <td colspan="6" class="h2" ><b>Agent's IATA Code</b></td>
                        <td colspan="6" ><b>Account No.</b></td>
                    </tr>
                    <tr>
                        <td colspan="12" class="h2" ><b>Airport of Departure (Addr. of First Carrier) and Request Routing</b></td>
                    </tr>
                    <tr>
                        <td class="h2"><b>To</b></td>
                        <td colspan="7" ><b>By First Carrier (Routing and Destination)</b></td>
                        <td ><b>To</b></td>
                        <td ><b>By</b></td>
                        <td ><b>To</b></td>
                        <td ><b>By</b></td>
                        <td ><b>Currency</b></td>
                        <td ><b>CHGS Code</b></td>
                        <td ><b>(WT/VAL) PDD</b></td>
                        <td ><b>(WT/VAL) COLL</b></td>
                        <td ><b>(Other) PDD</b></td>
                        <td ><b>(Other) COLL</b></td>
                        <td colspan="3"><b>Declared Value of Carriage</b></td>
                        <td colspan="3" ><b>Declared Value of Costums</b></td>
                    </tr>
                    <tr>
                        <td colspan="6" class="h2"><b>Airport of Destination</b></td>
                        <td colspan="3" ><b>Start Flight/Date</b></td>
                        <td colspan="3" ><b>End Flight/Date</b></td>
                        <td colspan="4" ><b>Amount of Insurance</b></td>
                        <td colspan="8" ></td>
                    </tr>
                    <tr>
                        <td colspan="21" rowspan="2" style="border:none"><b>Handling Information</b></td>
                        <td colspan="3" ><br></td>
                    </tr>
                    <tr>
                        <td colspan="3" ></td>
                    </tr>
                    <tr>
                        <td colspan="21" rowspan="2" class="h1"></td>
                        <td colspan="3" ><br></td>
                    </tr>
                    <tr>
                        <td colspan="3" ></td>
                    </tr>
                    <tr>
                        <td ><b>No Of Piesces RCP</b></td>
                        <td colspan="2"><b>Gross Weight</b></td>
                        <td><b>Kg/lb</b></td>
                        <td><b>Rate Class</b></td>
                        <td colspan="2"><b>Commodity Item No.</b></td>
                        <td colspan="3" ><b>Chargeable Weight</b></td>
                        <td colspan="2" ><b>Rate / Charge</b></td>
                        <td colspan="5" ><b>Total</b></td>
                        <td colspan="7" rowspan="2" ><b>Nature and Qty of Goods (Incl. Dimensions or Volume)</b></td>
                    </tr>
                    <tr>
                        <td >No Of</td>
                        <td colspan="2" >gross</td>
                        <td>kg</td>
                        <td>rate</td>
                        <td colspan="2" ><br></td>
                        <td colspan="3" ><br></td>
                        <td colspan="2" >&nbsp;rate / charge</td>
                        <td colspan="5" ><br></td>
                    </tr>
                    <tr>
                        <td >No Of</td>
                        <td colspan="2" >gross</td>
                        <td>kg</td>
                        <td>rate</td>
                        <td colspan="2" ><br></td>
                        <td colspan="3" ><br></td>
                        <td colspan="2" >&nbsp;rate / charge</td>
                        <td colspan="5" ><br></td>
                    </tr>
                    <tr>
                        <td colspan="5" ><b>Weight Charge (Prepaid)</b></td>
                        <td colspan="5" ><b>Weight Charge (Collect)</b></td>
                        <td colspan="14" rowspan="3" >Other Charges</td>
                    </tr>
                    <tr>
                        <td colspan="5" ><b>Start Valiation Charge</b></td>
                        <td colspan="5" ><b>End Valiation Charge</b></td>
                    </tr>
                    <tr>
                        <td colspan="5" ><b>Start Tax<b></td>
                        <td colspan="5" ><b>End Tax<b></td>
                    </tr>
                    <tr>
                        <td colspan="5" ><b>Start Total Other Charges Due Agent</b></td>
                        <td colspan="5" ><b>End Total Other Charges Due Agent</b></td>
                        <td colspan="14" rowspan="3" ><b>Signature of Shipper or His Agent</b></td>
                    </tr>
                    <tr>
                        <td colspan="5" ><b>Start Total Other Charges Due Carrier</b></td>
                        <td colspan="5" ><b>End Total Other Charges Due Carrier</b></td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color: rgb(209, 72, 65);"><br></td>
                        <td colspan="5" style="background-color: rgb(209, 72, 65);"><br></td>
                    </tr>
                    <tr>
                        <td colspan="5" ><b>Total Prepaid</b></td>
                        <td colspan="5" ><b>Total Collect</b></td>
                        <td colspan="4" rowspan="2" ><b>Executed on (Date)</b></td>
                        <td colspan="5" rowspan="2" ><b>at (Place)</b></td>
                        <td colspan="5" rowspan="2" ><b>Signiture of Issuing Carrier or itsAgent</b></td>
                    </tr>
                    <tr>
                        <td colspan="5" ><b>Currency Conversion Rate</b></td>
                        <td colspan="5" ><b>CC Charges in Des. Currency</b></td>
                    </tr>
                    <tr>
                        <td  colspan="5" ><b>for Carrier's Use Only at Destination</b></td>
                        <td colspan="5" ><b>Charges at Destination</b></td>
                        <td colspan="4" ><b>Total Collect Charges</b></td>
                        <td colspan="10" ><b></b></td>
                    </tr>
                </tbody>
            </table>
        {{-- </font> --}}
    </center>
</body>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> --}}

</html>
