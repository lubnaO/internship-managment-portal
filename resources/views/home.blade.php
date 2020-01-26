@extends('layouts.app')

@section('content')
<div class="container">
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
                    @if (Auth::user()->user_type == 's')
                  
                    {{Auth::user()->student->s_major}}
                    @endif

                    @if (Auth::user()->user_type == 'c')
                    company
                    @endif

                    @if (Auth::user()->user_type == 'u')
                    uiversty
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
