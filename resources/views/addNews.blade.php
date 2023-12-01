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
                    <button type="button" class="btn btn-bitbucket" data-toggle="modal" data-target="#myModal">Create
                        News
                        Category</button>
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
                                    @forelse ($newsCategory as $data)
                                        <option>{{ $data->title }}</option>
                                    @empty
                                        <option>No data</option>
                                    @endforelse
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

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create News Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ url('news/news-category') }}" method="post">
                        @csrf
                        <label>News Category</label>
                        <input type="text" name="newsCategory" class="form-control" /><br>
                        <button type="submit" class="btn btn-bitbucket">Submit</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


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
