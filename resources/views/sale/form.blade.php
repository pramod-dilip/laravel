<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('Name', null, array('class' => 'form-control')) !!}
            </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                <strong>Mobile:</strong>
                {!! Form::text('Mobile', null, array('placeholder' => 'Mobile','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>