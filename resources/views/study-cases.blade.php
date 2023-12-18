@extends('layouts.app')

@section('title', 'Cases')


@section('content')
    <h1 class="fontfamily-comicfont fontsize-h1 text-center">
        Study Cases
    </h1>

    @if(isset($projects) && count($projects) > 0)
    <section class="bottompadding40vh">
        @foreach ($projects as $project)
            <article class="display-grid grid bottompadding10vh">
                <div>
                    <img src="{{ Storage::url($project->image) }}" alt="{{ $project->project }}" class="viewwidthauto">
                </div>
                <div>
                    <h2 class="fontfamily-comicfont fontsize-h2">{{ $project->project }}</h2>
                    <p class="fontfamily-pfont">{{ $project->description }}</p>
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
    
@endsection

