@extends('layouts.app')

@section('content')
<section class="section about-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in Member!
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
