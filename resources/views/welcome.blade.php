@extends('layouts.portfolio')

@section('name')
    Jacob Wisniewski <!-- Will change to 'user_id = 1' once login and authentication are added -->
@endsection

@section('links')

    <a class="nav-link active" href="/">Home</a>
    <a class="nav-link" href="about">About</a>
    <a class="nav-link" href="contact">Contact</a>

@endsection

@section('content')

        <h1>{{$user}}</h1>

        <h2>Employment History</h2>
        @foreach ($employers as $employer)
            <h3>{{$employer->company}}</h3>
            <h4>{{$employer->position}}</h4>
            @foreach ($tasks as $task )
                @if($task->employment_id == $employer->id)
                    <li>{{$task->description}}</li>
                @endif
            @endforeach
        @endforeach

        <h2>Education</h2>
        @foreach ($education as $educator)
            <h3>{{$educator->school_name}}</h3>
            <h4>{{$educator->degree}}-{{$educator->major}}</h4>
        @endforeach

        <h2>Skills</h2>
        @foreach ($skills as $skill)
            <li>{{$skill->skill}}</li>
        @endforeach

@endsection
