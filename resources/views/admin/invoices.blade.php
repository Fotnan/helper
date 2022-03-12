@extends('admin.layouts.layouts');

@section('content')
    <section class="content-header">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Maksmata arved</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Objekt Nr.</th>
                            <th>Nimetus</th>
                            <th>Aadress</th>
                            <th>Arve kuupäev</th>
                            <th>Maksmise kuupäev</th>
                            <th>Arve summa</th>
                            <th>Makstud summa</th>
                            <th>Võlg</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($items as $item)
                            @if($item->debt>0)

                            <tr>
                                @foreach($objects as $object)
@if($object==$item->object)
                                <td>{{$item->object}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->adress}}</td>
                                <td>{{$item->make_at}}</td>
                                <td>{{$item->paid_at}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->paid}}</td>
                                <td>{{$item->debt}}</td>
                                    @endif
                                @endforeach
                            </tr>


                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Viimase aasta arved ja maksmine</h3>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Objekt Nr.</th>
                            <th>Nimetus</th>
                            <th>Aadress</th>
                            <th>Arve kuupäev</th>
                            <th>Maksmise kuupäev</th>
                            <th>Arve summa</th>
                            <th>Makstud summa</th>
                            <th>Võlg</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            @foreach($objects as $object)
                            @if($object==$item->object)
                        <tr>
                            <td>{{$item->object}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->adress}}</td>
                            <td>{{$item->make_at}}</td>
                            <td>{{$item->paid_at}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->paid}}</td>
                            <td>{{$item->debt}}</td>
                        </tr>
                            @endif
                            @endforeach
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Objekt Nr.</th>
                            <th>Nimetus</th>
                            <th>Aadress</th>
                            <th>Arve kuupäev</th>
                            <th>Maksmise kuupäev</th>
                            <th>Arve summa</th>
                            <th>Makstud summa</th>
                            <th>Võlg</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>

        </div>

        </div>

    </section>

    </div>

        </div><!-- /.container-fluid -->
    </section>
@endsection

