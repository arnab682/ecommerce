@extends('layouts.admin')

@section('title')
  Brand
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Brand Update :
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


                <form action="{{route('brand.update', $brand->id)}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}

                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Title</label>
                                  <input name="title" class="form-control"value="{{$brand->title}}">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Draft :</label>
                                @if($brand->is_draft==1)
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
                                <label class="form-control-label">Active :</label>
                                @if($brand->is_active==1)
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
                                <label class="form-control-label">Soft Delete :</label>
                                @if($brand->soft_delete==1)
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
