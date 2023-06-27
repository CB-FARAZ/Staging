<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static find($id)
 * @method static findOrFail($id)
 * @method static create(array $array)
 * @property mixed $status
 * @property mixed $mode_of_service_charge
 * @property mixed $items_amount
 * @property mixed $packages_no
 * @property mixed $order_description
 * @property mixed $drop_off_location
 * @property mixed $pickup_location
 * @property mixed $customer_contact_no
 * @property mixed $customer_name
 * @property mixed $client_contact_no
 * @property mixed $client_name
 */
class Order extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'client_name',
        'client_contact_no',
        'customer_name',
        'customer_contact',
        'p_location',
        'd_location',
        'order_description',
        'packages_count',
        'package_price',
        'mode',
        'status',
    ];


}
