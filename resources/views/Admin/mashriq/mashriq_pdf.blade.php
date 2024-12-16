<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" />

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
            height: 11.69in; /* Full height of an A4 page */
            padding: 0.5in; /* Adjust margins */
            box-sizing: border-box;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid gray;
            padding-top: 0.2in; /* Adjust padding as needed */
            color: gray;
            flex-shrink: 0; /* Prevents the footer from resizing or moving */
        }

        #content {
            margin: 0.5in !important;
            flex: 1;
            overflow: hidden;
            bottom: 0;
            page-break-inside: auto;
        }

        @media print {
            #content {
                margin: 0.5in !important;
            }
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 0.5in !important;
            padding: 0;
            font-family: Inter, var(--default-font-family);
            /* font-size: 10.199999809265137px; */
            font-weight: 600;
            /* background-color: #f8f8f8; */
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            /* background-color: #fff; */
            /* border: 1px solid #ddd; */
            /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
            /* max-width: auto; */
        }

        .logo {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .logo img {
            width: 200px;
            margin-right: 30px;
            /* Adjust logo size */
        }

        .details {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 15px;
            /* background-color: #f4f4f4; */
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
            font-size: 14px;
            text-align: left;
        }

        table tr {
            border-bottom: 2px solid #555;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
            /* border-bottom: 1px solid #ddd; */
        }

        table th {
            /* background-color: #f4f4f4; */
            font-weight: 500;
            font-size: large;
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
        }

        .main {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .account-details span {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid black;
        }

        .person-details {
            /* display: flex; */
            /* flex-direction: column; */
            /* gap: 5px; */
        }

        .account-details {
            display: flex;
            flex-direction: column;
            width: 60%
                /* gap: 10px; */
        }

        .acount-num {
            /* gap: 10px; */
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

        /* .footer-bottom {
            display: flex;
            justify-content: space-between;
        } */

        .second-div {
            text-align: end;
        }
    </style>
</head>

<body>
    <div class="pdf-container">
        <div id="content">
            <div class="container-fluid">
                <!-- Logo Section -->
                <div class="logo">
                    <img src="{{ asset('image/mahriq2.png') }}" alt="Bank Logo">
                </div>
                <div class=" row main">

                    <div class="person-details col-6">
                        <p><strong>ISLAMIC BANKING</strong></p>

                        {{-- <p>aslam</strong></p> --}}
                        <p><strong>LAKUWAITSTREATJAJSD</strong></p>
                        <p><strong>ALMANKHool</strong></p>
                        <p><strong>Dubai</strong></p>
                        <p><strong>AE</strong></p>
                    </div>
                    <div class="account-details col-6 ">
                        <span>
                            <p><strong>Current account statement</strong></p>
                            <p><strong>كشف الحساب الجاري</strong></p>
                        </span>
                        <span class="acount-num">
                            <p>Account Number</p>
                            <p><strong>019120159118</strong></p>
                            <p><strong>AED</strong></p>
                            <p>رقم الحساب</p>
                        </span>
                        <span>
                            <p>IBAN</p>
                            <p><strong>AEB70330000019120159118</strong></p>
                            <p><strong>ايبان</strong></p>
                        </span>
                        <span>
                            <p>Customer</p>
                            <p><strong>0150111145</strong></p>
                            <p>رقم تعريف العميل</p>
                        </span>

                    </div>

                </div>
            </div>

            <!-- Description -->
            <div class="container-fluid">
                <span>Dear Customer.</span>
                <p style="color: gray">Mashreq including its domestic and foreign branches, is
                    committed and keen on ensuring ful compliance with allapplicable
                    laws, regulations and sanction<br />requirements and would lke
                    to remind its customers of the restrictions that the bank has in
                    place on customer activity related to sanctioned countries<br />Kindy
                    visit mashreq.com/sanctions for further detals.
                <p>
            </div>

            <!-- Transactions Table -->
            <div class="container-fluid">
                <div class="table-container-fluid col-8" style="color: gray">

                    <table>
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
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Opening Balance</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>3092092039</td>
                            </tr>
                            <tr>
                                <td>2024-03-30</td>
                                <td>Value Added Tax - Output - TOC-MAE </td>
                                <td>033DBLC240903362</td>
                                <td>0.05</td>
                                <td>-</td>
                                <td>13,025.48</td>
                            </tr>
                            <tr>
                                <td>2024-03-30</td>
                                <td>Online Local Fund Transfer</td>
                                <td>033DBLC240903362</td>
                                <td>12,000.00</td>
                                <td>-</td>
                                <td>1,025.48</td>
                            </tr>
                            <tr>
                                <td>2024-03-30</td>
                                <td>Funds Transfer Charges</td>
                                <td>033DBLC240903362</td>
                                <td>1.00</td>
                                <td>-</td>
                                <td>1,024.48</td>
                            </tr>
                            <tr>
                                <td>2024-03-30</td>
                                <td>Visa Refund</td>
                                <td>030PE31240922597</td>
                                <td>-</td>
                                <td>577.15</td>
                                <td>1,601.63</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer-bottom" style="color: gray">
                <div>
                    <p>You should verify the items and balance shown on this statement of account.</p>
                    <p>Report any discrepancies to the bank in writing within 14 days of the date, otherwise, the
                        content
                        will be assumed to be accurate.</p>
                    <p>All charges and conditions are subject to change.</p>
                    <p>Please note that for foreign currency amounts, AED balances are indicative only.</p>

                </div>


                <div class="second-div">
                    <p>يجب عليك التحقق من العناصر والأرصدة الموضحة في كشف الحساب هذا.</p>
                    <p>وإبلاغ البنك كتابيًا بأي اختلافات خلال 14 يومًا من التاريخ، وإلا فسيتم افتراض أن المحتوى دقيق.
                    </p>
                    <p>جميع الرسوم والشروط قابلة للتغيير.</p>
                    <p>يرجى ملاحظة أنه بالنسبة للمبالغ بالعملة الأجنبية فإن الرصيد بالدرهم الإماراتي هو إرشادي فقط.</p>
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
                margin: [1, 1, 1, 1],
                filename: 'Statement_of_Account.pdf',
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    format: 'a4',
                    orientation: 'portrait',
                }
            };

            html2pdf().set(options).from(element).save().then(() => {
                window.close();
            });
        };
    </script>

</body>

</html>
