@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div>
    <h1 class="text-xl font-bold mb-2 border-b border-sky-600 text-sky-300">Skills</h1>
    <div class="ml-2">
        <h2 class="text-base font-bold">Languages</h2>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li><span class="text-lang">C++</span></li>
            <li><span class="text-lang">C#</span></li>
            <li><span class="text-lang">CSS</span> (TailwindCSS and Bootstrap)</li>
            <li><span class="text-lang">Go</span></li>
            <li><span class="text-lang">JavaScript</span> (Vanilla, React, and ReactTS)</li>
            <li><span class="text-lang">PHP</span> (Vanilla and Laravel)</li>
            <li><span class="text-lang">Python</span></li>
        </ul>
        <h2 class="text-base font-bold">Databases</h2>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li><span class="text-lang">MySQL</span></li>
            <li><span class="text-lang">MSSQL</span></li>
        </ul>
        <h2 class="text-base font-bold">Data Formats</h2>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li><span class="text-lang">INI</span></li>
            <li><span class="text-lang">JSON</span></li>
            <li><span class="text-lang">GeoJSON</span></li>
            <li><span class="text-lang">TOML</span></li>
            <li><span class="text-lang">XML</span></li>
            <li><span class="text-lang">YAML</span></li>
        </ul>
        <h2 class="text-base font-bold">Tools</h2>
        <ul class="mb-2 ml-2 list-inside list-disc">
            <li><span class="text-lang">Docker</span></li>
            <li><span class="text-lang">Git</span></li>
            <li><span class="text-lang">Vite</span></li>
        </ul>
    </div>
</div>
@endsection