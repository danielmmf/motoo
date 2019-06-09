<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Store.
 */
$factory->define(App\Store::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductCategorie.
 */
$factory->define(App\ProductCategorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductSubCategorie.
 */
$factory->define(App\ProductSubCategorie::class, function ($faker) {
    return [
        'product_categorie_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        'store_id' => $faker->key,
        'product_sub_categorie_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Store.
 */
$factory->define(App\Store::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductCategorie.
 */
$factory->define(App\ProductCategorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductSubCategorie.
 */
$factory->define(App\ProductSubCategorie::class, function ($faker) {
    return [
        'product_categorie_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        'store_id' => $faker->key,
        'product_sub_categorie_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Store.
 */
$factory->define(App\Store::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductCategorie.
 */
$factory->define(App\ProductCategorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductSubCategorie.
 */
$factory->define(App\ProductSubCategorie::class, function ($faker) {
    return [
        'product_categorie_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        'store_id' => $faker->key,
        'product_sub_categorie_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Store.
 */
$factory->define(App\Store::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductCategorie.
 */
$factory->define(App\ProductCategorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductSubCategorie.
 */
$factory->define(App\ProductSubCategorie::class, function ($faker) {
    return [
        'product_categorie_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        'store_id' => $faker->key,
        'product_sub_categorie_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        '_id' => $faker->key,
        '_id' => $faker->key,
        'profile_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Profile.
 */
$factory->define(App\Profile::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Store.
 */
$factory->define(App\Store::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductCategorie.
 */
$factory->define(App\ProductCategorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductSubCategorie.
 */
$factory->define(App\ProductSubCategorie::class, function ($faker) {
    return [
        'product_categorie_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        'store_id' => $faker->key,
        'product_sub_categorie_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        '_id' => $faker->key,
        '_id' => $faker->key,
        'profile_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Profile.
 */
$factory->define(App\Profile::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Store.
 */
$factory->define(App\Store::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductCategorie.
 */
$factory->define(App\ProductCategorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductSubCategorie.
 */
$factory->define(App\ProductSubCategorie::class, function ($faker) {
    return [
        'product_categorie_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        'store_id' => $faker->key,
        'product_sub_categorie_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        '_id' => $faker->key,
        '_id' => $faker->key,
        'profile_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Profile.
 */
$factory->define(App\Profile::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Store.
 */
$factory->define(App\Store::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductCategorie.
 */
$factory->define(App\ProductCategorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductSubCategorie.
 */
$factory->define(App\ProductSubCategorie::class, function ($faker) {
    return [
        'product_categorie_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        'store_id' => $faker->key,
        'product_sub_categorie_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        '_id' => $faker->key,
        '_id' => $faker->key,
        'profile_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Store.
 */
$factory->define(App\Store::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductCategorie.
 */
$factory->define(App\ProductCategorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductSubCategorie.
 */
$factory->define(App\ProductSubCategorie::class, function ($faker) {
    return [
        'product_categorie_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        'store_id' => $faker->key,
        'product_sub_categorie_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Store.
 */
$factory->define(App\Store::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductCategorie.
 */
$factory->define(App\ProductCategorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductSubCategorie.
 */
$factory->define(App\ProductSubCategorie::class, function ($faker) {
    return [
        'product_categorie_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        'store_id' => $faker->key,
        'product_sub_categorie_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Store.
 */
$factory->define(App\Store::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductCategorie.
 */
$factory->define(App\ProductCategorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\ProductSubCategorie.
 */
$factory->define(App\ProductSubCategorie::class, function ($faker) {
    return [
        'product_categorie_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        'store_id' => $faker->key,
        'product_sub_categorie_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Campaign.
 */
$factory->define(App\Campaign::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        'campaign_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Campaign.
 */
$factory->define(App\Campaign::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        'campaign_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Campaign.
 */
$factory->define(App\Campaign::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        'campaign_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Campaign.
 */
$factory->define(App\Campaign::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        'campaign_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Campaign.
 */
$factory->define(App\Campaign::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        'campaign_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Campaign.
 */
$factory->define(App\Campaign::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        'campaign_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Campaign.
 */
$factory->define(App\Campaign::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        'campaign_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Campaign.
 */
$factory->define(App\Campaign::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        'campaign_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Campaign.
 */
$factory->define(App\Campaign::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        'campaign_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Campaign.
 */
$factory->define(App\Campaign::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Quiz.
 */
$factory->define(App\Quiz::class, function ($faker) {
    return [
        'campaign_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Survey.
 */
$factory->define(App\Survey::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Categorie.
 */
$factory->define(App\Categorie::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'categorie_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Category.
 */
$factory->define(App\Category::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'category_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Category.
 */
$factory->define(App\Category::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'category_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Category.
 */
$factory->define(App\Category::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'category_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Category.
 */
$factory->define(App\Category::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'category_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Category.
 */
$factory->define(App\Category::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'category_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Category.
 */
$factory->define(App\Category::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'category_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Category.
 */
$factory->define(App\Category::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'category_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Category.
 */
$factory->define(App\Category::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'category_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Address.
 */
$factory->define(App\Address::class, function ($faker) {
    return [
        'user_id' => $faker->key,
        'manufacturer_id' => $faker->key,
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'group_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Group.
 */
$factory->define(App\Group::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Category.
 */
$factory->define(App\Category::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Content.
 */
$factory->define(App\Content::class, function ($faker) {
    return [
        'category_id' => $faker->key,
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Manufacturer.
 */
$factory->define(App\Manufacturer::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Tag.
 */
$factory->define(App\Tag::class, function ($faker) {
    return [
        'product_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Coupon.
 */
$factory->define(App\Coupon::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Attach.
 */
$factory->define(App\Attach::class, function ($faker) {
    return [
        'user_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Driver.
 */
$factory->define(App\Driver::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Car.
 */
$factory->define(App\Car::class, function ($faker) {
    return [
        'company_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Company.
 */
$factory->define(App\Company::class, function ($faker) {
    return [
        // Fields here
    ];
});
