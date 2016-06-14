@extends('mainpage')

@section('content')

  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <h3>Add something new to your list</h3>
        <form role="form" id="contactForm">

          <div class="row">
            <div class="form-group col-sm-8">
              <label for="name" class="h4">Item</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Item" required>
            </div>

            <div class="form-group col-sm-4">
                <br />
                <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
            </div>
          </div>

          <hr>

          <h4>Items on list</h4>

          <div class="row">

              <div class="form-group col-sm-12 awhing">
                  <h3 class="col-sm-10">Milk</h3>
                  <div class="col-sm-1">
                    <button class="btn btn-success pull-right" title="I have got this item">&#10004;</button>
                  </div>
                  <div class="col-sm-1">
                    <button class="btn btn-danger pull-right" title="I no longer want this item">&#10006;</button>
                  </div>
              </div>

              <div class="form-group col-sm-12 awhing">
                  <h3 class="col-sm-10">Bread</h3>
                  <div class="col-sm-1">
                    <button class="btn btn-success pull-right" title="I have got this item">&#10004;</button>
                  </div>
                  <div class="col-sm-1">
                    <button class="btn btn-danger pull-right" title="I no longer want this item">&#10006;</button>
                  </div>
              </div>

              <div class="form-group col-sm-12">
                  <h3>Bread</h3>
              </div>

          </div>

        </form>
      </div>
    </div>

<style>
.col-sm-1   {
      margin-top: 15px;
}
.awhing {
    border-radius: 5px;
}
.awhing:hover {
    background-color: #C2E7E8;
 }

</style>

@stop
