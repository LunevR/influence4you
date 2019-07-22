@extends('layouts.export')

@section('content')
    <h1>Influencers</h1>
    <table width="100%" border="1" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @if(count($influencers) === 0)
                <tr>
                    <td colspan="4">No influencer has been found</td>
                </tr>
            @else
                @foreach($influencers as $influencer)
                    <tr>
                        <td>{{ $influencer->id }}</td>
                        <td>{{ $influencer->name }}</td>
                        <td>{{ $influencer->age }}</td>
                        <td>{{ $influencer->rating }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
