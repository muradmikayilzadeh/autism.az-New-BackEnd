<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<link href="{{url('assets/css/admin/bootstrap.min.css')}}" rel="stylesheet" />
<style>
	body{
		background: #333333;
	}
	.col-md-12{
		background: #5CB85C;
		color:white;
		font-size: 18px;
		padding:5px;
	}
	a:hover{
		color:white;
		text-decoration: none;

	}
	.panel{
		margin-top: 100px;
	}
	
	h2{
		margin-top: 30px;
	}
	input{
		margin-top: 20px;
	}
	input:last-child{
		margin-bottom: 20px;
	}
</style>
<body>
<div class="container-fluid">
	<div class="row">

		<a href="{{url('/')}}" class="col-md-12 text-center">
			<b>Səhifəyə qayıt</b>
		</a>

		<div class="panel col-md-4 col-md-offset-4 text-center">
			<h2><b>ADMIN LOGIN</b></h2>
			@if ($message = Session::get('wrong'))
		         <b style="color:red">{{ $message }}</b>
		    @endif
			<form action="{{url('/mlgroupcheck')}}" method="post">
				{{ csrf_field() }}
				<input type="text" name="email" class="form-control" placeholder="E-poçt ünvanınız">
				<input type="password" name="password" class="form-control" placeholder="Şifrəniz">

				<input type="submit" class="btn btn-success" value="Giriş">
			
			</form>
		</div>
	</div>
</div>
</body>
</html>