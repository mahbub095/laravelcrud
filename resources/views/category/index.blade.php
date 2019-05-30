@extends('layouts.backend')

@section('content')
    <h3>Category Check</h3>


    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Modify</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as $cat)
        <tr>
            <td>{{$cat->title}}</td>
            <td>{{$cat->description}}</td>


            <td>
                {{--script also same info id--}}

                <button class="btn btn-info" data-mytitle="{{$cat->title}}"
                        data-mydescrition="{{$cat->description}}" data-catid="{{$cat->id}}" data-toggle="modal" data-target="#edit"> Edit
                </button>
                <button class="btn btn-info"> Delete</button>
            </td>

        </tr>
        </tbody>
        @endforeach
    </table>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add New
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {{--Click See Form Field--}}

                <form action="{{route('category.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">

                        @include('category.form')

                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{{--Modal Copy For Edit Update Button--}}

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {{--Click See Form Field--}}

                <form action="{{route('category.update','test')}}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <div class="modal-body">

                        {{--use for update--}}

                        <input type="hidden" name="category_id" id="cat_id" value="{{--{{$category->id}}--}}">
                        @include('category.form')

                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection