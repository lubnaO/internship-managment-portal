@extends('layouts.app')



@section('content')


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user()->user_type == 's')
                  
                    student
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
