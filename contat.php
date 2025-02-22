<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <title>Contact Us</title>
  <style>
    .icon-badge-group .icon-badge-container {
      display: inline-block;

    }

    .icon-badge-container {

      position: absolute;
    }

    .icon-badge-icon {
      font-size: 30px;
      color: rgb(0 0 0 / 50%);
      position: relative;
    }

    .icon-badge {
      background-color: #979797;
      ;
      font-size: 10px;
      color: white;
      text-align: center;
      width: 15px;
      height: 15px;
      border-radius: 49%;
      position: relative;
      top: -35px;
      left: 17px;
    }

    .footer.container-fluid.bg-dark.text-light {
      position: fixed;
      bottom: 0;
    }

    .contact2 {
      font-family: "Montserrat", sans-serif;
      color: #8d97ad;
      font-weight: 300;
      /* padding: 60px 0; */
      /* margin-bottom: 170px; */
      background-position: center top;
    }

    .contact2 h1,
    .contact2 h2,
    .contact2 h3,
    .contact2 h4,
    .contact2 h5,
    .contact2 h6 {
      color: #3e4555;
    }

    .contact2 .font-weight-medium {
      font-weight: 500;
    }

    .contact2 .subtitle {
      color: #8d97ad;
      line-height: 24px;
    }

    .contact2 .bg-image {
      background-size: cover;
      position: relative;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }

    .contact2 .card.card-shadow {
      -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
      box-shadow: 0px 0px 30px rgba(61, 109, 214, 0.774);
    }

    .contact2 .detail-box .round-social {
      margin-top: 100px;
    }

    .contact2 .round-social a {
      background: transparent;
      margin: 0 7px;
      padding: 11px 12px;
    }

    .contact2 .contact-container .links a {
      color: #8d97ad;
    }

    .contact2 .contact-container {
      position: relative;
      top: 107px;
    }

    .contact2 .btn-danger-gradiant {
      background: #ff4d7e;
      background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
      background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
      background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
      background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
      background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
    }

    .contact2 .btn-danger-gradiant:hover {
      background: #ff6a5b;
      background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
      background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
      background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
      background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
      background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
    }
  </style>
</head>

<body>

  <?php include 'template.html'; ?>

  <div class="contact2" style="background-image:url(img/map.jpg);height: 400px;">
    <div class="container">
      <div class="row contact-container">
        <div class="col-lg-12">
          <div class="card card-shadow border-0 mb-4">
            <div class="row">
              <div class="col-lg-8">
                <div class="contact-box p-4">
                  <div class="row">
                    <div class="col-lg-8">
                      <h4 class="title">Contact Us</h4>
                    </div>

                  </div>

                  <form action="contactdb.php" method="POST">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group mt-3">
                          <b><label for="email">Email:</label></b>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required value="">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mt-3">
                          <b><label for="phone">Phone No:</label></b>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon">+94</span>
                            </div>
                            <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="basic-addon" placeholder="Enter Your Phone Number" value="">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mt-3">
                          <b><label for="orderId">Order Id:</label></b>
                          <input class="form-control" type="text" id="orderId" name="orderId" placeholder="Order Id" value="0">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mt-3">
                          <b><label for="password">Password:</label></b>
                          <input class="form-control" id="password" name="password" placeholder="Enter Password" type="password" placeholder="Enter Your Password" required data-toggle="password">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group  mt-3">
                          <textarea class="form-control" id="message" name="message" rows="2" required minlength="6" placeholder="How May We Help You ?"></textarea>
                        </div>
                      </div>

                      <div class="col-lg-12">
                        <button type="submit" class="btn btn-danger-gradiant mt-3 mb-3 text-white border-0 py-2 px-3"><span> SUBMIT NOW <i class="ti-arrow-right"></i></span></button>

                      </div>

                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>

  <br>

  <br>

  <?php include 'footer.html'; ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>

</html>