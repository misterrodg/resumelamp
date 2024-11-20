@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div>
    <h2>Skills</h2>
    <div class="ml-2">
        @foreach ($skillCategories as $sc)
        <x-skill-category-card :category-name="$sc->skill_category_name" :skills="$sc->skills" />
        @endforeach
    </div>
</div>
@endsection
