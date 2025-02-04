<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement of Account</title>
    <style>
        @font-face {
            font-family: 'Amiri';
            src: url('{{ public_path('fonts/amiri-regular.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Amiri', Arial, sans-serif;
            /* font-family: Arial, sans-serif;
            font-size: 12px; */
            /* direction: rtl; */
        }

        .container-fluid {
            width: 100%;
            /* height: 200px; */

        }

        .account-statement {
            border-right: 2px solid black !important;
            padding-right: 20px;
            width: 40%;
            margin-right: 10px
        }

        .personal-info {
            width: 56%;
        }

        .container {
            width: 95%;
            margin: auto;
        }

        .header {
            text-align: center;
        }

        .header img {
            height: 50px;
        }

        .account-details,
        .transactions {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .account-details th,
        .account-details td,
        .transactions th,
        .transactions td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .transactions th {
            background-color: #f2f2f2;
        }

        .right-align {
            text-align: right;

        }

        /* .headers {
            display: flex;
            justify-content: space-between
        } */

        .inner-data {
            display: flex;
            justify-content: space-between
        }

        h2,
        h3 {
            font-size: clamp(1rem, 2vw, 2.5rem);
        }

        p {
            font-size: clamp(0.5rem, 1vw, 1.5rem);
        }

        .pages {
            display: flex;
            justify-content: space-between;
        }

        .text-center {
            text-align: center;
        }

        .fix-no,
        .no {
            display: flex;
            justify-content: space-around;
        }

        .footer-top {
            display: flex;
            justify-content: end;
        }

        .footer-top>div {
            display: flex;
            margin-bottom: -18px;

        }

        .footer-top p {
            border-top: 3px solid black;
            border-bottom: 3px solid black;
            border-left: 3px solid black;
            padding: 5px 20px;
        }

        .footer-top div p:last-child {
            border-right: 3px solid black;

        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
        }

        .second-div {
            text-align: end;
        }

        .footer-img {
            margin-top: 40px;
        }

        @media screen and (max-width: 480px) {
            .account-statement {
                border-right: none !important;
                padding-bottom: 20px;
                margin-bottom: 20px;
                border-bottom: 2px solid black !important;
            }

            .headers {
                flex-direction: column;
            }

            .account-statement {
                border-right: none !important;
                padding-bottom: 20px;
                margin-bottom: 20px;
                border-bottom: 2px solid black !important;
                width: 100%;
            }

            .personal-info {
                width: 100%;
            }
        }

        .arabic-text {
            direction: rtl;
            text-align: right;
            font-family: 'Amiri', Arial, sans-serif;
        }

        @media screen and (max-width: 768px) {
            /* .headers {
                flex-direction: column;
            }

            .account-statement {
                border-right: none !important;
                padding-bottom: 20px;
                margin-bottom: 20px;
                border-bottom: 2px solid black !important;
                width: 100%;
            }

            .personal-info {
                width: 100%;
            } */
        }

        @media (min-width: 1200px) {
            .container {
                width: 70%;
            }
        }

        @media (max-width: 1199px) and (min-width: 992px) {
            .container {
                width: 80%;
            }
        }

        @media (max-width: 991px) and (min-width: 768px) {
            .container {
                width: 90%;
                padding: 15px;
            }
        }

        @media (max-width: 767px) and (min-width: 576px) {
            .container {
                width: 95%;
                padding: 10px;
            }
        }

        @media (max-width: 575px) {
            .container {
                width: 100%;
                padding: 5px;
            }
        }
    </style>
</head>

<body>
    {{-- {{dd($data['logo'])}} --}}
    <div class="container-fluid ">
        <img class="object-cover" width="100%" src="{{ $data['logo'] }}" alt="">

        <div class="headers " style="display: flex;">
            <div class="account-statement  ">
                <h2 class="arabic-text text-center">كشف حساب</h2>
                <h2 class="text-center ">Statement of Account</h2>
                <p>Mr. Waqas Ali</p>
                <p>Customer TRN:</p>
                <p>Commercial market</p>
                <p>flat 22</p>
                <p>POST BOX 33</p>
                <div>
                    <p>Pindi</p>
                    <p class="m-0">pak</p>
                </div>
            </div>
            <!-- <div class="" style="height: 200px,border:2px solid red"></div>  -->
            <div class="personal-info ">
                <div class="inner-data">
                    <div>
                        <p>Date</p>
                        <p>Branch</p>
                        <p>Tel. no.</p>
                        <div class="pages">
                            <p>Pages</p>
                            <p>30</p>
                        </div>
                        <p>Currency</p>
                        <p>Account No.</p>
                        <p>Interest Payout</p>
                        <p>IBAN</p>
                        <p>Account Type</p>
                    </div>
                    <div>
                        <p>07/11/2024</p>
                        <p>Dubai Mall branch</p>
                        <div class="fix-no">
                            <p class="arabic-text">رقم الفاكس </p>
                            <p>Fax.no.</p>
                        </div>
                        <div class="no">
                            <p class="arabic-text"> الصفحات </p>
                            <p>No</p>
                            <p>1</p>
                        </div>
                        <p>UAE DIRHAM</p>
                        <p>10289932993283</p>
                        <p>Monthly</p>
                        <p>AE66 0260 0010 1585 1695 701</p>
                        <p>CURRENT ACCOUNT</p>
                    </div>
                    <div>
                        <p class="arabic-text">تاريخ</p>
                        <p class="arabic-text">فرع دبي مول</p>
                        <p class="arabic-text">رقم الفاكس</p>
                        <p class="arabic-text">الرقم</p>
                        <p class="arabic-text">العملة</p>
                        <p class="arabic-text">رقم الحساب</p>
                        <p class="arabic-text">الفائدة المدفوعة</p>
                        <p class="arabic-text">رقم الأ يبان</p>
                        <p class="arabic-text">نوع الحساب</p>
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

        <h3 class="text-center">Statement of Account for the Period of 07-06-2024 to 07-11-2024</h3>

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
            <div class="footer-top">
                <div>
                    <p>CARRIRED FORWARD</p>
                    <p>350000 cr</p>
                </div>
            </div>
            <img src="{{ $data['footerImage1'] }}" width="100%" alt="">
            <img class="footer-img" src="{{ $data['footerImage2'] }}" width="100%" alt="">
            <!-- <p><strong>Bringing you the future of Mobile Banking</strong></p> -->
            <div class="footer-bottom">
                <div>
                    <p>Emrites NBD barsk Enthusiastic and highly skilled Back-End</p>
                    <p>Emrites NBD barsk Enthusiastic and highly skilled</p>
                    <p>Emrites NBD barsk Enthusiastic and </p>
                    <p>Emrites NBD barsk Enthusiastic </p>
                    <p>Emrites NBD barsk Enthusiastic and </p>
                    <p>Emrites NBD barsk Enthusiastic and highly skilled </p>
                </div>
                <div class="second-div">
                    <p class="arabic-text">ها بصورة أكثر عقلانية ومنطقية فيعرضهم هذا لمواجهة الظروف الأليمة، وأكرر بأنه
                        لمن.</p>
                    <p class="arabic-text"> نتيجة لظروف ما قد تكمن السعاده فيما نتحمله م</p>
                    <p class="arabic-text"> الألم الذي ربما تنجم عنه بعض ا </p>
                    <p class="arabic-text">ذه الأفكار المغلوطة ح </p>
                    <p class="arabic-text">ها بصورة أكثر عقلانية ومنطقية فيعرضهم هذا لمواجهة الظروف الأليمة، وأكرر بأنه
                        لمن.</p>
                    <p class="arabic-text"> نتيجة لظروف ما قد تكمن السعاده فيما نتحمله م</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
