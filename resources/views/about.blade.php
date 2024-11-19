@extends('layouts.app')

@section('title', 'About')

@section('content')
<div>
    <h1 class="text-xl font-bold mb-2 border-b border-sky-400">About</h1>
    <div class="mb-2">
        I'm a Full Stack Developer and Database Administrator with a passion
        for building targeted web applications. I started teaching myself web
        development in the days of Angelfire and GeoCities, using a computer
        in my high school library. Over the years, I added back-end development
        to my skill set, which I have used to help companies build their web
        presence, interact with partners via APIs, and provide web services.
        I also maintain multiple servers in my home that provide services via a
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
        I've worked as part of large and small teams, and as the sole
        developer at smaller companies. The latter often required additional scripting
        and desktop application development&mdash;primarily
        <span class="text-lang">Python</span>,
        <span class="text-lang">C++</span>, and
        <span class="text-lang">C#</span>. I also
        genuinely enjoy learning new languages as the need arises.
    </div>
    <div class="mb-2">
        Outside of my day job, I have been a pilot for
        {{ DateHelper::dateToYears('2003-10-03') }},
        and a commercial pilot for
        {{ DateHelper::dateToYears('2017-10-15') }}.
        In an environment where you are moving at hundreds of miles per hour,
        speed is of the essence. While I learned how to plan flights using
        aviation slide rules, I have spent time over the years developing my
        own briefing software and helping others develop
        <span class="text-lang">Docker</span>ized
        web services for pilot applications. Since the Federal Aviation
        Administration uses antiquated collaboration tools, I routinely
        work with older technologies and standards such as
        <span class="text-lang">JMS</span> and
        <span class="text-lang">XML</span>
        (at least in the context that JSON is more common now). That's not
        to speak ill of antiquated technologies: I was part of the flight crew
        for a 1945 DC-3 that flew across the Atlantic Ocean in 2019.
    </div>
    <div>
        In addition to computer languages, I speak German, Norwegian and Swedish
        in social and limited business settings. I can also read and understand
        Danish, French, and some Italian.
    </div>
</div>
@endsection