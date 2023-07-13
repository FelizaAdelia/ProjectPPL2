<!-- contact.blade.php -->
@extends('layout')

@section('title', 'Halaman Contact')

@section('content')

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Video Streaming</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- i will provide this in description  -->
  <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/select2-bootstrap4.min.css') }}" />

  <link rel="stylesheet" href="{{ asset('css/slick-animation.css') }}" />
  <link rel="stylesheet" href="{{ asset('style.css') }}" />
</head>

@include('header')

<body>
<section id="about-section" class="section">
  <div class="container">
    <div class="container-about">
    <h2>About Us</h2>
    <p>Freem adalah sebuah platform daring yang menyediakan akses gratis untuk menonton film-film terbaru dan populer secara online. Dengan desain antarmuka yang modern dan intuitif, Freem menawarkan pengguna pengalaman menonton yang nyaman dan menyenangkan.
    Dengan berbagai kategori yang mencakup berbagai genre film, pengguna dapat dengan mudah menemukan film yang sesuai dengan preferensi mereka. Freem menyediakan koleksi film yang terus diperbarui secara reguler, memastikan bahwa pengguna dapat menikmati film-film terbaru dan populer dari seluruh dunia.
    <br><br>
    Freem hadir sebagai pilihan yang menarik bagi penggemar film yang mencari akses cepat, mudah, dan gratis untuk menonton film-film terbaru. Dengan koleksi film yang beragam dan fitur yang nyaman, Freem menjadi pilihan yang populer bagi para pecinta film yang ingin menikmati hiburan tanpa biaya berlangganan.
    </p>
  </div>
  </div>
</section>

<section id="contact-section" class="section">
  <div class="container">
    <h2>Contact Us</h2>
    <div class="contact-info">
      <div class="contact-item">
        <i class="fas fa-envelope"></i>
        <p>Email: <a href="https://www.google.com/intl/id/gmail/about">contactperson@freem.com</a></p>
      </div>
      <div class="contact-item">
        <i class="fab fa-youtube"></i>
        <p>Youtube: <a href="https://www.youtube.com">FreeM Official</a></p>
      </div>
      <div class="contact-item">
        <i class="fab fa-facebook"></i>
        <p>Facebook: <a href="https://www.facebook.com/example">FreeM Official</a></p>
      </div>
      <div class="contact-item">
        <i class="fab fa-instagram"></i>
        <p>Instagram: <a href="https://www.instagram.com">@freemofficial</a></p>
      </div>
    </div>
  </div>
</section>

<section id="faq-section" class="section">
  <div class="container">
    <h2>FAQ</h2>
    <p>Harap dicatat bahwa pertanyaan-pertanyaan ini hanya bersifat umum dan mungkin ada pertanyaan lain yang spesifik terkait dengan penggunaan atau fitur Freem yang dapat Anda ajukan.</p>
    
    <div class="faq">
      <h6>Apakah Freem benar-benar gratis?</h6>
      <p>Ya, Freem adalah platform gratis yang memungkinkan pengguna untuk menonton film-film secara online tanpa biaya berlangganan. Namun, iklan akan ditampilkan dalam platform sebagai sumber pendapatan.</p>
    </div>

    <div class="faq">
      <h6>Bagaimana cara menemukan film yang saya inginkan di Freem?</h6>
      <p>Freem menyediakan fitur pencarian yang memudahkan Anda dalam menemukan film yang Anda cari. Anda dapat mencari film berdasarkan judul, genre, tahun rilis, atau bahkan berdasarkan aktor dan sutradara yang terlibat dalam produksi film tersebut.</p>
    </div>
    
    <div class="faq">
      <h6>Apakah saya perlu membuat akun untuk menggunakan Freem?</h6>
      <p>Ya, Freem memerlukan pembuatan akun agar Anda dapat mengakses situs web kami dan mulai menonton film-film yang tersedia secara gratis.</p>
    </div>
    
    <div class="faq">
      <h6>Bisakah saya menonton film di Freem menggunakan perangkat seluler?</h6>
      <p>Ya, Freem dapat diakses melalui perangkat seluler seperti ponsel pintar dan tablet. Kami memiliki antarmuka yang responsif dan disesuaikan dengan perangkat yang memungkinkan Anda menonton film dengan mudah di mana saja.</p>
    </div>
    
    <div class="faq">
      <h6>Apakah Freem tersedia di seluruh dunia?</h6>
      <p>Ya, Freem dapat diakses di seluruh dunia, asalkan Anda memiliki koneksi internet yang stabil. Kami menyediakan film-film dari berbagai negara dan berbagai bahasa untuk mencakup preferensi pengguna global.</p>
    </div>
    
  </div>
