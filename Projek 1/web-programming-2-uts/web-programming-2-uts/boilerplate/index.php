<?php 
require_once 'src/layouts/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">MY-Hotel</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Choose Ur Hotels</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <img src="src/assets/img/a.jpg">
                                    <div class="card-body">Hotels A</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <img src="src/assets/img/b.jpg">
                                    <div class="card-body">Hotels B</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <img src="src/assets/img/c.jpg">
                                    <div class="card-body">Hotels C</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <img src="src/assets/img/d.jpg">
                                    <div class="card-body">Hotels D</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Another Hotels
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name Hotel</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Country</th>
                                            <th>Price</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name Hotel</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Country</th>
                                            <th>Price</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Cierra Plaza Hotel</td>
                                            <td>987 Cranaby street</td>
                                            <td>Chicago</td>
                                            <td>USA</td>
                                            <td>$64,00</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Nouries Hotel</td>
                                            <td>775 Fleed street</td>
                                            <td>Toronto</td>
                                            <td>Canada</td>
                                            <td>$52,00</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Ashton Grand</td>
                                            <td>643 Jose street</td>
                                            <td>Milan</td>
                                            <td>Italy</td>
                                            <td>$62,00</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Kelly Hotel</td>
                                            <td>213 Historic street</td>
                                            <td>Mexico City</td>
                                            <td>Mexico</td>
                                            <td>$49,00</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Airi Satou Hotel</td>
                                            <td>Nihonbashi, Chūō</td>
                                            <td>Tokyo</td>
                                            <td>Japan</td>
                                            <td>$48,00</td>
                                           
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main> 
                
    <?php
    require_once 'src/layouts/footer.php';
    ?>            
              
