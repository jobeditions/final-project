<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>-->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ajouter une Catégorie</h4>
      </div>
          <div class="modal-body">
               <div class="form">
                                        
                                    <form action="{{route('categorie.store')}}" method="POST" class="form-horizontal" >
                                              {{csrf_field()}}

                                              
                                              <div class="col-sm-12">
                                                 <label class="control-label col-sm-1" for="name">Catégorie</label>
                                                 <input class="form-control" type="text" id="name" name="name">
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