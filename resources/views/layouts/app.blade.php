<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@yield('title') </title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

        <!-- DataTables  CDN -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


    </head>

    <body class="container">

        <div class="row">
            <nav class="col-md-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Produt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.create') }}">Add Product</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="container">

            @yield('content')
            
        </div>

        <script type="text/javascript">

            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
            $(document).ready(function() {
                $('#datatable').DataTable();
            });
            
        </script>
    </body>
</html>

