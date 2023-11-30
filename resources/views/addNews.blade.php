<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Samachar Sagar</title>
    @include('layouts.header')
    <link rel="stylesheet" href="{{ url('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>



</head>

<body class="skin-blue sidebar-mini">
    <div class="wrapper">

        @include('layouts.headerNav')

        @include('layouts.sidenav')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Add News
                    <small>Samachar Sagar</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ url('news/add') }}"><i class="fa fa-dashboard"></i> News</a></li>
                    <li class="active">Here</li>
                </ol>
            </section>

            <style>
                .flex-container {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .heading {
                    margin-bottom: 0;
                }
            </style>

            <!-- Main content -->
            <section class="content">
                <div class="flex-container">
                    <h2 class="mb-0 text-bold heading">Create News</h2>
                    <button class="btn btn-bitbucket">Create News Category</button>
                </div><br>


                <form>
                    <div class="card">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Title:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    name="email">

                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Category:</label>
                                <select class="form-control select2 select2-danger"
                                    data-dropdown-css-class="select2-danger" style="width: 100%;">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>

                            </div>


                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email" class="form-label">Image:</label>
                                <input type="file" class="form-control" id="email" placeholder="Enter email"
                                    name="email">

                            </div>




                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email" class="form-label">Excerpt:</label>
                                <textarea class="form-control" id="email" placeholder="Enter email" name="email"></textarea>

                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email" class="form-label">Description:</label>
                                <textarea class="form-control" id="MyID" placeholder="Enter email" name="email"></textarea>

                            </div>



                        </div>

                        <button class="btn btn-bitbucket">Publish News</button>



                </form>






            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->







    </div><!-- ./wrapper -->
    <style>
        .select2-container .select2-selection--single {
            height: calc(3rem + 3px) !important;

        }
    </style>

    @include('layouts.footer')
    <script src="{{ url('assets/js/select2.full.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2()

        });
    </script>
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementById("MyID")
        });
    </script>
</body>

</html>
