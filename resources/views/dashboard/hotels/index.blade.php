@extends('dashboard.layout.app')

@section('title' , "Hotels")

@section('content')
    <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
            data-hs-datatables-options='{
             "columnDefs": [{
                "targets": [0, 4, 9],
                "width": "5%",
                "orderable": false
              }],
             "order": [],
             "info": {
               "totalQty": "#datatableWithPaginationInfoTotalQty"
             },
             "search": "#datatableSearch",
             "entries": "#datatableEntries",
             "pageLength": 12,
             "isResponsive": false,
             "isShowPaging": false,
             "pagination": "datatablePagination"
           }'>
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                            <label class="form-check-label">
                            </label>
                        </div>
                    </th>
                    <th class="table-column-ps-0">Product</th>
                    <th>Type</th>
                    <th>Vendor</th>
                    <th>Stocks</th>
                    <th>SKU</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Variants</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll1">
                            <label class="form-check-label" for="datatableCheckAll1"></label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img4.jpg" alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Photive wireless speakers</h5>
                            </div>
                        </a>
                    </td>
                    <td>Electronics</td>
                    <td>Google</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox1" checked>
                            <label class="form-check-label" for="stocksCheckbox1"></label>
                        </div>
                    </td>
                    <td>2384741241</td>
                    <td>$65</td>
                    <td>60</td>
                    <td>2</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown1" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown1">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck2">
                            <label class="form-check-label" for="productsCheck2">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img26.jpg" alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Topman shoe</h5>
                            </div>
                        </a>
                    </td>
                    <td>Shoes</td>
                    <td>Topman</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox2" checked>
                            <label class="form-check-label" for="stocksCheckbox2"></label>
                        </div>
                    </td>
                    <td>4124123847</td>
                    <td>$21</td>
                    <td>125</td>
                    <td>4</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown2" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown2">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck3">
                            <label class="form-check-label" for="productsCheck3">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img25.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">RayBan black sunglasses</h5>
                            </div>
                        </a>
                    </td>
                    <td>Accessories</td>
                    <td>RayBan</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox3">
                            <label class="form-check-label" for="stocksCheckbox3"></label>
                        </div>
                    </td>
                    <td>8472341241</td>
                    <td>$37</td>
                    <td>42</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown3" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown3">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck4">
                            <label class="form-check-label" for="productsCheck4">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img6.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Mango Women's shoe</h5>
                            </div>
                        </a>
                    </td>
                    <td>Shoes</td>
                    <td>Mango</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox4" checked>
                            <label class="form-check-label" for="stocksCheckbox4"></label>
                        </div>
                    </td>
                    <td>2412384741</td>
                    <td>$65</td>
                    <td>76</td>
                    <td>3</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown4" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown4">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck5">
                            <label class="form-check-label" for="productsCheck5">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img3.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Calvin Klein t-shirts</h5>
                            </div>
                        </a>
                    </td>
                    <td>Clothing</td>
                    <td>Calvin Klein</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox5">
                            <label class="form-check-label" for="stocksCheckbox5"></label>
                        </div>
                    </td>
                    <td>8234741241</td>
                    <td>$89</td>
                    <td>99</td>
                    <td>7</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown5" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown5">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck6">
                            <label class="form-check-label" for="productsCheck6">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img5.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Givenchy perfume</h5>
                            </div>
                        </a>
                    </td>
                    <td>Clothing</td>
                    <td>Givenchy</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox6" checked>
                            <label class="form-check-label" for="stocksCheckbox6"></label>
                        </div>
                    </td>
                    <td>9984741241</td>
                    <td>$99</td>
                    <td>50</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown6" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown6">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck7">
                            <label class="form-check-label" for="productsCheck7">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img11.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Asos t-shirts</h5>
                            </div>
                        </a>
                    </td>
                    <td>Clothing</td>
                    <td>Asos</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox7">
                            <label class="form-check-label" for="stocksCheckbox7"></label>
                        </div>
                    </td>
                    <td>7184741241</td>
                    <td>$17</td>
                    <td>422</td>
                    <td>4</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown7" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown7">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck8">
                            <label class="form-check-label" for="productsCheck8">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img12.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Apple AirPods 2</h5>
                            </div>
                        </a>
                    </td>
                    <td>Electronics</td>
                    <td>Apple</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox8">
                            <label class="form-check-label" for="stocksCheckbox8"></label>
                        </div>
                    </td>
                    <td>1084741241</td>
                    <td>$249</td>
                    <td>1000</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown8" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown8">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck9">
                            <label class="form-check-label" for="productsCheck9">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img13.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Timex Watch</h5>
                            </div>
                        </a>
                    </td>
                    <td>Accessories</td>
                    <td>Timex</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox9">
                            <label class="form-check-label" for="stocksCheckbox9"></label>
                        </div>
                    </td>
                    <td>4831441241</td>
                    <td>$68</td>
                    <td>15</td>
                    <td>2</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown9" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown9">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck10">
                            <label class="form-check-label" for="productsCheck10">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img14.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Air Jordan 1</h5>
                            </div>
                        </a>
                    </td>
                    <td>Shoes</td>
                    <td>Nike Jordan</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox10" checked>
                            <label class="form-check-label" for="stocksCheckbox10"></label>
                        </div>
                    </td>
                    <td>1223847441</td>
                    <td>$139</td>
                    <td>456</td>
                    <td>9</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown10" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown10">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck11">
                            <label class="form-check-label" for="productsCheck11">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img15.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">RayBan sunglasses</h5>
                            </div>
                        </a>
                    </td>
                    <td>Accessories</td>
                    <td>RayBan</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox11">
                            <label class="form-check-label" for="stocksCheckbox11"></label>
                        </div>
                    </td>
                    <td>1242384741</td>
                    <td>$14</td>
                    <td>83</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown11" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown11">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck12">
                            <label class="form-check-label" for="productsCheck12">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img17.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Gray and yellow cap</h5>
                            </div>
                        </a>
                    </td>
                    <td>Accessories</td>
                    <td>VA RVCA</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox12">
                            <label class="form-check-label" for="stocksCheckbox12"></label>
                        </div>
                    </td>
                    <td>8311741241</td>
                    <td>$9</td>
                    <td>522</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown12" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown12">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck13">
                            <label class="form-check-label" for="productsCheck13">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img16.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Apple iPad Pro 2020</h5>
                            </div>
                        </a>
                    </td>
                    <td>Electronics</td>
                    <td>Apple</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox13" checked>
                            <label class="form-check-label" for="stocksCheckbox13"></label>
                        </div>
                    </td>
                    <td>2459741241</td>
                    <td>$799</td>
                    <td>450</td>
                    <td>8</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown13" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown13">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck14">
                            <label class="form-check-label" for="productsCheck14">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img18.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Brown Hat</h5>
                            </div>
                        </a>
                    </td>
                    <td>Accessories</td>
                    <td>Mango</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox14" checked>
                            <label class="form-check-label" for="stocksCheckbox14"></label>
                        </div>
                    </td>
                    <td>2384994241</td>
                    <td>$67</td>
                    <td>32</td>
                    <td>7</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown14" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown14">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck15">
                            <label class="form-check-label" for="productsCheck15">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img19.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Levis women's jeans</h5>
                            </div>
                        </a>
                    </td>
                    <td>Clothing</td>
                    <td>Levis</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox15">
                            <label class="form-check-label" for="stocksCheckbox15"></label>
                        </div>
                    </td>
                    <td>1344761241</td>
                    <td>$74</td>
                    <td>121</td>
                    <td>3</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown15" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown15">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck16">
                            <label class="form-check-label" for="productsCheck16">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img20.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Levis men's jeans jacket</h5>
                            </div>
                        </a>
                    </td>
                    <td>Clothing</td>
                    <td>Levis</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox16">
                            <label class="form-check-label" for="stocksCheckbox16"></label>
                        </div>
                    </td>
                    <td>9904741241</td>
                    <td>$61</td>
                    <td>357</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown16" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown16">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck17">
                            <label class="form-check-label" for="productsCheck17">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img21.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Beats Headphones</h5>
                            </div>
                        </a>
                    </td>
                    <td>Electronics</td>
                    <td>Beats</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox17">
                            <label class="form-check-label" for="stocksCheckbox17"></label>
                        </div>
                    </td>
                    <td>8812384741</td>
                    <td>$499</td>
                    <td>50</td>
                    <td>4</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown17" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown17">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck18">
                            <label class="form-check-label" for="productsCheck18">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img22.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Office Notebook</h5>
                            </div>
                        </a>
                    </td>
                    <td>Accessories</td>
                    <td>-</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox18">
                            <label class="form-check-label" for="stocksCheckbox18"></label>
                        </div>
                    </td>
                    <td>7134741241</td>
                    <td>$9</td>
                    <td>750</td>
                    <td>1</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown18" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown18">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck19">
                            <label class="form-check-label" for="productsCheck19">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img23.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Colorful pens</h5>
                            </div>
                        </a>
                    </td>
                    <td>Accessories</td>
                    <td>-</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox19" checked>
                            <label class="form-check-label" for="stocksCheckbox19"></label>
                        </div>
                    </td>
                    <td>2224741241</td>
                    <td>$6</td>
                    <td>750</td>
                    <td>3</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown19" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown19">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="table-column-pe-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="productsCheck20">
                            <label class="form-check-label" for="productsCheck20">
                            </label>
                        </div>
                    </td>
                    <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="./assets/img/400x400/img24.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Clarks shoes</h5>
                            </div>
                        </a>
                    </td>
                    <td>Shoes</td>
                    <td>Clarks</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox20" checked>
                            <label class="form-check-label" for="stocksCheckbox20"></label>
                        </div>
                    </td>
                    <td>2614741241</td>
                    <td>$66</td>
                    <td>982</td>
                    <td>10</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                                <i class="bi-pencil-fill me-1"></i> Edit
                            </a>

                            <!-- Button Group -->
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                    id="productsEditDropdown20" data-bs-toggle="dropdown" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-end-end mt-1" aria-labelledby="productsEditDropdown20">
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-archive dropdown-item-icon"></i> Archive
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-upload dropdown-item-icon"></i> Publish
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                                    </a>
                                </div>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
