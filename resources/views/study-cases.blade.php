@extends('layouts.app')

@section('title', 'Cases')


@section('content')


<h1 class="fontfamily-comicfont fontsize-h1 text-center color-white">
    Study Cases
</h1>

    @if(isset($projects) && count($projects) > 0)
    <section>
        @foreach ($projects as $project)
            <article class="display-grid grid studycases-bottompadding">
                <div class="device-section">
                    <div class="phone-section">
                        <img src="{{ Storage::url($project->image_mobile) }}" alt="{{ $project->project }}" class="smartphone-image">
                        <img src="{{ asset('images/smartphone.svg') }}" alt="smartphone" class="smartphone">
                    </div>
                    <div class="pc-section">
                        <img src="{{ Storage::url($project->image_desktop) }}" alt="{{ $project->project }}" class="pc-image">
                        <img src="{{ asset('images/monitor.svg') }}" alt="pc" class="pc">
                    </div>
                </div>
                <div>
                    <h2 class="fontfamily-comicfont fontsize-h2 color-white">{{ $project->project }}</h2>
                    <div class="fontfamily-pfont color-white">
                        {{ strip_tags($project->description) }}
                    </div>
                    <a href="{{ route('project.show', ['project' => $project->project]) }}" class="linkedin-knap tilted-border kontakt-tilt bg-yellow color-black textdecoration fontfamily-comicfont">
                        <div>View Details</div>
                    </a>
                </div>
            </article>
        @endforeach
    </section>
    @else
        <p>No projects found.</p>
    @endif
    <x-footer/>
@endsection

