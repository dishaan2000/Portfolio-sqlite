@extends('layouts.app')

@section('title', '{{ $project->project }}')


@section('content')
    @if (isset($project))
        <h1>{{ $project->project }}</h1>
        <p>{{ $project->description }}</p>
        <p>Role: {{ $project->role }}</p>
        <p>More Info: {{ $project->mere_info }}</p>
        <p>Description 1: {{ $project->description_1 }}</p>
        <p>Description 2: {{ $project->description_2 }}</p>
        <p>Description 3: {{ $project->description_3 }}</p>
        <p>Description 4: {{ $project->description_4 }}</p>
        <p>Last Description: {{ $project->description_last }}</p>
        <img src="{{ Storage::url($project->image) }}" alt="{{ $project->project }}">
        <img src="{{ Storage::url($project->image_1) }}" alt="{{ $project->project_1 }}">
        <img src="{{ Storage::url($project->image_2) }}" alt="{{ $project->project_2 }}">
        <img src="{{ Storage::url($project->image_3) }}" alt="{{ $project->project_3 }}">
        <img src="{{ Storage::url($project->image_4) }}" alt="{{ $project->project_4 }}">

        <p>Image Mobile: {{ $project->image_mobile }}</p>
        <img src="{{ Storage::url($project->image_mobile) }}" alt="{{ $project->project }}">

        <p>Image Desktop: {{ $project->image_desktop }}</p>
        <img src="{{ Storage::url($project->image_desktop) }}" alt="{{ $project->project }}">
    @else
        <p>Project not found.</p>
    @endif
    <h2>Hello</h2>
@endsection
