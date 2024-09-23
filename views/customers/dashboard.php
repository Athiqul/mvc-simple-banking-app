<html class="h-full bg-gray-100" lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwindcss CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AlpineJS CDN -->
    <script defer="" src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <style>
      * {
        font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont,
          'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans',
          'Helvetica Neue', sans-serif;
      }
    </style>

    <title>Dashboard</title>
  <style>/* ! tailwindcss v3.4.5 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0}.absolute{position:absolute}.relative{position:relative}.right-0{right:0px}.z-10{z-index:10}.-mx-4{margin-left:-1rem;margin-right:-1rem}.-my-2{margin-top:-0.5rem;margin-bottom:-0.5rem}.mx-auto{margin-left:auto;margin-right:auto}.-mr-2{margin-right:-0.5rem}.-mt-32{margin-top:-8rem}.ml-3{margin-left:0.75rem}.ml-auto{margin-left:auto}.mt-2{margin-top:0.5rem}.mt-3{margin-top:0.75rem}.mt-8{margin-top:2rem}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.inline-flex{display:inline-flex}.flow-root{display:flow-root}.grid{display:grid}.hidden{display:none}.h-10{height:2.5rem}.h-16{height:4rem}.h-6{height:1.5rem}.h-full{height:100%}.min-h-full{min-height:100%}.w-10{width:2.5rem}.w-48{width:12rem}.w-6{width:1.5rem}.w-full{width:100%}.min-w-full{min-width:100%}.max-w-7xl{max-width:80rem}.flex-none{flex:none}.flex-shrink-0{flex-shrink:0}.origin-top-right{transform-origin:top right}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.items-baseline{align-items:baseline}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-2{gap:0.5rem}.gap-px{gap:1px}.gap-x-4{column-gap:1rem}.gap-y-2{row-gap:0.5rem}.space-x-4 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-1 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.25rem * var(--tw-space-y-reverse))}.divide-y > :not([hidden]) ~ :not([hidden]){--tw-divide-y-reverse:0;border-top-width:calc(1px * calc(1 - var(--tw-divide-y-reverse)));border-bottom-width:calc(1px * var(--tw-divide-y-reverse))}.divide-gray-200 > :not([hidden]) ~ :not([hidden]){--tw-divide-opacity:1;border-color:rgb(229 231 235 / var(--tw-divide-opacity))}.divide-gray-300 > :not([hidden]) ~ :not([hidden]){--tw-divide-opacity:1;border-color:rgb(209 213 219 / var(--tw-divide-opacity))}.overflow-x-auto{overflow-x:auto}.whitespace-nowrap{white-space:nowrap}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.border-b{border-bottom-width:1px}.border-t{border-top-width:1px}.border-emerald-300{--tw-border-opacity:1;border-color:rgb(110 231 183 / var(--tw-border-opacity))}.border-emerald-700{--tw-border-opacity:1;border-color:rgb(4 120 87 / var(--tw-border-opacity))}.border-opacity-25{--tw-border-opacity:0.25}.bg-emerald-100{--tw-bg-opacity:1;background-color:rgb(209 250 229 / var(--tw-bg-opacity))}.bg-emerald-600{--tw-bg-opacity:1;background-color:rgb(5 150 105 / var(--tw-bg-opacity))}.bg-emerald-700{--tw-bg-opacity:1;background-color:rgb(4 120 87 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.p-1{padding:0.25rem}.p-2{padding:0.5rem}.px-2{padding-left:0.5rem;padding-right:0.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.py-1{padding-top:0.25rem;padding-bottom:0.25rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-3\.5{padding-top:0.875rem;padding-bottom:0.875rem}.py-4{padding-top:1rem;padding-bottom:1rem}.pb-12{padding-bottom:3rem}.pb-3{padding-bottom:0.75rem}.pb-32{padding-bottom:8rem}.pl-4{padding-left:1rem}.pr-3{padding-right:0.75rem}.pt-2{padding-top:0.5rem}.pt-4{padding-top:1rem}.text-left{text-align:left}.align-middle{vertical-align:middle}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-base{font-size:1rem;line-height:1.5rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-10{line-height:2.5rem}.leading-6{line-height:1.5rem}.leading-none{line-height:1}.tracking-tight{letter-spacing:-0.025em}.text-emerald-100{--tw-text-opacity:1;color:rgb(209 250 229 / var(--tw-text-opacity))}.text-emerald-200{--tw-text-opacity:1;color:rgb(167 243 208 / var(--tw-text-opacity))}.text-emerald-300{--tw-text-opacity:1;color:rgb(110 231 183 / var(--tw-text-opacity))}.text-emerald-600{--tw-text-opacity:1;color:rgb(5 150 105 / var(--tw-text-opacity))}.text-emerald-700{--tw-text-opacity:1;color:rgb(4 120 87 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-red-600{--tw-text-opacity:1;color:rgb(220 38 38 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity:1;--tw-ring-color:rgb(0 0 0 / var(--tw-ring-opacity))}.ring-opacity-5{--tw-ring-opacity:0.05}.hover\:bg-emerald-500:hover{--tw-bg-opacity:1;background-color:rgb(16 185 129 / var(--tw-bg-opacity))}.hover\:bg-emerald-700:hover{--tw-bg-opacity:1;background-color:rgb(4 120 87 / var(--tw-bg-opacity))}.hover\:bg-gray-100:hover{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.hover\:bg-opacity-75:hover{--tw-bg-opacity:0.75}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring-inset:focus{--tw-ring-inset:inset}.focus\:ring-emerald-500:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(16 185 129 / var(--tw-ring-opacity))}.focus\:ring-white:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}.focus\:ring-offset-2:focus{--tw-ring-offset-width:2px}.focus\:ring-offset-emerald-600:focus{--tw-ring-offset-color:#059669}@media (min-width: 640px){.sm\:-mx-6{margin-left:-1.5rem;margin-right:-1.5rem}.sm\:ml-6{margin-left:1.5rem}.sm\:block{display:block}.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:flex-auto{flex:1 1 auto}.sm\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.sm\:items-center{align-items:center}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pl-0{padding-left:0px}}@media (min-width: 1024px){.lg\:-mx-8{margin-left:-2rem;margin-right:-2rem}.lg\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.lg\:px-0{padding-left:0px;padding-right:0px}.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (min-width: 1280px){.xl\:px-8{padding-left:2rem;padding-right:2rem}}</style></head>
  <body class="h-full">
    <div class="min-h-full">
     <!-- Navbar includes -->
        <?php require_once __DIR__ .'/../includes/customer_nav.php'?>
      <main class="-mt-32">
        <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">
          <div class="bg-white rounded-lg p-2">
            <!-- Current Balance Stat -->
            <dl class="mx-auto grid grid-cols-1 gap-px sm:grid-cols-2 lg:grid-cols-4">
              <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
                <dt class="text-sm font-medium leading-6 text-gray-500">
                  Current Balance
                </dt>
                <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">
                  $10,115,091.00
                </dd>
              </div>
            </dl>

            <!-- List of All The Transactions -->
            <div class="px-4 sm:px-6 lg:px-8">
              <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                  <p class="mt-2 text-sm text-gray-700">
                    Here's a list of all your transactions which inlcuded
                    receiver's name, email, amount and date.
                  </p>
                </div>
              </div>
              <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                      <thead>
                        <tr>
                          <th scope="col" class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                            Receiver Name
                          </th>
                          <th scope="col" class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                            Email
                          </th>
                          <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Amount
                          </th>
                          <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Date
                          </th>
                        </tr>
                      </thead>
                      <tbody class="divide-y divide-gray-200 bg-white">
                        <tr>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-800 sm:pl-0">
                            Bruce Wayne
                          </td>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-500 sm:pl-0">
                            bruce@wayne.com
                          </td>
                          <td class="whitespace-nowrap px-2 py-4 text-sm font-medium text-emerald-600">
                            +$10,240
                          </td>
                          <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                            29 Sep 2023, 09:25 AM
                          </td>
                        </tr>
                        <tr>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-800 sm:pl-0">
                            Al Nahian
                          </td>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-500 sm:pl-0">
                            alnahian@2003.com
                          </td>
                          <td class="whitespace-nowrap px-2 py-4 text-sm font-medium text-red-600">
                            -$2,500
                          </td>
                          <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                            15 Sep 2023, 06:14 PM
                          </td>
                        </tr>
                        <tr>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-800 sm:pl-0">
                            Muhammad Alp Arslan
                          </td>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-500 sm:pl-0">
                            alp@arslan.com
                          </td>
                          <td class="whitespace-nowrap px-2 py-4 text-sm font-medium text-emerald-600">
                            +$49,556
                          </td>
                          <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                            03 Jul 2023, 12:55 AM
                          </td>
                        </tr>

                        <tr>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-800 sm:pl-0">
                            Povilas Korop
                          </td>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-500 sm:pl-0">
                            povilas@korop.com
                          </td>
                          <td class="whitespace-nowrap px-2 py-4 text-sm font-medium text-emerald-600">
                            +$6,125
                          </td>
                          <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                            07 Jun 2023, 10:00 PM
                          </td>
                        </tr>

                        <tr>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-800 sm:pl-0">
                            Martin Joo
                          </td>
                          <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-gray-500 sm:pl-0">
                            martin@joo.com
                          </td>
                          <td class="whitespace-nowrap px-2 py-4 text-sm font-medium text-red-600">
                            -$125
                          </td>
                          <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                            02 Feb 2023, 8:30 PM
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>


</body></html>
