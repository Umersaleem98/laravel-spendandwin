@include('adminlayouts.head')

<body>

    @include('adminlayouts.header')
    <!-- ======= Sidebar ======= -->
    @include('adminlayouts.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">


                        <!-- Customers Card -->
                        <div class="col-xxl-6 col-xl-6">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Registered Users <span>| Total</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalRegistrations }}</h6>
                                            <span class="text-success small pt-1 fw-bold">+100%</span>
                                            <span class="text-muted small pt-2 ps-1">growth</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Winner Announcement Card -->

                        </div><!-- End Customers Card -->


                    </div>

                    <!-- Winner Announcement Card -->
                    <div class="col-xxl-6 col-xl-6">
                        <div class="card info-card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Winner Announcement</h5>

                                <!-- Display Winner or Message -->
                                @if (session('winner'))
                                    <h6 class="text-success">🎉 Winner: {{ session('winner') }} 🎉</h6>
                                @elseif(session('message'))
                                    <h6 class="text-danger">{{ session('message') }}</h6>
                                @endif

                                <a href="{{ url('admin=announce-winner') }}" class="btn btn-info">Announce Winner</a>
                                <!-- Change form method to POST -->
                                {{-- <form action="{{ url('admin/announce-winner') }}" method="POST">
                                    @csrf <!-- CSRF token for security -->
                                    <button type="submit" class="btn btn-primary mt-3">Announce Winner</button>
                                </form> --}}

                            </div>
                        </div>
                    </div>

                </div><!-- End Left side columns -->


            </div>
        </section>

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('adminlayouts.script')

</body>

</html>
