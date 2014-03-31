<!-- {{ Form::open(array('action' => 'HomeController@showContact', array('class' => 'form-horizontal', 'id' => 'contact-form'))) }}
              <div class="control-group">
                {{ Form::label('name', 'Name', array('class' => 'control-label')) }}
                <div class="controls">
                  {{ Form::text('name', null, array('class' => 'form-control input-lg', 'placeholder' => "Your name"))}}
                </div>
              </div>
              <div class="control-group">
                {{ Form::label('email', 'E-Mail Address', array('class' => 'control-label')) }}
                <div class="controls">
                  {{ Form::text('email', null, array('class' => 'form-control input-lg', 'placeholder' => "Your e-mail address"))}}
                </div>  
              </div>
              <div class="control-group">
                {{ Form::label('message', 'Message', array('class' => 'control-label')) }}
                <div class="controls">
                  Form::textarea('message', null, array('class' => 'form-control input-lg', 'rows' => '8'))}}
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-default btn-lg btn-block">Submit Message</button>
              </div>
            {{ Form::close() }} -->  
