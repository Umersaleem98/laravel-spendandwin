<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Lucky Draws</h2>
        <div class="row g-4">

            <!-- Lucky Draw Card 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">About Us</h5>
                        <p class="card-text">Invest and get a chance to win exciting rewards. Winner will be announced
                            after 24 hours.</p>
                        <ul class="list-unstyled">
                            <li><strong>Minimum Investment:</strong> Rs. 10</li>
                            <li><strong>Deadline:</strong>
                                {{-- {{ \Carbon\Carbon::now()->addHours(24)->format('d M Y, h:i A') }}</li> --}}
                        </ul>
                        <a href="{{ url('registers') }}" class="btn btn-primary w-100 mt-2">Invest Now</a>
                    </div>
                </div>
            </div>

            <!-- Lucky Draw Card 2 (Winner Announced with 1st, 2nd, 3rd Place) -->
            <div class="col-md-4">
                <div class="card shadow-lg h-100 border-success border-2 rounded-4 hover-shadow transition">
                    <div class="card-body rounded-4">
                        <h5 class="card-title text-success fw-semibold">🏆 Prizes</h5>
                        <p class="card-text">Here are the 🏆 Prizes</p>
                        <ul class="list-unstyled small">
                            <li><strong>1st Prize:</strong> Rs.8000</li>
                            <li><strong>2st Prize:</strong> Rs.5000</li>
                            <li><strong>3st Prize:</strong>Rs.1000</li>
                            <li><strong>Date:</strong> 2025</li>
                        </ul>
                        {{-- <span class="badge bg-success rounded-pill px-3 py-2 mt-2">Completed</span> --}}
                    </div>
                </div>
            </div>
            <!-- Lucky Draw Card 3 (Upcoming Example) -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Winners</h5>

                        @if ($winners->isNotEmpty())
                            @foreach ($winners as $index => $items)
                                @php
                                    $positions = ['1st Winner', '2nd Winner', '3rd Winner'];
                                @endphp
                                @if ($index < 3)
                                    <span class="badge bg-success">{{ $positions[$index] }}:
                                        {{ $items->name }}</span><br>
                                @endif
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
