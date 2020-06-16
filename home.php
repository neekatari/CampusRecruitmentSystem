<?php
session_start();
require 'master.php';
/*if(isset($_SESSION['uname'])){
    echo "<script type='text/javascipt'> window.location.href='home.php' </script>";
}
 else {
    echo "<script type='text/javascipt'> window.location.href='index.php' </script>";
}

 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>
<style>
    .col{
        
        padding: 50px 50px;
        
    }
    a:hover{
        text-decoration: none;
        
    }
    .total-user:hover{
       background-color: #FF0000 !important; 
    }
    .registered-today:hover{
        background-color: #0000FF !important;
    }
    .selected:hover{
        background-color: #FFDF00 !important;
    }
    .active:hover{
        background-color: #DC143C !important;
    }
    .inner{
        display: inline-block;
        
    }
    .icon{
        margin-left: 20px;
        font-size: 50px !important;
        display: inline-block;
    }
    .jaba{
        background-color: #eee !important;
        padding:30px; background-color: white;
        box-shadow: 1px 3px 10px 0px #999;
    }
    .niche{
        background-color: #60A3F6 !important;
    }
    .niche:hover{
        background-color: #1D7CF2 !important;
        
    }
    
</style>
<div class="container-fluid row" style="margin-top: 100px;">
    
    <div class="col-md-8">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/c1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/c2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/c3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row col-md-4 justify-content-center">
        
        <div class="col-md-6 justify-content-center">
            <a href="#" class="">
            <div class="small-box total-user"style="background-color:#CD5C5C; color: white; border-radius: 5px; padding:20px; box-shadow:2px 3px 8px 0px #999;" >
                <div class="inner">
                    <h3>jaba</h3>
                    <p>Chalo jamvavala</p>
                </div>
                <div class="icon" >
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
               <div class="small-box">
                   Click For More <i class="fa fa-arrow-right"></i>
               </div>
                
            </div>
            
            </a>
            
        </div>
        
        <div class="col-md-6">
            <a href="#" class="registered-today" >
            <div class="small-box registered-today"style="background-color: #1E90FF; color:white; border-radius: 5px; padding: 20px; box-shadow:2px 3px 8px 0px #999;" >
                <div class="inner">
                    <h3>jaba</h3>
                    <p>Chalo jamvavala</p>
                </div>
                <div class="icon">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                </div>
                <div class="small-box">
                   Click For More <i class="fa fa-arrow-right"></i>
               </div>
                
            </diV>
            </a>
        </div>
        <div class="col-md-6">
            <a href="#" class="selected" >
            <div class="small-box selected"style="background-color: #CCCC00; color: white;border-radius: 5px; padding: 20px; box-shadow:2px 3px 8px 0px #999;" >
                <div class="inner">
                    <h3>jaba</h3>
                    <p>Chalo jamvavala</p>
                </div>
                <div class="icon">
                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                </div>
                <div class="small-box">
                   Click For More <i class="fa fa-arrow-right"></i>
               </div>
            </diV>
            </a>
        </div>
        <div class="col-md-6">
            <a href="#" class="active" >
            <div class="small-box active"style="background-color: #DB7093; color: white; border-radius: 5px; padding: 20px; box-shadow:2px 3px 8px 0px #999;" >
                <div class="inner">
                    <h3>jaba</h3>
                    <p>Chalo jamvavala</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users" ></i>
                </div>
                <div class="small-box">
                   Click For More <i class="fa fa-arrow-right"></i>
               </div>
            </diV>
            </a>
        </div>
        <div class="col-md-12" style="margin-top: 50px;">
            <a href="#" class="niche" >
            <div class="small-box niche"style="background-color: #DB7093; color: white; border-radius: 5px; padding: 20px; box-shadow:2px 3px 8px 0px #999;" >
                
                <div class="small-box">
                   Click For More <i class="fa fa-arrow-right"></i>
               </div>
            </diV>
            </a>
        </div>
        
        
    </div>
    
    
</div>
<div class="row col-lg-12 justify-content-center" style="text-align: center;margin-top: 30px; ">
    
        <div class="col col-lg-6 text-center" style="padding-left: 50px; padding-right: 50px; ">
            <div class="jaba">
            <h4 style="color:  #cca300;">Total user Login Today From Following countries</h4>
            <canvas id="myChart" width="800" height="450" ></canvas>
            </div>
        </div>
        <div class="col col-lg-6 text-center" style="padding-left: 50px; padding-right: 50px; ">
            <div class="jaba">
            <h4 style="color:  #cca300;">The criteria of Registration.</h4>
            <canvas id="line-chart" width="800" height="450"></canvas>
            </div>
        </div>
        <div class="col col-lg-6 text-center" style="padding-left: 50px; padding-right: 50px;">
            <div class="jaba">
            <h4 style="color:  #cca300;">Total number of visits.</h4>
            <canvas id="doughnut-chart" width="800" height="450"></canvas>
            </div>
        </div>
        <div class="col col-lg-6 text-center" style="padding-left: 50px; padding-right: 50px;">
            <div class="jaba">
            <h4 style="color:  #cca300;">Activities of Studentes.</h4>
            <canvas id="pie-chart" width="800" height="450"></canvas>
            </div>
        </div>
   
</div>



<script type="text/javascript" src="chart.js" ></script>
