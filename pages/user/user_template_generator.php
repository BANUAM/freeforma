<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Template Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
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
              <a class="nav-link" href="#">User Profile</a>
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

  <div class="container my-5">
    <div class="row g-4 justify-content-center">
      <!-- Card kiri: Preview Template FreeForma dari file di database/server -->
      <div class="col-12 col-md-6">
        <div class="card border-success shadow-sm h-100">
          <div class="card-header bg-success text-white fw-bold text-center">
            Template FreeForma
          </div>
          <div class="card-body">
            <div id="templatePreview" class="text-center" style="min-height: 200px;">
              <!-- Contoh: jika file template PDF -->
            </div>
          </div>
        </div>
      </div>
      <!-- Card Upload File User tetap -->
      <div class="col-12 col-md-6">
        <div class="card border-primary shadow-sm h-100">
          <div class="card-header bg-primary text-white fw-bold text-center">
            Upload File Anda
          </div>
          <div class="card-body">
            <form id="uploadForm">
              <div class="mb-3">
                <label for="userFile" class="form-label">Upload File (PDF/DOC/DOCX)</label>
                <input type="file" class="form-control" id="userFile" accept=".pdf,.doc,.docx" required>
              </div>
              <button type="submit" class="btn btn-primary w-100 fw-bold">Upload & Preview</button>
            </form>
            <div id="filePreview" class="mt-4"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Tombol Generate di bawah kedua card -->
    <div class="row mt-4 justify-content-center">
      <div class="col-12 col-md-6 d-flex justify-content-center">
        <button id="btnGenerate" class="btn btn-success fw-bold px-5 py-2">
          <i class="bi bi-arrow-repeat me-2"></i>Generate & Convert</button>
      </div>
    </div>
    <div class="row mt-4 justify-content-center">
      <div class="col-12 col-md-8">
        <div id="alertArea"></div>
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
    crossorigin="anonymous"></script>
  <script>
    document.getElementById('uploadForm').addEventListener('submit', function (e) {
      e.preventDefault();
      const fileInput = document.getElementById('userFile');
      const file = fileInput.files[0];
      if (!file) return;

      const templatePreview = document.getElementById('templatePreview');
      const filePreview = document.getElementById('filePreview');
      filePreview.innerHTML = '';

      // Preview PDF
      if (file.type === "application/pdf") {
        const url = URL.createObjectURL(file);
        templatePreview.innerHTML = `<embed src="${url}" type="application/pdf" width="100%" height="500px" style="border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.1);"/>`;
      }
      // Preview DOC/DOCX (hanya nama file, karena browser tidak bisa render docx langsung)
      else if (
        file.type === "application/msword" ||
        file.type === "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
      ) {
        templatePreview.innerHTML = `
          <div class="alert alert-info">
            <i class="bi bi-file-earmark-word" style="font-size:2rem"></i><br>
            <strong>File DOC/DOCX:</strong> ${file.name}<br>
            <span class="text-muted">Preview langsung file Word tidak didukung browser.<br>Silakan download untuk melihat isi.</span>
          </div>`;
      }
      // File tidak didukung
      else {
        templatePreview.innerHTML = `<div class="alert alert-danger">Format file tidak didukung. Hanya PDF atau DOC/DOCX.</div>`;
      }
    });

    // Handler tombol Generate & Convert
    document.getElementById('btnGenerate').addEventListener('click', function () {
      // Silakan ganti aksi berikut sesuai kebutuhan backend/konversi file
      alert('Proses generate & convert file 1 dan 2 dimulai!');
      // Contoh: bisa AJAX ke backend untuk proses konversi, dsb.
    });
  </script>
</body>
</html>