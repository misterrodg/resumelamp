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
        to my skill set, which I've used to help companies build their web
        presence, interact with partners via APIs, and provide web services.
        I also maintain multiple servers in my home that provide services via a
        Linux, MySQL, Go, and React stack. My expertise spans additional web
        technologies, frameworks, and databases that include PHP, Laravel,
        TypeScript, TailwindCSS, Vite, MySQL, and MSSQL.
    </div>
    <div class="mb-2">
        I've worked as part of large and small teams, and as the sole developer
        at smaller companies. The latter often required additional scripting
        and desktop application development&mdash;primarily Python, C++, and C#.
        I also genuinely enjoy learning new languages as the need arises.
    </div>
    <div class="mb-2">
        Outside of my day job, I have been a pilot for
        {{ DateHelper::dateToYears('2003-10-03') }},
        and a commercial pilot for
        {{ DateHelper::dateToYears('2017-10-15') }}.
        In an environment where you're moving at hundreds of miles per hour,
        speed is of the essence. While I learned how to plan flights using
        aviation slide rules, I have spent time over the years developing my
        own briefing software and pilot tools. I've also assisted in developing
        web services for pilot applications, packaged with Docker. Since the Federal
        Aviation Administration uses antiquated collaboration tools, I routinely
        work with older technologies and standards such as JMS and XML
        (at least in the context that JSON is more common now). That's not
        to speak ill of antiquated technologies: I was part of the flight crew
        for a 1945 DC-3 that flew across the Atlantic Ocean in 2019.
    </div>
    <div class="mb-4">
        In addition to computer languages, I speak German, Norwegian and Swedish
        in social and limited business settings. I can also read and understand
        Danish, French, and some Italian.
    </div>
</div>
@endsection
