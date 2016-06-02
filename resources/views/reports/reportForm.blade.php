  <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="receiptDate">Date Reported <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <!-- <input type="date" id="receiptDate" required="required" class="form-control col-md-7 col-xs-12"> -->
        {!! Form::date('receiptDate',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
      </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="casetypeName">Case type <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!--<input type="text" id="tribeName" required="required" class="form-control col-md-7 col-xs-12">-->
      {!! Form::select('casetype_id', $casetypes) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="infoSource">Information Source <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!-- <input type="text" id="infoSource" required="required" class="form-control col-md-7 col-xs-12">-->
      {!! Form::text('infoSource',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="incidentLocation">Incident Location <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!-- <input type="text" id="incidentLocation" required="required" class="form-control col-md-7 col-xs-12"> -->
      {!! Form::text('incidentLocation',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="incidentDate">Incident Date <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!-- <input type="date" id="incidentDate" required="required" class="form-control col-md-7 col-xs-12">-->
      {!! Form::date('incidentDate',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
    </div>
  </div>
  <div class="form-group">    
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="csc_name">Origin Office <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <!-- <input type="text" id="csc_name" required="required" class="form-control col-md-7 col-xs-12">-->
      {!! Form::select('originoffice_id', $offices) !!}
    </div>
  </div>
