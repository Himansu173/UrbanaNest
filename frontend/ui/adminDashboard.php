<?php
require_once "navbar.php";
require_once "../../database/dbConnect.php";

global $conn;

function getContats() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM contacts");
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }
}

function getTotalContats() {
  global $conn;
  $stmt = $conn->prepare("SELECT COUNT(*) AS total_contacts FROM contacts");
  if ($stmt->execute()) {
      $result = $stmt->get_result();
      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          // echo "No of contacts ".$row['total_contacts'];
          return $row['total_contacts']; 
      } else {
          return 0; 
      }
  }
}

$contactData = getContats();
$totalContacts = getTotalContats();

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20 text-white">Users</h6>
                    <h2 class="d-flex justify-content-between align-items-center text-white">
                        <span class="fs-1 fw-bold">486</span>
                        <i class="bi bi-people-fill"></i>
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20 text-white">Properties</h6>
                    <h2 class="d-flex justify-content-between align-items-center text-white">
                        <span class="fs-1 fw-bold">486</span>
                        <i class="bi bi-houses-fill"></i>
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20 text-white">Customer Feedbacks</h6>
                    <h2 class="d-flex justify-content-between align-items-center text-white">
                        <span class="fs-1 fw-bold"><?php echo $totalContacts ?></span>
                        <i class="bi bi-chat-right-text-fill"></i>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped dashboard-data">
                        <fieldset class="responsive-fieldset mx-auto">Customer Feedbacks</fieldset>
                        <thead class="thead-dark table-warning">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($contactData): ?>
                                <?php while ($row = $contactData->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= $row['name'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['subject'] ?></td>
                                        <td><?= $row['message'] ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4">No data Found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once "footer.php";
?>
