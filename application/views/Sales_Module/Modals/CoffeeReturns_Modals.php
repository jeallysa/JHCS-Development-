<div class="modal-dialog modal-md">
    							<div class="modal-content">
									
									<div class="modal-heading">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
										<h4 class="modal-title"><center>Resolve Coffee Returns</center></h4>
									</div>
								
									
										<div class="modal-body" style="padding: 5px;">
											<div id="modal-loader" style="display: none; text-align: center;">
												
											   </div>

											
                                        <div class="row">
                                            <div class="col-lg-7">

												<div class="row">
													<div class="form-group">
														<label class="col-md-5 control">Coffee Blend :</label>
														<div class="col-md-7">
															<p><b><?php echo $blends[0]['blend']; ?></b></p>
													
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control">Size :</label>
														<div class="col-md-5">
															<p><b>500g</b></p>
														</div>
													</div>
												<div class="row">
													<div class="form-group">
														<label class="col-md-5 control">Bag :</label>
														<div class="col-md-6">
															<p><b>Clear</b></p>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-5 control">Quantity :</label>
														<div class="col-md-6">
															<p><b>3</b></p>
														</div>
													</div>
												</div>
													
												
                                            </div>
                                        </div>
											
                                        <hr>
										<?php echo form_open('SalesReturns/addReturns'); ?>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Delivery Receipt No :</label>
                                                    <div class="col-md-6">
                                                        <p class="form-control" contenteditable="true" name="delivery_receipt">DR0123</p>
                                                    </div>
                                                </div>
                                            </div>
											
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Date of Delivery :</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="delivery_date" placeholder="Date" type="date" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-5 control">Received by :</label>
                                                    <div class="col-md-7">
                                                        <input id="" name="receiver" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control">Delivery status:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control nav">
                                                            <option value="">Full Deivery</option>
                                                            <option value="delivery">Partial Delivery</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
										</div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 ">
                                                <div class="select-pane " id="delivery">
                                                    <div class="form-group">
                                                        <label class="col-md-6 control">Quantity Delivered:</label>
                                                        <div class="col-md-5">
                                                            <input class="form-control" type="text" name="quantity_delivered" placeholder="2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											</div>
										<div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 ">
                                                <div class="select-pane" id="delivery">
                                                    <div class="form-group">
                                                        <label class="col-md-6 control">Remaining Quantity: </label>
                                                        <div class="col-md-5">
                                                            <p><b>1</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
											<div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-5 control">Remarks :</label>
                                                    <div class="col-md-7">
                                                        <input id="" name="name" type="text" class="form-control">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
										</div><br>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary" name="submit">Save changes</button>
											<button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									<?php echo form_close(); ?>
						</div>
					</div>
</div>
