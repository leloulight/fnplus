@foreach($ayar as $a)
@endforeach
@extends('anasayfa.anasayfaLayout')

@section('title')
{{$a->title}}
@stop

@section('content')
<!-- Header -->
<header>
	<div class="container">
		<div class="intro-text" >
			<div class="intro-heading">Fn+ SOFTWARE</div>
			<div class="intro-lead-in">Geleceği tasarlar. Çözüm üretir. Zaman yaratır.</div>
			<p style="margin-top: 50px;">

				<i class="fa fa-2x fa-laptop wow bounceIn text-primary" style="color: lightblue;" data-original-title="Web" data-toggle="tooltip"></i>
				<i class="fa fa-2x fa-android wow bounceIn text-primary" style="color: lightgreen; margin-left: 3px;" data-original-title="Android" data-toggle="tooltip"></i>
				<i class="fa fa-2x fa-apple wow bounceIn text-primary" style="color: lightseagreen; margin-left: 3px;" data-original-title="iOs" data-toggle="tooltip"></i>

			</p>

		</div>
	</div>
</header>

<!-- Services Section -->
<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Hizmetlerimiz</h2>
				<hr />
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-4">
				<i class="fa fa-4x fa-laptop wow bounceIn text-primary" style="color: lightblue;"></i>

				<h4 class="service-heading">Fn+ Web</h4>
				<p class="text-muted">Her yönüyle güçlü, sizi ve işinizi rahatlatacak web uygulamaları.</p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-4x fa-android wow bounceIn text-primary" data-wow-delay=".1s" style="color: lightgreen;"></i>

				<h4 class="service-heading">Fn+ Android</h4>
				<p class="text-muted">Android platformu için hazırlanan uygulamalar.</p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-4x fa-apple wow bounceIn text-primary" data-wow-delay=".2s" style="color: lightseagreen"></i>

				<h4 class="service-heading">Fn+ iOs</h4>
				<p class="text-muted">iPhone, iPad platformu için hazırlanan uygulamalar.</p>
			</div>
		</div>
	</div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Referanslar</h2>
				<hr />
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="img/portfolio/yunusbaran/yunusbaran.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Yunus Baran Gayrimenkul</h4>
					<p class="text-muted">www.yunusbarangayrimenkul.com</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Proje 2</h4>
					<p class="text-muted">Hazırlanıyor</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Proje 3</h4>
					<p class="text-muted">Hazırlanıyor</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="img/portfolio/golden.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Proje 4</h4>
					<p class="text-muted">Hazırlanıyor</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="img/portfolio/escape.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Proje 5</h4>
					<p class="text-muted">Hazırlanıyor</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="img/portfolio/dreams.png" class="img-responsive" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Proje 6</h4>
					<p class="text-muted">Hazırlanıyor</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- About Section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Hakkımızda</h2>
				<hr />
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<ul class="timeline">
					<li>
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>2015</h4>
								<hr />
							</div>
							<div class="timeline-body">
								<p class="text-muted">Fn+ Software resmi olarak 2015 yılında faaliyet göstermeye başlamıştır</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>Amaç</h4>
								<hr />
							</div>
							<div class="timeline-body">
								<p class="text-muted">Müşterilerine hızlı çözümler sunarak zaman kazandırmayı, işlerine ve ailelerine daha fazla zaman ayırmasını sağlamayı amaçlamaktadır.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>Hizmet</h4>
								<hr />
							</div>
							<div class="timeline-body">
								<p class="text-muted">Fn+ Software Web, Android ve iOs olmak üzere toplamda 3 dalda hizmet vermektedir.</p>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Ekibimiz</h2>
				<hr />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="team-member">
					<img src="img/team/aehat.jpg" class="img-responsive img-circle" alt="" style="width: 225px; height:225px;">
					<h4>Abdülehat ÖZDEMİR</h4>
					<p class="text-muted">Front-End Developer / Proje Yöneticisi</p>
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="team-member">
					<img src="img/team/ayigit.jpg" class="img-responsive img-circle" alt="" style="width: 225px; height:225px;">
					<h4>Adem YİĞİT</h4>
					<p class="text-muted">Proje Yöneticisi / Pazarlama Uzmanı</p>
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="team-member">
					<img src="img/team/hkalayci.jpg" class="img-responsive img-circle" alt="" style="width: 225px; height:225px;">
					<h4>Hamdi KALAYCI</h4>
					<p class="text-muted">Backend Developer</p>
					<ul class="list-inline social-buttons">
						<li><a href="http://twitter.com/kaptanjack61" target="_blank"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="http://facebook.com/hamdikalayci" target="_blank"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="team-member">
					<img src="img/team/mderyol.jpg" class="img-responsive img-circle" alt="" style="width: 225px; height:225px;">
					<h4>Mustafa DERYOL</h4>
					<p class="text-muted">Backend Developer</p>
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
			</div>
		</div>
	</div>
