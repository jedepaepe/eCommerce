        <!-- Details Modal -->
        <div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" arial-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center">Leavis Jeans</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="center-block">
                                        <img src="images/products/men4.png" alt="Levis Jeans" class="details img-responsive" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Détails</h4>
                                    <p>Ces jeans sont incroyables. They are straight leg, fit great and llok sexy.  Get a pair while they last!</p>
                                    <hr>
                                    <p>Price: €34,99</p>
                                    <p>Marque: Levis</p>
                                    <form action="add_cart.php" method="POST">
                                        <div class="form-group row">
                                            <div class="col-md-2"><label for="quantity">Quantity:</label></div>
                                            <div class="col-md-3"><input type="number" class="form-control" id="quantity" name="quantity"/></div>
                                            <div class="col-md-4">Disponible: 3</div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <label for="size">Size:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="size" id="size" class="form-control">
                                                    <option value=""></option>
                                                    <option value="28">28</option>
                                                    <option value="32">32</option>
                                                    <option value="36">36</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                            <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Ajouter Au Panier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
