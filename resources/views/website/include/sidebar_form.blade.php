<form action="{{route('website.contact.email')}}" class="form-horizontal" method="post" enctype="multipart/form-data"> 
@csrf            
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" data-animation="true" data-placement="top" data-toggle="tooltip" title="Your Name" placeholder="Full Name" name="name" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="radio col-sm-3 col-xs-3">
                                <label class="control-label">
                                    <input type="radio" value="Male" required="required" name="gender"> 
                                    Male
                                </label>
                            </div>                                                  
                            <div class="radio col-sm-3 col-xs-3">
                                <label class="control-label">
                                    <input type="radio"value="Female" required="required" name="gender"> 
                                    Female
                                </label>
                            </div>                                                  
                        </div>
                        <fieldset>
                            <legend> Birth Details-</legend>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12 npr">                        
                                    <input type="text" title="dd:mm:yyyy" data-placement="top" data-animation="true" data-toggle="tooltip" class="form-control"placeholder="dd:mm:yyyy" name="date" required="required">
                                </div>
                                <div class="col-sm-4 col-xs-12">                        
                                    <input type="text" class="form-control" data-placement="top" data-animation="true" data-toggle="tooltip" title="hh:mm AM/PM" placeholder="hh:mm AM/PM" name="time" required="required">                                                                                      
                                </div>                          
                                <div class="col-sm-4 col-xs-12 npl">                        
                                    <input type="text" title="Place Of Birth" data-placement="top" data-animation="true" data-toggle="tooltip" class="form-control" placeholder="Place" name="place" required="required">
                                </div>
                            </div>                      
                        </fieldset>
                        <div class="form-group">
                            <div class="col-sm-12">                     
                                <input type="email" class="form-control" placeholder="Email address" name="email" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">                     
                                <input type="text" class="form-control" placeholder="Mobile Number" name="phone" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control" rows="2" placeholder="Your Question" name="message" required="required" style="resize: vertical;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">                    
                            <div class="pl-lg">
                                <input type="submit" value="Submit" class="btn btn-info">&nbsp;&nbsp;                       
                            </div>
                        </div>                      
                    </form>