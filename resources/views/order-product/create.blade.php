<x-bootstrap-theme>

    <div class="container">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New OrderProduct</div>
                    <div class="card-body">
                        <a href="{{ url('/order-product') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/order-product') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('order-product.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-bootstrap-theme>
