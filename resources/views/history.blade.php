@extends('layouts.app')

@section('title', 'History')

@section('content')
<div>
    <h1 class="text-xl font-bold mb-2 border-b border-sky-400">Relevant Work History</h1>
    <div class="ml-2">
        @foreach ($experiences as $exp)
        <x-experience-card :company-name="$exp->company_name" :role="$exp->role" :date-from="$exp->date_from"
          :date-to="$exp->date_to" :summary-points="$exp->summaryPoints" />
        @endforeach
    </div>
</div>
@endsection
