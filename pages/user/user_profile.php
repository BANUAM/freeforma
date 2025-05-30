<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROFILE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">FreeForma</a>

      <div class="d-flex justify-content-between w-100 mr-4">
        <div class="collapse navbar-collapse d-flex justify-content-center mx-3" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link" aria-current="page" href="#">Template</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Contribution Template</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">User Profile</a>
            </li>
          </ul>
        </div>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <h4 class="fw-bold text-start" style="font-family: 'Poppins', sans-serif;">USER PROFILE</h4>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="card rounded-3 border-3 border-light shadow-sm ">
          <div class="card-header bg-dark text-white text-center">
            <h5 class="mb-0">
              <div class="card-body text-center">
                <img src="#" alt="Profile Photo" class="rounded-circle mb-3" width="100" height="100">

                <form action="" method="post">
                  <div class="mb-3 text-start">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname">
                  </div>
                  <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="mb-3 text-start">
                    <label for="instansi" class="form-label">Instansi</label>
                    <input type="text" class="form-control" id="instansi" name="instansi">
                  </div>
                  <button type="submit" class="btn btn-light rounded-3 w-50 mt-3">Edit Profile</button>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-12">
          <h4 class="fw-bold text-start" style="font-family: 'Poppins', sans-serif;"> YOUR TEMPLATE</h4>
        </div>
      </div>

      <div class="card-group mt-2 col-12 d-flex justify-content-center gap-3">

        <div class="card rounded-3 border-3 bg-dark shadow-sm text-white">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Template Title</h5>
            <p class="card-text"></p>
            <div class="d-flex gap-3">
              <a href="#" class="text-danger btn-like"><i class="bi bi-heart"></i></a>
              <a href="#" class="text-primary btn-download"><i class="bi bi-download"></i></a>
            </div>
            <p class="card-text text-white"><small class="text-active">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card rounded-3 border-3 bg-dark shadow-sm text-white">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Template Title</h5>
            <p class="card-text"></p>
            <div class="d-flex gap-3">
              <a href="#" class="text-danger btn-like"><i class="bi bi-heart"></i></a>
              <a href="#" class="text-primary btn-download"><i class="bi bi-download"></i></a>
            </div>
            <p class="card-text text-white"><small class="text-active">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card rounded-3 border-3 bg-dark shadow-sm text-white">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Template Title</h5>
            <p class="card-text"></p>
            <div class="d-flex gap-3">
              <a href="#" class="text-danger btn-like"><i class="bi bi-heart"></i></a>
              <a href="#" class="text-primary btn-download"><i class="bi bi-download"></i></a>
            </div>
            <p class="card-text text-white"><small class="text-active">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="card-group mt-3 col-12 d-flex justify-content-center gap-3">
        <div class="card rounded-3 border-3 bg-dark shadow-sm text-white">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Template Title</h5>
            <p class="card-text"></p>
            <div class="d-flex gap-3">
              <a href="#" class="text-danger btn-like"><i class="bi bi-heart"></i></a>
              <a href="#" class="text-primary btn-download"><i class="bi bi-download"></i></a>
            </div>
            <p class="card-text text-white"><small class="text-active">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card rounded-3 border-3 bg-dark shadow-sm text-white">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Template Title</h5>
            <p class="card-text"></p>
            <div class="d-flex gap-3">
              <a href="#" class="text-danger btn-like"><i class="bi bi-heart"></i></a>
              <a href="#" class="text-primary btn-download"><i class="bi bi-download"></i></a>
            </div>
            <p class="card-text text-white"><small class="text-active">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card rounded-3 border-3 bg-dark shadow-sm text-white">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Template Title</h5>
            <p class="card-text"></p>
            <div class="d-flex gap-3">
              <a href="#" class="text-danger btn-like"><i class="bi bi-heart"></i></a>
              <a href="#" class="text-primary btn-download"><i class="bi bi-download"></i></a>
            </div>
            <p class="card-text text-white"><small class="text-active">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<footer class="bg-dark text-white text-center py-5 mt-5 w-100" style="position: relative; left: 0; right: 0;">
  <div class="container-fluid px-0">
    <div class="row align-items-center mx-0">
      <div class="col-12 col-md-4 mb-3 mb-md-0">
        <div class="fw-bold mb-2">Contact Us</div>
        <a href="https://x.com/username" target="_blank" class="text-white mx-2" title="X / Twitter">
          <i class="bi bi-twitter-x" style="font-size: 2rem;"></i>
        </a>
        <a href="https://instagram.com/username" target="_blank" class="text-white mx-2" title="Instagram">
          <i class="bi bi-instagram" style="font-size: 2rem;"></i>
        </a>
        <a href="https://wa.me/6281234567890" target="_blank" class="text-white mx-2" title="WhatsApp">
          <i class="bi bi-whatsapp" style="font-size: 2rem;"></i>
        </a>
        <a href="tel:+6281234567890" class="text-white mx-2" title="Telepon">
          <i class="bi bi-telephone" style="font-size: 2rem;"></i>
        </a>
        <a href="mailto:cs@freeforma.com" class="text-white mx-2" title="Customer Service Email">
          <i class="bi bi-envelope" style="font-size: 2rem;"></i>
        </a>
      </div>
      <div class="col-12 col-md-4 mb-3 mb-md-0">
        <div class="fw-bold mb-2">Service</div>
        <div>
          <a href="#" class="text-white mx-2 text-decoration-none">FAQ</a> |
          <a href="#" class="text-white mx-2 text-decoration-none">Help</a> |
          <a href="#" class="text-white mx-2 text-decoration-none">About FreeForma</a>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <button onclick="window.location.href='logout.php'" class="btn btn-success fw-bold px-4 py-2 mt-2">
          <i class="bi bi-box-arrow-right me-2"></i>Get Out Application Now
        </button>
      </div>
    </div>
    <hr class="bg-secondary my-4">
    <small style="font-size:1.1rem;">&copy; 2025 FreeForma. All rights reserved.</small>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        
<script>
  // Like button toggle
  document.querySelectorAll('.btn-like').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      this.classList.toggle('liked');
      let icon = this.querySelector('i');
      if(this.classList.contains('liked')) {
        icon.classList.remove('bi-heart');
        icon.classList.add('bi-heart-fill');
      } else {
        icon.classList.remove('bi-heart-fill');
        icon.classList.add('bi-heart');
      }
    });
  });

  // Download button example
  document.querySelectorAll('.btn-download').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      alert('Download dimulai!');
      // Bisa diganti dengan aksi download file asli
    });
  });
</script>
</body>

</html>