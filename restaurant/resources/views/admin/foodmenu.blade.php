<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/images/favicon.png" />
</head>

<body>

  <div class="container-scroller">


    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->

      @include("admin.navbar");


      <!-- partial -->
      <div class="main-panel">


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="table-responsive pt-3">
                <div class="container mt-4" style="padding: 20px;">

                  <h2 style="color: BLUE;">MENU MANAGEMENT</h2>
                  </br>
                  <h4> CREATE A NEW MENU ITEM </h4>
                  <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div>
                      <div class="form-group">
                        <label for="categoy">Choose a Category</label>
                        <select name="category" class="form-control border border-dark " required>
                          <option value="Starter">Starters</option>
                          <option value="Main Course">Main Course</option>
                          <option value="Dessert">Desserts</option>
                          <option value="Beverage">Beverages</option>

                        </select>
                      </div>
                      </br>
                      <label>Title</label>
                      <input type="text" name="title" class="form-control border border-dark" placeholder="Type a Title for the dish" required>
                    </div>
                    </br>
                    <div>
                      <label>Price</label>
                      <input type="number" name="price" class="form-control border border-dark placeholder=" Type the price for this dish" required>
                    </div>
                    </br>
                    <div>
                      <label>Description</label>
                      <input type="text" name="description" class="form-control border border-dark" placeholder="Type a description" required>
                    </div>
                    </br>
                    <div>
                      <label>Image</label>
                      <input type="file" name="image" class="form-control border border-dark" required>
                    </div>

                    </br>
                    </br>
                    <div>

                      <input type="submit" value="save" class="btn btn-success custom-button style=" background-color: #28a745; border-color: #28a745; color: #ffffff;" onmouseover="this.style.backgroundColor='#218838'; this.style.borderColor='#218838';" onmouseout="this.style.backgroundColor='#28a745'; this.style.borderColor='#28a745';"">
                    </div>
           
                  </form>

                  </hr>

                  </br>
                  </br>
                  </br>
                  <h4>MENU LIST</h4>

                    <div class=" container mt-4">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th >Name</th>
                            <th >Price</th>
                            <th >Image</th>
                            <th >Category</th>
                            <th >Action</th>
                            <th >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $data)  
                        <tr>
                            <td>{{$data->title}}</td>
                            <td>{{$data->price}}</td>
                            <td><img src="/foodimage/{{$data->image}}"></td>
                            <td>{{$data->category}}</td>

                            <td><a href="{{url('/editfood', $data->id)}}" 
                                class="btn btn-primary" 
                                style="background-color: #007bff; border-color: #007bff;"
                                onmouseover="this.style.backgroundColor='#0056b3'; this.style.borderColor='#0056b3';"
                                onmouseout="this.style.backgroundColor='#007bff'; this.style.borderColor='#007bff';"
                                >Edit</a>
                            </td>

                            <td><a href="{{url('/deletefood', $data->id)}}" 
                                  class="btn btn-danger" 
                                  style="background-color: #dc3545; border-color: #dc3545;"
                                  onmouseover="this.style.backgroundColor='#c82333'; this.style.borderColor='#c82333';"
                                  onmouseout="this.style.backgroundColor='#dc3545'; this.style.borderColor='#dc3545';"
                                >Delete</a>
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

      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class=" footer">

      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="admin/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/template.js"></script>
  <script src="admin/js/settings.js"></script>
  <script src="admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="admin/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>