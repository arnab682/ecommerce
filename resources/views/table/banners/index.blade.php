@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

    <!-- <table class="table table-bordered"> -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
          <div><a href="{{url('/banner/create')}}" class="btn btn-success">Add New</a>
              <a href="" class="btn btn-primary">PDF</a>
              <a href="" class="btn btn-info">XL</a>
              <button onclick="print()">Print</button>
          </div>
            <div class="card">
                <div class="card-header bg-light">
                    Banner Index :
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                               <thead>
                                 <tr>
                                   <th>No.</th>
                                   <th>Title</th>
                                   <th>Picture</th>
                                   <th>Link</th>
                                   <th>Promotional Massage</th>
                                   <th>Html Banner</th>
                                   <th>Active</th>
                                   <th>Draft</th>
                                   <th>Soft Delete</th>
                                    <th>Max Display</th>
                                   <th>Action</th>
                                 </tr>
                               </thead>
                         @php
                            $sl = 0;
                         @endphp
                        @foreach($banners as $banner)
                             <tbody>
                               <tr>
                                 <td>{{++$sl}}</td>
                                 <td><a href="{{route('banner.show',$banner->id)}}">{{$banner->title}}</a></td>
                                 <td><img src="{{ asset('images/banner/'.$banner->picture) }}" width="100" height="100"></td>
                                 <td>{{$banner->link}}</td>
                                 <td>{{$banner->promotional_message}}</td>
                                 <td>{{$banner->html_banner}}</td>
                                 <td>{{$banner->is_active}}</td>
                                 <td>{{$banner->is_draft}}</td>
                                 <td>{{$banner->soft_delete}}</td>
                                 <td>{{$banner->max_display}}</td>
                                 <td>
                                      <a href="{{route('banner.edit',$banner->id)}}">Edit</a>|
                                     {!! Form::open(array('url' => ['banner',$banner->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}

                                     <button type="submit" class="btn btn-primary">Delete</button>
                                     {!! Form::close() !!}
                                 </td>
                               </tr>
                        @endforeach
                             </tbody>
                           </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>

@endsection
