<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction History PDF</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .header {
            background-color: #1e3a8a;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .download-button {
            background-color: #16a34a;
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
            margin: 20px auto;
            display: block;
            width: fit-content;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Auction History</h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Lelang</th>
                <th>Barang</th>
                <th>Pemenang</th>
                <th>No Telp</th>
                <th>Harga Jual</th>
                <th>Berakhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lelangs as $index => $lelang)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $lelang->id_lelang }}</td>
                    <td>{{ $lelang->barang->nama_barang }}</td>
                    <td>{{ $lelang->user->nama_lengkap }}</td>
                    <td>{{ $lelang->user->telp }}</td>
                    <td>Rp. {{ number_format($lelang->harga_akhir, 2, ',', '.') }}</td>
                    <td>{{ \Carbon\Carbon::parse($lelang->tgl_lelang)->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
