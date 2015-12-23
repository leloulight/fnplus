@extends('apanel.yonetimLayout')

@section('title','Kullanıcı Ekle | Fn+ Soft')
@endsection

@section('pagename')
	Ayar Ekle
@endsection

@section('prewievpagename')
	Ayar ekleme işlemleri
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/yonetim/ayarlar/ekle') }}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Ayar Adı</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Site Başlığı</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Site Açıklaması</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="description" value="{{ old('description') }}" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Anahtar Kelimeler</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="keywords" value="{{ old('keywords') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Ayar Aktif Edilsin mi?</label>
							<div class="col-md-6">
								<input type="radio" name="active" value="1">Evet
								<input type="radio" name="active" value="0" checked>Hayır
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Favicon</label>
							<div class="col-md-6">
								<input type="file" name="favicon">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Ayar Ekle
								</button>
							</div>
						</div>
					</form>

				</div><!-- /.box-body -->
			</div><!-- /.box -->

		</div><!-- /.row -->

	</section><!-- /.content -->


@stop
