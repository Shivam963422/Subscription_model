<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Subscription-Form</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="content">
<div class="row">
<div class="col-md-12">
<div class="card card-user">
<div class="card-header">
<h5 class="card-title">Subscription Form</h5>
</div>
<div class="card-body">
@if(Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif

<form method="post" action="/subscription-form">
{{csrf_field()}}
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label> Email </label>
<input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div> 
</div>
<div class="row">
<div class="update ml-auto mr-auto">
<button type="submit" class="btn btn-primary btn-round">Send</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>