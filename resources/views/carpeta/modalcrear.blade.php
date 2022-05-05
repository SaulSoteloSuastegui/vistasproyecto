<!-- Modal -->
<div class="modal fade" id="crearcarpeta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carpeta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/action_page.php" style="padding:20px;">
  <div class="form-group">
    <label for="email">Antecedente:</label>
    <input type="text" class="form-control" placeholder="Carpeta" id="email">
  </div>

  <div class="form-group">
    <label for="email">Carpeta:</label>
    <input type="text" class="form-control" placeholder="Carpeta" id="email">
  </div>
  
  <div class="form-group">
    <label for="email">Tipo de juzgado:</label>
    <input type="text" class="form-control" placeholder="Carpeta" id="email">
  </div>


  <div class="form-group">
    <label for="pwd">Distrito:</label>
    <input type="text" class="form-control" placeholder="Numero inv" id="pwd">
  </div>

 
  <a  href="{{route('carpeta.crear')}}" type="submit" class="btn btn-primary">Submit</a>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>