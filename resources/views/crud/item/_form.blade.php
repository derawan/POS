  {!! Form::open(['route' => Session::get('table').'.store', 'id'=> 'create_'.Session::get('table')]) !!}
      @csrf
      
      <h4 class="form-section"><i class="la la-eye"></i>Add  {{ Session::get('table') }}</h4>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="location2"> Main Category:
                <a href="#" data-toggle="modal" data-target="#add_main_category_modal"> <div class="badge badge-success"> +Add </div> </a>
              </label>
              <select class="custom-select form-control" id="category_id" >
                <option value="1">item 1</option>
                <option value="1">item 2</option>
                <option value="1" selected="">item 4</option>
              </select>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label for="location2"> Sub Category :
                <a href="#" data-toggle="modal" data-target="#add_sub_category_modal"> <div class="badge badge-success"> +Add </div> </a>
              </label>
              <select class="custom-select form-control" id="sub_category_id" name="sub_category_id">
                <option value="1">item 1</option>
                <option value="1">item 2</option>
                <option value="1" selected="">item 3</option>
                <option value="1">item 4</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="userinput4" class="form-control border-success" placeholder="Item Name" name="name" value="Cat_new">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="number" id="userinput3" class="form-control border-success" placeholder="Item Price" name="price" value="123">
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="location3"> Item Description </label>
              <textarea class="form-control" name="desc" id="desc_id" cols="28" rows="5" placeholder="item Description"> SOme Desc </textarea>
            </div>
          </div>
          <div class="col-md-6">
            <label for="location3">Select Item Image:</label>
            <div class="form-group">
              <input type="file" id="userinput3" class="form-control border-primary" name="img">
            </div>
          </div>
        </div>
  
        <div class="modal-footer">
          <button type="button" class="btn box-shadow-1 round btn-outline-blue-grey grey" data-dismiss="modal">Close</button>
          <button type="button" id="{{ Session::get('table') }}_submit_btn" class="btn box-shadow-1 round btn-outline-success">Save</button>
        </div>

  {!! Form::close() !!}