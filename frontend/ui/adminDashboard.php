<?php
require_once "navbar.php";
require_once "../../database/dbConnect.php";
require_once "../../database/dbFunctions.php";

$userData = getUsers();
$propertyData = getProperties();
$contactData = getContats();

$totalUser = getTotalUser();
$totalProperty = getTotalProperty();
$totalContacts = getTotalContats();

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20 text-white">Users</h6>
                    <h2 class="d-flex justify-content-between align-items-center text-white">
                        <span class="fs-1 fw-bold"><?php echo $totalUser ?></span>
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
                        <span class="fs-1 fw-bold"><?php echo $totalProperty ?></span>
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
                            <tr class="text-center">
                                <th scope="col">SL No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($contactData): ?>
                              <?php $slNo = 1;?>
                                <?php while ($row = $contactData->fetch_assoc()): ?>
                                  <tr>
                                    <td class="text-center"><?= $slNo++ ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['subject'] ?></td>
                                    <td><?= $row['message'] ?></td>
                                    <td class="text-center">
                                        <a href="../../database/contactDelete.php?id=<?= $row['sn'] ?>" class="cursor-pointer" onclick="return confirm('Are you sure you want to delete this record?')">
                                            <i class="bi bi-trash-fill text-danger text-center"></i>
                                        </a>
                                    </td>
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
