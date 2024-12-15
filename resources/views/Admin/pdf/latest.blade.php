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

        .account-details1 {
            display: flex;
            flex-direction: column;
        }

        .inner-data {
            display: flex;
            justify-content: space-between;
            align-items: flex-start
        }

        .inner1 {
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

        @media screen and (max-width: 768px) {}

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
        <img class="object-cover" width="100%" src="{{ asset('image/logo.png') }}" alt="">
        <div class="headers">
            <div class="account-statement">
                <h2 class="text-center">كشف حساب</h2>
                <h2 class="text-center">Statement of Account</h2>
                <div class="account-details1">
                    @foreach ($otherTransactions as $tran)
                        <p>Product: {{ $tran->product->name }}</p>
                        <p>Customer TRN:</p>
                        <p>Address: {{ $tran->product->address }}</p>
                    @endforeach
                </div>
            </div>
            <div class="personal-info">
                <div class="inner-data">
                    <div class="inner1">
                        <p>Date: {{ $otherTransactions[0]->product->date ?? 'N/A' }}</p>
                        <p>Branch: Dubai Mall branch</p>
                        <p>Tel. no.</p>
                        <span class="pages">
                            <p>Pages: 30</p>
                        </span>
                        <p>Currency: UAE DIRHAM</p>
                        <p>Account No.: {{ $otherTransactions[0]->product->account_number ?? 'N/A' }}</p>
                        <p>Interest Payout: Monthly</p>
                        <p>IBAN: {{ $otherTransactions[0]->product->iban ?? 'N/A' }}</p>
                        <p>Account Type: {{ $otherTransactions[0]->product->type ?? 'N/A' }}</p>
                    </div>
                    <div class="inner1">
                        <p>تاريخ: {{ $otherTransactions[0]->product->date ?? 'N/A' }}</p>
                        <p>فرع: فرع دبي مول</p>
                        <p>رقم الفاكس</p>
                        <p>الصفحات: 30</p>
                        <p>العملة: درهم إماراتي</p>
                        <p>رقم الحساب</p>
                        <p>الفائدة المدفوعة: شهرياً</p>
                        <p>رقم الأيبان</p>
                        <p>نوع الحساب</p>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="text-center">Statement of Account for the Period of {{ $otherTransactions[0]->vdate }} to
            {{ $otherTransactions[0]->date }}</h3>


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
                @foreach ($otherTransactions as $transaction)
                    <tr>
                        <td>{{ $transaction->product->date }}</td>
                        <td>{{ $transaction->description }}</td>
                        <td>{{ $transaction->debit }}</td>
                        <td class="right-align">{{ $transaction->credit }}</td>
                        <td class="right-align">{{ $transaction->balance }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <div class="footer">
            <div class="footer-top">

                <div>
                    <p>CARRIRED FORWARD</p>
                    <p>{{ $otherTransactions->last()->balance }}</p>
                </div>

            </div>
            <img src="{{ asset('image/footer1.JPG') }}" width="100%" alt="">
            <img class="footer-img" src="{{ asset('image/footer2.JPG') }}" width="100%" alt="">
            <div class="footer-bottom">
                <div>
                    <p>Emirates NBD Bank (P.J.S.C.) is licensed by the Central Bank of the UAE.</p>
                    <p>Head Office: Baniyas Road, Deira, PO Box 777, Dubai UAE</p>
                    <p>Tel: +971 600540000, www.emiratesnbd.com</p>
                    <p>Registered Details: Emirates NBD Bank (PJSC)</p>
                    <p>Paid Up Capital AED 6,316,598,000</p>
                    <p>Commercial Registration No. 1013450</p>
                    <p>Tax Registration Number 100035307600003</p>
                </div>

                <div class="second-div">
                    <p>بنك الإمارات دبي الوطني ش.م.ع مرخص من قبل مصرف الإمارات العربية المتحدة المركزي.</p>
                    <p>المكتب الرئيسي: شارع بني ياس، ديرة، صندوق بريد 777، دبي، الإمارات العربية المتحدة</p>
                    <p>هاتف: 600540000 971+</p>
                    <p>www.emiratesnbd.com</p>
                    <p>تفاصيل سجل البنك: بنك الإمارات دبي الوطني (ش.م.ع)</p>
                    <p>رأس المال المدفوع: ٦,٣١٦,٥٩٨,٠٠٠ درهم</p>
                    <p>رقم التسجيل التجاري: ١٠١٣٤٥٠</p>
                    <p>رقم التسجيل الضريبي: ١٠٠٠٣٥٣٠٧٦٠٠٠٠٣</p>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

    <script>
        console.log('testing');
        window.onload = function() {
            console.log("test");

            const element = document.getElementById('content');
            const options = {
                margin: 1,
                filename: 'Statement_of_Account.pdf',
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    orientation: 'portrait'
                }
            };

            html2pdf().set(options).from(element).save().then(() => {
                // Close the window after saving
                window.close();
            });
        };
    </script>
</body>

</html>
