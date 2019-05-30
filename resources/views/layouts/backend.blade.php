<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{('new/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('new/bower_components/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{('new/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{('new/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{('new/dist/css/skins/skin-blue.min.css')}}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">

            <span class="logo-mini"><b>A</b>LT</span>
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

    </header>

    <aside class="main-sidebar">

        <section class="sidebar">

            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{('new/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <ul class="sidebar-menu" data-widget="tree">

                <li class="active"><a href="{{url('category')}}"><i class="fa fa-link"></i> <span>Category</span></a></li>

                </li>
            </ul>

        </section>

    </aside>


    <div class="content-wrapper">

        <section class="content container-fluid">

            @yield('content')

        </section>

    </div>

    <footer class="main-footer">

        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>


<script src="{{('new/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{('new/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{('new/dist/js/adminlte.min.js')}}"></script>
<script>

    $('#edit').on('show.bs.modal', function (event) {

        console.log('Modal Opened');
        var button = $(event.relatedTarget) // Button that triggered the modal
        var title = button.data('mytitle')
        var description = button.data('mydescrition')
        var cat_id = button.data('catid')

        var modal = $(this)
        modal.find('.modal-body #title').val(title)
        modal.find('.modal-body #des').val(description)
        modal.find('.modal-body #cat_id').val(cat_id)
    })

</script>
</body>
</html>