</section>

<section id="privacy-section" class="section">
  <div class="container">
    <h2>Privacy Policy</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel mi et lectus tincidunt sollicitudin sed nec neque. Suspendisse fringilla iaculis lectus, et efficitur lorem placerat et. Ut sodales mi eget tortor dapibus elementum.</p>
    
    <h6>Information We Collect:</h6>
    <ul>
      <li>Personal Information: When you sign up for an account or use our services, we may collect personal information such as your name, email address, and other contact details.</li>
      <li>Usage Information: We may collect non-personal information about your interactions with our website, such as the pages visited, time spent on the site, and other similar analytics data.</li>
      <li>Cookies: We use cookies to enhance your browsing experience and track usage patterns. You can choose to disable cookies in your browser settings, but please note that certain features of our website may not function properly.</li>
    </ul>
    
    <h6>How We Use Your Information:</h6>
    <ul>
      <li>To Provide and Improve Our Services: We use the information collected to provide you with access to our film streaming platform and to improve our services, user experience, and content offerings.</li>
      <li>Communication: We may use your email address to send you updates, newsletters, and promotional materials. You can opt out of these communications at any time.</li>
      <li>Legal Compliance: We may use and disclose your information as required by law or to enforce our terms of service and protect our rights or the rights of others.</li>
    </ul>
    
    <h6>Information Security:</h6>
    <p>We take appropriate measures to protect your personal information from unauthorized access, alteration, or disclosure. However, please be aware that no data transmission over the internet or electronic storage method is completely secure. While we strive to protect your information, we cannot guarantee absolute security.</p>
    
    <h6>Third-Party Links:</h6>
    <p>Our website may contain links to third-party websites or services. Please note that we are not responsible for the privacy practices or content of those third parties. We encourage you to review the privacy policies of any third-party websites you visit.</p>
    
    <h6>Children's Privacy:</h6>
    <p>Our services are not intended for individuals under the age of 13. We do not knowingly collect personal information from children. If you believe that we have inadvertently collected information from a child, please contact us immediately, and we will take steps to delete that information.</p>
    
    <h6>Updates to the Privacy Policy:</h6>
    <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page, and the revised version will be effective as of the updated date mentioned at the beginning of the policy.</p>
    
  </div>
</section>

<footer class="iq-bg-dark">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row footer-standard">
          <div class="col-lg-5">
            <div class="widget text-left">
              <div>
                <ul class="menu p-0">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
            <div class="widget text-left">
              <div class="textwidget">
                <p><small>This is Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quo tempore. Quasi rem rerum est in nulla atque quibusdam illo. this is footer and simple tsesxij is writen jkd. fsek hello how are you. please like and subscribe. footer ends .</small></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <h6 class="footer-link-title">
              Follow Us:
            </h6>
            <ul class="info-share">
              <li>
                <a href="#">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="widget text-left">
              <div class="textwidget">
                <h6 class="footer-link-title">
                  FreeM App 
                </h6>
                <div class="d-flex align-items-center">
                  <a href="#"><img src="images/footer/01.jpg" alt=""></a>
                  <br>
                  <a href="#" class="ml-3"><img src="images/footer/02.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
@endsection