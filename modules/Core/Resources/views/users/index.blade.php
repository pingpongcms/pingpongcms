@extends('core::layouts.master')

@section('content')

<div ng-controller="UsersController">
	
    <!-- Main content -->
    <section class="content">
    	<!-- Default box -->
    	<div class="box">
    		<div class="box-header with-border">
    			<h3 class="box-title">Users</h3>
    			<div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-toggle="modal" data-target="#modalAdd" title="Add New"><i class="fa fa-plus"></i></button>
                    <button class="btn btn-box-tool" ng-click="fetchData()" title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr ng-repeat="user in users">
                            <td>@{{ user.name }}</td>
                            <td>@{{ user.email }}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-default btn-sm" data-toggle="modal" href="#modalShow@{{ user.id }}"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-default btn-sm" data-toggle="modal" href="#modalEdit@{{ user.id }}"><i class="fa fa-edit"></i></a>
                                    <a data-toggle="modal" class="btn btn-default btn-sm" href="#modalDelete@{{ user.id }}"><i class="fa fa-times"></i></a>
                                </div>
{{-- Modal Delete --}}
<div class="modal fade" id="modalDelete@{{ user.id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete User</h4>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure want to delete this user?
                </p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" ng-click="delete(user.id)" class="btn btn-delete-user btn-danger">Delete</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{{-- End of Model Delete --}}

{{-- Modal Show --}}
<div class="modal fade" id="modalShow@{{ user.id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Show User</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <td><b>Profile Picture:</b></td>
                        <td>
                            <img ng-src="@{{ user.gravatar_url }}" alt="@{{ user.name }}" class="img-responsive">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Name:</b></td>
                        <td>@{{ user.name }}</td>
                    </tr>
                    <tr>
                        <td><b>Username:</b></td>
                        <td>@{{ user.username }}</td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td>@{{ user.email }}</td>
                    </tr>
                    <tr>
                        <td><b>Status:</b></td>
                        <td>@{{ user.confirmed ? 'Confirmed' : 'Unconfirmed' }}</td>
                    </tr>
                    <tr>
                        <td><b>Registered At:</b></td>
                        <td>@{{ user.created_at }}</td>
                    </tr>
                    <tr>
                        <td><b>Last Updated At:</b></td>
                        <td>@{{ user.updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- End of Modal Show --}}

{{-- Modal Edit --}}
<div class="modal fade" id="modalEdit@{{ user.id }}">
    <div class="modal-dialog">
            <form class="formEdit@{{user.id}}">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit User</h4>
            </div>
            <div class="modal-body">
                <div class="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input value="@{{ user.name }}" type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input value="@{{ user.username }}" type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input value="@{{ user.email }}" type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" ng-click="update(user.id)" class="btn btn-update-user btn-primary">Save</button>
            </div>
        </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{{-- End of Modal Edit --}}
                            </td>
                        </tr>
                    </tbody>       
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer">

            </div><!-- /.box-footer-->
        </div><!-- /.box -->
    </section>

    {{-- Modal Add --}}
    <div class="modal fade" id="modalAdd">
        <div class="modal-dialog">
            <form class="form-add">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New User</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" ng-click="resetForm('.form-add')" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" ng-click="store()" class="btn btn-store-user btn-primary">Save</button>
                </div>
            </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- Modal Add --}}
</div>

@stop

@section('script')
<script type="text/javascript">
    window.Cms.controllers.UsersController = function ($scope, $http) {
        $scope.users = [];

        $scope.all = function () {
            return $http.get(BASE_URL + 'api/users');
        }

        $scope.latest = function () {
            return $http.get(BASE_URL + 'api/users?orderBy=created_at&sortedBy=desc');
        }

        $scope.fetchData = function () {
            $scope.latest().then(function (response, status) {
                $scope.users = response.data;
            }, function (response, status) {
                alert('Error!');
            });
        }

        $scope.fetchData();

        $scope.getFormData = function (form) {
            return {
                name: $(form + ' #name').val(),
                email: $(form + ' #email').val(),
                username: $(form + ' #username').val(),
                password: $(form + ' #password').val()
            };
        }

        $scope.store = function () {
            var formData = $scope.getFormData('.form-add');
            var modal = $('#modalAdd');
            var btn = $('.btn-store-user');

            btn.button('loading');

            $http.post(BASE_URL + 'api/users', formData)
            .then(function (response, status) {
                if (response.data.errors) {
                    $scope.showErrors(response.data.errors, '.form-add');
                } else {
                    modal.modal('hide');
                    $scope.resetForm();
                    $scope.fetchData();
                }
                btn.button('reset');
            });
        }

        $scope.showErrors = function (errors, form) {
            $.each(errors, function (i, v) {
                var input = $(form + ' #'+i);
                input.parent().find('div.text-danger').remove();
                input.after('<div class="text-danger">'+v+'</div>');
            });
        }

        $scope.resetForm = function (form) {
            $(form+' #name').val('');
            $(form+' #email').val('');
            $(form+' #password').val('');
            $(form+' #username').val('');
        }

        $scope.update = function (id) {
            var modal = $('#modalEdit'+id);
            var form = '.formEdit'+id;
            var formData = $scope.getFormData(form);
            var btn = $('.btn-update-user');

            btn.button('loading');

            $http.put(BASE_URL + 'api/users/'+id, formData)
            .then(function (response) {
                if (response.data.errors) {
                    $scope.showErrors(response.data.errors, form);
                } else {
                    modal.modal('hide');
                    $scope.fetchData();
                }

                btn.button('reset');
            });
        }

        $scope.delete = function (id) {
            var modal = $('#modalDelete'+id);
            var btn = $('.btn-delete-user');
            btn.button('loading');
            $http.delete(BASE_URL + 'api/users/'+id)
            .then(function (response) {
                modal.modal('hide');
                $scope.fetchData();
                btn.button('reset');
            });
        }

        $scope.show = function (id) {
            $http.get(BASE_URL + 'api/users/'+id)
            .then(function (response) {
                modal.modal('hide');
                $scope.fetchData();
            });
        }
    }
</script>
@stop