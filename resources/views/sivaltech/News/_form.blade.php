
<div class="col-md-4">
               <div class="form-group @if($errors->first('types')) has-error @endif">
               {!!Form::label('types','Type *')!!}
               {!!Form::select('types', array('0'=>'Select','1'=>'News','2'=>'Events'),null, ['class' => 'form-control required','id'=>'types','name'=>'types',"notequal"=>"0"]) !!}
               <small class="text-danger">{{ $errors->first('types') }}</small>
               </div>
               </div>


 <div class="col-md-4">
  <div class="form-group @if($errors->first('news_heading')) has-error @endif">
   {!!Form::label('news_heading',' News Heading*')!!}
   {!!Form::text('news_heading',Input::old('news_heading'),['class' => 'form-control','id'=>'art_type',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a Heading","data-placement"=>"bottom",])!!}
   <small class="text-danger">{{ $errors->first('news_heading') }}</small>

 </div>
</div>
<div class="col-md-4">
  <div class="form-group">
   {!! Form::label('image', 'Attach Image') !!}
   {!! Form::input('file','image', null, ['class' => 'form-control',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Attach Image","data-placement"=>"bottom"]) !!}
   <small class="text-danger">{{ $errors->first('image') }}</small>
 </div>
</div>


  <div class="col-md-12">
    <div class="form-group"><label for="description">Description</label><textarea class="form-control" placeholder="Enter Description" name="news_description" id="news_description"></textarea></div>
  </div>




<div class="clearfix"></div>


<div class='clearfix'></div>
<div class="col-md-2 pull-right">
  <a href="{{URL::route('vidyaaarambha.news.index')}}">{!! Form::button('Cancel', ['class' => 'btn btn-block btn-danger btn-block','id'=>'clr-btn']) !!}</a>
</div>
<div class="col-md-2 pull-right">
  <div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-block btn-success btn-block']) !!}
  </div>
</div>


@section('script')
@parent
<script type="text/javascript">
  $(function(){
   
  });
</script>
@stop
