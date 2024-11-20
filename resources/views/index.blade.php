@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div>
    <h2>Welcome!</h2>
    <div class="mt-4 space-y-8">
        <div class="grid grid-cols-2 sm:grid-cols-3">
            <div class="sm:col-span-2 space-y-4">
                <p>
                    I write code, fly planes, solve problems, and
                    drink too much cold brew&mdash;even in the winter.<br />
                    Take a look around to see what I've been up to.
                </p>
                <ul class="list-inside list-disc">
                    <li>Learn more <a href="/about" class="text-sky-400 hover:text-gray-400">about me</a>.</li>
                    <li>Check out my <a href="/skills" class="text-sky-400 hover:text-gray-400">skills</a>.</li>
                    <li>Explore my <a href="/history" class="text-sky-400 hover:text-gray-400">work history</a>.</li>
                    <li>Click on the image for a printable view of the content on this site.</li>
                </ul>
            </div>
            <div class="relative group w-[200px] h-[200px] justify-self-end">
                <a href="/pdf" target="_blank">
                    <img src="{{ asset('images/kr_no_glasses_bw.jpg') }}" alt="Man in front of gray background."
                      class="w-full h-auto group-hover:opacity-0 absolute top-0 left-0">
                    <img src="{{ asset('images/kr_glasses_bw.jpg') }}"
                      alt="Man dressed as pilot in front of gray background."
                      class="w-full h-auto group-hover:opacity-100 absolute top-0 left-0 opacity-0">
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
