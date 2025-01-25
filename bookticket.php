<?php include 'header.html'; ?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 shadow-lg">
        <div class="card-body p-5">
          <h1 class="card-title text-center mb-4">Book Your Ticket</h1>
          <form action="submit_ticket.php" method="POST">
            <!-- Departure and Destination -->
            <div class="row mb-3">
              <div class="col-md-6">
                <input type="text" class="form-control" name="from" placeholder="From (Departure City)" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="to" placeholder="To (Destination City)" required>
              </div>
            </div>
            
            <!-- Travel Date -->
            <div class="mb-3">
              <input type="date" class="form-control" name="travel_date" required>
            </div>

            <!-- Travel Class -->
            <div class="mb-3">
              <label class="form-label d-block">Travel Class:</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="class" value="economy" id="economy" checked>
                <label class="form-check-label" for="economy">Economy</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="class" value="business" id="business">
                <label class="form-check-label" for="business">Business</label>
              </div>
            </div>

            <!-- Number of Passengers -->
            <div class="mb-3">
              <input type="number" class="form-control" name="passengers" placeholder="Number of Passengers" min="1" required>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
              <button type="submit" class="btn btn-primary px-4">Book Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.html'; ?>
