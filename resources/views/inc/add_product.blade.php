

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div id="ErroMsg">

        <ul type="none"><li ></li></ul>
           

        </div>

        <div id="successMes">
           

        </div>
       
       
        

       <form action="{{route('add.product')}}" method="post" id="addproduct">
         @csrf
         <div class="form">
           <label for="">Product Name</label>
           <input  type="text" name="pname" id="pname" >
         </div>

         <div class="form mt-3">
           <label for="">Product price</label>
           <input type="text" name="price" id="price" >
         </div>
         
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_product">Save product</button>
      </div>
    </div>
  </div>
</div>