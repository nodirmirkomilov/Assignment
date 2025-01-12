
@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Applications</h3>
            </div>
        </div>
    </div>
    <div class="nk-block">
        @livewire('startup-data-list')
    </div>
@endsection
