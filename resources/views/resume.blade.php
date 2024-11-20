@extends('layouts.pdf')

@section('content')
<div>
    <h1 class="text-black">Kyle Rodgers</h1>
    <h3 class="text-gray-500">Full Stack Developer</h3>
    <h4 class="text-gray-500">Frederick, MD</h4>
    <div class="mt-4 space-y-4">
        <p>
            This document was printed from my Resume LAMP project.
            The source is available at
            <a href="https://github.com/misterrodg/resumelamp" target="_blank" class="underline">
                https://github.com/misterrodg/resumelamp</a>.
        </p>
        <h2 class="text-gray-500 border-black">About</h2>
        <div class="ml-2 space-y-4 relative">
            <div class="relative w-[200px] h-[200px] float-right justify-self-end">
                <!-- Background Image -->
                <img src="{{ asset('images/kr_no_glasses_bw.jpg') }}" alt="Background Image"
                  class="absolute top-0 right-0 w-[100px] h-[100px] object-cover" />
                <!-- Overlapping Image -->
                <img src="{{ asset('images/kr_glasses_bw.jpg') }}" alt="Overlay Image"
                  class="absolute top-1/2 left-1/2 w-[100px] h-[100px] object-cover transform -translate-x-1/2 -translate-y-1/2" />
            </div>
            <p>
                I've worked as part of large and small teams, and as the sole developer
                at smaller companies. The latter often required additional scripting
                and desktop application development&mdash;primarily Python, C++, and C#.
                I also genuinely enjoy learning new languages as the need arises.
            </p>
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
        <h2 class="text-gray-500 border-black">Skills</h2>
        <div class="ml-2">
            @foreach ($skillCategories as $sc)
            <x-skill-category-card :category-name="$sc->skill_category_name" :skills="$sc->skills" :print-view="true" />
            @endforeach
        </div>
        <h2 class="text-gray-500 border-black">Relevant Work History</h2>
        <div class="ml-2">
            @foreach ($experiences as $exp)
            <x-experience-card :company-name="$exp->company_name" :role="$exp->role" :date-from="$exp->date_from"
              :date-to="$exp->date_to" :summary-points="$exp->summaryPoints" :print-view="true" />
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
