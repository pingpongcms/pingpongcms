@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Show Tag
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('admin.tags.edit', $tag->id) !!}" class="btn btn-default">Edit</a>
                <a href="{!! route('admin.tags.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered">
            <tr>
                <td><b>ID</b></td>
                <td>{!! $tag->id !!}</td>
            </tr>

			<tr>
                <td><b>Name</b></td>
                <td>{!! $tag->name !!}</td>
            </tr>			<tr>
                <td><b>Description</b></td>
                <td>{!! $tag->description !!}</td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $tag->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop