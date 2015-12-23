@extends('apanel.yonetimLayout')

@section('title','Kullanıcı Ekle | Fn+ Soft')
@endsection

@section('pagename')
	Kullanıcı Ekle
@endsection

@section('prewievpagename')
	Kullanıcı ekleme işlemleri
@endsection

@section('content')


	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Messages</span>
						<span class="info-box-number">1,410</span>
					</div><!-- /.info-box-content -->
				</div><!-- /.info-box -->
			</div><!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Bookmarks</span>
						<span class="info-box-number">410</span>
					</div><!-- /.info-box-content -->
				</div><!-- /.info-box -->
			</div><!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Uploads</span>
						<span class="info-box-number">13,648</span>
					</div><!-- /.info-box-content -->
				</div><!-- /.info-box -->
			</div><!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Likes</span>
						<span class="info-box-number">93,139</span>
					</div><!-- /.info-box-content -->
				</div><!-- /.info-box -->
			</div><!-- /.col -->
		</div><!-- /.row -->


		<div class="col-xs-12">
			<div class="box">

				<div class="box-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger text-center">
							<strong>HATA!</strong> Girdiğiniz bilgileri kontrol ederek tekrar giriniz.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

						@if ($basarili = session()->get('basarili'))
							<div class="alert alert-success text-center">
								<strong>BAŞARILI!</strong> {{ $basarili }}
							</div>
						@endif

						@if ($hata = session()->get('hata'))
							<div class="alert alert-danger text-center">
								<strong>HATA!</strong> {{ $hata }}
							</div>
						@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/yonetim/kullanici/ekle') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Kullanıcı Adı</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="username" value="{{ old('username') }}" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Adı</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Soyadı</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Şifre</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Kullanici ekle
								</button>
							</div>
						</div>
					</form>

				</div><!-- /.box-body -->
			</div><!-- /.box -->

		</div><!-- /.row -->

	</section><!-- /.content -->


@stop
