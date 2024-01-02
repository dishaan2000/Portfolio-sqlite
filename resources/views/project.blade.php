@extends('layouts.app')

@section('title', $project->project)


@section('content')
    <section class="toppadding10vh color-white">
        @if (isset($project))
        <article class="display-grid grid studycases-bottompadding">
            <div>
                <h1 class="fontfamily-comicfont fontsize-h1">{{ $project->project }}</h1>
                <p class="fontfamily-pfont">Role: {{ $project->role }}</p>
                <div class="fontfamily-pfont">
                    Beskrivelse: {{ strip_tags($project->mere_info) }}
                </div>
            </div>
            <div>
                @if ($project->image)
                <img class="width100" src="{{ Storage::url($project->image) }}" alt="{{ $project->project }}">
                @else
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
                @endif
            </div>
        </article>
        <article class="display-grid grid bottompadding10vh">
            <div>
                <img class="width100" src="{{ Storage::url($project->image_1) }}" alt="{{ $project->project_1 }}">
            </div>
            <div>
                <h3 class="fontfamily-comicfont fontsize-h3">{{ $project->titel_1 }}</h3>
                <p class="fontfamily-pfont">{{ strip_tags($project->description_1) }}</p>
            </div>
        </article>
        @if ($project->description_2)
        <article class="display-grid grid bottompadding10vh">
            <div>
                <h3 class="fontfamily-comicfont fontsize-h3"> {{ $project->titel_2 }} </h3>
                <p class="fontfamily-pfont">{{ strip_tags($project->description_2) }}</p>
            </div>
            <div>
                <img class="width100" src="{{ Storage::url($project->image_2) }}" alt="{{ $project->project_2 }}">
            </div>
        </article>
        @endif
        @if ($project->description_3)
        <article class="display-grid grid bottompadding10vh">
            <div>
                <img class="width100" src="{{ Storage::url($project->image_3) }}" alt="{{ $project->project_3 }}">
            </div>
            <div>
                <h3 class="fontfamily-comicfont fontsize-h3>{{ $project->titel_3 }}</h3>
                <p class="fontfamily-pfont">{{ strip_tags($project->description_3) }}</p> 
            </div>
        </article>
        @endif
        @if ($project->description_4)
        <article class="display-grid grid bottompadding10vh">
            <div>
                <h3 class="fontfamily-comicfont fontsize-h3">{{ $project->titel_4 }}</h3>
                <p class="fontfamily-pfont">{{ strip_tags($project->description_4) }}</p>
            </div>
            <div>
                <img class="width100" src="{{ Storage::url($project->image_4) }}" alt="{{ $project->project_4 }}">
            </div>
        </article>
        @endif
        @if ($project->description_last)
        <article class="bottompadding10vh display-grid">
            <div> 
                <h3 class="fontfamily-comicfont fontsize-h3">{{ $project->titel_last }}</h3>
                <p class="fontfamily-pfont">{{ strip_tags($project->description_last) }}</p>
            </div>
        </article>
        @endif
            @else
            <p class="fontfamily-pfont">Project not found.</p>
        @endif
    </section>  
    <x-footer/>
@endsection
