<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->

    <!-- Your custom styles (optional) -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="content">
    	<form action="{{url('/admins')}}" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}

        <div class="form-group">
            <label>Name :</label>
            <input type="text" name="name">
        </div>

        <div class="form-group">
            <label>Email :</label>
            <input type="email" name="email">
        </div>

        <div class="form-group">
            <label>Phone :</label>
            <input type="phone" name="phone">
        </div>

        <div class="form-group">
            <label>Soft Delete :</label>
            <input type="text" name="soft_delete">
        </div>

        <div class="form-group">
            <label>Draft :</label>
            <input type="text" name="is_draft">
        </div>


        <div class="form-group">
          <input type = "submit" value = "Submit" />
          <input type = "reset"  value = "Reset" />
        </div>

      </form>
    </div>
  </body>
</html>
