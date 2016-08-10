<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addressbook extends Model
{
    protected $table = 'addressbook';

    protected $fillable = ['address_title','contact_name','contact_phone','address1','address2','address3','pincode','city','state', 'country' ];


}
