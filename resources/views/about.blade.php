@extends('layouts.app')

@section('title', 'Om mig')


@section('content')
    <h1 class="fontsize-h1 width100 text-center fontfamily-comicfont orgin-h1 color-yellow">
        Min origin story
      </h1> 
      <section class="section-grid grid">
        <div class="origin-text-om-mig">
          <article class="fontfamily-pfont fontsize-h5">
            <h2 class="text-center fontfamily-comicfont fontsize-h2 color-yellow">
              Hvem er jeg?
            </h2>
            <p class="color-white">
              Hej, jeg er Dishaan Selvarajah, en passioneret multimediedesigner med en nylig afsluttet 
              uddannelse og nu stolt studerende inden for webudvikling. Min rejse har taget mig fra den 
              idylliske by Ørum i Midtjylland til udforskningen af kreative digitale løsninger i Aalborg.
            </p>
          </article>
          <article class="fontfamily-pfont fontsize-h5">
            <h2 class="text-center fontfamily-comicfont fontsize-h2 color-yellow">Uddannelse</h2>
            <p class="color-white">
              Gennem min multimediedesign-uddannelse har jeg udforsket forskellige aspekter af designverdenen. Mit fokus på webdesign i denne periode har åbnet mine øjne for den komplekse verden af webudvikling. Jeg har en positiv indstilling, er motiveret og altid klar til at lære nye færdigheder.
            </p>
            <p class="color-white">
              Jeg er nu dedikeret til en 1,5-årig overbygningsuddannelse inden for webudvikling. Her dykker jeg ned i webprogrammering, front-end udvikling, datamodellering og brugeroplevelser. Som webudvikler arbejder jeg med at skabe komplekse løsninger til web og mobil, med fokus på teknologier som PHP og Javascript.
            </p>
          </article>
        </div>
        <div class="mig-origin">
          <img
            src="{{ asset('images/Porto-billed.webp') }}"
            alt="Billede af Multimediedesigneren Dishaan Selvarajah, med en gul cirkel bag ham"
            class="mig-img position-absolute margin-auto"
          />
          <img
            src="{{ asset('images/Ellipse 13.svg') }}"
            alt="Gul baggrund bag mig"
            class="mig-img-highlight position-absolute"
          />
        </div>
      </section>
      <section class="om-mig-grid grid fontfamily-pfont fontsize-h5 bottompadding10vh">
        <h2 class="grid-column1-4 text-center fontfamily-comicfont fontsize-h2 color-yellow">Her er mine superkræfter!</h2>
        <article>
          <div>
            <img 
            src="{{ asset('images/Front-end.png') }}"
            src="assets/image/Front-end.png" 
            alt="illustration af code tegn" 
            class="block margin-auto"
            />
          </div>
          <h3 class="text-center fontfamily-comicfont fontsize-h3 color-yellow">Mine Færdigheder!</h3>
          <p class="color-white">
            Som en dedikeret Front-end Udvikler er jeg bevæbnet med kodningens kraft! Jeg mestrer HTML og CSS og kombinerer det med JavaScript for at skabe unikke og skræddersyede hjemmesider fra bunden. Jeg har også styr på Vue.js og Wordpress med Elementor som plugin – for mig er intet for komplekst, når det kommer til at give liv til digitale rum.
          </p>
        </article>
        <article>
          <img 
          src="{{ asset('images/teacher.png') }}"
          alt="illustration af en hat" 
          class="block margin-auto"
          />
          <h3 class="text-center fontfamily-comicfont fontsize-h3 color-yellow">Multimediedesigner</h3>
          <p class="color-white">
            Med min baggrund som Multimediedesigner er jeg ikke kun en Front-end Helt, men også en mester i projektudvikling. Jeg analyserer udfordringer, dykker ned i brugernes behov, skaber brugervenlige designs og bringer dem til live gennem min ekspertise i udvikling og implementering af brugergrænseflader.
          </p>
        </article>
        <article>
          <img
            src="{{ asset('images/Web designer.png') }}"
            alt="illustration af en magisk pen på en skærm"
            class="block margin-auto"
          />
          <h3 class="text-center fontfamily-comicfont fontsize-h3 color-yellow">Web designer</h3>
          <p class="mobilbottompadding color-white">
            Som Multimediedesigner har jeg udvidet mine evner som UX/UI-magiker. Ud over mine front-end kræfter jonglerer jeg virtuost med Adobe-programmer for at skabe visuelt imponerende og funktionelle hjemmesider. Min magiske pen og skærm er mine redskaber til at bringe digitale visioner til virkelighed.
          </p>
        </article>
      </section>
      <x-footer/>
@endsection

