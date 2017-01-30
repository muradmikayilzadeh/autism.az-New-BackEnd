<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{url('assets/css/admin/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{url('assets/css/admin/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{url('assets/css/admin/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{url('assets/css/admin/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{url('assets/css/admin/pe-icon-7-stroke.css')}}" rel="stylesheet" />

     <style>
        img{
            height: 20px;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    autism.az
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{url('/mlgrouppanel')}}">
                        <p>Lövhə</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('/mlgrouppanel-users')}}">
                        <p>İstifadəçilər</p>
                    </a>
                </li>               
                <li>
                    <a href="{{url('/mlgrouppanel-posts')}}">
                        <p>Məqalələr</p>
                    </a>
                </li>
                 <li>
                    <a href="{{url('/mlgrouppanel-tags')}}">
                        <p>Etiketlər</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
       <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{url('mlgrouppanel-logout')}}">
                                Çıxış et
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Bütün Məqalələr</h4>
                                <p class="category">Portalda yerləşdirilmiş bütün məqalələr</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Başlıq</th>
                                        <th>Mətn</th>
                                        <th>Müəllif</th>
                                        <th>Şəkil</th>
                                        <th>Video</th>
                                        <th>Yazılma tarixi</th>
                                        <th>Status</th>
                                        <th>Əməllər</th>
                                    </thead>
                                    <tbody>
                                       @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->title}}</td>      
                                            <td>{{substr($post->content,0,40).'...'}}</td>                   
                                            <td>{{$post->hekim_id}}</td>                                            
                                            <td>
                                                @if(!empty($post->img))
                                                   <img src="{{$post->img}}" alt="">
                                                    @else
                                                    yoxdur
                                                @endif
                                            </td>                                            
                                            <td>
                                                @if(!empty($post->video))

                                                    @else
                                                    yoxdur
                                                @endif
                                            </td>
                                            <td>{{$post->created_at}}</td>
                                            <td>
                                                @if($post->status=='1')
                                                    :)
                                                    @else
                                                    :(
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{url('/mlgrouppanel-showpost',$post->id)}}" class="btn btn-default btn-xs">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <a href="{{url('/mlgrouppanel-permitpost',$post->id)}}" class="btn btn-success btn-xs">
                                                    <i class="fa fa-check"></i>
                                                </a>

                                                <a href="{{url('/mlgrouppanel-banpost',$post->id)}}" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>                                      
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{url('assets/js/admin/jquery-1.10.2.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/admin/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{url('assets/js/admin/bootstrap-checkbox-radio-switch.js')}}"></script>

    <!--  Charts Plugin -->
    <script src="{{url('assets/js/admin/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{url('assets/js/admin/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{url('assets/js/admin/light-bootstrap-dashboard.js')}}"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="{{url('assets/js/admin/demo.js')}}"></script>


</html>
