@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div>
    <h2>Skills</h2>
    <div class="ml-2">
        <h3>Languages</h3>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li>C++</li>
            <li>C#</li>
            <li>CSS (TailwindCSS and Bootstrap)</li>
            <li>Go</li>
            <li>JavaScript (Vanilla, React, and ReactTS)</li>
            <li>PHP (Vanilla and Laravel)</li>
            <li>Python</li>
        </ul>
        <h3>Databases</h3>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li>MySQL</li>
            <li>MSSQL</li>
        </ul>
        <h3>Data Formats</h3>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li>INI</li>
            <li>JSON</li>
            <li>GeoJSON</li>
            <li>TOML</li>
            <li>XML</li>
            <li>YAML</li>
        </ul>
        <h3>Tools</h3>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li>Docker</li>
            <li>Git</li>
            <li>Vite</li>
        </ul>
    </div>
</div>
@endsection
