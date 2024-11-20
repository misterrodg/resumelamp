@extends('layouts.app')

@section('title', 'About')

@section('content')
<div>
    <h2>About</h2>
    <div class="space-y-4">
        <p>
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
        </p>
        <p>
            I've worked as part of large and small teams, and as the sole developer
            at smaller companies. The latter often required additional scripting
            and desktop application development&mdash;primarily Python, C++, and C#.
            I also genuinely enjoy learning new languages as the need arises.
        </p>
        <div class="relative space-y-4">
            <img src="{{ asset('images/dc3_greenland.jpg') }}" loading="lazy" alt="DC3 Airplane Parked in Greenland."
              class="w-48 h-auto float-right ml-4 mb-4 md:w-60 lg:w-72">
            <p>
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
            </p>
            <p>
                In addition to computer languages, I speak German, Norwegian and Swedish
                in social and limited business settings. I can also read and understand
                Danish, French, and some Italian.
            </p>
        </div>
    </div>
</div>
@endsection
