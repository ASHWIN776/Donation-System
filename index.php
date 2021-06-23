<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yogdaan</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Iconify -->
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- External CSS -->
    <?php require 'assets/styles/styles.css'; ?>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
  </head>
  <body>
    <header>
        <div class="nav-logo">yogdaan</div>
        <nav>
            <ul>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-item"> News </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"> Home </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"> About </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"> Contact </a>
                </li>
            </ul>
            <div class="nav-item">
                <button id="donate-nav" class="donate" data-bs-toggle="modal" data-bs-target="#donateModal">Donate</button>
            </div>
        </nav>
        <div class="burger">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>
    </header>
    <main>
      <section id="home">
        <div id="home-content">
            <div>
                <h1>
                    Join the fight against
                    <span class="blue-hl"> COVID-19 </span>
                </h1>
                <p class="home-para">
                    The World has never faced a crisis like COVID-19. The pandemic is
                    affecting communities everywhere. Let's fight it by helping each
                    other.
                </p>
                <button id="donate-btn" class="donate" data-bs-toggle="modal" data-bs-target="#donateModal">
                  Donate
                </button>
            </div>
        </div>
        <div id="home-pic">
          <img src="./assets/img/home.png" alt="Doctor holding the globe" width="470px" height="629px"/>
        </div>
      </section>
      <section id="about">
        <div id="expenditure">
            <h2>
                Expenditure of your <span class="blue-hl">Donations</span>
            </h2>
          <div>
            <div class="expend-container">
                <span class="iconify" data-inline="false" data-icon="wpf:doctors-bag" style="color: #3b9feb; font-size: 26px;"></span>
                <h5>For Medical Workers</h5>
                <p class="expend-content">
                    Donations will be used to buy personal safety equipments for the
                    medical personnels
                </p>
            </div>
            <div class="expend-container">
                <span class="iconify" data-inline="false" data-icon="fluent:people-community-24-filled" style="font-size: 26px; color: #3B9FEB;"></span>
                <h5>For Citizens</h5>
                <p class="expend-content">
                    Donations will be used to buy personal safety equipments for the
                    medical personnels
                </p>
            </div>
            <div class="expend-container">
                <span class="iconify" data-inline="false" data-icon="fa-solid:business-time" style="font-size: 26px; color: #3B9FEB;"></span>
                <h5>For Affected Businesses</h5>
                <p class="expend-content">
                    Donations will be used to buy personal safety equipments for the
                    medical personnels
                </p>
            </div>
          </div>
        </div>
        <div id="org-stats">
            <div id="num-stats">
                <div>
                    <div class="num-container">
                        <h3 class="blue-hl num-counter" data-target="4000">0</h3>
                        <p class="num-content">
                            donors have contributed
                        </p>
                    </div>
                    <div class="num-container">
                        <h3 class="blue-hl num-counter" data-target="40000">0</h3>
                        <p class="num-content">
                            people helped all over india
                        </p>
                    </div>
                    <div class="num-container">
                        <h3 class="blue-hl"><span class="iconify" data-inline="false" data-icon="bx:bx-rupee" style="font-size: 34px; color: #3B9FEB;"></span> <span class="num-counter" data-target="400000">0</span></h3>
                        <p class="num-content">
                            raised for nonprofits
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <img src="./assets/img/about.png" alt="4people with masks taking a selfie" width="445px" height="337px">
            </div>
        </div>
      </section>
    </main>
    <!-- All Modals here -->
    <!--Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Donation Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="donateForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name of Donor</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="submit" form="donateForm" class="btn btn-success" id="donateButton">Donate</button>
            </div>
        </div>
        </div>
    </div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <!-- External JS -->
    <script src="./assets/scripts/main.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
