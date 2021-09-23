@extends('layout.adminlayout')
@section('content')
    <!-- table -->
    <div class="container-fluid" style="padding-top: 8rem">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                ?>
                <tr>
                    @foreach ($res as $item)

                        <th scope="row">
                            {{ $no }}
                        </th>
                        <td>
                            {{ $item->name }}
                        <td>
                            {{ $item->email }}
                        </td>
                        <td>
                            {{ $item->subject }}
                        </td>
                        <td>
                            {{ $item->message }}
                        </td>
                        <td>
                            {{ $item->created_at }}
                        </td>
                        </td>
                </tr>
                <?php $no++; ?>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
