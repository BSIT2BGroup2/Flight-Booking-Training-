
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flight Booking Training System</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Navbar -->
                <nav class="navbar navbar-light main-bar">
                    <div class="row">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <span>
                            <h4>Flight Booking Training System</h4>
                        </span>
                    </div>
                </nav>
                
                <nav class="navbar navbar-light form-bar">
                    <div class="container-sm ml-0 mr-0 pl-0 pr-0">
                        <div class="rower">
                        <div class="row align-items-start">
                            <div class="col">
                                        <form action="" method="post">
                                            <div class="row rower1">
                                                <div class="col columns">
                                                    <div class="form-group flight">
                                                        <span class="form-label">Flying from</span>
                                                        <input class="form-control form-control-sm" list="location" id="input" name="origin">
                                                        <datalist id="location">
                                                            <option value="PHI">Philippines</option>
                                                            <option value="SEU">South Korea</option>
                                                            <option value="TOK">Japan</option>
                                                            <option value="FRA">Italy</option>
                                                        </datalist>
                                                    </div>
                                                </div>
                                                <div class="col columns">
                                                    <div class="form-group flight">
                                                        <span class="form-label">Flyning to</span>
                                                        <input class="form-control form-control-sm" list="location" id="input" name="destinantion">
                                                        <datalist id="location">
                                                            <option value="PHI">Philippines</option>
                                                            <option value="SEU">South Korea</option>
                                                            <option value="TOK">Japan</option>
                                                            <option value="FRA">Italy</option>
                                                        </datalist>
                                                    </div>
                                                </div>
                                                <div class="col columns">
                                                    <div class="form-group dates">
                                                        <span class="form-label">Departing</span>
                                                        <input class="form-control form-control-sm" type="date" name="departing_date">
                                                    </div>
                                                </div>
                                                <div class="col columns dates">
                                                    <div class="form-group">
                                                        <span class="form-label">Returning</span>
                                                        <input class="form-control form-control-sm" type="date" name="return_date">
                                                    </div>
                                                </div>
                                                <div class="col columns">
                                                    <div class="form-group">
                                                        <span class="form-label">Adults</span>
                                                        <input class="form-control form-control-sm" type="number" placeholder="0" min="0" name="adult">
                                                    </div>
                                                </div>
                                                <div class="col columns">
                                                    <div class="form-group">
                                                        <span class="form-label">Children</span>
                                                        <input class="form-control form-control-sm" type="number" placeholder="0" min="0" name="chile">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row rower2">
                                                <div class="col">
                                                    <div class="form-group flight-type">
                                                        <span class="form-label">Trip Type</span>
                                                        <select class="form-control form-control-sm" name="trip_type">
                                                            <option>Return</option>
                                                            <option>One Way</option>
                                                            <option>Multi-city</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group flight-type">
                                                        <span class="form-label">Travel Class</span>
                                                        <select class="form-control form-control-sm" name="travel_class">
                                                            <option>Economy class</option>
                                                            <option>Business class</option>
                                                            <option>First class</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                                <div class="col checkbox">
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <button class="form-control form-control-sm submit-btn  btn" name="submit">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End-->

            <?php if (!isset($_POST['submit'])) {?>
                
            
            <main>
                <div class="container-fluid">
                    <h2>Flight Search</h2>
                    <p>To start search enter Flying from and Flying to destinations.</p>
                </div>
            <?php }else{ ?>
                <div class="container-fluid">
                    <h2>No Flight Found</h2>
                    <p>Showing 0 of 0.</p>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Departure</th>
                                            <th>DATE</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td class="air">Korea</td>
                                        <div class="time">
                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>
                                        </div>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Arrival</th>
                                            <th colspan="3">DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Philippines</td>
                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>       
                        </div>
                    </div>
                </div>
            </main>
            <?php }?>
            </div>
        </div>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>