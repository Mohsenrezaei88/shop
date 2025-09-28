<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $address
 * @property string $pincode
 * @property string $lat
 * @property string $lng
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Address withoutTrashed()
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $product_id
 * @property string $name
 * @property string $value
 * @property string $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereValue($value)
 */
	class Attribute extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $created_at_shamsi
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereUpdatedAt($value)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int|null $product_id
 * @property string $url
 * @property string $file_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Image whereFileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Image whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Image whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Image whereUrl($value)
 */
	class Image extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int|null $user_id
 * @property string $session_id
 * @property string $sender
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $created_at_shamsi
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Support newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Support newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Support query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Support whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Support whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Support whereSender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Support whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Support whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Support whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Support whereUserId($value)
 */
	class Support extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $phonenumber
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $role_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Address> $addresses
 * @property-read int|null $addresses_count
 * @property-read \App\Models\cart|null $cart
 * @property-read mixed $created_at_shamsi
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\notification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\order> $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\Role|null $role
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhonenumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property string $attributes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $number
 * @property int|null $price
 * @property int|null $order_id
 * @property-read \App\Models\product $product
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart whereAttributes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|cart whereUserId($value)
 */
	class cart extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $image
 * @property-read mixed $created_at_shamsi
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|category query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|category whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|category whereUpdatedAt($value)
 */
	class category extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property int $user_id
 * @property string $text
 * @property string $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $status
 * @property-read mixed $created_at_shamsi
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|notification whereUserId($value)
 */
	class notification extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $shipping_method_id
 * @property int $address_id
 * @property string $name
 * @property string $phone
 * @property-read \App\Models\Address $address
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\cart> $carts
 * @property-read int|null $carts_count
 * @property-read mixed $created_at_shamsi_after_five_days
 * @property-read mixed $created_at_shamsi
 * @property-read \App\Models\shipping_method $shipping_method
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order whereShippingMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|order whereUserId($value)
 */
	class order extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property string $body
 * @property int $category_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $writer_id
 * @property string $image
 * @property-read \App\Models\category $category
 * @property-read mixed $created_at_shamsi
 * @property-read \App\Models\User|null $writer
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|post whereWriterId($value)
 */
	class post extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $image
 * @property int $public
 * @property string $Inventory
 * @property int $price
 * @property int|null $brand_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attribute> $attributes
 * @property-read int|null $attributes_count
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\category $category
 * @property-read mixed $created_at_shamsi
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product whereInventory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|product whereUpdatedAt($value)
 */
	class product extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $price
 * @property string $time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|shipping_method newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|shipping_method newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|shipping_method query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|shipping_method whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|shipping_method whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|shipping_method whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|shipping_method wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|shipping_method whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|shipping_method whereUpdatedAt($value)
 */
	class shipping_method extends \Eloquent {}
}

