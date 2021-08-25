<style>
    .table td,
    .table th
    {
        font-size: 1.2rem;
        text-align: center;
        font-family: Roboto
    }
    .btn.m-btn--custom{
        font-family: Roboto
    }
</style>
<div class="m-grid__item m-grid__item--fluid m-wrapper" >
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        View User
                    </h3>
                </div>

            </div>
        </div>
        <div class="m-content">

            <div class="row">
                <div class="col-xl-12">
                    <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Table User
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item">
                                        <button type="submit" class="btn m-btn--pill  text-dark  btn-metal" onclick="loadPage('{{route('api.userAdd')}}','GET','Changing',1,0);">
                                           Add User
                                        </button>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin: Datatable -->
                            <div  id="m_datatable_latest_orders">

                            <table class="table table-hover" >
                                <thead class="bg-secondary">
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Role
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allData as $key => $value)
                                <tr>
                                    <th>
                                        {{$key+1}}
                                    </th>

                                    <td>
                                        @if($value->usertype != "")
                                            {{$value->usertype}}
                                        @else
                                            ------
                                        @endif
                                    </td>
                                    <td>
                                        {{$value->name}}
                                    </td>
                                    <td>
                                        {{$value->email}}
                                    </td>
                                    <td>
                                        <button type="button" class="btn m-btn--pill    btn-warning m-btn m-btn--custom"
                                                onclick="loadPage('{{route('api.editeUser',$value->id)}}','GET','Changing',1,0);">

                                            Edite
                                        </button>
                                        <button type="button" class="btn m-btn--pill    btn-danger m-btn m-btn--custom"
                                                onclick="loadPage('{{route('api.deleteUser',$value->id)}}','GET','Changing',1,0);">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            </div>
{{--                        {{$allData->links()}}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


