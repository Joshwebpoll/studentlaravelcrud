 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>{{ $title ?? 'Page Title' }}</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     @livewireStyles
 </head>

 <body>


     <livewire:tutorial />


     @livewireScripts

     {{-- <script>
         document.addEventListener('livewire:initialized', () => {
             @this.on('close-modal', (event) => {
                 @this.dispatch('refresh-posts');
             });
         });
     </script> --}}

 </body>

 </html>