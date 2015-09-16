<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Grid - 12 colunas</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/grid-12-cols.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <!-- wrapper -->
        <div class="wrapper">

            <!-- row -->
            <div class="row">
                <?php for ($i=0; $i < 12; $i++) : ?>
                    <div class="col-lg-1">
                        <div class="box-custom">
                            .col1
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- /row -->


            <!-- row -->
            <div class="row">
                <?php for ($i=0; $i < 6; $i++) : ?>
                    <div class="col-lg-2">
                        <div class="box-custom">
                            .col2
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <?php for ($i=0; $i < 4; $i++) : ?>
                    <div class="col-lg-3">
                        <div class="box-custom">
                            .col3
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <?php for ($i=0; $i < 3; $i++) : ?>
                    <div class="col-md-4">
                        <div class="box-custom">
                            .col4
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-sm-5">
                    <div class="box-custom">
                        .col5
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box-custom">
                        .col5
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="box-custom">
                        .col2
                    </div>
                </div>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <?php for ($i=0; $i < 2; $i++) : ?>
                    <div class="col-xs-6">
                        <div class="box-custom">
                            .col6
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-custom">
                        .col12
                    </div>
                </div>
            </div>
            <!-- /row -->


            <h1 class="titulo">GRID COM OFFSET</h1>

            <!-- row -->
            <div class="row">
                <?php for ($i=0; $i < 6; $i++) : ?>
                    <div class="col-lg-1 offset1">
                        <div class="box-custom">
                            .offset1
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <?php for ($i=0; $i < 3; $i++) : ?>
                    <div class="col-lg-2 offset2">
                        <div class="box-custom">
                            .offset2
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <?php for ($i=0; $i < 2; $i++) : ?>
                    <div class="col-lg-3 offset3">
                        <div class="box-custom">
                            .offset3
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-4 offset4">
                    <div class="box-custom">
                        .offset4
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-custom">
                        .col4
                    </div>
                </div>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-5 offset5">
                    <div class="box-custom">
                        .offset5
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="box-custom">
                        .col2
                    </div>
                </div>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-6 offset6">
                    <div class="box-custom">
                        .offset6
                    </div>
                </div>
            </div>
            <!-- /row -->

        </div>
        <!-- /wrapper -->
    </body>
</html>
