@extends('layouts.app')

@section('content')
<div class="container">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="box">
                    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
                    <button onclick="window.location.href='/projects'">Projects</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
