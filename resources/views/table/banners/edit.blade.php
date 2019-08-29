@extends('layouts.admin')

@section('title')
  Banner
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Banner Update :
                </div>
                @if(Session::has('success'))
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
                @endif


                <form action="{{route('banner.update',$banner->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    {{ method_field('put') }}

                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Title</label>
                                  <input name="title" value="{{$banner->title}}" class="form-control" placeholder="title">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label for="exampleInputFile" class="form-control-label">File input :</label><br>
                                <input type="file" name="image" id="exampleInputFile" class="form-control">
                                <img src="{{ asset('/images/banner/'.$banner->picture) }}" width="150"><br><br>
                            </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Link :</label><br>
                                <input type="link" value="{{$banner->link}}" name="link" class="form-control">
                            </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Promotional Message :</label><br>
                                <input type="text" value="{{$banner->promotional_message}}" name="promotional_message" class="form-control">
                            </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Html Banner :</label><br>
                                <input type="text" value="{{$banner->html_banner}}" name="html_banner" class="form-control">
                            </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Active :</label>
                                @if($banner->is_active==1)
                                    <input type="radio" name="is_active" value="1" checked>Yes
                                    <input type="radio" name="is_active" value="0">No
                                @else
                                    <input type="radio" name="is_active" value="1">Yes
                                    <input type="radio" name="is_active" value="0" checked>No
                                @endif
                            </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Draft :</label>
                                @if($banner->is_draft==1)
                                    <input type="radio" name="is_draft" value="1" checked>Yes
                                    <input type="radio" name="is_draft" value="0">No
                                @else
                                    <input type="radio" name="is_draft" value="1">Yes
                                    <input type="radio" name="is_draft" value="0" checked>No
                                @endif
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Soft Delete :</label>
                                @if($banner->soft_delete==1)
                                    <input type="radio" name="soft_delete" value="1" checked>Yes
                                    <input type="radio" name="soft_delete" value="0">No
                                @else
                                    <input type="radio" name="soft_delete" value="1">Yes
                                    <input type="radio" name="soft_delete" value="0" checked>No
                                @endif
                            </div>

                          </div>
                      </div>
                  <button class="btn btn-success" type="submit">Update Post</button>
                  <button class="btn btn-success" type="reset">Reset</button>
                  </div>
                </form>

            </div>
        </div>
    </div>

</div>
</div>


@endsection
