<div class="mt-4">
    <div class="{{ $printView ? " bg-gray-200" : "bg-sky-800" }} py-1 px-2">
        <h3>{{ $categoryName }}</h3>
    </div>
    <div class="p-2 border {{ $printView ? " border-gray-200 bg-transparent" : "border-sky-800 bg-slate-800" }}">
        <ul class="ml-2">
            @foreach ($skills as $sk)
            <x-skill-bar :skill-name="$sk->skill_name" :rating="$sk->rating" :print-view="$printView" />
            @endforeach
        </ul>
    </div>
</div>
