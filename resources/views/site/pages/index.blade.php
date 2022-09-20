@extends('site.layouts.main')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(assets2/img/maman.png)">
        <div class="container" style="width:50%">
          <h2>Soyez les Biens venues à <span>Naana Consultation prénatale</span></h2>
          <p>Le suivi de votre grossesse est notre credo..</p>
          <a href="#about" class="btn-get-started scrollto">En savoir Plus</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url(assets2/img/slide/slide-2.jpg)">
        <div class="container" style="width:50%">
          <h2>Prenez votre rendez_vous quand vous voulez, oû que vous soyez</h2>
          <p>Vous pouvez choisir le medecin qui va vous consulter. Vous pouvez choisir le mois de votre consultation. Choisissez aussi la semaine, le jour et enfin l'heure de votre consultation. C'EST VRAIMENT MAGIQUE.</p>
          <a href="#about" class="btn-get-started scrollto">En savoir Plus</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url(assets2/img/slide/slide-3.jpg)">
        <div class="container" style="width:50%">
          <h2>A Naana Consultation, c'est le choix de la patiente qui compte d'abord.</h2>
          <p>Les personnels de santé sont à l'ecoute des patientes.L'accès aux spécialistes de santé est desormais possible à toutes les femmes enceintes des centres urbains commes celles des villages.</p>
          <a href="#about" class="btn-get-started scrollto">En savoir Plus</a>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="mb-5 col-md-6 col-lg-3 d-flex align-items-stretch mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Les patintes béneficient des examens para cliniques de qualité.</a></h4>
            <p class="description"></p>
          </div>
        </div>

        <div class="mb-5 col-md-6 col-lg-3 d-flex align-items-stretch mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Les produits de qualité sont à la portée des patientes</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="mb-5 col-md-6 col-lg-3 d-flex align-items-stretch mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="fas fa-thermometer"></i></div>
            <h4 class="title"><a href="">Toutes sorte de soins sont offerts aux patientes </a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="mb-5 col-md-6 col-lg-3 d-flex align-items-stretch mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Toutes les les patientes sont traitées au même titre</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <p>Votre grossesse est un bien que nous voulons vous aider à bien gerer.</p>
        <p>Vous êtes dans le besoin faites recours à notre service.</p>
        <a class="cta-btn scrollto" href="#appointment">Prenez un rendez_vous svp</a>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= About Us Section ======= -->
  <a href="#aboutly" id="aboutly"></a>
  <section id="about us aboutly" class="about us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>A Propos</h2>
        <p>Nous vous proposons une experience nouvelle dans la gestion de vos rendez-vous 24h/24h et 7j/7j <br>Nous offrons aux patients la possibilité de communiquer simplement avec les médecins et de planifier leurs rendez-vous selon leur disponibilité.</p>
      </div>
      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="assets2/img/obstretical.jpg" class="img-fluid " style="height:  405px"  alt="">
        </div>
        <div class="pt-4 col-lg-6 pt-lg-0 content" data-aos="fade-left">
          <h3>Nous mettons la technologie au service de la population.</h3>
          <p class="fst-italic">
           Une solution simple et rapide pour les centres de santé , les médecins et les  patients
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> La prise de rendez-vous facile.</li>
            <li><i class="bi bi-check-circle"></i> L'accès aux spécialistes de votre choix facile.</li>
            <li><i class="bi bi-check-circle"></i> Le suivi de votre grossesse facile.</li>
          </ul>
          <p>
            .Patients, communiquez quand vous le désirez avec votre médecin. Centres de santé , Gagnez en visibilité et optimisez l'activité de votre centre de santé.
            Médecins,reduisez votre charge administrative et les rendez-vous non honorés. soyez moins sollicités et gerez simplement votre agenda.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Counts Section ======= -->
  <section id="Mon compte" class="Mon compte">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Prendre un rendez-vous</h2>
          <p>Inscrivez-vous à tout moment de la journée voir même la nuit tout en exercant votre activité professionnelle au bureau ou à domicile.</p>
        </div>

        <form action="{{ route('consultation') }}" method="post" >
            @csrf
        <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="nom" class="form-control" id="name" placeholder="Nom" required>
            </div>
            <div class="col-md-4 form-group">
                <input type="text" name="prenom" class="form-control" id="name" placeholder="Prénom" required>
            </div>
            <div class="col-md-4 form-group">
            <input type="number" name="age" class="form-control" id="name" placeholder="Age" required>
            </div>
            <div class="col-md-4 form-group">
            <input type="text" name="profession" class="form-control" id="name" placeholder="Profession" required>
            </div>
            <div class="col-md-4 form-group">
            <input type="text" name="mois_grossesse" class="form-control" id="name" placeholder="Nombre de mois de grossesse" required>
            </div>
            <div class="col-md-4 form-group">
                <input type="text" name="nombre_cpn" class="form-control" id="name" placeholder="Nombre de consultation prénatale" required>
                </div>
            <div class="mt-3 col-md-4 form-group mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Adresse Email" required>
            </div>
            <div class="mt-3 col-md-4 form-group mt-md-0">
              <input type="tel" class="form-control" name="telephone" id="phone" placeholder="Téléphone" required>
            </div>
          </div>
          <div class="row">
            <div class="mt-3 col-md-4 form-group">
              <input name="date_du_rendez_vous" type="date" class="form-control datepicker" id="date" required>
            </div>
            <div class="mt-3 col-md-4 form-group">
                <input name="heure_du_rendez_vous" type="time" class="form-control datepicker" id="datetime" required>
              </div>
            <div class="mt-3 col-md-4 form-group">
              <select name="doctor_id" id="doctor" class="form-select">
                <option value="">Selectioner un docteur</option>
                @forelse ($docteurs as $docteur)
                <option value="{{ $docteur->id }}">{{ $docteur->nom }} {{ $docteur->prenom }}</option>
                @empty
                    <p>Aucun médécin disponible</p>
                @endforelse
              </select>
            </div>
          </div>

          <div class="mt-3 form-group">
            <textarea class="form-control" name="adresse" rows="5" placeholder="Message (Optional)"></textarea>
          </div>

          <div class="mt-5 text-center">
            <button type="submit" class="btn btn-success">Valider</button>
            </div>
      </div>
    </form>
  </section><!-- End Features Section -->
  <!-- ======= Departments Section ======= -->
  <section id="departments" class="departments">
    <div class="container" data-aos="fade-up"> <div class="section-title">
        <h2>Nos spécialités</h2>
        <p>Que vous soyez en province, dans les villages les plus reculés , en péripherie de grands centres urbains, vous avez accès au spécialiste de votre choix.</p>
        <p>Connectez-vous pour vous inscrire et planifier votre rendez-vous. Votre consultation par des spécialistes  devient très simple .</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="mb-5 col-lg-4 mb-lg-0">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <h4>Gynecologie</h4>
                <p>La spécialité par excellence pour la femme enceinte.</p>
              </a>
            </li>
            <li class="mt-2 nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <h4>Imagerie</h4>
                <p>L'imagerie permet d'obtenir des images de son futur enfant .</p>
              </a>
            </li>
            <li class="mt-2 nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <h4>Hepatology</h4>
                <p>Vous permret de faire le bilan sanguin et ainsi eviter d'eventuels risques pour la femme mais aussi de contagion pour l'enfant .</p>
              </a>
            </li>
            <li class="mt-2 nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                <h4>Echographie</h4>
                <p>L'echographie permet à la femme de savoir l'évolution du foetus, mais aussi de déceler les anomalies</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <h3>Gynecologie</h3>
              <p class="fst-italic">Faites-vous consulter par des spécialistes en gynécologie pour éviter tout risque de perte de votre grossesse</p>
              <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
              <p>Le suivi de la grossesse est du domaine de la gynécologie. Profitez de l'occasion que nous offrons pour contacter ces spécialistes. Votre bonne santé permet de mener la grossesse à terme sans trop de complications. Ûo que vous soyez , la possibilité vous est offerte de bénéficier des soins de qaulité assurés par des gynécologues. Les spécialistes sont désormais à vvotre disposition 24h/24h et 7j/7j </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Departments Section -->
  <!-- ======= Doctors Section ======= -->
  <section id="medecin" class="medecin section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Nos medecins</h2>
        <p>Vous aurez accès à des spécialistes dotés de nombreuses années d'experiences dans le domaine de la gynécologie.</p>
        Ils ont été formés dans de prestigieuses facultés de médecine de par le monde
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{ asset('assets2/img/md_consult.jpg') }}" style="height:260px" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Dr Ouedraogo</h4>
              <span>Gynécologue</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{ asset('assets2/img/doctor.JPEG') }}" style="height:260px" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Dr Jhonson</h4>
              <span>Hématologue</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{ asset('assets2/img/salle.JPEG') }}" style="height:260px" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Dr Alimata</h4>
              <span>Chef de service gynécologie</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="{{ asset('assets2/img/ventre de dos.jpg') }}" style="height:260px" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Dr karidiatu</h4>
              <span>Neurologue</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Doctors Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Payement</h2>
        <p>Après la confirmation de votre consultation, decidez du moment oû vous voudrez bien vous acquitter du tarif .</p>
        <p>Vous payez le jour et à l heure de votre convenance juste avant votre consultation.Votre compte suffit.</p>
        <p>Les tarifs des consultations sont à la portée de toutes les femmes enceintes sans distinction .</p>
        <p>Vous avez une gamme de possiblités pour payer votre consuitation dans la quiétude et avec serénité.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="mb-4"><img src="{{ asset('assets2/img/orange.png') }}" style="width: 40%" alt=""></div>
          <h4 class="title"><a href="">Mode de payement</a></h4>
          <p class="description"></p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="mb-4"><img src="{{ asset('assets2/img/mobi.png') }}" style="width: 40%" alt=""></div>
          <h4 class="title"><a href="">Mode de payement</a></h4>
          <p class="description">Ouvrez un compte mobicash pour regler votre consultation dans tous les kiosques mobicash</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="mb-4"><img src="{{ asset('assets2/img/ecobank.jpg') }}" style="width: 40%" alt=""></div>
          <h4 class="title"><a href="">Mode de payement</a></h4>
          <p class="description">Vous n'avez pas besoin d'avoir un compte Ecobank  pour regler votre consultation par Ecobank express</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="mb-4"><img src="{{ asset('assets2/img/coris.png') }}" style="width: 40%" alt=""></div>
          <h4 class="title"><a href="">Mode de payement</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="mb-4"><img src="{{ asset('assets2/img/kiosko.jpg') }}" style="width: 40%" alt=""></div>
          <h4 class="title"><a href="">kisque orange money</a></h4>
          <p class="description">Rendez-vous au kiosque le plus proche de chez vous pour regler votre consultation</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="mb-4"><img src="{{ asset('assets2/img/obstretical.jpg') }}" style="width: 40%" alt=""></div>
          <h4 class="title"><a href="">caisse de l'hôpital ou du centre de santé</a></h4>
          <p class="description">Vous pouvez aussi vous rendre à la caisse de l'hôpital ou du centre de santé avant votre consultation voir même le jour de la consultation pour regler votre tarif</p>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->
  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tarification</h2>
        <p>Notre tarification est très flexible et s'adapte à toutes les situations..</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <h3>Examen clinique</h3>
            <h4><sup>fcfa</sup>1000<span> / femme</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li class="na">Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-payer">Payez maintenant</a>
            </div>
          </div>
        </div>

        <div class="mt-4 col-lg-3 col-md-6 mt-md-0">
          <div class="box featured" data-aos="fade-up" data-aos-delay="200">
            <h3>Echographie</h3>
            <h4><sup>fcfa</sup>2000<span> / femme</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-payer">Payez maintenant</a>
            </div>
          </div>
        </div>

        <div class="mt-4 col-lg-3 col-md-6 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>Imagerie</h3>
            <h4><supfcfa</sup>2500<span> / femme</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-payer">Payez maintenant</a>
            </div>
          </div>
        </div>

        <div class="mt-4 col-lg-3 col-md-6 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <span class="advanced">Advanced</span>
            <h3>Hématologie</h3>
            <h4><sup>fcfa</sup>3000<span> / femme</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-payer">Payer maintenant</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->
  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Notre Galerie</h2>
        <p>Dans notre galerie vous y touverez des images des médecins, de la technologie utilisée pour votre consultation, des séances de consultation ..etc.</p>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets2/img/gallery/gallery-1.jpg"><img src="assets2/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets2/img/gallery/gallery-2.jpg"><img src="assets2/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets2/img/gallery/gallery-3.jpg"><img src="assets2/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets2/img/gallery/gallery-4.jpg"><img src="assets2/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets2/img/gallery/gallery-5.jpg"><img src="assets2/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets2/img/gallery/gallery-6.jpg"><img src="assets2/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets2/img/gallery/gallery-7.jpg"><img src="assets2/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="assets2/img/gallery/gallery-8.jpg"><img src="assets2/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Gallery Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contactez-nous pour prendre votre rendez-vous sans vous rendre au centre de santé. Votre consultation est en même temps  assurée comme vous le souhaitez. Pour vous soulager contactez-nous. Avec nous finis les déplacments multiples et les attentes interminables .</p>
      </div>

    </div>

    {{-- <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div> --}}
  <a href="#" id="contact"></a>

    <div class="container">

      <div class="mt-5 row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Visitez notre site</h3>
                <p>https: //fr.naana consultation.com </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mt-4 info-box">
                <i class="bx bx-envelope"></i>
                <h3>Notre email</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mt-4 info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Téléphone</h3>
                <p> 5589 5548<br>226 6678 2544</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-4 form-group">
                <input type="text" name="nom" class="form-control" id="name" placeholder="Nom" required>
              </div>
              <div class="col-md-4 form-group">
                <input type="text" name="prenom" class="form-control" id="name" placeholder="Prénom" required>
              </div>
              <div class="col-md-4 form-group">
                <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telepnone" required>
              </div>
              <div class="col-md-4 form-group">
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
              </div>
            <div class="mb-3 form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="M">Votre message a été envoyé. Merci!</div>
            </div>
            <div class="text-center"><button type="Envoyer">Envoyez un Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
