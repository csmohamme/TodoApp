@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        {{ __('You are logged in!') }}
                        <x-Flash />
                    </div>
                    <div class="card-body">
                        <x-Flash />

                        <form action="/uplode" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" id="">
                            <input type="submit" value="uplode">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
