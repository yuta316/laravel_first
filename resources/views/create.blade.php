@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('contact.store')}}"> 
                    @csrf
                    <div class="form-group">
                    <label for='your_name'>NAME</label>
                    <input type="text"  class="form-control" id="your_name" name="your_name" value= <?php
                    if (!empty($_POST['your_name'])){print(h($_POST['your_name']));} ?>></div>
                    
                    <div class="form-group">
                    <label for='title'>Title</label>
                    <input type="text"  class="form-control" id="title" name="title" value= <?php
                    if (!empty($_POST['title'])){print(h($_POST['title']));} ?>></div>
                    
                    <div class="form-group">
                    <label for='email'>MailAdress</label>
                    <input type="email" class="form-control" id="email" name="email" value= <?php
                    if (!empty($_POST['email'])){print(h($_POST['email']));} ?>><br></div>

                    <div class="form-group">
                    <label for='url'>HOMEPAGE</label>
                    <input type="url" class="form-control" id="url" name="url" value= <?php
                    if(!empty($_POST['url'])){print(h($_POST['url'])); }?>><br></div>
                    
                    GENDER
                    <div class='form-check form-check-inline'>
                    <input type="radio" class='form-check-input' id='gender1' name="gender" value="2"
                    <?php if(!empty($_POST['gender']) && $_POST['gender'] === '2'){
                        print("checked");}?>><label class='form-check-label' for='gneder1'> MALE</label>
                    <input type="radio" class='form-check-input' id='gender2' name="gender" value="1"
                    <?php if(!empty($_POST['gender']) && $_POST['gender'] === '1'){
                        print("checked");}?>><label class='form-check-label' for='gneder2'> FEMALE</label></div>

                    <div class="form-group">
                    <label for='age'>AGE</label>
                    <select  calss='form-controll' id='age' name="age">
                    <option value="">Please Choose</option>
                    <option value="2" >~19</option>
                    <option value="3">20~29</option>
                    <option value="3">30~39</option>
                    <option value="4">40~49</option>
                    <option value="5">50~59</option>
                    <option value="6">60~</option>
                    </select></div>

                    <div class="form-group">
                    <label for='contact'>INQUIRY DATAILS</label><br>
                    <textarea class='form-cotrol' id='contact' row='3' name="contact">
                    <?php
                    if(!empty($_POST['contact'])){print(h($_POST["contact"])); }?>
                    </textarea></div>

                    <div class="form-check">
                    <input  class='form-check-input' type="checkbox" id='caution' name="caution" value="1">
                    <label class='form-check-label' for='caution'>CHECK</label>
                    </div>

                    <input type="submit" class='btn btn-info' name="btn_confirm" value="confirm">

                    </form>

                    </div>
                    </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
