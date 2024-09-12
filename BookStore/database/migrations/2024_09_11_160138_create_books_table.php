<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Publishers', function (Blueprint $table) {
            $table->string('publisherID')->primary();;
            $table->String('PublisherName');
            $table->timestamps();
        });
        Schema::create('Authors', function (Blueprint $table) {
            $table->string('authorID')->primary();;
            $table->String('authorName');
            $table->timestamps();
        });
        Schema::create('Categories', function (Blueprint $table) {
            $table->string('categoryID')->primary();;
            $table->String('categoryName');
            $table->timestamps();
        });
        Schema::create('Members', function (Blueprint $table) {
            $table->string('userID')->primary();;
            $table->String('name');
            $table->String('password');
            $table->String('email');
            $table->integer('phone');
            $table->String('address');
            $table->String('role');
            $table->timestamps();
        });
        Schema::create('Admins', function (Blueprint $table) {
            $table->string('adminID')->primary();;
            $table->String('name');
            $table->String('email');
            $table->String('password');
            $table->timestamps();
        });
        Schema::create('Orders', function (Blueprint $table) {
            $table->string('orderID')->primary();;
            $table->String('userID');
            $table->String('buyerName');
            $table->integer('phoneNumber');
            $table->String('address');
            $table->integer('totalAmount');
            $table->dateTime('orderDate');
            $table->String('status');
            $table->timestamps();
            $table->foreign('userID')->references('userID')->on('Users')->onDelete('cascade');
        });
        Schema::create('Reviews', function (Blueprint $table) {
            $table->string('reviewID')->primary();;
            $table->String('orderID');
            $table->String('content');
            $table->float('rating');
            $table->dateTime('reviewDate');
            $table->timestamps();
            $table->foreign('orderID')->references('orderID')->on('Orders')->onDelete('cascade');
        });
        Schema::create('OrderItem', function (Blueprint $table) {
            $table->string('orderItemID')->primary();;
            $table->String('orderID');
            $table->String('bookID');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('orderID')->references('orderID')->on('Orders')->onDelete('cascade');
            $table->foreign('bookID')->references('bookID')->on('Books')->onDelete('cascade');
        });
        Schema::create('Books', function (Blueprint $table) {
            $table->string('bookID')->primary();;
            $table->String('categoryID');
            $table->String('title');
            $table->String('authorID');
            $table->String('publisherID');
            $table->dateTime('publicationYear');
            $table->integer('price');
            $table->integer('stock');
            $table->string('desciption');
            $table->timestamps();
            $table->foreign('categoryID')->references('categoryID')->on('Categories')->onDelete('cascade');
            $table->foreign('authorID')->references('authorID')->on('Authors')->onDelete('cascade');
            $table->foreign('publisherID')->references('publisherID')->on('Publishers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Publishers');
        Schema::dropIfExists('Authors');
        Schema::dropIfExists('Categories');
        Schema::dropIfExists('Reviews');
        Schema::dropIfExists('OrderItem');
        Schema::dropIfExists('Members');
        Schema::dropIfExists('Admins');
        Schema::dropIfExists('Orders');
        Schema::dropIfExists('Books');
    }
};
