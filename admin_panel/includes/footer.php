
<footer class="footer pt-5">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
         
          <div class="col-lg-12">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="about.php" class="nav-link text-muted" target="_blank">About</a>
              </li>
            
              <li class="nav-item">
                <a href="service.php" class="nav-link text-muted" target="_blank">Service</a>
              </li>
              <li class="nav-item">
                <a href="contat" class="nav-link pe-0 text-muted" target="_blank">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    </main>
    <script src="../assets/js/core/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

    
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

    <script>

  <?php
  if(isset($_SESSION['message']))
  {
    ?>
    alertify.set('notifier','position','top-right');
    alertify.success('<?= $_SESSION['message']; ?>');
    <?php
    unset($_SESSION['message']);

  }
  ?>
 </script>

    </body>
    </html>