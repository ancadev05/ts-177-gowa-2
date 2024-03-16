@extends('tampilan.tema_utama')

{{-- title --}}
@section('title')
    From A
@endsection
{{-- /title --}}

{{-- konten --}}
@section('konten')
    <div class="kertas border shadow mb-3" id="print">
        <div class="mb-2">
            <p class="text-center">Form A <br>NOMOR PERTANDINGAN</p>
        </div>
        <table>
            <tr>
                <td>Nama Kontingen</td>
                <td>: Gowa A</td>
            </tr>
            <tr>
                <td>Alamat Kontingen</td>
                <td>: Kabupaten Gowa</td>
            </tr>
            <tr>
                <td>No Whatsapp</td>
                <td>: 08123456789</td>
            </tr>
            <tr>
                <td>Jumlah Peserta</td>
                <td>: 26 orang</td>
            </tr>
        </table>
    </div>

    <button href="#" class="btn btn-sm btn-success d-block m-auto" onclick="return printArea(print)">Download</button>
@endsection
