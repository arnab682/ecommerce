@extends('layouts.admin')

@section('title')
  Contact
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Contact Update :
                </div>

                <form class="" action="{{route('contact.update',$contact->id)}}" method="post" enctype="multipart/form-data">@csrf
                  {{ method_field('put') }}
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Name :</label>
                                <input type="text" value="{{$contact->name}}" name="name" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Email :</label>
                                <input type="email" value="{{$contact->email}}" name="email" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Subject :</label>
                                <input type="text" value="{{$contact->subject}}" name="subject" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Comment :</label>
                                <input type="text" value="{{$contact->comment}}" name="comment" class="form-control">
                            </div>

                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label">Date Time :</label>
                                <input type="date" value="{{$contact->datetime}}" name="datetime" class="form-control">
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
