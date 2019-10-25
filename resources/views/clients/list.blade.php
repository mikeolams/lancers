@extends('layouts.auth')

@section('main-content')
<section class="">
    <div class="container-fluid">
        <br/>
        <h4 class="mt-0 text-primary">Clients</h4>

        <div class="">
            <div class="">
                <form class="form-inline" style="display: inline-block">
                    <select  class="form-control" id="select-filter">
                        
                        <option value="all" @if (Request()->filter) {{ 'selected' }} @endif >All</option>
                        <option value="pending" @if (Request()->filter && Request()->filter == 'pending') {{ 'selected' }} @endif>Pending</option>
                        <option value="completed" @if (Request()->filter && Request()->filter == 'completed') {{ 'selected' }} @endif>Completed</option>
                    </select>
                </form>
                &nbsp;  <a href="{{url('clients/add')}}">    <button class='create-invoice' style="height:40px!important;border-radius: 4px 4px "> <span class="fa fa-plus"> </span> Add New Client</button> </a>

            </div>
            <div class="table-responsive">
                <table class="table project-table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Company</th>
                            <th scope="col">Name</th>
                            <th scope="col">Project</th>
                            <th  scope="col">Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                        <tr class="py-2">
                            <td scope="row" class="rounded-left border border-right-0">
                                <span class="text-small text-muted mr-2">
                                    <i class="fas fa-circle"></i>
                                </span> 
                                <span class="">{{date('d/m/Y', strtotime($client->created_at))}}</span>
                            </td>
                            <td class="border-top border-bottom titles">No Image(coming soon)</td>
                            <td class="border-top border-bottom ">{{$client->name}}</td>

                            <td class="border-top border-bottom">
                                @forelse($client->projects as $project)
                                {{ $loop->first ? '' : ', ' }}
                                {{$project->title}}
                                @empty
                                No Project Yet
                                @endforelse
                            </td>

                            <td class="border-top border-bottom">
                                <span class="alert alert-primary py-0 px-2 small m-0 pending">
                                    @forelse($client->projects as $project)
                                    {{ $loop->first ? '' : ', ' }}
                                    {{$project->status}}
                                    @empty
                                    Not Available
                                    @endforelse
                                </span>
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


                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection


@section('others')
<button class="btn btn-secondary text-white rounded-circle" id="add-something">
    <i class="fas fa-plus"></i>
</button>
@endsection

@section('script')
<script>
    alert(11);
    let select = document.querySelector('#select_status');
    console.log(select);
    select.addEventListener('change', function () {
        this.form.submit();
    }, false);

    let selectClients = document.querySelector('tr');
    selectClients.addEventListener('change', function () {
        // console.log('change here')
        // this.form.action = "/projects?status="+selectStatus.value;
        // this.form.submit();
        for(client of selectClients){
            if (client!=selectClient[0]){
                window.location.href = "/clients?client=" + client.title;
            };
        }
    }, false)
</script>
@endsection


@section('script')
    <script>
        let selectStatus = document.querySelector('#select-filter');
        selectStatus.addEventListener('change', function(){
            if(selectStatus.value == 'all') window.location.href="/clients";
            else window.location.href="/clients?filter="+selectStatus.value;
        }, false)
    </script>
@endsection
