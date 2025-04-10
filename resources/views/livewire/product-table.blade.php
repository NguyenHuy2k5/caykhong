<div class="flex flex-col gap-4">
    <input wire:model.live="search" class="input grow" placeholder="Tìm kiếm " name="search">
    <table class="table table-zebra border border-gray-400">
        <tr>
            <th>STT</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá bán</th>
        </tr>
        @foreach($products as $product)
            <tr wire:key="{{$product->productCode}}">
                <td>{{$loop->iteration}}</td>
                <td>{{$product->productCode}}</td>
                <td>{{$product->productName}}</td>
                <td>{{$product->quantityInStock}}</td>
                <td>{{$product->MSRP}}</td>
            </tr>
        @endforeach
    </table>
    <div class="my-3">
        {{ $products->links() }}
    </div>
</div>