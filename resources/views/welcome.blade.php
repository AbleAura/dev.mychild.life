<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mychild Life</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            font-size: inherit;
            line-height: inherit;
            font-family: "Helvetica Now Text", Helvetica, Arial, sans-serif;
            color: #000000;
            background-color: #ffffff;
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row row-1">
            <div class="col-12 top-bar">
                <div class="row top-bar">
                    <div class="col-auto icon center-content top-bar">
                        <!-- First icon -->
                        {{-- <img src="{{ asset('images/heart.png') }}" alt="First Icon"> --}}
                        AUTISM ISN'T A DISABILITY, IT'S A DIFFERENT ABILITY.
                    </div>
                    <div class="col center-content top-bar">
                        <!-- Content for the first row -->
                        {{-- AUTISM ISN'T A DISABILITY, IT'S A DIFFERENT ABILITY. --}}
                    </div>
                    <div class="col-auto top-bar">
                        <!-- Second icon -->
                        {{-- <img src="{{ asset('images/forever.png') }}" alt="Second Icon"> --}}
                        <nav class="nav top-bar">
                            <a class="nav-link top-link" href="#">Login</a>
                            <span class="nav-divider">|</span>
                            <a class="nav-link top-link" href="#">SignUp</a>
                            <span class="nav-divider">|</span>
                            <a class="nav-link top-link" href="#">Help</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-2 second-top-bar">
            <div class="col-3 second-top-bar">
                <!-- First column with logo -->
                <img class="second-top-bar logo-image"
                    src="https://aurahomes.life/static/homeslogofinal-39691d36e0c10abaa49cee9f57d2c128.png"
                    alt="Logo">
            </div>
            <div class="col-5 center-nav">
                <!-- Second column with center nav -->
                <nav class="nav">
                    <a class="nav-link top-second-link" href="#" data-submenu="submenu1">Menu 1</a>
                    <a class="nav-link top-second-link" href="#" data-submenu="submenu2">Menu 2</a>
                    <a class="nav-link top-second-link" href="#" data-submenu="submenu3">Menu 3</a>
                    <a class="nav-link top-second-link" href="#" data-submenu="submenu4">Menu 4</a>
                    <a class="nav-link top-second-link" href="#" data-submenu="submenu5">Menu 5</a>
                    <!-- Add more menu items and dropdowns as needed -->
                </nav>
                <!-- Submenu container -->
                <div class="submenu" id="submenu1">
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="#">Submenu 1.1</a></li>
                                <li><a href="#">Submenu 1.2</a></li>
                                <!-- Add more submenu items as needed -->
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Submenu 1.3</a></li>
                                <li><a href="#">Submenu 1.4</a></li>
                                <!-- Add more submenu items as needed -->
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Submenu 1.5</a></li>
                                <li><a href="#">Submenu 1.6</a></li>
                                <!-- Add more submenu items as needed -->
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Submenu 1.7</a></li>
                                <li><a href="#">Submenu 1.8</a></li>
                                <!-- Add more submenu items as needed -->
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Submenu 1.9</a></li>
                                <li><a href="#">Submenu 1.10</a></li>
                                <!-- Add more submenu items as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="submenu" id="submenu2">
                    <!-- Submenu content -->
                    <ul>
                        <li><a href="#">Submenu 2.1</a></li>
                        <li><a href="#">Submenu 2.2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
                <div class="submenu" id="submenu3">
                    <!-- Submenu content -->
                    <ul>
                        <li><a href="#">Submenu 3.1</a></li>
                        <li><a href="#">Submenu 3.2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
                <div class="submenu" id="submenu4">
                    <!-- Submenu content -->
                    <ul>
                        <li><a href="#">Submenu 4.1</a></li>
                        <li><a href="#">Submenu 4.2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
                <div class="submenu" id="submenu5">
                    <!-- Submenu content -->
                    <ul>
                        <li><a href="#">Submenu 5.1</a></li>
                        <li><a href="#">Submenu 5.2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
                <!-- Repeat the structure for other submenus -->
            </div>



            <div class="col-4 second-top-bar search-div center-nav">
                <!-- Third column with search input and icons -->
                <div class="row">
                    <div class="col-6">
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4 search-div-width">
                            <div class="input-group search-width">
                                <div class="input-group-prepend">
                                    <button id="button-addon2 search-icon-button" type="submit"
                                        class="btn btn-link text-warning"><img src="{{ asset('images/search.png') }}"
                                            alt="Search Icon"></button>
                                </div>
                                <input type="search" placeholder="Search" aria-describedby="button-addon2"
                                    class="form-control border-0 bg-light search-input">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-3 center-nav">
                                <img class="nav-icon" src="{{ asset('images/like.png') }}" alt="like Icon">
                            </div>
                            <div class="col-3 center-nav">
                                <img class="nav-icon" src="{{ asset('images/market.png') }}" alt="market Icon">
                            </div>
                            <div class="col-3 center-nav">

                            </div>
                            <div class="col-3 center-nav">

                            </div>

                        </div>

                    </div>

                </div>


            </div>
            <!-- Hamburger icon container -->
            <div class="col-3 center-nav hamburger-icon">
                <img src="{{ asset('images/menu.png') }}" alt="Hamburger Icon">
            </div>
            <!-- Hamburger menu -->
            <div class="menu" id="navMenu">
                <div class="close-menu">
                    <img src="{{ asset('images/close.png') }}" alt="Close Icon" class="close-icon">
                </div>
                <a class="menu-link top-second-link" href="#" data-submenu="submenu1">Menu 1</a>
                <a class="menu-link top-second-link" href="#" data-submenu="submenu2">Menu 2</a>
                <a class="menu-link top-second-link" href="#" data-submenu="submenu3">Menu 3</a>
                <a class="menu-link top-second-link" href="#" data-submenu="submenu4">Menu 4</a>
                <a class="menu-link top-second-link" href="#" data-submenu="submenu5">Menu 5</a>
                <!-- Close button -->

            </div>

        </div>
    </div>
    
    <div class="clearfix"></div>
    <div class="con">
        <div class="innercon1">
            <div class="subcon">
                <img src="{{ asset('images/emotions.png') }}" alt="Emotional" class="centered-image">
                <p>Emotional</p>
            </div>
        </div>
        <div style="background-color: #44bd32;" class="innercon1">
            <div class="subcon">
                <img src="{{ asset('images/heart.png') }}" alt="Health">
                <p>Health</p>
            </div>
        </div>
        <div style="background-color: #fbc531;" class="innercon2">
            <div class="subcon">
                <img src="{{ asset('images/runningman.png') }}" alt="Activity">
                <p>Activity</p>
            </div>
        </div>
        <div style="background-color: #e84118;" class="innercon3">
            <div class="subcon">
                <img src="{{ asset('images/socialnetwork.png') }}" alt="Social">
                <p>Social</p>
            </div>
        </div>
        <div style="background-color: #e84118;" class="innercon3">
            <div class="subcon">
                <img src="{{ asset('images/day.png') }}" alt="Sleep">
                <p>Sleep</p>
            </div>
        </div>
    </div>

    <div class="secondcon">
        <div class="main">
            <div class="left">
                <img src="{{ asset('images/emotions.png') }}" alt="Emotional">
            </div>
            <div class="right">
                <h3>Emotional:</h3>
                <p>Happy 22 days, Anxiety 3 days, Neutral 4 days, Sad 1 day</p>
            </div>
        </div>
        <div class="main">
            <div class="left">
                <img src="{{ asset('images/heart.png') }}" alt="Health">
            </div>
            <div class="right">
                <h3>Health:</h3>
                <p>Fever 1 day, Gastritis 2 days</p>
            </div>
        </div>
        <div class="main">
            <div class="left">
                <img src="{{ asset('images/runningman.png') }}" alt="Activity">
            </div>
            <div class="right">
                <h3>Activity:</h3>
                <p>Average Daily Calorie Burn 1000 cals</p>
            </div>
        </div>
        <div class="main">
            <div class="left">
                <img src="{{ asset('images/socialnetwork.png') }}" alt="Social">
            </div>
            <div class="right">
                <h3>Social:</h3>
                <p>Only for 7 days</p>
            </div>
        </div>
        <div class="main">
            <div class="left">
                <img src="{{ asset('images/day.png') }}" alt="Sleep">
            </div>
            <div class="right">
                <h3>Sleep:</h3>
                <p>On-time only 11 days</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var topSecondLinks = document.querySelectorAll(".top-second-link");
            topSecondLinks.forEach(function(link) {
                var submenuId = link.getAttribute("data-submenu");
                var submenu = document.getElementById(submenuId);
                if (submenu) {
                    var timeout;

                    link.addEventListener("mouseenter", function() {
                        clearTimeout(timeout);
                        submenu.style.display = "block";
                    });
                    link.addEventListener("mouseleave", function() {
                        timeout = setTimeout(function() {
                            submenu.style.display = "none";
                        }, 300);
                    });

                    submenu.addEventListener("mouseenter", function() {
                        clearTimeout(timeout);
                        submenu.style.display = "block";
                    });
                    submenu.addEventListener("mouseleave", function() {
                        timeout = setTimeout(function() {
                            submenu.style.display = "none";
                        }, 300);
                    });
                }
            });
        });
    </script>
    <script>
        document.getElementById("likeContainer").addEventListener("mouseenter", function() {
            this.style.backgroundColor = "#f00"; /* Red background on hover */
            this.style.borderRadius = "50%"; /* Make it a circle */
            this.style.overflow = "hidden";
        });

        document.getElementById("likeContainer").addEventListener("mouseleave", function() {
            this.style.backgroundColor = "transparent"; /* Reset background color */
            this.style.borderRadius = "0"; /* Reset border radius */
            this.style.overflow = "visible"; /* Reset overflow */
        });
    </script>
    <script>
        document.querySelector(".hamburger-icon").addEventListener("click", function() {
            var navMenu = document.getElementById("navMenu");
            if (navMenu.style.display === "flex") {
                navMenu.style.display = "none";
                document.body.style.overflow = "auto"; // Enable scrolling
            } else {
                navMenu.style.display = "flex";
                document.body.style.overflow = "hidden"; // Disable scrolling
            }
        });

        document.querySelector(".close-icon").addEventListener("click", function() {
            document.getElementById("navMenu").style.display = "none";
            document.body.style.overflow = "auto"; // Enable scrolling
        });

        window.addEventListener("resize", function() {
            if (window.innerWidth > 576) {
                document.getElementById("navMenu").style.display = "none";
                document.body.style.overflow = "auto"; // Enable scrolling
            }
        });
    </script>

</body>

</html>
