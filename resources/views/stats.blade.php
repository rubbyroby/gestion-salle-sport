@extends('layouts.app')

@section('content')
    <h1>Statistics for {{ $team->name }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Wins</th>
                <th>Losses</th>
                <th>Draws</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $stats['wins'] }}</td>
                <td>{{ $stats['losses'] }}</td>
                <td>{{ $stats['draws'] }}</td>
            </tr>
        </tbody>
    </table>
@endsection
