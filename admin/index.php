<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
  header("Location: admins.php");
  exit();
}

?>

<?php @include 'includes/header.php'; ?>
<div class="container">
  <div class="row">
    <div class="row">
      <div class="col-lg-7 position-relative z-index-2">


        <div class="row">
          <div class="col-lg-5 col-sm-5">
            <div class="card  mb-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Bookings</p>
                  <h4 class="mb-0">281</h4>
                </div>
              </div>

              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
              </div>
            </div>

            <div class="card  mb-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">leaderboard</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                  <h4 class="mb-0">2,300</h4>
                </div>
              </div>

              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
    <?php @include 'includes/footer.php'; ?>