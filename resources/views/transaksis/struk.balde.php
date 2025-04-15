<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: auto;
        }
        .header, .footer {
            text-align: center;
        }
        .footer {
            margin-top: 30px;
            font-size: 0.8em;
            color: gray;
        }
        .details {
            margin-top: 20px;
        }
        .details td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Struk Pembelian</h2>
            <p>Terima kasih telah berbelanja!</p>
        </div>

        <div class="details">
            <table width="100%">
                <tr>
                    <td>Nama Barang</td>
                    <td>: {{ $transaksi->barang->nama }}</td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: {{ $transaksi->jumlah }}</td>
                </tr>
                <tr>
                    <td>Harga Satuan</td>
                    <td>: Rp. {{ number_format($transaksi->harga, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>: Rp. {{ number_format($transaksi->total, 0, ',', '.') }}</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Toko Anda</p>
        </div>
    </div>
</body>
</html>
