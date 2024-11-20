<div class="mb-2">
    <div class="bg-blue-900 p-2">
        <h3>{{ $companyName }}</h3>
        <h4>{{ $role }} - {{ $dateFrom }} to {{ $dateTo ?? 'Present' }}</h4>
    </div>
    <div class="bg-slate-200 text-slate-900 p-2">
        <ul class="mb-2 ml-2 list-inside list-disc">
            @foreach ($summaryPoints as $point)
            <li>{{ $point->content }}</li>
            @endforeach
        </ul>
    </div>
</div>
