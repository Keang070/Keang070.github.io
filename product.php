<?php
require_once "template/header.php";
require_once "template/menu.php";
?>
<link rel="stylesheet" href="css/product.css">

<div class="overlay1" style="height: 40vh;min-height: auto;background-image: url(https://placehold.co/1500x400);margin-bottom: 20px;">

</div>
<div class="container" style="">
    <div class="row ">
        <div class="col-sm-5 col-md-4 col-lg-3">
            <p class="p_filter_head">Filter</p>
            <div class="row" style="padding: 0 15px 20px 15px;">
                <div class="col-12 filter_head">Brand</div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            Canon
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Fujifilm
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            HP
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Kyocera
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Pantum
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Sharp
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Toshiba
                        </label>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Other
                        </label>
                    </div>
                </div>
                <div class="col-12 filter_head">Print Speed</div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            20-25 ppm
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            30-40 ppm
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            45+ ppm
                        </label>
                    </div>
                </div>
                <div class="col-12 filter_head">Type</div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            ปริ้นเตอร์
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            เครื่องถ่ายเอกสาร
                        </label>
                    </div>
                </div>
                <div class="col-12 filter_head">Color</div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            B/W
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Color
                        </label>
                    </div>
                </div>
                <div class="col-12 filter_head">Paper size</div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            A4
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            A3
                        </label>
                    </div>
                </div>
                <div class="col-12 filter_head">Feature</div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            Fax
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Scan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Copy
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Wifi (Mobile print)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            Mac Competible
                        </label>
                    </div>
                </div>
                <div class="col-12 filter_head">สภาพ</div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            เครื่องใหม่
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
                        <label class="form-check-label" for="checkChecked">
                            เครื่อง Refurbished
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7 col-md-8 col-lg-9">
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <div class="card" style="width: 100%;">
                        <img src="images/img_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FUJIFILM 1234</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="card" style="width: 100%;">
                        <img src="images/img_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FUJIFILM 1234</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="card" style="width: 100%;">
                        <img src="images/img_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FUJIFILM 1234</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once "template/footer.php";
?>