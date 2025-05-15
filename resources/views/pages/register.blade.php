@include('layouts.head')

<body>

    @include('layouts.header')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <!-- Page Heading -->
                <h2 class="mb-4 text-center">Payment Submission Form</h2>

                <!-- Bank Details Section -->
                <div class="alert alert-warning">
                    <h5 class=" text-dark mb-2">Payment Details</h5>
                    <ul class=" text-dark mb-0">
                        <li><strong>EasyPaisa / JazzCash Number:</strong> 0318-5628643</li>
                        <li><strong>Account Holder Name:</strong> Rabia Basri</li>
                    </ul>
                    <small class="text-dark">Please send your payment to the above number and upload the screenshot below.</small>
                </div>

                <!-- Success Alert -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Form Start -->
                <form enctype="multipart/form-data" method="POST" action="{{ url('submit.register') }}">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter your name"required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone"
                            placeholder="Enter your phone number" required>
                    </div>

                    <div class="mb-4">
                        <label for="payment_screenshot" class="form-label">Payment Screenshot</label>
                        <input type="file" class="form-control" id="payment_screenshot" name="payment_screenshot"
                            accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
                <!-- Form End -->

            </div>
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.script')

</body>
