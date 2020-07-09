@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Destination</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Kota/Kab Asal</td>
                                <td>Kota/Kab Tujuan</td>
                                <td>Berat</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $origin->title }}</td>
                                <td>{{ $destination->title }}</td>
                                <td>{{ $weight }}gr</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @foreach ($result as $cost)
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $cost[0]['name'] }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Layanan</td>
                                    <td>Estimasi Hari</td>
                                    <td>Ongkir</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cost[0]['costs'] as $cost)
                                    <tr>
                                        <td>{{ $cost['description'] }} ({{$cost['service']}})</td>
                                        <td>{{ $cost['cost'][0]['etd'] }}</td>
                                        <td>Rp{{ number_format($cost['cost'][0]['value'], 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
@endsection
