@extends('layouts.app')
@section('content')
<center>
    <font face="San-serif" size="6"><b>Payment</b></font>
</center>
<section style="margin-left:300px;margin-right:300px">
    <div class="card">
        <div class="card-header" style="background-color:#85A9FF;color:white">Student Information</div>
        <div class="row row-cols-1">
            <div class="card-body col-2" style="margin-left:20px">
                <p>Full Name</p>
                <p>NIS</p>
                <p>Class</p>
                <p>Semester</p>
                <p>Parents Name</p>
            </div>
            <div class="card-body col-1"style="margin-left:100px">
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
            </div>
            <div class="card-body col-5" style="margin-right:100px">
                <p>Amanda Aurellie Utami</p>
                <p>5012067</p>
                <p>X IPA</p>
                <p>2</p>
                <p>Muhammad Budi Utomo</p>
            </div>
        </div>
        <div class="d-grid gap-2" style="width:20%;margin-left:auto;margin-right:30px">
            <a href="PaymentNow-Murid.php">
                <button type="submit" class="btn btn-primary" id="payment" name="payment">Pay Now</button>
            </a>
        </div>
        <br><br>
    </div>
</section>
@endsection
