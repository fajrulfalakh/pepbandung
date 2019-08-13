<html lang="en"><head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset ('assets/media/logos/logo-pep-1.png') }}" />
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
    <title>PEP BANDUNG - Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <style>

        body{background-image:url(./assets/media/bg/bgportal.jpg); background-size:cover}
        
        /* CSS Document */

        .marquee {
            margin-top: 100px;
            width: 30%;
        }
        .runtext-container .holder .text-container {
            display:inline;
        }

        .runtext-container .holder a{
            text-decoration: arial;
            font-weight: bold;
            color:#aaa54a;
            text-shadow:0 -1px 0 rgba(0,0,0,0.25);
            font-size:16px;
        }


        .container {
            width: 50%;
            height: 200px;
        }

        #learn-more {
            fill-opacity: 0;
            fill: #fff;
            stroke: #fff;
            stroke-width: 2;
            border-radius: 5px;
            stroke-linejoin: round;
            transition: all 250ms ease-in;
            cursor: pointer;
        }
        #learn-more:hover {
            fill-opacity: 1;
        }
        #learn-more:hover ~ .learn-more-text {
            fill: #e19900;
        }

        .learn-more-text {
            font-family: 'Roboto';
            fill: #fff;
            pointer-events: none;
            font-size: 14px;
            transition: all 250ms ease-in;
        }

        .center {
            fill: #e19900;
        }

        .pointer {
            fill: #fff;
            stroke: #e19900;
            stroke-width: 2;
        }

        .nav-copy {
            font-family: 'Roboto';
            fill: #fff;
            fill-opacity: 1;
            transition: all 250ms ease-in;
        }
        .nav-copy.changing {
            fill-opacity: 0;
        }

        .service {
            cursor: pointer;
        }
        .service text {
            font-size: 14px;
            font-family: 'Roboto';
            text-anchor: middle;
        }
        .service .icon-wrapper {
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }
        .service .icon-wrapper, .service .icon-wrapper > * {
            transition: all 250ms ease-in;
        }
        .service circle {
            fill: #e19900;
        }
        .service circle.shadow {
            fill-opacity: 0;
            -webkit-filter: url(#service-shadow);
            filter: url(#service-shadow);
        }
        .service use {
            fill: #fff;
        }
        .service text {
            fill: #4d4d4d;
        }
        .service.active .icon-wrapper, .service:hover .icon-wrapper {
            -webkit-transform: scale(1.15) translateY(-5px);
            transform: scale(1.15) translateY(-5px);
        }
        .service.active .icon-wrapper, .service.active .icon-wrapper > *, .service:hover .icon-wrapper, .service:hover .icon-wrapper > * {
            transition: all 250ms ease-out;
        }
        .service.active .icon-wrapper circle.shadow, .service:hover .icon-wrapper circle.shadow {
            fill-opacity: 0.4;
        }
        .service.active text, .service:hover text {
            fill: #e19900;
            font-weight: bold;
        }

    </style>
    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>
<body translate="no">
     <div class="container"> 
        <img src="./assets/media/logos/logo-pep-2.png" style="width:120px;" viewBox="0 0 650 550">
        <svg id="circle-nav-services" width="200%" height="240%" viewBox="0 0 650 550">
            <defs>
                <filter id="service-shadow" height="2" width="2" y="-.5" x="-.5">
                    <feOffset result="offOut" in="SourceGraphic" dx="0" dy="5"></feOffset>
                    <feGaussianBlur result="blurOut" in="offOut" stdDeviation="12"></feGaussianBlur>
                    <feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend>
                </filter>
            </defs>
            <symbol id="circle-nav-copy" viewBox="0 0 300 300">
                <defs>
                    <style>
                        .cls-1 {
                            font-size: 28px;
                            font-family: Roboto-Bold, Roboto;
                            font-weight: 700;
                        }

                        .cls-2 {
                            letter-spacing: -0.02em;
                        }

                        .cls-3 {
                            letter-spacing: -0.01em;
                        }

                        .cls-4 {
                            letter-spacing: -0.01em;
                        }

                        .cls-5 {
                            font-size: 16px;
                            font-family: Roboto-Regular, Roboto;
                        }

                        .cls-6 {
                            letter-spacing: -0.01em;
                        }

                        .cls-7 {
                            letter-spacing: -0.01em;
                        }

                        .cls-8 {
                            letter-spacing: -0.02em;
                        }

                        .cls-9 {
                            letter-spacing: -0.01em;
                        }

                        .cls-10 {
                            letter-spacing: 0.01em;
                        }

                        .cls-11 {
                            letter-spacing: -0.01em;
                        }

                        .cls-12 {
                            letter-spacing: -0.04em;
                        }

                        .cls-13 {
                            letter-spacing: -0.02em;
                        }

                        .cls-14 {
                            letter-spacing: 0.01em;
                        }

                        .cls-15 {
                            letter-spacing: -0.01em;
                        }

                        .cls-16 {
                            letter-spacing: -0.06em;
                        }

                        .cls-17 {
                            letter-spacing: -0.02em;
                        }

                        .cls-18 {
                            letter-spacing: 0.01em;
                        }

                        .cls-19 {
                            letter-spacing: 0.02em;
                        }

                        .cls-20 {
                            letter-spacing: -0.01em;
                        }

                        .cls-21 {
                            letter-spacing: -0.03em;
                        }
                    </style>
                </defs>
                <title>Artboard 1</title>
                <text class="cls-1" transform="translate(99 1865)">P
                    <tspan class="cls-2" x="18" y="0">r</tspan>
                    <tspan x="28" y="0">ocess</tspan>
                    <tspan class="cls-3" x="-22" y="28">A</tspan>
                    <tspan x="-4" y="28">u</tspan>
                    <tspan class="cls-4" x="12" y="28">t</tspan>
                    <tspan x="21" y="28">omation</tspan>
                </text>
                <text class="cls-5" transform="translate(57 1930)">Our p
                    <tspan class="cls-6" x="38" y="0">r</tspan>
                    <tspan x="43" y="0">ocess and Industrial </tspan>
                    <tspan class="cls-3" x="1" y="19">A</tspan>
                    <tspan x="12" y="19">u</tspan>
                    <tspan class="cls-6" x="21" y="19">t</tspan>
                    <tspan x="26" y="19">omation personnel a</tspan>
                    <tspan class="cls-7" x="172" y="19">r</tspan>
                    <tspan x="177" y="19">e </tspan>
                    <tspan x="12" y="38">t</tspan>
                    <tspan class="cls-8" x="17" y="38">r</tspan>
                    <tspan x="22" y="38">ained </tspan>
                    <tspan class="cls-6" x="65" y="38">t</tspan>
                    <tspan x="70" y="38">o of</tspan>
                    <tspan class="cls-9" x="98" y="38">f</tspan>
                    <tspan x="103" y="38">er a b</tspan>
                    <tspan class="cls-6" x="143" y="38">r</tspan>
                    <tspan x="148" y="38">oad </tspan>
                    <tspan x="-7" y="58">scope of se</tspan>
                    <tspan class="cls-10" x="75" y="58">r</tspan>
                    <tspan x="81" y="58">vices </tspan>
                    <tspan class="cls-6" x="121" y="58">t</tspan>
                    <tspan x="126" y="58">o meet or </tspan>
                    <tspan x="1" y="77">e</tspan>
                    <tspan class="cls-6" x="9" y="77">x</tspan>
                    <tspan x="17" y="77">ceed </tspan>
                    <tspan class="cls-11" x="55" y="77">y</tspan>
                    <tspan x="63" y="77">our p</tspan>
                    <tspan class="cls-6" x="99" y="77">r</tspan>
                    <tspan x="104" y="77">oject goals.</tspan>
                </text>
                <text class="cls-1" transform="translate(89 1566)">
                    <tspan class="cls-12">T</tspan>
                    <tspan x="16" y="0">echnical</tspan>
                    <tspan x="7" y="28">Se</tspan>
                    <tspan class="cls-10" x="39" y="28">r</tspan>
                    <tspan x="49" y="28">vices</tspan>
                </text>
                <text class="cls-5" transform="translate(47 1636)">
                    <tspan class="cls-13">W</tspan>
                    <tspan x="14" y="0">e ensu</tspan>
                    <tspan class="cls-7" x="61" y="0">r</tspan>
                    <tspan x="66" y="0">e that </tspan>
                    <tspan class="cls-11" x="110" y="0">y</tspan>
                    <tspan x="118" y="0">our p</tspan>
                    <tspan class="cls-6" x="154" y="0">r</tspan>
                    <tspan x="159" y="0">ocess, </tspan>
                    <tspan x="10" y="19">manufacturing, packaging </tspan>
                    <tspan x="-5" y="38">equipment, facility and utilities </tspan>
                    <tspan x="-10" y="58">pe</tspan>
                    <tspan class="cls-14" x="7" y="58">r</tspan>
                    <tspan x="13" y="58">form as the intended design.</tspan>
                </text>
                <text class="cls-1" transform="translate(105 966)">P
                    <tspan class="cls-2" x="18" y="0">r</tspan>
                    <tspan x="28" y="0">oject</tspan>
                    <tspan x="-38" y="28">Management</tspan>
                </text>
                <text class="cls-5" transform="translate(65 1037)">
                    <tspan class="cls-13">W</tspan>
                    <tspan x="14" y="0">e help </tspan>
                    <tspan class="cls-11" x="61" y="0">y</tspan>
                    <tspan x="68" y="0">our ope</tspan>
                    <tspan class="cls-8" x="122" y="0">r</tspan>
                    <tspan x="127" y="0">ations </tspan>
                    <tspan x="-23" y="19">complete their p</tspan>
                    <tspan class="cls-6" x="93" y="19">r</tspan>
                    <tspan x="98" y="19">oject on time, </tspan>
                    <tspan x="-8" y="38">under budget and meeting </tspan>
                    <tspan x="-8" y="58">100% of the </tspan>
                    <tspan class="cls-7" x="80" y="58">r</tspan>
                    <tspan x="85" y="58">equi</tspan>
                    <tspan class="cls-7" x="116" y="58">r</tspan>
                    <tspan x="121" y="58">ements.</tspan>
                </text>
                <text class="cls-1" transform="translate(75 666)">Engineering</text>
                <text class="cls-5" transform="translate(83 710)">Cost
                    <tspan class="cls-7" x="37" y="0">r</tspan>
                    <tspan x="42" y="0">eduction and </tspan>
                    <tspan x="-27" y="19">p</tspan>
                    <tspan class="cls-6" x="-18" y="19">r</tspan>
                    <tspan x="-13" y="19">oductivity enhancement.</tspan>
                    <tspan x="-19" y="38">Principia engineers h</tspan>
                    <tspan class="cls-11" x="129" y="38">a</tspan>
                    <tspan class="cls-15" x="138" y="38">v</tspan>
                    <tspan x="145" y="38">e </tspan>
                    <tspan x="-15" y="58">hands-on experience in </tspan>
                    <tspan x="-23" y="77">driving successful Ene</tspan>
                    <tspan class="cls-7" x="136" y="77">r</tspan>
                    <tspan x="141" y="77">gy </tspan>
                    <tspan x="-19" y="96">Management P</tspan>
                    <tspan class="cls-6" x="90" y="96">r</tspan>
                    <tspan x="95" y="96">og</tspan>
                    <tspan class="cls-8" x="113" y="96">r</tspan>
                    <tspan x="118" y="96">ams.</tspan>
                </text>
                <text class="cls-1" transform="translate(106 65)">Admin</text>
                <text class="cls-5" transform="translate(63 108)">website yang diperuntukkan
                    <tspan x="-9" y="19">untuk admin, klik dibawah ini </tspan>
                </text>
                <text class="cls-1" transform="translate(87 365)">
                    <tspan class="cls-17">V</tspan>
                    <tspan x="18" y="0">alidation</tspan>
                    <tspan x="-32" y="28">(Q&amp;C and CS</tspan>
                    <tspan class="cls-18" x="130" y="28">V</tspan>
                    <tspan x="149" y="28">)</tspan>
                </text>
                <text class="cls-5" transform="translate(46 437)">As pa
                    <tspan class="cls-19" x="40" y="0">r</tspan>
                    <tspan x="46" y="0">t of our wide expe</tspan>
                    <tspan class="cls-19" x="173" y="0">r</tspan>
                    <tspan x="178" y="0">tise, </tspan>
                    <tspan x="1" y="19">we p</tspan>
                    <tspan class="cls-6" x="34" y="19">r</tspan>
                    <tspan class="cls-11" x="39" y="19">o</tspan>
                    <tspan x="48" y="19">vide Commissioning &amp; </tspan>
                    <tspan x="6" y="38">Qualification and Computer </tspan>
                    <tspan x="2" y="58">System </tspan>
                    <tspan class="cls-17" x="59" y="58">V</tspan>
                    <tspan x="69" y="58">alidation Solutions.</tspan>
                </text>
                <text class="cls-1" transform="translate(138 1266)">
                    <tspan class="cls-20">I
                        <tspan class="cls-21" x="8" y="0">T</tspan>
                    </tspan>
                    <tspan x="-80" y="28">Manufacturing</tspan>
                </text>
                <text class="cls-5" transform="translate(47 1323)">Our Manufacturing E
                    <tspan class="cls-6" x="146" y="0">x</tspan>
                    <tspan x="154" y="0">ecution </tspan>
                    <tspan x="38" y="19">Systems comprise </tspan>
                    <tspan x="0" y="38">applications that connect the </tspan>
                    <tspan class="cls-7" x="-5" y="58">r</tspan>
                    <tspan x="0" y="58">eal-time data originated at the </tspan>
                    <tspan x="-1" y="77">shop floor with the enterprise </tspan>
                    <tspan x="40" y="96">l</tspan>
                    <tspan class="cls-15" x="44" y="96">ev</tspan>
                    <tspan x="60" y="96">el applications. </tspan>
                </text>
            </symbol>
            <symbol id="industries" viewBox="0 0 512 512">
                <path d="M17.528 189.7l29.46 5.893c1.875 5.74 4.193 11.33 6.924 16.708l-16.667 25.002c-5.745 8.618-4.6 20.188 2.725 27.51l13.196 13.197c7.32 7.322 18.892 8.47 27.51 2.724l25.002-16.666c5.378 2.732 10.97 5.05 16.708 6.922l5.893 29.46c2.03 10.157 11.022 17.53 21.378 17.53h18.663c10.357 0 19.35-7.373 21.38-17.528l5.893-29.462c5.74-1.874 11.33-4.19 16.708-6.922l25.003 16.666c8.617 5.745 20.188 4.602 27.51-2.724l13.197-13.197c7.323-7.323 8.47-18.893 2.724-27.51L264.067 212.3c2.73-5.377 5.05-10.97 6.923-16.707l29.46-5.892c10.157-2.03 17.53-11.022 17.53-21.378v-1.248h26.946V277.2c0 4.464 3.618 8.083 8.084 8.083 4.466 0 8.084-3.62 8.084-8.084V167.073H478.82c3.464 8.69 6.444 17.646 8.902 26.85 1.153 4.314 5.583 6.876 9.897 5.725 4.313-1.152 6.876-5.584 5.724-9.898C473.492 78.03 371.78 0 256 0c-14.635 0-29.312 1.246-43.626 3.704-4.4.756-7.354 4.936-6.6 9.336s4.928 7.356 9.337 6.6c13.412-2.303 27.17-3.47 40.89-3.47 92.894 0 176.116 53.604 215.667 134.736H361.095v-45.81c0-24.357-8.524-48.1-24.003-66.854-2.84-3.443-7.937-3.93-11.38-1.09-3.444 2.842-3.93 7.938-1.09 11.382 13.094 15.864 20.304 35.952 20.304 56.56v45.812H317.98v-1.247c0-10.357-7.373-19.35-17.53-21.38l-29.46-5.892c-1.874-5.74-4.192-11.33-6.923-16.708l16.668-25c5.745-8.62 4.6-20.19-2.725-27.512l-13.196-13.196c-7.32-7.323-18.89-8.47-27.51-2.725l-25.002 16.667c-5.378-2.732-10.97-5.05-16.708-6.923L189.7 17.53C187.67 7.372 178.68 0 168.32 0H149.66c-10.356 0-19.348 7.372-21.38 17.527l-5.892 29.462c-5.74 1.873-11.33 4.19-16.708 6.922L80.676 37.244c-8.617-5.745-20.188-4.602-27.51 2.724L39.97 53.165c-7.323 7.323-8.47 18.893-2.724 27.51l16.667 25.002c-2.73 5.378-5.048 10.97-6.922 16.708l-29.46 5.892C7.37 130.31 0 139.3 0 149.657v18.664c0 10.358 7.372 19.35 17.528 21.38zm-1.36-40.042c0-2.676 1.906-5 4.53-5.524l34.205-6.84c2.985-.598 5.38-2.82 6.2-5.75 2.18-7.793 5.298-15.315 9.263-22.355 1.494-2.653 1.37-5.92-.318-8.453l-19.35-29.03c-1.485-2.226-1.19-5.216.703-7.11l13.2-13.196c1.89-1.892 4.88-2.188 7.108-.703l29.03 19.353c2.532 1.688 5.8 1.81 8.452.317 7.04-3.966 14.56-7.082 22.353-9.262 2.93-.82 5.152-3.215 5.75-6.2l6.84-34.207c.525-2.625 2.85-4.53 5.525-4.53h18.663c2.676 0 5 1.906 5.525 4.53l6.842 34.208c.597 2.984 2.82 5.38 5.75 6.2 7.792 2.18 15.313 5.296 22.353 9.26 2.652 1.494 5.918 1.373 8.452-.316l29.03-19.353c2.225-1.483 5.215-1.19 7.11.704L266.578 64.6c1.894 1.893 2.19 4.883.705 7.11l-19.353 29.03c-1.688 2.532-1.812 5.798-.318 8.45 3.966 7.04 7.082 14.562 9.263 22.357.82 2.93 3.215 5.15 6.2 5.748l34.206 6.84c2.626.526 4.53 2.85 4.53 5.525v18.663c0 2.677-1.906 5-4.53 5.525l-34.205 6.84c-2.985.598-5.38 2.82-6.2 5.75-2.18 7.793-5.298 15.315-9.263 22.355-1.494 2.652-1.37 5.92.318 8.452l19.353 29.03c1.484 2.226 1.19 5.216-.704 7.11l-13.2 13.196c-1.89 1.892-4.88 2.188-7.108.704l-29.03-19.353c-2.534-1.69-5.8-1.812-8.452-.318-7.04 3.966-14.562 7.082-22.353 9.262-2.93.82-5.152 3.215-5.75 6.2l-6.84 34.207c-.525 2.626-2.85 4.53-5.525 4.53H149.66c-2.676 0-5-1.905-5.525-4.53l-6.842-34.207c-.597-2.984-2.82-5.38-5.75-6.2-7.792-2.18-15.313-5.296-22.353-9.26-1.235-.696-2.602-1.04-3.968-1.04-1.566 0-3.13.454-4.484 1.357l-29.03 19.353c-2.226 1.483-5.215 1.19-7.11-.704l-13.195-13.2c-1.894-1.892-2.19-4.882-.705-7.11l19.353-29.028c1.69-2.533 1.813-5.8.32-8.452-3.967-7.04-7.083-14.56-9.264-22.356-.82-2.93-3.215-5.15-6.2-5.748l-34.206-6.84c-2.625-.525-4.53-2.85-4.53-5.525V149.66z"></path>
                <path d="M158.99 212.345c14.046 0 27.31-5.413 37.34-15.244 3.19-3.124 3.24-8.243.115-11.43-3.126-3.193-8.245-3.24-11.43-.117-6.993 6.85-16.236 10.624-26.027 10.624-20.505 0-37.187-16.683-37.187-37.187 0-20.505 16.684-37.187 37.188-37.187 20.505 0 37.187 16.683 37.187 37.187 0 4.465 3.62 8.084 8.084 8.084 4.465 0 8.083-3.62 8.083-8.084 0-29.42-23.936-53.356-53.356-53.356S105.63 129.57 105.63 158.99c.004 29.42 23.94 53.355 53.36 53.355zM353.01 369.718c-20.505 0-37.187 16.683-37.187 37.187 0 20.505 16.683 37.187 37.187 37.187 20.505 0 37.187-16.683 37.187-37.187 0-20.505-16.682-37.187-37.187-37.187zm0 58.206c-11.59 0-21.02-9.43-21.02-21.02s9.43-21.018 21.02-21.018 21.02 9.43 21.02 21.02-9.43 21.018-21.02 21.018z"></path>
                <path d="M509.79 222.216c-.584-4.427-4.652-7.538-9.073-6.958-4.426.584-7.542 4.646-6.958 9.073 1.373 10.42 2.07 21.077 2.07 31.67 0 30.53-5.84 60.79-17.047 88.927h-42.726c-.696-2.988-2.206-5.808-4.493-8.093l-8.483-8.483c-5.678-5.677-14.648-6.564-21.327-2.11l-14.686 9.79c-2.61-1.255-5.288-2.365-8.022-3.323l-3.46-17.306c-1.576-7.873-8.547-13.587-16.576-13.587h-12c-8.028 0-15 5.715-16.574 13.588l-3.46 17.307c-2.735.96-5.413 2.068-8.023 3.323l-14.686-9.79c-6.68-4.454-15.65-3.566-21.327 2.11l-8.485 8.485c-5.678 5.678-6.565 14.65-2.11 21.33l9.788 14.684c-1.255 2.61-2.365 5.287-3.323 8.02l-17.308 3.462c-7.873 1.575-13.587 8.546-13.587 16.575v11.998c0 8.03 5.715 15 13.588 16.575l17.307 3.46c.958 2.735 2.068 5.413 3.323 8.023l-9.79 14.684c-4.454 6.68-3.567 15.652 2.113 21.33l8.483 8.484c5.68 5.68 14.65 6.566 21.327 2.113l14.686-9.79c2.61 1.254 5.288 2.364 8.022 3.322l3.46 17.306c1.576 7.875 8.547 13.59 16.576 13.59h12c8.028 0 15-5.716 16.574-13.59l3.46-17.305c2.735-.96 5.413-2.068 8.023-3.323l14.686 9.79c6.682 4.456 15.652 3.566 21.327-2.11l8.485-8.485c5.678-5.678 6.565-14.65 2.11-21.33l-9.788-14.684c1.255-2.61 2.365-5.288 3.323-8.022l17.308-3.46c7.873-1.575 13.587-8.546 13.587-16.575v-11.998c0-8.03-5.715-15-13.587-16.575l-17.308-3.46c-.958-2.735-2.068-5.413-3.323-8.023l7.834-11.754h39.914c-1.742 3.575-3.575 7.11-5.5 10.595-2.156 3.91-.736 8.828 3.173 10.985 3.908 2.158 8.826.737 10.983-3.173 4.11-7.446 7.833-15.09 11.164-22.902.14-.282.264-.575.372-.874C505.076 324.34 512 290.324 512 256c0-11.298-.744-22.665-2.21-33.784zm-68.444 177.97c.342.07.59.372.59.72v11.998c0 .35-.247.652-.59.72l-21.99 4.398c-2.985.597-5.38 2.82-6.2 5.75-1.34 4.787-3.253 9.407-5.69 13.73-1.493 2.653-1.37 5.92.32 8.453l12.44 18.662c.193.29.155.68-.092.926l-8.485 8.484c-.248.246-.638.285-.927.092l-18.662-12.442c-2.533-1.69-5.8-1.81-8.45-.317-4.327 2.437-8.946 4.35-13.733 5.69-2.93.82-5.15 3.216-5.748 6.2l-4.4 21.99c-.067.343-.37.592-.72.592h-11.997c-.348 0-.65-.248-.72-.59l-4.398-21.99c-.597-2.986-2.82-5.38-5.748-6.2-4.787-1.34-9.408-3.255-13.732-5.69-1.235-.696-2.602-1.04-3.968-1.04-1.566 0-3.13.454-4.484 1.357L295.3 474.12c-.29.194-.68.154-.926-.092l-8.483-8.483c-.246-.247-.285-.636-.09-.928l12.44-18.662c1.687-2.533 1.81-5.8.317-8.452-2.437-4.325-4.35-8.944-5.69-13.73-.82-2.932-3.214-5.153-6.2-5.75l-21.988-4.4c-.344-.068-.593-.37-.593-.72v-11.998c0-.35.248-.652.59-.72l21.99-4.398c2.986-.597 5.38-2.82 6.2-5.75 1.34-4.787 3.254-9.407 5.69-13.73 1.494-2.653 1.37-5.92-.318-8.453l-12.44-18.662c-.195-.29-.157-.68.09-.926l8.485-8.484c.245-.247.637-.286.926-.092l18.663 12.44c2.532 1.69 5.8 1.81 8.452.318 4.326-2.436 8.945-4.35 13.732-5.69 2.93-.82 5.15-3.215 5.748-6.2l4.398-21.99c.068-.342.372-.59.72-.59h11.998c.35 0 .652.247.72.59l4.4 21.99c.596 2.985 2.818 5.38 5.747 6.2 4.787 1.34 9.408 3.254 13.732 5.69 2.65 1.493 5.917 1.37 8.45-.317l18.663-12.44c.29-.195.68-.156.927.092l8.483 8.483c.247.247.286.636.092.928l-12.44 18.662c-1.688 2.533-1.812 5.8-.318 8.452 2.437 4.324 4.35 8.944 5.69 13.73.82 2.932 3.214 5.153 6.2 5.75l21.99 4.4zM271.08 495.365c-4.99.31-10.062.467-15.08.467-64.06 0-124.29-24.947-169.586-70.244-3.158-3.158-8.276-3.156-11.433 0s-3.156 8.275 0 11.432C123.334 485.372 187.62 512 256 512c5.35 0 10.76-.167 16.08-.497 4.456-.276 7.845-4.113 7.568-8.57-.275-4.454-4.075-7.85-8.568-7.568z"></path>
                <path d="M40.313 361.095h110.592v45.81c0 20.864 6.1 41.026 17.646 58.306 1.558 2.335 4.12 3.596 6.73 3.596 1.542 0 3.103-.442 4.483-1.362 3.712-2.48 4.71-7.5 2.23-11.213-9.76-14.612-14.92-31.67-14.92-49.323v-45.81h80.842c4.466 0 8.084-3.62 8.084-8.085 0-4.465-3.62-8.084-8.085-8.084h-80.842V339c0-4.465-3.618-8.084-8.084-8.084-4.467 0-8.085 3.62-8.085 8.084v5.928H33.137c-11.19-27.992-16.97-58.004-16.97-88.928 0-17.193 1.828-34.352 5.433-50.998.945-4.363-1.826-8.667-6.19-9.612-4.37-.943-8.666 1.827-9.612 6.19C1.95 219.348 0 237.657 0 256c0 55.886 17.686 108.983 51.146 153.554 2.68 3.57 7.748 4.292 11.32 1.61 3.57-2.68 4.29-7.747 1.61-11.318-9.212-12.272-17.15-25.234-23.763-38.75z"></path>
            </symbol>
            <symbol id="validation" viewBox="0 0 512 512">
                <path d="M245.221 328.758h21.558c4.465 0 8.084-3.62 8.084-8.084 0-4.465-3.62-8.084-8.084-8.084h-21.558c-4.465 0-8.084 3.62-8.084 8.084 0 4.464 3.619 8.084 8.084 8.084zM299.116 328.758h21.558c4.465 0 8.084-3.62 8.084-8.084 0-4.465-3.62-8.084-8.084-8.084h-21.558c-4.465 0-8.084 3.62-8.084 8.084 0 4.464 3.619 8.084 8.084 8.084zM243.884 206.589c1.505 2.258 4.034 3.6 6.725 3.6.167 0 .335-.005.503-.016 2.876-.179 5.44-1.876 6.728-4.453l32.337-64.674c1.997-3.994.378-8.85-3.615-10.846-3.991-1.996-8.848-.377-10.846 3.615l-26.108 52.213-13.831-20.745c-2.477-3.714-7.496-4.719-11.21-2.242-3.716 2.476-4.719 7.496-2.242 11.21l21.559 32.338zM191.326 328.758h21.558c4.465 0 8.084-3.62 8.084-8.084 0-4.465-3.62-8.084-8.084-8.084h-21.558c-4.465 0-8.084 3.62-8.084 8.084 0 4.464 3.62 8.084 8.084 8.084z"></path>
                <path d="M493.137 32.337H361.095V18.863c0-10.4-8.463-18.863-18.863-18.863H169.768c-10.401 0-18.863 8.463-18.863 18.863v13.474H18.863C8.463 32.337 0 40.799 0 51.2v291.032c0 10.401 8.463 18.863 18.863 18.863h175.158v13.474c0 10.401 8.463 18.863 18.863 18.863h13.474v59.284h-35.032c-10.401 0-18.863 8.463-18.863 18.863v24.253H148.21c-4.465 0-8.084 3.62-8.084 8.084 0 4.465 3.62 8.084 8.084 8.084h118.568c4.465 0 8.084-3.62 8.084-8.084 0-4.465-3.62-8.084-8.084-8.084h-78.147v-24.253c0-1.485 1.209-2.695 2.695-2.695h129.347c1.485 0 2.695 1.209 2.695 2.695v24.253h-24.253c-4.465 0-8.084 3.62-8.084 8.084 0 4.465 3.62 8.084 8.084 8.084h64.674c4.465 0 8.084-3.62 8.084-8.084 0-4.465-3.62-8.084-8.084-8.084h-24.253v-24.253c0-10.401-8.463-18.863-18.863-18.863h-35.032v-59.284h13.474c10.401 0 18.863-8.463 18.863-18.863v-13.474h175.158c10.401 0 18.863-8.463 18.863-18.863V51.2c.001-10.401-8.462-18.863-18.862-18.863zM269.474 452.716h-26.947v-59.284h26.947v59.284zm226.358-110.484c0 1.485-1.209 2.695-2.695 2.695h-204.8c-4.465 0-8.084 3.62-8.084 8.084 0 4.465 3.62 8.084 8.084 8.084h13.474v13.474c0 1.485-1.209 2.695-2.695 2.695h-86.232c-1.485 0-2.695-1.209-2.695-2.695v-13.474H256c4.465 0 8.084-3.62 8.084-8.084 0-4.465-3.62-8.084-8.084-8.084H18.863c-1.485 0-2.695-1.209-2.695-2.695v-45.81h479.663v45.81zm0-61.979H16.168v-102.4H78.54l14.504 29.007c2.297 4.594 6.915 7.447 12.051 7.447s9.754-2.854 12.051-7.448l14.504-29.006h41.201c4.08 42.284 39.814 75.453 83.149 75.453s79.069-33.169 83.149-75.453h46.199c3.062 0 5.862-1.73 7.231-4.469l14.327-28.654 14.327 28.654c1.369 2.739 4.168 4.469 7.231 4.469h67.368v102.4zm-307.2-110.485c0-37.146 30.222-67.368 67.368-67.368s67.368 30.222 67.368 67.368-30.222 67.369-67.368 67.369-67.368-30.222-67.368-67.369zm307.2-8.084H433.46l-14.504-29.007c-2.297-4.594-6.915-7.447-12.051-7.447s-9.754 2.854-12.051 7.448l-14.503 29.006h-41.203c-4.08-42.284-39.814-75.453-83.149-75.453S176.93 119.4 172.85 161.684h-46.198c-3.062 0-5.861 1.73-7.231 4.469l-14.327 28.655-14.327-28.655c-1.369-2.739-4.168-4.469-7.231-4.469H16.168V51.2c0-1.485 1.209-2.695 2.695-2.695h269.474c4.465 0 8.084-3.62 8.084-8.084 0-4.465-3.62-8.084-8.084-8.084H167.074V18.863c0-1.485 1.209-2.695 2.695-2.695h172.463c1.485 0 2.695 1.209 2.695 2.695v13.474h-24.253c-4.465 0-8.084 3.62-8.084 8.084 0 4.465 3.62 8.084 8.084 8.084h172.463c1.485 0 2.695 1.209 2.695 2.695v110.484z"></path>
            </symbol>
            <symbol id="mahasiswa" viewBox="0 0 512 512" href="./assets/media/icons/admin.png">
                <path ></path>
                
            </symbol>
            <symbol id="manufacturing" viewBox="0 0 512 512">
                
            </symbol>
            <symbol id="technical" viewBox="0 0 512 512">
                
            </symbol>
            <symbol id="process" viewBox="0 0 512 512">
                
            </symbol>

            <svg x="150" y="0" width="350" height="350" viewBox="0 0 500 500">
                <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="250.2542" y1="496.283" x2="250.2542" y2="-.2102">
                    <stop offset="0" stop-color="#DAA520"></stop>
                    <stop offset="1" stop-color="#000000" stop-opacity="0"></stop>
                </linearGradient>
                <path fill="url(#a)" d="M250.3 0c137 0 248.1 111.1 248.1 248.1S387.3 496.2 250.3 496.2 2.2 385.1 2.2 248.1 113.2 0 250.3 0C112.5 0 .8 111.7.8 249.5S112.5 499 250.3 499s249.5-111.7 249.5-249.5S388 0 250.3 0z"></path>
            </svg>
            <g id="service-collection">

            </g>
            <circle cx="325" cy="170" r="140" class="center"></circle>
            <use x="185" y="30" width="280" height="280" xlink:href="#circle-nav-copy" class="nav-copy"></use>
            <rect data-url="/admin" id="learn-more" x="280" y="250" width="90" height="30"></rect>
            <text x="290" y="270" class="learn-more-text">Learn more</text>

        </svg>
        <div class="runtext-container">
            <div class="main-runtext">
                <marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">

                    <div class="holder">

                       <div class="text-container">
                         &nbsp; &nbsp; <img src="./assets/media/logos/logo-mini-sm.png"> &nbsp; <a data-fancybox-group="gallery" class="fancybox" href="images/runtext/Electric_Lighting_Act.jpg">PEP BANDUNG Politeknik Energi dan Pertambangan Bandung, yang terdapat Program Studi Geologi,Pertambangan dan Metalurgi</a>
                     </div>
                 </div>

             </marquee>
         </div>
     </div>
    </div>
    <div class="container">
    </div>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
    <script id="rendered-js">
        const center = { x: 325, y: 175 };
        const serv_dist = 250;
        const pointer_dist = 172;
        const pointer_time = 2;
        const icon_size = 42;
        const circle_radius = 38;
        const text_top_margin = 18;
        const tspan_delta = 16;

    //name is used as the title for the bubble
    //icon is the id of the corresponding svg symbol
    const services_data = [
    { name: "Admin", icon: "admin" },
    { name: "kepegawaian", icon: "validation" },
    { name: "Pegawai", icon: "validation" },
    { name: "Dosen", icon: "engineering" },
    { name: "Mahasiswa", icon: "mahasiswa" },
    { name: "Perangkat\nkampus", icon: "management" }
    ];


    const services = document.getElementById("service-collection");
    const nav_container = document.getElementById("circle-nav-services");
    const symbol_copy = document.getElementById("circle-nav-copy");
    const use_copy = document.querySelector("use.nav-copy");

    //Keeps code DRY avoiding namespace for element creation
    function createSVGElement(el) {
        return document.createElementNS("http://www.w3.org/2000/svg", el);
    }

    //Quick setup for multiple attributes
    function setAttributes(el, options) {
        Object.keys(options).forEach(function (attr) {
            el.setAttribute(attr, options[attr]);
        });
    }

    //Service bubbles are created dynamically
    function addService(serv, index) {
        let group = createSVGElement("g");
        group.setAttribute("class", "service serv-" + index);

        /* This group is needed to apply animations in
        the icon and its background at the same time */
        let icon_group = createSVGElement("g");
        icon_group.setAttribute("class", "icon-wrapper");

        let circle = createSVGElement("circle");
        setAttributes(circle, {
            r: circle_radius,
            cx: center.x,
            cy: center.y });

        let circle_shadow = circle.cloneNode();
        setAttributes(circle, {
            class: 'shadow' });

        icon_group.appendChild(circle_shadow);
        icon_group.appendChild(circle);

        let symbol = createSVGElement("use");
        setAttributes(symbol, {
            'x': center.x - icon_size / 2,
            'y': center.y - icon_size / 2,
            'width': icon_size,
            'height': icon_size });

        symbol.setAttributeNS("http://www.w3.org/1999/xlink", "xlink:href", "#" + serv.icon);
        icon_group.appendChild(symbol);

        group.appendChild(icon_group);

        let text = createSVGElement("text");
        setAttributes(text, {
            x: center.x,
            y: center.y + circle_radius + text_top_margin });


        let tspan = createSVGElement("tspan");
        if (serv.name.indexOf('\n') >= 0) {

            let tspan2 = tspan.cloneNode();
            let name = serv.name.split('\n');
            jQuery(tspan).text(name[0]);
            jQuery(tspan2).text(name[1]);

            setAttributes(tspan2, {
                x: center.x,
                dy: tspan_delta });


            text.appendChild(tspan);
            text.appendChild(tspan2);
        } else
        {
            jQuery(tspan).text(serv.name);
            text.appendChild(tspan);
        }

        group.appendChild(text);
        services.appendChild(group);

        let service_bubble = jQuery(".serv-" + index);

        //Uses tween to look for right position
        twn_pivot_path.seek(index);
        TweenLite.set(service_bubble, {
            x: pivot_path.x,
            y: pivot_path.y,
            transformOrigin: "center center" });


        service_bubble.click(serviceClick);
    }

    //Creates pointer
    function createPointer() {
        let service_pointer = createSVGElement("circle");

        setAttributes(service_pointer, {
            cx: center.x - pointer_dist,
            cy: center.y,
            r: 12,
            class: "pointer" });


        nav_container.appendChild(service_pointer);

        service_pointer = document.querySelector("svg .pointer");

        let pointer_circle = [
        { x: 0, y: 0 },
        { x: pointer_dist, y: pointer_dist },
        { x: pointer_dist * 2, y: 0 },
        { x: pointer_dist, y: -pointer_dist },
        { x: 0, y: 0 }];


        twn_pointer_path.to(service_pointer, pointer_time, {
            bezier: {
                values: pointer_circle,
                curviness: 1.5 },
                ease: Power0.easeNone,
                transformOrigin: "center center" });


    }

    //Defines behavior for service bubbles
    function serviceClick(ev) {

        //There's always an active service
        jQuery(".service.active").removeClass("active");

        let current = jQuery(ev.currentTarget);
        current.addClass("active");

        //There's a "serv-*" class for each bubble
        let current_class = current.attr("class").split(" ")[1];
        let class_index = current_class.split('-')[1];

        //Hides current text of the main bubble
        jQuery(use_copy).addClass("changing");

        //Sets pointer to the right position
        twn_pointer_path.tweenTo(class_index * (pointer_time / (2 * 6)));

        //After it's completely hidden, the text changes and becomes visible
        setTimeout(() => {
            let viewBoxY = 300 * class_index;
            symbol_copy.setAttribute("viewBox", "0 " + viewBoxY + " 300 300");
            jQuery(use_copy).removeClass("changing");
        }, 250);
    }

    //Array describes points for a whole circle in order to get
    //the right curve
    let half_circle = [
    { x: -serv_dist, y: 0 },
    { x: 0, y: serv_dist },
    { x: serv_dist, y: 0 },
    { x: 0, y: -serv_dist },
    { x: -serv_dist, y: 0 }];


    //A simple object is used in the tween to retrieve its values
    var pivot_path = { x: half_circle[0].x, y: half_circle[0].y };

    //The object is animated with a duration based on how many bubbles
    //should be placed
    var twn_pivot_path = TweenMax.to(pivot_path, 12, {
        bezier: {
            values: half_circle,
            curviness: 1.5 },

            ease: Linear.easeNone });


    services_data.reduce((count, serv) => {
        addService(serv, count);
        return ++count;
    }, 0);

    //The variable is modified inside the function
    //but its also used later to toggle its class
    var twn_pointer_path = new TimelineMax({ paused: true });
    createPointer();

    //Adding it immediately triggers a bug for the transform
    setTimeout(() => jQuery("#service-collection .serv-0").addClass("active"), 200);
    //# sourceURL=pen.js
</script>


</body>

</html>



