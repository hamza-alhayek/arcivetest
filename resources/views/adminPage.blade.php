@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADMIN PAGE') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('search') }}" method="GET">
                        <input type="text" name="query" placeholder="اكتب الكلمة المفتاحية">
                        <button type="submit">Search</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
