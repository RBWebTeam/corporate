 <div class="container-fluid">
   <nav class="navbar navbar-default navbar-static-top nav-pad" role="navigation" style="margin-bottom:0; height:73px;">

    <div class="navbar-header" >
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('dashboard')}}"> 

            <img src="{{url('images/landmark.png')}}" width="100"  style="margin:  -16px 10px 4px 41px"  >
            <!--   <?php if(Session::get('firstname')){ echo Session::get('firstname'); } ?> --></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right" >
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"  >
           <span class="glyphicon glyphicon-comment"></span>
       </a><span class="badge badge-notify" id="refreshID"></span>
       <!-- <ul class="dropdown-menu dropdown-messages" id="notification_id">
       </ul> -->
       <ul  class="dropdown-menu" id="intimation_notification">
       </ul>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php if(Session::get('firstname')){ echo Session::get('firstname'); } ?></a>
            </li>
                       <!--  <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> -->
                        <li class="divider"></li>
                        <li><a href="{{url('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                     
                        <li>
                            <a href="{{url('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        @if(Session::get('user_type_id')==1)
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('dashboard/registration')}}">User Registration</a>
                                    <a href="{{url('home')}}"><i class="fa fa-wrench fa-fw"></i>Add Quotes  </a>

                                    <li>
                                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Masters<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">        
                                           <li>
                                            <a href="{{url('dashboard/vertical-master')}}"><i class="fa fa-wrench fa-fw"></i>Vertical Master  </a>
                                        </li>
                                        <li>
                                            <a href="{{url('dashboard/product-master')}}"><i class="fa fa-wrench fa-fw"></i>Product Master  </a>
                                        </li>
                                        <li>
                                         <a href="{{url('dashboard/state-master')}}"><i class="fa fa-wrench fa-fw"></i>State Master  </a>
                                     </li>
                                     <li>
                                      <a href="{{url('dashboard/district-master')}}"><i class="fa fa-wrench fa-fw"></i>District Master  </a>
                                  </li>
                                   <li>
                                      <a href="{{url('dashboard/occupancy-master')}}"><i class="fa fa-wrench fa-fw"></i>Occupancy Master  </a>
                                  </li>
                                  <li>
                                      <a href="{{url('dashboard/company-occupancy-mapping')}}"><i class="fa fa-wrench fa-fw"></i>Company Occupancy Mapping  </a>
                                  </li>
                              </ul>
                          </li>
                      </li>
                      <li>
                          <!--   <a href="dashboard/approve">User Approval </a> -->
                      </li>
                  </ul>
                  <!-- /.nav-second-level -->
              </li>
              @endif

              @if(Session::get('user_type_id')==2)
              <li>
                 <!--      <a href="{{url('approved')}}"><i class="fa fa-wrench fa-fw"></i>Approve Quote</a> -->
                 <a href="{{url('home')}}"><i class="fa fa-plus-circle fa-fw"></i>Add Quotes  </a>
             </li>
             @elseif (Session::get('user_type_id')==3)
             <li>
               <!--   <a href="{{url('approved')}}"><i class="fa fa-wrench fa-fw"></i>Approve Quote</a> -->
               <a href="{{url('home')}}"><i class="fa fa-plus-circle fa-fw"></i>Add Quotes  </a>
           </li>
           @elseif (Session::get('user_type_id')==4)
           <li>
            <a href="{{url('home')}}"><i class="fa fa-plus-circle fa-fw"></i>Add Quotes  </a>
        </li>
        @endif
       <!--  <li>
            <a href="{{url('upload')}}"><i class="fa fa-upload fa-fw"></i>Upload</a>
        </li> -->
        <li>
            <a href="{{url('lead-generation')}}"><i class="fa fa-cloud-upload fa-fw"></i>Upload Leads</a>
        </li>
        <li>
            <a href="{{url('show-leads')}}"><i class="fa fa-eye  fa-fw"></i>Show Leads</a>
        </li>
        <li>
            <a href="{{url('bulk-upload')}}"><i class="fa fa-wrench fa-fw"></i>Bulk Leads Upload</a>
        </li>

         <li>
             <a href="{{url('dashboard/visiting-cart')}}"><i class="fa fa-wrench fa-fw"></i>Visiting Card</a>
        </li>



                       <!--  <li>
                            <a href="approver"><i class="fa fa-wrench fa-fw"></i> Approver </a>
                        </li>
                        <li>
                            <a href="enduser"><i class="fa fa-wrench fa-fw"></i> End User </a>
                        </li>
                        <li>
                            <a href="line-manager"><i class="fa fa-wrench fa-fw"></i> Line Manager</a>
                        </li> -->
                        
                        
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                
                
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
</div>

<style type="text/css">
 .badge-notify{
     background:red;
     position:relative;
     top: -15px;
     left: -35px;
 }
</style>