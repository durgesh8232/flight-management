<?php include 'header.html'; ?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card border-0 shadow-lg">
        <div class="card-body p-5">
          <h1 class="card-title text-center mb-4">Ticket Allocation</h1>
          <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
              <thead class="table-primary">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Passenger Name</th>
                  <th scope="col">Ticket ID</th>
                  <th scope="col">Flight Number</th>
                  <th scope="col">Seat Number</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Durgesh</td>
                  <td>TICK12345</td>
                  <td>FLIGHT001</td>
                  <td>12A</td>
                  <td><span class="badge bg-success">Confirmed</span></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Raj</td>
                  <td>TICK67890</td>
                  <td>FLIGHT002</td>
                  <td>15C</td>
                  <td><span class="badge bg-warning">Pending</span></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Gaurav</td>
                  <td>TICK54321</td>
                  <td>FLIGHT003</td>
                  <td>9B</td>
                  <td><span class="badge bg-danger">Cancelled</span></td>
                </tr>
                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.html'; ?>
