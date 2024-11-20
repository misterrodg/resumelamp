<div class="mt-4">
    <div class="bg-sky-800 p-2">
        <h3>{{ $categoryName }}</h3>
    </div>
    <div class="bg-slate-800 p-2 border border-sky-800">
        <ul class="ml-2">
            @foreach ($skills as $sk)
            <x-skill-bar :skill-name="$sk->skill_name" :rating="$sk->rating" />
            @endforeach
        </ul>
    </div>
</div>
