<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <!-- <base href="/"> -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>AloqaTechLab</title>
    <meta name="description" content="Aloqa Tech Lab" />

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <link rel="icon" href="{{ asset('images/favicon.png') }}" />
    <meta property="og:image" content="images/image.jpg" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/splide/css/splide.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/media.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/bs-select-multi/css/BsMultiSelect.min.css') }}">
</head>

<body>
<div id="app">
    <header class="header">
        <div class="container-lg bigger header__container">
            <a href="{{ route('landing.index') }}" class="header__logo">
                <span class="title">AloqaTechLab</span>
                <small class="subtitle">powered by IT Park</small>
            </a>
            <ul class="nav">
                <li class="nav__item">
                    <a href="#" class="nav__link">{{ __('main.header.accelerator') }}</a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link">{{ __('main.header.aloqa_ventures') }}</a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link">{{ __('main.header.contacts') }}</a>
                </li>
            </ul>
            <div class="dropdown lang">
                <button
                    class="btn dropdown-toggle"
                    type="button"
                    id="dropdownMenu"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    {{ (app()->getLocale() != 'cy') ? str(app()->getLocale())->ucfirst() : "Уз" }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                    @forelse(config('app.locales') as $locale)
                        @if($locale != app()->getLocale())
                            <a href="{{ route('locale.swap',['locale' => $locale]) }}" class="dropdown-item">{{ ($locale != 'cy') ? str($locale)->ucfirst() : "Уз" }}</a>
                        @endif
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <ul class="contacts">
                    <li class="contacts__item">
                        <a href="tel:+998712223344" class="contacts__link">
                            <div class="icon">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.4577 26.3253L16.2 29.583C15.5133 30.2697 14.4216 30.2697 13.7172 29.6006C13.5235 29.4069 13.3298 29.2308 13.1361 29.0371C11.3224 27.2058 9.6848 25.2864 8.22327 23.279C6.77935 21.2716 5.61717 19.2642 4.77195 17.2744C3.94434 15.267 3.52173 13.3477 3.52173 11.5164C3.52173 10.319 3.73303 9.17439 4.15564 8.11786C4.57825 7.04373 5.24739 6.05764 6.18065 5.1772C7.30761 4.06784 8.54023 3.52197 9.84328 3.52197C10.3363 3.52197 10.8294 3.62763 11.2696 3.83893C11.7274 4.05024 12.1324 4.36719 12.4494 4.82502L16.5346 10.5831C16.8516 11.0233 17.0805 11.4283 17.239 11.8157C17.3974 12.1855 17.4855 12.5553 17.4855 12.8898C17.4855 13.3125 17.3622 13.7351 17.1157 14.1401C16.8868 14.5451 16.5522 14.9677 16.1296 15.3903L14.7913 16.7814C14.5976 16.9751 14.5096 17.204 14.5096 17.4857C14.5096 17.6266 14.5272 17.7499 14.5624 17.8907C14.6153 18.0316 14.6681 18.1373 14.7033 18.2429C15.0203 18.824 15.5661 19.5812 16.3409 20.4968C17.1333 21.4125 17.9785 22.3458 18.8942 23.279C19.0703 23.4551 19.264 23.6312 19.4401 23.8073C20.1444 24.494 20.162 25.621 19.4577 26.3253Z" fill="white"/>
                                    <path d="M38.6865 32.2768C38.6865 32.7699 38.5984 33.2805 38.4223 33.7736C38.3695 33.9144 38.3167 34.0553 38.2463 34.1962C37.9469 34.8301 37.5595 35.4288 37.0489 35.9923C36.186 36.9431 35.2352 37.6299 34.161 38.0701C34.1434 38.0701 34.1258 38.0877 34.1082 38.0877C33.0693 38.5103 31.9423 38.7392 30.7273 38.7392C28.9312 38.7392 27.0119 38.3166 24.9868 37.4538C22.9618 36.591 20.9368 35.4288 18.9294 33.9673C18.2427 33.4566 17.5559 32.946 16.9044 32.4001L22.6625 26.642C23.1555 27.0118 23.5958 27.2935 23.9655 27.4872C24.0536 27.5225 24.1592 27.5753 24.2825 27.6281C24.4234 27.6809 24.5642 27.6985 24.7227 27.6985C25.0221 27.6985 25.251 27.5929 25.4447 27.3992L26.7829 26.0785C27.2232 25.6383 27.6458 25.3037 28.0508 25.0924C28.4558 24.8459 28.8608 24.7227 29.301 24.7227C29.6356 24.7227 29.9877 24.7931 30.3751 24.9516C30.7625 25.11 31.1675 25.339 31.6077 25.6383L37.4362 29.7764C37.8941 30.0933 38.211 30.4631 38.4047 30.9033C38.5808 31.3436 38.6865 31.7838 38.6865 32.2768Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="text">+998 71 222 33 44</div>
                        </a>
                    </li>
                    <li class="contacts__item">
                        <a href="#" class="contacts__link">
                            <div class="icon">
                                <svg width="33" height="37" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.5702 12.6182C29.7213 4.48294 22.625 0.820312 16.3915 0.820312C16.3915 0.820312 16.3915 0.820312 16.3739 0.820312C10.158 0.820312 3.04405 4.46533 1.19512 12.6006C-0.865101 21.6867 4.69927 29.3817 9.73538 34.2241C11.6019 36.0202 13.9967 36.9183 16.3915 36.9183C18.7863 36.9183 21.1811 36.0202 23.03 34.2241C28.0661 29.3817 33.6305 21.7043 31.5702 12.6182ZM16.3915 21.4402C13.3276 21.4402 10.8447 18.9573 10.8447 15.8934C10.8447 12.8295 13.3276 10.3467 16.3915 10.3467C19.4554 10.3467 21.9383 12.8295 21.9383 15.8934C21.9383 18.9573 19.4554 21.4402 16.3915 21.4402Z" fill="white"/>
                                </svg>

                            </div>
                            <div class="text">4, Tepamasjid str., Tashkent, Uzbekistan, 100164</div>
                        </a>
                    </li>
                    <li class="contacts__item">
                        <a href="http://t.me/aloqa" class="contacts__link">
                            <div class="icon">
                                <svg width="35" height="29" viewBox="0 0 35 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M34.9276 2.21858C34.8247 3.29288 34.4547 4.6059 34.1712 5.94876C32.702 12.8769 31.2208 19.8011 29.7278 26.7214C29.7069 26.8184 29.6935 26.9183 29.6681 27.0198C29.2026 28.8103 27.9955 29.2743 26.487 28.194C24.1817 26.5438 21.8884 24.8772 19.6339 23.1598C19.0251 22.6973 18.679 22.7256 18.1627 23.2642C17.1824 24.2848 16.1246 25.2338 15.0995 26.2111C14.9944 26.3168 14.8833 26.4164 14.7668 26.5095C14.4266 26.7676 14.0446 27.0929 13.6239 26.8944C13.1658 26.6781 13.4165 26.1917 13.4403 25.8172C13.5582 24.0088 13.7223 22.2019 13.7954 20.3905C13.8357 19.3878 14.1491 18.6403 14.9324 17.948C19.3683 14.0253 23.755 10.0534 28.1507 6.09349C28.3521 5.91146 28.8161 5.7339 28.5983 5.43997C28.3506 5.09679 27.9597 5.39968 27.6747 5.57724C24.7831 7.37667 21.8944 9.18158 19.0087 10.992C16.1007 12.8123 13.1897 14.6252 10.2906 16.4604C10.0812 16.6102 9.83842 16.7066 9.58332 16.7412C9.32822 16.7758 9.06853 16.7475 8.82685 16.6588C6.50966 15.9128 4.17905 15.2026 1.85291 14.4789C1.7812 14.4588 1.71091 14.4338 1.64253 14.4043C1.15313 14.1745 0.571218 14.0089 0.524964 13.3435C0.47871 12.6526 0.999443 12.299 1.52465 12.0856C3.3599 11.3262 5.21753 10.6055 7.07366 9.8938C15.4531 6.67987 23.8336 3.47391 32.2151 0.275908C32.3076 0.240099 32.3986 0.199813 32.4926 0.166987C33.9787 -0.352253 34.9396 0.341559 34.9276 2.21858Z" fill="white"/>
                                </svg>

                            </div>
                            <div class="text">t.me/aloqa</div>
                        </a>
                    </li>
                </ul>
                <a href="{{ route('landing.application.create') }}" class="intro__slider-button flex-grow-1 flex-shrink-0">
                    {{ __('main.application_btn') }}
                </a>
            </div>
            <div class="footer__bottom">
                Copyright © {{ now()->format("Y") }} Aloqa Ventures LLC. All rights reserved
            </div>
        </div>
    </footer>
</div>


<script src="{{ asset('libs/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/splide/js/splide.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('libs/bs-select-multi/js/BsMultiSelect.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#resources').bsMultiSelect();
    });
</script>
</body>
</html>
