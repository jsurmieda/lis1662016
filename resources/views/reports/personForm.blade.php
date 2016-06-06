
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">First Name<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!-- <input type="text" id="firstname" required="required" class="form-control col-md-7 col-xs-12">-->
      {!! Form::text('firstname',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="middlename">Middle Name <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!-- <input type="text" id="middlename" required="required" class="form-control col-md-7 col-xs-12">-->
      {!! Form::text('middlename',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastname">Last Name <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!-- <input type="text" id="lastname" required="required" class="form-control col-md-7 col-xs-12">-->
      {!! Form::text('lastname',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="suffix">Suffix <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!-- <input type="text" id="suffix" required="required" class="form-control col-md-7 col-xs-12">-->
      {!! Form::text('suffix',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!-- <input type="text" id="address" required="required" class="form-control col-md-7 col-xs-12"> -->
      {!! Form::text('address',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tribeName">Tribe <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!--<input type="text" id="tribeName" required="required" class="form-control col-md-7 col-xs-12">-->
      {!! Form::select('tribe_id', $tribes, null,['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rel_type">Relationship to the Case <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!--<input type="text" id="tribeName" required="required" class="form-control col-md-7 col-xs-12">-->
      {!! Form::select('rel_id', $relations, null,['class' => 'form-control']) !!}
    </div>
  </div>