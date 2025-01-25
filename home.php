<?php include 'header.html'; ?>

<style>
  body {
    background-image: url('assets/Air_Home_banner1.jpg');
    background-size: 100% 500px;
    background-position: center;
    background-repeat: no-repeat;
    height: 500px;
    width: 100%; 
  }

  .booking-form-container {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 30px;
  }

  .form-container {
    padding: 80px 0;
    margin-bottom: 60px; /* Increased bottom margin for spacing */
  }

  .form-control {
    margin-bottom: 15px; 
  }
</style>

<div class="container form-container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card booking-form-container">
        <div class="card-body">
          <h4 class="card-title text-center mb-4">Flight Ticket Booking</h4>
          <form>
            <div class="row mb-3">
              <div class="col-md-6">
                <input type="text" class="form-control" id="from" placeholder="From (Departure City)" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="to" placeholder="To (Destination City)" required>
              </div>
              <div class="mb-3">
                <input type="date" class="form-control" id="date" name="date" required> 
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="class" id="economy" value="economy" checked>
                <label class="form-check-label" for="economy">Economy</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="class" id="business" value="business">
                <label class="form-check-label" for="business">Business</label>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary px-4">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <img src="assets/Stats_Web_v2.jpg" alt="stats" class="img-fluid rounded shadow w-100">
    </div>
  </div>
</div>

<?php include 'footer.html'; ?>
