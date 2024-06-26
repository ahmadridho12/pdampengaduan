@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <style>
        .table {
            background-color: #e6f7ff; /* Light blue background color */
        }
        .table th {
            background-color: #b3e0ff; /* Slightly darker blue for header */
        }
        .table tr:nth-child(even) {
            background-color: #f2f9ff; /* Light blue for even rows */
        }
        .badge-danger {
            background-color: red;
            color: white;
            padding: 5px;
            text-decoration: none;
            border-radius: 4px;
        }
        .badge-warning {
            background-color: orange;
            color: white;
            padding: 5px;
            text-decoration: none;
            border-radius: 4px;
        }
        .badge-success {
            background-color: green;
            color: white;
            padding: 5px;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
@endsection

@section('header', 'Data Pengaduan')

@section('content')
    <table id="pengaduanTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Laporan</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Wilayah</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $k => $v)
            <tr>
                <td>{{ $k += 1 }}</td>
                <td>{{ $v->kode_laporan }}</td>
                <td>{{ $v->tgl_pengaduan->format('d-M-Y') }}</td>
                <td>{{ $v->nama }}</td>
                <td>{{ $v->wilayah_kejadian }}</td>
                <td>
                    @if ($v->status == '0')
                        <a href="" class="badge badge-danger">Pending</a>
                    @elseif($v->status == 'proses')
                        <a href="" class="badge badge-warning text-white">Proses</a>
                    @else
                        <a href="" class="badge badge-success">Selesai</a>
                    @endif
                </td>
                <td><a href="{{ route('pengaduan.show', $v->id_pengaduan) }}" style="text-decoration: underline">Lihat</a></td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pengaduanTable').DataTable();
        });
    </script>
    
@endsection
