@extends('apanel.yonetimLayout')

@section('title','Kullanıcılar | Fn+ Soft')
@endsection

@section('pagename')
	Kullanıcılar
@endsection

@section('prewievpagename')
	Kullanıcı işlemleri
@endsection

@section('css')
	<link href="{{asset('/apanel/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
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
				<div class="box-header">
					<h3 class="box-title">Kullanıcılar</h3>
					<div class="text-right" style="margin-top: -20px;">
						<a href="/yonetim/kullanici/ekle" type="button" class="btn btn-success">
							<i class="fa fa-plus"></i> Kullanıcı Ekle
						</a>
					</div>
				</div><!-- /.box-header -->
				<div class="box-body">
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
					<table id="kullanicilar" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>#</th>
							<th>Kullanıcı Adı</th>
							<th>Adı Soyadı</th>
							<th>E-Mail</th>
							<th>Yetki</th>
							<th class="text-right">İşlem</th>
						</tr>
						</thead>
						<tbody>
						{{--*/ $sayac= 1 /*--}}
						@foreach($kullanici as $a)
						<tr>
							<td>{{$sayac++}}</td>
							<td>{{$a->username}}</td>
							<td>{{$a->first_name}} {{$a->last_name}}</td>
							<td>{{$a->email}}</td>
							<td>Admin</td>
							<td class="text-right">
								<a href="/yonetim/kullanici/goruntule/{{$a->id}}" type="button" class="btn btn-info" name="goruntule"
								   data-original-title="Görüntüle" data-toggle="tooltip">
									<i class="fa fa-eye"></i>
								</a>
								<a href="/yonetim/kullanici/duzenle/{{$a->id}}" type="button" class="btn btn-warning" name="duzenle"
								   data-original-title="Düzenle" data-toggle="tooltip">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="/yonetim/kullanici/sil/{{$a->id}}" type="button" class="btn btn-danger" name="sil"
								   data-original-title="Sil" data-toggle="tooltip">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						@endforeach


						</tbody>
						<tfoot>
						<tr>
							<th>#</th>
							<th>Kullanıcı Adı</th>
							<th>Adı Soyadı</th>
							<th>E-Mail</th>
							<th>Yetki</th>
							<th class="text-right">İşlem</th>
						</tr>
						</tfoot>
					</table>

				</div><!-- /.box-body -->
				<div class="box-footer text-center">
					{!! $kullanici->render() !!}
				</div>
			</div><!-- /.box -->

		</div><!-- /.row -->

	</section><!-- /.content -->

@endsection
@section('footer')
	<script src="{{asset('/apanel/plugins/datatables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/apanel/plugins/datatables/dataTables.bootstrap.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
		$(function () {

			$('#kullanicilar').dataTable({
				"bPaginate": true,
				"bLengthChange": false,
				"bFilter": false,
				"bSort": true,
				"bInfo": true,
				"bAutoWidth": false
			});
		});
	</script>
@stop
