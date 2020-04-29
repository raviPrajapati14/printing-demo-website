<?php include "header.php"; ?>

<div class="main-container row p-0 d-flex">
    <div class="col-lg-2 col-md-2 col-2 p-0 bg-light">
                    <ul class="sidebar">
                        <li><a href="#">Marriage Invitation Card</a> </li>
                        <li><a href="#">Invitation Card</a></li>
                        <li><a  href="#">Bussiness Card</a></li>
                        <li><a href="#">Bill-Book</a></li>
                        <li><a href="#">Voucher Book</a></li>
                        <li><a href="#">Latterpad</a></li>
                        <li><a href="#">Pemphlets</a></li>
                        <li ><a href="#">other</a></li>
                    </ul>
    </div>

    <div class="col-md-9 col-lg-9 col-1">
        
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-2">
                <div class="card" >
                    <img class="card-img-top" style="height:200px; width:auto" src="images/printing.jpg" class="img-fluid" alt="Card-image">
                    <div class="card-body">
                        <h4 class="card-title">Product Name </h4>
                        <h5> <i class="fas fa-rupee-sign"></i> 499/- <small> <del class="text-danger"> <i class="fas fa-rupee-sign"></i> 999/- </del> </small> </h5>

                        <button type="button" class="btn btn-primary"> <i class="fas fa-shopping-cart"> </i> Add to cart </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#printingModelID">
                        Quick View
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="printingModelID" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title text-primary">Printing Serivice</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                    <h4 class="text-warning">  Printing Categories </h4>
                                        <ul class="text-secondary">
                                            <li>Offset Printing</li>
                                            <li>Screen Printing</li>
                                            <li>Multicolor Printing</li>
                                            <li>Emboss Printing</li>
                                            <li>UV Printing</li>
                                            <li>Etc.</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary"> <i class="fas fa-shopping-cart"> </i> Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


        </div>
    </div>
</div>



<?php include "footer.php"; ?>