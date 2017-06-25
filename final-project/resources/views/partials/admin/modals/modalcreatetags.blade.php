


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ajouter une Étiquette</h4>
      </div>
          <div class="modal-body">
               <div class="form">
                                        
                                    <form action="{{route('tags.store')}}" method="POST" class="form-horizontal" >
                                              {{csrf_field()}}

                                              
                                              <div class="col-sm-12">
                                                 <label class="control-label col-sm-1" for="tags">Étiquette</label>
                                                 <input class="form-control" type="text" id="tags" name="tags">
                                              </div>

                                              <div class="col-sm-12">
                                                 <label class="control-label col-sm-1" for="order">Ordre</label>
                                                 <input class="form-control" type="number" id="order" name="order">
                                              </div>



                                              <div class="col-sm-12"><p></p><p></p></div>
                                              
                                              <!--<div class="col-sm-10">
                                                  <button class="btn- btn-primary" type="submit">Soumettre</button>
                                              </div>-->
                                               


                                   
                            

      
                                              <div class="modal-footer">
                                                   <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                                   <button class="btn btn-primary" type="submit">Ajouter</button>
                                              </div>

                                      </form>
                </div>
          </div>
  </div>
</div>