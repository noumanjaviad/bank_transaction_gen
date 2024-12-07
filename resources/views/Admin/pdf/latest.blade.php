<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement of Account</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .container-fluid {
            width: 100%;
            height: 200px;

        }

        .account-statement {
            border-right: 2px solid black !important;
            padding-right: 20px;
            width: 40%;
            margin-right: 10px;
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

        .headers {
            display: flex;
            justify-content: space-between;
            align-items: flex-start

        }
        .account-details1{
            display: flex;
            flex-direction: column;
        }

        .inner-data {
            display: flex;
            justify-content: space-between;
            align-items: flex-start
        }
        .inner1{
            display: flex;
            flex-direction: column;

        }

        h2,
        h3 {
            font-size: 20px
        }

        p {
            font-size: 10px
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

        @media screen and (max-width: 768px) {
            /* .headers {
                flex-direction: column;
            } */

            /* .account-statement {
                border-right: none !important;
                padding-bottom: 20px;
                margin-bottom: 20px;
                border-bottom: 2px solid black !important;
                width: 100%;
            } */

            /* .personal-info {
                width: 100%;
            } */
        }

        @media (min-width: 1200px) {
            .container {
                width: 95%;
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
    <div class="container" id="content">
        <img class="object-cover" width="100%" src="{{asset('image/logo.png')}}" alt="">

        <div class="headers ">
            <div class="account-statement  ">

                <h2 class="text-center">كشف حساب</h2>
                <h2 class="text-center ">Statement of Account</h2>
                <div class="account-details1">
                    @foreach ($trans as $tran)
                <p>{{$tran->product->name}}</p>
                <p>Customer TRN:</p>
                <p>{{$tran->product->address}}</p>
                @endforeach
            </div>
            </div>
            <!-- <div class="" style="height: 200px,border:2px solid red"></div>  -->
            <div class="personal-info ">
                <div class="inner-data">
                    <div class="inner1">
                        <p>Date</p>
                        <p>Branch</p>
                        <p>Tel. no.</p>
                        <span class="pages">
                            <p>Pages</p>
                            <p>30</p>
                        </span>
                        <p>Currency</p>
                        <p>Account No.</p>
                        <p>Interest Payout</p>
                        <p>IBAN</p>
                        <p>Account Type</p>
                    </div>
                    <div class="inner1">
                        @foreach($trans as $transactionData)
                        <p>{{$transactionData->product->date}}</p>
                        <p>Dubai Mall branch</p>
                        <span class="fix-no">
                            <p>رقم الفاكس </p>
                            <p>Fax.no.</p>
                        </span>
                        <div class="no">
                            <p> الصفحات </p>
                            <p>No</p>
                            <p>1</p>
                        </div>
                        <p>UAE DIRHAM</p>
                        <p>{{$transactionData->product->account_number}}</p>
                        <p>Monthly</p>
                        <p>{{$transactionData->product->iban}}</p>
                        <p>{{$transactionData->product->type}}</p>
                        @endforeach
                    </div>
                    <div class="inner1">
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
                @foreach ($trans as $transaction )
                <tr>
                    <td>{{$transaction->product->date}}</td>
                    <td>{{$transaction->transactiontype_id}}</td>
                    <td>{{$transaction->debit}}</td>
                    <td class="right-align">{{$transaction->credit}}</td>
                    <td class="right-align">{{$transaction->balance}}</td>
                </tr>

            </tbody>
        </table>

        <div class="footer">
            <div class="footer-top">
                <div>
                    <p>CARRIRED FORWARD</p>
                    <p>{{$transaction->balance}}</p>
                    @endforeach
                </div>
            </div>
            <img src="{{asset('image/footer1.JPG')}}" width="100%" alt="">
            <img class="footer-img" src="{{asset('image/footer2.JPG')}}" width="100%" alt="">
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
                    <p>ها بصورة أكثر عقلانية ومنطقية فيعرضهم هذا لمواجهة الظروف الأليمة، وأكرر بأنه لمن.</p>
                    <p> نتيجة لظروف ما قد تكمن السعاده فيما نتحمله م</p>
                    <p> الألم الذي ربما تنجم عنه بعض ا </p>
                    <p>ذه الأفكار المغلوطة ح </p>
                    <p>ها بصورة أكثر عقلانية ومنطقية فيعرضهم هذا لمواجهة الظروف الأليمة، وأكرر بأنه لمن.</p>
                    <p> نتيجة لظروف ما قد تكمن السعاده فيما نتحمله م</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <button id="downloadPDF" style="margin: 20px; display: block;">Download PDF</button> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    {{-- <script>
        document.getElementById('downloadPDF').addEventListener('click', function () {
            const element = document.getElementById('content');
            const options = {
                margin: 1,
                filename: 'Statement_of_Account.pdf',
                html2canvas: { scale: 2 },
                jsPDF: { orientation: 'portrait' }
            };

            html2pdf().set(options).from(element).save();
        });
    </script> --}}
    <script>
        console.log('testing');
        window.onload = function () {
            console.log("test");

            const element = document.getElementById('content');
            const options = {
                margin: 1,
                filename: 'Statement_of_Account.pdf',
                html2canvas: { scale: 2 },
                jsPDF: { orientation: 'portrait' }
            };

            html2pdf().set(options).from(element).save().then(() => {
                // Close the window after saving
                window.close();
            });
        };
    </script>
</body>

</html>
