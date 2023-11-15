@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MANAGER PAGE') }}</div>
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="query" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
                
                @if(isset($results))
                    <h3>Search Results</h3>
                    @if($results->isEmpty())
                        <p>No results found.</p>
                    @else
                        <ul>
                            @foreach($results as $result)
                                <li><a href="{{ asset('uploads/filepath/' . $result->filepath) }}" target="_blank" >{{$result->filepath}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
@endsection