@extends('layouts.app')

@section('title', 'History')

@section('content')
<div>
    <h2>Relevant Work History</h2>
    <div class="ml-2">
        @foreach ($experiences as $exp)
        <x-experience-card :company-name="$exp->company_name" :role="$exp->role" :date-from="$exp->date_from"
          :date-to="$exp->date_to" :summary-points="$exp->summaryPoints" />
        @endforeach
    </div>
</div>
@endsection
