@extends("Admin.Admin_layout.MasterApp")
@section("title","Sub Category list")

@section("content")
            <!-- Container-fluid starts-->
            <div class="page-body">
                <!-- All User Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Sub Category</h5>
                                        <form class="d-inline-flex">
                                            <a href="add-new-category.html"
                                                class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus-square"></i>Add New
                                            </a>
                                        </form>
                                    </div>

                                    <div class="table-responsive category-table">
                                        <div>
                                            <table class="table all-package theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>Si</th>
                                                        <th>Catgory name</th>
                                                      
                                                        <th>Sub category name</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                     

                                                     

                                                      @foreach($data as $datas)
                                                       
                                                       <td>1</td>
                                                       <td>{{$datas->category->catname}}</td>

                                                        <td>{{$datas->SubCatName}}</td>
                                                       

                                                        
                                                       

                                                        
                                                           
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
                <!-- All User Table Ends-->

                <div class="container-fluid">
                    <!-- footer start-->
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                    <!-- footer end-->
                </div>
            </div>
            <!-- Container-fluid end -->
@endsection