<?php

namespace App\Controllers;

class Devices extends BaseController
{
    public function index()
    {
        return view('Device');
    }
}
abstract class Device
{

    private $nama;
    private $brand;
    public $quantity;
    public $status;

    public function __construct($id, $nama, $brand, $quantity, $status)
    {
        $this->nama = $nama;
        $this->brand = $brand;
        $this->quantity = $quantity;
        $this->status = $status;
    }

    /// Methods
    function get_nama()
    {
        return $this->nama;
    }
    function get_brand()
    {
        return $this->brand;
    }
    function get_quantity()
    {
        return $this->quantity;
    }
    function get_status()
    {
        return $this->status;
    }
}
