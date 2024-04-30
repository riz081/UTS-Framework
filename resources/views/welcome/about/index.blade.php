@extends('welcome.master')

@section('title', 'Rizqika Ibnu - UTS')

@section('content')

  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <span>About Me</span>
        <h2>About Me</h2>
        <p>Passionate, collaborative with always learning and adaptive.</p>
      </div>

      <div class="row">
        <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
        <div class="col-lg-8 d-flex flex-column align-items-stretch">
          <div class="content ps-lg-4 d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Rizqika Ibnu K</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.rizqika-ibnu.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62-123 456 7890</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Surabaya, East Java</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>24</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>rizqika@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <div class="row mt-n4">
              <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-emoji-smile" style="color: #20b38e;"></i>
                  <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Clients</strong> "Satisfaction in serving delighted clients through our personalized approach."</p>
                </div>
              </div>

              <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-journal-richtextr" style="color: #8a1ac2;"></i>
                  <span data-purecounter-start="0" data-purecounter-end="27" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Projects</strong> "Gathering with enthusiasm and dedication to provide comprehensive and exceptional service."</p>
                </div>
              </div>

              <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-clock" style="color: #2cbdee;"></i>
                  <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Years of experience</strong> "Seeking excellence and innovation with dedication, ensuring satisfaction and quality."</p>
                </div>
              </div>

              <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-award" style="color: #ffb459;"></i>
                  <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Awards</strong> outstanding achievements recognized and proudly acknowledged by us.</p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->

          <div class="skills-content ps-lg-4">
            <div class="progress">
              <span class="skill">React Native <i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Laravel <i class="val">20%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">API <i class="val">5%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

@endsection

@section('footer')
<div class="container">
    <h3>Rizqika Ibnu K</h3>
    <p>"And whoever wants to escape them are themselves nothing. The pursuit of great bodily work is often chosen and greatly enjoyed."</p>
    <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    <div class="copyright">
        &copy; Copyright <strong><span>Budi</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</div>
@endsection
