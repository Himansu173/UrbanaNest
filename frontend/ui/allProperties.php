<?php require_once "navbar.php" ?>
<div class="container-fluid my-2 d-flex justify-content-center">
    <div class="row my-1 g-3" style="max-width:1600px">
        <div class="row p-0 m-0">
            <div class="col-6 d-md-none d-block">
                <span class="px-4 btn border rounded fw-semibold shadow-sm" onclick="toggleFilters()"
                    style="cursor:pointer"><i class="bi bi-funnel"></i> Filter</span>
            </div>
            <div class="col-6 d-md-none text-end">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle px-2 border rounded fw-semibold shadow-sm"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-filter"></i> Sort By
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><button class="dropdown-item" type="button">Popularity</button></li>
                        <li><button class="dropdown-item" type="button">Price -- Low to High</button></li>
                        <li><button class="dropdown-item" type="button">Price -- High to Low</button></li>
                        <li><button class="dropdown-item" type="button">Newest First</button></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-2 g-0 d-flex" id="FilterConainer">
            <?php 
                require_once "sideFilter.php";
            ?>
            <div class="w-100 d-md-none h-100 position-absolute" onclick="toggleFilters()"></div>
        </div>
        <div class="col-md-10">
            <div class="d-md-flex d-none mb-2">
                <span class="fw-bold mx-2">Sort By</span>
                <div class="sortBySelect">
                    <span class="mx-2 fw-medium pb-1 sortByElement" style="cursor:pointer;"
                        onclick="highlightSortBy(this)">Popularity</span>
                    <span class="mx-2 fw-medium pb-1 sortByElement" style="cursor:pointer;"
                        onclick="highlightSortBy(this)">Price -- Low to High</span>
                    <span class="mx-2 fw-medium pb-1 sortByElement" style="cursor:pointer;"
                        onclick="highlightSortBy(this)">Price -- High to Low</span>
                    <span class="mx-2 fw-medium pb-1 sortByElement" style="cursor:pointer;"
                        onclick="highlightSortBy(this)">Newest First</span>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-around" id="propertyCardContainer">
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>