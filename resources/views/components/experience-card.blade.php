<div class="mt-4">
    <div class="{{ $printView ? " bg-gray-200" : "bg-sky-800" }} p-2">
        <h3>{{ $companyName }}</h3>
        <div class="inline-flex items-center space-x-1">
            <h4 class="{{ $printView ? " text-gray-700" : "text-sky-200" }}">{{ $role }}</h4>
            <h5 class="{{ $printView ? " text-gray-500" : "text-sky-400" }}">from {{ $dateFrom }} to {{ $dateTo ??
                'Present' }}</h5>
        </div>
    </div>
    <div class="p-2 border {{ $printView ? " border-gray-200 bg-transparent" : "border-sky-800 bg-slate-800" }}">
        <ul class="ml-2 list-inside list-disc">
            @foreach ($summaryPoints as $point)
            <li>{{ $point->content }}</li>
            @endforeach
        </ul>
    </div>
</div>
