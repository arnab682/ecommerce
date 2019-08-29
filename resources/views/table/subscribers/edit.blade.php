@extends('layouts.admin')

@section('title')
  Subscriber
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Subscriber Update :
                </div>

                <form class="" action="{{route('subscriber.update',$subscriber->id)}}" method="post" enctype="multipart/form-data">@csrf
                  {{ method_field('put') }}
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Email :</label>
                                <input value="{{$subscriber->email}}" type="email" name="email" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label for="normal-input" class="form-control-label">Subcribed</label>
                                  <input value="{{$subscriber->is_subcribed}}" name="is_subcribed" class="form-control" >
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Reason :</label>
                                <textarea name="reason" rows="1" cols="20" class="form-control">{{ $subscriber->reason }}</textarea>
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
