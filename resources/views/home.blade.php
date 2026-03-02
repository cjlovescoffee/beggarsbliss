<x-layout title="Home">
    <div class="d-flex align-items-center" style="height: 100vh">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-10 col-md-6">
                    <x-logo style="filter: drop-shadow( 0 0 8px rgba(0, 0, 0, 1));" />
                </div>
            </div>
        </div>
    </div>
    <div class="bg-secondary py-5">
        <span id="about" class="position-absolute" style="transform: translateY(-40px)"></span>
        <div class="container mb-5">
            <h2 class="h1 text-uppercase text-center">About</h2>
            <p>Beggars Bliss are a blues driven rock outfit from Derby, UK formed in 2024 with one rule: if it’s not fun, it’s not worth doing. That energy runs through everything they play – tight as hell, endlessly expressive, and driven by the pure joy of making music together.</p>
            <p>Since their launch, the band has been on an upward trajectory. Relentlessly gigging across the Midlands, including a standout set at Off The Tracks Festival in 2025, and bringing their high energy show to new cities like Manchester as their reach continues to grow.</p>
            <p>With five singles and two music videos already under their belt, Beggars Bliss are now preparing to release their debut album in 2026, with more live dates and festival appearances on the horizon.</p>
            <p>Their live show features impressive solos, near constant three part harmonies and danceable grooves with plenty of opportunities for audience participation. Guitar, keys, bass and drums trade spotlight moments, but ego never outruns the song. The goal is always the same: riffs and choruses that drill into your brain on the first pass and have you shouting the hook by the second.</p>
        </div>
        <div class="container"><hr></div>
        <div class="container mb-5">
            <span id="music" class="position-absolute" style="transform: translateY(-40px)"></span>
            <h2 class="h1 text-uppercase text-center">Music</h2>
            <div class="mb-3">
                <iframe class="spotify" src="https://open.spotify.com/embed/artist/2PxxUPLDXM3WtQ89XwxjGm?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
            <h3 class="text-uppercase text-center">You can also listen on:</h3>
            <div class="row justify-content-center mt-3">
                @foreach(config('music.platforms') as $platform)
                    <div class="col-6 @if($loop->even) text-start @else text-end @endif col-sm-auto text-sm-center mb-3">
                        <a href="{{ $platform['url'] }}" target="_blank" title="Listen to us on {{ $platform['label'] }}">
                            <i class="{{ $platform['icon'] }} fa-5x"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container"><hr></div>
        <div class="container mb-5">
            <span id="events" class="position-absolute" style="transform: translateY(-40px)"></span>
            <h2 class="h1 text-uppercase text-center">Events</h2>
            <div>
                <a class="bit-widget-initializer"

                    data-artist-name="id_15530422"

                    data-background-color="transparent"
                    data-separator-color="rgba(33,36,41,1)"
                    data-text-color="rgba(255,255,255,1)"
                    data-font="Saira"
                    data-auto-style="true"

                    data-button-label-capitalization="capitalize"
                    data-header-capitalization=""
                    data-location-capitalization="capitalize"
                    data-venue-capitalization="capitalize"
                    data-display-local-dates="true"
                    data-local-dates-position="tab"
                    data-display-past-dates="true"
                    data-display-details="false"
                    data-display-lineup="true"
                    data-display-start-time="true"
                    data-social-share-icon="false"
                    data-display-limit="50"

                    data-date-format="dddd Do MMMM YYYY"
                    data-date-orientation="horizontal"
                    data-date-border-color="#4A4A4A"
                    data-date-border-width="1px"
                    data-date-capitalization=""
                    data-date-border-radius="10px"

                    data-event-ticket-cta-size="medium"
                    data-event-custom-ticket-text=""
                    data-event-ticket-text="TICKETS"
                    data-event-ticket-icon=""
                    data-event-ticket-cta-text-color="#FFFFFF"
                    data-event-ticket-cta-bg-color="#4A4A4A"
                    data-event-ticket-cta-border-color="#4A4A4A"
                    data-event-ticket-cta-border-width="0px"
                    data-event-ticket-cta-border-radius="4px"

                    data-sold-out-button-text-color="#FFFFFF"
                    data-sold-out-button-background-color="#4A4A4A"
                    data-sold-out-button-border-color="#4A4A4A"
                    data-sold-out-button-clickable="true"

                    data-event-rsvp-position="hidden"
                    data-event-rsvp-cta-size="medium"
                    data-event-rsvp-only-show-icon=""
                    data-event-rsvp-text="REMIND ME"
                    data-event-rsvp-icon=""
                    data-event-rsvp-cta-text-color="#4A4A4A"
                    data-event-rsvp-cta-bg-color="#FFFFFF"
                    data-event-rsvp-cta-border-color="#4A4A4A"
                    data-event-rsvp-cta-border-width="1px"
                    data-event-rsvp-cta-border-radius="4px"

                    data-follow-section-position="hidden"
                    data-follow-section-alignment="center"
                    data-follow-section-header-text="Get updates on new shows, new music, and more."
                    data-follow-section-cta-size="medium"
                    data-follow-section-cta-text="FOLLOW"
                    data-follow-section-cta-icon="true"
                    data-follow-section-cta-text-color="#FFFFFF"
                    data-follow-section-cta-bg-color="#4A4A4A"
                    data-follow-section-cta-border-color="#4A4A4A"
                    data-follow-section-cta-border-width="0px"
                    data-follow-section-cta-border-radius="4px"

                    data-play-my-city-position="hidden"
                    data-play-my-city-alignment="Center"
                    data-play-my-city-header-text="Don't see a show near you?"
                    data-play-my-city-cta-size="medium"
                    data-play-my-city-cta-text="REQUEST A SHOW"
                    data-play-my-city-cta-icon="false"
                    data-play-my-city-cta-text-color="#FFFFFF"
                    data-play-my-city-cta-bg-color="rgba(33,36,41,1)"
                    data-play-my-city-cta-border-color="#4A4A4A"
                    data-play-my-city-cta-border-width="0px"
                    data-play-my-city-cta-border-radius="4px"

                    data-optin-font=""
                    data-optin-text-color=""
                    data-optin-bg-color=""
                    data-optin-cta-text-color=""
                    data-optin-cta-bg-color=""
                    data-optin-cta-border-width=""
                    data-optin-cta-border-radius=""
                    data-optin-cta-border-color=""

                    data-language="en"
                    data-layout-breakpoint="900"
                    data-app-id=""
                    data-affil-code=""
                    data-bit-logo-position="hidden"
                    data-bit-logo-color="#CCCCCC"
                    ></a>
                    <script charset="utf-8" src="https://widgetv3.bandsintown.com/main.min.js"></script>
            </div>
        </div>
        <div class="container"><hr></div>
        <div class="container mb-5">
            <span id="news" class="position-absolute" style="transform: translateY(-40px)"></span>
            <h2 class="h1 text-uppercase text-center">News</h2>
            <section>
                <article class="mb-3">
                    <h3 class="text-uppercase">New single <span>Peaches N' Cream</span> out on <time datetime="2025-08-15">15th August</time></h3>
                    <p>Posted <time datetime="2025-07-23">23rd July 2025</time></p>
                    
                    <details>
                        <summary data-closed="Show more" data-open="Show less"></summary>
                        <div class="py-2 d-flex">
                            <div class="d-inline-block mx-auto">
                                <video class="w-auto" controls>
                                    <source src="{{ asset('storage/peachesteaser.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        <h4 class="text-center">Pre-save <a href="https://distrokid.com/hyperfollow/beggarsbliss/peaches-n-cream">here</a>!</h4>
                    </details>
                </article>
                <article>
                    <h3 class="text-uppercase">New single <span>Forbidden Fruit</span> out on <time datetime="2025-06-27">27th June</time></h3>
                    <p>Posted <time datetime="2025-04-28">28th April 2025</time></p>
                    
                    <details>
                        <summary data-closed="Show more" data-open="Show less"></summary>
                        <div class="py-2">
                            <video class="w-100" controls>
                                <source src="{{ asset('storage/forbiddenfruitteaser.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video> 
                        </div>
                        <h4 class="text-center">Pre-save <a href="https://distrokid.com/hyperfollow/beggarsbliss/forbidden-fruit">here</a>!</h4>
                    </details>
                </article>
            </section>
        </div>
        <div class="container"><hr></div>
        <div class="container mb-5">
            <span id="socials" class="position-absolute" style="transform: translateY(-40px)"></span>
            <h2 class="h1 text-uppercase text-center">Socials</h2>
            <div class="row justify-content-center mt-3">
                @foreach(config('social.accounts') as $account)
                    <div class="col-auto text-center mb-3">
                        <a href="{{ $account['url'] }}" target="_blank" title="Follow us on {{ $account['label'] }}">
                            <i class="{{ $account['icon'] }} fa-5x"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container"><hr></div>
        <div class="container mb-5">
            <span id="contact" class="position-absolute" style="transform: translateY(-40px)"></span>
            <h2 class="h1 text-uppercase text-center">Contact</h2>
            <p class="text-center">For bookings or any other enquiry, please email <a href="mailto:info@beggarsbliss.com">info@beggarsbliss.com</a>.</p>
        </div>
        <div class="container"><hr></div>
        <div class="container mb-5">
            <span id="videos" class="position-absolute" style="transform: translateY(-40px)"></span>
            <h2 class="h1 text-uppercase text-center">Videos</h2>
            <div>
                <div class="row">
                    <div class="col-12 col-lg-6 mb-3">
                        <div class="position-relative" style="height: 0; padding-bottom: 52.25%;">
                            <iframe class="position-absolute" style="height: 100%; width: 100%; top: 0; left: 0;" src="https://www.youtube.com/embed/2SbiS_q0toA?si=2fyEWLGbeG7lpbT5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mb-3">
                        <div class="position-relative" style="height: 0; padding-bottom: 52.25%;">
                            <iframe class="position-absolute" style="height: 100%; width: 100%; top: 0; left: 0;" src="https://www.youtube.com/embed/bRjkEdjbw44?si=kjQvyEvUcHU22z3y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>