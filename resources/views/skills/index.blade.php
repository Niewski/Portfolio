@extends('layouts.admin')

@section('title')
    Skills
@endsection

@section ('content')

    @foreach($skills as $skill)

        <li>{{$skill->skill}} - {{$skill->level}}</li>

    @endforeach



@endsection
