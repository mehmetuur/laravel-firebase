@extends('layout')

@section('main')
      <!-- main -->
      <main class="container">
        <section id="contact-us">
          <h1>Get in Touch!</h1>
  
          <!-- contact info -->
          <div class="container">
            <div class="contact-info">
              <div class="specific-info">
                <i class="fas fa-home"></i>
                <div>
                  <p class="title">Nevşehir/Merkez</p>
                  <p class="subtitle">Cappadokya</p>
                </div>
              </div>
              <div class="specific-info">
                <i class="fas fa-phone-alt"></i>
                <div>
                  <a href="">+90553 731 32 35 </a>
                  <br />
                  <a href=""></a>
  
                  <p class="subtitle"></p>
                </div>
              </div>
              <div class="specific-info">
                <i class="fas fa-envelope-open-text"></i>
                <div>
                  <a href="mailto:info@alphayo.co.ke">
                    <p class="title">wemtugur.ege@gmail.com</p>
                  </a>
                  <p class="subtitle">Send us your query anytime!</p>
                </div>
              </div>
            </div>
  
            <!-- Contact Form -->
            {{-- <div class="contact-form">
              <form action="" method="">
                <!-- Name -->
                <label for="name"><span>Name</span></label>
                <input type="text" id="name" name="name" value="" />
  
                <!-- Email -->
                <label for="email"><span>Email</span></label>
                <input type="text" id="email" name="email" value="" />
  
                <!-- Subject -->
                <label for="subject"><span>Subject</span></label>
                <input type="text" id="Subject" name="subject" value="" />
  
                <!-- Message -->
                <label for="message"><span>Message</span></label>
                <textarea id="message" name="message"></textarea>
  
                 <!-- Button -->
                <input type="submit" value="Submit" />
              </form>
            </div> --}}
          </div>
        </section>
      </main>
@endsection