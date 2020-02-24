<!DOCTYPE html>
<html>
<?php require("head.php"); ?>
<body>
<?php require("nav.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <h1>Order Form</h1>
        </div>

        <div class="row">
            <form action="processorder.php" method="get">
                <div class="form-group row">
                    <label class="col-md-5 col-form-label text-nowrap heading">Item</label>
                    <label class="col-md-7 col-form-label text-nowrap heading">Quantity</label>
                </div>

                <div class="form-group row">
                    <label class="col-md-5 col-form-label text-nowrap" for="tire_qty">Tires</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="tire_qty">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-5 col-form-label text-nowrap" for="oil_qty">Oil</label>
                    <div class="col-md-7 ">
                        <input type="text" class="form-control" name="oil_qty">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-5 col-form-label text-nowrap" for="spark_plug_qty">Spark Plugs</label>
                    <div class="col-md-7 ">
                        <input type="text" class="form-control" name="spark_plug_qty">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary">Submit Order</button>
                    </div>
                </div>


            </form>
        </div>
    </div>

</body>
</html>