<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="navbar bg-primary text-primary-content">
    <button class="btn btn-ghost text-xl">daisyUI</button>
</div>
{{--<div class="p-10">--}}
{{--    <h1>Sản phẩm</h1>--}}

{{--    <form class="my-3">--}}
{{--        <div class="flex items-center">--}}
{{--            <input class="input grow" placeholder="Tìm kiếm" name="search">--}}
{{--            <button class="btn btn-primary" type="submit">Tìm</button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--    <table class="table table-zebra border border-gray-400">--}}
{{--        <tr>--}}
{{--            <th>STT</th>--}}
{{--            <th>Mã sản phẩm</th>--}}
{{--            <th>Tên sản phẩm</th>--}}
{{--            <th>Số lượng</th>--}}
{{--            <th>Giá bán</th>--}}
{{--        </tr>--}}

{{--        @foreach($products as $product)--}}
{{--            <tr>--}}
{{--                <td>{{$loop->iteration}}</td>--}}
{{--                <td>{{$product->productCode}}</td>--}}
{{--                <td>{{$product->productName}}</td>--}}
{{--                <td>{{$product->quantityInStock}}</td>--}}
{{--                <td>{{$product->MSRP}}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}
{{--    <div class="my-3">--}}
{{--        {{ $products->links() }}--}}
{{--    </div>--}}
{{--</div>--}}

<hr/>

<div class="p-10">
    <livewire:product-table></livewire:product-table>
</div>
<div class="p-10">
    <livewire:order-table></livewire:order-table>
</div>

</body>
</html>