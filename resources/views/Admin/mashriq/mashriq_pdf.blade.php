<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Calibri:wght@300;400;600&display=swap" /> --}}
    <link href="https://fonts.cdnfonts.com/css/calibri-light" rel="stylesheet">

    <title>Bank Statement</title>
    <style>
        :root {
            --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC",
                "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei",
                "Source Han Sans CN", sans-serif;
        }

        .pdf-container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 11.69in;
            /* Full height of an A4 page */
            padding: 0 0.5in;
            /* Adjust margins */
            box-sizing: border-box;
        }



        .bottom {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            width: 100%;
        }

        #content {
            margin: 0.3in !important;
            flex: 1;
            /* overflow: hidden; */
            bottom: 0;
            page-break-inside: auto;
            font-family: 'Calibri', sans-serif;
            /* Corrected font-family syntax */
            font-size: 10px;
        }

        @media print {
            #content {
                margin: 0.5in !important;
                font-family: 'Calibri', sans-serif;
                /* Corrected font-family syntax */
                font-size: 10px;
            }

            /* Add logo for every page */
            .logo img {
                width: 200px;
            }

        }

        body {
            margin: -52px 0.5in !important;
            padding: 0;
            font-family: "Calibri, sans-serif";
            /* font-size: 10.199999809265137px; */
            font-weight: 600;
            /* background-color: #f8f8f8; */
        }

        .container {
            margin: 20px auto;
            padding: 10px;
        }

        .logo {
            text-align: right;
            margin-bottom: 20px;
        }

        .logo img {
            width: 200px;/ Adjust logo size /
        }

        .details {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
        }

        .details-left {
            flex: 1;
        }

        .details-right {
            text-align: right;
            flex: 1;
        }

        .details-right p {
            border-bottom: 2px solid black;
            padding-bottom: 5px;
            margin: 5px 0;
        }

        .details-left p {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .account-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .account-info div {
            flex: 1;
        }

        .account-info div:last-child {
            text-align: right;
        }

        .description {
            margin-top: 20px;
            font-size: 14px;
            line-height: 1.5;
            color: #555;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
            text-align: left;
            font-family: "Calibri"
        }

        table tr {
            border-bottom: 1px solid #646464;
        }

        .page-number {
            position: relative;
            bottom: 40px;
            top: 100px;
            text-align: center;
            font-size: 10px;
            color: gray;
            text-align: center;
        }

        @media print {
            .page {
                page-break-after: always;
            }
        }

        /* new */

        table th,
        table td {
            padding: 10px;
            text-align: left;
            font-size: 10px;
        }

        table th {
            font-weight: 200;
            color: #555;
        }


        table td {
            word-wrap: break-word;
        }

        table tr:last-child td {
            border-bottom: none;
        }



        @media screen and (max-width: 768px) {
            .details {
                flex-direction: column;
                align-items: flex-start;
            }

            .details-right {
                text-align: left;
            }

            table th,
            table td {
                font-size: 12px;
                padding: 8px;
            }
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #555;
            position: fixed;
            bottom: 10px;
        }

        .main {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .account-details span {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid black;
        }

        .person-details {
            font-size: 12px;
            font-family: 'Calibri';
            width: 50%;
            line-height: 20px;

        }

        .account-details {
            display: flex;
            flex-direction: column;
            width: 50%;
            font-size: 12px;
            font-family: 'Calibri';
            background: rgba(238, 245, 245, 0.31)
        }

        .acount-num p {
            margin: 0px 0 !important;
        }

        p {
            font-size: 10px;
            font-family: "Calibri"
        }

        .opening {
            border-top: 2px solid black;
            border-bottom: 1px solid black;
            padding: 8px 0;

        }

        .opening-text {
            display: flex;
            justify-content: space-between;
            margin: auto;
            width: 80%;

        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            position: relative;
            bottom: 10px;
            margin-top: 160px;
        }

        .second-div {
            text-align: end;
        }

        .no-padding {
            padding: 2px 0;
            margin: 0;
            font-size: 13px;
        }

        @media print {
            .footer-bottom {
                position: fixed;
                bottom: 0;
                /* width: 100%; */
                top: 0;
                /* text-align: center;
                display: flex; */
                right: 0;
            }
            .footer {
            position: relative; / Change to relative /
            margin-top: auto; / Push footer to the bottom /
            text-align: center; / Center the footer text /
            font-size: 10px; / Adjust font size /
            color: gray; / Footer text color /
        }

            /* Ensure footer only appears on the last page */
            .footer-bottom:not(:last-of-type) {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="pdf-container">

        <div id="content" style=" height:100% !important">
            <div class="logo">
                <header> <img src="{{ asset('image/logo_update.png') }}" alt="Bank Logo"> </header>
            </div>
            <div class="container-fluid mt-0">
                <!-- Logo Section -->


                <div class=" row main">

                    <div class="person-details">
                        <p><strong>ISLAMIC BANKING</strong></p>
                        {{-- @dd($transactions) --}}
                        {{-- @foreach ($transactions as $mahqTran) --}}
                        {{-- @dd($mahqTran->product->name) --}}
                        <p><strong>{{ $transactions[0]->product->name }}</strong></p>
                        <p>
                        <p class="address-details"><strong>{!! nl2br(e(str_replace(',', "\n", $transactions[0]->product->address))) !!}</strong></p>
                        </p>
                        {{-- @endforeach --}}
                        {{-- <p><strong>AlKuwait Street aghaadir Building 1st floor Al Mas</strong></p>
                        <p><strong>AlMankhool-Dubai-United ArabEmirates</strong></p>
                        <p><strong>Dubai</strong></p>
                        <p><strong>AE</strong></p> --}}
                    </div>
                    <div class="account-details  ">
                        <span>
                            <p style="color: gray"><strong>Current account statement</strong></p>
                            <p><strong>كشف الحساب الجاري</strong></p>
                        </span>
                        <span class="acount-num">
                            <p class="no-padding" style="color: gray;font-weight:100">Account Number</p>
                            <p class="no-padding"><strong>{{ $transactions[0]->product->account_number }}</strong></p>
                            <p class="no-padding"><strong>AED</strong></p>
                            <p>رقم الحساب</p>
                        </span>
                        <span class="account-num">
                            <p class="no-padding" style="color: gray;font-weight:100">IBAN</p>
                            <p class="no-padding"><strong>{{ $transactions[0]->product->iban }}</strong></p>
                            <p class="no-padding"><strong>ايبان</strong></p>
                        </span>
                        <span class="accout-num">
                            <p class="no-padding" style="color: gray;font-weight:100">Customer</p>
                            <p class="no-padding"><strong>{{ $transactions[0]->product->contact }}</strong></p>
                            <p class="no-padding">رقم تعريف العميل</p>
                        </span>
                        <p style="color:gray;font-family:Calibri;font-size:7px ;font-weight:200 ; margin-bottom:0px">
                            Masreq neo is part of mashreqbank PSC is regulated by the central bank of the united arab
                            emirates</p>

                        <p style="color:gray;font-family:Calibri;font-size:7px ;text-align:right;font-weight:200">
                            العراق
                            مو هو منه في من الصرف PSC وجمع الرقابة البنك المركزي لدولة الإمارة</p>
                    </div>

                </div>
            </div>

            <!-- Description -->
            <div class="container-fluid">
                <span style="font-size: 10px;font-family:Calibri;font-weight:200;color:gray">Dear Customer.</span>
                <p
                    style="color: rgba(128, 128, 128, 0.924);font-size: 10px;font-family:Calibri;font-weight:100;line-height:18px">
                    Mashreq
                    including its domestic and foreign branches, is
                    committed and keen on ensuring ful compliance with allapplicable
                    laws, regulations and sanction<br />requirements and would lke
                    to remind its customers of the restrictions that the bank has in
                    place on customer activity related to sanctioned countries<br />Kindy
                    visit mashreq.com/sanctions for further detals.
                <p>
                <p style="color: gray;display:flex;gap:8px">Statement for period <span
                        style="color: black">{{ $transactions[0]->date }}</span> to <span
                        style="color: black">{{ $transactions[0]->date }}</span></p>
            </div>

            <!-- Transactions Table -->
            <div class="container-fluid">
                <div class="table-container-fluid col-8" style="color: gray">
                    @php
                        // Split transactions into chunks of 10
                        $chunks = array_chunk($transactions, 10);
                        // dd($chunks)
                        $pageNumber = 1;
                    @endphp
                    @foreach ($chunks as $index => $chunk)
                        <?php
                        $total = count($chunks);
                        // dd($total);
                        ?>
                        <table style="margin-top: 7%">
                            @if ($index == 0)
                                <thead>
                                    <tr>
                                        <th>Date<br>التاريح</th>
                                        <th>Transaction<br>المعاملات</th>
                                        <th>Reference No<br>الرقم المرجعي</th>
                                        <th>Debit<br>قيور</th>
                                        <th>Credit<br>قيور دائنه</th>
                                        <th>Balance<br>الرصيد</th>
                                    </tr>
                                </thead>
                            @endif
                            <tbody>
                                @if ($index == 0)
                                    <tr>
                                        <td></td>
                                        <td>Opening Balance</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{ $openingBalance }}</td>
                                    </tr>
                                @endif
                                @foreach ($chunk as $tran)
                                    <tr>
                                        <td valign="top" style="white-space: nowrap;">{{ $tran->date }}</td>
                                        <td valign="top">{{ $tran->transactiontype_id }}</td>
                                        <td valign="top">{{ $tran->reference }}</td>
                                        <td valign="top">{{ $tran->debit == 0 ? '-' : $tran->debit }}</td>
                                        <td valign="top">{{ $tran->credit == 0 ? '-' : $tran->credit }}</td>
                                        <td valign="top">{{ $tran->balance }}</td>
                                    </tr>
                                @endforeach


                                @php
                                    $transactions = collect($transactions);
                                    $totalDebit = $transactions->sum(function ($transaction) {
                                        return (float) $transaction['debit'];
                                    });
                                    $totalCredit = $transactions->sum(function ($transaction) {
                                        return (float) $transaction['credit'];
                                    });
                                @endphp
                                @if ($index == $total - 1)
                                    <tr>
                                        <td valign="top" style="white-space: nowrap;"></td>
                                        <td valign="top"></td>
                                        <td valign="top"></td>
                                        <td valign="top">{{ $totalDebit }}</td>
                                        <td valign="top">{{ $totalCredit }}</td>
                                        <td valign="top"></td>
                                    </tr>
                                @endif
                                @if ($index == $total - 1)
                                    <tr>

                                        <th></th>
                                        <th>Closing Balance</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>{{ $closingBalance }}</th>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        @if (!$loop->last)
                            <div class="page-number">page {{ $index + 1 }} of {{ $total }} </div>
                            <div style="page-break-after: always;"></div>
                            <div class="logo" style="padding-top: 30px">
                                <header> <img src="{{ asset('image/logo_update.png') }}" alt="Bank Logo"> </header>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <!-- Footer -->
            <div class="footer-bottom" style="color: gray">
                <div class="bottom">
                    <div>
                        <p style="font-family:Calibri;font-size:9px ;font-weight:100">You should verify the items and
                            balance shown on this statement of account.</p>
                        <p style="font-family:Calibri;font-size:9px ;font-weight:100">Report any discrepancies to the
                            bank in writing within 14 days of the date, otherwise, the
                            content
                            will be assumed to be accurate.</p>
                        <p style="font-family:Calibri;font-size:9px ;font-weight:100">All charges and conditions are
                            subject to change.</p>
                        <p style="font-family:Calibri;font-size:9px ;font-weight:100">Please note that for foreign
                            currency amounts, AED balances are indicative only.</p>
                    </div>
                    <div class="second-div">
                        <p>يجب عليك التحقق من العناصر والأرصدة الموضحة في كشف الحساب هذا.</p>
                        <p>وإبلاغ البنك كتابيًا بأي اختلافات خلال 14 يومًا من التاريخ، وإلا فسيتم افتراض أن المحتوى
                            دقيق.
                        </p>
                        <p>جميع الرسوم والشروط قابلة للتغيير.</p>
                        <p>يرجى ملاحظة أنه بالنسبة للمبالغ بالعملة الأجنبية فإن الرصيد بالدرهم الإماراتي هو إرشادي فقط.
                        </p>
                    </div>
                </div>
            </div>
            <div style="text-align: center; color: gray;">page {{ $index + 1 }} of {{ $total }}</div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

        <script>
            window.onload = function() {
                const element = document.getElementById('content');
                const options = {
                    margin: [1, 1, 1, 1],
                    filename: 'Statement_of_Account.pdf',
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        format: 'a4',
                        orientation: 'portrait',
                        putOnlyUsedFonts: true,
                        floatPrecision: 16,
                    }
                };
                html2pdf().set(options).from(element).save().then(() => {
                    window.close();
                });
            };

            // document.addEventListener("DOMContentLoaded", function() {
            //     const totalPages = Math.ceil(document.body.scrollHeight / window.innerHeight);
            //     document.querySelectorAll('.page-number .page').forEach((page, index) => {
            //         page.textContent = index + 1;
            //     });
            // });
        </script>
</body>

</html>
