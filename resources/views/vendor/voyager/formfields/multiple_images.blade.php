<br>
@if(isset($dataTypeContent->{$row->field}))
    <?php $images = json_decode($dataTypeContent->{$row->field}); ?>
    @if($images != null)
        @foreach($images as $image)
          <div class="image-tool-box" data-field-name="{{ $row->field }}" >
            <img
                 src="{{ Voyager::image( $image ) }}"
                 data-image="{{ $image }}"
             data-id="{{ $dataTypeContent->id }}"
             />
            <div class="image-tools">
              <i class="glyphicon glyphicon-remove remove-multi-image" title="Remove image"></i>
            </div>
         </div>
        @endforeach
    @endif
@endif
<div class="clearfix"></div>
<input @if($row->required == 1) required @endif type="file" data-name="{{ $row->display_name }}"  name="{{ $row->field }}[]" multiple="multiple">
