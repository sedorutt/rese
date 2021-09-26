@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row margin-top">
    <div class="card-body">
      <ul class="text-center">
        <li class="menu-list">
          <a href="{{ route('home') }}" class="menu-item">Home</a>
        </li>
        @auth
        <li class="menu-list">
          <a href={{ route('logout') }} onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" class="menu-item">
              Logout
          </a>
          <form id='logout-form' action={{ route('logout')}} method="POST">
              @csrf
          </form>
        </li>
        <li class="menu-list">
          <a href="{{ route('mypage') }}" class="menu-item">Mypage</a>
        </li>
        @else
        <li class="menu-list">
          <a href="{{ route('register') }}" class="menu-item">Registration</a>
        </li>
        <li class="menu-list">
          <a href="{{ route('login') }}" class="menu-item">Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</div>

@endsection

<style scoped>
  .text-center{
    text-align: center;
  }
  .menu-item{
    color: blue;
    font-size: 20px;
    font-weight: bold;
  }
  .menu-list{
    margin-bottom: 20px;
    list-style: none;
  }
  .margin-top {
     margin: 100px auto ;
  }
</style>