<style>

  .sub-btn{
    margin-left: 140px;
  }

  @media screen and (max-width: 500px) {
    .sub-btn{
    margin-left: 190px;
    }

    .sub-input {
      gap: 30px;
    }
  }

</style>

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

                <div class="row sub-input">
                  <div class="col-sm-6">
                    <div class="form-group  align-items-stretch">
                      <input type="text" name="name" class="form-control h-100" placeholder="Enter your name">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group d-flex align-items-stretch">
                      <input type="email" name="email" class="form-control h-100" placeholder="Enter your e-mail">
                          
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary px-4 sub-btn">SUBSCRIBE</button> 
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>