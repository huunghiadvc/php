@extends("layouts.app")
@section("title", "Danh sách sản phẩm")
@section("content")
    <table class="table">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col" class="align-middle">Id</th>
                <th scope="col" class="align-middle col-3">Name</th>
                <th scope="col" class="align-middle">Price</th>
                <th scope="col" class="align-middle">Height</th>
                <th scope="col" class="align-middle">Length</th>
                <th scope="col" class="align-middle">Width</th>
                <th scope="col" class="align-middle">Base Unit</th>
                <th scope="col" class="align-middle">Producer</th>
                <th scope="col" class="align-middle">Quantity</th>
                <th scope="col" colspan="2" class="align-middle">Option</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr class="text-center">
                <td class="align-middle">{{ $product->id }}</td>
                <td class="align-middle"><a href="/dashboard/{{$product->id}}}">{{ $product->name }}</a></td>
                <td class="align-middle">{{ $product->price }}</td>
                <td class="align-middle">{{ $product->height }}</td>
                <td class="align-middle">{{ $product->length_col }}</td>
                <td class="align-middle">{{ $product->width }}</td>
                <td class="align-middle">{{ $product->base_unit }}</td>
                <td class="align-middle">{{ $product->producer }}</td>
                <td class="align-middle">{{ $product->quantity }}</td>
                <td class="align-middle"><a href="/dashboard/{{$product->id}}">Edit</a></td>
                <td class="align-middle">
                    <form action="{{ route('dashboard.destroy', ['id' => $product->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div style="display: flex; justify-content: center;">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
@endsection
