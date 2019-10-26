@extends('layouts.auth')

@section('main-content')
<div class="container">
    <section class="">
        <div class="container-fluid">
            <h4 class="mt-0 text-primary">Client</h4>
            <div class="">
                <div class="">
                    <form class="form-inline">
                        <select class="form-control status">
                            <option value="All">All</option>
                            <option value="Completed">Completed</option>
                            <option value="Pending">Pending</option>
                            <option value="Active">Active</option>
                        </select>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table project-table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Company</th>
                                <th scope="col">Name</th>
                                <th scope="col">Project</th>
                                <th scope="col">Progress</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="py-2">
                                <td scope="row" class="rounded-left border border-right-0">
                                    <span class="text-small text-muted mr-2">
                                        <i class="fas fa-circle"></i>
                                    </span> 
                                    <span class="">Mar. 10, 2019</span>
                                </td>
                                <td class="border-top border-bottom titles">Naijacrawl</td>
                                <td class="border-top border-bottom">Adike Kizito</td>
                                <td class="border-top border-bottom text-right">Build App</td>
                                <td class="border-top border-bottom">
                                    <span class="alert alert-primary py-0 px-2 small m-0 pending">Pending</span>
                                </td>
                                <td class="rounded-right border border-left-0">
                                    <div class="dropdown dropleft">
                                        <a class="btn btn-white btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item text-success" href="#"><i class="fas fa-binoculars"></i> View</a>
                                            <a class="dropdown-item text-secondary" href="#"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-2">
                                <td scope="row" class="rounded-left border border-right-0">
                                    <span class="text-small text-muted mr-2">
                                        <i class="fas fa-circle"></i>
                                    </span> 
                                    <span class="">Mar. 10, 2019</span>
                                </td>
                                <td class="border-top border-bottom titles">Naijacrawl</td>
                                <td class="border-top border-bottom">Adike Kizito</td>
                                <td class="border-top border-bottom text-right">Build App</td>
                                <td class="border-top border-bottom">
                                    <span class="alert alert-primary py-0 px-2 small m-0 pending">Pending</span>
                                </td>
                                <td class="rounded-right border border-left-0">
                                    <div class="dropdown dropleft">
                                        <a class="btn btn-white btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item text-success" href="#"><i class="fas fa-binoculars"></i> View</a>
                                            <a class="dropdown-item text-secondary" href="#"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="py-2">
                                <td scope="row" class="rounded-left border border-right-0">
                                    <span class="text-small text-muted mr-2">
                                        <i class="fas fa-circle"></i>
                                    </span> 
                                    <span class="">Mar. 10, 2019</span>
                                </td>
                                <td class="border-top border-bottom titles">Naijacrawl</td>
                                <td class="border-top border-bottom">Adike Kizito</td>
                                <td class="border-top border-bottom text-right">Build App</td>
                                <td class="border-top border-bottom">
                                    <span class="alert alert-primary py-0 px-2 small m-0 pending">Pending</span>
                                </td>
                                <td class="rounded-right border border-left-0">
                                    <div class="dropdown dropleft">
                                        <a class="btn btn-white btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item text-success" href="#"><i class="fas fa-binoculars"></i> View</a>
                                            <a class="dropdown-item text-secondary" href="#"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div> 

@endsection