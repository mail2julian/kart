@inject('request', 'Illuminate\Http\Request')
@extends('serviceprovider.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.product-tags.title')</h3>
    
    
    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($product_tags) > 0 ? 'datatable' : '' }} @can('product_tag_delete') dt-select @endcan">
                <thead>
                    <tr>
                        
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        

                        <th>@lang('quickadmin.product-tags.fields.name')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($product_tags) > 0)
                        @foreach ($product_tags as $product_tag)
                            <tr data-entry-id="{{ $product_tag->id }}">
                               
                                    <td></td>
                               

                                <td field-key='name'>{{ $product_tag->name }}</td>
                                                                <td>
                                    
                                    <a href="{{ route('product_tags.show',[$product_tag->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    
                                    <a href="{{ route('product_tags.edit',[$product_tag->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    
                                   {{--   {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['product_tags.destroy', $product_tag->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}  --}}
                                    
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        
            window.route_mass_crud_entries_destroy = '{{ route('product_tags.mass_destroy') }}';
        

    </script>
@endsection