</section>



<!-- Contact Section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Fn+ Kalitesini Yaşamak İçin İletişime Geçin</h2>
				<h3 class="section-subheading text-muted" style="color: white;">Kaliteli bir web siteniz, herkese anında ulaşabileceğiniz bir uygulamanız olmasını istiyorsanız hemen arayın ve ya eposta gönderin.</h3>

			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Adınız & Soyadınız *" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="E-Posta Adresiniz *" id="email" required data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Telefon Numaranız *" id="phone" required data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" placeholder="Bize iletmek istediğiniz mesajınız *" id="message" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button type="submit" class="btn btn-xl">Mesaj Gönder</button>
						</div>
					</div>
				</form>
				<hr />
				<div class="col-lg-4 col-lg-offset-2 text-center" style="color: white;">
					<i class="fa fa-phone fa-3x wow bounceIn"></i>
					<p>0545 678 84 41</p>
				</div>
				<div class="col-lg-4 text-center" style="color: white;">
					<i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
					<p>
						<a href="mailto:info@fnplussoft.com" style="color: white;">info@fnplussoft.com</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<span class="copyright">Copyright &copy; Fn+ Software 2015</span>
			</div>
			<div class="col-md-4">
				<ul class="list-inline social-buttons">
					<li><a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="list-inline quicklinks">
					<li><a href="#">Kullanıcı Sözleşmesi</a>
					</li>
					<li><a href="#">Terimler sözlüğü</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Project Details Go Here -->
						<h2>Yunus Baran Gayrimenkul</h2>
						<p class="item-intro text-muted">www.yunusbarangayrimenkul.com</p>
						<img class="img-responsive img-centered" src="img/portfolio/yunusbaran/yunusbarantam.png" alt="">
						<img class="img-responsive img-centered" src="img/portfolio/yunusbaran/ilandetay.png" alt="">
						<img class="img-responsive img-centered" src="img/portfolio/yunusbaran/bilgibankasi.png" alt="">
						<img class="img-responsive img-centered" src="img/portfolio/yunusbaran/hizmetlerimiz.png" alt="">
						<img class="img-responsive img-centered" src="img/portfolio/yunusbaran/iletisim.png" alt="">
						<img class="img-responsive img-centered" src="img/portfolio/yunusbaran/kurumsal.png" alt="">
						<p>
							<a href="http://www.yunusbarangayrimenkul.com" target="_blank">www.yunusbarangayrimenkul.com</a></p>
						<ul class="list-inline">
							<li><b>Tarih:</b> Ekim 2015</li>
							<li><b>Kullanılan Teknolojiler:</b> PHP, Code İgniter, MySql, Bootstrap</li>
						</ul>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Projeyi Kapat</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Proje 2</h2>
						<p class="item-intro text-muted">Hazırlanıyor</p>
						<img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
						<p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
						<p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Projeyi Kapat</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Project Details Go Here -->
						<h2>Proje 3</h2>
						<p class="item-intro text-muted">Hazırlanıyor</p>
						<img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
						<p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
						<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Projeyi Kapat</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Project Details Go Here -->
						<h2>Proje 4</h2>
						<p class="item-intro text-muted">Hazırlanıyor</p>
						<img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
						<p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
						<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Projeyi Kapat</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Project Details Go Here -->
						<h2>Proje 5</h2>
						<p class="item-intro text-muted">Hazırlanıyor</p>
						<img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
						<p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
						<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Projeyi Kapat</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Project Details Go Here -->
						<h2>Proje 6</h2>
						<p class="item-intro text-muted">Hazırlanıyor.</p>
						<img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
						<p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
						<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Projeyi Kapat</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

