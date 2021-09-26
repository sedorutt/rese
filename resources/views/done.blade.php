@extends('layouts.app')
@section('content')

<div class="header">
  <h2><a href="{{ route('menu') }}">Rese</a></h2>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="card">
      <div class="card-body">
        <p>ご予約ありがとうございます</p>
        <a href="{{ route('mypage') }}">
          <button type="button" class="btn btn-primary">
            戻る
          </button>
        </a>
      </div>
    </div>
  </div>         
</div>

@endsection

<style scoped>
  .card{
    width:60%;
    height: 200px;
    text-align: center;
    margin: 100px auto ;
  }
  .card-body{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width:100%;
  }
  .card-body p {
    margin-bottom: 30px;
  }
</style>
