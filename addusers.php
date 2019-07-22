<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>saicVolkswagen : homePage</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="assets/fontAwesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/nixon.css" rel="stylesheet">
    <link href="assets/lib/lobipanel/css/lobipanel.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/lib/addusers.css">
</head>

<body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li>
                        <a href="index.php"><i class="ti-home"></i> 首页 </a>
                    </li>
                      
                      
                    <li><a href="app-profile.html"><i class="ti-user"></i> 用户</a></li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout-grid2-alt"></i> 保养 <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="table-basic.html">Basic</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i> 任务 <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="ui-accordion.html">Accordion</a></li>
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-badges.html">Badges</a></li>
                            <li><a href="ui-button.html">Button</a></li>
                            <li><a href="ui-dropdown.html">Dropdown</a></li>
                            <li><a href="ui-Images.html">Images</a></li> 
                             
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-panel"></i> 故障 <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="uc-calendar.html">Calendar</a></li>
                            <li><a href="uc-carousel.html">Carousel</a></li>
                              
                            <li><a href="uc-datamap.html">Datamap</a></li>
                            <li><a href="uc-todo-list.html">To do</a></li>
                            <li><a href="uc-scrollable.html">Scrollable</a></li>
                            <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.html">Toastr</a></li>
                            <li><a href="uc-range-slider-basic.html">Basic Range Slider</a></li>
                            <li><a href="uc-range-slider-advance.html">Advance Range Slider</a></li>
                            <li><a href="uc-nestable.html">Nestable</a></li>
                            <li><a href="uc-portlets.html">Portlets</a></li>
                              
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> 备件 <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="table-basic.html">Basic</a></li> 
                        </ul>
                    </li>
                    <li> 
                    </li>
                    <li class="active">
                        <a class="sidebar-sub-toggle"><i class="ti-view-list-alt"></i> 人员 <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="users.php">人员列表</a></li>
                            <li><a href="addusers.php">新增人员</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-files"></i> 设备履历 <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="invoice.html">Basic</a></li>
                            <li><a href="invoice-editable.html">Editable</a></li>
                        </ul>
                    </li>
                    <li><a><i class="ti-close"></i> 注销</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
    <div class="header">
        <div class="pull-left">
            <div class="logo">
                <a href="index.html">
                    <img id="logoImg" src="logo/saicvolkswagen.png" data-logo_big="logo/saicvolkswagen.png" data-logo_small="logo/logoSmall.png" alt="Nixon" />
                </a>
            </div>
            <div class="hamburger sidebar-toggle">
                <span class="ti-menu"></span>
            </div>
        </div>
        <div class="pull-right p-r-15">
            <ul>
                <li class="header-icon dib">
                    <img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar">Jane <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="#"><i class="ti-user"></i> <span>用户</span></a></li>
                                <li><a href="#"><i class="ti-write"></i> <span>我的任务</span></a></li>
                                <li><a href="#"><i class="ti-calendar"></i> <span>我的日历</span></a></li>
                                <li><a href="#"><i class="ti-settings"></i> <span>设置</span></a></li>
                                <li><a href="#"><i class="ti-power-off"></i> <span>退出</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="chat-sidebar">
        <!-- BEGIN chat -->
        <div id="mmc-chat" class="color-default">
            <!-- BEGIN CHAT BOX -->
            <div class="chat-box">
                <!-- BEGIN CHAT BOXS -->
                <ul class="boxs"></ul>
                <!-- END CHAT BOXS -->
                <div class="icons-set">
                    <div class="stickers">
                        <div class="had-container">
                            <div class="row">
                                <div class="s12">
                                    <ul class="tabs" style="width: 100%;height: 60px;">
                                        <li class="tab col s3">
                                            <a href="#tab1" class="active">
                                                <img src="assets/images/1.png" alt="" />
                                            </a>
                                        </li>
                                        <li class="tab col s3"><a href="#tab2">Test 2</a></li>
                                    </ul>
                                </div>
                                <div id="tab1" class="s12 tab-content">
                                    <ul>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                        <li><img src="assets/images/1.png" alt="" /></li>
                                    </ul>
                                </div>
                                <div id="tab2" class="s12 tab-content">Test 2</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CHAT BOX -->
            <!-- BEGIN SIDEBAR -->
            <div id="sidebar" class="right scroll">
                <div class="had-container">
                    <!-- BEGIN USERS -->
                    <div class="users">
                        <ul class="user-list">
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="1" data-status="online" data-username="Rufat Askerov" data-position="left" data-filter-item data-filter-name="rufat askerov">
                                <!-- BEGIN USER IMAGE-->
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Rufat Askerov" />
                                </div>
                                <!-- END USER IMAGE-->
                                <!-- BEGIN USERNAME-->
                                <span class="user-name">Rufat Askerov</span>
                                <span class="user-show"></span>
                                <!-- END USERNAME-->
                            </li>
                            <!-- END USER-->
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="3" data-status="online" data-username="Alice" data-position="left" data-filter-item data-filter-name="alice">
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Alice" />
                                </div>
                                <span class="user-name">Alice</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="7" data-status="offline" data-username="Michael Scofield" data-position="left" data-filter-item data-filter-name="michael scofield">
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Michael Scofield" />
                                </div>
                                <span class="user-name">Michael Scofield</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="5" data-status="online" data-username="Irina Shayk" data-position="left" data-filter-item data-filter-name="irina shayk">
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Irina Shayk" />
                                </div>
                                <span class="user-name">Irina Shayk</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="6" data-status="offline" data-username="Sara Tancredi" data-position="left" data-filter-item data-filter-name="sara tancredi">
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Sara Tancredi" />
                                </div>
                                <span class="user-name">Sara Tancredi</span>
                                <span class="user-show"></span>
                            </li>
                            <!-- BEGIN USER-->
                            <li class="user-tooltip" data-id="7" data-status="offline" data-username="Jane" data-position="left" data-filter-item data-filter-name="Jane">
                                <div class="user-image">
                                    <img src="assets/images/avatar/1.jpg" class="avatar" alt="Jane" />
                                </div>
                                <span class="user-name">Jane</span>
                                <span class="user-show"></span>
                            </li>
                        </ul>
                        <div class="chat-user-search">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search" data-search />
                            </div>
                        </div>
                    </div>
                    <!-- END USERS -->
                </div>
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END chat -->
    </div>
    <!-- END chat Sidebar-->
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ul style="width:90%">
                                    <li><a href="">制定计划</a></li>
                                    <li><a href="">完成情况</a></li>
                                    <li><a href="">年一览表</a></li>
                                    <li><a href="">任务清单</a></li>
                                    <li><a href="">任务统计</a></li>
                                    <li><a href="">故障清单</a></li>
                                    <li><a href="">备件审阅</a></li>
                                    <li><a href="">辅料工具审批</a></li>
                                    <li><a href="">设备履历</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="invoice-edit">
									<div class="row m-t-30">
                                        <!--.col-->
                                        <div class="col-lg-6">
                                            <h3 class="bill">新增人员</h3>
                                        </div>
                                        <!--.col-->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card alert">
                                                <div class="card-header">
                                                    <h4>用户信息</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="input-states">
                                                        <form class="form-horizontal" action="doAddusers.php" method="POST">
                                                            <table>
                                                                <tr>
                                                                    <td class="items">姓名：</td>
                                                                    <td><input type="text" name="username" placeholder="请输入姓名" autocomplete="off" required="required"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="items">工号：</td>
                                                                    <td><input type="text" name="idnumber" placeholder="请输入工号" autocomplete="off" required="required"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="items">工段：</td>
                                                                    <td><input type="text" name="workshop" placeholder="请输入工段" autocomplete="off" required="required"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="items">岗位：</td>
                                                                    <td><input type="text" name="job" placeholder="请输入岗位" autocomplete="off"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="items">联系电话：</td>
                                                                    <td><input type="text" name="tel" placeholder="请输入联系电话" autocomplete="off"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="items">住址：</td>
                                                                    <td><input type="text" name="address" placeholder="请输入住址" autocomplete="off"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="items">邮箱：</td>
                                                                    <td><input type="text" name="email" placeholder="请输入邮箱" autocomplete="off"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="items">密码：</td>
                                                                    <td><input type="password" name="password1" placeholder="请输入密码" autocomplete="off" id="password1" required="required"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="items">重复密码：</td>
                                                                    <td>
                                                                    	<input type="password" name="password2" placeholder="请再次输入密码" autocomplete="off" id="password2" onkeyup="checkpsd()" required="required">
                                                                    	<span id="tishi"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <input type="submit" class="submit" value="提交">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /# column -->
                                    </div><!-- /# row -->
                                    <div class="row">
                                        <div class="col-lg-12 text-center m-t-50">
                                            <p class="notdaterelated">
                                                All right reaserved, Copyright @2019
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->     </div>
     <!-- /# main content -->
 </div>
 <!-- /# container-fluid -->
