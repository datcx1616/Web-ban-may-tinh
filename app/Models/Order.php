<?php

namespace App\Models;

use App\Enums\OrderStatus;
use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "userID",
        "fullname",
        "phone",
        "address",
        "total",
        "status",
        "note",
        "paymentstatus"
    ];

    public function getStatusStr() {
        switch ($this->status) {
            case OrderStatus::ORDER:
                return '<span class="badge badge-warning">Chờ Xác Nhận</span>';
            case OrderStatus::CANCEL_ORDER:
                return '<span class="badge badge-danger">Đã Hủy</span>';
            case OrderStatus::CONFIRM_ORDER:
                return '<span class="badge badge-info">Giao Hàng</span>';
            case OrderStatus::ORDER_SUCCESS:
                return '<span class="badge badge-success">Thành Công</span>';
            default:
                return 'Trạng thái không xác định';
        }
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'orderID', 'id');
    }

}