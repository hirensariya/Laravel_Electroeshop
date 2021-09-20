@if (Session::has('deleteproduct'))
    <script>
        alert('{{ Session::get('deleteproduct') }}');
    </script>
@endif

@extends('layout.adminlayout')
@section('content')
    <!-- table -->
    <div class="container-fluid" style="padding-top: 8rem">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Item no.</th>
                    <th scope="col">Product Id</th>
                    <th scope="col">Product image</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Product price</th>
                    <th scope="col">Product category</th>
                    <th scope="col">Product description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delet</th>
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
                            {{ $item->id }}
                        <td>
                            @foreach ($item->image as $collection)
                                @if ($loop->iteration <= 1)
                                    <img src="/image/{{ $collection }}" style="width: 40px" />
                                @endif
                            @endforeach
                        </td>
                        <td>
                            {{ $item->name }}
                        </td>
                        <td>
                            {{ $item->price }}
                        </td>
                        <td>
                            {{ $item->cat }}
                        </td>
                        <td>
                            {{ $item->dis }}
                        </td>
                        <td>
                            <a href="/admin/editproduct/{{ $item->id }}">Edit</a>
                        </td>
                        <td>
                            <a href="/admin/deletproduct/{{ $item->id }}" data-toggle="tooltip" title="delete"><img
                                    src="/assets/images/remove.svg" alt="" srcset="" style="width: 25px"></a>
                        </td>
                        </td>
                </tr>
                <?php $no++; ?>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
