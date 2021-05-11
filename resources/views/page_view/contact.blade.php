@extends('page_view/sub_core/main')

@section('title','Contact')

@section('container')
    <section id="contact" class="contact-section pt-40 pb-160">
      <div class="shape shape-7">
        <img src="assets/img/shapes/shape-7.svg" alt="" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section-title text-center mb-55">
              <span class="wow fadeInDown" data-wow-delay=".2s">Contact Us</span>
              <p>At PT. Noor Energi Baik, customer satisfaction is very important to us. We are always looking for ways to improve our service and products</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="contact-form">
              <form action="/add_msg" method="POST" id="contact-form" class="contact-form">
              @csrf
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" id="name" name="nama" placeholder="Name" required />
                  </div>
                  <div class="col-md-6">
                    <input type="email" id="email" name="email" placeholder="Email" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" name="subject" id="subject" placeholder="Subject" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <textarea name="msg" id="message"  placeholder="Message" required></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-12">
                    <button type="submit" class="btn theme-btn">Send Message</button>
                  </div>
                </div>
              </form>
              <p class="form-message pt-15"></p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection