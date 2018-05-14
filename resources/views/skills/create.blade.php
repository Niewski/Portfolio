@extends('layouts.admin')

@section('title')
    Skills
@endsection

@section ('content')

    <h1>Add A New Skill</h1>

    <form method="POST" action="/skills">

        <!-- Protect against Cross-Site Request Forgery -->
        {{ csrf_field() }}


        <div class="form-group">

            <label for="skillName">Skill</label>

            <input type="text" class="form-control" id="skillName" placeholder="Skill" name="skillName">

        </div>

        <div class="form-group">

            <label for="skillLevel">Level</label>

            <input type="text" class="form-control" id="skillLevel" placeholder="Skill Level" name="skillLevel">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>



@endsection