<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement of Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .container-fluid{
            width: 100%;
            height: 200px;

        }
        .account-statement{
            border-right: 2px solid black !important;
            padding-right: 20px;
        }
        .header, .footer {
            text-align: center;
        }
        .header img {
            height: 50px;
        }
        .account-details, .transactions {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .account-details th, .account-details td, .transactions th, .transactions td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .transactions th {
            background-color: #f2f2f2;
        }
        .right-align {
            text-align: right;

        }
        .headers{
            display: flex;
            justify-content:space-between
        }
        .inner-data{
            display: flex;
            justify-content: space-between
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <img class="object-cover" width="100%" src="{{asset('image/logo.png')}}" alt="">
    </div>
    <div class="headers d-flex">
        <div class="account-statement d-flex flex-col justify-content-center align-items-center">
            <h2>Statement of Account</h2>
            <p>Mr. Waqas Ali</p>
            <p>Customer TRN:</p>
            <p>Commercial market</p>
            <p>flat 22</p>
            <p>POST BOX 33</p>
            <div><p>Pindi</p>
            <p class="m-0">pak</p></div>
        </div>
        {{-- <div class="" style="height: 200px,border:2px solid red"></div> --}}
<div class="personal-info">
<div class="inner-data">
    <div><p>Date</p>
        <p>Branch</p><p>Tel. no.</p><p>Page</p><p>Currency</p>
        <p>Account No.</p>
        <p>Interest Payout</p>
        <p>IBAN</p>
        <p>Account Type</p>
    </div>
<div>
    <p>07/11/2024</p>
    <p>Dubai Mall branch</p>
    <p>رقم الفاكس Fax.no.</p>
    <p>الصفحات No</p>
    <p>UAE DIRHAM</p>
    <p>10289932993283</p>
    <p>Monthly</p>
    <p>AE66 0260 0010 1585 1695 701</p>
    <p>CURRENT ACCOUNT</p>
</div>
<div>
    <p>تاريخ</p>
    <p>فرع دبي مول</p>
    <p>رقم الفاكس</p>
    <p>الرقم</p>
    <p>العملة</p>
    <p>رقم الحساب</p>
    <p>الفائدة المدفوعة</p>
    <p>رقم الأ يبان</p>
    <p>نوع الحساب</p>
</div>
</div>
</div>
    </div>

    <table class="account-details">
        <tr>
            <th>Date</th>
            <td>07/11/2024</td>
            <th>Branch</th>
            <td>DUBAI MALL BRANCH</td>
        </tr>
        <tr>
            <th>Currency</th>
            <td>UAE DIRHAM</td>
            <th>Account No.</th>
            <td>1015851695701</td>
        </tr>
        <tr>
            <th>IBAN</th>
            <td>AE66 0260 0010 1585 1695 701</td>
            <th>Account Type</th>
            <td>Current Account</td>
        </tr>
    </table>

    <h3>Statement of Account for the Period of 07-06-2024 to 07-11-2024</h3>

    <table class="transactions">
        <thead>
            <tr>
                <th>Date</th>
                <th>Description</th>
                <th class="right-align">Debits</th>
                <th class="right-align">Credits</th>
                <th class="right-align">Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>07-06-2024</td>
                <td>POS-PURCHASE<br>HARAM RESTAURANT CONFEC DUBAI:AE</td>
                <td class="right-align">60.00</td>
                <td class="right-align">-</td>
                <td class="right-align">35,288.63</td>
            </tr>
            <tr>
                <td>09-06-2024</td>
                <td>POS-PURCHASE<br>SHUA ALMADINA SPMKT DUBAI:AE</td>
                <td class="right-align">32.00</td>
                <td class="right-align">-</td>
                <td class="right-align">35,256.63</td>
            </tr>
            <tr>
                <td>10-06-2024</td>
                <td>TELEGRAPHIC TRF<br>RMA 20246010006898</td>
                <td class="right-align">100.00</td>
                <td class="right-align">-</td>
                <td class="right-align">35,156.63</td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        <p><strong>Bringing you the future of Mobile Banking</strong></p>
    </div>
</body>
</html>
