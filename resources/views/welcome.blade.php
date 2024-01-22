<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daniel & Kellan</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <div class="flex justify-center">
                        <svg class="dxk-logo-lightmode" width="432" height="240" fill="white" viewBox="0 0 54 30" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="rainbow" x1="0" y1="0" x2="1" y2="0">
                                    <stop offset="0%"   stop-color="red"/>
                                    <stop offset="16%"  stop-color="orange"/>
                                    <stop offset="33%"  stop-color="yellow"/>
                                    <stop offset="50%"  stop-color="green"/>
                                    <stop offset="66%"  stop-color="blue"/>
                                    <stop offset="83%"  stop-color="indigo"/>
                                    <stop offset="100%" stop-color="violet"/>
                                </linearGradient>
                            </defs>
                            <path d="M12 8.14453C12 12.9375 16.3359 20.0391 20.4023 20.0391H20.9297C24.9961 20.0391 29.332 12.9375 29.332 8.14453C29.332 5.55469 28.0547 4.23047 25.582 4.23047H24.3398V6.11719H25.6758C26.8594 6.11719 27.4453 6.82031 27.4453 8.12109C27.4453 11.8359 24 18.1523 20.6602 18.1523C17.3203 18.1523 13.8867 11.8359 13.8867 8.12109C13.8867 6.82031 14.4727 6.11719 15.6445 6.11719H16.9805V4.23047H15.7383C13.2773 4.23047 12 5.55469 12 8.14453ZM25.6523 28.7461C29.2148 28.7461 31.0664 25.9102 32.0508 20.1914C32.8008 15.9258 33.832 14.5898 35.543 14.5898C37.5117 14.5898 38.4609 16.582 38.6367 20.6602H40.5234C40.1719 15.3633 38.707 12.7031 35.543 12.7031C32.6836 12.7031 31.1367 14.6484 30.1992 19.7695C29.3672 24.375 28.3242 26.8594 25.5352 26.8594C23.0039 26.8594 21.5742 24.1172 21.5859 19.2773H19.6992C19.6875 25.3594 21.8438 28.7461 25.6523 28.7461ZM17.5664 6.92578C18.5273 6.92578 19.3242 6.12891 19.3242 5.15625C19.3242 4.18359 18.5273 3.38672 17.5664 3.38672C16.5938 3.38672 15.7969 4.18359 15.7969 5.15625C15.7969 6.12891 16.5938 6.92578 17.5664 6.92578ZM23.7422 6.92578C24.7148 6.92578 25.5117 6.12891 25.5117 5.15625C25.5117 4.18359 24.7148 3.38672 23.7422 3.38672C22.7812 3.38672 21.9844 4.18359 21.9844 5.15625C21.9844 6.12891 22.7812 6.92578 23.7422 6.92578ZM39.6562 27.1875C41.6953 27.1875 43.3594 25.5352 43.3594 23.4727C43.3594 21.4336 41.6953 19.7812 39.6562 19.7695C37.6055 19.7578 35.9414 21.4336 35.9414 23.4727C35.9414 25.5352 37.6055 27.1875 39.6562 27.1875ZM39.6562 25.5352C38.5195 25.5352 37.582 24.6094 37.582 23.4727C37.582 22.3242 38.5195 21.4102 39.6562 21.4102C40.793 21.4102 41.7188 22.3242 41.7188 23.4727C41.7188 24.6094 40.793 25.5352 39.6562 25.5352Z" fill="url(#rainbow)"/>
                            <path d="M0.923296 16.3651V15.2642C1.9117 15.2642 2.60121 15.0571 2.99183 14.6428C3.38838 14.2285 3.58665 13.536 3.58665 12.5653V9.72443C3.58665 8.90767 3.66359 8.2004 3.81747 7.60263C3.97727 7.00485 4.23473 6.51065 4.58984 6.12003C4.94496 5.7294 5.41844 5.43939 6.0103 5.25C6.60215 5.06061 7.3331 4.96591 8.20312 4.96591V6.70597C7.51657 6.70597 6.97502 6.8125 6.57848 7.02557C6.18786 7.23864 5.90968 7.57008 5.74396 8.01989C5.58416 8.46378 5.50426 9.03196 5.50426 9.72443V13.2756C5.50426 13.7372 5.44212 14.1574 5.31783 14.5362C5.19946 14.915 4.97751 15.2405 4.65199 15.5128C4.32647 15.785 3.86186 15.9951 3.25817 16.1431C2.66039 16.2911 1.8821 16.3651 0.923296 16.3651ZM8.20312 27.6932C7.3331 27.6932 6.60215 27.5985 6.0103 27.4091C5.41844 27.2197 4.94496 26.9297 4.58984 26.5391C4.23473 26.1484 3.97727 25.6542 3.81747 25.0565C3.66359 24.4587 3.58665 23.7514 3.58665 22.9347V20.0938C3.58665 19.1231 3.38838 18.4306 2.99183 18.0163C2.60121 17.602 1.9117 17.3949 0.923296 17.3949V16.294C1.8821 16.294 2.66039 16.368 3.25817 16.516C3.86186 16.6639 4.32647 16.8741 4.65199 17.1463C4.97751 17.4186 5.19946 17.7441 5.31783 18.1229C5.44212 18.5017 5.50426 18.9219 5.50426 19.3835V22.9347C5.50426 23.6271 5.58416 24.1953 5.74396 24.6392C5.90968 25.0831 6.18786 25.4116 6.57848 25.6246C6.97502 25.8436 7.51657 25.9531 8.20312 25.9531V27.6932ZM0.923296 17.3949V15.2642H3.01847V17.3949H0.923296ZM52.346 16.294V17.3949C51.3576 17.3949 50.6651 17.602 50.2686 18.0163C49.8779 18.4306 49.6826 19.1231 49.6826 20.0938V22.9347C49.6826 23.7514 49.6027 24.4587 49.4429 25.0565C49.289 25.6542 49.0345 26.1484 48.6794 26.5391C48.3243 26.9297 47.8508 27.2197 47.259 27.4091C46.6671 27.5985 45.9362 27.6932 45.0661 27.6932V25.9531C45.7527 25.9531 46.2913 25.8436 46.6819 25.6246C47.0785 25.4116 47.3566 25.0831 47.5164 24.6392C47.6821 24.1953 47.765 23.6271 47.765 22.9347V19.3835C47.765 18.9219 47.8242 18.5017 47.9426 18.1229C48.0669 17.7441 48.2918 17.4186 48.6173 17.1463C48.9428 16.8741 49.4044 16.6639 50.0022 16.516C50.6059 16.368 51.3872 16.294 52.346 16.294ZM45.0661 4.96591C45.9362 4.96591 46.6671 5.06061 47.259 5.25C47.8508 5.43939 48.3243 5.7294 48.6794 6.12003C49.0345 6.51065 49.289 7.00485 49.4429 7.60263C49.6027 8.2004 49.6826 8.90767 49.6826 9.72443V12.5653C49.6826 13.536 49.8779 14.2285 50.2686 14.6428C50.6651 15.0571 51.3576 15.2642 52.346 15.2642V16.3651C51.3872 16.3651 50.6059 16.2911 50.0022 16.1431C49.4044 15.9951 48.9428 15.785 48.6173 15.5128C48.2918 15.2405 48.0669 14.915 47.9426 14.5362C47.8242 14.1574 47.765 13.7372 47.765 13.2756V9.72443C47.765 9.03196 47.6821 8.46378 47.5164 8.01989C47.3566 7.57008 47.0785 7.23864 46.6819 7.02557C46.2913 6.8125 45.7527 6.70597 45.0661 6.70597V4.96591ZM52.346 15.2642V17.3949H50.2508V15.2642H52.346Z" fill="url(#rainbow)"/>
                        </svg>
                        <svg class="dxk-logo-darkmode" width="432" height="240" fill="white" viewBox="0 0 54 30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 8.14453C12 12.9375 16.3359 20.0391 20.4023 20.0391H20.9297C24.9961 20.0391 29.332 12.9375 29.332 8.14453C29.332 5.55469 28.0547 4.23047 25.582 4.23047H24.3398V6.11719H25.6758C26.8594 6.11719 27.4453 6.82031 27.4453 8.12109C27.4453 11.8359 24 18.1523 20.6602 18.1523C17.3203 18.1523 13.8867 11.8359 13.8867 8.12109C13.8867 6.82031 14.4727 6.11719 15.6445 6.11719H16.9805V4.23047H15.7383C13.2773 4.23047 12 5.55469 12 8.14453ZM25.6523 28.7461C29.2148 28.7461 31.0664 25.9102 32.0508 20.1914C32.8008 15.9258 33.832 14.5898 35.543 14.5898C37.5117 14.5898 38.4609 16.582 38.6367 20.6602H40.5234C40.1719 15.3633 38.707 12.7031 35.543 12.7031C32.6836 12.7031 31.1367 14.6484 30.1992 19.7695C29.3672 24.375 28.3242 26.8594 25.5352 26.8594C23.0039 26.8594 21.5742 24.1172 21.5859 19.2773H19.6992C19.6875 25.3594 21.8438 28.7461 25.6523 28.7461ZM17.5664 6.92578C18.5273 6.92578 19.3242 6.12891 19.3242 5.15625C19.3242 4.18359 18.5273 3.38672 17.5664 3.38672C16.5938 3.38672 15.7969 4.18359 15.7969 5.15625C15.7969 6.12891 16.5938 6.92578 17.5664 6.92578ZM23.7422 6.92578C24.7148 6.92578 25.5117 6.12891 25.5117 5.15625C25.5117 4.18359 24.7148 3.38672 23.7422 3.38672C22.7812 3.38672 21.9844 4.18359 21.9844 5.15625C21.9844 6.12891 22.7812 6.92578 23.7422 6.92578ZM39.6562 27.1875C41.6953 27.1875 43.3594 25.5352 43.3594 23.4727C43.3594 21.4336 41.6953 19.7812 39.6562 19.7695C37.6055 19.7578 35.9414 21.4336 35.9414 23.4727C35.9414 25.5352 37.6055 27.1875 39.6562 27.1875ZM39.6562 25.5352C38.5195 25.5352 37.582 24.6094 37.582 23.4727C37.582 22.3242 38.5195 21.4102 39.6562 21.4102C40.793 21.4102 41.7188 22.3242 41.7188 23.4727C41.7188 24.6094 40.793 25.5352 39.6562 25.5352Z"/>
                            <path d="M0.923296 16.3651V15.2642C1.9117 15.2642 2.60121 15.0571 2.99183 14.6428C3.38838 14.2285 3.58665 13.536 3.58665 12.5653V9.72443C3.58665 8.90767 3.66359 8.2004 3.81747 7.60263C3.97727 7.00485 4.23473 6.51065 4.58984 6.12003C4.94496 5.7294 5.41844 5.43939 6.0103 5.25C6.60215 5.06061 7.3331 4.96591 8.20312 4.96591V6.70597C7.51657 6.70597 6.97502 6.8125 6.57848 7.02557C6.18786 7.23864 5.90968 7.57008 5.74396 8.01989C5.58416 8.46378 5.50426 9.03196 5.50426 9.72443V13.2756C5.50426 13.7372 5.44212 14.1574 5.31783 14.5362C5.19946 14.915 4.97751 15.2405 4.65199 15.5128C4.32647 15.785 3.86186 15.9951 3.25817 16.1431C2.66039 16.2911 1.8821 16.3651 0.923296 16.3651ZM8.20312 27.6932C7.3331 27.6932 6.60215 27.5985 6.0103 27.4091C5.41844 27.2197 4.94496 26.9297 4.58984 26.5391C4.23473 26.1484 3.97727 25.6542 3.81747 25.0565C3.66359 24.4587 3.58665 23.7514 3.58665 22.9347V20.0938C3.58665 19.1231 3.38838 18.4306 2.99183 18.0163C2.60121 17.602 1.9117 17.3949 0.923296 17.3949V16.294C1.8821 16.294 2.66039 16.368 3.25817 16.516C3.86186 16.6639 4.32647 16.8741 4.65199 17.1463C4.97751 17.4186 5.19946 17.7441 5.31783 18.1229C5.44212 18.5017 5.50426 18.9219 5.50426 19.3835V22.9347C5.50426 23.6271 5.58416 24.1953 5.74396 24.6392C5.90968 25.0831 6.18786 25.4116 6.57848 25.6246C6.97502 25.8436 7.51657 25.9531 8.20312 25.9531V27.6932ZM0.923296 17.3949V15.2642H3.01847V17.3949H0.923296ZM52.346 16.294V17.3949C51.3576 17.3949 50.6651 17.602 50.2686 18.0163C49.8779 18.4306 49.6826 19.1231 49.6826 20.0938V22.9347C49.6826 23.7514 49.6027 24.4587 49.4429 25.0565C49.289 25.6542 49.0345 26.1484 48.6794 26.5391C48.3243 26.9297 47.8508 27.2197 47.259 27.4091C46.6671 27.5985 45.9362 27.6932 45.0661 27.6932V25.9531C45.7527 25.9531 46.2913 25.8436 46.6819 25.6246C47.0785 25.4116 47.3566 25.0831 47.5164 24.6392C47.6821 24.1953 47.765 23.6271 47.765 22.9347V19.3835C47.765 18.9219 47.8242 18.5017 47.9426 18.1229C48.0669 17.7441 48.2918 17.4186 48.6173 17.1463C48.9428 16.8741 49.4044 16.6639 50.0022 16.516C50.6059 16.368 51.3872 16.294 52.346 16.294ZM45.0661 4.96591C45.9362 4.96591 46.6671 5.06061 47.259 5.25C47.8508 5.43939 48.3243 5.7294 48.6794 6.12003C49.0345 6.51065 49.289 7.00485 49.4429 7.60263C49.6027 8.2004 49.6826 8.90767 49.6826 9.72443V12.5653C49.6826 13.536 49.8779 14.2285 50.2686 14.6428C50.6651 15.0571 51.3576 15.2642 52.346 15.2642V16.3651C51.3872 16.3651 50.6059 16.2911 50.0022 16.1431C49.4044 15.9951 48.9428 15.785 48.6173 15.5128C48.2918 15.2405 48.0669 14.915 47.9426 14.5362C47.8242 14.1574 47.765 13.7372 47.765 13.2756V9.72443C47.765 9.03196 47.6821 8.46378 47.5164 8.01989C47.3566 7.57008 47.0785 7.23864 46.6819 7.02557C46.2913 6.8125 45.7527 6.70597 45.0661 6.70597V4.96591ZM52.346 15.2642V17.3949H50.2508V15.2642H52.346Z"/>
                        </svg>

                    </div>
                </div>

            </div>
        </div>
        <script>
            function handleColorSchemeChange(event) {
                const darkModeSVG = document.querySelector('.dxk-logo-darkmode');
                const lightModeSVG = document.querySelector('.dxk-logo-lightmode');

                if (event.matches) {
                    // Dark mode is preferred
                    darkModeSVG.style.display = 'block';
                    lightModeSVG.style.display = 'none';
                } else {
                    // Light mode is preferred
                    darkModeSVG.style.display = 'none';
                    lightModeSVG.style.display = 'block';
                }
            }

            // Listen for changes in the color scheme preference
            window.matchMedia('(prefers-color-scheme: dark)').addListener(handleColorSchemeChange);

            // Initial call to set the initial display based on the current color scheme
            handleColorSchemeChange(window.matchMedia('(prefers-color-scheme: dark)'));
        </script>
    </body>
</html>
