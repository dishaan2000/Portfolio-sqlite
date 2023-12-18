@extends('layouts.app')

@section('title', 'About')


@section('content')
    <h1 class="fontsize-h1 width100 text-center fontfamily-comicfont orgin-h1">
        Min origin story
      </h1> 
      <section class="section-grid grid">
        <div class="origin-text-om-mig">
          <article class="fontfamily-pfont fontsize-h5">
            <h2 class="text-center fontfamily-comicfont fontsize-h2">
              Hvem er jeg?
            </h2>
            <p>
              Hej, mit navn er Dishaan Selvarajah jeg er 22år gammel og kommer
              oprindelig fra en lille bitte by i Midtjylland, ved navn Ørum, men
              flyttede til Aalborg for at studere som multimediedesigner. Jeg
              angriber enhver ny opgave med en positiv indstilling, villighed og
              motivation og er altid klar til at lære nye færdigheder.
            </p>
          </article>
          <article class="fontfamily-pfont fontsize-h5">
            <h2 class="text-center fontfamily-comicfont fontsize-h2">Uddannelse</h2>
            <p>
              I 2021 besluttede mig og nogle venner for at starte vores egen web
              bureau hvor jeg stod for webdesign hvilket jeg syntes var super
              interessant. Her fik jeg åbnede mine øjne op for webudvikling,
              hvilket også fik mig til at vælge den uddannelse, som jeg er på nu,
              da jeg gerne vil lære mere om kodning og de forskellige
              designprincipper.
            </p>
          </article>
        </div>
        <div class="mig-origin">
          <img
            src="assets/image/Porto-billed.webp"
            alt="Billede af Multimediedesigneren Dishaan Selvarajah, med en gul cirkel bag ham"
            class="mig-img position-absolute margin-auto"
          />
          <img
            src="assets/image/Ellipse 13.svg"
            alt="Gul baggrund bag mig"
            class="mig-img-highlight position-absolute"
          />
        </div>
      </section>
      <section class="om-mig-grid grid fontfamily-pfont fontsize-h5 bottompadding10vh">
        <h2 class="grid-column1-4 text-center fontfamily-comicfont fontsize-h2">Her er mine superkræfter!</h2>
        <article>
          <div>
            <img src="assets/image/Front-end.png" alt="illustration af code tegn" class="block margin-auto"/>
          </div>
          <h3 class="text-center fontfamily-comicfont fontsize-h3">Front-end udvikler</h3>
          <p>
            Min største kompetence ligger i kodning af hjemmesider, hvori jeg kan
            HTML og CSS helt igennem, og sammen med JavaScript er jeg i stand til
            at skræddersy en hjemmeside fra bunden. Derudover har jeg haft
            fingerne i Vue.js samt Wordpress med Elementor som plugin.
          </p>
        </article>
        <article>
          <img src="assets/image/teacher.png" alt="illustration af en hat" class="block margin-auto"/>
          <h3 class="text-center fontfamily-comicfont fontsize-h3">Multimediedesigner</h3>
          <p>
            Jeg har gennem min uddannelse som multimediedesigner, opnået faglige
            kompetencer indenfor udvikling af projekter. Jeg kan analysere
            udfordringen, undersøge brugerne, udvikle det rette brugervenlige
            design og til sidst udvikle og implementere brugergrænsefladen.
          </p>
        </article>
        <article>
          <img
            src="assets/image/Web designer.png"
            alt="illustration af en magisk pen på en skærm"
            class="block margin-auto"
          />
          <h3 class="text-center fontfamily-comicfont fontsize-h3">Web designer</h3>
          <p class="mobilbottompadding">
            Som multimediedesigner, har jeg fået udvidet mine UX og UI
            kompetencer. Derudover har jeg haft fingrene i diverse Adobe
            programmer, til at kunne designe og visuelligere hjemmesider.
          </p>
        </article>
      </section>
@endsection