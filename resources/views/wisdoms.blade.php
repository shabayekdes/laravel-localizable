@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.wisdoms')</div>

                <div class="card-body">

                    <ul>
                        @foreach ($wisdoms as $wisdom)
                        <li>{{ $wisdom->id }} - {{ $wisdom->content }}</li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