</div>
<!-- /# main -->
</div>
<!-- /# content wrap -->
<script src="assets/js/lib/jquery.min.js"></script>
<!-- jquery vendor -->
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="assets/js/lib/sidebar.js"></script>
<!-- sidebar -->
<script src="assets/js/lib/bootstrap.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/lib/mmc-common.js"></script>
<script src="assets/js/lib/mmc-chat.js"></script>
<!--  Chart js -->
<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/lib/chart-js/chartjs-init.js"></script>
<!-- // Chart js -->
<!--  Datamap -->
<script src="assets/js/lib/datamap/d3.min.js"></script>
<script src="assets/js/lib/datamap/topojson.js"></script>
<script src="assets/js/lib/datamap/datamaps.world.min.js"></script>
<script src="assets/js/lib/datamap/datamap-init.js"></script>
<script src="assets/lib/lobipanel/js/lobipanel.js"></script>
<!-- // Datamap -->
<script src="assets/js/scripts.js"></script>
<!-- scripit init-->
<script>
    $(document).ready(function() {
        $('#lobipanel-custom-control').lobiPanel({
            reload: false,
            close: false,
            editTitle: false
        });
        /* //验证两次输入的密码是否相同
        function checkpsd(){
            var psd1 = document.getElementsById("password1").value;
            var psd2 = document.getElementsById("password2").value;
            //对比两次密码
            if(psd1==psd2){
            	document.getElementById("tishi").innerHTML="<font color='green'>两次密码相同</font>";
            	document.getElementById("submit").disabled = false;
        	}else{
				document.getElementById("tishi").innerHTML="<font color='red'>两次密码不同</font>";
				document.getElementById("submit").disabled = true;
            }
        } */
    });
</script>
</body>

</html>