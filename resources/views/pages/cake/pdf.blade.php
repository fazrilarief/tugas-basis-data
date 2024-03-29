<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>Invoice - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
        body {
            background: #ffffff;
            margin-top: 20px;
        }

        .text-danger strong {
            color: #9f181c;
        }

        .text-center {
            text-align: center;
        }

        .receipt-main {
            background: #ffffff none repeat scroll 0 0;
            font-family: open sans;
        }

        .receipt-main p {
            color: #333333;
            font-family: open sans;
            line-height: 1.42857;
        }

        .receipt-footer h1 {
            font-size: 15px;
            font-weight: 400 !important;
            margin: 0 !important;
        }

        /* .receipt-main::after {
            background: #414143 none repeat scroll 0 0;
            content: "";
            height: 5px;
            left: 0;
            position: absolute;
            right: 0;
            top: -13px;
        } */

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .table-bordered,
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #ddd;
            /* Warna dan ketebalan garis sesuaikan kebutuhan */
        }

        .table-bordered th,
        .table-bordered td {
            padding: 8px;
            /* Sesuaikan padding sesuai kebutuhan */
        }

        .receipt-main thead th {
            background-color: #333333;
            color: #ffffff;
        }

        .receipt-right h5 {
            font-size: 16px;
            font-weight: bold;
            margin: 0 0 7px 0;
        }

        .receipt-right p {
            font-size: 12px;
            margin: 0px;
        }

        .receipt-right p i {
            text-align: center;
            width: 18px;
        }

        .receipt-main td {
            padding: 9px 20px !important;
        }

        .receipt-main th {
            padding: 13px 20px !important;
        }

        .receipt-main td {
            font-size: 13px;
            font-weight: initial !important;
        }

        .receipt-main td p:last-child {
            margin: 0;
            padding: 0;
        }

        .receipt-main td h2 {
            font-size: 20px;
            font-weight: 900;
            margin: 0;
            text-transform: uppercase;
        }

        .receipt-header-mid .receipt-left h1 {
            font-weight: 100;
            margin: 34px 0 0;
            text-align: right;
            text-transform: uppercase;
        }

        .receipt-left p {
            font-weight: 100;
            margin: 10px 0 0;
            text-align: right;
            text-transform: uppercase;
        }

        .receipt-header-mid {
            margin: 24px 0;
            overflow: hidden;
        }

        #container {
            background-color: #dcdcdc;
        }

        .header-content {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .header-content img,
        .header-content h1 {
            margin-left: 10px;
            margin-bottom: 0px
                /* Untuk memberikan sedikit jarak antara gambar dan teks */
        }
    </style>
</head>

<body>
    <div class="col-md-12">
        <div class="row">
            <div class="receipt-main">
                <header>
                    <table class="text-center">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ public_path('img/logo-unpam.png') }}" alt=""
                                        style="width: 7rem; heigth: auto;">
                                </td>
                                <td>
                                    <h1 class="text-center">TUGAS BASIS DATA 1</h1>
                                    <br>
                                    <h3 class="text-center">Kelompok 10 - Kue</h3>
                                </td>
                                <td>
                                    <img src="{{ public_path('img/android-chrome-512x512.png') }}" alt=""
                                        style="width: 7rem; heigth: auto;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </header>
                <hr>
                <br>
                <br>
                <h3><u>Anggota Kelompok</u></h3>
                <ol>
                    <li>Fazril Arief Nugraha - 201011401840</li>
                    <li>Fazril Arief Nugraha - 201011401840</li>
                    <li>Fazril Arief Nugraha - 201011401840</li>
                    <li>Fazril Arief Nugraha - 201011401840</li>
                </ol>
                <br>
                <br>
                <div>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Nama Kue</th>
                                <th>Harga</th>
                                <th>Foto</th>
                                <th>Dibuat Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cakes as $cake)
                                <tr>
                                    <td>{{ $cake->nama }}</td>
                                    <td>{{ $cake->harga }}</td>
                                    <td>
                                        <img src="{{ public_path('fotoKue/' . $cake->foto) }}" alt="Foto Kue"
                                            style="width: 8rem; heigth: auto;">
                                    </td>
                                    <td>{{ $cake->creator_name . ' - ' . $cake->creator_nim }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <br>
        <br>
        <footer class="text-center">
            <p><strong>Dibuat oleh :</strong> System || <strong>Dicetak oleh :</strong> {{ auth()->user()->name }}</p>
        </footer>
</body>

</html>
