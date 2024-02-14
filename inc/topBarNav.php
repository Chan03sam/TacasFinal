<?php
$loggedIn = ($_settings->userdata('id') > 0);
$zIndex = $loggedIn ? 1399 : 1499;
$user_type = ($_settings->userdata('user_type'));
?>
<style>
  .user-img{
        position: absolute;
        height: 27px;
        width: 27px;
        object-fit: cover;
        left: -7%;
        top: -12%;
  }
  .btn-rounded{
        border-radius: 50px;
  }
</style>
<script src="https://kit.fontawesome.com/c32a190826.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iKuOxBnqI5f3MouJ6pZ6nBvbJhDD9atYUAfxlE/6Z9LToM4enFfFg88wo" crossorigin="anonymous"></script>

<!-- Navbar -->
      <style>
        #login-nav{
          position:fixed !important;
          top: 0 !important;
          z-index: <?php echo $zIndex; ?>;
          padding: 1em 1.5em !important;
        }
        #top-Nav{
          top: 4em;
          z-index: 1400;
          
        }
        .text-sm .layout-navbar-fixed .wrapper .main-header ~ .content-wrapper, .layout-navbar-fixed .wrapper .main-header.text-sm ~ .content-wrapper {
          margin-top: calc(3.6) !important;
          padding-top: calc(5em) !important;
      }
      #loginDropdown{
          position: absolute !important;
          z-index: 1600 !important;
      }
      </style>
      <nav class="w-100 px-2 py-2 position-fixed" id="login-nav" style="background-color: #114e3f">
        <div class="d-flex justify-content-between w-100">
          <div>
            <span class="mr-2  text-white"><i class="fa fa-phone mr-1"></i> <?= $_settings->info('contact') ?></span>
            <?php if ($_settings->userdata('user_type') == 'outsider'): ?>
            <span class="mx-2" style="color: white; position: absolute;">
              <div id="timer">
                <i class="fa-regular fa-clock fa-lg"></i>
                <span id="countdown"></span>
              </div>
            </span>
            <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the user's session duration in minutes
              var duration = parseInt(<?php echo $_settings->userdata('duration'); ?>);

            // Check if there's a stored expiration time in localStorage
            var storedExpirationTime = localStorage.getItem('expirationTime');
            var expirationTime;

            if (storedExpirationTime) {
                expirationTime = parseInt(storedExpirationTime);
            } else {
                // Calculate the expiration time if not stored
                expirationTime = new Date().getTime() + duration * 60 * 1000;
                // Store the expiration time in localStorage
                setInterval(() => {
                  localStorage.setItem('expirationTime', expirationTime);
                }, 1000);
                
            }

            // Update the countdown every second
            var countdownInterval = setInterval(updateCountdown, 1000);

            function updateCountdown() {
                var currentTime = new Date().getTime();
                var remainingTime = expirationTime - currentTime;

                if (remainingTime > 0) {
                    var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

                    // Display the remaining time in the #countdown span
                    document.getElementById('countdown').innerHTML = minutes + 'm ' + seconds + 's';
                } else {
                    // Display "Expired" when the time is up
                    document.getElementById('countdown').innerHTML = 'Expired';
                    clearInterval(countdownInterval);
                    // Remove the expiration time from localStorage
                    localStorage.removeItem('expirationTime');
                }
            }

            // Initial call to set up the timer
            updateCountdown();
        });
    </script>
            <?php endif?> 
          </div>
          <div>
    <?php if ($_settings->userdata('id') > 0): ?>
        <!-- User is logged in -->
        <span class="mx-2" style="position: relative; top: -5px">
          <a href="/TACAS/admin"><img src="<?= validate_image($_settings->userdata('avatar')) ?>" alt="User Avatar" id="student-img-avatar"></a>  
          
        </span>
        <span class="mx-2 d-none d-sm-inline" style="color: white; position: relative; top: -5px">
            Hello, <?= !empty($_settings->userdata('email')) ? $_settings->userdata('email') : $_settings->userdata('username') ?>
        </span>
        <span class="mx-1" style="position: relative; top: -5px">
            <a href="<?= base_url.'classes/Login.php?f=student_logout' ?>"><i class="fa-solid fa-right-from-bracket fa-xl" style="color: #fff;"></i></a>
        </span>
    <?php else: ?> 
        <!-- User is not logged in -->
        <div class="cont d-flex align-items-center" style="position: relative; right: 70px;">
    <a href="./register.php" class="mx-3 text-light me-2">Register</a>
    <div class="dropdown">
        <a href="#" class="mx-2 text-light me-2 dropdown-toggle" style="position: relative; top: -11px;" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login As
        </a>
        <div class="dropdown-menu" aria-labelledby="loginDropdown">
            <a class="dropdown-item" href="./outsiders.php">Outsiders</a>
            <a class="dropdown-item" href="./login.php">Student</a>
            <a class="dropdown-item" href="./admin">Admin</a>
        </div>
    </div>
</div>
    <?php endif; ?>
