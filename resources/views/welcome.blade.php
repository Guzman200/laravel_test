<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Datatables</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

        @livewireStyles


    </head>
    <body>

      <div class="card p-4">
        <div class="card-body">
          
           <div>
            @livewire('contador')
           </div>

        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

      <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

      <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

      <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
          
      <script src="{{asset('js/app.js')}}"></script>
       
    </body>

    @livewireScripts

    
</html>
