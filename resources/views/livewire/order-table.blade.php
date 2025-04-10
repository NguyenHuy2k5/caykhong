<div class="flex flex-col gap-4">
    <input wire:model.live="search" class="input grow" placeholder="Tìm kiếm " name="search">
    <select wire:model.live="limit" class="select select-ghost">
        <option name="limit" selected>5</option>
        <option name="limit">10</option>
        <option name="limit">15</option>
    </select>
    <table class="table table-zebra border border-gray-400">
        <tr>
            <th>STT</th>
            <th>Số hóa đơn</th>
            <th>Ngày hóa đơn</th>
            <th>Ngày yêu cầu</th>
            <th>Ngày chuyển</th>
            <th>Trạng thái</th>
            <th>Tin nhắn</th>
            <th>Số khách hàng</th>
        </tr>
        @foreach($orders as $order)
        <tr wire:key="{{$order->orderNumber}}">
            <td>{{$loop->iteration}}</td>
            <td>{{$order->orderNumber}}</td>
            <td>{{$order->orderDate}}</td>
            <td>{{$order->requiredDate}}</td>
            <td>{{$order->shippedDate}}</td>
            <td>{{$order->status}}</td>
            <td>{{$order->comments}}</td>
            <td>{{$order->customerNumber }}</td>
        </tr>
        @endforeach
    </table>
    <div class="my-3">
        {{ $orders->links() }}
    </div>
</div>