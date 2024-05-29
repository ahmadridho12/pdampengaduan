<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 5px; margin-top: 0; }
        .header .left-logo { flex: 0 0 auto; }
        
        .header .company-info { text-align: center; flex-grow: 1; }
        .header .company-info h1, .header .company-info h2, .header .company-info p { margin: 0; }
        .header .company-info h3, .header .company-info h2 { margin-bottom: 5px; }
        .header .company-info hr { margin: 10px 0; }
        .content {
        margin: 0 10px;
        margin-top: 0;
        }
        .content table { width: 100%; border-collapse: collapse; }
        .content th, .content td { border: 1px solid #000; padding: 8px; text-align: left; }
        .signature-container { display: flex; justify-content: space-between; margin-top: 50px; }
        .signature { width: 45%; text-align: center; }
        .footer { margin-top: 50px; text-align: center; }
        .footer .signature { display: inline-block; width: 45%; text-align: center; }
        .signature-name {
            margin-bottom: 12px;
        }
        .header.right-logo {
            margin-top: 16px;
            right: 200px;
            position: relative;
        }
        .signature-name1 {
            font-size: smaller;
            font-weight: bold;
}
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('images/logopdam.png') }}" alt="Logo Perusahaan" class="right-logo" style="width: 130px; height: 90px; margin-top: -90px;">
        <div class="company-info">
            <h3>PEMERINTAH KABUPATEN AGAM</h3>
            <h2>PERUSAHAAN DAERAH AIR MINUM</h2>
            <p>JL. Dr. Mohammad Hatta, No. 531, Lubuk Basung <br><span>0812-6660-2112 - 26415</span></p>
            <p style="font-size: smaller;">Website : www.pdam.kabupatenagam.go.id email :agampdam@yahoo.co.id</p>
            <hr>
            <h2>Surat Perintah Kerja Opname <br><span style="font-size: smaller;">(SPKO)</span></h2>
            <p>Nomor {{ $pengaduan->id_pengaduan }} / SPKO/PDAM-AG/LBS/{{ date('m-Y') }}</p>
        </div>
    </div>
    <div class="content">
        <p>Diperintahkan kepada Bagian Perencanaan/Pengawasan Teknik, agar segera diadakan opname dan penelitian ke lokasi dibawah ini:</p>
        <table>
            <tr>
                <td>Judul Laporan</td>
                <td>: {{ $pengaduan->judul_laporan }}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: {{ $pengaduan->nama }}</td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td>: {{ $pengaduan->no_hp }}</td>
            </tr>
            <tr>
                <td>No Sambungan</td>
                <td>: {{ $pengaduan->no_index }}</td>
            </tr>
            <tr>
                <td>Wilayah</td>
                <td>: {{ $pengaduan->wilayah_kejadian }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: {{ $pengaduan->lokasi_kejadian }}</td>
            </tr>
            <tr>
                <td>Tanggal Kejadian</td>
                <td>: {{ \Carbon\Carbon::parse($pengaduan->tgl_kejadian)->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <td>Tanggal Pengaduan</td>
                <td>: {{ \Carbon\Carbon::parse($pengaduan->tgl_pengaduan)->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <td>Uraian Pengaduan</td>
                <td>: {{ $pengaduan->isi_laporan }}</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="signature-container">
        <div class="signature">
            <p class="signature-name1">Lubuk Basung, {{ \Carbon\Carbon::now()->format('d-m-Y') }}</p>
            <p class="signature-name">Perusahaaan Daerah Air Minum <br><span>Kab AGAM</span></p>
            <br><br><br><br>
            <hr>
            <p class="signature-name">(ZALDI, A.Md)</p>
        </div>
    </div>
</body>
</html>
