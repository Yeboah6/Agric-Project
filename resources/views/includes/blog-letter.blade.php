
    <section id="call-to-action" class="call-to-action section light-background">

      <div class="content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h3>Subscribe To Our Newsletter</h3>
              <p class="opacity-50">
                To get our monthly newsletters
              </p>
            </div>
            <div class="col-lg-6">
              <form action="{{ url('/subscribe') }}" class="form-subscribe" method="POST">
                @csrf

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group  align-items-stretch">
                      <input type="text" name="name" class="form-control h-100" placeholder="Enter your name">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group d-flex align-items-stretch">
                      <input type="email" name="email" class="form-control h-100" placeholder="Enter your e-mail">
                      <button type="submit" class="btn btn-secondary px-4">Subcribe</button>     
                    </div>
                    {{-- <input type="submit" class="btn btn-secondary px-4" value="Subcribe"> --}}
                  </div>
                </div>

                
                {{-- <div class="loading">Loading</div> --}}
                {{-- <div class="error-message"></div> --}}
                {{-- <div class="sent-message">
                  Your subscription request has been sent. Thank you!
                </div> --}}
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>