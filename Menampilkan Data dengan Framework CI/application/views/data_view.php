<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jaka Oktorio 5150411185</title>
        <link rel="icon" href="assets/images/jaka.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css">
        <link rel="stylesheet" href="assets/font/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container mb-auto">
            <button class="btn btn-success mb-2" type="button" data-toggle="modal" onclick="showModalKu();">
                <i class="fa fa-plus"></i> Tambah
            </button>
            <form class="form-inline mt-2 mt-md-0 float-right">
                <input class="form-control mr-sm-2"
                       placeholder="Search" aria-label="Search"
                       type="text">
                <button class="btn btn-success my-2 my-sm-0"
                        type="submit"> <i class="fa fa-search"></i> Search
                </button>
            </form>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users_list as $key => $row) {
                            ?>
                            <tr>
                                <th><?php echo $row->id ?></th>
                                <th nowrap><?php echo $row->name ?></th>
                                <th nowrap><?php echo $row->alamat ?></th>
                                <th nowrap><center>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-list"></i> Detail
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Delete
                                    </button></center>
                                </th>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/popper.min.js" type="text/javascript"></script>
    </body>
</html>