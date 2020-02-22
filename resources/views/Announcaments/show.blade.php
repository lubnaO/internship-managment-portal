@foreach (Auth::user()->company->announcaments as $annu)

  
@foreach($annu->applicants as $apply)
<p>{{$apply->student->email}}</p>

@endforeach

    <p>{{$annu->title}}</p>

    @endforeach






