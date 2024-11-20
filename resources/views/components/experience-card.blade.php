<div class="mt-4">
    <div class="bg-sky-800 p-2">
        <h3>{{ $companyName }}</h3>
        <div class="inline-flex items-center space-x-1">
            <h4 class="text-sky-200">{{ $role }}</h4>
            <h5 class="text-sky-400">from {{ $dateFrom }} to {{ $dateTo ?? 'Present' }}</h5>
        </div>
    </div>
    <div class="bg-slate-800 p-2 border border-sky-800">
        <ul class="ml-2 list-inside list-disc">
            @foreach ($summaryPoints as $point)
            <li>{{ $point->content }}</li>
            @endforeach
        </ul>
    </div>
</div>
