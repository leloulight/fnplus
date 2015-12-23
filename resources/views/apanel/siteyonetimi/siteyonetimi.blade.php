@extends('apanel.yonetimLayout')

@section('title','Site Yönetimi | Fn+ Soft')
@endsection

@section('pagename')
	Genel Ayarlar
@endsection

@section('prewievpagename')
	Genel ayar işlemleri
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
					<h3 class="box-title">Ayar listesi</h3>
					<div class="text-right" style="margin-top: -20px;">
						<a href="/yonetim/ayarlar/ekle" type="button" class="btn btn-success">
							<i class="fa fa-plus"></i> Ayar Ekle
						</a>
					</div>
				</div><!-- /.box-header -->
				<div class="box-body">
					@if ($basarili = session()->get('basarili'))
						<div class="alert alert-success text-center">
							<strong>BAŞARILI!</strong>
							<p>{{ $basarili }}</p>
						</div>
					@endif

					@if ($hata = session()->get('hata'))
						<div class="alert alert-danger text-center">
							<strong>HATA!</strong>
							<p>{{ $hata }}</p>
						</div>
					@endif
					<form method="post" action="{{url('/yonetim/ayarlar/sil')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<table id="kullanicilar" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>#</th>
							<th>Ayar Adı</th>
							<th>Başlık</th>
							<th>Açıklama</th>
							<th>Anahtar Kelime</th>
							<th>Durum</th>
							<th class="text-right">İşlem</th>
							<th class="text-center" width="20">#</th>
						</tr>
						</thead>
						<tbody>
						{{--*/ $sayac = 0 /*--}}
						@foreach($ayar as $a)
						<tr>
							<td>{{$sayac=$sayac+1}}</td>
							<td>{{$a->name}}</td>
							<td>{{$a->title}}</td>
							<td>{{$a->description}}</td>
							<td>{{$a->keywords}}</td>
							<td>
								@if($a->active==1)
							 		Aktif
								@else
								 	Pasif
								@endif
							</td>
							<td class="text-right">
								<a href="/yonetim/ayarlar/aktif/{{$a->id}}" type="button" class="btn btn-info" name="goruntule"
								   data-original-title="Aktif et" data-toggle="tooltip">
									<i class="fa fa-check"></i>
								</a>
								<a href="/yonetim/ayarlar/duzenle/{{$a->id}}" type="button" class="btn btn-warning" name="duzenle"
								   data-original-title="Düzenle" data-toggle="tooltip">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="/yonetim/ayarlar/sil/{{$a->id}}" type="button" class="btn btn-danger" name="sil"
								   data-original-title="Sil" data-toggle="tooltip">
									<i class="fa fa-trash"></i>
								</a>
							</td>
							<td class="text-center"><input type="checkbox" name="id[]" value="{{$a->id}}"></td>
						</tr>
						@endforeach


						</tbody>
						<tfoot>
						<tr>
							<th>#</th>
							<th>Ayar Adı</th>
							<th>Başlık</th>
							<th>Açıklama</th>
							<th>Anahtar Kelime</th>
							<th>Durum</th>
							<th class="text-right">İşlem</th>
							<th class="text-center"><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button> </th>
						</tr>
						</tfoot>
					</table>
						</form>
				</div><!-- /.box-body -->
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
