@extends('layouts.admin')

@section('title')
  Page
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Page Update :
                </div>

                <form class="" action="{{url('/page/'.$page->id)}}" method="post">@csrf
                  {{ method_field('put') }}
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Title</label>
                                  <input name="title" class="form-control" value="{{$page->title}}">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Description :</label>
                                <input type="text" value="{{$page->description}}" name="description" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Link :</label><br>
                                <input type="link" value="{{$page->link}}" name="link" class="form-control">
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
