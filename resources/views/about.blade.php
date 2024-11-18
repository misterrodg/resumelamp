@extends('layouts.app')

@section('title', 'About')

@section('content')
<div>
    <h1 class="text-xl font-bold mb-2 border-b border-sky-400">About</h1>
    <div class="mb-2">
        Beginning in the age of Angelfire and GeoCities, I'm a Full Stack Developer
        and Database Administrator with a passion for building targeted web applications.
        With experience in both front-end and back-end development, I have assisted
        companies in building their web presence, interact with partners via APIs,
        and provide web services. I also maintain multiple servers in my home that
        provide services via a
        <span class="text-lang">Linux</span>,
        <span class="text-lang">MySQL</span>,
        <span class="text-lang">Go</span>,
        and <span class="text-lang">React</span> stack. My expertise spans
        additional web technologies, frameworks, and databases that include
        <span class="text-lang">PHP</span>,
        <span class="text-lang">Laravel</span>,
        <span class="text-lang">TypeScript</span>,
        <span class="text-lang">TailwindCSS</span>,
        <span class="text-lang">Vite</span>,
        <span class="text-lang">MySQL</span>, and
        <span class="text-lang">MSSQL</span>.
    </div>
    <div class="mb-2">
        I've worked in various environments from large to small teams, and as the sole
        developer at smaller companies. The latter often required additional scripting
        and desktop application development - primarily
        <span class="text-lang">Python</span>,
        <span class="text-lang">C++</span>, and
        <span class="text-lang">C#</span>. I also
        genuinely enjoy learning new languages as the need arises.
    </div>
    <div class="mb-2">
        Outside of work, I have been a pilot for
        {{ \Carbon\Carbon::parse('2003-10-03')->age }} years,
        and a commercial pilot for
        {{ \Carbon\Carbon::parse('2017-10-15')->age }} years.
        In an environment where you are moving at hundreds of miles per hour,
        speed is of the essence. While I learned on aviation slide rules,
        I have spent time over the years developing my own briefing software,
        and helping others develop
        <span class="text-lang">Docker</span>ized
        web services for pilot applications. Since the Federal Aviation Administration is
        famously behind in the area of technology, this gives me continued exposure to
        somewhat antiquated technologies and standards like
        <span class="text-lang">JMS</span>, and
        <span class="text-lang">XML</span>
        (at least in the context that JSON is more common now).
    </div>
</div>
@endsection