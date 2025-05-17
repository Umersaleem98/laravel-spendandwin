@include('adminlayouts.head')

<body>

  @include('adminlayouts.header')

  <!-- ======= Sidebar ======= -->
  @include('adminlayouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Participants</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Register Participants</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Registered Participants</h5>

              <table class="table table-bordered table-striped">
                <thead class="table-dark">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($winners as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td>
                        <a href="{{ url('delete.participant/' . $item->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this participant?')">Delete</a>
                      </td>
                      

                    </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Image Modal ======= -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img id="modalImage" src="" class="img-fluid" alt="Payment Screenshot">
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  @include('adminlayouts.script')

  <!-- Custom JS for Modal Image -->
  <script>
    function showImageModal(imgElement) {
      const modalImage = document.getElementById('modalImage');
      modalImage.src = imgElement.src;
    }
  </script>

</body>

</html>
