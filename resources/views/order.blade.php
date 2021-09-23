@extends('layout.layout')
@section('content')
    <?php $no = 1; ?>
    <div class="container-fluid" style="padding-top:8rem">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Payment id</th>
                    <th scope="col">Product id</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Product quantaty</th>
                    <th scope="col">Product price</th>
                    <th scope="col">Customer name</th>
                    <th scope="col">Customer phone</th>
                    <th scope="col">Customer address</th>
                    <th scope="col">Customer address2</th>
                    <th scope="col">Customer City</th>
                    <th scope="col">Customer Districe</th>
                    <th scope="col">Customer Zip/Postcode</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($res as $item)

                        <th scope="row">
                            {{ $no }}
                        </th>
                        <td>
                            {{ $item->payid }}
                        <td>
                            {{ $item->pid }}
                        </td>
                        <td>
                            {{ $item->pname }}
                        </td>
                        <td>
                            {{ $item->pqty }}
                        </td>
                        <td>
                            {{ $item->pprice }}
                        </td>
                        <td>
                            {{ $item->oname }}
                        </td>
                        <td>
                            {{ $item->ophone }}
                        </td>
                        <td>
                            {{ $item->oaddress }}
                        </td>
                        <td>
                            {{ $item->oaddress2 }}
                        </td>
                        <td>
                            {{ $item->ocity }}
                        </td>
                        <td>
                            {{ $item->odistric }}
                        </td>
                        <td>
                            {{ $item->ozip }}
                        </td>
                        <td>
                            {{ $item->date }}
                        </td>
                        </td>
                </tr>
                <?php $no++; ?>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    </div>

    </div>
@endsection
