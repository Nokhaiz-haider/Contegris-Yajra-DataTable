<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Contegris') }}</title>

        <!-- Bootstrap CSS -->
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <style>
            body {
                padding-top: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>


        <script>
            $(document).ready(function(){
                $('#customers-table').DataTable({
                    processing: true,
                    serverSide: false,
                    ajax: '{!! route('get.customers') !!}',
                    column:[
                        {column:"cust_id", name:"id"},
                        {column:"cust_first_name", name:"first_name"},
                        {column:"cust_last_name", name:"last_name"},
                        {column:"cust_email", name:"email"},
                        {column:"cust_tel_no", name:"telephone"},
                        {column:"cust_address", name:"address"},
                        {column:"cust_city", name:"city"},
                    ]
                });
            });
        </script>
        
    </body>
</html>