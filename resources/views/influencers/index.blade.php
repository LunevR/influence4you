@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
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
                            <td colspan="4">No one influencer not found</td>
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

            <div style="float:left">
                {{ $influencers->links() }}
            </div>
            <div style="float:right">
                <a href="{{ route('influencers.export') }}" class="btn btn-primary">PDF export</a>
            </div>
        </div>
    </div>
</div>
@endsection
