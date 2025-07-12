{{--
	@include('Form::custom.form_custom', [
        'has_full' => true,
        'name' => 'list',
        'value' => $data['list'] ?? [],
        'label' => 'Cấu hình Demo',
        'generate' => [
            [ 'type' => 'image', 'name' => 'image', 'size' => 'Ảnh có kích thước '.'XXXxXXX', ],
            [ 'type' => 'custom', 'generate' => [
                    [ 'type' => 'text', 'name' => 'text_1', 'placeholder' => 'Tiêu đề', ],
                    [ 'type' => 'text', 'name' => 'text_2', 'placeholder' => 'Link', ],
                ]
            ],
            [ 'type' => 'textarea', 'name' => 'textarea', 'placeholder' => 'Mô tả', ],
        ],
    ]);
--}}
@php
	$slug = str_slug($name);
@endphp
<div class="mb-3 @if(isset($has_full) && $has_full == false) row @endif" style="position: relative;">
	<label @if($has_full == false) class="col-md-2 col-form-label" @endif>@lang($label??'')</label>
	@if($has_full == false)
        <div class="col-md-10">
    @endif
		<div class="table-form">
			<table class="table-form__table" border="1">
				<tbody>
					@if (isset($generate) && !empty($generate))
						@php
							$first_field_name = '';
							if ($generate[0]['type'] == 'custom') {
								$first_field_name = $generate[0]['generate'][0]['name'] ?? '';
							} else {
								$first_field_name = $generate[0]['name'] ?? '';
							}
						@endphp
						@if (isset($value[$first_field_name]) && !empty($value[$first_field_name]))
							@for ($j = 0; $j < count($value[$first_field_name]); $j++)
								<tr>
									@for ($i = 0; $i < count($generate); $i++)
										@switch($generate[$i]['type'] ?? '')

											@case('image')
												@php
													$image_name = $slug.'_'.$generate[$i]['name'].'_'.$j;
												@endphp
										        <td class="table-form__table-image">
													<div class="custom-image image-box image-box-{{ $image_name }}" action="select-image">
														<input type="hidden" class="image-data" name="{{ $name ?? '' }}[{{ $generate[$i]['name'] ?? '' }}][]" id="input-{{ $image_name ?? '' }}" value="{{ $value[$generate[$i]['name'] ?? ''][$j] ?? '' }}">
														<div style="width: 8rem" class="preview-image-wrapper mb-1">
															<div class="preview-image-inner">
																<a data-bb-toggle="image-picker-choose" data-target="popup" class="image-box-actions" data-result="{{ $image_name }}"
																	data-action="select-image" data-allow-thumb="1" href="#">
																	<img class="preview-image default-image"
																		data-default="/vendor/core/core/base/img/placeholder.png"
																		src="{{ !empty($value[$generate[$i]['name'] ?? ''][$j]) ? RvMedia::getImageUrl($value[$generate[$i]['name'] ?? ''][$j]) : '/vendor/core/core/base/img/placeholder.png' }}" alt="{{ trans('Core::base.preview_image') }}">
																	<span class="image-picker-backdrop"></span>
																</a>
																<button class="btn btn-pill btn-icon  btn-sm image-picker-remove-button p-0"
																	 type="button" data-bb-toggle="image-picker-remove"
																	data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Remove image">
																	<svg class="icon m-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																		stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
																		<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
																		<path d="M18 6l-12 12"></path>
																		<path d="M6 6l12 12"></path>
																	</svg>
																</button>
															</div>
														</div>
														<a data-bb-toggle="image-picker-choose" data-target="popup" data-result="{{ $image_name }}" data-action="select-image"
															data-allow-thumb="1" href="#">
															{{ trans('Core::forms.choose_image') }}
														</a>
														<div data-bb-toggle="upload-from-url">
															<span class="text-muted">{{ trans('media::media.or') }}</span>
															<a href="javascript:void(0)" class="mt-1" data-bs-toggle="modal" data-bs-target="#image-picker-add-from-url"
																data-bb-target=".image-box-{{ $image_name }}">
																{{ trans('media::media.add_from_url') }}
															</a>
														</div>
													</div>
													<p class="help-text">@lang($generate[$i]['size'] ?? '')</p>
												</td>
									        @break

											@case('text')
												<td class="table-form__table-text">
													<input class="table-form__control" type="text" name="{{ $name ?? '' }}[{{ $generate[$i]['name'] ?? '' }}][]" placeholder="@lang($generate[$i]['placeholder'] ?? '')" value="{{ $value[$generate[$i]['name'] ?? ''][$j] ?? '' }}">
												</td>
											@break

											@case('date')
												<td class="table-form__table-date">
													<input class="table-form__control" type="date" name="{{ $name ?? '' }}[{{ $generate[$i]['name'] ?? '' }}][]" placeholder="@lang($generate[$i]['placeholder'] ?? '')" value="{{ $value[$generate[$i]['name'] ?? ''][$j] ?? '' }}">
												</td>
											@break

											@case('textarea')
												<td class="table-form__table-textarea">
													<textarea class="table-form__control" name="{{ $name ?? '' }}[{{ $generate[$i]['name'] ?? '' }}][]" placeholder="@lang($generate[$i]['placeholder'] ?? '')">{{ $value[$generate[$i]['name'] ?? ''][$j] ?? '' }}</textarea>
												</td>
									        @break

									        @case('custom')
												<td class="table-form__table-custom">
													@if (isset($generate[$i]['generate']) && !empty($generate[$i]['generate']))
														@for ($c = 0; $c < count($generate[$i]['generate']); $c++)
															@php
																$child_item = $generate[$i]['generate'][$c];
															@endphp
															@switch($child_item['type'] ?? '')
																@case('image')
																	@php
																		$image_name = $slug.'_'.$child_item['name'].'_'.$j;
																	@endphp
																	<div class="custom-image image-box image-box-{{ $image_name }}" action="select-image">
																		<input type="hidden" class="image-data" name="{{ $name ?? '' }}[{{ $child_item['name'] ?? '' }}][]" id="input-{{ $image_name ?? '' }}" value="{{ $value[$child_item['name'] ?? ''][$j] ?? '' }}">
																		<div style="width: 8rem" class="preview-image-wrapper mb-1">
																			<div class="preview-image-inner">
																				<a data-bb-toggle="image-picker-choose" data-target="popup" class="image-box-actions" data-result="{{ $image_name }}"
																					data-action="select-image" data-allow-thumb="1" href="#">
																					<img class="preview-image default-image"
																						data-default="/vendor/core/core/base/img/placeholder.png"
																						src="{{ !empty($value[$child_item['name'] ?? ''][$j] ?? '') ? RvMedia::getImageUrl($value[$child_item['name'] ?? ''][$j]) : '/vendor/core/core/base/img/placeholder.png' }}" alt="{{ trans('Core::base.preview_image') }}">
																					<span class="image-picker-backdrop"></span>
																				</a>
																				<button class="btn btn-pill btn-icon  btn-sm image-picker-remove-button p-0"
																					 type="button" data-bb-toggle="image-picker-remove"
																					data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Remove image">
																					<svg class="icon m-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																						stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
																						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
																						<path d="M18 6l-12 12"></path>
																						<path d="M6 6l12 12"></path>
																					</svg>
																				</button>
																			</div>
																		</div>
																		<a data-bb-toggle="image-picker-choose" data-target="popup" data-result="{{ $image_name }}" data-action="select-image"
																			data-allow-thumb="1" href="#">
																			{{ trans('Core::forms.choose_image') }}
																		</a>
																		<div data-bb-toggle="upload-from-url">
																			<span class="text-muted">{{ trans('media::media.or') }}</span>
																			<a href="javascript:void(0)" class="mt-1" data-bs-toggle="modal" data-bs-target="#image-picker-add-from-url"
																				data-bb-target=".image-box-{{ $image_name }}">
																				{{ trans('media::media.add_from_url') }}
																			</a>
																		</div>
																	</div>
														        @break

																@case('text')
																	<input class="table-form__control" type="text" name="{{ $name ?? '' }}[{{ $child_item['name'] ?? '' }}][]" placeholder="@lang($child_item['placeholder'] ?? '')" value="{{ $value[$child_item['name'] ?? ''][$j] ?? '' }}">
																@break

																@case('date')
																	<input class="table-form__control" type="date" name="{{ $name ?? '' }}[{{ $child_item['name'] ?? '' }}][]" placeholder="@lang($child_item['placeholder'] ?? '')" value="{{ $value[$child_item['name'] ?? ''][$j] ?? '' }}">
																@break

																@case('textarea')
																	<textarea class="table-form__control" name="{{ $name ?? '' }}[{{ $child_item['name'] ?? '' }}][]" placeholder="@lang($child_item['placeholder'] ?? '')">{{ $value[$child_item['name'] ?? ''][$j] ?? '' }}</textarea>
														        @break

															@endswitch
														@endfor
													@endif
												</td>
									        @break

										@endswitch
									@endfor
									<td class="table-form__table-action">
										<button type="button" class="bg-danger delete"><i class="fas fa-trash"></i></button>
										<span type="button" class="bg-default"><i class="fas fa-sort"></i></span>
									</td>
								</tr>
							@endfor
						@endif
					@endif
					<tr class="thead">
						@if (isset($has_full) && $has_full == false)
							<td colspan="{{ count($generate ?? []) + 1 }}"><button type="button" class="add add_{{ $slug ?? '' }}"><i class="fas fa-plus"></i></button></td>
						@else
							{{-- <td colspan="{{ count($generate ?? []) }}"><p>@lang($label??'')</p></td> --}}
							<td colspan="{{ count($generate ?? [])+1 }}"><button type="button" class="add add_{{ $slug ?? '' }}"><i class="fas fa-plus"></i></button></td>
						@endif
					</tr>
				</tbody>
			</table>
		</div>
	@if($has_full == false)
        </div>
    @endif
</div>
