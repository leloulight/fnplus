@extends('apanel.yonetimLayout')

@section('title', 'Fn+ Yönetici Paneli')
@endsection

@section('pagename')
	Yönetici Paneli
@endsection

@section('prewievpagename')
	Yönetici Paneli işlemleri
@endsection

@section('content')

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>150</h3>
						<p>New Orders</p>
					</div>
					<div class="icon">
						<i class="ion ion-bag"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3>53<sup style="font-size: 20px">%</sup></h3>
						<p>Bounce Rate</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>44</h3>
						<p>User Registrations</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3>65</h3>
						<p>Unique Visitors</p>
					</div>
					<div class="icon">
						<i class="ion ion-pie-graph"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div><!-- ./col -->
		</div><!-- /.row -->
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-7 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->

				<!-- Chat box -->
				<div class="box box-success">
					<div class="box-header">
						<i class="fa fa-comments-o"></i>
						<h3 class="box-title">Chat</h3>
						<div class="box-tools pull-right" data-toggle="tooltip" title="Status">
							<div class="btn-group" data-toggle="btn-toggle" >
								<button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
								<button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
							</div>
						</div>
					</div>
					<div class="box-body chat" id="chat-box">
						<!-- chat item -->
						<div class="item">
							<img src="{{ asset('/apanel/dist/img/user2-160x160.jpg') }}./apanel/dist/img/user4-128x128.jpg" alt="user image" class="online"/>
							<p class="message">
								<a href="#" class="name">
									<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
									Mike Doe
								</a>
								I would like to meet you to discuss the latest news about
								the arrival of the new theme. They say it is going to be one the
								best themes on the market
							</p>
							<div class="attachment">
								<h4>Attachments:</h4>
								<p class="filename">
									Theme-thumbnail-image.jpg
								</p>
								<div class="pull-right">
									<button class="btn btn-primary btn-sm btn-flat">Open</button>
								</div>
							</div><!-- /.attachment -->
						</div><!-- /.item -->
						<!-- chat item -->
						<div class="item">
							<img src="{{ asset('/apanel/dist/img/user3-128x128.jpg') }}" alt="user image" class="offline"/>
							<p class="message">
								<a href="#" class="name">
									<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
									Alexander Pierce
								</a>
								I would like to meet you to discuss the latest news about
								the arrival of the new theme. They say it is going to be one the
								best themes on the market
							</p>
						</div><!-- /.item -->
						<!-- chat item -->
						<div class="item">
							<img src="{{ asset('/apanel/dist/img/user2-160x160.jpg') }}" alt="user image" class="offline"/>
							<p class="message">
								<a href="#" class="name">
									<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
									Susan Doe
								</a>
								I would like to meet you to discuss the latest news about
								the arrival of the new theme. They say it is going to be one the
								best themes on the market
							</p>
						</div><!-- /.item -->
					</div><!-- /.chat -->
					<div class="box-footer">
						<div class="input-group">
							<input class="form-control" placeholder="Type message..."/>
							<div class="input-group-btn">
								<button class="btn btn-success"><i class="fa fa-plus"></i></button>
							</div>
						</div>
					</div>
				</div><!-- /.box (chat box) -->



				<!-- quick email widget -->
				<div class="box box-info">
					<div class="box-header">
						<i class="fa fa-envelope"></i>
						<h3 class="box-title">Quick Email</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
						</div><!-- /. tools -->
					</div>
					<div class="box-body">
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" name="emailto" placeholder="Email to:"/>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="Subject"/>
							</div>
							<div>
								<textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
							</div>
						</form>
					</div>
					<div class="box-footer clearfix">
						<button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
					</div>
				</div>

			</section><!-- /.Left col -->
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-5 connectedSortable">

				<!-- Map box -->
				<div class="box box-solid bg-light-blue-gradient">
					<div class="box-header">
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>
							<button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
						</div><!-- /. tools -->

						<i class="fa fa-map-marker"></i>
						<h3 class="box-title">
							Visitors
						</h3>
					</div>
					<div class="box-body">
						<div id="world-map" style="height: 250px; width: 100%;"></div>
					</div><!-- /.box-body-->
					<div class="box-footer no-border">
						<div class="row">
							<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
								<div id="sparkline-1"></div>
								<div class="knob-label">Visitors</div>
							</div><!-- ./col -->
							<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
								<div id="sparkline-2"></div>
								<div class="knob-label">Online</div>
							</div><!-- ./col -->
							<div class="col-xs-4 text-center">
								<div id="sparkline-3"></div>
								<div class="knob-label">Exists</div>
							</div><!-- ./col -->
						</div><!-- /.row -->
					</div>
				</div>
				<!-- /.box -->


				<!-- Calendar -->
				<div class="box box-solid bg-green-gradient">
					<div class="box-header">
						<i class="fa fa-calendar"></i>
						<h3 class="box-title">Calendar</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">
							<!-- button with a dropdown -->
							<div class="btn-group">
								<button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li><a href="#">Add new event</a></li>
									<li><a href="#">Clear events</a></li>
									<li class="divider"></li>
									<li><a href="#">View calendar</a></li>
								</ul>
							</div>
							<button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
						</div><!-- /. tools -->
					</div><!-- /.box-header -->
					<div class="box-body no-padding">
						<!--The calendar -->
						<div id="calendar" style="width: 100%"></div>
					</div><!-- /.box-body -->
					<div class="box-footer text-black">
						<div class="row">
							<div class="col-sm-6">
								<!-- Progress bars -->
								<div class="clearfix">
									<span class="pull-left">Task #1</span>
									<small class="pull-right">90%</small>
								</div>
								<div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
								</div>

								<div class="clearfix">
									<span class="pull-left">Task #2</span>
									<small class="pull-right">70%</small>
								</div>
								<div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
								</div>
							</div><!-- /.col -->
							<div class="col-sm-6">
								<div class="clearfix">
									<span class="pull-left">Task #3</span>
									<small class="pull-right">60%</small>
								</div>
								<div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
								</div>

								<div class="clearfix">
									<span class="pull-left">Task #4</span>
									<small class="pull-right">40%</small>
								</div>
								<div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
								</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
				</div><!-- /.box -->

			</section><!-- right col -->
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->

@endsection