</div>
        </div>
      </nav>
      <nav class="main-header navbar navbar-expand-lg navbar-light border-0 navbar-light text-sm" id='top-Nav'>
        
      <div class="container">
        <a href="./" class="navbar-brand">
            <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Site Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span><?= $_settings->info('short_name') ?></span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="position: relative; left: 100px;">
            <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="./" class="nav-link <?= isset($page) && $page =='home' ? "active" : "" ?>" style="color: black; font-weight: 500;">Home</a>
              </li>
              <?php if($_settings->userdata('id') > 0): ?>
              <li class="nav-item">
                <a href="./?page=projects" class="nav-link <?= isset($page) && $page =='projects' ? "active" : "" ?>" style="color: black; font-weight: 500;">Projects</a>
              </li>
              <?php endif; ?>
              <?php if($_settings->userdata('id') > 0): ?>
              <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle  <?= isset($page) && $page =='projects_per_department' ? "active" : "" ?>" style="color: black; font-weight: 500;">Department</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                  <?php 
                    $departments = $conn->query("SELECT * FROM department_list where status = 1 order by `name` asc");
                    $dI =  $departments->num_rows;
                    while($row = $departments->fetch_assoc()):
                      $dI--;
                  ?>
                  <li>
                    <a href="./?page=projects_per_department&id=<?= $row['id'] ?>" class="dropdown-item"><?= ucwords($row['name']) ?></a>
                    <?php if($dI != 0): ?>
                    <li class="dropdown-divider"></li>
                    <?php endif; ?>
                  </li>
                  <?php endwhile; ?>
                </ul>
              </li>
              <?php endif; ?>
              <?php if($_settings->userdata('id') > 0): ?>
              <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle  <?= isset($page) && $page =='projects_per_curriculum' ? "active" : "" ?>" style="color: black; font-weight: 500;">Courses</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                  <?php 
                    $curriculums = $conn->query("SELECT * FROM curriculum_list where status = 1 order by `name` asc");
                    $cI =  $curriculums->num_rows;
                    while($row = $curriculums->fetch_assoc()):
                      $cI--;
                  ?>
                  <li>
                    <a href="./?page=projects_per_curriculum&id=<?= $row['id'] ?>" class="dropdown-item"><?= ucwords($row['name']) ?></a>
                    <?php if($cI != 0): ?>
                    <li class="dropdown-divider"></li>
                    <?php endif; ?>
                  </li>
                  <?php endwhile; ?>
                </ul>
              </li>
              <?php endif; ?>
              <?php if($_settings->userdata('id') > 0): ?>
              <li class="nav-item dropdown">
                  <a id="dropdownSubMenuYear" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?= isset($page) && $page == 'projects_per_year' ? 'active' : '' ?>" style="color: black; font-weight: 500;">Year</a>
                  <ul aria-labelledby="dropdownSubMenuYear" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      <?php
                          // Assuming you want to provide a range of years, e.g., from 2020 to 2030
                          $currentYear = date("Y");
                          for ($year = $currentYear; $year >= ($currentYear - 10); $year--) {
                              echo '<li><a href="./?page=projects_per_year&year=' . $year . '" class="dropdown-item">' . $year . '</a></li>';
                          }
                      ?>
                  </ul>
              </li>
              <?php endif; ?>
              <li class="nav-item">
                <a href="./?page=about" class="nav-link <?= isset($page) && $page =='about' ? "active" : "" ?>" style="color: black; font-weight: 500;">About Us</a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
              </li> -->
              <?php if($_settings->userdata('type') != 2 && $_settings->userdata('id') > 0): ?>
              <li class="nav-item">
                <a href="./?page=profile" class="nav-link <?= isset($page) && $page =='profile' ? "active" : "" ?>" style="color: black; font-weight: 500;">Profile</a>
              </li>
              <?php endif; ?>
              <li class="nav-item">
              <?php if ($_settings->userdata('type') == '2'): ?>
                  <li class="nav-item">
                      <a href="./?page=submit-archive" class="nav-link <?= isset($page) && $page =='submit-archive' ? "active" : "" ?>" style="color: black; font-weight: 500;">Submit Thesis/Capstone</a>
                  </li>
              <?php endif; ?>
              </li>
            </ul>

            
          </div>
          <!-- Right navbar links -->
          <div class="order-1 order-md-3 navbar-nav navbar-no-expand">
        <a href="javascript:void(0)" class="text-navy" id="search_icon"><i class="fa fa-search" style="position: relative; left: -100px"></i></a>
        <div class="position-relative">
            <div id="search-field" class="position-absolute">
                <input type="search" id="search-input" class="form-control rounded-0" required placeholder="Search..." value="<?= isset($_GET['q']) ? $_GET['q'] : '' ?>">
            </div>
        </div>
    </div>
</div>
      </nav>
      <!-- /.navbar -->
      <script>
        $(function(){
          $('#search-form').submit(function(e){
            e.preventDefault()
            if($('[name="q"]').val().length == 0)
            location.href = './';
            else
            location.href = './?'+$(this).serialize();
          })
          $('#search_icon').click(function(){
              $('#search-field').addClass('show')
              $('#search-input').focus();
              
          })
          $('#search-input').focusout(function(e){
            $('#search-field').removeClass('show')
          })
          $('#search-input').keydown(function(e){
            if(e.which == 13){
              location.href = "./?page=projects&q="+encodeURI($(this).val());
            }
          })
          
        })

        document.addEventListener('DOMContentLoaded', function() {
        // Initialize Bootstrap dropdown
        var loginDropdown = new bootstrap.Dropdown(document.getElementById('loginDropdown'));

        // Close dropdown when clicking outside
        document.addEventListener('click', function (event) {
            var targetElement = event.target;
            if (!targetElement.closest('.dropdown')) {
                // Clicked outside the dropdown, close it
                loginDropdown.hide();
            }
        });
    });
</script>