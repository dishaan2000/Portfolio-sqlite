@extends('layouts.app')

@section('title', 'Kontakt')

@section('content')
    <section class="kontakt-section position-relative margin-auto text-center viewheight100 overflow-hidden">
        <h1 class="fontfamily-comicfont fontsize-h1 color-white">Vil du tænde for Bat-signalet?</h1>
        <p class="fontfamily-comicfont fontsize-h3 color-white">
          Hvis du vil have mig ombord på dit team, eller hvis du bare har nogle
          spørgsmål, så tvivl ikke med at tage kontakt til mig.
        </p>
        <div class="kontakt-knapper margin-auto">
            <a href="mailto:Dishaan@Selvarajah.dk" 
            target="_blank" 
            class="mail-knap tilted-border kontakt-tilt bg-yellow color-black textdecoration"
              ><div class="fontsize-h4 fontfamily-comicfont">Mail</div>
          </a>
            <a
              href="https://www.linkedin.com/in/dishaan-selvarajah-5748bb21a/"
              target="_blank" class="linkedin-knap tilted-border kontakt-tilt bg-yellow color-black textdecoration"
              ><div class="fontsize-h4 fontfamily-comicfont">LinkedIn</div>
          </a>
        </div>
    </section>
    <x-footer-contact/>
@endsection


