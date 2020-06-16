<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './master.php';
?>


<style>
    .jumbotron{
        padding: 20px 20px;
    }
    .toast{
        background-color: #444 !important;
    }
</style>

<div class="container" style="margin-top: 100px;">
    <h2>Manage Rounds</h2>
    <div class=" jumbotron">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Round 1</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Round 2</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Round 3</a>
            </div>
        </nav>


        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="" style="margin-top: 30px;">
                    <div id="accordion">
                        <div class="card" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    Company Name
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <table style="width: 100%;">
                                        <tr>
                                            <th>Student name</th>
                                            <td style="width: 20%;">
                                                <input type="submit" class="btn" value="Accept"/>
                                                <input type="submit" class="btn" value="Reject"/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Student name</th>
                                            <td style="width: 20%;">
                                                <input type="submit" class="btn" value="Accept"/>
                                                <input type="submit" class="btn" value="Reject"/>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>Student name</th>
                                            <td style="width: 20%;">
                                                <input type="submit" class="btn" value="Accept"/>
                                                <input type="submit" class="btn" value="Reject"/>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                            <div class="card-header" id="headingtwo">
                                <h5 class="mb-0">
                                    Company Name
                                </h5>
                            </div>

                            <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion">
                                <div class="card-body">
                                    <table style="width: 100%;">
                                        <tr>
                                            <th>Student name</th>
                                            <td style="width: 20%;">
                                                <input type="submit" class="btn" value="Accept"/>
                                                <input type="submit" class="btn" value="Reject"/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Student name</th>
                                            <td style="width: 20%;">
                                                <input type="submit" class="btn" value="Accept"/>
                                                <input type="submit" class="btn" value="Reject"/>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>Student name</th>
                                            <td style="width: 20%;">
                                                <input type="submit" class="btn" value="Accept"/>
                                                <input type="submit" class="btn" value="Reject"/>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="" style="margin-top: 30px;">
                    <div id="accordion">
                        <div class="card" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    Company Name
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <table style="width: 100%;">
                                        <tr>
                                            <th>Student name</th>
                                            <td style="width: 20%;">
                                                <input type="submit" class="btn" value="Accept"/>
                                                <input type="submit" class="btn" value="Reject"/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Student name</th>
                                            <td style="width: 20%;">
                                                <input type="submit" class="btn" value="Accept"/>
                                                <input type="submit" class="btn" value="Reject"/>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>Student name</th>
                                            <td style="width: 20%;">
                                                <input type="submit" class="btn" value="Accept"/>
                                                <input type="submit" class="btn" value="Reject"/>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  

            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
        </div>
    </div>
</div>




