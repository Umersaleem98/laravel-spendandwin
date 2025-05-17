<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Lucky Draws</h2>
        <div class="row g-4">

            <!-- Lucky Draw Card 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Draw #1234</h5>
                        <p class="card-text">Invest and get a chance to win exciting rewards. Winner will be announced
                            after 24 hours.</p>
                        <ul class="list-unstyled">
                            <li><strong>Minimum Investment:</strong> Rs. 10</li>
                            <li><strong>Deadline:</strong>
                                {{ \Carbon\Carbon::now()->addHours(24)->format('d M Y, h:i A') }}</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100 mt-2">Invest Now</a>
                    </div>
                </div>
            </div>

            <!-- Lucky Draw Card 2 (Winner Announced with 1st, 2nd, 3rd Place) -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-success">
                    <div class="card-body">
                        <h5 class="card-title text-success">Winner Announced</h5>
                        <p class="card-text">Here are the winners for Draw #1229:</p>
                        <ul class="list-unstyled">
                            <li><strong>Winner Prize:</strong> (Rs. 10,000)</li>
                            {{-- <li><strong>2nd Prize:</strong> (Rs. 5,000)</li>
              <li><strong>3rd Prize:</strong> (Rs. 2,000)</li> --}}
                            <li><strong>Date:</strong> 13 May 2025</li>
                        </ul>
                        <span class="badge bg-success">Completed</span>
                    </div>
                </div>
            </div>

            <!-- Lucky Draw Card 3 (Upcoming Example) -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Draw #1235</h5>

                        @if ($winners->isNotEmpty())
                            @foreach ($winners as $items)
                                <span class="badge bg-success">The Winner is {{ $items->name }}</span>
                            @endforeach
                        @else
                            <p class="card-text">New lucky draw coming soon. Stay tuned for more updates!</p>
                            <span class="badge bg-warning text-dark">Upcoming</span>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
