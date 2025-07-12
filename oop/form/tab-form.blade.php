 {{-- @case('tab')
        @include('Form::base.tab', [
            'label' => $item['label'],
            'list_tab' => $item['list_tab'],
            'list_class' => $item['list_class'],
            'has_full' => $item['has_full'],
        ])
  @break --}}
 
<div class="row tab">
    @if($has_full == false)
        <label for="tab" class="col-md-2 col-form-label">{!! $label !!}</label>
        <div class="col-lg-10">
    @endif
    @if(isset($list_tab) && is_array($list_tab))
		<ul class="tab-list">
            @foreach($list_tab as $key => $value)
			    <li class="tab-list__item @if($key == 0) active @endif" data-active="{{ $list_class[$key]??'' }}">{!! $value??'' !!}</li>
            @endforeach
		</ul>
    @endif
    {{-- Content tab --}}
    <div class="tab-content tab-content__{{ $item['class'] }}">
        {{-- Content --}}
    </div>

@if ($item['has_full'] == false)
    </div>
@endif

<script>
    $(document).ready(function(){
        var class_active = $('.tab-list__item.active').data('active');
        $('.tab .tab-content').removeClass('active');
        $('.tab .tab-content__'+class_active).addClass('active');
        
        $('.tab-list__item').on('click', function(){
            var class_active = $(this).data('active');
            $('.tab-list__item').removeClass('active');
            $(this).addClass('active');
            $('.tab .tab-content').removeClass('active');
            $('.tab .tab-content__'+class_active).addClass('active');
        });
    });
</script>

@case('endTab')
       @if ($item['has_full'] == false)
            </div>
        @endif
    @break

@case('contentTab')
    <div class="tab-content tab-content__{{ $item['class'] }}">
@break

@case('endContentTab')
    </div>
@break