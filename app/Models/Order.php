<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
  /**
   * ORDER ATTRIBUTES
   * $this->attributes['id'] - int - contains the order primary key (id)
   * $this->attributes['total'] - string - contains the order name
   * $this->attributes['user_id'] - int - contains the referenced user id
   * $this->attributes['created_at'] - timestamp - contains the order creation date
   * $this->attributes['updated_at'] - timestamp - contains the order update date
   * $this->user - User - contains the associated User
   * $this->items - Item[] - contains the associated items
   */
    public function validate($request) {
      $request->$this->validate([
        'total' => 'required|numeric',
        'user_id' => 'required|exists:users,id'
      ]);
    }

    public function getId() {
      return $this->attributes['id'];
    }
    public function setId($id) {
      $this->atributes['id'] = $id;
    }
    public function getTotal()
    {
      return $this->attributes['total'];
    }
    public function setTotal($total)
    {
      $this->attributes['total'] = $total;
    }
    public function getUserId()
    {
      return $this->attributes['user_id'];
    }
    public function setUserId($userId)
    {
      $this->attributes['user_id'] = $userId;
    }
    public function getCreatedAt()
    {
      return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
      $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
      return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
      $this->attributes['updated_at'] = $updatedAt;
    }
    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function getUser()
    {
      return $this->user;
    }
    public function setUser($user)
    {
      $this->user = $user;
    }

    /*Relationship Order Model*/
    public function items()
    {
      return $this->hasMany(Items::class);
    }
    public function getItems()
    {
      return $this->items;
    }
    public function setItems($items)
    {
      $this->items = $items;
    }
}
