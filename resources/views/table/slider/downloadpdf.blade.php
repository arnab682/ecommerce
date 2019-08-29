<!doctype html>
<html lang="en">
<head>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
</head>
<body>

    <table  class="table table-bordered">
        <thead class="" style=" text-color: dark;">
            <tr>
                <th style="text-align: center;">No.</th>
                <th style="text-align: center;">Title</th>
                <th style="text-align: center;">Image</th>
                <th style="text-align: center;">Caption</th>
                <th style="text-align: center;">Link</th>
                <th style="text-align: center;">Created At</th>
                <th style="text-align: center;">Modified At</th>

            </tr>
        </thead>
        @php
            $sl = 0;
        @endphp
        @foreach($sliders as $slider)
            <tr>
                <td style="text-align: center;">{{++$sl}}.</td>
                <td style="text-align: center;">{{$slider->title}}</td>
                <td style="text-align: center;"> <img src="{{ asset('/images/slider/'.$slider->picture) }}" width="100" height="60"> </td>
                <td style="text-align: center;">{{$slider->caption}}</td>
                <td style="text-align: center;">{{$slider->link}}</td>
                <td style="text-align: center;">{{$slider['created_at']}}</td>
                <td style="text-align: center;">{{$slider['updated_at']}}</td>

            </tr>
        @endforeach
    </table>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
