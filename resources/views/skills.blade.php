@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div>
    <h1 class="text-xl font-bold mb-2 border-b border-sky-600 text-sky-300">Skills</h1>
    <div class="ml-2">
        <h2 class="text-base font-bold">Languages</h2>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li>C++</li>
            <li>C#</li>
            <li>CSS (TailwindCSS and Bootstrap)</li>
            <li>Go</li>
            <li>JavaScript (Vanilla, React, and ReactTS)</li>
            <li>PHP (Vanilla and Laravel)</li>
            <li>Python</li>
        </ul>
        <h2 class="text-base font-bold">Databases</h2>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li>MySQL</li>
            <li>MSSQL</li>
        </ul>
        <h2 class="text-base font-bold">Data Formats</h2>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li>INI</li>
            <li>JSON</li>
            <li>GeoJSON</li>
            <li>TOML</li>
            <li>XML</li>
            <li>YAML</li>
        </ul>
        <h2 class="text-base font-bold">Tools</h2>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li>Docker</li>
            <li>Git</li>
            <li>Vite</li>
        </ul>
    </div>
</div>
@endsection
