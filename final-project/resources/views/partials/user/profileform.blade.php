<div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Info</h1>


                                              <form class="form-horizontal" role="form" action="/utilisateurs/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">

                                               {{csrf_field()}}
                                              
                                               {{method_field('PUT')}}

                                                  
                                                                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label" for="firstname">Prénom</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="firstname" name="firstname" value="{{Auth::user()->profile->firstname}}">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label" for="lastname">Nom de Famille</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="lastname" name="lastname" value="{{Auth::user()->profile->lastname}}">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                     <label class="col-lg-2 control-label" for="avatar" >Avatar</label>
                                                     <div class="col-lg-6">
                                                     <input class="form-control" type="file" id="avatar" name="avatar">
                                                     </div>
                                                 </div>

                                                 <div class="form-group">
                                                     <label class="col-lg-2 control-label" for="password" >Mot-de-Passe</label>
                                                     <div class="col-lg-6">
                                                     <input class="form-control" type="password" id="password" name="password">
                                                     </div>
                                                 </div>
                                                
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label" for="about" >Introduction</label>
                                                      <div class="col-lg-10">
                                                          <textarea id="about" name="about" class="form-control" cols="5" rows="5">{{Auth::user()->profile->about}}</textarea>
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label" for="country" >Pays</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="country" name="country" value="{{Auth::user()->profile->country}}"</div>
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label" for="birthday">Anniversaire</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="birthday" name="birthday" value="{{Auth::user()->profile->birthday}}">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label" for="occupation">Métier</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="occupation" name="occupation" value="{{Auth::user()->profile->occupation}}">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label" for="facebook">FaceBook</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facebook" name="facebook" value="{{Auth::user()->profile->facebook}}">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label" for="twitter">Twitter</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="twitter" name="twitter" value="{{Auth::user()->profile->twitter}}">
                                                      </div>
                                                  </div>


                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label" for="mobile">Mobile</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" name="mobile" value="{{Auth::user()->profile->mobile}}">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label" for="website">Site du Web URL</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="website" name="website" value="{{Auth::user()->profile->website}}">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary">SOumettre</button>
                                                          <!--<button type="button" class="btn btn-danger">Annuler</button>-->
                                                      </div>
                                                  </div>

                                              </form>
                                          </div>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>