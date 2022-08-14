<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>


    <div class="container mt-5">
        <div class="row">
            <input type="search" id="search" name="search" placeholder="search here" class="form-control">
        </div>
        <div id="search_list">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                    </tr>
                    @foreach ($categories as $key=>$category)
                    <tr>
                        <td>{{ $key++ }}</td>
                        <td>{{ $category->name }}</td>
                    </tr>
                    @endforeach
                </thead>
                <tbody>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var search = $(this).val();
                $.ajax({
                    url: "{{ route('search') }}"
                    , type: 'get'
                    , data: {
                        'search': search
                    }
                    , success: function(data) {
                        $('#search_list').html(data);
                    },
                });
            });
        });

    </script>
</body>

</html>
