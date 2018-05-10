<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

    </head>
    <body>
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

    </body>
</html>
