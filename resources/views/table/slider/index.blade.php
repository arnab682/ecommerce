@extends('layouts.admin')

@section('title')
  Slider
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{route('slider.create')}}" class="btn btn-success">Add New</a>
              <a href="{{route('sliderPdf')}}" class="btn btn-primary">PDF</a>
              <a href="{{route('sliderXl')}}" class="btn btn-info">XL</a>
              <button onclick="print()" class="btn btn-dark">Print</button>
          </div>
            <div class="card">

                <div class="card-header bg-light">
                    Slider Index :
                </div>


                <!-- @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif

                @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif -->


  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-striped">



        <tr>
            <th>Sl.</th>
            <th>Title</th>
            <th>Image</th>
            <th>Caption</th>
            <th>Link</th>
            <th>Active</th>
            <th>Created At</th>
            <th>Modified At</th>
            <th>Action</th>
        </tr>
        @php
            $sl = 0;
        @endphp
        @foreach($sliders as $slider)
            <tr>
                <td>{{++$sl}}</td>

                <td><a href="{{route('slider.show',$slider->id)}}">{{$slider['title']}} </a></td>

                <td>
                    <img src="{{ asset('images/slider/').'/'.$slider->picture }}" width="100" height="100">
                </td>
                <td>{{$slider['caption']}}</td>
                <td><a href="{{route('slider.show',$slider->id)}}}}">{{$slider['link']}}</a></td>

                @if($slider->is_active==1)
                    <td> Active {!! Form::open(array('url' => ['slider/deactivate'],'onclick'=>"return confirm('Are you sure you want to DeActivate this item?');",'method' => 'PUT')) !!}
                        <input type="hidden" value="{{$slider->id}}" class="form-control" id="id" name="id">
                        <button type="submit" class="btn btn-primary">De Activate</button>
                        {!! Form::close() !!}</td>
                    @else
                    <td>De Active{!! Form::open(array('url' => ['slider/activate'],'onclick'=>"return confirm('Are you sure you want to Activate this item?');",'method' => 'PUT')) !!}
                        <input type="hidden" value="{{$slider->id}}" class="form-control" id="id" name="id">
                        <button type="submit" class="btn btn-primary"> Activate</button>
                        {!! Form::close() !!}</td>
                @endif




                <td>{{$slider['created_at']}}</td>
                <td>{{$slider['updated_at']}}</td>
                <td>
                     <a href="{{route('slider.edit',$slider->id)}}">Edit</a>|
                    {!! Form::open(array('route' => ['slider.destroy',$slider->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}
                    <!-- {{--{!! Form::open(array('route' => ['labs.destroy',$slider->id],'method' => 'DELETE')) !!}--}} -->
                    <button type="submit" class="btn btn-primary">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
  </div>
</div>
</div>
</div>
</div>
</div>

@endsection
