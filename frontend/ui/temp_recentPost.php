<?php
require_once "../../database/dbconnect.php";
function fetchPropertyData() {
    global $conn;

    $sql = "
        SELECT 
            property_photo.imgpath, 
            property.house_type, 
            finance_details.rent_amount, 
            property.area, 
            address.city, 
            address.locality
        FROM property
        INNER JOIN property_photo ON property.pid = property_photo.pid
        INNER JOIN finance_details ON property.pid = finance_details.pid
        INNER JOIN address ON property.pid = address.pid
    ";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $properties = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($properties as $property) {
?>
        <div class="col-xl-4 col-md-6 p-3" data-aos="fade-up" data-aos-delay="100">
          <article>
            <div class="post-img">
              <img src="<?= ($property['imgpath']) ?>" alt="" class="img-fluid w-100" style="height: 300px">
            </div>
            <h2 class="title">
              <div class="name">
                <a><?= ($property['house_type']) ?></a>
              </div>
              <div class="price">
                <p class="post-category">&#x20B9;<?= ($property['rent_amount']) ?> (<?= ($property['area']) ?>)</p>
              </div>
            </h2>
            <p class="post-category"><i class="bi bi-geo-alt-fill"></i><?= ($property['locality']) ?>, <?= ($property['city']) ?></p>
            <a class="btn custom-btn" href="./propertyDetails.php">View Details</a>
          </article>
        </div>
<?php
    }
}
fetchPropertyData();
?>
